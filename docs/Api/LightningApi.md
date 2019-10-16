# Lnd\Rest\LightningApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**abandonChannel**](LightningApi.md#abandonChannel) | **DELETE** /v1/channels/abandon/{channel_point.funding_txid_str}/{channel_point.output_index} | * lncli: &#x60;abandonchannel&#x60; AbandonChannel removes all channel state from the database except for a close summary. This method can be used to get rid of permanently unusable channels due to bugs fixed in newer versions of lnd. Only available when in debug builds of lnd.
[**addInvoice**](LightningApi.md#addInvoice) | **POST** /v1/invoices | * lncli: &#x60;addinvoice&#x60; AddInvoice attempts to add a new invoice to the invoice database. Any duplicated invoices are rejected, therefore all invoices *must* have a unique payment preimage.
[**channelBalance**](LightningApi.md#channelBalance) | **GET** /v1/balance/channels | * lncli: &#x60;channelbalance&#x60; ChannelBalance returns the total funds available across all open channels in satoshis.
[**closeChannel**](LightningApi.md#closeChannel) | **DELETE** /v1/channels/{channel_point.funding_txid_str}/{channel_point.output_index} | * lncli: &#x60;closechannel&#x60; CloseChannel attempts to close an active channel identified by its channel outpoint (ChannelPoint). The actions of this method can additionally be augmented to attempt a force close after a timeout period in the case of an inactive peer. If a non-force close (cooperative closure) is requested, then the user can specify either a target number of blocks until the closure transaction is confirmed, or a manual fee rate. If neither are specified, then a default lax, block confirmation target is used.
[**closedChannels**](LightningApi.md#closedChannels) | **GET** /v1/channels/closed | * lncli: &#x60;closedchannels&#x60; ClosedChannels returns a description of all the closed channels that this node was a participant in.
[**connectPeer**](LightningApi.md#connectPeer) | **POST** /v1/peers | * lncli: &#x60;connect&#x60; ConnectPeer attempts to establish a connection to a remote peer. This is at the networking level, and is used for communication between nodes. This is distinct from establishing a channel with a peer.
[**decodePayReq**](LightningApi.md#decodePayReq) | **GET** /v1/payreq/{pay_req} | * lncli: &#x60;decodepayreq&#x60; DecodePayReq takes an encoded payment request string and attempts to decode it, returning a full description of the conditions encoded within the payment request.
[**deleteAllPayments**](LightningApi.md#deleteAllPayments) | **DELETE** /v1/payments | * DeleteAllPayments deletes all outgoing payments from DB.
[**describeGraph**](LightningApi.md#describeGraph) | **GET** /v1/graph | * lncli: &#x60;describegraph&#x60; DescribeGraph returns a description of the latest graph state from the point of view of the node. The graph information is partitioned into two components: all the nodes/vertexes, and all the edges that connect the vertexes themselves.  As this is a directed graph, the edges also contain the node directional specific routing policy which includes: the time lock delta, fee information, etc.
[**disconnectPeer**](LightningApi.md#disconnectPeer) | **DELETE** /v1/peers/{pub_key} | * lncli: &#x60;disconnect&#x60; DisconnectPeer attempts to disconnect one peer from another identified by a given pubKey. In the case that we currently have a pending or active channel with the target peer, then this action will be not be allowed.
[**estimateFee**](LightningApi.md#estimateFee) | **GET** /v1/transactions/fee | * lncli: &#x60;estimatefee&#x60; EstimateFee asks the chain backend to estimate the fee rate and total fees for a transaction that pays to multiple specified outputs.
[**exportAllChannelBackups**](LightningApi.md#exportAllChannelBackups) | **GET** /v1/channels/backup | * ExportAllChannelBackups returns static channel backups for all existing channels known to lnd. A set of regular singular static channel backups for each channel are returned. Additionally, a multi-channel backup is returned as well, which contains a single encrypted blob containing the backups of each channel.
[**exportChannelBackup**](LightningApi.md#exportChannelBackup) | **GET** /v1/channels/backup/{chan_point.funding_txid_str}/{chan_point.output_index} | * lncli: &#x60;exportchanbackup&#x60; ExportChannelBackup attempts to return an encrypted static channel backup for the target channel identified by it channel point. The backup is encrypted with a key generated from the aezeed seed of the user. The returned backup can either be restored using the RestoreChannelBackup method once lnd is running, or via the InitWallet and UnlockWallet methods from the WalletUnlocker service.
[**feeReport**](LightningApi.md#feeReport) | **GET** /v1/fees | * lncli: &#x60;feereport&#x60; FeeReport allows the caller to obtain a report detailing the current fee schedule enforced by the node globally for each channel.
[**forwardingHistory**](LightningApi.md#forwardingHistory) | **POST** /v1/switch | * lncli: &#x60;fwdinghistory&#x60; ForwardingHistory allows the caller to query the htlcswitch for a record of all HTLCs forwarded within the target time range, and integer offset within that time range. If no time-range is specified, then the first chunk of the past 24 hrs of forwarding history are returned.
[**getChanInfo**](LightningApi.md#getChanInfo) | **GET** /v1/graph/edge/{chan_id} | * lncli: &#x60;getchaninfo&#x60; GetChanInfo returns the latest authenticated network announcement for the given channel identified by its channel ID: an 8-byte integer which uniquely identifies the location of transaction&#39;s funding output within the blockchain.
[**getInfo**](LightningApi.md#getInfo) | **GET** /v1/getinfo | * lncli: &#x60;getinfo&#x60; GetInfo returns general information concerning the lightning node including it&#39;s identity pubkey, alias, the chains it is connected to, and information concerning the number of open+pending channels.
[**getNetworkInfo**](LightningApi.md#getNetworkInfo) | **GET** /v1/graph/info | * lncli: &#x60;getnetworkinfo&#x60; GetNetworkInfo returns some basic stats about the known channel graph from the point of view of the node.
[**getNodeInfo**](LightningApi.md#getNodeInfo) | **GET** /v1/graph/node/{pub_key} | * lncli: &#x60;getnodeinfo&#x60; GetNodeInfo returns the latest advertised, aggregated, and authenticated channel information for the specified node identified by its public key.
[**getTransactions**](LightningApi.md#getTransactions) | **GET** /v1/transactions | * lncli: &#x60;listchaintxns&#x60; GetTransactions returns a list describing all the known transactions relevant to the wallet.
[**listChannels**](LightningApi.md#listChannels) | **GET** /v1/channels | * lncli: &#x60;listchannels&#x60; ListChannels returns a description of all the open channels that this node is a participant in.
[**listInvoices**](LightningApi.md#listInvoices) | **GET** /v1/invoices | * lncli: &#x60;listinvoices&#x60; ListInvoices returns a list of all the invoices currently stored within the database. Any active debug invoices are ignored. It has full support for paginated responses, allowing users to query for specific invoices through their add_index. This can be done by using either the first_index_offset or last_index_offset fields included in the response as the index_offset of the next request. By default, the first 100 invoices created will be returned. Backwards pagination is also supported through the Reversed flag.
[**listPayments**](LightningApi.md#listPayments) | **GET** /v1/payments | * lncli: &#x60;listpayments&#x60; ListPayments returns a list of all outgoing payments.
[**listPeers**](LightningApi.md#listPeers) | **GET** /v1/peers | * lncli: &#x60;listpeers&#x60; ListPeers returns a verbose listing of all currently active peers.
[**listUnspent**](LightningApi.md#listUnspent) | **GET** /v1/utxos | * lncli: &#x60;listunspent&#x60; ListUnspent returns a list of all utxos spendable by the wallet with a number of confirmations between the specified minimum and maximum.
[**lookupInvoice**](LightningApi.md#lookupInvoice) | **GET** /v1/invoice/{r_hash_str} | * lncli: &#x60;lookupinvoice&#x60; LookupInvoice attempts to look up an invoice according to its payment hash. The passed payment hash *must* be exactly 32 bytes, if not, an error is returned.
[**newAddress**](LightningApi.md#newAddress) | **GET** /v1/newaddress | * lncli: &#x60;newaddress&#x60; NewAddress creates a new address under control of the local wallet.
[**openChannelSync**](LightningApi.md#openChannelSync) | **POST** /v1/channels | * OpenChannelSync is a synchronous version of the OpenChannel RPC call. This call is meant to be consumed by clients to the REST proxy. As with all other sync calls, all byte slices are intended to be populated as hex encoded strings.
[**pendingChannels**](LightningApi.md#pendingChannels) | **GET** /v1/channels/pending | * lncli: &#x60;pendingchannels&#x60; PendingChannels returns a list of all the channels that are currently considered \&quot;pending\&quot;. A channel is pending if it has finished the funding workflow and is waiting for confirmations for the funding txn, or is in the process of closure, either initiated cooperatively or non-cooperatively.
[**queryRoutes**](LightningApi.md#queryRoutes) | **GET** /v1/graph/routes/{pub_key}/{amt} | * lncli: &#x60;queryroutes&#x60; QueryRoutes attempts to query the daemon&#39;s Channel Router for a possible route to a target destination capable of carrying a specific amount of satoshis. The returned route contains the full details required to craft and send an HTLC, also including the necessary information that should be present within the Sphinx packet encapsulated within the HTLC.
[**restoreChannelBackups**](LightningApi.md#restoreChannelBackups) | **POST** /v1/channels/backup/restore | * lncli: &#x60;restorechanbackup&#x60; RestoreChannelBackups accepts a set of singular channel backups, or a single encrypted multi-chan backup and attempts to recover any funds remaining within the channel. If we are able to unpack the backup, then the new channel will be shown under listchannels, as well as pending channels.
[**sendCoins**](LightningApi.md#sendCoins) | **POST** /v1/transactions | * lncli: &#x60;sendcoins&#x60; SendCoins executes a request to send coins to a particular address. Unlike SendMany, this RPC call only allows creating a single output at a time. If neither target_conf, or sat_per_byte are set, then the internal wallet will consult its fee model to determine a fee for the default confirmation target.
[**sendPaymentSync**](LightningApi.md#sendPaymentSync) | **POST** /v1/channels/transactions | * SendPaymentSync is the synchronous non-streaming version of SendPayment. This RPC is intended to be consumed by clients of the REST proxy. Additionally, this RPC expects the destination&#39;s public key and the payment hash (if any) to be encoded as hex strings.
[**sendToRouteSync**](LightningApi.md#sendToRouteSync) | **POST** /v1/channels/transactions/route | * SendToRouteSync is a synchronous version of SendToRoute. It Will block until the payment either fails or succeeds.
[**signMessage**](LightningApi.md#signMessage) | **POST** /v1/signmessage | * lncli: &#x60;signmessage&#x60; SignMessage signs a message with this node&#39;s private key. The returned signature string is &#x60;zbase32&#x60; encoded and pubkey recoverable, meaning that only the message digest and signature are needed for verification.
[**subscribeInvoices**](LightningApi.md#subscribeInvoices) | **GET** /v1/invoices/subscribe | * SubscribeInvoices returns a uni-directional stream (server -&gt; client) for notifying the client of newly added/settled invoices. The caller can optionally specify the add_index and/or the settle_index. If the add_index is specified, then we&#39;ll first start by sending add invoice events for all invoices with an add_index greater than the specified value.  If the settle_index is specified, the next, we&#39;ll send out all settle events for invoices with a settle_index greater than the specified value.  One or both of these fields can be set. If no fields are set, then we&#39;ll only send out the latest add/settle events.
[**updateChannelPolicy**](LightningApi.md#updateChannelPolicy) | **POST** /v1/chanpolicy | * lncli: &#x60;updatechanpolicy&#x60; UpdateChannelPolicy allows the caller to update the fee schedule and channel policies for all channels globally, or a particular channel.
[**verifyChanBackup**](LightningApi.md#verifyChanBackup) | **POST** /v1/channels/backup/verify | * VerifyChanBackup allows a caller to verify the integrity of a channel backup snapshot. This method will accept either a packed Single or a packed Multi. Specifying both will result in an error.
[**verifyMessage**](LightningApi.md#verifyMessage) | **POST** /v1/verifymessage | * lncli: &#x60;verifymessage&#x60; VerifyMessage verifies a signature over a msg. The signature must be zbase32 encoded and signed by an active node in the resident node&#39;s channel database. In addition to returning the validity of the signature, VerifyMessage also returns the recovered pubkey from the signature.
[**walletBalance**](LightningApi.md#walletBalance) | **GET** /v1/balance/blockchain | * lncli: &#x60;walletbalance&#x60; WalletBalance returns total unspent outputs(confirmed and unconfirmed), all confirmed unspent outputs and all unconfirmed unspent outputs under control of the wallet.


# **abandonChannel**
> \Lnd\Rest\Model\LnrpcAbandonChannelResponse abandonChannel($channelPointFundingTxidStr, $channelPointOutputIndex)

* lncli: `abandonchannel` AbandonChannel removes all channel state from the database except for a close summary. This method can be used to get rid of permanently unusable channels due to bugs fixed in newer versions of lnd. Only available when in debug builds of lnd.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channelPointFundingTxidStr = "channelPointFundingTxidStr_example"; // string | 
$channelPointOutputIndex = 789; // int | 

try {
    $result = $apiInstance->abandonChannel($channelPointFundingTxidStr, $channelPointOutputIndex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->abandonChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelPointFundingTxidStr** | **string**|  |
 **channelPointOutputIndex** | **int**|  |

### Return type

[**\Lnd\Rest\Model\LnrpcAbandonChannelResponse**](../Model/LnrpcAbandonChannelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addInvoice**
> \Lnd\Rest\Model\LnrpcAddInvoiceResponse addInvoice($body)

* lncli: `addinvoice` AddInvoice attempts to add a new invoice to the invoice database. Any duplicated invoices are rejected, therefore all invoices *must* have a unique payment preimage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcInvoice(); // \Lnd\Rest\Model\LnrpcInvoice | 

try {
    $result = $apiInstance->addInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->addInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcInvoice**](../Model/LnrpcInvoice.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcAddInvoiceResponse**](../Model/LnrpcAddInvoiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **channelBalance**
> \Lnd\Rest\Model\LnrpcChannelBalanceResponse channelBalance()

* lncli: `channelbalance` ChannelBalance returns the total funds available across all open channels in satoshis.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->channelBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->channelBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Lnd\Rest\Model\LnrpcChannelBalanceResponse**](../Model/LnrpcChannelBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **closeChannel**
> \Lnd\Rest\Model\LnrpcCloseStatusUpdate closeChannel($channelPointFundingTxidStr, $channelPointOutputIndex)

* lncli: `closechannel` CloseChannel attempts to close an active channel identified by its channel outpoint (ChannelPoint). The actions of this method can additionally be augmented to attempt a force close after a timeout period in the case of an inactive peer. If a non-force close (cooperative closure) is requested, then the user can specify either a target number of blocks until the closure transaction is confirmed, or a manual fee rate. If neither are specified, then a default lax, block confirmation target is used.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$channelPointFundingTxidStr = "channelPointFundingTxidStr_example"; // string | 
$channelPointOutputIndex = 789; // int | 

try {
    $result = $apiInstance->closeChannel($channelPointFundingTxidStr, $channelPointOutputIndex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->closeChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelPointFundingTxidStr** | **string**|  |
 **channelPointOutputIndex** | **int**|  |

### Return type

[**\Lnd\Rest\Model\LnrpcCloseStatusUpdate**](../Model/LnrpcCloseStatusUpdate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **closedChannels**
> \Lnd\Rest\Model\LnrpcClosedChannelsResponse closedChannels($cooperative, $localForce, $remoteForce, $breach, $fundingCanceled, $abandoned)

* lncli: `closedchannels` ClosedChannels returns a description of all the closed channels that this node was a participant in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cooperative = true; // bool | 
$localForce = true; // bool | 
$remoteForce = true; // bool | 
$breach = true; // bool | 
$fundingCanceled = true; // bool | 
$abandoned = true; // bool | 

try {
    $result = $apiInstance->closedChannels($cooperative, $localForce, $remoteForce, $breach, $fundingCanceled, $abandoned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->closedChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cooperative** | **bool**|  | [optional]
 **localForce** | **bool**|  | [optional]
 **remoteForce** | **bool**|  | [optional]
 **breach** | **bool**|  | [optional]
 **fundingCanceled** | **bool**|  | [optional]
 **abandoned** | **bool**|  | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcClosedChannelsResponse**](../Model/LnrpcClosedChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **connectPeer**
> \Lnd\Rest\Model\LnrpcConnectPeerResponse connectPeer($body)

* lncli: `connect` ConnectPeer attempts to establish a connection to a remote peer. This is at the networking level, and is used for communication between nodes. This is distinct from establishing a channel with a peer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcConnectPeerRequest(); // \Lnd\Rest\Model\LnrpcConnectPeerRequest | 

try {
    $result = $apiInstance->connectPeer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->connectPeer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcConnectPeerRequest**](../Model/LnrpcConnectPeerRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcConnectPeerResponse**](../Model/LnrpcConnectPeerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **decodePayReq**
> \Lnd\Rest\Model\LnrpcPayReq decodePayReq($payReq)

* lncli: `decodepayreq` DecodePayReq takes an encoded payment request string and attempts to decode it, returning a full description of the conditions encoded within the payment request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payReq = "payReq_example"; // string | 

try {
    $result = $apiInstance->decodePayReq($payReq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->decodePayReq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payReq** | **string**|  |

### Return type

[**\Lnd\Rest\Model\LnrpcPayReq**](../Model/LnrpcPayReq.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllPayments**
> \Lnd\Rest\Model\LnrpcDeleteAllPaymentsResponse deleteAllPayments()

* DeleteAllPayments deletes all outgoing payments from DB.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->deleteAllPayments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->deleteAllPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Lnd\Rest\Model\LnrpcDeleteAllPaymentsResponse**](../Model/LnrpcDeleteAllPaymentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeGraph**
> \Lnd\Rest\Model\LnrpcChannelGraph describeGraph($includeUnannounced)

* lncli: `describegraph` DescribeGraph returns a description of the latest graph state from the point of view of the node. The graph information is partitioned into two components: all the nodes/vertexes, and all the edges that connect the vertexes themselves.  As this is a directed graph, the edges also contain the node directional specific routing policy which includes: the time lock delta, fee information, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeUnannounced = true; // bool | * Whether unannounced channels are included in the response or not. If set, unannounced channels are included. Unannounced channels are both private channels, and public channels that are not yet announced to the network.

try {
    $result = $apiInstance->describeGraph($includeUnannounced);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->describeGraph: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeUnannounced** | **bool**| * Whether unannounced channels are included in the response or not. If set, unannounced channels are included. Unannounced channels are both private channels, and public channels that are not yet announced to the network. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcChannelGraph**](../Model/LnrpcChannelGraph.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disconnectPeer**
> \Lnd\Rest\Model\LnrpcDisconnectPeerResponse disconnectPeer($pubKey)

* lncli: `disconnect` DisconnectPeer attempts to disconnect one peer from another identified by a given pubKey. In the case that we currently have a pending or active channel with the target peer, then this action will be not be allowed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pubKey = "pubKey_example"; // string | 

try {
    $result = $apiInstance->disconnectPeer($pubKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->disconnectPeer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pubKey** | **string**|  |

### Return type

[**\Lnd\Rest\Model\LnrpcDisconnectPeerResponse**](../Model/LnrpcDisconnectPeerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **estimateFee**
> \Lnd\Rest\Model\LnrpcEstimateFeeResponse estimateFee($targetConf)

* lncli: `estimatefee` EstimateFee asks the chain backend to estimate the fee rate and total fees for a transaction that pays to multiple specified outputs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$targetConf = 56; // int | / The target number of blocks that this transaction should be confirmed by.

try {
    $result = $apiInstance->estimateFee($targetConf);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->estimateFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetConf** | **int**| / The target number of blocks that this transaction should be confirmed by. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcEstimateFeeResponse**](../Model/LnrpcEstimateFeeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportAllChannelBackups**
> \Lnd\Rest\Model\LnrpcChanBackupSnapshot exportAllChannelBackups()

* ExportAllChannelBackups returns static channel backups for all existing channels known to lnd. A set of regular singular static channel backups for each channel are returned. Additionally, a multi-channel backup is returned as well, which contains a single encrypted blob containing the backups of each channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->exportAllChannelBackups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->exportAllChannelBackups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Lnd\Rest\Model\LnrpcChanBackupSnapshot**](../Model/LnrpcChanBackupSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportChannelBackup**
> \Lnd\Rest\Model\LnrpcChannelBackup exportChannelBackup($chanPointFundingTxidStr, $chanPointOutputIndex, $chanPointFundingTxidBytes)

* lncli: `exportchanbackup` ExportChannelBackup attempts to return an encrypted static channel backup for the target channel identified by it channel point. The backup is encrypted with a key generated from the aezeed seed of the user. The returned backup can either be restored using the RestoreChannelBackup method once lnd is running, or via the InitWallet and UnlockWallet methods from the WalletUnlocker service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chanPointFundingTxidStr = "chanPointFundingTxidStr_example"; // string | 
$chanPointOutputIndex = 789; // int | 
$chanPointFundingTxidBytes = "B"; // string | / Txid of the funding transaction.

try {
    $result = $apiInstance->exportChannelBackup($chanPointFundingTxidStr, $chanPointOutputIndex, $chanPointFundingTxidBytes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->exportChannelBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chanPointFundingTxidStr** | **string**|  |
 **chanPointOutputIndex** | **int**|  |
 **chanPointFundingTxidBytes** | **string**| / Txid of the funding transaction. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcChannelBackup**](../Model/LnrpcChannelBackup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feeReport**
> \Lnd\Rest\Model\LnrpcFeeReportResponse feeReport()

* lncli: `feereport` FeeReport allows the caller to obtain a report detailing the current fee schedule enforced by the node globally for each channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->feeReport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->feeReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Lnd\Rest\Model\LnrpcFeeReportResponse**](../Model/LnrpcFeeReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forwardingHistory**
> \Lnd\Rest\Model\LnrpcForwardingHistoryResponse forwardingHistory($body)

* lncli: `fwdinghistory` ForwardingHistory allows the caller to query the htlcswitch for a record of all HTLCs forwarded within the target time range, and integer offset within that time range. If no time-range is specified, then the first chunk of the past 24 hrs of forwarding history are returned.

A list of forwarding events are returned. The size of each forwarding event is 40 bytes, and the max message size able to be returned in gRPC is 4 MiB. As a result each message can only contain 50k entries.  Each response has the index offset of the last entry. The index offset can be provided to the request to allow the caller to skip a series of records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcForwardingHistoryRequest(); // \Lnd\Rest\Model\LnrpcForwardingHistoryRequest | 

try {
    $result = $apiInstance->forwardingHistory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->forwardingHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcForwardingHistoryRequest**](../Model/LnrpcForwardingHistoryRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcForwardingHistoryResponse**](../Model/LnrpcForwardingHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChanInfo**
> \Lnd\Rest\Model\LnrpcChannelEdge getChanInfo($chanId)

* lncli: `getchaninfo` GetChanInfo returns the latest authenticated network announcement for the given channel identified by its channel ID: an 8-byte integer which uniquely identifies the location of transaction's funding output within the blockchain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chanId = "chanId_example"; // string | 

try {
    $result = $apiInstance->getChanInfo($chanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->getChanInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chanId** | **string**|  |

### Return type

[**\Lnd\Rest\Model\LnrpcChannelEdge**](../Model/LnrpcChannelEdge.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInfo**
> \Lnd\Rest\Model\LnrpcGetInfoResponse getInfo()

* lncli: `getinfo` GetInfo returns general information concerning the lightning node including it's identity pubkey, alias, the chains it is connected to, and information concerning the number of open+pending channels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->getInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Lnd\Rest\Model\LnrpcGetInfoResponse**](../Model/LnrpcGetInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNetworkInfo**
> \Lnd\Rest\Model\LnrpcNetworkInfo getNetworkInfo()

* lncli: `getnetworkinfo` GetNetworkInfo returns some basic stats about the known channel graph from the point of view of the node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getNetworkInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->getNetworkInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Lnd\Rest\Model\LnrpcNetworkInfo**](../Model/LnrpcNetworkInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNodeInfo**
> \Lnd\Rest\Model\LnrpcNodeInfo getNodeInfo($pubKey, $includeChannels)

* lncli: `getnodeinfo` GetNodeInfo returns the latest advertised, aggregated, and authenticated channel information for the specified node identified by its public key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pubKey = "pubKey_example"; // string | 
$includeChannels = true; // bool | / If true, will include all known channels associated with the node.

try {
    $result = $apiInstance->getNodeInfo($pubKey, $includeChannels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->getNodeInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pubKey** | **string**|  |
 **includeChannels** | **bool**| / If true, will include all known channels associated with the node. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcNodeInfo**](../Model/LnrpcNodeInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactions**
> \Lnd\Rest\Model\LnrpcTransactionDetails getTransactions()

* lncli: `listchaintxns` GetTransactions returns a list describing all the known transactions relevant to the wallet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTransactions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Lnd\Rest\Model\LnrpcTransactionDetails**](../Model/LnrpcTransactionDetails.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listChannels**
> \Lnd\Rest\Model\LnrpcListChannelsResponse listChannels($activeOnly, $inactiveOnly, $publicOnly, $privateOnly)

* lncli: `listchannels` ListChannels returns a description of all the open channels that this node is a participant in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$activeOnly = true; // bool | 
$inactiveOnly = true; // bool | 
$publicOnly = true; // bool | 
$privateOnly = true; // bool | 

try {
    $result = $apiInstance->listChannels($activeOnly, $inactiveOnly, $publicOnly, $privateOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->listChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activeOnly** | **bool**|  | [optional]
 **inactiveOnly** | **bool**|  | [optional]
 **publicOnly** | **bool**|  | [optional]
 **privateOnly** | **bool**|  | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcListChannelsResponse**](../Model/LnrpcListChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listInvoices**
> \Lnd\Rest\Model\LnrpcListInvoiceResponse listInvoices($pendingOnly, $indexOffset, $numMaxInvoices, $reversed)

* lncli: `listinvoices` ListInvoices returns a list of all the invoices currently stored within the database. Any active debug invoices are ignored. It has full support for paginated responses, allowing users to query for specific invoices through their add_index. This can be done by using either the first_index_offset or last_index_offset fields included in the response as the index_offset of the next request. By default, the first 100 invoices created will be returned. Backwards pagination is also supported through the Reversed flag.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pendingOnly = true; // bool | / If set, only unsettled invoices will be returned in the response.
$indexOffset = "indexOffset_example"; // string | * The index of an invoice that will be used as either the start or end of a query to determine which invoices should be returned in the response.
$numMaxInvoices = "numMaxInvoices_example"; // string | / The max number of invoices to return in the response to this query.
$reversed = true; // bool | * If set, the invoices returned will result from seeking backwards from the specified index offset. This can be used to paginate backwards.

try {
    $result = $apiInstance->listInvoices($pendingOnly, $indexOffset, $numMaxInvoices, $reversed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pendingOnly** | **bool**| / If set, only unsettled invoices will be returned in the response. | [optional]
 **indexOffset** | **string**| * The index of an invoice that will be used as either the start or end of a query to determine which invoices should be returned in the response. | [optional]
 **numMaxInvoices** | **string**| / The max number of invoices to return in the response to this query. | [optional]
 **reversed** | **bool**| * If set, the invoices returned will result from seeking backwards from the specified index offset. This can be used to paginate backwards. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcListInvoiceResponse**](../Model/LnrpcListInvoiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPayments**
> \Lnd\Rest\Model\LnrpcListPaymentsResponse listPayments($includeIncomplete)

* lncli: `listpayments` ListPayments returns a list of all outgoing payments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includeIncomplete = true; // bool | * If true, then return payments that have not yet fully completed. This means that pending payments, as well as failed payments will show up if this field is set to True.

try {
    $result = $apiInstance->listPayments($includeIncomplete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->listPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeIncomplete** | **bool**| * If true, then return payments that have not yet fully completed. This means that pending payments, as well as failed payments will show up if this field is set to True. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcListPaymentsResponse**](../Model/LnrpcListPaymentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPeers**
> \Lnd\Rest\Model\LnrpcListPeersResponse listPeers()

* lncli: `listpeers` ListPeers returns a verbose listing of all currently active peers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listPeers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->listPeers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Lnd\Rest\Model\LnrpcListPeersResponse**](../Model/LnrpcListPeersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUnspent**
> \Lnd\Rest\Model\LnrpcListUnspentResponse listUnspent($minConfs, $maxConfs)

* lncli: `listunspent` ListUnspent returns a list of all utxos spendable by the wallet with a number of confirmations between the specified minimum and maximum.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$minConfs = 56; // int | / The minimum number of confirmations to be included.
$maxConfs = 56; // int | / The maximum number of confirmations to be included.

try {
    $result = $apiInstance->listUnspent($minConfs, $maxConfs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->listUnspent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **minConfs** | **int**| / The minimum number of confirmations to be included. | [optional]
 **maxConfs** | **int**| / The maximum number of confirmations to be included. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcListUnspentResponse**](../Model/LnrpcListUnspentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupInvoice**
> \Lnd\Rest\Model\LnrpcInvoice lookupInvoice($rHashStr, $rHash)

* lncli: `lookupinvoice` LookupInvoice attempts to look up an invoice according to its payment hash. The passed payment hash *must* be exactly 32 bytes, if not, an error is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rHashStr = "rHashStr_example"; // string | 
$rHash = "B"; // string | / The payment hash of the invoice to be looked up.

try {
    $result = $apiInstance->lookupInvoice($rHashStr, $rHash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->lookupInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rHashStr** | **string**|  |
 **rHash** | **string**| / The payment hash of the invoice to be looked up. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcInvoice**](../Model/LnrpcInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newAddress**
> \Lnd\Rest\Model\LnrpcNewAddressResponse newAddress($type)

* lncli: `newaddress` NewAddress creates a new address under control of the local wallet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "WITNESS_PUBKEY_HASH"; // string | / The address type.

try {
    $result = $apiInstance->newAddress($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->newAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| / The address type. | [optional] [default to WITNESS_PUBKEY_HASH]

### Return type

[**\Lnd\Rest\Model\LnrpcNewAddressResponse**](../Model/LnrpcNewAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **openChannelSync**
> \Lnd\Rest\Model\LnrpcChannelPoint openChannelSync($body)

* OpenChannelSync is a synchronous version of the OpenChannel RPC call. This call is meant to be consumed by clients to the REST proxy. As with all other sync calls, all byte slices are intended to be populated as hex encoded strings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcOpenChannelRequest(); // \Lnd\Rest\Model\LnrpcOpenChannelRequest | 

try {
    $result = $apiInstance->openChannelSync($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->openChannelSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcOpenChannelRequest**](../Model/LnrpcOpenChannelRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcChannelPoint**](../Model/LnrpcChannelPoint.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pendingChannels**
> \Lnd\Rest\Model\LnrpcPendingChannelsResponse pendingChannels()

* lncli: `pendingchannels` PendingChannels returns a list of all the channels that are currently considered \"pending\". A channel is pending if it has finished the funding workflow and is waiting for confirmations for the funding txn, or is in the process of closure, either initiated cooperatively or non-cooperatively.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->pendingChannels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->pendingChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Lnd\Rest\Model\LnrpcPendingChannelsResponse**](../Model/LnrpcPendingChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryRoutes**
> \Lnd\Rest\Model\LnrpcQueryRoutesResponse queryRoutes($pubKey, $amt, $finalCltvDelta, $feeLimitFixed, $feeLimitPercent, $ignoredNodes, $sourcePubKey, $useMissionControl, $cltvLimit)

* lncli: `queryroutes` QueryRoutes attempts to query the daemon's Channel Router for a possible route to a target destination capable of carrying a specific amount of satoshis. The returned route contains the full details required to craft and send an HTLC, also including the necessary information that should be present within the Sphinx packet encapsulated within the HTLC.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pubKey = "pubKey_example"; // string | 
$amt = "amt_example"; // string | 
$finalCltvDelta = 56; // int | / An optional CLTV delta from the current height that should be used for the timelock of the final hop.
$feeLimitFixed = "feeLimitFixed_example"; // string | / The fee limit expressed as a fixed amount of satoshis.
$feeLimitPercent = "feeLimitPercent_example"; // string | / The fee limit expressed as a percentage of the payment amount.
$ignoredNodes = array("ignoredNodes_example"); // string[] | * A list of nodes to ignore during path finding.
$sourcePubKey = "sourcePubKey_example"; // string | * The source node where the request route should originated from. If empty, self is assumed.
$useMissionControl = true; // bool | * If set to true, edge probabilities from mission control will be used to get the optimal route.
$cltvLimit = 789; // int | *  An optional maximum total time lock for the route. If the source is empty or ourselves, this should not exceed lnd's `--max-cltv-expiry` setting. If zero, then the value of `--max-cltv-expiry` is used as the limit.

try {
    $result = $apiInstance->queryRoutes($pubKey, $amt, $finalCltvDelta, $feeLimitFixed, $feeLimitPercent, $ignoredNodes, $sourcePubKey, $useMissionControl, $cltvLimit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->queryRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pubKey** | **string**|  |
 **amt** | **string**|  |
 **finalCltvDelta** | **int**| / An optional CLTV delta from the current height that should be used for the timelock of the final hop. | [optional]
 **feeLimitFixed** | **string**| / The fee limit expressed as a fixed amount of satoshis. | [optional]
 **feeLimitPercent** | **string**| / The fee limit expressed as a percentage of the payment amount. | [optional]
 **ignoredNodes** | [**string[]**](../Model/string.md)| * A list of nodes to ignore during path finding. | [optional]
 **sourcePubKey** | **string**| * The source node where the request route should originated from. If empty, self is assumed. | [optional]
 **useMissionControl** | **bool**| * If set to true, edge probabilities from mission control will be used to get the optimal route. | [optional]
 **cltvLimit** | **int**| *  An optional maximum total time lock for the route. If the source is empty or ourselves, this should not exceed lnd&#39;s &#x60;--max-cltv-expiry&#x60; setting. If zero, then the value of &#x60;--max-cltv-expiry&#x60; is used as the limit. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcQueryRoutesResponse**](../Model/LnrpcQueryRoutesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restoreChannelBackups**
> \Lnd\Rest\Model\LnrpcRestoreBackupResponse restoreChannelBackups($body)

* lncli: `restorechanbackup` RestoreChannelBackups accepts a set of singular channel backups, or a single encrypted multi-chan backup and attempts to recover any funds remaining within the channel. If we are able to unpack the backup, then the new channel will be shown under listchannels, as well as pending channels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcRestoreChanBackupRequest(); // \Lnd\Rest\Model\LnrpcRestoreChanBackupRequest | 

try {
    $result = $apiInstance->restoreChannelBackups($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->restoreChannelBackups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcRestoreChanBackupRequest**](../Model/LnrpcRestoreChanBackupRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcRestoreBackupResponse**](../Model/LnrpcRestoreBackupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendCoins**
> \Lnd\Rest\Model\LnrpcSendCoinsResponse sendCoins($body)

* lncli: `sendcoins` SendCoins executes a request to send coins to a particular address. Unlike SendMany, this RPC call only allows creating a single output at a time. If neither target_conf, or sat_per_byte are set, then the internal wallet will consult its fee model to determine a fee for the default confirmation target.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcSendCoinsRequest(); // \Lnd\Rest\Model\LnrpcSendCoinsRequest | 

try {
    $result = $apiInstance->sendCoins($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->sendCoins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcSendCoinsRequest**](../Model/LnrpcSendCoinsRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcSendCoinsResponse**](../Model/LnrpcSendCoinsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendPaymentSync**
> \Lnd\Rest\Model\LnrpcSendResponse sendPaymentSync($body)

* SendPaymentSync is the synchronous non-streaming version of SendPayment. This RPC is intended to be consumed by clients of the REST proxy. Additionally, this RPC expects the destination's public key and the payment hash (if any) to be encoded as hex strings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcSendRequest(); // \Lnd\Rest\Model\LnrpcSendRequest | 

try {
    $result = $apiInstance->sendPaymentSync($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->sendPaymentSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcSendRequest**](../Model/LnrpcSendRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcSendResponse**](../Model/LnrpcSendResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendToRouteSync**
> \Lnd\Rest\Model\LnrpcSendResponse sendToRouteSync($body)

* SendToRouteSync is a synchronous version of SendToRoute. It Will block until the payment either fails or succeeds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcSendToRouteRequest(); // \Lnd\Rest\Model\LnrpcSendToRouteRequest | 

try {
    $result = $apiInstance->sendToRouteSync($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->sendToRouteSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcSendToRouteRequest**](../Model/LnrpcSendToRouteRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcSendResponse**](../Model/LnrpcSendResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signMessage**
> \Lnd\Rest\Model\LnrpcSignMessageResponse signMessage($body)

* lncli: `signmessage` SignMessage signs a message with this node's private key. The returned signature string is `zbase32` encoded and pubkey recoverable, meaning that only the message digest and signature are needed for verification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcSignMessageRequest(); // \Lnd\Rest\Model\LnrpcSignMessageRequest | 

try {
    $result = $apiInstance->signMessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->signMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcSignMessageRequest**](../Model/LnrpcSignMessageRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcSignMessageResponse**](../Model/LnrpcSignMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribeInvoices**
> \Lnd\Rest\Model\LnrpcInvoice subscribeInvoices($addIndex, $settleIndex)

* SubscribeInvoices returns a uni-directional stream (server -> client) for notifying the client of newly added/settled invoices. The caller can optionally specify the add_index and/or the settle_index. If the add_index is specified, then we'll first start by sending add invoice events for all invoices with an add_index greater than the specified value.  If the settle_index is specified, the next, we'll send out all settle events for invoices with a settle_index greater than the specified value.  One or both of these fields can be set. If no fields are set, then we'll only send out the latest add/settle events.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addIndex = "addIndex_example"; // string | * If specified (non-zero), then we'll first start by sending out notifications for all added indexes with an add_index greater than this value. This allows callers to catch up on any events they missed while they weren't connected to the streaming RPC.
$settleIndex = "settleIndex_example"; // string | * If specified (non-zero), then we'll first start by sending out notifications for all settled indexes with an settle_index greater than this value. This allows callers to catch up on any events they missed while they weren't connected to the streaming RPC.

try {
    $result = $apiInstance->subscribeInvoices($addIndex, $settleIndex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->subscribeInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addIndex** | **string**| * If specified (non-zero), then we&#39;ll first start by sending out notifications for all added indexes with an add_index greater than this value. This allows callers to catch up on any events they missed while they weren&#39;t connected to the streaming RPC. | [optional]
 **settleIndex** | **string**| * If specified (non-zero), then we&#39;ll first start by sending out notifications for all settled indexes with an settle_index greater than this value. This allows callers to catch up on any events they missed while they weren&#39;t connected to the streaming RPC. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcInvoice**](../Model/LnrpcInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChannelPolicy**
> \Lnd\Rest\Model\LnrpcPolicyUpdateResponse updateChannelPolicy($body)

* lncli: `updatechanpolicy` UpdateChannelPolicy allows the caller to update the fee schedule and channel policies for all channels globally, or a particular channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcPolicyUpdateRequest(); // \Lnd\Rest\Model\LnrpcPolicyUpdateRequest | 

try {
    $result = $apiInstance->updateChannelPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->updateChannelPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcPolicyUpdateRequest**](../Model/LnrpcPolicyUpdateRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcPolicyUpdateResponse**](../Model/LnrpcPolicyUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyChanBackup**
> \Lnd\Rest\Model\LnrpcVerifyChanBackupResponse verifyChanBackup($body)

* VerifyChanBackup allows a caller to verify the integrity of a channel backup snapshot. This method will accept either a packed Single or a packed Multi. Specifying both will result in an error.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcChanBackupSnapshot(); // \Lnd\Rest\Model\LnrpcChanBackupSnapshot | 

try {
    $result = $apiInstance->verifyChanBackup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->verifyChanBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcChanBackupSnapshot**](../Model/LnrpcChanBackupSnapshot.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcVerifyChanBackupResponse**](../Model/LnrpcVerifyChanBackupResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyMessage**
> \Lnd\Rest\Model\LnrpcVerifyMessageResponse verifyMessage($body)

* lncli: `verifymessage` VerifyMessage verifies a signature over a msg. The signature must be zbase32 encoded and signed by an active node in the resident node's channel database. In addition to returning the validity of the signature, VerifyMessage also returns the recovered pubkey from the signature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Lnd\Rest\Model\LnrpcVerifyMessageRequest(); // \Lnd\Rest\Model\LnrpcVerifyMessageRequest | 

try {
    $result = $apiInstance->verifyMessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->verifyMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Lnd\Rest\Model\LnrpcVerifyMessageRequest**](../Model/LnrpcVerifyMessageRequest.md)|  |

### Return type

[**\Lnd\Rest\Model\LnrpcVerifyMessageResponse**](../Model/LnrpcVerifyMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **walletBalance**
> \Lnd\Rest\Model\LnrpcWalletBalanceResponse walletBalance()

* lncli: `walletbalance` WalletBalance returns total unspent outputs(confirmed and unconfirmed), all confirmed unspent outputs and all unconfirmed unspent outputs under control of the wallet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->walletBalance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->walletBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Lnd\Rest\Model\LnrpcWalletBalanceResponse**](../Model/LnrpcWalletBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

