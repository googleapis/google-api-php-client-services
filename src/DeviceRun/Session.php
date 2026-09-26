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

class Session extends \Google\Model
{
  /**
   * Identifier. The resource name of the session. Format:
   * `projects/{project}/locations/{location}/sessions/{session}`.
   *
   * @var string
   */
  public $name;
  protected $sessionConfigType = SessionConfig::class;
  protected $sessionConfigDataType = '';
  protected $sessionReportType = SessionReport::class;
  protected $sessionReportDataType = '';

  /**
   * Identifier. The resource name of the session. Format:
   * `projects/{project}/locations/{location}/sessions/{session}`.
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
   * Required. Configuration used to create the session.
   *
   * @param SessionConfig $sessionConfig
   */
  public function setSessionConfig(SessionConfig $sessionConfig)
  {
    $this->sessionConfig = $sessionConfig;
  }
  /**
   * @return SessionConfig
   */
  public function getSessionConfig()
  {
    return $this->sessionConfig;
  }
  /**
   * Output only. The runtime information and result report of the session.
   *
   * @param SessionReport $sessionReport
   */
  public function setSessionReport(SessionReport $sessionReport)
  {
    $this->sessionReport = $sessionReport;
  }
  /**
   * @return SessionReport
   */
  public function getSessionReport()
  {
    return $this->sessionReport;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Session::class, 'Google_Service_DeviceRun_Session');
