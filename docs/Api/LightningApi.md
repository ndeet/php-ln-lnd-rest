# Lnd\Rest\LightningApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvoice**](LightningApi.md#addInvoice) | **POST** /v1/invoices | * lncli: &#x60;addinvoice&#x60; AddInvoice attempts to add a new invoice to the invoice database. Any duplicated invoices are rejected, therefore all invoices *must* have a unique payment preimage.
[**channelBalance**](LightningApi.md#channelBalance) | **GET** /v1/balance/channels | * lncli: &#x60;channelbalance&#x60; ChannelBalance returns the total funds available across all open channels in satoshis.
[**closeChannel**](LightningApi.md#closeChannel) | **DELETE** /v1/channels/{channel_point.funding_txid_str}/{channel_point.output_index} | * lncli: &#x60;closechannel&#x60; CloseChannel attempts to close an active channel identified by its channel outpoint (ChannelPoint). The actions of this method can additionally be augmented to attempt a force close after a timeout period in the case of an inactive peer. If a non-force close (cooperative closure) is requested, then the user can specify either a target number of blocks until the closure transaction is confirmed, or a manual fee rate. If neither are specified, then a default lax, block confirmation target is used.
[**connectPeer**](LightningApi.md#connectPeer) | **POST** /v1/peers | * lncli: &#x60;connect&#x60; ConnectPeer attempts to establish a connection to a remote peer. This is at the networking level, and is used for communication between nodes. This is distinct from establishing a channel with a peer.
[**decodePayReq**](LightningApi.md#decodePayReq) | **GET** /v1/payreq/{pay_req} | * lncli: &#x60;decodepayreq&#x60; DecodePayReq takes an encoded payment request string and attempts to decode it, returning a full description of the conditions encoded within the payment request.
[**deleteAllPayments**](LightningApi.md#deleteAllPayments) | **DELETE** /v1/payments | * DeleteAllPayments deletes all outgoing payments from DB.
[**describeGraph**](LightningApi.md#describeGraph) | **GET** /v1/graph | * lncli: &#x60;describegraph&#x60; DescribeGraph returns a description of the latest graph state from the point of view of the node. The graph information is partitioned into two components: all the nodes/vertexes, and all the edges that connect the vertexes themselves.  As this is a directed graph, the edges also contain the node directional specific routing policy which includes: the time lock delta, fee information, etc.
[**disconnectPeer**](LightningApi.md#disconnectPeer) | **DELETE** /v1/peers/{pub_key} | * lncli: &#x60;disconnect&#x60; DisconnectPeer attempts to disconnect one peer from another identified by a given pubKey. In the case that we currently have a pending or active channel with the target peer, then this action will be not be allowed.
[**feeReport**](LightningApi.md#feeReport) | **GET** /v1/fees | * lncli: &#x60;feereport&#x60; FeeReport allows the caller to obtain a report detailing the current fee schedule enforced by the node globally for each channel.
[**forwardingHistory**](LightningApi.md#forwardingHistory) | **POST** /v1/switch | * lncli: &#x60;fwdinghistory&#x60; ForwardingHistory allows the caller to query the htlcswitch for a record of all HTLC&#39;s forwarded within the target time range, and integer offset within that time range. If no time-range is specified, then the first chunk of the past 24 hrs of forwarding history are returned.
[**getChanInfo**](LightningApi.md#getChanInfo) | **GET** /v1/graph/edge/{chan_id} | * lncli: &#x60;getchaninfo&#x60; GetChanInfo returns the latest authenticated network announcement for the given channel identified by its channel ID: an 8-byte integer which uniquely identifies the location of transaction&#39;s funding output within the blockchain.
[**getInfo**](LightningApi.md#getInfo) | **GET** /v1/getinfo | * lncli: &#x60;getinfo&#x60; GetInfo returns general information concerning the lightning node including it&#39;s identity pubkey, alias, the chains it is connected to, and information concerning the number of open+pending channels.
[**getNetworkInfo**](LightningApi.md#getNetworkInfo) | **GET** /v1/graph/info | * lncli: &#x60;getnetworkinfo&#x60; GetNetworkInfo returns some basic stats about the known channel graph from the point of view of the node.
[**getNodeInfo**](LightningApi.md#getNodeInfo) | **GET** /v1/graph/node/{pub_key} | * lncli: &#x60;getnodeinfo&#x60; GetNodeInfo returns the latest advertised, aggregated, and authenticated channel information for the specified node identified by its public key.
[**getTransactions**](LightningApi.md#getTransactions) | **GET** /v1/transactions | * lncli: &#x60;listchaintxns&#x60; GetTransactions returns a list describing all the known transactions relevant to the wallet.
[**listChannels**](LightningApi.md#listChannels) | **GET** /v1/channels | * lncli: &#x60;listchannels&#x60; ListChannels returns a description of all the open channels that this node is a participant in.
[**listInvoices**](LightningApi.md#listInvoices) | **GET** /v1/invoices | * lncli: &#x60;listinvoices&#x60; ListInvoices returns a list of all the invoices currently stored within the database. Any active debug invoices are ignored.
[**listPayments**](LightningApi.md#listPayments) | **GET** /v1/payments | * lncli: &#x60;listpayments&#x60; ListPayments returns a list of all outgoing payments.
[**listPeers**](LightningApi.md#listPeers) | **GET** /v1/peers | * lncli: &#x60;listpeers&#x60; ListPeers returns a verbose listing of all currently active peers.
[**lookupInvoice**](LightningApi.md#lookupInvoice) | **GET** /v1/invoice/{r_hash_str} | * lncli: &#x60;lookupinvoice&#x60; LookupInvoice attempts to look up an invoice according to its payment hash. The passed payment hash *must* be exactly 32 bytes, if not, an error is returned.
[**newWitnessAddress**](LightningApi.md#newWitnessAddress) | **GET** /v1/newaddress | * NewWitnessAddress creates a new witness address under control of the local wallet.
[**openChannelSync**](LightningApi.md#openChannelSync) | **POST** /v1/channels | * OpenChannelSync is a synchronous version of the OpenChannel RPC call. This call is meant to be consumed by clients to the REST proxy. As with all other sync calls, all byte slices are intended to be populated as hex encoded strings.
[**pendingChannels**](LightningApi.md#pendingChannels) | **GET** /v1/channels/pending | * lncli: &#x60;pendingchannels&#x60; PendingChannels returns a list of all the channels that are currently considered \&quot;pending\&quot;. A channel is pending if it has finished the funding workflow and is waiting for confirmations for the funding txn, or is in the process of closure, either initiated cooperatively or non-cooperatively.
[**queryRoutes**](LightningApi.md#queryRoutes) | **GET** /v1/graph/routes/{pub_key}/{amt} | * lncli: &#x60;queryroutes&#x60; QueryRoutes attempts to query the daemon&#39;s Channel Router for a possible route to a target destination capable of carrying a specific amount of satoshis. The retuned route contains the full details required to craft and send an HTLC, also including the necessary information that should be present within the Sphinx packet encapsulated within the HTLC.
[**sendCoins**](LightningApi.md#sendCoins) | **POST** /v1/transactions | * lncli: &#x60;sendcoins&#x60; SendCoins executes a request to send coins to a particular address. Unlike SendMany, this RPC call only allows creating a single output at a time. If neither target_conf, or sat_per_byte are set, then the internal wallet will consult its fee model to determine a fee for the default confirmation target.
[**sendPaymentSync**](LightningApi.md#sendPaymentSync) | **POST** /v1/channels/transactions | * SendPaymentSync is the synchronous non-streaming version of SendPayment. This RPC is intended to be consumed by clients of the REST proxy. Additionally, this RPC expects the destination&#39;s public key and the payment hash (if any) to be encoded as hex strings.
[**subscribeInvoices**](LightningApi.md#subscribeInvoices) | **GET** /v1/invoices/subscribe | * SubscribeInvoices returns a uni-directional stream (sever -&gt; client) for notifying the client of newly added/settled invoices.
[**updateChannelPolicy**](LightningApi.md#updateChannelPolicy) | **POST** /v1/chanpolicy | * lncli: &#x60;updatechanpolicy&#x60; UpdateChannelPolicy allows the caller to update the fee schedule and channel policies for all channels globally, or a particular channel.
[**walletBalance**](LightningApi.md#walletBalance) | **GET** /v1/balance/blockchain | * lncli: &#x60;walletbalance&#x60; WalletBalance returns total unspent outputs(confirmed and unconfirmed), all confirmed unspent outputs and all unconfirmed unspent outputs under control of the wallet.


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
> \Lnd\Rest\Model\LnrpcChannelGraph describeGraph()

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

try {
    $result = $apiInstance->describeGraph();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->describeGraph: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

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

* lncli: `fwdinghistory` ForwardingHistory allows the caller to query the htlcswitch for a record of all HTLC's forwarded within the target time range, and integer offset within that time range. If no time-range is specified, then the first chunk of the past 24 hrs of forwarding history are returned.

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
> \Lnd\Rest\Model\LnrpcNodeInfo getNodeInfo($pubKey)

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

try {
    $result = $apiInstance->getNodeInfo($pubKey);
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
> \Lnd\Rest\Model\LnrpcListInvoiceResponse listInvoices($pendingOnly)

* lncli: `listinvoices` ListInvoices returns a list of all the invoices currently stored within the database. Any active debug invoices are ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Lnd\Rest\Api\LightningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pendingOnly = true; // bool | / Toggles if all invoices should be returned, or only those that are currently unsettled.

try {
    $result = $apiInstance->listInvoices($pendingOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->listInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pendingOnly** | **bool**| / Toggles if all invoices should be returned, or only those that are currently unsettled. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcListInvoiceResponse**](../Model/LnrpcListInvoiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPayments**
> \Lnd\Rest\Model\LnrpcListPaymentsResponse listPayments()

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

try {
    $result = $apiInstance->listPayments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->listPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

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

# **newWitnessAddress**
> \Lnd\Rest\Model\LnrpcNewAddressResponse newWitnessAddress()

* NewWitnessAddress creates a new witness address under control of the local wallet.

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
    $result = $apiInstance->newWitnessAddress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->newWitnessAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

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
> \Lnd\Rest\Model\LnrpcQueryRoutesResponse queryRoutes($pubKey, $amt, $numRoutes)

* lncli: `queryroutes` QueryRoutes attempts to query the daemon's Channel Router for a possible route to a target destination capable of carrying a specific amount of satoshis. The retuned route contains the full details required to craft and send an HTLC, also including the necessary information that should be present within the Sphinx packet encapsulated within the HTLC.

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
$numRoutes = 56; // int | / The max number of routes to return.

try {
    $result = $apiInstance->queryRoutes($pubKey, $amt, $numRoutes);
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
 **numRoutes** | **int**| / The max number of routes to return. | [optional]

### Return type

[**\Lnd\Rest\Model\LnrpcQueryRoutesResponse**](../Model/LnrpcQueryRoutesResponse.md)

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

# **subscribeInvoices**
> \Lnd\Rest\Model\LnrpcInvoice subscribeInvoices()

* SubscribeInvoices returns a uni-directional stream (sever -> client) for notifying the client of newly added/settled invoices.

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
    $result = $apiInstance->subscribeInvoices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LightningApi->subscribeInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

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

