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
 * Service definition for SQLAdmin (v1).
 *
 * <p>
 * API for Cloud SQL database instance management</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/cloud-sql/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class SQLAdmin extends \Google\Service
{
  /** See, edit, configure, and delete your Google Cloud Platform data. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** Manage your Google SQL Service instances. */
  const SQLSERVICE_ADMIN =
      "https://www.googleapis.com/auth/sqlservice.admin";

  public $instances;
  public $projects_instances;
  public $projects_instances_createEphemeral;

  /**
   * Constructs the internal representation of the SQLAdmin service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://sqladmin.googleapis.com/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v1';
    $this->serviceName = 'sqladmin';

    $this->instances = new SQLAdmin\Resource\Instances(
        $this,
        $this->serviceName,
        'instances',
        [
          'methods' => [
            'list' => [
              'path' => 'v1/projects/{project}/instances',
              'httpMethod' => 'GET',
              'parameters' => [
                'project' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'filter' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'maxResults' => [
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
    $this->projects_instances = new SQLAdmin\Resource\ProjectsInstances(
        $this,
        $this->serviceName,
        'instances',
        [
          'methods' => [
            'generateEphemeralCert' => [
              'path' => 'v1/projects/{project}/instances/{instance}:generateEphemeralCert',
              'httpMethod' => 'POST',
              'parameters' => [
                'project' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'instance' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'get' => [
              'path' => 'v1/projects/{project}/instances/{instance}',
              'httpMethod' => 'GET',
              'parameters' => [
                'project' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'instance' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'getConnectSettings' => [
              'path' => 'v1/projects/{project}/instances/{instance}/connectSettings',
              'httpMethod' => 'GET',
              'parameters' => [
                'project' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'instance' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'readTime' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],
          ]
        ]
    );
    $this->projects_instances_createEphemeral = new SQLAdmin\Resource\ProjectsInstancesCreateEphemeral(
        $this,
        $this->serviceName,
        'createEphemeral',
        [
          'methods' => [
            'create' => [
              'path' => 'v1/projects/{project}/instances/{instance}/createEphemeral',
              'httpMethod' => 'POST',
              'parameters' => [
                'project' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'instance' => [
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
class_alias(SQLAdmin::class, 'Google_Service_SQLAdmin');
