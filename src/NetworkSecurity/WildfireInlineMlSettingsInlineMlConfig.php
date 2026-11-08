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

class WildfireInlineMlSettingsInlineMlConfig extends \Google\Model
{
  /**
   * Inline ML threat action not specified.
   */
  public const ACTION_INLINE_ML_ACTION_UNSPECIFIED = 'INLINE_ML_ACTION_UNSPECIFIED';
  /**
   * Disables Advanced malware sandbox inline ML for the associated file type.
   */
  public const ACTION_DISABLE = 'DISABLE';
  /**
   * Enables Advanced malware sandbox inline ML for the associated file type.
   * Overrides any protocol-level settings with an action stricter than `ALERT`
   * to `ALERT` so that detected malicious files generate a threat log in the
   * consumer project without being blocked.
   */
  public const ACTION_ALERT = 'ALERT';
  /**
   * Enables Advanced malware sandbox inline ML for the associated file type.
   * Detected malicious files are blocked.
   */
  public const ACTION_ENABLE = 'ENABLE';
  /**
   * Inline ML configuration not specified.
   */
  public const FILE_TYPE_INLINE_ML_CONFIG_UNSPECIFIED = 'INLINE_ML_CONFIG_UNSPECIFIED';
  /**
   * Enables the machine learning engine to dynamically detect malicious PE
   * files.
   */
  public const FILE_TYPE_WINDOWS_EXECUTABLE = 'WINDOWS_EXECUTABLE';
  /**
   * Enables the machine learning engine to dynamically identify malicious
   * PowerShell scripts with a known length.
   */
  public const FILE_TYPE_POWERSHELL_SCRIPT1 = 'POWERSHELL_SCRIPT1';
  /**
   * Enables the machine learning engine to dynamically identify malicious
   * PowerShell scripts without a known length.
   */
  public const FILE_TYPE_POWERSHELL_SCRIPT2 = 'POWERSHELL_SCRIPT2';
  /**
   * Enables the machine learning engine to dynamically detect malicious ELF
   * files.
   */
  public const FILE_TYPE_ELF = 'ELF';
  /**
   * Enables the machine learning engine to dynamically detect malicious
   * Microsoft Office (97-2003) files.
   */
  public const FILE_TYPE_MS_OFFICE = 'MS_OFFICE';
  /**
   * Enables the machine learning engine to dynamically detect malicious shell
   * files.
   */
  public const FILE_TYPE_SHELL = 'SHELL';
  /**
   * Enables the machine learning engine to dynamically detect malicious Office
   * Open XML (OOXML) files.
   */
  public const FILE_TYPE_OOXML = 'OOXML';
  /**
   * Enables the machine learning engine to dynamically detect malicious Mach-O
   * files.
   */
  public const FILE_TYPE_MACHO = 'MACHO';
  /**
   * Required. Action to take when a threat is detected using inline ML.
   *
   * @var string
   */
  public $action;
  /**
   * Required. File type to configure inline ML for.
   *
   * @var string
   */
  public $fileType;

  /**
   * Required. Action to take when a threat is detected using inline ML.
   *
   * Accepted values: INLINE_ML_ACTION_UNSPECIFIED, DISABLE, ALERT, ENABLE
   *
   * @param self::ACTION_* $action
   */
  public function setAction($action)
  {
    $this->action = $action;
  }
  /**
   * @return self::ACTION_*
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Required. File type to configure inline ML for.
   *
   * Accepted values: INLINE_ML_CONFIG_UNSPECIFIED, WINDOWS_EXECUTABLE,
   * POWERSHELL_SCRIPT1, POWERSHELL_SCRIPT2, ELF, MS_OFFICE, SHELL, OOXML, MACHO
   *
   * @param self::FILE_TYPE_* $fileType
   */
  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }
  /**
   * @return self::FILE_TYPE_*
   */
  public function getFileType()
  {
    return $this->fileType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WildfireInlineMlSettingsInlineMlConfig::class, 'Google_Service_NetworkSecurity_WildfireInlineMlSettingsInlineMlConfig');
