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
 * Service definition for Colab (v1).
 *
 * <p>
 * The Colab API lets you programmatically manage Colab runtimes.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/colab/api/reference/rest" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Colab extends \Google\Service
{
  /** Read, write, and delete your Colab resources. */
  const COLABORATORY =
      "https://www.googleapis.com/auth/colaboratory";
  /** Read-only access to your Colab resources. */
  const COLABORATORY_READONLY =
      "https://www.googleapis.com/auth/colaboratory.readonly";

  public $operations;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the Colab service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://colaboratory.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://colaboratory.UNIVERSE_DOMAIN/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v1';
    $this->serviceName = 'colaboratory';

    $this->operations = new Colab\Resource\Operations(
        $this,
        $this->serviceName,
        'operations',
        [
          'methods' => [
            'get' => [
              'path' => 'v1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'list' => [
              'path' => 'v1/operations',
              'httpMethod' => 'GET',
              'parameters' => [
                'pageSize' => [
                  'location' => 'query',
                  'type' => 'integer',
                ],
                'pageToken' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'wait' => [
              'path' => 'v1/{+name}:wait',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'timeout' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],
          ]
        ]
    );
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Colab::class, 'Google_Service_Colab');
