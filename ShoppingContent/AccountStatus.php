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

class Google_Service_ShoppingContent_AccountStatus extends Google_Collection
{
  protected $collection_key = 'dataQualityIssues';
  public $accountId;
  public $dataQualityIssues;
  public $kind;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  public function getAccountId()
  {
    return $this->accountId;
  }
  public function setDataQualityIssues(array $dataQualityIssues)
  {
    foreach ($dataQualityIssues as $d) {
      if (!$d instanceof Google_Service_ShoppingContent_AccountStatusDataQualityIssue) {
        throw new InvalidArgumentException('First argument to setDataQualityIssues must be an array of Google_Service_ShoppingContent_AccountStatusDataQualityIssue');
      }
    }
    $this->dataQualityIssues = $dataQualityIssues;
  }
  public function getDataQualityIssues()
  {
    return $this->dataQualityIssues;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}
