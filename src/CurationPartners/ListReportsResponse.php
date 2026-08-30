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

namespace Google\Service\CurationPartners;

class ListReportsResponse extends \Google\Collection
{
  protected $collection_key = 'reports';
  /**
   * A token, which can be sent as `page_token` to retrieve the next page. If
   * this field is omitted, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;
  protected $reportsType = Report::class;
  protected $reportsDataType = 'array';
  /**
   * Total number of `Report` objects. If a filter was included in the request,
   * this reflects the total number after the filtering is applied. `total_size`
   * won't be calculated in the response unless it has been included in a
   * response field mask. The response field mask can be provided to the method
   * by using the URL parameter `$fields` or `fields`, or by using the HTTP/gRPC
   * header `X-Goog-FieldMask`. For more information, see
   * https://developers.google.com/ad-manager/api/beta/field-masks
   *
   * @var int
   */
  public $totalSize;

  /**
   * A token, which can be sent as `page_token` to retrieve the next page. If
   * this field is omitted, there are no subsequent pages.
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
   * The `Report` objects from the specified network.
   *
   * @param Report[] $reports
   */
  public function setReports($reports)
  {
    $this->reports = $reports;
  }
  /**
   * @return Report[]
   */
  public function getReports()
  {
    return $this->reports;
  }
  /**
   * Total number of `Report` objects. If a filter was included in the request,
   * this reflects the total number after the filtering is applied. `total_size`
   * won't be calculated in the response unless it has been included in a
   * response field mask. The response field mask can be provided to the method
   * by using the URL parameter `$fields` or `fields`, or by using the HTTP/gRPC
   * header `X-Goog-FieldMask`. For more information, see
   * https://developers.google.com/ad-manager/api/beta/field-masks
   *
   * @param int $totalSize
   */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /**
   * @return int
   */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListReportsResponse::class, 'Google_Service_CurationPartners_ListReportsResponse');
