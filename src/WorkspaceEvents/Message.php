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

namespace Google\Service\WorkspaceEvents;

class Message extends \Google\Collection
{
  protected $collection_key = 'extensions';
  protected $contentType = Part::class;
  protected $contentDataType = 'array';
  /**
   * @var string
   */
  public $contextId;
  /**
   * @var string[]
   */
  public $extensions;
  /**
   * @var string
   */
  public $messageId;
  /**
   * @var array[]
   */
  public $metadata;
  /**
   * @var string
   */
  public $role;
  /**
   * @var string
   */
  public $taskId;

  /**
   * @param Part[]
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return Part[]
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * @param string
   */
  public function setContextId($contextId)
  {
    $this->contextId = $contextId;
  }
  /**
   * @return string
   */
  public function getContextId()
  {
    return $this->contextId;
  }
  /**
   * @param string[]
   */
  public function setExtensions($extensions)
  {
    $this->extensions = $extensions;
  }
  /**
   * @return string[]
   */
  public function getExtensions()
  {
    return $this->extensions;
  }
  /**
   * @param string
   */
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  /**
   * @return string
   */
  public function getMessageId()
  {
    return $this->messageId;
  }
  /**
   * @param array[]
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return array[]
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param string
   */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /**
   * @return string
   */
  public function getRole()
  {
    return $this->role;
  }
  /**
   * @param string
   */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /**
   * @return string
   */
  public function getTaskId()
  {
    return $this->taskId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Message::class, 'Google_Service_WorkspaceEvents_Message');
