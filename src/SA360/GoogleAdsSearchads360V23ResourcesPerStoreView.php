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

class GoogleAdsSearchads360V23ResourcesPerStoreView extends \Google\Model
{
  /**
   * Output only. First line of the store's address.
   *
   * @var string
   */
  public $address1;
  /**
   * Output only. Second line of the store's address.
   *
   * @var string
   */
  public $address2;
  /**
   * Output only. The name of the business.
   *
   * @var string
   */
  public $businessName;
  /**
   * Output only. The city where the store is located.
   *
   * @var string
   */
  public $city;
  /**
   * Output only. The two-letter country code for the store's location (e.g.,
   * "US").
   *
   * @var string
   */
  public $countryCode;
  /**
   * Output only. The phone number of the store.
   *
   * @var string
   */
  public $phoneNumber;
  /**
   * Output only. The place ID of the per store view.
   *
   * @var string
   */
  public $placeId;
  /**
   * Output only. The postal code of the store's address.
   *
   * @var string
   */
  public $postalCode;
  /**
   * Output only. The province or state of the store's address.
   *
   * @var string
   */
  public $province;
  /**
   * Output only. The resource name of the per store view. Per Store view
   * resource names have the form:
   * `customers/{customer_id}/perStoreViews/{place_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. First line of the store's address.
   *
   * @param string $address1
   */
  public function setAddress1($address1)
  {
    $this->address1 = $address1;
  }
  /**
   * @return string
   */
  public function getAddress1()
  {
    return $this->address1;
  }
  /**
   * Output only. Second line of the store's address.
   *
   * @param string $address2
   */
  public function setAddress2($address2)
  {
    $this->address2 = $address2;
  }
  /**
   * @return string
   */
  public function getAddress2()
  {
    return $this->address2;
  }
  /**
   * Output only. The name of the business.
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
   * Output only. The city where the store is located.
   *
   * @param string $city
   */
  public function setCity($city)
  {
    $this->city = $city;
  }
  /**
   * @return string
   */
  public function getCity()
  {
    return $this->city;
  }
  /**
   * Output only. The two-letter country code for the store's location (e.g.,
   * "US").
   *
   * @param string $countryCode
   */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /**
   * @return string
   */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /**
   * Output only. The phone number of the store.
   *
   * @param string $phoneNumber
   */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /**
   * @return string
   */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /**
   * Output only. The place ID of the per store view.
   *
   * @param string $placeId
   */
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  /**
   * @return string
   */
  public function getPlaceId()
  {
    return $this->placeId;
  }
  /**
   * Output only. The postal code of the store's address.
   *
   * @param string $postalCode
   */
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  /**
   * @return string
   */
  public function getPostalCode()
  {
    return $this->postalCode;
  }
  /**
   * Output only. The province or state of the store's address.
   *
   * @param string $province
   */
  public function setProvince($province)
  {
    $this->province = $province;
  }
  /**
   * @return string
   */
  public function getProvince()
  {
    return $this->province;
  }
  /**
   * Output only. The resource name of the per store view. Per Store view
   * resource names have the form:
   * `customers/{customer_id}/perStoreViews/{place_id}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesPerStoreView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesPerStoreView');
