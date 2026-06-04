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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesCallReportingSetting extends \Google\Model
{
  /**
   * Customer-level call conversion action to attribute a call conversion to. If
   * not set a default conversion action is used. Only in effect when
   * call_conversion_reporting_enabled is set to true.
   *
   * @var string
   */
  public $callConversionAction;
  /**
   * Whether to enable call conversion reporting.
   *
   * @var bool
   */
  public $callConversionReportingEnabled;
  /**
   * Enable reporting of phone call events by redirecting them through Google
   * System.
   *
   * @var bool
   */
  public $callReportingEnabled;

  /**
   * Customer-level call conversion action to attribute a call conversion to. If
   * not set a default conversion action is used. Only in effect when
   * call_conversion_reporting_enabled is set to true.
   *
   * @param string $callConversionAction
   */
  public function setCallConversionAction($callConversionAction)
  {
    $this->callConversionAction = $callConversionAction;
  }
  /**
   * @return string
   */
  public function getCallConversionAction()
  {
    return $this->callConversionAction;
  }
  /**
   * Whether to enable call conversion reporting.
   *
   * @param bool $callConversionReportingEnabled
   */
  public function setCallConversionReportingEnabled($callConversionReportingEnabled)
  {
    $this->callConversionReportingEnabled = $callConversionReportingEnabled;
  }
  /**
   * @return bool
   */
  public function getCallConversionReportingEnabled()
  {
    return $this->callConversionReportingEnabled;
  }
  /**
   * Enable reporting of phone call events by redirecting them through Google
   * System.
   *
   * @param bool $callReportingEnabled
   */
  public function setCallReportingEnabled($callReportingEnabled)
  {
    $this->callReportingEnabled = $callReportingEnabled;
  }
  /**
   * @return bool
   */
  public function getCallReportingEnabled()
  {
    return $this->callReportingEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCallReportingSetting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCallReportingSetting');
