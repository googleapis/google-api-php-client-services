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

class GoogleCloudAiplatformV1PairwiseMetricResult extends \Google\Model
{
  protected $customOutputType = GoogleCloudAiplatformV1CustomOutput::class;
  protected $customOutputDataType = '';
  /**
   * @var string
   */
  public $explanation;
  /**
   * @var string
   */
  public $pairwiseChoice;

  /**
   * @param GoogleCloudAiplatformV1CustomOutput
   */
  public function setCustomOutput(GoogleCloudAiplatformV1CustomOutput $customOutput)
  {
    $this->customOutput = $customOutput;
  }
  /**
   * @return GoogleCloudAiplatformV1CustomOutput
   */
  public function getCustomOutput()
  {
    return $this->customOutput;
  }
  /**
   * @param string
   */
  public function setExplanation($explanation)
  {
    $this->explanation = $explanation;
  }
  /**
   * @return string
   */
  public function getExplanation()
  {
    return $this->explanation;
  }
  /**
   * @param string
   */
  public function setPairwiseChoice($pairwiseChoice)
  {
    $this->pairwiseChoice = $pairwiseChoice;
  }
  /**
   * @return string
   */
  public function getPairwiseChoice()
  {
    return $this->pairwiseChoice;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1PairwiseMetricResult::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1PairwiseMetricResult');
