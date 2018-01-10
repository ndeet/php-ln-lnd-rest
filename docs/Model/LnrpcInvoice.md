# LnrpcInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**memo** | **string** | * An optional memo to attach along with the invoice. Used for record keeping purposes for the invoice&#39;s creator, and will also be set in the description field of the encoded payment request if the description_hash field is not being used. | [optional] 
**receipt** | **string** |  | [optional] 
**rPreimage** | **string** |  | [optional] 
**rHash** | **string** |  | [optional] 
**value** | **string** |  | [optional] 
**settled** | **bool** |  | [optional] 
**creationDate** | **string** |  | [optional] 
**settleDate** | **string** |  | [optional] 
**paymentRequest** | **string** | * A bare-bones invoice for a payment within the Lightning Network.  With the details of the invoice, the sender has all the data necessary to send a payment to the recipient. | [optional] 
**descriptionHash** | **string** | * Hash (SHA-256) of a description of the payment. Used if the description of payment (memo) is too long to naturally fit within the description field of an encoded payment request. | [optional] 
**expiry** | **string** | / Payment request expiry time in seconds. Default is 3600 (1 hour). | [optional] 
**fallbackAddr** | **string** | / Fallback on-chain address. | [optional] 
**cltvExpiry** | **string** | / Delta to use for the time-lock of the CLTV extended to the final hop. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


