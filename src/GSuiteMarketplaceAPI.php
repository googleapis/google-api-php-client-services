<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service;

use Google\Client;

/**
 * Service definition for GSuiteMarketplaceAPI (v2).
 *
 * <p>
 * Lets your Google Workspace Marketplace applications integrate with Google's
 * installtion and licensing services.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/workspace/marketplace" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GSuiteMarketplaceAPI extends \Google\Service
{
  /** View your installed application's licensing information. */
  const APPSMARKETPLACE_LICENSE =
      "https://www.googleapis.com/auth/appsmarketplace.license";

  public $customerLicense;
  public $userLicense;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the GSuiteMarketplaceAPI service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://appsmarket.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://appsmarket.UNIVERSE_DOMAIN/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v2';
    $this->serviceName = 'appsmarket';

    $this->customerLicense = new GSuiteMarketplaceAPI\Resource\CustomerLicense(
        $this,
        $this->serviceName,
        'customerLicense',
        [
          'methods' => [
            'get' => [
              'path' => 'appsmarket/v2/customerLicense/{applicationId}/{customerId}',
              'httpMethod' => 'GET',
              'parameters' => [
                'applicationId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'customerId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->userLicense = new GSuiteMarketplaceAPI\Resource\UserLicense(
        $this,
        $this->serviceName,
        'userLicense',
        [
          'methods' => [
            'get' => [
              'path' => 'appsmarket/v2/userLicense/{applicationId}/{userId}',
              'httpMethod' => 'GET',
              'parameters' => [
                'applicationId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'userId' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GSuiteMarketplaceAPI::class, 'Google_Service_GSuiteMarketplaceAPI');
