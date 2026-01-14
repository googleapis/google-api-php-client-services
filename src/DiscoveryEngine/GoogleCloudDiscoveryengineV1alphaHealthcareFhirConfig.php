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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaHealthcareFhirConfig extends \Google\Collection
{
  protected $collection_key = 'initialFilterGroups';
  /**
   * Whether to enable configurable schema for `HEALTHCARE_FHIR` vertical. If
   * set to `true`, the predefined healthcare fhir schema can be extended for
   * more customized searching and filtering.
   *
   * @var bool
   */
  public $enableConfigurableSchema;
  /**
   * Whether to enable static indexing for `HEALTHCARE_FHIR` batch ingestion. If
   * set to `true`, the batch ingestion will be processed in a static indexing
   * mode which is slower but more capable of handling larger volume.
   *
   * @var bool
   */
  public $enableStaticIndexingForBatchIngestion;
  /**
   * Optional. Names of the Group resources to use as a basis for the initial
   * patient filter, in format `projects/{project_id}/locations/{location_id}/da
   * tasets/{dataset_id}/fhirStores/{fhir_store_id}/fhir/Group/{group_id}`. The
   * filter group must be a FHIR resource name of type Group, and the filter
   * will be constructed from the direct members of the group which are Patient
   * resources.
   *
   * @var string[]
   */
  public $initialFilterGroups;

  /**
   * Whether to enable configurable schema for `HEALTHCARE_FHIR` vertical. If
   * set to `true`, the predefined healthcare fhir schema can be extended for
   * more customized searching and filtering.
   *
   * @param bool $enableConfigurableSchema
   */
  public function setEnableConfigurableSchema($enableConfigurableSchema)
  {
    $this->enableConfigurableSchema = $enableConfigurableSchema;
  }
  /**
   * @return bool
   */
  public function getEnableConfigurableSchema()
  {
    return $this->enableConfigurableSchema;
  }
  /**
   * Whether to enable static indexing for `HEALTHCARE_FHIR` batch ingestion. If
   * set to `true`, the batch ingestion will be processed in a static indexing
   * mode which is slower but more capable of handling larger volume.
   *
   * @param bool $enableStaticIndexingForBatchIngestion
   */
  public function setEnableStaticIndexingForBatchIngestion($enableStaticIndexingForBatchIngestion)
  {
    $this->enableStaticIndexingForBatchIngestion = $enableStaticIndexingForBatchIngestion;
  }
  /**
   * @return bool
   */
  public function getEnableStaticIndexingForBatchIngestion()
  {
    return $this->enableStaticIndexingForBatchIngestion;
  }
  /**
   * Optional. Names of the Group resources to use as a basis for the initial
   * patient filter, in format `projects/{project_id}/locations/{location_id}/da
   * tasets/{dataset_id}/fhirStores/{fhir_store_id}/fhir/Group/{group_id}`. The
   * filter group must be a FHIR resource name of type Group, and the filter
   * will be constructed from the direct members of the group which are Patient
   * resources.
   *
   * @param string[] $initialFilterGroups
   */
  public function setInitialFilterGroups($initialFilterGroups)
  {
    $this->initialFilterGroups = $initialFilterGroups;
  }
  /**
   * @return string[]
   */
  public function getInitialFilterGroups()
  {
    return $this->initialFilterGroups;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaHealthcareFhirConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaHealthcareFhirConfig');
