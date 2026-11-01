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

namespace Google\Service\Chromewebstore;

class RollbackItemRequest extends \Google\Model
{
  /**
   * Required. The new version to assign to the package being rolled back to.
   * This effectively "rolls forward" the previous package by giving it a higher
   * version number than the currently-published package. E.g. if the current
   * published version is 1.1, the new version could be 1.1.1 or 1.2 but not
   * 1.0.
   *
   * @var string
   */
  public $newVersion;
  /**
   * Required. The reason for the rollback that will be used for internal
   * auditing and developer dashboard visibility.
   *
   * @var string
   */
  public $rollbackReason;
  /**
   * Required. The target previously published CRX version to roll back to. If
   * unset, defaults to the last published CRX version.
   *
   * @var string
   */
  public $targetCrxVersion;
  /**
   * Optional. If set, validate and dry run the request but do not actually
   * initiate the rollback
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Required. The new version to assign to the package being rolled back to.
   * This effectively "rolls forward" the previous package by giving it a higher
   * version number than the currently-published package. E.g. if the current
   * published version is 1.1, the new version could be 1.1.1 or 1.2 but not
   * 1.0.
   *
   * @param string $newVersion
   */
  public function setNewVersion($newVersion)
  {
    $this->newVersion = $newVersion;
  }
  /**
   * @return string
   */
  public function getNewVersion()
  {
    return $this->newVersion;
  }
  /**
   * Required. The reason for the rollback that will be used for internal
   * auditing and developer dashboard visibility.
   *
   * @param string $rollbackReason
   */
  public function setRollbackReason($rollbackReason)
  {
    $this->rollbackReason = $rollbackReason;
  }
  /**
   * @return string
   */
  public function getRollbackReason()
  {
    return $this->rollbackReason;
  }
  /**
   * Required. The target previously published CRX version to roll back to. If
   * unset, defaults to the last published CRX version.
   *
   * @param string $targetCrxVersion
   */
  public function setTargetCrxVersion($targetCrxVersion)
  {
    $this->targetCrxVersion = $targetCrxVersion;
  }
  /**
   * @return string
   */
  public function getTargetCrxVersion()
  {
    return $this->targetCrxVersion;
  }
  /**
   * Optional. If set, validate and dry run the request but do not actually
   * initiate the rollback
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
class_alias(RollbackItemRequest::class, 'Google_Service_Chromewebstore_RollbackItemRequest');
