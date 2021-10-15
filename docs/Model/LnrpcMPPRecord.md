# LnrpcMPPRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentAddr** | **string** | A unique, random identifier used to authenticate the sender as the intended payer of a multi-path payment. The payment_addr must be the same for all subpayments, and match the payment_addr provided in the receiver&#39;s invoice. The same payment_addr must be used on all subpayments. | [optional] 
**totalAmtMsat** | **string** | The total amount in milli-satoshis being sent as part of a larger multi-path payment. The caller is responsible for ensuring subpayments to the same node and payment_hash sum exactly to total_amt_msat. The same total_amt_msat must be used on all subpayments. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


