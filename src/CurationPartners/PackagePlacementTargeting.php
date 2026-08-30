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

namespace Google\Service\CurationPartners;

class PackagePlacementTargeting extends \Google\Collection
{
  protected $collection_key = 'includedMobileAppCategoryTargeting';
  /**
   * Optional. The list of targeted mobile app categories.
   *
   * @var string[]
   */
  public $includedMobileAppCategoryTargeting;
  protected $mobileAppTargetingType = StringTargetingDimension::class;
  protected $mobileAppTargetingDataType = '';
  protected $uriTargetingType = StringTargetingDimension::class;
  protected $uriTargetingDataType = '';

  /**
   * Optional. The list of targeted mobile app categories.
   *
   * @param string[] $includedMobileAppCategoryTargeting
   */
  public function setIncludedMobileAppCategoryTargeting($includedMobileAppCategoryTargeting)
  {
    $this->includedMobileAppCategoryTargeting = $includedMobileAppCategoryTargeting;
  }
  /**
   * @return string[]
   */
  public function getIncludedMobileAppCategoryTargeting()
  {
    return $this->includedMobileAppCategoryTargeting;
  }
  /**
   * Optional. The list of targeted or excluded mobile application IDs that
   * publishers own. Currently, only Android and Apple apps are supported.
   * Android App ID, for example, com.google.android.apps.maps, can be found in
   * Google Play Store URL. iOS App ID (which is a number) can be found at the
   * end of iTunes store URL. First party mobile applications is either included
   * or excluded.
   *
   * @param StringTargetingDimension $mobileAppTargeting
   */
  public function setMobileAppTargeting(StringTargetingDimension $mobileAppTargeting)
  {
    $this->mobileAppTargeting = $mobileAppTargeting;
  }
  /**
   * @return StringTargetingDimension
   */
  public function getMobileAppTargeting()
  {
    return $this->mobileAppTargeting;
  }
  /**
   * Optional. The list of targeted or excluded URLs. The domains should have
   * the http/https stripped (for example, google.com), and can contain a max of
   * 5 paths per url.
   *
   * @param StringTargetingDimension $uriTargeting
   */
  public function setUriTargeting(StringTargetingDimension $uriTargeting)
  {
    $this->uriTargeting = $uriTargeting;
  }
  /**
   * @return StringTargetingDimension
   */
  public function getUriTargeting()
  {
    return $this->uriTargeting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PackagePlacementTargeting::class, 'Google_Service_CurationPartners_PackagePlacementTargeting');
