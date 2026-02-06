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

namespace Google\Service\CustomerEngagementSuite;

class Omnichannel extends \Google\Model
{
  /**
   * Output only. Timestamp when the omnichannel resource was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Human-readable description of the omnichannel resource.
   *
   * @var string
   */
  public $description;
  /**
   * Required. Display name of the omnichannel resource.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Etag used to ensure the object hasn't changed during a read-
   * modify-write operation.
   *
   * @var string
   */
  public $etag;
  protected $integrationConfigType = OmnichannelIntegrationConfig::class;
  protected $integrationConfigDataType = '';
  /**
   * Identifier. The unique identifier of the omnichannel resource. Format:
   * `projects/{project}/locations/{location}/omnichannels/{omnichannel}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Timestamp when the omnichannel resource was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Timestamp when the omnichannel resource was created.
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
   * Optional. Human-readable description of the omnichannel resource.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. Display name of the omnichannel resource.
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
   * Output only. Etag used to ensure the object hasn't changed during a read-
   * modify-write operation.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Optional. The integration config for the omnichannel resource.
   *
   * @param OmnichannelIntegrationConfig $integrationConfig
   */
  public function setIntegrationConfig(OmnichannelIntegrationConfig $integrationConfig)
  {
    $this->integrationConfig = $integrationConfig;
  }
  /**
   * @return OmnichannelIntegrationConfig
   */
  public function getIntegrationConfig()
  {
    return $this->integrationConfig;
  }
  /**
   * Identifier. The unique identifier of the omnichannel resource. Format:
   * `projects/{project}/locations/{location}/omnichannels/{omnichannel}`
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
   * Output only. Timestamp when the omnichannel resource was last updated.
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
class_alias(Omnichannel::class, 'Google_Service_CustomerEngagementSuite_Omnichannel');
