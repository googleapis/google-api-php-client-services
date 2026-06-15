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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1GoogleMaps extends \Google\Model
{
  /**
   * Optional. Deprecated: The Google Maps contextual widget behavior in
   * Grounding with Google Maps is being deprecated; this field is planned for
   * removal and no longer has any effect once removed. If true, include the
   * widget context token in the response.
   *
   * @deprecated
   * @var bool
   */
  public $enableWidget;

  /**
   * Optional. Deprecated: The Google Maps contextual widget behavior in
   * Grounding with Google Maps is being deprecated; this field is planned for
   * removal and no longer has any effect once removed. If true, include the
   * widget context token in the response.
   *
   * @deprecated
   * @param bool $enableWidget
   */
  public function setEnableWidget($enableWidget)
  {
    $this->enableWidget = $enableWidget;
  }
  /**
   * @deprecated
   * @return bool
   */
  public function getEnableWidget()
  {
    return $this->enableWidget;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1GoogleMaps::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GoogleMaps');
