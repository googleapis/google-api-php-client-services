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

class Google_Service_Iam_Policy extends Google_Collection
{
  protected $collection_key = 'rules';
  public $bindings;
  public $etag;
  public $rules;
  public $version;

  public function setBindings(array $bindings)
  {
    foreach ($bindings as $b) {
      if (!$b instanceof Google_Service_Iam_Binding) {
        throw new InvalidArgumentException('First argument to setBindings must be an array of Google_Service_Iam_Binding');
      }
    }
    $this->bindings = $bindings;
  }
  public function getBindings()
  {
    return $this->bindings;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setRules(array $rules)
  {
    foreach ($rules as $r) {
      if (!$r instanceof Google_Service_Iam_Rule) {
        throw new InvalidArgumentException('First argument to setRules must be an array of Google_Service_Iam_Rule');
      }
    }
    $this->rules = $rules;
  }
  public function getRules()
  {
    return $this->rules;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}
