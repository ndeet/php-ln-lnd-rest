# LnrpcPeer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pubKey** | **string** |  | [optional] 
**address** | **string** |  | [optional] 
**bytesSent** | **string** |  | [optional] 
**bytesRecv** | **string** |  | [optional] 
**satSent** | **string** |  | [optional] 
**satRecv** | **string** |  | [optional] 
**inbound** | **bool** |  | [optional] 
**pingTime** | **string** |  | [optional] 
**syncType** | [**\Lnd\Rest\Model\PeerSyncType**](PeerSyncType.md) | The type of sync we are currently performing with this peer. | [optional] 
**features** | [**map[string,\Lnd\Rest\Model\LnrpcFeature]**](LnrpcFeature.md) | Features advertised by the remote peer in their init message. | [optional] 
**errors** | [**\Lnd\Rest\Model\LnrpcTimestampedError[]**](LnrpcTimestampedError.md) | The latest errors received from our peer with timestamps, limited to the 10 most recent errors. These errors are tracked across peer connections, but are not persisted across lnd restarts. Note that these errors are only stored for peers that we have channels open with, to prevent peers from spamming us with errors at no cost. | [optional] 
**flapCount** | **int** | The number of times we have recorded this peer going offline or coming online, recorded across restarts. Note that this value is decreased over time if the peer has not recently flapped, so that we can forgive peers with historically high flap counts. | [optional] 
**lastFlapNs** | **string** | The timestamp of the last flap we observed for this peer. If this value is zero, we have not observed any flaps for this peer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


