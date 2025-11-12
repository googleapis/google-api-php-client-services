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

namespace Google\Service\RecaptchaEnterprise;

class GoogleCloudRecaptchaenterpriseV1WebKeySettingsChallengeSettings extends \Google\Model
{
  protected $actionSettingsType = GoogleCloudRecaptchaenterpriseV1WebKeySettingsActionSettings::class;
  protected $actionSettingsDataType = 'map';
  protected $defaultSettingsType = GoogleCloudRecaptchaenterpriseV1WebKeySettingsActionSettings::class;
  protected $defaultSettingsDataType = '';

  /**
   * @param GoogleCloudRecaptchaenterpriseV1WebKeySettingsActionSettings[]
   */
  public function setActionSettings($actionSettings)
  {
    $this->actionSettings = $actionSettings;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1WebKeySettingsActionSettings[]
   */
  public function getActionSettings()
  {
    return $this->actionSettings;
  }
  /**
   * @param GoogleCloudRecaptchaenterpriseV1WebKeySettingsActionSettings
   */
  public function setDefaultSettings(GoogleCloudRecaptchaenterpriseV1WebKeySettingsActionSettings $defaultSettings)
  {
    $this->defaultSettings = $defaultSettings;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1WebKeySettingsActionSettings
   */
  public function getDefaultSettings()
  {
    return $this->defaultSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1WebKeySettingsChallengeSettings::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1WebKeySettingsChallengeSettings');
