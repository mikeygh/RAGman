<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A specification for configuring snippets in a search response.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SnippetSpec</code>
 */
class SnippetSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * [DEPRECATED] This field is deprecated. To control snippet return, use
     * `return_snippet` field. For backwards compatibility, we will return
     * snippet if max_snippet_count > 0.
     *
     * Generated from protobuf field <code>int32 max_snippet_count = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $max_snippet_count = 0;
    /**
     * [DEPRECATED] This field is deprecated and will have no affect on the
     * snippet.
     *
     * Generated from protobuf field <code>bool reference_only = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $reference_only = false;
    /**
     * If `true`, then return snippet. If no snippet can be generated, we
     * return "No snippet is available for this page." A `snippet_status` with
     * `SUCCESS` or `NO_SNIPPET_AVAILABLE` will also be returned.
     *
     * Generated from protobuf field <code>bool return_snippet = 3;</code>
     */
    protected $return_snippet = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_snippet_count
     *           [DEPRECATED] This field is deprecated. To control snippet return, use
     *           `return_snippet` field. For backwards compatibility, we will return
     *           snippet if max_snippet_count > 0.
     *     @type bool $reference_only
     *           [DEPRECATED] This field is deprecated and will have no affect on the
     *           snippet.
     *     @type bool $return_snippet
     *           If `true`, then return snippet. If no snippet can be generated, we
     *           return "No snippet is available for this page." A `snippet_status` with
     *           `SUCCESS` or `NO_SNIPPET_AVAILABLE` will also be returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * [DEPRECATED] This field is deprecated. To control snippet return, use
     * `return_snippet` field. For backwards compatibility, we will return
     * snippet if max_snippet_count > 0.
     *
     * Generated from protobuf field <code>int32 max_snippet_count = 1 [deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getMaxSnippetCount()
    {
        @trigger_error('max_snippet_count is deprecated.', E_USER_DEPRECATED);
        return $this->max_snippet_count;
    }

    /**
     * [DEPRECATED] This field is deprecated. To control snippet return, use
     * `return_snippet` field. For backwards compatibility, we will return
     * snippet if max_snippet_count > 0.
     *
     * Generated from protobuf field <code>int32 max_snippet_count = 1 [deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setMaxSnippetCount($var)
    {
        @trigger_error('max_snippet_count is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkInt32($var);
        $this->max_snippet_count = $var;

        return $this;
    }

    /**
     * [DEPRECATED] This field is deprecated and will have no affect on the
     * snippet.
     *
     * Generated from protobuf field <code>bool reference_only = 2 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getReferenceOnly()
    {
        @trigger_error('reference_only is deprecated.', E_USER_DEPRECATED);
        return $this->reference_only;
    }

    /**
     * [DEPRECATED] This field is deprecated and will have no affect on the
     * snippet.
     *
     * Generated from protobuf field <code>bool reference_only = 2 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setReferenceOnly($var)
    {
        @trigger_error('reference_only is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->reference_only = $var;

        return $this;
    }

    /**
     * If `true`, then return snippet. If no snippet can be generated, we
     * return "No snippet is available for this page." A `snippet_status` with
     * `SUCCESS` or `NO_SNIPPET_AVAILABLE` will also be returned.
     *
     * Generated from protobuf field <code>bool return_snippet = 3;</code>
     * @return bool
     */
    public function getReturnSnippet()
    {
        return $this->return_snippet;
    }

    /**
     * If `true`, then return snippet. If no snippet can be generated, we
     * return "No snippet is available for this page." A `snippet_status` with
     * `SUCCESS` or `NO_SNIPPET_AVAILABLE` will also be returned.
     *
     * Generated from protobuf field <code>bool return_snippet = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnSnippet($var)
    {
        GPBUtil::checkBool($var);
        $this->return_snippet = $var;

        return $this;
    }

}

