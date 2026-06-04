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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonPolicyTopicEvidence extends \Google\Model
{
  protected $destinationMismatchType = GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationMismatch::class;
  protected $destinationMismatchDataType = '';
  protected $destinationNotWorkingType = GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationNotWorking::class;
  protected $destinationNotWorkingDataType = '';
  protected $destinationTextListType = GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationTextList::class;
  protected $destinationTextListDataType = '';
  /**
   * The language the resource was detected to be written in. This is an IETF
   * language tag such as "en-US".
   *
   * @var string
   */
  public $languageCode;
  protected $textListType = GoogleAdsSearchads360V23CommonPolicyTopicEvidenceTextList::class;
  protected $textListDataType = '';
  protected $websiteListType = GoogleAdsSearchads360V23CommonPolicyTopicEvidenceWebsiteList::class;
  protected $websiteListDataType = '';

  /**
   * Mismatch between the destinations of a resource's URLs.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationMismatch $destinationMismatch
   */
  public function setDestinationMismatch(GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationMismatch $destinationMismatch)
  {
    $this->destinationMismatch = $destinationMismatch;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationMismatch
   */
  public function getDestinationMismatch()
  {
    return $this->destinationMismatch;
  }
  /**
   * Details when the destination is returning an HTTP error code or isn't
   * functional in all locations for commonly used devices.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationNotWorking $destinationNotWorking
   */
  public function setDestinationNotWorking(GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationNotWorking $destinationNotWorking)
  {
    $this->destinationNotWorking = $destinationNotWorking;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationNotWorking
   */
  public function getDestinationNotWorking()
  {
    return $this->destinationNotWorking;
  }
  /**
   * The text in the destination of the resource that is causing a policy
   * finding.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationTextList $destinationTextList
   */
  public function setDestinationTextList(GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationTextList $destinationTextList)
  {
    $this->destinationTextList = $destinationTextList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicEvidenceDestinationTextList
   */
  public function getDestinationTextList()
  {
    return $this->destinationTextList;
  }
  /**
   * The language the resource was detected to be written in. This is an IETF
   * language tag such as "en-US".
   *
   * @param string $languageCode
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
   * List of evidence found in the text of a resource.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicEvidenceTextList $textList
   */
  public function setTextList(GoogleAdsSearchads360V23CommonPolicyTopicEvidenceTextList $textList)
  {
    $this->textList = $textList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicEvidenceTextList
   */
  public function getTextList()
  {
    return $this->textList;
  }
  /**
   * List of websites linked with this resource.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicEvidenceWebsiteList $websiteList
   */
  public function setWebsiteList(GoogleAdsSearchads360V23CommonPolicyTopicEvidenceWebsiteList $websiteList)
  {
    $this->websiteList = $websiteList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicEvidenceWebsiteList
   */
  public function getWebsiteList()
  {
    return $this->websiteList;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPolicyTopicEvidence::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPolicyTopicEvidence');
