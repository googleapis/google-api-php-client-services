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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesBatchJob extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The job is not currently running.
   */
  public const STATUS_PENDING = 'PENDING';
  /**
   * The job is running.
   */
  public const STATUS_RUNNING = 'RUNNING';
  /**
   * The job is done.
   */
  public const STATUS_DONE = 'DONE';
  /**
   * Output only. ID of this batch job.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The resource name of the long-running operation that can be
   * used to poll for completion. Only set when the batch job status is RUNNING
   * or DONE.
   *
   * @var string
   */
  public $longRunningOperation;
  protected $metadataType = GoogleAdsSearchads360V23ResourcesBatchJobBatchJobMetadata::class;
  protected $metadataDataType = '';
  /**
   * Output only. The next sequence token to use when adding operations. Only
   * set when the batch job status is PENDING.
   *
   * @var string
   */
  public $nextAddSequenceToken;
  /**
   * Immutable. The resource name of the batch job. Batch job resource names
   * have the form: `customers/{customer_id}/batchJobs/{batch_job_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Status of this batch job.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. ID of this batch job.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. The resource name of the long-running operation that can be
   * used to poll for completion. Only set when the batch job status is RUNNING
   * or DONE.
   *
   * @param string $longRunningOperation
   */
  public function setLongRunningOperation($longRunningOperation)
  {
    $this->longRunningOperation = $longRunningOperation;
  }
  /**
   * @return string
   */
  public function getLongRunningOperation()
  {
    return $this->longRunningOperation;
  }
  /**
   * Output only. Contains additional information about this batch job.
   *
   * @param GoogleAdsSearchads360V23ResourcesBatchJobBatchJobMetadata $metadata
   */
  public function setMetadata(GoogleAdsSearchads360V23ResourcesBatchJobBatchJobMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBatchJobBatchJobMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * Output only. The next sequence token to use when adding operations. Only
   * set when the batch job status is PENDING.
   *
   * @param string $nextAddSequenceToken
   */
  public function setNextAddSequenceToken($nextAddSequenceToken)
  {
    $this->nextAddSequenceToken = $nextAddSequenceToken;
  }
  /**
   * @return string
   */
  public function getNextAddSequenceToken()
  {
    return $this->nextAddSequenceToken;
  }
  /**
   * Immutable. The resource name of the batch job. Batch job resource names
   * have the form: `customers/{customer_id}/batchJobs/{batch_job_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. Status of this batch job.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, RUNNING, DONE
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesBatchJob::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesBatchJob');
