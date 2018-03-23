# PendingChannelsResponseForceClosedChannel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | [**\Lnd\Rest\Model\PendingChannelsResponsePendingChannel**](PendingChannelsResponsePendingChannel.md) |  | [optional] 
**closingTxid** | **string** |  | [optional] 
**limboBalance** | **string** |  | [optional] 
**maturityHeight** | **int** |  | [optional] 
**blocksTilMaturity** | **int** | Remaining # of blocks until the commitment output can be swept. Negative values indicate how many blocks have passed since becoming mature. | [optional] 
**recoveredBalance** | **string** |  | [optional] 
**pendingHtlcs** | [**\Lnd\Rest\Model\LnrpcPendingHTLC[]**](LnrpcPendingHTLC.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


