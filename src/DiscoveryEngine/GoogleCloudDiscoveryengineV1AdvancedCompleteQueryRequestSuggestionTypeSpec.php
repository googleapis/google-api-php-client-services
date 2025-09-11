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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequestSuggestionTypeSpec extends \Google\Model
{
  /**
   * @var int
   */
  public $maxSuggestions;
  /**
   * @var string
   */
  public $suggestionType;

  /**
   * @param int
   */
  public function setMaxSuggestions($maxSuggestions)
  {
    $this->maxSuggestions = $maxSuggestions;
  }
  /**
   * @return int
   */
  public function getMaxSuggestions()
  {
    return $this->maxSuggestions;
  }
  /**
   * @param string
   */
  public function setSuggestionType($suggestionType)
  {
    $this->suggestionType = $suggestionType;
  }
  /**
   * @return string
   */
  public function getSuggestionType()
  {
    return $this->suggestionType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequestSuggestionTypeSpec::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1AdvancedCompleteQueryRequestSuggestionTypeSpec');
