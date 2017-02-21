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

class Google_Service_Supportcases_Communication extends Google_Collection
{
  protected $collection_key = 'recipients';
  protected $attachmentsType = 'Google_Service_Supportcases_AttachmentInfo';
  protected $attachmentsDataType = 'array';
  public $caseId;
  public $communicationId;
  protected $draftInfoType = 'Google_Service_Supportcases_DraftInfo';
  protected $draftInfoDataType = '';
  protected $emailType = 'Google_Service_Supportcases_Email';
  protected $emailDataType = '';
  protected $formType = 'Google_Service_Supportcases_Form';
  protected $formDataType = '';
  public $inResponseTo;
  public $name;
  protected $noteType = 'Google_Service_Supportcases_Note';
  protected $noteDataType = '';
  protected $phoneInfoType = 'Google_Service_Supportcases_PhoneInfo';
  protected $phoneInfoDataType = '';
  protected $realTimeType = 'Google_Service_Supportcases_RealTime';
  protected $realTimeDataType = '';
  protected $recipientsType = 'Google_Service_Supportcases_Identity';
  protected $recipientsDataType = 'array';
  protected $senderType = 'Google_Service_Supportcases_Identity';
  protected $senderDataType = '';
  protected $sourceType = 'Google_Service_Supportcases_Source';
  protected $sourceDataType = '';
  public $subject;
  public $updateTime;

  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }
  public function getAttachments()
  {
    return $this->attachments;
  }
  public function setCaseId($caseId)
  {
    $this->caseId = $caseId;
  }
  public function getCaseId()
  {
    return $this->caseId;
  }
  public function setCommunicationId($communicationId)
  {
    $this->communicationId = $communicationId;
  }
  public function getCommunicationId()
  {
    return $this->communicationId;
  }
  public function setDraftInfo(Google_Service_Supportcases_DraftInfo $draftInfo)
  {
    $this->draftInfo = $draftInfo;
  }
  public function getDraftInfo()
  {
    return $this->draftInfo;
  }
  public function setEmail(Google_Service_Supportcases_Email $email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setForm(Google_Service_Supportcases_Form $form)
  {
    $this->form = $form;
  }
  public function getForm()
  {
    return $this->form;
  }
  public function setInResponseTo($inResponseTo)
  {
    $this->inResponseTo = $inResponseTo;
  }
  public function getInResponseTo()
  {
    return $this->inResponseTo;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setNote(Google_Service_Supportcases_Note $note)
  {
    $this->note = $note;
  }
  public function getNote()
  {
    return $this->note;
  }
  public function setPhoneInfo(Google_Service_Supportcases_PhoneInfo $phoneInfo)
  {
    $this->phoneInfo = $phoneInfo;
  }
  public function getPhoneInfo()
  {
    return $this->phoneInfo;
  }
  public function setRealTime(Google_Service_Supportcases_RealTime $realTime)
  {
    $this->realTime = $realTime;
  }
  public function getRealTime()
  {
    return $this->realTime;
  }
  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }
  public function getRecipients()
  {
    return $this->recipients;
  }
  public function setSender(Google_Service_Supportcases_Identity $sender)
  {
    $this->sender = $sender;
  }
  public function getSender()
  {
    return $this->sender;
  }
  public function setSource(Google_Service_Supportcases_Source $source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  public function getSubject()
  {
    return $this->subject;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}
