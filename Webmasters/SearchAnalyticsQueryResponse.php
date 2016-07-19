<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Webmasters_SearchAnalyticsQueryResponse extends Google_Collection
{
  protected $collection_key = 'rows';
  public $responseAggregationType;
  public $rows;

  public function setResponseAggregationType($responseAggregationType)
  {
    $this->responseAggregationType = $responseAggregationType;
  }
  public function getResponseAggregationType()
  {
    return $this->responseAggregationType;
  }
  public function setRows(array $rows)
  {
    foreach ($rows as $r) {
      if (!$r instanceof Google_Service_Webmasters_ApiDataRow) {
        throw new InvalidArgumentException('First argument to setRows must be an array of Google_Service_Webmasters_ApiDataRow');
      }
    }
    $this->rows = $rows;
  }
  public function getRows()
  {
    return $this->rows;
  }
}
