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

namespace Google\Service\DataManager;

class ErrorCount extends \Google\Model
{
  /**
   * The processing error reason is unknown.
   */
  public const REASON_PROCESSING_ERROR_REASON_UNSPECIFIED = 'PROCESSING_ERROR_REASON_UNSPECIFIED';
  /**
   * The custom variable is invalid.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_CUSTOM_VARIABLE = 'PROCESSING_ERROR_REASON_INVALID_CUSTOM_VARIABLE';
  /**
   * The status of the custom variable is not enabled.
   */
  public const REASON_PROCESSING_ERROR_REASON_CUSTOM_VARIABLE_NOT_ENABLED = 'PROCESSING_ERROR_REASON_CUSTOM_VARIABLE_NOT_ENABLED';
  /**
   * The conversion is older than max supported age.
   */
  public const REASON_PROCESSING_ERROR_REASON_EVENT_TOO_OLD = 'PROCESSING_ERROR_REASON_EVENT_TOO_OLD';
  /**
   * The ad user data is denied, either by the user or in the advertiser default
   * settings.
   */
  public const REASON_PROCESSING_ERROR_REASON_DENIED_CONSENT = 'PROCESSING_ERROR_REASON_DENIED_CONSENT';
  /**
   * Advertiser did not give 3P consent for the Ads core platform services.
   */
  public const REASON_PROCESSING_ERROR_REASON_NO_CONSENT = 'PROCESSING_ERROR_REASON_NO_CONSENT';
  /**
   * The overall consent (determined from row level consent, request level
   * consent, and account settings) could not be determined for this user
   */
  public const REASON_PROCESSING_ERROR_REASON_UNKNOWN_CONSENT = 'PROCESSING_ERROR_REASON_UNKNOWN_CONSENT';
  /**
   * A conversion with the same GCLID and conversion time already exists in the
   * system.
   */
  public const REASON_PROCESSING_ERROR_REASON_DUPLICATE_GCLID = 'PROCESSING_ERROR_REASON_DUPLICATE_GCLID';
  /**
   * A conversion with the same order id and conversion action combination was
   * already uploaded.
   */
  public const REASON_PROCESSING_ERROR_REASON_DUPLICATE_TRANSACTION_ID = 'PROCESSING_ERROR_REASON_DUPLICATE_TRANSACTION_ID';
  /**
   * The gbraid could not be decoded.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_GBRAID = 'PROCESSING_ERROR_REASON_INVALID_GBRAID';
  /**
   * The google click ID could not be decoded.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_GCLID = 'PROCESSING_ERROR_REASON_INVALID_GCLID';
  /**
   * Merchant id contains non-digit characters.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_MERCHANT_ID = 'PROCESSING_ERROR_REASON_INVALID_MERCHANT_ID';
  /**
   * The wbraid could not be decoded.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_WBRAID = 'PROCESSING_ERROR_REASON_INVALID_WBRAID';
  /**
   * Internal error.
   */
  public const REASON_PROCESSING_ERROR_REASON_INTERNAL_ERROR = 'PROCESSING_ERROR_REASON_INTERNAL_ERROR';
  /**
   * Enhanced conversions terms are not signed in the destination account.
   */
  public const REASON_PROCESSING_ERROR_REASON_DESTINATION_ACCOUNT_ENHANCED_CONVERSIONS_TERMS_NOT_SIGNED = 'PROCESSING_ERROR_REASON_DESTINATION_ACCOUNT_ENHANCED_CONVERSIONS_TERMS_NOT_SIGNED';
  /**
   * The event is invalid.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_EVENT = 'PROCESSING_ERROR_REASON_INVALID_EVENT';
  /**
   * The matched transactions are less than the minimum threshold.
   */
  public const REASON_PROCESSING_ERROR_REASON_INSUFFICIENT_MATCHED_TRANSACTIONS = 'PROCESSING_ERROR_REASON_INSUFFICIENT_MATCHED_TRANSACTIONS';
  /**
   * The transactions are less than the minimum threshold.
   */
  public const REASON_PROCESSING_ERROR_REASON_INSUFFICIENT_TRANSACTIONS = 'PROCESSING_ERROR_REASON_INSUFFICIENT_TRANSACTIONS';
  /**
   * The event has format error.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_FORMAT = 'PROCESSING_ERROR_REASON_INVALID_FORMAT';
  /**
   * The event has a decryption error.
   */
  public const REASON_PROCESSING_ERROR_REASON_DECRYPTION_ERROR = 'PROCESSING_ERROR_REASON_DECRYPTION_ERROR';
  /**
   * The DEK failed to be decrypted.
   */
  public const REASON_PROCESSING_ERROR_REASON_DEK_DECRYPTION_ERROR = 'PROCESSING_ERROR_REASON_DEK_DECRYPTION_ERROR';
  /**
   * The WIP is formatted incorrectly or the WIP does not exist.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_WIP = 'PROCESSING_ERROR_REASON_INVALID_WIP';
  /**
   * The KEK cannot decrypt data because it is the wrong KEK, or it does not
   * exist.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_KEK = 'PROCESSING_ERROR_REASON_INVALID_KEK';
  /**
   * The WIP could not be used because it was rejected by its attestation
   * condition.
   */
  public const REASON_PROCESSING_ERROR_REASON_WIP_AUTH_FAILED = 'PROCESSING_ERROR_REASON_WIP_AUTH_FAILED';
  /**
   * The system did not have the permissions needed to access the KEK.
   */
  public const REASON_PROCESSING_ERROR_REASON_KEK_PERMISSION_DENIED = 'PROCESSING_ERROR_REASON_KEK_PERMISSION_DENIED';
  /**
   * The system failed to authenticate with AWS.
   */
  public const REASON_PROCESSING_ERROR_REASON_AWS_AUTH_FAILED = 'PROCESSING_ERROR_REASON_AWS_AUTH_FAILED';
  /**
   * Failed to decrypt the UserIdentifier data using the DEK.
   */
  public const REASON_PROCESSING_ERROR_REASON_USER_IDENTIFIER_DECRYPTION_ERROR = 'PROCESSING_ERROR_REASON_USER_IDENTIFIER_DECRYPTION_ERROR';
  /**
   * The user attempted to ingest events with an ad identifier that isn't from
   * the operating account's ads.
   */
  public const REASON_PROCESSING_ERROR_OPERATING_ACCOUNT_MISMATCH_FOR_AD_IDENTIFIER = 'PROCESSING_ERROR_OPERATING_ACCOUNT_MISMATCH_FOR_AD_IDENTIFIER';
  /**
   * One-per-click conversion actions cannot be used with BRAIDs.
   */
  public const REASON_PROCESSING_ERROR_REASON_ONE_PER_CLICK_CONVERSION_ACTION_NOT_PERMITTED_WITH_BRAID = 'PROCESSING_ERROR_REASON_ONE_PER_CLICK_CONVERSION_ACTION_NOT_PERMITTED_WITH_BRAID';
  /**
   * The match ID can not be found.
   */
  public const REASON_PROCESSING_ERROR_REASON_MATCH_ID_NOT_FOUND = 'PROCESSING_ERROR_REASON_MATCH_ID_NOT_FOUND';
  /**
   * The user ID can not be found for the match ID.
   */
  public const REASON_PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_MATCH_ID = 'PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_MATCH_ID';
  /**
   * The user ID can not be found for the GCLID.
   */
  public const REASON_PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_GCLID = 'PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_GCLID';
  /**
   * The user ID can not be found for the DCLID.
   */
  public const REASON_PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_DCLID = 'PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_DCLID';
  /**
   * There are ad identifiers that are invalid.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_AD_IDENTIFIERS = 'PROCESSING_ERROR_REASON_INVALID_AD_IDENTIFIERS';
  /**
   * The mobile ID format is invalid.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_MOBILE_ID_FORMAT = 'PROCESSING_ERROR_REASON_INVALID_MOBILE_ID_FORMAT';
  /**
   * The original conversions can't be found.
   */
  public const REASON_PROCESSING_ERROR_REASON_ORIGINAL_CONVERSIONS_NOT_FOUND = 'PROCESSING_ERROR_REASON_ORIGINAL_CONVERSIONS_NOT_FOUND';
  /**
   * The event ID (dclid or impression ID) cannot be decoded.
   */
  public const REASON_PROCESSING_ERROR_REASON_EVENT_ID_DECODE_ERROR = 'PROCESSING_ERROR_REASON_EVENT_ID_DECODE_ERROR';
  /**
   * The user ID cannot be found for the given impression ID.
   */
  public const REASON_PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_IMPRESSION_ID = 'PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_IMPRESSION_ID';
  /**
   * The user ID cannot be found.
   */
  public const REASON_PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND = 'PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND';
  /**
   * The event timestamp on the event was earlier than the associated click.
   */
  public const REASON_PROCESSING_ERROR_REASON_CONVERSION_PRECEDES_CLICK = 'PROCESSING_ERROR_REASON_CONVERSION_PRECEDES_CLICK';
  /**
   * The click occurred too recently.
   */
  public const REASON_PROCESSING_ERROR_REASON_TOO_RECENT_CLICK = 'PROCESSING_ERROR_REASON_TOO_RECENT_CLICK';
  /**
   * The event can't be attributed to a click (GCLID). This may be because the
   * click did not come from a Google Ads campaign, for example.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_CLICK = 'PROCESSING_ERROR_REASON_INVALID_CLICK';
  /**
   * The click from the event isn't associated with the `operating_account` of
   * the destination.
   */
  public const REASON_PROCESSING_ERROR_REASON_INVALID_OPERATING_ACCOUNT_FOR_CLICK = 'PROCESSING_ERROR_REASON_INVALID_OPERATING_ACCOUNT_FOR_CLICK';
  /**
   * A corresponding click can't be found that matches the provided attributes.
   */
  public const REASON_PROCESSING_ERROR_REASON_CLICK_NOT_FOUND = 'PROCESSING_ERROR_REASON_CLICK_NOT_FOUND';
  /**
   * The error reason of the failed records.
   *
   * @var string
   */
  public $reason;
  /**
   * The count of records that failed to upload for a given reason.
   *
   * @var string
   */
  public $recordCount;

