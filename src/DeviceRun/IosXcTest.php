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

class IosXcTest extends \Google\Model
{
  protected $testsZipType = InputFile::class;
  protected $testsZipDataType = '';
  /**
   * Optional. The timeout of the test. Default value: 5 min. Range: [1 min, 3
   * hours].
   *
   * @var string
   */
  public $xcTestTimeout;
  /**
   * Optional. The Xcode version that should be used for the test. If not set, a
   * system-default Xcode version is used. The available Xcode versions can be
   * retrieved from the catalog service.
   *
   * @var string
   */
  public $xcodeVersion;
  protected $xctestrunType = InputFile::class;
  protected $xctestrunDataType = '';

  /**
   * Required. The .zip containing the .xctestrun file and the contents of the
   * DerivedData/Build/Products directory.
   *
   * @param InputFile $testsZip
   */
  public function setTestsZip(InputFile $testsZip)
  {
    $this->testsZip = $testsZip;
  }
  /**
   * @return InputFile
   */
  public function getTestsZip()
  {
    return $this->testsZip;
  }
  /**
   * Optional. The timeout of the test. Default value: 5 min. Range: [1 min, 3
   * hours].
   *
   * @param string $xcTestTimeout
   */
  public function setXcTestTimeout($xcTestTimeout)
  {
    $this->xcTestTimeout = $xcTestTimeout;
  }
  /**
   * @return string
   */
  public function getXcTestTimeout()
  {
    return $this->xcTestTimeout;
  }
  /**
   * Optional. The Xcode version that should be used for the test. If not set, a
   * system-default Xcode version is used. The available Xcode versions can be
   * retrieved from the catalog service.
   *
   * @param string $xcodeVersion
   */
  public function setXcodeVersion($xcodeVersion)
  {
    $this->xcodeVersion = $xcodeVersion;
  }
  /**
   * @return string
   */
  public function getXcodeVersion()
  {
    return $this->xcodeVersion;
  }
  /**
   * Optional. An .xctestrun file that will override the .xctestrun file in the
   * tests zip.
   *
   * @param InputFile $xctestrun
   */
  public function setXctestrun(InputFile $xctestrun)
  {
    $this->xctestrun = $xctestrun;
  }
  /**
   * @return InputFile
   */
  public function getXctestrun()
  {
    return $this->xctestrun;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IosXcTest::class, 'Google_Service_DeviceRun_IosXcTest');
