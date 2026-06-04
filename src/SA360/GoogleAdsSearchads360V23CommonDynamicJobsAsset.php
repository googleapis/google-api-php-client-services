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

class GoogleAdsSearchads360V23CommonDynamicJobsAsset extends \Google\Collection
{
  protected $collection_key = 'similarJobIds';
  /**
   * Address which can be specified in one of the following formats. (1) City,
   * state, code, country, for example, Mountain View, CA, USA. (2) Full
   * address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403.
   *
   * @var string
   */
  public $address;
  /**
   * Android deep link, for example, android-
   * app://com.example.android/http/example.com/gizmos?1234.
   *
   * @var string
   */
  public $androidAppLink;
  /**
   * Contextual keywords, for example, Software engineering job.
   *
   * @var string[]
   */
  public $contextualKeywords;
  /**
   * Description, for example, Apply your technical skills.
   *
   * @var string
   */
  public $description;
  /**
   * Image URL, for example, http://www.example.com/image.png. The image will
   * not be uploaded as image asset.
   *
   * @var string
   */
  public $imageUrl;
  /**
   * iOS deep link, for example, exampleApp://content/page.
   *
   * @var string
   */
  public $iosAppLink;
  /**
   * iOS app store ID. This is used to check if the user has the app installed
   * on their device before deep linking. If this field is set, then the
   * ios_app_link field must also be present.
   *
   * @var string
   */
  public $iosAppStoreId;
  /**
   * Job category, for example, Technical.
   *
   * @var string
   */
  public $jobCategory;
  /**
   * Required. Job ID which can be any sequence of letters and digits, and must
   * be unique and match the values of remarketing tag. Required.
   *
   * @var string
   */
  public $jobId;
  /**
   * Job subtitle, for example, Level II.
   *
   * @var string
   */
  public $jobSubtitle;
  /**
   * Required. Job title, for example, Software engineer. Required.
   *
   * @var string
   */
  public $jobTitle;
  /**
   * Location ID which can be any sequence of letters and digits. The ID
   * sequence (job ID + location ID) must be unique.
   *
   * @var string
   */
  public $locationId;
  /**
   * Salary, for example, $100,000.
   *
   * @var string
   */
  public $salary;
  /**
   * Similar job IDs, for example, 1275.
   *
   * @var string[]
   */
  public $similarJobIds;

  /**
   * Address which can be specified in one of the following formats. (1) City,
   * state, code, country, for example, Mountain View, CA, USA. (2) Full
   * address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403.
   *
   * @param string $address
   */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /**
   * @return string
   */
  public function getAddress()
  {
    return $this->address;
  }
  /**
   * Android deep link, for example, android-
   * app://com.example.android/http/example.com/gizmos?1234.
   *
   * @param string $androidAppLink
   */
  public function setAndroidAppLink($androidAppLink)
  {
    $this->androidAppLink = $androidAppLink;
  }
  /**
   * @return string
   */
  public function getAndroidAppLink()
  {
    return $this->androidAppLink;
  }
  /**
   * Contextual keywords, for example, Software engineering job.
   *
   * @param string[] $contextualKeywords
   */
  public function setContextualKeywords($contextualKeywords)
  {
    $this->contextualKeywords = $contextualKeywords;
  }
  /**
   * @return string[]
   */
  public function getContextualKeywords()
  {
    return $this->contextualKeywords;
  }
  /**
   * Description, for example, Apply your technical skills.
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
   * Image URL, for example, http://www.example.com/image.png. The image will
   * not be uploaded as image asset.
   *
   * @param string $imageUrl
   */
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  /**
   * @return string
   */
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  /**
   * iOS deep link, for example, exampleApp://content/page.
   *
   * @param string $iosAppLink
   */
  public function setIosAppLink($iosAppLink)
  {
    $this->iosAppLink = $iosAppLink;
  }
  /**
   * @return string
   */
  public function getIosAppLink()
  {
    return $this->iosAppLink;
  }
  /**
   * iOS app store ID. This is used to check if the user has the app installed
   * on their device before deep linking. If this field is set, then the
   * ios_app_link field must also be present.
   *
   * @param string $iosAppStoreId
   */
  public function setIosAppStoreId($iosAppStoreId)
  {
    $this->iosAppStoreId = $iosAppStoreId;
  }
  /**
   * @return string
   */
  public function getIosAppStoreId()
  {
    return $this->iosAppStoreId;
  }
  /**
   * Job category, for example, Technical.
   *
   * @param string $jobCategory
   */
  public function setJobCategory($jobCategory)
  {
    $this->jobCategory = $jobCategory;
  }
  /**
   * @return string
   */
  public function getJobCategory()
  {
    return $this->jobCategory;
  }
  /**
   * Required. Job ID which can be any sequence of letters and digits, and must
   * be unique and match the values of remarketing tag. Required.
   *
   * @param string $jobId
   */
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /**
   * @return string
   */
  public function getJobId()
  {
    return $this->jobId;
  }
  /**
   * Job subtitle, for example, Level II.
   *
   * @param string $jobSubtitle
   */
  public function setJobSubtitle($jobSubtitle)
  {
    $this->jobSubtitle = $jobSubtitle;
  }
  /**
   * @return string
   */
  public function getJobSubtitle()
  {
    return $this->jobSubtitle;
  }
  /**
   * Required. Job title, for example, Software engineer. Required.
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
   * Location ID which can be any sequence of letters and digits. The ID
   * sequence (job ID + location ID) must be unique.
   *
   * @param string $locationId
   */
  public function setLocationId($locationId)
  {
    $this->locationId = $locationId;
  }
  /**
   * @return string
   */
  public function getLocationId()
  {
    return $this->locationId;
  }
  /**
   * Salary, for example, $100,000.
   *
   * @param string $salary
   */
  public function setSalary($salary)
  {
    $this->salary = $salary;
  }
  /**
   * @return string
   */
  public function getSalary()
  {
    return $this->salary;
  }
  /**
   * Similar job IDs, for example, 1275.
   *
   * @param string[] $similarJobIds
   */
  public function setSimilarJobIds($similarJobIds)
  {
    $this->similarJobIds = $similarJobIds;
  }
  /**
   * @return string[]
   */
  public function getSimilarJobIds()
  {
    return $this->similarJobIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDynamicJobsAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDynamicJobsAsset');
