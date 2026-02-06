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

namespace Google\Service\CustomerEngagementSuite;

class Example extends \Google\Collection
{
  protected $collection_key = 'messages';
  /**
   * Output only. Timestamp when the example was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Human-readable description of the example.
   *
   * @var string
   */
  public $description;
  /**
   * Required. Display name of the example.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. The agent that initially handles the conversation. If not
   * specified, the example represents a conversation that is handled by the
   * root agent. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @var string
   */
  public $entryAgent;
  /**
   * Etag used to ensure the object hasn't changed during a read-modify-write
   * operation. If the etag is empty, the update will overwrite any concurrent
   * changes.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. The example may become invalid if referencing resources are
   * deleted. Invalid examples will not be used as few-shot examples.
   *
   * @var bool
   */
  public $invalid;
  protected $messagesType = Message::class;
  protected $messagesDataType = 'array';
  /**
   * Identifier. The unique identifier of the example. Format:
   * `projects/{project}/locations/{location}/apps/{app}/examples/{example}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Timestamp when the example was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Timestamp when the example was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Human-readable description of the example.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. Display name of the example.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. The agent that initially handles the conversation. If not
   * specified, the example represents a conversation that is handled by the
   * root agent. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @param string $entryAgent
   */
  public function setEntryAgent($entryAgent)
  {
    $this->entryAgent = $entryAgent;
  }
  /**
   * @return string
   */
  public function getEntryAgent()
  {
    return $this->entryAgent;
  }
  /**
   * Etag used to ensure the object hasn't changed during a read-modify-write
   * operation. If the etag is empty, the update will overwrite any concurrent
   * changes.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Output only. The example may become invalid if referencing resources are
   * deleted. Invalid examples will not be used as few-shot examples.
   *
   * @param bool $invalid
   */
  public function setInvalid($invalid)
  {
    $this->invalid = $invalid;
  }
  /**
   * @return bool
   */
  public function getInvalid()
  {
    return $this->invalid;
  }
  /**
   * Optional. The collection of messages that make up the conversation.
   *
   * @param Message[] $messages
   */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /**
   * @return Message[]
   */
  public function getMessages()
  {
    return $this->messages;
  }
  /**
   * Identifier. The unique identifier of the example. Format:
   * `projects/{project}/locations/{location}/apps/{app}/examples/{example}`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. Timestamp when the example was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Example::class, 'Google_Service_CustomerEngagementSuite_Example');
