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

namespace Google\Service\NetworkServices;

class MulticastResourceState extends \Google\Model
{
  /**
   * The resource is in unspecified state.
   */
  public const STATE_STATE_ENUM_UNSPECIFIED = 'STATE_ENUM_UNSPECIFIED';
  /**
   * The resource is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The resource is in a normal state and ready to use.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The resource is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * The resource is failed to be deleted.
   */
  public const STATE_DELETE_FAILED = 'DELETE_FAILED';
  /**
   * The resource is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * The resource is failed to be updated.
   */
  public const STATE_UPDATE_FAILED = 'UPDATE_FAILED';
  /**
   * The multicast consumer resource that is deactivated by the multicast
   * administrator based on permission.
   */
  public const STATE_INACTIVE = 'INACTIVE';
  /**
   * The multicast consumer resource that is obsoleted due to multicast admin
   * setup teardown.
   */
  public const STATE_OBSOLETE = 'OBSOLETE';
  /**
   * Optional. The state of the multicast resource.
   *
   * @var string
   */
  public $state;

  /**
   * Optional. The state of the multicast resource.
   *
   * Accepted values: STATE_ENUM_UNSPECIFIED, CREATING, ACTIVE, DELETING,
   * DELETE_FAILED, UPDATING, UPDATE_FAILED, INACTIVE, OBSOLETE
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MulticastResourceState::class, 'Google_Service_NetworkServices_MulticastResourceState');
