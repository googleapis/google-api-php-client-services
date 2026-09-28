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
 * Service definition for FirebaseCrashlytics (v1alpha).
 *
 * <p>
 * This service provides an API for mobile app developers to request deletion of
 * user's crash reports.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://firebase.google.com/docs/crashlytics" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class FirebaseCrashlytics extends \Google\Service
{
  /** See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** View and administer all your Firebase data and settings. */
  const FIREBASE =
      "https://www.googleapis.com/auth/firebase";

  public $projects_apps_events;
  public $projects_apps_issues;
  public $projects_apps_issues_notes;
  public $projects_apps_reports;
  public $projects_apps_users;
  public $rootUrlTemplate;

  /**
   * Constructs the internal representation of the FirebaseCrashlytics service.
   *
   * @param Client|array $clientOrConfig The client used to deliver requests, or a
   *                                     config array to pass to a new Client instance.
   * @param string $rootUrl The root URL used for requests to the service.
   */
  public function __construct($clientOrConfig = [], $rootUrl = null)
  {
    parent::__construct($clientOrConfig);
    $this->rootUrl = $rootUrl ?: 'https://firebasecrashlytics.googleapis.com/';
    $this->rootUrlTemplate = $rootUrl ?: 'https://firebasecrashlytics.UNIVERSE_DOMAIN/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v1alpha';
    $this->serviceName = 'firebasecrashlytics';

    $this->projects_apps_events = new FirebaseCrashlytics\Resource\ProjectsAppsEvents(
        $this,
        $this->serviceName,
        'events',
        [
          'methods' => [
            'batchGet' => [
              'path' => 'v1alpha/{+parent}/events:batchGet',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'names' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'readMask' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],'list' => [
              'path' => 'v1alpha/{+parent}/events',
              'httpMethod' => 'GET',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'filter.browser.displayNames' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.device.displayNames' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.device.formFactors' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.interval.endTime' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.interval.startTime' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.issue.content' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.issue.errorTypes' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.issue.id' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.issue.signals' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.issue.state' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.issue.states' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.issue.variantId' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.operatingSystem.displayNames' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.version.displayNames' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filterExpression' => [
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
                'readMask' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
              ],
            ],
          ]
        ]
    );
    $this->projects_apps_issues = new FirebaseCrashlytics\Resource\ProjectsAppsIssues(
        $this,
        $this->serviceName,
        'issues',
        [
          'methods' => [
            'batchUpdate' => [
              'path' => 'v1alpha/{+parent}/issues:batchUpdate',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
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
              ],
            ],'patch' => [
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
    $this->projects_apps_issues_notes = new FirebaseCrashlytics\Resource\ProjectsAppsIssuesNotes(
        $this,
        $this->serviceName,
        'notes',
        [
          'methods' => [
            'create' => [
              'path' => 'v1alpha/{+parent}/notes',
              'httpMethod' => 'POST',
              'parameters' => [
                'parent' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'delete' => [
              'path' => 'v1alpha/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
              ],
            ],'list' => [
              'path' => 'v1alpha/{+parent}/notes',
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
    $this->projects_apps_reports = new FirebaseCrashlytics\Resource\ProjectsAppsReports(
        $this,
        $this->serviceName,
        'reports',
        [
          'methods' => [
            'get' => [
              'path' => 'v1alpha/{+name}',
              'httpMethod' => 'GET',
              'parameters' => [
                'name' => [
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ],
                'filter.browser.displayNames' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.device.displayNames' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.device.formFactors' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.interval.endTime' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.interval.startTime' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.issue.content' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.issue.errorTypes' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.issue.id' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.issue.signals' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.issue.state' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.issue.states' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.issue.variantId' => [
                  'location' => 'query',
                  'type' => 'string',
                ],
                'filter.operatingSystem.displayNames' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'filter.version.displayNames' => [
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ],
                'granularity' => [
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
            ],'list' => [
              'path' => 'v1alpha/{+parent}/reports',
              'httpMethod' => 'GET',
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
    $this->projects_apps_users = new FirebaseCrashlytics\Resource\ProjectsAppsUsers(
        $this,
        $this->serviceName,
        'users',
        [
          'methods' => [
            'deleteCrashReports' => [
              'path' => 'v1alpha/{+name}',
              'httpMethod' => 'DELETE',
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
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FirebaseCrashlytics::class, 'Google_Service_FirebaseCrashlytics');
