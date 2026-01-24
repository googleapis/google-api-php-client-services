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

namespace Google\Service\StorageBatchOperations;

class BucketOperation extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Created but not yet started.
   */
  public const STATE_QUEUED = 'QUEUED';
  /**
   * In progress.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * Completed successfully.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * Cancelled by the user.
   */
  public const STATE_CANCELED = 'CANCELED';
  /**
   * Terminated due to an unrecoverable failure.
   */
  public const STATE_FAILED = 'FAILED';
  protected $collection_key = 'errorSummaries';
  /**
   * The bucket name of the objects to be transformed in the BucketOperation.
   *
   * @var string
   */
  public $bucketName;
  /**
   * Output only. The time that the BucketOperation was completed.
   *
   * @var string
   */
  public $completeTime;
  protected $countersType = Counters::class;
  protected $countersDataType = '';
  /**
   * Output only. The time that the BucketOperation was created.
   *
   * @var string
   */
  public $createTime;
  protected $deleteObjectType = DeleteObject::class;
  protected $deleteObjectDataType = '';
  protected $errorSummariesType = ErrorSummary::class;
  protected $errorSummariesDataType = 'array';
  protected $manifestType = Manifest::class;
  protected $manifestDataType = '';
  /**
   * Identifier. The resource name of the BucketOperation. This is defined by
   * the service. Format: projects/{project}/locations/global/jobs/{job_id}/buck
   * etOperations/{bucket_operation}.
   *
   * @var string
   */
  public $name;
  protected $prefixListType = PrefixList::class;
  protected $prefixListDataType = '';
  protected $putMetadataType = PutMetadata::class;
  protected $putMetadataDataType = '';
  protected $putObjectHoldType = PutObjectHold::class;
  protected $putObjectHoldDataType = '';
  protected $rewriteObjectType = RewriteObject::class;
  protected $rewriteObjectDataType = '';
  /**
   * Output only. The time that the BucketOperation was started.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. State of the BucketOperation.
   *
   * @var string
   */
  public $state;

  /**
   * The bucket name of the objects to be transformed in the BucketOperation.
   *
   * @param string $bucketName
   */
  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  /**
   * @return string
   */
  public function getBucketName()
  {
    return $this->bucketName;
  }
  /**
   * Output only. The time that the BucketOperation was completed.
   *
   * @param string $completeTime
   */
  public function setCompleteTime($completeTime)
  {
    $this->completeTime = $completeTime;
  }
  /**
   * @return string
   */
  public function getCompleteTime()
  {
    return $this->completeTime;
  }
  /**
   * Output only. Information about the progress of the bucket operation.
   *
   * @param Counters $counters
   */
  public function setCounters(Counters $counters)
  {
    $this->counters = $counters;
  }
  /**
   * @return Counters
   */
  public function getCounters()
  {
    return $this->counters;
  }
  /**
   * Output only. The time that the BucketOperation was created.
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
   * Delete objects.
   *
   * @param DeleteObject $deleteObject
   */
  public function setDeleteObject(DeleteObject $deleteObject)
  {
    $this->deleteObject = $deleteObject;
  }
  /**
   * @return DeleteObject
   */
  public function getDeleteObject()
  {
    return $this->deleteObject;
  }
  /**
   * Output only. Summarizes errors encountered with sample error log entries.
   *
   * @param ErrorSummary[] $errorSummaries
   */
  public function setErrorSummaries($errorSummaries)
  {
    $this->errorSummaries = $errorSummaries;
  }
  /**
   * @return ErrorSummary[]
   */
  public function getErrorSummaries()
  {
    return $this->errorSummaries;
  }
  /**
   * Specifies objects in a manifest file.
   *
   * @param Manifest $manifest
   */
  public function setManifest(Manifest $manifest)
  {
    $this->manifest = $manifest;
  }
  /**
   * @return Manifest
   */
  public function getManifest()
  {
    return $this->manifest;
  }
  /**
   * Identifier. The resource name of the BucketOperation. This is defined by
   * the service. Format: projects/{project}/locations/global/jobs/{job_id}/buck
   * etOperations/{bucket_operation}.
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
   * Specifies objects matching a prefix set.
   *
   * @param PrefixList $prefixList
   */
  public function setPrefixList(PrefixList $prefixList)
  {
    $this->prefixList = $prefixList;
  }
  /**
   * @return PrefixList
   */
  public function getPrefixList()
  {
    return $this->prefixList;
  }
  /**
   * Updates object metadata. Allows updating fixed-key and custom metadata and
   * fixed-key metadata i.e. Cache-Control, Content-Disposition, Content-
   * Encoding, Content-Language, Content-Type, Custom-Time.
   *
   * @param PutMetadata $putMetadata
   */
  public function setPutMetadata(PutMetadata $putMetadata)
  {
    $this->putMetadata = $putMetadata;
  }
  /**
   * @return PutMetadata
   */
  public function getPutMetadata()
  {
    return $this->putMetadata;
  }
  /**
   * Changes object hold status.
   *
   * @param PutObjectHold $putObjectHold
   */
  public function setPutObjectHold(PutObjectHold $putObjectHold)
  {
    $this->putObjectHold = $putObjectHold;
  }
  /**
   * @return PutObjectHold
   */
  public function getPutObjectHold()
  {
    return $this->putObjectHold;
  }
  /**
   * Rewrite the object and updates metadata like KMS key.
   *
   * @param RewriteObject $rewriteObject
   */
  public function setRewriteObject(RewriteObject $rewriteObject)
  {
    $this->rewriteObject = $rewriteObject;
  }
  /**
   * @return RewriteObject
   */
  public function getRewriteObject()
  {
    return $this->rewriteObject;
  }
  /**
   * Output only. The time that the BucketOperation was started.
   *
   * @param string $startTime
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
   * Output only. State of the BucketOperation.
   *
   * Accepted values: STATE_UNSPECIFIED, QUEUED, RUNNING, SUCCEEDED, CANCELED,
   * FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BucketOperation::class, 'Google_Service_StorageBatchOperations_BucketOperation');
