<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/grounding.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Grounding Fact.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.GroundingFact</code>
 */
class GroundingFact extends \Google\Protobuf\Internal\Message
{
    /**
     * Text content of the fact. Can be at most 10K characters long.
     *
     * Generated from protobuf field <code>string fact_text = 1;</code>
     */
    protected $fact_text = '';
    /**
     * Attributes associated with the fact.
     * Common attributes include `source` (indicating where the fact was sourced
     * from), `author` (indicating the author of the fact), and so on.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fact_text
     *           Text content of the fact. Can be at most 10K characters long.
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Attributes associated with the fact.
     *           Common attributes include `source` (indicating where the fact was sourced
     *           from), `author` (indicating the author of the fact), and so on.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Grounding::initOnce();
        parent::__construct($data);
    }

    /**
     * Text content of the fact. Can be at most 10K characters long.
     *
     * Generated from protobuf field <code>string fact_text = 1;</code>
     * @return string
     */
    public function getFactText()
    {
        return $this->fact_text;
    }

    /**
     * Text content of the fact. Can be at most 10K characters long.
     *
     * Generated from protobuf field <code>string fact_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFactText($var)
    {
        GPBUtil::checkString($var, True);
        $this->fact_text = $var;

        return $this;
    }

    /**
     * Attributes associated with the fact.
     * Common attributes include `source` (indicating where the fact was sourced
     * from), `author` (indicating the author of the fact), and so on.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Attributes associated with the fact.
     * Common attributes include `source` (indicating where the fact was sourced
     * from), `author` (indicating the author of the fact), and so on.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

}

