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
 * Service definition for DeveloperKnowledge (v1alpha).
 *
 * <p>
 * The Developer Knowledge API provides access to Google's developer knowledge.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/knowledge" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class DeveloperKnowledge extends \Google\Service
{
  /** See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $documents;
  public $v1alpha;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the DeveloperKnowledge service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://developerknowledge.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://developerknowledge.UNIVERSE_DOMAIN/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v1alpha';
    $this->serviceName = 'developerknowledge';

    $this->documents = new DeveloperKnowledge\Resource\Documents(
        $this,
        $this->serviceName,
        'documents',
        [
          'methods' => [
            'batchGet' => [
              'path' => 'v1alpha/documents:batchGet',
              'httpMethod' => 'GET',
              'parameters' => [
                'names' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'view' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'get' => [
              'path' => 'v1alpha/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'view' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'searchDocumentChunks' => [
              'path' => 'v1alpha/documents:searchDocumentChunks',
              'httpMethod' => 'GET',
              'parameters' => [
                'filter' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'pageSize' => [
                  'location' => 'query',
                  'type' => 'integer',
                ],
                'pageToken' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'query' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],
          ]
        ]
    );
    $this->v1alpha = new DeveloperKnowledge\Resource\V1alpha(
        $this,
        $this->serviceName,
        'v1alpha',
        [
          'methods' => [
            'answerQuery' => [
              'path' => 'v1alpha:answerQuery',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],
          ]
        ]
    );
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeveloperKnowledge::class, 'Google_Service_DeveloperKnowledge');
