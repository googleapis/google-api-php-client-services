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
 * Service definition for DatabaseCenter (v1beta).
 *
 * <p>
 * Database Center offers a comprehensive, organization-wide platform for
 * monitoring database fleet health across various products. It simplifies
 * management and reduces risk by automatically aggregating and summarizing key
 * health signals, removing the need for custom dashboards. The platform
 * provides a unified view through its dashboard and API, enabling teams focused
 * on reliability, compliance, security, cost, and administration to quickly
 * identify and address relevant issues within their database fleets.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://docs.cloud.google.com/database-center/docs/overview" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class DatabaseCenter extends \Google\Service
{
  /** See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $folders;
  public $organizations;
  public $projects;
  public $v1beta;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the DatabaseCenter service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://databasecenter.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://databasecenter.UNIVERSE_DOMAIN/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v1beta';
    $this->serviceName = 'databasecenter';

    $this->folders = new DatabaseCenter\Resource\Folders(
        $this,
        $this->serviceName,
        'folders',
        [
          'methods' => [
            'aggregateQueryStats' => [
              'path' => 'v1beta/{+parent}:aggregateQueryStats',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->organizations = new DatabaseCenter\Resource\Organizations(
        $this,
        $this->serviceName,
        'organizations',
        [
          'methods' => [
            'aggregateQueryStats' => [
              'path' => 'v1beta/{+parent}:aggregateQueryStats',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->projects = new DatabaseCenter\Resource\Projects(
        $this,
        $this->serviceName,
        'projects',
        [
          'methods' => [
            'aggregateQueryStats' => [
              'path' => 'v1beta/{+parent}:aggregateQueryStats',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->v1beta = new DatabaseCenter\Resource\V1beta(
        $this,
        $this->serviceName,
        'v1beta',
        [
          'methods' => [
            'aggregateFleet' => [
              'path' => 'v1beta:aggregateFleet',
              'httpMethod' => 'GET',
              'parameters' => [
                'baselineDate.day' => [
                  'location' => 'query',
                  'type' => 'integer',
                ],
                'baselineDate.month' => [
                  'location' => 'query',
                  'type' => 'integer',
                ],
                'baselineDate.year' => [
                  'location' => 'query',
                  'type' => 'integer',
                ],
                'filter' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'groupBy' => [
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
            ],'aggregateIssueStats' => [
              'path' => 'v1beta:aggregateIssueStats',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'queryDatabaseResourceGroups' => [
              'path' => 'v1beta:queryDatabaseResourceGroups',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'queryIssues' => [
              'path' => 'v1beta:queryIssues',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'queryProducts' => [
              'path' => 'v1beta:queryProducts',
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
                'parent' => [
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
class_alias(DatabaseCenter::class, 'Google_Service_DatabaseCenter');
