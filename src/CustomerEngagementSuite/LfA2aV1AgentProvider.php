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

class LfA2aV1AgentProvider extends \Google\Model
{
  /**
   * Required. The name of the agent provider's organization. Example: "Google"
   *
   * @var string
   */
  public $organization;
  /**
   * Required. A URL for the agent provider's website or relevant documentation.
   * Example: "https://ai.google.dev"
   *
   * @var string
   */
  public $url;

  /**
   * Required. The name of the agent provider's organization. Example: "Google"
   *
   * @param string $organization
   */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /**
   * @return string
   */
  public function getOrganization()
  {
    return $this->organization;
  }
  /**
   * Required. A URL for the agent provider's website or relevant documentation.
   * Example: "https://ai.google.dev"
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1AgentProvider::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1AgentProvider');
