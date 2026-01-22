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

class HiveMetastoreVersion extends \Google\Model
{
  /**
   * Whether version will be chosen by the server if a metastore service is
   * created with a HiveMetastoreConfig that omits the version.
   *
   * @var bool
   */
  public $isDefault;
  /**
   * The semantic version of the Hive Metastore software.
   *
   * @var string
   */
  public $version;

  /**
   * Whether version will be chosen by the server if a metastore service is
   * created with a HiveMetastoreConfig that omits the version.
   *
   * @param bool $isDefault
   */
  public function setIsDefault($isDefault)
  {
    $this->isDefault = $isDefault;
  }
  /**
   * @return bool
   */
  public function getIsDefault()
  {
    return $this->isDefault;
  }
  /**
   * The semantic version of the Hive Metastore software.
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HiveMetastoreVersion::class, 'Google_Service_DataprocMetastore_HiveMetastoreVersion');
