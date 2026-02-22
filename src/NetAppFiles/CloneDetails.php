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

namespace Google\Service\NetAppFiles;

class CloneDetails extends \Google\Model
{
  /**
   * Output only. Shared space in GiB. Determined at volume creation time based
   * on size of source snapshot.
   *
   * @var string
   */
  public $sharedSpaceGib;
  /**
   * Output only. Specifies the full resource name of the source snapshot from
   * which this volume was cloned. Format: projects/{project}/locations/{locatio
   * n}/volumes/{volume}/snapshots/{snapshot}
   *
   * @var string
   */
  public $sourceSnapshot;
  /**
   * Output only. Full name of the source volume resource. Format:
   * projects/{project}/locations/{location}/volumes/{volume}
   *
   * @var string
   */
  public $sourceVolume;

  /**
   * Output only. Shared space in GiB. Determined at volume creation time based
   * on size of source snapshot.
   *
   * @param string $sharedSpaceGib
   */
  public function setSharedSpaceGib($sharedSpaceGib)
  {
    $this->sharedSpaceGib = $sharedSpaceGib;
  }
  /**
   * @return string
   */
  public function getSharedSpaceGib()
  {
    return $this->sharedSpaceGib;
  }
  /**
   * Output only. Specifies the full resource name of the source snapshot from
   * which this volume was cloned. Format: projects/{project}/locations/{locatio
   * n}/volumes/{volume}/snapshots/{snapshot}
   *
   * @param string $sourceSnapshot
   */
  public function setSourceSnapshot($sourceSnapshot)
  {
    $this->sourceSnapshot = $sourceSnapshot;
  }
  /**
   * @return string
   */
  public function getSourceSnapshot()
  {
    return $this->sourceSnapshot;
  }
  /**
   * Output only. Full name of the source volume resource. Format:
   * projects/{project}/locations/{location}/volumes/{volume}
   *
   * @param string $sourceVolume
   */
  public function setSourceVolume($sourceVolume)
  {
    $this->sourceVolume = $sourceVolume;
  }
  /**
   * @return string
   */
  public function getSourceVolume()
  {
    return $this->sourceVolume;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloneDetails::class, 'Google_Service_NetAppFiles_CloneDetails');
