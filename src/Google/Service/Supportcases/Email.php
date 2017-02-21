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

class Google_Service_Supportcases_Email extends Google_Collection
{
  protected $collection_key = 'headerFields';
  public $autoSubmitted;
  public $body;
  protected $headerFieldsType = 'Google_Service_Supportcases_HeaderField';
  protected $headerFieldsDataType = 'array';
  public $inOutbox;
  public $isHtml;
  public $scheduledSendTime;
  public $sendFailureReason;
  public $type;

  public function setAutoSubmitted($autoSubmitted)
  {
    $this->autoSubmitted = $autoSubmitted;
  }
  public function getAutoSubmitted()
  {
    return $this->autoSubmitted;
  }
  public function setBody($body)
  {
    $this->body = $body;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function setHeaderFields($headerFields)
  {
    $this->headerFields = $headerFields;
  }
  public function getHeaderFields()
  {
    return $this->headerFields;
  }
  public function setInOutbox($inOutbox)
  {
    $this->inOutbox = $inOutbox;
  }
  public function getInOutbox()
  {
    return $this->inOutbox;
  }
  public function setIsHtml($isHtml)
  {
    $this->isHtml = $isHtml;
  }
  public function getIsHtml()
  {
    return $this->isHtml;
  }
  public function setScheduledSendTime($scheduledSendTime)
  {
    $this->scheduledSendTime = $scheduledSendTime;
  }
  public function getScheduledSendTime()
  {
    return $this->scheduledSendTime;
  }
  public function setSendFailureReason($sendFailureReason)
  {
    $this->sendFailureReason = $sendFailureReason;
  }
  public function getSendFailureReason()
  {
    return $this->sendFailureReason;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
