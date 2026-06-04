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

class GoogleAdsSearchads360V23ServicesAddOfflineUserDataJobOperationsRequest extends \Google\Collection
{
  protected $collection_key = 'operations';
  /**
   * True to enable partial failure for the offline user data job.
   *
   * @var bool
   */
  public $enablePartialFailure;
  /**
   * True to enable warnings for the offline user data job. When enabled, a
   * warning will not block the OfflineUserDataJobOperation, and will also
   * return warning messages about malformed field values.
   *
   * @var bool
   */
  public $enableWarnings;
  protected $operationsType = GoogleAdsSearchads360V23ServicesOfflineUserDataJobOperation::class;
  protected $operationsDataType = 'array';
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * True to enable partial failure for the offline user data job.
   *
   * @param bool $enablePartialFailure
   */
  public function setEnablePartialFailure($enablePartialFailure)
  {
    $this->enablePartialFailure = $enablePartialFailure;
  }
  /**
   * @return bool
   */
  public function getEnablePartialFailure()
  {
    return $this->enablePartialFailure;
  }
  /**
   * True to enable warnings for the offline user data job. When enabled, a
   * warning will not block the OfflineUserDataJobOperation, and will also
   * return warning messages about malformed field values.
   *
   * @param bool $enableWarnings
   */
  public function setEnableWarnings($enableWarnings)
  {
    $this->enableWarnings = $enableWarnings;
  }
  /**
   * @return bool
   */
  public function getEnableWarnings()
  {
    return $this->enableWarnings;
  }
  /**
   * Required. The list of operations to be done.
   *
   * @param GoogleAdsSearchads360V23ServicesOfflineUserDataJobOperation[] $operations
   */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesOfflineUserDataJobOperation[]
   */
  public function getOperations()
  {
    return $this->operations;
  }
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAddOfflineUserDataJobOperationsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAddOfflineUserDataJobOperationsRequest');
