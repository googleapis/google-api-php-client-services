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

namespace Google\Service\DataManager;

class Destination extends \Google\Model
{
  protected $linkedAccountType = ProductAccount::class;
  protected $linkedAccountDataType = '';
  protected $loginAccountType = ProductAccount::class;
  protected $loginAccountDataType = '';
  protected $operatingAccountType = ProductAccount::class;
  protected $operatingAccountDataType = '';
  /**
   * @var string
   */
  public $productDestinationId;
  /**
   * @var string
   */
  public $reference;

  /**
   * @param ProductAccount
   */
  public function setLinkedAccount(ProductAccount $linkedAccount)
  {
    $this->linkedAccount = $linkedAccount;
  }
  /**
   * @return ProductAccount
   */
  public function getLinkedAccount()
  {
    return $this->linkedAccount;
  }
  /**
   * @param ProductAccount
   */
  public function setLoginAccount(ProductAccount $loginAccount)
  {
    $this->loginAccount = $loginAccount;
  }
  /**
   * @return ProductAccount
   */
  public function getLoginAccount()
  {
    return $this->loginAccount;
  }
  /**
   * @param ProductAccount
   */
  public function setOperatingAccount(ProductAccount $operatingAccount)
  {
    $this->operatingAccount = $operatingAccount;
  }
  /**
   * @return ProductAccount
   */
  public function getOperatingAccount()
  {
    return $this->operatingAccount;
  }
  /**
   * @param string
   */
  public function setProductDestinationId($productDestinationId)
  {
    $this->productDestinationId = $productDestinationId;
  }
  /**
   * @return string
   */
  public function getProductDestinationId()
  {
    return $this->productDestinationId;
  }
  /**
   * @param string
   */
  public function setReference($reference)
  {
    $this->reference = $reference;
  }
  /**
   * @return string
   */
  public function getReference()
  {
    return $this->reference;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Destination::class, 'Google_Service_DataManager_Destination');
