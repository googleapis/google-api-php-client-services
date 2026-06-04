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

class GoogleAdsSearchads360V23ServicesTargetingSuggestionMetrics extends \Google\Collection
{
  protected $collection_key = 'userInterests';
  protected $ageRangesType = GoogleAdsSearchads360V23CommonAgeRangeInfo::class;
  protected $ageRangesDataType = 'array';
  /**
   * The fraction (from 0 to 1 inclusive) of the requested audience that can be
   * reached using the suggested targeting.
   *
   * @var 
   */
  public $coverage;
  protected $genderType = GoogleAdsSearchads360V23CommonGenderInfo::class;
  protected $genderDataType = '';
  /**
   * The ratio of coverage to the coverage of the baseline audience or zero if
   * this ratio is undefined or is not meaningful.
   *
   * @var 
   */
  public $index;
  protected $locationsType = GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata::class;
  protected $locationsDataType = 'array';
  protected $parentalStatusType = GoogleAdsSearchads360V23CommonParentalStatusInfo::class;
  protected $parentalStatusDataType = '';
  /**
   * The approximate estimated number of people that can be reached on YouTube
   * using this targeting.
   *
   * @var string
   */
  public $potentialYoutubeReach;
  protected $userInterestsType = GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadataGroup::class;
  protected $userInterestsDataType = 'array';

  /**
   * Suggested age targeting; may be empty indicating no age targeting.
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
  public function setCoverage($coverage)
  {
    $this->coverage = $coverage;
  }
  public function getCoverage()
  {
    return $this->coverage;
  }
  /**
   * Suggested gender targeting. If present, this attribute has dimension
   * GENDER.
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
  public function setIndex($index)
  {
    $this->index = $index;
  }
  public function getIndex()
  {
    return $this->index;
  }
  /**
   * Suggested location targeting. These attributes all have dimension
   * GEO_TARGET_COUNTRY or SUB_COUNTRY_LOCATION
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata[] $locations
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata[]
   */
  public function getLocations()
  {
    return $this->locations;
  }
  /**
   * A Parental Status value (parent, or not a parent).
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
   * The approximate estimated number of people that can be reached on YouTube
   * using this targeting.
   *
   * @param string $potentialYoutubeReach
   */
  public function setPotentialYoutubeReach($potentialYoutubeReach)
  {
    $this->potentialYoutubeReach = $potentialYoutubeReach;
  }
  /**
   * @return string
   */
  public function getPotentialYoutubeReach()
  {
    return $this->potentialYoutubeReach;
  }
  /**
   * List of user interest attributes with metadata defining the audience. The
   * combination has a logical AND-of-ORs structure: The attributes within each
   * AudienceInsightsAttributeMetadataGroup are ORed, and the groups themselves
   * are ANDed.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadataGroup[] $userInterests
   */
  public function setUserInterests($userInterests)
  {
    $this->userInterests = $userInterests;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadataGroup[]
   */
  public function getUserInterests()
  {
    return $this->userInterests;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesTargetingSuggestionMetrics::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesTargetingSuggestionMetrics');
