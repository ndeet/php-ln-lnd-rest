# PendingChannelsResponsePendingChannel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remoteNodePub** | **string** |  | [optional] 
**channelPoint** | **string** |  | [optional] 
**capacity** | **string** |  | [optional] 
**localBalance** | **string** |  | [optional] 
**remoteBalance** | **string** |  | [optional] 
**localChanReserveSat** | **string** | The minimum satoshis this node is required to reserve in its balance. | [optional] 
**remoteChanReserveSat** | **string** | The minimum satoshis the other node is required to reserve in its balance. | [optional] 
**initiator** | [**\Lnd\Rest\Model\LnrpcInitiator**](LnrpcInitiator.md) | The party that initiated opening the channel. | [optional] 
**commitmentType** | [**\Lnd\Rest\Model\LnrpcCommitmentType**](LnrpcCommitmentType.md) | The commitment type used by this channel. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


