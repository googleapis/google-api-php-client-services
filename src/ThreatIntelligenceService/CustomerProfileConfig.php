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

class CustomerProfileConfig extends \Google\Collection
{
  protected $collection_key = 'webPresences';
  protected $citationsType = CustomerProfileCitation::class;
  protected $citationsDataType = 'array';
  protected $contactInfoType = CustomerProfileContactInfo::class;
  protected $contactInfoDataType = 'array';
  protected $executivesType = CustomerProfilePerson::class;
  protected $executivesDataType = 'array';
  protected $industriesType = CustomerProfileIndustry::class;
  protected $industriesDataType = 'array';
  protected $locationsType = CustomerProfileLocation::class;
  protected $locationsDataType = 'array';
  /**
   * Required. The name of the organization.
   *
   * @var string
   */
  public $org;
  /**
   * Optional. A summary of the organization.
   *
   * @var string
   */
  public $orgSummary;
  protected $parentCompaniesType = CustomerProfileCompany::class;
  protected $parentCompaniesDataType = 'array';
  protected $productsType = CustomerProfileProduct::class;
  protected $productsDataType = 'array';
  protected $securityConsiderationsType = CustomerProfileSecurityConsiderations::class;
  protected $securityConsiderationsDataType = '';
  protected $summaryType = CustomerProfileSummary::class;
  protected $summaryDataType = '';
  /**
   * Optional. Technology presence of the organization.
   *
   * @var string
   */
  public $technologyPresence;
  protected $webPresencesType = CustomerProfileWebPresence::class;
  protected $webPresencesDataType = 'array';

  /**
   * Optional. Citations for the organization profile.
   *
   * @param CustomerProfileCitation[] $citations
   */
  public function setCitations($citations)
  {
    $this->citations = $citations;
  }
  /**
   * @return CustomerProfileCitation[]
   */
  public function getCitations()
  {
    return $this->citations;
  }
  /**
   * Optional. Contact information for the organization.
   *
   * @param CustomerProfileContactInfo[] $contactInfo
   */
  public function setContactInfo($contactInfo)
  {
    $this->contactInfo = $contactInfo;
  }
  /**
   * @return CustomerProfileContactInfo[]
   */
  public function getContactInfo()
  {
    return $this->contactInfo;
  }
  /**
   * Optional. Executives of the organization.
   *
   * @param CustomerProfilePerson[] $executives
   */
  public function setExecutives($executives)
  {
    $this->executives = $executives;
  }
  /**
   * @return CustomerProfilePerson[]
   */
  public function getExecutives()
  {
    return $this->executives;
  }
  /**
   * Optional. The industries the organization is involved in.
   *
   * @param CustomerProfileIndustry[] $industries
   */
  public function setIndustries($industries)
  {
    $this->industries = $industries;
  }
  /**
   * @return CustomerProfileIndustry[]
   */
  public function getIndustries()
  {
    return $this->industries;
  }
  /**
   * Optional. Locations the organization is present or conducts business in.
   *
   * @param CustomerProfileLocation[] $locations
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return CustomerProfileLocation[]
   */
  public function getLocations()
  {
    return $this->locations;
  }
  /**
   * Required. The name of the organization.
   *
   * @param string $org
   */
  public function setOrg($org)
  {
    $this->org = $org;
  }
  /**
   * @return string
   */
  public function getOrg()
  {
    return $this->org;
  }
  /**
   * Optional. A summary of the organization.
   *
   * @param string $orgSummary
   */
  public function setOrgSummary($orgSummary)
  {
    $this->orgSummary = $orgSummary;
  }
  /**
   * @return string
   */
  public function getOrgSummary()
  {
    return $this->orgSummary;
  }
  /**
   * Optional. The parent companies of the organization.
   *
   * @param CustomerProfileCompany[] $parentCompanies
   */
  public function setParentCompanies($parentCompanies)
  {
    $this->parentCompanies = $parentCompanies;
  }
  /**
   * @return CustomerProfileCompany[]
   */
  public function getParentCompanies()
  {
    return $this->parentCompanies;
  }
  /**
   * Optional. Product information for the organization.
   *
   * @param CustomerProfileProduct[] $products
   */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /**
   * @return CustomerProfileProduct[]
   */
  public function getProducts()
  {
    return $this->products;
  }
  /**
   * Optional. Security considerations for the organization.
   *
   * @param CustomerProfileSecurityConsiderations $securityConsiderations
   */
  public function setSecurityConsiderations(CustomerProfileSecurityConsiderations $securityConsiderations)
  {
    $this->securityConsiderations = $securityConsiderations;
  }
  /**
   * @return CustomerProfileSecurityConsiderations
   */
  public function getSecurityConsiderations()
  {
    return $this->securityConsiderations;
  }
  /**
   * Optional. A summarized version of the customer profile.
   *
   * @param CustomerProfileSummary $summary
   */
  public function setSummary(CustomerProfileSummary $summary)
  {
    $this->summary = $summary;
  }
  /**
   * @return CustomerProfileSummary
   */
  public function getSummary()
  {
    return $this->summary;
  }
  /**
   * Optional. Technology presence of the organization.
   *
   * @param string $technologyPresence
   */
  public function setTechnologyPresence($technologyPresence)
  {
    $this->technologyPresence = $technologyPresence;
  }
  /**
   * @return string
   */
  public function getTechnologyPresence()
  {
    return $this->technologyPresence;
  }
  /**
   * Optional. Web presence of the organization.
   *
   * @param CustomerProfileWebPresence[] $webPresences
   */
  public function setWebPresences($webPresences)
  {
    $this->webPresences = $webPresences;
  }
  /**
   * @return CustomerProfileWebPresence[]
   */
  public function getWebPresences()
  {
    return $this->webPresences;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerProfileConfig::class, 'Google_Service_ThreatIntelligenceService_CustomerProfileConfig');
