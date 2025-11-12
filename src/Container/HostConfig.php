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

namespace Google\Service\Container;

class HostConfig extends \Google\Collection
{
  protected $collection_key = 'header';
  protected $caType = CertificateConfig::class;
  protected $caDataType = 'array';
  /**
   * @var string[]
   */
  public $capabilities;
  protected $clientType = CertificateConfigPair::class;
  protected $clientDataType = 'array';
  /**
   * @var string
   */
  public $dialTimeout;
  protected $headerType = RegistryHeader::class;
  protected $headerDataType = 'array';
  /**
   * @var string
   */
  public $host;
  /**
   * @var bool
   */
  public $overridePath;

  /**
   * @param CertificateConfig[]
   */
  public function setCa($ca)
  {
    $this->ca = $ca;
  }
  /**
   * @return CertificateConfig[]
   */
  public function getCa()
  {
    return $this->ca;
  }
  /**
   * @param string[]
   */
  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }
  /**
   * @return string[]
   */
  public function getCapabilities()
  {
    return $this->capabilities;
  }
  /**
   * @param CertificateConfigPair[]
   */
  public function setClient($client)
  {
    $this->client = $client;
  }
  /**
   * @return CertificateConfigPair[]
   */
  public function getClient()
  {
    return $this->client;
  }
  /**
   * @param string
   */
  public function setDialTimeout($dialTimeout)
  {
    $this->dialTimeout = $dialTimeout;
  }
  /**
   * @return string
   */
  public function getDialTimeout()
  {
    return $this->dialTimeout;
  }
  /**
   * @param RegistryHeader[]
   */
  public function setHeader($header)
  {
    $this->header = $header;
  }
  /**
   * @return RegistryHeader[]
   */
  public function getHeader()
  {
    return $this->header;
  }
  /**
   * @param string
   */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /**
   * @return string
   */
  public function getHost()
  {
    return $this->host;
  }
  /**
   * @param bool
   */
  public function setOverridePath($overridePath)
  {
    $this->overridePath = $overridePath;
  }
  /**
   * @return bool
   */
  public function getOverridePath()
  {
    return $this->overridePath;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HostConfig::class, 'Google_Service_Container_HostConfig');
