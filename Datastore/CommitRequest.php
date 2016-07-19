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

class Google_Service_Datastore_CommitRequest extends Google_Collection
{
  protected $collection_key = 'mutations';
  public $mode;
  public $mutations;
  public $transaction;

  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  public function getMode()
  {
    return $this->mode;
  }
  public function setMutations(array $mutations)
  {
    foreach ($mutations as $m) {
      if (!$m instanceof Google_Service_Datastore_Mutation) {
        throw new InvalidArgumentException('First argument to setMutations must be an array of Google_Service_Datastore_Mutation');
      }
    }
    $this->mutations = $mutations;
  }
  public function getMutations()
  {
    return $this->mutations;
  }
  public function setTransaction($transaction)
  {
    $this->transaction = $transaction;
  }
  public function getTransaction()
  {
    return $this->transaction;
  }
}
