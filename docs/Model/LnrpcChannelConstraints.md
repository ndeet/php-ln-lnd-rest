# LnrpcChannelConstraints

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**csvDelay** | **int** | The CSV delay expressed in relative blocks. If the channel is force closed, we will need to wait for this many blocks before we can regain our funds. | [optional] 
**chanReserveSat** | **string** | The minimum satoshis this node is required to reserve in its balance. | [optional] 
**dustLimitSat** | **string** | The dust limit (in satoshis) of the initiator&#39;s commitment tx. | [optional] 
**maxPendingAmtMsat** | **string** | The maximum amount of coins in millisatoshis that can be pending in this channel. | [optional] 
**minHtlcMsat** | **string** | The smallest HTLC in millisatoshis that the initiator will accept. | [optional] 
**maxAcceptedHtlcs** | **int** | The total number of incoming HTLC&#39;s that the initiator will accept. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


