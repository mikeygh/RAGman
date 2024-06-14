<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/common.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines embedding config, used for bring your own embeddings feature.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.EmbeddingConfig</code>
 */
class EmbeddingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Full field path in the schema mapped as embedding field.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     */
    protected $field_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_path
     *           Full field path in the schema mapped as embedding field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Full field path in the schema mapped as embedding field.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     * @return string
     */
    public function getFieldPath()
    {
        return $this->field_path;
    }

    /**
     * Full field path in the schema mapped as embedding field.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_path = $var;

        return $this;
    }

}
