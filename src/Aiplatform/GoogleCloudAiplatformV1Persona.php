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

class GoogleCloudAiplatformV1Persona extends \Google\Model
{
  /**
   * Optional. The URL of the agent's avatar.
   *
   * @var string
   */
  public $avatarUrl;
  /**
   * Required. The display name of the agent.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. The personality style or behavioral trait of the agent.
   *
   * @var string
   */
  public $personality;
  /**
   * Optional. The role of the agent (e.g., "Financial Analyst").
   *
   * @var string
   */
  public $role;

  /**
   * Optional. The URL of the agent's avatar.
   *
   * @param string $avatarUrl
   */
  public function setAvatarUrl($avatarUrl)
  {
    $this->avatarUrl = $avatarUrl;
  }
  /**
   * @return string
   */
  public function getAvatarUrl()
  {
    return $this->avatarUrl;
  }
  /**
   * Required. The display name of the agent.
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
   * Optional. The personality style or behavioral trait of the agent.
   *
   * @param string $personality
   */
  public function setPersonality($personality)
  {
    $this->personality = $personality;
  }
  /**
   * @return string
   */
  public function getPersonality()
  {
    return $this->personality;
  }
  /**
   * Optional. The role of the agent (e.g., "Financial Analyst").
   *
   * @param string $role
   */
  public function setRole($role)
  {
    $this->role = $role;
  }
  /**
   * @return string
   */
  public function getRole()
  {
    return $this->role;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1Persona::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1Persona');
