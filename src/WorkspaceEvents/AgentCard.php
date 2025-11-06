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

namespace Google\Service\WorkspaceEvents;

class AgentCard extends \Google\Collection
{
  protected $collection_key = 'skills';
  protected $additionalInterfacesType = AgentInterface::class;
  protected $additionalInterfacesDataType = 'array';
  protected $capabilitiesType = AgentCapabilities::class;
  protected $capabilitiesDataType = '';
  /**
   * @var string[]
   */
  public $defaultInputModes;
  /**
   * @var string[]
   */
  public $defaultOutputModes;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $documentationUrl;
  /**
   * @var string
   */
  public $iconUrl;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $preferredTransport;
  /**
   * @var string
   */
  public $protocolVersion;
  protected $providerType = AgentProvider::class;
  protected $providerDataType = '';
  protected $securityType = Security::class;
  protected $securityDataType = 'array';
  protected $securitySchemesType = SecurityScheme::class;
  protected $securitySchemesDataType = 'map';
  protected $signaturesType = AgentCardSignature::class;
  protected $signaturesDataType = 'array';
  protected $skillsType = AgentSkill::class;
  protected $skillsDataType = 'array';
  /**
   * @var bool
   */
  public $supportsAuthenticatedExtendedCard;
  /**
   * @var string
   */
  public $url;
  /**
   * @var string
   */
  public $version;

  /**
   * @param AgentInterface[]
   */
  public function setAdditionalInterfaces($additionalInterfaces)
  {
    $this->additionalInterfaces = $additionalInterfaces;
  }
  /**
   * @return AgentInterface[]
   */
  public function getAdditionalInterfaces()
  {
    return $this->additionalInterfaces;
  }
  /**
   * @param AgentCapabilities
   */
  public function setCapabilities(AgentCapabilities $capabilities)
  {
    $this->capabilities = $capabilities;
  }
  /**
   * @return AgentCapabilities
   */
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  /**
   * @param string[]
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
   * @param string[]
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
   * @param string
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
   * @param string
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
   * @param string
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
   * @param string
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
   * @param string
   */
  public function setPreferredTransport($preferredTransport)
  {
    $this->preferredTransport = $preferredTransport;
  }
  /**
   * @return string
   */
  public function getPreferredTransport()
  {
    return $this->preferredTransport;
  }
  /**
   * @param string
   */
  public function setProtocolVersion($protocolVersion)
  {
    $this->protocolVersion = $protocolVersion;
  }
  /**
   * @return string
   */
  public function getProtocolVersion()
  {
    return $this->protocolVersion;
  }
  /**
   * @param AgentProvider
   */
  public function setProvider(AgentProvider $provider)
  {
    $this->provider = $provider;
  }
  /**
   * @return AgentProvider
   */
  public function getProvider()
  {
    return $this->provider;
  }
  /**
   * @param Security[]
   */
  public function setSecurity($security)
  {
    $this->security = $security;
  }
  /**
   * @return Security[]
   */
  public function getSecurity()
  {
    return $this->security;
  }
  /**
   * @param SecurityScheme[]
   */
  public function setSecuritySchemes($securitySchemes)
  {
    $this->securitySchemes = $securitySchemes;
  }
  /**
   * @return SecurityScheme[]
   */
  public function getSecuritySchemes()
  {
    return $this->securitySchemes;
  }
  /**
   * @param AgentCardSignature[]
   */
  public function setSignatures($signatures)
  {
    $this->signatures = $signatures;
  }
  /**
   * @return AgentCardSignature[]
   */
  public function getSignatures()
  {
    return $this->signatures;
  }
  /**
   * @param AgentSkill[]
   */
  public function setSkills($skills)
  {
    $this->skills = $skills;
  }
  /**
   * @return AgentSkill[]
   */
  public function getSkills()
  {
    return $this->skills;
  }
  /**
   * @param bool
   */
  public function setSupportsAuthenticatedExtendedCard($supportsAuthenticatedExtendedCard)
  {
    $this->supportsAuthenticatedExtendedCard = $supportsAuthenticatedExtendedCard;
  }
  /**
   * @return bool
   */
  public function getSupportsAuthenticatedExtendedCard()
  {
    return $this->supportsAuthenticatedExtendedCard;
  }
  /**
   * @param string
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
  /**
   * @param string
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
class_alias(AgentCard::class, 'Google_Service_WorkspaceEvents_AgentCard');
