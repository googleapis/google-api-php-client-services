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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1ScepProfile extends \Google\Collection
{
  protected $collection_key = 'subjectAltNames';
  /**
   * @var string
   */
  public $certificateTemplateName;
  /**
   * @var string
   */
  public $country;
  /**
   * @var string[]
   */
  public $keyUsages;
  /**
   * @var string
   */
  public $locality;
  /**
   * @var string
   */
  public $organization;
  /**
   * @var string[]
   */
  public $organizationalUnits;
  /**
   * @var string
   */
  public $state;
  protected $subjectAltNamesType = GoogleChromeManagementVersionsV1SubjectAltName::class;
  protected $subjectAltNamesDataType = 'array';
  /**
   * @var string
   */
  public $subjectCommonName;

  /**
   * @param string
   */
  public function setCertificateTemplateName($certificateTemplateName)
  {
    $this->certificateTemplateName = $certificateTemplateName;
  }
  /**
   * @return string
   */
  public function getCertificateTemplateName()
  {
    return $this->certificateTemplateName;
  }
  /**
   * @param string
   */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /**
   * @return string
   */
  public function getCountry()
  {
    return $this->country;
  }
  /**
   * @param string[]
   */
  public function setKeyUsages($keyUsages)
  {
    $this->keyUsages = $keyUsages;
  }
  /**
   * @return string[]
   */
  public function getKeyUsages()
  {
    return $this->keyUsages;
  }
  /**
   * @param string
   */
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  /**
   * @return string
   */
  public function getLocality()
  {
    return $this->locality;
  }
  /**
   * @param string
   */
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  /**
   * @return string
   */
  public function getOrganization()
  {
    return $this->organization;
  }
  /**
   * @param string[]
   */
  public function setOrganizationalUnits($organizationalUnits)
  {
    $this->organizationalUnits = $organizationalUnits;
  }
  /**
   * @return string[]
   */
  public function getOrganizationalUnits()
  {
    return $this->organizationalUnits;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param GoogleChromeManagementVersionsV1SubjectAltName[]
   */
  public function setSubjectAltNames($subjectAltNames)
  {
    $this->subjectAltNames = $subjectAltNames;
  }
  /**
   * @return GoogleChromeManagementVersionsV1SubjectAltName[]
   */
  public function getSubjectAltNames()
  {
    return $this->subjectAltNames;
  }
  /**
   * @param string
   */
  public function setSubjectCommonName($subjectCommonName)
  {
    $this->subjectCommonName = $subjectCommonName;
  }
  /**
   * @return string
   */
  public function getSubjectCommonName()
  {
    return $this->subjectCommonName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1ScepProfile::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ScepProfile');
