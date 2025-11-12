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

class GoogleCloudDiscoveryengineV1alphaProjectCustomerProvidedConfigNotebooklmConfigModelArmorConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $responseTemplate;
  /**
   * @var string
   */
  public $userPromptTemplate;

  /**
   * @param string
   */
  public function setResponseTemplate($responseTemplate)
  {
    $this->responseTemplate = $responseTemplate;
  }
  /**
   * @return string
   */
  public function getResponseTemplate()
  {
    return $this->responseTemplate;
  }
  /**
   * @param string
   */
  public function setUserPromptTemplate($userPromptTemplate)
  {
    $this->userPromptTemplate = $userPromptTemplate;
  }
  /**
   * @return string
   */
  public function getUserPromptTemplate()
  {
    return $this->userPromptTemplate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaProjectCustomerProvidedConfigNotebooklmConfigModelArmorConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaProjectCustomerProvidedConfigNotebooklmConfigModelArmorConfig');
