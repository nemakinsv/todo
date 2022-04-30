<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3743f590ee1efbb40a385c9082d95e67
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YooKassa\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YooKassa\\' => 
        array (
            0 => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'YooKassa\\Client' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Client.php',
        'YooKassa\\Client\\ApiClientInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Client/ApiClientInterface.php',
        'YooKassa\\Client\\BaseClient' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Client/BaseClient.php',
        'YooKassa\\Client\\CurlClient' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Client/CurlClient.php',
        'YooKassa\\Client\\UserAgent' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Client/UserAgent.php',
        'YooKassa\\Common\\AbstractEnum' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/AbstractEnum.php',
        'YooKassa\\Common\\AbstractObject' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/AbstractObject.php',
        'YooKassa\\Common\\AbstractPaymentRequest' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/AbstractPaymentRequest.php',
        'YooKassa\\Common\\AbstractPaymentRequestBuilder' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/AbstractPaymentRequestBuilder.php',
        'YooKassa\\Common\\AbstractRequest' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/AbstractRequest.php',
        'YooKassa\\Common\\AbstractRequestBuilder' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/AbstractRequestBuilder.php',
        'YooKassa\\Common\\Exceptions\\ApiConnectionException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/ApiConnectionException.php',
        'YooKassa\\Common\\Exceptions\\ApiException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/ApiException.php',
        'YooKassa\\Common\\Exceptions\\AuthorizeException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/AuthorizeException.php',
        'YooKassa\\Common\\Exceptions\\BadApiRequestException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/BadApiRequestException.php',
        'YooKassa\\Common\\Exceptions\\EmptyPropertyValueException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/EmptyPropertyValueException.php',
        'YooKassa\\Common\\Exceptions\\ExtensionNotFoundException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/ExtensionNotFoundException.php',
        'YooKassa\\Common\\Exceptions\\ForbiddenException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/ForbiddenException.php',
        'YooKassa\\Common\\Exceptions\\InternalServerError' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/InternalServerError.php',
        'YooKassa\\Common\\Exceptions\\InvalidPropertyException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/InvalidPropertyException.php',
        'YooKassa\\Common\\Exceptions\\InvalidPropertyValueException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/InvalidPropertyValueException.php',
        'YooKassa\\Common\\Exceptions\\InvalidPropertyValueTypeException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/InvalidPropertyValueTypeException.php',
        'YooKassa\\Common\\Exceptions\\InvalidRequestException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/InvalidRequestException.php',
        'YooKassa\\Common\\Exceptions\\JsonException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/JsonException.php',
        'YooKassa\\Common\\Exceptions\\NotFoundException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/NotFoundException.php',
        'YooKassa\\Common\\Exceptions\\ResponseProcessingException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/ResponseProcessingException.php',
        'YooKassa\\Common\\Exceptions\\TooManyRequestsException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/TooManyRequestsException.php',
        'YooKassa\\Common\\Exceptions\\UnauthorizedException' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/Exceptions/UnauthorizedException.php',
        'YooKassa\\Common\\HttpVerb' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/HttpVerb.php',
        'YooKassa\\Common\\LoggerWrapper' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/LoggerWrapper.php',
        'YooKassa\\Common\\ResponseObject' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Common/ResponseObject.php',
        'YooKassa\\Helpers\\Config\\ConfigurationLoader' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Helpers/Config/ConfigurationLoader.php',
        'YooKassa\\Helpers\\Config\\ConfigurationLoaderInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Helpers/Config/ConfigurationLoaderInterface.php',
        'YooKassa\\Helpers\\Random' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Helpers/Random.php',
        'YooKassa\\Helpers\\RawHeadersParser' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Helpers/RawHeadersParser.php',
        'YooKassa\\Helpers\\StringObject' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Helpers/StringObject.php',
        'YooKassa\\Helpers\\TypeCast' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Helpers/TypeCast.php',
        'YooKassa\\Helpers\\UUID' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Helpers/UUID.php',
        'YooKassa\\Model\\Airline' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Airline.php',
        'YooKassa\\Model\\AirlineInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/AirlineInterface.php',
        'YooKassa\\Model\\AmountInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/AmountInterface.php',
        'YooKassa\\Model\\AuthorizationDetails' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/AuthorizationDetails.php',
        'YooKassa\\Model\\AuthorizationDetailsInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/AuthorizationDetailsInterface.php',
        'YooKassa\\Model\\CancellationDetails' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/CancellationDetails.php',
        'YooKassa\\Model\\CancellationDetailsInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/CancellationDetailsInterface.php',
        'YooKassa\\Model\\CancellationDetailsPartyCode' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/CancellationDetailsPartyCode.php',
        'YooKassa\\Model\\CancellationDetailsReasonCode' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/CancellationDetailsReasonCode.php',
        'YooKassa\\Model\\ConfirmationAttributes\\AbstractConfirmationAttributes' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ConfirmationAttributes/AbstractConfirmationAttributes.php',
        'YooKassa\\Model\\ConfirmationAttributes\\ConfirmationAttributesCodeVerification' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesCodeVerification.php',
        'YooKassa\\Model\\ConfirmationAttributes\\ConfirmationAttributesDeepLink' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesDeepLink.php',
        'YooKassa\\Model\\ConfirmationAttributes\\ConfirmationAttributesEmbedded' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesEmbedded.php',
        'YooKassa\\Model\\ConfirmationAttributes\\ConfirmationAttributesExternal' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesExternal.php',
        'YooKassa\\Model\\ConfirmationAttributes\\ConfirmationAttributesFactory' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesFactory.php',
        'YooKassa\\Model\\ConfirmationAttributes\\ConfirmationAttributesQr' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesQr.php',
        'YooKassa\\Model\\ConfirmationAttributes\\ConfirmationAttributesRedirect' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ConfirmationAttributes/ConfirmationAttributesRedirect.php',
        'YooKassa\\Model\\ConfirmationType' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ConfirmationType.php',
        'YooKassa\\Model\\Confirmation\\AbstractConfirmation' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Confirmation/AbstractConfirmation.php',
        'YooKassa\\Model\\Confirmation\\ConfirmationCodeVerification' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Confirmation/ConfirmationCodeVerification.php',
        'YooKassa\\Model\\Confirmation\\ConfirmationDeepLink' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Confirmation/ConfirmationDeepLink.php',
        'YooKassa\\Model\\Confirmation\\ConfirmationEmbedded' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Confirmation/ConfirmationEmbedded.php',
        'YooKassa\\Model\\Confirmation\\ConfirmationExternal' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Confirmation/ConfirmationExternal.php',
        'YooKassa\\Model\\Confirmation\\ConfirmationFactory' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Confirmation/ConfirmationFactory.php',
        'YooKassa\\Model\\Confirmation\\ConfirmationQr' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Confirmation/ConfirmationQr.php',
        'YooKassa\\Model\\Confirmation\\ConfirmationRedirect' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Confirmation/ConfirmationRedirect.php',
        'YooKassa\\Model\\CurrencyCode' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/CurrencyCode.php',
        'YooKassa\\Model\\Leg' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Leg.php',
        'YooKassa\\Model\\LegInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/LegInterface.php',
        'YooKassa\\Model\\Metadata' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Metadata.php',
        'YooKassa\\Model\\MonetaryAmount' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/MonetaryAmount.php',
        'YooKassa\\Model\\NotificationEventType' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/NotificationEventType.php',
        'YooKassa\\Model\\NotificationType' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/NotificationType.php',
        'YooKassa\\Model\\Notification\\AbstractNotification' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Notification/AbstractNotification.php',
        'YooKassa\\Model\\Notification\\NotificationCanceled' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Notification/NotificationCanceled.php',
        'YooKassa\\Model\\Notification\\NotificationFactory' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Notification/NotificationFactory.php',
        'YooKassa\\Model\\Notification\\NotificationRefundSucceeded' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Notification/NotificationRefundSucceeded.php',
        'YooKassa\\Model\\Notification\\NotificationSucceeded' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Notification/NotificationSucceeded.php',
        'YooKassa\\Model\\Notification\\NotificationWaitingForCapture' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Notification/NotificationWaitingForCapture.php',
        'YooKassa\\Model\\Passenger' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Passenger.php',
        'YooKassa\\Model\\PassengerInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PassengerInterface.php',
        'YooKassa\\Model\\Payment' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Payment.php',
        'YooKassa\\Model\\PaymentData\\AbstractPaymentData' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/AbstractPaymentData.php',
        'YooKassa\\Model\\PaymentData\\B2b\\Sberbank\\VatData' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/B2b/Sberbank/VatData.php',
        'YooKassa\\Model\\PaymentData\\B2b\\Sberbank\\VatDataInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/B2b/Sberbank/VatDataInterface.php',
        'YooKassa\\Model\\PaymentData\\B2b\\Sberbank\\VatDataRate' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/B2b/Sberbank/VatDataRate.php',
        'YooKassa\\Model\\PaymentData\\B2b\\Sberbank\\VatDataType' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/B2b/Sberbank/VatDataType.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataAlfabank' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataAlfabank.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataApplePay' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataApplePay.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataB2bSberbank' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataB2bSberbank.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataBankCard' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataBankCard.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataBankCardCard' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataBankCardCard.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataCash' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataCash.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataFactory' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataFactory.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataGooglePay' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataGooglePay.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataInstallments' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataInstallments.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataMobileBalance' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataMobileBalance.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataQiwi' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataQiwi.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataSberbank' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataSberbank.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataTinkoffBank' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataTinkoffBank.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataWebmoney' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataWebmoney.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataWechat' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataWechat.php',
        'YooKassa\\Model\\PaymentData\\PaymentDataYooMoney' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentData/PaymentDataYooMoney.php',
        'YooKassa\\Model\\PaymentInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentInterface.php',
        'YooKassa\\Model\\PaymentMethodType' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethodType.php',
        'YooKassa\\Model\\PaymentMethod\\AbstractPaymentMethod' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/AbstractPaymentMethod.php',
        'YooKassa\\Model\\PaymentMethod\\B2b\\Sberbank\\PayerBankDetails' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/B2b/Sberbank/PayerBankDetails.php',
        'YooKassa\\Model\\PaymentMethod\\B2b\\Sberbank\\PayerBankDetailsInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/B2b/Sberbank/PayerBankDetailsInterface.php',
        'YooKassa\\Model\\PaymentMethod\\BankCardSource' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/BankCardSource.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodAlfaBank' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodAlfaBank.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodApplePay' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodApplePay.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodB2bSberbank' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodB2bSberbank.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodBankCard' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodBankCard.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodCardType' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodCardType.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodCash' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodCash.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodFactory' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodFactory.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodGooglePay' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodGooglePay.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodInstallments' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodInstallments.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodMobileBalance' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodMobileBalance.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodPsb' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodPsb.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodQiwi' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodQiwi.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodSberbank' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodSberbank.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodTinkoffBank' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodTinkoffBank.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodWebmoney' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodWebmoney.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodWechat' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodWechat.php',
        'YooKassa\\Model\\PaymentMethod\\PaymentMethodYooMoney' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentMethod/PaymentMethodYooMoney.php',
        'YooKassa\\Model\\PaymentStatus' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/PaymentStatus.php',
        'YooKassa\\Model\\Receipt' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Receipt.php',
        'YooKassa\\Model\\ReceiptCustomer' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ReceiptCustomer.php',
        'YooKassa\\Model\\ReceiptCustomerInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ReceiptCustomerInterface.php',
        'YooKassa\\Model\\ReceiptInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ReceiptInterface.php',
        'YooKassa\\Model\\ReceiptItem' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ReceiptItem.php',
        'YooKassa\\Model\\ReceiptItemInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ReceiptItemInterface.php',
        'YooKassa\\Model\\ReceiptRegistrationStatus' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ReceiptRegistrationStatus.php',
        'YooKassa\\Model\\ReceiptType' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/ReceiptType.php',
        'YooKassa\\Model\\Receipt\\AgentType' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Receipt/AgentType.php',
        'YooKassa\\Model\\Receipt\\PaymentMode' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Receipt/PaymentMode.php',
        'YooKassa\\Model\\Receipt\\PaymentSubject' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Receipt/PaymentSubject.php',
        'YooKassa\\Model\\Receipt\\ReceiptItemAmount' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Receipt/ReceiptItemAmount.php',
        'YooKassa\\Model\\Receipt\\SettlementType' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Receipt/SettlementType.php',
        'YooKassa\\Model\\Recipient' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Recipient.php',
        'YooKassa\\Model\\RecipientInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/RecipientInterface.php',
        'YooKassa\\Model\\Refund' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Refund.php',
        'YooKassa\\Model\\RefundInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/RefundInterface.php',
        'YooKassa\\Model\\RefundStatus' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/RefundStatus.php',
        'YooKassa\\Model\\Requestor' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Requestor.php',
        'YooKassa\\Model\\RequestorInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/RequestorInterface.php',
        'YooKassa\\Model\\Settlement' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Settlement.php',
        'YooKassa\\Model\\SettlementInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/SettlementInterface.php',
        'YooKassa\\Model\\Source' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Source.php',
        'YooKassa\\Model\\SourceInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/SourceInterface.php',
        'YooKassa\\Model\\Supplier' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Supplier.php',
        'YooKassa\\Model\\SupplierInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/SupplierInterface.php',
        'YooKassa\\Model\\Transfer' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Transfer.php',
        'YooKassa\\Model\\TransferInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/TransferInterface.php',
        'YooKassa\\Model\\TransferStatus' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/TransferStatus.php',
        'YooKassa\\Model\\Webhook\\Webhook' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Model/Webhook/Webhook.php',
        'YooKassa\\Request\\Payments\\AbstractPaymentResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/AbstractPaymentResponse.php',
        'YooKassa\\Request\\Payments\\CreatePaymentRequest' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/CreatePaymentRequest.php',
        'YooKassa\\Request\\Payments\\CreatePaymentRequestBuilder' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/CreatePaymentRequestBuilder.php',
        'YooKassa\\Request\\Payments\\CreatePaymentRequestInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/CreatePaymentRequestInterface.php',
        'YooKassa\\Request\\Payments\\CreatePaymentRequestSerializer' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/CreatePaymentRequestSerializer.php',
        'YooKassa\\Request\\Payments\\CreatePaymentResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/CreatePaymentResponse.php',
        'YooKassa\\Request\\Payments\\PaymentResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/PaymentResponse.php',
        'YooKassa\\Request\\Payments\\Payment\\CancelResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/Payment/CancelResponse.php',
        'YooKassa\\Request\\Payments\\Payment\\CreateCaptureRequest' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/Payment/CreateCaptureRequest.php',
        'YooKassa\\Request\\Payments\\Payment\\CreateCaptureRequestBuilder' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/Payment/CreateCaptureRequestBuilder.php',
        'YooKassa\\Request\\Payments\\Payment\\CreateCaptureRequestInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/Payment/CreateCaptureRequestInterface.php',
        'YooKassa\\Request\\Payments\\Payment\\CreateCaptureRequestSerializer' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/Payment/CreateCaptureRequestSerializer.php',
        'YooKassa\\Request\\Payments\\Payment\\CreateCaptureResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/Payment/CreateCaptureResponse.php',
        'YooKassa\\Request\\Payments\\PaymentsRequest' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/PaymentsRequest.php',
        'YooKassa\\Request\\Payments\\PaymentsRequestBuilder' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/PaymentsRequestBuilder.php',
        'YooKassa\\Request\\Payments\\PaymentsRequestInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/PaymentsRequestInterface.php',
        'YooKassa\\Request\\Payments\\PaymentsRequestSerializer' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/PaymentsRequestSerializer.php',
        'YooKassa\\Request\\Payments\\PaymentsResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Payments/PaymentsResponse.php',
        'YooKassa\\Request\\Receipts\\AbstractReceiptResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/AbstractReceiptResponse.php',
        'YooKassa\\Request\\Receipts\\CreatePostReceiptRequest' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/CreatePostReceiptRequest.php',
        'YooKassa\\Request\\Receipts\\CreatePostReceiptRequestBuilder' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/CreatePostReceiptRequestBuilder.php',
        'YooKassa\\Request\\Receipts\\CreatePostReceiptRequestInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/CreatePostReceiptRequestInterface.php',
        'YooKassa\\Request\\Receipts\\CreatePostReceiptRequestSerializer' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/CreatePostReceiptRequestSerializer.php',
        'YooKassa\\Request\\Receipts\\PaymentReceiptResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/PaymentReceiptResponse.php',
        'YooKassa\\Request\\Receipts\\ReceiptResponseFactory' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/ReceiptResponseFactory.php',
        'YooKassa\\Request\\Receipts\\ReceiptResponseInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/ReceiptResponseInterface.php',
        'YooKassa\\Request\\Receipts\\ReceiptResponseItem' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/ReceiptResponseItem.php',
        'YooKassa\\Request\\Receipts\\ReceiptResponseItemInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/ReceiptResponseItemInterface.php',
        'YooKassa\\Request\\Receipts\\ReceiptsRequest' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/ReceiptsRequest.php',
        'YooKassa\\Request\\Receipts\\ReceiptsRequestBuilder' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/ReceiptsRequestBuilder.php',
        'YooKassa\\Request\\Receipts\\ReceiptsRequestInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/ReceiptsRequestInterface.php',
        'YooKassa\\Request\\Receipts\\ReceiptsRequestSerializer' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/ReceiptsRequestSerializer.php',
        'YooKassa\\Request\\Receipts\\ReceiptsResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/ReceiptsResponse.php',
        'YooKassa\\Request\\Receipts\\RefundReceiptResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/RefundReceiptResponse.php',
        'YooKassa\\Request\\Receipts\\SimpleReceiptResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Receipts/SimpleReceiptResponse.php',
        'YooKassa\\Request\\Refunds\\AbstractRefundResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/AbstractRefundResponse.php',
        'YooKassa\\Request\\Refunds\\CreateRefundRequest' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/CreateRefundRequest.php',
        'YooKassa\\Request\\Refunds\\CreateRefundRequestBuilder' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/CreateRefundRequestBuilder.php',
        'YooKassa\\Request\\Refunds\\CreateRefundRequestInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/CreateRefundRequestInterface.php',
        'YooKassa\\Request\\Refunds\\CreateRefundRequestSerializer' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/CreateRefundRequestSerializer.php',
        'YooKassa\\Request\\Refunds\\CreateRefundResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/CreateRefundResponse.php',
        'YooKassa\\Request\\Refunds\\RefundResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/RefundResponse.php',
        'YooKassa\\Request\\Refunds\\RefundsRequest' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/RefundsRequest.php',
        'YooKassa\\Request\\Refunds\\RefundsRequestBuilder' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/RefundsRequestBuilder.php',
        'YooKassa\\Request\\Refunds\\RefundsRequestInterface' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/RefundsRequestInterface.php',
        'YooKassa\\Request\\Refunds\\RefundsRequestSerializer' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/RefundsRequestSerializer.php',
        'YooKassa\\Request\\Refunds\\RefundsResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Refunds/RefundsResponse.php',
        'YooKassa\\Request\\Webhook\\WebhookListResponse' => __DIR__ . '/..' . '/yoomoney/yookassa-sdk-php/lib/Request/Webhook/WebhookListResponse.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3743f590ee1efbb40a385c9082d95e67::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3743f590ee1efbb40a385c9082d95e67::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3743f590ee1efbb40a385c9082d95e67::$classMap;

        }, null, ClassLoader::class);
    }
}
