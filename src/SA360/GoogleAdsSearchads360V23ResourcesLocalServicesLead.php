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

class GoogleAdsSearchads360V23ResourcesLocalServicesLead extends \Google\Model
{
  /**
   * Not specified.
   */
  public const LEAD_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const LEAD_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * New lead which hasn't yet been seen by advertiser.
   */
  public const LEAD_STATUS_NEW = 'NEW';
  /**
   * Lead that thas been interacted by advertiser.
   */
  public const LEAD_STATUS_ACTIVE = 'ACTIVE';
  /**
   * Lead has been booked.
   */
  public const LEAD_STATUS_BOOKED = 'BOOKED';
  /**
   * Lead was declined by advertiser.
   */
  public const LEAD_STATUS_DECLINED = 'DECLINED';
  /**
   * Lead has expired due to inactivity.
   */
  public const LEAD_STATUS_EXPIRED = 'EXPIRED';
  /**
   * Disabled due to spam or dispute.
   */
  public const LEAD_STATUS_DISABLED = 'DISABLED';
  /**
   * Consumer declined the lead.
   */
  public const LEAD_STATUS_CONSUMER_DECLINED = 'CONSUMER_DECLINED';
  /**
   * Personally Identifiable Information of the lead is wiped out.
   */
  public const LEAD_STATUS_WIPED_OUT = 'WIPED_OUT';
  /**
   * Not specified.
   */
  public const LEAD_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const LEAD_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Message lead.
   */
  public const LEAD_TYPE_MESSAGE = 'MESSAGE';
  /**
   * Lead created by phone call.
   */
  public const LEAD_TYPE_PHONE_CALL = 'PHONE_CALL';
  /**
   * Booking lead.
   */
  public const LEAD_TYPE_BOOKING = 'BOOKING';
  /**
   * Output only. Service category of the lead. For example:
   * `xcat:service_area_business_hvac`,
   * `xcat:service_area_business_real_estate_agent`, etc. For more details see:
   * https://developers.google.com/google-ads/api/data/codes-
   * formats#local_services_ids
   *
   * @var string
   */
  public $categoryId;
  protected $contactDetailsType = GoogleAdsSearchads360V23ResourcesContactDetails::class;
  protected $contactDetailsDataType = '';
  /**
   * Output only. The date time at which lead was created by Local Services Ads.
   * The format is "YYYY-MM-DD HH:MM:SS" in the Google Ads account's timezone.
   * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
   *
   * @var string
   */
  public $creationDateTime;
  protected $creditDetailsType = GoogleAdsSearchads360V23ResourcesCreditDetails::class;
  protected $creditDetailsDataType = '';
  /**
   * Output only. ID of this Lead.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. True if the advertiser was charged for the lead.
   *
   * @var bool
   */
  public $leadCharged;
  /**
   * Output only. True if the advertiser submitted feedback for the lead.
   *
   * @var bool
   */
  public $leadFeedbackSubmitted;
  /**
   * Output only. Current status of lead.
   *
   * @var string
   */
  public $leadStatus;
  /**
   * Output only. Type of Local Services lead: phone, message, booking, etc.
   *
   * @var string
   */
  public $leadType;
  /**
   * Output only. Language used by the Local Services provider linked to lead.
   * See https://developers.google.com/google-ads/api/data/codes-formats#locales
   *
   * @var string
   */
  public $locale;
  protected $noteType = GoogleAdsSearchads360V23ResourcesNote::class;
  protected $noteDataType = '';
  /**
   * Immutable. The resource name of the local services lead data. Local
   * Services Lead resource name have the form
   * `customers/{customer_id}/localServicesLead/{local_services_lead_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Service for the category. For example: `buyer_agent`,
   * `seller_agent` for the category of
   * `xcat:service_area_business_real_estate_agent`.
   *
   * @var string
   */
  public $serviceId;

