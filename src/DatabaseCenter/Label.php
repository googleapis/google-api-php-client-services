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

class Label extends \Google\Model
{
  /**
   * The key part of the label.
   *
   * @var string
   */
  public $key;
  /**
   * The source of the Label. Source is empty if the label is directly attached
   * to the resource and not inherited.
   *
   * @var string
   */
  public $source;
  /**
   * The value part of the label.
   *
   * @var string
   */
  public $value;

  /**
   * The key part of the label.
   *
   * @param string $key
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
   * The source of the Label. Source is empty if the label is directly attached
   * to the resource and not inherited.
   *
   * @param string $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * The value part of the label.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Label::class, 'Google_Service_DatabaseCenter_Label');
