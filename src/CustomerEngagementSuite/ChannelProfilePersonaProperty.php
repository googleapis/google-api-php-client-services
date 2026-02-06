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

class ChannelProfilePersonaProperty extends \Google\Model
{
  /**
   * UNKNOWN persona.
   */
  public const PERSONA_UNKNOWN = 'UNKNOWN';
  /**
   * The agent keeps the responses concise and to the point
   */
  public const PERSONA_CONCISE = 'CONCISE';
  /**
   * The agent provides additional context, explanations, and details
   */
  public const PERSONA_CHATTY = 'CHATTY';
  /**
   * Optional. The persona of the channel.
   *
   * @var string
   */
  public $persona;

  /**
   * Optional. The persona of the channel.
   *
   * Accepted values: UNKNOWN, CONCISE, CHATTY
   *
   * @param self::PERSONA_* $persona
   */
  public function setPersona($persona)
  {
    $this->persona = $persona;
  }
  /**
   * @return self::PERSONA_*
   */
  public function getPersona()
  {
    return $this->persona;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChannelProfilePersonaProperty::class, 'Google_Service_CustomerEngagementSuite_ChannelProfilePersonaProperty');
