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

namespace Google\Service\DataManager;

class PartnerMatchReportEntry extends \Google\Model
{
  protected $adGroupType = PartnerMatchAdGroup::class;
  protected $adGroupDataType = '';
  protected $advertiserAccountType = PartnerMatchAdvertiserAccount::class;
  protected $advertiserAccountDataType = '';
  protected $campaignType = PartnerMatchCampaign::class;
  protected $campaignDataType = '';
  protected $dataFeesType = Money::class;
  protected $dataFeesDataType = '';
  /**
   * @var string
   */
  public $impressionCount;
  protected $lineItemType = PartnerMatchLineItem::class;
  protected $lineItemDataType = '';
  protected $mediaCostType = Money::class;
  protected $mediaCostDataType = '';
  protected $userListType = PartnerMatchUserList::class;
  protected $userListDataType = '';

  /**
   * @param PartnerMatchAdGroup $adGroup
   */
  public function setAdGroup(PartnerMatchAdGroup $adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return PartnerMatchAdGroup
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * @param PartnerMatchAdvertiserAccount $advertiserAccount
   */
  public function setAdvertiserAccount(PartnerMatchAdvertiserAccount $advertiserAccount)
  {
    $this->advertiserAccount = $advertiserAccount;
  }
  /**
   * @return PartnerMatchAdvertiserAccount
   */
  public function getAdvertiserAccount()
  {
    return $this->advertiserAccount;
  }
  /**
   * @param PartnerMatchCampaign $campaign
   */
  public function setCampaign(PartnerMatchCampaign $campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return PartnerMatchCampaign
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * @param Money $dataFees
   */
  public function setDataFees(Money $dataFees)
  {
    $this->dataFees = $dataFees;
  }
  /**
   * @return Money
   */
  public function getDataFees()
  {
    return $this->dataFees;
  }
  /**
   * @param string $impressionCount
   */
  public function setImpressionCount($impressionCount)
  {
    $this->impressionCount = $impressionCount;
  }
  /**
   * @return string
   */
  public function getImpressionCount()
  {
    return $this->impressionCount;
  }
  /**
   * @param PartnerMatchLineItem $lineItem
   */
  public function setLineItem(PartnerMatchLineItem $lineItem)
  {
    $this->lineItem = $lineItem;
  }
  /**
   * @return PartnerMatchLineItem
   */
  public function getLineItem()
  {
    return $this->lineItem;
  }
  /**
   * @param Money $mediaCost
   */
  public function setMediaCost(Money $mediaCost)
  {
    $this->mediaCost = $mediaCost;
  }
  /**
   * @return Money
   */
  public function getMediaCost()
  {
    return $this->mediaCost;
  }
  /**
   * @param PartnerMatchUserList $userList
   */
  public function setUserList(PartnerMatchUserList $userList)
  {
    $this->userList = $userList;
  }
  /**
   * @return PartnerMatchUserList
   */
  public function getUserList()
  {
    return $this->userList;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartnerMatchReportEntry::class, 'Google_Service_DataManager_PartnerMatchReportEntry');
