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

namespace Google\Service\Aiplatform;

class LearningGenaiRootControlDecodingRecord extends \Google\Collection
{
  protected $collection_key = 'thresholds';
  /**
   * @var string
   */
  public $prefixes;
  protected $scoresType = LearningGenaiRootControlDecodingRecordPolicyScore::class;
  protected $scoresDataType = 'array';
  /**
   * @var string
   */
  public $suffiexes;
  protected $thresholdsType = LearningGenaiRootControlDecodingConfigThreshold::class;
  protected $thresholdsDataType = 'array';

  /**
   * @param string
   */
  public function setPrefixes($prefixes)
  {
    $this->prefixes = $prefixes;
  }
  /**
   * @return string
   */
  public function getPrefixes()
  {
    return $this->prefixes;
  }
  /**
   * @param LearningGenaiRootControlDecodingRecordPolicyScore[]
   */
  public function setScores($scores)
  {
    $this->scores = $scores;
  }
  /**
   * @return LearningGenaiRootControlDecodingRecordPolicyScore[]
   */
  public function getScores()
  {
    return $this->scores;
  }
  /**
   * @param string
   */
  public function setSuffiexes($suffiexes)
  {
    $this->suffiexes = $suffiexes;
  }
  /**
   * @return string
   */
  public function getSuffiexes()
  {
    return $this->suffiexes;
  }
  /**
   * @param LearningGenaiRootControlDecodingConfigThreshold[]
   */
  public function setThresholds($thresholds)
  {
    $this->thresholds = $thresholds;
  }
  /**
   * @return LearningGenaiRootControlDecodingConfigThreshold[]
   */
  public function getThresholds()
  {
    return $this->thresholds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LearningGenaiRootControlDecodingRecord::class, 'Google_Service_Aiplatform_LearningGenaiRootControlDecodingRecord');
