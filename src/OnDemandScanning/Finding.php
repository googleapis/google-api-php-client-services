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
   * Unspecified scanner.
   */
  public const SCANNER_SCANNER_UNSPECIFIED = 'SCANNER_UNSPECIFIED';
  /**
   * Static scanner.
   */
  public const SCANNER_STATIC = 'STATIC';
  /**
   * LLM scanner.
   */
  public const SCANNER_LLM = 'LLM';
  /**
   * Unspecified severity.
   */
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  /**
   * Critical severity.
   */
  public const SEVERITY_CRITICAL = 'CRITICAL';
  /**
   * High severity.
   */
  public const SEVERITY_HIGH = 'HIGH';
  /**
   * Category of the finding.
   *
   * @var string
   */
  public $category;
  /**
   * Description of the finding category.
   *
   * @var string
   */
  public $details;
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
   * Description of the finding category.
   *
   * @param string $details
   */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /**
   * @return string
   */
  public function getDetails()
  {
    return $this->details;
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
   * Accepted values: SCANNER_UNSPECIFIED, STATIC, LLM
   *
   * @param self::SCANNER_* $scanner
   */
  public function setScanner($scanner)
  {
    $this->scanner = $scanner;
  }
  /**
   * @return self::SCANNER_*
   */
  public function getScanner()
  {
    return $this->scanner;
  }
  /**
   * Severity of the finding.
   *
   * Accepted values: SEVERITY_UNSPECIFIED, CRITICAL, HIGH
   *
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Finding::class, 'Google_Service_OnDemandScanning_Finding');
