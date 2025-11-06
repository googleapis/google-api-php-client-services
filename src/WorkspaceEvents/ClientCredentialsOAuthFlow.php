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

namespace Google\Service\WorkspaceEvents;

class ClientCredentialsOAuthFlow extends \Google\Model
{
  /**
   * @var string
   */
  public $refreshUrl;
  /**
   * @var string[]
   */
  public $scopes;
  /**
   * @var string
   */
  public $tokenUrl;

  /**
   * @param string
   */
  public function setRefreshUrl($refreshUrl)
  {
    $this->refreshUrl = $refreshUrl;
  }
  /**
   * @return string
   */
  public function getRefreshUrl()
  {
    return $this->refreshUrl;
  }
  /**
   * @param string[]
   */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /**
   * @return string[]
   */
  public function getScopes()
  {
    return $this->scopes;
  }
  /**
   * @param string
   */
  public function setTokenUrl($tokenUrl)
  {
    $this->tokenUrl = $tokenUrl;
  }
  /**
   * @return string
   */
  public function getTokenUrl()
  {
    return $this->tokenUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClientCredentialsOAuthFlow::class, 'Google_Service_WorkspaceEvents_ClientCredentialsOAuthFlow');
