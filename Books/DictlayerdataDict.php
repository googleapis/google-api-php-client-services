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

class Google_Service_Books_DictlayerdataDict extends Google_Collection
{
  protected $collection_key = 'words';
  public $source;
  public $words;

  public function setSource(Google_Service_Books_DictlayerdataDictSource $source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
  public function setWords(array $words)
  {
    foreach ($words as $w) {
      if (!$w instanceof Google_Service_Books_DictlayerdataDictWords) {
        throw new InvalidArgumentException('First argument to setWords must be an array of Google_Service_Books_DictlayerdataDictWords');
      }
    }
    $this->words = $words;
  }
  public function getWords()
  {
    return $this->words;
  }
}
