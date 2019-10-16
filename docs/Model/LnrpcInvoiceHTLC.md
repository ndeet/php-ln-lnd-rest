# LnrpcInvoiceHTLC

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chanId** | **string** | / Short channel id over which the htlc was received. | [optional] 
**htlcIndex** | **string** | / Index identifying the htlc on the channel. | [optional] 
**amtMsat** | **string** | / The amount of the htlc in msat. | [optional] 
**acceptHeight** | **int** | / Block height at which this htlc was accepted. | [optional] 
**acceptTime** | **string** | / Time at which this htlc was accepted. | [optional] 
**resolveTime** | **string** | / Time at which this htlc was settled or canceled. | [optional] 
**expiryHeight** | **int** | / Block height at which this htlc expires. | [optional] 
**state** | [**\Lnd\Rest\Model\LnrpcInvoiceHTLCState**](LnrpcInvoiceHTLCState.md) | / Current state the htlc is in. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


