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

namespace Google\Service\GSuiteMarketplaceAPI;

class UserLicense extends \Google\Model
{
  /**
   * The ID of the application corresponding to the license query.
   *
   * @var string
   */
  public $applicationId;
  /**
   * The domain name of the user.
   *
   * @var string
   */
  public $customerId;
  /**
   * (Deprecated)
   *
   * @deprecated
   * @var string
   */
  public $editionId;
  /**
   * The domain administrator has activated the application for this domain.
   *
   * @var bool
   */
  public $enabled;
  /**
   * The ID of user license.
   *
   * @var string
   */
  public $id;
  /**
   * The type of API resource. This is always appsmarket#userLicense.
   *
   * @var string
   */
  public $kind;
  /**
   * The user's licensing status. One of: - `ACTIVE`: The user has a valid
   * license and should be permitted to use the application. - `UNLICENSED`: The
   * administrator of this user's domain never assigned a seat for the
   * application to this user. - `EXPIRED`: The administrator assigned a seat to
   * this user, but the license is expired.
   *
   * @var string
   */
  public $state;
  /**
   * The email address of the user.
   *
   * @var string
   */
  public $userId;

  /**
   * The ID of the application corresponding to the license query.
   *
   * @param string $applicationId
   */
  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }
  /**
   * @return string
   */
  public function getApplicationId()
  {
    return $this->applicationId;
  }
  /**
   * The domain name of the user.
   *
   * @param string $customerId
   */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /**
   * @return string
   */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /**
   * (Deprecated)
   *
   * @deprecated
   * @param string $editionId
   */
  public function setEditionId($editionId)
  {
    $this->editionId = $editionId;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getEditionId()
  {
    return $this->editionId;
  }
  /**
   * The domain administrator has activated the application for this domain.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * The ID of user license.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * The type of API resource. This is always appsmarket#userLicense.
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * The user's licensing status. One of: - `ACTIVE`: The user has a valid
   * license and should be permitted to use the application. - `UNLICENSED`: The
   * administrator of this user's domain never assigned a seat for the
   * application to this user. - `EXPIRED`: The administrator assigned a seat to
   * this user, but the license is expired.
   *
   * @param string $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * The email address of the user.
   *
   * @param string $userId
   */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return string
   */
  public function getUserId()
  {
    return $this->userId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserLicense::class, 'Google_Service_GSuiteMarketplaceAPI_UserLicense');
