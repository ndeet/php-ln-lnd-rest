# LnrpcFundingTransitionMsg

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shimRegister** | [**\Lnd\Rest\Model\LnrpcFundingShim**](LnrpcFundingShim.md) | The funding shim to register. This should be used before any channel funding has began by the remote party, as it is intended as a preparatory step for the full channel funding. | [optional] 
**shimCancel** | [**\Lnd\Rest\Model\LnrpcFundingShimCancel**](LnrpcFundingShimCancel.md) | Used to cancel an existing registered funding shim. | [optional] 
**psbtVerify** | [**\Lnd\Rest\Model\LnrpcFundingPsbtVerify**](LnrpcFundingPsbtVerify.md) | Used to continue a funding flow that was initiated to be executed through a PSBT. This step verifies that the PSBT contains the correct outputs to fund the channel. | [optional] 
**psbtFinalize** | [**\Lnd\Rest\Model\LnrpcFundingPsbtFinalize**](LnrpcFundingPsbtFinalize.md) | Used to continue a funding flow that was initiated to be executed through a PSBT. This step finalizes the funded and signed PSBT, finishes negotiation with the peer and finally publishes the resulting funding transaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


