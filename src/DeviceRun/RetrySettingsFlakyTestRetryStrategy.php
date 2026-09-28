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

class RetrySettingsFlakyTestRetryStrategy extends \Google\Model
{
  /**
   * The test reduction mode is unspecified. Will default to `NO_REDUCTION`.
   */
  public const TEST_REDUCTION_MODE_TEST_REDUCTION_MODE_UNSPECIFIED = 'TEST_REDUCTION_MODE_UNSPECIFIED';
  /**
   * Runs the same set of test cases of the previous attempt.
   */
  public const TEST_REDUCTION_MODE_NO_REDUCTION = 'NO_REDUCTION';
  /**
   * Only runs the failed test cases of the previous attempt. For Android
   * Instrumentation tests, this reduction mode only works when the tests in the
   * test APK use one of the following test runners: -
   * `androidx.test.ext.junit.runners.AndroidJUnit4` -
   * `org.junit.runners.JUnit4` -
   * `com.google.testing.junit.testparameterinjector.TestParameterInjector` -
   * `org.junit.runners.Parameterized` Otherwise, its behavior will fall back to
   * `NO_REDUCTION`.
   */
  public const TEST_REDUCTION_MODE_REDUCE_TO_FAILED_TEST_CASES = 'REDUCE_TO_FAILED_TEST_CASES';
  /**
   * Required. The total attempts for flaky tests, including the initial run.
   * Default value: 1 (no retry). Range: [1, 5].
   *
   * @var int
   */
  public $flakyTestAttempts;
  /**
   * Optional. Whether to retry the test failures in parallel. By default, the
   * test is retried sequentially. If true, when the initial attempt fails,
   * (flaky_test_attempts - 1) attempts will be triggered at the same time to
   * run in parallel.
   *
   * @var bool
   */
  public $parallelRetry;
  /**
   * Optional. The mode of test reduction for retry. If the test runner doesn't
   * support the specified test reduction mode, the request will be rejected
   * with an `INVALID_ARGUMENT` error.
   *
   * @var string
   */
  public $testReductionMode;

  /**
   * Required. The total attempts for flaky tests, including the initial run.
   * Default value: 1 (no retry). Range: [1, 5].
   *
   * @param int $flakyTestAttempts
   */
  public function setFlakyTestAttempts($flakyTestAttempts)
  {
    $this->flakyTestAttempts = $flakyTestAttempts;
  }
  /**
   * @return int
   */
  public function getFlakyTestAttempts()
  {
    return $this->flakyTestAttempts;
  }
  /**
   * Optional. Whether to retry the test failures in parallel. By default, the
   * test is retried sequentially. If true, when the initial attempt fails,
   * (flaky_test_attempts - 1) attempts will be triggered at the same time to
   * run in parallel.
   *
   * @param bool $parallelRetry
   */
  public function setParallelRetry($parallelRetry)
  {
    $this->parallelRetry = $parallelRetry;
  }
  /**
   * @return bool
   */
  public function getParallelRetry()
  {
    return $this->parallelRetry;
  }
  /**
   * Optional. The mode of test reduction for retry. If the test runner doesn't
   * support the specified test reduction mode, the request will be rejected
   * with an `INVALID_ARGUMENT` error.
   *
   * Accepted values: TEST_REDUCTION_MODE_UNSPECIFIED, NO_REDUCTION,
   * REDUCE_TO_FAILED_TEST_CASES
   *
   * @param self::TEST_REDUCTION_MODE_* $testReductionMode
   */
  public function setTestReductionMode($testReductionMode)
  {
    $this->testReductionMode = $testReductionMode;
  }
  /**
   * @return self::TEST_REDUCTION_MODE_*
   */
  public function getTestReductionMode()
  {
    return $this->testReductionMode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RetrySettingsFlakyTestRetryStrategy::class, 'Google_Service_DeviceRun_RetrySettingsFlakyTestRetryStrategy');
