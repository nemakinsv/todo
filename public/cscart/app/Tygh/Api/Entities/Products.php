<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Api\Entities;

use Tygh\Enum\ProductFeatures;
use Tygh\Api\AEntity;
use Tygh\Api\Response;
use Tygh\Registry;

class Products extends AEntity
{
    public function index($id = 0, $params = array())
    {
        $status = Response::STATUS_OK;
        $lang_code = $this->getLanguageCode($params);
        $params['extend'][] = 'categories';

        if (fn_allowed_for('MULTIVENDOR')) {
            $vendor_id = $this->safeGet($params, 'company_id', null);
            if ($vendor_id) {
                Registry::set('runtime.vendor_id', $vendor_id);
            }
        }

        if ($this->getParentName() == 'categories') {
            $parent_category = $this->getParentData();
            $params['cid'] = $parent_category['category_id'];
        }

        if (!empty($id)) {
            $data = fn_get_product_data($id, $this->auth, $lang_code, '', true, true, true, false, false, false, false);

            if (empty($data)) {
                $status = Response::STATUS_NOT_FOUND;
            } else {
                $data['selected_options'] = $this->safeGet($params, 'selected_options', []);
                $products = $this->getProductsAdditionalData(array($data), $params);
                $data = reset($products);
            }

        } else {
            $items_per_page = $this->safeGet($params, 'items_per_page', Registry::get('settings.Appearance.admin_elements_per_page'));
            list($products, $search) = fn_get_products($params, $items_per_page, $lang_code);

            $products = $this->getProductsAdditionalData($products, $params);

            $data = array(
                'products' => array_values($products),
                'params'   => $search,
            );
        }

        return array(
            'status' => $status,
            'data'   => $data,
        );
    }