  /**
   * The error reason of the failed records.
   *
   * Accepted values: PROCESSING_ERROR_REASON_UNSPECIFIED,
   * PROCESSING_ERROR_REASON_INVALID_CUSTOM_VARIABLE,
   * PROCESSING_ERROR_REASON_CUSTOM_VARIABLE_NOT_ENABLED,
   * PROCESSING_ERROR_REASON_EVENT_TOO_OLD,
   * PROCESSING_ERROR_REASON_DENIED_CONSENT, PROCESSING_ERROR_REASON_NO_CONSENT,
   * PROCESSING_ERROR_REASON_UNKNOWN_CONSENT,
   * PROCESSING_ERROR_REASON_DUPLICATE_GCLID,
   * PROCESSING_ERROR_REASON_DUPLICATE_TRANSACTION_ID,
   * PROCESSING_ERROR_REASON_INVALID_GBRAID,
   * PROCESSING_ERROR_REASON_INVALID_GCLID,
   * PROCESSING_ERROR_REASON_INVALID_MERCHANT_ID,
   * PROCESSING_ERROR_REASON_INVALID_WBRAID,
   * PROCESSING_ERROR_REASON_INTERNAL_ERROR, PROCESSING_ERROR_REASON_DESTINATION
   * _ACCOUNT_ENHANCED_CONVERSIONS_TERMS_NOT_SIGNED,
   * PROCESSING_ERROR_REASON_INVALID_EVENT,
   * PROCESSING_ERROR_REASON_INSUFFICIENT_MATCHED_TRANSACTIONS,
   * PROCESSING_ERROR_REASON_INSUFFICIENT_TRANSACTIONS,
   * PROCESSING_ERROR_REASON_INVALID_FORMAT,
   * PROCESSING_ERROR_REASON_DECRYPTION_ERROR,
   * PROCESSING_ERROR_REASON_DEK_DECRYPTION_ERROR,
   * PROCESSING_ERROR_REASON_INVALID_WIP, PROCESSING_ERROR_REASON_INVALID_KEK,
   * PROCESSING_ERROR_REASON_WIP_AUTH_FAILED,
   * PROCESSING_ERROR_REASON_KEK_PERMISSION_DENIED,
   * PROCESSING_ERROR_REASON_AWS_AUTH_FAILED,
   * PROCESSING_ERROR_REASON_USER_IDENTIFIER_DECRYPTION_ERROR,
   * PROCESSING_ERROR_OPERATING_ACCOUNT_MISMATCH_FOR_AD_IDENTIFIER, PROCESSING_E
   * RROR_REASON_ONE_PER_CLICK_CONVERSION_ACTION_NOT_PERMITTED_WITH_BRAID,
   * PROCESSING_ERROR_REASON_MATCH_ID_NOT_FOUND,
   * PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_MATCH_ID,
   * PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_GCLID,
   * PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_DCLID,
   * PROCESSING_ERROR_REASON_INVALID_AD_IDENTIFIERS,
   * PROCESSING_ERROR_REASON_INVALID_MOBILE_ID_FORMAT,
   * PROCESSING_ERROR_REASON_ORIGINAL_CONVERSIONS_NOT_FOUND,
   * PROCESSING_ERROR_REASON_EVENT_ID_DECODE_ERROR,
   * PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND_FOR_IMPRESSION_ID,
   * PROCESSING_ERROR_REASON_USER_ID_NOT_FOUND,
   * PROCESSING_ERROR_REASON_CONVERSION_PRECEDES_CLICK,
   * PROCESSING_ERROR_REASON_TOO_RECENT_CLICK,
   * PROCESSING_ERROR_REASON_INVALID_CLICK,
   * PROCESSING_ERROR_REASON_INVALID_OPERATING_ACCOUNT_FOR_CLICK,
   * PROCESSING_ERROR_REASON_CLICK_NOT_FOUND
   *
   * @param self::REASON_* $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return self::REASON_*
   */
  public function getReason()
  {
    return $this->reason;
  }
  /**
   * The count of records that failed to upload for a given reason.
   *
   * @param string $recordCount
   */
  public function setRecordCount($recordCount)
  {
    $this->recordCount = $recordCount;
  }
  /**
   * @return string
   */
  public function getRecordCount()
  {
    return $this->recordCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ErrorCount::class, 'Google_Service_DataManager_ErrorCount');
