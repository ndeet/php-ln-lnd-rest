<?php
/**
 * LnrpcPaymentFailureReason
 *
 * PHP version 5
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * rpc.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Lnd\Rest\Model;
use \Lnd\Rest\ObjectSerializer;

/**
 * LnrpcPaymentFailureReason Class Doc Comment
 *
 * @category Class
 * @description - FAILURE_REASON_NONE: Payment isn&#39;t failed (yet).  - FAILURE_REASON_TIMEOUT: There are more routes to try, but the payment timeout was exceeded.  - FAILURE_REASON_NO_ROUTE: All possible routes were tried and failed permanently. Or were no routes to the destination at all.  - FAILURE_REASON_ERROR: A non-recoverable error has occured.  - FAILURE_REASON_INCORRECT_PAYMENT_DETAILS: Payment details incorrect (unknown hash, invalid amt or invalid final cltv delta)  - FAILURE_REASON_INSUFFICIENT_BALANCE: Insufficient local balance.
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcPaymentFailureReason
{
    /**
     * Possible values of this enum
     */
    const NONE = 'FAILURE_REASON_NONE';
    const TIMEOUT = 'FAILURE_REASON_TIMEOUT';
    const NO_ROUTE = 'FAILURE_REASON_NO_ROUTE';
    const ERROR = 'FAILURE_REASON_ERROR';
    const INCORRECT_PAYMENT_DETAILS = 'FAILURE_REASON_INCORRECT_PAYMENT_DETAILS';
    const INSUFFICIENT_BALANCE = 'FAILURE_REASON_INSUFFICIENT_BALANCE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::TIMEOUT,
            self::NO_ROUTE,
            self::ERROR,
            self::INCORRECT_PAYMENT_DETAILS,
            self::INSUFFICIENT_BALANCE,
        ];
    }
}

