# LnrpcFundingPsbtFinalize

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signedPsbt** | **string** | The funded PSBT that contains all witness data to send the exact channel capacity amount to the PK script returned in the open channel message in a previous step. Cannot be set at the same time as final_raw_tx. | [optional] 
**pendingChanId** | **string** | The pending channel ID of the channel to get the PSBT for. | [optional] 
**finalRawTx** | **string** | As an alternative to the signed PSBT with all witness data, the final raw wire format transaction can also be specified directly. Cannot be set at the same time as signed_psbt. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


