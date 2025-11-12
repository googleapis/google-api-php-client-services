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

namespace Google\Service\Config;

class PropertyChange extends \Google\Collection
{
  protected $collection_key = 'beforeSensitivePaths';
  /**
   * @var array
   */
  public $after;
  /**
   * @var string[]
   */
  public $afterSensitivePaths;
  /**
   * @var array
   */
  public $before;
  /**
   * @var string[]
   */
  public $beforeSensitivePaths;
  /**
   * @var string
   */
  public $path;

  /**
   * @param array
   */
  public function setAfter($after)
  {
    $this->after = $after;
  }
  /**
   * @return array
   */
  public function getAfter()
  {
    return $this->after;
  }
  /**
   * @param string[]
   */
  public function setAfterSensitivePaths($afterSensitivePaths)
  {
    $this->afterSensitivePaths = $afterSensitivePaths;
  }
  /**
   * @return string[]
   */
  public function getAfterSensitivePaths()
  {
    return $this->afterSensitivePaths;
  }
  /**
   * @param array
   */
  public function setBefore($before)
  {
    $this->before = $before;
  }
  /**
   * @return array
   */
  public function getBefore()
  {
    return $this->before;
  }
  /**
   * @param string[]
   */
  public function setBeforeSensitivePaths($beforeSensitivePaths)
  {
    $this->beforeSensitivePaths = $beforeSensitivePaths;
  }
  /**
   * @return string[]
   */
  public function getBeforeSensitivePaths()
  {
    return $this->beforeSensitivePaths;
  }
  /**
   * @param string
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PropertyChange::class, 'Google_Service_Config_PropertyChange');
