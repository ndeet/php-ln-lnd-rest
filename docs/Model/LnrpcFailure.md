# LnrpcFailure

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | [**\Lnd\Rest\Model\FailureFailureCode**](FailureFailureCode.md) |  | [optional] 
**channelUpdate** | [**\Lnd\Rest\Model\LnrpcChannelUpdate**](LnrpcChannelUpdate.md) | An optional channel update message. | [optional] 
**htlcMsat** | **string** | A failure type-dependent htlc value. | [optional] 
**onionSha256** | **string** | The sha256 sum of the onion payload. | [optional] 
**cltvExpiry** | **int** | A failure type-dependent cltv expiry value. | [optional] 
**flags** | **int** | A failure type-dependent flags value. | [optional] 
**failureSourceIndex** | **int** | The position in the path of the intermediate or final node that generated the failure message. Position zero is the sender node. | [optional] 
**height** | **int** | A failure type-dependent block height. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


