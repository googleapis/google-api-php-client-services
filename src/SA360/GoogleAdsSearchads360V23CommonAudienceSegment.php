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

class GoogleAdsSearchads360V23CommonAudienceSegment extends \Google\Model
{
  protected $customAudienceType = GoogleAdsSearchads360V23CommonCustomAudienceSegment::class;
  protected $customAudienceDataType = '';
  protected $detailedDemographicType = GoogleAdsSearchads360V23CommonDetailedDemographicSegment::class;
  protected $detailedDemographicDataType = '';
  protected $lifeEventType = GoogleAdsSearchads360V23CommonLifeEventSegment::class;
  protected $lifeEventDataType = '';
  protected $userInterestType = GoogleAdsSearchads360V23CommonUserInterestSegment::class;
  protected $userInterestDataType = '';
  protected $userListType = GoogleAdsSearchads360V23CommonUserListSegment::class;
  protected $userListDataType = '';

  /**
   * Custom audience segment.
   *
   * @param GoogleAdsSearchads360V23CommonCustomAudienceSegment $customAudience
   */
  public function setCustomAudience(GoogleAdsSearchads360V23CommonCustomAudienceSegment $customAudience)
  {
    $this->customAudience = $customAudience;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomAudienceSegment
   */
  public function getCustomAudience()
  {
    return $this->customAudience;
  }
  /**
   * Detailed demographic segment.
   *
   * @param GoogleAdsSearchads360V23CommonDetailedDemographicSegment $detailedDemographic
   */
  public function setDetailedDemographic(GoogleAdsSearchads360V23CommonDetailedDemographicSegment $detailedDemographic)
  {
    $this->detailedDemographic = $detailedDemographic;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDetailedDemographicSegment
   */
  public function getDetailedDemographic()
  {
    return $this->detailedDemographic;
  }
  /**
   * Live-event audience segment.
   *
   * @param GoogleAdsSearchads360V23CommonLifeEventSegment $lifeEvent
   */
  public function setLifeEvent(GoogleAdsSearchads360V23CommonLifeEventSegment $lifeEvent)
  {
    $this->lifeEvent = $lifeEvent;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLifeEventSegment
   */
  public function getLifeEvent()
  {
    return $this->lifeEvent;
  }
  /**
   * Affinity or In-market segment.
   *
   * @param GoogleAdsSearchads360V23CommonUserInterestSegment $userInterest
   */
  public function setUserInterest(GoogleAdsSearchads360V23CommonUserInterestSegment $userInterest)
  {
    $this->userInterest = $userInterest;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserInterestSegment
   */
  public function getUserInterest()
  {
    return $this->userInterest;
  }
  /**
   * User list segment.
   *
   * @param GoogleAdsSearchads360V23CommonUserListSegment $userList
   */
  public function setUserList(GoogleAdsSearchads360V23CommonUserListSegment $userList)
  {
    $this->userList = $userList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListSegment
   */
  public function getUserList()
  {
    return $this->userList;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonAudienceSegment::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAudienceSegment');
