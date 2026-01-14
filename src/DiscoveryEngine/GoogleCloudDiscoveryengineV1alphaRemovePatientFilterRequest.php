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

class GoogleCloudDiscoveryengineV1alphaRemovePatientFilterRequest extends \Google\Collection
{
  protected $collection_key = 'filterGroups';
  /**
   * Required. Full resource name of DataStore, such as `projects/{project}/loca
   * tions/{location}/collections/{collection_id}/dataStores/{data_store_id}`.
   * If the caller does not have permission to access the DataStore, regardless
   * of whether or not it exists, a PERMISSION_DENIED error is returned. If the
   * requested DataStore does not exist, a NOT_FOUND error is returned. If the
   * requested DataStore does not have a patient filter, a NOT_FOUND error will
   * be returned
   *
   * @var string
   */
  public $dataStore;
  /**
   * Required. Names of the Group resources to use as a basis for the list of
   * patients to remove from the patient filter, in format `projects/{project_id
   * }/locations/{location_id}/datasets/{dataset_id}/fhirStores/{fhir_store_id}/
   * fhir/Group/{group_id}`. if the caller does not have permission to access
   * the FHIR store, regardless of whether it exists, PERMISSION_DENIED error is
   * returned. If the discovery engine service account does not have permission
   * to access the FHIR store, regardless of whether or not it exists, a
   * PERMISSION_DENIED error is returned. If the group is not found at the
   * location, a RESOURCE_NOT_FOUND error will be returned. The filter group
   * must be a FHIR resource name of type Group, and the list of IDs to remove
   * will be constructed from the direct members of the group which are Patient
   * resources.
   *
   * @var string[]
   */
  public $filterGroups;

  /**
   * Required. Full resource name of DataStore, such as `projects/{project}/loca
   * tions/{location}/collections/{collection_id}/dataStores/{data_store_id}`.
   * If the caller does not have permission to access the DataStore, regardless
   * of whether or not it exists, a PERMISSION_DENIED error is returned. If the
   * requested DataStore does not exist, a NOT_FOUND error is returned. If the
   * requested DataStore does not have a patient filter, a NOT_FOUND error will
   * be returned
   *
   * @param string $dataStore
   */
  public function setDataStore($dataStore)
  {
    $this->dataStore = $dataStore;
  }
  /**
   * @return string
   */
  public function getDataStore()
  {
    return $this->dataStore;
  }
  /**
   * Required. Names of the Group resources to use as a basis for the list of
   * patients to remove from the patient filter, in format `projects/{project_id
   * }/locations/{location_id}/datasets/{dataset_id}/fhirStores/{fhir_store_id}/
   * fhir/Group/{group_id}`. if the caller does not have permission to access
   * the FHIR store, regardless of whether it exists, PERMISSION_DENIED error is
   * returned. If the discovery engine service account does not have permission
   * to access the FHIR store, regardless of whether or not it exists, a
   * PERMISSION_DENIED error is returned. If the group is not found at the
   * location, a RESOURCE_NOT_FOUND error will be returned. The filter group
   * must be a FHIR resource name of type Group, and the list of IDs to remove
   * will be constructed from the direct members of the group which are Patient
   * resources.
   *
   * @param string[] $filterGroups
   */
  public function setFilterGroups($filterGroups)
  {
    $this->filterGroups = $filterGroups;
  }
  /**
   * @return string[]
   */
  public function getFilterGroups()
  {
    return $this->filterGroups;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaRemovePatientFilterRequest::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaRemovePatientFilterRequest');
