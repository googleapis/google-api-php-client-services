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

namespace Google\Service\Dfareporting;

class RequestValue extends \Google\Collection
{
  protected $collection_key = 'userAttributeIds';
  /**
   * @var string[]
   */
  public $excludeFromUserAttributeIds;
  /**
   * @var string
   */
  public $key;
  /**
   * @var string[]
   */
  public $userAttributeIds;

  /**
   * @param string[]
   */
  public function setExcludeFromUserAttributeIds($excludeFromUserAttributeIds)
  {
    $this->excludeFromUserAttributeIds = $excludeFromUserAttributeIds;
  }
  /**
   * @return string[]
   */
  public function getExcludeFromUserAttributeIds()
  {
    return $this->excludeFromUserAttributeIds;
  }
  /**
   * @param string
   */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /**
   * @return string
   */
  public function getKey()
  {
    return $this->key;
  }
  /**
   * @param string[]
   */
  public function setUserAttributeIds($userAttributeIds)
  {
    $this->userAttributeIds = $userAttributeIds;
  }
  /**
   * @return string[]
   */
  public function getUserAttributeIds()
  {
    return $this->userAttributeIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequestValue::class, 'Google_Service_Dfareporting_RequestValue');
