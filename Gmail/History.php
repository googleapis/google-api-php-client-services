<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Gmail_History extends Google_Collection
{
  protected $collection_key = 'messagesDeleted';
  public $id;
  public $labelsAdded;
  public $labelsRemoved;
  public $messages;
  public $messagesAdded;
  public $messagesDeleted;

  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setLabelsAdded(array $labelsAdded)
  {
    foreach ($labelsAdded as $l) {
      if (!$l instanceof Google_Service_Gmail_HistoryLabelAdded) {
        throw new InvalidArgumentException('First argument to setLabelsAdded must be an array of Google_Service_Gmail_HistoryLabelAdded');
      }
    }
    $this->labelsAdded = $labelsAdded;
  }
  public function getLabelsAdded()
  {
    return $this->labelsAdded;
  }
  public function setLabelsRemoved(array $labelsRemoved)
  {
    foreach ($labelsRemoved as $l) {
      if (!$l instanceof Google_Service_Gmail_HistoryLabelRemoved) {
        throw new InvalidArgumentException('First argument to setLabelsRemoved must be an array of Google_Service_Gmail_HistoryLabelRemoved');
      }
    }
    $this->labelsRemoved = $labelsRemoved;
  }
  public function getLabelsRemoved()
  {
    return $this->labelsRemoved;
  }
  public function setMessages(array $messages)
  {
    foreach ($messages as $m) {
      if (!$m instanceof Google_Service_Gmail_Message) {
        throw new InvalidArgumentException('First argument to setMessages must be an array of Google_Service_Gmail_Message');
      }
    }
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMessagesAdded(array $messagesAdded)
  {
    foreach ($messagesAdded as $m) {
      if (!$m instanceof Google_Service_Gmail_HistoryMessageAdded) {
        throw new InvalidArgumentException('First argument to setMessagesAdded must be an array of Google_Service_Gmail_HistoryMessageAdded');
      }
    }
    $this->messagesAdded = $messagesAdded;
  }
  public function getMessagesAdded()
  {
    return $this->messagesAdded;
  }
  public function setMessagesDeleted(array $messagesDeleted)
  {
    foreach ($messagesDeleted as $m) {
      if (!$m instanceof Google_Service_Gmail_HistoryMessageDeleted) {
        throw new InvalidArgumentException('First argument to setMessagesDeleted must be an array of Google_Service_Gmail_HistoryMessageDeleted');
      }
    }
    $this->messagesDeleted = $messagesDeleted;
  }
  public function getMessagesDeleted()
  {
    return $this->messagesDeleted;
  }
}
