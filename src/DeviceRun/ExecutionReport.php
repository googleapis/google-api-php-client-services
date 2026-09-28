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

namespace Google\Service\DeviceRun;

class ExecutionReport extends \Google\Collection
{
  protected $collection_key = 'warnings';
  /**
   * Output only. The display_name set by users in the ExecutionConfig.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The end time of the execution.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. The unique identifier of the execution.
   *
   * @var string
   */
  public $id;
  protected $outputFilesType = OutputFile::class;
  protected $outputFilesDataType = 'array';
  protected $resultType = Result::class;
  protected $resultDataType = '';
  /**
   * Output only. The start time of the execution.
   *
   * @var string
   */
  public $startTime;
  protected $statusType = Status::class;
  protected $statusDataType = '';
  protected $warningsType = Warning::class;
  protected $warningsDataType = 'array';

  /**
   * Output only. The display_name set by users in the ExecutionConfig.
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
   * Output only. The end time of the execution.
   *
   * @param string $endTime
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
   * Output only. The unique identifier of the execution.
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
   * Output only. The output files of the execution.
   *
   * @param OutputFile[] $outputFiles
   */
  public function setOutputFiles($outputFiles)
  {
    $this->outputFiles = $outputFiles;
  }
  /**
   * @return OutputFile[]
   */
  public function getOutputFiles()
  {
    return $this->outputFiles;
  }
  /**
   * Output only. The result of the execution.
   *
   * @param Result $result
   */
  public function setResult(Result $result)
  {
    $this->result = $result;
  }
  /**
   * @return Result
   */
  public function getResult()
  {
    return $this->result;
  }
  /**
   * Output only. The start time of the execution.
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
   * Output only. The status of the execution.
   *
   * @param Status $status
   */
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }
  /**
   * @return Status
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Output only. Non-fatal warnings collected during the execution.
   *
   * @param Warning[] $warnings
   */
  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }
  /**
   * @return Warning[]
   */
  public function getWarnings()
  {
    return $this->warnings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecutionReport::class, 'Google_Service_DeviceRun_ExecutionReport');
