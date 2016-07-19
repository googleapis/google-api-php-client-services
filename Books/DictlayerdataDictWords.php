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

class Google_Service_Books_DictlayerdataDictWords extends Google_Collection
{
  protected $collection_key = 'senses';
  public $derivatives;
  public $examples;
  public $senses;
  public $source;

  public function setDerivatives(array $derivatives)
  {
    foreach ($derivatives as $d) {
      if (!$d instanceof Google_Service_Books_DictlayerdataDictWordsDerivatives) {
        throw new InvalidArgumentException('First argument to setDerivatives must be an array of Google_Service_Books_DictlayerdataDictWordsDerivatives');
      }
    }
    $this->derivatives = $derivatives;
  }
  public function getDerivatives()
  {
    return $this->derivatives;
  }
  public function setExamples(array $examples)
  {
    foreach ($examples as $e) {
      if (!$e instanceof Google_Service_Books_DictlayerdataDictWordsExamples) {
        throw new InvalidArgumentException('First argument to setExamples must be an array of Google_Service_Books_DictlayerdataDictWordsExamples');
      }
    }
    $this->examples = $examples;
  }
  public function getExamples()
  {
    return $this->examples;
  }
  public function setSenses(array $senses)
  {
    foreach ($senses as $s) {
      if (!$s instanceof Google_Service_Books_DictlayerdataDictWordsSenses) {
        throw new InvalidArgumentException('First argument to setSenses must be an array of Google_Service_Books_DictlayerdataDictWordsSenses');
      }
    }
    $this->senses = $senses;
  }
  public function getSenses()
  {
    return $this->senses;
  }
  public function setSource(Google_Service_Books_DictlayerdataDictWordsSource $source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
}
