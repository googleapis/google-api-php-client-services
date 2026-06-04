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

class GoogleAdsSearchads360V23ResourcesClickView extends \Google\Model
{
  /**
   * Output only. The associated ad.
   *
   * @var string
   */
  public $adGroupAd;
  protected $areaOfInterestType = GoogleAdsSearchads360V23CommonClickLocation::class;
  protected $areaOfInterestDataType = '';
  /**
   * Output only. The associated campaign location target, if one exists.
   *
   * @var string
   */
  public $campaignLocationTarget;
  /**
   * Output only. The Google Click ID.
   *
   * @var string
   */
  public $gclid;
  /**
   * Output only. The associated keyword, if one exists and the click
   * corresponds to the SEARCH channel.
   *
   * @var string
   */
  public $keyword;
  protected $keywordInfoType = GoogleAdsSearchads360V23CommonKeywordInfo::class;
  protected $keywordInfoDataType = '';
  protected $locationOfPresenceType = GoogleAdsSearchads360V23CommonClickLocation::class;
  protected $locationOfPresenceDataType = '';
  /**
   * Output only. Page number in search results where the ad was shown.
   *
   * @var string
   */
  public $pageNumber;
  /**
   * Output only. The resource name of the click view. Click view resource names
   * have the form: `customers/{customer_id}/clickViews/{date (yyyy-MM-
   * dd)}~{gclid}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The associated user list, if one exists.
   *
   * @var string
   */
  public $userList;

  /**
   * Output only. The associated ad.
   *
   * @param string $adGroupAd
   */
  public function setAdGroupAd($adGroupAd)
  {
    $this->adGroupAd = $adGroupAd;
  }
  /**
   * @return string
   */
  public function getAdGroupAd()
  {
    return $this->adGroupAd;
  }
  /**
   * Output only. The location criteria matching the area of interest associated
   * with the impression.
   *
   * @param GoogleAdsSearchads360V23CommonClickLocation $areaOfInterest
   */
  public function setAreaOfInterest(GoogleAdsSearchads360V23CommonClickLocation $areaOfInterest)
  {
    $this->areaOfInterest = $areaOfInterest;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonClickLocation
   */
  public function getAreaOfInterest()
  {
    return $this->areaOfInterest;
  }
  /**
   * Output only. The associated campaign location target, if one exists.
   *
   * @param string $campaignLocationTarget
   */
  public function setCampaignLocationTarget($campaignLocationTarget)
  {
    $this->campaignLocationTarget = $campaignLocationTarget;
  }
  /**
   * @return string
   */
  public function getCampaignLocationTarget()
  {
    return $this->campaignLocationTarget;
  }
  /**
   * Output only. The Google Click ID.
   *
   * @param string $gclid
   */
  public function setGclid($gclid)
  {
    $this->gclid = $gclid;
  }
  /**
   * @return string
   */
  public function getGclid()
  {
    return $this->gclid;
  }
  /**
   * Output only. The associated keyword, if one exists and the click
   * corresponds to the SEARCH channel.
   *
   * @param string $keyword
   */
  public function setKeyword($keyword)
  {
    $this->keyword = $keyword;
  }
  /**
   * @return string
   */
  public function getKeyword()
  {
    return $this->keyword;
  }
  /**
   * Output only. Basic information about the associated keyword, if it exists.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordInfo $keywordInfo
   */
  public function setKeywordInfo(GoogleAdsSearchads360V23CommonKeywordInfo $keywordInfo)
  {
    $this->keywordInfo = $keywordInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordInfo
   */
  public function getKeywordInfo()
  {
    return $this->keywordInfo;
  }
  /**
   * Output only. The location criteria matching the location of presence
   * associated with the impression.
   *
   * @param GoogleAdsSearchads360V23CommonClickLocation $locationOfPresence
   */
  public function setLocationOfPresence(GoogleAdsSearchads360V23CommonClickLocation $locationOfPresence)
  {
    $this->locationOfPresence = $locationOfPresence;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonClickLocation
   */
  public function getLocationOfPresence()
  {
    return $this->locationOfPresence;
  }
  /**
   * Output only. Page number in search results where the ad was shown.
   *
   * @param string $pageNumber
   */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /**
   * @return string
   */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
  /**
   * Output only. The resource name of the click view. Click view resource names
   * have the form: `customers/{customer_id}/clickViews/{date (yyyy-MM-
   * dd)}~{gclid}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. The associated user list, if one exists.
   *
   * @param string $userList
   */
  public function setUserList($userList)
  {
    $this->userList = $userList;
  }
  /**
   * @return string
   */
  public function getUserList()
  {
    return $this->userList;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesClickView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesClickView');
