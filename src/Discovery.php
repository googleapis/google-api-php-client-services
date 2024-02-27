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
 * Service definition for Discovery (v1).
 *
 * <p>
 * Provides information about other Google APIs, such as what APIs are
 * available, the resource, and method details for each API.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/discovery/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Discovery extends \Google\Service
{


  public $apis;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the Discovery service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://www.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://www.UNIVERSE_DOMAIN/';
    $this->servicePath = 'discovery/v1/';
    $this->batchPath = 'batch/discovery/v1';
    $this->version = 'v1';
    $this->serviceName = 'discovery';

    $this->apis = new Discovery\Resource\Apis(
        $this,
        $this->serviceName,
        'apis',
        [
          'methods' => [
            'getRest' => [
              'path' => 'apis/{api}/{version}/rest',
              'httpMethod' => 'GET',
              'parameters' => [
                'api' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'version' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'list' => [
              'path' => 'apis',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'preferred' => [
                  'location' => 'query',
                  'type' => 'boolean',
                ],
              ],
            ],
          ]
        ]
    );
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Discovery::class, 'Google_Service_Discovery');
