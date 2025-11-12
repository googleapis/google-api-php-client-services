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

class GoogleCloudDiscoveryengineV1betaSearchRequestSearchAddonSpec extends \Google\Model
{
  /**
   * @var bool
   */
  public $disableGenerativeAnswerAddOn;
  /**
   * @var bool
   */
  public $disableKpiPersonalizationAddOn;
  /**
   * @var bool
   */
  public $disableSemanticAddOn;

  /**
   * @param bool
   */
  public function setDisableGenerativeAnswerAddOn($disableGenerativeAnswerAddOn)
  {
    $this->disableGenerativeAnswerAddOn = $disableGenerativeAnswerAddOn;
  }
  /**
   * @return bool
   */
  public function getDisableGenerativeAnswerAddOn()
  {
    return $this->disableGenerativeAnswerAddOn;
  }
  /**
   * @param bool
   */
  public function setDisableKpiPersonalizationAddOn($disableKpiPersonalizationAddOn)
  {
    $this->disableKpiPersonalizationAddOn = $disableKpiPersonalizationAddOn;
  }
  /**
   * @return bool
   */
  public function getDisableKpiPersonalizationAddOn()
  {
    return $this->disableKpiPersonalizationAddOn;
  }
  /**
   * @param bool
   */
  public function setDisableSemanticAddOn($disableSemanticAddOn)
  {
    $this->disableSemanticAddOn = $disableSemanticAddOn;
  }
  /**
   * @return bool
   */
  public function getDisableSemanticAddOn()
  {
    return $this->disableSemanticAddOn;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1betaSearchRequestSearchAddonSpec::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaSearchRequestSearchAddonSpec');
