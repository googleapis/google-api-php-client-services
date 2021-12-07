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

namespace Google\Service\ContainerAnalysis;

class ContaineranalysisGoogleDevtoolsCloudbuildV1Build extends \Google\Collection
{
  protected $collection_key = 'warnings';
  protected $approvalType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval::class;
  protected $approvalDataType = '';
  protected $artifactsType = ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts::class;
  protected $artifactsDataType = '';
  protected $availableSecretsType = ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets::class;
  protected $availableSecretsDataType = '';
  public $buildTriggerId;
  public $createTime;
  protected $failureInfoType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo::class;
  protected $failureInfoDataType = '';
  public $finishTime;
  public $id;
  public $images;
  public $logUrl;
  public $logsBucket;
  public $name;
  protected $optionsType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions::class;
  protected $optionsDataType = '';
  public $projectId;
  public $queueTtl;
  protected $resultsType = ContaineranalysisGoogleDevtoolsCloudbuildV1Results::class;
  protected $resultsDataType = '';
  protected $secretsType = ContaineranalysisGoogleDevtoolsCloudbuildV1Secret::class;
  protected $secretsDataType = 'array';
  public $serviceAccount;
  protected $sourceType = ContaineranalysisGoogleDevtoolsCloudbuildV1Source::class;
  protected $sourceDataType = '';
  protected $sourceProvenanceType = ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance::class;
  protected $sourceProvenanceDataType = '';
  public $startTime;
  public $status;
  public $statusDetail;
  protected $stepsType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildStep::class;
  protected $stepsDataType = 'array';
  public $substitutions;
  public $tags;
  public $timeout;
  protected $timingType = ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan::class;
  protected $timingDataType = 'map';
  protected $warningsType = ContaineranalysisGoogleDevtoolsCloudbuildV1BuildWarning::class;
  protected $warningsDataType = 'array';

  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval
   */
  public function setApproval(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval $approval)
  {
    $this->approval = $approval;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildApproval
   */
  public function getApproval()
  {
    return $this->approval;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts
   */
  public function setArtifacts(ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts $artifacts)
  {
    $this->artifacts = $artifacts;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1Artifacts
   */
  public function getArtifacts()
  {
    return $this->artifacts;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets
   */
  public function setAvailableSecrets(ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets $availableSecrets)
  {
    $this->availableSecrets = $availableSecrets;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1Secrets
   */
  public function getAvailableSecrets()
  {
    return $this->availableSecrets;
  }
  public function setBuildTriggerId($buildTriggerId)
  {
    $this->buildTriggerId = $buildTriggerId;
  }
  public function getBuildTriggerId()
  {
    return $this->buildTriggerId;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo
   */
  public function setFailureInfo(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo $failureInfo)
  {
    $this->failureInfo = $failureInfo;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildFailureInfo
   */
  public function getFailureInfo()
  {
    return $this->failureInfo;
  }
  public function setFinishTime($finishTime)
  {
    $this->finishTime = $finishTime;
  }
  public function getFinishTime()
  {
    return $this->finishTime;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImages($images)
  {
    $this->images = $images;
  }
  public function getImages()
  {
    return $this->images;
  }
  public function setLogUrl($logUrl)
  {
    $this->logUrl = $logUrl;
  }
  public function getLogUrl()
  {
    return $this->logUrl;
  }
  public function setLogsBucket($logsBucket)
  {
    $this->logsBucket = $logsBucket;
  }
  public function getLogsBucket()
  {
    return $this->logsBucket;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions
   */
  public function setOptions(ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions $options)
  {
    $this->options = $options;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildOptions
   */
  public function getOptions()
  {
    return $this->options;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setQueueTtl($queueTtl)
  {
    $this->queueTtl = $queueTtl;
  }
  public function getQueueTtl()
  {
    return $this->queueTtl;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1Results
   */
  public function setResults(ContaineranalysisGoogleDevtoolsCloudbuildV1Results $results)
  {
    $this->results = $results;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1Results
   */
  public function getResults()
  {
    return $this->results;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1Secret[]
   */
  public function setSecrets($secrets)
  {
    $this->secrets = $secrets;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1Secret[]
   */
  public function getSecrets()
  {
    return $this->secrets;
  }
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1Source
   */
  public function setSource(ContaineranalysisGoogleDevtoolsCloudbuildV1Source $source)
  {
    $this->source = $source;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1Source
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance
   */
  public function setSourceProvenance(ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance $sourceProvenance)
  {
    $this->sourceProvenance = $sourceProvenance;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1SourceProvenance
   */
  public function getSourceProvenance()
  {
    return $this->sourceProvenance;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setStatusDetail($statusDetail)
  {
    $this->statusDetail = $statusDetail;
  }
  public function getStatusDetail()
  {
    return $this->statusDetail;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildStep[]
   */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildStep[]
   */
  public function getSteps()
  {
    return $this->steps;
  }
  public function setSubstitutions($substitutions)
  {
    $this->substitutions = $substitutions;
  }
  public function getSubstitutions()
  {
    return $this->substitutions;
  }
  public function setTags($tags)
  {
    $this->tags = $tags;
  }
  public function getTags()
  {
    return $this->tags;
  }
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  public function getTimeout()
  {
    return $this->timeout;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan[]
   */
  public function setTiming($timing)
  {
    $this->timing = $timing;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1TimeSpan[]
   */
  public function getTiming()
  {
    return $this->timing;
  }
  /**
   * @param ContaineranalysisGoogleDevtoolsCloudbuildV1BuildWarning[]
   */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /**
   * @return ContaineranalysisGoogleDevtoolsCloudbuildV1BuildWarning[]
   */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ContaineranalysisGoogleDevtoolsCloudbuildV1Build::class, 'Google_Service_ContainerAnalysis_ContaineranalysisGoogleDevtoolsCloudbuildV1Build');
