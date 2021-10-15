# LnrpcOpenStatusUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chanPending** | [**\Lnd\Rest\Model\LnrpcPendingUpdate**](LnrpcPendingUpdate.md) | Signals that the channel is now fully negotiated and the funding transaction published. | [optional] 
**chanOpen** | [**\Lnd\Rest\Model\LnrpcChannelOpenUpdate**](LnrpcChannelOpenUpdate.md) | Signals that the channel&#39;s funding transaction has now reached the required number of confirmations on chain and can be used. | [optional] 
**psbtFund** | [**\Lnd\Rest\Model\LnrpcReadyForPsbtFunding**](LnrpcReadyForPsbtFunding.md) | Signals that the funding process has been suspended and the construction of a PSBT that funds the channel PK script is now required. | [optional] 
**pendingChanId** | **string** | The pending channel ID of the created channel. This value may be used to further the funding flow manually via the FundingStateStep method. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


