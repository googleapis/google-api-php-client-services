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

class LfA2aV1AgentExtension extends \Google\Model
{
  /**
   * A human-readable description of how this agent uses the extension.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Extension-specific configuration parameters.
   *
   * @var array[]
   */
  public $params;
  /**
   * If true, the client must understand and comply with the extension's
   * requirements.
   *
   * @var bool
   */
  public $required;
  /**
   * The unique URI identifying the extension.
   *
   * @var string
   */
  public $uri;

  /**
   * A human-readable description of how this agent uses the extension.
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
   * Optional. Extension-specific configuration parameters.
   *
   * @param array[] $params
   */
  public function setParams($params)
  {
    $this->params = $params;
  }
  /**
   * @return array[]
   */
  public function getParams()
  {
    return $this->params;
  }
  /**
   * If true, the client must understand and comply with the extension's
   * requirements.
   *
   * @param bool $required
   */
  public function setRequired($required)
  {
    $this->required = $required;
  }
  /**
   * @return bool
   */
  public function getRequired()
  {
    return $this->required;
  }
  /**
   * The unique URI identifying the extension.
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1AgentExtension::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1AgentExtension');
