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

class AuditLogConfig extends \Google\Collection
{
  public const LOG_TYPE_LOG_TYPE_UNSPECIFIED = 'LOG_TYPE_UNSPECIFIED';
  public const LOG_TYPE_ADMIN_READ = 'ADMIN_READ';
  public const LOG_TYPE_DATA_WRITE = 'DATA_WRITE';
  public const LOG_TYPE_DATA_READ = 'DATA_READ';
  protected $collection_key = 'exemptedMembers';
  /**
   * @var string[]
   */
  public $exemptedMembers;
  /**
   * @var string
   */
  public $logType;

  /**
   * @param string[] $exemptedMembers
   */
  public function setExemptedMembers($exemptedMembers)
  {
    $this->exemptedMembers = $exemptedMembers;
  }
  /**
   * @return string[]
   */
  public function getExemptedMembers()
  {
    return $this->exemptedMembers;
  }
  /**
   * @param self::LOG_TYPE_* $logType
   */
  public function setLogType($logType)
  {
    $this->logType = $logType;
  }
  /**
   * @return self::LOG_TYPE_*
   */
  public function getLogType()
  {
    return $this->logType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditLogConfig::class, 'Google_Service_SecurityCommandCenter_AuditLogConfig');
