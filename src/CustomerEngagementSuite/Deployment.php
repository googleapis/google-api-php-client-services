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

class Deployment extends \Google\Model
{
  /**
   * Required. The resource name of the app version to deploy. Format:
   * projects/{project}/locations/{location}/apps/{app}/versions/{version}
   *
   * @var string
   */
  public $appVersion;
  protected $channelProfileType = ChannelProfile::class;
  protected $channelProfileDataType = '';
  /**
   * Output only. Timestamp when this deployment was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. Display name of the deployment.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Etag used to ensure the object hasn't changed during a read-
   * modify-write operation. If the etag is empty, the update will overwrite any
   * concurrent changes.
   *
   * @var string
   */
  public $etag;
  /**
   * Identifier. The resource name of the deployment. Format:
   * projects/{project}/locations/{location}/apps/{app}/deployments/{deployment}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Timestamp when this deployment was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. The resource name of the app version to deploy. Format:
   * projects/{project}/locations/{location}/apps/{app}/versions/{version}
   *
   * @param string $appVersion
   */
  public function setAppVersion($appVersion)
  {
    $this->appVersion = $appVersion;
  }
  /**
   * @return string
   */
  public function getAppVersion()
  {
    return $this->appVersion;
  }
  /**
   * Required. The channel profile used in the deployment.
   *
   * @param ChannelProfile $channelProfile
   */
  public function setChannelProfile(ChannelProfile $channelProfile)
  {
    $this->channelProfile = $channelProfile;
  }
  /**
   * @return ChannelProfile
   */
  public function getChannelProfile()
  {
    return $this->channelProfile;
  }
  /**
   * Output only. Timestamp when this deployment was created.
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
   * Required. Display name of the deployment.
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
   * modify-write operation. If the etag is empty, the update will overwrite any
   * concurrent changes.
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
   * Identifier. The resource name of the deployment. Format:
   * projects/{project}/locations/{location}/apps/{app}/deployments/{deployment}
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
   * Output only. Timestamp when this deployment was last updated.
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
class_alias(Deployment::class, 'Google_Service_CustomerEngagementSuite_Deployment');
