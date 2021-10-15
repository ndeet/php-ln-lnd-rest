# LnrpcPendingChannelsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalLimboBalance** | **string** |  | [optional] 
**pendingOpenChannels** | [**\Lnd\Rest\Model\PendingChannelsResponsePendingOpenChannel[]**](PendingChannelsResponsePendingOpenChannel.md) |  | [optional] 
**pendingClosingChannels** | [**\Lnd\Rest\Model\PendingChannelsResponseClosedChannel[]**](PendingChannelsResponseClosedChannel.md) | Deprecated: Channels pending closing previously contained cooperatively closed channels with a single confirmation. These channels are now considered closed from the time we see them on chain. | [optional] 
**pendingForceClosingChannels** | [**\Lnd\Rest\Model\PendingChannelsResponseForceClosedChannel[]**](PendingChannelsResponseForceClosedChannel.md) |  | [optional] 
**waitingCloseChannels** | [**\Lnd\Rest\Model\PendingChannelsResponseWaitingCloseChannel[]**](PendingChannelsResponseWaitingCloseChannel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


