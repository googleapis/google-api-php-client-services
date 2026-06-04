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

class GoogleAdsSearchads360V23CommonTopicInfo extends \Google\Collection
{
  protected $collection_key = 'path';
  /**
   * The category to target or exclude. Each subsequent element in the array
   * describes a more specific sub-category. For example, "Pets & Animals",
   * "Pets", "Dogs" represents the "Pets & Animals/Pets/Dogs" category.
   *
   * @var string[]
   */
  public $path;
  /**
   * The Topic Constant resource name.
   *
   * @var string
   */
  public $topicConstant;

  /**
   * The category to target or exclude. Each subsequent element in the array
   * describes a more specific sub-category. For example, "Pets & Animals",
   * "Pets", "Dogs" represents the "Pets & Animals/Pets/Dogs" category.
   *
   * @param string[] $path
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string[]
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * The Topic Constant resource name.
   *
   * @param string $topicConstant
   */
  public function setTopicConstant($topicConstant)
  {
    $this->topicConstant = $topicConstant;
  }
  /**
   * @return string
   */
  public function getTopicConstant()
  {
    return $this->topicConstant;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonTopicInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonTopicInfo');
