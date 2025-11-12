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

class GoogleCloudDiscoveryengineV1WidgetConfigDataStoreUiConfig extends \Google\Collection
{
  protected $collection_key = 'facetField';
  protected $facetFieldType = GoogleCloudDiscoveryengineV1WidgetConfigFacetField::class;
  protected $facetFieldDataType = 'array';
  protected $fieldsUiComponentsMapType = GoogleCloudDiscoveryengineV1WidgetConfigUIComponentField::class;
  protected $fieldsUiComponentsMapDataType = 'map';
  /**
   * @var string
   */
  public $id;
  /**
   * @var string
   */
  public $name;

  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigFacetField[]
   */
  public function setFacetField($facetField)
  {
    $this->facetField = $facetField;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigFacetField[]
   */
  public function getFacetField()
  {
    return $this->facetField;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1WidgetConfigUIComponentField[]
   */
  public function setFieldsUiComponentsMap($fieldsUiComponentsMap)
  {
    $this->fieldsUiComponentsMap = $fieldsUiComponentsMap;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigUIComponentField[]
   */
  public function getFieldsUiComponentsMap()
  {
    return $this->fieldsUiComponentsMap;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigDataStoreUiConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigDataStoreUiConfig');
