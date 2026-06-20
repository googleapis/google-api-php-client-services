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

class RetentionSettingsInfo extends \Google\Model
{
  /**
   * Duration based retention period i.e. 172800 seconds (2 days)
   *
   * @var string
   */
  public $durationBasedRetention;
  /**
   * Number of backups that will be retained.
   *
   * @var int
   */
  public $quantityBasedRetention;
  protected $subResourceType = SubResource::class;
  protected $subResourceDataType = '';
  /**
   * Timestamp based retention period i.e. till 2024-05-01T00:00:00Z
   *
   * @var string
   */
  public $timestampBasedRetentionTime;

  /**
   * Duration based retention period i.e. 172800 seconds (2 days)
   *
   * @param string $durationBasedRetention
   */
  public function setDurationBasedRetention($durationBasedRetention)
  {
    $this->durationBasedRetention = $durationBasedRetention;
  }
  /**
   * @return string
   */
  public function getDurationBasedRetention()
  {
    return $this->durationBasedRetention;
  }
  /**
   * Number of backups that will be retained.
   *
   * @param int $quantityBasedRetention
   */
  public function setQuantityBasedRetention($quantityBasedRetention)
  {
    $this->quantityBasedRetention = $quantityBasedRetention;
  }
  /**
   * @return int
   */
  public function getQuantityBasedRetention()
  {
    return $this->quantityBasedRetention;
  }
  /**
   * Optional. Sub resource details associated with the backup configuration.
   *
   * @param SubResource $subResource
   */
  public function setSubResource(SubResource $subResource)
  {
    $this->subResource = $subResource;
  }
  /**
   * @return SubResource
   */
  public function getSubResource()
  {
    return $this->subResource;
  }
  /**
   * Timestamp based retention period i.e. till 2024-05-01T00:00:00Z
   *
   * @param string $timestampBasedRetentionTime
   */
  public function setTimestampBasedRetentionTime($timestampBasedRetentionTime)
  {
    $this->timestampBasedRetentionTime = $timestampBasedRetentionTime;
  }
  /**
   * @return string
   */
  public function getTimestampBasedRetentionTime()
  {
    return $this->timestampBasedRetentionTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RetentionSettingsInfo::class, 'Google_Service_DatabaseCenter_RetentionSettingsInfo');
