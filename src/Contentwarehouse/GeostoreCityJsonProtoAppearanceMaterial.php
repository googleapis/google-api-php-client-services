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

namespace Google\Service\Contentwarehouse;

class GeostoreCityJsonProtoAppearanceMaterial extends \Google\Model
{
  protected $diffuseColorType = GeostoreCityJsonProtoAppearanceMaterialRgbColor::class;
  protected $diffuseColorDataType = '';
  /**
   * @var bool
   */
  public $isSmooth;
  /**
   * @var string
   */
  public $name;
  /**
   * @var float
   */
  public $shininess;
  /**
   * @var float
   */
  public $transparency;

  /**
   * @param GeostoreCityJsonProtoAppearanceMaterialRgbColor
   */
  public function setDiffuseColor(GeostoreCityJsonProtoAppearanceMaterialRgbColor $diffuseColor)
  {
    $this->diffuseColor = $diffuseColor;
  }
  /**
   * @return GeostoreCityJsonProtoAppearanceMaterialRgbColor
   */
  public function getDiffuseColor()
  {
    return $this->diffuseColor;
  }
  /**
   * @param bool
   */
  public function setIsSmooth($isSmooth)
  {
    $this->isSmooth = $isSmooth;
  }
  /**
   * @return bool
   */
  public function getIsSmooth()
  {
    return $this->isSmooth;
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
   * @param float
   */
  public function setShininess($shininess)
  {
    $this->shininess = $shininess;
  }
  /**
   * @return float
   */
  public function getShininess()
  {
    return $this->shininess;
  }
  /**
   * @param float
   */
  public function setTransparency($transparency)
  {
    $this->transparency = $transparency;
  }
  /**
   * @return float
   */
  public function getTransparency()
  {
    return $this->transparency;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeostoreCityJsonProtoAppearanceMaterial::class, 'Google_Service_Contentwarehouse_GeostoreCityJsonProtoAppearanceMaterial');
