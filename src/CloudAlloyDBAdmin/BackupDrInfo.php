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

namespace Google\Service\CloudAlloyDBAdmin;

class BackupDrInfo extends \Google\Collection
{
  protected $collection_key = 'previousWindows';
  protected $currentWindowType = BackupDrEnabledWindow::class;
  protected $currentWindowDataType = '';
  protected $previousWindowsType = BackupDrEnabledWindow::class;
  protected $previousWindowsDataType = 'array';

  /**
   * @param BackupDrEnabledWindow
   */
  public function setCurrentWindow(BackupDrEnabledWindow $currentWindow)
  {
    $this->currentWindow = $currentWindow;
  }
  /**
   * @return BackupDrEnabledWindow
   */
  public function getCurrentWindow()
  {
    return $this->currentWindow;
  }
  /**
   * @param BackupDrEnabledWindow[]
   */
  public function setPreviousWindows($previousWindows)
  {
    $this->previousWindows = $previousWindows;
  }
  /**
   * @return BackupDrEnabledWindow[]
   */
  public function getPreviousWindows()
  {
    return $this->previousWindows;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BackupDrInfo::class, 'Google_Service_CloudAlloyDBAdmin_BackupDrInfo');
