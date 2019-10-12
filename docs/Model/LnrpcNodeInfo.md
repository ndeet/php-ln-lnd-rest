# LnrpcNodeInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**node** | [**\Lnd\Rest\Model\LnrpcLightningNode**](LnrpcLightningNode.md) | * An individual vertex/node within the channel graph. A node is connected to other nodes by one or more channel edges emanating from it. As the graph is directed, a node will also have an incoming edge attached to it for each outgoing edge. | [optional] 
**numChannels** | **int** | / The total number of channels for the node. | [optional] 
**totalCapacity** | **string** | / The sum of all channels capacity for the node, denominated in satoshis. | [optional] 
**channels** | [**\Lnd\Rest\Model\LnrpcChannelEdge[]**](LnrpcChannelEdge.md) | / A list of all public channels for the node. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


