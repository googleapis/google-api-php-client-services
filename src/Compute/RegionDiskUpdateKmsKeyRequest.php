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

namespace Google\Service\Compute;

class RegionDiskUpdateKmsKeyRequest extends \Google\Model
{
  /**
   * Optional. The new KMS key to replace the current one on the disk. If empty,
   * the disk will be re-encrypted using the primary version of the disk's
   * current KMS key.
   *
   * The KMS key can be provided in the following formats:              -
   * projects/project_id/locations/location/keyRings/key_ring/cryptoKeys/key
   *
   * Where project is the project ID or project number.
   *
   * @var string
   */
  public $kmsKeyName;

  /**
   * Optional. The new KMS key to replace the current one on the disk. If empty,
   * the disk will be re-encrypted using the primary version of the disk's
   * current KMS key.
   *
   * The KMS key can be provided in the following formats:              -
   * projects/project_id/locations/location/keyRings/key_ring/cryptoKeys/key
   *
   * Where project is the project ID or project number.
   *
   * @param string $kmsKeyName
   */
  public function setKmsKeyName($kmsKeyName)
  {
    $this->kmsKeyName = $kmsKeyName;
  }
  /**
   * @return string
   */
  public function getKmsKeyName()
  {
    return $this->kmsKeyName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RegionDiskUpdateKmsKeyRequest::class, 'Google_Service_Compute_RegionDiskUpdateKmsKeyRequest');
