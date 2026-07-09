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

class GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfoResolvedModelAdminView extends \Google\Collection
{
  protected $collection_key = 'regions';
  /**
   * Output only. Whether the admin can toggle this model's enabled/disabled
   * state via `UiSettings.model_configs`. Derived from
   * `MODEL_TAG_ADMIN_OVERRIDABLE`. When false, the model is "forced" and its
   * state is governed by `enabled_by_default`.
   *
   * @var bool
   */
  public $adminOverridable;
  /**
   * Output only. Whether the model is enabled when the admin has set no
   * explicit override in `UiSettings.model_configs`. Derived from
   * `MODEL_TAG_ENABLED_BY_DEFAULT`.
   *
   * @var bool
   */
  public $enabledByDefault;
  /**
   * Output only. Regions where this model is launched.
   *
   * @var string[]
   */
  public $regions;

  /**
   * Output only. Whether the admin can toggle this model's enabled/disabled
   * state via `UiSettings.model_configs`. Derived from
   * `MODEL_TAG_ADMIN_OVERRIDABLE`. When false, the model is "forced" and its
   * state is governed by `enabled_by_default`.
   *
   * @param bool $adminOverridable
   */
  public function setAdminOverridable($adminOverridable)
  {
    $this->adminOverridable = $adminOverridable;
  }
  /**
   * @return bool
   */
  public function getAdminOverridable()
  {
    return $this->adminOverridable;
  }
  /**
   * Output only. Whether the model is enabled when the admin has set no
   * explicit override in `UiSettings.model_configs`. Derived from
   * `MODEL_TAG_ENABLED_BY_DEFAULT`.
   *
   * @param bool $enabledByDefault
   */
  public function setEnabledByDefault($enabledByDefault)
  {
    $this->enabledByDefault = $enabledByDefault;
  }
  /**
   * @return bool
   */
  public function getEnabledByDefault()
  {
    return $this->enabledByDefault;
  }
  /**
   * Output only. Regions where this model is launched.
   *
   * @param string[] $regions
   */
  public function setRegions($regions)
  {
    $this->regions = $regions;
  }
  /**
   * @return string[]
   */
  public function getRegions()
  {
    return $this->regions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfoResolvedModelAdminView::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfoResolvedModelAdminView');
