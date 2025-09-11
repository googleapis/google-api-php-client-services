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

namespace Google\Service\SecureSourceManager;

class InitialConfig extends \Google\Collection
{
  protected $collection_key = 'gitignores';
  /**
   * @var string
   */
  public $defaultBranch;
  /**
   * @var string[]
   */
  public $gitignores;
  /**
   * @var string
   */
  public $license;
  /**
   * @var string
   */
  public $readme;

  /**
   * @param string
   */
  public function setDefaultBranch($defaultBranch)
  {
    $this->defaultBranch = $defaultBranch;
  }
  /**
   * @return string
   */
  public function getDefaultBranch()
  {
    return $this->defaultBranch;
  }
  /**
   * @param string[]
   */
  public function setGitignores($gitignores)
  {
    $this->gitignores = $gitignores;
  }
  /**
   * @return string[]
   */
  public function getGitignores()
  {
    return $this->gitignores;
  }
  /**
   * @param string
   */
  public function setLicense($license)
  {
    $this->license = $license;
  }
  /**
   * @return string
   */
  public function getLicense()
  {
    return $this->license;
  }
  /**
   * @param string
   */
  public function setReadme($readme)
  {
    $this->readme = $readme;
  }
  /**
   * @return string
   */
  public function getReadme()
  {
    return $this->readme;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InitialConfig::class, 'Google_Service_SecureSourceManager_InitialConfig');
