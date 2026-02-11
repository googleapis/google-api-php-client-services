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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicy extends \Google\Model
{
  protected $sensitiveDataProtectionPolicyType = GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicySensitiveDataProtectionPolicy::class;
  protected $sensitiveDataProtectionPolicyDataType = '';

  /**
   * Optional. The sensitive data protection policy.
   *
   * @param GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicySensitiveDataProtectionPolicy $sensitiveDataProtectionPolicy
   */
  public function setSensitiveDataProtectionPolicy(GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicySensitiveDataProtectionPolicy $sensitiveDataProtectionPolicy)
  {
    $this->sensitiveDataProtectionPolicy = $sensitiveDataProtectionPolicy;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicySensitiveDataProtectionPolicy
   */
  public function getSensitiveDataProtectionPolicy()
  {
    return $this->sensitiveDataProtectionPolicy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicy::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1ProjectCustomerProvidedConfigNotebooklmConfigDataProtectionPolicy');
