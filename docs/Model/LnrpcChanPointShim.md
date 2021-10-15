# LnrpcChanPointShim

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amt** | **string** | The size of the pre-crafted output to be used as the channel point for this channel funding. | [optional] 
**chanPoint** | [**\Lnd\Rest\Model\LnrpcChannelPoint**](LnrpcChannelPoint.md) | The target channel point to refrence in created commitment transactions. | [optional] 
**localKey** | [**\Lnd\Rest\Model\LnrpcKeyDescriptor**](LnrpcKeyDescriptor.md) | Our local key to use when creating the multi-sig output. | [optional] 
**remoteKey** | **string** | The key of the remote party to use when creating the multi-sig output. | [optional] 
**pendingChanId** | **string** | If non-zero, then this will be used as the pending channel ID on the wire protocol to initate the funding request. This is an optional field, and should only be set if the responder is already expecting a specific pending channel ID. | [optional] 
**thawHeight** | **int** | This uint32 indicates if this channel is to be considered &#39;frozen&#39;. A frozen channel does not allow a cooperative channel close by the initiator. The thaw_height is the height that this restriction stops applying to the channel. The height can be interpreted in two ways: as a relative height if the value is less than 500,000, or as an absolute height otherwise. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


