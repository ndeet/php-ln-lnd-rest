# LnrpcChannelAcceptRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nodePubkey** | **string** | / The pubkey of the node that wishes to open an inbound channel. | [optional] 
**chainHash** | **string** | / The hash of the genesis block that the proposed channel resides in. | [optional] 
**pendingChanId** | **string** | / The pending channel id. | [optional] 
**fundingAmt** | **string** | / The funding amount in satoshis that initiator wishes to use in the channel. | [optional] 
**pushAmt** | **string** | / The push amount of the proposed channel in millisatoshis. | [optional] 
**dustLimit** | **string** | / The dust limit of the initiator&#39;s commitment tx. | [optional] 
**maxValueInFlight** | **string** | / The maximum amount of coins in millisatoshis that can be pending in this channel. | [optional] 
**channelReserve** | **string** | / The minimum amount of satoshis the initiator requires us to have at all times. | [optional] 
**minHtlc** | **string** | / The smallest HTLC in millisatoshis that the initiator will accept. | [optional] 
**feePerKw** | **string** | / The initial fee rate that the initiator suggests for both commitment transactions. | [optional] 
**csvDelay** | **int** | * The number of blocks to use for the relative time lock in the pay-to-self output of both commitment transactions. | [optional] 
**maxAcceptedHtlcs** | **int** | / The total number of incoming HTLC&#39;s that the initiator will accept. | [optional] 
**channelFlags** | **int** | / A bit-field which the initiator uses to specify proposed channel behavior. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


