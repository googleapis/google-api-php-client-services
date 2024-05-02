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

class ResearchScamRestrictEvaluationInfoApplyTokenStats extends \Google\Model
{
  /**
   * @var string
   */
  public $bijectiveMatches;
  /**
   * @var string
   */
  public $bitmapMatches;
  /**
   * @var string
   */
  public $noMatches;
  /**
   * @var string
   */
  public $nonCompactMatches;
  /**
   * @var string
   */
  public $vectorDatapointCount;
  /**
   * @var string
   */
  public $vectorMatches;

  /**
   * @param string
   */
  public function setBijectiveMatches($bijectiveMatches)
  {
    $this->bijectiveMatches = $bijectiveMatches;
  }
  /**
   * @return string
   */
  public function getBijectiveMatches()
  {
    return $this->bijectiveMatches;
  }
  /**
   * @param string
   */
  public function setBitmapMatches($bitmapMatches)
  {
    $this->bitmapMatches = $bitmapMatches;
  }
  /**
   * @return string
   */
  public function getBitmapMatches()
  {
    return $this->bitmapMatches;
  }
  /**
   * @param string
   */
  public function setNoMatches($noMatches)
  {
    $this->noMatches = $noMatches;
  }
  /**
   * @return string
   */
  public function getNoMatches()
  {
    return $this->noMatches;
  }
  /**
   * @param string
   */
  public function setNonCompactMatches($nonCompactMatches)
  {
    $this->nonCompactMatches = $nonCompactMatches;
  }
  /**
   * @return string
   */
  public function getNonCompactMatches()
  {
    return $this->nonCompactMatches;
  }
  /**
   * @param string
   */
  public function setVectorDatapointCount($vectorDatapointCount)
  {
    $this->vectorDatapointCount = $vectorDatapointCount;
  }
  /**
   * @return string
   */
  public function getVectorDatapointCount()
  {
    return $this->vectorDatapointCount;
  }
  /**
   * @param string
   */
  public function setVectorMatches($vectorMatches)
  {
    $this->vectorMatches = $vectorMatches;
  }
  /**
   * @return string
   */
  public function getVectorMatches()
  {
    return $this->vectorMatches;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResearchScamRestrictEvaluationInfoApplyTokenStats::class, 'Google_Service_Contentwarehouse_ResearchScamRestrictEvaluationInfoApplyTokenStats');
