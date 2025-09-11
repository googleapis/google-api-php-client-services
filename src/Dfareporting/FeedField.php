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

class FeedField extends \Google\Model
{
  /**
   * @var string
   */
  public $defaultValue;
  /**
   * @var bool
   */
  public $filterable;
  /**
   * @var int
   */
  public $id;
  /**
   * @var string
   */
  public $name;
  /**
   * @var bool
   */
  public $renderable;
  /**
   * @var bool
   */
  public $required;
  /**
   * @var string
   */
  public $type;

  /**
   * @param string
   */
  public function setDefaultValue($defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  /**
   * @return string
   */
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  /**
   * @param bool
   */
  public function setFilterable($filterable)
  {
    $this->filterable = $filterable;
  }
  /**
   * @return bool
   */
  public function getFilterable()
  {
    return $this->filterable;
  }
  /**
   * @param int
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string
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
  /**
   * @param bool
   */
  public function setRenderable($renderable)
  {
    $this->renderable = $renderable;
  }
  /**
   * @return bool
   */
  public function getRenderable()
  {
    return $this->renderable;
  }
  /**
   * @param bool
   */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /**
   * @return bool
   */
  public function getRequired()
  {
    return $this->required;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedField::class, 'Google_Service_Dfareporting_FeedField');
