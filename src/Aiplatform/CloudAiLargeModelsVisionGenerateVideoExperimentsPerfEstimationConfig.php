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

class CloudAiLargeModelsVisionGenerateVideoExperimentsPerfEstimationConfig extends \Google\Collection
{
  protected $collection_key = 'targetCharacterReferences';
  /**
   * Optional. Whether to export the USD file.
   *
   * @var bool
   */
  public $exportUsd;
  protected $sourceBoundingBoxType = CloudAiLargeModelsVisionGenerateVideoExperimentsBoundingBox::class;
  protected $sourceBoundingBoxDataType = '';
  protected $sourceVideoType = CloudAiLargeModelsVisionGenerateVideoRequestVideo::class;
  protected $sourceVideoDataType = '';
  protected $targetCharacterReferencesType = CloudAiLargeModelsVisionGenerateVideoExperimentsPerfEstimationConfigCharacterReference::class;
  protected $targetCharacterReferencesDataType = 'array';
  /**
   * Optional. How much to temporally smooth the 3D fitting optimization (the
   * fitting server's `temporal_weight`). Must be finite and >= 0. Defaults to
   * the fitting server's default (10) if unset.
   *
   * @var float
   */
  public $temporalSmoothness;

  /**
   * Optional. Whether to export the USD file.
   *
   * @param bool $exportUsd
   */
  public function setExportUsd($exportUsd)
  {
    $this->exportUsd = $exportUsd;
  }
  /**
   * @return bool
   */
  public function getExportUsd()
  {
    return $this->exportUsd;
  }
  /**
   * Required. The bounding box of the object in the source video.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsBoundingBox $sourceBoundingBox
   */
  public function setSourceBoundingBox(CloudAiLargeModelsVisionGenerateVideoExperimentsBoundingBox $sourceBoundingBox)
  {
    $this->sourceBoundingBox = $sourceBoundingBox;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsBoundingBox
   */
  public function getSourceBoundingBox()
  {
    return $this->sourceBoundingBox;
  }
  /**
   * Required. The source video for the 3D estimation.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoRequestVideo $sourceVideo
   */
  public function setSourceVideo(CloudAiLargeModelsVisionGenerateVideoRequestVideo $sourceVideo)
  {
    $this->sourceVideo = $sourceVideo;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoRequestVideo
   */
  public function getSourceVideo()
  {
    return $this->sourceVideo;
  }
  /**
   * Optional. The character reference images/videos.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsPerfEstimationConfigCharacterReference[] $targetCharacterReferences
   */
  public function setTargetCharacterReferences($targetCharacterReferences)
  {
    $this->targetCharacterReferences = $targetCharacterReferences;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsPerfEstimationConfigCharacterReference[]
   */
  public function getTargetCharacterReferences()
  {
    return $this->targetCharacterReferences;
  }
  /**
   * Optional. How much to temporally smooth the 3D fitting optimization (the
   * fitting server's `temporal_weight`). Must be finite and >= 0. Defaults to
   * the fitting server's default (10) if unset.
   *
   * @param float $temporalSmoothness
   */
  public function setTemporalSmoothness($temporalSmoothness)
  {
    $this->temporalSmoothness = $temporalSmoothness;
  }
  /**
   * @return float
   */
  public function getTemporalSmoothness()
  {
    return $this->temporalSmoothness;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionGenerateVideoExperimentsPerfEstimationConfig::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionGenerateVideoExperimentsPerfEstimationConfig');
