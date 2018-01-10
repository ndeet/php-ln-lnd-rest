# Lnd\Rest\WalletUnlockerApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWallet**](WalletUnlockerApi.md#createWallet) | **POST** /v1/createwallet | * lncli: &#x60;create&#x60; CreateWallet is used at lnd startup to set the encryption password for the wallet database.
[**unlockWallet**](WalletUnlockerApi.md#unlockWallet) | **POST** /v1/unlockwallet | * lncli: &#x60;unlock&#x60; UnlockWallet is used at startup of lnd to provide a password to unlock the wallet database.


# **createWallet**
> \Lnd\Rest\Model\LnrpcCreateWalletResponse createWallet($body)

* lncli: `create` CreateWallet is used at lnd startup to set the encryption password for the wallet database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\WalletUnlockerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcCreateWalletRequest(); // \Lnd\Rest\Model\LnrpcCreateWalletRequest | 

try {
    $result = $apiInstance->createWallet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletUnlockerApi->createWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcCreateWalletRequest**](../Model/LnrpcCreateWalletRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcCreateWalletResponse**](../Model/LnrpcCreateWalletResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlockWallet**
> \Lnd\Rest\Model\LnrpcUnlockWalletResponse unlockWallet($body)

* lncli: `unlock` UnlockWallet is used at startup of lnd to provide a password to unlock the wallet database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\WalletUnlockerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcUnlockWalletRequest(); // \Lnd\Rest\Model\LnrpcUnlockWalletRequest | 

try {
    $result = $apiInstance->unlockWallet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletUnlockerApi->unlockWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcUnlockWalletRequest**](../Model/LnrpcUnlockWalletRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcUnlockWalletResponse**](../Model/LnrpcUnlockWalletResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

