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

namespace Google\Service\APIhub;

class GoogleCloudApihubV1DiscoveredApiOperation extends \Google\Collection
{
  protected $collection_key = 'matchResults';
  /**
   * @var string
   */
  public $classification;
  /**
   * @var string
   */
  public $count;
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $firstSeenTime;
  protected $httpOperationType = GoogleCloudApihubV1HttpOperationDetails::class;
  protected $httpOperationDataType = '';
  /**
   * @var string
   */
  public $lastSeenTime;
  protected $matchResultsType = GoogleCloudApihubV1MatchResult::class;
  protected $matchResultsDataType = 'array';
  /**
   * @var string
   */
  public $name;
  protected $sourceMetadataType = GoogleCloudApihubV1SourceMetadata::class;
  protected $sourceMetadataDataType = '';
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param string
   */
  public function setClassification($classification)
  {
    $this->classification = $classification;
  }
  /**
   * @return string
   */
  public function getClassification()
  {
    return $this->classification;
  }
  /**
   * @param string
   */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /**
   * @return string
   */
  public function getCount()
  {
    return $this->count;
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
  public function setFirstSeenTime($firstSeenTime)
  {
    $this->firstSeenTime = $firstSeenTime;
  }
  /**
   * @return string
   */
  public function getFirstSeenTime()
  {
    return $this->firstSeenTime;
  }
  /**
   * @param GoogleCloudApihubV1HttpOperationDetails
   */
  public function setHttpOperation(GoogleCloudApihubV1HttpOperationDetails $httpOperation)
  {
    $this->httpOperation = $httpOperation;
  }
  /**
   * @return GoogleCloudApihubV1HttpOperationDetails
   */
  public function getHttpOperation()
  {
    return $this->httpOperation;
  }
  /**
   * @param string
   */
  public function setLastSeenTime($lastSeenTime)
  {
    $this->lastSeenTime = $lastSeenTime;
  }
  /**
   * @return string
   */
  public function getLastSeenTime()
  {
    return $this->lastSeenTime;
  }
  /**
   * @param GoogleCloudApihubV1MatchResult[]
   */
  public function setMatchResults($matchResults)
  {
    $this->matchResults = $matchResults;
  }
  /**
   * @return GoogleCloudApihubV1MatchResult[]
   */
  public function getMatchResults()
  {
    return $this->matchResults;
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
   * @param GoogleCloudApihubV1SourceMetadata
   */
  public function setSourceMetadata(GoogleCloudApihubV1SourceMetadata $sourceMetadata)
  {
    $this->sourceMetadata = $sourceMetadata;
  }
  /**
   * @return GoogleCloudApihubV1SourceMetadata
   */
  public function getSourceMetadata()
  {
    return $this->sourceMetadata;
  }
  /**
   * @param string
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
class_alias(GoogleCloudApihubV1DiscoveredApiOperation::class, 'Google_Service_APIhub_GoogleCloudApihubV1DiscoveredApiOperation');
