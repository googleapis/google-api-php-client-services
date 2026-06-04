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

class ServiceNowProfile extends \Google\Model
{
  /**
   * Required. The instance of the ServiceNow account. This is the `` part of
   * the URL `https://.service-now.com`.
   *
   * @var string
   */
  public $instance;
  protected $oauthClientCredentialsType = OauthClientCredentials::class;
  protected $oauthClientCredentialsDataType = '';
  protected $userPasswordCredentialsType = UserPasswordCredentials::class;
  protected $userPasswordCredentialsDataType = '';

  /**
   * Required. The instance of the ServiceNow account. This is the `` part of
   * the URL `https://.service-now.com`.
   *
   * @param string $instance
   */
  public function setInstance($instance)
  {
    $this->instance = $instance;
  }
  /**
   * @return string
   */
  public function getInstance()
  {
    return $this->instance;
  }
  /**
   * Credentials for authenticating with the ServiceNow API.
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
   * User-password authentication.
   *
   * @param UserPasswordCredentials $userPasswordCredentials
   */
  public function setUserPasswordCredentials(UserPasswordCredentials $userPasswordCredentials)
  {
    $this->userPasswordCredentials = $userPasswordCredentials;
  }
  /**
   * @return UserPasswordCredentials
   */
  public function getUserPasswordCredentials()
  {
    return $this->userPasswordCredentials;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServiceNowProfile::class, 'Google_Service_Datastream_ServiceNowProfile');
