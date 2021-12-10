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

namespace Google\Service\Transcoder;

class Job extends \Google\Collection
{
  protected $collection_key = 'failureDetails';
  protected $configType = JobConfig::class;
  protected $configDataType = '';
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $endTime;
  protected $failureDetailsType = FailureDetail::class;
  protected $failureDetailsDataType = 'array';
  /**
   * @var string
   */
  public $failureReason;
  /**
   * @var string
   */
  public $inputUri;
  /**
   * @var string
   */
  public $name;
  protected $originUriType = OriginUri::class;
  protected $originUriDataType = '';
  /**
   * @var string
   */
  public $outputUri;
  /**
   * @var int
   */
  public $priority;
  protected $progressType = Progress::class;
  protected $progressDataType = '';
  /**
   * @var string
   */
  public $startTime;
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $templateId;
  /**
   * @var int
   */
  public $ttlAfterCompletionDays;

  /**
   * @param JobConfig
   */
  public function setConfig(JobConfig $config)
  {
    $this->config = $config;
  }
  /**
   * @return JobConfig
   */
  public function getConfig()
  {
    return $this->config;
  }
  /**
   * @param string
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
   * @param string
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * @param FailureDetail[]
   */
  public function setFailureDetails($failureDetails)
  {
    $this->failureDetails = $failureDetails;
  }
  /**
   * @return FailureDetail[]
   */
  public function getFailureDetails()
  {
    return $this->failureDetails;
  }
  /**
   * @param string
   */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /**
   * @return string
   */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  /**
   * @param string
   */
  public function setInputUri($inputUri)
  {
    $this->inputUri = $inputUri;
  }
  /**
   * @return string
   */
  public function getInputUri()
  {
    return $this->inputUri;
  }
  /**
   * @param string
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
   * @param OriginUri
   */
  public function setOriginUri(OriginUri $originUri)
  {
    $this->originUri = $originUri;
  }
  /**
   * @return OriginUri
   */
  public function getOriginUri()
  {
    return $this->originUri;
  }
  /**
   * @param string
   */
  public function setOutputUri($outputUri)
  {
    $this->outputUri = $outputUri;
  }
  /**
   * @return string
   */
  public function getOutputUri()
  {
    return $this->outputUri;
  }
  /**
   * @param int
   */
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  /**
   * @return int
   */
  public function getPriority()
  {
    return $this->priority;
  }
  /**
   * @param Progress
   */
  public function setProgress(Progress $progress)
  {
    $this->progress = $progress;
  }
  /**
   * @return Progress
   */
  public function getProgress()
  {
    return $this->progress;
  }
  /**
   * @param string
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param string
   */
  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }
  /**
   * @return string
   */
  public function getTemplateId()
  {
    return $this->templateId;
  }
  /**
   * @param int
   */
  public function setTtlAfterCompletionDays($ttlAfterCompletionDays)
  {
    $this->ttlAfterCompletionDays = $ttlAfterCompletionDays;
  }
  /**
   * @return int
   */
  public function getTtlAfterCompletionDays()
  {
    return $this->ttlAfterCompletionDays;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Job::class, 'Google_Service_Transcoder_Job');
