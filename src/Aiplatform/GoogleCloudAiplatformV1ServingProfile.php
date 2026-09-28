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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ServingProfile extends \Google\Model
{
  /**
   * Default value. This value is unused. When users create a ServingProfile,
   * they must choose a scope.
   */
  public const SCOPE_SERVING_PROFILE_SCOPE_UNSPECIFIED = 'SERVING_PROFILE_SCOPE_UNSPECIFIED';
  /**
   * The scope for Gemini Live.
   */
  public const SCOPE_GEMINI_LIVE = 'GEMINI_LIVE';
  /**
   * The scope for Interactions API.
   */
  public const SCOPE_INTERACTIONS_API = 'INTERACTIONS_API';
  /**
   * The scope for Response API.
   */
  public const SCOPE_RESPONSE_API = 'RESPONSE_API';
  protected $cmekConfigType = GoogleCloudAiplatformV1ServingProfileCmekConfig::class;
  protected $cmekConfigDataType = '';
  /**
   * Output only. Timestamp when the ServingProfile was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The description of the ServingProfile.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The display name of the ServingProfile. The name can be up to 128
   * characters long and can consist of any UTF-8 characters.
   *
   * @var string
   */
  public $displayName;
  /**
   * Identifier. The resource name of the ServingProfile.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The specific API this ServingProfile applies to.
   *
   * @var string
   */
  public $scope;
  /**
   * Output only. Timestamp when the ServingProfile was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * CMEK configuration for the ServingProfile.
   *
   * @param GoogleCloudAiplatformV1ServingProfileCmekConfig $cmekConfig
   */
  public function setCmekConfig(GoogleCloudAiplatformV1ServingProfileCmekConfig $cmekConfig)
  {
    $this->cmekConfig = $cmekConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1ServingProfileCmekConfig
   */
  public function getCmekConfig()
  {
    return $this->cmekConfig;
  }
  /**
   * Output only. Timestamp when the ServingProfile was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. The description of the ServingProfile.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. The display name of the ServingProfile. The name can be up to 128
   * characters long and can consist of any UTF-8 characters.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Identifier. The resource name of the ServingProfile.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Required. The specific API this ServingProfile applies to.
   *
   * Accepted values: SERVING_PROFILE_SCOPE_UNSPECIFIED, GEMINI_LIVE,
   * INTERACTIONS_API, RESPONSE_API
   *
   * @param self::SCOPE_* $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return self::SCOPE_*
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * Output only. Timestamp when the ServingProfile was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ServingProfile::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ServingProfile');
