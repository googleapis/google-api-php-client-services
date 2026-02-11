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

class GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfig extends \Google\Model
{
  protected $dataProtectionPolicyType = GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicy::class;
  protected $dataProtectionPolicyDataType = '';
  protected $modelArmorConfigType = GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigModelArmorConfig::class;
  protected $modelArmorConfigDataType = '';
  protected $observabilityConfigType = GoogleCloudDiscoveryengineV1ObservabilityConfig::class;
  protected $observabilityConfigDataType = '';
  /**
   * Optional. Whether to disable the notebook sharing feature for the project.
   * Default to false if not specified.
   *
   * @var bool
   */
  public $optOutNotebookSharing;

  /**
   * Optional. Specifies the data protection policy for NotebookLM.
   *
   * @param GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicy $dataProtectionPolicy
   */
  public function setDataProtectionPolicy(GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicy $dataProtectionPolicy)
  {
    $this->dataProtectionPolicy = $dataProtectionPolicy;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicy
   */
  public function getDataProtectionPolicy()
  {
    return $this->dataProtectionPolicy;
  }
  /**
   * Model Armor configuration to be used for sanitizing user prompts and LLM
   * responses.
   *
   * @param GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigModelArmorConfig $modelArmorConfig
   */
  public function setModelArmorConfig(GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigModelArmorConfig $modelArmorConfig)
  {
    $this->modelArmorConfig = $modelArmorConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigModelArmorConfig
   */
  public function getModelArmorConfig()
  {
    return $this->modelArmorConfig;
  }
  /**
   * Optional. Observability config for NotebookLM.
   *
   * @param GoogleCloudDiscoveryengineV1ObservabilityConfig $observabilityConfig
   */
  public function setObservabilityConfig(GoogleCloudDiscoveryengineV1ObservabilityConfig $observabilityConfig)
  {
    $this->observabilityConfig = $observabilityConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1ObservabilityConfig
   */
  public function getObservabilityConfig()
  {
    return $this->observabilityConfig;
  }
  /**
   * Optional. Whether to disable the notebook sharing feature for the project.
   * Default to false if not specified.
   *
   * @param bool $optOutNotebookSharing
   */
  public function setOptOutNotebookSharing($optOutNotebookSharing)
  {
    $this->optOutNotebookSharing = $optOutNotebookSharing;
  }
  /**
   * @return bool
   */
  public function getOptOutNotebookSharing()
  {
    return $this->optOutNotebookSharing;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfig');
