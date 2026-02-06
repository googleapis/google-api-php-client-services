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

class GuardrailLlmPromptSecurityDefaultSecuritySettings extends \Google\Model
{
  /**
   * Output only. The default prompt template used by the system. This field is
   * for display purposes to show the user what prompt the system uses by
   * default. It is OUTPUT_ONLY.
   *
   * @var string
   */
  public $defaultPromptTemplate;

  /**
   * Output only. The default prompt template used by the system. This field is
   * for display purposes to show the user what prompt the system uses by
   * default. It is OUTPUT_ONLY.
   *
   * @param string $defaultPromptTemplate
   */
  public function setDefaultPromptTemplate($defaultPromptTemplate)
  {
    $this->defaultPromptTemplate = $defaultPromptTemplate;
  }
  /**
   * @return string
   */
  public function getDefaultPromptTemplate()
  {
    return $this->defaultPromptTemplate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GuardrailLlmPromptSecurityDefaultSecuritySettings::class, 'Google_Service_CustomerEngagementSuite_GuardrailLlmPromptSecurityDefaultSecuritySettings');
