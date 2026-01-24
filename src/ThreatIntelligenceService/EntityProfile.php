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

namespace Google\Service\ThreatIntelligenceService;

class EntityProfile extends \Google\Collection
{
  protected $collection_key = 'subIndustries';
  /**
   * Optional. List of specific countries of operation. Purpose: Essential for
   * matching geographically targeted threats (e.g., actor specifies victims in
   * 'DE'). Use ISO 3166-1 alpha-2 codes (e.g., "US", "GB", "JP", "DE").
   *
   * @var string[]
   */
  public $countries;
  /**
   * Required. List of primary internet domain names associated with the entity.
   * Purpose: Crucial for explicit matching against domains mentioned in threat
   * intel and can inform semantic matching. Must contain at least one domain.
   * Example: ["acme.com", "acme.co.uk"]
   *
   * @var string[]
   */
  public $domains;
  /**
   * Optional. List of primary industry sectors the entity operates within.
   * Purpose: Crucial for matching industry-specific threats and understanding
   * attacker motivation. Use standardized GTI Industry Classification values.
   * Example: ["Technology", "Financial Services", "Healthcare"]
   *
   * @var string[]
   */
  public $industries;
  /**
   * Required. Canonical name of the entity (e.g., the legal company name).
   * Purpose: Primary identifier for the customer.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Specific geographic areas of *significant* operational
   * concentration or strategic importance below the country level, if clearly
   * identifiable and relevant. Purpose: Useful for highly localized threats,
   * less commonly populated than `countries`. Example: ["Silicon Valley",
   * "Frankfurt am Main Metropolitan Region"]
   *
   * @var string[]
   */
  public $operationalAreas;
  /**
   * Required. A concise, machine-generated (e.g., LLM) or human-curated summary
   * of the entity. Purpose: Captures the semantic essence for embedding
   * generation and similarity matching. Should synthesize key aspects like core
   * business, scale, and market. Example: "Acme Corporation is a large, US-
   * based multinational conglomerate operating..."
   *
   * @var string
   */
  public $profileSummary;
  /**
   * Optional. List of primary geopolitical regions where the entity has
   * significant operations. Purpose: Filters geographically relevant threats.
   * Use standardized names or codes where possible (e.g., "North America",
   * "EMEA", "APAC", UN M49 codes).
   *
   * @var string[]
   */
  public $regions;
  /**
   * Optional. List of more granular sub-industries, if applicable and known.
   * Purpose: Provides finer-grained context for more specific threat matching.
   * Should align with GTI classifications if possible. Example:
   * ["Semiconductors", "Cloud Computing Services", "Investment Banking"]
   *
   * @var string[]
   */
  public $subIndustries;

  /**
   * Optional. List of specific countries of operation. Purpose: Essential for
   * matching geographically targeted threats (e.g., actor specifies victims in
   * 'DE'). Use ISO 3166-1 alpha-2 codes (e.g., "US", "GB", "JP", "DE").
   *
   * @param string[] $countries
   */
  public function setCountries($countries)
  {
    $this->countries = $countries;
  }
  /**
   * @return string[]
   */
  public function getCountries()
  {
    return $this->countries;
  }
  /**
   * Required. List of primary internet domain names associated with the entity.
   * Purpose: Crucial for explicit matching against domains mentioned in threat
   * intel and can inform semantic matching. Must contain at least one domain.
   * Example: ["acme.com", "acme.co.uk"]
   *
   * @param string[] $domains
   */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /**
   * @return string[]
   */
  public function getDomains()
  {
    return $this->domains;
  }
  /**
   * Optional. List of primary industry sectors the entity operates within.
   * Purpose: Crucial for matching industry-specific threats and understanding
   * attacker motivation. Use standardized GTI Industry Classification values.
   * Example: ["Technology", "Financial Services", "Healthcare"]
   *
   * @param string[] $industries
   */
  public function setIndustries($industries)
  {
    $this->industries = $industries;
  }
  /**
   * @return string[]
   */
  public function getIndustries()
  {
    return $this->industries;
  }
  /**
   * Required. Canonical name of the entity (e.g., the legal company name).
   * Purpose: Primary identifier for the customer.
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
   * Optional. Specific geographic areas of *significant* operational
   * concentration or strategic importance below the country level, if clearly
   * identifiable and relevant. Purpose: Useful for highly localized threats,
   * less commonly populated than `countries`. Example: ["Silicon Valley",
   * "Frankfurt am Main Metropolitan Region"]
   *
   * @param string[] $operationalAreas
   */
  public function setOperationalAreas($operationalAreas)
  {
    $this->operationalAreas = $operationalAreas;
  }
  /**
   * @return string[]
   */
  public function getOperationalAreas()
  {
    return $this->operationalAreas;
  }
  /**
   * Required. A concise, machine-generated (e.g., LLM) or human-curated summary
   * of the entity. Purpose: Captures the semantic essence for embedding
   * generation and similarity matching. Should synthesize key aspects like core
   * business, scale, and market. Example: "Acme Corporation is a large, US-
   * based multinational conglomerate operating..."
   *
   * @param string $profileSummary
   */
  public function setProfileSummary($profileSummary)
  {
    $this->profileSummary = $profileSummary;
  }
  /**
   * @return string
   */
  public function getProfileSummary()
  {
    return $this->profileSummary;
  }
  /**
   * Optional. List of primary geopolitical regions where the entity has
   * significant operations. Purpose: Filters geographically relevant threats.
   * Use standardized names or codes where possible (e.g., "North America",
   * "EMEA", "APAC", UN M49 codes).
   *
   * @param string[] $regions
   */
  public function setRegions($regions)
  {
    $this->regions = $regions;
  }
  /**
   * @return string[]
   */
  public function getRegions()
  {
    return $this->regions;
  }
  /**
   * Optional. List of more granular sub-industries, if applicable and known.
   * Purpose: Provides finer-grained context for more specific threat matching.
   * Should align with GTI classifications if possible. Example:
   * ["Semiconductors", "Cloud Computing Services", "Investment Banking"]
   *
   * @param string[] $subIndustries
   */
  public function setSubIndustries($subIndustries)
  {
    $this->subIndustries = $subIndustries;
  }
  /**
   * @return string[]
   */
  public function getSubIndustries()
  {
    return $this->subIndustries;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EntityProfile::class, 'Google_Service_ThreatIntelligenceService_EntityProfile');
