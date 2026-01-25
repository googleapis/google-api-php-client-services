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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2AdjustmentRule extends \Google\Model
{
  protected $adjustByImageFindingsType = GooglePrivacyDlpV2AdjustByImageFindings::class;
  protected $adjustByImageFindingsDataType = '';
  protected $adjustByMatchingInfoTypesType = GooglePrivacyDlpV2AdjustByMatchingInfoTypes::class;
  protected $adjustByMatchingInfoTypesDataType = '';
  protected $likelihoodAdjustmentType = GooglePrivacyDlpV2LikelihoodAdjustment::class;
  protected $likelihoodAdjustmentDataType = '';

  /**
   * AdjustmentRule condition for image findings.
   *
   * @param GooglePrivacyDlpV2AdjustByImageFindings $adjustByImageFindings
   */
  public function setAdjustByImageFindings(GooglePrivacyDlpV2AdjustByImageFindings $adjustByImageFindings)
  {
    $this->adjustByImageFindings = $adjustByImageFindings;
  }
  /**
   * @return GooglePrivacyDlpV2AdjustByImageFindings
   */
  public function getAdjustByImageFindings()
  {
    return $this->adjustByImageFindings;
  }
  /**
   * Set of infoTypes for which findings would affect this rule.
   *
   * @param GooglePrivacyDlpV2AdjustByMatchingInfoTypes $adjustByMatchingInfoTypes
   */
  public function setAdjustByMatchingInfoTypes(GooglePrivacyDlpV2AdjustByMatchingInfoTypes $adjustByMatchingInfoTypes)
  {
    $this->adjustByMatchingInfoTypes = $adjustByMatchingInfoTypes;
  }
  /**
   * @return GooglePrivacyDlpV2AdjustByMatchingInfoTypes
   */
  public function getAdjustByMatchingInfoTypes()
  {
    return $this->adjustByMatchingInfoTypes;
  }
  /**
   * Likelihood adjustment to apply to the infoType.
   *
   * @param GooglePrivacyDlpV2LikelihoodAdjustment $likelihoodAdjustment
   */
  public function setLikelihoodAdjustment(GooglePrivacyDlpV2LikelihoodAdjustment $likelihoodAdjustment)
  {
    $this->likelihoodAdjustment = $likelihoodAdjustment;
  }
  /**
   * @return GooglePrivacyDlpV2LikelihoodAdjustment
   */
  public function getLikelihoodAdjustment()
  {
    return $this->likelihoodAdjustment;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2AdjustmentRule::class, 'Google_Service_DLP_GooglePrivacyDlpV2AdjustmentRule');
