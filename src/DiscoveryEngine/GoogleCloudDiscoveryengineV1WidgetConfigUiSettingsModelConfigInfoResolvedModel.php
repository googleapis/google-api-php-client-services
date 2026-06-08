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

class GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfoResolvedModel extends \Google\Model
{
  /**
   * Output only. Localized description text (e.g. `State-of-the-art
   * reasoning`). Localized using the same locale as `display_name`.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Localized display name of the model (e.g. `Gemini 3.1 Pro`).
   * Localized server-side based on the LookupWidgetConfigRequest.language_code
   * and LookupWidgetConfigRequest.region_code of the request.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. GM3-compatible icon token associated with the model (e.g.
   * `rocket_launch`, `bolt`, `graph_5`).
   *
   * @var string
   */
  public $icon;
  /**
   * Output only. Whether the model is currently in preview. Clients should
   * surface this via a "Preview" badge in the selector UI.
   *
   * @var bool
   */
  public $isPreview;
  /**
   * Output only. Unique identifier of the model (e.g. `gemini-2.5-flash`,
   * `gemini-3.1-pro-preview`). This is the same identifier that clients pass
   * back to the assistant service to select this model. Virtual / "pseudo"
   * models (e.g. `gemini-fast`) are also valid values here; they are resolved
   * to the underlying concrete model on the backend.
   *
   * @var string
   */
  public $modelId;

  /**
   * Output only. Localized description text (e.g. `State-of-the-art
   * reasoning`). Localized using the same locale as `display_name`.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. Localized display name of the model (e.g. `Gemini 3.1 Pro`).
   * Localized server-side based on the LookupWidgetConfigRequest.language_code
   * and LookupWidgetConfigRequest.region_code of the request.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. GM3-compatible icon token associated with the model (e.g.
   * `rocket_launch`, `bolt`, `graph_5`).
   *
   * @param string $icon
   */
  public function setIcon($icon)
  {
    $this->icon = $icon;
  }
  /**
   * @return string
   */
  public function getIcon()
  {
    return $this->icon;
  }
  /**
   * Output only. Whether the model is currently in preview. Clients should
   * surface this via a "Preview" badge in the selector UI.
   *
   * @param bool $isPreview
   */
  public function setIsPreview($isPreview)
  {
    $this->isPreview = $isPreview;
  }
  /**
   * @return bool
   */
  public function getIsPreview()
  {
    return $this->isPreview;
  }
  /**
   * Output only. Unique identifier of the model (e.g. `gemini-2.5-flash`,
   * `gemini-3.1-pro-preview`). This is the same identifier that clients pass
   * back to the assistant service to select this model. Virtual / "pseudo"
   * models (e.g. `gemini-fast`) are also valid values here; they are resolved
   * to the underlying concrete model on the backend.
   *
   * @param string $modelId
   */
  public function setModelId($modelId)
  {
    $this->modelId = $modelId;
  }
  /**
   * @return string
   */
  public function getModelId()
  {
    return $this->modelId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfoResolvedModel::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigUiSettingsModelConfigInfoResolvedModel');
