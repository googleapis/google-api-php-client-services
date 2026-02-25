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
 * Service definition for DataManager (v1).
 *
 * <p>
 * A unified ingestion API for data partners, agencies and advertisers to
 * connect first-party data across Google advertising products.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/data-manager" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class DataManager extends \Google\Service
{
  /** See, edit, create, import, or delete your customer data in Google Ads, Google Marketing Platform (Campaign Manager 360, Search Ads 360, Display & Video 360), and Google Analytics. */
  const DATAMANAGER =
      "https://www.googleapis.com/auth/datamanager";

  public $accountTypes_accounts_insights;
  public $accountTypes_accounts_partnerLinks;
  public $accountTypes_accounts_userListDirectLicenses;
  public $accountTypes_accounts_userListGlobalLicenses;
  public $accountTypes_accounts_userListGlobalLicenses_userListGlobalLicenseCustomerInfos;
  public $accountTypes_accounts_userLists;
  public $audienceMembers;
  public $events;
  public $requestStatus;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the DataManager service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://datamanager.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://datamanager.UNIVERSE_DOMAIN/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v1';
    $this->serviceName = 'datamanager';

    $this->accountTypes_accounts_insights = new DataManager\Resource\AccountTypesAccountsInsights(
        $this,
        $this->serviceName,
        'insights',
        [
          'methods' => [
            'retrieve' => [
              'path' => 'v1/{+parent}/insights:retrieve',
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
    $this->accountTypes_accounts_partnerLinks = new DataManager\Resource\AccountTypesAccountsPartnerLinks(
        $this,
        $this->serviceName,
        'partnerLinks',
        [
          'methods' => [
            'create' => [
              'path' => 'v1/{+parent}/partnerLinks',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
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
            ],'search' => [
              'path' => 'v1/{+parent}/partnerLinks:search',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
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
              ],
            ],
          ]
        ]
    );
    $this->accountTypes_accounts_userListDirectLicenses = new DataManager\Resource\AccountTypesAccountsUserListDirectLicenses(
        $this,
        $this->serviceName,
        'userListDirectLicenses',
        [
          'methods' => [
            'create' => [
              'path' => 'v1/{+parent}/userListDirectLicenses',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
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
              'path' => 'v1/{+parent}/userListDirectLicenses',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
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
              ],
            ],'patch' => [
              'path' => 'v1/{+name}',
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
    $this->accountTypes_accounts_userListGlobalLicenses = new DataManager\Resource\AccountTypesAccountsUserListGlobalLicenses(
        $this,
        $this->serviceName,
        'userListGlobalLicenses',
        [
          'methods' => [
            'create' => [
              'path' => 'v1/{+parent}/userListGlobalLicenses',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
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
              'path' => 'v1/{+parent}/userListGlobalLicenses',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
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
              ],
            ],'patch' => [
              'path' => 'v1/{+name}',
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
    $this->accountTypes_accounts_userListGlobalLicenses_userListGlobalLicenseCustomerInfos = new DataManager\Resource\AccountTypesAccountsUserListGlobalLicensesUserListGlobalLicenseCustomerInfos(
        $this,
        $this->serviceName,
        'userListGlobalLicenseCustomerInfos',
        [
          'methods' => [
            'list' => [
              'path' => 'v1/{+parent}/userListGlobalLicenseCustomerInfos',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
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
              ],
            ],
          ]
        ]
    );
    $this->accountTypes_accounts_userLists = new DataManager\Resource\AccountTypesAccountsUserLists(
        $this,
        $this->serviceName,
        'userLists',
        [
          'methods' => [
            'create' => [
              'path' => 'v1/{+parent}/userLists',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'validateOnly' => [
                  'location' => 'query',
                  'type' => 'boolean',
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
                'validateOnly' => [
                  'location' => 'query',
                  'type' => 'boolean',
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
              'path' => 'v1/{+parent}/userLists',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
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
              ],
            ],'patch' => [
              'path' => 'v1/{+name}',
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
                'validateOnly' => [
                  'location' => 'query',
                  'type' => 'boolean',
                ],
              ],
            ],
          ]
        ]
    );
    $this->audienceMembers = new DataManager\Resource\AudienceMembers(
        $this,
        $this->serviceName,
        'audienceMembers',
        [
          'methods' => [
            'ingest' => [
              'path' => 'v1/audienceMembers:ingest',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],'remove' => [
              'path' => 'v1/audienceMembers:remove',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],
          ]
        ]
    );
    $this->events = new DataManager\Resource\Events(
        $this,
        $this->serviceName,
        'events',
        [
          'methods' => [
            'ingest' => [
              'path' => 'v1/events:ingest',
              'httpMethod' => 'POST',
              'parameters' => [],
            ],
          ]
        ]
    );
    $this->requestStatus = new DataManager\Resource\RequestStatus(
        $this,
        $this->serviceName,
        'requestStatus',
        [
          'methods' => [
            'retrieve' => [
              'path' => 'v1/requestStatus:retrieve',
              'httpMethod' => 'GET',
              'parameters' => [
                'requestId' => [
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
class_alias(DataManager::class, 'Google_Service_DataManager');
