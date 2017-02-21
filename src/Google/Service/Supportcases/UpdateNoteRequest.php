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

class Google_Service_Supportcases_UpdateNoteRequest extends Google_Collection
{
  protected $collection_key = 'recipients';
  public $body;
  public $caseId;
  public $inResponseTo;
  protected $recipientsType = 'Google_Service_Supportcases_Identity';
  protected $recipientsDataType = 'array';
  public $subject;

  public function setBody($body)
  {
    $this->body = $body;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function setCaseId($caseId)
  {
    $this->caseId = $caseId;
  }
  public function getCaseId()
  {
    return $this->caseId;
  }
  public function setInResponseTo($inResponseTo)
  {
    $this->inResponseTo = $inResponseTo;
  }
  public function getInResponseTo()
  {
    return $this->inResponseTo;
  }
  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }
  public function getRecipients()
  {
    return $this->recipients;
  }
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  public function getSubject()
  {
    return $this->subject;
  }
}
