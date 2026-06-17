<?php
/*
 * Copyright 2014 Google Inc.
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

namespace Google\Service\TravelImpactModel;

class EmissionsProvenance extends \Google\Collection
{
  protected $collection_key = 'provenanceEntries';
  protected $provenanceEntriesType = EmissionsProvenanceEntry::class;
  protected $provenanceEntriesDataType = 'array';

  /**
   * Output only. All contributing factors used to calculate emissions.
   *
   * @param EmissionsProvenanceEntry[] $provenanceEntries
   */
  public function setProvenanceEntries($provenanceEntries)
  {
    $this->provenanceEntries = $provenanceEntries;
  }
  /**
   * @return EmissionsProvenanceEntry[]
   */
  public function getProvenanceEntries()
  {
    return $this->provenanceEntries;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EmissionsProvenance::class, 'Google_Service_TravelImpactModel_EmissionsProvenance');
