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

class GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaCoarseGrainedConversionValueMappings extends \Google\Model
{
  protected $highConversionValueMappingType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping::class;
  protected $highConversionValueMappingDataType = '';
  protected $lowConversionValueMappingType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping::class;
  protected $lowConversionValueMappingDataType = '';
  protected $mediumConversionValueMappingType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping::class;
  protected $mediumConversionValueMappingDataType = '';

  /**
   * Output only. Mapping for "high" coarse conversion value.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping $highConversionValueMapping
   */
  public function setHighConversionValueMapping(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping $highConversionValueMapping)
  {
    $this->highConversionValueMapping = $highConversionValueMapping;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping
   */
  public function getHighConversionValueMapping()
  {
    return $this->highConversionValueMapping;
  }
  /**
   * Output only. Mapping for "low" coarse conversion value.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping $lowConversionValueMapping
   */
  public function setLowConversionValueMapping(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping $lowConversionValueMapping)
  {
    $this->lowConversionValueMapping = $lowConversionValueMapping;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping
   */
  public function getLowConversionValueMapping()
  {
    return $this->lowConversionValueMapping;
  }
  /**
   * Output only. Mapping for "medium" coarse conversion value.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping $mediumConversionValueMapping
   */
  public function setMediumConversionValueMapping(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping $mediumConversionValueMapping)
  {
    $this->mediumConversionValueMapping = $mediumConversionValueMapping;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping
   */
  public function getMediumConversionValueMapping()
  {
    return $this->mediumConversionValueMapping;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaCoarseGrainedConversionValueMappings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaCoarseGrainedConversionValueMappings');
