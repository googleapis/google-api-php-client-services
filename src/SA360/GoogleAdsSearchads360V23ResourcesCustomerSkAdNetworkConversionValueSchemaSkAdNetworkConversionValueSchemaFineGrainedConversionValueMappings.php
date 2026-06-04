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

class GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaFineGrainedConversionValueMappings extends \Google\Model
{
  protected $conversionValueMappingType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping::class;
  protected $conversionValueMappingDataType = '';
  /**
   * Output only. Fine grained conversion value. Valid values are in the
   * inclusive range [0,63].
   *
   * @var int
   */
  public $fineGrainedConversionValue;

  /**
   * Output only. Conversion events the fine grained conversion value maps to.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping $conversionValueMapping
   */
  public function setConversionValueMapping(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping $conversionValueMapping)
  {
    $this->conversionValueMapping = $conversionValueMapping;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaConversionValueMapping
   */
  public function getConversionValueMapping()
  {
    return $this->conversionValueMapping;
  }
  /**
   * Output only. Fine grained conversion value. Valid values are in the
   * inclusive range [0,63].
   *
   * @param int $fineGrainedConversionValue
   */
  public function setFineGrainedConversionValue($fineGrainedConversionValue)
  {
    $this->fineGrainedConversionValue = $fineGrainedConversionValue;
  }
  /**
   * @return int
   */
  public function getFineGrainedConversionValue()
  {
    return $this->fineGrainedConversionValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaFineGrainedConversionValueMappings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaFineGrainedConversionValueMappings');
