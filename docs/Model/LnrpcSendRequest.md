# LnrpcSendRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dest** | **string** |  | [optional] 
**destString** | **string** |  | [optional] 
**amt** | **string** | / Number of satoshis to send. | [optional] 
**paymentHash** | **string** |  | [optional] 
**paymentHashString** | **string** |  | [optional] 
**paymentRequest** | **string** | * A bare-bones invoice for a payment within the Lightning Network.  With the details of the invoice, the sender has all the data necessary to send a payment to the recipient. | [optional] 
**finalCltvDelta** | **int** | / The CLTV delta from the current height that should be used to set the timelock for the final hop. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


