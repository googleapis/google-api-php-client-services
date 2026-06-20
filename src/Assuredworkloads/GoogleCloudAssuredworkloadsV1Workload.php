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

class GoogleCloudAssuredworkloadsV1Workload extends \Google\Collection
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
   * Default State for KAJ Enrollment.
   */
  public const KAJ_ENROLLMENT_STATE_KAJ_ENROLLMENT_STATE_UNSPECIFIED = 'KAJ_ENROLLMENT_STATE_UNSPECIFIED';
  /**
   * Pending State for KAJ Enrollment.
   */
  public const KAJ_ENROLLMENT_STATE_KAJ_ENROLLMENT_STATE_PENDING = 'KAJ_ENROLLMENT_STATE_PENDING';
  /**
   * Complete State for KAJ Enrollment.
   */
  public const KAJ_ENROLLMENT_STATE_KAJ_ENROLLMENT_STATE_COMPLETE = 'KAJ_ENROLLMENT_STATE_COMPLETE';
  public const PARTNER_PARTNER_UNSPECIFIED = 'PARTNER_UNSPECIFIED';
  /**
   * Enum representing S3NS (Thales) partner.
   */
  public const PARTNER_LOCAL_CONTROLS_BY_S3NS = 'LOCAL_CONTROLS_BY_S3NS';
  /**
   * Enum representing T_SYSTEM (TSI) partner.
   */
  public const PARTNER_SOVEREIGN_CONTROLS_BY_T_SYSTEMS = 'SOVEREIGN_CONTROLS_BY_T_SYSTEMS';
  /**
   * Enum representing SIA_MINSAIT (Indra) partner.
   */
  public const PARTNER_SOVEREIGN_CONTROLS_BY_SIA_MINSAIT = 'SOVEREIGN_CONTROLS_BY_SIA_MINSAIT';
  /**
   * Enum representing PSN (TIM) partner.
   */
  public const PARTNER_SOVEREIGN_CONTROLS_BY_PSN = 'SOVEREIGN_CONTROLS_BY_PSN';
  /**
   * Enum representing CNTXT (Kingdom of Saudi Arabia) partner.
   */
  public const PARTNER_SOVEREIGN_CONTROLS_BY_CNTXT = 'SOVEREIGN_CONTROLS_BY_CNTXT';
  /**
   * Enum representing CNTXT (Kingdom of Saudi Arabia) partner offering without
   * EKM.
   */
  public const PARTNER_SOVEREIGN_CONTROLS_BY_CNTXT_NO_EKM = 'SOVEREIGN_CONTROLS_BY_CNTXT_NO_EKM';
  /**
   * Enum representing Telefonica (Spain) partner.
   */
  public const PARTNER_SPAIN_DATA_BOUNDARY_BY_TELEFONICA = 'SPAIN_DATA_BOUNDARY_BY_TELEFONICA';
  protected $collection_key = 'resources';
  /**
   * Optional. The billing account used for the resources which are direct
   * children of workload. This billing account is initially associated with the
   * resources created as part of Workload creation. After the initial creation
   * of these resources, the customer can change the assigned billing account.
   * The resource name has the form `billingAccounts/{billing_account_id}`. For
   * example, `billingAccounts/012345-567890-ABCDEF`.
   *
   * @var string
   */
  public $billingAccount;
  /**
   * Required. Immutable. Compliance Regime associated with this workload.
   *
   * @var string
   */
  public $complianceRegime;
  protected $complianceStatusType = GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus::class;
  protected $complianceStatusDataType = '';
  /**
   * Output only. Urls for services which are compliant for this Assured
   * Workload, but which are currently disallowed by the
   * ResourceUsageRestriction org policy. Invoke RestrictAllowedResources
   * endpoint to allow your project developers to use these services in their
   * environment.
   *
   * @var string[]
   */
  public $compliantButDisallowedServices;
  /**
   * Output only. Immutable. The Workload creation timestamp.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. The user-assigned display name of the Workload. When present it
   * must be between 4 to 30 characters. Allowed characters are: lowercase and
   * uppercase letters, numbers, hyphen, and spaces. Example: My Workload
   *
   * @var string
   */
  public $displayName;
  protected $ekmProvisioningResponseType = GoogleCloudAssuredworkloadsV1WorkloadEkmProvisioningResponse::class;
  protected $ekmProvisioningResponseDataType = '';
  /**
   * Optional. Indicates the sovereignty status of the given workload. Currently
   * meant to be used by Europe/Canada customers.
   *
   * @var bool
   */
  public $enableSovereignControls;
  /**
   * Optional. ETag of the workload, it is calculated on the basis of the
   * Workload contents. It will be used in Update & Delete operations.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. Represents the KAJ enrollment state of the given workload.
   *
   * @var string
   */
  public $kajEnrollmentState;
  protected $kmsSettingsType = GoogleCloudAssuredworkloadsV1WorkloadKMSSettings::class;
  protected $kmsSettingsDataType = '';
  /**
   * Optional. Labels applied to the workload.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Optional. The resource name of the workload. Format:
   * organizations/{organization}/locations/{location}/workloads/{workload}
   * Read-only.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Partner regime associated with this workload.
   *
   * @var string
   */
  public $partner;
  protected $partnerPermissionsType = GoogleCloudAssuredworkloadsV1WorkloadPartnerPermissions::class;
  protected $partnerPermissionsDataType = '';
  /**
   * Optional. Billing account necessary for purchasing services from Sovereign
   * Partners. This field is required for creating SIA/PSN/CNTXT/Telefonica
   * partner workloads. The caller should have
   * 'billing.resourceAssociations.create' IAM permission on this billing-
   * account. The format of this string is billingAccounts/AAAAAA-BBBBBB-CCCCCC
   *
   * @var string
   */
  public $partnerServicesBillingAccount;
  /**
   * Input only. The parent resource for the resources managed by this Assured
   * Workload. May be either empty or a folder resource which is a child of the
   * Workload parent. If not specified all resources are created under the
   * parent organization. Format: folders/{folder_id}
   *
   * @var string
   */
  public $provisionedResourcesParent;
  /**
   * Output only. Indicates whether resource monitoring is enabled for workload
   * or not. It is true when Resource feed is subscribed to AWM topic and AWM
   * Service Agent Role is binded to AW Service Account for resource Assured
   * workload.
   *
   * @var bool
   */
  public $resourceMonitoringEnabled;
  protected $resourceSettingsType = GoogleCloudAssuredworkloadsV1WorkloadResourceSettings::class;
  protected $resourceSettingsDataType = 'array';
  protected $resourcesType = GoogleCloudAssuredworkloadsV1WorkloadResourceInfo::class;
  protected $resourcesDataType = 'array';
  protected $saaEnrollmentResponseType = GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse::class;
  protected $saaEnrollmentResponseDataType = '';
  /**
   * Optional. Indicates whether the e-mail notification for a violation is
   * enabled for a workload. This value will be by default True, and if not
   * present will be considered as true. This should only be updated via
   * updateWorkload call. Any Changes to this field during the createWorkload
   * call will not be honored. This will always be true while creating the
   * workload.
   *
   * @var bool
   */
  public $violationNotificationsEnabled;
  protected $workloadOptionsType = GoogleCloudAssuredworkloadsV1WorkloadWorkloadOptions::class;
  protected $workloadOptionsDataType = '';

  /**
   * Optional. The billing account used for the resources which are direct
   * children of workload. This billing account is initially associated with the
   * resources created as part of Workload creation. After the initial creation
   * of these resources, the customer can change the assigned billing account.
   * The resource name has the form `billingAccounts/{billing_account_id}`. For
   * example, `billingAccounts/012345-567890-ABCDEF`.
   *
   * @param string $billingAccount
   */
  public function setBillingAccount($billingAccount)
  {
    $this->billingAccount = $billingAccount;
  }
  /**
   * @return string
   */
  public function getBillingAccount()
  {
    return $this->billingAccount;
  }
  /**
   * Required. Immutable. Compliance Regime associated with this workload.
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
   * Output only. Count of active Violations in the Workload.
   *
   * @param GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus $complianceStatus
   */
  public function setComplianceStatus(GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus $complianceStatus)
  {
    $this->complianceStatus = $complianceStatus;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1WorkloadComplianceStatus
   */
  public function getComplianceStatus()
  {
    return $this->complianceStatus;
  }
  /**
   * Output only. Urls for services which are compliant for this Assured
   * Workload, but which are currently disallowed by the
   * ResourceUsageRestriction org policy. Invoke RestrictAllowedResources
   * endpoint to allow your project developers to use these services in their
   * environment.
   *
   * @param string[] $compliantButDisallowedServices
   */
  public function setCompliantButDisallowedServices($compliantButDisallowedServices)
  {
    $this->compliantButDisallowedServices = $compliantButDisallowedServices;
  }
  /**
   * @return string[]
   */
  public function getCompliantButDisallowedServices()
  {
    return $this->compliantButDisallowedServices;
  }
  /**
   * Output only. Immutable. The Workload creation timestamp.
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
   * Required. The user-assigned display name of the Workload. When present it
   * must be between 4 to 30 characters. Allowed characters are: lowercase and
   * uppercase letters, numbers, hyphen, and spaces. Example: My Workload
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
   * Output only. Represents the Ekm Provisioning State of the given workload.
   *
   * @param GoogleCloudAssuredworkloadsV1WorkloadEkmProvisioningResponse $ekmProvisioningResponse
   */
  public function setEkmProvisioningResponse(GoogleCloudAssuredworkloadsV1WorkloadEkmProvisioningResponse $ekmProvisioningResponse)
  {
    $this->ekmProvisioningResponse = $ekmProvisioningResponse;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1WorkloadEkmProvisioningResponse
   */
  public function getEkmProvisioningResponse()
  {
    return $this->ekmProvisioningResponse;
  }
  /**
   * Optional. Indicates the sovereignty status of the given workload. Currently
   * meant to be used by Europe/Canada customers.
   *
   * @param bool $enableSovereignControls
   */
  public function setEnableSovereignControls($enableSovereignControls)
  {
    $this->enableSovereignControls = $enableSovereignControls;
  }
  /**
   * @return bool
   */
  public function getEnableSovereignControls()
  {
    return $this->enableSovereignControls;
  }
  /**
   * Optional. ETag of the workload, it is calculated on the basis of the
   * Workload contents. It will be used in Update & Delete operations.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Output only. Represents the KAJ enrollment state of the given workload.
   *
   * Accepted values: KAJ_ENROLLMENT_STATE_UNSPECIFIED,
   * KAJ_ENROLLMENT_STATE_PENDING, KAJ_ENROLLMENT_STATE_COMPLETE
   *
   * @param self::KAJ_ENROLLMENT_STATE_* $kajEnrollmentState
   */
  public function setKajEnrollmentState($kajEnrollmentState)
  {
    $this->kajEnrollmentState = $kajEnrollmentState;
  }
  /**
   * @return self::KAJ_ENROLLMENT_STATE_*
   */
  public function getKajEnrollmentState()
  {
    return $this->kajEnrollmentState;
  }
  /**
   * Input only. Settings used to create a CMEK crypto key. When set, a project
   * with a KMS CMEK key is provisioned. This field is deprecated as of Feb 28,
   * 2022. In order to create a Keyring, callers should specify,
   * ENCRYPTION_KEYS_PROJECT or KEYRING in ResourceSettings.resource_type field.
   *
   * @deprecated
   * @param GoogleCloudAssuredworkloadsV1WorkloadKMSSettings $kmsSettings
   */
  public function setKmsSettings(GoogleCloudAssuredworkloadsV1WorkloadKMSSettings $kmsSettings)
  {
    $this->kmsSettings = $kmsSettings;
  }
  /**
   * @deprecated
   * @return GoogleCloudAssuredworkloadsV1WorkloadKMSSettings
   */
  public function getKmsSettings()
  {
    return $this->kmsSettings;
  }
  /**
   * Optional. Labels applied to the workload.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Optional. The resource name of the workload. Format:
   * organizations/{organization}/locations/{location}/workloads/{workload}
   * Read-only.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. Partner regime associated with this workload.
   *
   * Accepted values: PARTNER_UNSPECIFIED, LOCAL_CONTROLS_BY_S3NS,
   * SOVEREIGN_CONTROLS_BY_T_SYSTEMS, SOVEREIGN_CONTROLS_BY_SIA_MINSAIT,
   * SOVEREIGN_CONTROLS_BY_PSN, SOVEREIGN_CONTROLS_BY_CNTXT,
   * SOVEREIGN_CONTROLS_BY_CNTXT_NO_EKM, SPAIN_DATA_BOUNDARY_BY_TELEFONICA
   *
   * @param self::PARTNER_* $partner
   */
  public function setPartner($partner)
  {
    $this->partner = $partner;
  }
  /**
   * @return self::PARTNER_*
   */
  public function getPartner()
  {
    return $this->partner;
  }
  /**
   * Optional. Permissions granted to the AW Partner SA account for the customer
   * workload
   *
   * @param GoogleCloudAssuredworkloadsV1WorkloadPartnerPermissions $partnerPermissions
   */
  public function setPartnerPermissions(GoogleCloudAssuredworkloadsV1WorkloadPartnerPermissions $partnerPermissions)
  {
    $this->partnerPermissions = $partnerPermissions;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1WorkloadPartnerPermissions
   */
  public function getPartnerPermissions()
  {
    return $this->partnerPermissions;
  }
  /**
   * Optional. Billing account necessary for purchasing services from Sovereign
   * Partners. This field is required for creating SIA/PSN/CNTXT/Telefonica
   * partner workloads. The caller should have
   * 'billing.resourceAssociations.create' IAM permission on this billing-
   * account. The format of this string is billingAccounts/AAAAAA-BBBBBB-CCCCCC
   *
   * @param string $partnerServicesBillingAccount
   */
  public function setPartnerServicesBillingAccount($partnerServicesBillingAccount)
  {
    $this->partnerServicesBillingAccount = $partnerServicesBillingAccount;
  }
  /**
   * @return string
   */
  public function getPartnerServicesBillingAccount()
  {
    return $this->partnerServicesBillingAccount;
  }
  /**
   * Input only. The parent resource for the resources managed by this Assured
   * Workload. May be either empty or a folder resource which is a child of the
   * Workload parent. If not specified all resources are created under the
   * parent organization. Format: folders/{folder_id}
   *
   * @param string $provisionedResourcesParent
   */
  public function setProvisionedResourcesParent($provisionedResourcesParent)
  {
    $this->provisionedResourcesParent = $provisionedResourcesParent;
  }
  /**
   * @return string
   */
  public function getProvisionedResourcesParent()
  {
    return $this->provisionedResourcesParent;
  }
  /**
   * Output only. Indicates whether resource monitoring is enabled for workload
   * or not. It is true when Resource feed is subscribed to AWM topic and AWM
   * Service Agent Role is binded to AW Service Account for resource Assured
   * workload.
   *
   * @param bool $resourceMonitoringEnabled
   */
  public function setResourceMonitoringEnabled($resourceMonitoringEnabled)
  {
    $this->resourceMonitoringEnabled = $resourceMonitoringEnabled;
  }
  /**
   * @return bool
   */
  public function getResourceMonitoringEnabled()
  {
    return $this->resourceMonitoringEnabled;
  }
  /**
   * Input only. Resource properties that are used to customize workload
   * resources. These properties (such as custom project id) will be used to
   * create workload resources if possible. This field is optional.
   *
   * @param GoogleCloudAssuredworkloadsV1WorkloadResourceSettings[] $resourceSettings
   */
  public function setResourceSettings($resourceSettings)
  {
    $this->resourceSettings = $resourceSettings;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1WorkloadResourceSettings[]
   */
  public function getResourceSettings()
  {
    return $this->resourceSettings;
  }
  /**
   * Output only. The resources associated with this workload. These resources
   * will be created when creating the workload. If any of the projects already
   * exist, the workload creation will fail. Always read only.
   *
   * @param GoogleCloudAssuredworkloadsV1WorkloadResourceInfo[] $resources
   */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1WorkloadResourceInfo[]
   */
  public function getResources()
  {
    return $this->resources;
  }
  /**
   * Output only. Represents the SAA enrollment response of the given workload.
   * SAA enrollment response is queried during GetWorkload call. In failure
   * cases, user friendly error message is shown in SAA details page.
   *
   * @param GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse $saaEnrollmentResponse
   */
  public function setSaaEnrollmentResponse(GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse $saaEnrollmentResponse)
  {
    $this->saaEnrollmentResponse = $saaEnrollmentResponse;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1WorkloadSaaEnrollmentResponse
   */
  public function getSaaEnrollmentResponse()
  {
    return $this->saaEnrollmentResponse;
  }
  /**
   * Optional. Indicates whether the e-mail notification for a violation is
   * enabled for a workload. This value will be by default True, and if not
   * present will be considered as true. This should only be updated via
   * updateWorkload call. Any Changes to this field during the createWorkload
   * call will not be honored. This will always be true while creating the
   * workload.
   *
   * @param bool $violationNotificationsEnabled
   */
  public function setViolationNotificationsEnabled($violationNotificationsEnabled)
  {
    $this->violationNotificationsEnabled = $violationNotificationsEnabled;
  }
  /**
   * @return bool
   */
  public function getViolationNotificationsEnabled()
  {
    return $this->violationNotificationsEnabled;
  }
  /**
   * Optional. Options to be set for the given created workload.
   *
   * @param GoogleCloudAssuredworkloadsV1WorkloadWorkloadOptions $workloadOptions
   */
  public function setWorkloadOptions(GoogleCloudAssuredworkloadsV1WorkloadWorkloadOptions $workloadOptions)
  {
    $this->workloadOptions = $workloadOptions;
  }
  /**
   * @return GoogleCloudAssuredworkloadsV1WorkloadWorkloadOptions
   */
  public function getWorkloadOptions()
  {
    return $this->workloadOptions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1Workload::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1Workload');
