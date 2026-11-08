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

class GoogleCloudDiscoveryengineV1WidgetConfigCustomerProvidedConfig extends \Google\Model
{
  /**
   * The project has no Assured Workloads compliance level, or reports one that
   * this API version does not model.
   */
  public const COMPLIANCE_LEVEL_COMPLIANCE_LEVEL_UNSPECIFIED = 'COMPLIANCE_LEVEL_UNSPECIFIED';
  /**
   * FedRAMP High compliance level.
   */
  public const COMPLIANCE_LEVEL_COMPLIANCE_LEVEL_FEDRAMP_HIGH = 'COMPLIANCE_LEVEL_FEDRAMP_HIGH';
  /**
   * Impact Level 4 (IL4) compliance level.
   */
  public const COMPLIANCE_LEVEL_COMPLIANCE_LEVEL_IL4 = 'COMPLIANCE_LEVEL_IL4';
  /**
   * Impact Level 5 (IL5) compliance level.
   */
  public const COMPLIANCE_LEVEL_COMPLIANCE_LEVEL_IL5 = 'COMPLIANCE_LEVEL_IL5';
  /**
   * International Traffic in Arms Regulations (ITAR) compliance level.
   */
  public const COMPLIANCE_LEVEL_COMPLIANCE_LEVEL_ITAR = 'COMPLIANCE_LEVEL_ITAR';
  /**
   * Default customer type.
   */
  public const CUSTOMER_TYPE_DEFAULT_CUSTOMER = 'DEFAULT_CUSTOMER';
  /**
   * Government customer type. Some features are disabled for government
   * customers due to legal requirements.
   */
  public const CUSTOMER_TYPE_GOVERNMENT_CUSTOMER = 'GOVERNMENT_CUSTOMER';
  /**
   * Output only. The customer's Assured Workloads compliance level.
   * `customer_type` collapses every compliance level into a single
   * `GOVERNMENT_CUSTOMER` value, so a client that gates a feature on one
   * specific level rather than on government status as a whole must read this
   * field instead.
   *
   * @var string
   */
  public $complianceLevel;
  /**
   * Customer type.
   *
   * @var string
   */
  public $customerType;

  /**
   * Output only. The customer's Assured Workloads compliance level.
   * `customer_type` collapses every compliance level into a single
   * `GOVERNMENT_CUSTOMER` value, so a client that gates a feature on one
   * specific level rather than on government status as a whole must read this
   * field instead.
   *
   * Accepted values: COMPLIANCE_LEVEL_UNSPECIFIED,
   * COMPLIANCE_LEVEL_FEDRAMP_HIGH, COMPLIANCE_LEVEL_IL4, COMPLIANCE_LEVEL_IL5,
   * COMPLIANCE_LEVEL_ITAR
   *
   * @param self::COMPLIANCE_LEVEL_* $complianceLevel
   */
  public function setComplianceLevel($complianceLevel)
  {
    $this->complianceLevel = $complianceLevel;
  }
  /**
   * @return self::COMPLIANCE_LEVEL_*
   */
  public function getComplianceLevel()
  {
    return $this->complianceLevel;
  }
  /**
   * Customer type.
   *
   * Accepted values: DEFAULT_CUSTOMER, GOVERNMENT_CUSTOMER
   *
   * @param self::CUSTOMER_TYPE_* $customerType
   */
  public function setCustomerType($customerType)
  {
    $this->customerType = $customerType;
  }
  /**
   * @return self::CUSTOMER_TYPE_*
   */
  public function getCustomerType()
  {
    return $this->customerType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigCustomerProvidedConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigCustomerProvidedConfig');
