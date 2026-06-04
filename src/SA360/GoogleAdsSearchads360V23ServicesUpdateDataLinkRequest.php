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

class GoogleAdsSearchads360V23ServicesUpdateDataLinkRequest extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DATA_LINK_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const DATA_LINK_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Link has been requested by one party, but not confirmed by the other party.
   */
  public const DATA_LINK_STATUS_REQUESTED = 'REQUESTED';
  /**
   * Link is waiting for the customer to approve.
   */
  public const DATA_LINK_STATUS_PENDING_APPROVAL = 'PENDING_APPROVAL';
  /**
   * Link is established and can be used as needed.
   */
  public const DATA_LINK_STATUS_ENABLED = 'ENABLED';
  /**
   * Link is no longer valid and should be ignored.
   */
  public const DATA_LINK_STATUS_DISABLED = 'DISABLED';
  /**
   * Link request has been cancelled by the requester and further cleanup may be
   * needed.
   */
  public const DATA_LINK_STATUS_REVOKED = 'REVOKED';
  /**
   * Link request has been rejected by the approver.
   */
  public const DATA_LINK_STATUS_REJECTED = 'REJECTED';
  /**
   * Required. The data link status to be updated to.
   *
   * @var string
   */
  public $dataLinkStatus;
  /**
   * Required. The data link is expected to have a valid resource name.
   *
   * @var string
   */
  public $resourceName;

  /**
   * Required. The data link status to be updated to.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, REQUESTED, PENDING_APPROVAL,
   * ENABLED, DISABLED, REVOKED, REJECTED
   *
   * @param self::DATA_LINK_STATUS_* $dataLinkStatus
   */
  public function setDataLinkStatus($dataLinkStatus)
  {
    $this->dataLinkStatus = $dataLinkStatus;
  }
  /**
   * @return self::DATA_LINK_STATUS_*
   */
  public function getDataLinkStatus()
  {
    return $this->dataLinkStatus;
  }
  /**
   * Required. The data link is expected to have a valid resource name.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesUpdateDataLinkRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesUpdateDataLinkRequest');
