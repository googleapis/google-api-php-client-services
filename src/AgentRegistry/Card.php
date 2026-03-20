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

namespace Google\Service\AgentRegistry;

class Card extends \Google\Model
{
  /**
   * Unspecified type.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Indicates that the card is an A2A Agent Card.
   */
  public const TYPE_A2A_AGENT_CARD = 'A2A_AGENT_CARD';
  /**
   * Output only. The content of the agent card.
   *
   * @var array[]
   */
  public $content;
  /**
   * Output only. The type of agent card.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The content of the agent card.
   *
   * @param array[] $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return array[]
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Output only. The type of agent card.
   *
   * Accepted values: TYPE_UNSPECIFIED, A2A_AGENT_CARD
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Card::class, 'Google_Service_AgentRegistry_Card');
