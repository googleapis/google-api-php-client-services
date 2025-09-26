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

namespace Google\Service\BeyondCorp;

class GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeaders extends \Google\Model
{
  protected $deviceInfoType = GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedDeviceInfo::class;
  protected $deviceInfoDataType = '';
  protected $groupInfoType = GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedGroupInfo::class;
  protected $groupInfoDataType = '';
  /**
   * @var string
   */
  public $outputType;
  protected $userInfoType = GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedUserInfo::class;
  protected $userInfoDataType = '';

  /**
   * @param GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedDeviceInfo
   */
  public function setDeviceInfo(GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedDeviceInfo $deviceInfo)
  {
    $this->deviceInfo = $deviceInfo;
  }
  /**
   * @return GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedDeviceInfo
   */
  public function getDeviceInfo()
  {
    return $this->deviceInfo;
  }
  /**
   * @param GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedGroupInfo
   */
  public function setGroupInfo(GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedGroupInfo $groupInfo)
  {
    $this->groupInfo = $groupInfo;
  }
  /**
   * @return GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedGroupInfo
   */
  public function getGroupInfo()
  {
    return $this->groupInfo;
  }
  /**
   * @param string
   */
  public function setOutputType($outputType)
  {
    $this->outputType = $outputType;
  }
  /**
   * @return string
   */
  public function getOutputType()
  {
    return $this->outputType;
  }
  /**
   * @param GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedUserInfo
   */
  public function setUserInfo(GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedUserInfo $userInfo)
  {
    $this->userInfo = $userInfo;
  }
  /**
   * @return GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeadersDelegatedUserInfo
   */
  public function getUserInfo()
  {
    return $this->userInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeaders::class, 'Google_Service_BeyondCorp_GoogleCloudBeyondcorpSecuritygatewaysV1ContextualHeaders');
