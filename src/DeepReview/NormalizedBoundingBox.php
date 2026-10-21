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

namespace Google\Service\DeepReview;

class NormalizedBoundingBox extends \Google\Model
{
  /**
   * Output only. Bottom coordinate in [0.0, 1.0].
   *
   * @var float
   */
  public $bottom;
  /**
   * Output only. Left coordinate in [0.0, 1.0].
   *
   * @var float
   */
  public $left;
  /**
   * Output only. Right coordinate in [0.0, 1.0].
   *
   * @var float
   */
  public $right;
  /**
   * Output only. Top coordinate in [0.0, 1.0].
   *
   * @var float
   */
  public $top;

  /**
   * Output only. Bottom coordinate in [0.0, 1.0].
   *
   * @param float $bottom
   */
  public function setBottom($bottom)
  {
    $this->bottom = $bottom;
  }
  /**
   * @return float
   */
  public function getBottom()
  {
    return $this->bottom;
  }
  /**
   * Output only. Left coordinate in [0.0, 1.0].
   *
   * @param float $left
   */
  public function setLeft($left)
  {
    $this->left = $left;
  }
  /**
   * @return float
   */
  public function getLeft()
  {
    return $this->left;
  }
  /**
   * Output only. Right coordinate in [0.0, 1.0].
   *
   * @param float $right
   */
  public function setRight($right)
  {
    $this->right = $right;
  }
  /**
   * @return float
   */
  public function getRight()
  {
    return $this->right;
  }
  /**
   * Output only. Top coordinate in [0.0, 1.0].
   *
   * @param float $top
   */
  public function setTop($top)
  {
    $this->top = $top;
  }
  /**
   * @return float
   */
  public function getTop()
  {
    return $this->top;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NormalizedBoundingBox::class, 'Google_Service_DeepReview_NormalizedBoundingBox');
