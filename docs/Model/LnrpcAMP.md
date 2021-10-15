# LnrpcAMP

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rootShare** | **string** | An n-of-n secret share of the root seed from which child payment hashes and preimages are derived. | [optional] 
**setId** | **string** | An identifier for the HTLC set that this HTLC belongs to. | [optional] 
**childIndex** | **int** | A nonce used to randomize the child preimage and child hash from a given root_share. | [optional] 
**hash** | **string** | The payment hash of the AMP HTLC. | [optional] 
**preimage** | **string** | The preimage used to settle this AMP htlc. This field will only be populated if the invoice is in InvoiceState_ACCEPTED or InvoiceState_SETTLED. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


