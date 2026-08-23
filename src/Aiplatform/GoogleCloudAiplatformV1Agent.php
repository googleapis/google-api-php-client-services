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

class GoogleCloudAiplatformV1Agent extends \Google\Collection
{
  protected $collection_key = 'tools';
  protected $internal_gapi_mappings = [
        "baseAgent" => "base_agent",
        "baseEnvironment" => "base_environment",
        "systemInstruction" => "system_instruction",
  ];
  /**
   * Required. Immutable. The base agent for the agent. Supported values: *
   * `antigravity-preview-05-2026` Immutable: `UpdateAgent` rejects a change,
   * including clearing it. The kind of agent this is gets derived from this
   * field when the agent is created and is recorded then; nothing recomputes it
   * afterwards, so a later change would leave the agent described as one kind
   * and behaving as another. Create a new agent instead.
   *
   * @var string
   */
  public $baseAgent;
  /**
   * Optional. The base environment configuration for the agent. Valid types: *
   * A string value for the environment ID, or `remote` for the default. * A
   * struct value for the `environment_config`.
   *
   * @var array
   */
  public $baseEnvironment;
  /**
   * Output only. The time the agent was created.
   *
   * @var string
   */
  public $created;
  /**
   * Optional. The description of the agent.
   *
   * @var string
   */
  public $description;
  /**
   * Immutable. The user-specified ID for the agent. This ID becomes the final
   * component of the agent resource name. If not provided, Vertex AI will
   * generate a value for this ID. The ID can be up to 63 characters and must
   * match the regular expression `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
   *
   * @var string
   */
  public $id;
  /**
   * Optional. The metadata for the agent.
   *
   * @var string[]
   */
  public $metadata;
  /**
   * Identifier. The resource name of the agent. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The object type of the resource. For agents, the value is
   * `agent`.
   *
   * @var string
   */
  public $object;
  /**
   * Optional. The instructions for the agent to follow. These instructions are
   * passed to the LLM as a system instruction.
   *
   * @var string
   */
  public $systemInstruction;
  protected $toolsType = GoogleCloudAiplatformV1AgentTool::class;
  protected $toolsDataType = 'array';
  /**
   * Output only. The time the agent was last updated.
   *
   * @var string
   */
  public $updated;

  /**
   * Required. Immutable. The base agent for the agent. Supported values: *
   * `antigravity-preview-05-2026` Immutable: `UpdateAgent` rejects a change,
   * including clearing it. The kind of agent this is gets derived from this
   * field when the agent is created and is recorded then; nothing recomputes it
   * afterwards, so a later change would leave the agent described as one kind
   * and behaving as another. Create a new agent instead.
   *
   * @param string $baseAgent
   */
  public function setBaseAgent($baseAgent)
  {
    $this->baseAgent = $baseAgent;
  }
  /**
   * @return string
   */
  public function getBaseAgent()
  {
    return $this->baseAgent;
  }
  /**
   * Optional. The base environment configuration for the agent. Valid types: *
   * A string value for the environment ID, or `remote` for the default. * A
   * struct value for the `environment_config`.
   *
   * @param array $baseEnvironment
   */
  public function setBaseEnvironment($baseEnvironment)
  {
    $this->baseEnvironment = $baseEnvironment;
  }
  /**
   * @return array
   */
  public function getBaseEnvironment()
  {
    return $this->baseEnvironment;
  }
  /**
   * Output only. The time the agent was created.
   *
   * @param string $created
   */
  public function setCreated($created)
  {
    $this->created = $created;
  }
  /**
   * @return string
   */
  public function getCreated()
  {
    return $this->created;
  }
  /**
   * Optional. The description of the agent.
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
   * Immutable. The user-specified ID for the agent. This ID becomes the final
   * component of the agent resource name. If not provided, Vertex AI will
   * generate a value for this ID. The ID can be up to 63 characters and must
   * match the regular expression `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Optional. The metadata for the agent.
   *
   * @param string[] $metadata
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return string[]
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * Identifier. The resource name of the agent. Format:
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
   * Output only. The object type of the resource. For agents, the value is
   * `agent`.
   *
   * @param string $object
   */
  public function setObject($object)
  {
    $this->object = $object;
  }
  /**
   * @return string
   */
  public function getObject()
  {
    return $this->object;
  }
  /**
   * Optional. The instructions for the agent to follow. These instructions are
   * passed to the LLM as a system instruction.
   *
   * @param string $systemInstruction
   */
  public function setSystemInstruction($systemInstruction)
  {
    $this->systemInstruction = $systemInstruction;
  }
  /**
   * @return string
   */
  public function getSystemInstruction()
  {
    return $this->systemInstruction;
  }
  /**
   * Optional. The tools available to the agent.
   *
   * @param GoogleCloudAiplatformV1AgentTool[] $tools
   */
  public function setTools($tools)
  {
    $this->tools = $tools;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentTool[]
   */
  public function getTools()
  {
    return $this->tools;
  }
  /**
   * Output only. The time the agent was last updated.
   *
   * @param string $updated
   */
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  /**
   * @return string
   */
  public function getUpdated()
  {
    return $this->updated;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1Agent::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1Agent');
