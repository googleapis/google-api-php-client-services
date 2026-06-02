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

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV2Access extends \Google\Collection
{
  protected $collection_key = 'serviceAccountDelegationInfo';
  /**
   * @var string
   */
  public $callerIp;
  protected $callerIpGeoType = GoogleCloudSecuritycenterV2Geolocation::class;
  protected $callerIpGeoDataType = '';
  /**
   * @var string
   */
  public $methodName;
  /**
   * @var string
   */
  public $principalEmail;
  /**
   * @var string
   */
  public $principalSubject;
  protected $serviceAccountDelegationInfoType = GoogleCloudSecuritycenterV2ServiceAccountDelegationInfo::class;
  protected $serviceAccountDelegationInfoDataType = 'array';
  /**
   * @var string
   */
  public $serviceAccountKeyName;
  /**
   * @var string
   */
  public $serviceName;
  /**
   * @var string
   */
  public $userAgent;
  /**
   * @var string
   */
  public $userAgentFamily;
  /**
   * @var string
   */
  public $userName;

  /**
   * @param string $callerIp
   */
  public function setCallerIp($callerIp)
  {
    $this->callerIp = $callerIp;
  }
  /**
   * @return string
   */
  public function getCallerIp()
  {
    return $this->callerIp;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Geolocation $callerIpGeo
   */
  public function setCallerIpGeo(GoogleCloudSecuritycenterV2Geolocation $callerIpGeo)
  {
    $this->callerIpGeo = $callerIpGeo;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Geolocation
   */
  public function getCallerIpGeo()
  {
    return $this->callerIpGeo;
  }
  /**
   * @param string $methodName
   */
  public function setMethodName($methodName)
  {
    $this->methodName = $methodName;
  }
  /**
   * @return string
   */
  public function getMethodName()
  {
    return $this->methodName;
  }
  /**
   * @param string $principalEmail
   */
  public function setPrincipalEmail($principalEmail)
  {
    $this->principalEmail = $principalEmail;
  }
  /**
   * @return string
   */
  public function getPrincipalEmail()
  {
    return $this->principalEmail;
  }
  /**
   * @param string $principalSubject
   */
  public function setPrincipalSubject($principalSubject)
  {
    $this->principalSubject = $principalSubject;
  }
  /**
   * @return string
   */
  public function getPrincipalSubject()
  {
    return $this->principalSubject;
  }
  /**
   * @param GoogleCloudSecuritycenterV2ServiceAccountDelegationInfo[] $serviceAccountDelegationInfo
   */
  public function setServiceAccountDelegationInfo($serviceAccountDelegationInfo)
  {
    $this->serviceAccountDelegationInfo = $serviceAccountDelegationInfo;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ServiceAccountDelegationInfo[]
   */
  public function getServiceAccountDelegationInfo()
  {
    return $this->serviceAccountDelegationInfo;
  }
  /**
   * @param string $serviceAccountKeyName
   */
  public function setServiceAccountKeyName($serviceAccountKeyName)
  {
    $this->serviceAccountKeyName = $serviceAccountKeyName;
  }
  /**
   * @return string
   */
  public function getServiceAccountKeyName()
  {
    return $this->serviceAccountKeyName;
  }
  /**
   * @param string $serviceName
   */
  public function setServiceName($serviceName)
  {
    $this->serviceName = $serviceName;
  }
  /**
   * @return string
   */
  public function getServiceName()
  {
    return $this->serviceName;
  }
  /**
   * @param string $userAgent
   */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /**
   * @return string
   */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
  /**
   * @param string $userAgentFamily
   */
  public function setUserAgentFamily($userAgentFamily)
  {
    $this->userAgentFamily = $userAgentFamily;
  }
  /**
   * @return string
   */
  public function getUserAgentFamily()
  {
    return $this->userAgentFamily;
  }
  /**
   * @param string $userName
   */
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  /**
   * @return string
   */
  public function getUserName()
  {
    return $this->userName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2Access::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2Access');
