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

namespace Google\Service\CloudRun;

class GoogleDevtoolsCloudbuildV1HttpConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $proxySecretVersionName;
  protected $proxySslCaInfoType = GoogleDevtoolsCloudbuildV1GCSLocation::class;
  protected $proxySslCaInfoDataType = '';

  /**
   * @param string
   */
  public function setProxySecretVersionName($proxySecretVersionName)
  {
    $this->proxySecretVersionName = $proxySecretVersionName;
  }
  /**
   * @return string
   */
  public function getProxySecretVersionName()
  {
    return $this->proxySecretVersionName;
  }
  /**
   * @param GoogleDevtoolsCloudbuildV1GCSLocation
   */
  public function setProxySslCaInfo(GoogleDevtoolsCloudbuildV1GCSLocation $proxySslCaInfo)
  {
    $this->proxySslCaInfo = $proxySslCaInfo;
  }
  /**
   * @return GoogleDevtoolsCloudbuildV1GCSLocation
   */
  public function getProxySslCaInfo()
  {
    return $this->proxySslCaInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleDevtoolsCloudbuildV1HttpConfig::class, 'Google_Service_CloudRun_GoogleDevtoolsCloudbuildV1HttpConfig');
