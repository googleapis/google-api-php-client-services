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

class CloudAiLargeModelsVisionGenerateVideoExperiments extends \Google\Collection
{
  public const CODEC_VIDEO_CODEC_UNSPECIFIED = 'VIDEO_CODEC_UNSPECIFIED';
  public const CODEC_VIDEO_CODEC_H264 = 'VIDEO_CODEC_H264';
  public const CODEC_VIDEO_CODEC_PRORES = 'VIDEO_CODEC_PRORES';
  public const CODEC_VIDEO_CODEC_DNXHR = 'VIDEO_CODEC_DNXHR';
  protected $collection_key = 'conditioningFrames';
  /**
   * Optional. If true, anchors the last frame in video generation by generating
   * a custom border mask.
   *
   * @var bool
   */
  public $anchorLastFrame;
  protected $audioControlType = CloudAiLargeModelsVisionGenerateVideoExperimentsAudioControlConfig::class;
  protected $audioControlDataType = '';
  /**
   * CFG scale for video-transform, perf-generation, a2v, video-textures models.
   *
   * @var float
   */
  public $cfgScale;
  /**
   * Optional. Video codec to use for output.
   *
   * @var string
   */
  public $codec;
  protected $colorAlignmentType = CloudAiLargeModelsVisionGenerateVideoExperimentsColorAlignmentConfig::class;
  protected $colorAlignmentDataType = '';
  protected $conditioningFramesType = CloudAiLargeModelsVisionGenerateVideoExperimentsConditioningFrame::class;
  protected $conditioningFramesDataType = 'array';
  /**
   * Generic key-value pairs for experimental parameters. This allows adding new
   * parameters without changing the dataplane binary.
   *
   * @var array[]
   */
  public $customParameters;
  /**
   * Optional. Colorspace to be used for all EXR inputs.
   *
   * @var string
   */
  public $exrColorSpaceOverride;
  protected $humanPoseType = CloudAiLargeModelsVisionHumanPose::class;
  protected $humanPoseDataType = '';
  /**
   * Optional. BNS override for model backend. Enabled only for local and
   * autopush environments by the flag `lvm_allow_model_zoo_bns_override`.
   *
   * @var string
   */
  public $modelEndpointOverride;
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
  protected $omniRewriterType = CloudAiLargeModelsVisionGenerateVideoExperimentsOmniRewriterConfig::class;
  protected $omniRewriterDataType = '';
  /**
   * The original REST API request JSON sent by the user, in the
   * instances/parameters format. Preserved for saving alongside output
   * artifacts so users can reproduce their requests. This field is populated by
   * the API handler and is not user-settable.
   *
   * @var string
   */
  public $originalRequestJson;
  protected $outpaintConfigType = CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfig::class;
  protected $outpaintConfigDataType = '';
  protected $promptInputsType = CloudAiLargeModelsVisionPromptInputs::class;
  protected $promptInputsDataType = '';
  /**
   * Optional tag for tracking the source of this request. Allowed values:
   * "colab", "comfyui", "curl", "flowresearch", "vertexstudio". Unrecognized
   * tags are recorded as "unknown" in metrics. Tags do not affect video
   * generation behavior. Up to 16 characters, ASCII alphanumeric, hyphens, and
   * underscores only.
   *
   * @var string
   */
  public $requestOriginTag;
  protected $schedulingConfigType = CloudAiLargeModelsVisionGenerateVideoExperimentsVESchedulingConfig::class;
  protected $schedulingConfigDataType = '';
  protected $seamlessType = CloudAiLargeModelsVisionSeamless::class;
  protected $seamlessDataType = '';
  protected $spatialAlignmentType = CloudAiLargeModelsVisionGenerateVideoExperimentsSpatialAlignmentConfig::class;
  protected $spatialAlignmentDataType = '';
  /**
   * If true (default), truncate input videos that exceed the model's maximum
   * frame count by applying a frame_selection_config to __video_file__ inputs.
   * Set to false to preserve the existing fail-fast behavior.
   *
   * @var bool
   */
  public $truncateInputVideo;
  protected $videoTransformType = CloudAiLargeModelsVisionGenerateVideoExperimentsVideoTransform::class;
  protected $videoTransformDataType = '';
  /**
   * GCS URI of the grayscale video mask for Differential Diffusion. Maps to
   * sdedit_video_tmax_scale_map
   *
   * @deprecated
   * @var string
   */
  public $videoTransformMaskGcsUri;
  /**
   * SDEdit: Scalar noise level (0.0 to 1.0) Maps to sdedit_tmax
   *
   * @deprecated
   * @var float
   */
  public $videoTransformStrength;

  /**
   * Optional. If true, anchors the last frame in video generation by generating
   * a custom border mask.
   *
   * @param bool $anchorLastFrame
   */
  public function setAnchorLastFrame($anchorLastFrame)
  {
    $this->anchorLastFrame = $anchorLastFrame;
  }
  /**
   * @return bool
   */
  public function getAnchorLastFrame()
  {
    return $this->anchorLastFrame;
  }
  /**
   * Optional. Audio control configuration.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsAudioControlConfig $audioControl
   */
  public function setAudioControl(CloudAiLargeModelsVisionGenerateVideoExperimentsAudioControlConfig $audioControl)
  {
    $this->audioControl = $audioControl;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsAudioControlConfig
   */
  public function getAudioControl()
  {
    return $this->audioControl;
  }
  /**
   * CFG scale for video-transform, perf-generation, a2v, video-textures models.
   *
   * @param float $cfgScale
   */
  public function setCfgScale($cfgScale)
  {
    $this->cfgScale = $cfgScale;
  }
  /**
   * @return float
   */
  public function getCfgScale()
  {
    return $this->cfgScale;
  }
  /**
   * Optional. Video codec to use for output.
   *
   * Accepted values: VIDEO_CODEC_UNSPECIFIED, VIDEO_CODEC_H264,
   * VIDEO_CODEC_PRORES, VIDEO_CODEC_DNXHR
   *
   * @param self::CODEC_* $codec
   */
  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  /**
   * @return self::CODEC_*
   */
  public function getCodec()
  {
    return $this->codec;
  }
  /**
   * Optional. Color alignment configuration.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsColorAlignmentConfig $colorAlignment
   */
  public function setColorAlignment(CloudAiLargeModelsVisionGenerateVideoExperimentsColorAlignmentConfig $colorAlignment)
  {
    $this->colorAlignment = $colorAlignment;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsColorAlignmentConfig
   */
  public function getColorAlignment()
  {
    return $this->colorAlignment;
  }
  /**
   * Conditioning frames for veo experimental models ONLY, not to be confused
   * with keyframes (ID:31) in GenerateVideoRequest.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsConditioningFrame[] $conditioningFrames
   */
  public function setConditioningFrames($conditioningFrames)
  {
    $this->conditioningFrames = $conditioningFrames;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsConditioningFrame[]
   */
  public function getConditioningFrames()
  {
    return $this->conditioningFrames;
  }
  /**
   * Generic key-value pairs for experimental parameters. This allows adding new
   * parameters without changing the dataplane binary.
   *
   * @param array[] $customParameters
   */
  public function setCustomParameters($customParameters)
  {
    $this->customParameters = $customParameters;
  }
  /**
   * @return array[]
   */
  public function getCustomParameters()
  {
    return $this->customParameters;
  }
  /**
   * Optional. Colorspace to be used for all EXR inputs.
   *
   * @param string $exrColorSpaceOverride
   */
  public function setExrColorSpaceOverride($exrColorSpaceOverride)
  {
    $this->exrColorSpaceOverride = $exrColorSpaceOverride;
  }
  /**
   * @return string
   */
  public function getExrColorSpaceOverride()
  {
    return $this->exrColorSpaceOverride;
  }
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
   * Optional. BNS override for model backend. Enabled only for local and
   * autopush environments by the flag `lvm_allow_model_zoo_bns_override`.
   *
   * @param string $modelEndpointOverride
   */
  public function setModelEndpointOverride($modelEndpointOverride)
  {
    $this->modelEndpointOverride = $modelEndpointOverride;
  }
  /**
   * @return string
   */
  public function getModelEndpointOverride()
  {
    return $this->modelEndpointOverride;
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
   * Optional. Omni Rewriter configuration.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsOmniRewriterConfig $omniRewriter
   */
  public function setOmniRewriter(CloudAiLargeModelsVisionGenerateVideoExperimentsOmniRewriterConfig $omniRewriter)
  {
    $this->omniRewriter = $omniRewriter;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsOmniRewriterConfig
   */
  public function getOmniRewriter()
  {
    return $this->omniRewriter;
  }
  /**
   * The original REST API request JSON sent by the user, in the
   * instances/parameters format. Preserved for saving alongside output
   * artifacts so users can reproduce their requests. This field is populated by
   * the API handler and is not user-settable.
   *
   * @param string $originalRequestJson
   */
  public function setOriginalRequestJson($originalRequestJson)
  {
    $this->originalRequestJson = $originalRequestJson;
  }
  /**
   * @return string
   */
  public function getOriginalRequestJson()
  {
    return $this->originalRequestJson;
  }
  /**
   * Config for Outpainting task.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfig $outpaintConfig
   */
  public function setOutpaintConfig(CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfig $outpaintConfig)
  {
    $this->outpaintConfig = $outpaintConfig;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfig
   */
  public function getOutpaintConfig()
  {
    return $this->outpaintConfig;
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
   * Optional tag for tracking the source of this request. Allowed values:
   * "colab", "comfyui", "curl", "flowresearch", "vertexstudio". Unrecognized
   * tags are recorded as "unknown" in metrics. Tags do not affect video
   * generation behavior. Up to 16 characters, ASCII alphanumeric, hyphens, and
   * underscores only.
   *
   * @param string $requestOriginTag
   */
  public function setRequestOriginTag($requestOriginTag)
  {
    $this->requestOriginTag = $requestOriginTag;
  }
  /**
   * @return string
   */
  public function getRequestOriginTag()
  {
    return $this->requestOriginTag;
  }
  /**
   * Optional. Scheduling configuration.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsVESchedulingConfig $schedulingConfig
   */
  public function setSchedulingConfig(CloudAiLargeModelsVisionGenerateVideoExperimentsVESchedulingConfig $schedulingConfig)
  {
    $this->schedulingConfig = $schedulingConfig;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsVESchedulingConfig
   */
  public function getSchedulingConfig()
  {
    return $this->schedulingConfig;
  }
  /**
   * Parameters for seamless (edge-continuous) video generation, enabling
   * temporal looping and/or spatial tessellation.
   *
   * @param CloudAiLargeModelsVisionSeamless $seamless
   */
  public function setSeamless(CloudAiLargeModelsVisionSeamless $seamless)
  {
    $this->seamless = $seamless;
  }
  /**
   * @return CloudAiLargeModelsVisionSeamless
   */
  public function getSeamless()
  {
    return $this->seamless;
  }
  /**
   * Optional. Spatial alignment configuration.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsSpatialAlignmentConfig $spatialAlignment
   */
  public function setSpatialAlignment(CloudAiLargeModelsVisionGenerateVideoExperimentsSpatialAlignmentConfig $spatialAlignment)
  {
    $this->spatialAlignment = $spatialAlignment;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsSpatialAlignmentConfig
   */
  public function getSpatialAlignment()
  {
    return $this->spatialAlignment;
  }
  /**
   * If true (default), truncate input videos that exceed the model's maximum
   * frame count by applying a frame_selection_config to __video_file__ inputs.
   * Set to false to preserve the existing fail-fast behavior.
   *
   * @param bool $truncateInputVideo
   */
  public function setTruncateInputVideo($truncateInputVideo)
  {
    $this->truncateInputVideo = $truncateInputVideo;
  }
  /**
   * @return bool
   */
  public function getTruncateInputVideo()
  {
    return $this->truncateInputVideo;
  }
  /**
   * Video transform configuration for omni editing models.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsVideoTransform $videoTransform
   */
  public function setVideoTransform(CloudAiLargeModelsVisionGenerateVideoExperimentsVideoTransform $videoTransform)
  {
    $this->videoTransform = $videoTransform;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsVideoTransform
   */
  public function getVideoTransform()
  {
    return $this->videoTransform;
  }
  /**
   * GCS URI of the grayscale video mask for Differential Diffusion. Maps to
   * sdedit_video_tmax_scale_map
   *
   * @deprecated
   * @param string $videoTransformMaskGcsUri
   */
  public function setVideoTransformMaskGcsUri($videoTransformMaskGcsUri)
  {
    $this->videoTransformMaskGcsUri = $videoTransformMaskGcsUri;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getVideoTransformMaskGcsUri()
  {
    return $this->videoTransformMaskGcsUri;
  }
  /**
   * SDEdit: Scalar noise level (0.0 to 1.0) Maps to sdedit_tmax
   *
   * @deprecated
   * @param float $videoTransformStrength
   */
  public function setVideoTransformStrength($videoTransformStrength)
  {
    $this->videoTransformStrength = $videoTransformStrength;
  }
  /**
   * @deprecated
   * @return float
   */
  public function getVideoTransformStrength()
  {
    return $this->videoTransformStrength;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionGenerateVideoExperiments::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionGenerateVideoExperiments');
