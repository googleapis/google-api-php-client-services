<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Compute_DisksScopedList extends Google_Collection
{
  protected $collection_key = 'disks';
  public $disks;
  public $warning;

  public function setDisks(array $disks)
  {
    foreach ($disks as $d) {
      if (!$d instanceof Google_Service_Compute_Disk) {
        throw new InvalidArgumentException('First argument to setDisks must be an array of Google_Service_Compute_Disk');
      }
    }
    $this->disks = $disks;
  }
  public function getDisks()
  {
    return $this->disks;
  }
  public function setWarning(Google_Service_Compute_DisksScopedListWarning $warning)
  {
    $this->warning = $warning;
  }
  public function getWarning()
  {
    return $this->warning;
  }
}
