# LnrpcListPaymentsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payments** | [**\Lnd\Rest\Model\LnrpcPayment[]**](LnrpcPayment.md) |  | [optional] 
**firstIndexOffset** | **string** | The index of the first item in the set of returned payments. This can be used as the index_offset to continue seeking backwards in the next request. | [optional] 
**lastIndexOffset** | **string** | The index of the last item in the set of returned payments. This can be used as the index_offset to continue seeking forwards in the next request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


