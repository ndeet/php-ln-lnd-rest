# LnrpcOpenChannelRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nodePubkey** | **string** |  | [optional] 
**nodePubkeyString** | **string** |  | [optional] 
**localFundingAmount** | **string** |  | [optional] 
**pushSat** | **string** |  | [optional] 
**targetConf** | **int** | / The target number of blocks that the closure transaction should be confirmed by. | [optional] 
**satPerByte** | **string** | / A manual fee rate set in sat/byte that should be used when crafting the closure transaction. | [optional] 
**private** | **bool** | / Whether this channel should be private, not announced to the greater network. | [optional] 
**minHtlcMsat** | **string** | / The minimum value in millisatoshi we will require for incoming HTLCs on the channel. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


