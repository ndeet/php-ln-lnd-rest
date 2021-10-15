# LnrpcSendToRouteRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentHash** | **string** | The payment hash to use for the HTLC. When using REST, this field must be encoded as base64. | [optional] 
**paymentHashString** | **string** | An optional hex-encoded payment hash to be used for the HTLC. Deprecated now that the REST gateway supports base64 encoding of bytes fields. | [optional] 
**route** | [**\Lnd\Rest\Model\LnrpcRoute**](LnrpcRoute.md) | Route that should be used to attempt to complete the payment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


