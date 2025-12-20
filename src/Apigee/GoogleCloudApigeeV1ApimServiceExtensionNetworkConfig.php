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

namespace Google\Service\Apigee;

class GoogleCloudApigeeV1ApimServiceExtensionNetworkConfig extends \Google\Model
{
  /**
   * Required. The region for the PSC NEG.
   *
   * @var string
   */
  public $region;
  /**
   * Required. The subnet for the PSC NEG. Format:
   * projects/{project}/regions/{region}/subnetworks/{subnet}
   *
   * @var string
   */
  public $subnet;

  /**
   * Required. The region for the PSC NEG.
   *
   * @param string $region
   */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /**
   * @return string
   */
  public function getRegion()
  {
    return $this->region;
  }
  /**
   * Required. The subnet for the PSC NEG. Format:
   * projects/{project}/regions/{region}/subnetworks/{subnet}
   *
   * @param string $subnet
   */
  public function setSubnet($subnet)
  {
    $this->subnet = $subnet;
  }
  /**
   * @return string
   */
  public function getSubnet()
  {
    return $this->subnet;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApigeeV1ApimServiceExtensionNetworkConfig::class, 'Google_Service_Apigee_GoogleCloudApigeeV1ApimServiceExtensionNetworkConfig');
