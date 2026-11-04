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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1Project extends \Google\Model
{
  /**
   * No experience is stated for this location.
   */
  public const EXPERIENCE_STATE_EXPERIENCE_STATE_UNSPECIFIED = 'EXPERIENCE_STATE_UNSPECIFIED';
  /**
   * Only the new Gemini Enterprise experience.
   */
  public const EXPERIENCE_STATE_SOBI_ONLY = 'SOBI_ONLY';
  /**
   * Only the classic Gemini Enterprise experience.
   */
  public const EXPERIENCE_STATE_LEGACY_ONLY = 'LEGACY_ONLY';
  /**
   * Legacy engines serve the classic experience, the Sobi engine serves the
   * Sobi experience.
   */
  public const EXPERIENCE_STATE_LEGACY_AND_SOBI = 'LEGACY_AND_SOBI';
  protected $configurableBillingStatusType = GoogleCloudDiscoveryengineV1ProjectConfigurableBillingStatus::class;
  protected $configurableBillingStatusDataType = '';
  /**
   * Output only. The timestamp when this project is created.
   *
   * @var string
   */
  public $createTime;
  protected $customerProvidedConfigType = GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfig::class;
  protected $customerProvidedConfigDataType = '';
  /**
   * Output only. The current experience state of the project.
   *
   * @var string
   */
  public $experienceState;
  /**
   * Output only. Full resource name of the project, for example
   * `projects/{project}`. Note that when making requests, project number and
   * project id are both acceptable, but the server will always respond in
   * project number.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The timestamp when this project is successfully provisioned.
   * Empty value means this project is still provisioning and is not ready for
   * use.
   *
   * @var string
   */
  public $provisionCompletionTime;
  protected $serviceTermsMapType = GoogleCloudDiscoveryengineV1ProjectServiceTerms::class;
  protected $serviceTermsMapDataType = 'map';

  /**
   * Output only. The current status of the project's configurable billing.
   *
   * @param GoogleCloudDiscoveryengineV1ProjectConfigurableBillingStatus $configurableBillingStatus
   */
  public function setConfigurableBillingStatus(GoogleCloudDiscoveryengineV1ProjectConfigurableBillingStatus $configurableBillingStatus)
  {
    $this->configurableBillingStatus = $configurableBillingStatus;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1ProjectConfigurableBillingStatus
   */
  public function getConfigurableBillingStatus()
  {
    return $this->configurableBillingStatus;
  }
  /**
   * Output only. The timestamp when this project is created.
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
   * Optional. Customer provided configurations.
   *
   * @param GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfig $customerProvidedConfig
   */
  public function setCustomerProvidedConfig(GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfig $customerProvidedConfig)
  {
    $this->customerProvidedConfig = $customerProvidedConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfig
   */
  public function getCustomerProvidedConfig()
  {
    return $this->customerProvidedConfig;
  }
  /**
   * Output only. The current experience state of the project.
   *
   * Accepted values: EXPERIENCE_STATE_UNSPECIFIED, SOBI_ONLY, LEGACY_ONLY,
   * LEGACY_AND_SOBI
   *
   * @param self::EXPERIENCE_STATE_* $experienceState
   */
  public function setExperienceState($experienceState)
  {
    $this->experienceState = $experienceState;
  }
  /**
   * @return self::EXPERIENCE_STATE_*
   */
  public function getExperienceState()
  {
    return $this->experienceState;
  }
  /**
   * Output only. Full resource name of the project, for example
   * `projects/{project}`. Note that when making requests, project number and
   * project id are both acceptable, but the server will always respond in
   * project number.
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
   * Output only. The timestamp when this project is successfully provisioned.
   * Empty value means this project is still provisioning and is not ready for
   * use.
   *
   * @param string $provisionCompletionTime
   */
  public function setProvisionCompletionTime($provisionCompletionTime)
  {
    $this->provisionCompletionTime = $provisionCompletionTime;
  }
  /**
   * @return string
   */
  public function getProvisionCompletionTime()
  {
    return $this->provisionCompletionTime;
  }
  /**
   * Output only. A map of terms of services. The key is the `id` of
   * ServiceTerms.
   *
   * @param GoogleCloudDiscoveryengineV1ProjectServiceTerms[] $serviceTermsMap
   */
  public function setServiceTermsMap($serviceTermsMap)
  {
    $this->serviceTermsMap = $serviceTermsMap;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1ProjectServiceTerms[]
   */
  public function getServiceTermsMap()
  {
    return $this->serviceTermsMap;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1Project::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1Project');
