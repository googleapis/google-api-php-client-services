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

class GoogleAdsSearchads360V23CommonDemandGenProductAdInfo extends \Google\Model
{
  /**
   * First part of text that appears in the ad with the displayed URL.
   *
   * @var string
   */
  public $breadcrumb1;
  /**
   * Second part of text that appears in the ad with the displayed URL.
   *
   * @var string
   */
  public $breadcrumb2;
  protected $businessNameType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $businessNameDataType = '';
  protected $callToActionType = GoogleAdsSearchads360V23CommonAdCallToActionAsset::class;
  protected $callToActionDataType = '';
  protected $descriptionType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $descriptionDataType = '';
  protected $headlineType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $headlineDataType = '';
  protected $logoImageType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $logoImageDataType = '';

  /**
   * First part of text that appears in the ad with the displayed URL.
   *
   * @param string $breadcrumb1
   */
  public function setBreadcrumb1($breadcrumb1)
  {
    $this->breadcrumb1 = $breadcrumb1;
  }
  /**
   * @return string
   */
  public function getBreadcrumb1()
  {
    return $this->breadcrumb1;
  }
  /**
   * Second part of text that appears in the ad with the displayed URL.
   *
   * @param string $breadcrumb2
   */
  public function setBreadcrumb2($breadcrumb2)
  {
    $this->breadcrumb2 = $breadcrumb2;
  }
  /**
   * @return string
   */
  public function getBreadcrumb2()
  {
    return $this->breadcrumb2;
  }
  /**
   * Required. The advertiser/brand name.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset $businessName
   */
  public function setBusinessName(GoogleAdsSearchads360V23CommonAdTextAsset $businessName)
  {
    $this->businessName = $businessName;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset
   */
  public function getBusinessName()
  {
    return $this->businessName;
  }
  /**
   * Asset of type CallToActionAsset used for the "Call To Action" button.
   *
   * @param GoogleAdsSearchads360V23CommonAdCallToActionAsset $callToAction
   */
  public function setCallToAction(GoogleAdsSearchads360V23CommonAdCallToActionAsset $callToAction)
  {
    $this->callToAction = $callToAction;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdCallToActionAsset
   */
  public function getCallToAction()
  {
    return $this->callToAction;
  }
  /**
   * Required. Text asset used for the description.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset $description
   */
  public function setDescription(GoogleAdsSearchads360V23CommonAdTextAsset $description)
  {
    $this->description = $description;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. Text asset used for the short headline.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset $headline
   */
  public function setHeadline(GoogleAdsSearchads360V23CommonAdTextAsset $headline)
  {
    $this->headline = $headline;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset
   */
  public function getHeadline()
  {
    return $this->headline;
  }
  /**
   * Required. Logo image to be used in the ad. Valid image types are GIF, JPEG,
   * and PNG. The minimum size is 128x128 and the aspect ratio must be 1:1
   * (+-1%).
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset $logoImage
   */
  public function setLogoImage(GoogleAdsSearchads360V23CommonAdImageAsset $logoImage)
  {
    $this->logoImage = $logoImage;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset
   */
  public function getLogoImage()
  {
    return $this->logoImage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDemandGenProductAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDemandGenProductAdInfo');
