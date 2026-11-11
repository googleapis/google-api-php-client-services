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

namespace Google\Service\CCAIPlatform;

class PhoneNumber extends \Google\Model
{
  /**
   * Unspecified assignment state.
   */
  public const ASSIGNMENT_STATE_ASSIGNMENT_STATE_UNSPECIFIED = 'ASSIGNMENT_STATE_UNSPECIFIED';
  /**
   * Unassigned / in inventory pool.
   */
  public const ASSIGNMENT_STATE_ASSIGNMENT_STATE_UNASSIGNED = 'ASSIGNMENT_STATE_UNASSIGNED';
  /**
   * Actively assigned to the tenant.
   */
  public const ASSIGNMENT_STATE_ASSIGNMENT_STATE_ASSIGNED = 'ASSIGNMENT_STATE_ASSIGNED';
  /**
   * Soft-deleted / in cooling-off period (still billed).
   */
  public const ASSIGNMENT_STATE_ASSIGNMENT_STATE_COOLING_OFF = 'ASSIGNMENT_STATE_COOLING_OFF';
  /**
   * Port-in in progress.
   */
  public const ASSIGNMENT_STATE_ASSIGNMENT_STATE_PORTING_IN = 'ASSIGNMENT_STATE_PORTING_IN';
  /**
   * Permanently released from active use.
   */
  public const ASSIGNMENT_STATE_ASSIGNMENT_STATE_RELEASED = 'ASSIGNMENT_STATE_RELEASED';
  /**
   * Unspecified carrier.
   */
  public const CARRIER_CARRIER_UNSPECIFIED = 'CARRIER_UNSPECIFIED';
  /**
   * Twilio carrier.
   */
  public const CARRIER_CARRIER_TWILIO = 'CARRIER_TWILIO';
  /**
   * Vonage (Nexmo) carrier.
   */
  public const CARRIER_CARRIER_VONAGE = 'CARRIER_VONAGE';
  /**
   * Telnyx carrier.
   */
  public const CARRIER_CARRIER_TELNYX = 'CARRIER_TELNYX';
  /**
   * Google Telephony Platform (GTP) carrier.
   */
  public const CARRIER_CARRIER_GTP = 'CARRIER_GTP';
  /**
   * Unspecified compliance state.
   */
  public const COMPLIANCE_STATE_COMPLIANCE_STATE_UNSPECIFIED = 'COMPLIANCE_STATE_UNSPECIFIED';
  /**
   * Regulatory bundle verified and approved.
   */
  public const COMPLIANCE_STATE_COMPLIANCE_STATE_VERIFIED = 'COMPLIANCE_STATE_VERIFIED';
  /**
   * Pre-existing phone number exempt from document backfill.
   */
  public const COMPLIANCE_STATE_COMPLIANCE_STATE_LEGACY_VERIFIED = 'COMPLIANCE_STATE_LEGACY_VERIFIED';
  /**
   * Regulatory bundle pending review.
   */
  public const COMPLIANCE_STATE_COMPLIANCE_STATE_PENDING = 'COMPLIANCE_STATE_PENDING';
  /**
   * Regulatory bundle rejected.
   */
  public const COMPLIANCE_STATE_COMPLIANCE_STATE_REJECTED = 'COMPLIANCE_STATE_REJECTED';
  /**
   * Unspecified number type.
   */
  public const NUMBER_TYPE_NUMBER_TYPE_UNSPECIFIED = 'NUMBER_TYPE_UNSPECIFIED';
  /**
   * Local / geographic number.
   */
  public const NUMBER_TYPE_NUMBER_TYPE_LOCAL = 'NUMBER_TYPE_LOCAL';
  /**
   * Toll-free number.
   */
  public const NUMBER_TYPE_NUMBER_TYPE_TOLL_FREE = 'NUMBER_TYPE_TOLL_FREE';
  /**
   * Mobile number.
   */
  public const NUMBER_TYPE_NUMBER_TYPE_MOBILE = 'NUMBER_TYPE_MOBILE';
  /**
   * National non-geographic number.
   */
  public const NUMBER_TYPE_NUMBER_TYPE_NATIONAL = 'NUMBER_TYPE_NATIONAL';
  /**
   * Unspecified SMS state.
   */
  public const SMS_STATE_SMS_STATE_UNSPECIFIED = 'SMS_STATE_UNSPECIFIED';
  /**
   * SMS is disabled.
   */
  public const SMS_STATE_SMS_STATE_DISABLED = 'SMS_STATE_DISABLED';
  /**
   * SMS is enabled and active.
   */
  public const SMS_STATE_SMS_STATE_ENABLED = 'SMS_STATE_ENABLED';
  /**
   * SMS is pending campaign registration.
   */
  public const SMS_STATE_SMS_STATE_PENDING_REGISTRATION = 'SMS_STATE_PENDING_REGISTRATION';
  /**
   * Output only. Current assignment and lifecycle state.
   *
   * @var string
   */
  public $assignmentState;
  /**
   * Output only. Underlying carrier hosting the number.
   *
   * @var string
   */
  public $carrier;
  /**
   * Output only. Regulatory compliance state.
   *
   * @var string
   */
  public $complianceState;
  /**
   * Output only. ISO 3166-1 alpha-2 country code (e.g., "US", "GB", "IT").
   *
   * @var string
   */
  public $countryCode;
  /**
   * Output only. Timestamp when the phone number was added to the tenant.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Tariff and routing classification.
   *
   * @var string
   */
  public $numberType;
  /**
   * Output only. E.164 formatted phone number (e.g., "+16502530000").
   *
   * @var string
   */
  public $phoneNumber;
  /**
   * Output only. Reference ID for the country-specific regulatory bundle, or
   * "LEGACY_VERIFIED".
   *
   * @var string
   */
  public $regulatoryBundleId;
  /**
   * Output only. SMS capability state.
   *
   * @var string
   */
  public $smsState;
  /**
   * Output only. Timestamp when the phone number record was last modified.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. Whether voice capabilities are enabled for this phone number.
   *
   * @var bool
   */
  public $voiceEnabled;

  /**
   * Output only. Current assignment and lifecycle state.
   *
   * Accepted values: ASSIGNMENT_STATE_UNSPECIFIED, ASSIGNMENT_STATE_UNASSIGNED,
   * ASSIGNMENT_STATE_ASSIGNED, ASSIGNMENT_STATE_COOLING_OFF,
   * ASSIGNMENT_STATE_PORTING_IN, ASSIGNMENT_STATE_RELEASED
   *
   * @param self::ASSIGNMENT_STATE_* $assignmentState
   */
  public function setAssignmentState($assignmentState)
  {
    $this->assignmentState = $assignmentState;
  }
  /**
   * @return self::ASSIGNMENT_STATE_*
   */
  public function getAssignmentState()
  {
    return $this->assignmentState;
  }
  /**
   * Output only. Underlying carrier hosting the number.
   *
   * Accepted values: CARRIER_UNSPECIFIED, CARRIER_TWILIO, CARRIER_VONAGE,
   * CARRIER_TELNYX, CARRIER_GTP
   *
   * @param self::CARRIER_* $carrier
   */
  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }
  /**
   * @return self::CARRIER_*
   */
  public function getCarrier()
  {
    return $this->carrier;
  }
  /**
   * Output only. Regulatory compliance state.
   *
   * Accepted values: COMPLIANCE_STATE_UNSPECIFIED, COMPLIANCE_STATE_VERIFIED,
   * COMPLIANCE_STATE_LEGACY_VERIFIED, COMPLIANCE_STATE_PENDING,
   * COMPLIANCE_STATE_REJECTED
   *
   * @param self::COMPLIANCE_STATE_* $complianceState
   */
  public function setComplianceState($complianceState)
  {
    $this->complianceState = $complianceState;
  }
  /**
   * @return self::COMPLIANCE_STATE_*
   */
  public function getComplianceState()
  {
    return $this->complianceState;
  }
  /**
   * Output only. ISO 3166-1 alpha-2 country code (e.g., "US", "GB", "IT").
   *
   * @param string $countryCode
   */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /**
   * @return string
   */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /**
   * Output only. Timestamp when the phone number was added to the tenant.
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
   * Output only. Tariff and routing classification.
   *
   * Accepted values: NUMBER_TYPE_UNSPECIFIED, NUMBER_TYPE_LOCAL,
   * NUMBER_TYPE_TOLL_FREE, NUMBER_TYPE_MOBILE, NUMBER_TYPE_NATIONAL
   *
   * @param self::NUMBER_TYPE_* $numberType
   */
  public function setNumberType($numberType)
  {
    $this->numberType = $numberType;
  }
  /**
   * @return self::NUMBER_TYPE_*
   */
  public function getNumberType()
  {
    return $this->numberType;
  }
  /**
   * Output only. E.164 formatted phone number (e.g., "+16502530000").
   *
   * @param string $phoneNumber
   */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  /**
   * @return string
   */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  /**
   * Output only. Reference ID for the country-specific regulatory bundle, or
   * "LEGACY_VERIFIED".
   *
   * @param string $regulatoryBundleId
   */
  public function setRegulatoryBundleId($regulatoryBundleId)
  {
    $this->regulatoryBundleId = $regulatoryBundleId;
  }
  /**
   * @return string
   */
  public function getRegulatoryBundleId()
  {
    return $this->regulatoryBundleId;
  }
  /**
   * Output only. SMS capability state.
   *
   * Accepted values: SMS_STATE_UNSPECIFIED, SMS_STATE_DISABLED,
   * SMS_STATE_ENABLED, SMS_STATE_PENDING_REGISTRATION
   *
   * @param self::SMS_STATE_* $smsState
   */
  public function setSmsState($smsState)
  {
    $this->smsState = $smsState;
  }
  /**
   * @return self::SMS_STATE_*
   */
  public function getSmsState()
  {
    return $this->smsState;
  }
  /**
   * Output only. Timestamp when the phone number record was last modified.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * Output only. Whether voice capabilities are enabled for this phone number.
   *
   * @param bool $voiceEnabled
   */
  public function setVoiceEnabled($voiceEnabled)
  {
    $this->voiceEnabled = $voiceEnabled;
  }
  /**
   * @return bool
   */
  public function getVoiceEnabled()
  {
    return $this->voiceEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PhoneNumber::class, 'Google_Service_CCAIPlatform_PhoneNumber');
