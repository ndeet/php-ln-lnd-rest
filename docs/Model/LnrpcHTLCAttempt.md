# LnrpcHTLCAttempt

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attemptId** | **string** | The unique ID that is used for this attempt. | [optional] 
**status** | [**\Lnd\Rest\Model\HTLCAttemptHTLCStatus**](HTLCAttemptHTLCStatus.md) | The status of the HTLC. | [optional] 
**route** | [**\Lnd\Rest\Model\LnrpcRoute**](LnrpcRoute.md) | The route taken by this HTLC. | [optional] 
**attemptTimeNs** | **string** | The time in UNIX nanoseconds at which this HTLC was sent. | [optional] 
**resolveTimeNs** | **string** | The time in UNIX nanoseconds at which this HTLC was settled or failed. This value will not be set if the HTLC is still IN_FLIGHT. | [optional] 
**failure** | [**\Lnd\Rest\Model\LnrpcFailure**](LnrpcFailure.md) | Detailed htlc failure info. | [optional] 
**preimage** | **string** | The preimage that was used to settle the HTLC. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


