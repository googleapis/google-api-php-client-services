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

namespace Google\Service\Bigquery;

class MetadataCacheStalenessInsight extends \Google\Model
{
  /**
   * Output only. Average column metadata index staleness of previous runs with
   * the same query hash.
   *
   * @var string
   */
  public $avgPreviousStalenessMs;
  /**
   * Output only. The percent increase in staleness between the current job and
   * the average staleness of previous jobs with the same query hash.
   *
   * @var 
   */
  public $stalenessPercentageIncrease;

  /**
   * Output only. Average column metadata index staleness of previous runs with
   * the same query hash.
   *
   * @param string $avgPreviousStalenessMs
   */
  public function setAvgPreviousStalenessMs($avgPreviousStalenessMs)
  {
    $this->avgPreviousStalenessMs = $avgPreviousStalenessMs;
  }
  /**
   * @return string
   */
  public function getAvgPreviousStalenessMs()
  {
    return $this->avgPreviousStalenessMs;
  }
  public function setStalenessPercentageIncrease($stalenessPercentageIncrease)
  {
    $this->stalenessPercentageIncrease = $stalenessPercentageIncrease;
  }
  public function getStalenessPercentageIncrease()
  {
    return $this->stalenessPercentageIncrease;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetadataCacheStalenessInsight::class, 'Google_Service_Bigquery_MetadataCacheStalenessInsight');
