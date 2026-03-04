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

class CloudAiLargeModelsVisionGenerateVideoExperiments extends \Google\Model
{
  protected $humanPoseType = CloudAiLargeModelsVisionHumanPose::class;
  protected $humanPoseDataType = '';
  /**
   * Model names, as defined in: xyz
   *
   * @var string
   */
  public $modelName;
  /**
   * Number of diffusion steps
   *
   * @var int
   */
  public $numDiffusionSteps;
  protected $promptInputsType = CloudAiLargeModelsVisionPromptInputs::class;
  protected $promptInputsDataType = '';
  /**
   * GCS URI of the grayscale video mask for Differential Diffusion. Maps to
   * sdedit_video_tmax_scale_map
   *
   * @var string
   */
  public $videoTransformMaskGcsUri;
  /**
   * SDEdit: Scalar noise level (0.0 to 1.0) Maps to sdedit_tmax
   *
   * @var float
   */
  public $videoTransformStrength;

  /**
   * Human pose parameters for Pose Control
   *
   * @param CloudAiLargeModelsVisionHumanPose $humanPose
   */
  public function setHumanPose(CloudAiLargeModelsVisionHumanPose $humanPose)
  {
    $this->humanPose = $humanPose;
  }
  /**
   * @return CloudAiLargeModelsVisionHumanPose
   */
  public function getHumanPose()
  {
    return $this->humanPose;
  }
  /**
   * Model names, as defined in: xyz
   *
   * @param string $modelName
   */
  public function setModelName($modelName)
  {
    $this->modelName = $modelName;
  }
  /**
   * @return string
   */
  public function getModelName()
  {
    return $this->modelName;
  }
  /**
   * Number of diffusion steps
   *
   * @param int $numDiffusionSteps
   */
  public function setNumDiffusionSteps($numDiffusionSteps)
  {
    $this->numDiffusionSteps = $numDiffusionSteps;
  }
  /**
   * @return int
   */
  public function getNumDiffusionSteps()
  {
    return $this->numDiffusionSteps;
  }
  /**
   * Prompt chunks for "ProModel" prompting. If set, the prompt will not be
   * rewritten, and top-level prompt ignored.
   *
   * @param CloudAiLargeModelsVisionPromptInputs $promptInputs
   */
  public function setPromptInputs(CloudAiLargeModelsVisionPromptInputs $promptInputs)
  {
    $this->promptInputs = $promptInputs;
  }
  /**
   * @return CloudAiLargeModelsVisionPromptInputs
   */
  public function getPromptInputs()
  {
    return $this->promptInputs;
  }
  /**
   * GCS URI of the grayscale video mask for Differential Diffusion. Maps to
   * sdedit_video_tmax_scale_map
   *
   * @param string $videoTransformMaskGcsUri
   */
  public function setVideoTransformMaskGcsUri($videoTransformMaskGcsUri)
  {
    $this->videoTransformMaskGcsUri = $videoTransformMaskGcsUri;
  }
  /**
   * @return string
   */
  public function getVideoTransformMaskGcsUri()
  {
    return $this->videoTransformMaskGcsUri;
  }
  /**
   * SDEdit: Scalar noise level (0.0 to 1.0) Maps to sdedit_tmax
   *
   * @param float $videoTransformStrength
   */
  public function setVideoTransformStrength($videoTransformStrength)
  {
    $this->videoTransformStrength = $videoTransformStrength;
  }
  /**
   * @return float
   */
  public function getVideoTransformStrength()
  {
    return $this->videoTransformStrength;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionGenerateVideoExperiments::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionGenerateVideoExperiments');
