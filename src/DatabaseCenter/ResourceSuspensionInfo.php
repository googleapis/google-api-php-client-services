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

namespace Google\Service\DatabaseCenter;

class ResourceSuspensionInfo extends \Google\Model
{
  /**
   * Suspension reason is unspecified.
   */
  public const SUSPENSION_REASON_SUSPENSION_REASON_UNSPECIFIED = 'SUSPENSION_REASON_UNSPECIFIED';
  /**
   * Wipeout hide event.
   */
  public const SUSPENSION_REASON_WIPEOUT_HIDE_EVENT = 'WIPEOUT_HIDE_EVENT';
  /**
   * Wipeout purge event.
   */
  public const SUSPENSION_REASON_WIPEOUT_PURGE_EVENT = 'WIPEOUT_PURGE_EVENT';
  /**
   * Billing disabled for project
   */
  public const SUSPENSION_REASON_BILLING_DISABLED = 'BILLING_DISABLED';
  /**
   * Abuse detected for resource
   */
  public const SUSPENSION_REASON_ABUSER_DETECTED = 'ABUSER_DETECTED';
  /**
   * Encryption key inaccessible.
   */
  public const SUSPENSION_REASON_ENCRYPTION_KEY_INACCESSIBLE = 'ENCRYPTION_KEY_INACCESSIBLE';
  /**
   * Replicated cluster encryption key inaccessible.
   */
  public const SUSPENSION_REASON_REPLICATED_CLUSTER_ENCRYPTION_KEY_INACCESSIBLE = 'REPLICATED_CLUSTER_ENCRYPTION_KEY_INACCESSIBLE';
  /**
   * Is resource suspended.
   *
   * @var bool
   */
  public $resourceSuspended;
  /**
   * Suspension reason for the resource.
   *
   * @var string
   */
  public $suspensionReason;

  /**
   * Is resource suspended.
   *
   * @param bool $resourceSuspended
   */
  public function setResourceSuspended($resourceSuspended)
  {
    $this->resourceSuspended = $resourceSuspended;
  }
  /**
   * @return bool
   */
  public function getResourceSuspended()
  {
    return $this->resourceSuspended;
  }
  /**
   * Suspension reason for the resource.
   *
   * Accepted values: SUSPENSION_REASON_UNSPECIFIED, WIPEOUT_HIDE_EVENT,
   * WIPEOUT_PURGE_EVENT, BILLING_DISABLED, ABUSER_DETECTED,
   * ENCRYPTION_KEY_INACCESSIBLE, REPLICATED_CLUSTER_ENCRYPTION_KEY_INACCESSIBLE
   *
   * @param self::SUSPENSION_REASON_* $suspensionReason
   */
  public function setSuspensionReason($suspensionReason)
  {
    $this->suspensionReason = $suspensionReason;
  }
  /**
   * @return self::SUSPENSION_REASON_*
   */
  public function getSuspensionReason()
  {
    return $this->suspensionReason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceSuspensionInfo::class, 'Google_Service_DatabaseCenter_ResourceSuspensionInfo');
