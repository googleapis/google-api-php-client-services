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

namespace Google\Service\CloudSearch;

class DynamiteSpacesScoringInfo extends \Google\Model
{
  public $finalScore;
  public $freshnessScore;
  public $messageScore;
  public $spaceAgeInDays;
  public $topicalityScore;

  public function setFinalScore($finalScore)
  {
    $this->finalScore = $finalScore;
  }
  public function getFinalScore()
  {
    return $this->finalScore;
  }
  public function setFreshnessScore($freshnessScore)
  {
    $this->freshnessScore = $freshnessScore;
  }
  public function getFreshnessScore()
  {
    return $this->freshnessScore;
  }
  public function setMessageScore($messageScore)
  {
    $this->messageScore = $messageScore;
  }
  public function getMessageScore()
  {
    return $this->messageScore;
  }
  public function setSpaceAgeInDays($spaceAgeInDays)
  {
    $this->spaceAgeInDays = $spaceAgeInDays;
  }
  public function getSpaceAgeInDays()
  {
    return $this->spaceAgeInDays;
  }
  public function setTopicalityScore($topicalityScore)
  {
    $this->topicalityScore = $topicalityScore;
  }
  public function getTopicalityScore()
  {
    return $this->topicalityScore;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DynamiteSpacesScoringInfo::class, 'Google_Service_CloudSearch_DynamiteSpacesScoringInfo');
