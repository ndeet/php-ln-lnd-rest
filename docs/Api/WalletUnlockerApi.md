# Lnd\Rest\WalletUnlockerApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**genSeed**](WalletUnlockerApi.md#genSeed) | **GET** /v1/genseed | * GenSeed is the first method that should be used to instantiate a new lnd instance. This method allows a caller to generate a new aezeed cipher seed given an optional passphrase. If provided, the passphrase will be necessary to decrypt the cipherseed to expose the internal wallet seed.
[**initWallet**](WalletUnlockerApi.md#initWallet) | **POST** /v1/initwallet | *  InitWallet is used when lnd is starting up for the first time to fully initialize the daemon and its internal wallet. At the very least a wallet password must be provided. This will be used to encrypt sensitive material on disk.
[**unlockWallet**](WalletUnlockerApi.md#unlockWallet) | **POST** /v1/unlockwallet | * lncli: &#x60;unlock&#x60; UnlockWallet is used at startup of lnd to provide a password to unlock the wallet database.


# **genSeed**
> \Lnd\Rest\Model\LnrpcGenSeedResponse genSeed($aezeedPassphrase, $seedEntropy)

* GenSeed is the first method that should be used to instantiate a new lnd instance. This method allows a caller to generate a new aezeed cipher seed given an optional passphrase. If provided, the passphrase will be necessary to decrypt the cipherseed to expose the internal wallet seed.

Once the cipherseed is obtained and verified by the user, the InitWallet method should be used to commit the newly generated seed, and create the wallet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\WalletUnlockerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$aezeedPassphrase = "B"; // string | * aezeed_passphrase is an optional user provided passphrase that will be used to encrypt the generated aezeed cipher seed.
$seedEntropy = "B"; // string | * seed_entropy is an optional 16-bytes generated via CSPRNG. If not specified, then a fresh set of randomness will be used to create the seed.

try {
    $result = $apiInstance->genSeed($aezeedPassphrase, $seedEntropy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletUnlockerApi->genSeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aezeedPassphrase** | **string**| * aezeed_passphrase is an optional user provided passphrase that will be used to encrypt the generated aezeed cipher seed. | [optional]
 **seedEntropy** | **string**| * seed_entropy is an optional 16-bytes generated via CSPRNG. If not specified, then a fresh set of randomness will be used to create the seed. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcGenSeedResponse**](../Model/LnrpcGenSeedResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initWallet**
> \Lnd\Rest\Model\LnrpcInitWalletResponse initWallet($body)

*  InitWallet is used when lnd is starting up for the first time to fully initialize the daemon and its internal wallet. At the very least a wallet password must be provided. This will be used to encrypt sensitive material on disk.

In the case of a recovery scenario, the user can also specify their aezeed mnemonic and passphrase. If set, then the daemon will use this prior state to initialize its internal wallet.  Alternatively, this can be used along with the GenSeed RPC to obtain a seed, then present it to the user. Once it has been verified by the user, the seed can be fed into this RPC in order to commit the new wallet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\WalletUnlockerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcInitWalletRequest(); // \Lnd\Rest\Model\LnrpcInitWalletRequest | 

try {
    $result = $apiInstance->initWallet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletUnlockerApi->initWallet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcInitWalletRequest**](../Model/LnrpcInitWalletRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcInitWalletResponse**](../Model/LnrpcInitWalletResponse.md)

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

