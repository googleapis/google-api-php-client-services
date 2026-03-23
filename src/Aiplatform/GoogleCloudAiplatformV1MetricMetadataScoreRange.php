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

class GoogleCloudAiplatformV1MetricMetadataScoreRange extends \Google\Model
{
  /**
   * Optional. The description of the score explaining the directionality etc.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The maximum value of the score range (inclusive).
   *
   * @var 
   */
  public $max;
  /**
   * Required. The minimum value of the score range (inclusive).
   *
   * @var 
   */
  public $min;
  /**
   * Optional. The distance between discrete steps in the range. If unset, the
   * range is assumed to be continuous.
   *
   * @var 
   */
  public $step;

  /**
   * Optional. The description of the score explaining the directionality etc.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  public function setMax($max)
  {
    $this->max = $max;
  }
  public function getMax()
  {
    return $this->max;
  }
  public function setMin($min)
  {
    $this->min = $min;
  }
  public function getMin()
  {
    return $this->min;
  }
  public function setStep($step)
  {
    $this->step = $step;
  }
  public function getStep()
  {
    return $this->step;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1MetricMetadataScoreRange::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1MetricMetadataScoreRange');
