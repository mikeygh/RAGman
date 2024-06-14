<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/control.proto

namespace Google\Cloud\DiscoveryEngine\V1\Condition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Matcher for search request query
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Condition.QueryTerm</code>
 */
class QueryTerm extends \Google\Protobuf\Internal\Message
{
    /**
     * The specific query value to match against
     * Must be lowercase, must be UTF-8.
     * Can have at most 3 space separated terms if full_match is true.
     * Cannot be an empty string.
     * Maximum length of 5000 characters.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     */
    protected $value = '';
    /**
     * Whether the search query needs to exactly match the query term.
     *
     * Generated from protobuf field <code>bool full_match = 2;</code>
     */
    protected $full_match = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           The specific query value to match against
     *           Must be lowercase, must be UTF-8.
     *           Can have at most 3 space separated terms if full_match is true.
     *           Cannot be an empty string.
     *           Maximum length of 5000 characters.
     *     @type bool $full_match
     *           Whether the search query needs to exactly match the query term.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * The specific query value to match against
     * Must be lowercase, must be UTF-8.
     * Can have at most 3 space separated terms if full_match is true.
     * Cannot be an empty string.
     * Maximum length of 5000 characters.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The specific query value to match against
     * Must be lowercase, must be UTF-8.
     * Can have at most 3 space separated terms if full_match is true.
     * Cannot be an empty string.
     * Maximum length of 5000 characters.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Whether the search query needs to exactly match the query term.
     *
     * Generated from protobuf field <code>bool full_match = 2;</code>
     * @return bool
     */
    public function getFullMatch()
    {
        return $this->full_match;
    }

    /**
     * Whether the search query needs to exactly match the query term.
     *
     * Generated from protobuf field <code>bool full_match = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setFullMatch($var)
    {
        GPBUtil::checkBool($var);
        $this->full_match = $var;

        return $this;
    }

}


