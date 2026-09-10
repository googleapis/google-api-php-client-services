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
 * Service definition for CloudAuditManager (v1).
 *
 * <p>
 * The Audit Manager API allows customers to manage compliance audits.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/assured-workloads/docs/audit-manager" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class CloudAuditManager extends \Google\Service
{
  /** See, edit, configure, and delete your Google Cloud Auditmanager data and see the email address for your Google Account. */
  const CLOUD_AUDITMANAGER =
      "https://www.googleapis.com/auth/cloud-auditmanager";
  /** See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $folders_locations;
  public $folders_locations_auditReports;
  public $folders_locations_auditScopeReports;
  public $folders_locations_operationDetails;
  public $folders_locations_operationIds;
  public $folders_locations_resourceEnrollmentStatuses;
  public $folders_locations_standards_controls;
  public $organizations_locations;
  public $organizations_locations_auditReports;
  public $organizations_locations_auditScopeReports;
  public $organizations_locations_operationDetails;
  public $organizations_locations_operationIds;
  public $organizations_locations_operations;
  public $organizations_locations_resourceEnrollmentStatuses;
  public $organizations_locations_standards_controls;
  public $projects_locations;
  public $projects_locations_auditReports;
  public $projects_locations_auditScopeReports;
  public $projects_locations_operationDetails;
  public $projects_locations_operationIds;
  public $projects_locations_operations;
  public $projects_locations_resourceEnrollmentStatuses;
  public $projects_locations_standards_controls;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the CloudAuditManager service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://auditmanager.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://auditmanager.UNIVERSE_DOMAIN/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v1';
    $this->serviceName = 'auditmanager';

    $this->folders_locations = new CloudAuditManager\Resource\FoldersLocations(
        $this,
        $this->serviceName,
        'locations',
        [
          'methods' => [
            'enrollResource' => [
              'path' => 'v1/{+scope}:enrollResource',
              'httpMethod' => 'POST',
              'parameters' => [
                'scope' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->folders_locations_auditReports = new CloudAuditManager\Resource\FoldersLocationsAuditReports(
        $this,
        $this->serviceName,
        'auditReports',
        [
          'methods' => [
            'generate' => [
              'path' => 'v1/{+scope}/auditReports:generate',
              'httpMethod' => 'POST',
              'parameters' => [
                'scope' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'get' => [
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
              'path' => 'v1/{+parent}/auditReports',
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
    $this->folders_locations_auditScopeReports = new CloudAuditManager\Resource\FoldersLocationsAuditScopeReports(
        $this,
        $this->serviceName,
        'auditScopeReports',
        [
          'methods' => [
            'generate' => [
              'path' => 'v1/{+scope}/auditScopeReports:generate',
              'httpMethod' => 'POST',
              'parameters' => [
                'scope' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->folders_locations_operationDetails = new CloudAuditManager\Resource\FoldersLocationsOperationDetails(
        $this,
        $this->serviceName,
        'operationDetails',
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
            ],
          ]
        ]
    );
    $this->folders_locations_operationIds = new CloudAuditManager\Resource\FoldersLocationsOperationIds(
        $this,
        $this->serviceName,
        'operationIds',
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
            ],
          ]
        ]
    );
    $this->folders_locations_resourceEnrollmentStatuses = new CloudAuditManager\Resource\FoldersLocationsResourceEnrollmentStatuses(
        $this,
        $this->serviceName,
        'resourceEnrollmentStatuses',
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
              'path' => 'v1/{+parent}/resourceEnrollmentStatuses',
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
    $this->folders_locations_standards_controls = new CloudAuditManager\Resource\FoldersLocationsStandardsControls(
        $this,
        $this->serviceName,
        'controls',
        [
          'methods' => [
            'list' => [
              'path' => 'v1/{+parent}/controls',
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
    $this->organizations_locations = new CloudAuditManager\Resource\OrganizationsLocations(
        $this,
        $this->serviceName,
        'locations',
        [
          'methods' => [
            'enrollResource' => [
              'path' => 'v1/{+scope}:enrollResource',
              'httpMethod' => 'POST',
              'parameters' => [
                'scope' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->organizations_locations_auditReports = new CloudAuditManager\Resource\OrganizationsLocationsAuditReports(
        $this,
        $this->serviceName,
        'auditReports',
        [
          'methods' => [
            'generate' => [
              'path' => 'v1/{+scope}/auditReports:generate',
              'httpMethod' => 'POST',
              'parameters' => [
                'scope' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'get' => [
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
              'path' => 'v1/{+parent}/auditReports',
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
    $this->organizations_locations_auditScopeReports = new CloudAuditManager\Resource\OrganizationsLocationsAuditScopeReports(
        $this,
        $this->serviceName,
        'auditScopeReports',
        [
          'methods' => [
            'generate' => [
              'path' => 'v1/{+scope}/auditScopeReports:generate',
              'httpMethod' => 'POST',
              'parameters' => [
                'scope' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->organizations_locations_operationDetails = new CloudAuditManager\Resource\OrganizationsLocationsOperationDetails(
        $this,
        $this->serviceName,
        'operationDetails',
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
            ],
          ]
        ]
    );
    $this->organizations_locations_operationIds = new CloudAuditManager\Resource\OrganizationsLocationsOperationIds(
        $this,
        $this->serviceName,
        'operationIds',
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
            ],
          ]
        ]
    );
    $this->organizations_locations_operations = new CloudAuditManager\Resource\OrganizationsLocationsOperations(
        $this,
        $this->serviceName,
        'operations',
        [
          'methods' => [
            'cancel' => [
              'path' => 'v1/{+name}:cancel',
              'httpMethod' => 'POST',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'delete' => [
              'path' => 'v1/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'get' => [
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
              'path' => 'v1/{+name}/operations',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
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
                'returnPartialSuccess' => [
                  'location' => 'query',
                  'type' => 'boolean',
                ],
              ],
            ],
          ]
        ]
    );
    $this->organizations_locations_resourceEnrollmentStatuses = new CloudAuditManager\Resource\OrganizationsLocationsResourceEnrollmentStatuses(
        $this,
        $this->serviceName,
        'resourceEnrollmentStatuses',
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
              'path' => 'v1/{+parent}/resourceEnrollmentStatuses',
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
    $this->organizations_locations_standards_controls = new CloudAuditManager\Resource\OrganizationsLocationsStandardsControls(
        $this,
        $this->serviceName,
        'controls',
        [
          'methods' => [
            'list' => [
              'path' => 'v1/{+parent}/controls',
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
    $this->projects_locations = new CloudAuditManager\Resource\ProjectsLocations(
        $this,
        $this->serviceName,
        'locations',
        [
          'methods' => [
            'enrollResource' => [
              'path' => 'v1/{+scope}:enrollResource',
              'httpMethod' => 'POST',
              'parameters' => [
                'scope' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'get' => [
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
              'path' => 'v1/{+name}/locations',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'extraLocationTypes' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
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
              ],
            ],
          ]
        ]
    );
    $this->projects_locations_auditReports = new CloudAuditManager\Resource\ProjectsLocationsAuditReports(
        $this,
        $this->serviceName,
        'auditReports',
        [
          'methods' => [
            'generate' => [
              'path' => 'v1/{+scope}/auditReports:generate',
              'httpMethod' => 'POST',
              'parameters' => [
                'scope' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'get' => [
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
              'path' => 'v1/{+parent}/auditReports',
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
    $this->projects_locations_auditScopeReports = new CloudAuditManager\Resource\ProjectsLocationsAuditScopeReports(
        $this,
        $this->serviceName,
        'auditScopeReports',
        [
          'methods' => [
            'generate' => [
              'path' => 'v1/{+scope}/auditScopeReports:generate',
              'httpMethod' => 'POST',
              'parameters' => [
                'scope' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],
          ]
        ]
    );
    $this->projects_locations_operationDetails = new CloudAuditManager\Resource\ProjectsLocationsOperationDetails(
        $this,
        $this->serviceName,
        'operationDetails',
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
            ],
          ]
        ]
    );
    $this->projects_locations_operationIds = new CloudAuditManager\Resource\ProjectsLocationsOperationIds(
        $this,
        $this->serviceName,
        'operationIds',
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
            ],
          ]
        ]
    );
    $this->projects_locations_operations = new CloudAuditManager\Resource\ProjectsLocationsOperations(
        $this,
        $this->serviceName,
        'operations',
        [
          'methods' => [
            'cancel' => [
              'path' => 'v1/{+name}:cancel',
              'httpMethod' => 'POST',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'delete' => [
              'path' => 'v1/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'get' => [
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
              'path' => 'v1/{+name}/operations',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
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
                'returnPartialSuccess' => [
                  'location' => 'query',
                  'type' => 'boolean',
                ],
              ],
            ],
          ]
        ]
    );
    $this->projects_locations_resourceEnrollmentStatuses = new CloudAuditManager\Resource\ProjectsLocationsResourceEnrollmentStatuses(
        $this,
        $this->serviceName,
        'resourceEnrollmentStatuses',
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
            ],
          ]
        ]
    );
    $this->projects_locations_standards_controls = new CloudAuditManager\Resource\ProjectsLocationsStandardsControls(
        $this,
        $this->serviceName,
        'controls',
        [
          'methods' => [
            'list' => [
              'path' => 'v1/{+parent}/controls',
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
class_alias(CloudAuditManager::class, 'Google_Service_CloudAuditManager');
