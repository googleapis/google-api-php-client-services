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

class GuardrailModelSafety extends \Google\Collection
{
  protected $collection_key = 'safetySettings';
  protected $safetySettingsType = GuardrailModelSafetySafetySetting::class;
  protected $safetySettingsDataType = 'array';

  /**
   * Required. List of safety settings.
   *
   * @param GuardrailModelSafetySafetySetting[] $safetySettings
   */
  public function setSafetySettings($safetySettings)
  {
    $this->safetySettings = $safetySettings;
  }
  /**
   * @return GuardrailModelSafetySafetySetting[]
   */
  public function getSafetySettings()
  {
    return $this->safetySettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GuardrailModelSafety::class, 'Google_Service_CustomerEngagementSuite_GuardrailModelSafety');
