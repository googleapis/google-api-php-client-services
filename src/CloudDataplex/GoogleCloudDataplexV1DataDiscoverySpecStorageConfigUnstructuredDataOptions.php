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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1DataDiscoverySpecStorageConfigUnstructuredDataOptions extends \Google\Model
{
  /**
   * Optional. Specifies whether deeper semantic inference over the objects'
   * contents using GenAI is enabled.
   *
   * @var bool
   */
  public $semanticInferenceEnabled;

  /**
   * Optional. Specifies whether deeper semantic inference over the objects'
   * contents using GenAI is enabled.
   *
   * @param bool $semanticInferenceEnabled
   */
  public function setSemanticInferenceEnabled($semanticInferenceEnabled)
  {
    $this->semanticInferenceEnabled = $semanticInferenceEnabled;
  }
  /**
   * @return bool
   */
  public function getSemanticInferenceEnabled()
  {
    return $this->semanticInferenceEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataDiscoverySpecStorageConfigUnstructuredDataOptions::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDiscoverySpecStorageConfigUnstructuredDataOptions');
