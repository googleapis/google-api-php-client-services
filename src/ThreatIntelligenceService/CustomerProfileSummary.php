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

class CustomerProfileSummary extends \Google\Model
{
  protected $areaServedType = CustomerProfileCitedString::class;
  protected $areaServedDataType = '';
  protected $brandsType = CustomerProfileCitedString::class;
  protected $brandsDataType = '';
  protected $entityTypeType = CustomerProfileCitedString::class;
  protected $entityTypeDataType = '';
  protected $foundedType = CustomerProfileCitedString::class;
  protected $foundedDataType = '';
  protected $headquartersType = CustomerProfileCitedString::class;
  protected $headquartersDataType = '';
  protected $industryType = CustomerProfileCitedString::class;
  protected $industryDataType = '';
  protected $keyPeopleSummaryType = CustomerProfileCitedString::class;
  protected $keyPeopleSummaryDataType = '';
  protected $parentCompanyType = CustomerProfileCitedString::class;
  protected $parentCompanyDataType = '';
  protected $primaryWebsiteType = CustomerProfileCitedString::class;
  protected $primaryWebsiteDataType = '';
  protected $productsSummaryType = CustomerProfileCitedString::class;
  protected $productsSummaryDataType = '';
  protected $servicesSummaryType = CustomerProfileCitedString::class;
  protected $servicesSummaryDataType = '';
  protected $titleType = CustomerProfileCitedString::class;
  protected $titleDataType = '';

  /**
   * Optional. The area the customer serves.
   *
   * @param CustomerProfileCitedString $areaServed
   */
  public function setAreaServed(CustomerProfileCitedString $areaServed)
  {
    $this->areaServed = $areaServed;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getAreaServed()
  {
    return $this->areaServed;
  }
  /**
   * Optional. A narrative summary of brands.
   *
   * @param CustomerProfileCitedString $brands
   */
  public function setBrands(CustomerProfileCitedString $brands)
  {
    $this->brands = $brands;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getBrands()
  {
    return $this->brands;
  }
  /**
   * Optional. The entity type of the customer.
   *
   * @param CustomerProfileCitedString $entityType
   */
  public function setEntityType(CustomerProfileCitedString $entityType)
  {
    $this->entityType = $entityType;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getEntityType()
  {
    return $this->entityType;
  }
  /**
   * Optional. The date the customer was founded.
   *
   * @param CustomerProfileCitedString $founded
   */
  public function setFounded(CustomerProfileCitedString $founded)
  {
    $this->founded = $founded;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getFounded()
  {
    return $this->founded;
  }
  /**
   * Optional. The headquarters of the customer.
   *
   * @param CustomerProfileCitedString $headquarters
   */
  public function setHeadquarters(CustomerProfileCitedString $headquarters)
  {
    $this->headquarters = $headquarters;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getHeadquarters()
  {
    return $this->headquarters;
  }
  /**
   * Optional. The industry the customer is in.
   *
   * @param CustomerProfileCitedString $industry
   */
  public function setIndustry(CustomerProfileCitedString $industry)
  {
    $this->industry = $industry;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getIndustry()
  {
    return $this->industry;
  }
  /**
   * Optional. A narrative summary of key people.
   *
   * @param CustomerProfileCitedString $keyPeopleSummary
   */
  public function setKeyPeopleSummary(CustomerProfileCitedString $keyPeopleSummary)
  {
    $this->keyPeopleSummary = $keyPeopleSummary;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getKeyPeopleSummary()
  {
    return $this->keyPeopleSummary;
  }
  /**
   * Optional. The parent company of the customer.
   *
   * @param CustomerProfileCitedString $parentCompany
   */
  public function setParentCompany(CustomerProfileCitedString $parentCompany)
  {
    $this->parentCompany = $parentCompany;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getParentCompany()
  {
    return $this->parentCompany;
  }
  /**
   * Optional. The primary website of the customer.
   *
   * @param CustomerProfileCitedString $primaryWebsite
   */
  public function setPrimaryWebsite(CustomerProfileCitedString $primaryWebsite)
  {
    $this->primaryWebsite = $primaryWebsite;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getPrimaryWebsite()
  {
    return $this->primaryWebsite;
  }
  /**
   * Optional. A narrative summary of products.
   *
   * @param CustomerProfileCitedString $productsSummary
   */
  public function setProductsSummary(CustomerProfileCitedString $productsSummary)
  {
    $this->productsSummary = $productsSummary;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getProductsSummary()
  {
    return $this->productsSummary;
  }
  /**
   * Optional. A narrative summary of services.
   *
   * @param CustomerProfileCitedString $servicesSummary
   */
  public function setServicesSummary(CustomerProfileCitedString $servicesSummary)
  {
    $this->servicesSummary = $servicesSummary;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getServicesSummary()
  {
    return $this->servicesSummary;
  }
  /**
   * Optional. The official name of the customer.
   *
   * @param CustomerProfileCitedString $title
   */
  public function setTitle(CustomerProfileCitedString $title)
  {
    $this->title = $title;
  }
  /**
   * @return CustomerProfileCitedString
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerProfileSummary::class, 'Google_Service_ThreatIntelligenceService_CustomerProfileSummary');
