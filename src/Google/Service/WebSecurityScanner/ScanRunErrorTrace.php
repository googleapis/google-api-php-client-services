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

class Google_Service_WebSecurityScanner_ScanRunErrorTrace extends Google_Model
{
  public $code;
  public $mostCommonHttpErrorCode;
  protected $scanConfigErrorType = 'Google_Service_WebSecurityScanner_ScanConfigError';
  protected $scanConfigErrorDataType = '';

  public function setCode($code)
  {
    $this->code = $code;
  }
  public function getCode()
  {
    return $this->code;
  }
  public function setMostCommonHttpErrorCode($mostCommonHttpErrorCode)
  {
    $this->mostCommonHttpErrorCode = $mostCommonHttpErrorCode;
  }
  public function getMostCommonHttpErrorCode()
  {
    return $this->mostCommonHttpErrorCode;
  }
  /**
   * @param Google_Service_WebSecurityScanner_ScanConfigError
   */
  public function setScanConfigError(Google_Service_WebSecurityScanner_ScanConfigError $scanConfigError)
  {
    $this->scanConfigError = $scanConfigError;
  }
  /**
   * @return Google_Service_WebSecurityScanner_ScanConfigError
   */
  public function getScanConfigError()
  {
    return $this->scanConfigError;
  }
}
