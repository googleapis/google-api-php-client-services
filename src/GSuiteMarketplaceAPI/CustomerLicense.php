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

namespace Google\Service\GSuiteMarketplaceAPI;

class CustomerLicense extends \Google\Collection
{
  protected $collection_key = 'editions';
  /**
   * The ID of the application corresponding to this license query.
   *
   * @var string
   */
  public $applicationId;
  /**
   * The domain name of the customer.
   *
   * @var string
   */
  public $customerId;
  protected $editionsType = Editions::class;
  protected $editionsDataType = 'array';
  /**
   * The ID of the customer license.
   *
   * @var string
   */
  public $id;
  /**
   * The type of API resource. This is always appsmarket#customerLicense.
   *
   * @var string
   */
  public $kind;
  /**
   * The customer's license status. One of: - `ACTIVE`: The customer has a valid
   * license. - `UNLICENSED`: There is no license: either this customer has
   * never installed your application, or else has deleted it.
   *
   * @var string
   */
  public $state;

  /**
   * The ID of the application corresponding to this license query.
   *
   * @param string $applicationId
   */
  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }
  /**
   * @return string
   */
  public function getApplicationId()
  {
    return $this->applicationId;
  }
  /**
   * The domain name of the customer.
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
   * (Deprecated)
   *
   * @deprecated
   * @param Editions[] $editions
   */
  public function setEditions($editions)
  {
    $this->editions = $editions;
  }
  /**
   * @deprecated
   * @return Editions[]
   */
  public function getEditions()
  {
    return $this->editions;
  }
  /**
   * The ID of the customer license.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * The type of API resource. This is always appsmarket#customerLicense.
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * The customer's license status. One of: - `ACTIVE`: The customer has a valid
   * license. - `UNLICENSED`: There is no license: either this customer has
   * never installed your application, or else has deleted it.
   *
   * @param string $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerLicense::class, 'Google_Service_GSuiteMarketplaceAPI_CustomerLicense');
