<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Document reference.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchResponse.Summary.Reference</code>
 */
class Reference extends \Google\Protobuf\Internal\Message
{
    /**
     * Title of the document.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * Required.
     * [Document.name][google.cloud.discoveryengine.v1beta.Document.name] of
     * the document. Full resource name of the referenced document, in the
     * format
     * `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;branches/&#42;&#47;documents/&#42;`.
     *
     * Generated from protobuf field <code>string document = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $document = '';
    /**
     * Cloud Storage or HTTP uri for the document.
     *
     * Generated from protobuf field <code>string uri = 3;</code>
     */
    protected $uri = '';
    /**
     * List of cited chunk contents derived from document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.Summary.Reference.ChunkContent chunk_contents = 4;</code>
     */
    private $chunk_contents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           Title of the document.
     *     @type string $document
     *           Required.
     *           [Document.name][google.cloud.discoveryengine.v1beta.Document.name] of
     *           the document. Full resource name of the referenced document, in the
     *           format
     *           `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;branches/&#42;&#47;documents/&#42;`.
     *     @type string $uri
     *           Cloud Storage or HTTP uri for the document.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\Reference\ChunkContent>|\Google\Protobuf\Internal\RepeatedField $chunk_contents
     *           List of cited chunk contents derived from document content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Title of the document.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Title of the document.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Required.
     * [Document.name][google.cloud.discoveryengine.v1beta.Document.name] of
     * the document. Full resource name of the referenced document, in the
     * format
     * `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;branches/&#42;&#47;documents/&#42;`.
     *
     * Generated from protobuf field <code>string document = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Required.
     * [Document.name][google.cloud.discoveryengine.v1beta.Document.name] of
     * the document. Full resource name of the referenced document, in the
     * format
     * `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;branches/&#42;&#47;documents/&#42;`.
     *
     * Generated from protobuf field <code>string document = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkString($var, True);
        $this->document = $var;

        return $this;
    }

    /**
     * Cloud Storage or HTTP uri for the document.
     *
     * Generated from protobuf field <code>string uri = 3;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Cloud Storage or HTTP uri for the document.
     *
     * Generated from protobuf field <code>string uri = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * List of cited chunk contents derived from document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.Summary.Reference.ChunkContent chunk_contents = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChunkContents()
    {
        return $this->chunk_contents;
    }

    /**
     * List of cited chunk contents derived from document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.SearchResponse.Summary.Reference.ChunkContent chunk_contents = 4;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\Reference\ChunkContent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChunkContents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\Summary\Reference\ChunkContent::class);
        $this->chunk_contents = $arr;

        return $this;
    }

}


