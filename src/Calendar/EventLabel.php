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

namespace Google\Service\Calendar;

class EventLabel extends \Google\Model
{
  /**
   * Background color of the label in hexadecimal format, such as "#039be5".
   * Events with this label are displayed in this color. Required.
   *
   * @var string
   */
  public $backgroundColor;
  /**
   * The ID of the label. Optional when inserting a new label. If not provided,
   * a unique ID will be generated. Required when updating a label. If provided,
   * the ID must be unique within the calendar and follow UUID format.
   *
   * @var string
   */
  public $id;
  /**
   * Name of the label. Optional. If provided this must have at most 50
   * characters.
   *
   * @var string
   */
  public $name;

  /**
   * Background color of the label in hexadecimal format, such as "#039be5".
   * Events with this label are displayed in this color. Required.
   *
   * @param string $backgroundColor
   */
  public function setBackgroundColor($backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }
  /**
   * @return string
   */
  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }
  /**
   * The ID of the label. Optional when inserting a new label. If not provided,
   * a unique ID will be generated. Required when updating a label. If provided,
   * the ID must be unique within the calendar and follow UUID format.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Name of the label. Optional. If provided this must have at most 50
   * characters.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EventLabel::class, 'Google_Service_Calendar_EventLabel');
