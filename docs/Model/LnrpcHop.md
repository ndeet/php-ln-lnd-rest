# LnrpcHop

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chanId** | **string** | * The unique channel ID for the channel. The first 3 bytes are the block height, the next 3 the index within the block, and the last 2 bytes are the output index for the channel. | [optional] 
**chanCapacity** | **string** |  | [optional] 
**amtToForward** | **string** |  | [optional] 
**fee** | **string** |  | [optional] 
**expiry** | **int** |  | [optional] 
**amtToForwardMsat** | **string** |  | [optional] 
**feeMsat** | **string** |  | [optional] 
**pubKey** | **string** | * An optional public key of the hop. If the public key is given, the payment can be executed without relying on a copy of the channel graph. | [optional] 
**tlvPayload** | **bool** | *  If set to true, then this hop will be encoded using the new variable length TLV format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


