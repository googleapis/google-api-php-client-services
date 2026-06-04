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

class GoogleAdsSearchads360V23ServicesInsightsAudience extends \Google\Collection
{
  protected $collection_key = 'topicAudienceCombinations';
  protected $ageRangesType = GoogleAdsSearchads360V23CommonAgeRangeInfo::class;
  protected $ageRangesDataType = 'array';
  protected $countryLocationsType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $countryLocationsDataType = 'array';
  protected $genderType = GoogleAdsSearchads360V23CommonGenderInfo::class;
  protected $genderDataType = '';
  protected $incomeRangesType = GoogleAdsSearchads360V23CommonIncomeRangeInfo::class;
  protected $incomeRangesDataType = 'array';
  protected $lineupsType = GoogleAdsSearchads360V23CommonAudienceInsightsLineup::class;
  protected $lineupsDataType = 'array';
  protected $parentalStatusType = GoogleAdsSearchads360V23CommonParentalStatusInfo::class;
  protected $parentalStatusDataType = '';
  protected $subCountryLocationsType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $subCountryLocationsDataType = 'array';
  protected $topicAudienceCombinationsType = GoogleAdsSearchads360V23ServicesInsightsAudienceAttributeGroup::class;
  protected $topicAudienceCombinationsDataType = 'array';
  protected $userListType = GoogleAdsSearchads360V23CommonUserListInfo::class;
  protected $userListDataType = '';

  /**
   * Age ranges for the audience. If absent, the audience represents all people
   * over 18 that match the other attributes.
   *
   * @param GoogleAdsSearchads360V23CommonAgeRangeInfo[] $ageRanges
   */
  public function setAgeRanges($ageRanges)
  {
    $this->ageRanges = $ageRanges;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAgeRangeInfo[]
   */
  public function getAgeRanges()
  {
    return $this->ageRanges;
  }
  /**
   * Required. The countries for the audience.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo[] $countryLocations
   */
  public function setCountryLocations($countryLocations)
  {
    $this->countryLocations = $countryLocations;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo[]
   */
  public function getCountryLocations()
  {
    return $this->countryLocations;
  }
  /**
   * Gender for the audience. If absent, the audience does not restrict by
   * gender.
   *
   * @param GoogleAdsSearchads360V23CommonGenderInfo $gender
   */
  public function setGender(GoogleAdsSearchads360V23CommonGenderInfo $gender)
  {
    $this->gender = $gender;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonGenderInfo
   */
  public function getGender()
  {
    return $this->gender;
  }
  /**
   * Household income percentile ranges for the audience. If absent, the
   * audience does not restrict by household income range.
   *
   * @param GoogleAdsSearchads360V23CommonIncomeRangeInfo[] $incomeRanges
   */
  public function setIncomeRanges($incomeRanges)
  {
    $this->incomeRanges = $incomeRanges;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonIncomeRangeInfo[]
   */
  public function getIncomeRanges()
  {
    return $this->incomeRanges;
  }
  /**
   * Lineups representing the YouTube content viewed by the audience.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsLineup[] $lineups
   */
  public function setLineups($lineups)
  {
    $this->lineups = $lineups;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsLineup[]
   */
  public function getLineups()
  {
    return $this->lineups;
  }
  /**
   * Parental status for the audience. If absent, the audience does not restrict
   * by parental status.
   *
   * @param GoogleAdsSearchads360V23CommonParentalStatusInfo $parentalStatus
   */
  public function setParentalStatus(GoogleAdsSearchads360V23CommonParentalStatusInfo $parentalStatus)
  {
    $this->parentalStatus = $parentalStatus;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonParentalStatusInfo
   */
  public function getParentalStatus()
  {
    return $this->parentalStatus;
  }
  /**
   * Sub-country geographic location attributes. If present, each of these must
   * be contained in one of the countries in this audience. If absent, the
   * audience is geographically to the country_locations and no further.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo[] $subCountryLocations
   */
  public function setSubCountryLocations($subCountryLocations)
  {
    $this->subCountryLocations = $subCountryLocations;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo[]
   */
  public function getSubCountryLocations()
  {
    return $this->subCountryLocations;
  }
  /**
   * A combination of entity, category and user interest attributes defining the
   * audience. The combination has a logical AND-of-ORs structure: Attributes
   * within each InsightsAudienceAttributeGroup are combined with OR, and the
   * combinations themselves are combined together with AND. For example, the
   * expression (Entity OR Affinity) AND (In-Market OR Category) can be formed
   * using two InsightsAudienceAttributeGroups with two Attributes each.
   *
   * @param GoogleAdsSearchads360V23ServicesInsightsAudienceAttributeGroup[] $topicAudienceCombinations
   */
  public function setTopicAudienceCombinations($topicAudienceCombinations)
  {
    $this->topicAudienceCombinations = $topicAudienceCombinations;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesInsightsAudienceAttributeGroup[]
   */
  public function getTopicAudienceCombinations()
  {
    return $this->topicAudienceCombinations;
  }
  /**
   * User list to be targeted by the audience.
   *
   * @param GoogleAdsSearchads360V23CommonUserListInfo $userList
   */
  public function setUserList(GoogleAdsSearchads360V23CommonUserListInfo $userList)
  {
    $this->userList = $userList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListInfo
   */
  public function getUserList()
  {
    return $this->userList;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesInsightsAudience::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesInsightsAudience');
