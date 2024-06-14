<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/control.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\Control;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Adjusts order of products in returned list.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.Control.BoostAction</code>
 */
class BoostAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Strength of the boost, which should be in [-1, 1]. Negative
     * boost means demotion. Default is 0.0 (No-op).
     *
     * Generated from protobuf field <code>float boost = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $boost = 0.0;
    /**
     * Required. Specifies which products to apply the boost to.
     * If no filter is provided all products will be boosted (No-op).
     * Syntax documentation:
     * https://cloud.google.com/retail/docs/filter-and-order
     * Maximum length is 5000 characters.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filter = '';
    /**
     * Required. Specifies which data store's documents can be boosted by this
     * control. Full data store name e.g.
     * projects/123/locations/global/collections/default_collection/dataStores/default_data_store
     *
     * Generated from protobuf field <code>string data_store = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $data_store = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $boost
     *           Required. Strength of the boost, which should be in [-1, 1]. Negative
     *           boost means demotion. Default is 0.0 (No-op).
     *     @type string $filter
     *           Required. Specifies which products to apply the boost to.
     *           If no filter is provided all products will be boosted (No-op).
     *           Syntax documentation:
     *           https://cloud.google.com/retail/docs/filter-and-order
     *           Maximum length is 5000 characters.
     *           Otherwise an INVALID ARGUMENT error is thrown.
     *     @type string $data_store
     *           Required. Specifies which data store's documents can be boosted by this
     *           control. Full data store name e.g.
     *           projects/123/locations/global/collections/default_collection/dataStores/default_data_store
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Strength of the boost, which should be in [-1, 1]. Negative
     * boost means demotion. Default is 0.0 (No-op).
     *
     * Generated from protobuf field <code>float boost = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**
     * Required. Strength of the boost, which should be in [-1, 1]. Negative
     * boost means demotion. Default is 0.0 (No-op).
     *
     * Generated from protobuf field <code>float boost = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setBoost($var)
    {
        GPBUtil::checkFloat($var);
        $this->boost = $var;

        return $this;
    }

    /**
     * Required. Specifies which products to apply the boost to.
     * If no filter is provided all products will be boosted (No-op).
     * Syntax documentation:
     * https://cloud.google.com/retail/docs/filter-and-order
     * Maximum length is 5000 characters.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. Specifies which products to apply the boost to.
     * If no filter is provided all products will be boosted (No-op).
     * Syntax documentation:
     * https://cloud.google.com/retail/docs/filter-and-order
     * Maximum length is 5000 characters.
     * Otherwise an INVALID ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Specifies which data store's documents can be boosted by this
     * control. Full data store name e.g.
     * projects/123/locations/global/collections/default_collection/dataStores/default_data_store
     *
     * Generated from protobuf field <code>string data_store = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataStore()
    {
        return $this->data_store;
    }

    /**
     * Required. Specifies which data store's documents can be boosted by this
     * control. Full data store name e.g.
     * projects/123/locations/global/collections/default_collection/dataStores/default_data_store
     *
     * Generated from protobuf field <code>string data_store = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataStore($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_store = $var;

        return $this;
    }

}

