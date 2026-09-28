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

class AndroidInstrumentationTest extends \Google\Collection
{
  protected $collection_key = 'testTargets';
  /**
   * Optional. Additional test options to pass to the test runner. Passed to `am
   * instrument` command as `-e` options, which will be passed to the
   * instrumentation test runner using its `onCreate()` method. Formats
   * supported in test_targets are not allowed to be used here. Limits: -
   * Maximum number of entries: 32. - Maximum key size: 64 bytes (UTF-8). -
   * Maximum value size: 1024 bytes (UTF-8).
   *
   * @var string[]
   */
  public $additionalTestOptions;
  /**
   * Optional. Whether to enable code coverage collection for the test. A
   * coverage file `coverage.ec` will be uploaded to the results folder. For
   * this to work, your classes have to be instrumented offline (build time) by
   * EMMA/JaCoCo.
   *
   * @var bool
   */
  public $enableCodeCoverage;
  /**
   * Optional. The timeout of the instrumentation test. Default value: 5 min.
   * Range: [1 min, 3 hours].
   *
   * @var string
   */
  public $instrumentationTimeout;
  /**
   * Optional. The version of the Android Test Orchestrator to use for the test.
   * The available orchestrator versions can be retrieved from the catalog
   * service. If set to "auto", the default orchestrator is used. If not set, no
   * orchestrator is used.
   *
   * @var string
   */
  public $orchestratorVersion;
  protected $smartShardingType = AndroidInstrumentationTestSmartSharding::class;
  protected $smartShardingDataType = '';
  protected $testInstallableType = AndroidInstallable::class;
  protected $testInstallableDataType = '';
  /**
   * Optional. Full class name of the test runner class. The class must be
   * `androidx.test.runner.AndroidJUnitRunner` or a subclass of it. The default
   * value is determined by examining the application's manifest. If multiple
   * instrumentations are found, the first one in the manifest will be used.
   *
   * @var string
   */
  public $testRunnerClass;
  /**
   * Optional. A list of test targets or target filters to run. Each target must
   * be fully qualified with the package name or class name, in one of these
   * formats: - `package package_name` - `notPackage com.package.to.skip` -
   * `class package_name.class_name` - `class
   * package_name.class_name#method_name` - `notClass com.foo.ClassToSkip` -
   * `notClass com.foo.ClassName#testMethodToSkip` - `annotation
   * com.foo.AnnotationToRun` - `notAnnotation com.foo.AnnotationToSkip` - `size
   * [small|medium|large]` Formats like `testfile` or `notTestfile` won't be
   * supported. If empty, all targets in the module will be run. Limits: -
   * Maximum number of entries: 1024.
   *
   * @var string[]
   */
  public $testTargets;
  protected $uniformShardingType = AndroidInstrumentationTestUniformSharding::class;
  protected $uniformShardingDataType = '';

