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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1KeepAliveProbe extends \Google\Model
{
  protected $httpGetType = GoogleCloudAiplatformV1KeepAliveProbeHttpGet::class;
  protected $httpGetDataType = '';
  /**
   * Optional. Specifies the maximum duration (in seconds) to keep the instance
   * alive via this probe. Can be a maximum of 3600 seconds (1 hour).
   *
   * @var int
   */
  public $maxSeconds;

  /**
   * Optional. Specifies the HTTP GET configuration for the probe.
   *
   * @param GoogleCloudAiplatformV1KeepAliveProbeHttpGet $httpGet
   */
  public function setHttpGet(GoogleCloudAiplatformV1KeepAliveProbeHttpGet $httpGet)
  {
    $this->httpGet = $httpGet;
  }
  /**
   * @return GoogleCloudAiplatformV1KeepAliveProbeHttpGet
   */
  public function getHttpGet()
  {
    return $this->httpGet;
  }
  /**
   * Optional. Specifies the maximum duration (in seconds) to keep the instance
   * alive via this probe. Can be a maximum of 3600 seconds (1 hour).
   *
   * @param int $maxSeconds
   */
  public function setMaxSeconds($maxSeconds)
  {
    $this->maxSeconds = $maxSeconds;
  }
  /**
   * @return int
   */
  public function getMaxSeconds()
  {
    return $this->maxSeconds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1KeepAliveProbe::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1KeepAliveProbe');
