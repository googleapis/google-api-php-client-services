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

class PersistentDiskDefaults extends \Google\Model
{
  /**
   * @var string[]
   */
  public $additionalLabels;
  /**
   * @var string
   */
  public $diskName;
  /**
   * @var string
   */
  public $diskType;
  /**
   * @var int
   */
  public $sourceDiskNumber;

  /**
   * @param string[]
   */
  public function setAdditionalLabels($additionalLabels)
  {
    $this->additionalLabels = $additionalLabels;
  }
  /**
   * @return string[]
   */
  public function getAdditionalLabels()
  {
    return $this->additionalLabels;
  }
  /**
   * @param string
   */
  public function setDiskName($diskName)
  {
    $this->diskName = $diskName;
  }
  /**
   * @return string
   */
  public function getDiskName()
  {
    return $this->diskName;
  }
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
   * @param int
   */
  public function setSourceDiskNumber($sourceDiskNumber)
  {
    $this->sourceDiskNumber = $sourceDiskNumber;
  }
  /**
   * @return int
   */
  public function getSourceDiskNumber()
  {
    return $this->sourceDiskNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PersistentDiskDefaults::class, 'Google_Service_VMMigrationService_PersistentDiskDefaults');
