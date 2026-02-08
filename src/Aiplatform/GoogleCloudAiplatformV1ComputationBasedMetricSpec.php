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

class GoogleCloudAiplatformV1ComputationBasedMetricSpec extends \Google\Model
{
  /**
   * Unspecified computation based metric type.
   */
  public const TYPE_COMPUTATION_BASED_METRIC_TYPE_UNSPECIFIED = 'COMPUTATION_BASED_METRIC_TYPE_UNSPECIFIED';
  /**
   * Exact match metric.
   */
  public const TYPE_EXACT_MATCH = 'EXACT_MATCH';
  /**
   * BLEU metric.
   */
  public const TYPE_BLEU = 'BLEU';
  /**
   * ROUGE metric.
   */
  public const TYPE_ROUGE = 'ROUGE';
  /**
   * Optional. A map of parameters for the metric, e.g. {"rouge_type":
   * "rougeL"}.
   *
   * @var array[]
   */
  public $parameters;
  /**
   * Required. The type of the computation based metric.
   *
   * @var string
   */
  public $type;

  /**
   * Optional. A map of parameters for the metric, e.g. {"rouge_type":
   * "rougeL"}.
   *
   * @param array[] $parameters
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return array[]
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  /**
   * Required. The type of the computation based metric.
   *
   * Accepted values: COMPUTATION_BASED_METRIC_TYPE_UNSPECIFIED, EXACT_MATCH,
   * BLEU, ROUGE
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ComputationBasedMetricSpec::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ComputationBasedMetricSpec');
