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

namespace Google\Service\Datastream;

class DataverseProfile extends \Google\Model
{
  /**
   * Required. Environment URL of the Microsoft Dataverse instance. Example:
   * `.crm.dynamics.com`
   *
   * @var string
   */
  public $environmentUrl;
  protected $oauthClientCredentialsType = OauthClientCredentials::class;
  protected $oauthClientCredentialsDataType = '';
  /**
   * Required. Tenant id of the Microsoft Dataverse instance.
   *
   * @var string
   */
  public $tenantId;

  /**
   * Required. Environment URL of the Microsoft Dataverse instance. Example:
   * `.crm.dynamics.com`
   *
   * @param string $environmentUrl
   */
  public function setEnvironmentUrl($environmentUrl)
  {
    $this->environmentUrl = $environmentUrl;
  }
  /**
   * @return string
   */
  public function getEnvironmentUrl()
  {
    return $this->environmentUrl;
  }
  /**
   * Required. Credentials for authenticating with the Dataverse API.
   *
   * @param OauthClientCredentials $oauthClientCredentials
   */
  public function setOauthClientCredentials(OauthClientCredentials $oauthClientCredentials)
  {
    $this->oauthClientCredentials = $oauthClientCredentials;
  }
  /**
   * @return OauthClientCredentials
   */
  public function getOauthClientCredentials()
  {
    return $this->oauthClientCredentials;
  }
  /**
   * Required. Tenant id of the Microsoft Dataverse instance.
   *
   * @param string $tenantId
   */
  public function setTenantId($tenantId)
  {
    $this->tenantId = $tenantId;
  }
  /**
   * @return string
   */
  public function getTenantId()
  {
    return $this->tenantId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataverseProfile::class, 'Google_Service_Datastream_DataverseProfile');
