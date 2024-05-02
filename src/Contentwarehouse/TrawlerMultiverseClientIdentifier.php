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

namespace Google\Service\Contentwarehouse;

class TrawlerMultiverseClientIdentifier extends \Google\Model
{
  /**
   * @var int
   */
  public $crawlPolicyId;
  /**
   * @var string
   */
  public $crawlPolicyName;
  /**
   * @var string
   */
  public $hyperdriveAppName;
  /**
   * @var string
   */
  public $hyperdriveTableName;
  /**
   * @var int
   */
  public $topicId;
  /**
   * @var string
   */
  public $topicName;
  /**
   * @var string
   */
  public $trafficType;

  /**
   * @param int
   */
  public function setCrawlPolicyId($crawlPolicyId)
  {
    $this->crawlPolicyId = $crawlPolicyId;
  }
  /**
   * @return int
   */
  public function getCrawlPolicyId()
  {
    return $this->crawlPolicyId;
  }
  /**
   * @param string
   */
  public function setCrawlPolicyName($crawlPolicyName)
  {
    $this->crawlPolicyName = $crawlPolicyName;
  }
  /**
   * @return string
   */
  public function getCrawlPolicyName()
  {
    return $this->crawlPolicyName;
  }
  /**
   * @param string
   */
  public function setHyperdriveAppName($hyperdriveAppName)
  {
    $this->hyperdriveAppName = $hyperdriveAppName;
  }
  /**
   * @return string
   */
  public function getHyperdriveAppName()
  {
    return $this->hyperdriveAppName;
  }
  /**
   * @param string
   */
  public function setHyperdriveTableName($hyperdriveTableName)
  {
    $this->hyperdriveTableName = $hyperdriveTableName;
  }
  /**
   * @return string
   */
  public function getHyperdriveTableName()
  {
    return $this->hyperdriveTableName;
  }
  /**
   * @param int
   */
  public function setTopicId($topicId)
  {
    $this->topicId = $topicId;
  }
  /**
   * @return int
   */
  public function getTopicId()
  {
    return $this->topicId;
  }
  /**
   * @param string
   */
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  /**
   * @return string
   */
  public function getTopicName()
  {
    return $this->topicName;
  }
  /**
   * @param string
   */
  public function setTrafficType($trafficType)
  {
    $this->trafficType = $trafficType;
  }
  /**
   * @return string
   */
  public function getTrafficType()
  {
    return $this->trafficType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TrawlerMultiverseClientIdentifier::class, 'Google_Service_Contentwarehouse_TrawlerMultiverseClientIdentifier');
