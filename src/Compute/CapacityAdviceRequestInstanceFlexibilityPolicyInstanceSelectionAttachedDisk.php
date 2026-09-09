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

class CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelectionAttachedDisk extends \Google\Model
{
  /**
   * Default value, unspecified disk type.
   */
  public const TYPE_DISK_TYPE_UNSPECIFIED = 'DISK_TYPE_UNSPECIFIED';
  /**
   * Scratch disk (Local SSD).
   */
  public const TYPE_SCRATCH = 'SCRATCH';
  /**
   * Specifies the type of the disk.
   *
   * @var string
   */
  public $type;

  /**
   * Specifies the type of the disk.
   *
   * Accepted values: DISK_TYPE_UNSPECIFIED, SCRATCH
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelectionAttachedDisk::class, 'Google_Service_Compute_CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelectionAttachedDisk');
