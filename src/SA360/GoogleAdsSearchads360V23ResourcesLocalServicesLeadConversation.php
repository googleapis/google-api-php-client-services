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

class GoogleAdsSearchads360V23ResourcesLocalServicesLeadConversation extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CONVERSATION_CHANNEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CONVERSATION_CHANNEL_UNKNOWN = 'UNKNOWN';
  /**
   * Email lead conversation.
   */
  public const CONVERSATION_CHANNEL_EMAIL = 'EMAIL';
  /**
   * Message lead conversation.
   */
  public const CONVERSATION_CHANNEL_MESSAGE = 'MESSAGE';
  /**
   * Phone call lead conversation.
   */
  public const CONVERSATION_CHANNEL_PHONE_CALL = 'PHONE_CALL';
  /**
   * SMS lead conversation.
   */
  public const CONVERSATION_CHANNEL_SMS = 'SMS';
  /**
   * Booking lead conversation.
   */
  public const CONVERSATION_CHANNEL_BOOKING = 'BOOKING';
  /**
   * WhatsApp lead conversation.
   */
  public const CONVERSATION_CHANNEL_WHATSAPP = 'WHATSAPP';
  /**
   * Lead conversation created through Google Ads API.
   */
  public const CONVERSATION_CHANNEL_ADS_API = 'ADS_API';
  /**
   * Not specified.
   */
  public const PARTICIPANT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PARTICIPANT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Local Services Ads Provider participant.
   */
  public const PARTICIPANT_TYPE_ADVERTISER = 'ADVERTISER';
  /**
   * Local Services Ads Consumer participant.
   */
  public const PARTICIPANT_TYPE_CONSUMER = 'CONSUMER';
  /**
   * Output only. Type of GLS lead conversation, EMAIL, MESSAGE, PHONE_CALL,
   * SMS, etc.
   *
   * @var string
   */
  public $conversationChannel;
  /**
   * Output only. The date time at which lead conversation was created by Local
   * Services Ads. The format is "YYYY-MM-DD HH:MM:SS" in the Google Ads
   * account's timezone. Examples: "2018-03-05 09:15:00" or "2018-02-01
   * 14:34:30"
   *
   * @var string
   */
  public $eventDateTime;
  /**
   * Output only. ID of this Lead Conversation.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. Resource name of Lead associated to the Lead Conversation.
   *
   * @var string
   */
  public $lead;
  protected $messageDetailsType = GoogleAdsSearchads360V23ResourcesMessageDetails::class;
  protected $messageDetailsDataType = '';
  /**
   * Output only. Type of participant in the lead conversation, ADVERTISER or
   * CONSUMER.
   *
   * @var string
   */
  public $participantType;
  protected $phoneCallDetailsType = GoogleAdsSearchads360V23ResourcesPhoneCallDetails::class;
  protected $phoneCallDetailsDataType = '';
  /**
   * Output only. The resource name of the local services lead conversation
   * data. Local Services Lead Conversation resource name have the form `custome
   * rs/{customer_id}/localServicesLeadConversation/{local_services_lead_convers
   * ation_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. Type of GLS lead conversation, EMAIL, MESSAGE, PHONE_CALL,
   * SMS, etc.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EMAIL, MESSAGE, PHONE_CALL, SMS,
   * BOOKING, WHATSAPP, ADS_API
   *
   * @param self::CONVERSATION_CHANNEL_* $conversationChannel
   */
  public function setConversationChannel($conversationChannel)
  {
    $this->conversationChannel = $conversationChannel;
  }
  /**
   * @return self::CONVERSATION_CHANNEL_*
   */
  public function getConversationChannel()
  {
    return $this->conversationChannel;
  }
  /**
   * Output only. The date time at which lead conversation was created by Local
   * Services Ads. The format is "YYYY-MM-DD HH:MM:SS" in the Google Ads
   * account's timezone. Examples: "2018-03-05 09:15:00" or "2018-02-01
   * 14:34:30"
   *
   * @param string $eventDateTime
   */
  public function setEventDateTime($eventDateTime)
  {
    $this->eventDateTime = $eventDateTime;
  }
  /**
   * @return string
   */
  public function getEventDateTime()
  {
    return $this->eventDateTime;
  }
  /**
   * Output only. ID of this Lead Conversation.
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
   * Output only. Resource name of Lead associated to the Lead Conversation.
   *
   * @param string $lead
   */
  public function setLead($lead)
  {
    $this->lead = $lead;
  }
  /**
   * @return string
   */
  public function getLead()
  {
    return $this->lead;
  }
  /**
   * Output only. Details of message conversation in case of EMAIL, MESSAGE or
   * SMS.
   *
   * @param GoogleAdsSearchads360V23ResourcesMessageDetails $messageDetails
   */
  public function setMessageDetails(GoogleAdsSearchads360V23ResourcesMessageDetails $messageDetails)
  {
    $this->messageDetails = $messageDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMessageDetails
   */
  public function getMessageDetails()
  {
    return $this->messageDetails;
  }
  /**
   * Output only. Type of participant in the lead conversation, ADVERTISER or
   * CONSUMER.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ADVERTISER, CONSUMER
   *
   * @param self::PARTICIPANT_TYPE_* $participantType
   */
  public function setParticipantType($participantType)
  {
    $this->participantType = $participantType;
  }
  /**
   * @return self::PARTICIPANT_TYPE_*
   */
  public function getParticipantType()
  {
    return $this->participantType;
  }
  /**
   * Output only. Details of phone call conversation in case of PHONE_CALL.
   *
   * @param GoogleAdsSearchads360V23ResourcesPhoneCallDetails $phoneCallDetails
   */
  public function setPhoneCallDetails(GoogleAdsSearchads360V23ResourcesPhoneCallDetails $phoneCallDetails)
  {
    $this->phoneCallDetails = $phoneCallDetails;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesPhoneCallDetails
   */
  public function getPhoneCallDetails()
  {
    return $this->phoneCallDetails;
  }
  /**
   * Output only. The resource name of the local services lead conversation
   * data. Local Services Lead Conversation resource name have the form `custome
   * rs/{customer_id}/localServicesLeadConversation/{local_services_lead_convers
   * ation_id}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesLocalServicesLeadConversation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesLocalServicesLeadConversation');
