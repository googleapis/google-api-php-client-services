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

class Google_Service_Supportcases_CommunicationInfo extends Google_Model
{
  public $lastClosedTime;
  public $lastCommunicationTime;
  public $lastIncomingEmailTime;
  public $lastOutgoingEmailTime;
  public $numCommunications;
  public $numConsults;
  public $numIncomingEmails;
  public $numOutgoingEmails;

  public function setLastClosedTime($lastClosedTime)
  {
    $this->lastClosedTime = $lastClosedTime;
  }
  public function getLastClosedTime()
  {
    return $this->lastClosedTime;
  }
  public function setLastCommunicationTime($lastCommunicationTime)
  {
    $this->lastCommunicationTime = $lastCommunicationTime;
  }
  public function getLastCommunicationTime()
  {
    return $this->lastCommunicationTime;
  }
  public function setLastIncomingEmailTime($lastIncomingEmailTime)
  {
    $this->lastIncomingEmailTime = $lastIncomingEmailTime;
  }
  public function getLastIncomingEmailTime()
  {
    return $this->lastIncomingEmailTime;
  }
  public function setLastOutgoingEmailTime($lastOutgoingEmailTime)
  {
    $this->lastOutgoingEmailTime = $lastOutgoingEmailTime;
  }
  public function getLastOutgoingEmailTime()
  {
    return $this->lastOutgoingEmailTime;
  }
  public function setNumCommunications($numCommunications)
  {
    $this->numCommunications = $numCommunications;
  }
  public function getNumCommunications()
  {
    return $this->numCommunications;
  }
  public function setNumConsults($numConsults)
  {
    $this->numConsults = $numConsults;
  }
  public function getNumConsults()
  {
    return $this->numConsults;
  }
  public function setNumIncomingEmails($numIncomingEmails)
  {
    $this->numIncomingEmails = $numIncomingEmails;
  }
  public function getNumIncomingEmails()
  {
    return $this->numIncomingEmails;
  }
  public function setNumOutgoingEmails($numOutgoingEmails)
  {
    $this->numOutgoingEmails = $numOutgoingEmails;
  }
  public function getNumOutgoingEmails()
  {
    return $this->numOutgoingEmails;
  }
}
