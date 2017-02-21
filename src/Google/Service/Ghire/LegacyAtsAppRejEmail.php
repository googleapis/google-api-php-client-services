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

class Google_Service_Ghire_LegacyAtsAppRejEmail extends Google_Model
{
  public $createDateMs;
  public $emailBcc;
  public $emailContents;
  public $emailFrom;
  public $emailSchedSendDateMs;
  public $emailSentDateMs;
  public $emailSubject;
  public $emailTemplate;
  public $emailTo;
  public $id;
  public $kind;
  public $retryCounter;
  public $status;
  public $updateDateMs;

  public function setCreateDateMs($createDateMs)
  {
    $this->createDateMs = $createDateMs;
  }
  public function getCreateDateMs()
  {
    return $this->createDateMs;
  }
  public function setEmailBcc($emailBcc)
  {
    $this->emailBcc = $emailBcc;
  }
  public function getEmailBcc()
  {
    return $this->emailBcc;
  }
  public function setEmailContents($emailContents)
  {
    $this->emailContents = $emailContents;
  }
  public function getEmailContents()
  {
    return $this->emailContents;
  }
  public function setEmailFrom($emailFrom)
  {
    $this->emailFrom = $emailFrom;
  }
  public function getEmailFrom()
  {
    return $this->emailFrom;
  }
  public function setEmailSchedSendDateMs($emailSchedSendDateMs)
  {
    $this->emailSchedSendDateMs = $emailSchedSendDateMs;
  }
  public function getEmailSchedSendDateMs()
  {
    return $this->emailSchedSendDateMs;
  }
  public function setEmailSentDateMs($emailSentDateMs)
  {
    $this->emailSentDateMs = $emailSentDateMs;
  }
  public function getEmailSentDateMs()
  {
    return $this->emailSentDateMs;
  }
  public function setEmailSubject($emailSubject)
  {
    $this->emailSubject = $emailSubject;
  }
  public function getEmailSubject()
  {
    return $this->emailSubject;
  }
  public function setEmailTemplate($emailTemplate)
  {
    $this->emailTemplate = $emailTemplate;
  }
  public function getEmailTemplate()
  {
    return $this->emailTemplate;
  }
  public function setEmailTo($emailTo)
  {
    $this->emailTo = $emailTo;
  }
  public function getEmailTo()
  {
    return $this->emailTo;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRetryCounter($retryCounter)
  {
    $this->retryCounter = $retryCounter;
  }
  public function getRetryCounter()
  {
    return $this->retryCounter;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setUpdateDateMs($updateDateMs)
  {
    $this->updateDateMs = $updateDateMs;
  }
  public function getUpdateDateMs()
  {
    return $this->updateDateMs;
  }
}
