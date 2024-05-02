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

class ResearchScamRestrictEvaluationInfo extends \Google\Model
{
  protected $applyTokenStatsType = ResearchScamRestrictEvaluationInfoApplyTokenStats::class;
  protected $applyTokenStatsDataType = '';
  protected $customRestrictStatsType = ResearchScamCustomRestrictEvaluationStats::class;
  protected $customRestrictStatsDataType = '';
  protected $directLookupStatsType = ResearchScamRestrictEvaluationInfoDirectLookupStats::class;
  protected $directLookupStatsDataType = '';

  /**
   * @param ResearchScamRestrictEvaluationInfoApplyTokenStats
   */
  public function setApplyTokenStats(ResearchScamRestrictEvaluationInfoApplyTokenStats $applyTokenStats)
  {
    $this->applyTokenStats = $applyTokenStats;
  }
  /**
   * @return ResearchScamRestrictEvaluationInfoApplyTokenStats
   */
  public function getApplyTokenStats()
  {
    return $this->applyTokenStats;
  }
  /**
   * @param ResearchScamCustomRestrictEvaluationStats
   */
  public function setCustomRestrictStats(ResearchScamCustomRestrictEvaluationStats $customRestrictStats)
  {
    $this->customRestrictStats = $customRestrictStats;
  }
  /**
   * @return ResearchScamCustomRestrictEvaluationStats
   */
  public function getCustomRestrictStats()
  {
    return $this->customRestrictStats;
  }
  /**
   * @param ResearchScamRestrictEvaluationInfoDirectLookupStats
   */
  public function setDirectLookupStats(ResearchScamRestrictEvaluationInfoDirectLookupStats $directLookupStats)
  {
    $this->directLookupStats = $directLookupStats;
  }
  /**
   * @return ResearchScamRestrictEvaluationInfoDirectLookupStats
   */
  public function getDirectLookupStats()
  {
    return $this->directLookupStats;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResearchScamRestrictEvaluationInfo::class, 'Google_Service_Contentwarehouse_ResearchScamRestrictEvaluationInfo');
