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

class Google_Service_Genomics_VariantSet extends Google_Collection
{
  protected $collection_key = 'referenceBounds';
  public $datasetId;
  public $description;
  public $id;
  public $metadata;
  public $name;
  public $referenceBounds;
  public $referenceSetId;

  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }
  public function getDatasetId()
  {
    return $this->datasetId;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setMetadata(array $metadata)
  {
    foreach ($metadata as $m) {
      if (!$m instanceof Google_Service_Genomics_VariantSetMetadata) {
        throw new InvalidArgumentException('First argument to setMetadata must be an array of Google_Service_Genomics_VariantSetMetadata');
      }
    }
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setReferenceBounds(array $referenceBounds)
  {
    foreach ($referenceBounds as $r) {
      if (!$r instanceof Google_Service_Genomics_ReferenceBound) {
        throw new InvalidArgumentException('First argument to setReferenceBounds must be an array of Google_Service_Genomics_ReferenceBound');
      }
    }
    $this->referenceBounds = $referenceBounds;
  }
  public function getReferenceBounds()
  {
    return $this->referenceBounds;
  }
  public function setReferenceSetId($referenceSetId)
  {
    $this->referenceSetId = $referenceSetId;
  }
  public function getReferenceSetId()
  {
    return $this->referenceSetId;
  }
}
