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

namespace Google\Service\Spanner;

class DataChangeRecord extends \Google\Collection
{
  protected $collection_key = 'mods';
  protected $columnMetadataType = ColumnMetadata::class;
  protected $columnMetadataDataType = 'array';
  /**
   * @var string
   */
  public $commitTimestamp;
  /**
   * @var bool
   */
  public $isLastRecordInTransactionInPartition;
  /**
   * @var bool
   */
  public $isSystemTransaction;
  /**
   * @var string
   */
  public $modType;
  protected $modsType = Mod::class;
  protected $modsDataType = 'array';
  /**
   * @var int
   */
  public $numberOfPartitionsInTransaction;
  /**
   * @var int
   */
  public $numberOfRecordsInTransaction;
  /**
   * @var string
   */
  public $recordSequence;
  /**
   * @var string
   */
  public $serverTransactionId;
  /**
   * @var string
   */
  public $table;
  /**
   * @var string
   */
  public $transactionTag;
  /**
   * @var string
   */
  public $valueCaptureType;

  /**
   * @param ColumnMetadata[]
   */
  public function setColumnMetadata($columnMetadata)
  {
    $this->columnMetadata = $columnMetadata;
  }
  /**
   * @return ColumnMetadata[]
   */
  public function getColumnMetadata()
  {
    return $this->columnMetadata;
  }
  /**
   * @param string
   */
  public function setCommitTimestamp($commitTimestamp)
  {
    $this->commitTimestamp = $commitTimestamp;
  }
  /**
   * @return string
   */
  public function getCommitTimestamp()
  {
    return $this->commitTimestamp;
  }
  /**
   * @param bool
   */
  public function setIsLastRecordInTransactionInPartition($isLastRecordInTransactionInPartition)
  {
    $this->isLastRecordInTransactionInPartition = $isLastRecordInTransactionInPartition;
  }
  /**
   * @return bool
   */
  public function getIsLastRecordInTransactionInPartition()
  {
    return $this->isLastRecordInTransactionInPartition;
  }
  /**
   * @param bool
   */
  public function setIsSystemTransaction($isSystemTransaction)
  {
    $this->isSystemTransaction = $isSystemTransaction;
  }
  /**
   * @return bool
   */
  public function getIsSystemTransaction()
  {
    return $this->isSystemTransaction;
  }
  /**
   * @param string
   */
  public function setModType($modType)
  {
    $this->modType = $modType;
  }
  /**
   * @return string
   */
  public function getModType()
  {
    return $this->modType;
  }
  /**
   * @param Mod[]
   */
  public function setMods($mods)
  {
    $this->mods = $mods;
  }
  /**
   * @return Mod[]
   */
  public function getMods()
  {
    return $this->mods;
  }
  /**
   * @param int
   */
  public function setNumberOfPartitionsInTransaction($numberOfPartitionsInTransaction)
  {
    $this->numberOfPartitionsInTransaction = $numberOfPartitionsInTransaction;
  }
  /**
   * @return int
   */
  public function getNumberOfPartitionsInTransaction()
  {
    return $this->numberOfPartitionsInTransaction;
  }
  /**
   * @param int
   */
  public function setNumberOfRecordsInTransaction($numberOfRecordsInTransaction)
  {
    $this->numberOfRecordsInTransaction = $numberOfRecordsInTransaction;
  }
  /**
   * @return int
   */
  public function getNumberOfRecordsInTransaction()
  {
    return $this->numberOfRecordsInTransaction;
  }
  /**
   * @param string
   */
  public function setRecordSequence($recordSequence)
  {
    $this->recordSequence = $recordSequence;
  }
  /**
   * @return string
   */
  public function getRecordSequence()
  {
    return $this->recordSequence;
  }
  /**
   * @param string
   */
  public function setServerTransactionId($serverTransactionId)
  {
    $this->serverTransactionId = $serverTransactionId;
  }
  /**
   * @return string
   */
  public function getServerTransactionId()
  {
    return $this->serverTransactionId;
  }
  /**
   * @param string
   */
  public function setTable($table)
  {
    $this->table = $table;
  }
  /**
   * @return string
   */
  public function getTable()
  {
    return $this->table;
  }
  /**
   * @param string
   */
  public function setTransactionTag($transactionTag)
  {
    $this->transactionTag = $transactionTag;
  }
  /**
   * @return string
   */
  public function getTransactionTag()
  {
    return $this->transactionTag;
  }
  /**
   * @param string
   */
  public function setValueCaptureType($valueCaptureType)
  {
    $this->valueCaptureType = $valueCaptureType;
  }
  /**
   * @return string
   */
  public function getValueCaptureType()
  {
    return $this->valueCaptureType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataChangeRecord::class, 'Google_Service_Spanner_DataChangeRecord');
