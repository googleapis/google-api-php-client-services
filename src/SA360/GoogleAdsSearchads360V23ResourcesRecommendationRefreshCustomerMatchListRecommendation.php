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

class GoogleAdsSearchads360V23ResourcesRecommendationRefreshCustomerMatchListRecommendation extends \Google\Collection
{
  protected $collection_key = 'topSpendingAccount';
  /**
   * Output only. Days since last refresh.
   *
   * @var string
   */
  public $daysSinceLastRefresh;
  protected $ownerAccountType = GoogleAdsSearchads360V23ResourcesRecommendationAccountInfo::class;
  protected $ownerAccountDataType = '';
  /**
   * Output only. User lists can be shared with other accounts by the owner.
   * targeting_accounts_count is the number of those accounts that can use it
   * for targeting.
   *
   * @var string
   */
  public $targetingAccountsCount;
  protected $topSpendingAccountType = GoogleAdsSearchads360V23ResourcesRecommendationAccountInfo::class;
  protected $topSpendingAccountDataType = 'array';
  /**
   * Output only. The user list ID.
   *
   * @var string
   */
  public $userListId;
  /**
   * Output only. The name of the list.
   *
   * @var string
   */
  public $userListName;

  /**
   * Output only. Days since last refresh.
   *
   * @param string $daysSinceLastRefresh
   */
  public function setDaysSinceLastRefresh($daysSinceLastRefresh)
  {
    $this->daysSinceLastRefresh = $daysSinceLastRefresh;
  }
  /**
   * @return string
   */
  public function getDaysSinceLastRefresh()
  {
    return $this->daysSinceLastRefresh;
  }
  /**
   * Output only. The owner account. This is the account that should update the
   * customer list.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationAccountInfo $ownerAccount
   */
  public function setOwnerAccount(GoogleAdsSearchads360V23ResourcesRecommendationAccountInfo $ownerAccount)
  {
    $this->ownerAccount = $ownerAccount;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationAccountInfo
   */
  public function getOwnerAccount()
  {
    return $this->ownerAccount;
  }
  /**
   * Output only. User lists can be shared with other accounts by the owner.
   * targeting_accounts_count is the number of those accounts that can use it
   * for targeting.
   *
   * @param string $targetingAccountsCount
   */
  public function setTargetingAccountsCount($targetingAccountsCount)
  {
    $this->targetingAccountsCount = $targetingAccountsCount;
  }
  /**
   * @return string
   */
  public function getTargetingAccountsCount()
  {
    return $this->targetingAccountsCount;
  }
  /**
   * Output only. The top spending account.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationAccountInfo[] $topSpendingAccount
   */
  public function setTopSpendingAccount($topSpendingAccount)
  {
    $this->topSpendingAccount = $topSpendingAccount;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationAccountInfo[]
   */
  public function getTopSpendingAccount()
  {
    return $this->topSpendingAccount;
  }
  /**
   * Output only. The user list ID.
   *
   * @param string $userListId
   */
  public function setUserListId($userListId)
  {
    $this->userListId = $userListId;
  }
  /**
   * @return string
   */
  public function getUserListId()
  {
    return $this->userListId;
  }
  /**
   * Output only. The name of the list.
   *
   * @param string $userListName
   */
  public function setUserListName($userListName)
  {
    $this->userListName = $userListName;
  }
  /**
   * @return string
   */
  public function getUserListName()
  {
    return $this->userListName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationRefreshCustomerMatchListRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationRefreshCustomerMatchListRecommendation');
