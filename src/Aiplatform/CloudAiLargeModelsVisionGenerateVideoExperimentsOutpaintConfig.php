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

class CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfig extends \Google\Collection
{
  public const OUTPUT_SPEC_OUTPUT_SPEC_UNSPECIFIED = 'OUTPUT_SPEC_UNSPECIFIED';
  /**
   * High spec: 1920x1072 resolution, 72 total frames.
   */
  public const OUTPUT_SPEC_OUTPUT_SPEC_1920X1072x72 = 'OUTPUT_SPEC_1920X1072x72';
  /**
   * Medium spec: 1280x720 resolution, 192 total frames.
   */
  public const OUTPUT_SPEC_OUTPUT_SPEC_1280X720x192 = 'OUTPUT_SPEC_1280X720x192';
  /**
   * Low spec: 960x544 resolution, 432 total frames.
   */
  public const OUTPUT_SPEC_OUTPUT_SPEC_960X544x432 = 'OUTPUT_SPEC_960X544x432';
  /**
   * Medium spec at 1280x720, 144 total frames. Shorter than
   * OUTPUT_SPEC_1280X720x192 and higher quality at the same resolution.
   */
  public const OUTPUT_SPEC_OUTPUT_SPEC_1280X720x144 = 'OUTPUT_SPEC_1280X720x144';
  protected $collection_key = 'inputFrames';
  protected $inputFramesType = CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfigFrameSource::class;
  protected $inputFramesDataType = 'array';
  /**
   * The output specification (defines target resolution and frame count).
   * Required.
   *
   * @var string
   */
  public $outputSpec;

  /**
   * The input frames for outpainting. Required.
   *
   * @param CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfigFrameSource[] $inputFrames
   */
  public function setInputFrames($inputFrames)
  {
    $this->inputFrames = $inputFrames;
  }
  /**
   * @return CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfigFrameSource[]
   */
  public function getInputFrames()
  {
    return $this->inputFrames;
  }
  /**
   * The output specification (defines target resolution and frame count).
   * Required.
   *
   * Accepted values: OUTPUT_SPEC_UNSPECIFIED, OUTPUT_SPEC_1920X1072x72,
   * OUTPUT_SPEC_1280X720x192, OUTPUT_SPEC_960X544x432, OUTPUT_SPEC_1280X720x144
   *
   * @param self::OUTPUT_SPEC_* $outputSpec
   */
  public function setOutputSpec($outputSpec)
  {
    $this->outputSpec = $outputSpec;
  }
  /**
   * @return self::OUTPUT_SPEC_*
   */
  public function getOutputSpec()
  {
    return $this->outputSpec;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfig::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionGenerateVideoExperimentsOutpaintConfig');
