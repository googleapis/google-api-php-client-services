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

class GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaPostbackMapping extends \Google\Model
{
  /**
   * Not specified.
   */
  public const LOCK_WINDOW_COARSE_CONVERSION_VALUE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const LOCK_WINDOW_COARSE_CONVERSION_VALUE_UNKNOWN = 'UNKNOWN';
  /**
   * The value was not present in the postback or we do not have this data for
   * other reasons.
   */
  public const LOCK_WINDOW_COARSE_CONVERSION_VALUE_UNAVAILABLE = 'UNAVAILABLE';
  /**
   * A low coarse conversion value.
   */
  public const LOCK_WINDOW_COARSE_CONVERSION_VALUE_LOW = 'LOW';
  /**
   * A medium coarse conversion value.
   */
  public const LOCK_WINDOW_COARSE_CONVERSION_VALUE_MEDIUM = 'MEDIUM';
  /**
   * A high coarse conversion value.
   */
  public const LOCK_WINDOW_COARSE_CONVERSION_VALUE_HIGH = 'HIGH';
  /**
   * A coarse conversion value was not configured.
   */
  public const LOCK_WINDOW_COARSE_CONVERSION_VALUE_NONE = 'NONE';
  protected $coarseGrainedConversionValueMappingsType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaCoarseGrainedConversionValueMappings::class;
  protected $coarseGrainedConversionValueMappingsDataType = '';
  /**
   * Output only. Coarse grained conversion value that triggers conversion
   * window lock.
   *
   * @var string
   */
  public $lockWindowCoarseConversionValue;
  /**
   * Output only. Event name that triggers conversion window lock.
   *
   * @var string
   */
  public $lockWindowEvent;
  /**
   * Output only. Fine grained conversion value that triggers conversion window
   * lock.
   *
   * @var int
   */
  public $lockWindowFineConversionValue;
  /**
   * Output only. 0-based index that indicates the order of postback. Valid
   * values are in the inclusive range [0,2].
   *
   * @var int
   */
  public $postbackSequenceIndex;

  /**
   * Output only. Conversion value mappings for all coarse grained conversion
   * values.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaCoarseGrainedConversionValueMappings $coarseGrainedConversionValueMappings
   */
  public function setCoarseGrainedConversionValueMappings(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaCoarseGrainedConversionValueMappings $coarseGrainedConversionValueMappings)
  {
    $this->coarseGrainedConversionValueMappings = $coarseGrainedConversionValueMappings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaCoarseGrainedConversionValueMappings
   */
  public function getCoarseGrainedConversionValueMappings()
  {
    return $this->coarseGrainedConversionValueMappings;
  }
  /**
   * Output only. Coarse grained conversion value that triggers conversion
   * window lock.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, UNAVAILABLE, LOW, MEDIUM, HIGH, NONE
   *
   * @param self::LOCK_WINDOW_COARSE_CONVERSION_VALUE_* $lockWindowCoarseConversionValue
   */
  public function setLockWindowCoarseConversionValue($lockWindowCoarseConversionValue)
  {
    $this->lockWindowCoarseConversionValue = $lockWindowCoarseConversionValue;
  }
  /**
   * @return self::LOCK_WINDOW_COARSE_CONVERSION_VALUE_*
   */
  public function getLockWindowCoarseConversionValue()
  {
    return $this->lockWindowCoarseConversionValue;
  }
  /**
   * Output only. Event name that triggers conversion window lock.
   *
   * @param string $lockWindowEvent
   */
  public function setLockWindowEvent($lockWindowEvent)
  {
    $this->lockWindowEvent = $lockWindowEvent;
  }
  /**
   * @return string
   */
  public function getLockWindowEvent()
  {
    return $this->lockWindowEvent;
  }
  /**
   * Output only. Fine grained conversion value that triggers conversion window
   * lock.
   *
   * @param int $lockWindowFineConversionValue
   */
  public function setLockWindowFineConversionValue($lockWindowFineConversionValue)
  {
    $this->lockWindowFineConversionValue = $lockWindowFineConversionValue;
  }
  /**
   * @return int
   */
  public function getLockWindowFineConversionValue()
  {
    return $this->lockWindowFineConversionValue;
  }
  /**
   * Output only. 0-based index that indicates the order of postback. Valid
   * values are in the inclusive range [0,2].
   *
   * @param int $postbackSequenceIndex
   */
  public function setPostbackSequenceIndex($postbackSequenceIndex)
  {
    $this->postbackSequenceIndex = $postbackSequenceIndex;
  }
  /**
   * @return int
   */
  public function getPostbackSequenceIndex()
  {
    return $this->postbackSequenceIndex;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaPostbackMapping::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaPostbackMapping');
