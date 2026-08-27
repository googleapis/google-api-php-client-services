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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTablePart extends \Google\Collection
{
  protected $collection_key = 'rows';
  /**
   * Optional. Table column headers.
   *
   * @var string[]
   */
  public $headers;
  protected $rowsType = GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTableRow::class;
  protected $rowsDataType = 'array';
  /**
   * Optional. Optional title for the table.
   *
   * @var string
   */
  public $title;

  /**
   * Optional. Table column headers.
   *
   * @param string[] $headers
   */
  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }
  /**
   * @return string[]
   */
  public function getHeaders()
  {
    return $this->headers;
  }
  /**
   * Optional. Table rows.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTableRow[] $rows
   */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTableRow[]
   */
  public function getRows()
  {
    return $this->rows;
  }
  /**
   * Optional. Optional title for the table.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTablePart::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainConversationTranscriptTranscriptSegmentTranscriptPartTablePart');
