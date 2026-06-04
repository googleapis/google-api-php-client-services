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

class GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchema extends \Google\Collection
{
  protected $collection_key = 'postbackMappings';
  /**
   * Required. Output only. Apple App Store app ID.
   *
   * @var string
   */
  public $appId;
  protected $fineGrainedConversionValueMappingsType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaFineGrainedConversionValueMappings::class;
  protected $fineGrainedConversionValueMappingsDataType = 'array';
  /**
   * Output only. A time window (measured in hours) post-install, after which
   * the App Attribution Partner or advertiser stops calling
   * [updateConversionValue] (https://developer.apple.com/documentation/storekit
   * /skadnetwork/3566697-updateconversionvalue).
   *
   * @var int
   */
  public $measurementWindowHours;
  protected $postbackMappingsType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaPostbackMapping::class;
  protected $postbackMappingsDataType = 'array';

  /**
   * Required. Output only. Apple App Store app ID.
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
   * Output only. Fine grained conversion value mappings.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaFineGrainedConversionValueMappings[] $fineGrainedConversionValueMappings
   */
  public function setFineGrainedConversionValueMappings($fineGrainedConversionValueMappings)
  {
    $this->fineGrainedConversionValueMappings = $fineGrainedConversionValueMappings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaFineGrainedConversionValueMappings[]
   */
  public function getFineGrainedConversionValueMappings()
  {
    return $this->fineGrainedConversionValueMappings;
  }
  /**
   * Output only. A time window (measured in hours) post-install, after which
   * the App Attribution Partner or advertiser stops calling
   * [updateConversionValue] (https://developer.apple.com/documentation/storekit
   * /skadnetwork/3566697-updateconversionvalue).
   *
   * @param int $measurementWindowHours
   */
  public function setMeasurementWindowHours($measurementWindowHours)
  {
    $this->measurementWindowHours = $measurementWindowHours;
  }
  /**
   * @return int
   */
  public function getMeasurementWindowHours()
  {
    return $this->measurementWindowHours;
  }
  /**
   * Output only. Per-postback conversion value mappings for postbacks in
   * multiple conversion windows. Only applicable for SkAdNetwork versions >=
   * 4.0.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaPostbackMapping[] $postbackMappings
   */
  public function setPostbackMappings($postbackMappings)
  {
    $this->postbackMappings = $postbackMappings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaPostbackMapping[]
   */
  public function getPostbackMappings()
  {
    return $this->postbackMappings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchema::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchema');
