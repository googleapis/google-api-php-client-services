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

namespace Google\Service\CustomerEngagementSuite;

class ServiceAccountAuthConfig extends \Google\Collection
{
  protected $collection_key = 'scopes';
  /**
   * Optional. The OAuth scopes to grant. If not specified, the default scope
   * `https://www.googleapis.com/auth/cloud-platform` is used.
   *
   * @var string[]
   */
  public $scopes;
  /**
   * Required. The email address of the service account used for authentication.
   * CES uses this service account to exchange an access token and the access
   * token is then sent in the `Authorization` header of the request. The
   * service account must have the `roles/iam.serviceAccountTokenCreator` role
   * granted to the CES service agent `service-@gcp-sa-
   * ces.iam.gserviceaccount.com`.
   *
   * @var string
   */
  public $serviceAccount;

  /**
   * Optional. The OAuth scopes to grant. If not specified, the default scope
   * `https://www.googleapis.com/auth/cloud-platform` is used.
   *
   * @param string[] $scopes
   */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /**
   * @return string[]
   */
  public function getScopes()
  {
    return $this->scopes;
  }
  /**
   * Required. The email address of the service account used for authentication.
   * CES uses this service account to exchange an access token and the access
   * token is then sent in the `Authorization` header of the request. The
   * service account must have the `roles/iam.serviceAccountTokenCreator` role
   * granted to the CES service agent `service-@gcp-sa-
   * ces.iam.gserviceaccount.com`.
   *
   * @param string $serviceAccount
   */
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  /**
   * @return string
   */
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServiceAccountAuthConfig::class, 'Google_Service_CustomerEngagementSuite_ServiceAccountAuthConfig');
