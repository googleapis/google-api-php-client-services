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

namespace Google\Service\WorkloadManager;

class ActuationOutput extends \Google\Collection
{
  /**
   * No error code was specified.
   */
  public const ERROR_CODE_ERROR_CODE_UNSPECIFIED = 'ERROR_CODE_UNSPECIFIED';
  /**
   * general terraform failure
   */
  public const ERROR_CODE_TERRAFORM_FAILED = 'TERRAFORM_FAILED';
  /**
   * permission error in terraform
   */
  public const ERROR_CODE_PERMISSION_DENIED_IN_TERRAFORM = 'PERMISSION_DENIED_IN_TERRAFORM';
  /**
   * quota related error in terraform
   */
  public const ERROR_CODE_QUOTA_EXCEED_IN_TERRAFORM = 'QUOTA_EXCEED_IN_TERRAFORM';
  /**
   * general ansible failure
   */
  public const ERROR_CODE_ANSIBLE_FAILED = 'ANSIBLE_FAILED';
  /**
   * constraint related error in terraform
   */
  public const ERROR_CODE_CONSTRAINT_VIOLATION_IN_TERRAFORM = 'CONSTRAINT_VIOLATION_IN_TERRAFORM';
  /**
   * resource already exists error in terraform
   */
  public const ERROR_CODE_RESOURCE_ALREADY_EXISTS_IN_TERRAFORM = 'RESOURCE_ALREADY_EXISTS_IN_TERRAFORM';
  /**
   * resource not found error in terraform
   */
  public const ERROR_CODE_RESOURCE_UNAVAILABLE_IN_TERRAFORM = 'RESOURCE_UNAVAILABLE_IN_TERRAFORM';
  /**
   * permission denied error in ansible
   */
  public const ERROR_CODE_PERMISSION_DENIED_IN_ANSIBLE = 'PERMISSION_DENIED_IN_ANSIBLE';
  /**
   * secret related error in ansible
   */
  public const ERROR_CODE_INVALID_SECRET_IN_ANSIBLE = 'INVALID_SECRET_IN_ANSIBLE';
  /**
   * general terraform failure during deletion
   */
  public const ERROR_CODE_TERRAFORM_DELETION_FAILED = 'TERRAFORM_DELETION_FAILED';
  /**
   * resource in use error in terraform deletion
   */
  public const ERROR_CODE_RESOURCE_IN_USE_IN_TERRAFORM_DELETION = 'RESOURCE_IN_USE_IN_TERRAFORM_DELETION';
  /**
   * start up failure in ansible
   */
  public const ERROR_CODE_ANSIBLE_START_FAILED = 'ANSIBLE_START_FAILED';
  protected $collection_key = 'ansibleFailedTask';
  /**
   * A link to gcs file that store build logs
   *
   * @var string
   */
  public $actuateLogs;
  /**
   * Output only. error message return from ansible.
   *
   * @var string
   */
  public $ansibleError;
  /**
   * Output only. failed task name return from ansible.
   *
   * @var string[]
   */
  public $ansibleFailedTask;
  /**
   * reference to Blueprint Controller deployment and revision resource
   *
   * @var string
   */
  public $blueprintId;
  /**
   * Cloud Build instance UUID associated with this revision, without any suffix
   * or prefix
   *
   * @var string
   */
  public $cloudbuildId;
  /**
   * Output only. Code describing any errors that may have occurred. If not
   * specified, there is no error in actuation.
   *
   * @var string
   */
  public $errorCode;
  /**
   * A link to actuation cloud build log.
   *
   * @var string
   */
  public $errorLogs;
  /**
   * Output only. whether the error message is user facing. If true, the error
   * message will be shown in the UI.
   *
   * @var bool
   */
  public $hasUserFacingErrorMsg;
  /**
   * Output only. error message return from terraform.
   *
   * @var string
   */
  public $terraformError;
  /**
   * reference to terraform template used
   *
   * @var string
   */
  public $terraformTemplate;

  /**
   * A link to gcs file that store build logs
   *
   * @param string $actuateLogs
   */
  public function setActuateLogs($actuateLogs)
  {
    $this->actuateLogs = $actuateLogs;
  }
  /**
   * @return string
   */
  public function getActuateLogs()
  {
    return $this->actuateLogs;
  }
  /**
   * Output only. error message return from ansible.
   *
   * @param string $ansibleError
   */
  public function setAnsibleError($ansibleError)
  {
    $this->ansibleError = $ansibleError;
  }
  /**
   * @return string
   */
  public function getAnsibleError()
  {
    return $this->ansibleError;
  }
  /**
   * Output only. failed task name return from ansible.
   *
   * @param string[] $ansibleFailedTask
   */
  public function setAnsibleFailedTask($ansibleFailedTask)
  {
    $this->ansibleFailedTask = $ansibleFailedTask;
  }
  /**
   * @return string[]
   */
  public function getAnsibleFailedTask()
  {
    return $this->ansibleFailedTask;
  }
  /**
   * reference to Blueprint Controller deployment and revision resource
   *
   * @param string $blueprintId
   */
  public function setBlueprintId($blueprintId)
  {
    $this->blueprintId = $blueprintId;
  }
  /**
   * @return string
   */
  public function getBlueprintId()
  {
    return $this->blueprintId;
  }
  /**
   * Cloud Build instance UUID associated with this revision, without any suffix
   * or prefix
   *
   * @param string $cloudbuildId
   */
  public function setCloudbuildId($cloudbuildId)
  {
    $this->cloudbuildId = $cloudbuildId;
  }
  /**
   * @return string
   */
  public function getCloudbuildId()
  {
    return $this->cloudbuildId;
  }
  /**
   * Output only. Code describing any errors that may have occurred. If not
   * specified, there is no error in actuation.
   *
   * Accepted values: ERROR_CODE_UNSPECIFIED, TERRAFORM_FAILED,
   * PERMISSION_DENIED_IN_TERRAFORM, QUOTA_EXCEED_IN_TERRAFORM, ANSIBLE_FAILED,
   * CONSTRAINT_VIOLATION_IN_TERRAFORM, RESOURCE_ALREADY_EXISTS_IN_TERRAFORM,
   * RESOURCE_UNAVAILABLE_IN_TERRAFORM, PERMISSION_DENIED_IN_ANSIBLE,
   * INVALID_SECRET_IN_ANSIBLE, TERRAFORM_DELETION_FAILED,
   * RESOURCE_IN_USE_IN_TERRAFORM_DELETION, ANSIBLE_START_FAILED
   *
   * @param self::ERROR_CODE_* $errorCode
   */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /**
   * @return self::ERROR_CODE_*
   */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /**
   * A link to actuation cloud build log.
   *
   * @param string $errorLogs
   */
  public function setErrorLogs($errorLogs)
  {
    $this->errorLogs = $errorLogs;
  }
  /**
   * @return string
   */
  public function getErrorLogs()
  {
    return $this->errorLogs;
  }
  /**
   * Output only. whether the error message is user facing. If true, the error
   * message will be shown in the UI.
   *
   * @param bool $hasUserFacingErrorMsg
   */
  public function setHasUserFacingErrorMsg($hasUserFacingErrorMsg)
  {
    $this->hasUserFacingErrorMsg = $hasUserFacingErrorMsg;
  }
  /**
   * @return bool
   */
  public function getHasUserFacingErrorMsg()
  {
    return $this->hasUserFacingErrorMsg;
  }
  /**
   * Output only. error message return from terraform.
   *
   * @param string $terraformError
   */
  public function setTerraformError($terraformError)
  {
    $this->terraformError = $terraformError;
  }
  /**
   * @return string
   */
  public function getTerraformError()
  {
    return $this->terraformError;
  }
  /**
   * reference to terraform template used
   *
   * @param string $terraformTemplate
   */
  public function setTerraformTemplate($terraformTemplate)
  {
    $this->terraformTemplate = $terraformTemplate;
  }
  /**
   * @return string
   */
  public function getTerraformTemplate()
  {
    return $this->terraformTemplate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActuationOutput::class, 'Google_Service_WorkloadManager_ActuationOutput');
