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

class Google_Service_Analytics_GaDataDataTable extends Google_Collection
{
  protected $collection_key = 'rows';
  public $cols;
  public $rows;

  public function setCols(array $cols)
  {
    foreach ($cols as $c) {
      if (!$c instanceof Google_Service_Analytics_GaDataDataTableCols) {
        throw new InvalidArgumentException('First argument to setCols must be an array of Google_Service_Analytics_GaDataDataTableCols');
      }
    }
    $this->cols = $cols;
  }
  public function getCols()
  {
    return $this->cols;
  }
  public function setRows(array $rows)
  {
    foreach ($rows as $r) {
      if (!$r instanceof Google_Service_Analytics_GaDataDataTableRows) {
        throw new InvalidArgumentException('First argument to setRows must be an array of Google_Service_Analytics_GaDataDataTableRows');
      }
    }
    $this->rows = $rows;
  }
  public function getRows()
  {
    return $this->rows;
  }
}
