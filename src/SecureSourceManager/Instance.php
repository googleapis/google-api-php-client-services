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

class Instance extends \Google\Model
{
  /**
   * @var string
   */
  public $createTime;
  protected $hostConfigType = HostConfig::class;
  protected $hostConfigDataType = '';
  /**
   * @var string
   */
  public $kmsKey;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var string
   */
  public $name;
  protected $privateConfigType = PrivateConfig::class;
  protected $privateConfigDataType = '';
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $stateNote;
  /**
   * @var string
   */
  public $updateTime;
  protected $workforceIdentityFederationConfigType = WorkforceIdentityFederationConfig::class;
  protected $workforceIdentityFederationConfigDataType = '';

  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param HostConfig
   */
  public function setHostConfig(HostConfig $hostConfig)
  {
    $this->hostConfig = $hostConfig;
  }
  /**
   * @return HostConfig
   */
  public function getHostConfig()
  {
    return $this->hostConfig;
  }
  /**
   * @param string
   */
  public function setKmsKey($kmsKey)
  {
    $this->kmsKey = $kmsKey;
  }
  /**
   * @return string
   */
  public function getKmsKey()
  {
    return $this->kmsKey;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param PrivateConfig
   */
  public function setPrivateConfig(PrivateConfig $privateConfig)
  {
    $this->privateConfig = $privateConfig;
  }
  /**
   * @return PrivateConfig
   */
  public function getPrivateConfig()
  {
    return $this->privateConfig;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param string
   */
  public function setStateNote($stateNote)
  {
    $this->stateNote = $stateNote;
  }
  /**
   * @return string
   */
  public function getStateNote()
  {
    return $this->stateNote;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * @param WorkforceIdentityFederationConfig
   */
  public function setWorkforceIdentityFederationConfig(WorkforceIdentityFederationConfig $workforceIdentityFederationConfig)
  {
    $this->workforceIdentityFederationConfig = $workforceIdentityFederationConfig;
  }
  /**
   * @return WorkforceIdentityFederationConfig
   */
  public function getWorkforceIdentityFederationConfig()
  {
    return $this->workforceIdentityFederationConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Instance::class, 'Google_Service_SecureSourceManager_Instance');
