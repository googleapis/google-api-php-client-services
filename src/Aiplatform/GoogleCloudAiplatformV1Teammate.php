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

class GoogleCloudAiplatformV1Teammate extends \Google\Model
{
  /**
   * Unspecified expansion mode.
   */
  public const EXPANSION_MODE_EXPANSION_MODE_UNSPECIFIED = 'EXPANSION_MODE_UNSPECIFIED';
  /**
   * Infer whether to expand based on roster type (e.g., expand Google Groups,
   * do not expand Chat Spaces).
   */
  public const EXPANSION_MODE_INFER = 'INFER';
  /**
   * Transitive expansion: the agent can contact individual members of the
   * group.
   */
  public const EXPANSION_MODE_EXPANDED = 'EXPANDED';
  /**
   * Non-expanded: the agent can contact the group or space as a channel,
   * without expanding to individual members.
   */
  public const EXPANSION_MODE_NON_EXPANDED = 'NON_EXPANDED';
  /**
   * Optional. Email address of the teammate.
   *
   * @var string
   */
  public $email;
  /**
   * Optional. Expansion mode for group or space teammates.
   *
   * @var string
   */
  public $expansionMode;
  /**
   * Optional. Obfuscated Gaia id of the teammate. OBFUSCATED, never a raw Gaia
   * id -- the same form as `Principal.id` and every other Gaia id this API
   * surfaces, so the two are comparable. A string rather than an int64 for that
   * reason: the obfuscated form is not a number.
   *
   * @var string
   */
  public $gaiaId;

  /**
   * Optional. Email address of the teammate.
   *
   * @param string $email
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }
  /**
   * Optional. Expansion mode for group or space teammates.
   *
   * Accepted values: EXPANSION_MODE_UNSPECIFIED, INFER, EXPANDED, NON_EXPANDED
   *
   * @param self::EXPANSION_MODE_* $expansionMode
   */
  public function setExpansionMode($expansionMode)
  {
    $this->expansionMode = $expansionMode;
  }
  /**
   * @return self::EXPANSION_MODE_*
   */
  public function getExpansionMode()
  {
    return $this->expansionMode;
  }
  /**
   * Optional. Obfuscated Gaia id of the teammate. OBFUSCATED, never a raw Gaia
   * id -- the same form as `Principal.id` and every other Gaia id this API
   * surfaces, so the two are comparable. A string rather than an int64 for that
   * reason: the obfuscated form is not a number.
   *
   * @param string $gaiaId
   */
  public function setGaiaId($gaiaId)
  {
    $this->gaiaId = $gaiaId;
  }
  /**
   * @return string
   */
  public function getGaiaId()
  {
    return $this->gaiaId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1Teammate::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1Teammate');
