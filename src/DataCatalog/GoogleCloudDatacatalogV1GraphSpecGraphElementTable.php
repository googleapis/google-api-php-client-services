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

namespace Google\Service\DataCatalog;

class GoogleCloudDatacatalogV1GraphSpecGraphElementTable extends \Google\Collection
{
  /**
   * Default unknown input source.
   */
  public const INPUT_SOURCE_INPUT_SOURCE_UNSPECIFIED = 'INPUT_SOURCE_UNSPECIFIED';
  /**
   * Table input source.
   */
  public const INPUT_SOURCE_TABLE = 'TABLE';
  /**
   * View input source.
   */
  public const INPUT_SOURCE_VIEW = 'VIEW';
  /**
   * Default unknown kind.
   */
  public const KIND_KIND_UNSPECIFIED = 'KIND_UNSPECIFIED';
  /**
   * Node kind.
   */
  public const KIND_NODE = 'NODE';
  /**
   * Edge kind.
   */
  public const KIND_EDGE = 'EDGE';
  protected $collection_key = 'labelAndProperties';
  /**
   * Required. The alias name of the graph element.
   *
   * @var string
   */
  public $alias;
  /**
   * Required. The name of the data source. This is either a table name or a
   * view name that is used for graph element input source. E.g. `Person` table
   * or `PersonView` view.
   *
   * @var string
   */
  public $dataSource;
  /**
   * Optional. Only applies to `kind = EDGE`.
   *
   * @var string
   */
  public $destinationNodeReference;
  /**
   * Optional. If true, the graph element has a dynamic label in schemaless
   * model.
   *
   * @var bool
   */
  public $dynamicLabelEnabled;
  /**
   * Optional. If true, the graph element has dynamic properties in schemaless
   * model.
   *
   * @var bool
   */
  public $dynamicPropertiesEnabled;
  /**
   * Required. The name of the keys of the elements in the table.
   *
   * @var string[]
   */
  public $elementKeys;
  /**
   * Required. The input source of the graph element.
   *
   * @var string
   */
  public $inputSource;
  /**
   * Required. The kind of the graph element.
   *
   * @var string
   */
  public $kind;
  protected $labelAndPropertiesType = GoogleCloudDatacatalogV1GraphSpecGraphElementTableLabelAndProperties::class;
  protected $labelAndPropertiesDataType = 'array';
  /**
   * Optional. Only applies to `kind = EDGE`. The reference to the source node
   * of the edge. This name must be a valid `alias` of a node element in the
   * same graph. Example, `Person` node can be a source node of an edge element
   * `Person_to_Address`. Similar rule applies to `destination_node_reference`.
   *
   * @var string
   */
  public $sourceNodeReference;

  /**
   * Required. The alias name of the graph element.
   *
   * @param string $alias
   */
  public function setAlias($alias)
  {
    $this->alias = $alias;
  }
  /**
   * @return string
   */
  public function getAlias()
  {
    return $this->alias;
  }
  /**
   * Required. The name of the data source. This is either a table name or a
   * view name that is used for graph element input source. E.g. `Person` table
   * or `PersonView` view.
   *
   * @param string $dataSource
   */
  public function setDataSource($dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /**
   * @return string
   */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /**
   * Optional. Only applies to `kind = EDGE`.
   *
   * @param string $destinationNodeReference
   */
  public function setDestinationNodeReference($destinationNodeReference)
  {
    $this->destinationNodeReference = $destinationNodeReference;
  }
  /**
   * @return string
   */
  public function getDestinationNodeReference()
  {
    return $this->destinationNodeReference;
  }
  /**
   * Optional. If true, the graph element has a dynamic label in schemaless
   * model.
   *
   * @param bool $dynamicLabelEnabled
   */
  public function setDynamicLabelEnabled($dynamicLabelEnabled)
  {
    $this->dynamicLabelEnabled = $dynamicLabelEnabled;
  }
  /**
   * @return bool
   */
  public function getDynamicLabelEnabled()
  {
    return $this->dynamicLabelEnabled;
  }
  /**
   * Optional. If true, the graph element has dynamic properties in schemaless
   * model.
   *
   * @param bool $dynamicPropertiesEnabled
   */
  public function setDynamicPropertiesEnabled($dynamicPropertiesEnabled)
  {
    $this->dynamicPropertiesEnabled = $dynamicPropertiesEnabled;
  }
  /**
   * @return bool
   */
  public function getDynamicPropertiesEnabled()
  {
    return $this->dynamicPropertiesEnabled;
  }
  /**
   * Required. The name of the keys of the elements in the table.
   *
   * @param string[] $elementKeys
   */
  public function setElementKeys($elementKeys)
  {
    $this->elementKeys = $elementKeys;
  }
  /**
   * @return string[]
   */
  public function getElementKeys()
  {
    return $this->elementKeys;
  }
  /**
   * Required. The input source of the graph element.
   *
   * Accepted values: INPUT_SOURCE_UNSPECIFIED, TABLE, VIEW
   *
   * @param self::INPUT_SOURCE_* $inputSource
   */
  public function setInputSource($inputSource)
  {
    $this->inputSource = $inputSource;
  }
  /**
   * @return self::INPUT_SOURCE_*
   */
  public function getInputSource()
  {
    return $this->inputSource;
  }
  /**
   * Required. The kind of the graph element.
   *
   * Accepted values: KIND_UNSPECIFIED, NODE, EDGE
   *
   * @param self::KIND_* $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return self::KIND_*
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * Required. The labels and their properties for the graph element.
   *
   * @param GoogleCloudDatacatalogV1GraphSpecGraphElementTableLabelAndProperties[] $labelAndProperties
   */
  public function setLabelAndProperties($labelAndProperties)
  {
    $this->labelAndProperties = $labelAndProperties;
  }
  /**
   * @return GoogleCloudDatacatalogV1GraphSpecGraphElementTableLabelAndProperties[]
   */
  public function getLabelAndProperties()
  {
    return $this->labelAndProperties;
  }
  /**
   * Optional. Only applies to `kind = EDGE`. The reference to the source node
   * of the edge. This name must be a valid `alias` of a node element in the
   * same graph. Example, `Person` node can be a source node of an edge element
   * `Person_to_Address`. Similar rule applies to `destination_node_reference`.
   *
   * @param string $sourceNodeReference
   */
  public function setSourceNodeReference($sourceNodeReference)
  {
    $this->sourceNodeReference = $sourceNodeReference;
  }
  /**
   * @return string
   */
  public function getSourceNodeReference()
  {
    return $this->sourceNodeReference;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogV1GraphSpecGraphElementTable::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1GraphSpecGraphElementTable');
