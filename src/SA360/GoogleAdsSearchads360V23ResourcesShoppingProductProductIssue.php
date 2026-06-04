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

class GoogleAdsSearchads360V23ResourcesShoppingProductProductIssue extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const ADS_SEVERITY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ADS_SEVERITY_UNKNOWN = 'UNKNOWN';
  /**
   * The issue limits the performance of the product in ads.
   */
  public const ADS_SEVERITY_WARNING = 'WARNING';
  /**
   * The issue prevents the product from showing in ads.
   */
  public const ADS_SEVERITY_ERROR = 'ERROR';
  protected $collection_key = 'affectedRegions';
  /**
   * Output only. The severity of the issue in Google Ads.
   *
   * @var string
   */
  public $adsSeverity;
  /**
   * Output only. List of upper-case two-letter ISO 3166-1 codes of the regions
   * affected by the issue. If empty, all regions are affected.
   *
   * @var string[]
   */
  public $affectedRegions;
  /**
   * Output only. The name of the product's attribute, if any, that triggered
   * the issue.
   *
   * @var string
   */
  public $attributeName;
  /**
   * Output only. The short description of the issue in English.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The detailed description of the issue in English.
   *
   * @var string
   */
  public $detail;
  /**
   * Output only. The URL of the Help Center article for the issue.
   *
   * @var string
   */
  public $documentation;
  /**
   * Output only. The error code that identifies the issue.
   *
   * @var string
   */
  public $errorCode;

  /**
   * Output only. The severity of the issue in Google Ads.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, WARNING, ERROR
   *
   * @param self::ADS_SEVERITY_* $adsSeverity
   */
  public function setAdsSeverity($adsSeverity)
  {
    $this->adsSeverity = $adsSeverity;
  }
  /**
   * @return self::ADS_SEVERITY_*
   */
  public function getAdsSeverity()
  {
    return $this->adsSeverity;
  }
  /**
   * Output only. List of upper-case two-letter ISO 3166-1 codes of the regions
   * affected by the issue. If empty, all regions are affected.
   *
   * @param string[] $affectedRegions
   */
  public function setAffectedRegions($affectedRegions)
  {
    $this->affectedRegions = $affectedRegions;
  }
  /**
   * @return string[]
   */
  public function getAffectedRegions()
  {
    return $this->affectedRegions;
  }
  /**
   * Output only. The name of the product's attribute, if any, that triggered
   * the issue.
   *
   * @param string $attributeName
   */
  public function setAttributeName($attributeName)
  {
    $this->attributeName = $attributeName;
  }
  /**
   * @return string
   */
  public function getAttributeName()
  {
    return $this->attributeName;
  }
  /**
   * Output only. The short description of the issue in English.
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
   * Output only. The detailed description of the issue in English.
   *
   * @param string $detail
   */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /**
   * @return string
   */
  public function getDetail()
  {
    return $this->detail;
  }
  /**
   * Output only. The URL of the Help Center article for the issue.
   *
   * @param string $documentation
   */
  public function setDocumentation($documentation)
  {
    $this->documentation = $documentation;
  }
  /**
   * @return string
   */
  public function getDocumentation()
  {
    return $this->documentation;
  }
  /**
   * Output only. The error code that identifies the issue.
   *
   * @param string $errorCode
   */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /**
   * @return string
   */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesShoppingProductProductIssue::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesShoppingProductProductIssue');
