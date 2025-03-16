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

namespace Google\Service\SQLAdmin;

class ConnectionPoolConfig extends \Google\Collection
{
  protected $collection_key = 'flags';
  /**
   * @var string
   */
  public $clientConnectionIdleTimeout;
  /**
   * @var int
   */
  public $connPoolSize;
  /**
   * @var bool
   */
  public $connectionPoolingEnabled;
  protected $flagsType = ConnectionPoolFlags::class;
  protected $flagsDataType = 'array';
  /**
   * @var int
   */
  public $maxClientConnections;
  /**
   * @var string
   */
  public $poolMode;
  /**
   * @var string
   */
  public $queryWaitTimeout;
  /**
   * @var string
   */
  public $serverConnectionIdleTimeout;

  /**
   * @param string
   */
  public function setClientConnectionIdleTimeout($clientConnectionIdleTimeout)
  {
    $this->clientConnectionIdleTimeout = $clientConnectionIdleTimeout;
  }
  /**
   * @return string
   */
  public function getClientConnectionIdleTimeout()
  {
    return $this->clientConnectionIdleTimeout;
  }
  /**
   * @param int
   */
  public function setConnPoolSize($connPoolSize)
  {
    $this->connPoolSize = $connPoolSize;
  }
  /**
   * @return int
   */
  public function getConnPoolSize()
  {
    return $this->connPoolSize;
  }
  /**
   * @param bool
   */
  public function setConnectionPoolingEnabled($connectionPoolingEnabled)
  {
    $this->connectionPoolingEnabled = $connectionPoolingEnabled;
  }
  /**
   * @return bool
   */
  public function getConnectionPoolingEnabled()
  {
    return $this->connectionPoolingEnabled;
  }
  /**
   * @param ConnectionPoolFlags[]
   */
  public function setFlags($flags)
  {
    $this->flags = $flags;
  }
  /**
   * @return ConnectionPoolFlags[]
   */
  public function getFlags()
  {
    return $this->flags;
  }
  /**
   * @param int
   */
  public function setMaxClientConnections($maxClientConnections)
  {
    $this->maxClientConnections = $maxClientConnections;
  }
  /**
   * @return int
   */
  public function getMaxClientConnections()
  {
    return $this->maxClientConnections;
  }
  /**
   * @param string
   */
  public function setPoolMode($poolMode)
  {
    $this->poolMode = $poolMode;
  }
  /**
   * @return string
   */
  public function getPoolMode()
  {
    return $this->poolMode;
  }
  /**
   * @param string
   */
  public function setQueryWaitTimeout($queryWaitTimeout)
  {
    $this->queryWaitTimeout = $queryWaitTimeout;
  }
  /**
   * @return string
   */
  public function getQueryWaitTimeout()
  {
    return $this->queryWaitTimeout;
  }
  /**
   * @param string
   */
  public function setServerConnectionIdleTimeout($serverConnectionIdleTimeout)
  {
    $this->serverConnectionIdleTimeout = $serverConnectionIdleTimeout;
  }
  /**
   * @return string
   */
  public function getServerConnectionIdleTimeout()
  {
    return $this->serverConnectionIdleTimeout;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConnectionPoolConfig::class, 'Google_Service_SQLAdmin_ConnectionPoolConfig');
