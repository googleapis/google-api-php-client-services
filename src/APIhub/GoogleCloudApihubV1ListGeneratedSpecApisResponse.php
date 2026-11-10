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

namespace Google\Service\APIhub;

class GoogleCloudApihubV1ListGeneratedSpecApisResponse extends \Google\Collection
{
  protected $collection_key = 'generatedSpecApis';
  protected $generatedSpecApisType = GoogleCloudApihubV1GeneratedSpecApi::class;
  protected $generatedSpecApisDataType = 'array';
  /**
   * A token to retrieve the next page of results; empty when there are no more
   * results.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * The tracked APIs for the requested parent, ordered by `update_time desc`.
   *
   * @param GoogleCloudApihubV1GeneratedSpecApi[] $generatedSpecApis
   */
  public function setGeneratedSpecApis($generatedSpecApis)
  {
    $this->generatedSpecApis = $generatedSpecApis;
  }
  /**
   * @return GoogleCloudApihubV1GeneratedSpecApi[]
   */
  public function getGeneratedSpecApis()
  {
    return $this->generatedSpecApis;
  }
  /**
   * A token to retrieve the next page of results; empty when there are no more
   * results.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApihubV1ListGeneratedSpecApisResponse::class, 'Google_Service_APIhub_GoogleCloudApihubV1ListGeneratedSpecApisResponse');
