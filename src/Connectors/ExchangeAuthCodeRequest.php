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

namespace Google\Service\Connectors;

class ExchangeAuthCodeRequest extends \Google\Model
{
  protected $authCodeDataType = AuthCodeData::class;
  protected $authCodeDataDataType = '';
  protected $executionConfigType = ExecutionConfig::class;
  protected $executionConfigDataType = '';
  protected $oauth2ConfigType = OAuth2Config::class;
  protected $oauth2ConfigDataType = '';

  /**
   * Optional. AuthCodeData contains the data the runtime requires to exchange
   * for access and refresh tokens. If the data is not provided, the runtime
   * will read the data from the secret manager.
   *
   * @param AuthCodeData $authCodeData
   */
  public function setAuthCodeData(AuthCodeData $authCodeData)
  {
    $this->authCodeData = $authCodeData;
  }
  /**
   * @return AuthCodeData
   */
  public function getAuthCodeData()
  {
    return $this->authCodeData;
  }
  /**
   * ExecutionConfig contains the configuration for the execution of the
   * request.
   *
   * @param ExecutionConfig $executionConfig
   */
  public function setExecutionConfig(ExecutionConfig $executionConfig)
  {
    $this->executionConfig = $executionConfig;
  }
  /**
   * @return ExecutionConfig
   */
  public function getExecutionConfig()
  {
    return $this->executionConfig;
  }
  /**
   * OAuth2Config contains the OAuth2 config for the connection.
   *
   * @param OAuth2Config $oauth2Config
   */
  public function setOauth2Config(OAuth2Config $oauth2Config)
  {
    $this->oauth2Config = $oauth2Config;
  }
  /**
   * @return OAuth2Config
   */
  public function getOauth2Config()
  {
    return $this->oauth2Config;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExchangeAuthCodeRequest::class, 'Google_Service_Connectors_ExchangeAuthCodeRequest');
