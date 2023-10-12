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

class GoogleCloudAiplatformV1ExportDataConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $annotationsFilter;
  protected $fractionSplitType = GoogleCloudAiplatformV1ExportFractionSplit::class;
  protected $fractionSplitDataType = '';
  protected $gcsDestinationType = GoogleCloudAiplatformV1GcsDestination::class;
  protected $gcsDestinationDataType = '';

  /**
   * @param string
   */
  public function setAnnotationsFilter($annotationsFilter)
  {
    $this->annotationsFilter = $annotationsFilter;
  }
  /**
   * @return string
   */
  public function getAnnotationsFilter()
  {
    return $this->annotationsFilter;
  }
  /**
   * @param GoogleCloudAiplatformV1ExportFractionSplit
   */
  public function setFractionSplit(GoogleCloudAiplatformV1ExportFractionSplit $fractionSplit)
  {
    $this->fractionSplit = $fractionSplit;
  }
  /**
   * @return GoogleCloudAiplatformV1ExportFractionSplit
   */
  public function getFractionSplit()
  {
    return $this->fractionSplit;
  }
  /**
   * @param GoogleCloudAiplatformV1GcsDestination
   */
  public function setGcsDestination(GoogleCloudAiplatformV1GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /**
   * @return GoogleCloudAiplatformV1GcsDestination
   */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ExportDataConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ExportDataConfig');
