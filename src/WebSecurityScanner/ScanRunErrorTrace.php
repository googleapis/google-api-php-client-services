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

namespace Google\Service\WebSecurityScanner;

class ScanRunErrorTrace extends \Google\Model
{
  /**
   * @var string
   */
  public $code;
  /**
   * @var int
   */
  public $mostCommonHttpErrorCode;
  protected $scanConfigErrorType = ScanConfigError::class;
  protected $scanConfigErrorDataType = '';

  /**
   * @param string
   */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /**
   * @return string
   */
  public function getCode()
  {
    return $this->code;
  }
  /**
   * @param int
   */
  public function setMostCommonHttpErrorCode($mostCommonHttpErrorCode)
  {
    $this->mostCommonHttpErrorCode = $mostCommonHttpErrorCode;
  }
  /**
   * @return int
   */
  public function getMostCommonHttpErrorCode()
  {
    return $this->mostCommonHttpErrorCode;
  }
  /**
   * @param ScanConfigError
   */
  public function setScanConfigError(ScanConfigError $scanConfigError)
  {
    $this->scanConfigError = $scanConfigError;
  }
  /**
   * @return ScanConfigError
   */
  public function getScanConfigError()
  {
    return $this->scanConfigError;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScanRunErrorTrace::class, 'Google_Service_WebSecurityScanner_ScanRunErrorTrace');
