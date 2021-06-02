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
 * Service definition for Ideahub (v1alpha).
 *
 * <p>
</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://console.cloud.google.com/apis/library/ideahub.googleapis.com" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Ideahub extends \Google\Service
{


  public $ideas;
  public $platforms_properties_ideaStates;
  public $platforms_properties_ideas;
  public $platforms_properties_locales;

  /**
   * Constructs the internal representation of the Ideahub service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://ideahub.googleapis.com/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v1alpha';
    $this->serviceName = 'ideahub';

    $this->ideas = new Ideahub\Resource\Ideas(
        $this,
        $this->serviceName,
        'ideas',
        [
          'methods' => [
            'list' => [
              'path' => 'v1alpha/ideas',
              'httpMethod' => 'GET',
              'parameters' => [
                'creator.platform' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'creator.platformId' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'orderBy' => [
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
                'parent' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],
          ]
        ]
    );
    $this->platforms_properties_ideaStates = new Ideahub\Resource\PlatformsPropertiesIdeaStates(
        $this,
        $this->serviceName,
        'ideaStates',
        [
          'methods' => [
            'patch' => [
              'path' => 'v1alpha/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'updateMask' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],
          ]
        ]
    );
    $this->platforms_properties_ideas = new Ideahub\Resource\PlatformsPropertiesIdeas(
        $this,
        $this->serviceName,
        'ideas',
        [
          'methods' => [
            'list' => [
              'path' => 'v1alpha/{+parent}/ideas',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'creator.platform' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'creator.platformId' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'orderBy' => [
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
              ],
            ],
          ]
        ]
    );
    $this->platforms_properties_locales = new Ideahub\Resource\PlatformsPropertiesLocales(
        $this,
        $this->serviceName,
        'locales',
        [
          'methods' => [
            'list' => [
              'path' => 'v1alpha/{+parent}/locales',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'pageSize' => [
                  'location' => 'query',
                  'type' => 'integer',
                ],
                'pageToken' => [
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
class_alias(Ideahub::class, 'Google_Service_Ideahub');
