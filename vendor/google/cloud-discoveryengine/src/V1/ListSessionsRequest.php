<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for ListSessions method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.ListSessionsRequest</code>
 */
class ListSessionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The data store resource name. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Maximum number of results to return. If unspecified, defaults
     * to 50. Max allowed value is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous `ListSessions` call.
     * Provide this to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * A filter to apply on the list results. The supported features are:
     * user_pseudo_id, state.
     * Example:
     * "user_pseudo_id = some_id"
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';
    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported fields:
     *   * `update_time`
     *   * `create_time`
     *   * `session_name`
     * Example:
     * "update_time desc"
     * "create_time"
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The data store resource name. Format:
     *                       `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
     *                       Please see {@see ConversationalSearchServiceClient::dataStoreName()} for help formatting this field.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1\ListSessionsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The data store resource name. Format:
     *           `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
     *     @type int $page_size
     *           Maximum number of results to return. If unspecified, defaults
     *           to 50. Max allowed value is 1000.
     *     @type string $page_token
     *           A page token, received from a previous `ListSessions` call.
     *           Provide this to retrieve the subsequent page.
     *     @type string $filter
     *           A filter to apply on the list results. The supported features are:
     *           user_pseudo_id, state.
     *           Example:
     *           "user_pseudo_id = some_id"
     *     @type string $order_by
     *           A comma-separated list of fields to order by, sorted in ascending order.
     *           Use "desc" after a field name for descending.
     *           Supported fields:
     *             * `update_time`
     *             * `create_time`
     *             * `session_name`
     *           Example:
     *           "update_time desc"
     *           "create_time"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The data store resource name. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The data store resource name. Format:
     * `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Maximum number of results to return. If unspecified, defaults
     * to 50. Max allowed value is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of results to return. If unspecified, defaults
     * to 50. Max allowed value is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous `ListSessions` call.
     * Provide this to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous `ListSessions` call.
     * Provide this to retrieve the subsequent page.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * A filter to apply on the list results. The supported features are:
     * user_pseudo_id, state.
     * Example:
     * "user_pseudo_id = some_id"
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter to apply on the list results. The supported features are:
     * user_pseudo_id, state.
     * Example:
     * "user_pseudo_id = some_id"
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported fields:
     *   * `update_time`
     *   * `create_time`
     *   * `session_name`
     * Example:
     * "update_time desc"
     * "create_time"
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported fields:
     *   * `update_time`
     *   * `create_time`
     *   * `session_name`
     * Example:
     * "update_time desc"
     * "create_time"
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