    public function create($params)
    {
        $data = array();
        $valid_params = true;
        $status = Response::STATUS_BAD_REQUEST;
        unset($params['product_id']);

        if (empty($params['category_ids'])) {
            $data['message'] = __('api_required_field', array(
                '[field]' => 'category_ids'
            ));
            $valid_params = false;
        }

        if (!isset($params['price'])) {
            $data['message'] = __('api_required_field', array(
                '[field]' => 'price'
            ));
            $valid_params = false;
        }

        if ($valid_params) {

            if (!is_array($params['category_ids'])) {
                $params['category_ids'] = fn_explode(',', $params['category_ids']);
            }

            $this->prepareFeature($params);
            $this->prepareImages($params);
            $product_id = fn_update_product($params);

            if ($product_id) {
                $status = Response::STATUS_CREATED;
                $data = array(
                    'product_id' => $product_id,
                );
            }
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function update($id, $params)
    {
        $data = array();
        $status = Response::STATUS_BAD_REQUEST;

        $lang_code = $this->getLanguageCode($params);
        $this->prepareFeature($params);
        $this->prepareImages($params, $id);

        $product_id = fn_update_product($params, $id, $lang_code);

        if ($product_id) {
            $status = Response::STATUS_OK;
            $data = array(
                'product_id' => $product_id
            );
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function delete($id)
    {
        $data = array();
        $status = Response::STATUS_BAD_REQUEST;

        if (!fn_product_exists($id)) {
            $status = Response::STATUS_NOT_FOUND;
        } elseif (fn_delete_product($id)) {
            $status = Response::STATUS_NO_CONTENT;
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function privileges()
    {
        return array(
            'create' => 'manage_catalog',
            'update' => 'manage_catalog',
            'delete' => 'manage_catalog',
            'index'  => 'view_catalog'
        );
    }

    public function privilegesCustomer()
    {
        return array(
            'index' => true
        );
    }

    public function childEntities()
    {
        return array(
            'features',
            'discussions',
        );
    }

    public function prepareImages($params, $product_id = 0, $object_name = '', $main_type = 'M')
    {
        if (isset($params['main_pair'])) {

            $_REQUEST['file_product_main_image_icon'] = array();
            $_REQUEST['type_product_main_image_icon'] = array();
            $_REQUEST['file_product_main_image_detailed'] = array();
            $_REQUEST['type_product_main_image_detailed'] = array();
            $_REQUEST['product_main_image_data'] = array();

            if ($product_id != 0) {
                $products_images = fn_get_image_pairs($product_id, 'product', 'M', true, true, DEFAULT_LANGUAGE);
                if (!empty($products_images)) {
                    fn_delete_image_pair($products_images['pair_id']);
                }
            }

            if (!empty($params['main_pair']['detailed']['image_path'])) {
                $_REQUEST['file_product_main_image_detailed'][] = $params['main_pair']['detailed']['image_path'];
                $_REQUEST['type_product_main_image_detailed'][] = (strpos($params['main_pair']['detailed']['image_path'], '://') === false) ? 'server' : 'url';
            }

            if (!empty($params['main_pair']['icon']['image_path'])) {
                $_REQUEST['file_product_main_image_icon'][] = $params['main_pair']['icon']['image_path'];
                $_REQUEST['type_product_main_image_icon'][] = (strpos($params['main_pair']['icon']['image_path'], '://') === false) ? 'server' : 'url';
            }

            $_REQUEST['product_main_image_data'][] = array(
                'pair_id' => 0,
                'type' => 'M',
                'object_id' => 0,
                'image_alt' => !empty($params['main_pair']['icon']['alt']) ? $params['main_pair']['icon']['alt'] : '',
                'detailed_alt' => !empty($params['main_pair']['detailed']['alt']) ? $params['main_pair']['detailed']['alt'] : '',
            );
        }

        if (isset($params['image_pairs'])) {

            $_REQUEST['file_product_add_additional_image_icon'] = array();
            $_REQUEST['type_product_add_additional_image_icon'] = array();
            $_REQUEST['file_product_add_additional_image_detailed'] = array();
            $_REQUEST['type_product_add_additional_image_detailed'] = array();
            $_REQUEST['product_add_additional_image_data'] = array();

            if ($product_id != 0) {
                $additional_images = fn_get_image_pairs($product_id, 'product', 'A', true, true, DEFAULT_LANGUAGE);
                foreach ($additional_images as $pair) {
                    fn_delete_image_pair($pair['pair_id']);
                }
            }

            foreach ($params['image_pairs'] as $pair_id => $pair) {

                if (!empty($pair['icon']['image_path'])) {
                    $_REQUEST['file_product_add_additional_image_icon'][] = $pair['icon']['image_path'];
                    $_REQUEST['type_product_add_additional_image_icon'][] = (strpos($pair['icon']['image_path'], '://') === false) ? 'server' : 'url';
                }

                if (!empty($pair['detailed']['image_path'])) {
                    $_REQUEST['file_product_add_additional_image_detailed'][] = $pair['detailed']['image_path'];
                    $_REQUEST['type_product_add_additional_image_detailed'][] = (strpos($pair['detailed']['image_path'], '://') === false) ? 'server' : 'url';
                }

                $_REQUEST['product_add_additional_image_data'][] = array(
                    'position' => !empty($pair['position']) ? $pair['position'] : 0,
                    'pair_id' => 0,
                    'type' => 'A',
                    'object_id' => 0,
                    'image_alt' => !empty($pair['icon']['alt']) ? $pair['icon']['alt'] : '',
                    'detailed_alt' => !empty($pair['detailed']['alt']) ? $pair['detailed']['alt'] : '',
                );
            }
        }
    }

    public function prepareFeature(&$params)
    {
        if (!empty($params['product_features'])) {
            $features = $params['product_features'];
            $params['product_features'] = array();

            foreach ($features as $feature_id => $feature) {
                if (!empty($feature['feature_type'])) {
                    if (in_array($feature['feature_type'], [ProductFeatures::TEXT_SELECTBOX, ProductFeatures::NUMBER_SELECTBOX, ProductFeatures::EXTENDED])) {
                        $params['product_features'][$feature_id] = $feature['variant_id'];

                    } elseif (in_array($feature['feature_type'], [ProductFeatures::NUMBER_FIELD, ProductFeatures::DATE])) {
                        $params['product_features'][$feature_id] = $feature['value_int'];

                    } elseif ($feature['feature_type'] === ProductFeatures::MULTIPLE_CHECKBOX) {
                        foreach ($feature['variants'] as $variant) {
                            $params['product_features'][$feature_id][] = $variant['variant_id'];
                        }

                    } elseif ($feature['feature_type'] === ProductFeatures::TEXT_FIELD) {
                        $params['product_features'][$feature_id] = $feature['value'];
                        $params['add_new_variant'][$feature_id]['variant'] = $feature['value'];
                    } else { // SINGLE_CHECKBOX
                        $params['product_features'][$feature_id] = $feature['value'];
                    }

                } else {
                    $params['product_features'][$feature_id] = $feature;
                }
            }
        }
    }

    /**
     * Fetches products additional data
     *
     * @param array $products Array of products
     * @param array $params   Array of parameters
     *
     * @return mixed
     */
    protected function getProductsAdditionalData($products, $params)
    {
        $params['get_options'] = $this->safeGet($params, 'get_options', false);
        $params['get_features'] = $this->safeGet($params, 'get_features', true);
        $params['get_detailed'] = $this->safeGet($params, 'get_detailed', true);
        $params['get_icon'] = $this->safeGet($params, 'get_icon', true);
        $params['get_additional'] = $this->safeGet($params, 'get_additional', true);
        $params['detailed_params'] = $this->safeGet($params, 'detailed_params', false);
        $params['features_display_on'] = 'A';

        fn_gather_additional_products_data($products, $params);

        return $products;
    }
}
