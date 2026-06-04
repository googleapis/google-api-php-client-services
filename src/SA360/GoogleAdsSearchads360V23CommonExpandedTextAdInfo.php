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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonExpandedTextAdInfo extends \Google\Model
{
  /**
   * The description of the ad.
   *
   * @var string
   */
  public $description;
  /**
   * The second description of the ad.
   *
   * @var string
   */
  public $description2;
  /**
   * The first part of the ad's headline.
   *
   * @var string
   */
  public $headlinePart1;
  /**
   * The second part of the ad's headline.
   *
   * @var string
   */
  public $headlinePart2;
  /**
   * The third part of the ad's headline.
   *
   * @var string
   */
  public $headlinePart3;
  /**
   * The text that can appear alongside the ad's displayed URL.
   *
   * @var string
   */
  public $path1;
  /**
   * Additional text that can appear alongside the ad's displayed URL.
   *
   * @var string
   */
  public $path2;

  /**
   * The description of the ad.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * The second description of the ad.
   *
   * @param string $description2
   */
  public function setDescription2($description2)
  {
    $this->description2 = $description2;
  }
  /**
   * @return string
   */
  public function getDescription2()
  {
    return $this->description2;
  }
  /**
   * The first part of the ad's headline.
   *
   * @param string $headlinePart1
   */
  public function setHeadlinePart1($headlinePart1)
  {
    $this->headlinePart1 = $headlinePart1;
  }
  /**
   * @return string
   */
  public function getHeadlinePart1()
  {
    return $this->headlinePart1;
  }
  /**
   * The second part of the ad's headline.
   *
   * @param string $headlinePart2
   */
  public function setHeadlinePart2($headlinePart2)
  {
    $this->headlinePart2 = $headlinePart2;
  }
  /**
   * @return string
   */
  public function getHeadlinePart2()
  {
    return $this->headlinePart2;
  }
  /**
   * The third part of the ad's headline.
   *
   * @param string $headlinePart3
   */
  public function setHeadlinePart3($headlinePart3)
  {
    $this->headlinePart3 = $headlinePart3;
  }
  /**
   * @return string
   */
  public function getHeadlinePart3()
  {
    return $this->headlinePart3;
  }
  /**
   * The text that can appear alongside the ad's displayed URL.
   *
   * @param string $path1
   */
  public function setPath1($path1)
  {
    $this->path1 = $path1;
  }
  /**
   * @return string
   */
  public function getPath1()
  {
    return $this->path1;
  }
  /**
   * Additional text that can appear alongside the ad's displayed URL.
   *
   * @param string $path2
   */
  public function setPath2($path2)
  {
    $this->path2 = $path2;
  }
  /**
   * @return string
   */
  public function getPath2()
  {
    return $this->path2;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonExpandedTextAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonExpandedTextAdInfo');
