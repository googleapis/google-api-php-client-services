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
 * Service definition for GoogleHealthAPI (v4).
 *
 * <p>
 * The Google Health API lets you view and manage health and fitness metrics and
 * measurement data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/health" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleHealthAPI extends \Google\Service
{
  /** See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** See your Google Health activity and fitness data. */
  const GOOGLEHEALTH_ACTIVITY_AND_FITNESS_READONLY =
      "https://www.googleapis.com/auth/googlehealth.activity_and_fitness.readonly";
  /** Add activity and fitness data to Google Health, and edit or delete the data it adds.. */
  const GOOGLEHEALTH_ACTIVITY_AND_FITNESS_WRITEONLY =
      "https://www.googleapis.com/auth/googlehealth.activity_and_fitness.writeonly";
  /** See your Google Health ECG data. */
  const GOOGLEHEALTH_ECG_READONLY =
      "https://www.googleapis.com/auth/googlehealth.ecg.readonly";
  /** See your Google Health health metrics and measurement data. */
  const GOOGLEHEALTH_HEALTH_METRICS_AND_MEASUREMENTS_READONLY =
      "https://www.googleapis.com/auth/googlehealth.health_metrics_and_measurements.readonly";
  /** Add health metric and measurements data to Google Health, and edit or delete the data it adds.. */
  const GOOGLEHEALTH_HEALTH_METRICS_AND_MEASUREMENTS_WRITEONLY =
      "https://www.googleapis.com/auth/googlehealth.health_metrics_and_measurements.writeonly";
  /** See your Google Health Irregular Rhythm Notifications data. */
  const GOOGLEHEALTH_IRN_READONLY =
      "https://www.googleapis.com/auth/googlehealth.irn.readonly";
  /** See exercise GPS location data in Google Health. */
  const GOOGLEHEALTH_LOCATION_READONLY =
      "https://www.googleapis.com/auth/googlehealth.location.readonly";
  /** Add exercise GPS location data to Google Health, and edit or delete the data it adds.. */
  const GOOGLEHEALTH_LOCATION_WRITEONLY =
      "https://www.googleapis.com/auth/googlehealth.location.writeonly";
  /** Add nutrition data to Google Health, and edit or delete the data it adds.. */
  const GOOGLEHEALTH_NUTRITION_WRITEONLY =
      "https://www.googleapis.com/auth/googlehealth.nutrition.writeonly";
  /** See your Google Health profile data. */
  const GOOGLEHEALTH_PROFILE_READONLY =
      "https://www.googleapis.com/auth/googlehealth.profile.readonly";
  /** Add profile data to Google Health, and edit or delete the data it adds.. */
  const GOOGLEHEALTH_PROFILE_WRITEONLY =
      "https://www.googleapis.com/auth/googlehealth.profile.writeonly";
  /** See your Google Health settings. */
  const GOOGLEHEALTH_SETTINGS_READONLY =
      "https://www.googleapis.com/auth/googlehealth.settings.readonly";
  /** Add settings data to Google Health, and edit or delete the data it adds.. */
  const GOOGLEHEALTH_SETTINGS_WRITEONLY =
      "https://www.googleapis.com/auth/googlehealth.settings.writeonly";
  /** See your Google Health sleep data. */
  const GOOGLEHEALTH_SLEEP_READONLY =
      "https://www.googleapis.com/auth/googlehealth.sleep.readonly";
  /** Add sleep data to Google Health, and edit or delete the data it adds.. */
  const GOOGLEHEALTH_SLEEP_WRITEONLY =
      "https://www.googleapis.com/auth/googlehealth.sleep.writeonly";

  public $projects_subscribers;
  public $projects_subscribers_subscriptions;
  public $users;
  public $users_dataTypes_dataPoints;
  public $users_pairedDevices;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the GoogleHealthAPI service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://health.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://health.UNIVERSE_DOMAIN/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v4';
    $this->serviceName = 'health';

    $this->projects_subscribers = new GoogleHealthAPI\Resource\ProjectsSubscribers(
        $this,
        $this->serviceName,
        'subscribers',
        [
          'methods' => [
            'create' => [
              'path' => 'v4/{+parent}/subscribers',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'subscriberId' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'delete' => [
              'path' => 'v4/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'force' => [
                  'location' => 'query',
                  'type' => 'boolean',
                ],
              ],
            ],'list' => [
              'path' => 'v4/{+parent}/subscribers',
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
            ],'patch' => [
              'path' => 'v4/{+name}',
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
    $this->projects_subscribers_subscriptions = new GoogleHealthAPI\Resource\ProjectsSubscribersSubscriptions(
        $this,
        $this->serviceName,
        'subscriptions',
        [
          'methods' => [
            'create' => [
              'path' => 'v4/{+parent}/subscriptions',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'subscriptionId' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'delete' => [
              'path' => 'v4/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'list' => [
              'path' => 'v4/{+parent}/subscriptions',
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
              'path' => 'v4/{+name}',
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
    $this->users = new GoogleHealthAPI\Resource\Users(
        $this,
        $this->serviceName,
        'users',
        [
          'methods' => [
            'getIdentity' => [
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'getIrnProfile' => [
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'getProfile' => [
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'getSettings' => [
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'updateProfile' => [
              'path' => 'v4/{+name}',
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
            ],'updateSettings' => [
              'path' => 'v4/{+name}',
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
    $this->users_dataTypes_dataPoints = new GoogleHealthAPI\Resource\UsersDataTypesDataPoints(
        $this,
        $this->serviceName,
        'dataPoints',
        [
          'methods' => [
            'batchDelete' => [
              'path' => 'v4/{+parent}/dataPoints:batchDelete',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'create' => [
              'path' => 'v4/{+parent}/dataPoints',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'dailyRollUp' => [
              'path' => 'v4/{+parent}/dataPoints:dailyRollUp',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'exportExerciseTcx' => [
              'path' => 'v4/{+name}:exportExerciseTcx',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'partialData' => [
                  'location' => 'query',
                  'type' => 'boolean',
                ],
              ],
            ],'get' => [
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'list' => [
              'path' => 'v4/{+parent}/dataPoints',
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
              'path' => 'v4/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'reconcile' => [
              'path' => 'v4/{+parent}/dataPoints:reconcile',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'dataSourceFamily' => [
                  'location' => 'query',
                  'type' => 'string',
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
            ],'rollUp' => [
              'path' => 'v4/{+parent}/dataPoints:rollUp',
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
    $this->users_pairedDevices = new GoogleHealthAPI\Resource\UsersPairedDevices(
        $this,
        $this->serviceName,
        'pairedDevices',
        [
          'methods' => [
            'get' => [
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'list' => [
              'path' => 'v4/{+parent}/pairedDevices',
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
class_alias(GoogleHealthAPI::class, 'Google_Service_GoogleHealthAPI');
