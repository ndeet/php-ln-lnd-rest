# LnrpcRoute

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalTimeLock** | **int** | * The cumulative (final) time lock across the entire route.  This is the CLTV value that should be extended to the first hop in the route. All other hops will decrement the time-lock as advertised, leaving enough time for all hops to wait for or present the payment preimage to complete the payment. | [optional] 
**totalFees** | **string** | * The sum of the fees paid at each hop within the final route.  In the case of a one-hop payment, this value will be zero as we don&#39;t need to pay a fee it ourself. | [optional] 
**totalAmt** | **string** | * The total amount of funds required to complete a payment over this route. This value includes the cumulative fees at each hop. As a result, the HTLC extended to the first-hop in the route will need to have at least this many satoshis, otherwise the route will fail at an intermediate node due to an insufficient amount of fees. | [optional] 
**hops** | [**\Lnd\Rest\Model\LnrpcHop[]**](LnrpcHop.md) | * Contains details concerning the specific forwarding details at each hop. | [optional] 
**totalFeesMsat** | **string** | * The total fees in millisatoshis. | [optional] 
**totalAmtMsat** | **string** | * The total amount in millisatoshis. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


