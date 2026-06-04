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

class GoogleAdsSearchads360V23CommonUrlCollection extends \Google\Collection
{
  protected $collection_key = 'finalUrls';
  /**
   * A list of possible final mobile URLs.
   *
   * @var string[]
   */
  public $finalMobileUrls;
  /**
   * A list of possible final URLs.
   *
   * @var string[]
   */
  public $finalUrls;
  /**
   * URL template for constructing a tracking URL.
   *
   * @var string
   */
  public $trackingUrlTemplate;
  /**
   * Unique identifier for this UrlCollection instance.
   *
   * @var string
   */
  public $urlCollectionId;

  /**
   * A list of possible final mobile URLs.
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
   * A list of possible final URLs.
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
   * Unique identifier for this UrlCollection instance.
   *
   * @param string $urlCollectionId
   */
  public function setUrlCollectionId($urlCollectionId)
  {
    $this->urlCollectionId = $urlCollectionId;
  }
  /**
   * @return string
   */
  public function getUrlCollectionId()
  {
    return $this->urlCollectionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonUrlCollection::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUrlCollection');
