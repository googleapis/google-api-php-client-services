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

class GoogleAdsSearchads360V23CommonAudienceInsightsAttribute extends \Google\Model
{
  protected $ageRangeType = GoogleAdsSearchads360V23CommonAgeRangeInfo::class;
  protected $ageRangeDataType = '';
  protected $categoryType = GoogleAdsSearchads360V23CommonAudienceInsightsCategory::class;
  protected $categoryDataType = '';
  protected $deviceType = GoogleAdsSearchads360V23CommonDeviceInfo::class;
  protected $deviceDataType = '';
  protected $entityType = GoogleAdsSearchads360V23CommonAudienceInsightsEntity::class;
  protected $entityDataType = '';
  protected $genderType = GoogleAdsSearchads360V23CommonGenderInfo::class;
  protected $genderDataType = '';
  protected $incomeRangeType = GoogleAdsSearchads360V23CommonIncomeRangeInfo::class;
  protected $incomeRangeDataType = '';
  protected $lineupType = GoogleAdsSearchads360V23CommonAudienceInsightsLineup::class;
  protected $lineupDataType = '';
  protected $locationType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $locationDataType = '';
  protected $parentalStatusType = GoogleAdsSearchads360V23CommonParentalStatusInfo::class;
  protected $parentalStatusDataType = '';
  protected $userInterestType = GoogleAdsSearchads360V23CommonUserInterestInfo::class;
  protected $userInterestDataType = '';
  protected $userListType = GoogleAdsSearchads360V23CommonUserListInfo::class;
  protected $userListDataType = '';
  protected $youtubeChannelType = GoogleAdsSearchads360V23CommonYouTubeChannelInfo::class;
  protected $youtubeChannelDataType = '';
  protected $youtubeVideoType = GoogleAdsSearchads360V23CommonYouTubeVideoInfo::class;
  protected $youtubeVideoDataType = '';

  /**
   * An audience attribute defined by an age range.
   *
   * @param GoogleAdsSearchads360V23CommonAgeRangeInfo $ageRange
   */
  public function setAgeRange(GoogleAdsSearchads360V23CommonAgeRangeInfo $ageRange)
  {
    $this->ageRange = $ageRange;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAgeRangeInfo
   */
  public function getAgeRange()
  {
    return $this->ageRange;
  }
  /**
   * An audience attribute defined by interest in a Product & Service category.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsCategory $category
   */
  public function setCategory(GoogleAdsSearchads360V23CommonAudienceInsightsCategory $category)
  {
    $this->category = $category;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsCategory
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * A device type. (Mobile, Desktop, Tablet)
   *
   * @param GoogleAdsSearchads360V23CommonDeviceInfo $device
   */
  public function setDevice(GoogleAdsSearchads360V23CommonDeviceInfo $device)
  {
    $this->device = $device;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDeviceInfo
   */
  public function getDevice()
  {
    return $this->device;
  }
  /**
   * An audience attribute defined by interest in a topic represented by a
   * Knowledge Graph entity.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsEntity $entity
   */
  public function setEntity(GoogleAdsSearchads360V23CommonAudienceInsightsEntity $entity)
  {
    $this->entity = $entity;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsEntity
   */
  public function getEntity()
  {
    return $this->entity;
  }
  /**
   * An audience attribute defined by a gender.
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
   * A household income percentile range.
   *
   * @param GoogleAdsSearchads360V23CommonIncomeRangeInfo $incomeRange
   */
  public function setIncomeRange(GoogleAdsSearchads360V23CommonIncomeRangeInfo $incomeRange)
  {
    $this->incomeRange = $incomeRange;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonIncomeRangeInfo
   */
  public function getIncomeRange()
  {
    return $this->incomeRange;
  }
  /**
   * A YouTube Lineup.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsLineup $lineup
   */
  public function setLineup(GoogleAdsSearchads360V23CommonAudienceInsightsLineup $lineup)
  {
    $this->lineup = $lineup;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsLineup
   */
  public function getLineup()
  {
    return $this->lineup;
  }
  /**
   * An audience attribute defined by a geographic location.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo $location
   */
  public function setLocation(GoogleAdsSearchads360V23CommonLocationInfo $location)
  {
    $this->location = $location;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo
   */
  public function getLocation()
  {
    return $this->location;
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
   * An Affinity or In-Market audience.
   *
   * @param GoogleAdsSearchads360V23CommonUserInterestInfo $userInterest
   */
  public function setUserInterest(GoogleAdsSearchads360V23CommonUserInterestInfo $userInterest)
  {
    $this->userInterest = $userInterest;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserInterestInfo
   */
  public function getUserInterest()
  {
    return $this->userInterest;
  }
  /**
   * A User List.
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
  /**
   * A YouTube channel.
   *
   * @param GoogleAdsSearchads360V23CommonYouTubeChannelInfo $youtubeChannel
   */
  public function setYoutubeChannel(GoogleAdsSearchads360V23CommonYouTubeChannelInfo $youtubeChannel)
  {
    $this->youtubeChannel = $youtubeChannel;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYouTubeChannelInfo
   */
  public function getYoutubeChannel()
  {
    return $this->youtubeChannel;
  }
  /**
   * A YouTube video.
   *
   * @param GoogleAdsSearchads360V23CommonYouTubeVideoInfo $youtubeVideo
   */
  public function setYoutubeVideo(GoogleAdsSearchads360V23CommonYouTubeVideoInfo $youtubeVideo)
  {
    $this->youtubeVideo = $youtubeVideo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYouTubeVideoInfo
   */
  public function getYoutubeVideo()
  {
    return $this->youtubeVideo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonAudienceInsightsAttribute::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAudienceInsightsAttribute');
