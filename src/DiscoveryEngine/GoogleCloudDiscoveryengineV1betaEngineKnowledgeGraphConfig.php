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

class GoogleCloudDiscoveryengineV1betaEngineKnowledgeGraphConfig extends \Google\Collection
{
  protected $collection_key = 'privateKnowledgeGraphTypes';
  /**
   * Specify entity types to support.
   *
   * @var string[]
   */
  public $cloudKnowledgeGraphTypes;
  /**
   * Whether to enable the Cloud Knowledge Graph for the engine. Defaults to
   * false if not specified.
   *
   * @var bool
   */
  public $enableCloudKnowledgeGraph;
  /**
   * Whether to enable the Private Knowledge Graph for the engine. Defaults to
   * false if not specified.
   *
   * @var bool
   */
  public $enablePrivateKnowledgeGraph;
  protected $featureConfigType = GoogleCloudDiscoveryengineV1betaEngineKnowledgeGraphConfigFeatureConfig::class;
  protected $featureConfigDataType = '';
  /**
   * Specify entity types to support.
   *
   * @var string[]
   */
  public $privateKnowledgeGraphTypes;

  /**
   * Specify entity types to support.
   *
   * @param string[] $cloudKnowledgeGraphTypes
   */
  public function setCloudKnowledgeGraphTypes($cloudKnowledgeGraphTypes)
  {
    $this->cloudKnowledgeGraphTypes = $cloudKnowledgeGraphTypes;
  }
  /**
   * @return string[]
   */
  public function getCloudKnowledgeGraphTypes()
  {
    return $this->cloudKnowledgeGraphTypes;
  }
  /**
   * Whether to enable the Cloud Knowledge Graph for the engine. Defaults to
   * false if not specified.
   *
   * @param bool $enableCloudKnowledgeGraph
   */
  public function setEnableCloudKnowledgeGraph($enableCloudKnowledgeGraph)
  {
    $this->enableCloudKnowledgeGraph = $enableCloudKnowledgeGraph;
  }
  /**
   * @return bool
   */
  public function getEnableCloudKnowledgeGraph()
  {
    return $this->enableCloudKnowledgeGraph;
  }
  /**
   * Whether to enable the Private Knowledge Graph for the engine. Defaults to
   * false if not specified.
   *
   * @param bool $enablePrivateKnowledgeGraph
   */
  public function setEnablePrivateKnowledgeGraph($enablePrivateKnowledgeGraph)
  {
    $this->enablePrivateKnowledgeGraph = $enablePrivateKnowledgeGraph;
  }
  /**
   * @return bool
   */
  public function getEnablePrivateKnowledgeGraph()
  {
    return $this->enablePrivateKnowledgeGraph;
  }
  /**
   * Optional. Feature config for the Knowledge Graph.
   *
   * @param GoogleCloudDiscoveryengineV1betaEngineKnowledgeGraphConfigFeatureConfig $featureConfig
   */
  public function setFeatureConfig(GoogleCloudDiscoveryengineV1betaEngineKnowledgeGraphConfigFeatureConfig $featureConfig)
  {
    $this->featureConfig = $featureConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1betaEngineKnowledgeGraphConfigFeatureConfig
   */
  public function getFeatureConfig()
  {
    return $this->featureConfig;
  }
  /**
   * Specify entity types to support.
   *
   * @param string[] $privateKnowledgeGraphTypes
   */
  public function setPrivateKnowledgeGraphTypes($privateKnowledgeGraphTypes)
  {
    $this->privateKnowledgeGraphTypes = $privateKnowledgeGraphTypes;
  }
  /**
   * @return string[]
   */
  public function getPrivateKnowledgeGraphTypes()
  {
    return $this->privateKnowledgeGraphTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1betaEngineKnowledgeGraphConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaEngineKnowledgeGraphConfig');
