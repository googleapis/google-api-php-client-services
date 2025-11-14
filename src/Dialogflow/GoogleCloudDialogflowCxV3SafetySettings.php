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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowCxV3SafetySettings extends \Google\Collection
{
  /**
   * Unspecified, defaults to PARTIAL_MATCH.
   */
  public const DEFAULT_BANNED_PHRASE_MATCH_STRATEGY_PHRASE_MATCH_STRATEGY_UNSPECIFIED = 'PHRASE_MATCH_STRATEGY_UNSPECIFIED';
  /**
   * Text that contains the phrase as a substring will be matched, e.g. "foo"
   * will match "afoobar".
   */
  public const DEFAULT_BANNED_PHRASE_MATCH_STRATEGY_PARTIAL_MATCH = 'PARTIAL_MATCH';
  /**
   * Text that contains the tokenized words of the phrase will be matched, e.g.
   * "foo" will match "a foo bar" and "foo bar", but not "foobar".
   */
  public const DEFAULT_BANNED_PHRASE_MATCH_STRATEGY_WORD_MATCH = 'WORD_MATCH';
  protected $collection_key = 'bannedPhrases';
  protected $bannedPhrasesType = GoogleCloudDialogflowCxV3SafetySettingsPhrase::class;
  protected $bannedPhrasesDataType = 'array';
  /**
   * Optional. Default phrase match strategy for banned phrases.
   *
   * @var string
   */
  public $defaultBannedPhraseMatchStrategy;
  protected $promptSecuritySettingsType = GoogleCloudDialogflowCxV3SafetySettingsPromptSecuritySettings::class;
  protected $promptSecuritySettingsDataType = '';

  /**
   * Banned phrases for generated text.
   *
   * @param GoogleCloudDialogflowCxV3SafetySettingsPhrase[] $bannedPhrases
   */
  public function setBannedPhrases($bannedPhrases)
  {
    $this->bannedPhrases = $bannedPhrases;
  }
  /**
   * @return GoogleCloudDialogflowCxV3SafetySettingsPhrase[]
   */
  public function getBannedPhrases()
  {
    return $this->bannedPhrases;
  }
  /**
   * Optional. Default phrase match strategy for banned phrases.
   *
   * Accepted values: PHRASE_MATCH_STRATEGY_UNSPECIFIED, PARTIAL_MATCH,
   * WORD_MATCH
   *
   * @param self::DEFAULT_BANNED_PHRASE_MATCH_STRATEGY_* $defaultBannedPhraseMatchStrategy
   */
  public function setDefaultBannedPhraseMatchStrategy($defaultBannedPhraseMatchStrategy)
  {
    $this->defaultBannedPhraseMatchStrategy = $defaultBannedPhraseMatchStrategy;
  }
  /**
   * @return self::DEFAULT_BANNED_PHRASE_MATCH_STRATEGY_*
   */
  public function getDefaultBannedPhraseMatchStrategy()
  {
    return $this->defaultBannedPhraseMatchStrategy;
  }
  /**
   * Optional. Settings for prompt security checks.
   *
   * @param GoogleCloudDialogflowCxV3SafetySettingsPromptSecuritySettings $promptSecuritySettings
   */
  public function setPromptSecuritySettings(GoogleCloudDialogflowCxV3SafetySettingsPromptSecuritySettings $promptSecuritySettings)
  {
    $this->promptSecuritySettings = $promptSecuritySettings;
  }
  /**
   * @return GoogleCloudDialogflowCxV3SafetySettingsPromptSecuritySettings
   */
  public function getPromptSecuritySettings()
  {
    return $this->promptSecuritySettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowCxV3SafetySettings::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SafetySettings');
