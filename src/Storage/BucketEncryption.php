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

namespace Google\Service\Storage;

class BucketEncryption extends \Google\Model
{
  protected $customerManagedEncryptionEnforcementConfigType = BucketEncryptionCustomerManagedEncryptionEnforcementConfig::class;
  protected $customerManagedEncryptionEnforcementConfigDataType = '';
  protected $customerSuppliedEncryptionEnforcementConfigType = BucketEncryptionCustomerSuppliedEncryptionEnforcementConfig::class;
  protected $customerSuppliedEncryptionEnforcementConfigDataType = '';
  /**
   * @var string
   */
  public $defaultKmsKeyName;
  protected $googleManagedEncryptionEnforcementConfigType = BucketEncryptionGoogleManagedEncryptionEnforcementConfig::class;
  protected $googleManagedEncryptionEnforcementConfigDataType = '';

  /**
   * @param BucketEncryptionCustomerManagedEncryptionEnforcementConfig
   */
  public function setCustomerManagedEncryptionEnforcementConfig(BucketEncryptionCustomerManagedEncryptionEnforcementConfig $customerManagedEncryptionEnforcementConfig)
  {
    $this->customerManagedEncryptionEnforcementConfig = $customerManagedEncryptionEnforcementConfig;
  }
  /**
   * @return BucketEncryptionCustomerManagedEncryptionEnforcementConfig
   */
  public function getCustomerManagedEncryptionEnforcementConfig()
  {
    return $this->customerManagedEncryptionEnforcementConfig;
  }
  /**
   * @param BucketEncryptionCustomerSuppliedEncryptionEnforcementConfig
   */
  public function setCustomerSuppliedEncryptionEnforcementConfig(BucketEncryptionCustomerSuppliedEncryptionEnforcementConfig $customerSuppliedEncryptionEnforcementConfig)
  {
    $this->customerSuppliedEncryptionEnforcementConfig = $customerSuppliedEncryptionEnforcementConfig;
  }
  /**
   * @return BucketEncryptionCustomerSuppliedEncryptionEnforcementConfig
   */
  public function getCustomerSuppliedEncryptionEnforcementConfig()
  {
    return $this->customerSuppliedEncryptionEnforcementConfig;
  }
  /**
   * @param string
   */
  public function setDefaultKmsKeyName($defaultKmsKeyName)
  {
    $this->defaultKmsKeyName = $defaultKmsKeyName;
  }
  /**
   * @return string
   */
  public function getDefaultKmsKeyName()
  {
    return $this->defaultKmsKeyName;
  }
  /**
   * @param BucketEncryptionGoogleManagedEncryptionEnforcementConfig
   */
  public function setGoogleManagedEncryptionEnforcementConfig(BucketEncryptionGoogleManagedEncryptionEnforcementConfig $googleManagedEncryptionEnforcementConfig)
  {
    $this->googleManagedEncryptionEnforcementConfig = $googleManagedEncryptionEnforcementConfig;
  }
  /**
   * @return BucketEncryptionGoogleManagedEncryptionEnforcementConfig
   */
  public function getGoogleManagedEncryptionEnforcementConfig()
  {
    return $this->googleManagedEncryptionEnforcementConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BucketEncryption::class, 'Google_Service_Storage_BucketEncryption');
