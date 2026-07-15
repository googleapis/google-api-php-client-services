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

class GoogleCloudAiplatformV1EvaluationMetric extends \Google\Model
{
  /**
   * Output only. The time when the EvaluationMetric was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. A description of the EvaluationMetric.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The user-friendly display name for the EvaluationMetric.
   *
   * @var string
   */
  public $displayName;
  protected $encryptionSpecType = GoogleCloudAiplatformV1EncryptionSpec::class;
  protected $encryptionSpecDataType = '';
  /**
   * Optional. The Google Cloud Storage URI that stores the metric
   * specification..
   *
   * @var string
   */
  public $gcsUri;
  /**
   * Optional. Labels for the evaluation metric.
   *
   * @var string[]
   */
  public $labels;
  protected $metricType = GoogleCloudAiplatformV1Metric::class;
  protected $metricDataType = '';
  /**
   * Identifier. The resource name of the EvaluationMetric. Format: `projects/{p
   * roject}/locations/{location}/evaluationMetrics/{evaluation_metric}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The time when the EvaluationMetric was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The time when the EvaluationMetric was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. A description of the EvaluationMetric.
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
  /**
   * Required. The user-friendly display name for the EvaluationMetric.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. Customer-managed encryption key spec for this EvaluationMetric.
   * If set, this EvaluationMetric will be secured by this key.
   *
   * @param GoogleCloudAiplatformV1EncryptionSpec $encryptionSpec
   */
  public function setEncryptionSpec(GoogleCloudAiplatformV1EncryptionSpec $encryptionSpec)
  {
    $this->encryptionSpec = $encryptionSpec;
  }
  /**
   * @return GoogleCloudAiplatformV1EncryptionSpec
   */
  public function getEncryptionSpec()
  {
    return $this->encryptionSpec;
  }
  /**
   * Optional. The Google Cloud Storage URI that stores the metric
   * specification..
   *
   * @param string $gcsUri
   */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /**
   * @return string
   */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /**
   * Optional. Labels for the evaluation metric.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Optional. The metric configuration. Only LLMMetric and
   * CustomCodeExecutionMetric are supported.
   *
   * @param GoogleCloudAiplatformV1Metric $metric
   */
  public function setMetric(GoogleCloudAiplatformV1Metric $metric)
  {
    $this->metric = $metric;
  }
  /**
   * @return GoogleCloudAiplatformV1Metric
   */
  public function getMetric()
  {
    return $this->metric;
  }
  /**
   * Identifier. The resource name of the EvaluationMetric. Format: `projects/{p
   * roject}/locations/{location}/evaluationMetrics/{evaluation_metric}`
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The time when the EvaluationMetric was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationMetric::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationMetric');
