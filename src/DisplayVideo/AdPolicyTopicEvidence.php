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

class AdPolicyTopicEvidence extends \Google\Model
{
  protected $counterfeitType = AdPolicyTopicEvidenceCounterfeit::class;
  protected $counterfeitDataType = '';
  protected $destinationMismatchType = AdPolicyTopicEvidenceDestinationMismatch::class;
  protected $destinationMismatchDataType = '';
  protected $destinationNotWorkingType = AdPolicyTopicEvidenceDestinationNotWorking::class;
  protected $destinationNotWorkingDataType = '';
  protected $destinationTextListType = AdPolicyTopicEvidenceDestinationTextList::class;
  protected $destinationTextListDataType = '';
  /**
   * @var int
   */
  public $httpCode;
  /**
   * @var string
   */
  public $languageCode;
  protected $legalRemovalType = AdPolicyTopicEvidenceLegalRemoval::class;
  protected $legalRemovalDataType = '';
  protected $regionalRequirementsType = AdPolicyTopicEvidenceRegionalRequirements::class;
  protected $regionalRequirementsDataType = '';
  protected $textListType = AdPolicyTopicEvidenceTextList::class;
  protected $textListDataType = '';
  protected $trademarkType = AdPolicyTopicEvidenceTrademark::class;
  protected $trademarkDataType = '';
  protected $websiteListType = AdPolicyTopicEvidenceWebsiteList::class;
  protected $websiteListDataType = '';

  /**
   * @param AdPolicyTopicEvidenceCounterfeit
   */
  public function setCounterfeit(AdPolicyTopicEvidenceCounterfeit $counterfeit)
  {
    $this->counterfeit = $counterfeit;
  }
  /**
   * @return AdPolicyTopicEvidenceCounterfeit
   */
  public function getCounterfeit()
  {
    return $this->counterfeit;
  }
  /**
   * @param AdPolicyTopicEvidenceDestinationMismatch
   */
  public function setDestinationMismatch(AdPolicyTopicEvidenceDestinationMismatch $destinationMismatch)
  {
    $this->destinationMismatch = $destinationMismatch;
  }
  /**
   * @return AdPolicyTopicEvidenceDestinationMismatch
   */
  public function getDestinationMismatch()
  {
    return $this->destinationMismatch;
  }
  /**
   * @param AdPolicyTopicEvidenceDestinationNotWorking
   */
  public function setDestinationNotWorking(AdPolicyTopicEvidenceDestinationNotWorking $destinationNotWorking)
  {
    $this->destinationNotWorking = $destinationNotWorking;
  }
  /**
   * @return AdPolicyTopicEvidenceDestinationNotWorking
   */
  public function getDestinationNotWorking()
  {
    return $this->destinationNotWorking;
  }
  /**
   * @param AdPolicyTopicEvidenceDestinationTextList
   */
  public function setDestinationTextList(AdPolicyTopicEvidenceDestinationTextList $destinationTextList)
  {
    $this->destinationTextList = $destinationTextList;
  }
  /**
   * @return AdPolicyTopicEvidenceDestinationTextList
   */
  public function getDestinationTextList()
  {
    return $this->destinationTextList;
  }
  /**
   * @param int
   */
  public function setHttpCode($httpCode)
  {
    $this->httpCode = $httpCode;
  }
  /**
   * @return int
   */
  public function getHttpCode()
  {
    return $this->httpCode;
  }
  /**
   * @param string
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * @param AdPolicyTopicEvidenceLegalRemoval
   */
  public function setLegalRemoval(AdPolicyTopicEvidenceLegalRemoval $legalRemoval)
  {
    $this->legalRemoval = $legalRemoval;
  }
  /**
   * @return AdPolicyTopicEvidenceLegalRemoval
   */
  public function getLegalRemoval()
  {
    return $this->legalRemoval;
  }
  /**
   * @param AdPolicyTopicEvidenceRegionalRequirements
   */
  public function setRegionalRequirements(AdPolicyTopicEvidenceRegionalRequirements $regionalRequirements)
  {
    $this->regionalRequirements = $regionalRequirements;
  }
  /**
   * @return AdPolicyTopicEvidenceRegionalRequirements
   */
  public function getRegionalRequirements()
  {
    return $this->regionalRequirements;
  }
  /**
   * @param AdPolicyTopicEvidenceTextList
   */
  public function setTextList(AdPolicyTopicEvidenceTextList $textList)
  {
    $this->textList = $textList;
  }
  /**
   * @return AdPolicyTopicEvidenceTextList
   */
  public function getTextList()
  {
    return $this->textList;
  }
  /**
   * @param AdPolicyTopicEvidenceTrademark
   */
  public function setTrademark(AdPolicyTopicEvidenceTrademark $trademark)
  {
    $this->trademark = $trademark;
  }
  /**
   * @return AdPolicyTopicEvidenceTrademark
   */
  public function getTrademark()
  {
    return $this->trademark;
  }
  /**
   * @param AdPolicyTopicEvidenceWebsiteList
   */
  public function setWebsiteList(AdPolicyTopicEvidenceWebsiteList $websiteList)
  {
    $this->websiteList = $websiteList;
  }
  /**
   * @return AdPolicyTopicEvidenceWebsiteList
   */
  public function getWebsiteList()
  {
    return $this->websiteList;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdPolicyTopicEvidence::class, 'Google_Service_DisplayVideo_AdPolicyTopicEvidence');
