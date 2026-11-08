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
  protected $agentIdentityType = GoogleCloudAiplatformV1AgentIdentity::class;
  protected $agentIdentityDataType = '';
  /**
   * Output only. The resource name of the AI Application provisioned for this
   * agent. Format:
   * `projects/{project}/locations/{location}/aiApplications/{ai_application}`.
   *
   * @var string
   */
  public $aiApplication;
  protected $allowedTeammatesType = GoogleCloudAiplatformV1AllowedTeammates::class;
  protected $allowedTeammatesDataType = '';
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
   * Output only. The resolved Agent Identity (SPIFFE principal) of the agent.
   *
   * @var string
   */
  public $effectiveIdentity;
  protected $encryptionSpecType = GoogleCloudAiplatformV1EncryptionSpec::class;
  protected $encryptionSpecDataType = '';
  /**
   * Immutable. The user-specified ID for the agent. This ID becomes the final
   * component of the agent resource name. If not provided, Vertex AI will
   * generate a value for this ID. The ID can be up to 63 characters and must
   * match the regular expression `[a-z]([a-z0-9-]{0,61}[a-z0-9])?`.
   *
   * @var string
   */
  public $id;
  protected $memoryConfigType = GoogleCloudAiplatformV1AgentMemoryConfig::class;
  protected $memoryConfigDataType = '';
  /**
   * Optional. The metadata for the agent.
   *
   * @var string[]
   */
  public $metadata;
  protected $modelConfigType = GoogleCloudAiplatformV1AgentModelConfig::class;
  protected $modelConfigDataType = '';
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
  protected $observabilityConfigType = GoogleCloudAiplatformV1ObservabilityConfig::class;
  protected $observabilityConfigDataType = '';
  protected $ownerType = GoogleCloudAiplatformV1Principal::class;
  protected $ownerDataType = '';
  protected $personaType = GoogleCloudAiplatformV1Persona::class;
  protected $personaDataType = '';
  protected $statusType = GoogleCloudAiplatformV1AgentStatus::class;
  protected $statusDataType = '';
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
   * Optional. Immutable. The identity configuration of the agent. Immutable:
   * the agent's own identity determines the A2 (CoWorker) archetype and the
   * minted SPIFFE, so it cannot change after creation (no A1<->A2 transition).
   *
   * @param GoogleCloudAiplatformV1AgentIdentity $agentIdentity
   */
  public function setAgentIdentity(GoogleCloudAiplatformV1AgentIdentity $agentIdentity)
  {
    $this->agentIdentity = $agentIdentity;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentIdentity
   */
  public function getAgentIdentity()
  {
    return $this->agentIdentity;
  }
  /**
   * Output only. The resource name of the AI Application provisioned for this
   * agent. Format:
   * `projects/{project}/locations/{location}/aiApplications/{ai_application}`.
   *
   * @param string $aiApplication
   */
  public function setAiApplication($aiApplication)
  {
    $this->aiApplication = $aiApplication;
  }
  /**
   * @return string
   */
  public function getAiApplication()
  {
    return $this->aiApplication;
  }
  /**
   * Optional. The identities this agent is allowed to contact outbound (for
   * example over Gmail or Chat). Stored on the agent and always returned by
   * `GetAgent`; see the field comments on `AllowedTeammates`.
   *
   * @param GoogleCloudAiplatformV1AllowedTeammates $allowedTeammates
   */
  public function setAllowedTeammates(GoogleCloudAiplatformV1AllowedTeammates $allowedTeammates)
  {
    $this->allowedTeammates = $allowedTeammates;
  }
  /**
   * @return GoogleCloudAiplatformV1AllowedTeammates
   */
  public function getAllowedTeammates()
  {
    return $this->allowedTeammates;
  }
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
   * Output only. The resolved Agent Identity (SPIFFE principal) of the agent.
   *
   * @param string $effectiveIdentity
   */
  public function setEffectiveIdentity($effectiveIdentity)
  {
    $this->effectiveIdentity = $effectiveIdentity;
  }
  /**
   * @return string
   */
  public function getEffectiveIdentity()
  {
    return $this->effectiveIdentity;
  }
  /**
   * Optional. Immutable. Customer-managed encryption key spec for an Agent. If
   * set, this agent's user data will be secured by this key; if not set, it is
   * secured by a Google-managed key. Cannot be changed after the agent is
   * created.
   *
   * @param GoogleCloudAiplatformV1EncryptionSpec $encryptionSpec
   */
  public function setEncryptionSpec(GoogleCloudAiplatformV1EncryptionSpec $encryptionSpec)
  {
    $this->encryptionSpec = $encryptionSpec;
  }
  /**
   * @return GoogleCloudAiplatformV1EncryptionSpec
   */
  public function getEncryptionSpec()
  {
    return $this->encryptionSpec;
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
   * Optional. Memory settings for the agent.
   *
   * @param GoogleCloudAiplatformV1AgentMemoryConfig $memoryConfig
   */
  public function setMemoryConfig(GoogleCloudAiplatformV1AgentMemoryConfig $memoryConfig)
  {
    $this->memoryConfig = $memoryConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentMemoryConfig
   */
  public function getMemoryConfig()
  {
    return $this->memoryConfig;
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
   * Optional. Model configuration for the agent. When set, tasks running under
   * this agent default to this model configuration if they do not specify their
   * own.
   *
   * @param GoogleCloudAiplatformV1AgentModelConfig $modelConfig
   */
  public function setModelConfig(GoogleCloudAiplatformV1AgentModelConfig $modelConfig)
  {
    $this->modelConfig = $modelConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentModelConfig
   */
  public function getModelConfig()
  {
    return $this->modelConfig;
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
   * Optional. Observability settings for this agent's sessions.
   *
   * @param GoogleCloudAiplatformV1ObservabilityConfig $observabilityConfig
   */
  public function setObservabilityConfig(GoogleCloudAiplatformV1ObservabilityConfig $observabilityConfig)
  {
    $this->observabilityConfig = $observabilityConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1ObservabilityConfig
   */
  public function getObservabilityConfig()
  {
    return $this->observabilityConfig;
  }
  /**
   * Optional. The human owner (principal) the agent acts on behalf of (A1
   * Personal). Mutable by design: ownership is meant to be reassignable (e.g.
   * by an admin). On create an A1 (Personal) agent may omit it and the control
   * plane defaults it to the caller; an A2 (CoWorker) agent must set it
   * explicitly. `owner.id` must be an *obfuscated* Gaia id. A raw Gaia id is
   * rejected with INVALID_ARGUMENT naming the rule -- both forms are strings of
   * decimal digits, so the surface would otherwise have two indistinguishable
   * spellings of one identity. Not yet: `UpdateAgent` currently rejects a
   * change to this field. The control plane authorizes every agent method
   * against the owner Gaia id it persists internally at create time, and the
   * update path does not maintain that copy — so a field write here would move
   * the reported owner without moving the one access control uses. The guard
   * comes out once reassignment moves both, along with the Workspace identity
   * provisioned under the owner.
   *
   * @param GoogleCloudAiplatformV1Principal $owner
   */
  public function setOwner(GoogleCloudAiplatformV1Principal $owner)
  {
    $this->owner = $owner;
  }
  /**
   * @return GoogleCloudAiplatformV1Principal
   */
  public function getOwner()
  {
    return $this->owner;
  }
  /**
   * Optional. The persona (presentation) of the agent. Mutable: presentation
   * only, not an archetype-derivation signal.
   *
   * @param GoogleCloudAiplatformV1Persona $persona
   */
  public function setPersona(GoogleCloudAiplatformV1Persona $persona)
  {
    $this->persona = $persona;
  }
  /**
   * @return GoogleCloudAiplatformV1Persona
   */
  public function getPersona()
  {
    return $this->persona;
  }
  /**
   * Output only. The current operational state of the agent.
   *
   * @param GoogleCloudAiplatformV1AgentStatus $status
   */
  public function setStatus(GoogleCloudAiplatformV1AgentStatus $status)
  {
    $this->status = $status;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentStatus
   */
  public function getStatus()
  {
    return $this->status;
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
