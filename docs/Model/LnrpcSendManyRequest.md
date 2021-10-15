# LnrpcSendManyRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**addrToAmount** | **map[string,string]** |  | [optional] 
**targetConf** | **int** | The target number of blocks that this transaction should be confirmed by. | [optional] 
**satPerVbyte** | **string** | A manual fee rate set in sat/vbyte that should be used when crafting the transaction. | [optional] 
**satPerByte** | **string** | Deprecated, use sat_per_vbyte. A manual fee rate set in sat/vbyte that should be used when crafting the transaction. | [optional] 
**label** | **string** | An optional label for the transaction, limited to 500 characters. | [optional] 
**minConfs** | **int** | The minimum number of confirmations each one of your outputs used for the transaction must satisfy. | [optional] 
**spendUnconfirmed** | **bool** | Whether unconfirmed outputs should be used as inputs for the transaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


