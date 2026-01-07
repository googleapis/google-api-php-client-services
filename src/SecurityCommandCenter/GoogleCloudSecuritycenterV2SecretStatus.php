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

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV2SecretStatus extends \Google\Model
{
  /**
   * Default value; no validation was attempted.
   */
  public const VALIDITY_SECRET_VALIDITY_UNSPECIFIED = 'SECRET_VALIDITY_UNSPECIFIED';
  /**
   * There is no mechanism to validate the secret.
   */
  public const VALIDITY_SECRET_VALIDITY_UNSUPPORTED = 'SECRET_VALIDITY_UNSUPPORTED';
  /**
   * Validation is supported but the validation failed.
   */
  public const VALIDITY_SECRET_VALIDITY_FAILED = 'SECRET_VALIDITY_FAILED';
  /**
   * The secret is confirmed to be invalid.
   */
  public const VALIDITY_SECRET_VALIDITY_INVALID = 'SECRET_VALIDITY_INVALID';
  /**
   * The secret is confirmed to be valid.
   */
  public const VALIDITY_SECRET_VALIDITY_VALID = 'SECRET_VALIDITY_VALID';
  /**
   * Time that the secret was found.
   *
   * @var string
   */
  public $lastUpdatedTime;
  /**
   * The validity of the secret.
   *
   * @var string
   */
  public $validity;

  /**
   * Time that the secret was found.
   *
   * @param string $lastUpdatedTime
   */
  public function setLastUpdatedTime($lastUpdatedTime)
  {
    $this->lastUpdatedTime = $lastUpdatedTime;
  }
  /**
   * @return string
   */
  public function getLastUpdatedTime()
  {
    return $this->lastUpdatedTime;
  }
  /**
   * The validity of the secret.
   *
   * Accepted values: SECRET_VALIDITY_UNSPECIFIED, SECRET_VALIDITY_UNSUPPORTED,
   * SECRET_VALIDITY_FAILED, SECRET_VALIDITY_INVALID, SECRET_VALIDITY_VALID
   *
   * @param self::VALIDITY_* $validity
   */
  public function setValidity($validity)
  {
    $this->validity = $validity;
  }
  /**
   * @return self::VALIDITY_*
   */
  public function getValidity()
  {
    return $this->validity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2SecretStatus::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2SecretStatus');
