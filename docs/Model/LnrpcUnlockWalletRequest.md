# LnrpcUnlockWalletRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**walletPassword** | **string** | * wallet_password should be the current valid passphrase for the daemon. This will be required to decrypt on-disk material that the daemon requires to function properly. | [optional] 
**recoveryWindow** | **int** | * recovery_window is an optional argument specifying the address lookahead when restoring a wallet seed. The recovery window applies to each individual branch of the BIP44 derivation paths. Supplying a recovery window of zero indicates that no addresses should be recovered, such after the first initialization of the wallet. | [optional] 
**channelBackups** | [**\Lnd\Rest\Model\LnrpcChanBackupSnapshot**](LnrpcChanBackupSnapshot.md) | * channel_backups is an optional argument that allows clients to recover the settled funds within a set of channels. This should be populated if the user was unable to close out all channels and sweep funds before partial or total data loss occurred. If specified, then after on-chain recovery of funds, lnd begin to carry out the data loss recovery protocol in order to recover the funds in each channel from a remote force closed transaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


