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

namespace Google\Service\ThreatIntelligenceService;

class Audit extends \Google\Model
{
  /**
   * Output only. Time of creation.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Agent that created or updated the record, could be a UserId or
   * a JobId.
   *
   * @var string
   */
  public $creator;
  /**
   * Output only. Time of creation or last update.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. Agent that last updated the record, could be a UserId or a
   * JobId.
   *
   * @var string
   */
  public $updater;

  /**
   * Output only. Time of creation.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. Agent that created or updated the record, could be a UserId or
   * a JobId.
   *
   * @param string $creator
   */
  public function setCreator($creator)
  {
    $this->creator = $creator;
  }
  /**
   * @return string
   */
  public function getCreator()
  {
    return $this->creator;
  }
  /**
   * Output only. Time of creation or last update.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * Output only. Agent that last updated the record, could be a UserId or a
   * JobId.
   *
   * @param string $updater
   */
  public function setUpdater($updater)
  {
    $this->updater = $updater;
  }
  /**
   * @return string
   */
  public function getUpdater()
  {
    return $this->updater;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Audit::class, 'Google_Service_ThreatIntelligenceService_Audit');
