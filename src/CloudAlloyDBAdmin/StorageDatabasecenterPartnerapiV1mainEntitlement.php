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

namespace Google\Service\CloudAlloyDBAdmin;

class StorageDatabasecenterPartnerapiV1mainEntitlement extends \Google\Model
{
  /**
   * Disable validation warnings
   */
  public const ENTITLEMENT_STATE_ENTITLEMENT_STATE_UNSPECIFIED = 'ENTITLEMENT_STATE_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const ENTITLEMENT_STATE_ENTITLED = 'ENTITLED';
  /**
   * Disable validation warnings
   */
  public const ENTITLEMENT_STATE_REVOKED = 'REVOKED';
  /**
   * Disable validation warnings
   */
  public const TYPE_ENTITLEMENT_TYPE_UNSPECIFIED = 'ENTITLEMENT_TYPE_UNSPECIFIED';
  /**
   * Disable validation warnings
   *
   * @deprecated
   */
  public const TYPE_GEMINI = 'GEMINI';
  /**
   * Disable validation warnings
   */
  public const TYPE_NATIVE = 'NATIVE';
  /**
   * Disable validation warnings
   */
  public const TYPE_GCA_STANDARD = 'GCA_STANDARD';
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $entitlementState;
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $type;

  /**
   * Disable validation warnings
   *
   * Accepted values: ENTITLEMENT_STATE_UNSPECIFIED, ENTITLED, REVOKED
   *
   * @param self::ENTITLEMENT_STATE_* $entitlementState
   */
  public function setEntitlementState($entitlementState)
  {
    $this->entitlementState = $entitlementState;
  }
  /**
   * @return self::ENTITLEMENT_STATE_*
   */
  public function getEntitlementState()
  {
    return $this->entitlementState;
  }
  /**
   * Disable validation warnings
   *
   * Accepted values: ENTITLEMENT_TYPE_UNSPECIFIED, GEMINI, NATIVE, GCA_STANDARD
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainEntitlement::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainEntitlement');
