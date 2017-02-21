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

class Google_Service_Ghire_InterviewersGetInterviewerStatsRequest extends Google_Collection
{
  protected $collection_key = 'interviewerEmailsWithScores';
  public $domain;
  public $interviewerEmails;
  protected $interviewerEmailsWithScoresType = 'Google_Service_Ghire_InterviewChartRequest';
  protected $interviewerEmailsWithScoresDataType = 'array';
  protected $trustedUserPrincipalType = 'Google_Service_Ghire_PrincipalProto';
  protected $trustedUserPrincipalDataType = '';

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  public function getDomain()
  {
    return $this->domain;
  }
  public function setInterviewerEmails($interviewerEmails)
  {
    $this->interviewerEmails = $interviewerEmails;
  }
  public function getInterviewerEmails()
  {
    return $this->interviewerEmails;
  }
  public function setInterviewerEmailsWithScores($interviewerEmailsWithScores)
  {
    $this->interviewerEmailsWithScores = $interviewerEmailsWithScores;
  }
  public function getInterviewerEmailsWithScores()
  {
    return $this->interviewerEmailsWithScores;
  }
  public function setTrustedUserPrincipal(Google_Service_Ghire_PrincipalProto $trustedUserPrincipal)
  {
    $this->trustedUserPrincipal = $trustedUserPrincipal;
  }
  public function getTrustedUserPrincipal()
  {
    return $this->trustedUserPrincipal;
  }
}
