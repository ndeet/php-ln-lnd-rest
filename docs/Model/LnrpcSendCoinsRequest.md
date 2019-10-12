# LnrpcSendCoinsRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addr** | **string** |  | [optional] 
**amount** | **string** |  | [optional] 
**targetConf** | **int** | / The target number of blocks that this transaction should be confirmed by. | [optional] 
**satPerByte** | **string** | / A manual fee rate set in sat/byte that should be used when crafting the transaction. | [optional] 
**sendAll** | **bool** | * If set, then the amount field will be ignored, and lnd will attempt to send all the coins under control of the internal wallet to the specified address. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


