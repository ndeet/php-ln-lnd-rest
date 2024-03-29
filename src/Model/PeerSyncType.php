<?php
/**
 * PeerSyncType
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
 * PeerSyncType Class Doc Comment
 *
 * @category Class
 * @description - UNKNOWN_SYNC: Denotes that we cannot determine the peer&#39;s current sync type.  - ACTIVE_SYNC: Denotes that we are actively receiving new graph updates from the peer.  - PASSIVE_SYNC: Denotes that we are not receiving new graph updates from the peer.  - PINNED_SYNC: Denotes that this peer is pinned into an active sync.
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PeerSyncType
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN_SYNC = 'UNKNOWN_SYNC';
    const ACTIVE_SYNC = 'ACTIVE_SYNC';
    const PASSIVE_SYNC = 'PASSIVE_SYNC';
    const PINNED_SYNC = 'PINNED_SYNC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN_SYNC,
            self::ACTIVE_SYNC,
            self::PASSIVE_SYNC,
            self::PINNED_SYNC,
        ];
    }
}


