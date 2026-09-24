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

namespace Google\Service\ThreatIntelligenceService;

class DnsRegistrationDetails extends \Google\Model
{
  /**
   * Optional. The specific timestamp when the current domain registration
   * expires.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Optional. Indicates whether private registration is enabled on the WHOIS
   * record.
   *
   * @var bool
   */
  public $privateRegistration;
  /**
   * Optional. The country code of the registrant (e.g., US). Use ISO 3166-1
   * alpha-2 codes
   *
   * @var string
   */
  public $registrantCountry;
  /**
   * Optional. The registrar where the domain was registered (e.g., NameCheap).
   *
   * @var string
   */
  public $registrar;
  /**
   * Optional. The specific timestamp when the domain registration was created.
   *
   * @var string
   */
  public $registrationTime;

  /**
   * Optional. The specific timestamp when the current domain registration
   * expires.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Optional. Indicates whether private registration is enabled on the WHOIS
   * record.
   *
   * @param bool $privateRegistration
   */
  public function setPrivateRegistration($privateRegistration)
  {
    $this->privateRegistration = $privateRegistration;
  }
  /**
   * @return bool
   */
  public function getPrivateRegistration()
  {
    return $this->privateRegistration;
  }
  /**
   * Optional. The country code of the registrant (e.g., US). Use ISO 3166-1
   * alpha-2 codes
   *
   * @param string $registrantCountry
   */
  public function setRegistrantCountry($registrantCountry)
  {
    $this->registrantCountry = $registrantCountry;
  }
  /**
   * @return string
   */
  public function getRegistrantCountry()
  {
    return $this->registrantCountry;
  }
  /**
   * Optional. The registrar where the domain was registered (e.g., NameCheap).
   *
   * @param string $registrar
   */
  public function setRegistrar($registrar)
  {
    $this->registrar = $registrar;
  }
  /**
   * @return string
   */
  public function getRegistrar()
  {
    return $this->registrar;
  }
  /**
   * Optional. The specific timestamp when the domain registration was created.
   *
   * @param string $registrationTime
   */
  public function setRegistrationTime($registrationTime)
  {
    $this->registrationTime = $registrationTime;
  }
  /**
   * @return string
   */
  public function getRegistrationTime()
  {
    return $this->registrationTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DnsRegistrationDetails::class, 'Google_Service_ThreatIntelligenceService_DnsRegistrationDetails');
