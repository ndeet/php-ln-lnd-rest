# LnrpcPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentHash** | **string** |  | [optional] 
**value** | **string** | Deprecated, use value_sat or value_msat. | [optional] 
**creationDate** | **string** |  | [optional] 
**fee** | **string** | Deprecated, use fee_sat or fee_msat. | [optional] 
**paymentPreimage** | **string** |  | [optional] 
**valueSat** | **string** |  | [optional] 
**valueMsat** | **string** |  | [optional] 
**paymentRequest** | **string** | The optional payment request being fulfilled. | [optional] 
**status** | [**\Lnd\Rest\Model\PaymentPaymentStatus**](PaymentPaymentStatus.md) | The status of the payment. | [optional] 
**feeSat** | **string** |  | [optional] 
**feeMsat** | **string** |  | [optional] 
**creationTimeNs** | **string** | The time in UNIX nanoseconds at which the payment was created. | [optional] 
**htlcs** | [**\Lnd\Rest\Model\LnrpcHTLCAttempt[]**](LnrpcHTLCAttempt.md) | The HTLCs made in attempt to settle the payment. | [optional] 
**paymentIndex** | **string** | The creation index of this payment. Each payment can be uniquely identified by this index, which may not strictly increment by 1 for payments made in older versions of lnd. | [optional] 
**failureReason** | [**\Lnd\Rest\Model\LnrpcPaymentFailureReason**](LnrpcPaymentFailureReason.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


