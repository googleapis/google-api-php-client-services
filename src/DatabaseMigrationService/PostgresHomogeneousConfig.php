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

namespace Google\Service\DatabaseMigrationService;

class PostgresHomogeneousConfig extends \Google\Model
{
  /**
   * Required. Whether the migration is native logical.
   *
   * @var bool
   */
  public $isNativeLogical;
  /**
   * Optional. Maximum number of additional subscriptions to use for the
   * migration job.
   *
   * @var int
   */
  public $maxAdditionalSubscriptions;

  /**
   * Required. Whether the migration is native logical.
   *
   * @param bool $isNativeLogical
   */
  public function setIsNativeLogical($isNativeLogical)
  {
    $this->isNativeLogical = $isNativeLogical;
  }
  /**
   * @return bool
   */
  public function getIsNativeLogical()
  {
    return $this->isNativeLogical;
  }
  /**
   * Optional. Maximum number of additional subscriptions to use for the
   * migration job.
   *
   * @param int $maxAdditionalSubscriptions
   */
  public function setMaxAdditionalSubscriptions($maxAdditionalSubscriptions)
  {
    $this->maxAdditionalSubscriptions = $maxAdditionalSubscriptions;
  }
  /**
   * @return int
   */
  public function getMaxAdditionalSubscriptions()
  {
    return $this->maxAdditionalSubscriptions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PostgresHomogeneousConfig::class, 'Google_Service_DatabaseMigrationService_PostgresHomogeneousConfig');
