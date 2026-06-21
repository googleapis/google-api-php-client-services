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

namespace Google\Service\Dataproc;

class ConfidentialInstanceConfig extends \Google\Model
{
  /**
   * Confidential Instance Type is not specified.
   */
  public const CONFIDENTIAL_INSTANCE_TYPE_CONFIDENTIAL_INSTANCE_TYPE_UNSPECIFIED = 'CONFIDENTIAL_INSTANCE_TYPE_UNSPECIFIED';
  /**
   * AMD Secure Encrypted Virtualization (https://cloud.google.com/confidential-
   * computing/confidential-vm/docs/confidential-vm-overview#amd_sev)
   */
  public const CONFIDENTIAL_INSTANCE_TYPE_SEV = 'SEV';
  /**
   * AMD Secure Encrypted Virtualization-Secure Nested Paging
   * (https://cloud.google.com/confidential-computing/confidential-
   * vm/docs/confidential-vm-overview#amd_sev-snp)
   */
  public const CONFIDENTIAL_INSTANCE_TYPE_SEV_SNP = 'SEV_SNP';
  /**
   * Intel Trust Domain Extensions (https://cloud.google.com/confidential-
   * computing/confidential-vm/docs/confidential-vm-overview#intel_tdx)
   */
  public const CONFIDENTIAL_INSTANCE_TYPE_TDX = 'TDX';
  /**
   * Optional. Defines the type of Confidential Compute technology to use.
   *
   * @var string
   */
  public $confidentialInstanceType;
  /**
   * Optional. Deprecated: Use 'confidential_instance_type' instead. Defines
   * whether the instance should have confidential compute enabled.
   *
   * @deprecated
   * @var bool
   */
  public $enableConfidentialCompute;

  /**
   * Optional. Defines the type of Confidential Compute technology to use.
   *
   * Accepted values: CONFIDENTIAL_INSTANCE_TYPE_UNSPECIFIED, SEV, SEV_SNP, TDX
   *
   * @param self::CONFIDENTIAL_INSTANCE_TYPE_* $confidentialInstanceType
   */
  public function setConfidentialInstanceType($confidentialInstanceType)
  {
    $this->confidentialInstanceType = $confidentialInstanceType;
  }
  /**
   * @return self::CONFIDENTIAL_INSTANCE_TYPE_*
   */
  public function getConfidentialInstanceType()
  {
    return $this->confidentialInstanceType;
  }
  /**
   * Optional. Deprecated: Use 'confidential_instance_type' instead. Defines
   * whether the instance should have confidential compute enabled.
   *
   * @deprecated
   * @param bool $enableConfidentialCompute
   */
  public function setEnableConfidentialCompute($enableConfidentialCompute)
  {
    $this->enableConfidentialCompute = $enableConfidentialCompute;
  }
  /**
   * @deprecated
   * @return bool
   */
  public function getEnableConfidentialCompute()
  {
    return $this->enableConfidentialCompute;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConfidentialInstanceConfig::class, 'Google_Service_Dataproc_ConfidentialInstanceConfig');
