# LnrpcInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**memo** | **string** | An optional memo to attach along with the invoice. Used for record keeping purposes for the invoice&#39;s creator, and will also be set in the description field of the encoded payment request if the description_hash field is not being used. | [optional] 
**rPreimage** | **string** | The hex-encoded preimage (32 byte) which will allow settling an incoming HTLC payable to this preimage. When using REST, this field must be encoded as base64. | [optional] 
**rHash** | **string** | The hash of the preimage. When using REST, this field must be encoded as base64. | [optional] 
**value** | **string** | The fields value and value_msat are mutually exclusive. | [optional] 
**valueMsat** | **string** | The fields value and value_msat are mutually exclusive. | [optional] 
**settled** | **bool** |  | [optional] 
**creationDate** | **string** |  | [optional] 
**settleDate** | **string** |  | [optional] 
**paymentRequest** | **string** | A bare-bones invoice for a payment within the Lightning Network. With the details of the invoice, the sender has all the data necessary to send a payment to the recipient. | [optional] 
**descriptionHash** | **string** | Hash (SHA-256) of a description of the payment. Used if the description of payment (memo) is too long to naturally fit within the description field of an encoded payment request. When using REST, this field must be encoded as base64. | [optional] 
**expiry** | **string** | Payment request expiry time in seconds. Default is 3600 (1 hour). | [optional] 
**fallbackAddr** | **string** | Fallback on-chain address. | [optional] 
**cltvExpiry** | **string** | Delta to use for the time-lock of the CLTV extended to the final hop. | [optional] 
**routeHints** | [**\Lnd\Rest\Model\LnrpcRouteHint[]**](LnrpcRouteHint.md) | Route hints that can each be individually used to assist in reaching the invoice&#39;s destination. | [optional] 
**private** | **bool** | Whether this invoice should include routing hints for private channels. | [optional] 
**addIndex** | **string** | The \&quot;add\&quot; index of this invoice. Each newly created invoice will increment this index making it monotonically increasing. Callers to the SubscribeInvoices call can use this to instantly get notified of all added invoices with an add_index greater than this one. | [optional] 
**settleIndex** | **string** | The \&quot;settle\&quot; index of this invoice. Each newly settled invoice will increment this index making it monotonically increasing. Callers to the SubscribeInvoices call can use this to instantly get notified of all settled invoices with an settle_index greater than this one. | [optional] 
**amtPaid** | **string** | Deprecated, use amt_paid_sat or amt_paid_msat. | [optional] 
**amtPaidSat** | **string** | The amount that was accepted for this invoice, in satoshis. This will ONLY be set if this invoice has been settled. We provide this field as if the invoice was created with a zero value, then we need to record what amount was ultimately accepted. Additionally, it&#39;s possible that the sender paid MORE that was specified in the original invoice. So we&#39;ll record that here as well. | [optional] 
**amtPaidMsat** | **string** | The amount that was accepted for this invoice, in millisatoshis. This will ONLY be set if this invoice has been settled. We provide this field as if the invoice was created with a zero value, then we need to record what amount was ultimately accepted. Additionally, it&#39;s possible that the sender paid MORE that was specified in the original invoice. So we&#39;ll record that here as well. | [optional] 
**state** | [**\Lnd\Rest\Model\InvoiceInvoiceState**](InvoiceInvoiceState.md) | The state the invoice is in. | [optional] 
**htlcs** | [**\Lnd\Rest\Model\LnrpcInvoiceHTLC[]**](LnrpcInvoiceHTLC.md) | List of HTLCs paying to this invoice [EXPERIMENTAL]. | [optional] 
**features** | [**map[string,\Lnd\Rest\Model\LnrpcFeature]**](LnrpcFeature.md) | List of features advertised on the invoice. | [optional] 
**isKeysend** | **bool** | Indicates if this invoice was a spontaneous payment that arrived via keysend [EXPERIMENTAL]. | [optional] 
**paymentAddr** | **string** | The payment address of this invoice. This value will be used in MPP payments, and also for newer invoies that always require the MPP paylaod for added end-to-end security. | [optional] 
**isAmp** | **bool** | Signals whether or not this is an AMP invoice. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


