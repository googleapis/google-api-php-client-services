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

namespace Google\Service\DisplayVideo;

class AdPolicyTopicEvidenceLegalRemoval extends \Google\Collection
{
  protected $collection_key = 'restrictedUris';
  /**
   * @var string
   */
  public $complaintType;
  protected $countryRestrictionsType = AdPolicyCriterionRestriction::class;
  protected $countryRestrictionsDataType = 'array';
  protected $dmcaType = AdPolicyTopicEvidenceLegalRemovalDmca::class;
  protected $dmcaDataType = '';
  protected $localLegalType = AdPolicyTopicEvidenceLegalRemovalLocalLegal::class;
  protected $localLegalDataType = '';
  /**
   * @var string[]
   */
  public $restrictedUris;

  /**
   * @param string
   */
  public function setComplaintType($complaintType)
  {
    $this->complaintType = $complaintType;
  }
  /**
   * @return string
   */
  public function getComplaintType()
  {
    return $this->complaintType;
  }
  /**
   * @param AdPolicyCriterionRestriction[]
   */
  public function setCountryRestrictions($countryRestrictions)
  {
    $this->countryRestrictions = $countryRestrictions;
  }
  /**
   * @return AdPolicyCriterionRestriction[]
   */
  public function getCountryRestrictions()
  {
    return $this->countryRestrictions;
  }
  /**
   * @param AdPolicyTopicEvidenceLegalRemovalDmca
   */
  public function setDmca(AdPolicyTopicEvidenceLegalRemovalDmca $dmca)
  {
    $this->dmca = $dmca;
  }
  /**
   * @return AdPolicyTopicEvidenceLegalRemovalDmca
   */
  public function getDmca()
  {
    return $this->dmca;
  }
  /**
   * @param AdPolicyTopicEvidenceLegalRemovalLocalLegal
   */
  public function setLocalLegal(AdPolicyTopicEvidenceLegalRemovalLocalLegal $localLegal)
  {
    $this->localLegal = $localLegal;
  }
  /**
   * @return AdPolicyTopicEvidenceLegalRemovalLocalLegal
   */
  public function getLocalLegal()
  {
    return $this->localLegal;
  }
  /**
   * @param string[]
   */
  public function setRestrictedUris($restrictedUris)
  {
    $this->restrictedUris = $restrictedUris;
  }
  /**
   * @return string[]
   */
  public function getRestrictedUris()
  {
    return $this->restrictedUris;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdPolicyTopicEvidenceLegalRemoval::class, 'Google_Service_DisplayVideo_AdPolicyTopicEvidenceLegalRemoval');
