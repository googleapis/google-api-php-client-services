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

class GoogleAdsSearchads360V23ResourcesOfflineConversionError extends \Google\Model
{
  /**
   * Enum unspecified.
   */
  public const COLLECTION_SIZE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const COLLECTION_SIZE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Too few.
   */
  public const COLLECTION_SIZE_ERROR_TOO_FEW = 'TOO_FEW';
  /**
   * Too many.
   */
  public const COLLECTION_SIZE_ERROR_TOO_MANY = 'TOO_MANY';
  /**
   * Not specified.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Can't import events to a conversion action that was just created. Try
   * importing again in 6 hours.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_TOO_RECENT_CONVERSION_ACTION = 'TOO_RECENT_CONVERSION_ACTION';
  /**
   * The conversion was already retracted. This adjustment was not processed.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_CONVERSION_ALREADY_RETRACTED = 'CONVERSION_ALREADY_RETRACTED';
  /**
   * The conversion for this conversion action and conversion identifier can't
   * be found. Make sure your conversion identifiers are associated with the
   * correct conversion action and try again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_CONVERSION_NOT_FOUND = 'CONVERSION_NOT_FOUND';
  /**
   * Adjustment can't be made to a conversion that occurred more than 54 days
   * ago.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_CONVERSION_EXPIRED = 'CONVERSION_EXPIRED';
  /**
   * Adjustment has an `adjustment_date_time` that occurred before the
   * associated conversion. Make sure your `adjustment_date_time` is correct and
   * try again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_ADJUSTMENT_PRECEDES_CONVERSION = 'ADJUSTMENT_PRECEDES_CONVERSION';
  /**
   * More recent adjustment `adjustment_date_time` has already been reported for
   * the associated conversion. Make sure your adjustment `adjustment_date_time`
   * is correct and try again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_MORE_RECENT_RESTATEMENT_FOUND = 'MORE_RECENT_RESTATEMENT_FOUND';
  /**
   * Adjustment can't be recorded because the conversion occurred too recently.
   * Try adjusting a conversion that occurred at least 24 hours ago.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_TOO_RECENT_CONVERSION = 'TOO_RECENT_CONVERSION';
  /**
   * Can't make an adjustment to a conversion that is set up to use the default
   * value. Check your conversion action value setting and try again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE = 'CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE';
  /**
   * Try uploading fewer than 2001 adjustments in a single API request.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_TOO_MANY_ADJUSTMENTS_IN_REQUEST = 'TOO_MANY_ADJUSTMENTS_IN_REQUEST';
  /**
   * The conversion has already been adjusted the maximum number of times. Make
   * sure you're only making necessary adjustment to existing conversion.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_TOO_MANY_ADJUSTMENTS = 'TOO_MANY_ADJUSTMENTS';
  /**
   * The conversion has prior a restatement with the same
   * `adjustment_date_time`. Make sure your adjustment has the correct and
   * unique `adjustment_date_time` and try again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_RESTATEMENT_ALREADY_EXISTS = 'RESTATEMENT_ALREADY_EXISTS';
  /**
   * Imported adjustment has a duplicate conversion adjustment with same
   * `adjustment_date_time`. Make sure your adjustment has the correct
   * `adjustment_date_time` and try again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_DUPLICATE_ADJUSTMENT_IN_REQUEST = 'DUPLICATE_ADJUSTMENT_IN_REQUEST';
  /**
   * Make sure you agree to the customer data processing terms in conversion
   * settings and try again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS = 'CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS';
  /**
   * Can't use enhanced conversions with the specified conversion action.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_CONVERSION_ACTION_NOT_ELIGIBLE_FOR_ENHANCEMENT = 'CONVERSION_ACTION_NOT_ELIGIBLE_FOR_ENHANCEMENT';
  /**
   * Make sure you hash user provided data using SHA-256 and ensure you are
   * normalizing according to the guidelines.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_INVALID_USER_IDENTIFIER = 'INVALID_USER_IDENTIFIER';
  /**
   * Use user provided data such as emails or phone numbers hashed using SHA-256
   * and try again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_UNSUPPORTED_USER_IDENTIFIER = 'UNSUPPORTED_USER_IDENTIFIER';
  /**
   * Cannot set both gclid_date_time_pair and order_id. Use only 1 type and try
   * again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_GCLID_DATE_TIME_PAIR_AND_ORDER_ID_BOTH_SET = 'GCLID_DATE_TIME_PAIR_AND_ORDER_ID_BOTH_SET';
  /**
   * Conversion already has enhancements with the same Order ID and conversion
   * action. Make sure your data is correctly configured and try again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_CONVERSION_ALREADY_ENHANCED = 'CONVERSION_ALREADY_ENHANCED';
  /**
   * Multiple enhancements have the same conversion action and Order ID. Make
   * sure your data is correctly configured and try again.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_DUPLICATE_ENHANCEMENT_IN_REQUEST = 'DUPLICATE_ENHANCEMENT_IN_REQUEST';
  /**
   * Enhanced conversions can't be used for this account because of Google
   * customer data policies. Contact your Google representative.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_CUSTOMER_DATA_POLICY_PROHIBITS_ENHANCEMENT = 'CUSTOMER_DATA_POLICY_PROHIBITS_ENHANCEMENT';
  /**
   * Adjustment for website conversion requires Order ID (ie, transaction ID).
   * Make sure your website tags capture Order IDs and you send the same Order
   * IDs with your adjustment.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_MISSING_ORDER_ID_FOR_WEBPAGE = 'MISSING_ORDER_ID_FOR_WEBPAGE';
  /**
   * Can't use adjustment with Order IDs containing personally-identifiable
   * information (PII).
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_ORDER_ID_CONTAINS_PII = 'ORDER_ID_CONTAINS_PII';
  /**
   * The provided job id in the request is not within the allowed range. A job
   * ID must be a positive integer in the range [1, 2^31).
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_INVALID_JOB_ID = 'INVALID_JOB_ID';
  /**
   * The conversion action specified in the adjustment request cannot be found.
   * Make sure it's available in this account.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_NO_CONVERSION_ACTION_FOUND = 'NO_CONVERSION_ACTION_FOUND';
  /**
   * The type of the conversion action specified in the adjustment request isn't
   * supported for uploading adjustments. A conversion adjustment of type
   * `RETRACTION` or `RESTATEMENT` is only permitted for conversion actions of
   * type `SALESFORCE`, `UPLOAD_CLICK` or `WEBPAGE`. A conversion adjustment of
   * type `ENHANCEMENT` is only permitted for conversion actions of type
   * `WEBPAGE`.
   */
  public const CONVERSION_ADJUSTMENT_UPLOAD_ERROR_INVALID_CONVERSION_ACTION_TYPE = 'INVALID_CONVERSION_ACTION_TYPE';
  /**
   * Enum unspecified.
   */
  public const CONVERSION_UPLOAD_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CONVERSION_UPLOAD_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Upload fewer than 2001 events in a single request.
   */
  public const CONVERSION_UPLOAD_ERROR_TOO_MANY_CONVERSIONS_IN_REQUEST = 'TOO_MANY_CONVERSIONS_IN_REQUEST';
  /**
   * The imported gclid could not be decoded.
   */
  public const CONVERSION_UPLOAD_ERROR_UNPARSEABLE_GCLID = 'UNPARSEABLE_GCLID';
  /**
   * The imported event has a `conversion_date_time` that precedes the click.
   * Make sure your `conversion_date_time` is correct and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_CONVERSION_PRECEDES_EVENT = 'CONVERSION_PRECEDES_EVENT';
  /**
   * The imported event can't be recorded because its click occurred before this
   * conversion's click-through window. Make sure you import the most recent
   * data.
   */
  public const CONVERSION_UPLOAD_ERROR_EXPIRED_EVENT = 'EXPIRED_EVENT';
  /**
   * The click associated with the given identifier or iOS URL parameter
   * occurred less than 6 hours ago. Retry after 6 hours have passed.
   */
  public const CONVERSION_UPLOAD_ERROR_TOO_RECENT_EVENT = 'TOO_RECENT_EVENT';
  /**
   * The imported event could not be attributed to a click. This may be because
   * the event did not come from a Google Ads campaign.
   */
  public const CONVERSION_UPLOAD_ERROR_EVENT_NOT_FOUND = 'EVENT_NOT_FOUND';
  /**
   * The click ID or call is associated with an Ads account you don't have
   * access to. Make sure you import conversions for accounts managed by your
   * manager account.
   */
  public const CONVERSION_UPLOAD_ERROR_UNAUTHORIZED_CUSTOMER = 'UNAUTHORIZED_CUSTOMER';
  /**
   * Can't import events to a conversion action that was just created. Try
   * importing again in 6 hours.
   */
  public const CONVERSION_UPLOAD_ERROR_TOO_RECENT_CONVERSION_ACTION = 'TOO_RECENT_CONVERSION_ACTION';
  /**
   * At the time of the click, conversion tracking was not enabled in the
   * effective conversion account of the click's Google Ads account.
   */
  public const CONVERSION_UPLOAD_ERROR_CONVERSION_TRACKING_NOT_ENABLED_AT_IMPRESSION_TIME = 'CONVERSION_TRACKING_NOT_ENABLED_AT_IMPRESSION_TIME';
  /**
   * The imported event includes external attribution data, but the conversion
   * action isn't set up to use an external attribution model. Make sure the
   * conversion action is correctly configured and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_EXTERNAL_ATTRIBUTION_DATA_SET_FOR_NON_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION = 'EXTERNAL_ATTRIBUTION_DATA_SET_FOR_NON_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION';
  /**
   * The conversion action is set up to use an external attribution model, but
   * the imported event is missing data. Make sure imported events include the
   * external attribution credit and all necessary fields.
   */
  public const CONVERSION_UPLOAD_ERROR_EXTERNAL_ATTRIBUTION_DATA_NOT_SET_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION = 'EXTERNAL_ATTRIBUTION_DATA_NOT_SET_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION';
  /**
   * Order IDs can't be used for a conversion measured with an external
   * attribution model. Make sure the conversion is correctly configured and
   * imported events include only necessary data and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_ORDER_ID_NOT_PERMITTED_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION = 'ORDER_ID_NOT_PERMITTED_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION';
  /**
   * The imported event includes an order ID that was previously recorded, so
   * the event was not processed.
   */
  public const CONVERSION_UPLOAD_ERROR_ORDER_ID_ALREADY_IN_USE = 'ORDER_ID_ALREADY_IN_USE';
  /**
   * Imported events include multiple conversions with the same order ID and
   * were not processed. Make sure order IDs are unique and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_DUPLICATE_ORDER_ID = 'DUPLICATE_ORDER_ID';
  /**
   * Can't import calls that occurred less than 6 hours ago. Try uploading again
   * in 6 hours.
   */
  public const CONVERSION_UPLOAD_ERROR_TOO_RECENT_CALL = 'TOO_RECENT_CALL';
  /**
   * The call can't be recorded because it occurred before this conversion
   * action's lookback window. Make sure your import is configured to get the
   * most recent data.
   */
  public const CONVERSION_UPLOAD_ERROR_EXPIRED_CALL = 'EXPIRED_CALL';
  /**
   * The call or click leading to the imported event can't be found. Make sure
   * your data source is set up to include correct identifiers.
   */
  public const CONVERSION_UPLOAD_ERROR_CALL_NOT_FOUND = 'CALL_NOT_FOUND';
  /**
   * The call has a `conversion_date_time` that precedes the associated click.
   * Make sure your `conversion_date_time` is correct.
   */
  public const CONVERSION_UPLOAD_ERROR_CONVERSION_PRECEDES_CALL = 'CONVERSION_PRECEDES_CALL';
  /**
   * At the time of the imported call, conversion tracking was not enabled in
   * the effective conversion account of the click's Google Ads account.
   */
  public const CONVERSION_UPLOAD_ERROR_CONVERSION_TRACKING_NOT_ENABLED_AT_CALL_TIME = 'CONVERSION_TRACKING_NOT_ENABLED_AT_CALL_TIME';
  /**
   * Make sure phone numbers are formatted as E.164 (+16502531234),
   * International (+64 3-331 6005), or US national number (6502531234).
   */
  public const CONVERSION_UPLOAD_ERROR_UNPARSEABLE_CALLERS_PHONE_NUMBER = 'UNPARSEABLE_CALLERS_PHONE_NUMBER';
  /**
   * The imported event has the same click and `conversion_date_time` as an
   * existing conversion. Use a unique `conversion_date_time` or order ID for
   * each unique event and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_CLICK_CONVERSION_ALREADY_EXISTS = 'CLICK_CONVERSION_ALREADY_EXISTS';
  /**
   * The imported call has the same `conversion_date_time` as an existing
   * conversion. Make sure your `conversion_date_time` correctly configured and
   * try again.
   */
  public const CONVERSION_UPLOAD_ERROR_CALL_CONVERSION_ALREADY_EXISTS = 'CALL_CONVERSION_ALREADY_EXISTS';
  /**
   * Multiple events have the same click and `conversion_date_time`. Make sure
   * your `conversion_date_time` is correctly configured and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_DUPLICATE_CLICK_CONVERSION_IN_REQUEST = 'DUPLICATE_CLICK_CONVERSION_IN_REQUEST';
  /**
   * Multiple events have the same call and `conversion_date_time`. Make sure
   * your `conversion_date_time` is correctly configured and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_DUPLICATE_CALL_CONVERSION_IN_REQUEST = 'DUPLICATE_CALL_CONVERSION_IN_REQUEST';
  /**
   * Enable the custom variable in your conversion settings and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_CUSTOM_VARIABLE_NOT_ENABLED = 'CUSTOM_VARIABLE_NOT_ENABLED';
  /**
   * Can't import events with custom variables containing personally-
   * identifiable information (PII). Remove these variables and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_CUSTOM_VARIABLE_VALUE_CONTAINS_PII = 'CUSTOM_VARIABLE_VALUE_CONTAINS_PII';
  /**
   * The click from the imported event is associated with a different Google Ads
   * account. Make sure you're importing to the correct account.
   */
  public const CONVERSION_UPLOAD_ERROR_INVALID_CUSTOMER_FOR_CLICK = 'INVALID_CUSTOMER_FOR_CLICK';
  /**
   * The click from the call is associated with a different Google Ads account.
   * Make sure you're importing to the correct account. Query
   * conversion_tracking_setting.google_ads_conversion_customer on Customer to
   * identify the correct account.
   */
  public const CONVERSION_UPLOAD_ERROR_INVALID_CUSTOMER_FOR_CALL = 'INVALID_CUSTOMER_FOR_CALL';
  /**
   * The connversion can't be imported because the conversion source didn't
   * comply with Apple App Transparency Tracking (ATT) policies or because the
   * customer didn't consent to tracking.
   */
  public const CONVERSION_UPLOAD_ERROR_CONVERSION_NOT_COMPLIANT_WITH_ATT_POLICY = 'CONVERSION_NOT_COMPLIANT_WITH_ATT_POLICY';
  /**
   * The email address or phone number for this event can't be matched to a
   * click. This may be because it didn't come from a Google Ads campaign, and
   * you can safely ignore this warning. If this includes more imported events
   * than is expected, you may need to check your setup.
   */
  public const CONVERSION_UPLOAD_ERROR_CLICK_NOT_FOUND = 'CLICK_NOT_FOUND';
  /**
   * Make sure you hash user provided data using SHA-256 and ensure you are
   * normalizing according to the guidelines.
   */
  public const CONVERSION_UPLOAD_ERROR_INVALID_USER_IDENTIFIER = 'INVALID_USER_IDENTIFIER';
  /**
   * User provided data can't be used with external attribution models. Use a
   * different attribution model or omit user identifiers and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION_NOT_PERMITTED_WITH_USER_IDENTIFIER = 'EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION_NOT_PERMITTED_WITH_USER_IDENTIFIER';
  /**
   * The provided user identifiers are not supported. Use only hashed email or
   * phone number and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_UNSUPPORTED_USER_IDENTIFIER = 'UNSUPPORTED_USER_IDENTIFIER';
  /**
   * Can't use both gbraid and wbraid parameters. Use only 1 and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_GBRAID_WBRAID_BOTH_SET = 'GBRAID_WBRAID_BOTH_SET';
  /**
   * Can't parse event import data. Check if your wbraid parameter was not
   * modified and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_UNPARSEABLE_WBRAID = 'UNPARSEABLE_WBRAID';
  /**
   * Can't parse event import data. Check if your gbraid parameter was not
   * modified and try again.
   */
  public const CONVERSION_UPLOAD_ERROR_UNPARSEABLE_GBRAID = 'UNPARSEABLE_GBRAID';
  /**
   * Conversion actions that use one-per-click counting can't be used with
   * gbraid or wbraid parameters.
   */
  public const CONVERSION_UPLOAD_ERROR_ONE_PER_CLICK_CONVERSION_ACTION_NOT_PERMITTED_WITH_BRAID = 'ONE_PER_CLICK_CONVERSION_ACTION_NOT_PERMITTED_WITH_BRAID';
  /**
   * Enhanced conversions can't be used for this account because of Google
   * customer data policies. Contact your Google representative.
   */
  public const CONVERSION_UPLOAD_ERROR_CUSTOMER_DATA_POLICY_PROHIBITS_ENHANCED_CONVERSIONS = 'CUSTOMER_DATA_POLICY_PROHIBITS_ENHANCED_CONVERSIONS';
  /**
   * Make sure you agree to the customer data processing terms in conversion
   * settings and try again. You can check your setting by querying
   * conversion_tracking_setting.accepted_customer_data_terms on Customer.
   */
  public const CONVERSION_UPLOAD_ERROR_CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS = 'CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS';
  /**
   * Can't import events with order IDs containing personally-identifiable
   * information (PII).
   */
  public const CONVERSION_UPLOAD_ERROR_ORDER_ID_CONTAINS_PII = 'ORDER_ID_CONTAINS_PII';
  /**
   * Make sure you've turned on enhanced conversions for leads in conversion
   * settings and try again. You can check your setting by querying
   * conversion_tracking_setting.enhanced_conversions_for_leads_enabled on
   * Customer.
   */
  public const CONVERSION_UPLOAD_ERROR_CUSTOMER_NOT_ENABLED_ENHANCED_CONVERSIONS_FOR_LEADS = 'CUSTOMER_NOT_ENABLED_ENHANCED_CONVERSIONS_FOR_LEADS';
  /**
   * The provided job id in the request is not within the allowed range. A job
   * ID must be a positive integer in the range [1, 2^31).
   */
  public const CONVERSION_UPLOAD_ERROR_INVALID_JOB_ID = 'INVALID_JOB_ID';
  /**
   * The conversion action specified in the upload request cannot be found. Make
   * sure it's available in this account.
   */
  public const CONVERSION_UPLOAD_ERROR_NO_CONVERSION_ACTION_FOUND = 'NO_CONVERSION_ACTION_FOUND';
  /**
   * The conversion action specified in the upload request isn't set up for
   * uploading conversions.
   */
  public const CONVERSION_UPLOAD_ERROR_INVALID_CONVERSION_ACTION_TYPE = 'INVALID_CONVERSION_ACTION_TYPE';
  /**
   * Enum unspecified.
   */
  public const DATE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const DATE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Given field values do not correspond to a valid date.
   */
  public const DATE_ERROR_INVALID_FIELD_VALUES_IN_DATE = 'INVALID_FIELD_VALUES_IN_DATE';
  /**
   * Given field values do not correspond to a valid date time.
   */
  public const DATE_ERROR_INVALID_FIELD_VALUES_IN_DATE_TIME = 'INVALID_FIELD_VALUES_IN_DATE_TIME';
  /**
   * The string date's format should be yyyy-mm-dd.
   */
  public const DATE_ERROR_INVALID_STRING_DATE = 'INVALID_STRING_DATE';
  /**
   * The string date time's format should be yyyy-mm-dd hh:mm:ss.ssssss.
   */
  public const DATE_ERROR_INVALID_STRING_DATE_TIME_MICROS = 'INVALID_STRING_DATE_TIME_MICROS';
  /**
   * The string date time's format should be yyyy-mm-dd hh:mm:ss.
   */
  public const DATE_ERROR_INVALID_STRING_DATE_TIME_SECONDS = 'INVALID_STRING_DATE_TIME_SECONDS';
  /**
   * The string date time's format should be yyyy-mm-dd hh:mm:ss+|-hh:mm.
   */
  public const DATE_ERROR_INVALID_STRING_DATE_TIME_SECONDS_WITH_OFFSET = 'INVALID_STRING_DATE_TIME_SECONDS_WITH_OFFSET';
  /**
   * Date is before allowed minimum.
   */
  public const DATE_ERROR_EARLIER_THAN_MINIMUM_DATE = 'EARLIER_THAN_MINIMUM_DATE';
  /**
   * Date is after allowed maximum.
   */
  public const DATE_ERROR_LATER_THAN_MAXIMUM_DATE = 'LATER_THAN_MAXIMUM_DATE';
  /**
   * Date range bounds are not in order.
   */
  public const DATE_ERROR_DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE = 'DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE';
  /**
   * Both dates in range are null.
   */
  public const DATE_ERROR_DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL = 'DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL';
  /**
   * This campaign type doesn't support a start date time that isn't the start
   * of the day.
   */
  public const DATE_ERROR_DATE_RANGE_ERROR_START_TIME_MUST_BE_THE_START_OF_A_DAY = 'DATE_RANGE_ERROR_START_TIME_MUST_BE_THE_START_OF_A_DAY';
  /**
   * This campaign type doesn't support an end date time that isn't the end of
   * the day.
   */
  public const DATE_ERROR_DATE_RANGE_ERROR_END_TIME_MUST_BE_THE_END_OF_A_DAY = 'DATE_RANGE_ERROR_END_TIME_MUST_BE_THE_END_OF_A_DAY';
  /**
   * Enum unspecified.
   */
  public const DISTINCT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const DISTINCT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Duplicate element.
   */
  public const DISTINCT_ERROR_DUPLICATE_ELEMENT = 'DUPLICATE_ELEMENT';
  /**
   * Duplicate type.
   */
  public const DISTINCT_ERROR_DUPLICATE_TYPE = 'DUPLICATE_TYPE';
  /**
   * Enum unspecified.
   */
  public const FIELD_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FIELD_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The required field was not present.
   */
  public const FIELD_ERROR_REQUIRED = 'REQUIRED';
  /**
   * The field attempted to be mutated is immutable.
   */
  public const FIELD_ERROR_IMMUTABLE_FIELD = 'IMMUTABLE_FIELD';
  /**
   * The field's value is invalid.
   */
  public const FIELD_ERROR_INVALID_VALUE = 'INVALID_VALUE';
  /**
   * The field cannot be set.
   */
  public const FIELD_ERROR_VALUE_MUST_BE_UNSET = 'VALUE_MUST_BE_UNSET';
  /**
   * The required repeated field was empty.
   */
  public const FIELD_ERROR_REQUIRED_NONEMPTY_LIST = 'REQUIRED_NONEMPTY_LIST';
  /**
   * The field cannot be cleared.
   */
  public const FIELD_ERROR_FIELD_CANNOT_BE_CLEARED = 'FIELD_CANNOT_BE_CLEARED';
  /**
   * The field's value is on a deny-list for this field.
   */
  public const FIELD_ERROR_BLOCKED_VALUE = 'BLOCKED_VALUE';
  /**
   * The field's value cannot be modified, except for clearing.
   */
  public const FIELD_ERROR_FIELD_CAN_ONLY_BE_CLEARED = 'FIELD_CAN_ONLY_BE_CLEARED';
  /**
   * Enum unspecified.
   */
  public const MUTATE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const MUTATE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Requested resource was not found.
   */
  public const MUTATE_ERROR_RESOURCE_NOT_FOUND = 'RESOURCE_NOT_FOUND';
  /**
   * Cannot mutate the same resource twice in one request.
   */
  public const MUTATE_ERROR_ID_EXISTS_IN_MULTIPLE_MUTATES = 'ID_EXISTS_IN_MULTIPLE_MUTATES';
  /**
   * The field's contents don't match another field that represents the same
   * data.
   */
  public const MUTATE_ERROR_INCONSISTENT_FIELD_VALUES = 'INCONSISTENT_FIELD_VALUES';
  /**
   * Mutates are not allowed for the requested resource.
   */
  public const MUTATE_ERROR_MUTATE_NOT_ALLOWED = 'MUTATE_NOT_ALLOWED';
  /**
   * The resource isn't in Google Ads. It belongs to another ads system.
   */
  public const MUTATE_ERROR_RESOURCE_NOT_IN_GOOGLE_ADS = 'RESOURCE_NOT_IN_GOOGLE_ADS';
  /**
   * The resource being created already exists.
   */
  public const MUTATE_ERROR_RESOURCE_ALREADY_EXISTS = 'RESOURCE_ALREADY_EXISTS';
  /**
   * This resource cannot be used with "validate_only".
   */
  public const MUTATE_ERROR_RESOURCE_DOES_NOT_SUPPORT_VALIDATE_ONLY = 'RESOURCE_DOES_NOT_SUPPORT_VALIDATE_ONLY';
  /**
   * This operation cannot be used with "partial_failure".
   */
  public const MUTATE_ERROR_OPERATION_DOES_NOT_SUPPORT_PARTIAL_FAILURE = 'OPERATION_DOES_NOT_SUPPORT_PARTIAL_FAILURE';
  /**
   * Attempt to write to read-only fields.
   */
  public const MUTATE_ERROR_RESOURCE_READ_ONLY = 'RESOURCE_READ_ONLY';
  /**
   * Mutates are generally not allowed if the customer contains non-exempt
   * campaigns without the EU political advertising declaration.
   */
  public const MUTATE_ERROR_EU_POLITICAL_ADVERTISING_DECLARATION_REQUIRED = 'EU_POLITICAL_ADVERTISING_DECLARATION_REQUIRED';
  /**
   * Enum unspecified.
   */
  public const NOT_ALLOWLISTED_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const NOT_ALLOWLISTED_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Customer is not allowlisted for accessing this feature.
   */
  public const NOT_ALLOWLISTED_ERROR_CUSTOMER_NOT_ALLOWLISTED_FOR_THIS_FEATURE = 'CUSTOMER_NOT_ALLOWLISTED_FOR_THIS_FEATURE';
  /**
   * Enum unspecified.
   */
  public const STRING_FORMAT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const STRING_FORMAT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The input string value contains disallowed characters.
   */
  public const STRING_FORMAT_ERROR_ILLEGAL_CHARS = 'ILLEGAL_CHARS';
  /**
   * The input string value is invalid for the associated field.
   */
  public const STRING_FORMAT_ERROR_INVALID_FORMAT = 'INVALID_FORMAT';
  /**
   * Enum unspecified.
   */
  public const STRING_LENGTH_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const STRING_LENGTH_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The specified field should have a least one non-whitespace character in it.
   */
  public const STRING_LENGTH_ERROR_EMPTY = 'EMPTY';
  /**
   * Too short.
   */
  public const STRING_LENGTH_ERROR_TOO_SHORT = 'TOO_SHORT';
  /**
   * Too long.
   */
  public const STRING_LENGTH_ERROR_TOO_LONG = 'TOO_LONG';
  /**
   * Output only. Collection size error.
   *
   * @var string
   */
  public $collectionSizeError;
  /**
   * Output only. Conversion adjustment upload error.
   *
   * @var string
   */
  public $conversionAdjustmentUploadError;
  /**
   * Output only. Conversion upload error.
   *
   * @var string
   */
  public $conversionUploadError;
  /**
   * Output only. Date error.
   *
   * @var string
   */
  public $dateError;
  /**
   * Output only. Distinct error.
   *
   * @var string
   */
  public $distinctError;
  /**
   * Output only. Field error.
   *
   * @var string
   */
  public $fieldError;
  /**
   * Output only. Mutate error.
   *
   * @var string
   */
  public $mutateError;
  /**
   * Output only. Not allowlisted error.
   *
   * @var string
   */
  public $notAllowlistedError;
  /**
   * Output only. String format error.
   *
   * @var string
   */
  public $stringFormatError;
  /**
   * Output only. String length error.
   *
   * @var string
   */
  public $stringLengthError;

