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

class GoogleCloudDiscoveryengineV1Assistant extends \Google\Model
{
  protected $customerPolicyType = GoogleCloudDiscoveryengineV1AssistantCustomerPolicy::class;
  protected $customerPolicyDataType = '';
  protected $enabledToolsType = GoogleCloudDiscoveryengineV1AssistantToolList::class;
  protected $enabledToolsDataType = 'map';
  protected $generationConfigType = GoogleCloudDiscoveryengineV1AssistantGenerationConfig::class;
  protected $generationConfigDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $webGroundingType;

  /**
   * @param GoogleCloudDiscoveryengineV1AssistantCustomerPolicy
   */
  public function setCustomerPolicy(GoogleCloudDiscoveryengineV1AssistantCustomerPolicy $customerPolicy)
  {
    $this->customerPolicy = $customerPolicy;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AssistantCustomerPolicy
   */
  public function getCustomerPolicy()
  {
    return $this->customerPolicy;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1AssistantToolList[]
   */
  public function setEnabledTools($enabledTools)
  {
    $this->enabledTools = $enabledTools;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AssistantToolList[]
   */
  public function getEnabledTools()
  {
    return $this->enabledTools;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1AssistantGenerationConfig
   */
  public function setGenerationConfig(GoogleCloudDiscoveryengineV1AssistantGenerationConfig $generationConfig)
  {
    $this->generationConfig = $generationConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1AssistantGenerationConfig
   */
  public function getGenerationConfig()
  {
    return $this->generationConfig;
  }
  /**
   * @param string
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
   * @param string
   */
  public function setWebGroundingType($webGroundingType)
  {
    $this->webGroundingType = $webGroundingType;
  }
  /**
   * @return string
   */
  public function getWebGroundingType()
  {
    return $this->webGroundingType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1Assistant::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1Assistant');
