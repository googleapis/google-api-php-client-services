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

class AndroidInstallPackagesDeviceAction extends \Google\Collection
{
  protected $collection_key = 'preTargetAppInstallables';
  protected $installablesType = AndroidInstallable::class;
  protected $installablesDataType = 'array';
  protected $postTargetAppInstallablesType = AndroidInstallable::class;
  protected $postTargetAppInstallablesDataType = 'array';
  protected $preTargetAppInstallablesType = AndroidInstallable::class;
  protected $preTargetAppInstallablesDataType = 'array';
  protected $targetAppType = AndroidInstallable::class;
  protected $targetAppDataType = '';

  /**
   * Optional. Deprecated: use `pre_target_app_installables`, `target_app` and
   * `post_target_app_installables` instead. The Android packages to install on
   * the device. The installation will be performed in the order specified,
   * before the installables of all other fields.
   *
   * @deprecated
   * @param AndroidInstallable[] $installables
   */
  public function setInstallables($installables)
  {
    $this->installables = $installables;
  }
  /**
   * @deprecated
   * @return AndroidInstallable[]
   */
  public function getInstallables()
  {
    return $this->installables;
  }
  /**
   * Optional. The Android packages to install on the device after `target_app`
   * (if specified) is installed. The installation will be performed in the
   * order specified.
   *
   * @param AndroidInstallable[] $postTargetAppInstallables
   */
  public function setPostTargetAppInstallables($postTargetAppInstallables)
  {
    $this->postTargetAppInstallables = $postTargetAppInstallables;
  }
  /**
   * @return AndroidInstallable[]
   */
  public function getPostTargetAppInstallables()
  {
    return $this->postTargetAppInstallables;
  }
  /**
   * Optional. The Android packages to install on the device before `target_app`
   * (if specified) is installed. The installation will be performed in the
   * order specified.
   *
   * @param AndroidInstallable[] $preTargetAppInstallables
   */
  public function setPreTargetAppInstallables($preTargetAppInstallables)
  {
    $this->preTargetAppInstallables = $preTargetAppInstallables;
  }
  /**
   * @return AndroidInstallable[]
   */
  public function getPreTargetAppInstallables()
  {
    return $this->preTargetAppInstallables;
  }
  /**
   * Optional. The primary Android package to install, serving as the target
   * package for subsequent actions and as the installation ordering anchor.
   * Whether this package is treated as the application under test depends on
   * the job action: - Actions that require an explicit target package (such as
   * performance metrics collection, or accessibility scans) use this package to
   * identify the application to inspect or drive. - Actions that discover or
   * manage targets independently (such as Android instrumentation tests, where
   * target packages are defined in the test runner manifest) treat this field
   * primarily as an installation order anchor between pre- and post-
   * installables. Optional. If omitted, all packages in
   * `pre_target_app_installables` and `post_target_app_installables` are
   * installed without a designated target package.
   *
   * @param AndroidInstallable $targetApp
   */
  public function setTargetApp(AndroidInstallable $targetApp)
  {
    $this->targetApp = $targetApp;
  }
  /**
   * @return AndroidInstallable
   */
  public function getTargetApp()
  {
    return $this->targetApp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidInstallPackagesDeviceAction::class, 'Google_Service_DeviceRun_AndroidInstallPackagesDeviceAction');
