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

class Agent extends \Google\Collection
{
  protected $collection_key = 'skills';
  /**
   * Output only. A stable, globally unique identifier for agents.
   *
   * @var string
   */
  public $agentId;
  /**
   * Output only. Attributes of the Agent. Valid values: *
   * `agentregistry.googleapis.com/system/Framework`: {"framework": "google-
   * adk"} - the agent framework used to develop the Agent. Example values:
   * "google-adk", "langchain", "custom". *
   * `agentregistry.googleapis.com/system/RuntimeIdentity`: {"principal":
   * "principal://..."} - the runtime identity associated with the Agent. *
   * `agentregistry.googleapis.com/system/RuntimeReference`: {"uri": "//..."} -
   * the URI of the underlying resource hosting the Agent, for example, the
   * Reasoning Engine URI.
   *
   * @var array[]
   */
  public $attributes;
  protected $cardType = Card::class;
  protected $cardDataType = '';
  /**
   * Output only. Create time.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The description of the Agent, often obtained from the A2A
   * Agent Card. Empty if Agent Card has no description.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The display name of the agent, often obtained from the A2A
   * Agent Card.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The location where agent is hosted. The value is defined by
   * the hosting environment (i.e. cloud provider).
   *
   * @var string
   */
  public $location;
  /**
   * Identifier. The resource name of an Agent. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`.
   *
   * @var string
   */
  public $name;
  protected $protocolsType = Protocol::class;
  protected $protocolsDataType = 'array';
  protected $skillsType = Skill::class;
  protected $skillsDataType = 'array';
  /**
   * Output only. A universally unique identifier for the Agent.
   *
   * @var string
   */
  public $uid;
  /**
   * Output only. Update time.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. The version of the Agent, often obtained from the A2A Agent
   * Card. Empty if Agent Card has no version or agent is not an A2A Agent.
   *
   * @var string
   */
  public $version;

  /**
   * Output only. A stable, globally unique identifier for agents.
   *
   * @param string $agentId
   */
  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  /**
   * @return string
   */
  public function getAgentId()
  {
    return $this->agentId;
  }
  /**
   * Output only. Attributes of the Agent. Valid values: *
   * `agentregistry.googleapis.com/system/Framework`: {"framework": "google-
   * adk"} - the agent framework used to develop the Agent. Example values:
   * "google-adk", "langchain", "custom". *
   * `agentregistry.googleapis.com/system/RuntimeIdentity`: {"principal":
   * "principal://..."} - the runtime identity associated with the Agent. *
   * `agentregistry.googleapis.com/system/RuntimeReference`: {"uri": "//..."} -
   * the URI of the underlying resource hosting the Agent, for example, the
   * Reasoning Engine URI.
   *
   * @param array[] $attributes
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return array[]
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /**
   * Output only. Full Agent Card payload, when available.
   *
   * @param Card $card
   */
  public function setCard(Card $card)
  {
    $this->card = $card;
  }
  /**
   * @return Card
   */
  public function getCard()
  {
    return $this->card;
  }
  /**
   * Output only. Create time.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. The description of the Agent, often obtained from the A2A
   * Agent Card. Empty if Agent Card has no description.
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
   * Output only. The display name of the agent, often obtained from the A2A
   * Agent Card.
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
   * Output only. The location where agent is hosted. The value is defined by
   * the hosting environment (i.e. cloud provider).
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Identifier. The resource name of an Agent. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The connection details for the Agent.
   *
   * @param Protocol[] $protocols
   */
  public function setProtocols($protocols)
  {
    $this->protocols = $protocols;
  }
  /**
   * @return Protocol[]
   */
  public function getProtocols()
  {
    return $this->protocols;
  }
  /**
   * Output only. Skills the agent possesses, often obtained from the A2A Agent
   * Card.
   *
   * @param Skill[] $skills
   */
  public function setSkills($skills)
  {
    $this->skills = $skills;
  }
  /**
   * @return Skill[]
   */
  public function getSkills()
  {
    return $this->skills;
  }
  /**
   * Output only. A universally unique identifier for the Agent.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * Output only. Update time.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * Output only. The version of the Agent, often obtained from the A2A Agent
   * Card. Empty if Agent Card has no version or agent is not an A2A Agent.
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Agent::class, 'Google_Service_AgentRegistry_Agent');
