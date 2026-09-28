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

class JobReport extends \Google\Collection
{
  protected $collection_key = 'warnings';
  /**
   * Output only. The display_name set by users in the JobConfig.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The end time of the job.
   *
   * @var string
   */
  public $endTime;
  protected $executionReportsType = ExecutionReport::class;
  protected $executionReportsDataType = 'array';
  /**
   * Output only. The unique identifier of the job.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The original labels provided by the user during job creation.
   *
   * @var string[]
   */
  public $labels;
  protected $outputFilesType = OutputFile::class;
  protected $outputFilesDataType = 'array';
  protected $resultType = Result::class;
  protected $resultDataType = '';
  /**
   * Output only. The start time of the job.
   *
   * @var string
   */
  public $startTime;
  protected $statusType = Status::class;
  protected $statusDataType = '';
  protected $warningsType = Warning::class;
  protected $warningsDataType = 'array';

  /**
   * Output only. The display_name set by users in the JobConfig.
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
   * Output only. The end time of the job.
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
   * Output only. Reports of the execution attempts of the job.
   *
   * @param ExecutionReport[] $executionReports
   */
  public function setExecutionReports($executionReports)
  {
    $this->executionReports = $executionReports;
  }
  /**
   * @return ExecutionReport[]
   */
  public function getExecutionReports()
  {
    return $this->executionReports;
  }
  /**
   * Output only. The unique identifier of the job.
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
   * Output only. The original labels provided by the user during job creation.
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
   * Output only. The output files of the job.
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
   * Output only. The result of the job.
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
   * Output only. The start time of the job.
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
   * Output only. The status of the job.
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
   * Output only. Non-fatal warnings collected during the job.
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
class_alias(JobReport::class, 'Google_Service_DeviceRun_JobReport');
