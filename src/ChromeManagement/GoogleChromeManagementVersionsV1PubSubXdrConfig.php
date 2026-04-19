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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1PubSubXdrConfig extends \Google\Model
{
  /**
   * Required. The full path to the topic to send the event to.
   *
   * @var string
   */
  public $topicFullPath;
  protected $xdrSettingsType = GoogleChromeManagementVersionsV1XdrSettings::class;
  protected $xdrSettingsDataType = '';

  /**
   * Required. The full path to the topic to send the event to.
   *
   * @param string $topicFullPath
   */
  public function setTopicFullPath($topicFullPath)
  {
    $this->topicFullPath = $topicFullPath;
  }
  /**
   * @return string
   */
  public function getTopicFullPath()
  {
    return $this->topicFullPath;
  }
  /**
   * Required. The XDR settings for the Pub/Sub XDR config.
   *
   * @param GoogleChromeManagementVersionsV1XdrSettings $xdrSettings
   */
  public function setXdrSettings(GoogleChromeManagementVersionsV1XdrSettings $xdrSettings)
  {
    $this->xdrSettings = $xdrSettings;
  }
  /**
   * @return GoogleChromeManagementVersionsV1XdrSettings
   */
  public function getXdrSettings()
  {
    return $this->xdrSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1PubSubXdrConfig::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1PubSubXdrConfig');
