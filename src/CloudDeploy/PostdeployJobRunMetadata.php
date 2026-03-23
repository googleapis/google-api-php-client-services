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

namespace Google\Service\CloudDeploy;

class PostdeployJobRunMetadata extends \Google\Model
{
  protected $customType = CustomMetadata::class;
  protected $customDataType = '';

  /**
   * Output only. Custom metadata provided by user-defined postdeploy operation.
   *
   * @param CustomMetadata $custom
   */
  public function setCustom(CustomMetadata $custom)
  {
    $this->custom = $custom;
  }
  /**
   * @return CustomMetadata
   */
  public function getCustom()
  {
    return $this->custom;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PostdeployJobRunMetadata::class, 'Google_Service_CloudDeploy_PostdeployJobRunMetadata');
