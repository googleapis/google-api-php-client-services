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

namespace Google\Service\CloudAuditManager;

class Control extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const FAMILY_FAMILY_UNSPECIFIED = 'FAMILY_UNSPECIFIED';
  /**
   * Access control.
   */
  public const FAMILY_AC = 'AC';
  /**
   * Awareness and training.
   */
  public const FAMILY_AT = 'AT';
  /**
   * Audit and accountability.
   */
  public const FAMILY_AU = 'AU';
  /**
   * Certification, accreditation and security assessments.
   */
  public const FAMILY_CA = 'CA';
  /**
   * Configuration management and change control.
   */
  public const FAMILY_CM = 'CM';
  /**
   * Contingency planning and disaster recovery.
   */
  public const FAMILY_CP = 'CP';
  /**
   * Identification and authentication.
   */
  public const FAMILY_IA = 'IA';
  /**
   * Incident response.
   */
  public const FAMILY_IR = 'IR';
  /**
   * Maintenance.
   */
  public const FAMILY_MA = 'MA';
  /**
   * Media protection.
   */
  public const FAMILY_MP = 'MP';
  /**
   * Physical and environmental protection.
   */
  public const FAMILY_PE = 'PE';
  /**
   * Security planning.
   */
  public const FAMILY_PL = 'PL';
  /**
   * Personnel security.
   */
  public const FAMILY_PS = 'PS';
  /**
   * Risk assessment.
   */
  public const FAMILY_RA = 'RA';
  /**
   * System services and acquisition.
   */
  public const FAMILY_SA = 'SA';
  /**
   * System and communications protection.
   */
  public const FAMILY_SC = 'SC';
  /**
   * System and information integrity.
   */
  public const FAMILY_SI = 'SI';
  /**
   * Supply chain risk management.
   */
  public const FAMILY_SR = 'SR';
  protected $controlFamilyType = ControlFamily::class;
  protected $controlFamilyDataType = '';
  /**
   * Output only. A description of your responsibility for this control.
   *
   * @var string
   */
  public $customerResponsibilityDescription;
  /**
   * Output only. A description of how you can implement your responsibility for
   * this control.
   *
   * @var string
   */
  public $customerResponsibilityImplementation;
  /**
   * Output only. Description of the control.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Display name of the control.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Category that the control belongs to.
   *
   * @var string
   */
  public $family;
  /**
   * Output only. A description of Google's responsibility for this control.
   *
   * @var string
   */
  public $googleResponsibilityDescription;
  /**
   * Output only. A description of how Google implements its responsibility for
   * this control.
   *
   * @var string
   */
  public $googleResponsibilityImplementation;
  /**
   * Output only. Control identifier that's used to fetch the findings. The
   * identifier is the same as the control report name.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. Who is responsible for implementing this control. Set to one
   * of the following values: `GOOGLE`, `CUSTOMER`, or `SHARED`.
   *
   * @var string
   */
  public $responsibilityType;

  /**
   * Output only. Regulatory family of the control.
   *
   * @param ControlFamily $controlFamily
   */
  public function setControlFamily(ControlFamily $controlFamily)
  {
    $this->controlFamily = $controlFamily;
  }
  /**
   * @return ControlFamily
   */
  public function getControlFamily()
  {
    return $this->controlFamily;
  }
  /**
   * Output only. A description of your responsibility for this control.
   *
   * @param string $customerResponsibilityDescription
   */
  public function setCustomerResponsibilityDescription($customerResponsibilityDescription)
  {
    $this->customerResponsibilityDescription = $customerResponsibilityDescription;
  }
  /**
   * @return string
   */
  public function getCustomerResponsibilityDescription()
  {
    return $this->customerResponsibilityDescription;
  }
  /**
   * Output only. A description of how you can implement your responsibility for
   * this control.
   *
   * @param string $customerResponsibilityImplementation
   */
  public function setCustomerResponsibilityImplementation($customerResponsibilityImplementation)
  {
    $this->customerResponsibilityImplementation = $customerResponsibilityImplementation;
  }
  /**
   * @return string
   */
  public function getCustomerResponsibilityImplementation()
  {
    return $this->customerResponsibilityImplementation;
  }
  /**
   * Output only. Description of the control.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Output only. Display name of the control.
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
   * Output only. Category that the control belongs to.
   *
   * Accepted values: FAMILY_UNSPECIFIED, AC, AT, AU, CA, CM, CP, IA, IR, MA,
   * MP, PE, PL, PS, RA, SA, SC, SI, SR
   *
   * @param self::FAMILY_* $family
   */
  public function setFamily($family)
  {
    $this->family = $family;
  }
  /**
   * @return self::FAMILY_*
   */
  public function getFamily()
  {
    return $this->family;
  }
  /**
   * Output only. A description of Google's responsibility for this control.
   *
   * @param string $googleResponsibilityDescription
   */
  public function setGoogleResponsibilityDescription($googleResponsibilityDescription)
  {
    $this->googleResponsibilityDescription = $googleResponsibilityDescription;
  }
  /**
   * @return string
   */
  public function getGoogleResponsibilityDescription()
  {
    return $this->googleResponsibilityDescription;
  }
  /**
   * Output only. A description of how Google implements its responsibility for
   * this control.
   *
   * @param string $googleResponsibilityImplementation
   */
  public function setGoogleResponsibilityImplementation($googleResponsibilityImplementation)
  {
    $this->googleResponsibilityImplementation = $googleResponsibilityImplementation;
  }
  /**
   * @return string
   */
  public function getGoogleResponsibilityImplementation()
  {
    return $this->googleResponsibilityImplementation;
  }
  /**
   * Output only. Control identifier that's used to fetch the findings. The
   * identifier is the same as the control report name.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. Who is responsible for implementing this control. Set to one
   * of the following values: `GOOGLE`, `CUSTOMER`, or `SHARED`.
   *
   * @param string $responsibilityType
   */
  public function setResponsibilityType($responsibilityType)
  {
    $this->responsibilityType = $responsibilityType;
  }
  /**
   * @return string
   */
  public function getResponsibilityType()
  {
    return $this->responsibilityType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Control::class, 'Google_Service_CloudAuditManager_Control');
