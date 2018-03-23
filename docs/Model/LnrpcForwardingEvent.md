# LnrpcForwardingEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **string** | / Timestamp is the time (unix epoch offset) that this circuit was completed. | [optional] 
**chanIdIn** | **string** | / The incoming channel ID that carried the HTLC that created the circuit. | [optional] 
**chanIdOut** | **string** | / The outgoing channel ID that carried the preimage that completed the circuit. | [optional] 
**amtIn** | **string** | / The total amount of the incoming HTLC that created half the circuit. | [optional] 
**amtOut** | **string** | / The total amount of the outgoign HTLC that created the second half of the circuit. | [optional] 
**fee** | **string** | / The total fee that this payment circuit carried. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


