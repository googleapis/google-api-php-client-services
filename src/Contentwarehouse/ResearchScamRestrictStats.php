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

class ResearchScamRestrictStats extends \Google\Model
{
  protected $evaluationInfoType = ResearchScamRestrictEvaluationInfo::class;
  protected $evaluationInfoDataType = '';
  /**
   * @var string
   */
  public $numActiveDatapoints;
  /**
   * @var string
   */
  public $numTotalDatapoints;

  /**
   * @param ResearchScamRestrictEvaluationInfo
   */
  public function setEvaluationInfo(ResearchScamRestrictEvaluationInfo $evaluationInfo)
  {
    $this->evaluationInfo = $evaluationInfo;
  }
  /**
   * @return ResearchScamRestrictEvaluationInfo
   */
  public function getEvaluationInfo()
  {
    return $this->evaluationInfo;
  }
  /**
   * @param string
   */
  public function setNumActiveDatapoints($numActiveDatapoints)
  {
    $this->numActiveDatapoints = $numActiveDatapoints;
  }
  /**
   * @return string
   */
  public function getNumActiveDatapoints()
  {
    return $this->numActiveDatapoints;
  }
  /**
   * @param string
   */
  public function setNumTotalDatapoints($numTotalDatapoints)
  {
    $this->numTotalDatapoints = $numTotalDatapoints;
  }
  /**
   * @return string
   */
  public function getNumTotalDatapoints()
  {
    return $this->numTotalDatapoints;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResearchScamRestrictStats::class, 'Google_Service_Contentwarehouse_ResearchScamRestrictStats');
