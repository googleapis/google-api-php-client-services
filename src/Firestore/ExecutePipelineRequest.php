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

namespace Google\Service\Firestore;

class ExecutePipelineRequest extends \Google\Model
{
  /**
   * Optional. Automatically commits the transaction after the pipeline has been
   * executed. Only permitted in combination with `transaction` or
   * `new_transaction`.
   *
   * @var bool
   */
  public $autoCommitTransaction;
  protected $newTransactionType = TransactionOptions::class;
  protected $newTransactionDataType = '';
  /**
   * Execute the pipeline in a snapshot transaction at the given time. This must
   * be a microsecond precision timestamp within the past one hour, or if Point-
   * in-Time Recovery is enabled, can additionally be a whole minute timestamp
   * within the past 7 days.
   *
   * @var string
   */
  public $readTime;
  protected $requestOptionsType = RequestOptions::class;
  protected $requestOptionsDataType = '';
  protected $structuredPipelineType = StructuredPipeline::class;
  protected $structuredPipelineDataType = '';
  /**
   * Run the query within an already active transaction. The value here is the
   * opaque transaction ID to execute the query in.
   *
   * @var string
   */
  public $transaction;

  /**
   * Optional. Automatically commits the transaction after the pipeline has been
   * executed. Only permitted in combination with `transaction` or
   * `new_transaction`.
   *
   * @param bool $autoCommitTransaction
   */
  public function setAutoCommitTransaction($autoCommitTransaction)
  {
    $this->autoCommitTransaction = $autoCommitTransaction;
  }
  /**
   * @return bool
   */
  public function getAutoCommitTransaction()
  {
    return $this->autoCommitTransaction;
  }
  /**
   * Execute the pipeline in a new transaction. The identifier of the newly
   * created transaction will be returned in the first response on the stream.
   * This defaults to a read-only transaction.
   *
   * @param TransactionOptions $newTransaction
   */
  public function setNewTransaction(TransactionOptions $newTransaction)
  {
    $this->newTransaction = $newTransaction;
  }
  /**
   * @return TransactionOptions
   */
  public function getNewTransaction()
  {
    return $this->newTransaction;
  }
  /**
   * Execute the pipeline in a snapshot transaction at the given time. This must
   * be a microsecond precision timestamp within the past one hour, or if Point-
   * in-Time Recovery is enabled, can additionally be a whole minute timestamp
   * within the past 7 days.
   *
   * @param string $readTime
   */
  public function setReadTime($readTime)
  {
    $this->readTime = $readTime;
  }
  /**
   * @return string
   */
  public function getReadTime()
  {
    return $this->readTime;
  }
  /**
   * Optional. The request options for this request.
   *
   * @param RequestOptions $requestOptions
   */
  public function setRequestOptions(RequestOptions $requestOptions)
  {
    $this->requestOptions = $requestOptions;
  }
  /**
   * @return RequestOptions
   */
  public function getRequestOptions()
  {
    return $this->requestOptions;
  }
  /**
   * A pipelined operation.
   *
   * @param StructuredPipeline $structuredPipeline
   */
  public function setStructuredPipeline(StructuredPipeline $structuredPipeline)
  {
    $this->structuredPipeline = $structuredPipeline;
  }
  /**
   * @return StructuredPipeline
   */
  public function getStructuredPipeline()
  {
    return $this->structuredPipeline;
  }
  /**
   * Run the query within an already active transaction. The value here is the
   * opaque transaction ID to execute the query in.
   *
   * @param string $transaction
   */
  public function setTransaction($transaction)
  {
    $this->transaction = $transaction;
  }
  /**
   * @return string
   */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecutePipelineRequest::class, 'Google_Service_Firestore_ExecutePipelineRequest');
