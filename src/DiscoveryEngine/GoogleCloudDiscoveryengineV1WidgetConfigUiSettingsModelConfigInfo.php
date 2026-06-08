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

class GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfo extends \Google\Collection
{
  protected $collection_key = 'resolvedModels';
  /**
   * Output only. The `model_id` of the model that should be selected by default
   * in the model selector when the end-user has not made an explicit choice.
   * The value is always one of the `model_id`s present in `resolved_models`.
   *
   * @var string
   */
  public $defaultModelId;
  protected $resolvedModelsType = GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfoResolvedModel::class;
  protected $resolvedModelsDataType = 'array';

  /**
   * Output only. The `model_id` of the model that should be selected by default
   * in the model selector when the end-user has not made an explicit choice.
   * The value is always one of the `model_id`s present in `resolved_models`.
   *
   * @param string $defaultModelId
   */
  public function setDefaultModelId($defaultModelId)
  {
    $this->defaultModelId = $defaultModelId;
  }
  /**
   * @return string
   */
  public function getDefaultModelId()
  {
    return $this->defaultModelId;
  }
  /**
   * Output only. The list of models that are available to the end-user in the
   * model selector, in the order in which they should be displayed.
   *
   * @param GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfoResolvedModel[] $resolvedModels
   */
  public function setResolvedModels($resolvedModels)
  {
    $this->resolvedModels = $resolvedModels;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfoResolvedModel[]
   */
  public function getResolvedModels()
  {
    return $this->resolvedModels;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfo::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfo');
