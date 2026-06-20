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

namespace Google\Service\DatabaseCenter;

class Lineage extends \Google\Model
{
  /**
   * Unspecified process type.
   */
  public const PROCESS_TYPE_PROCESS_TYPE_UNSPECIFIED = 'PROCESS_TYPE_UNSPECIFIED';
  /**
   * Composer process type.
   */
  public const PROCESS_TYPE_COMPOSER = 'COMPOSER';
  /**
   * Datastream process type.
   */
  public const PROCESS_TYPE_DATASTREAM = 'DATASTREAM';
  /**
   * Dataflow process type.
   */
  public const PROCESS_TYPE_DATAFLOW = 'DATAFLOW';
  /**
   * Bigquery process type.
   */
  public const PROCESS_TYPE_BIGQUERY = 'BIGQUERY';
  /**
   * Data fusion process type.
   */
  public const PROCESS_TYPE_DATA_FUSION = 'DATA_FUSION';
  /**
   * Dataproc process type.
   */
  public const PROCESS_TYPE_DATAPROC = 'DATAPROC';
  /**
   * Optional. FQN of process which created the lineage i.e. dataplex,
   * datastream etc.
   *
   * @var string
   */
  public $processFqn;
  /**
   * Optional. Type of process which created the lineage.
   *
   * @var string
   */
  public $processType;
  /**
   * Optional. FQN of source table / column
   *
   * @var string
   */
  public $sourceFqn;
  /**
   * Optional. FQN of target table / column
   *
   * @var string
   */
  public $targetFqn;

  /**
   * Optional. FQN of process which created the lineage i.e. dataplex,
   * datastream etc.
   *
   * @param string $processFqn
   */
  public function setProcessFqn($processFqn)
  {
    $this->processFqn = $processFqn;
  }
  /**
   * @return string
   */
  public function getProcessFqn()
  {
    return $this->processFqn;
  }
  /**
   * Optional. Type of process which created the lineage.
   *
   * Accepted values: PROCESS_TYPE_UNSPECIFIED, COMPOSER, DATASTREAM, DATAFLOW,
   * BIGQUERY, DATA_FUSION, DATAPROC
   *
   * @param self::PROCESS_TYPE_* $processType
   */
  public function setProcessType($processType)
  {
    $this->processType = $processType;
  }
  /**
   * @return self::PROCESS_TYPE_*
   */
  public function getProcessType()
  {
    return $this->processType;
  }
  /**
   * Optional. FQN of source table / column
   *
   * @param string $sourceFqn
   */
  public function setSourceFqn($sourceFqn)
  {
    $this->sourceFqn = $sourceFqn;
  }
  /**
   * @return string
   */
  public function getSourceFqn()
  {
    return $this->sourceFqn;
  }
  /**
   * Optional. FQN of target table / column
   *
   * @param string $targetFqn
   */
  public function setTargetFqn($targetFqn)
  {
    $this->targetFqn = $targetFqn;
  }
  /**
   * @return string
   */
  public function getTargetFqn()
  {
    return $this->targetFqn;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Lineage::class, 'Google_Service_DatabaseCenter_Lineage');
