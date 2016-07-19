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

class Google_Service_Datastore_GqlQuery extends Google_Collection
{
  protected $collection_key = 'positionalBindings';
  public $allowLiterals;
  public $namedBindings;
  public $positionalBindings;
  public $queryString;

  public function setAllowLiterals($allowLiterals)
  {
    $this->allowLiterals = $allowLiterals;
  }
  public function getAllowLiterals()
  {
    return $this->allowLiterals;
  }
  public function setNamedBindings(array $namedBindings)
  {
    $this->namedBindings = $namedBindings;
  }
  public function getNamedBindings()
  {
    return $this->namedBindings;
  }
  public function setPositionalBindings(array $positionalBindings)
  {
    foreach ($positionalBindings as $p) {
      if (!$p instanceof Google_Service_Datastore_GqlQueryParameter) {
        throw new InvalidArgumentException('First argument to setPositionalBindings must be an array of Google_Service_Datastore_GqlQueryParameter');
      }
    }
    $this->positionalBindings = $positionalBindings;
  }
  public function getPositionalBindings()
  {
    return $this->positionalBindings;
  }
  public function setQueryString($queryString)
  {
    $this->queryString = $queryString;
  }
  public function getQueryString()
  {
    return $this->queryString;
  }
}
