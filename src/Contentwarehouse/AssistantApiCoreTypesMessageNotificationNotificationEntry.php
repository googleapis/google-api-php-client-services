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

class AssistantApiCoreTypesMessageNotificationNotificationEntry extends \Google\Model
{
  /**
   * @var string
   */
  public $audioDuration;
  /**
   * @var int
   */
  public $charCount;
  /**
   * @var string
   */
  public $dataUri;
  /**
   * @var string
   */
  public $messageBody;
  /**
   * @var string
   */
  public $mimeType;
  /**
   * @var string
   */
  public $postTime;
  protected $senderType = AssistantApiCoreTypesMessageNotificationPerson::class;
  protected $senderDataType = '';
  /**
   * @var int
   */
  public $wordCount;

  /**
   * @param string
   */
  public function setAudioDuration($audioDuration)
  {
    $this->audioDuration = $audioDuration;
  }
  /**
   * @return string
   */
  public function getAudioDuration()
  {
    return $this->audioDuration;
  }
  /**
   * @param int
   */
  public function setCharCount($charCount)
  {
    $this->charCount = $charCount;
  }
  /**
   * @return int
   */
  public function getCharCount()
  {
    return $this->charCount;
  }
  /**
   * @param string
   */
  public function setDataUri($dataUri)
  {
    $this->dataUri = $dataUri;
  }
  /**
   * @return string
   */
  public function getDataUri()
  {
    return $this->dataUri;
  }
  /**
   * @param string
   */
  public function setMessageBody($messageBody)
  {
    $this->messageBody = $messageBody;
  }
  /**
   * @return string
   */
  public function getMessageBody()
  {
    return $this->messageBody;
  }
  /**
   * @param string
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return string
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /**
   * @param string
   */
  public function setPostTime($postTime)
  {
    $this->postTime = $postTime;
  }
  /**
   * @return string
   */
  public function getPostTime()
  {
    return $this->postTime;
  }
  /**
   * @param AssistantApiCoreTypesMessageNotificationPerson
   */
  public function setSender(AssistantApiCoreTypesMessageNotificationPerson $sender)
  {
    $this->sender = $sender;
  }
  /**
   * @return AssistantApiCoreTypesMessageNotificationPerson
   */
  public function getSender()
  {
    return $this->sender;
  }
  /**
   * @param int
   */
  public function setWordCount($wordCount)
  {
    $this->wordCount = $wordCount;
  }
  /**
   * @return int
   */
  public function getWordCount()
  {
    return $this->wordCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantApiCoreTypesMessageNotificationNotificationEntry::class, 'Google_Service_Contentwarehouse_AssistantApiCoreTypesMessageNotificationNotificationEntry');
