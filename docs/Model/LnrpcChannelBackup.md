# LnrpcChannelBackup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chanPoint** | [**\Lnd\Rest\Model\LnrpcChannelPoint**](LnrpcChannelPoint.md) | * Identifies the channel that this backup belongs to. | [optional] 
**chanBackup** | **string** | * Is an encrypted single-chan backup. this can be passed to RestoreChannelBackups, or the WalletUnlocker Init and Unlock methods in order to trigger the recovery protocol. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


