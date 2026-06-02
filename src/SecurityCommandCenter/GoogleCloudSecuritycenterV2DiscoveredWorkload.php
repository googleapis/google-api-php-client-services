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

class GoogleCloudSecuritycenterV2DiscoveredWorkload extends \Google\Model
{
  public const CONFIDENCE_CONFIDENCE_UNSPECIFIED = 'CONFIDENCE_UNSPECIFIED';
  public const CONFIDENCE_CONFIDENCE_HIGH = 'CONFIDENCE_HIGH';
  public const WORKLOAD_TYPE_WORKLOAD_TYPE_UNSPECIFIED = 'WORKLOAD_TYPE_UNSPECIFIED';
  public const WORKLOAD_TYPE_MCP_SERVER = 'MCP_SERVER';
  public const WORKLOAD_TYPE_AI_INFERENCE = 'AI_INFERENCE';
  public const WORKLOAD_TYPE_AGENT = 'AGENT';
  /**
   * @var string
   */
  public $confidence;
  /**
   * @var bool
   */
  public $detectedRelevantHardware;
  /**
   * @var bool
   */
  public $detectedRelevantKeywords;
  /**
   * @var bool
   */
  public $detectedRelevantPackages;
  /**
   * @var string
   */
  public $workloadType;

  /**
   * @param self::CONFIDENCE_* $confidence
   */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /**
   * @return self::CONFIDENCE_*
   */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /**
   * @param bool $detectedRelevantHardware
   */
  public function setDetectedRelevantHardware($detectedRelevantHardware)
  {
    $this->detectedRelevantHardware = $detectedRelevantHardware;
  }
  /**
   * @return bool
   */
  public function getDetectedRelevantHardware()
  {
    return $this->detectedRelevantHardware;
  }
  /**
   * @param bool $detectedRelevantKeywords
   */
  public function setDetectedRelevantKeywords($detectedRelevantKeywords)
  {
    $this->detectedRelevantKeywords = $detectedRelevantKeywords;
  }
  /**
   * @return bool
   */
  public function getDetectedRelevantKeywords()
  {
    return $this->detectedRelevantKeywords;
  }
  /**
   * @param bool $detectedRelevantPackages
   */
  public function setDetectedRelevantPackages($detectedRelevantPackages)
  {
    $this->detectedRelevantPackages = $detectedRelevantPackages;
  }
  /**
   * @return bool
   */
  public function getDetectedRelevantPackages()
  {
    return $this->detectedRelevantPackages;
  }
  /**
   * @param self::WORKLOAD_TYPE_* $workloadType
   */
  public function setWorkloadType($workloadType)
  {
    $this->workloadType = $workloadType;
  }
  /**
   * @return self::WORKLOAD_TYPE_*
   */
  public function getWorkloadType()
  {
    return $this->workloadType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2DiscoveredWorkload::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2DiscoveredWorkload');
