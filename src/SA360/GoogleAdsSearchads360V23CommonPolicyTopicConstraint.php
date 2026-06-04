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

class GoogleAdsSearchads360V23CommonPolicyTopicConstraint extends \Google\Model
{
  protected $certificateDomainMismatchInCountryListType = GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList::class;
  protected $certificateDomainMismatchInCountryListDataType = '';
  protected $certificateMissingInCountryListType = GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList::class;
  protected $certificateMissingInCountryListDataType = '';
  protected $countryConstraintListType = GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList::class;
  protected $countryConstraintListDataType = '';
  protected $resellerConstraintType = GoogleAdsSearchads360V23CommonPolicyTopicConstraintResellerConstraint::class;
  protected $resellerConstraintDataType = '';

  /**
   * Countries where the resource's domain is not covered by the certificates
   * associated with it.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList $certificateDomainMismatchInCountryList
   */
  public function setCertificateDomainMismatchInCountryList(GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList $certificateDomainMismatchInCountryList)
  {
    $this->certificateDomainMismatchInCountryList = $certificateDomainMismatchInCountryList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList
   */
  public function getCertificateDomainMismatchInCountryList()
  {
    return $this->certificateDomainMismatchInCountryList;
  }
  /**
   * Countries where a certificate is required for serving.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList $certificateMissingInCountryList
   */
  public function setCertificateMissingInCountryList(GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList $certificateMissingInCountryList)
  {
    $this->certificateMissingInCountryList = $certificateMissingInCountryList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList
   */
  public function getCertificateMissingInCountryList()
  {
    return $this->certificateMissingInCountryList;
  }
  /**
   * Countries where the resource cannot serve.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList $countryConstraintList
   */
  public function setCountryConstraintList(GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList $countryConstraintList)
  {
    $this->countryConstraintList = $countryConstraintList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList
   */
  public function getCountryConstraintList()
  {
    return $this->countryConstraintList;
  }
  /**
   * Reseller constraint.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicConstraintResellerConstraint $resellerConstraint
   */
  public function setResellerConstraint(GoogleAdsSearchads360V23CommonPolicyTopicConstraintResellerConstraint $resellerConstraint)
  {
    $this->resellerConstraint = $resellerConstraint;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicConstraintResellerConstraint
   */
  public function getResellerConstraint()
  {
    return $this->resellerConstraint;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPolicyTopicConstraint::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPolicyTopicConstraint');
