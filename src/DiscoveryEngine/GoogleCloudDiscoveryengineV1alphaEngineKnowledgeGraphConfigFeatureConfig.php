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

class GoogleCloudDiscoveryengineV1alphaEngineKnowledgeGraphConfigFeatureConfig extends \Google\Model
{
  /**
   * Whether to disable the private KG auto complete for the engine. Defaults to
   * false if not specified.
   *
   * @var bool
   */
  public $disablePrivateKgAutoComplete;
  /**
   * Whether to disable the private KG enrichment for the engine. Defaults to
   * false if not specified.
   *
   * @var bool
   */
  public $disablePrivateKgEnrichment;
  /**
   * Whether to disable the private KG for query UI chips. Defaults to false if
   * not specified.
   *
   * @var bool
   */
  public $disablePrivateKgQueryUiChips;
  /**
   * Whether to disable the private KG query understanding for the engine.
   * Defaults to false if not specified.
   *
   * @var bool
   */
  public $disablePrivateKgQueryUnderstanding;

  /**
   * Whether to disable the private KG auto complete for the engine. Defaults to
   * false if not specified.
   *
   * @param bool $disablePrivateKgAutoComplete
   */
  public function setDisablePrivateKgAutoComplete($disablePrivateKgAutoComplete)
  {
    $this->disablePrivateKgAutoComplete = $disablePrivateKgAutoComplete;
  }
  /**
   * @return bool
   */
  public function getDisablePrivateKgAutoComplete()
  {
    return $this->disablePrivateKgAutoComplete;
  }
  /**
   * Whether to disable the private KG enrichment for the engine. Defaults to
   * false if not specified.
   *
   * @param bool $disablePrivateKgEnrichment
   */
  public function setDisablePrivateKgEnrichment($disablePrivateKgEnrichment)
  {
    $this->disablePrivateKgEnrichment = $disablePrivateKgEnrichment;
  }
  /**
   * @return bool
   */
  public function getDisablePrivateKgEnrichment()
  {
    return $this->disablePrivateKgEnrichment;
  }
  /**
   * Whether to disable the private KG for query UI chips. Defaults to false if
   * not specified.
   *
   * @param bool $disablePrivateKgQueryUiChips
   */
  public function setDisablePrivateKgQueryUiChips($disablePrivateKgQueryUiChips)
  {
    $this->disablePrivateKgQueryUiChips = $disablePrivateKgQueryUiChips;
  }
  /**
   * @return bool
   */
  public function getDisablePrivateKgQueryUiChips()
  {
    return $this->disablePrivateKgQueryUiChips;
  }
  /**
   * Whether to disable the private KG query understanding for the engine.
   * Defaults to false if not specified.
   *
   * @param bool $disablePrivateKgQueryUnderstanding
   */
  public function setDisablePrivateKgQueryUnderstanding($disablePrivateKgQueryUnderstanding)
  {
    $this->disablePrivateKgQueryUnderstanding = $disablePrivateKgQueryUnderstanding;
  }
  /**
   * @return bool
   */
  public function getDisablePrivateKgQueryUnderstanding()
  {
    return $this->disablePrivateKgQueryUnderstanding;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaEngineKnowledgeGraphConfigFeatureConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaEngineKnowledgeGraphConfigFeatureConfig');
