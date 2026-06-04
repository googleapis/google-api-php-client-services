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

namespace Google\Service\Datastream;

class DataverseSourceConfig extends \Google\Model
{
  protected $excludeObjectsType = SourceCatalog::class;
  protected $excludeObjectsDataType = '';
  protected $includeObjectsType = SourceCatalog::class;
  protected $includeObjectsDataType = '';
  /**
   * Required. Incremental sync polling interval for all objects. If not set, a
   * default value of `5 minutes` is used. The duration must be from `5 minutes`
   * to `24 hours`, inclusive.
   *
   * @var string
   */
  public $pollingInterval;

  /**
   * Optional. The objects to exclude from the stream.
   *
   * @param SourceCatalog $excludeObjects
   */
  public function setExcludeObjects(SourceCatalog $excludeObjects)
  {
    $this->excludeObjects = $excludeObjects;
  }
  /**
   * @return SourceCatalog
   */
  public function getExcludeObjects()
  {
    return $this->excludeObjects;
  }
  /**
   * Optional. The objects to retrieve from the source.
   *
   * @param SourceCatalog $includeObjects
   */
  public function setIncludeObjects(SourceCatalog $includeObjects)
  {
    $this->includeObjects = $includeObjects;
  }
  /**
   * @return SourceCatalog
   */
  public function getIncludeObjects()
  {
    return $this->includeObjects;
  }
  /**
   * Required. Incremental sync polling interval for all objects. If not set, a
   * default value of `5 minutes` is used. The duration must be from `5 minutes`
   * to `24 hours`, inclusive.
   *
   * @param string $pollingInterval
   */
  public function setPollingInterval($pollingInterval)
  {
    $this->pollingInterval = $pollingInterval;
  }
  /**
   * @return string
   */
  public function getPollingInterval()
  {
    return $this->pollingInterval;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataverseSourceConfig::class, 'Google_Service_Datastream_DataverseSourceConfig');
