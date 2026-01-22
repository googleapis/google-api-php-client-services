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

namespace Google\Service\DataprocMetastore;

class CustomRegionMetadata extends \Google\Collection
{
  protected $collection_key = 'requiredReadWriteRegions';
  /**
   * The read-only regions for this custom region.
   *
   * @var string[]
   */
  public $optionalReadOnlyRegions;
  /**
   * The read-write regions for this custom region.
   *
   * @var string[]
   */
  public $requiredReadWriteRegions;
  /**
   * The Spanner witness region for this custom region.
   *
   * @var string
   */
  public $witnessRegion;

  /**
   * The read-only regions for this custom region.
   *
   * @param string[] $optionalReadOnlyRegions
   */
  public function setOptionalReadOnlyRegions($optionalReadOnlyRegions)
  {
    $this->optionalReadOnlyRegions = $optionalReadOnlyRegions;
  }
  /**
   * @return string[]
   */
  public function getOptionalReadOnlyRegions()
  {
    return $this->optionalReadOnlyRegions;
  }
  /**
   * The read-write regions for this custom region.
   *
   * @param string[] $requiredReadWriteRegions
   */
  public function setRequiredReadWriteRegions($requiredReadWriteRegions)
  {
    $this->requiredReadWriteRegions = $requiredReadWriteRegions;
  }
  /**
   * @return string[]
   */
  public function getRequiredReadWriteRegions()
  {
    return $this->requiredReadWriteRegions;
  }
  /**
   * The Spanner witness region for this custom region.
   *
   * @param string $witnessRegion
   */
  public function setWitnessRegion($witnessRegion)
  {
    $this->witnessRegion = $witnessRegion;
  }
  /**
   * @return string
   */
  public function getWitnessRegion()
  {
    return $this->witnessRegion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomRegionMetadata::class, 'Google_Service_DataprocMetastore_CustomRegionMetadata');
