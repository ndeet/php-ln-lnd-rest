# LnrpcGetInfoResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | The version of the LND software that the node is running. | [optional] 
**commitHash** | **string** | The SHA1 commit hash that the daemon is compiled with. | [optional] 
**identityPubkey** | **string** | The identity pubkey of the current node. | [optional] 
**alias** | **string** |  | [optional] 
**color** | **string** |  | [optional] 
**numPendingChannels** | **int** |  | [optional] 
**numActiveChannels** | **int** |  | [optional] 
**numInactiveChannels** | **int** |  | [optional] 
**numPeers** | **int** |  | [optional] 
**blockHeight** | **int** |  | [optional] 
**blockHash** | **string** |  | [optional] 
**bestHeaderTimestamp** | **string** |  | [optional] 
**syncedToChain** | **bool** |  | [optional] 
**syncedToGraph** | **bool** | Whether we consider ourselves synced with the public channel graph. | [optional] 
**testnet** | **bool** |  | [optional] 
**chains** | [**\Lnd\Rest\Model\LnrpcChain[]**](LnrpcChain.md) |  | [optional] 
**uris** | **string[]** | The URIs of the current node. | [optional] 
**features** | [**map[string,\Lnd\Rest\Model\LnrpcFeature]**](LnrpcFeature.md) | Features that our node has advertised in our init message, node announcements and invoices. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


