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

namespace Google\Service\CloudIdentity;

class InboundOidcSsoProfile extends \Google\Model
{
  /**
   * @var string
   */
  public $customer;
  /**
   * @var string
   */
  public $displayName;
  protected $idpConfigType = OidcIdpConfig::class;
  protected $idpConfigDataType = '';
  /**
   * @var string
   */
  public $name;
  protected $rpConfigType = OidcRpConfig::class;
  protected $rpConfigDataType = '';

  /**
   * @param string
   */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /**
   * @return string
   */
  public function getCustomer()
  {
    return $this->customer;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param OidcIdpConfig
   */
  public function setIdpConfig(OidcIdpConfig $idpConfig)
  {
    $this->idpConfig = $idpConfig;
  }
  /**
   * @return OidcIdpConfig
   */
  public function getIdpConfig()
  {
    return $this->idpConfig;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param OidcRpConfig
   */
  public function setRpConfig(OidcRpConfig $rpConfig)
  {
    $this->rpConfig = $rpConfig;
  }
  /**
   * @return OidcRpConfig
   */
  public function getRpConfig()
  {
    return $this->rpConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InboundOidcSsoProfile::class, 'Google_Service_CloudIdentity_InboundOidcSsoProfile');
