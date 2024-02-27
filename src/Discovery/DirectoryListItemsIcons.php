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

namespace Google\Service\Discovery;

class DirectoryListItemsIcons extends \Google\Model
{
  /**
   * @var string
   */
  public $x16;
  /**
   * @var string
   */
  public $x32;

  /**
   * @param string
   */
  public function setX16($x16)
  {
    $this->x16 = $x16;
  }
  /**
   * @return string
   */
  public function getX16()
  {
    return $this->x16;
  }
  /**
   * @param string
   */
  public function setX32($x32)
  {
    $this->x32 = $x32;
  }
  /**
   * @return string
   */
  public function getX32()
  {
    return $this->x32;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DirectoryListItemsIcons::class, 'Google_Service_Discovery_DirectoryListItemsIcons');
