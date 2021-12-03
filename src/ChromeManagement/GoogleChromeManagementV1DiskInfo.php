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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementV1DiskInfo extends \Google\Collection
{
  protected $collection_key = 'volumeIds';
  public $bytesReadThisSession;
  public $bytesWrittenThisSession;
  public $discardTimeThisSession;
  public $health;
  public $ioTimeThisSession;
  public $manufacturer;
  public $model;
  public $readTimeThisSession;
  public $serialNumber;
  public $sizeBytes;
  public $type;
  public $volumeIds;
  public $writeTimeThisSession;

  public function setBytesReadThisSession($bytesReadThisSession)
  {
    $this->bytesReadThisSession = $bytesReadThisSession;
  }
  public function getBytesReadThisSession()
  {
    return $this->bytesReadThisSession;
  }
  public function setBytesWrittenThisSession($bytesWrittenThisSession)
  {
    $this->bytesWrittenThisSession = $bytesWrittenThisSession;
  }
  public function getBytesWrittenThisSession()
  {
    return $this->bytesWrittenThisSession;
  }
  public function setDiscardTimeThisSession($discardTimeThisSession)
  {
    $this->discardTimeThisSession = $discardTimeThisSession;
  }
  public function getDiscardTimeThisSession()
  {
    return $this->discardTimeThisSession;
  }
  public function setHealth($health)
  {
    $this->health = $health;
  }
  public function getHealth()
  {
    return $this->health;
  }
  public function setIoTimeThisSession($ioTimeThisSession)
  {
    $this->ioTimeThisSession = $ioTimeThisSession;
  }
  public function getIoTimeThisSession()
  {
    return $this->ioTimeThisSession;
  }
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
  public function setModel($model)
  {
    $this->model = $model;
  }
  public function getModel()
  {
    return $this->model;
  }
  public function setReadTimeThisSession($readTimeThisSession)
  {
    $this->readTimeThisSession = $readTimeThisSession;
  }
  public function getReadTimeThisSession()
  {
    return $this->readTimeThisSession;
  }
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setVolumeIds($volumeIds)
  {
    $this->volumeIds = $volumeIds;
  }
  public function getVolumeIds()
  {
    return $this->volumeIds;
  }
  public function setWriteTimeThisSession($writeTimeThisSession)
  {
    $this->writeTimeThisSession = $writeTimeThisSession;
  }
  public function getWriteTimeThisSession()
  {
    return $this->writeTimeThisSession;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1DiskInfo::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1DiskInfo');
