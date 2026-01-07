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

namespace Google\Service\CloudFunctions;

class ServiceConfigOverrides extends \Google\Model
{
  /**
   * Optional. Specifies the maximum number of instances for the new Cloud Run
   * function. If provided, this overrides the max_instance_count setting of the
   * Gen1 function.
   *
   * @var int
   */
  public $maxInstanceCount;

  /**
   * Optional. Specifies the maximum number of instances for the new Cloud Run
   * function. If provided, this overrides the max_instance_count setting of the
   * Gen1 function.
   *
   * @param int $maxInstanceCount
   */
  public function setMaxInstanceCount($maxInstanceCount)
  {
    $this->maxInstanceCount = $maxInstanceCount;
  }
  /**
   * @return int
   */
  public function getMaxInstanceCount()
  {
    return $this->maxInstanceCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServiceConfigOverrides::class, 'Google_Service_CloudFunctions_ServiceConfigOverrides');
