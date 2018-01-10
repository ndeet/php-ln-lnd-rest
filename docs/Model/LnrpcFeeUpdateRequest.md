# LnrpcFeeUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**global** | **bool** | / If set, then this fee update applies to all currently active channels. | [optional] 
**chanPoint** | [**\Lnd\Rest\Model\LnrpcChannelPoint**](LnrpcChannelPoint.md) | / If set, this fee update will target a specific channel. | [optional] 
**baseFeeMsat** | **string** | / The base fee charged regardless of the number of milli-satoshis sent. | [optional] 
**feeRate** | **double** | / The effective fee rate in milli-satoshis. The precision of this value goes up to 6 decimal places, so 1e-6. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


