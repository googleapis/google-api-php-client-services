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

class JobAction extends \Google\Model
{
  protected $androidInstrumentationTestType = AndroidInstrumentationTest::class;
  protected $androidInstrumentationTestDataType = '';
  protected $androidNativeBinaryType = AndroidNativeBinary::class;
  protected $androidNativeBinaryDataType = '';
  protected $iosXcTestType = IosXcTest::class;
  protected $iosXcTestDataType = '';

  /**
   * Android instrumentation test.
   *
   * @param AndroidInstrumentationTest $androidInstrumentationTest
   */
  public function setAndroidInstrumentationTest(AndroidInstrumentationTest $androidInstrumentationTest)
  {
    $this->androidInstrumentationTest = $androidInstrumentationTest;
  }
  /**
   * @return AndroidInstrumentationTest
   */
  public function getAndroidInstrumentationTest()
  {
    return $this->androidInstrumentationTest;
  }
  /**
   * Android native binary execution.
   *
   * @param AndroidNativeBinary $androidNativeBinary
   */
  public function setAndroidNativeBinary(AndroidNativeBinary $androidNativeBinary)
  {
    $this->androidNativeBinary = $androidNativeBinary;
  }
  /**
   * @return AndroidNativeBinary
   */
  public function getAndroidNativeBinary()
  {
    return $this->androidNativeBinary;
  }
  /**
   * iOS XCTest.
   *
   * @param IosXcTest $iosXcTest
   */
  public function setIosXcTest(IosXcTest $iosXcTest)
  {
    $this->iosXcTest = $iosXcTest;
  }
  /**
   * @return IosXcTest
   */
  public function getIosXcTest()
  {
    return $this->iosXcTest;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JobAction::class, 'Google_Service_DeviceRun_JobAction');
