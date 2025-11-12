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

class GoogleCloudDiscoveryengineV1AssistantCustomerPolicyBannedPhrase extends \Google\Model
{
  /**
   * @var bool
   */
  public $ignoreDiacritics;
  /**
   * @var string
   */
  public $matchType;
  /**
   * @var string
   */
  public $phrase;

  /**
   * @param bool
   */
  public function setIgnoreDiacritics($ignoreDiacritics)
  {
    $this->ignoreDiacritics = $ignoreDiacritics;
  }
  /**
   * @return bool
   */
  public function getIgnoreDiacritics()
  {
    return $this->ignoreDiacritics;
  }
  /**
   * @param string
   */
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /**
   * @return string
   */
  public function getMatchType()
  {
    return $this->matchType;
  }
  /**
   * @param string
   */
  public function setPhrase($phrase)
  {
    $this->phrase = $phrase;
  }
  /**
   * @return string
   */
  public function getPhrase()
  {
    return $this->phrase;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1AssistantCustomerPolicyBannedPhrase::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1AssistantCustomerPolicyBannedPhrase');
