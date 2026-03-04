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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ToolGoogleSearchSearchTypes extends \Google\Model
{
  protected $imageSearchType = GoogleCloudAiplatformV1ToolGoogleSearchImageSearch::class;
  protected $imageSearchDataType = '';
  protected $webSearchType = GoogleCloudAiplatformV1ToolGoogleSearchWebSearch::class;
  protected $webSearchDataType = '';

  /**
   * Optional. Setting this field enables image search. Image bytes are
   * returned.
   *
   * @param GoogleCloudAiplatformV1ToolGoogleSearchImageSearch $imageSearch
   */
  public function setImageSearch(GoogleCloudAiplatformV1ToolGoogleSearchImageSearch $imageSearch)
  {
    $this->imageSearch = $imageSearch;
  }
  /**
   * @return GoogleCloudAiplatformV1ToolGoogleSearchImageSearch
   */
  public function getImageSearch()
  {
    return $this->imageSearch;
  }
  /**
   * Optional. Setting this field enables web search. Only text results are
   * returned.
   *
   * @param GoogleCloudAiplatformV1ToolGoogleSearchWebSearch $webSearch
   */
  public function setWebSearch(GoogleCloudAiplatformV1ToolGoogleSearchWebSearch $webSearch)
  {
    $this->webSearch = $webSearch;
  }
  /**
   * @return GoogleCloudAiplatformV1ToolGoogleSearchWebSearch
   */
  public function getWebSearch()
  {
    return $this->webSearch;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ToolGoogleSearchSearchTypes::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ToolGoogleSearchSearchTypes');
