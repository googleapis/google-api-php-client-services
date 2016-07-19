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

class Google_Service_CloudTrace_Traces extends Google_Collection
{
  protected $collection_key = 'traces';
  public $traces;

  public function setTraces(array $traces)
  {
    foreach ($traces as $t) {
      if (!$t instanceof Google_Service_CloudTrace_Trace) {
        throw new InvalidArgumentException('First argument to setTraces must be an array of Google_Service_CloudTrace_Trace');
      }
    }
    $this->traces = $traces;
  }
  public function getTraces()
  {
    return $this->traces;
  }
}
