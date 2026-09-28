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

class SessionReport extends \Google\Collection
{
  protected $collection_key = 'jobReports';
  /**
   * Output only. The end time of the session.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. The unique identifier of the session.
   *
   * @var string
   */
  public $id;
  protected $jobReportsType = JobReport::class;
  protected $jobReportsDataType = 'array';
  protected $resultType = Result::class;
  protected $resultDataType = '';
  /**
   * Output only. The start time of the session.
   *
   * @var string
   */
  public $startTime;
  protected $statusType = Status::class;
  protected $statusDataType = '';

  /**
   * Output only. The end time of the session.
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
   * Output only. The unique identifier of the session.
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
   * Output only. Reports of the jobs in the session.
   *
   * @param JobReport[] $jobReports
   */
  public function setJobReports($jobReports)
  {
    $this->jobReports = $jobReports;
  }
  /**
   * @return JobReport[]
   */
  public function getJobReports()
  {
    return $this->jobReports;
  }
  /**
   * Output only. The result of the session.
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
   * Output only. The start time of the session.
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
   * Output only. The status of the session.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionReport::class, 'Google_Service_DeviceRun_SessionReport');
