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

namespace Google\Service\WorkloadManager;

class ActiveDirectory extends \Google\Model
{
  /**
   * Unspecified active directory type
   */
  public const TYPE_ACTIVE_DIRECTORY_TYPE_UNSPECIFIED = 'ACTIVE_DIRECTORY_TYPE_UNSPECIFIED';
  /**
   * GCP managed active directory type
   */
  public const TYPE_GCP_MANAGED = 'GCP_MANAGED';
  /**
   * Self managed active directory type
   */
  public const TYPE_SELF_MANAGED = 'SELF_MANAGED';
  /**
   * Optional. DNS IP address
   *
   * @var string
   */
  public $dnsAddress;
  /**
   * Optional. human readable form of a domain such as “google.com”.
   *
   * @var string
   */
  public $domain;
  /**
   * Optional. domain username
   *
   * @var string
   */
  public $domainUsername;
  /**
   * Required. secret_manager_secret
   *
   * @var string
   */
  public $secretManagerSecret;
  /**
   * Required. active directory type
   *
   * @var string
   */
  public $type;

  /**
   * Optional. DNS IP address
   *
   * @param string $dnsAddress
   */
  public function setDnsAddress($dnsAddress)
  {
    $this->dnsAddress = $dnsAddress;
  }
  /**
   * @return string
   */
  public function getDnsAddress()
  {
    return $this->dnsAddress;
  }
  /**
   * Optional. human readable form of a domain such as “google.com”.
   *
   * @param string $domain
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * Optional. domain username
   *
   * @param string $domainUsername
   */
  public function setDomainUsername($domainUsername)
  {
    $this->domainUsername = $domainUsername;
  }
  /**
   * @return string
   */
  public function getDomainUsername()
  {
    return $this->domainUsername;
  }
  /**
   * Required. secret_manager_secret
   *
   * @param string $secretManagerSecret
   */
  public function setSecretManagerSecret($secretManagerSecret)
  {
    $this->secretManagerSecret = $secretManagerSecret;
  }
  /**
   * @return string
   */
  public function getSecretManagerSecret()
  {
    return $this->secretManagerSecret;
  }
  /**
   * Required. active directory type
   *
   * Accepted values: ACTIVE_DIRECTORY_TYPE_UNSPECIFIED, GCP_MANAGED,
   * SELF_MANAGED
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActiveDirectory::class, 'Google_Service_WorkloadManager_ActiveDirectory');
