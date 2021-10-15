# LnrpcChannelFeeReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chanId** | **string** | The short channel id that this fee report belongs to. | [optional] 
**channelPoint** | **string** | The channel that this fee report belongs to. | [optional] 
**baseFeeMsat** | **string** | The base fee charged regardless of the number of milli-satoshis sent. | [optional] 
**feePerMil** | **string** | The amount charged per milli-satoshis transferred expressed in millionths of a satoshi. | [optional] 
**feeRate** | **double** | The effective fee rate in milli-satoshis. Computed by dividing the fee_per_mil value by 1 million. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


