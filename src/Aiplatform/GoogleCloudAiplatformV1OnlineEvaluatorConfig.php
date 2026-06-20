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

class GoogleCloudAiplatformV1OnlineEvaluatorConfig extends \Google\Model
{
  /**
   * Optional. The maximum number of evaluations to perform per run. If set to
   * 0, the number is unbounded.
   *
   * @var string
   */
  public $maxEvaluatedSamplesPerRun;
  protected $randomSamplingType = GoogleCloudAiplatformV1OnlineEvaluatorConfigRandomSampling::class;
  protected $randomSamplingDataType = '';

  /**
   * Optional. The maximum number of evaluations to perform per run. If set to
   * 0, the number is unbounded.
   *
   * @param string $maxEvaluatedSamplesPerRun
   */
  public function setMaxEvaluatedSamplesPerRun($maxEvaluatedSamplesPerRun)
  {
    $this->maxEvaluatedSamplesPerRun = $maxEvaluatedSamplesPerRun;
  }
  /**
   * @return string
   */
  public function getMaxEvaluatedSamplesPerRun()
  {
    return $this->maxEvaluatedSamplesPerRun;
  }
  /**
   * Random sampling method.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorConfigRandomSampling $randomSampling
   */
  public function setRandomSampling(GoogleCloudAiplatformV1OnlineEvaluatorConfigRandomSampling $randomSampling)
  {
    $this->randomSampling = $randomSampling;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorConfigRandomSampling
   */
  public function getRandomSampling()
  {
    return $this->randomSampling;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1OnlineEvaluatorConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1OnlineEvaluatorConfig');
