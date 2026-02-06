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

namespace Google\Service\Apigee;

class ApiservingMcpMcpToolDataHandlingProfile extends \Google\Model
{
  /**
   * The default value. This value is unused.
   */
  public const INPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_UNSPECIFIED = 'DATA_ACCESS_LEVEL_UNSPECIFIED';
  /**
   * Public data.
   */
  public const INPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_PUBLIC = 'DATA_ACCESS_LEVEL_PUBLIC';
  /**
   * Confidential data.
   */
  public const INPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_CONFIDENTIAL = 'DATA_ACCESS_LEVEL_CONFIDENTIAL';
  /**
   * Need-to-know data.
   */
  public const INPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_NEED_TO_KNOW = 'DATA_ACCESS_LEVEL_NEED_TO_KNOW';
  /**
   * Personally Identifiable Information (PII) data.
   */
  public const INPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_PII = 'DATA_ACCESS_LEVEL_PII';
  /**
   * User data.
   */
  public const INPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_USER = 'DATA_ACCESS_LEVEL_USER';
  /**
   * The tool does not access any data.
   */
  public const INPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_NO_DATA_ACCESS = 'DATA_ACCESS_LEVEL_NO_DATA_ACCESS';
  /**
   * The default value. This value is unused.
   */
  public const OUTPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_UNSPECIFIED = 'DATA_ACCESS_LEVEL_UNSPECIFIED';
  /**
   * Public data.
   */
  public const OUTPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_PUBLIC = 'DATA_ACCESS_LEVEL_PUBLIC';
  /**
   * Confidential data.
   */
  public const OUTPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_CONFIDENTIAL = 'DATA_ACCESS_LEVEL_CONFIDENTIAL';
  /**
   * Need-to-know data.
   */
  public const OUTPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_NEED_TO_KNOW = 'DATA_ACCESS_LEVEL_NEED_TO_KNOW';
  /**
   * Personally Identifiable Information (PII) data.
   */
  public const OUTPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_PII = 'DATA_ACCESS_LEVEL_PII';
  /**
   * User data.
   */
  public const OUTPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_USER = 'DATA_ACCESS_LEVEL_USER';
  /**
   * The tool does not access any data.
   */
  public const OUTPUT_DATA_ACCESS_LEVEL_DATA_ACCESS_LEVEL_NO_DATA_ACCESS = 'DATA_ACCESS_LEVEL_NO_DATA_ACCESS';
  /**
   * // The data access level of the tool's inputs.
   *
   * @var string
   */
  public $inputDataAccessLevel;
  /**
   * The data access level of the tool's outputs.
   *
   * @var string
   */
  public $outputDataAccessLevel;

  /**
   * // The data access level of the tool's inputs.
   *
   * Accepted values: DATA_ACCESS_LEVEL_UNSPECIFIED, DATA_ACCESS_LEVEL_PUBLIC,
   * DATA_ACCESS_LEVEL_CONFIDENTIAL, DATA_ACCESS_LEVEL_NEED_TO_KNOW,
   * DATA_ACCESS_LEVEL_PII, DATA_ACCESS_LEVEL_USER,
   * DATA_ACCESS_LEVEL_NO_DATA_ACCESS
   *
   * @param self::INPUT_DATA_ACCESS_LEVEL_* $inputDataAccessLevel
   */
  public function setInputDataAccessLevel($inputDataAccessLevel)
  {
    $this->inputDataAccessLevel = $inputDataAccessLevel;
  }
  /**
   * @return self::INPUT_DATA_ACCESS_LEVEL_*
   */
  public function getInputDataAccessLevel()
  {
    return $this->inputDataAccessLevel;
  }
  /**
   * The data access level of the tool's outputs.
   *
   * Accepted values: DATA_ACCESS_LEVEL_UNSPECIFIED, DATA_ACCESS_LEVEL_PUBLIC,
   * DATA_ACCESS_LEVEL_CONFIDENTIAL, DATA_ACCESS_LEVEL_NEED_TO_KNOW,
   * DATA_ACCESS_LEVEL_PII, DATA_ACCESS_LEVEL_USER,
   * DATA_ACCESS_LEVEL_NO_DATA_ACCESS
   *
   * @param self::OUTPUT_DATA_ACCESS_LEVEL_* $outputDataAccessLevel
   */
  public function setOutputDataAccessLevel($outputDataAccessLevel)
  {
    $this->outputDataAccessLevel = $outputDataAccessLevel;
  }
  /**
   * @return self::OUTPUT_DATA_ACCESS_LEVEL_*
   */
  public function getOutputDataAccessLevel()
  {
    return $this->outputDataAccessLevel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApiservingMcpMcpToolDataHandlingProfile::class, 'Google_Service_Apigee_ApiservingMcpMcpToolDataHandlingProfile');
