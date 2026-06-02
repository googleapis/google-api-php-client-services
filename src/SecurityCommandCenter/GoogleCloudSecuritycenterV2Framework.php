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

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV2Framework extends \Google\Collection
{
  public const TYPE_FRAMEWORK_TYPE_UNSPECIFIED = 'FRAMEWORK_TYPE_UNSPECIFIED';
  public const TYPE_FRAMEWORK_TYPE_BUILT_IN = 'FRAMEWORK_TYPE_BUILT_IN';
  public const TYPE_FRAMEWORK_TYPE_CUSTOM = 'FRAMEWORK_TYPE_CUSTOM';
  protected $collection_key = 'controls';
  /**
   * @var string[]
   */
  public $category;
  protected $controlsType = GoogleCloudSecuritycenterV2Control::class;
  protected $controlsDataType = 'array';
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $type;

  /**
   * @param string[] $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string[]
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Control[] $controls
   */
  public function setControls($controls)
  {
    $this->controls = $controls;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Control[]
   */
  public function getControls()
  {
    return $this->controls;
  }
  /**
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
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
  /**
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2Framework::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2Framework');
