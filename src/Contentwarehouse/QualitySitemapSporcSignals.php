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

class QualitySitemapSporcSignals extends \Google\Model
{
  /**
   * @var float
   */
  public $oslScore;
  /**
   * @var float
   */
  public $scrolltoScore;
  /**
   * @var float
   */
  public $tocScore;

  /**
   * @param float
   */
  public function setOslScore($oslScore)
  {
    $this->oslScore = $oslScore;
  }
  /**
   * @return float
   */
  public function getOslScore()
  {
    return $this->oslScore;
  }
  /**
   * @param float
   */
  public function setScrolltoScore($scrolltoScore)
  {
    $this->scrolltoScore = $scrolltoScore;
  }
  /**
   * @return float
   */
  public function getScrolltoScore()
  {
    return $this->scrolltoScore;
  }
  /**
   * @param float
   */
  public function setTocScore($tocScore)
  {
    $this->tocScore = $tocScore;
  }
  /**
   * @return float
   */
  public function getTocScore()
  {
    return $this->tocScore;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QualitySitemapSporcSignals::class, 'Google_Service_Contentwarehouse_QualitySitemapSporcSignals');
