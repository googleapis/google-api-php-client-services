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

namespace Google\Service\SaaSServiceManagement;

class FlagUpdate extends \Google\Model
{
  /**
   * Required. Flag release being applied by UnitOperation.
   *
   * @var string
   */
  public $flagRelease;

  /**
   * Required. Flag release being applied by UnitOperation.
   *
   * @param string $flagRelease
   */
  public function setFlagRelease($flagRelease)
  {
    $this->flagRelease = $flagRelease;
  }
  /**
   * @return string
   */
  public function getFlagRelease()
  {
    return $this->flagRelease;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FlagUpdate::class, 'Google_Service_SaaSServiceManagement_FlagUpdate');
