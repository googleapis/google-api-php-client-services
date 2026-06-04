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

namespace Google\Service\SA360\Resource;

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestKeywordThemeConstantsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesSuggestKeywordThemeConstantsResponse;

/**
 * The "keywordThemeConstants" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $keywordThemeConstants = $searchads360Service->keywordThemeConstants;
 *  </code>
 */
class KeywordThemeConstants extends \Google\Service\Resource
{
  /**
   * Returns KeywordThemeConstant suggestions by keyword themes. List of thrown
   * errors: [AuthenticationError]() [AuthorizationError]() [HeaderError]()
   * [InternalError]() [QuotaError]() [RequestError]()
   * (keywordThemeConstants.suggest)
   *
   * @param GoogleAdsSearchads360V23ServicesSuggestKeywordThemeConstantsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesSuggestKeywordThemeConstantsResponse
   * @throws \Google\Service\Exception
   */
  public function suggest(GoogleAdsSearchads360V23ServicesSuggestKeywordThemeConstantsRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('suggest', [$params], GoogleAdsSearchads360V23ServicesSuggestKeywordThemeConstantsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordThemeConstants::class, 'Google_Service_SA360_Resource_KeywordThemeConstants');
