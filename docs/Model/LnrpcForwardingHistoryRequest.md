# LnrpcForwardingHistoryRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**startTime** | **string** | / Start time is the starting point of the forwarding history request. All records beyond this point will be included, respecting the end time, and the index offset. | [optional] 
**endTime** | **string** | / End time is the end point of the forwarding history request. The response will carry at most 50k records between the start time and the end time. The index offset can be used to implement pagination. | [optional] 
**indexOffset** | **int** | / Index offset is the offset in the time series to start at. As each response can only contain 50k records, callers can use this to skip around within a packed time series. | [optional] 
**numMaxEvents** | **int** | / The max number of events to return in the response to this query. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


