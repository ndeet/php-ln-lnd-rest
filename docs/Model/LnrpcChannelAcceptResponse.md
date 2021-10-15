# LnrpcChannelAcceptResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accept** | **bool** | Whether or not the client accepts the channel. | [optional] 
**pendingChanId** | **string** | The pending channel id to which this response applies. | [optional] 
**error** | **string** | An optional error to send the initiating party to indicate why the channel was rejected. This field *should not* contain sensitive information, it will be sent to the initiating party. This field should only be set if accept is false, the channel will be rejected if an error is set with accept&#x3D;true because the meaning of this response is ambiguous. Limited to 500 characters. | [optional] 
**upfrontShutdown** | **string** | The upfront shutdown address to use if the initiating peer supports option upfront shutdown script (see ListPeers for the features supported). Note that the channel open will fail if this value is set for a peer that does not support this feature bit. | [optional] 
**csvDelay** | **int** | The csv delay (in blocks) that we require for the remote party. | [optional] 
**reserveSat** | **string** | The reserve amount in satoshis that we require the remote peer to adhere to. We require that the remote peer always have some reserve amount allocated to them so that there is always a disincentive to broadcast old state (if they hold 0 sats on their side of the channel, there is nothing to lose). | [optional] 
**inFlightMaxMsat** | **string** | The maximum amount of funds in millisatoshis that we allow the remote peer to have in outstanding htlcs. | [optional] 
**maxHtlcCount** | **int** | The maximum number of htlcs that the remote peer can offer us. | [optional] 
**minHtlcIn** | **string** | The minimum value in millisatoshis for incoming htlcs on the channel. | [optional] 
**minAcceptDepth** | **int** | The number of confirmations we require before we consider the channel open. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


