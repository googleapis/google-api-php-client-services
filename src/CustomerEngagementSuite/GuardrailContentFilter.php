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

namespace Google\Service\CustomerEngagementSuite;

class GuardrailContentFilter extends \Google\Collection
{
  /**
   * Match type is not specified.
   */
  public const MATCH_TYPE_MATCH_TYPE_UNSPECIFIED = 'MATCH_TYPE_UNSPECIFIED';
  /**
   * Content is matched for substrings character by character.
   */
  public const MATCH_TYPE_SIMPLE_STRING_MATCH = 'SIMPLE_STRING_MATCH';
  /**
   * Content only matches if the pattern found in the text is surrounded by word
   * delimiters. Banned phrases can also contain word delimiters.
   */
  public const MATCH_TYPE_WORD_BOUNDARY_STRING_MATCH = 'WORD_BOUNDARY_STRING_MATCH';
  /**
   * Content is matched using regular expression syntax.
   */
  public const MATCH_TYPE_REGEXP_MATCH = 'REGEXP_MATCH';
  protected $collection_key = 'bannedContentsInUserInput';
  /**
   * Optional. List of banned phrases. Applies to both user inputs and agent
   * responses.
   *
   * @var string[]
   */
  public $bannedContents;
  /**
   * Optional. List of banned phrases. Applies only to agent responses.
   *
   * @var string[]
   */
  public $bannedContentsInAgentResponse;
  /**
   * Optional. List of banned phrases. Applies only to user inputs.
   *
   * @var string[]
   */
  public $bannedContentsInUserInput;
  /**
   * Optional. If true, diacritics are ignored during matching.
   *
   * @var bool
   */
  public $disregardDiacritics;
  /**
   * Required. Match type for the content filter.
   *
   * @var string
   */
  public $matchType;

  /**
   * Optional. List of banned phrases. Applies to both user inputs and agent
   * responses.
   *
   * @param string[] $bannedContents
   */
  public function setBannedContents($bannedContents)
  {
    $this->bannedContents = $bannedContents;
  }
  /**
   * @return string[]
   */
  public function getBannedContents()
  {
    return $this->bannedContents;
  }
  /**
   * Optional. List of banned phrases. Applies only to agent responses.
   *
   * @param string[] $bannedContentsInAgentResponse
   */
  public function setBannedContentsInAgentResponse($bannedContentsInAgentResponse)
  {
    $this->bannedContentsInAgentResponse = $bannedContentsInAgentResponse;
  }
  /**
   * @return string[]
   */
  public function getBannedContentsInAgentResponse()
  {
    return $this->bannedContentsInAgentResponse;
  }
  /**
   * Optional. List of banned phrases. Applies only to user inputs.
   *
   * @param string[] $bannedContentsInUserInput
   */
  public function setBannedContentsInUserInput($bannedContentsInUserInput)
  {
    $this->bannedContentsInUserInput = $bannedContentsInUserInput;
  }
  /**
   * @return string[]
   */
  public function getBannedContentsInUserInput()
  {
    return $this->bannedContentsInUserInput;
  }
  /**
   * Optional. If true, diacritics are ignored during matching.
   *
   * @param bool $disregardDiacritics
   */
  public function setDisregardDiacritics($disregardDiacritics)
  {
    $this->disregardDiacritics = $disregardDiacritics;
  }
  /**
   * @return bool
   */
  public function getDisregardDiacritics()
  {
    return $this->disregardDiacritics;
  }
  /**
   * Required. Match type for the content filter.
   *
   * Accepted values: MATCH_TYPE_UNSPECIFIED, SIMPLE_STRING_MATCH,
   * WORD_BOUNDARY_STRING_MATCH, REGEXP_MATCH
   *
   * @param self::MATCH_TYPE_* $matchType
   */
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /**
   * @return self::MATCH_TYPE_*
   */
  public function getMatchType()
  {
    return $this->matchType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GuardrailContentFilter::class, 'Google_Service_CustomerEngagementSuite_GuardrailContentFilter');
