# LnrpcChannel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** |  | [optional] 
**remotePubkey** | **string** |  | [optional] 
**channelPoint** | **string** | The outpoint (txid:index) of the funding transaction. With this value, Bob will be able to generate a signature for Alice&#39;s version of the commitment transaction. | [optional] 
**chanId** | **string** | The unique channel ID for the channel. The first 3 bytes are the block height, the next 3 the index within the block, and the last 2 bytes are the output index for the channel. | [optional] 
**capacity** | **string** |  | [optional] 
**localBalance** | **string** |  | [optional] 
**remoteBalance** | **string** |  | [optional] 
**commitFee** | **string** | The amount calculated to be paid in fees for the current set of commitment transactions. The fee amount is persisted with the channel in order to allow the fee amount to be removed and recalculated with each channel state update, including updates that happen after a system restart. | [optional] 
**commitWeight** | **string** |  | [optional] 
**feePerKw** | **string** | The required number of satoshis per kilo-weight that the requester will pay at all times, for both the funding transaction and commitment transaction. This value can later be updated once the channel is open. | [optional] 
**unsettledBalance** | **string** |  | [optional] 
**totalSatoshisSent** | **string** | The total number of satoshis we&#39;ve sent within this channel. | [optional] 
**totalSatoshisReceived** | **string** | The total number of satoshis we&#39;ve received within this channel. | [optional] 
**numUpdates** | **string** | The total number of updates conducted within this channel. | [optional] 
**pendingHtlcs** | [**\Lnd\Rest\Model\LnrpcHTLC[]**](LnrpcHTLC.md) | The list of active, uncleared HTLCs currently pending within the channel. | [optional] 
**csvDelay** | **int** | Deprecated. The CSV delay expressed in relative blocks. If the channel is force closed, we will need to wait for this many blocks before we can regain our funds. | [optional] 
**private** | **bool** | Whether this channel is advertised to the network or not. | [optional] 
**initiator** | **bool** | True if we were the ones that created the channel. | [optional] 
**chanStatusFlags** | **string** | A set of flags showing the current state of the channel. | [optional] 
**localChanReserveSat** | **string** | Deprecated. The minimum satoshis this node is required to reserve in its balance. | [optional] 
**remoteChanReserveSat** | **string** | Deprecated. The minimum satoshis the other node is required to reserve in its balance. | [optional] 
**staticRemoteKey** | **bool** | Deprecated. Use commitment_type. | [optional] 
**commitmentType** | [**\Lnd\Rest\Model\LnrpcCommitmentType**](LnrpcCommitmentType.md) | The commitment type used by this channel. | [optional] 
**lifetime** | **string** | The number of seconds that the channel has been monitored by the channel scoring system. Scores are currently not persisted, so this value may be less than the lifetime of the channel [EXPERIMENTAL]. | [optional] 
**uptime** | **string** | The number of seconds that the remote peer has been observed as being online by the channel scoring system over the lifetime of the channel [EXPERIMENTAL]. | [optional] 
**closeAddress** | **string** | Close address is the address that we will enforce payout to on cooperative close if the channel was opened utilizing option upfront shutdown. This value can be set on channel open by setting close_address in an open channel request. If this value is not set, you can still choose a payout address by cooperatively closing with the delivery_address field set. | [optional] 
**pushAmountSat** | **string** | The amount that the initiator of the channel optionally pushed to the remote party on channel open. This amount will be zero if the channel initiator did not push any funds to the remote peer. If the initiator field is true, we pushed this amount to our peer, if it is false, the remote peer pushed this amount to us. | [optional] 
**thawHeight** | **int** | This uint32 indicates if this channel is to be considered &#39;frozen&#39;. A frozen channel doest not allow a cooperative channel close by the initiator. The thaw_height is the height that this restriction stops applying to the channel. This field is optional, not setting it or using a value of zero will mean the channel has no additional restrictions. The height can be interpreted in two ways: as a relative height if the value is less than 500,000, or as an absolute height otherwise. | [optional] 
**localConstraints** | [**\Lnd\Rest\Model\LnrpcChannelConstraints**](LnrpcChannelConstraints.md) | List constraints for the local node. | [optional] 
**remoteConstraints** | [**\Lnd\Rest\Model\LnrpcChannelConstraints**](LnrpcChannelConstraints.md) | List constraints for the remote node. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


