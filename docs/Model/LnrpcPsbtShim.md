# LnrpcPsbtShim

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pendingChanId** | **string** | A unique identifier of 32 random bytes that will be used as the pending channel ID to identify the PSBT state machine when interacting with it and on the wire protocol to initiate the funding request. | [optional] 
**basePsbt** | **string** | An optional base PSBT the new channel output will be added to. If this is non-empty, it must be a binary serialized PSBT. | [optional] 
**noPublish** | **bool** | If a channel should be part of a batch (multiple channel openings in one transaction), it can be dangerous if the whole batch transaction is published too early before all channel opening negotiations are completed. This flag prevents this particular channel from broadcasting the transaction after the negotiation with the remote peer. In a batch of channel openings this flag should be set to true for every channel but the very last. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


