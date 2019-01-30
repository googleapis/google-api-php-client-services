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
 * Service definition for CloudAsset (v1beta1).
 *
 * <p>
 * The cloud asset API manages the history and inventory of cloud resources.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://console.cloud.google.com/apis/api/cloudasset.googleapis.com/overview" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CloudAsset extends Google_Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";

  public $folders;
  public $folders_operations;
  public $organizations;
  public $organizations_operations;
  public $projects;
  public $projects_operations;
  
  /**
   * Constructs the internal representation of the CloudAsset service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://cloudasset.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1beta1';
    $this->serviceName = 'cloudasset';

    $this->folders = new Google_Service_CloudAsset_Resource_Folders(
        $this,
        $this->serviceName,
        'folders',
        array(
          'methods' => array(
            'exportAssets' => array(
              'path' => 'v1beta1/{+parent}:exportAssets',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->folders_operations = new Google_Service_CloudAsset_Resource_FoldersOperations(
        $this,
        $this->serviceName,
        'operations',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1beta1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->organizations = new Google_Service_CloudAsset_Resource_Organizations(
        $this,
        $this->serviceName,
        'organizations',
        array(
          'methods' => array(
            'batchGetAssetsHistory' => array(
              'path' => 'v1beta1/{+parent}:batchGetAssetsHistory',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'contentType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'readTimeWindow.endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'readTimeWindow.startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'assetNames' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'exportAssets' => array(
              'path' => 'v1beta1/{+parent}:exportAssets',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->organizations_operations = new Google_Service_CloudAsset_Resource_OrganizationsOperations(
        $this,
        $this->serviceName,
        'operations',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1beta1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects = new Google_Service_CloudAsset_Resource_Projects(
        $this,
        $this->serviceName,
        'projects',
        array(
          'methods' => array(
            'batchGetAssetsHistory' => array(
              'path' => 'v1beta1/{+parent}:batchGetAssetsHistory',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'assetNames' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'contentType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'readTimeWindow.endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'readTimeWindow.startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'exportAssets' => array(
              'path' => 'v1beta1/{+parent}:exportAssets',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects_operations = new Google_Service_CloudAsset_Resource_ProjectsOperations(
        $this,
        $this->serviceName,
        'operations',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v1beta1/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}
