# LnrpcChannelCloseSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channelPoint** | **string** | / The outpoint (txid:index) of the funding transaction. | [optional] 
**chanId** | **string** | /  The unique channel ID for the channel. | [optional] 
**chainHash** | **string** | / The hash of the genesis block that this channel resides within. | [optional] 
**closingTxHash** | **string** | / The txid of the transaction which ultimately closed this channel. | [optional] 
**remotePubkey** | **string** | / Public key of the remote peer that we formerly had a channel with. | [optional] 
**capacity** | **string** | / Total capacity of the channel. | [optional] 
**closeHeight** | **int** | / Height at which the funding transaction was spent. | [optional] 
**settledBalance** | **string** |  | [optional] 
**timeLockedBalance** | **string** |  | [optional] 
**closeType** | [**\Lnd\Rest\Model\ChannelCloseSummaryClosureType**](ChannelCloseSummaryClosureType.md) | / Details on how the channel was closed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


