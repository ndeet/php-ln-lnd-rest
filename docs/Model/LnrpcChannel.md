# LnrpcChannel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** |  | [optional] 
**remotePubkey** | **string** |  | [optional] 
**channelPoint** | **string** | * The outpoint (txid:index) of the funding transaction. With this value, Bob will be able to generate a signature for Alice&#39;s version of the commitment transaction. | [optional] 
**chanId** | **string** | * The unique channel ID for the channel. The first 3 bytes are the block height, the next 3 the index within the block, and the last 2 bytes are the output index for the channel. | [optional] 
**capacity** | **string** |  | [optional] 
**localBalance** | **string** |  | [optional] 
**remoteBalance** | **string** |  | [optional] 
**commitFee** | **string** | * The amount calculated to be paid in fees for the current set of commitment transactions. The fee amount is persisted with the channel in order to allow the fee amount to be removed and recalculated with each channel state update, including updates that happen after a system restart. | [optional] 
**commitWeight** | **string** |  | [optional] 
**feePerKw** | **string** | * The required number of satoshis per kilo-weight that the requester will pay at all times, for both the funding transaction and commitment transaction. This value can later be updated once the channel is open. | [optional] 
**unsettledBalance** | **string** |  | [optional] 
**totalSatoshisSent** | **string** | * The total number of satoshis we&#39;ve sent within this channel. | [optional] 
**totalSatoshisReceived** | **string** | * The total number of satoshis we&#39;ve received within this channel. | [optional] 
**numUpdates** | **string** | * The total number of updates conducted within this channel. | [optional] 
**pendingHtlcs** | [**\Lnd\Rest\Model\LnrpcHTLC[]**](LnrpcHTLC.md) | * The list of active, uncleared HTLCs currently pending within the channel. | [optional] 
**csvDelay** | **int** | * The CSV delay expressed in relative blocks. If the channel is force closed, we will need to wait for this many blocks before we can regain our funds. | [optional] 
**private** | **bool** | / Whether this channel is advertised to the network or not. | [optional] 
**initiator** | **bool** | / True if we were the ones that created the channel. | [optional] 
**chanStatusFlags** | **string** | / A set of flags showing the current state of the channel. | [optional] 
**localChanReserveSat** | **string** | / The minimum satoshis this node is required to reserve in its balance. | [optional] 
**remoteChanReserveSat** | **string** | * The minimum satoshis the other node is required to reserve in its balance. | [optional] 
**staticRemoteKey** | **bool** | * If true, then this channel uses the modern commitment format where the key in the output of the remote party does not change each state. This makes back up and recovery easier as when the channel is closed, the funds go directly to that key. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


