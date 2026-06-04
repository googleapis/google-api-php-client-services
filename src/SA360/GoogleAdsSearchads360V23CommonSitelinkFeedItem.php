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

class GoogleAdsSearchads360V23CommonSitelinkFeedItem extends \Google\Collection
{
  protected $collection_key = 'urlCustomParameters';
  /**
   * A list of possible final mobile URLs after all cross domain redirects.
   *
   * @var string[]
   */
  public $finalMobileUrls;
  /**
   * Final URL suffix to be appended to landing page URLs served with parallel
   * tracking.
   *
   * @var string
   */
  public $finalUrlSuffix;
  /**
   * A list of possible final URLs after all cross domain redirects.
   *
   * @var string[]
   */
  public $finalUrls;
  /**
   * First line of the description for the sitelink. If this value is set, line2
   * must also be set. The length of this string should be between 0 and 35,
   * inclusive.
   *
   * @var string
   */
  public $line1;
  /**
   * Second line of the description for the sitelink. If this value is set,
   * line1 must also be set. The length of this string should be between 0 and
   * 35, inclusive.
   *
   * @var string
   */
  public $line2;
  /**
   * URL display text for the sitelink. The length of this string should be
   * between 1 and 25, inclusive.
   *
   * @var string
   */
  public $linkText;
  /**
   * URL template for constructing a tracking URL.
   *
   * @var string
   */
  public $trackingUrlTemplate;
  protected $urlCustomParametersType = GoogleAdsSearchads360V23CommonCustomParameter::class;
  protected $urlCustomParametersDataType = 'array';

  /**
   * A list of possible final mobile URLs after all cross domain redirects.
   *
   * @param string[] $finalMobileUrls
   */
  public function setFinalMobileUrls($finalMobileUrls)
  {
    $this->finalMobileUrls = $finalMobileUrls;
  }
  /**
   * @return string[]
   */
  public function getFinalMobileUrls()
  {
    return $this->finalMobileUrls;
  }
  /**
   * Final URL suffix to be appended to landing page URLs served with parallel
   * tracking.
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
   * A list of possible final URLs after all cross domain redirects.
   *
   * @param string[] $finalUrls
   */
  public function setFinalUrls($finalUrls)
  {
    $this->finalUrls = $finalUrls;
  }
  /**
   * @return string[]
   */
  public function getFinalUrls()
  {
    return $this->finalUrls;
  }
  /**
   * First line of the description for the sitelink. If this value is set, line2
   * must also be set. The length of this string should be between 0 and 35,
   * inclusive.
   *
   * @param string $line1
   */
  public function setLine1($line1)
  {
    $this->line1 = $line1;
  }
  /**
   * @return string
   */
  public function getLine1()
  {
    return $this->line1;
  }
  /**
   * Second line of the description for the sitelink. If this value is set,
   * line1 must also be set. The length of this string should be between 0 and
   * 35, inclusive.
   *
   * @param string $line2
   */
  public function setLine2($line2)
  {
    $this->line2 = $line2;
  }
  /**
   * @return string
   */
  public function getLine2()
  {
    return $this->line2;
  }
  /**
   * URL display text for the sitelink. The length of this string should be
   * between 1 and 25, inclusive.
   *
   * @param string $linkText
   */
  public function setLinkText($linkText)
  {
    $this->linkText = $linkText;
  }
  /**
   * @return string
   */
  public function getLinkText()
  {
    return $this->linkText;
  }
  /**
   * URL template for constructing a tracking URL.
   *
   * @param string $trackingUrlTemplate
   */
  public function setTrackingUrlTemplate($trackingUrlTemplate)
  {
    $this->trackingUrlTemplate = $trackingUrlTemplate;
  }
  /**
   * @return string
   */
  public function getTrackingUrlTemplate()
  {
    return $this->trackingUrlTemplate;
  }
  /**
   * A list of mappings to be used for substituting URL custom parameter tags in
   * the tracking_url_template, final_urls, and/or final_mobile_urls.
   *
   * @param GoogleAdsSearchads360V23CommonCustomParameter[] $urlCustomParameters
   */
  public function setUrlCustomParameters($urlCustomParameters)
  {
    $this->urlCustomParameters = $urlCustomParameters;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomParameter[]
   */
  public function getUrlCustomParameters()
  {
    return $this->urlCustomParameters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonSitelinkFeedItem::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonSitelinkFeedItem');
