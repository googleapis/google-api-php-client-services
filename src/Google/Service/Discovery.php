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
class Google_Service_Discovery extends Google_Service
{


  public $apis;

  /**
   * Constructs the internal representation of the Discovery service.
   *
   * @param Google_Client $client The client used to deliver requests.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct(Google_Client $client, $rootUrl = null)
  {
    parent::__construct($client);
    $this->rootUrl = $rootUrl ?: 'https://www.googleapis.com/';
    $this->servicePath = 'discovery/v1/';
    $this->batchPath = 'batch/discovery/v1';
    $this->version = 'v1';
    $this->serviceName = 'discovery';

    $this->apis = new Google_Service_Discovery_Resource_Apis(
        $this,
        $this->serviceName,
        'apis',
        array(
          'methods' => array(
            'getRest' => array(
              'path' => 'apis/{api}/{version}/rest',
              'httpMethod' => 'GET',
              'parameters' => array(
                'api' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'apis',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'preferred' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
  }
}
