<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/site_search_engine.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SiteVerificationInfo;

use UnexpectedValueException;

/**
 * Site verification state.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1beta.SiteVerificationInfo.SiteVerificationState</code>
 */
class SiteVerificationState
{
    /**
     * Defaults to VERIFIED.
     *
     * Generated from protobuf enum <code>SITE_VERIFICATION_STATE_UNSPECIFIED = 0;</code>
     */
    const SITE_VERIFICATION_STATE_UNSPECIFIED = 0;
    /**
     * Site ownership verified.
     *
     * Generated from protobuf enum <code>VERIFIED = 1;</code>
     */
    const VERIFIED = 1;
    /**
     * Site ownership pending verification or verification failed.
     *
     * Generated from protobuf enum <code>UNVERIFIED = 2;</code>
     */
    const UNVERIFIED = 2;
    /**
     * Site exempt from verification, e.g., a public website that opens to all.
     *
     * Generated from protobuf enum <code>EXEMPTED = 3;</code>
     */
    const EXEMPTED = 3;

    private static $valueToName = [
        self::SITE_VERIFICATION_STATE_UNSPECIFIED => 'SITE_VERIFICATION_STATE_UNSPECIFIED',
        self::VERIFIED => 'VERIFIED',
        self::UNVERIFIED => 'UNVERIFIED',
        self::EXEMPTED => 'EXEMPTED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


