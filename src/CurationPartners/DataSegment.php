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

namespace Google\Service\CurationPartners;

class DataSegment extends \Google\Model
{
  /**
   * Default value.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The data segment is active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The data segment is inactive.
   */
  public const STATE_INACTIVE = 'INACTIVE';
  /**
   * The data segment is suspended and cannot be activated.
   */
  public const STATE_SUSPENDED = 'SUSPENDED';
  protected $cpmFeeType = Money::class;
  protected $cpmFeeDataType = '';
  /**
   * Output only. Time the data segment was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The fee will be charged as a percentage of the impression cost,
   * represented in millipercent. For example, 1% is represented as 1000.
   *
   * @var string
   */
  public $millipercentOfMediaFee;
  /**
   * Immutable. Identifier. The unique identifier for the data segment. Account
   * ID corresponds to the account ID that created the segment. Format:
   * `curators/{curatorAccountId}/dataSegments/{curatorDataSegmentId}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The state of the data segment.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Time the data segment was last updated.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Optional. Immutable. The ID of the User List wrapped by this Data Segment.
   * Curators with a linked Data Partner account can create a data segment that
   * wraps a user list owned by the linked Data Partner account. User lists can
   * be uploaded and managed using the [Data Manager
   * API](https://developers.google.com/data-manager/api/data-
   * partners/audiences). Linking a user list to a data segment lets you define
   * a segment of inventory that is based on an audience you create.
   *
   * @var string
   */
  public $userListId;

  /**
   * Optional. A fixed fee charged per thousand impressions. Once set, the
   * currency code cannot be changed.
   *
   * @param Money $cpmFee
   */
  public function setCpmFee(Money $cpmFee)
  {
    $this->cpmFee = $cpmFee;
  }
  /**
   * @return Money
   */
  public function getCpmFee()
  {
    return $this->cpmFee;
  }
  /**
   * Output only. Time the data segment was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. The fee will be charged as a percentage of the impression cost,
   * represented in millipercent. For example, 1% is represented as 1000.
   *
   * @param string $millipercentOfMediaFee
   */
  public function setMillipercentOfMediaFee($millipercentOfMediaFee)
  {
    $this->millipercentOfMediaFee = $millipercentOfMediaFee;
  }
  /**
   * @return string
   */
  public function getMillipercentOfMediaFee()
  {
    return $this->millipercentOfMediaFee;
  }
  /**
   * Immutable. Identifier. The unique identifier for the data segment. Account
   * ID corresponds to the account ID that created the segment. Format:
   * `curators/{curatorAccountId}/dataSegments/{curatorDataSegmentId}`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The state of the data segment.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVE, INACTIVE, SUSPENDED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. Time the data segment was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * Optional. Immutable. The ID of the User List wrapped by this Data Segment.
   * Curators with a linked Data Partner account can create a data segment that
   * wraps a user list owned by the linked Data Partner account. User lists can
   * be uploaded and managed using the [Data Manager
   * API](https://developers.google.com/data-manager/api/data-
   * partners/audiences). Linking a user list to a data segment lets you define
   * a segment of inventory that is based on an audience you create.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataSegment::class, 'Google_Service_CurationPartners_DataSegment');
