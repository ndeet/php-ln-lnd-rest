# LnrpcOpenChannelRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nodePubkey** | **string** |  | [optional] 
**nodePubkeyString** | **string** |  | [optional] 
**localFundingAmount** | **string** |  | [optional] 
**pushSat** | **string** |  | [optional] 
**targetConf** | **int** | / The target number of blocks that the funding transaction should be confirmed by. | [optional] 
**satPerByte** | **string** | / A manual fee rate set in sat/byte that should be used when crafting the funding transaction. | [optional] 
**private** | **bool** | / Whether this channel should be private, not announced to the greater network. | [optional] 
**minHtlcMsat** | **string** | / The minimum value in millisatoshi we will require for incoming HTLCs on the channel. | [optional] 
**remoteCsvDelay** | **int** | / The delay we require on the remote&#39;s commitment transaction. If this is not set, it will be scaled automatically with the channel size. | [optional] 
**minConfs** | **int** | / The minimum number of confirmations each one of your outputs used for the funding transaction must satisfy. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