  /**
   * Output only. Collection size error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TOO_FEW, TOO_MANY
   *
   * @param self::COLLECTION_SIZE_ERROR_* $collectionSizeError
   */
  public function setCollectionSizeError($collectionSizeError)
  {
    $this->collectionSizeError = $collectionSizeError;
  }
  /**
   * @return self::COLLECTION_SIZE_ERROR_*
   */
  public function getCollectionSizeError()
  {
    return $this->collectionSizeError;
  }
  /**
   * Output only. Conversion adjustment upload error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TOO_RECENT_CONVERSION_ACTION,
   * CONVERSION_ALREADY_RETRACTED, CONVERSION_NOT_FOUND, CONVERSION_EXPIRED,
   * ADJUSTMENT_PRECEDES_CONVERSION, MORE_RECENT_RESTATEMENT_FOUND,
   * TOO_RECENT_CONVERSION,
   * CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE,
   * TOO_MANY_ADJUSTMENTS_IN_REQUEST, TOO_MANY_ADJUSTMENTS,
   * RESTATEMENT_ALREADY_EXISTS, DUPLICATE_ADJUSTMENT_IN_REQUEST,
   * CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS,
   * CONVERSION_ACTION_NOT_ELIGIBLE_FOR_ENHANCEMENT, INVALID_USER_IDENTIFIER,
   * UNSUPPORTED_USER_IDENTIFIER, GCLID_DATE_TIME_PAIR_AND_ORDER_ID_BOTH_SET,
   * CONVERSION_ALREADY_ENHANCED, DUPLICATE_ENHANCEMENT_IN_REQUEST,
   * CUSTOMER_DATA_POLICY_PROHIBITS_ENHANCEMENT, MISSING_ORDER_ID_FOR_WEBPAGE,
   * ORDER_ID_CONTAINS_PII, INVALID_JOB_ID, NO_CONVERSION_ACTION_FOUND,
   * INVALID_CONVERSION_ACTION_TYPE
   *
   * @param self::CONVERSION_ADJUSTMENT_UPLOAD_ERROR_* $conversionAdjustmentUploadError
   */
  public function setConversionAdjustmentUploadError($conversionAdjustmentUploadError)
  {
    $this->conversionAdjustmentUploadError = $conversionAdjustmentUploadError;
  }
  /**
   * @return self::CONVERSION_ADJUSTMENT_UPLOAD_ERROR_*
   */
  public function getConversionAdjustmentUploadError()
  {
    return $this->conversionAdjustmentUploadError;
  }
  /**
   * Output only. Conversion upload error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TOO_MANY_CONVERSIONS_IN_REQUEST,
   * UNPARSEABLE_GCLID, CONVERSION_PRECEDES_EVENT, EXPIRED_EVENT,
   * TOO_RECENT_EVENT, EVENT_NOT_FOUND, UNAUTHORIZED_CUSTOMER,
   * TOO_RECENT_CONVERSION_ACTION,
   * CONVERSION_TRACKING_NOT_ENABLED_AT_IMPRESSION_TIME, EXTERNAL_ATTRIBUTION_DA
   * TA_SET_FOR_NON_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION, EXTERNAL_ATTRIBUTIO
   * N_DATA_NOT_SET_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION,
   * ORDER_ID_NOT_PERMITTED_FOR_EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION,
   * ORDER_ID_ALREADY_IN_USE, DUPLICATE_ORDER_ID, TOO_RECENT_CALL, EXPIRED_CALL,
   * CALL_NOT_FOUND, CONVERSION_PRECEDES_CALL,
   * CONVERSION_TRACKING_NOT_ENABLED_AT_CALL_TIME,
   * UNPARSEABLE_CALLERS_PHONE_NUMBER, CLICK_CONVERSION_ALREADY_EXISTS,
   * CALL_CONVERSION_ALREADY_EXISTS, DUPLICATE_CLICK_CONVERSION_IN_REQUEST,
   * DUPLICATE_CALL_CONVERSION_IN_REQUEST, CUSTOM_VARIABLE_NOT_ENABLED,
   * CUSTOM_VARIABLE_VALUE_CONTAINS_PII, INVALID_CUSTOMER_FOR_CLICK,
   * INVALID_CUSTOMER_FOR_CALL, CONVERSION_NOT_COMPLIANT_WITH_ATT_POLICY,
   * CLICK_NOT_FOUND, INVALID_USER_IDENTIFIER,
   * EXTERNALLY_ATTRIBUTED_CONVERSION_ACTION_NOT_PERMITTED_WITH_USER_IDENTIFIER,
   * UNSUPPORTED_USER_IDENTIFIER, GBRAID_WBRAID_BOTH_SET, UNPARSEABLE_WBRAID,
   * UNPARSEABLE_GBRAID,
   * ONE_PER_CLICK_CONVERSION_ACTION_NOT_PERMITTED_WITH_BRAID,
   * CUSTOMER_DATA_POLICY_PROHIBITS_ENHANCED_CONVERSIONS,
   * CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS, ORDER_ID_CONTAINS_PII,
   * CUSTOMER_NOT_ENABLED_ENHANCED_CONVERSIONS_FOR_LEADS, INVALID_JOB_ID,
   * NO_CONVERSION_ACTION_FOUND, INVALID_CONVERSION_ACTION_TYPE
   *
   * @param self::CONVERSION_UPLOAD_ERROR_* $conversionUploadError
   */
  public function setConversionUploadError($conversionUploadError)
  {
    $this->conversionUploadError = $conversionUploadError;
  }
  /**
   * @return self::CONVERSION_UPLOAD_ERROR_*
   */
  public function getConversionUploadError()
  {
    return $this->conversionUploadError;
  }
  /**
   * Output only. Date error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_FIELD_VALUES_IN_DATE,
   * INVALID_FIELD_VALUES_IN_DATE_TIME, INVALID_STRING_DATE,
   * INVALID_STRING_DATE_TIME_MICROS, INVALID_STRING_DATE_TIME_SECONDS,
   * INVALID_STRING_DATE_TIME_SECONDS_WITH_OFFSET, EARLIER_THAN_MINIMUM_DATE,
   * LATER_THAN_MAXIMUM_DATE, DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE,
   * DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL,
   * DATE_RANGE_ERROR_START_TIME_MUST_BE_THE_START_OF_A_DAY,
   * DATE_RANGE_ERROR_END_TIME_MUST_BE_THE_END_OF_A_DAY
   *
   * @param self::DATE_ERROR_* $dateError
   */
  public function setDateError($dateError)
  {
    $this->dateError = $dateError;
  }
  /**
   * @return self::DATE_ERROR_*
   */
  public function getDateError()
  {
    return $this->dateError;
  }
  /**
   * Output only. Distinct error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_ELEMENT, DUPLICATE_TYPE
   *
   * @param self::DISTINCT_ERROR_* $distinctError
   */
  public function setDistinctError($distinctError)
  {
    $this->distinctError = $distinctError;
  }
  /**
   * @return self::DISTINCT_ERROR_*
   */
  public function getDistinctError()
  {
    return $this->distinctError;
  }
  /**
   * Output only. Field error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, REQUIRED, IMMUTABLE_FIELD,
   * INVALID_VALUE, VALUE_MUST_BE_UNSET, REQUIRED_NONEMPTY_LIST,
   * FIELD_CANNOT_BE_CLEARED, BLOCKED_VALUE, FIELD_CAN_ONLY_BE_CLEARED
   *
   * @param self::FIELD_ERROR_* $fieldError
   */
  public function setFieldError($fieldError)
  {
    $this->fieldError = $fieldError;
  }
  /**
   * @return self::FIELD_ERROR_*
   */
  public function getFieldError()
  {
    return $this->fieldError;
  }
  /**
   * Output only. Mutate error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, RESOURCE_NOT_FOUND,
   * ID_EXISTS_IN_MULTIPLE_MUTATES, INCONSISTENT_FIELD_VALUES,
   * MUTATE_NOT_ALLOWED, RESOURCE_NOT_IN_GOOGLE_ADS, RESOURCE_ALREADY_EXISTS,
   * RESOURCE_DOES_NOT_SUPPORT_VALIDATE_ONLY,
   * OPERATION_DOES_NOT_SUPPORT_PARTIAL_FAILURE, RESOURCE_READ_ONLY,
   * EU_POLITICAL_ADVERTISING_DECLARATION_REQUIRED
   *
   * @param self::MUTATE_ERROR_* $mutateError
   */
  public function setMutateError($mutateError)
  {
    $this->mutateError = $mutateError;
  }
  /**
   * @return self::MUTATE_ERROR_*
   */
  public function getMutateError()
  {
    return $this->mutateError;
  }
  /**
   * Output only. Not allowlisted error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * CUSTOMER_NOT_ALLOWLISTED_FOR_THIS_FEATURE
   *
   * @param self::NOT_ALLOWLISTED_ERROR_* $notAllowlistedError
   */
  public function setNotAllowlistedError($notAllowlistedError)
  {
    $this->notAllowlistedError = $notAllowlistedError;
  }
  /**
   * @return self::NOT_ALLOWLISTED_ERROR_*
   */
  public function getNotAllowlistedError()
  {
    return $this->notAllowlistedError;
  }
  /**
   * Output only. String format error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ILLEGAL_CHARS, INVALID_FORMAT
   *
   * @param self::STRING_FORMAT_ERROR_* $stringFormatError
   */
  public function setStringFormatError($stringFormatError)
  {
    $this->stringFormatError = $stringFormatError;
  }
  /**
   * @return self::STRING_FORMAT_ERROR_*
   */
  public function getStringFormatError()
  {
    return $this->stringFormatError;
  }
  /**
   * Output only. String length error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EMPTY, TOO_SHORT, TOO_LONG
   *
   * @param self::STRING_LENGTH_ERROR_* $stringLengthError
   */
  public function setStringLengthError($stringLengthError)
  {
    $this->stringLengthError = $stringLengthError;
  }
  /**
   * @return self::STRING_LENGTH_ERROR_*
   */
  public function getStringLengthError()
  {
    return $this->stringLengthError;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesOfflineConversionError::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesOfflineConversionError');
