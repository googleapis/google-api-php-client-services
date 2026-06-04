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

class GoogleAdsSearchads360V23CommonDynamicEducationAsset extends \Google\Collection
{
  protected $collection_key = 'similarProgramIds';
  /**
   * School address which can be specified in one of the following formats. (1)
   * City, state, code, country, for example, Mountain View, CA, USA. (2) Full
   * address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
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
   * Contextual keywords, for example, Nursing certification, Health, Mountain
   * View.
   *
   * @var string[]
   */
  public $contextualKeywords;
  /**
   * Image url, for example, http://www.example.com/image.png. The image will
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
   * Location ID which can be any sequence of letters and digits and must be
   * unique.
   *
   * @var string
   */
  public $locationId;
  /**
   * Program description, for example, Nursing Certification.
   *
   * @var string
   */
  public $programDescription;
  /**
   * Required. Program ID which can be any sequence of letters and digits, and
   * must be unique and match the values of remarketing tag. Required.
   *
   * @var string
   */
  public $programId;
  /**
   * Required. Program name, for example, Nursing. Required.
   *
   * @var string
   */
  public $programName;
  /**
   * School name, for example, Mountain View School of Nursing.
   *
   * @var string
   */
  public $schoolName;
  /**
   * Similar program IDs.
   *
   * @var string[]
   */
  public $similarProgramIds;
  /**
   * Subject of study, for example, Health.
   *
   * @var string
   */
  public $subject;
  /**
   * Thumbnail image url, for example, http://www.example.com/thumbnail.png. The
   * thumbnail image will not be uploaded as image asset.
   *
   * @var string
   */
  public $thumbnailImageUrl;

  /**
   * School address which can be specified in one of the following formats. (1)
   * City, state, code, country, for example, Mountain View, CA, USA. (2) Full
   * address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
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
   * Contextual keywords, for example, Nursing certification, Health, Mountain
   * View.
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
   * Image url, for example, http://www.example.com/image.png. The image will
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
   * Location ID which can be any sequence of letters and digits and must be
   * unique.
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
   * Program description, for example, Nursing Certification.
   *
   * @param string $programDescription
   */
  public function setProgramDescription($programDescription)
  {
    $this->programDescription = $programDescription;
  }
  /**
   * @return string
   */
  public function getProgramDescription()
  {
    return $this->programDescription;
  }
  /**
   * Required. Program ID which can be any sequence of letters and digits, and
   * must be unique and match the values of remarketing tag. Required.
   *
   * @param string $programId
   */
  public function setProgramId($programId)
  {
    $this->programId = $programId;
  }
  /**
   * @return string
   */
  public function getProgramId()
  {
    return $this->programId;
  }
  /**
   * Required. Program name, for example, Nursing. Required.
   *
   * @param string $programName
   */
  public function setProgramName($programName)
  {
    $this->programName = $programName;
  }
  /**
   * @return string
   */
  public function getProgramName()
  {
    return $this->programName;
  }
  /**
   * School name, for example, Mountain View School of Nursing.
   *
   * @param string $schoolName
   */
  public function setSchoolName($schoolName)
  {
    $this->schoolName = $schoolName;
  }
  /**
   * @return string
   */
  public function getSchoolName()
  {
    return $this->schoolName;
  }
  /**
   * Similar program IDs.
   *
   * @param string[] $similarProgramIds
   */
  public function setSimilarProgramIds($similarProgramIds)
  {
    $this->similarProgramIds = $similarProgramIds;
  }
  /**
   * @return string[]
   */
  public function getSimilarProgramIds()
  {
    return $this->similarProgramIds;
  }
  /**
   * Subject of study, for example, Health.
   *
   * @param string $subject
   */
  public function setSubject($subject)
  {
    $this->subject = $subject;
  }
  /**
   * @return string
   */
  public function getSubject()
  {
    return $this->subject;
  }
  /**
   * Thumbnail image url, for example, http://www.example.com/thumbnail.png. The
   * thumbnail image will not be uploaded as image asset.
   *
   * @param string $thumbnailImageUrl
   */
  public function setThumbnailImageUrl($thumbnailImageUrl)
  {
    $this->thumbnailImageUrl = $thumbnailImageUrl;
  }
  /**
   * @return string
   */
  public function getThumbnailImageUrl()
  {
    return $this->thumbnailImageUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDynamicEducationAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDynamicEducationAsset');
