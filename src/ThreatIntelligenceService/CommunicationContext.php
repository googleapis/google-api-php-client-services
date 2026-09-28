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

namespace Google\Service\ThreatIntelligenceService;

class CommunicationContext extends \Google\Model
{
  /**
   * Optional. Description of the communication channel.
   *
   * @var string
   */
  public $channelDescription;
  /**
   * Optional. Name of the communication channel.
   *
   * @var string
   */
  public $channelName;
  /**
   * Optional. Channel path (e.g. forum path or sub-channel).
   *
   * @var string
   */
  public $channelPath;
  /**
   * Optional. URL of the communication channel.
   *
   * @var string
   */
  public $channelUrl;
  /**
   * Optional. Service from the collection event origin (e.g. forum or chat
   * service name).
   *
   * @var string
   */
  public $serviceName;
  /**
   * Optional. Conversation thread identifier.
   *
   * @var string
   */
  public $threadId;

  /**
   * Optional. Description of the communication channel.
   *
   * @param string $channelDescription
   */
  public function setChannelDescription($channelDescription)
  {
    $this->channelDescription = $channelDescription;
  }
  /**
   * @return string
   */
  public function getChannelDescription()
  {
    return $this->channelDescription;
  }
  /**
   * Optional. Name of the communication channel.
   *
   * @param string $channelName
   */
  public function setChannelName($channelName)
  {
    $this->channelName = $channelName;
  }
  /**
   * @return string
   */
  public function getChannelName()
  {
    return $this->channelName;
  }
  /**
   * Optional. Channel path (e.g. forum path or sub-channel).
   *
   * @param string $channelPath
   */
  public function setChannelPath($channelPath)
  {
    $this->channelPath = $channelPath;
  }
  /**
   * @return string
   */
  public function getChannelPath()
  {
    return $this->channelPath;
  }
  /**
   * Optional. URL of the communication channel.
   *
   * @param string $channelUrl
   */
  public function setChannelUrl($channelUrl)
  {
    $this->channelUrl = $channelUrl;
  }
  /**
   * @return string
   */
  public function getChannelUrl()
  {
    return $this->channelUrl;
  }
  /**
   * Optional. Service from the collection event origin (e.g. forum or chat
   * service name).
   *
   * @param string $serviceName
   */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /**
   * @return string
   */
  public function getServiceName()
  {
    return $this->serviceName;
  }
  /**
   * Optional. Conversation thread identifier.
   *
   * @param string $threadId
   */
  public function setThreadId($threadId)
  {
    $this->threadId = $threadId;
  }
  /**
   * @return string
   */
  public function getThreadId()
  {
    return $this->threadId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CommunicationContext::class, 'Google_Service_ThreatIntelligenceService_CommunicationContext');
