<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/answer.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\Answer\Step\Action\Observation\SearchResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Snippet information.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.Answer.Step.Action.Observation.SearchResult.SnippetInfo</code>
 */
class SnippetInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Snippet content.
     *
     * Generated from protobuf field <code>string snippet = 1;</code>
     */
    protected $snippet = '';
    /**
     * Status of the snippet defined by the search team.
     *
     * Generated from protobuf field <code>string snippet_status = 2;</code>
     */
    protected $snippet_status = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $snippet
     *           Snippet content.
     *     @type string $snippet_status
     *           Status of the snippet defined by the search team.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Answer::initOnce();
        parent::__construct($data);
    }

    /**
     * Snippet content.
     *
     * Generated from protobuf field <code>string snippet = 1;</code>
     * @return string
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * Snippet content.
     *
     * Generated from protobuf field <code>string snippet = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSnippet($var)
    {
        GPBUtil::checkString($var, True);
        $this->snippet = $var;

        return $this;
    }

    /**
     * Status of the snippet defined by the search team.
     *
     * Generated from protobuf field <code>string snippet_status = 2;</code>
     * @return string
     */
    public function getSnippetStatus()
    {
        return $this->snippet_status;
    }

    /**
     * Status of the snippet defined by the search team.
     *
     * Generated from protobuf field <code>string snippet_status = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSnippetStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->snippet_status = $var;

        return $this;
    }

}

