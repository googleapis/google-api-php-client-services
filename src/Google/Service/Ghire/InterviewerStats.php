<?php
/*
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

class Google_Service_Ghire_InterviewerStats extends Google_Collection
{
  protected $collection_key = 'latency';
  protected $chartType = 'Google_Service_Ghire_Chart';
  protected $chartDataType = 'array';
  protected $interviewTypeStatsType = 'Google_Service_Ghire_InterviewTypeStats';
  protected $interviewTypeStatsDataType = 'array';
  protected $interviewerIdType = 'Google_Service_Ghire_PrincipalWithName';
  protected $interviewerIdDataType = '';
  public $kind;
  public $latency;

  public function setChart($chart)
  {
    $this->chart = $chart;
  }
  public function getChart()
  {
    return $this->chart;
  }
  public function setInterviewTypeStats($interviewTypeStats)
  {
    $this->interviewTypeStats = $interviewTypeStats;
  }
  public function getInterviewTypeStats()
  {
    return $this->interviewTypeStats;
  }
  public function setInterviewerId(Google_Service_Ghire_PrincipalWithName $interviewerId)
  {
    $this->interviewerId = $interviewerId;
  }
  public function getInterviewerId()
  {
    return $this->interviewerId;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLatency($latency)
  {
    $this->latency = $latency;
  }
  public function getLatency()
  {
    return $this->latency;
  }
}
