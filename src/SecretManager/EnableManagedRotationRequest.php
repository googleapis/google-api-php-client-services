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

namespace Google\Service\SecretManager;

class EnableManagedRotationRequest extends \Google\Model
{
  protected $cloudSqlSingleUserCredentialsType = CloudSqlSingleUserCredentials::class;
  protected $cloudSqlSingleUserCredentialsDataType = '';

  /**
   * Credentials required for Cloud SQL DB for Single user Managed Rotation.
   *
   * @param CloudSqlSingleUserCredentials $cloudSqlSingleUserCredentials
   */
  public function setCloudSqlSingleUserCredentials(CloudSqlSingleUserCredentials $cloudSqlSingleUserCredentials)
  {
    $this->cloudSqlSingleUserCredentials = $cloudSqlSingleUserCredentials;
  }
  /**
   * @return CloudSqlSingleUserCredentials
   */
  public function getCloudSqlSingleUserCredentials()
  {
    return $this->cloudSqlSingleUserCredentials;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnableManagedRotationRequest::class, 'Google_Service_SecretManager_EnableManagedRotationRequest');
