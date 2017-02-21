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

class Google_Service_Supportcases_Note extends Google_Collection
{
  protected $collection_key = 'recipients';
  protected $authorType = 'Google_Service_Supportcases_Identity';
  protected $authorDataType = '';
  public $inResponseTo;
  public $isHtml;
  public $payload;
  protected $recipientsType = 'Google_Service_Supportcases_Identity';
  protected $recipientsDataType = 'array';
  public $subject;

  public function setAuthor(Google_Service_Supportcases_Identity $author)
  {
    $this->author = $author;
  }
  public function getAuthor()
  {
    return $this->author;
  }
  public function setInResponseTo($inResponseTo)
  {
    $this->inResponseTo = $inResponseTo;
  }
  public function getInResponseTo()
  {
    return $this->inResponseTo;
  }
  public function setIsHtml($isHtml)
  {
    $this->isHtml = $isHtml;
  }
  public function getIsHtml()
  {
    return $this->isHtml;
  }
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  public function getPayload()
  {
    return $this->payload;
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
