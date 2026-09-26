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

class GenerateOnboardingSuggestionsResponse extends \Google\Collection
{
  /**
   * Unspecified profile.
   */
  public const USER_PROFILE_USER_PROFILE_UNSPECIFIED = 'USER_PROFILE_UNSPECIFIED';
  /**
   * No assistant sessions containing messages.
   */
  public const USER_PROFILE_NEW = 'NEW';
  /**
   * One or two assistant sessions containing messages.
   */
  public const USER_PROFILE_EXPLORING = 'EXPLORING';
  /**
   * More than two assistant sessions containing messages.
   */
  public const USER_PROFILE_RETURNING = 'RETURNING';
  protected $collection_key = 'suggestions';
  /**
   * Opaque token capturing the onboarding snapshot used to generate these
   * suggestions. Clients echo it on the first StreamChatAiAssistantRequest so
   * the server can reuse the snapshot.
   *
   * @var string
   */
  public $contextToken;
  protected $suggestionsType = AssistantSuggestion::class;
  protected $suggestionsDataType = 'array';
  /**
   * Classification of the requesting user's history.
   *
   * @var string
   */
  public $userProfile;

  /**
   * Opaque token capturing the onboarding snapshot used to generate these
   * suggestions. Clients echo it on the first StreamChatAiAssistantRequest so
   * the server can reuse the snapshot.
   *
   * @param string $contextToken
   */
  public function setContextToken($contextToken)
  {
    $this->contextToken = $contextToken;
  }
  /**
   * @return string
   */
  public function getContextToken()
  {
    return $this->contextToken;
  }
  /**
   * Personalized suggestions, ranked most relevant first.
   *
   * @param AssistantSuggestion[] $suggestions
   */
  public function setSuggestions($suggestions)
  {
    $this->suggestions = $suggestions;
  }
  /**
   * @return AssistantSuggestion[]
   */
  public function getSuggestions()
  {
    return $this->suggestions;
  }
  /**
   * Classification of the requesting user's history.
   *
   * Accepted values: USER_PROFILE_UNSPECIFIED, NEW, EXPLORING, RETURNING
   *
   * @param self::USER_PROFILE_* $userProfile
   */
  public function setUserProfile($userProfile)
  {
    $this->userProfile = $userProfile;
  }
  /**
   * @return self::USER_PROFILE_*
   */
  public function getUserProfile()
  {
    return $this->userProfile;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenerateOnboardingSuggestionsResponse::class, 'Google_Service_CustomerEngagementSuite_GenerateOnboardingSuggestionsResponse');
