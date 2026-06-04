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

class GoogleAdsSearchads360V23CommonBusinessProfileLocationSet extends \Google\Collection
{
  protected $collection_key = 'listingIdFilters';
  /**
   * Immutable. The account ID of the managed business whose locations are to be
   * used. If this field is not set, then all businesses accessible by the user
   * (specified by the emailAddress) are used.
   *
   * @var string
   */
  public $businessAccountId;
  /**
   * Used to filter Google Business Profile listings by business name. If
   * businessNameFilter is set, only listings with a matching business name are
   * candidates to be sync'd into Assets.
   *
   * @var string
   */
  public $businessNameFilter;
  /**
   * Required. Immutable. Email address of a Google Business Profile account or
   * email address of a manager of the Google Business Profile account.
   *
   * @var string
   */
  public $emailAddress;
  /**
   * Required. Immutable. The HTTP authorization token used to obtain
   * authorization.
   *
   * @var string
   */
  public $httpAuthorizationToken;
  /**
   * Used to filter Google Business Profile listings by labels. If entries exist
   * in labelFilters, only listings that have any of the labels set are
   * candidates to be synchronized into Assets. If no entries exist in
   * labelFilters, then all listings are candidates for syncing. Label filters
   * are OR'ed together.
   *
   * @var string[]
   */
  public $labelFilters;
  /**
   * Used to filter Google Business Profile listings by listing id. If entries
   * exist in listingIdFilters, only listings specified by the filters are
   * candidates to be synchronized into Assets. If no entries exist in
   * listingIdFilters, then all listings are candidates for syncing. Listing ID
   * filters are OR'ed together.
   *
   * @var string[]
   */
  public $listingIdFilters;

  /**
   * Immutable. The account ID of the managed business whose locations are to be
   * used. If this field is not set, then all businesses accessible by the user
   * (specified by the emailAddress) are used.
   *
   * @param string $businessAccountId
   */
  public function setBusinessAccountId($businessAccountId)
  {
    $this->businessAccountId = $businessAccountId;
  }
  /**
   * @return string
   */
  public function getBusinessAccountId()
  {
    return $this->businessAccountId;
  }
  /**
   * Used to filter Google Business Profile listings by business name. If
   * businessNameFilter is set, only listings with a matching business name are
   * candidates to be sync'd into Assets.
   *
   * @param string $businessNameFilter
   */
  public function setBusinessNameFilter($businessNameFilter)
  {
    $this->businessNameFilter = $businessNameFilter;
  }
  /**
   * @return string
   */
  public function getBusinessNameFilter()
  {
    return $this->businessNameFilter;
  }
  /**
   * Required. Immutable. Email address of a Google Business Profile account or
   * email address of a manager of the Google Business Profile account.
   *
   * @param string $emailAddress
   */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /**
   * @return string
   */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /**
   * Required. Immutable. The HTTP authorization token used to obtain
   * authorization.
   *
   * @param string $httpAuthorizationToken
   */
  public function setHttpAuthorizationToken($httpAuthorizationToken)
  {
    $this->httpAuthorizationToken = $httpAuthorizationToken;
  }
  /**
   * @return string
   */
  public function getHttpAuthorizationToken()
  {
    return $this->httpAuthorizationToken;
  }
  /**
   * Used to filter Google Business Profile listings by labels. If entries exist
   * in labelFilters, only listings that have any of the labels set are
   * candidates to be synchronized into Assets. If no entries exist in
   * labelFilters, then all listings are candidates for syncing. Label filters
   * are OR'ed together.
   *
   * @param string[] $labelFilters
   */
  public function setLabelFilters($labelFilters)
  {
    $this->labelFilters = $labelFilters;
  }
  /**
   * @return string[]
   */
  public function getLabelFilters()
  {
    return $this->labelFilters;
  }
  /**
   * Used to filter Google Business Profile listings by listing id. If entries
   * exist in listingIdFilters, only listings specified by the filters are
   * candidates to be synchronized into Assets. If no entries exist in
   * listingIdFilters, then all listings are candidates for syncing. Listing ID
   * filters are OR'ed together.
   *
   * @param string[] $listingIdFilters
   */
  public function setListingIdFilters($listingIdFilters)
  {
    $this->listingIdFilters = $listingIdFilters;
  }
  /**
   * @return string[]
   */
  public function getListingIdFilters()
  {
    return $this->listingIdFilters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonBusinessProfileLocationSet::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonBusinessProfileLocationSet');
