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

namespace Google\Service\OnDemandScanning;

class FindingLocation extends \Google\Model
{
  /**
   * Relative path of the file containing the finding.
   *
   * @var string
   */
  public $filePath;
  /**
   * Line number (1-based), or 0 if whole File / unknown.
   *
   * @var string
   */
  public $lineNumber;

  /**
   * Relative path of the file containing the finding.
   *
   * @param string $filePath
   */
  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  /**
   * @return string
   */
  public function getFilePath()
  {
    return $this->filePath;
  }
  /**
   * Line number (1-based), or 0 if whole File / unknown.
   *
   * @param string $lineNumber
   */
  public function setLineNumber($lineNumber)
  {
    $this->lineNumber = $lineNumber;
  }
  /**
   * @return string
   */
  public function getLineNumber()
  {
    return $this->lineNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FindingLocation::class, 'Google_Service_OnDemandScanning_FindingLocation');
