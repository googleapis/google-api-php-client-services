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

class PrivateConfig extends \Google\Collection
{
  protected $collection_key = 'pscAllowedProjects';
  /**
   * @var string
   */
  public $caPool;
  /**
   * @var string
   */
  public $httpServiceAttachment;
  /**
   * @var bool
   */
  public $isPrivate;
  /**
   * @var string[]
   */
  public $pscAllowedProjects;
  /**
   * @var string
   */
  public $sshServiceAttachment;

  /**
   * @param string
   */
  public function setCaPool($caPool)
  {
    $this->caPool = $caPool;
  }
  /**
   * @return string
   */
  public function getCaPool()
  {
    return $this->caPool;
  }
  /**
   * @param string
   */
  public function setHttpServiceAttachment($httpServiceAttachment)
  {
    $this->httpServiceAttachment = $httpServiceAttachment;
  }
  /**
   * @return string
   */
  public function getHttpServiceAttachment()
  {
    return $this->httpServiceAttachment;
  }
  /**
   * @param bool
   */
  public function setIsPrivate($isPrivate)
  {
    $this->isPrivate = $isPrivate;
  }
  /**
   * @return bool
   */
  public function getIsPrivate()
  {
    return $this->isPrivate;
  }
  /**
   * @param string[]
   */
  public function setPscAllowedProjects($pscAllowedProjects)
  {
    $this->pscAllowedProjects = $pscAllowedProjects;
  }
  /**
   * @return string[]
   */
  public function getPscAllowedProjects()
  {
    return $this->pscAllowedProjects;
  }
  /**
   * @param string
   */
  public function setSshServiceAttachment($sshServiceAttachment)
  {
    $this->sshServiceAttachment = $sshServiceAttachment;
  }
  /**
   * @return string
   */
  public function getSshServiceAttachment()
  {
    return $this->sshServiceAttachment;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PrivateConfig::class, 'Google_Service_SecureSourceManager_PrivateConfig');
