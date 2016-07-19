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

class Google_Service_Bigquery_BigtableOptions extends Google_Collection
{
  protected $collection_key = 'columnFamilies';
  public $columnFamilies;
  public $ignoreUnspecifiedColumnFamilies;

  public function setColumnFamilies(array $columnFamilies)
  {
    foreach ($columnFamilies as $c) {
      if (!$c instanceof Google_Service_Bigquery_BigtableColumnFamily) {
        throw new InvalidArgumentException('First argument to setColumnFamilies must be an array of Google_Service_Bigquery_BigtableColumnFamily');
      }
    }
    $this->columnFamilies = $columnFamilies;
  }
  public function getColumnFamilies()
  {
    return $this->columnFamilies;
  }
  public function setIgnoreUnspecifiedColumnFamilies($ignoreUnspecifiedColumnFamilies)
  {
    $this->ignoreUnspecifiedColumnFamilies = $ignoreUnspecifiedColumnFamilies;
  }
  public function getIgnoreUnspecifiedColumnFamilies()
  {
    return $this->ignoreUnspecifiedColumnFamilies;
  }
}
