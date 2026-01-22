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

namespace Google\Service\DataprocMetastore;

class TelemetryConfig extends \Google\Model
{
  /**
   * The LOG_FORMAT is not set.
   */
  public const LOG_FORMAT_LOG_FORMAT_UNSPECIFIED = 'LOG_FORMAT_UNSPECIFIED';
  /**
   * Logging output uses the legacy textPayload format.
   */
  public const LOG_FORMAT_LEGACY = 'LEGACY';
  /**
   * Logging output uses the jsonPayload format.
   */
  public const LOG_FORMAT_JSON = 'JSON';
  /**
   * Optional. The output format of the Dataproc Metastore service's logs.
   *
   * @var string
   */
  public $logFormat;

  /**
   * Optional. The output format of the Dataproc Metastore service's logs.
   *
   * Accepted values: LOG_FORMAT_UNSPECIFIED, LEGACY, JSON
   *
   * @param self::LOG_FORMAT_* $logFormat
   */
  public function setLogFormat($logFormat)
  {
    $this->logFormat = $logFormat;
  }
  /**
   * @return self::LOG_FORMAT_*
   */
  public function getLogFormat()
  {
    return $this->logFormat;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TelemetryConfig::class, 'Google_Service_DataprocMetastore_TelemetryConfig');
