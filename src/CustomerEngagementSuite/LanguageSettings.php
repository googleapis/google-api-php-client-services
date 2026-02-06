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

class LanguageSettings extends \Google\Collection
{
  protected $collection_key = 'supportedLanguageCodes';
  /**
   * Optional. The default language code of the app.
   *
   * @var string
   */
  public $defaultLanguageCode;
  /**
   * Optional. Enables multilingual support. If true, agents in the app will use
   * pre-built instructions to improve handling of multilingual input.
   *
   * @var bool
   */
  public $enableMultilingualSupport;
  /**
   * Optional. The action to perform when an agent receives input in an
   * unsupported language. This can be a predefined action or a custom tool
   * call. Valid values are: - A tool's full resource name, which triggers a
   * specific tool execution. - A predefined system action, such as "escalate"
   * or "exit", which triggers an EndSession signal with corresponding metadata
   * to terminate the conversation.
   *
   * @var string
   */
  public $fallbackAction;
  /**
   * Optional. List of languages codes supported by the app, in addition to the
   * `default_language_code`.
   *
   * @var string[]
   */
  public $supportedLanguageCodes;

  /**
   * Optional. The default language code of the app.
   *
   * @param string $defaultLanguageCode
   */
  public function setDefaultLanguageCode($defaultLanguageCode)
  {
    $this->defaultLanguageCode = $defaultLanguageCode;
  }
  /**
   * @return string
   */
  public function getDefaultLanguageCode()
  {
    return $this->defaultLanguageCode;
  }
  /**
   * Optional. Enables multilingual support. If true, agents in the app will use
   * pre-built instructions to improve handling of multilingual input.
   *
   * @param bool $enableMultilingualSupport
   */
  public function setEnableMultilingualSupport($enableMultilingualSupport)
  {
    $this->enableMultilingualSupport = $enableMultilingualSupport;
  }
  /**
   * @return bool
   */
  public function getEnableMultilingualSupport()
  {
    return $this->enableMultilingualSupport;
  }
  /**
   * Optional. The action to perform when an agent receives input in an
   * unsupported language. This can be a predefined action or a custom tool
   * call. Valid values are: - A tool's full resource name, which triggers a
   * specific tool execution. - A predefined system action, such as "escalate"
   * or "exit", which triggers an EndSession signal with corresponding metadata
   * to terminate the conversation.
   *
   * @param string $fallbackAction
   */
  public function setFallbackAction($fallbackAction)
  {
    $this->fallbackAction = $fallbackAction;
  }
  /**
   * @return string
   */
  public function getFallbackAction()
  {
    return $this->fallbackAction;
  }
  /**
   * Optional. List of languages codes supported by the app, in addition to the
   * `default_language_code`.
   *
   * @param string[] $supportedLanguageCodes
   */
  public function setSupportedLanguageCodes($supportedLanguageCodes)
  {
    $this->supportedLanguageCodes = $supportedLanguageCodes;
  }
  /**
   * @return string[]
   */
  public function getSupportedLanguageCodes()
  {
    return $this->supportedLanguageCodes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LanguageSettings::class, 'Google_Service_CustomerEngagementSuite_LanguageSettings');
