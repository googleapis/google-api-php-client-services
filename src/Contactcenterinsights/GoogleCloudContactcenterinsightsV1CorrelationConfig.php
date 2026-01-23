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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1CorrelationConfig extends \Google\Model
{
  /**
   * Output only. The time at which the correlation config was created.
   *
   * @var string
   */
  public $createTime;
  protected $fullConversationConfigType = GoogleCloudContactcenterinsightsV1CorrelationTypeConfig::class;
  protected $fullConversationConfigDataType = '';
  /**
   * Immutable. Identifier. The resource name of the correlation config. Format:
   * projects/{project}/locations/{location}/correlationConfig
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The time at which the correlation config was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The time at which the correlation config was created.
   *
   * @param string $createTime
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
   * The correlation type config for full conversations.
   *
   * @param GoogleCloudContactcenterinsightsV1CorrelationTypeConfig $fullConversationConfig
   */
  public function setFullConversationConfig(GoogleCloudContactcenterinsightsV1CorrelationTypeConfig $fullConversationConfig)
  {
    $this->fullConversationConfig = $fullConversationConfig;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1CorrelationTypeConfig
   */
  public function getFullConversationConfig()
  {
    return $this->fullConversationConfig;
  }
  /**
   * Immutable. Identifier. The resource name of the correlation config. Format:
   * projects/{project}/locations/{location}/correlationConfig
   *
   * @param string $name
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
   * Output only. The time at which the correlation config was last updated.
   *
   * @param string $updateTime
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1CorrelationConfig::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1CorrelationConfig');
