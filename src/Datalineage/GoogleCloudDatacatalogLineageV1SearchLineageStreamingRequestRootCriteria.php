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

namespace Google\Service\Datalineage;

class GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestRootCriteria extends \Google\Model
{
  protected $entitiesType = GoogleCloudDatacatalogLineageV1MultipleEntityReference::class;
  protected $entitiesDataType = '';

  /**
   * Optional. The entities to initiate the search from. Entities can be
   * specified by FQN only, or by FQN and field. To search by FQN and all
   * available fields for that FQN, use the wildcard `*` as the field value.
   *
   * @param GoogleCloudDatacatalogLineageV1MultipleEntityReference $entities
   */
  public function setEntities(GoogleCloudDatacatalogLineageV1MultipleEntityReference $entities)
  {
    $this->entities = $entities;
  }
  /**
   * @return GoogleCloudDatacatalogLineageV1MultipleEntityReference
   */
  public function getEntities()
  {
    return $this->entities;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestRootCriteria::class, 'Google_Service_Datalineage_GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestRootCriteria');
