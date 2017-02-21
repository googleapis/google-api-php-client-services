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

class Google_Service_Ghire_FeedbackSummary extends Google_Model
{
  public $averageInterviewScore;
  public $averageInterviewScoreE1;
  public $kind;
  public $maximumInterviewScoreE1;
  public $minimumInterviewScoreE1;
  public $nextInterviewDateMs;
  public $pendingOnsite;
  public $pendingPhone;
  public $phoneInterviewScoreE1;
  public $totalOnsite;
  public $totalPhone;

  public function setAverageInterviewScore($averageInterviewScore)
  {
    $this->averageInterviewScore = $averageInterviewScore;
  }
  public function getAverageInterviewScore()
  {
    return $this->averageInterviewScore;
  }
  public function setAverageInterviewScoreE1($averageInterviewScoreE1)
  {
    $this->averageInterviewScoreE1 = $averageInterviewScoreE1;
  }
  public function getAverageInterviewScoreE1()
  {
    return $this->averageInterviewScoreE1;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMaximumInterviewScoreE1($maximumInterviewScoreE1)
  {
    $this->maximumInterviewScoreE1 = $maximumInterviewScoreE1;
  }
  public function getMaximumInterviewScoreE1()
  {
    return $this->maximumInterviewScoreE1;
  }
  public function setMinimumInterviewScoreE1($minimumInterviewScoreE1)
  {
    $this->minimumInterviewScoreE1 = $minimumInterviewScoreE1;
  }
  public function getMinimumInterviewScoreE1()
  {
    return $this->minimumInterviewScoreE1;
  }
  public function setNextInterviewDateMs($nextInterviewDateMs)
  {
    $this->nextInterviewDateMs = $nextInterviewDateMs;
  }
  public function getNextInterviewDateMs()
  {
    return $this->nextInterviewDateMs;
  }
  public function setPendingOnsite($pendingOnsite)
  {
    $this->pendingOnsite = $pendingOnsite;
  }
  public function getPendingOnsite()
  {
    return $this->pendingOnsite;
  }
  public function setPendingPhone($pendingPhone)
  {
    $this->pendingPhone = $pendingPhone;
  }
  public function getPendingPhone()
  {
    return $this->pendingPhone;
  }
  public function setPhoneInterviewScoreE1($phoneInterviewScoreE1)
  {
    $this->phoneInterviewScoreE1 = $phoneInterviewScoreE1;
  }
  public function getPhoneInterviewScoreE1()
  {
    return $this->phoneInterviewScoreE1;
  }
  public function setTotalOnsite($totalOnsite)
  {
    $this->totalOnsite = $totalOnsite;
  }
  public function getTotalOnsite()
  {
    return $this->totalOnsite;
  }
  public function setTotalPhone($totalPhone)
  {
    $this->totalPhone = $totalPhone;
  }
  public function getTotalPhone()
  {
    return $this->totalPhone;
  }
}
