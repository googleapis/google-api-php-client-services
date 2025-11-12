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

class GoogleCloudAiplatformV1PreferenceOptimizationDataStats extends \Google\Collection
{
  protected $collection_key = 'userDatasetExamples';
  /**
   * @var string[]
   */
  public $droppedExampleIndices;
  /**
   * @var string[]
   */
  public $droppedExampleReasons;
  protected $scoreVariancePerExampleDistributionType = GoogleCloudAiplatformV1DatasetDistribution::class;
  protected $scoreVariancePerExampleDistributionDataType = '';
  protected $scoresDistributionType = GoogleCloudAiplatformV1DatasetDistribution::class;
  protected $scoresDistributionDataType = '';
  /**
   * @var string
   */
  public $totalBillableTokenCount;
  /**
   * @var string
   */
  public $tuningDatasetExampleCount;
  /**
   * @var string
   */
  public $tuningStepCount;
  protected $userDatasetExamplesType = GoogleCloudAiplatformV1GeminiPreferenceExample::class;
  protected $userDatasetExamplesDataType = 'array';
  protected $userInputTokenDistributionType = GoogleCloudAiplatformV1DatasetDistribution::class;
  protected $userInputTokenDistributionDataType = '';
  protected $userOutputTokenDistributionType = GoogleCloudAiplatformV1DatasetDistribution::class;
  protected $userOutputTokenDistributionDataType = '';

  /**
   * @param string[]
   */
  public function setDroppedExampleIndices($droppedExampleIndices)
  {
    $this->droppedExampleIndices = $droppedExampleIndices;
  }
  /**
   * @return string[]
   */
  public function getDroppedExampleIndices()
  {
    return $this->droppedExampleIndices;
  }
  /**
   * @param string[]
   */
  public function setDroppedExampleReasons($droppedExampleReasons)
  {
    $this->droppedExampleReasons = $droppedExampleReasons;
  }
  /**
   * @return string[]
   */
  public function getDroppedExampleReasons()
  {
    return $this->droppedExampleReasons;
  }
  /**
   * @param GoogleCloudAiplatformV1DatasetDistribution
   */
  public function setScoreVariancePerExampleDistribution(GoogleCloudAiplatformV1DatasetDistribution $scoreVariancePerExampleDistribution)
  {
    $this->scoreVariancePerExampleDistribution = $scoreVariancePerExampleDistribution;
  }
  /**
   * @return GoogleCloudAiplatformV1DatasetDistribution
   */
  public function getScoreVariancePerExampleDistribution()
  {
    return $this->scoreVariancePerExampleDistribution;
  }
  /**
   * @param GoogleCloudAiplatformV1DatasetDistribution
   */
  public function setScoresDistribution(GoogleCloudAiplatformV1DatasetDistribution $scoresDistribution)
  {
    $this->scoresDistribution = $scoresDistribution;
  }
  /**
   * @return GoogleCloudAiplatformV1DatasetDistribution
   */
  public function getScoresDistribution()
  {
    return $this->scoresDistribution;
  }
  /**
   * @param string
   */
  public function setTotalBillableTokenCount($totalBillableTokenCount)
  {
    $this->totalBillableTokenCount = $totalBillableTokenCount;
  }
  /**
   * @return string
   */
  public function getTotalBillableTokenCount()
  {
    return $this->totalBillableTokenCount;
  }
  /**
   * @param string
   */
  public function setTuningDatasetExampleCount($tuningDatasetExampleCount)
  {
    $this->tuningDatasetExampleCount = $tuningDatasetExampleCount;
  }
  /**
   * @return string
   */
  public function getTuningDatasetExampleCount()
  {
    return $this->tuningDatasetExampleCount;
  }
  /**
   * @param string
   */
  public function setTuningStepCount($tuningStepCount)
  {
    $this->tuningStepCount = $tuningStepCount;
  }
  /**
   * @return string
   */
  public function getTuningStepCount()
  {
    return $this->tuningStepCount;
  }
  /**
   * @param GoogleCloudAiplatformV1GeminiPreferenceExample[]
   */
  public function setUserDatasetExamples($userDatasetExamples)
  {
    $this->userDatasetExamples = $userDatasetExamples;
  }
  /**
   * @return GoogleCloudAiplatformV1GeminiPreferenceExample[]
   */
  public function getUserDatasetExamples()
  {
    return $this->userDatasetExamples;
  }
  /**
   * @param GoogleCloudAiplatformV1DatasetDistribution
   */
  public function setUserInputTokenDistribution(GoogleCloudAiplatformV1DatasetDistribution $userInputTokenDistribution)
  {
    $this->userInputTokenDistribution = $userInputTokenDistribution;
  }
  /**
   * @return GoogleCloudAiplatformV1DatasetDistribution
   */
  public function getUserInputTokenDistribution()
  {
    return $this->userInputTokenDistribution;
  }
  /**
   * @param GoogleCloudAiplatformV1DatasetDistribution
   */
  public function setUserOutputTokenDistribution(GoogleCloudAiplatformV1DatasetDistribution $userOutputTokenDistribution)
  {
    $this->userOutputTokenDistribution = $userOutputTokenDistribution;
  }
  /**
   * @return GoogleCloudAiplatformV1DatasetDistribution
   */
  public function getUserOutputTokenDistribution()
  {
    return $this->userOutputTokenDistribution;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1PreferenceOptimizationDataStats::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1PreferenceOptimizationDataStats');
