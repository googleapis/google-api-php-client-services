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

class Finding extends \Google\Model
{
  /**
   * Category of the finding.
   *
   * @var string
   */
  public $category;
  protected $locationType = FindingLocation::class;
  protected $locationDataType = '';
  /**
   * Scanner determines which engine (e.g. static, llm) emitted the finding.
   *
   * @var string
   */
  public $scanner;
  /**
   * Severity of the finding.
   *
   * @var string
   */
  public $severity;

  /**
   * Category of the finding.
   *
   * @param string $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * Location (path and line) where the finding was detected.
   *
   * @param FindingLocation $location
   */
  public function setLocation(FindingLocation $location)
  {
    $this->location = $location;
  }
  /**
   * @return FindingLocation
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Scanner determines which engine (e.g. static, llm) emitted the finding.
   *
   * @param string $scanner
   */
  public function setScanner($scanner)
  {
    $this->scanner = $scanner;
  }
  /**
   * @return string
   */
  public function getScanner()
  {
    return $this->scanner;
  }
  /**
   * Severity of the finding.
   *
   * @param string $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return string
   */
  public function getSeverity()
  {
    return $this->severity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Finding::class, 'Google_Service_OnDemandScanning_Finding');
