# LnrpcResolution

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resolutionType** | [**\Lnd\Rest\Model\LnrpcResolutionType**](LnrpcResolutionType.md) | The type of output we are resolving. | [optional] 
**outcome** | [**\Lnd\Rest\Model\LnrpcResolutionOutcome**](LnrpcResolutionOutcome.md) | The outcome of our on chain action that resolved the outpoint. | [optional] 
**outpoint** | [**\Lnd\Rest\Model\LnrpcOutPoint**](LnrpcOutPoint.md) | The outpoint that was spent by the resolution. | [optional] 
**amountSat** | **string** | The amount that was claimed by the resolution. | [optional] 
**sweepTxid** | **string** | The hex-encoded transaction ID of the sweep transaction that spent the output. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


