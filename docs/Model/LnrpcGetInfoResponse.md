# LnrpcGetInfoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**identityPubkey** | **string** | / The identity pubkey of the current node. | [optional] 
**alias** | **string** |  | [optional] 
**numPendingChannels** | **int** |  | [optional] 
**numActiveChannels** | **int** |  | [optional] 
**numPeers** | **int** |  | [optional] 
**blockHeight** | **int** |  | [optional] 
**blockHash** | **string** |  | [optional] 
**syncedToChain** | **bool** |  | [optional] 
**testnet** | **bool** |  | [optional] 
**uris** | **string[]** | / The URIs of the current node. | [optional] 
**bestHeaderTimestamp** | **string** |  | [optional] 
**version** | **string** | / The version of the LND software that the node is running. | [optional] 
**numInactiveChannels** | **int** |  | [optional] 
**chains** | [**\Lnd\Rest\Model\LnrpcChain[]**](LnrpcChain.md) |  | [optional] 
**color** | **string** |  | [optional] 
**syncedToGraph** | **bool** | Whether we consider ourselves synced with the public channel graph. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


