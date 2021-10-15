# LnrpcNodeMetricsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**betweennessCentrality** | [**map[string,\Lnd\Rest\Model\LnrpcFloatMetric]**](LnrpcFloatMetric.md) | Betweenness centrality is the sum of the ratio of shortest paths that pass through the node for each pair of nodes in the graph (not counting paths starting or ending at this node). Map of node pubkey to betweenness centrality of the node. Normalized values are in the [0,1] closed interval. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


