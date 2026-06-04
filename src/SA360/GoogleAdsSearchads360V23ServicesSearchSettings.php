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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesSearchSettings extends \Google\Model
{
  /**
   * If true, results will be excluded from the response. Otherwise, results
   * will be returned. Default is false.
   *
   * @var bool
   */
  public $omitResults;
  /**
   * If true, summary row will be included in the response and sent in a
   * response by itself after all other query results are returned. Default is
   * false.
   *
   * @var bool
   */
  public $returnSummaryRow;
  /**
   * If true, the total number of results that match the query ignoring the
   * LIMIT clause will be included in the response. Default is false.
   *
   * @var bool
   */
  public $returnTotalResultsCount;

  /**
   * If true, results will be excluded from the response. Otherwise, results
   * will be returned. Default is false.
   *
   * @param bool $omitResults
   */
  public function setOmitResults($omitResults)
  {
    $this->omitResults = $omitResults;
  }
  /**
   * @return bool
   */
  public function getOmitResults()
  {
    return $this->omitResults;
  }
  /**
   * If true, summary row will be included in the response and sent in a
   * response by itself after all other query results are returned. Default is
   * false.
   *
   * @param bool $returnSummaryRow
   */
  public function setReturnSummaryRow($returnSummaryRow)
  {
    $this->returnSummaryRow = $returnSummaryRow;
  }
  /**
   * @return bool
   */
  public function getReturnSummaryRow()
  {
    return $this->returnSummaryRow;
  }
  /**
   * If true, the total number of results that match the query ignoring the
   * LIMIT clause will be included in the response. Default is false.
   *
   * @param bool $returnTotalResultsCount
   */
  public function setReturnTotalResultsCount($returnTotalResultsCount)
  {
    $this->returnTotalResultsCount = $returnTotalResultsCount;
  }
  /**
   * @return bool
   */
  public function getReturnTotalResultsCount()
  {
    return $this->returnTotalResultsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSearchSettings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSearchSettings');
