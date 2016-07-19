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

class Google_Service_Bigquery_GetQueryResultsResponse extends Google_Collection
{
  protected $collection_key = 'rows';
  public $cacheHit;
  public $errors;
  public $etag;
  public $jobComplete;
  public $jobReference;
  public $kind;
  public $pageToken;
  public $rows;
  public $schema;
  public $totalBytesProcessed;
  public $totalRows;

  public function setCacheHit($cacheHit)
  {
    $this->cacheHit = $cacheHit;
  }
  public function getCacheHit()
  {
    return $this->cacheHit;
  }
  public function setErrors(array $errors)
  {
    foreach ($errors as $e) {
      if (!$e instanceof Google_Service_Bigquery_ErrorProto) {
        throw new InvalidArgumentException('First argument to setErrors must be an array of Google_Service_Bigquery_ErrorProto');
      }
    }
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setJobComplete($jobComplete)
  {
    $this->jobComplete = $jobComplete;
  }
  public function getJobComplete()
  {
    return $this->jobComplete;
  }
  public function setJobReference(Google_Service_Bigquery_JobReference $jobReference)
  {
    $this->jobReference = $jobReference;
  }
  public function getJobReference()
  {
    return $this->jobReference;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  public function getPageToken()
  {
    return $this->pageToken;
  }
  public function setRows(array $rows)
  {
    foreach ($rows as $r) {
      if (!$r instanceof Google_Service_Bigquery_TableRow) {
        throw new InvalidArgumentException('First argument to setRows must be an array of Google_Service_Bigquery_TableRow');
      }
    }
    $this->rows = $rows;
  }
  public function getRows()
  {
    return $this->rows;
  }
  public function setSchema(Google_Service_Bigquery_TableSchema $schema)
  {
    $this->schema = $schema;
  }
  public function getSchema()
  {
    return $this->schema;
  }
  public function setTotalBytesProcessed($totalBytesProcessed)
  {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }
  public function getTotalBytesProcessed()
  {
    return $this->totalBytesProcessed;
  }
  public function setTotalRows($totalRows)
  {
    $this->totalRows = $totalRows;
  }
  public function getTotalRows()
  {
    return $this->totalRows;
  }
}
