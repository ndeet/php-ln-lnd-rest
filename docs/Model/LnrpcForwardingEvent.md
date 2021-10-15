# LnrpcForwardingEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timestamp** | **string** | Timestamp is the time (unix epoch offset) that this circuit was completed. Deprecated by timestamp_ns. | [optional] 
**chanIdIn** | **string** | The incoming channel ID that carried the HTLC that created the circuit. | [optional] 
**chanIdOut** | **string** | The outgoing channel ID that carried the preimage that completed the circuit. | [optional] 
**amtIn** | **string** | The total amount (in satoshis) of the incoming HTLC that created half the circuit. | [optional] 
**amtOut** | **string** | The total amount (in satoshis) of the outgoing HTLC that created the second half of the circuit. | [optional] 
**fee** | **string** | The total fee (in satoshis) that this payment circuit carried. | [optional] 
**feeMsat** | **string** | The total fee (in milli-satoshis) that this payment circuit carried. | [optional] 
**amtInMsat** | **string** | The total amount (in milli-satoshis) of the incoming HTLC that created half the circuit. | [optional] 
**amtOutMsat** | **string** | The total amount (in milli-satoshis) of the outgoing HTLC that created the second half of the circuit. | [optional] 
**timestampNs** | **string** | The number of nanoseconds elapsed since January 1, 1970 UTC when this circuit was completed. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


