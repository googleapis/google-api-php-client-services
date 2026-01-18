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

class GoogleCloudAiplatformV1EvaluateDatasetResponse extends \Google\Model
{
  protected $aggregationOutputType = GoogleCloudAiplatformV1AggregationOutput::class;
  protected $aggregationOutputDataType = '';
  protected $outputInfoType = GoogleCloudAiplatformV1OutputInfo::class;
  protected $outputInfoDataType = '';

  /**
   * Output only. Aggregation statistics derived from results of
   * EvaluationService.
   *
   * @param GoogleCloudAiplatformV1AggregationOutput $aggregationOutput
   */
  public function setAggregationOutput(GoogleCloudAiplatformV1AggregationOutput $aggregationOutput)
  {
    $this->aggregationOutput = $aggregationOutput;
  }
  /**
   * @return GoogleCloudAiplatformV1AggregationOutput
   */
  public function getAggregationOutput()
  {
    return $this->aggregationOutput;
  }
  /**
   * Output only. Output info for EvaluationService.
   *
   * @param GoogleCloudAiplatformV1OutputInfo $outputInfo
   */
  public function setOutputInfo(GoogleCloudAiplatformV1OutputInfo $outputInfo)
  {
    $this->outputInfo = $outputInfo;
  }
  /**
   * @return GoogleCloudAiplatformV1OutputInfo
   */
  public function getOutputInfo()
  {
    return $this->outputInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluateDatasetResponse::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluateDatasetResponse');
