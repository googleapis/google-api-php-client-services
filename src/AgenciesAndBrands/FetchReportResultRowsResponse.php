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

namespace Google\Service\AgenciesAndBrands;

class FetchReportResultRowsResponse extends \Google\Collection
{
  protected $collection_key = 'rows';
  protected $dateRangesType = FixedDateRange::class;
  protected $dateRangesDataType = 'array';
  /**
   * A token that can be sent as `page_token` to retrieve the next page. If this
   * field is omitted, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;
  protected $rowsType = Row::class;
  protected $rowsDataType = 'array';
  /**
   * The time at which the report was scheduled to run. For non-scheduled
   * reports, this is the time at which the report was requested to be run.
   *
   * @var string
   */
  public $runTime;
  /**
   * The total number of rows available from this report. Useful for pagination.
   * Only returned with the first page of results (when page_token is not
   * included in the request).
   *
   * @var int
   */
  public $totalRowCount;

  /**
   * The computed fixed date ranges this report includes. Only returned with the
   * first page of results (when page_token is not included in the request).
   *
   * @param FixedDateRange[] $dateRanges
   */
  public function setDateRanges($dateRanges)
  {
    $this->dateRanges = $dateRanges;
  }
  /**
   * @return FixedDateRange[]
   */
  public function getDateRanges()
  {
    return $this->dateRanges;
  }
  /**
   * A token that can be sent as `page_token` to retrieve the next page. If this
   * field is omitted, there are no subsequent pages.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * Up to `page_size` rows of report data.
   *
   * @param Row[] $rows
   */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /**
   * @return Row[]
   */
  public function getRows()
  {
    return $this->rows;
  }
  /**
   * The time at which the report was scheduled to run. For non-scheduled
   * reports, this is the time at which the report was requested to be run.
   *
   * @param string $runTime
   */
  public function setRunTime($runTime)
  {
    $this->runTime = $runTime;
  }
  /**
   * @return string
   */
  public function getRunTime()
  {
    return $this->runTime;
  }
  /**
   * The total number of rows available from this report. Useful for pagination.
   * Only returned with the first page of results (when page_token is not
   * included in the request).
   *
   * @param int $totalRowCount
   */
  public function setTotalRowCount($totalRowCount)
  {
    $this->totalRowCount = $totalRowCount;
  }
  /**
   * @return int
   */
  public function getTotalRowCount()
  {
    return $this->totalRowCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FetchReportResultRowsResponse::class, 'Google_Service_AgenciesAndBrands_FetchReportResultRowsResponse');
