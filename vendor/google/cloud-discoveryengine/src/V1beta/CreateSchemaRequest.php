<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/schema_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [SchemaService.CreateSchema][google.cloud.discoveryengine.v1beta.SchemaService.CreateSchema]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.CreateSchemaRequest</code>
 */
class CreateSchemaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent data store resource name, in the format of
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The [Schema][google.cloud.discoveryengine.v1beta.Schema] to
     * create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Schema schema = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $schema = null;
    /**
     * Required. The ID to use for the
     * [Schema][google.cloud.discoveryengine.v1beta.Schema], which becomes the
     * final component of the
     * [Schema.name][google.cloud.discoveryengine.v1beta.Schema.name].
     * This field should conform to
     * [RFC-1034](https://tools.ietf.org/html/rfc1034) standard with a length
     * limit of 63 characters.
     *
     * Generated from protobuf field <code>string schema_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $schema_id = '';

    /**
     * @param string                                      $parent   Required. The parent data store resource name, in the format of
     *                                                              `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`. Please see
     *                                                              {@see SchemaServiceClient::dataStoreName()} for help formatting this field.
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Schema $schema   Required. The [Schema][google.cloud.discoveryengine.v1beta.Schema] to
     *                                                              create.
     * @param string                                      $schemaId Required. The ID to use for the
     *                                                              [Schema][google.cloud.discoveryengine.v1beta.Schema], which becomes the
     *                                                              final component of the
     *                                                              [Schema.name][google.cloud.discoveryengine.v1beta.Schema.name].
     *
     *                                                              This field should conform to
     *                                                              [RFC-1034](https://tools.ietf.org/html/rfc1034) standard with a length
     *                                                              limit of 63 characters.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1beta\CreateSchemaRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\DiscoveryEngine\V1beta\Schema $schema, string $schemaId): self
    {
        return (new self())
            ->setParent($parent)
            ->setSchema($schema)
            ->setSchemaId($schemaId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent data store resource name, in the format of
     *           `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\Schema $schema
     *           Required. The [Schema][google.cloud.discoveryengine.v1beta.Schema] to
     *           create.
     *     @type string $schema_id
     *           Required. The ID to use for the
     *           [Schema][google.cloud.discoveryengine.v1beta.Schema], which becomes the
     *           final component of the
     *           [Schema.name][google.cloud.discoveryengine.v1beta.Schema.name].
     *           This field should conform to
     *           [RFC-1034](https://tools.ietf.org/html/rfc1034) standard with a length
     *           limit of 63 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SchemaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent data store resource name, in the format of
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent data store resource name, in the format of
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}`.
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
     * Required. The [Schema][google.cloud.discoveryengine.v1beta.Schema] to
     * create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Schema schema = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\Schema|null
     */
    public function getSchema()
    {
        return $this->schema;
    }

    public function hasSchema()
    {
        return isset($this->schema);
    }

    public function clearSchema()
    {
        unset($this->schema);
    }

    /**
     * Required. The [Schema][google.cloud.discoveryengine.v1beta.Schema] to
     * create.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.Schema schema = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\Schema $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\Schema::class);
        $this->schema = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the
     * [Schema][google.cloud.discoveryengine.v1beta.Schema], which becomes the
     * final component of the
     * [Schema.name][google.cloud.discoveryengine.v1beta.Schema.name].
     * This field should conform to
     * [RFC-1034](https://tools.ietf.org/html/rfc1034) standard with a length
     * limit of 63 characters.
     *
     * Generated from protobuf field <code>string schema_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSchemaId()
    {
        return $this->schema_id;
    }

    /**
     * Required. The ID to use for the
     * [Schema][google.cloud.discoveryengine.v1beta.Schema], which becomes the
     * final component of the
     * [Schema.name][google.cloud.discoveryengine.v1beta.Schema.name].
     * This field should conform to
     * [RFC-1034](https://tools.ietf.org/html/rfc1034) standard with a length
     * limit of 63 characters.
     *
     * Generated from protobuf field <code>string schema_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSchemaId($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema_id = $var;

        return $this;
    }

}