  /**
   * Output only. Service category of the lead. For example:
   * `xcat:service_area_business_hvac`,
   * `xcat:service_area_business_real_estate_agent`, etc. For more details see:
   * https://developers.google.com/google-ads/api/data/codes-
   * formats#local_services_ids
   *
   * @param string $categoryId
   */
  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  /**
   * @return string
   */
  public function getCategoryId()
  {
    return $this->categoryId;
  }
  /**
   * Output only. Lead's contact details.
   *
   * @param GoogleAdsSearchads360V23ResourcesContactDetails $contactDetails
   */
  public function setContactDetails(GoogleAdsSearchads360V23ResourcesContactDetails $contactDetails)
  {
    $this->contactDetails = $contactDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesContactDetails
   */
  public function getContactDetails()
  {
    return $this->contactDetails;
  }
  /**
   * Output only. The date time at which lead was created by Local Services Ads.
   * The format is "YYYY-MM-DD HH:MM:SS" in the Google Ads account's timezone.
   * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
   *
   * @param string $creationDateTime
   */
  public function setCreationDateTime($creationDateTime)
  {
    $this->creationDateTime = $creationDateTime;
  }
  /**
   * @return string
   */
  public function getCreationDateTime()
  {
    return $this->creationDateTime;
  }
  /**
   * Output only. Credit details of the lead.
   *
   * @param GoogleAdsSearchads360V23ResourcesCreditDetails $creditDetails
   */
  public function setCreditDetails(GoogleAdsSearchads360V23ResourcesCreditDetails $creditDetails)
  {
    $this->creditDetails = $creditDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCreditDetails
   */
  public function getCreditDetails()
  {
    return $this->creditDetails;
  }
  /**
   * Output only. ID of this Lead.
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
   * Output only. True if the advertiser was charged for the lead.
   *
   * @param bool $leadCharged
   */
  public function setLeadCharged($leadCharged)
  {
    $this->leadCharged = $leadCharged;
  }
  /**
   * @return bool
   */
  public function getLeadCharged()
  {
    return $this->leadCharged;
  }
  /**
   * Output only. True if the advertiser submitted feedback for the lead.
   *
   * @param bool $leadFeedbackSubmitted
   */
  public function setLeadFeedbackSubmitted($leadFeedbackSubmitted)
  {
    $this->leadFeedbackSubmitted = $leadFeedbackSubmitted;
  }
  /**
   * @return bool
   */
  public function getLeadFeedbackSubmitted()
  {
    return $this->leadFeedbackSubmitted;
  }
  /**
   * Output only. Current status of lead.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NEW, ACTIVE, BOOKED, DECLINED,
   * EXPIRED, DISABLED, CONSUMER_DECLINED, WIPED_OUT
   *
   * @param self::LEAD_STATUS_* $leadStatus
   */
  public function setLeadStatus($leadStatus)
  {
    $this->leadStatus = $leadStatus;
  }
  /**
   * @return self::LEAD_STATUS_*
   */
  public function getLeadStatus()
  {
    return $this->leadStatus;
  }
  /**
   * Output only. Type of Local Services lead: phone, message, booking, etc.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MESSAGE, PHONE_CALL, BOOKING
   *
   * @param self::LEAD_TYPE_* $leadType
   */
  public function setLeadType($leadType)
  {
    $this->leadType = $leadType;
  }
  /**
   * @return self::LEAD_TYPE_*
   */
  public function getLeadType()
  {
    return $this->leadType;
  }
  /**
   * Output only. Language used by the Local Services provider linked to lead.
   * See https://developers.google.com/google-ads/api/data/codes-formats#locales
   *
   * @param string $locale
   */
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /**
   * @return string
   */
  public function getLocale()
  {
    return $this->locale;
  }
  /**
   * Output only. Note added by advertiser for the lead.
   *
   * @param GoogleAdsSearchads360V23ResourcesNote $note
   */
  public function setNote(GoogleAdsSearchads360V23ResourcesNote $note)
  {
    $this->note = $note;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesNote
   */
  public function getNote()
  {
    return $this->note;
  }
  /**
   * Immutable. The resource name of the local services lead data. Local
   * Services Lead resource name have the form
   * `customers/{customer_id}/localServicesLead/{local_services_lead_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. Service for the category. For example: `buyer_agent`,
   * `seller_agent` for the category of
   * `xcat:service_area_business_real_estate_agent`.
   *
   * @param string $serviceId
   */
  public function setServiceId($serviceId)
  {
    $this->serviceId = $serviceId;
  }
  /**
   * @return string
   */
  public function getServiceId()
  {
    return $this->serviceId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesLocalServicesLead::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesLocalServicesLead');
