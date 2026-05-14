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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1alpha1DiagnoseConversationsResponse extends \Google\Collection
{
  protected $collection_key = 'fullTrajectorySteps';
  /**
   * Output only. Deprecated: Output only. The final, high-level answer or
   * diagnostic summary returned by the Sherlock worker is deprecated. The
   * persistent analysis summary is stored inside the Diagnostic resource
   * instead.
   *
   * @deprecated
   * @var string
   */
  public $answer;
  /**
   * Output only. Deprecated: Output only. If an external destination was
   * requested, the URI of the exported data is deprecated. The persistent
   * diagnostic details are stored inside the Diagnostic resource instead.
   *
   * @deprecated
   * @var string
   */
  public $exportUri;
  /**
   * Output only. Deprecated: Use full_trajectory_steps instead. Output only.
   * The complete sequence of thoughts and actions (full trajectory).
   *
   * @deprecated
   * @var string[]
   */
  public $fullTrajectories;
  protected $fullTrajectoryStepsType = GoogleCloudContactcenterinsightsV1alpha1SherlockStep::class;
  protected $fullTrajectoryStepsDataType = 'array';

  /**
   * Output only. Deprecated: Output only. The final, high-level answer or
   * diagnostic summary returned by the Sherlock worker is deprecated. The
   * persistent analysis summary is stored inside the Diagnostic resource
   * instead.
   *
   * @deprecated
   * @param string $answer
   */
  public function setAnswer($answer)
  {
    $this->answer = $answer;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getAnswer()
  {
    return $this->answer;
  }
  /**
   * Output only. Deprecated: Output only. If an external destination was
   * requested, the URI of the exported data is deprecated. The persistent
   * diagnostic details are stored inside the Diagnostic resource instead.
   *
   * @deprecated
   * @param string $exportUri
   */
  public function setExportUri($exportUri)
  {
    $this->exportUri = $exportUri;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getExportUri()
  {
    return $this->exportUri;
  }
  /**
   * Output only. Deprecated: Use full_trajectory_steps instead. Output only.
   * The complete sequence of thoughts and actions (full trajectory).
   *
   * @deprecated
   * @param string[] $fullTrajectories
   */
  public function setFullTrajectories($fullTrajectories)
  {
    $this->fullTrajectories = $fullTrajectories;
  }
  /**
   * @deprecated
   * @return string[]
   */
  public function getFullTrajectories()
  {
    return $this->fullTrajectories;
  }
  /**
   * Output only. Deprecated: Output only. The complete sequence of thoughts and
   * actions taken by the agent is deprecated under LRO response completions.
   * Use the persistent details inside the Diagnostic resource instead.
   *
   * @deprecated
   * @param GoogleCloudContactcenterinsightsV1alpha1SherlockStep[] $fullTrajectorySteps
   */
  public function setFullTrajectorySteps($fullTrajectorySteps)
  {
    $this->fullTrajectorySteps = $fullTrajectorySteps;
  }
  /**
   * @deprecated
   * @return GoogleCloudContactcenterinsightsV1alpha1SherlockStep[]
   */
  public function getFullTrajectorySteps()
  {
    return $this->fullTrajectorySteps;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1alpha1DiagnoseConversationsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1DiagnoseConversationsResponse');
