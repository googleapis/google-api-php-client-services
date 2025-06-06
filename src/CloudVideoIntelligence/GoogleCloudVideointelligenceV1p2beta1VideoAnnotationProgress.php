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

namespace Google\Service\CloudVideoIntelligence;

class GoogleCloudVideointelligenceV1p2beta1VideoAnnotationProgress extends \Google\Model
{
  protected $exportStatusType = GoogleCloudVideointelligenceV1p2beta1ExportToOutputUriStatus::class;
  protected $exportStatusDataType = '';
  /**
   * @var string
   */
  public $feature;
  /**
   * @var string
   */
  public $inputUri;
  /**
   * @var int
   */
  public $progressPercent;
  protected $segmentType = GoogleCloudVideointelligenceV1p2beta1VideoSegment::class;
  protected $segmentDataType = '';
  /**
   * @var string
   */
  public $startTime;
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param GoogleCloudVideointelligenceV1p2beta1ExportToOutputUriStatus
   */
  public function setExportStatus(GoogleCloudVideointelligenceV1p2beta1ExportToOutputUriStatus $exportStatus)
  {
    $this->exportStatus = $exportStatus;
  }
  /**
   * @return GoogleCloudVideointelligenceV1p2beta1ExportToOutputUriStatus
   */
  public function getExportStatus()
  {
    return $this->exportStatus;
  }
  /**
   * @param string
   */
  public function setFeature($feature)
  {
    $this->feature = $feature;
  }
  /**
   * @return string
   */
  public function getFeature()
  {
    return $this->feature;
  }
  /**
   * @param string
   */
  public function setInputUri($inputUri)
  {
    $this->inputUri = $inputUri;
  }
  /**
   * @return string
   */
  public function getInputUri()
  {
    return $this->inputUri;
  }
  /**
   * @param int
   */
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /**
   * @return int
   */
  public function getProgressPercent()
  {
    return $this->progressPercent;
  }
  /**
   * @param GoogleCloudVideointelligenceV1p2beta1VideoSegment
   */
  public function setSegment(GoogleCloudVideointelligenceV1p2beta1VideoSegment $segment)
  {
    $this->segment = $segment;
  }
  /**
   * @return GoogleCloudVideointelligenceV1p2beta1VideoSegment
   */
  public function getSegment()
  {
    return $this->segment;
  }
  /**
   * @param string
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudVideointelligenceV1p2beta1VideoAnnotationProgress::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1VideoAnnotationProgress');
