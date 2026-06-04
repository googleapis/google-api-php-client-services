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

class GoogleAdsSearchads360V23ServicesListPlannableUserInterestsRequest extends \Google\Collection
{
  protected $collection_key = 'userInterestTaxonomyTypes';
  /**
   * Required. The ID of the customer.
   *
   * @var string
   */
  public $customerId;
  /**
   * A filter by user interest name. If set, only user interests with a name
   * containing the literal string (case insensitive) in the filter will be
   * returned. Maximum length is 200 characters.
   *
   * @var string
   */
  public $nameQuery;
  /**
   * A filter by user interest path. If set, only user interests with a path
   * containing the literal string (case insensitive) in the filter will be
   * returned. Maximum length is 200 characters.
   *
   * @var string
   */
  public $pathQuery;
  protected $reachApplicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $reachApplicationInfoDataType = '';
  /**
   * Optional. A filter by user interest type. If set, only user interests with
   * a type listed in the filter will be returned. If not set, user interests of
   * all supported types will be returned. Supported user interest types are
   * AFFINITY and IN_MARKET. Each type must be specified at most once.
   *
   * @var string[]
   */
  public $userInterestTaxonomyTypes;

  /**
   * Required. The ID of the customer.
   *
   * @param string $customerId
   */
  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }
  /**
   * @return string
   */
  public function getCustomerId()
  {
    return $this->customerId;
  }
  /**
   * A filter by user interest name. If set, only user interests with a name
   * containing the literal string (case insensitive) in the filter will be
   * returned. Maximum length is 200 characters.
   *
   * @param string $nameQuery
   */
  public function setNameQuery($nameQuery)
  {
    $this->nameQuery = $nameQuery;
  }
  /**
   * @return string
   */
  public function getNameQuery()
  {
    return $this->nameQuery;
  }
  /**
   * A filter by user interest path. If set, only user interests with a path
   * containing the literal string (case insensitive) in the filter will be
   * returned. Maximum length is 200 characters.
   *
   * @param string $pathQuery
   */
  public function setPathQuery($pathQuery)
  {
    $this->pathQuery = $pathQuery;
  }
  /**
   * @return string
   */
  public function getPathQuery()
  {
    return $this->pathQuery;
  }
  /**
   * Optional. Additional information on the application issuing the request.
   *
   * @param GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $reachApplicationInfo
   */
  public function setReachApplicationInfo(GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $reachApplicationInfo)
  {
    $this->reachApplicationInfo = $reachApplicationInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdditionalApplicationInfo
   */
  public function getReachApplicationInfo()
  {
    return $this->reachApplicationInfo;
  }
  /**
   * Optional. A filter by user interest type. If set, only user interests with
   * a type listed in the filter will be returned. If not set, user interests of
   * all supported types will be returned. Supported user interest types are
   * AFFINITY and IN_MARKET. Each type must be specified at most once.
   *
   * @param string[] $userInterestTaxonomyTypes
   */
  public function setUserInterestTaxonomyTypes($userInterestTaxonomyTypes)
  {
    $this->userInterestTaxonomyTypes = $userInterestTaxonomyTypes;
  }
  /**
   * @return string[]
   */
  public function getUserInterestTaxonomyTypes()
  {
    return $this->userInterestTaxonomyTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesListPlannableUserInterestsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesListPlannableUserInterestsRequest');
