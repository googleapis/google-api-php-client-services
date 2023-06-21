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
 * Service definition for ChecksService (v1alpha).
 *
 * <p>
 * The Checks API contains powerful and easy-to-use privacy and compliance APIs
 * that interact with the Checks product and its underlying technology.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/checks" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class ChecksService extends \Google\Service
{
  /** Test scope for access to the Zoo service. */
  const XAPI_ZOO =
      "https://www.googleapis.com/auth/xapi.zoo";

  public $accounts_apps_operations;
  public $privacypolicy;

  /**
   * Constructs the internal representation of the ChecksService service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://checks.googleapis.com/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v1alpha';
    $this->serviceName = 'checks';

    $this->accounts_apps_operations = new ChecksService\Resource\AccountsAppsOperations(
        $this,
        $this->serviceName,
        'operations',
        [
          'methods' => [
            'get' => [
              'path' => 'v1alpha/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->privacypolicy = new ChecksService\Resource\Privacypolicy(
        $this,
        $this->serviceName,
        'privacypolicy',
        [
          'methods' => [
            'analyze' => [
              'path' => 'v1alpha/privacypolicy:analyze',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],
          ]
        ]
    );
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChecksService::class, 'Google_Service_ChecksService');
