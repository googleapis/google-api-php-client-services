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

namespace Google\Service\AIPlatformNotebooks;

class UpgradeInstanceRequest extends \Google\Model
{
  /**
   * Optional. The Compute Engine image family resource name to upgrade to.
   * Format: `projects/{project_id}/global/images/family/{image_family}` If
   * specified, the instance will be upgraded to the latest image in the
   * specified image family, allowing upgrades across image families. If not
   * specified, the instance will be upgraded to the latest image in its current
   * image family.
   *
   * @var string
   */
  public $imageFamily;

  /**
   * Optional. The Compute Engine image family resource name to upgrade to.
   * Format: `projects/{project_id}/global/images/family/{image_family}` If
   * specified, the instance will be upgraded to the latest image in the
   * specified image family, allowing upgrades across image families. If not
   * specified, the instance will be upgraded to the latest image in its current
   * image family.
   *
   * @param string $imageFamily
   */
  public function setImageFamily($imageFamily)
  {
    $this->imageFamily = $imageFamily;
  }
  /**
   * @return string
   */
  public function getImageFamily()
  {
    return $this->imageFamily;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpgradeInstanceRequest::class, 'Google_Service_AIPlatformNotebooks_UpgradeInstanceRequest');
