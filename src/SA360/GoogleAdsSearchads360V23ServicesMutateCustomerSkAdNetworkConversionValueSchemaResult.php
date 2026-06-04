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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaResult extends \Google\Model
{
  /**
   * App ID of the SkanConversionValue modified.
   *
   * @var string
   */
  public $appId;
  /**
   * Resource name of the customer that was modified.
   *
   * @var string
   */
  public $resourceName;

  /**
   * App ID of the SkanConversionValue modified.
   *
   * @param string $appId
   */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /**
   * @return string
   */
  public function getAppId()
  {
    return $this->appId;
  }
  /**
   * Resource name of the customer that was modified.
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaResult::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMutateCustomerSkAdNetworkConversionValueSchemaResult');
