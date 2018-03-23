# LnrpcGenSeedResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cipherSeedMnemonic** | **string[]** | * cipher_seed_mnemonic is a 24-word mnemonic that encodes a prior aezeed cipher seed obtained by the user. This field is optional, as if not provided, then the daemon will generate a new cipher seed for the user. Otherwise, then the daemon will attempt to recover the wallet state linked to this cipher seed. | [optional] 
**encipheredSeed** | **string** | * enciphered_seed are the raw aezeed cipher seed bytes. This is the raw cipher text before run through our mnemonic encoding scheme. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


