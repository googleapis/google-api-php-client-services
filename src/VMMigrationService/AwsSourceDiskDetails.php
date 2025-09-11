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

namespace Google\Service\VMMigrationService;

class AwsSourceDiskDetails extends \Google\Model
{
  /**
   * @var string
   */
  public $diskType;
  /**
   * @var string
   */
  public $sizeGib;
  /**
   * @var string[]
   */
  public $tags;
  /**
   * @var string
   */
  public $volumeId;

  /**
   * @param string
   */
  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  /**
   * @return string
   */
  public function getDiskType()
  {
    return $this->diskType;
  }
  /**
   * @param string
   */
  public function setSizeGib($sizeGib)
  {
    $this->sizeGib = $sizeGib;
  }
  /**
   * @return string
   */
  public function getSizeGib()
  {
    return $this->sizeGib;
  }
  /**
   * @param string[]
   */
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  /**
   * @return string[]
   */
  public function getTags()
  {
    return $this->tags;
  }
  /**
   * @param string
   */
  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }
  /**
   * @return string
   */
  public function getVolumeId()
  {
    return $this->volumeId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AwsSourceDiskDetails::class, 'Google_Service_VMMigrationService_AwsSourceDiskDetails');
