# LnrpcUnlockWalletRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**walletPassword** | **string** | * wallet_password should be the current valid passphrase for the daemon. This will be required to decrypt on-disk material that the daemon requires to function properly. | [optional] 
**recoveryWindow** | **int** | * recovery_window is an optional argument specifying the address lookahead when restoring a wallet seed. The recovery window applies to each invdividual branch of the BIP44 derivation paths. Supplying a recovery window of zero indicates that no addresses should be recovered, such after the first initialization of the wallet. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


