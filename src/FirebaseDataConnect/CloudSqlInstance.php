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

namespace Google\Service\FirebaseDataConnect;

class CloudSqlInstance extends \Google\Model
{
  /**
   * Unspecified edition.
   */
  public const EDITION_EDITION_UNSPECIFIED = 'EDITION_UNSPECIFIED';
  /**
   * Enterprise edition.
   */
  public const EDITION_EDITION_ENTERPRISE = 'EDITION_ENTERPRISE';
  /**
   * Enterprise Plus edition.
   */
  public const EDITION_EDITION_ENTERPRISE_PLUS = 'EDITION_ENTERPRISE_PLUS';
  /**
   * Developer edition (includes AI Developer edition).
   */
  public const EDITION_EDITION_DEVELOPER = 'EDITION_DEVELOPER';
  /**
   * Output only. [Output only] The Cloud SQL instance edition.
   *
   * @var string
   */
  public $edition;
  /**
   * Required. Name of the CloudSQL instance, in the format: ```
   * projects/{project}/locations/{location}/instances/{instance} ```
   *
   * @var string
   */
  public $instance;

  /**
   * Output only. [Output only] The Cloud SQL instance edition.
   *
   * Accepted values: EDITION_UNSPECIFIED, EDITION_ENTERPRISE,
   * EDITION_ENTERPRISE_PLUS, EDITION_DEVELOPER
   *
   * @param self::EDITION_* $edition
   */
  public function setEdition($edition)
  {
    $this->edition = $edition;
  }
  /**
   * @return self::EDITION_*
   */
  public function getEdition()
  {
    return $this->edition;
  }
  /**
   * Required. Name of the CloudSQL instance, in the format: ```
   * projects/{project}/locations/{location}/instances/{instance} ```
   *
   * @param string $instance
   */
  public function setInstance($instance)
  {
    $this->instance = $instance;
  }
  /**
   * @return string
   */
  public function getInstance()
  {
    return $this->instance;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudSqlInstance::class, 'Google_Service_FirebaseDataConnect_CloudSqlInstance');
