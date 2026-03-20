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

namespace Google\Service\DeveloperConnect;

class UserRepository extends \Google\Model
{
  /**
   * Output only. The git clone URL of the repo. For example:
   * https://github.com/myuser/myrepo.git
   *
   * @var string
   */
  public $cloneUri;
  /**
   * Output only. The user friendly repo name (e.g., myuser/myrepo)
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The Git proxy URL for this repo. For example: https://us-
   * west1-git.developerconnect.dev/a/my-proj/my-ac/myuser/myrepo.git. Populated
   * only when `proxy_config.enabled` is set to `true` in the Account Connector.
   * This URL is used by other Google services that integrate with Developer
   * Connect.
   *
   * @var string
   */
  public $gitProxyUri;

  /**
   * Output only. The git clone URL of the repo. For example:
   * https://github.com/myuser/myrepo.git
   *
   * @param string $cloneUri
   */
  public function setCloneUri($cloneUri)
  {
    $this->cloneUri = $cloneUri;
  }
  /**
   * @return string
   */
  public function getCloneUri()
  {
    return $this->cloneUri;
  }
  /**
   * Output only. The user friendly repo name (e.g., myuser/myrepo)
   *
   * @param string $displayName
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
   * Output only. The Git proxy URL for this repo. For example: https://us-
   * west1-git.developerconnect.dev/a/my-proj/my-ac/myuser/myrepo.git. Populated
   * only when `proxy_config.enabled` is set to `true` in the Account Connector.
   * This URL is used by other Google services that integrate with Developer
   * Connect.
   *
   * @param string $gitProxyUri
   */
  public function setGitProxyUri($gitProxyUri)
  {
    $this->gitProxyUri = $gitProxyUri;
  }
  /**
   * @return string
   */
  public function getGitProxyUri()
  {
    return $this->gitProxyUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserRepository::class, 'Google_Service_DeveloperConnect_UserRepository');
