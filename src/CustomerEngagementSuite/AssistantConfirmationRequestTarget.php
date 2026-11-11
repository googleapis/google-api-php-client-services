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

namespace Google\Service\CustomerEngagementSuite;

class AssistantConfirmationRequestTarget extends \Google\Model
{
  /**
   * The action, e.g. `CREATE`, `UPDATE`, `DELETE`, `COPY`, `LINK`.
   *
   * @var string
   */
  public $action;
  /**
   * Display name of the resource or app, for the card.
   *
   * @var string
   */
  public $displayName;
  /**
   * The resource that will change, as a full resource name.
   *
   * @var string
   */
  public $resource;
  /**
   * The app the resource belongs to, or empty for a location-scoped action such
   * as creating an app. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   *
   * @var string
   */
  public $targetApp;

  /**
   * The action, e.g. `CREATE`, `UPDATE`, `DELETE`, `COPY`, `LINK`.
   *
   * @param string $action
   */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /**
   * @return string
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Display name of the resource or app, for the card.
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
   * The resource that will change, as a full resource name.
   *
   * @param string $resource
   */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return string
   */
  public function getResource()
  {
    return $this->resource;
  }
  /**
   * The app the resource belongs to, or empty for a location-scoped action such
   * as creating an app. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   *
   * @param string $targetApp
   */
  public function setTargetApp($targetApp)
  {
    $this->targetApp = $targetApp;
  }
  /**
   * @return string
   */
  public function getTargetApp()
  {
    return $this->targetApp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantConfirmationRequestTarget::class, 'Google_Service_CustomerEngagementSuite_AssistantConfirmationRequestTarget');
