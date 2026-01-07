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

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV2Secret extends \Google\Model
{
  protected $environmentVariableType = GoogleCloudSecuritycenterV2SecretEnvironmentVariable::class;
  protected $environmentVariableDataType = '';
  protected $filePathType = GoogleCloudSecuritycenterV2SecretFilePath::class;
  protected $filePathDataType = '';
  protected $statusType = GoogleCloudSecuritycenterV2SecretStatus::class;
  protected $statusDataType = '';
  /**
   * The type of secret, for example, GCP_API_KEY.
   *
   * @var string
   */
  public $type;

  /**
   * The environment variable containing the secret.
   *
   * @param GoogleCloudSecuritycenterV2SecretEnvironmentVariable $environmentVariable
   */
  public function setEnvironmentVariable(GoogleCloudSecuritycenterV2SecretEnvironmentVariable $environmentVariable)
  {
    $this->environmentVariable = $environmentVariable;
  }
  /**
   * @return GoogleCloudSecuritycenterV2SecretEnvironmentVariable
   */
  public function getEnvironmentVariable()
  {
    return $this->environmentVariable;
  }
  /**
   * The file containing the secret.
   *
   * @param GoogleCloudSecuritycenterV2SecretFilePath $filePath
   */
  public function setFilePath(GoogleCloudSecuritycenterV2SecretFilePath $filePath)
  {
    $this->filePath = $filePath;
  }
  /**
   * @return GoogleCloudSecuritycenterV2SecretFilePath
   */
  public function getFilePath()
  {
    return $this->filePath;
  }
  /**
   * The status of the secret.
   *
   * @param GoogleCloudSecuritycenterV2SecretStatus $status
   */
  public function setStatus(GoogleCloudSecuritycenterV2SecretStatus $status)
  {
    $this->status = $status;
  }
  /**
   * @return GoogleCloudSecuritycenterV2SecretStatus
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * The type of secret, for example, GCP_API_KEY.
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2Secret::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2Secret');
