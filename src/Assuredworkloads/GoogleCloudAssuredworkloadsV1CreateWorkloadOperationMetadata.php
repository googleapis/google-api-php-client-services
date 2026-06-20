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

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1CreateWorkloadOperationMetadata extends \Google\Model
{
  /**
   * The default value. This value is used if the control package is omitted or
   * unknown.
   */
  public const COMPLIANCE_REGIME_COMPLIANCE_REGIME_UNSPECIFIED = 'COMPLIANCE_REGIME_UNSPECIFIED';
  /**
   * Specifies a [Sovereign Controls by
   * Partners](https://cloud.google.com/sovereign-controls-by-
   * partners/docs/overview) control package. To use this control package, you
   * must also specify the partner field from the list of Sovereign Controls by
   * Partners.
   */
  public const COMPLIANCE_REGIME_ASSURED_WORKLOADS_FOR_PARTNERS = 'ASSURED_WORKLOADS_FOR_PARTNERS';
  /**
   * Australia Data Boundary and Support
   */
  public const COMPLIANCE_REGIME_AUSTRALIA_DATA_BOUNDARY_AND_SUPPORT = 'AUSTRALIA_DATA_BOUNDARY_AND_SUPPORT';
  /**
   * Canada Data Boundary and Support
   */
  public const COMPLIANCE_REGIME_CANADA_DATA_BOUNDARY_AND_SUPPORT = 'CANADA_DATA_BOUNDARY_AND_SUPPORT';
  /**
   * Data Boundary for Canada Controlled Goods
   */
  public const COMPLIANCE_REGIME_DATA_BOUNDARY_FOR_CANADA_CONTROLLED_GOODS = 'DATA_BOUNDARY_FOR_CANADA_CONTROLLED_GOODS';
  /**
   * Data Boundary for Canada Protected B
   */
  public const COMPLIANCE_REGIME_DATA_BOUNDARY_FOR_CANADA_PROTECTED_B = 'DATA_BOUNDARY_FOR_CANADA_PROTECTED_B';
  /**
   * Data Boundary for Criminal Justice Information Systems (CJIS)
   */
  public const COMPLIANCE_REGIME_DATA_BOUNDARY_FOR_CJIS = 'DATA_BOUNDARY_FOR_CJIS';
  /**
   * Data Boundary for FedRAMP High
   */
  public const COMPLIANCE_REGIME_DATA_BOUNDARY_FOR_FEDRAMP_HIGH = 'DATA_BOUNDARY_FOR_FEDRAMP_HIGH';
  /**
   * Data Boundary for FedRAMP Moderate
   */
  public const COMPLIANCE_REGIME_DATA_BOUNDARY_FOR_FEDRAMP_MODERATE = 'DATA_BOUNDARY_FOR_FEDRAMP_MODERATE';
  /**
   * Data Boundary for Impact Level 2 (IL2)
   */
  public const COMPLIANCE_REGIME_DATA_BOUNDARY_FOR_IL2 = 'DATA_BOUNDARY_FOR_IL2';
  /**
   * Data Boundary for Impact Level 4 (IL4)
   */
  public const COMPLIANCE_REGIME_DATA_BOUNDARY_FOR_IL4 = 'DATA_BOUNDARY_FOR_IL4';
  /**
   * Data Boundary for Impact Level 5 (IL5)
   */
  public const COMPLIANCE_REGIME_DATA_BOUNDARY_FOR_IL5 = 'DATA_BOUNDARY_FOR_IL5';
  /**
   * Data Boundary for IRS Publication 1075
   */
  public const COMPLIANCE_REGIME_DATA_BOUNDARY_FOR_IRS_PUBLICATION_1075 = 'DATA_BOUNDARY_FOR_IRS_PUBLICATION_1075';
  /**
   * Data Boundary for International Traffic in Arms Regulations (ITAR)
   */
  public const COMPLIANCE_REGIME_DATA_BOUNDARY_FOR_ITAR = 'DATA_BOUNDARY_FOR_ITAR';
  /**
   * European Union (EU) Data Boundary and Support
   */
  public const COMPLIANCE_REGIME_EU_DATA_BOUNDARY_AND_SUPPORT = 'EU_DATA_BOUNDARY_AND_SUPPORT';
  /**
   * Israel Data Boundary and Support
   */
  public const COMPLIANCE_REGIME_ISRAEL_DATA_BOUNDARY_AND_SUPPORT = 'ISRAEL_DATA_BOUNDARY_AND_SUPPORT';
  /**
   * Japan Data Boundary
   */
  public const COMPLIANCE_REGIME_JAPAN_DATA_BOUNDARY = 'JAPAN_DATA_BOUNDARY';
  /**
   * Switzerland Data Boundary with Access Justifications
   */
  public const COMPLIANCE_REGIME_SWITZERLAND_DATA_BOUNDARY_WITH_ACCESS_JUSTIFICATIONS = 'SWITZERLAND_DATA_BOUNDARY_WITH_ACCESS_JUSTIFICATIONS';
  /**
   * Kingdom of Saudi Arabia (KSA) Data Boundary with Access Justifications
   */
  public const COMPLIANCE_REGIME_KSA_DATA_BOUNDARY_WITH_ACCESS_JUSTIFICATIONS = 'KSA_DATA_BOUNDARY_WITH_ACCESS_JUSTIFICATIONS';
  /**
   * Data boundary for one of Assured Workloads' *Free tier* control packages.
   * Determines the region by specifying the data location during workload
   * creation.
   */
  public const COMPLIANCE_REGIME_REGIONAL_DATA_BOUNDARY = 'REGIONAL_DATA_BOUNDARY';
  /**
   * United States (US) Data Boundary and Support
   */
  public const COMPLIANCE_REGIME_US_DATA_BOUNDARY_AND_SUPPORT = 'US_DATA_BOUNDARY_AND_SUPPORT';
  /**
   * United States (US) Data Boundary for Healthcare and Life Sciences
   */
  public const COMPLIANCE_REGIME_US_DATA_BOUNDARY_FOR_HEALTHCARE_AND_LIFE_SCIENCES = 'US_DATA_BOUNDARY_FOR_HEALTHCARE_AND_LIFE_SCIENCES';
  /**
   * United States (US) Data Boundary for Healthcare and Life Sciences with
   * Support
   */
  public const COMPLIANCE_REGIME_US_DATA_BOUNDARY_FOR_HEALTHCARE_AND_LIFE_SCIENCES_WITH_SUPPORT = 'US_DATA_BOUNDARY_FOR_HEALTHCARE_AND_LIFE_SCIENCES_WITH_SUPPORT';
  /**
   * Use the AUSTRALIA_DATA_BOUNDARY_AND_SUPPORT enum for this control package
   * instead, as the name of the associated Assured Workloads control package
   * has changed.
   */
  public const COMPLIANCE_REGIME_AU_REGIONS_AND_US_SUPPORT = 'AU_REGIONS_AND_US_SUPPORT';
  /**
   * Use the DATA_BOUNDARY_FOR_CANADA_PROTECTED_B enum for this control package
   * instead, as the name of the associated Assured Workloads control package
   * has changed.
   */
  public const COMPLIANCE_REGIME_CA_PROTECTED_B = 'CA_PROTECTED_B';
  /**
   * Use the CANADA_DATA_BOUNDARY_AND_SUPPORT enum for this control package
   * instead, as the name of the associated Assured Workloads control package
   * has changed.
   */
  public const COMPLIANCE_REGIME_CA_REGIONS_AND_SUPPORT = 'CA_REGIONS_AND_SUPPORT';
  /**
   * Use the DATA_BOUNDARY_FOR_CANADA_CONTROLLED_GOODS enum for this control
   * package instead, as the name of the associated Assured Workloads control
   * package has changed.
   */
  public const COMPLIANCE_REGIME_CANADA_CONTROLLED_GOODS = 'CANADA_CONTROLLED_GOODS';
  /**
   * Use the DATA_BOUNDARY_FOR_CJIS enum for this control package instead, as
   * the name of the associated Assured Workloads control package has changed.
   */
  public const COMPLIANCE_REGIME_CJIS = 'CJIS';
  /**
   * Use the EU_DATA_BOUNDARY_AND_SUPPORT enum for this control package instead,
   * as the name of the associated Assured Workloads control package has
   * changed.
   */
  public const COMPLIANCE_REGIME_EU_REGIONS_AND_SUPPORT = 'EU_REGIONS_AND_SUPPORT';
  /**
   * Use the DATA_BOUNDARY_FOR_FEDRAMP_HIGH enum for this control package
   * instead, as the name of the associated Assured Workloads control package
   * has changed.
   */
  public const COMPLIANCE_REGIME_FEDRAMP_HIGH = 'FEDRAMP_HIGH';
  /**
   * Use the DATA_BOUNDARY_FOR_FEDRAMP_MODERATE enum for this control package
   * instead, as the name of the associated Assured Workloads control package
   * has changed.
   */
  public const COMPLIANCE_REGIME_FEDRAMP_MODERATE = 'FEDRAMP_MODERATE';
  /**
   * Use the US_DATA_BOUNDARY_FOR_HEALTHCARE_AND_LIFE_SCIENCES enum for this
   * control package instead, as the name of the associated Assured Workloads
   * control package has changed.
   */
  public const COMPLIANCE_REGIME_HEALTHCARE_AND_LIFE_SCIENCES_CONTROLS = 'HEALTHCARE_AND_LIFE_SCIENCES_CONTROLS';
  /**
   * Use the US_DATA_BOUNDARY_FOR_HEALTHCARE_AND_LIFE_SCIENCES_WITH_SUPPORT enum
   * for this control package instead, as the name of the associated Assured
   * Workloads control package has changed.
   */
  public const COMPLIANCE_REGIME_HEALTHCARE_AND_LIFE_SCIENCES_CONTROLS_US_SUPPORT = 'HEALTHCARE_AND_LIFE_SCIENCES_CONTROLS_US_SUPPORT';
  /**
   * Deprecated: Consider using the Data Boundary for US Healthcare and Life
   * Sciences control package instead.
   *
   * @deprecated
   */
  public const COMPLIANCE_REGIME_HIPAA = 'HIPAA';
  /**
   * Deprecated: Consider using the Data Boundary for US Healthcare and Life
   * Sciences control package instead.
   *
   * @deprecated
   */
  public const COMPLIANCE_REGIME_HITRUST = 'HITRUST';
  /**
   * Use the DATA_BOUNDARY_FOR_IL2 enum for this control package instead, as the
   * name of the associated Assured Workloads control package has changed.
   */
  public const COMPLIANCE_REGIME_IL2 = 'IL2';
  /**
   * Use the DATA_BOUNDARY_FOR_IL4 enum for this control package instead, as the
   * name of the associated Assured Workloads control package has changed.
   */
  public const COMPLIANCE_REGIME_IL4 = 'IL4';
  /**
   * Use the DATA_BOUNDARY_FOR_IL5 enum for this control package instead, as the
   * name of the associated Assured Workloads control package has changed.
   */
  public const COMPLIANCE_REGIME_IL5 = 'IL5';
  /**
   * Use the DATA_BOUNDARY_FOR_IRS_PUBLICATION_1075 enum for this control
   * package instead, as the name of the associated Assured Workloads control
   * package has changed.
   */
  public const COMPLIANCE_REGIME_IRS_1075 = 'IRS_1075';
  /**
   * Use the ISRAEL_DATA_BOUNDARY_AND_SUPPORT enum for this control package
   * instead, as the name of the associated Assured Workloads control package
   * has changed.
   */
  public const COMPLIANCE_REGIME_ISR_REGIONS = 'ISR_REGIONS';
  /**
   * Use the ISRAEL_DATA_BOUNDARY_AND_SUPPORT enum for this control package
   * instead, as the name of the associated Assured Workloads control package
   * has changed.
   */
  public const COMPLIANCE_REGIME_ISR_REGIONS_AND_SUPPORT = 'ISR_REGIONS_AND_SUPPORT';
  /**
   * Use the DATA_BOUNDARY_FOR_ITAR enum for this control package instead, as
   * the name of the associated Assured Workloads control package has changed.
   */
  public const COMPLIANCE_REGIME_ITAR = 'ITAR';
  /**
   * Use the JAPAN_DATA_BOUNDARY enum for this control package instead, as the
   * name of the associated Assured Workloads control package has changed.
   */
  public const COMPLIANCE_REGIME_JP_REGIONS_AND_SUPPORT = 'JP_REGIONS_AND_SUPPORT';
  /**
   * Use the KSA_DATA_BOUNDARY_WITH_ACCESS_JUSTIFICATIONS enum for this control
   * package instead, as the name of the associated Assured Workloads control
   * package has changed.
   */
  public const COMPLIANCE_REGIME_KSA_REGIONS_AND_SUPPORT_WITH_SOVEREIGNTY_CONTROLS = 'KSA_REGIONS_AND_SUPPORT_WITH_SOVEREIGNTY_CONTROLS';
  /**
   * Use the REGIONAL_DATA_BOUNDARY enum for this control package instead, as
   * the name of the associated Assured Workloads control package has changed.
   */
  public const COMPLIANCE_REGIME_REGIONAL_CONTROLS = 'REGIONAL_CONTROLS';
  /**
   * Use the US_DATA_BOUNDARY_AND_SUPPORT enum for this control package instead,
   * as the name of the associated Assured Workloads control package has
   * changed.
   */
  public const COMPLIANCE_REGIME_US_REGIONAL_ACCESS = 'US_REGIONAL_ACCESS';
  /**
   * Optional. Compliance controls that should be applied to the resources
   * managed by the workload.
   *
   * @var string
   */
  public $complianceRegime;
  /**
   * Optional. Time when the operation was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The display name of the workload.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. The parent of the workload.
   *
   * @var string
   */
  public $parent;

  /**
   * Optional. Compliance controls that should be applied to the resources
   * managed by the workload.
   *
   * Accepted values: COMPLIANCE_REGIME_UNSPECIFIED,
   * ASSURED_WORKLOADS_FOR_PARTNERS, AUSTRALIA_DATA_BOUNDARY_AND_SUPPORT,
   * CANADA_DATA_BOUNDARY_AND_SUPPORT,
   * DATA_BOUNDARY_FOR_CANADA_CONTROLLED_GOODS,
   * DATA_BOUNDARY_FOR_CANADA_PROTECTED_B, DATA_BOUNDARY_FOR_CJIS,
   * DATA_BOUNDARY_FOR_FEDRAMP_HIGH, DATA_BOUNDARY_FOR_FEDRAMP_MODERATE,
   * DATA_BOUNDARY_FOR_IL2, DATA_BOUNDARY_FOR_IL4, DATA_BOUNDARY_FOR_IL5,
   * DATA_BOUNDARY_FOR_IRS_PUBLICATION_1075, DATA_BOUNDARY_FOR_ITAR,
   * EU_DATA_BOUNDARY_AND_SUPPORT, ISRAEL_DATA_BOUNDARY_AND_SUPPORT,
   * JAPAN_DATA_BOUNDARY, SWITZERLAND_DATA_BOUNDARY_WITH_ACCESS_JUSTIFICATIONS,
   * KSA_DATA_BOUNDARY_WITH_ACCESS_JUSTIFICATIONS, REGIONAL_DATA_BOUNDARY,
   * US_DATA_BOUNDARY_AND_SUPPORT,
   * US_DATA_BOUNDARY_FOR_HEALTHCARE_AND_LIFE_SCIENCES,
   * US_DATA_BOUNDARY_FOR_HEALTHCARE_AND_LIFE_SCIENCES_WITH_SUPPORT,
   * AU_REGIONS_AND_US_SUPPORT, CA_PROTECTED_B, CA_REGIONS_AND_SUPPORT,
   * CANADA_CONTROLLED_GOODS, CJIS, EU_REGIONS_AND_SUPPORT, FEDRAMP_HIGH,
   * FEDRAMP_MODERATE, HEALTHCARE_AND_LIFE_SCIENCES_CONTROLS,
   * HEALTHCARE_AND_LIFE_SCIENCES_CONTROLS_US_SUPPORT, HIPAA, HITRUST, IL2, IL4,
   * IL5, IRS_1075, ISR_REGIONS, ISR_REGIONS_AND_SUPPORT, ITAR,
   * JP_REGIONS_AND_SUPPORT, KSA_REGIONS_AND_SUPPORT_WITH_SOVEREIGNTY_CONTROLS,
   * REGIONAL_CONTROLS, US_REGIONAL_ACCESS
   *
   * @param self::COMPLIANCE_REGIME_* $complianceRegime
   */
  public function setComplianceRegime($complianceRegime)
  {
    $this->complianceRegime = $complianceRegime;
  }
  /**
   * @return self::COMPLIANCE_REGIME_*
   */
  public function getComplianceRegime()
  {
    return $this->complianceRegime;
  }
  /**
   * Optional. Time when the operation was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. The display name of the workload.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. The parent of the workload.
   *
   * @param string $parent
   */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /**
   * @return string
   */
  public function getParent()
  {
    return $this->parent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1CreateWorkloadOperationMetadata::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1CreateWorkloadOperationMetadata');
