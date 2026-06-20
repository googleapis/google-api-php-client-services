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

class DeletionProtectionInfo extends \Google\Model
{
  /**
   * Is deletion protection enabled.
   *
   * @var bool
   */
  public $deletionProtectionEnabled;
  protected $subResourceType = SubResource::class;
  protected $subResourceDataType = '';

  /**
   * Is deletion protection enabled.
   *
   * @param bool $deletionProtectionEnabled
   */
  public function setDeletionProtectionEnabled($deletionProtectionEnabled)
  {
    $this->deletionProtectionEnabled = $deletionProtectionEnabled;
  }
  /**
   * @return bool
   */
  public function getDeletionProtectionEnabled()
  {
    return $this->deletionProtectionEnabled;
  }
  /**
   * Optional. Sub resource details associated with the signal.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeletionProtectionInfo::class, 'Google_Service_DatabaseCenter_DeletionProtectionInfo');
