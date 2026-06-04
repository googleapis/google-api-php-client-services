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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesLocalServicesEmployee extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Employee is not removed, and employee status is active.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Employee is removed. Used to delete an employee from the business.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Represents the owner of the business.
   */
  public const TYPE_BUSINESS_OWNER = 'BUSINESS_OWNER';
  /**
   * Represents an employee of the business.
   */
  public const TYPE_EMPLOYEE = 'EMPLOYEE';
  protected $collection_key = 'universityDegrees';
  /**
   * Output only. Category of the employee. A list of Local Services category
   * IDs can be found at https://developers.google.com/google-
   * ads/api/data/codes-formats#local_services_ids.
   *
   * @var string[]
   */
  public $categoryIds;
  /**
   * Output only. Timestamp of employee creation. The format is "YYYY-MM-DD
   * HH:MM:SS" in the Google Ads account's timezone. Examples: "2018-03-05
   * 09:15:00" or "2018-02-01 14:34:30"
   *
   * @var string
   */
  public $creationDateTime;
  /**
   * Output only. Email address of the employee.
   *
   * @var string
   */
  public $emailAddress;
  protected $fellowshipsType = GoogleAdsSearchads360V23ResourcesFellowship::class;
  protected $fellowshipsDataType = 'array';
  /**
   * Output only. First name of the employee.
   *
   * @var string
   */
  public $firstName;
  /**
   * Output only. The ID of the employee.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. Job title for this employee, such as "Senior partner" in legal
   * verticals.
   *
   * @var string
   */
  public $jobTitle;
  /**
   * Output only. Languages that the employee speaks, represented as language
   * tags from https://developers.google.com/admin-sdk/directory/v1/languages
   *
   * @var string[]
   */
  public $languagesSpoken;
  /**
   * Output only. Last name of the employee.
   *
   * @var string
   */
  public $lastName;
  /**
   * Output only. Middle name of the employee.
   *
   * @var string
   */
  public $middleName;
  /**
   * Output only. NPI id associated with the employee.
   *
   * @var string
   */
  public $nationalProviderIdNumber;
  protected $residenciesType = GoogleAdsSearchads360V23ResourcesResidency::class;
  protected $residenciesDataType = 'array';
  /**
   * Immutable. The resource name of the Local Services Verification. Local
   * Services Verification resource names have the form:
   * `customers/{customer_id}/localServicesEmployees/{gls_employee_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Employee status, such as DELETED or ENABLED.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. Employee type.
   *
   * @var string
   */
  public $type;
  protected $universityDegreesType = GoogleAdsSearchads360V23ResourcesUniversityDegree::class;
  protected $universityDegreesDataType = 'array';
  /**
   * Output only. The year that this employee started practicing in this field.
   *
   * @var int
   */
  public $yearStartedPracticing;

  /**
   * Output only. Category of the employee. A list of Local Services category
   * IDs can be found at https://developers.google.com/google-
   * ads/api/data/codes-formats#local_services_ids.
   *
   * @param string[] $categoryIds
   */
  public function setCategoryIds($categoryIds)
  {
    $this->categoryIds = $categoryIds;
  }
  /**
   * @return string[]
   */
  public function getCategoryIds()
  {
    return $this->categoryIds;
  }
  /**
   * Output only. Timestamp of employee creation. The format is "YYYY-MM-DD
   * HH:MM:SS" in the Google Ads account's timezone. Examples: "2018-03-05
   * 09:15:00" or "2018-02-01 14:34:30"
   *
   * @param string $creationDateTime
   */
  public function setCreationDateTime($creationDateTime)
  {
    $this->creationDateTime = $creationDateTime;
  }
  /**
   * @return string
   */
  public function getCreationDateTime()
  {
    return $this->creationDateTime;
  }
  /**
   * Output only. Email address of the employee.
   *
   * @param string $emailAddress
   */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /**
   * @return string
   */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /**
   * Output only. The institutions where the employee has completed their
   * fellowship.
   *
   * @param GoogleAdsSearchads360V23ResourcesFellowship[] $fellowships
   */
  public function setFellowships($fellowships)
  {
    $this->fellowships = $fellowships;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesFellowship[]
   */
  public function getFellowships()
  {
    return $this->fellowships;
  }
  /**
   * Output only. First name of the employee.
   *
   * @param string $firstName
   */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }
  /**
   * @return string
   */
  public function getFirstName()
  {
    return $this->firstName;
  }
  /**
   * Output only. The ID of the employee.
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
   * Output only. Job title for this employee, such as "Senior partner" in legal
   * verticals.
   *
   * @param string $jobTitle
   */
  public function setJobTitle($jobTitle)
  {
    $this->jobTitle = $jobTitle;
  }
  /**
   * @return string
   */
  public function getJobTitle()
  {
    return $this->jobTitle;
  }
  /**
   * Output only. Languages that the employee speaks, represented as language
   * tags from https://developers.google.com/admin-sdk/directory/v1/languages
   *
   * @param string[] $languagesSpoken
   */
  public function setLanguagesSpoken($languagesSpoken)
  {
    $this->languagesSpoken = $languagesSpoken;
  }
  /**
   * @return string[]
   */
  public function getLanguagesSpoken()
  {
    return $this->languagesSpoken;
  }
  /**
   * Output only. Last name of the employee.
   *
   * @param string $lastName
   */
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }
  /**
   * @return string
   */
  public function getLastName()
  {
    return $this->lastName;
  }
  /**
   * Output only. Middle name of the employee.
   *
   * @param string $middleName
   */
  public function setMiddleName($middleName)
  {
    $this->middleName = $middleName;
  }
  /**
   * @return string
   */
  public function getMiddleName()
  {
    return $this->middleName;
  }
  /**
   * Output only. NPI id associated with the employee.
   *
   * @param string $nationalProviderIdNumber
   */
  public function setNationalProviderIdNumber($nationalProviderIdNumber)
  {
    $this->nationalProviderIdNumber = $nationalProviderIdNumber;
  }
  /**
   * @return string
   */
  public function getNationalProviderIdNumber()
  {
    return $this->nationalProviderIdNumber;
  }
  /**
   * Output only. The institutions where the employee has completed their
   * residency.
   *
   * @param GoogleAdsSearchads360V23ResourcesResidency[] $residencies
   */
  public function setResidencies($residencies)
  {
    $this->residencies = $residencies;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesResidency[]
   */
  public function getResidencies()
  {
    return $this->residencies;
  }
  /**
   * Immutable. The resource name of the Local Services Verification. Local
   * Services Verification resource names have the form:
   * `customers/{customer_id}/localServicesEmployees/{gls_employee_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. Employee status, such as DELETED or ENABLED.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, REMOVED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Output only. Employee type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BUSINESS_OWNER, EMPLOYEE
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
  /**
   * Output only. A list of degrees this employee has obtained, and wants to
   * feature.
   *
   * @param GoogleAdsSearchads360V23ResourcesUniversityDegree[] $universityDegrees
   */
  public function setUniversityDegrees($universityDegrees)
  {
    $this->universityDegrees = $universityDegrees;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesUniversityDegree[]
   */
  public function getUniversityDegrees()
  {
    return $this->universityDegrees;
  }
  /**
   * Output only. The year that this employee started practicing in this field.
   *
   * @param int $yearStartedPracticing
   */
  public function setYearStartedPracticing($yearStartedPracticing)
  {
    $this->yearStartedPracticing = $yearStartedPracticing;
  }
  /**
   * @return int
   */
  public function getYearStartedPracticing()
  {
    return $this->yearStartedPracticing;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesLocalServicesEmployee::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesLocalServicesEmployee');
