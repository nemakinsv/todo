<?php

/*
 * Copyright (C) 2014 stasisimo
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301  USA
 */

use Tygh\Http;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');

}
if (defined('PAYMENT_NOTIFICATION')) {

    $order_id_payler = $_REQUEST['order_id'];

    if (preg_match('/^[0-9_|]*$/', $order_id_payler)) {

        $order_id = substr($order_id_payler, 0, strpos($order_id_payler, '|'));

        $payment_id = db_get_field("SELECT payment_id FROM ?:orders WHERE order_id = ?i", $order_id);

        $processor_data = fn_get_payment_method_data($payment_id);

        if ($mode == 'result') {
            $data = array (
                'key' => $processor_data['processor_params']['key'],
                'order_id' => $order_id_payler
            );
            if ($processor_data['processor_params']['mode'] == 'test') {
                $url = "https://sandbox.payler.com/gapi/";
            } else {
                $url = "https://secure.payler.com/gapi/";
            }

            $extra = array(
                'headers' => array(
                    'Content-type: application/x-www-form-urlencoded',
                    'Cache-Control: no-cache',
                    'charset="utf-8"',
                ),
                'timeout' => PAYLER_TIMEOUT,
            );

            $get_status_url = $url . "GetStatus";

            $result = Http::post($get_status_url, $data, $extra);

            $result = json_decode($result, TRUE);

            $order_info = fn_get_order_info($order_id);

            $pp_response = array();

            if (!empty($result['status']) && $result['status'] == 'Charged') {// && $result['amount']/100 ==  $order_info['total']) {
                $pp_response['order_status'] = 'P';
                $pp_response['reason_text'] = __('transaction_approved');
            } else {
                $pp_response['order_status'] = 'F';
                $pp_response['reason_text'] = __('transaction_declined');
            }

            fn_finish_payment($order_id, $pp_response);
            fn_order_placement_routines('route', $order_id);
        }
    }
} else {

    if ($processor_data['processor_params']['mode'] == 'test') {
        $url = "https://sandbox.payler.com/gapi/";
    } else {
        $url = "https://secure.payler.com/gapi/";
    }
    $_order_id = ($order_info['repaid']) ? ($order_id . '_' . $order_info['repaid']) : $order_id;

    $product = __('text_payler_payment_for_order', array(
        '[order_id]' => $order_id,
        '[store]' => Registry::get('config.current_location'),
    ));

    $data = array (
        'key' => $processor_data['processor_params']['key'],
        'type' => 'Pay',
        'order_id' => $_order_id.'|'.time(),
        'amount' => 100 * fn_format_price_by_currency($order_info['total'], CART_PRIMARY_CURRENCY, 'RUB'),
        'product' => $product,
        'vendor_id' => 1001
    );

    $extra = array(
        'headers' => array(
            'Content-type: application/x-www-form-urlencoded',
            'Cache-Control: no-cache',
            'charset="utf-8"',
        ),
        'timeout' => PAYLER_TIMEOUT,
    );

    $start_url = $url . "StartSession";

    $session_data = Http::post($start_url, $data , $extra);

    $session_data = json_decode($session_data, TRUE);

    $session_id = $session_data['session_id'];

    $post = array();

    $post['session_id'] = $session_id;

    $pay_url = $url . "Pay";

    fn_create_payment_form($pay_url, $post, 'Payler', false);
}

exit;
