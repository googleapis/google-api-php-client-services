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

class GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata extends \Google\Model
{
  protected $consentType = GoogleAdsSearchads360V23CommonConsent::class;
  protected $consentDataType = '';
  /**
   * The resource name of remarketing list to update data. Required for job of
   * CUSTOMER_MATCH_USER_LIST type.
   *
   * @var string
   */
  public $userList;

  /**
   * The consent setting for all the users in this job.
   *
   * @param GoogleAdsSearchads360V23CommonConsent $consent
   */
  public function setConsent(GoogleAdsSearchads360V23CommonConsent $consent)
  {
    $this->consent = $consent;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonConsent
   */
  public function getConsent()
  {
    return $this->consent;
  }
  /**
   * The resource name of remarketing list to update data. Required for job of
   * CUSTOMER_MATCH_USER_LIST type.
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
class_alias(GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCustomerMatchUserListMetadata');
