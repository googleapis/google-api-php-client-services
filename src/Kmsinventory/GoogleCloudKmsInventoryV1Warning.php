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

namespace Google\Service\Kmsinventory;

class GoogleCloudKmsInventoryV1Warning extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const WARNING_CODE_WARNING_CODE_UNSPECIFIED = 'WARNING_CODE_UNSPECIFIED';
  /**
   * Indicates that the caller or service agent lacks necessary permissions to
   * view some of the requested data. The response may be partial. Examples: -
   * KMS organization service agent {service_agent_name} lacks the
   * `cloudasset.assets.searchAllResources` permission on the scope.
   */
  public const WARNING_CODE_INSUFFICIENT_PERMISSIONS_PARTIAL_DATA = 'INSUFFICIENT_PERMISSIONS_PARTIAL_DATA';
  /**
   * Indicates that a resource limit has been exceeded, resulting in partial
   * data. Examples: - The project has more than 10,000 assets (resources,
   * crypto keys, key handles, IAM policies, etc).
   */
  public const WARNING_CODE_RESOURCE_LIMIT_EXCEEDED_PARTIAL_DATA = 'RESOURCE_LIMIT_EXCEEDED_PARTIAL_DATA';
  /**
   * Indicates that the project is org-less. Thus the analysis is only done for
   * the project level data and results might be partial.
   */
  public const WARNING_CODE_ORG_LESS_PROJECT_PARTIAL_DATA = 'ORG_LESS_PROJECT_PARTIAL_DATA';
  /**
   * The literal message providing context and details about the warnings.
   *
   * @var string
   */
  public $displayMessage;
  /**
   * The specific warning code for the displayed message.
   *
   * @var string
   */
  public $warningCode;

  /**
   * The literal message providing context and details about the warnings.
   *
   * @param string $displayMessage
   */
  public function setDisplayMessage($displayMessage)
  {
    $this->displayMessage = $displayMessage;
  }
  /**
   * @return string
   */
  public function getDisplayMessage()
  {
    return $this->displayMessage;
  }
  /**
   * The specific warning code for the displayed message.
   *
   * Accepted values: WARNING_CODE_UNSPECIFIED,
   * INSUFFICIENT_PERMISSIONS_PARTIAL_DATA,
   * RESOURCE_LIMIT_EXCEEDED_PARTIAL_DATA, ORG_LESS_PROJECT_PARTIAL_DATA
   *
   * @param self::WARNING_CODE_* $warningCode
   */
  public function setWarningCode($warningCode)
  {
    $this->warningCode = $warningCode;
  }
  /**
   * @return self::WARNING_CODE_*
   */
  public function getWarningCode()
  {
    return $this->warningCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudKmsInventoryV1Warning::class, 'Google_Service_Kmsinventory_GoogleCloudKmsInventoryV1Warning');
