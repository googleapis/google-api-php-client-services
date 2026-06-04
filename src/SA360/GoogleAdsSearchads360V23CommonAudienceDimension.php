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

class GoogleAdsSearchads360V23CommonAudienceDimension extends \Google\Model
{
  protected $ageType = GoogleAdsSearchads360V23CommonAgeDimension::class;
  protected $ageDataType = '';
  protected $audienceSegmentsType = GoogleAdsSearchads360V23CommonAudienceSegmentDimension::class;
  protected $audienceSegmentsDataType = '';
  protected $genderType = GoogleAdsSearchads360V23CommonGenderDimension::class;
  protected $genderDataType = '';
  protected $householdIncomeType = GoogleAdsSearchads360V23CommonHouseholdIncomeDimension::class;
  protected $householdIncomeDataType = '';
  protected $parentalStatusType = GoogleAdsSearchads360V23CommonParentalStatusDimension::class;
  protected $parentalStatusDataType = '';

  /**
   * Dimension specifying users by their age.
   *
   * @param GoogleAdsSearchads360V23CommonAgeDimension $age
   */
  public function setAge(GoogleAdsSearchads360V23CommonAgeDimension $age)
  {
    $this->age = $age;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAgeDimension
   */
  public function getAge()
  {
    return $this->age;
  }
  /**
   * Dimension specifying users by their membership in other audience segments.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceSegmentDimension $audienceSegments
   */
  public function setAudienceSegments(GoogleAdsSearchads360V23CommonAudienceSegmentDimension $audienceSegments)
  {
    $this->audienceSegments = $audienceSegments;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceSegmentDimension
   */
  public function getAudienceSegments()
  {
    return $this->audienceSegments;
  }
  /**
   * Dimension specifying users by their gender.
   *
   * @param GoogleAdsSearchads360V23CommonGenderDimension $gender
   */
  public function setGender(GoogleAdsSearchads360V23CommonGenderDimension $gender)
  {
    $this->gender = $gender;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonGenderDimension
   */
  public function getGender()
  {
    return $this->gender;
  }
  /**
   * Dimension specifying users by their household income.
   *
   * @param GoogleAdsSearchads360V23CommonHouseholdIncomeDimension $householdIncome
   */
  public function setHouseholdIncome(GoogleAdsSearchads360V23CommonHouseholdIncomeDimension $householdIncome)
  {
    $this->householdIncome = $householdIncome;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonHouseholdIncomeDimension
   */
  public function getHouseholdIncome()
  {
    return $this->householdIncome;
  }
  /**
   * Dimension specifying users by their parental status.
   *
   * @param GoogleAdsSearchads360V23CommonParentalStatusDimension $parentalStatus
   */
  public function setParentalStatus(GoogleAdsSearchads360V23CommonParentalStatusDimension $parentalStatus)
  {
    $this->parentalStatus = $parentalStatus;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonParentalStatusDimension
   */
  public function getParentalStatus()
  {
    return $this->parentalStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonAudienceDimension::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAudienceDimension');
