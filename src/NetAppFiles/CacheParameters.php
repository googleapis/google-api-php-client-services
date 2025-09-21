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

namespace Google\Service\NetAppFiles;

class CacheParameters extends \Google\Collection
{
  protected $collection_key = 'peerIpAddresses';
  protected $cacheConfigType = CacheConfig::class;
  protected $cacheConfigDataType = '';
  /**
   * @var string
   */
  public $cacheState;
  /**
   * @var string
   */
  public $command;
  /**
   * @var bool
   */
  public $enableGlobalFileLock;
  /**
   * @var string
   */
  public $passphrase;
  /**
   * @var string
   */
  public $peerClusterName;
  /**
   * @var string[]
   */
  public $peerIpAddresses;
  /**
   * @var string
   */
  public $peerSvmName;
  /**
   * @var string
   */
  public $peerVolumeName;
  /**
   * @var string
   */
  public $peeringCommandExpiryTime;
  /**
   * @var string
   */
  public $stateDetails;

  /**
   * @param CacheConfig
   */
  public function setCacheConfig(CacheConfig $cacheConfig)
  {
    $this->cacheConfig = $cacheConfig;
  }
  /**
   * @return CacheConfig
   */
  public function getCacheConfig()
  {
    return $this->cacheConfig;
  }
  /**
   * @param string
   */
  public function setCacheState($cacheState)
  {
    $this->cacheState = $cacheState;
  }
  /**
   * @return string
   */
  public function getCacheState()
  {
    return $this->cacheState;
  }
  /**
   * @param string
   */
  public function setCommand($command)
  {
    $this->command = $command;
  }
  /**
   * @return string
   */
  public function getCommand()
  {
    return $this->command;
  }
  /**
   * @param bool
   */
  public function setEnableGlobalFileLock($enableGlobalFileLock)
  {
    $this->enableGlobalFileLock = $enableGlobalFileLock;
  }
  /**
   * @return bool
   */
  public function getEnableGlobalFileLock()
  {
    return $this->enableGlobalFileLock;
  }
  /**
   * @param string
   */
  public function setPassphrase($passphrase)
  {
    $this->passphrase = $passphrase;
  }
  /**
   * @return string
   */
  public function getPassphrase()
  {
    return $this->passphrase;
  }
  /**
   * @param string
   */
  public function setPeerClusterName($peerClusterName)
  {
    $this->peerClusterName = $peerClusterName;
  }
  /**
   * @return string
   */
  public function getPeerClusterName()
  {
    return $this->peerClusterName;
  }
  /**
   * @param string[]
   */
  public function setPeerIpAddresses($peerIpAddresses)
  {
    $this->peerIpAddresses = $peerIpAddresses;
  }
  /**
   * @return string[]
   */
  public function getPeerIpAddresses()
  {
    return $this->peerIpAddresses;
  }
  /**
   * @param string
   */
  public function setPeerSvmName($peerSvmName)
  {
    $this->peerSvmName = $peerSvmName;
  }
  /**
   * @return string
   */
  public function getPeerSvmName()
  {
    return $this->peerSvmName;
  }
  /**
   * @param string
   */
  public function setPeerVolumeName($peerVolumeName)
  {
    $this->peerVolumeName = $peerVolumeName;
  }
  /**
   * @return string
   */
  public function getPeerVolumeName()
  {
    return $this->peerVolumeName;
  }
  /**
   * @param string
   */
  public function setPeeringCommandExpiryTime($peeringCommandExpiryTime)
  {
    $this->peeringCommandExpiryTime = $peeringCommandExpiryTime;
  }
  /**
   * @return string
   */
  public function getPeeringCommandExpiryTime()
  {
    return $this->peeringCommandExpiryTime;
  }
  /**
   * @param string
   */
  public function setStateDetails($stateDetails)
  {
    $this->stateDetails = $stateDetails;
  }
  /**
   * @return string
   */
  public function getStateDetails()
  {
    return $this->stateDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CacheParameters::class, 'Google_Service_NetAppFiles_CacheParameters');
