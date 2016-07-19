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

class Google_Service_Games_QuestMilestone extends Google_Collection
{
  protected $collection_key = 'criteria';
  public $completionRewardData;
  public $criteria;
  public $id;
  public $kind;
  public $state;

  public function setCompletionRewardData($completionRewardData)
  {
    $this->completionRewardData = $completionRewardData;
  }
  public function getCompletionRewardData()
  {
    return $this->completionRewardData;
  }
  public function setCriteria(array $criteria)
  {
    foreach ($criteria as $c) {
      if (!$c instanceof Google_Service_Games_QuestCriterion) {
        throw new InvalidArgumentException('First argument to setCriteria must be an array of Google_Service_Games_QuestCriterion');
      }
    }
    $this->criteria = $criteria;
  }
  public function getCriteria()
  {
    return $this->criteria;
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
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}