  /**
   * Optional. Additional test options to pass to the test runner. Passed to `am
   * instrument` command as `-e` options, which will be passed to the
   * instrumentation test runner using its `onCreate()` method. Formats
   * supported in test_targets are not allowed to be used here. Limits: -
   * Maximum number of entries: 32. - Maximum key size: 64 bytes (UTF-8). -
   * Maximum value size: 1024 bytes (UTF-8).
   *
   * @param string[] $additionalTestOptions
   */
  public function setAdditionalTestOptions($additionalTestOptions)
  {
    $this->additionalTestOptions = $additionalTestOptions;
  }
  /**
   * @return string[]
   */
  public function getAdditionalTestOptions()
  {
    return $this->additionalTestOptions;
  }
  /**
   * Optional. Whether to enable code coverage collection for the test. A
   * coverage file `coverage.ec` will be uploaded to the results folder. For
   * this to work, your classes have to be instrumented offline (build time) by
   * EMMA/JaCoCo.
   *
   * @param bool $enableCodeCoverage
   */
  public function setEnableCodeCoverage($enableCodeCoverage)
  {
    $this->enableCodeCoverage = $enableCodeCoverage;
  }
  /**
   * @return bool
   */
  public function getEnableCodeCoverage()
  {
    return $this->enableCodeCoverage;
  }
  /**
   * Optional. The timeout of the instrumentation test. Default value: 5 min.
   * Range: [1 min, 3 hours].
   *
   * @param string $instrumentationTimeout
   */
  public function setInstrumentationTimeout($instrumentationTimeout)
  {
    $this->instrumentationTimeout = $instrumentationTimeout;
  }
  /**
   * @return string
   */
  public function getInstrumentationTimeout()
  {
    return $this->instrumentationTimeout;
  }
  /**
   * Optional. The version of the Android Test Orchestrator to use for the test.
   * The available orchestrator versions can be retrieved from the catalog
   * service. If set to "auto", the default orchestrator is used. If not set, no
   * orchestrator is used.
   *
   * @param string $orchestratorVersion
   */
  public function setOrchestratorVersion($orchestratorVersion)
  {
    $this->orchestratorVersion = $orchestratorVersion;
  }
  /**
   * @return string
   */
  public function getOrchestratorVersion()
  {
    return $this->orchestratorVersion;
  }
  /**
   * Optional. Smart sharding strategy to split the job into multiple shards
   * based on the test methods and their execution time.
   *
   * @param AndroidInstrumentationTestSmartSharding $smartSharding
   */
  public function setSmartSharding(AndroidInstrumentationTestSmartSharding $smartSharding)
  {
    $this->smartSharding = $smartSharding;
  }
  /**
   * @return AndroidInstrumentationTestSmartSharding
   */
  public function getSmartSharding()
  {
    return $this->smartSharding;
  }
  /**
   * Required. The test package to install and run the test.
   *
   * @param AndroidInstallable $testInstallable
   */
  public function setTestInstallable(AndroidInstallable $testInstallable)
  {
    $this->testInstallable = $testInstallable;
  }
  /**
   * @return AndroidInstallable
   */
  public function getTestInstallable()
  {
    return $this->testInstallable;
  }
  /**
   * Optional. Full class name of the test runner class. The class must be
   * `androidx.test.runner.AndroidJUnitRunner` or a subclass of it. The default
   * value is determined by examining the application's manifest. If multiple
   * instrumentations are found, the first one in the manifest will be used.
   *
   * @param string $testRunnerClass
   */
  public function setTestRunnerClass($testRunnerClass)
  {
    $this->testRunnerClass = $testRunnerClass;
  }
  /**
   * @return string
   */
  public function getTestRunnerClass()
  {
    return $this->testRunnerClass;
  }
  /**
   * Optional. A list of test targets or target filters to run. Each target must
   * be fully qualified with the package name or class name, in one of these
   * formats: - `package package_name` - `notPackage com.package.to.skip` -
   * `class package_name.class_name` - `class
   * package_name.class_name#method_name` - `notClass com.foo.ClassToSkip` -
   * `notClass com.foo.ClassName#testMethodToSkip` - `annotation
   * com.foo.AnnotationToRun` - `notAnnotation com.foo.AnnotationToSkip` - `size
   * [small|medium|large]` Formats like `testfile` or `notTestfile` won't be
   * supported. If empty, all targets in the module will be run. Limits: -
   * Maximum number of entries: 1024.
   *
   * @param string[] $testTargets
   */
  public function setTestTargets($testTargets)
  {
    $this->testTargets = $testTargets;
  }
  /**
   * @return string[]
   */
  public function getTestTargets()
  {
    return $this->testTargets;
  }
  /**
   * Optional. Uniform sharding strategy to split the job into multiple shards
   * with equal number of test methods.
   *
   * @param AndroidInstrumentationTestUniformSharding $uniformSharding
   */
  public function setUniformSharding(AndroidInstrumentationTestUniformSharding $uniformSharding)
  {
    $this->uniformSharding = $uniformSharding;
  }
  /**
   * @return AndroidInstrumentationTestUniformSharding
   */
  public function getUniformSharding()
  {
    return $this->uniformSharding;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidInstrumentationTest::class, 'Google_Service_DeviceRun_AndroidInstrumentationTest');
