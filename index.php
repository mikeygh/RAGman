<?php

use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\DiscoveryEngine\V1beta\Client\SearchServiceClient;
use Google\Cloud\DiscoveryEngine\V1beta\SearchRequest;
use Google\Cloud\DiscoveryEngine\V1beta\SearchResponse\SearchResult;

/**
 * Performs a search.
 *
 * @param string $formattedServingConfig The resource name of the Search serving config, such as
 *                                       `projects/&#42;/locations/global/collections/default_collection/engines/&#42;/servingConfigs/default_serving_config`,
 *                                       or
 *                                       `projects/&#42;/locations/global/collections/default_collection/dataStores/default_data_store/servingConfigs/default_serving_config`.
 *                                       This field is used to identify the serving configuration name, set
 *                                       of models used to make the search. Please see
 *                                       {@see SearchServiceClient::servingConfigName()} for help formatting this field.
 */
function search_sample(string $formattedServingConfig): void
{
    // Create a client.
    $searchServiceClient = new SearchServiceClient();

    // Prepare the request message.
    $request = (new SearchRequest())
        ->setServingConfig($formattedServingConfig);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $searchServiceClient->search($request);

        /** @var SearchResult $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedServingConfig = SearchServiceClient::servingConfigName(
        '[PROJECT]',
        '[LOCATION]',
        '[DATA_STORE]',
        '[SERVING_CONFIG]'
    );

    search_sample($formattedServingConfig);
}