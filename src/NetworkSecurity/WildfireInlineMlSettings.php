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

namespace Google\Service\NetworkSecurity;

class WildfireInlineMlSettings extends \Google\Collection
{
  protected $collection_key = 'inlineMlConfigs';
  protected $fileExceptionsType = WildfireInlineMlFileException::class;
  protected $fileExceptionsDataType = 'array';
  protected $inlineMlConfigsType = WildfireInlineMlSettingsInlineMlConfig::class;
  protected $inlineMlConfigsDataType = 'array';

  /**
   * Optional. List of files to exclude from Advanced malware sandbox inline ML
   * analysis.
   *
   * @param WildfireInlineMlFileException[] $fileExceptions
   */
  public function setFileExceptions($fileExceptions)
  {
    $this->fileExceptions = $fileExceptions;
  }
  /**
   * @return WildfireInlineMlFileException[]
   */
  public function getFileExceptions()
  {
    return $this->fileExceptions;
  }
  /**
   * Optional. List of inline ML configurations to enable in Advanced malware
   * sandbox inline ML analysis.
   *
   * @param WildfireInlineMlSettingsInlineMlConfig[] $inlineMlConfigs
   */
  public function setInlineMlConfigs($inlineMlConfigs)
  {
    $this->inlineMlConfigs = $inlineMlConfigs;
  }
  /**
   * @return WildfireInlineMlSettingsInlineMlConfig[]
   */
  public function getInlineMlConfigs()
  {
    return $this->inlineMlConfigs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WildfireInlineMlSettings::class, 'Google_Service_NetworkSecurity_WildfireInlineMlSettings');
