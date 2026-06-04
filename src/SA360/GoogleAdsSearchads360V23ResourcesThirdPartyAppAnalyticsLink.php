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

class GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLink extends \Google\Model
{
  /**
   * Immutable. The resource name of the third party app analytics link. Third
   * party app analytics link resource names have the form:
   * `customers/{customer_id}/thirdPartyAppAnalyticsLinks/{account_link_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The shareable link ID that should be provided to the third
   * party when setting up app analytics. This is able to be regenerated using
   * regenerate method in the ThirdPartyAppAnalyticsLinkService.
   *
   * @var string
   */
  public $shareableLinkId;

  /**
   * Immutable. The resource name of the third party app analytics link. Third
   * party app analytics link resource names have the form:
   * `customers/{customer_id}/thirdPartyAppAnalyticsLinks/{account_link_id}`
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
   * Output only. The shareable link ID that should be provided to the third
   * party when setting up app analytics. This is able to be regenerated using
   * regenerate method in the ThirdPartyAppAnalyticsLinkService.
   *
   * @param string $shareableLinkId
   */
  public function setShareableLinkId($shareableLinkId)
  {
    $this->shareableLinkId = $shareableLinkId;
  }
  /**
   * @return string
   */
  public function getShareableLinkId()
  {
    return $this->shareableLinkId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLink::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLink');
