# excitesms\sms\MiscApi

All URIs are relative to *https://gateway.excitesms.tech/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendSMS**](MiscApi.md#sendSMS) | **POST** /sms/send | Send SMS
[**viewanSMS**](MiscApi.md#viewanSMS) | **GET** /sms | View an SMS


# **sendSMS**
> \excitesms\sms\ExciteSMS\SendSMS sendSMS($accept, $body, $authorization)

Send SMS

Excite SMS SMS API allows you to send and receive SMS messages to and from any country in the world through a REST API. Each message is identified by a unique random ID so that users can always check the status of a message using the given endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new excitesms\sms\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | 
$body = new \excitesms\sms\ExciteSMS\SendSMSRequest(); // \excitesms\sms\ExciteSMS\SendSMSRequest | 
$authorization = "Bearer {token}"; // string | 

try {
    $result = $apiInstance->sendSMS($accept, $body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->sendSMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  |
 **body** | [**\excitesms\sms\ExciteSMS\SendSMSRequest**](../Model/SendSMSRequest.md)|  |
 **authorization** | **string**|  | [optional] [default to Bearer {token}]

### Return type

[**\excitesms\sms\ExciteSMS\SendSMS**](../Model/SendSMS.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewanSMS**
> \excitesms\sms\ExciteSMS\ViewanSMS viewanSMS($uid, $authorization)

View an SMS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new excitesms\sms\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uid = "uid_example"; // string | You can use Excite SMS's SMS API to retrieve information of an existing inbound or outbound SMS message.  You only need to supply the unique message id that was returned upon creation or receiving.
$authorization = "Bearer {token}"; // string | 

try {
    $result = $apiInstance->viewanSMS($uid, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->viewanSMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| You can use Excite SMS&#39;s SMS API to retrieve information of an existing inbound or outbound SMS message.  You only need to supply the unique message id that was returned upon creation or receiving. |
 **authorization** | **string**|  | [optional] [default to Bearer {token}]

### Return type

[**\excitesms\sms\ExciteSMS\ViewanSMS**](../Model/ViewanSMS.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

