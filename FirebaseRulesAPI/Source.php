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

class Google_Service_FirebaseRulesAPI_Source extends Google_Collection
{
  protected $collection_key = 'files';
  public $files;

  public function setFiles(array $files)
  {
    foreach ($files as $f) {
      if (!$f instanceof Google_Service_FirebaseRulesAPI_FirebaserulesFile) {
        throw new InvalidArgumentException('First argument to setFiles must be an array of Google_Service_FirebaseRulesAPI_FirebaserulesFile');
      }
    }
    $this->files = $files;
  }
  public function getFiles()
  {
    return $this->files;
  }
}
