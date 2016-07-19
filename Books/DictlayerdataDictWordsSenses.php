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

class Google_Service_Books_DictlayerdataDictWordsSenses extends Google_Collection
{
  protected $collection_key = 'synonyms';
  public $conjugations;
  public $definitions;
  public $partOfSpeech;
  public $pronunciation;
  public $pronunciationUrl;
  public $source;
  public $syllabification;
  public $synonyms;

  public function setConjugations(array $conjugations)
  {
    foreach ($conjugations as $c) {
      if (!$c instanceof Google_Service_Books_DictlayerdataDictWordsSensesConjugations) {
        throw new InvalidArgumentException('First argument to setConjugations must be an array of Google_Service_Books_DictlayerdataDictWordsSensesConjugations');
      }
    }
    $this->conjugations = $conjugations;
  }
  public function getConjugations()
  {
    return $this->conjugations;
  }
  public function setDefinitions(array $definitions)
  {
    foreach ($definitions as $d) {
      if (!$d instanceof Google_Service_Books_DictlayerdataDictWordsSensesDefinitions) {
        throw new InvalidArgumentException('First argument to setDefinitions must be an array of Google_Service_Books_DictlayerdataDictWordsSensesDefinitions');
      }
    }
    $this->definitions = $definitions;
  }
  public function getDefinitions()
  {
    return $this->definitions;
  }
  public function setPartOfSpeech($partOfSpeech)
  {
    $this->partOfSpeech = $partOfSpeech;
  }
  public function getPartOfSpeech()
  {
    return $this->partOfSpeech;
  }
  public function setPronunciation($pronunciation)
  {
    $this->pronunciation = $pronunciation;
  }
  public function getPronunciation()
  {
    return $this->pronunciation;
  }
  public function setPronunciationUrl($pronunciationUrl)
  {
    $this->pronunciationUrl = $pronunciationUrl;
  }
  public function getPronunciationUrl()
  {
    return $this->pronunciationUrl;
  }
  public function setSource(Google_Service_Books_DictlayerdataDictWordsSensesSource $source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
  public function setSyllabification($syllabification)
  {
    $this->syllabification = $syllabification;
  }
  public function getSyllabification()
  {
    return $this->syllabification;
  }
  public function setSynonyms(array $synonyms)
  {
    foreach ($synonyms as $s) {
      if (!$s instanceof Google_Service_Books_DictlayerdataDictWordsSensesSynonyms) {
        throw new InvalidArgumentException('First argument to setSynonyms must be an array of Google_Service_Books_DictlayerdataDictWordsSensesSynonyms');
      }
    }
    $this->synonyms = $synonyms;
  }
  public function getSynonyms()
  {
    return $this->synonyms;
  }
}
