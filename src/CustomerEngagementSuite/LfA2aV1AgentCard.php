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

class LfA2aV1AgentCard extends \Google\Collection
{
  protected $collection_key = 'supportedInterfaces';
  protected $capabilitiesType = LfA2aV1AgentCapabilities::class;
  protected $capabilitiesDataType = '';
  /**
   * Required. protolint:enable REPEATED_FIELD_NAMES_PLURALIZED The set of
   * interaction modes that the agent supports across all skills. This can be
   * overridden per skill. Defined as media types.
   *
   * @var string[]
   */
  public $defaultInputModes;
  /**
   * Required. The media types supported as outputs from this agent.
   *
   * @var string[]
   */
  public $defaultOutputModes;
  /**
   * Required. A human-readable description of the agent, assisting users and
   * other agents in understanding its purpose. Example: "Agent that helps users
   * with recipes and cooking."
   *
   * @var string
   */
  public $description;
  /**
   * A URL providing additional documentation about the agent.
   *
   * @var string
   */
  public $documentationUrl;
  /**
   * Optional. A URL to an icon for the agent.
   *
   * @var string
   */
  public $iconUrl;
  /**
   * Required. A human readable name for the agent. Example: "Recipe Agent"
   *
   * @var string
   */
  public $name;
  protected $providerType = LfA2aV1AgentProvider::class;
  protected $providerDataType = '';
  protected $securityRequirementsType = LfA2aV1SecurityRequirement::class;
  protected $securityRequirementsDataType = 'array';
  protected $securitySchemesType = LfA2aV1SecurityScheme::class;
  protected $securitySchemesDataType = 'map';
  protected $signaturesType = LfA2aV1AgentCardSignature::class;
  protected $signaturesDataType = 'array';
  protected $skillsType = LfA2aV1AgentSkill::class;
  protected $skillsDataType = 'array';
  protected $supportedInterfacesType = LfA2aV1AgentInterface::class;
  protected $supportedInterfacesDataType = 'array';
  /**
   * Required. The version of the agent. Example: "1.0.0"
   *
   * @var string
   */
  public $version;

  /**
   * Required. A2A Capability set supported by the agent.
   *
   * @param LfA2aV1AgentCapabilities $capabilities
   */
  public function setCapabilities(LfA2aV1AgentCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }
  /**
   * @return LfA2aV1AgentCapabilities
   */
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  /**
   * Required. protolint:enable REPEATED_FIELD_NAMES_PLURALIZED The set of
   * interaction modes that the agent supports across all skills. This can be
   * overridden per skill. Defined as media types.
   *
   * @param string[] $defaultInputModes
   */
  public function setDefaultInputModes($defaultInputModes)
  {
    $this->defaultInputModes = $defaultInputModes;
  }
  /**
   * @return string[]
   */
  public function getDefaultInputModes()
  {
    return $this->defaultInputModes;
  }
  /**
   * Required. The media types supported as outputs from this agent.
   *
   * @param string[] $defaultOutputModes
   */
  public function setDefaultOutputModes($defaultOutputModes)
  {
    $this->defaultOutputModes = $defaultOutputModes;
  }
  /**
   * @return string[]
   */
  public function getDefaultOutputModes()
  {
    return $this->defaultOutputModes;
  }
  /**
   * Required. A human-readable description of the agent, assisting users and
   * other agents in understanding its purpose. Example: "Agent that helps users
   * with recipes and cooking."
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
   * A URL providing additional documentation about the agent.
   *
   * @param string $documentationUrl
   */
  public function setDocumentationUrl($documentationUrl)
  {
    $this->documentationUrl = $documentationUrl;
  }
  /**
   * @return string
   */
  public function getDocumentationUrl()
  {
    return $this->documentationUrl;
  }
  /**
   * Optional. A URL to an icon for the agent.
   *
   * @param string $iconUrl
   */
  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }
  /**
   * @return string
   */
  public function getIconUrl()
  {
    return $this->iconUrl;
  }
  /**
   * Required. A human readable name for the agent. Example: "Recipe Agent"
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
   * The service provider of the agent.
   *
   * @param LfA2aV1AgentProvider $provider
   */
  public function setProvider(LfA2aV1AgentProvider $provider)
  {
    $this->provider = $provider;
  }
  /**
   * @return LfA2aV1AgentProvider
   */
  public function getProvider()
  {
    return $this->provider;
  }
  /**
   * Security requirements for contacting the agent.
   *
   * @param LfA2aV1SecurityRequirement[] $securityRequirements
   */
  public function setSecurityRequirements($securityRequirements)
  {
    $this->securityRequirements = $securityRequirements;
  }
  /**
   * @return LfA2aV1SecurityRequirement[]
   */
  public function getSecurityRequirements()
  {
    return $this->securityRequirements;
  }
  /**
   * The security scheme details used for authenticating with this agent.
   *
   * @param LfA2aV1SecurityScheme[] $securitySchemes
   */
  public function setSecuritySchemes($securitySchemes)
  {
    $this->securitySchemes = $securitySchemes;
  }
  /**
   * @return LfA2aV1SecurityScheme[]
   */
  public function getSecuritySchemes()
  {
    return $this->securitySchemes;
  }
  /**
   * JSON Web Signatures computed for this `AgentCard`.
   *
   * @param LfA2aV1AgentCardSignature[] $signatures
   */
  public function setSignatures($signatures)
  {
    $this->signatures = $signatures;
  }
  /**
   * @return LfA2aV1AgentCardSignature[]
   */
  public function getSignatures()
  {
    return $this->signatures;
  }
  /**
   * Required. Skills represent the abilities of an agent. It is largely a
   * descriptive concept but represents a more focused set of behaviors that the
   * agent is likely to succeed at.
   *
   * @param LfA2aV1AgentSkill[] $skills
   */
  public function setSkills($skills)
  {
    $this->skills = $skills;
  }
  /**
   * @return LfA2aV1AgentSkill[]
   */
  public function getSkills()
  {
    return $this->skills;
  }
  /**
   * Required. Ordered list of supported interfaces. The first entry is
   * preferred.
   *
   * @param LfA2aV1AgentInterface[] $supportedInterfaces
   */
  public function setSupportedInterfaces($supportedInterfaces)
  {
    $this->supportedInterfaces = $supportedInterfaces;
  }
  /**
   * @return LfA2aV1AgentInterface[]
   */
  public function getSupportedInterfaces()
  {
    return $this->supportedInterfaces;
  }
  /**
   * Required. The version of the agent. Example: "1.0.0"
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
class_alias(LfA2aV1AgentCard::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1AgentCard');
