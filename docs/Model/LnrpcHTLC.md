# LnrpcHTLC

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**incoming** | **bool** |  | [optional] 
**amount** | **string** |  | [optional] 
**hashLock** | **string** |  | [optional] 
**expirationHeight** | **int** |  | [optional] 
**htlcIndex** | **string** | Index identifying the htlc on the channel. | [optional] 
**forwardingChannel** | **string** | If this HTLC is involved in a forwarding operation, this field indicates the forwarding channel. For an outgoing htlc, it is the incoming channel. For an incoming htlc, it is the outgoing channel. When the htlc originates from this node or this node is the final destination, forwarding_channel will be zero. The forwarding channel will also be zero for htlcs that need to be forwarded but don&#39;t have a forwarding decision persisted yet. | [optional] 
**forwardingHtlcIndex** | **string** | Index identifying the htlc on the forwarding channel. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


