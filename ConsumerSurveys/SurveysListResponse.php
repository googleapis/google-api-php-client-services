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

class Google_Service_ConsumerSurveys_SurveysListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  public $pageInfo;
  public $requestId;
  public $resources;
  public $tokenPagination;

  public function setPageInfo(Google_Service_ConsumerSurveys_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  public function getRequestId()
  {
    return $this->requestId;
  }
  public function setResources(array $resources)
  {
    foreach ($resources as $r) {
      if (!$r instanceof Google_Service_ConsumerSurveys_Survey) {
        throw new InvalidArgumentException('First argument to setResources must be an array of Google_Service_ConsumerSurveys_Survey');
      }
    }
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
  public function setTokenPagination(Google_Service_ConsumerSurveys_TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }
  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
}
