<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Search result list.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList</code>
 */
class SearchResultList extends \Google\Protobuf\Internal\Message
{
    /**
     * Search results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult search_results = 1;</code>
     */
    private $search_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult>|\Google\Protobuf\Internal\RepeatedField $search_results
     *           Search results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Search results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult search_results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSearchResults()
    {
        return $this->search_results;
    }

    /**
     * Search results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult search_results = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSearchResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult::class);
        $this->search_results = $arr;

        return $this;
    }

}


