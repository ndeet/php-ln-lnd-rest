# LnrpcHop

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chanId** | **string** | The unique channel ID for the channel. The first 3 bytes are the block height, the next 3 the index within the block, and the last 2 bytes are the output index for the channel. | [optional] 
**chanCapacity** | **string** |  | [optional] 
**amtToForward** | **string** |  | [optional] 
**fee** | **string** |  | [optional] 
**expiry** | **int** |  | [optional] 
**amtToForwardMsat** | **string** |  | [optional] 
**feeMsat** | **string** |  | [optional] 
**pubKey** | **string** | An optional public key of the hop. If the public key is given, the payment can be executed without relying on a copy of the channel graph. | [optional] 
**tlvPayload** | **bool** | If set to true, then this hop will be encoded using the new variable length TLV format. Note that if any custom tlv_records below are specified, then this field MUST be set to true for them to be encoded properly. | [optional] 
**mppRecord** | [**\Lnd\Rest\Model\LnrpcMPPRecord**](LnrpcMPPRecord.md) | An optional TLV record that signals the use of an MPP payment. If present, the receiver will enforce that the same mpp_record is included in the final hop payload of all non-zero payments in the HTLC set. If empty, a regular single-shot payment is or was attempted. | [optional] 
**ampRecord** | [**\Lnd\Rest\Model\LnrpcAMPRecord**](LnrpcAMPRecord.md) | An optional TLV record that signals the use of an AMP payment. If present, the receiver will treat all received payments including the same (payment_addr, set_id) pair  as being part of one logical payment. The payment will be settled by XORing the root_share&#39;s together and deriving the child hashes and preimages according to BOLT XX. Must be used in conjunction with mpp_record. | [optional] 
**customRecords** | **map[string,string]** | An optional set of key-value TLV records. This is useful within the context of the SendToRoute call as it allows callers to specify arbitrary K-V pairs to drop off at each hop within the onion. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


