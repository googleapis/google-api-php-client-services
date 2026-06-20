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

class OutdatedMinorVersionInfo extends \Google\Model
{
  /**
   * Recommended minor version of the underlying database engine. Example
   * values: For MySQL, it could be "8.0.35", "5.7.25" etc. For PostgreSQL, it
   * could be "14.4", "15.5" etc.
   *
   * @var string
   */
  public $recommendedMinorVersion;

  /**
   * Recommended minor version of the underlying database engine. Example
   * values: For MySQL, it could be "8.0.35", "5.7.25" etc. For PostgreSQL, it
   * could be "14.4", "15.5" etc.
   *
   * @param string $recommendedMinorVersion
   */
  public function setRecommendedMinorVersion($recommendedMinorVersion)
  {
    $this->recommendedMinorVersion = $recommendedMinorVersion;
  }
  /**
   * @return string
   */
  public function getRecommendedMinorVersion()
  {
    return $this->recommendedMinorVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OutdatedMinorVersionInfo::class, 'Google_Service_DatabaseCenter_OutdatedMinorVersionInfo');
