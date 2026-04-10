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

namespace Google\Service\WorkloadManager;

class Evaluation extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const EVALUATION_TYPE_EVALUATION_TYPE_UNSPECIFIED = 'EVALUATION_TYPE_UNSPECIFIED';
  /**
   * SAP best practices.
   */
  public const EVALUATION_TYPE_SAP = 'SAP';
  /**
   * SQL best practices.
   */
  public const EVALUATION_TYPE_SQL_SERVER = 'SQL_SERVER';
  /**
   * Customized best practices.
   */
  public const EVALUATION_TYPE_OTHER = 'OTHER';
  protected $collection_key = 'ruleNames';
  protected $bigQueryDestinationType = BigQueryDestination::class;
  protected $bigQueryDestinationDataType = '';
  /**
   * Output only. [Output only] Create time stamp.
   *
   * @var string
   */
  public $createTime;
  /**
   * The Cloud Storage bucket name for custom rules.
   *
   * @var string
   */
  public $customRulesBucket;
  /**
   * Description of the Evaluation.
   *
   * @var string
   */
  public $description;
  /**
   * Evaluation type.
   *
   * @var string
   */
  public $evaluationType;
  /**
   * Optional. Immutable. Customer-managed encryption key name, in the format
   * projects/locations/keyRings/cryptoKeys. The key will be used for CMEK
   * encryption of the evaluation resource.
   *
   * @var string
   */
  public $kmsKey;
  /**
   * Labels as key value pairs.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Name of resource that has the form `projects/{project_id}/locations/{locati
   * on_id}/evaluations/{evaluation_id}`.
   *
   * @var string
   */
  public $name;
  protected $resourceFilterType = ResourceFilter::class;
  protected $resourceFilterDataType = '';
  protected $resourceStatusType = ResourceStatus::class;
  protected $resourceStatusDataType = '';
  /**
   * The names of the rules used for this evaluation.
   *
   * @var string[]
   */
  public $ruleNames;
  /**
   * Crontab format schedule for scheduled evaluation, currently only supports
   * the following fixed schedules: * `0 1 * * *` # Hourly * `0 6 * * *` # Every
   * 6 hours * `0 12 * * *` # Every 12 hours * `0 0 1 * *` # Daily * `0 0 7 * *`
   * # Weekly * `0 0 14 * *` # Every 14 days * `0 0 1 1 *` # Monthly
   *
   * @var string
   */
  public $schedule;
  /**
   * Output only. [Output only] Update time stamp.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. The BigQuery destination for detailed evaluation results. If this
   * field is specified, the results of each evaluation execution are exported
   * to BigQuery.
   *
   * @param BigQueryDestination $bigQueryDestination
   */
  public function setBigQueryDestination(BigQueryDestination $bigQueryDestination)
  {
    $this->bigQueryDestination = $bigQueryDestination;
  }
  /**
   * @return BigQueryDestination
   */
  public function getBigQueryDestination()
  {
    return $this->bigQueryDestination;
  }
  /**
   * Output only. [Output only] Create time stamp.
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
   * The Cloud Storage bucket name for custom rules.
   *
   * @param string $customRulesBucket
   */
  public function setCustomRulesBucket($customRulesBucket)
  {
    $this->customRulesBucket = $customRulesBucket;
  }
  /**
   * @return string
   */
  public function getCustomRulesBucket()
  {
    return $this->customRulesBucket;
  }
  /**
   * Description of the Evaluation.
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
   * Evaluation type.
   *
   * Accepted values: EVALUATION_TYPE_UNSPECIFIED, SAP, SQL_SERVER, OTHER
   *
   * @param self::EVALUATION_TYPE_* $evaluationType
   */
  public function setEvaluationType($evaluationType)
  {
    $this->evaluationType = $evaluationType;
  }
  /**
   * @return self::EVALUATION_TYPE_*
   */
  public function getEvaluationType()
  {
    return $this->evaluationType;
  }
  /**
   * Optional. Immutable. Customer-managed encryption key name, in the format
   * projects/locations/keyRings/cryptoKeys. The key will be used for CMEK
   * encryption of the evaluation resource.
   *
   * @param string $kmsKey
   */
  public function setKmsKey($kmsKey)
  {
    $this->kmsKey = $kmsKey;
  }
  /**
   * @return string
   */
  public function getKmsKey()
  {
    return $this->kmsKey;
  }
  /**
   * Labels as key value pairs.
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
   * Name of resource that has the form `projects/{project_id}/locations/{locati
   * on_id}/evaluations/{evaluation_id}`.
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
   * Resource filter for an evaluation defining the scope of resources to be
   * evaluated.
   *
   * @param ResourceFilter $resourceFilter
   */
  public function setResourceFilter(ResourceFilter $resourceFilter)
  {
    $this->resourceFilter = $resourceFilter;
  }
  /**
   * @return ResourceFilter
   */
  public function getResourceFilter()
  {
    return $this->resourceFilter;
  }
  /**
   * Output only. [Output only] The current lifecycle state of the evaluation
   * resource.
   *
   * @param ResourceStatus $resourceStatus
   */
  public function setResourceStatus(ResourceStatus $resourceStatus)
  {
    $this->resourceStatus = $resourceStatus;
  }
  /**
   * @return ResourceStatus
   */
  public function getResourceStatus()
  {
    return $this->resourceStatus;
  }
  /**
   * The names of the rules used for this evaluation.
   *
   * @param string[] $ruleNames
   */
  public function setRuleNames($ruleNames)
  {
    $this->ruleNames = $ruleNames;
  }
  /**
   * @return string[]
   */
  public function getRuleNames()
  {
    return $this->ruleNames;
  }
  /**
   * Crontab format schedule for scheduled evaluation, currently only supports
   * the following fixed schedules: * `0 1 * * *` # Hourly * `0 6 * * *` # Every
   * 6 hours * `0 12 * * *` # Every 12 hours * `0 0 1 * *` # Daily * `0 0 7 * *`
   * # Weekly * `0 0 14 * *` # Every 14 days * `0 0 1 1 *` # Monthly
   *
   * @param string $schedule
   */
  public function setSchedule($schedule)
  {
    $this->schedule = $schedule;
  }
  /**
   * @return string
   */
  public function getSchedule()
  {
    return $this->schedule;
  }
  /**
   * Output only. [Output only] Update time stamp.
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
class_alias(Evaluation::class, 'Google_Service_WorkloadManager_Evaluation');
