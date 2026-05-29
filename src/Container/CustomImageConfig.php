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

namespace Google\Service\Container;

class CustomImageConfig extends \Google\Model
{
  /**
   * The name of the image to use for this node.
   *
   * @var string
   */
  public $image;
  /**
   * The name of the image family to use for this node.
   *
   * @var string
   */
  public $imageFamily;
  /**
   * The project containing the image to use for this node.
   *
   * @var string
   */
  public $imageProject;

  /**
   * The name of the image to use for this node.
   *
   * @param string $image
   */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /**
   * @return string
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * The name of the image family to use for this node.
   *
   * @param string $imageFamily
   */
  public function setImageFamily($imageFamily)
  {
    $this->imageFamily = $imageFamily;
  }
  /**
   * @return string
   */
  public function getImageFamily()
  {
    return $this->imageFamily;
  }
  /**
   * The project containing the image to use for this node.
   *
   * @param string $imageProject
   */
  public function setImageProject($imageProject)
  {
    $this->imageProject = $imageProject;
  }
  /**
   * @return string
   */
  public function getImageProject()
  {
    return $this->imageProject;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomImageConfig::class, 'Google_Service_Container_CustomImageConfig');
