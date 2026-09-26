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

namespace Google\Service\DeviceRun;

class AndroidSwitchLocaleDeviceAction extends \Google\Model
{
  /**
   * Required. The locale (language and region) to switch the device to. The
   * format is `language-region`, e.g. "en-US", "zh-CN", etc. The typical
   * language value is a two or three-letter language code as defined in ISO639.
   * The typical region value is a two-letter ISO 3166 code or a three-digit UN
   * M.49 area code.
   *
   * @var string
   */
  public $localeCode;

  /**
   * Required. The locale (language and region) to switch the device to. The
   * format is `language-region`, e.g. "en-US", "zh-CN", etc. The typical
   * language value is a two or three-letter language code as defined in ISO639.
   * The typical region value is a two-letter ISO 3166 code or a three-digit UN
   * M.49 area code.
   *
   * @param string $localeCode
   */
  public function setLocaleCode($localeCode)
  {
    $this->localeCode = $localeCode;
  }
  /**
   * @return string
   */
  public function getLocaleCode()
  {
    return $this->localeCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidSwitchLocaleDeviceAction::class, 'Google_Service_DeviceRun_AndroidSwitchLocaleDeviceAction');
