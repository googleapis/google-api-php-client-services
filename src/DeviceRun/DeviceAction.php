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

class DeviceAction extends \Google\Model
{
  protected $androidBugreportType = AndroidBugreportDeviceAction::class;
  protected $androidBugreportDataType = '';
  protected $androidDumpsysType = AndroidDumpsysDeviceAction::class;
  protected $androidDumpsysDataType = '';
  protected $androidInstallPackagesType = AndroidInstallPackagesDeviceAction::class;
  protected $androidInstallPackagesDataType = '';
  protected $androidLogcatType = AndroidLogcatDeviceAction::class;
  protected $androidLogcatDataType = '';
  protected $androidMockLocationType = AndroidMockLocationDeviceAction::class;
  protected $androidMockLocationDataType = '';
  protected $androidOrientationType = AndroidOrientationDeviceAction::class;
  protected $androidOrientationDataType = '';
  protected $androidPullFilesType = AndroidPullFilesDeviceAction::class;
  protected $androidPullFilesDataType = '';
  protected $androidPushFilesType = AndroidPushFilesDeviceAction::class;
  protected $androidPushFilesDataType = '';
  protected $androidRecordVideoType = AndroidRecordVideoDeviceAction::class;
  protected $androidRecordVideoDataType = '';
  protected $androidSwitchLocaleType = AndroidSwitchLocaleDeviceAction::class;
  protected $androidSwitchLocaleDataType = '';
  protected $iosAppPrivacyReportType = IosAppPrivacyReportDeviceAction::class;
  protected $iosAppPrivacyReportDataType = '';
  protected $iosInstallPackagesType = IosInstallPackagesDeviceAction::class;
  protected $iosInstallPackagesDataType = '';
  protected $iosPullFilesType = IosPullFilesDeviceAction::class;
  protected $iosPullFilesDataType = '';
  protected $iosPushFilesType = IosPushFilesDeviceAction::class;
  protected $iosPushFilesDataType = '';
  protected $iosRecordVideoType = IosRecordVideoDeviceAction::class;
  protected $iosRecordVideoDataType = '';
  protected $iosSwitchLocaleType = IosSwitchLocaleDeviceAction::class;
  protected $iosSwitchLocaleDataType = '';

  /**
   * Captures a bugreport from the device unless the test result is pass.
   *
   * @param AndroidBugreportDeviceAction $androidBugreport
   */
  public function setAndroidBugreport(AndroidBugreportDeviceAction $androidBugreport)
  {
    $this->androidBugreport = $androidBugreport;
  }
  /**
   * @return AndroidBugreportDeviceAction
   */
  public function getAndroidBugreport()
  {
    return $this->androidBugreport;
  }
  /**
   * Captures a dumpsys from the device.
   *
   * @param AndroidDumpsysDeviceAction $androidDumpsys
   */
  public function setAndroidDumpsys(AndroidDumpsysDeviceAction $androidDumpsys)
  {
    $this->androidDumpsys = $androidDumpsys;
  }
  /**
   * @return AndroidDumpsysDeviceAction
   */
  public function getAndroidDumpsys()
  {
    return $this->androidDumpsys;
  }
  /**
   * Installs Android packages on the device.
   *
   * @param AndroidInstallPackagesDeviceAction $androidInstallPackages
   */
  public function setAndroidInstallPackages(AndroidInstallPackagesDeviceAction $androidInstallPackages)
  {
    $this->androidInstallPackages = $androidInstallPackages;
  }
  /**
   * @return AndroidInstallPackagesDeviceAction
   */
  public function getAndroidInstallPackages()
  {
    return $this->androidInstallPackages;
  }
  /**
   * Collects logcat output from the device.
   *
   * @param AndroidLogcatDeviceAction $androidLogcat
   */
  public function setAndroidLogcat(AndroidLogcatDeviceAction $androidLogcat)
  {
    $this->androidLogcat = $androidLogcat;
  }
  /**
   * @return AndroidLogcatDeviceAction
   */
  public function getAndroidLogcat()
  {
    return $this->androidLogcat;
  }
  /**
   * Mocks the location of the device.
   *
   * @param AndroidMockLocationDeviceAction $androidMockLocation
   */
  public function setAndroidMockLocation(AndroidMockLocationDeviceAction $androidMockLocation)
  {
    $this->androidMockLocation = $androidMockLocation;
  }
  /**
   * @return AndroidMockLocationDeviceAction
   */
  public function getAndroidMockLocation()
  {
    return $this->androidMockLocation;
  }
  /**
   * Sets the orientation of the device.
   *
   * @param AndroidOrientationDeviceAction $androidOrientation
   */
  public function setAndroidOrientation(AndroidOrientationDeviceAction $androidOrientation)
  {
    $this->androidOrientation = $androidOrientation;
  }
  /**
   * @return AndroidOrientationDeviceAction
   */
  public function getAndroidOrientation()
  {
    return $this->androidOrientation;
  }
  /**
   * Pulls directories and files from the device at the end of the run.
   *
   * @param AndroidPullFilesDeviceAction $androidPullFiles
   */
  public function setAndroidPullFiles(AndroidPullFilesDeviceAction $androidPullFiles)
  {
    $this->androidPullFiles = $androidPullFiles;
  }
  /**
   * @return AndroidPullFilesDeviceAction
   */
  public function getAndroidPullFiles()
  {
    return $this->androidPullFiles;
  }
  /**
   * Pushes files to the device at the beginning of the run.
   *
   * @param AndroidPushFilesDeviceAction $androidPushFiles
   */
  public function setAndroidPushFiles(AndroidPushFilesDeviceAction $androidPushFiles)
  {
    $this->androidPushFiles = $androidPushFiles;
  }
  /**
   * @return AndroidPushFilesDeviceAction
   */
  public function getAndroidPushFiles()
  {
    return $this->androidPushFiles;
  }
  /**
   * Records a video of the device screen during the run.
   *
   * @param AndroidRecordVideoDeviceAction $androidRecordVideo
   */
  public function setAndroidRecordVideo(AndroidRecordVideoDeviceAction $androidRecordVideo)
  {
    $this->androidRecordVideo = $androidRecordVideo;
  }
  /**
   * @return AndroidRecordVideoDeviceAction
   */
  public function getAndroidRecordVideo()
  {
    return $this->androidRecordVideo;
  }
  /**
   * Switches the locale (language and region) of the device.
   *
   * @param AndroidSwitchLocaleDeviceAction $androidSwitchLocale
   */
  public function setAndroidSwitchLocale(AndroidSwitchLocaleDeviceAction $androidSwitchLocale)
  {
    $this->androidSwitchLocale = $androidSwitchLocale;
  }
  /**
   * @return AndroidSwitchLocaleDeviceAction
   */
  public function getAndroidSwitchLocale()
  {
    return $this->androidSwitchLocale;
  }
  /**
   * Collects the exported iOS App Privacy Report during the run.
   *
   * @param IosAppPrivacyReportDeviceAction $iosAppPrivacyReport
   */
  public function setIosAppPrivacyReport(IosAppPrivacyReportDeviceAction $iosAppPrivacyReport)
  {
    $this->iosAppPrivacyReport = $iosAppPrivacyReport;
  }
  /**
   * @return IosAppPrivacyReportDeviceAction
   */
  public function getIosAppPrivacyReport()
  {
    return $this->iosAppPrivacyReport;
  }
  /**
   * Installs additional iOS packages on the device.
   *
   * @param IosInstallPackagesDeviceAction $iosInstallPackages
   */
  public function setIosInstallPackages(IosInstallPackagesDeviceAction $iosInstallPackages)
  {
    $this->iosInstallPackages = $iosInstallPackages;
  }
  /**
   * @return IosInstallPackagesDeviceAction
   */
  public function getIosInstallPackages()
  {
    return $this->iosInstallPackages;
  }
  /**
   * Pulls directories and files from the iOS device sandbox at the end of the
   * run.
   *
   * @param IosPullFilesDeviceAction $iosPullFiles
   */
  public function setIosPullFiles(IosPullFilesDeviceAction $iosPullFiles)
  {
    $this->iosPullFiles = $iosPullFiles;
  }
  /**
   * @return IosPullFilesDeviceAction
   */
  public function getIosPullFiles()
  {
    return $this->iosPullFiles;
  }
  /**
   * Pushes files to the iOS device sandbox at the beginning of the run.
   *
   * @param IosPushFilesDeviceAction $iosPushFiles
   */
  public function setIosPushFiles(IosPushFilesDeviceAction $iosPushFiles)
  {
    $this->iosPushFiles = $iosPushFiles;
  }
  /**
   * @return IosPushFilesDeviceAction
   */
  public function getIosPushFiles()
  {
    return $this->iosPushFiles;
  }
  /**
   * Records a video of the iOS device screen during the run.
   *
   * @param IosRecordVideoDeviceAction $iosRecordVideo
   */
  public function setIosRecordVideo(IosRecordVideoDeviceAction $iosRecordVideo)
  {
    $this->iosRecordVideo = $iosRecordVideo;
  }
  /**
   * @return IosRecordVideoDeviceAction
   */
  public function getIosRecordVideo()
  {
    return $this->iosRecordVideo;
  }
  /**
   * Switches the locale (language and region) of the iOS application.
   *
   * @param IosSwitchLocaleDeviceAction $iosSwitchLocale
   */
  public function setIosSwitchLocale(IosSwitchLocaleDeviceAction $iosSwitchLocale)
  {
    $this->iosSwitchLocale = $iosSwitchLocale;
  }
  /**
   * @return IosSwitchLocaleDeviceAction
   */
  public function getIosSwitchLocale()
  {
    return $this->iosSwitchLocale;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeviceAction::class, 'Google_Service_DeviceRun_DeviceAction');
