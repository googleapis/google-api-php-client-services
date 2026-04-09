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

namespace Google\Service\DisplayVideo;

class DemandGenProductAd extends \Google\Model
{
  /**
   * Not specified or unknown.
   */
  public const CALL_TO_ACTION_CALL_TO_ACTION_UNSPECIFIED = 'CALL_TO_ACTION_UNSPECIFIED';
  /**
   * Automated.
   */
  public const CALL_TO_ACTION_AUTOMATED = 'AUTOMATED';
  /**
   * Learn more.
   */
  public const CALL_TO_ACTION_LEARN_MORE = 'LEARN_MORE';
  /**
   * Get quote.
   */
  public const CALL_TO_ACTION_GET_QUOTE = 'GET_QUOTE';
  /**
   * Apply now.
   */
  public const CALL_TO_ACTION_APPLY_NOW = 'APPLY_NOW';
  /**
   * Sign up.
   */
  public const CALL_TO_ACTION_SIGN_UP = 'SIGN_UP';
  /**
   * Contact us.
   */
  public const CALL_TO_ACTION_CONTACT_US = 'CONTACT_US';
  /**
   * Subscribe.
   */
  public const CALL_TO_ACTION_SUBSCRIBE = 'SUBSCRIBE';
  /**
   * Download.
   */
  public const CALL_TO_ACTION_DOWNLOAD = 'DOWNLOAD';
  /**
   * Book now.
   */
  public const CALL_TO_ACTION_BOOK_NOW = 'BOOK_NOW';
  /**
   * Shop now.
   */
  public const CALL_TO_ACTION_SHOP_NOW = 'SHOP_NOW';
  /**
   * Buy now.
   */
  public const CALL_TO_ACTION_BUY_NOW = 'BUY_NOW';
  /**
   * Donate now.
   */
  public const CALL_TO_ACTION_DONATE_NOW = 'DONATE_NOW';
  /**
   * Order now.
   */
  public const CALL_TO_ACTION_ORDER_NOW = 'ORDER_NOW';
  /**
   * Play now.
   */
  public const CALL_TO_ACTION_PLAY_NOW = 'PLAY_NOW';
  /**
   * See more.
   */
  public const CALL_TO_ACTION_SEE_MORE = 'SEE_MORE';
  /**
   * Start now.
   */
  public const CALL_TO_ACTION_START_NOW = 'START_NOW';
  /**
   * Visit site.
   */
  public const CALL_TO_ACTION_VISIT_SITE = 'VISIT_SITE';
  /**
   * Watch now.
   */
  public const CALL_TO_ACTION_WATCH_NOW = 'WATCH_NOW';
  /**
   * Required. The business name shown on the ad.
   *
   * @var string
   */
  public $businessName;
  /**
   * Required. The call-to-action button shown on the ad. The supported values
   * are: * `AUTOMATED` * `APPLY_NOW` * `BOOK_NOW` * `CONTACT_US` * `DOWNLOAD` *
   * `GET_QUOTE` * `LEARN_MORE` * `SHOP_NOW` * `SIGN_UP` * `SUBSCRIBE`
   *
   * @var string
   */
  public $callToAction;
  /**
   * Optional. The custom parameters and accompanying values to add to the
   * tracking URL.
   *
   * @var string[]
   */
  public $customParameters;
  /**
   * Required. The description of the ad.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. The first piece after the domain in the display URL.
   *
   * @var string
   */
  public $displayUrlBreadcrumb1;
  /**
   * Optional. The second piece after the domain in the display URL.
   *
   * @var string
   */
  public $displayUrlBreadcrumb2;
  /**
   * Required. The URL address of the webpage that people reach after they click
   * the ad.
   *
   * @var string
   */
  public $finalUrl;
  /**
   * Optional. The suffix to append to landing page URLs.
   *
   * @var string
   */
  public $finalUrlSuffix;
  /**
   * Required. The headline of the ad.
   *
   * @var string
   */
  public $headline;
  protected $logoType = ImageAsset::class;
  protected $logoDataType = '';
  /**
   * Output only. The URL address loaded in the background for tracking
   * purposes.
   *
   * @var string
   */
  public $trackingUrl;
  /**
   * Optional. The tracking URL specified by the user manually.
   *
   * @var string
   */
  public $userSpecifiedTrackingUrl;

