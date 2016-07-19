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

class Google_Service_Genomics_VariantAnnotation extends Google_Collection
{
  protected $collection_key = 'transcriptIds';
  public $alternateBases;
  public $clinicalSignificance;
  public $conditions;
  public $effect;
  public $geneId;
  public $transcriptIds;
  public $type;

  public function setAlternateBases($alternateBases)
  {
    $this->alternateBases = $alternateBases;
  }
  public function getAlternateBases()
  {
    return $this->alternateBases;
  }
  public function setClinicalSignificance($clinicalSignificance)
  {
    $this->clinicalSignificance = $clinicalSignificance;
  }
  public function getClinicalSignificance()
  {
    return $this->clinicalSignificance;
  }
  public function setConditions(array $conditions)
  {
    foreach ($conditions as $c) {
      if (!$c instanceof Google_Service_Genomics_ClinicalCondition) {
        throw new InvalidArgumentException('First argument to setConditions must be an array of Google_Service_Genomics_ClinicalCondition');
      }
    }
    $this->conditions = $conditions;
  }
  public function getConditions()
  {
    return $this->conditions;
  }
  public function setEffect($effect)
  {
    $this->effect = $effect;
  }
  public function getEffect()
  {
    return $this->effect;
  }
  public function setGeneId($geneId)
  {
    $this->geneId = $geneId;
  }
  public function getGeneId()
  {
    return $this->geneId;
  }
  public function setTranscriptIds(array $transcriptIds)
  {
    $this->transcriptIds = $transcriptIds;
  }
  public function getTranscriptIds()
  {
    return $this->transcriptIds;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}
