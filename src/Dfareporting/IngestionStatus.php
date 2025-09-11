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

namespace Google\Service\Dfareporting;

class IngestionStatus extends \Google\Model
{
  /**
   * @var string
   */
  public $numActiveRows;
  /**
   * @var string
   */
  public $numRowsProcessed;
  /**
   * @var string
   */
  public $numRowsTotal;
  /**
   * @var string
   */
  public $numRowsWithErrors;
  /**
   * @var string
   */
  public $numWarningsTotal;

  /**
   * @param string
   */
  public function setNumActiveRows($numActiveRows)
  {
    $this->numActiveRows = $numActiveRows;
  }
  /**
   * @return string
   */
  public function getNumActiveRows()
  {
    return $this->numActiveRows;
  }
  /**
   * @param string
   */
  public function setNumRowsProcessed($numRowsProcessed)
  {
    $this->numRowsProcessed = $numRowsProcessed;
  }
  /**
   * @return string
   */
  public function getNumRowsProcessed()
  {
    return $this->numRowsProcessed;
  }
  /**
   * @param string
   */
  public function setNumRowsTotal($numRowsTotal)
  {
    $this->numRowsTotal = $numRowsTotal;
  }
  /**
   * @return string
   */
  public function getNumRowsTotal()
  {
    return $this->numRowsTotal;
  }
  /**
   * @param string
   */
  public function setNumRowsWithErrors($numRowsWithErrors)
  {
    $this->numRowsWithErrors = $numRowsWithErrors;
  }
  /**
   * @return string
   */
  public function getNumRowsWithErrors()
  {
    return $this->numRowsWithErrors;
  }
  /**
   * @param string
   */
  public function setNumWarningsTotal($numWarningsTotal)
  {
    $this->numWarningsTotal = $numWarningsTotal;
  }
  /**
   * @return string
   */
  public function getNumWarningsTotal()
  {
    return $this->numWarningsTotal;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IngestionStatus::class, 'Google_Service_Dfareporting_IngestionStatus');