  /**
   * Required. The business name shown on the ad.
   *
   * @param string $businessName
   */
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  /**
   * @return string
   */
  public function getBusinessName()
  {
    return $this->businessName;
  }
  /**
   * Required. The call-to-action button shown on the ad. The supported values
   * are: * `AUTOMATED` * `APPLY_NOW` * `BOOK_NOW` * `CONTACT_US` * `DOWNLOAD` *
   * `GET_QUOTE` * `LEARN_MORE` * `SHOP_NOW` * `SIGN_UP` * `SUBSCRIBE`
   *
   * Accepted values: CALL_TO_ACTION_UNSPECIFIED, AUTOMATED, LEARN_MORE,
   * GET_QUOTE, APPLY_NOW, SIGN_UP, CONTACT_US, SUBSCRIBE, DOWNLOAD, BOOK_NOW,
   * SHOP_NOW, BUY_NOW, DONATE_NOW, ORDER_NOW, PLAY_NOW, SEE_MORE, START_NOW,
   * VISIT_SITE, WATCH_NOW
   *
   * @param self::CALL_TO_ACTION_* $callToAction
   */
  public function setCallToAction($callToAction)
  {
    $this->callToAction = $callToAction;
  }
  /**
   * @return self::CALL_TO_ACTION_*
   */
  public function getCallToAction()
  {
    return $this->callToAction;
  }
  /**
   * Optional. The custom parameters and accompanying values to add to the
   * tracking URL.
   *
   * @param string[] $customParameters
   */
  public function setCustomParameters($customParameters)
  {
    $this->customParameters = $customParameters;
  }
  /**
   * @return string[]
   */
  public function getCustomParameters()
  {
    return $this->customParameters;
  }
  /**
   * Required. The description of the ad.
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
   * Optional. The first piece after the domain in the display URL.
   *
   * @param string $displayUrlBreadcrumb1
   */
  public function setDisplayUrlBreadcrumb1($displayUrlBreadcrumb1)
  {
    $this->displayUrlBreadcrumb1 = $displayUrlBreadcrumb1;
  }
  /**
   * @return string
   */
  public function getDisplayUrlBreadcrumb1()
  {
    return $this->displayUrlBreadcrumb1;
  }
  /**
   * Optional. The second piece after the domain in the display URL.
   *
   * @param string $displayUrlBreadcrumb2
   */
  public function setDisplayUrlBreadcrumb2($displayUrlBreadcrumb2)
  {
    $this->displayUrlBreadcrumb2 = $displayUrlBreadcrumb2;
  }
  /**
   * @return string
   */
  public function getDisplayUrlBreadcrumb2()
  {
    return $this->displayUrlBreadcrumb2;
  }
  /**
   * Required. The URL address of the webpage that people reach after they click
   * the ad.
   *
   * @param string $finalUrl
   */
  public function setFinalUrl($finalUrl)
  {
    $this->finalUrl = $finalUrl;
  }
  /**
   * @return string
   */
  public function getFinalUrl()
  {
    return $this->finalUrl;
  }
  /**
   * Optional. The suffix to append to landing page URLs.
   *
   * @param string $finalUrlSuffix
   */
  public function setFinalUrlSuffix($finalUrlSuffix)
  {
    $this->finalUrlSuffix = $finalUrlSuffix;
  }
  /**
   * @return string
   */
  public function getFinalUrlSuffix()
  {
    return $this->finalUrlSuffix;
  }
  /**
   * Required. The headline of the ad.
   *
   * @param string $headline
   */
  public function setHeadline($headline)
  {
    $this->headline = $headline;
  }
  /**
   * @return string
   */
  public function getHeadline()
  {
    return $this->headline;
  }
  /**
   * Required. The logo image used by this ad.
   *
   * @param ImageAsset $logo
   */
  public function setLogo(ImageAsset $logo)
  {
    $this->logo = $logo;
  }
  /**
   * @return ImageAsset
   */
  public function getLogo()
  {
    return $this->logo;
  }
  /**
   * Output only. The URL address loaded in the background for tracking
   * purposes.
   *
   * @param string $trackingUrl
   */
  public function setTrackingUrl($trackingUrl)
  {
    $this->trackingUrl = $trackingUrl;
  }
  /**
   * @return string
   */
  public function getTrackingUrl()
  {
    return $this->trackingUrl;
  }
  /**
   * Optional. The tracking URL specified by the user manually.
   *
   * @param string $userSpecifiedTrackingUrl
   */
  public function setUserSpecifiedTrackingUrl($userSpecifiedTrackingUrl)
  {
    $this->userSpecifiedTrackingUrl = $userSpecifiedTrackingUrl;
  }
  /**
   * @return string
   */
  public function getUserSpecifiedTrackingUrl()
  {
    return $this->userSpecifiedTrackingUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DemandGenProductAd::class, 'Google_Service_DisplayVideo_DemandGenProductAd');
