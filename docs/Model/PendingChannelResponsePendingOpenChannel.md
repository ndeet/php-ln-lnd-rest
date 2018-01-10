# PendingChannelResponsePendingOpenChannel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | [**\Lnd\Rest\Model\PendingChannelResponsePendingChannel**](PendingChannelResponsePendingChannel.md) |  | [optional] 
**confirmationHeight** | **int** |  | [optional] 
**blocksTillOpen** | **int** |  | [optional] 
**commitFee** | **string** | * The amount calculated to be paid in fees for the current set of commitment transactions. The fee amount is persisted with the channel in order to allow the fee amount to be removed and recalculated with each channel state update, including updates that happen after a system restart. | [optional] 
**commitWeight** | **string** |  | [optional] 
**feePerKw** | **string** | * The required number of satoshis per kilo-weight that the requester will pay at all times, for both the funding transaction and commitment transaction. This value can later be updated once the channel is open. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


