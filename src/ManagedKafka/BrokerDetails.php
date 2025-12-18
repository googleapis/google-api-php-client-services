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

namespace Google\Service\ManagedKafka;

class BrokerDetails extends \Google\Model
{
  /**
   * Output only. The index of the broker.
   *
   * @var string
   */
  public $brokerIndex;
  /**
   * Output only. The node id of the broker.
   *
   * @var string
   */
  public $nodeId;
  /**
   * Output only. The rack of the broker.
   *
   * @var string
   */
  public $rack;

  /**
   * Output only. The index of the broker.
   *
   * @param string $brokerIndex
   */
  public function setBrokerIndex($brokerIndex)
  {
    $this->brokerIndex = $brokerIndex;
  }
  /**
   * @return string
   */
  public function getBrokerIndex()
  {
    return $this->brokerIndex;
  }
  /**
   * Output only. The node id of the broker.
   *
   * @param string $nodeId
   */
  public function setNodeId($nodeId)
  {
    $this->nodeId = $nodeId;
  }
  /**
   * @return string
   */
  public function getNodeId()
  {
    return $this->nodeId;
  }
  /**
   * Output only. The rack of the broker.
   *
   * @param string $rack
   */
  public function setRack($rack)
  {
    $this->rack = $rack;
  }
  /**
   * @return string
   */
  public function getRack()
  {
    return $this->rack;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BrokerDetails::class, 'Google_Service_ManagedKafka_BrokerDetails');
