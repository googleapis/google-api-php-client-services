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

class GoogleAdsSearchads360V23ErrorsErrorCode extends \Google\Model
{
  /**
   * Enum unspecified.
   */
  public const ACCESS_INVITATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ACCESS_INVITATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The email address is invalid for sending an invitation.
   */
  public const ACCESS_INVITATION_ERROR_INVALID_EMAIL_ADDRESS = 'INVALID_EMAIL_ADDRESS';
  /**
   * Email address already has access to this customer.
   */
  public const ACCESS_INVITATION_ERROR_EMAIL_ADDRESS_ALREADY_HAS_ACCESS = 'EMAIL_ADDRESS_ALREADY_HAS_ACCESS';
  /**
   * Invalid invitation status for the operation.
   */
  public const ACCESS_INVITATION_ERROR_INVALID_INVITATION_STATUS = 'INVALID_INVITATION_STATUS';
  /**
   * Email address cannot be like abc+foo@google.com.
   */
  public const ACCESS_INVITATION_ERROR_GOOGLE_CONSUMER_ACCOUNT_NOT_ALLOWED = 'GOOGLE_CONSUMER_ACCOUNT_NOT_ALLOWED';
  /**
   * Invalid invitation ID.
   */
  public const ACCESS_INVITATION_ERROR_INVALID_INVITATION_ID = 'INVALID_INVITATION_ID';
  /**
   * Email address already has a pending invitation.
   */
  public const ACCESS_INVITATION_ERROR_EMAIL_ADDRESS_ALREADY_HAS_PENDING_INVITATION = 'EMAIL_ADDRESS_ALREADY_HAS_PENDING_INVITATION';
  /**
   * Pending invitation limit exceeded for the customer.
   */
  public const ACCESS_INVITATION_ERROR_PENDING_INVITATIONS_LIMIT_EXCEEDED = 'PENDING_INVITATIONS_LIMIT_EXCEEDED';
  /**
   * Email address doesn't conform to the email domain policy. See
   * https://support.google.com/google-ads/answer/2375456
   */
  public const ACCESS_INVITATION_ERROR_EMAIL_DOMAIN_POLICY_VIOLATED = 'EMAIL_DOMAIN_POLICY_VIOLATED';
  /**
   * Enum unspecified.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The field mask must be empty for create/end/remove proposals.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_FIELD_MASK_NOT_ALLOWED = 'FIELD_MASK_NOT_ALLOWED';
  /**
   * The field cannot be set because of the proposal type.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_IMMUTABLE_FIELD = 'IMMUTABLE_FIELD';
  /**
   * The field is required because of the proposal type.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_REQUIRED_FIELD_MISSING = 'REQUIRED_FIELD_MISSING';
  /**
   * Proposals that have been approved cannot be cancelled.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANNOT_CANCEL_APPROVED_PROPOSAL = 'CANNOT_CANCEL_APPROVED_PROPOSAL';
  /**
   * Budgets that haven't been approved cannot be removed.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANNOT_REMOVE_UNAPPROVED_BUDGET = 'CANNOT_REMOVE_UNAPPROVED_BUDGET';
  /**
   * Budgets that are currently running cannot be removed.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANNOT_REMOVE_RUNNING_BUDGET = 'CANNOT_REMOVE_RUNNING_BUDGET';
  /**
   * Budgets that haven't been approved cannot be truncated.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANNOT_END_UNAPPROVED_BUDGET = 'CANNOT_END_UNAPPROVED_BUDGET';
  /**
   * Only budgets that are currently running can be truncated.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANNOT_END_INACTIVE_BUDGET = 'CANNOT_END_INACTIVE_BUDGET';
  /**
   * All budgets must have names.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_BUDGET_NAME_REQUIRED = 'BUDGET_NAME_REQUIRED';
  /**
   * Expired budgets cannot be edited after a sufficient amount of time has
   * passed.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANNOT_UPDATE_OLD_BUDGET = 'CANNOT_UPDATE_OLD_BUDGET';
  /**
   * It is not permissible a propose a new budget that ends in the past.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANNOT_END_IN_PAST = 'CANNOT_END_IN_PAST';
  /**
   * An expired budget cannot be extended to overlap with the running budget.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANNOT_EXTEND_END_TIME = 'CANNOT_EXTEND_END_TIME';
  /**
   * A purchase order number is required.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_PURCHASE_ORDER_NUMBER_REQUIRED = 'PURCHASE_ORDER_NUMBER_REQUIRED';
  /**
   * Budgets that have a pending update cannot be updated.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_PENDING_UPDATE_PROPOSAL_EXISTS = 'PENDING_UPDATE_PROPOSAL_EXISTS';
  /**
   * Cannot propose more than one budget when the corresponding billing setup
   * hasn't been approved.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_MULTIPLE_BUDGETS_NOT_ALLOWED_FOR_UNAPPROVED_BILLING_SETUP = 'MULTIPLE_BUDGETS_NOT_ALLOWED_FOR_UNAPPROVED_BILLING_SETUP';
  /**
   * Cannot update the start time of a budget that has already started.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANNOT_UPDATE_START_TIME_FOR_STARTED_BUDGET = 'CANNOT_UPDATE_START_TIME_FOR_STARTED_BUDGET';
  /**
   * Cannot update the spending limit of a budget with an amount lower than what
   * has already been spent.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_SPENDING_LIMIT_LOWER_THAN_ACCRUED_COST_NOT_ALLOWED = 'SPENDING_LIMIT_LOWER_THAN_ACCRUED_COST_NOT_ALLOWED';
  /**
   * Cannot propose a budget update without actually changing any fields.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_UPDATE_IS_NO_OP = 'UPDATE_IS_NO_OP';
  /**
   * The end time must come after the start time.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_END_TIME_MUST_FOLLOW_START_TIME = 'END_TIME_MUST_FOLLOW_START_TIME';
  /**
   * The budget's date range must fall within the date range of its billing
   * setup.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_BUDGET_DATE_RANGE_INCOMPATIBLE_WITH_BILLING_SETUP = 'BUDGET_DATE_RANGE_INCOMPATIBLE_WITH_BILLING_SETUP';
  /**
   * The user is not authorized to mutate budgets for the given billing setup.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_NOT_AUTHORIZED = 'NOT_AUTHORIZED';
  /**
   * Mutates are not allowed for the given billing setup.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_INVALID_BILLING_SETUP = 'INVALID_BILLING_SETUP';
  /**
   * Budget creation failed as it overlaps with a pending budget proposal or an
   * approved budget.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_OVERLAPS_EXISTING_BUDGET = 'OVERLAPS_EXISTING_BUDGET';
  /**
   * The control setting in user's payments profile doesn't allow budget
   * creation through API. Log in to Google Ads to create budget.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANNOT_CREATE_BUDGET_THROUGH_API = 'CANNOT_CREATE_BUDGET_THROUGH_API';
  /**
   * Master service agreement has not been signed yet for the Payments Profile.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_INVALID_MASTER_SERVICE_AGREEMENT = 'INVALID_MASTER_SERVICE_AGREEMENT';
  /**
   * Budget mutates are not allowed because the given billing setup is canceled.
   */
  public const ACCOUNT_BUDGET_PROPOSAL_ERROR_CANCELED_BILLING_SETUP = 'CANCELED_BILLING_SETUP';
  /**
   * Enum unspecified.
   */
  public const ACCOUNT_LINK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ACCOUNT_LINK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The new link status is invalid.
   */
  public const ACCOUNT_LINK_ERROR_INVALID_STATUS = 'INVALID_STATUS';
  /**
   * The authenticated user doesn't have the permission to do the change.
   */
  public const ACCOUNT_LINK_ERROR_PERMISSION_DENIED = 'PERMISSION_DENIED';
  /**
   * Enum unspecified.
   */
  public const AD_CUSTOMIZER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_CUSTOMIZER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Invalid date argument in countdown function.
   */
  public const AD_CUSTOMIZER_ERROR_COUNTDOWN_INVALID_DATE_FORMAT = 'COUNTDOWN_INVALID_DATE_FORMAT';
  /**
   * Countdown end date is in the past.
   */
  public const AD_CUSTOMIZER_ERROR_COUNTDOWN_DATE_IN_PAST = 'COUNTDOWN_DATE_IN_PAST';
  /**
   * Invalid locale string in countdown function.
   */
  public const AD_CUSTOMIZER_ERROR_COUNTDOWN_INVALID_LOCALE = 'COUNTDOWN_INVALID_LOCALE';
  /**
   * Days-before argument to countdown function is not positive.
   */
  public const AD_CUSTOMIZER_ERROR_COUNTDOWN_INVALID_START_DAYS_BEFORE = 'COUNTDOWN_INVALID_START_DAYS_BEFORE';
  /**
   * A user list referenced in an IF function does not exist.
   */
  public const AD_CUSTOMIZER_ERROR_UNKNOWN_USER_LIST = 'UNKNOWN_USER_LIST';
  /**
   * Enum unspecified.
   */
  public const AD_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Ad customizers are not supported for ad type.
   */
  public const AD_ERROR_AD_CUSTOMIZERS_NOT_SUPPORTED_FOR_AD_TYPE = 'AD_CUSTOMIZERS_NOT_SUPPORTED_FOR_AD_TYPE';
  /**
   * Estimating character sizes the string is too long.
   */
  public const AD_ERROR_APPROXIMATELY_TOO_LONG = 'APPROXIMATELY_TOO_LONG';
  /**
   * Estimating character sizes the string is too short.
   */
  public const AD_ERROR_APPROXIMATELY_TOO_SHORT = 'APPROXIMATELY_TOO_SHORT';
  /**
   * There is a problem with the snippet.
   */
  public const AD_ERROR_BAD_SNIPPET = 'BAD_SNIPPET';
  /**
   * Cannot modify an ad.
   */
  public const AD_ERROR_CANNOT_MODIFY_AD = 'CANNOT_MODIFY_AD';
  /**
   * business name and url cannot be set at the same time
   */
  public const AD_ERROR_CANNOT_SET_BUSINESS_NAME_IF_URL_SET = 'CANNOT_SET_BUSINESS_NAME_IF_URL_SET';
  /**
   * The specified field is incompatible with this ad's type or settings.
   */
  public const AD_ERROR_CANNOT_SET_FIELD = 'CANNOT_SET_FIELD';
  /**
   * Cannot set field when originAdId is set.
   */
  public const AD_ERROR_CANNOT_SET_FIELD_WITH_ORIGIN_AD_ID_SET = 'CANNOT_SET_FIELD_WITH_ORIGIN_AD_ID_SET';
  /**
   * Cannot set field when an existing ad id is set for sharing.
   */
  public const AD_ERROR_CANNOT_SET_FIELD_WITH_AD_ID_SET_FOR_SHARING = 'CANNOT_SET_FIELD_WITH_AD_ID_SET_FOR_SHARING';
  /**
   * Cannot set allowFlexibleColor false if no color is provided by user.
   */
  public const AD_ERROR_CANNOT_SET_ALLOW_FLEXIBLE_COLOR_FALSE = 'CANNOT_SET_ALLOW_FLEXIBLE_COLOR_FALSE';
  /**
   * When user select native, no color control is allowed because we will always
   * respect publisher color for native format serving.
   */
  public const AD_ERROR_CANNOT_SET_COLOR_CONTROL_WHEN_NATIVE_FORMAT_SETTING = 'CANNOT_SET_COLOR_CONTROL_WHEN_NATIVE_FORMAT_SETTING';
  /**
   * Cannot specify a url for the ad type
   */
  public const AD_ERROR_CANNOT_SET_URL = 'CANNOT_SET_URL';
  /**
   * Cannot specify a tracking or mobile url without also setting final urls
   */
  public const AD_ERROR_CANNOT_SET_WITHOUT_FINAL_URLS = 'CANNOT_SET_WITHOUT_FINAL_URLS';
  /**
   * Cannot specify a legacy url and a final url simultaneously
   */
  public const AD_ERROR_CANNOT_SET_WITH_FINAL_URLS = 'CANNOT_SET_WITH_FINAL_URLS';
  /**
   * Cannot specify a urls in UrlData and in template fields simultaneously.
   */
  public const AD_ERROR_CANNOT_SET_WITH_URL_DATA = 'CANNOT_SET_WITH_URL_DATA';
  /**
   * This operator cannot be used with a subclass of Ad.
   */
  public const AD_ERROR_CANNOT_USE_AD_SUBCLASS_FOR_OPERATOR = 'CANNOT_USE_AD_SUBCLASS_FOR_OPERATOR';
  /**
   * Customer is not approved for mobile ads.
   */
  public const AD_ERROR_CUSTOMER_NOT_APPROVED_MOBILEADS = 'CUSTOMER_NOT_APPROVED_MOBILEADS';
  /**
   * Customer is not approved for 3PAS richmedia ads.
   */
  public const AD_ERROR_CUSTOMER_NOT_APPROVED_THIRDPARTY_ADS = 'CUSTOMER_NOT_APPROVED_THIRDPARTY_ADS';
  /**
   * Customer is not approved for 3PAS redirect richmedia (Ad Exchange) ads.
   */
  public const AD_ERROR_CUSTOMER_NOT_APPROVED_THIRDPARTY_REDIRECT_ADS = 'CUSTOMER_NOT_APPROVED_THIRDPARTY_REDIRECT_ADS';
  /**
   * Not an eligible customer
   */
  public const AD_ERROR_CUSTOMER_NOT_ELIGIBLE = 'CUSTOMER_NOT_ELIGIBLE';
  /**
   * Customer is not eligible for updating beacon url
   */
  public const AD_ERROR_CUSTOMER_NOT_ELIGIBLE_FOR_UPDATING_BEACON_URL = 'CUSTOMER_NOT_ELIGIBLE_FOR_UPDATING_BEACON_URL';
  /**
   * There already exists an ad with the same dimensions in the union.
   */
  public const AD_ERROR_DIMENSION_ALREADY_IN_UNION = 'DIMENSION_ALREADY_IN_UNION';
  /**
   * Ad's dimension must be set before setting union dimension.
   */
  public const AD_ERROR_DIMENSION_MUST_BE_SET = 'DIMENSION_MUST_BE_SET';
  /**
   * Ad's dimension must be included in the union dimensions.
   */
  public const AD_ERROR_DIMENSION_NOT_IN_UNION = 'DIMENSION_NOT_IN_UNION';
  /**
   * Display Url cannot be specified (applies to Ad Exchange Ads)
   */
  public const AD_ERROR_DISPLAY_URL_CANNOT_BE_SPECIFIED = 'DISPLAY_URL_CANNOT_BE_SPECIFIED';
  /**
   * Telephone number contains invalid characters or invalid format. Re-enter
   * your number using digits (0-9), dashes (-), and parentheses only.
   */
  public const AD_ERROR_DOMESTIC_PHONE_NUMBER_FORMAT = 'DOMESTIC_PHONE_NUMBER_FORMAT';
  /**
   * Emergency telephone numbers are not allowed. Enter a valid domestic phone
   * number to connect customers to your business.
   */
  public const AD_ERROR_EMERGENCY_PHONE_NUMBER = 'EMERGENCY_PHONE_NUMBER';
  /**
   * A required field was not specified or is an empty string.
   */
  public const AD_ERROR_EMPTY_FIELD = 'EMPTY_FIELD';
  /**
   * A feed attribute referenced in an ad customizer tag is not in the ad
   * customizer mapping for the feed.
   */
  public const AD_ERROR_FEED_ATTRIBUTE_MUST_HAVE_MAPPING_FOR_TYPE_ID = 'FEED_ATTRIBUTE_MUST_HAVE_MAPPING_FOR_TYPE_ID';
  /**
   * The ad customizer field mapping for the feed attribute does not match the
   * expected field type.
   */
  public const AD_ERROR_FEED_ATTRIBUTE_MAPPING_TYPE_MISMATCH = 'FEED_ATTRIBUTE_MAPPING_TYPE_MISMATCH';
  /**
   * The use of ad customizer tags in the ad text is disallowed. Details in
   * trigger.
   */
  public const AD_ERROR_ILLEGAL_AD_CUSTOMIZER_TAG_USE = 'ILLEGAL_AD_CUSTOMIZER_TAG_USE';
  /**
   * Tags of the form {PH_x}, where x is a number, are disallowed in ad text.
   */
  public const AD_ERROR_ILLEGAL_TAG_USE = 'ILLEGAL_TAG_USE';
  /**
   * The dimensions of the ad are specified or derived in multiple ways and are
   * not consistent.
   */
  public const AD_ERROR_INCONSISTENT_DIMENSIONS = 'INCONSISTENT_DIMENSIONS';
  /**
   * The status cannot differ among template ads of the same union.
   */
  public const AD_ERROR_INCONSISTENT_STATUS_IN_TEMPLATE_UNION = 'INCONSISTENT_STATUS_IN_TEMPLATE_UNION';
  /**
   * The length of the string is not valid.
   */
  public const AD_ERROR_INCORRECT_LENGTH = 'INCORRECT_LENGTH';
  /**
   * The ad is ineligible for upgrade.
   */
  public const AD_ERROR_INELIGIBLE_FOR_UPGRADE = 'INELIGIBLE_FOR_UPGRADE';
  /**
   * User cannot create mobile ad for countries targeted in specified campaign.
   */
  public const AD_ERROR_INVALID_AD_ADDRESS_CAMPAIGN_TARGET = 'INVALID_AD_ADDRESS_CAMPAIGN_TARGET';
  /**
   * Invalid Ad type. A specific type of Ad is required.
   */
  public const AD_ERROR_INVALID_AD_TYPE = 'INVALID_AD_TYPE';
  /**
   * Headline, description or phone cannot be present when creating mobile image
   * ad.
   */
  public const AD_ERROR_INVALID_ATTRIBUTES_FOR_MOBILE_IMAGE = 'INVALID_ATTRIBUTES_FOR_MOBILE_IMAGE';
  /**
   * Image cannot be present when creating mobile text ad.
   */
  public const AD_ERROR_INVALID_ATTRIBUTES_FOR_MOBILE_TEXT = 'INVALID_ATTRIBUTES_FOR_MOBILE_TEXT';
  /**
   * Invalid call to action text.
   */
  public const AD_ERROR_INVALID_CALL_TO_ACTION_TEXT = 'INVALID_CALL_TO_ACTION_TEXT';
  /**
   * Invalid character in URL.
   */
  public const AD_ERROR_INVALID_CHARACTER_FOR_URL = 'INVALID_CHARACTER_FOR_URL';
  /**
   * Creative's country code is not valid.
   */
  public const AD_ERROR_INVALID_COUNTRY_CODE = 'INVALID_COUNTRY_CODE';
  /**
   * Invalid use of Expanded Dynamic Search Ads tags ({lpurl} etc.)
   */
  public const AD_ERROR_INVALID_EXPANDED_DYNAMIC_SEARCH_AD_TAG = 'INVALID_EXPANDED_DYNAMIC_SEARCH_AD_TAG';
  /**
   * An input error whose real reason was not properly mapped (should not
   * happen).
   */
  public const AD_ERROR_INVALID_INPUT = 'INVALID_INPUT';
  /**
   * An invalid markup language was entered.
   */
  public const AD_ERROR_INVALID_MARKUP_LANGUAGE = 'INVALID_MARKUP_LANGUAGE';
  /**
   * An invalid mobile carrier was entered.
   */
  public const AD_ERROR_INVALID_MOBILE_CARRIER = 'INVALID_MOBILE_CARRIER';
  /**
   * Specified mobile carriers target a country not targeted by the campaign.
   */
  public const AD_ERROR_INVALID_MOBILE_CARRIER_TARGET = 'INVALID_MOBILE_CARRIER_TARGET';
  /**
   * Wrong number of elements for given element type
   */
  public const AD_ERROR_INVALID_NUMBER_OF_ELEMENTS = 'INVALID_NUMBER_OF_ELEMENTS';
  /**
   * The format of the telephone number is incorrect. Re-enter the number using
   * the correct format.
   */
  public const AD_ERROR_INVALID_PHONE_NUMBER_FORMAT = 'INVALID_PHONE_NUMBER_FORMAT';
  /**
   * The certified vendor format id is incorrect.
   */
  public const AD_ERROR_INVALID_RICH_MEDIA_CERTIFIED_VENDOR_FORMAT_ID = 'INVALID_RICH_MEDIA_CERTIFIED_VENDOR_FORMAT_ID';
  /**
   * The template ad data contains validation errors.
   */
  public const AD_ERROR_INVALID_TEMPLATE_DATA = 'INVALID_TEMPLATE_DATA';
  /**
   * The template field doesn't have have the correct type.
   */
  public const AD_ERROR_INVALID_TEMPLATE_ELEMENT_FIELD_TYPE = 'INVALID_TEMPLATE_ELEMENT_FIELD_TYPE';
  /**
   * Invalid template id.
   */
  public const AD_ERROR_INVALID_TEMPLATE_ID = 'INVALID_TEMPLATE_ID';
  /**
   * After substituting replacement strings, the line is too wide.
   */
  public const AD_ERROR_LINE_TOO_WIDE = 'LINE_TOO_WIDE';
  /**
   * The feed referenced must have ad customizer mapping to be used in a
   * customizer tag.
   */
  public const AD_ERROR_MISSING_AD_CUSTOMIZER_MAPPING = 'MISSING_AD_CUSTOMIZER_MAPPING';
  /**
   * Missing address component in template element address field.
   */
  public const AD_ERROR_MISSING_ADDRESS_COMPONENT = 'MISSING_ADDRESS_COMPONENT';
  /**
   * An ad name must be entered.
   */
  public const AD_ERROR_MISSING_ADVERTISEMENT_NAME = 'MISSING_ADVERTISEMENT_NAME';
  /**
   * Business name must be entered.
   */
  public const AD_ERROR_MISSING_BUSINESS_NAME = 'MISSING_BUSINESS_NAME';
  /**
   * Description (line 2) must be entered.
   */
  public const AD_ERROR_MISSING_DESCRIPTION1 = 'MISSING_DESCRIPTION1';
  /**
   * Description (line 3) must be entered.
   */
  public const AD_ERROR_MISSING_DESCRIPTION2 = 'MISSING_DESCRIPTION2';
  /**
   * The destination url must contain at least one tag (for example, {lpurl})
   */
  public const AD_ERROR_MISSING_DESTINATION_URL_TAG = 'MISSING_DESTINATION_URL_TAG';
  /**
   * The tracking url template of ExpandedDynamicSearchAd must contain at least
   * one tag. (for example, {lpurl})
   */
  public const AD_ERROR_MISSING_LANDING_PAGE_URL_TAG = 'MISSING_LANDING_PAGE_URL_TAG';
  /**
   * A valid dimension must be specified for this ad.
   */
  public const AD_ERROR_MISSING_DIMENSION = 'MISSING_DIMENSION';
  /**
   * A display URL must be entered.
   */
  public const AD_ERROR_MISSING_DISPLAY_URL = 'MISSING_DISPLAY_URL';
  /**
   * Headline must be entered.
   */
  public const AD_ERROR_MISSING_HEADLINE = 'MISSING_HEADLINE';
  /**
   * A height must be entered.
   */
  public const AD_ERROR_MISSING_HEIGHT = 'MISSING_HEIGHT';
  /**
   * An image must be entered.
   */
  public const AD_ERROR_MISSING_IMAGE = 'MISSING_IMAGE';
  /**
   * Marketing image or product videos are required.
   */
  public const AD_ERROR_MISSING_MARKETING_IMAGE_OR_PRODUCT_VIDEOS = 'MISSING_MARKETING_IMAGE_OR_PRODUCT_VIDEOS';
  /**
   * The markup language in which your site is written must be entered.
   */
  public const AD_ERROR_MISSING_MARKUP_LANGUAGES = 'MISSING_MARKUP_LANGUAGES';
  /**
   * A mobile carrier must be entered.
   */
  public const AD_ERROR_MISSING_MOBILE_CARRIER = 'MISSING_MOBILE_CARRIER';
  /**
   * Phone number must be entered.
   */
  public const AD_ERROR_MISSING_PHONE = 'MISSING_PHONE';
  /**
   * Missing required template fields
   */
  public const AD_ERROR_MISSING_REQUIRED_TEMPLATE_FIELDS = 'MISSING_REQUIRED_TEMPLATE_FIELDS';
  /**
   * Missing a required field value
   */
  public const AD_ERROR_MISSING_TEMPLATE_FIELD_VALUE = 'MISSING_TEMPLATE_FIELD_VALUE';
  /**
   * The ad must have text.
   */
  public const AD_ERROR_MISSING_TEXT = 'MISSING_TEXT';
  /**
   * A visible URL must be entered.
   */
  public const AD_ERROR_MISSING_VISIBLE_URL = 'MISSING_VISIBLE_URL';
  /**
   * A width must be entered.
   */
  public const AD_ERROR_MISSING_WIDTH = 'MISSING_WIDTH';
  /**
   * Only 1 feed can be used as the source of ad customizer substitutions in a
   * single ad.
   */
  public const AD_ERROR_MULTIPLE_DISTINCT_FEEDS_UNSUPPORTED = 'MULTIPLE_DISTINCT_FEEDS_UNSUPPORTED';
  /**
   * TempAdUnionId must be use when adding template ads.
   */
  public const AD_ERROR_MUST_USE_TEMP_AD_UNION_ID_ON_ADD = 'MUST_USE_TEMP_AD_UNION_ID_ON_ADD';
  /**
   * The string has too many characters.
   */
  public const AD_ERROR_TOO_LONG = 'TOO_LONG';
  /**
   * The string has too few characters.
   */
  public const AD_ERROR_TOO_SHORT = 'TOO_SHORT';
  /**
   * Ad union dimensions cannot change for saved ads.
   */
  public const AD_ERROR_UNION_DIMENSIONS_CANNOT_CHANGE = 'UNION_DIMENSIONS_CANNOT_CHANGE';
  /**
   * Address component is not {country, lat, lng}.
   */
  public const AD_ERROR_UNKNOWN_ADDRESS_COMPONENT = 'UNKNOWN_ADDRESS_COMPONENT';
  /**
   * Unknown unique field name
   */
  public const AD_ERROR_UNKNOWN_FIELD_NAME = 'UNKNOWN_FIELD_NAME';
  /**
   * Unknown unique name (template element type specifier)
   */
  public const AD_ERROR_UNKNOWN_UNIQUE_NAME = 'UNKNOWN_UNIQUE_NAME';
  /**
   * Unsupported ad dimension
   */
  public const AD_ERROR_UNSUPPORTED_DIMENSIONS = 'UNSUPPORTED_DIMENSIONS';
  /**
   * URL starts with an invalid scheme.
   */
  public const AD_ERROR_URL_INVALID_SCHEME = 'URL_INVALID_SCHEME';
  /**
   * URL ends with an invalid top-level domain name.
   */
  public const AD_ERROR_URL_INVALID_TOP_LEVEL_DOMAIN = 'URL_INVALID_TOP_LEVEL_DOMAIN';
  /**
   * URL contains illegal characters.
   */
  public const AD_ERROR_URL_MALFORMED = 'URL_MALFORMED';
  /**
   * URL must contain a host name.
   */
  public const AD_ERROR_URL_NO_HOST = 'URL_NO_HOST';
  /**
   * URL not equivalent during upgrade.
   */
  public const AD_ERROR_URL_NOT_EQUIVALENT = 'URL_NOT_EQUIVALENT';
  /**
   * URL host name too long to be stored as visible URL (applies to Ad Exchange
   * ads)
   */
  public const AD_ERROR_URL_HOST_NAME_TOO_LONG = 'URL_HOST_NAME_TOO_LONG';
  /**
   * URL must start with a scheme.
   */
  public const AD_ERROR_URL_NO_SCHEME = 'URL_NO_SCHEME';
  /**
   * URL should end in a valid domain extension, such as .com or .net.
   */
  public const AD_ERROR_URL_NO_TOP_LEVEL_DOMAIN = 'URL_NO_TOP_LEVEL_DOMAIN';
  /**
   * URL must not end with a path.
   */
  public const AD_ERROR_URL_PATH_NOT_ALLOWED = 'URL_PATH_NOT_ALLOWED';
  /**
   * URL must not specify a port.
   */
  public const AD_ERROR_URL_PORT_NOT_ALLOWED = 'URL_PORT_NOT_ALLOWED';
  /**
   * URL must not contain a query.
   */
  public const AD_ERROR_URL_QUERY_NOT_ALLOWED = 'URL_QUERY_NOT_ALLOWED';
  /**
   * A url scheme is not allowed in front of tag in tracking url template (for
   * example, http://{lpurl})
   */
  public const AD_ERROR_URL_SCHEME_BEFORE_EXPANDED_DYNAMIC_SEARCH_AD_TAG = 'URL_SCHEME_BEFORE_EXPANDED_DYNAMIC_SEARCH_AD_TAG';
  /**
   * The user does not have permissions to create a template ad for the given
   * template.
   */
  public const AD_ERROR_USER_DOES_NOT_HAVE_ACCESS_TO_TEMPLATE = 'USER_DOES_NOT_HAVE_ACCESS_TO_TEMPLATE';
  /**
   * Expandable setting is inconsistent/wrong. For example, an AdX ad is invalid
   * if it has a expandable vendor format but no expanding directions specified,
   * or expanding directions is specified, but the vendor format is not
   * expandable.
   */
  public const AD_ERROR_INCONSISTENT_EXPANDABLE_SETTINGS = 'INCONSISTENT_EXPANDABLE_SETTINGS';
  /**
   * Format is invalid
   */
  public const AD_ERROR_INVALID_FORMAT = 'INVALID_FORMAT';
  /**
   * The text of this field did not match a pattern of allowed values.
   */
  public const AD_ERROR_INVALID_FIELD_TEXT = 'INVALID_FIELD_TEXT';
  /**
   * Template element is mising
   */
  public const AD_ERROR_ELEMENT_NOT_PRESENT = 'ELEMENT_NOT_PRESENT';
  /**
   * Error occurred during image processing
   */
  public const AD_ERROR_IMAGE_ERROR = 'IMAGE_ERROR';
  /**
   * The value is not within the valid range
   */
  public const AD_ERROR_VALUE_NOT_IN_RANGE = 'VALUE_NOT_IN_RANGE';
  /**
   * Template element field is not present
   */
  public const AD_ERROR_FIELD_NOT_PRESENT = 'FIELD_NOT_PRESENT';
  /**
   * Address is incomplete
   */
  public const AD_ERROR_ADDRESS_NOT_COMPLETE = 'ADDRESS_NOT_COMPLETE';
  /**
   * Invalid address
   */
  public const AD_ERROR_ADDRESS_INVALID = 'ADDRESS_INVALID';
  /**
   * Error retrieving specified video
   */
  public const AD_ERROR_VIDEO_RETRIEVAL_ERROR = 'VIDEO_RETRIEVAL_ERROR';
  /**
   * Error processing audio
   */
  public const AD_ERROR_AUDIO_ERROR = 'AUDIO_ERROR';
  /**
   * Display URL is incorrect for YouTube PYV ads
   */
  public const AD_ERROR_INVALID_YOUTUBE_DISPLAY_URL = 'INVALID_YOUTUBE_DISPLAY_URL';
  /**
   * Too many product Images in GmailAd
   */
  public const AD_ERROR_TOO_MANY_PRODUCT_IMAGES = 'TOO_MANY_PRODUCT_IMAGES';
  /**
   * Too many product Videos in GmailAd
   */
  public const AD_ERROR_TOO_MANY_PRODUCT_VIDEOS = 'TOO_MANY_PRODUCT_VIDEOS';
  /**
   * The device preference is not compatible with the ad type
   */
  public const AD_ERROR_INCOMPATIBLE_AD_TYPE_AND_DEVICE_PREFERENCE = 'INCOMPATIBLE_AD_TYPE_AND_DEVICE_PREFERENCE';
  /**
   * Call tracking is not supported for specified country.
   */
  public const AD_ERROR_CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 'CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY';
  /**
   * Carrier specific short number is not allowed.
   */
  public const AD_ERROR_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 'CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED';
  /**
   * Specified phone number type is disallowed.
   */
  public const AD_ERROR_DISALLOWED_NUMBER_TYPE = 'DISALLOWED_NUMBER_TYPE';
  /**
   * Phone number not supported for country.
   */
  public const AD_ERROR_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 'PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY';
  /**
   * Phone number not supported with call tracking enabled for country.
   */
  public const AD_ERROR_PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY = 'PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY';
  /**
   * Premium rate phone number is not allowed.
   */
  public const AD_ERROR_PREMIUM_RATE_NUMBER_NOT_ALLOWED = 'PREMIUM_RATE_NUMBER_NOT_ALLOWED';
  /**
   * Vanity phone number is not allowed.
   */
  public const AD_ERROR_VANITY_PHONE_NUMBER_NOT_ALLOWED = 'VANITY_PHONE_NUMBER_NOT_ALLOWED';
  /**
   * Invalid call conversion type id.
   */
  public const AD_ERROR_INVALID_CALL_CONVERSION_TYPE_ID = 'INVALID_CALL_CONVERSION_TYPE_ID';
  /**
   * Cannot disable call conversion and set conversion type id.
   */
  public const AD_ERROR_CANNOT_DISABLE_CALL_CONVERSION_AND_SET_CONVERSION_TYPE_ID = 'CANNOT_DISABLE_CALL_CONVERSION_AND_SET_CONVERSION_TYPE_ID';
  /**
   * Cannot set path2 without path1.
   */
  public const AD_ERROR_CANNOT_SET_PATH2_WITHOUT_PATH1 = 'CANNOT_SET_PATH2_WITHOUT_PATH1';
  /**
   * Missing domain name in campaign setting when adding expanded dynamic search
   * ad.
   */
  public const AD_ERROR_MISSING_DYNAMIC_SEARCH_ADS_SETTING_DOMAIN_NAME = 'MISSING_DYNAMIC_SEARCH_ADS_SETTING_DOMAIN_NAME';
  /**
   * The associated ad is not compatible with restriction type.
   */
  public const AD_ERROR_INCOMPATIBLE_WITH_RESTRICTION_TYPE = 'INCOMPATIBLE_WITH_RESTRICTION_TYPE';
  /**
   * Consent for call recording is required for creating/updating call only ads.
   * See https://support.google.com/google-ads/answer/7412639.
   */
  public const AD_ERROR_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 'CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED';
  /**
   * Either an image or a media bundle is required in a display upload ad.
   */
  public const AD_ERROR_MISSING_IMAGE_OR_MEDIA_BUNDLE = 'MISSING_IMAGE_OR_MEDIA_BUNDLE';
  /**
   * The display upload product type is not supported in this campaign.
   */
  public const AD_ERROR_PRODUCT_TYPE_NOT_SUPPORTED_IN_THIS_CAMPAIGN = 'PRODUCT_TYPE_NOT_SUPPORTED_IN_THIS_CAMPAIGN';
  /**
   * The default value of an ad placeholder can not be the empty string.
   */
  public const AD_ERROR_PLACEHOLDER_CANNOT_HAVE_EMPTY_DEFAULT_VALUE = 'PLACEHOLDER_CANNOT_HAVE_EMPTY_DEFAULT_VALUE';
  /**
   * Ad placeholders with countdown functions must not have a default value.
   */
  public const AD_ERROR_PLACEHOLDER_COUNTDOWN_FUNCTION_CANNOT_HAVE_DEFAULT_VALUE = 'PLACEHOLDER_COUNTDOWN_FUNCTION_CANNOT_HAVE_DEFAULT_VALUE';
  /**
   * A previous ad placeholder that had a default value was found which means
   * that all (non-countdown) placeholders must have a default value. This ad
   * placeholder does not have a default value.
   */
  public const AD_ERROR_PLACEHOLDER_DEFAULT_VALUE_MISSING = 'PLACEHOLDER_DEFAULT_VALUE_MISSING';
  /**
   * A previous ad placeholder that did not have a default value was found which
   * means that no placeholders may have a default value. This ad placeholder
   * does have a default value.
   */
  public const AD_ERROR_UNEXPECTED_PLACEHOLDER_DEFAULT_VALUE = 'UNEXPECTED_PLACEHOLDER_DEFAULT_VALUE';
  /**
   * Two ad customizers may not be directly adjacent in an ad text. They must be
   * separated by at least one character.
   */
  public const AD_ERROR_AD_CUSTOMIZERS_MAY_NOT_BE_ADJACENT = 'AD_CUSTOMIZERS_MAY_NOT_BE_ADJACENT';
  /**
   * The ad is not associated with any enabled AdGroupAd, and cannot be updated.
   */
  public const AD_ERROR_UPDATING_AD_WITH_NO_ENABLED_ASSOCIATION = 'UPDATING_AD_WITH_NO_ENABLED_ASSOCIATION';
  /**
   * Call Ad verification url and final url don't have same domain.
   */
  public const AD_ERROR_CALL_AD_VERIFICATION_URL_FINAL_URL_DOES_NOT_HAVE_SAME_DOMAIN = 'CALL_AD_VERIFICATION_URL_FINAL_URL_DOES_NOT_HAVE_SAME_DOMAIN';
  /**
   * Final url and verification url cannot both be empty for call ads.
   */
  public const AD_ERROR_CALL_AD_FINAL_URL_AND_VERIFICATION_URL_CANNOT_BOTH_BE_EMPTY = 'CALL_AD_FINAL_URL_AND_VERIFICATION_URL_CANNOT_BOTH_BE_EMPTY';
  /**
   * Too many ad customizers in one asset.
   */
  public const AD_ERROR_TOO_MANY_AD_CUSTOMIZERS = 'TOO_MANY_AD_CUSTOMIZERS';
  /**
   * The ad customizer tag is recognized, but the format is invalid.
   */
  public const AD_ERROR_INVALID_AD_CUSTOMIZER_FORMAT = 'INVALID_AD_CUSTOMIZER_FORMAT';
  /**
   * Customizer tags cannot be nested.
   */
  public const AD_ERROR_NESTED_AD_CUSTOMIZER_SYNTAX = 'NESTED_AD_CUSTOMIZER_SYNTAX';
  /**
   * The ad customizer syntax used in the ad is not supported.
   */
  public const AD_ERROR_UNSUPPORTED_AD_CUSTOMIZER_SYNTAX = 'UNSUPPORTED_AD_CUSTOMIZER_SYNTAX';
  /**
   * There exists unpaired brace in the ad customizer tag.
   */
  public const AD_ERROR_UNPAIRED_BRACE_IN_AD_CUSTOMIZER_TAG = 'UNPAIRED_BRACE_IN_AD_CUSTOMIZER_TAG';
  /**
   * More than one type of countdown tag exists among all text lines.
   */
  public const AD_ERROR_MORE_THAN_ONE_COUNTDOWN_TAG_TYPE_EXISTS = 'MORE_THAN_ONE_COUNTDOWN_TAG_TYPE_EXISTS';
  /**
   * Date time in the countdown tag is invalid.
   */
  public const AD_ERROR_DATE_TIME_IN_COUNTDOWN_TAG_IS_INVALID = 'DATE_TIME_IN_COUNTDOWN_TAG_IS_INVALID';
  /**
   * Date time in the countdown tag is in the past.
   */
  public const AD_ERROR_DATE_TIME_IN_COUNTDOWN_TAG_IS_PAST = 'DATE_TIME_IN_COUNTDOWN_TAG_IS_PAST';
  /**
   * Cannot recognize the ad customizer tag.
   */
  public const AD_ERROR_UNRECOGNIZED_AD_CUSTOMIZER_TAG_FOUND = 'UNRECOGNIZED_AD_CUSTOMIZER_TAG_FOUND';
  /**
   * Customizer type forbidden for this field.
   */
  public const AD_ERROR_CUSTOMIZER_TYPE_FORBIDDEN_FOR_FIELD = 'CUSTOMIZER_TYPE_FORBIDDEN_FOR_FIELD';
  /**
   * Customizer attribute name is invalid.
   */
  public const AD_ERROR_INVALID_CUSTOMIZER_ATTRIBUTE_NAME = 'INVALID_CUSTOMIZER_ATTRIBUTE_NAME';
  /**
   * App store value does not match the value of the app store in the app
   * specified in the campaign.
   */
  public const AD_ERROR_STORE_MISMATCH = 'STORE_MISMATCH';
  /**
   * Missing required image aspect ratio.
   */
  public const AD_ERROR_MISSING_REQUIRED_IMAGE_ASPECT_RATIO = 'MISSING_REQUIRED_IMAGE_ASPECT_RATIO';
  /**
   * Aspect ratios mismatch between different assets.
   */
  public const AD_ERROR_MISMATCHED_ASPECT_RATIOS = 'MISMATCHED_ASPECT_RATIOS';
  /**
   * Images must be unique between different carousel card assets.
   */
  public const AD_ERROR_DUPLICATE_IMAGE_ACROSS_CAROUSEL_CARDS = 'DUPLICATE_IMAGE_ACROSS_CAROUSEL_CARDS';
  /**
   * For video ads sequencing, YouTube video asset ID has to be defined in
   * `campaign.video_campaign_settings.video_ad_sequence.steps.asset_id`.
   */
  public const AD_ERROR_INVALID_YOUTUBE_VIDEO_ASSET_ID_FOR_VIDEO_ADS_SEQUENCING = 'INVALID_YOUTUBE_VIDEO_ASSET_ID_FOR_VIDEO_ADS_SEQUENCING';
  /**
   * Enum unspecified.
   */
  public const AD_GROUP_AD_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_GROUP_AD_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * No link found between the adgroup ad and the label.
   */
  public const AD_GROUP_AD_ERROR_AD_GROUP_AD_LABEL_DOES_NOT_EXIST = 'AD_GROUP_AD_LABEL_DOES_NOT_EXIST';
  /**
   * The label has already been attached to the adgroup ad.
   */
  public const AD_GROUP_AD_ERROR_AD_GROUP_AD_LABEL_ALREADY_EXISTS = 'AD_GROUP_AD_LABEL_ALREADY_EXISTS';
  /**
   * The specified ad was not found in the adgroup
   */
  public const AD_GROUP_AD_ERROR_AD_NOT_UNDER_ADGROUP = 'AD_NOT_UNDER_ADGROUP';
  /**
   * Removed ads may not be modified
   */
  public const AD_GROUP_AD_ERROR_CANNOT_OPERATE_ON_REMOVED_ADGROUPAD = 'CANNOT_OPERATE_ON_REMOVED_ADGROUPAD';
  /**
   * An ad of this type is deprecated and cannot be created. Only deletions are
   * permitted.
   */
  public const AD_GROUP_AD_ERROR_CANNOT_CREATE_DEPRECATED_ADS = 'CANNOT_CREATE_DEPRECATED_ADS';
  /**
   * Text ads are deprecated and cannot be created. Use expanded text ads
   * instead.
   */
  public const AD_GROUP_AD_ERROR_CANNOT_CREATE_TEXT_ADS = 'CANNOT_CREATE_TEXT_ADS';
  /**
   * A required field was not specified or is an empty string.
   */
  public const AD_GROUP_AD_ERROR_EMPTY_FIELD = 'EMPTY_FIELD';
  /**
   * An ad may only be modified once per call
   */
  public const AD_GROUP_AD_ERROR_RESOURCE_REFERENCED_IN_MULTIPLE_OPS = 'RESOURCE_REFERENCED_IN_MULTIPLE_OPS';
  /**
   * AdGroupAds with the given ad type cannot be paused.
   */
  public const AD_GROUP_AD_ERROR_AD_TYPE_CANNOT_BE_PAUSED = 'AD_TYPE_CANNOT_BE_PAUSED';
  /**
   * AdGroupAds with the given ad type cannot be removed.
   */
  public const AD_GROUP_AD_ERROR_AD_TYPE_CANNOT_BE_REMOVED = 'AD_TYPE_CANNOT_BE_REMOVED';
  /**
   * An ad of this type is deprecated and cannot be updated. Only removals are
   * permitted.
   */
  public const AD_GROUP_AD_ERROR_CANNOT_UPDATE_DEPRECATED_ADS = 'CANNOT_UPDATE_DEPRECATED_ADS';
  /**
   * Ad sharing is not allowed.
   */
  public const AD_GROUP_AD_ERROR_AD_SHARING_NOT_ALLOWED = 'AD_SHARING_NOT_ALLOWED';
  /**
   * Enum unspecified.
   */
  public const AD_GROUP_BID_MODIFIER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_GROUP_BID_MODIFIER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The criterion ID does not support bid modification.
   */
  public const AD_GROUP_BID_MODIFIER_ERROR_CRITERION_ID_NOT_SUPPORTED = 'CRITERION_ID_NOT_SUPPORTED';
  /**
   * Cannot override the bid modifier for the given criterion ID if the parent
   * campaign is opted out of the same criterion.
   */
  public const AD_GROUP_BID_MODIFIER_ERROR_CANNOT_OVERRIDE_OPTED_OUT_CAMPAIGN_CRITERION_BID_MODIFIER = 'CANNOT_OVERRIDE_OPTED_OUT_CAMPAIGN_CRITERION_BID_MODIFIER';
  /**
   * Enum unspecified.
   */
  public const AD_GROUP_CRITERION_CUSTOMIZER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_GROUP_CRITERION_CUSTOMIZER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Only keyword type criterion is allowed to link customizer attribute.
   */
  public const AD_GROUP_CRITERION_CUSTOMIZER_ERROR_CRITERION_IS_NOT_KEYWORD = 'CRITERION_IS_NOT_KEYWORD';
  /**
   * Enum unspecified.
   */
  public const AD_GROUP_CRITERION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_GROUP_CRITERION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * No link found between the AdGroupCriterion and the label.
   */
  public const AD_GROUP_CRITERION_ERROR_AD_GROUP_CRITERION_LABEL_DOES_NOT_EXIST = 'AD_GROUP_CRITERION_LABEL_DOES_NOT_EXIST';
  /**
   * The label has already been attached to the AdGroupCriterion.
   */
  public const AD_GROUP_CRITERION_ERROR_AD_GROUP_CRITERION_LABEL_ALREADY_EXISTS = 'AD_GROUP_CRITERION_LABEL_ALREADY_EXISTS';
  /**
   * Negative AdGroupCriterion cannot have labels.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_ADD_LABEL_TO_NEGATIVE_CRITERION = 'CANNOT_ADD_LABEL_TO_NEGATIVE_CRITERION';
  /**
   * Too many operations for a single call.
   */
  public const AD_GROUP_CRITERION_ERROR_TOO_MANY_OPERATIONS = 'TOO_MANY_OPERATIONS';
  /**
   * Negative ad group criteria are not updateable.
   */
  public const AD_GROUP_CRITERION_ERROR_CANT_UPDATE_NEGATIVE = 'CANT_UPDATE_NEGATIVE';
  /**
   * Concrete type of criterion (keyword v.s. placement) is required for ADD and
   * SET operations.
   */
  public const AD_GROUP_CRITERION_ERROR_CONCRETE_TYPE_REQUIRED = 'CONCRETE_TYPE_REQUIRED';
  /**
   * Bid is incompatible with ad group's bidding settings.
   */
  public const AD_GROUP_CRITERION_ERROR_BID_INCOMPATIBLE_WITH_ADGROUP = 'BID_INCOMPATIBLE_WITH_ADGROUP';
  /**
   * Cannot target and exclude the same criterion at once.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_TARGET_AND_EXCLUDE = 'CANNOT_TARGET_AND_EXCLUDE';
  /**
   * The URL of a placement is invalid.
   */
  public const AD_GROUP_CRITERION_ERROR_ILLEGAL_URL = 'ILLEGAL_URL';
  /**
   * Keyword text was invalid.
   */
  public const AD_GROUP_CRITERION_ERROR_INVALID_KEYWORD_TEXT = 'INVALID_KEYWORD_TEXT';
  /**
   * Destination URL was invalid.
   */
  public const AD_GROUP_CRITERION_ERROR_INVALID_DESTINATION_URL = 'INVALID_DESTINATION_URL';
  /**
   * The destination url must contain at least one tag (for example, {lpurl})
   */
  public const AD_GROUP_CRITERION_ERROR_MISSING_DESTINATION_URL_TAG = 'MISSING_DESTINATION_URL_TAG';
  /**
   * Keyword-level cpm bid is not supported
   */
  public const AD_GROUP_CRITERION_ERROR_KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM = 'KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM';
  /**
   * For example, cannot add a biddable ad group criterion that had been
   * removed.
   */
  public const AD_GROUP_CRITERION_ERROR_INVALID_USER_STATUS = 'INVALID_USER_STATUS';
  /**
   * Criteria type cannot be targeted for the ad group. Either the account is
   * restricted to keywords only, the criteria type is incompatible with the
   * campaign's bidding strategy, or the criteria type can only be applied to
   * campaigns.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_ADD_CRITERIA_TYPE = 'CANNOT_ADD_CRITERIA_TYPE';
  /**
   * Criteria type cannot be excluded for the ad group. Refer to the
   * documentation for a specific criterion to check if it is excludable.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_EXCLUDE_CRITERIA_TYPE = 'CANNOT_EXCLUDE_CRITERIA_TYPE';
  /**
   * Partial failure is not supported for shopping campaign mutate operations.
   */
  public const AD_GROUP_CRITERION_ERROR_CAMPAIGN_TYPE_NOT_COMPATIBLE_WITH_PARTIAL_FAILURE = 'CAMPAIGN_TYPE_NOT_COMPATIBLE_WITH_PARTIAL_FAILURE';
  /**
   * Operations in the mutate request changes too many shopping ad groups. Split
   * requests for multiple shopping ad groups across multiple requests.
   */
  public const AD_GROUP_CRITERION_ERROR_OPERATIONS_FOR_TOO_MANY_SHOPPING_ADGROUPS = 'OPERATIONS_FOR_TOO_MANY_SHOPPING_ADGROUPS';
  /**
   * Not allowed to modify url fields of an ad group criterion if there are
   * duplicate elements for that ad group criterion in the request.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_MODIFY_URL_FIELDS_WITH_DUPLICATE_ELEMENTS = 'CANNOT_MODIFY_URL_FIELDS_WITH_DUPLICATE_ELEMENTS';
  /**
   * Cannot set url fields without also setting final urls.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_SET_WITHOUT_FINAL_URLS = 'CANNOT_SET_WITHOUT_FINAL_URLS';
  /**
   * Cannot clear final urls if final mobile urls exist.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_CLEAR_FINAL_URLS_IF_FINAL_MOBILE_URLS_EXIST = 'CANNOT_CLEAR_FINAL_URLS_IF_FINAL_MOBILE_URLS_EXIST';
  /**
   * Cannot clear final urls if final app urls exist.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_CLEAR_FINAL_URLS_IF_FINAL_APP_URLS_EXIST = 'CANNOT_CLEAR_FINAL_URLS_IF_FINAL_APP_URLS_EXIST';
  /**
   * Cannot clear final urls if tracking url template exists.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_CLEAR_FINAL_URLS_IF_TRACKING_URL_TEMPLATE_EXISTS = 'CANNOT_CLEAR_FINAL_URLS_IF_TRACKING_URL_TEMPLATE_EXISTS';
  /**
   * Cannot clear final urls if url custom parameters exist.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_CLEAR_FINAL_URLS_IF_URL_CUSTOM_PARAMETERS_EXIST = 'CANNOT_CLEAR_FINAL_URLS_IF_URL_CUSTOM_PARAMETERS_EXIST';
  /**
   * Cannot set both destination url and final urls.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_SET_BOTH_DESTINATION_URL_AND_FINAL_URLS = 'CANNOT_SET_BOTH_DESTINATION_URL_AND_FINAL_URLS';
  /**
   * Cannot set both destination url and tracking url template.
   */
  public const AD_GROUP_CRITERION_ERROR_CANNOT_SET_BOTH_DESTINATION_URL_AND_TRACKING_URL_TEMPLATE = 'CANNOT_SET_BOTH_DESTINATION_URL_AND_TRACKING_URL_TEMPLATE';
  /**
   * Final urls are not supported for this criterion type.
   */
  public const AD_GROUP_CRITERION_ERROR_FINAL_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE = 'FINAL_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE';
  /**
   * Final mobile urls are not supported for this criterion type.
   */
  public const AD_GROUP_CRITERION_ERROR_FINAL_MOBILE_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE = 'FINAL_MOBILE_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE';
  /**
   * Enum unspecified.
   */
  public const AD_GROUP_CUSTOMIZER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_GROUP_CUSTOMIZER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Enum unspecified.
   */
  public const AD_GROUP_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_GROUP_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * AdGroup with the same name already exists for the campaign.
   */
  public const AD_GROUP_ERROR_DUPLICATE_ADGROUP_NAME = 'DUPLICATE_ADGROUP_NAME';
  /**
   * AdGroup name is not valid.
   */
  public const AD_GROUP_ERROR_INVALID_ADGROUP_NAME = 'INVALID_ADGROUP_NAME';
  /**
   * Advertiser is not allowed to target sites or set site bids that are not on
   * the Google Search Network.
   */
  public const AD_GROUP_ERROR_ADVERTISER_NOT_ON_CONTENT_NETWORK = 'ADVERTISER_NOT_ON_CONTENT_NETWORK';
  /**
   * Bid amount is too big.
   */
  public const AD_GROUP_ERROR_BID_TOO_BIG = 'BID_TOO_BIG';
  /**
   * AdGroup bid does not match the campaign's bidding strategy.
   */
  public const AD_GROUP_ERROR_BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH = 'BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH';
  /**
   * AdGroup name is required for Add.
   */
  public const AD_GROUP_ERROR_MISSING_ADGROUP_NAME = 'MISSING_ADGROUP_NAME';
  /**
   * No link found between the ad group and the label.
   */
  public const AD_GROUP_ERROR_ADGROUP_LABEL_DOES_NOT_EXIST = 'ADGROUP_LABEL_DOES_NOT_EXIST';
  /**
   * The label has already been attached to the ad group.
   */
  public const AD_GROUP_ERROR_ADGROUP_LABEL_ALREADY_EXISTS = 'ADGROUP_LABEL_ALREADY_EXISTS';
  /**
   * The CriterionTypeGroup is not supported for the content bid dimension.
   */
  public const AD_GROUP_ERROR_INVALID_CONTENT_BID_CRITERION_TYPE_GROUP = 'INVALID_CONTENT_BID_CRITERION_TYPE_GROUP';
  /**
   * The ad group type is not compatible with the campaign channel type.
   */
  public const AD_GROUP_ERROR_AD_GROUP_TYPE_NOT_VALID_FOR_ADVERTISING_CHANNEL_TYPE = 'AD_GROUP_TYPE_NOT_VALID_FOR_ADVERTISING_CHANNEL_TYPE';
  /**
   * The ad group type is not supported in the country of sale of the campaign.
   */
  public const AD_GROUP_ERROR_ADGROUP_TYPE_NOT_SUPPORTED_FOR_CAMPAIGN_SALES_COUNTRY = 'ADGROUP_TYPE_NOT_SUPPORTED_FOR_CAMPAIGN_SALES_COUNTRY';
  /**
   * Ad groups of AdGroupType.SEARCH_DYNAMIC_ADS can only be added to campaigns
   * that have DynamicSearchAdsSetting attached.
   */
  public const AD_GROUP_ERROR_CANNOT_ADD_ADGROUP_OF_TYPE_DSA_TO_CAMPAIGN_WITHOUT_DSA_SETTING = 'CANNOT_ADD_ADGROUP_OF_TYPE_DSA_TO_CAMPAIGN_WITHOUT_DSA_SETTING';
  /**
   * Promoted hotels ad groups are only available to customers on the allow-
   * list.
   */
  public const AD_GROUP_ERROR_PROMOTED_HOTEL_AD_GROUPS_NOT_AVAILABLE_FOR_CUSTOMER = 'PROMOTED_HOTEL_AD_GROUPS_NOT_AVAILABLE_FOR_CUSTOMER';
  /**
   * The field type cannot be excluded because an active ad group-asset link of
   * this type exists.
   */
  public const AD_GROUP_ERROR_INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE = 'INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE';
  /**
   * The asset set type is invalid for setting the
   * excluded_parent_asset_set_types field.
   */
  public const AD_GROUP_ERROR_INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE = 'INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE';
  /**
   * Cannot add ad groups for the campaign type.
   */
  public const AD_GROUP_ERROR_CANNOT_ADD_AD_GROUP_FOR_CAMPAIGN_TYPE = 'CANNOT_ADD_AD_GROUP_FOR_CAMPAIGN_TYPE';
  /**
   * Invalid status for the ad group.
   */
  public const AD_GROUP_ERROR_INVALID_STATUS = 'INVALID_STATUS';
  /**
   * For video ads sequencing, AdGroup `step_id` has to use a `step_id` defined
   * in `campaign.video_campaign_settings.video_ad_sequence`.
   */
  public const AD_GROUP_ERROR_INVALID_STEP_ID_FOR_VIDEO_ADS_SEQUENCING = 'INVALID_STEP_ID_FOR_VIDEO_ADS_SEQUENCING';
  /**
   * For video ads sequencing, AdGroup type has to use a type defined in
   * `campaign.video_campaign_settings.video_ad_sequence`.
   */
  public const AD_GROUP_ERROR_INVALID_AD_GROUP_TYPE_FOR_VIDEO_ADS_SEQUENCING = 'INVALID_AD_GROUP_TYPE_FOR_VIDEO_ADS_SEQUENCING';
  /**
   * Only one AdGroup is allowed for each step ID in video ads sequencing.
   */
  public const AD_GROUP_ERROR_DUPLICATE_STEP_ID = 'DUPLICATE_STEP_ID';
  /**
   * At least one Vertical Ads format must be enabled for a campaign under
   * Travel Ads in Search Campaigns.
   */
  public const AD_GROUP_ERROR_INVALID_VERTICAL_ADS_FORMAT_SETTING = 'INVALID_VERTICAL_ADS_FORMAT_SETTING';
  /**
   * AI max setting must be enabled to enable Vertical Ads formats for a
   * campaign under Travel Ads in Search Campaigns.
   */
  public const AD_GROUP_ERROR_VERTICAL_ADS_FORMAT_SETTING_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_AI_MAX = 'VERTICAL_ADS_FORMAT_SETTING_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_AI_MAX';
  /**
   * An enabled travel feed must be linked to enable Vertical Ads formats for a
   * campaign under Travel Ads in Search Campaigns.
   */
  public const AD_GROUP_ERROR_VERTICAL_ADS_FORMAT_SETTING_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_ENABLED_TRAVEL_FEED = 'VERTICAL_ADS_FORMAT_SETTING_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_ENABLED_TRAVEL_FEED';
  /**
   * Enum unspecified.
   */
  public const AD_GROUP_FEED_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_GROUP_FEED_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * An active feed already exists for this ad group and place holder type.
   */
  public const AD_GROUP_FEED_ERROR_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 'FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE';
  /**
   * The specified feed is removed.
   */
  public const AD_GROUP_FEED_ERROR_CANNOT_CREATE_FOR_REMOVED_FEED = 'CANNOT_CREATE_FOR_REMOVED_FEED';
  /**
   * The AdGroupFeed already exists. UPDATE operation should be used to modify
   * the existing AdGroupFeed.
   */
  public const AD_GROUP_FEED_ERROR_ADGROUP_FEED_ALREADY_EXISTS = 'ADGROUP_FEED_ALREADY_EXISTS';
  /**
   * Cannot operate on removed AdGroupFeed.
   */
  public const AD_GROUP_FEED_ERROR_CANNOT_OPERATE_ON_REMOVED_ADGROUP_FEED = 'CANNOT_OPERATE_ON_REMOVED_ADGROUP_FEED';
  /**
   * Invalid placeholder type.
   */
  public const AD_GROUP_FEED_ERROR_INVALID_PLACEHOLDER_TYPE = 'INVALID_PLACEHOLDER_TYPE';
  /**
   * Feed mapping for this placeholder type does not exist.
   */
  public const AD_GROUP_FEED_ERROR_MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE = 'MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE';
  /**
   * Location AdGroupFeeds cannot be created unless there is a location
   * CustomerFeed for the specified feed.
   */
  public const AD_GROUP_FEED_ERROR_NO_EXISTING_LOCATION_CUSTOMER_FEED = 'NO_EXISTING_LOCATION_CUSTOMER_FEED';
  /**
   * Enum unspecified.
   */
  public const AD_PARAMETER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_PARAMETER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The ad group criterion must be a keyword criterion.
   */
  public const AD_PARAMETER_ERROR_AD_GROUP_CRITERION_MUST_BE_KEYWORD = 'AD_GROUP_CRITERION_MUST_BE_KEYWORD';
  /**
   * The insertion text is invalid.
   */
  public const AD_PARAMETER_ERROR_INVALID_INSERTION_TEXT_FORMAT = 'INVALID_INSERTION_TEXT_FORMAT';
  /**
   * Enum unspecified.
   */
  public const AD_SHARING_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AD_SHARING_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Error resulting in attempting to add an Ad to an AdGroup that already
   * contains the Ad.
   */
  public const AD_SHARING_ERROR_AD_GROUP_ALREADY_CONTAINS_AD = 'AD_GROUP_ALREADY_CONTAINS_AD';
  /**
   * Ad is not compatible with the AdGroup it is being shared with.
   */
  public const AD_SHARING_ERROR_INCOMPATIBLE_AD_UNDER_AD_GROUP = 'INCOMPATIBLE_AD_UNDER_AD_GROUP';
  /**
   * Cannot add AdGroupAd on inactive Ad.
   */
  public const AD_SHARING_ERROR_CANNOT_SHARE_INACTIVE_AD = 'CANNOT_SHARE_INACTIVE_AD';
  /**
   * Enum unspecified.
   */
  public const ADX_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ADX_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Attempt to use non-AdX feature by AdX customer.
   */
  public const ADX_ERROR_UNSUPPORTED_FEATURE = 'UNSUPPORTED_FEATURE';
  /**
   * Enum unspecified.
   */
  public const ASSET_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ASSET_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The customer is not on the allow-list for this asset type.
   */
  public const ASSET_ERROR_CUSTOMER_NOT_ON_ALLOWLIST_FOR_ASSET_TYPE = 'CUSTOMER_NOT_ON_ALLOWLIST_FOR_ASSET_TYPE';
  /**
   * Assets are duplicated across operations.
   */
  public const ASSET_ERROR_DUPLICATE_ASSET = 'DUPLICATE_ASSET';
  /**
   * The asset name is duplicated, either across operations or with an existing
   * asset.
   */
  public const ASSET_ERROR_DUPLICATE_ASSET_NAME = 'DUPLICATE_ASSET_NAME';
  /**
   * The `Asset.asset_data` oneof is empty.
   */
  public const ASSET_ERROR_ASSET_DATA_IS_MISSING = 'ASSET_DATA_IS_MISSING';
  /**
   * The asset has a name which is different from an existing duplicate that
   * represents the same content.
   */
  public const ASSET_ERROR_CANNOT_MODIFY_ASSET_NAME = 'CANNOT_MODIFY_ASSET_NAME';
  /**
   * The field cannot be set for this asset type.
   */
  public const ASSET_ERROR_FIELD_INCOMPATIBLE_WITH_ASSET_TYPE = 'FIELD_INCOMPATIBLE_WITH_ASSET_TYPE';
  /**
   * Call to action must come from the list of supported values.
   */
  public const ASSET_ERROR_INVALID_CALL_TO_ACTION_TEXT = 'INVALID_CALL_TO_ACTION_TEXT';
  /**
   * A lead form asset is created with an invalid combination of input fields.
   */
  public const ASSET_ERROR_LEAD_FORM_INVALID_FIELDS_COMBINATION = 'LEAD_FORM_INVALID_FIELDS_COMBINATION';
  /**
   * Lead forms require that the Terms of Service have been agreed to before
   * mutates can be executed.
   */
  public const ASSET_ERROR_LEAD_FORM_MISSING_AGREEMENT = 'LEAD_FORM_MISSING_AGREEMENT';
  /**
   * Asset status is invalid in this operation.
   */
  public const ASSET_ERROR_INVALID_ASSET_STATUS = 'INVALID_ASSET_STATUS';
  /**
   * The field cannot be modified by this asset type.
   */
  public const ASSET_ERROR_FIELD_CANNOT_BE_MODIFIED_FOR_ASSET_TYPE = 'FIELD_CANNOT_BE_MODIFIED_FOR_ASSET_TYPE';
  /**
   * Ad schedules for the same asset cannot overlap.
   */
  public const ASSET_ERROR_SCHEDULES_CANNOT_OVERLAP = 'SCHEDULES_CANNOT_OVERLAP';
  /**
   * Cannot set both percent off and money amount off fields of promotion asset.
   */
  public const ASSET_ERROR_PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF = 'PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF';
  /**
   * Cannot set both promotion code and orders over amount fields of promotion
   * asset.
   */
  public const ASSET_ERROR_PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT = 'PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT';
  /**
   * The field has too many decimal places specified.
   */
  public const ASSET_ERROR_TOO_MANY_DECIMAL_PLACES_SPECIFIED = 'TOO_MANY_DECIMAL_PLACES_SPECIFIED';
  /**
   * Duplicate assets across operations, which have identical `Asset.asset_data`
   * oneof, cannot have different asset level fields for asset types which are
   * deduped.
   */
  public const ASSET_ERROR_DUPLICATE_ASSETS_WITH_DIFFERENT_FIELD_VALUE = 'DUPLICATE_ASSETS_WITH_DIFFERENT_FIELD_VALUE';
  /**
   * Carrier-specific short number is not allowed.
   */
  public const ASSET_ERROR_CALL_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 'CALL_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED';
  /**
   * Customer consent required for call recording Terms of Service.
   */
  public const ASSET_ERROR_CALL_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 'CALL_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED';
  /**
   * The type of the specified phone number is not allowed.
   */
  public const ASSET_ERROR_CALL_DISALLOWED_NUMBER_TYPE = 'CALL_DISALLOWED_NUMBER_TYPE';
  /**
   * If the default `call_conversion_action` is not used, the customer must have
   * a `ConversionAction` with the same id and the `ConversionAction` must be
   * call conversion type.
   */
  public const ASSET_ERROR_CALL_INVALID_CONVERSION_ACTION = 'CALL_INVALID_CONVERSION_ACTION';
  /**
   * The country code of the phone number is invalid.
   */
  public const ASSET_ERROR_CALL_INVALID_COUNTRY_CODE = 'CALL_INVALID_COUNTRY_CODE';
  /**
   * The format of the phone number is incorrect.
   */
  public const ASSET_ERROR_CALL_INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 'CALL_INVALID_DOMESTIC_PHONE_NUMBER_FORMAT';
  /**
   * The input phone number is not a valid phone number.
   */
  public const ASSET_ERROR_CALL_INVALID_PHONE_NUMBER = 'CALL_INVALID_PHONE_NUMBER';
  /**
   * The phone number is not supported for this country.
   */
  public const ASSET_ERROR_CALL_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 'CALL_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY';
  /**
   * Premium rate phone number is not allowed.
   */
  public const ASSET_ERROR_CALL_PREMIUM_RATE_NUMBER_NOT_ALLOWED = 'CALL_PREMIUM_RATE_NUMBER_NOT_ALLOWED';
  /**
   * Vanity phone number is not allowed.
   */
  public const ASSET_ERROR_CALL_VANITY_PHONE_NUMBER_NOT_ALLOWED = 'CALL_VANITY_PHONE_NUMBER_NOT_ALLOWED';
  /**
   * `PriceOffering` cannot have the same value for header and description.
   */
  public const ASSET_ERROR_PRICE_HEADER_SAME_AS_DESCRIPTION = 'PRICE_HEADER_SAME_AS_DESCRIPTION';
  /**
   * `AppId` is invalid.
   */
  public const ASSET_ERROR_MOBILE_APP_INVALID_APP_ID = 'MOBILE_APP_INVALID_APP_ID';
  /**
   * Invalid App download URL in final URLs.
   */
  public const ASSET_ERROR_MOBILE_APP_INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL = 'MOBILE_APP_INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL';
  /**
   * Asset name is required for the asset type.
   */
  public const ASSET_ERROR_NAME_REQUIRED_FOR_ASSET_TYPE = 'NAME_REQUIRED_FOR_ASSET_TYPE';
  /**
   * Legacy qualifying questions cannot be in the same Lead Form as custom
   * questions.
   */
  public const ASSET_ERROR_LEAD_FORM_LEGACY_QUALIFYING_QUESTIONS_DISALLOWED = 'LEAD_FORM_LEGACY_QUALIFYING_QUESTIONS_DISALLOWED';
  /**
   * Unique name is required for this asset type.
   */
  public const ASSET_ERROR_NAME_CONFLICT_FOR_ASSET_TYPE = 'NAME_CONFLICT_FOR_ASSET_TYPE';
  /**
   * Cannot modify asset source.
   */
  public const ASSET_ERROR_CANNOT_MODIFY_ASSET_SOURCE = 'CANNOT_MODIFY_ASSET_SOURCE';
  /**
   * User can not modify the automatically created asset.
   */
  public const ASSET_ERROR_CANNOT_MODIFY_AUTOMATICALLY_CREATED_ASSET = 'CANNOT_MODIFY_AUTOMATICALLY_CREATED_ASSET';
  /**
   * Lead Form is disallowed to use `LOCATION` answer type.
   */
  public const ASSET_ERROR_LEAD_FORM_LOCATION_ANSWER_TYPE_DISALLOWED = 'LEAD_FORM_LOCATION_ANSWER_TYPE_DISALLOWED';
  /**
   * Page Feed label text contains invalid characters.
   */
  public const ASSET_ERROR_PAGE_FEED_INVALID_LABEL_TEXT = 'PAGE_FEED_INVALID_LABEL_TEXT';
  /**
   * The customer is not in the allow-list for whatsapp message asset type.
   */
  public const ASSET_ERROR_CUSTOMER_NOT_ON_ALLOWLIST_FOR_WHATSAPP_MESSAGE_ASSETS = 'CUSTOMER_NOT_ON_ALLOWLIST_FOR_WHATSAPP_MESSAGE_ASSETS';
  /**
   * Only customers on the allowlist can create `AppDeepLinkAsset`.
   */
  public const ASSET_ERROR_CUSTOMER_NOT_ON_ALLOWLIST_FOR_APP_DEEP_LINK_ASSETS = 'CUSTOMER_NOT_ON_ALLOWLIST_FOR_APP_DEEP_LINK_ASSETS';
  /**
   * Promotion barcode cannot contain links.
   */
  public const ASSET_ERROR_PROMOTION_BARCODE_CANNOT_CONTAIN_LINKS = 'PROMOTION_BARCODE_CANNOT_CONTAIN_LINKS';
  /**
   * Failed to encode promotion barcode: Invalid format.
   */
  public const ASSET_ERROR_PROMOTION_BARCODE_INVALID_FORMAT = 'PROMOTION_BARCODE_INVALID_FORMAT';
  /**
   * Barcode type is not supported.
   */
  public const ASSET_ERROR_UNSUPPORTED_BARCODE_TYPE = 'UNSUPPORTED_BARCODE_TYPE';
  /**
   * Promotion QR code cannot contain links.
   */
  public const ASSET_ERROR_PROMOTION_QR_CODE_CANNOT_CONTAIN_LINKS = 'PROMOTION_QR_CODE_CANNOT_CONTAIN_LINKS';
  /**
   * Failed to encode promotion QR code: Invalid format.
   */
  public const ASSET_ERROR_PROMOTION_QR_CODE_INVALID_FORMAT = 'PROMOTION_QR_CODE_INVALID_FORMAT';
  /**
   * The customer is not in the allow-list for Business message asset type.
   */
  public const ASSET_ERROR_CUSTOMER_NOT_ON_ALLOWLIST_FOR_MESSAGE_ASSETS = 'CUSTOMER_NOT_ON_ALLOWLIST_FOR_MESSAGE_ASSETS';
  /**
   * Enum unspecified.
   */
  public const ASSET_GENERATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ASSET_GENERATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * No assets were generated for the given request.
   */
  public const ASSET_GENERATION_ERROR_NO_ASSETS_GENERATED = 'NO_ASSETS_GENERATED';
  /**
   * A final URL is required but was not provided, and could not be sourced from
   * the existing generation context because no existing generation context was
   * provided.
   */
  public const ASSET_GENERATION_ERROR_FINAL_URL_REQUIRED = 'FINAL_URL_REQUIRED';
  /**
   * A final URL is required but was not provided, and could not be sourced from
   * the provided existing generation context.
   */
  public const ASSET_GENERATION_ERROR_GENERATION_CONTEXT_MISSING_FINAL_URL = 'GENERATION_CONTEXT_MISSING_FINAL_URL';
  /**
   * The provided final URL is considered sensitive, and assets cannot be
   * generated.
   */
  public const ASSET_GENERATION_ERROR_FINAL_URL_SENSITIVE = 'FINAL_URL_SENSITIVE';
  /**
   * The language of the provided final URL is not supported.
   */
  public const ASSET_GENERATION_ERROR_FINAL_URL_UNSUPPORTED_LANGUAGE = 'FINAL_URL_UNSUPPORTED_LANGUAGE';
  /**
   * The provided final URL was not indexed or could otherwise not be processed.
   */
  public const ASSET_GENERATION_ERROR_FINAL_URL_UNAVAILABLE = 'FINAL_URL_UNAVAILABLE';
  /**
   * Campaign type is required but was not provided, and could not be sourced
   * from the existing generation context because no existing generation context
   * was provided.
   */
  public const ASSET_GENERATION_ERROR_CAMPAIGN_TYPE_REQUIRED = 'CAMPAIGN_TYPE_REQUIRED';
  /**
   * The provided campaign type is not supported for this asset generation
   * operation.
   */
  public const ASSET_GENERATION_ERROR_UNSUPPORTED_CAMPAIGN_TYPE = 'UNSUPPORTED_CAMPAIGN_TYPE';
  /**
   * The provided field type is not supported for this asset generation
   * operation.
   */
  public const ASSET_GENERATION_ERROR_UNSUPPORTED_FIELD_TYPE = 'UNSUPPORTED_FIELD_TYPE';
  /**
   * The provided field type is not supported for the given campaign type.
   */
  public const ASSET_GENERATION_ERROR_UNSUPPORTED_FIELD_TYPE_FOR_CAMPAIGN_TYPE = 'UNSUPPORTED_FIELD_TYPE_FOR_CAMPAIGN_TYPE';
  /**
   * The language of the provided freeform prompt is not supported.
   */
  public const ASSET_GENERATION_ERROR_FREEFORM_PROMPT_UNSUPPORTED_LANGUAGE = 'FREEFORM_PROMPT_UNSUPPORTED_LANGUAGE';
  /**
   * The provided freeform prompt is considered sensitive, and assets cannot be
   * generated.
   */
  public const ASSET_GENERATION_ERROR_FREEFORM_PROMPT_SENSITIVE = 'FREEFORM_PROMPT_SENSITIVE';
  /**
   * The provided image file size exceeds the limit.
   */
  public const ASSET_GENERATION_ERROR_INPUT_IMAGE_FILE_SIZE_TOO_LARGE = 'INPUT_IMAGE_FILE_SIZE_TOO_LARGE';
  /**
   * The provided image is empty.
   */
  public const ASSET_GENERATION_ERROR_INPUT_IMAGE_EMPTY = 'INPUT_IMAGE_EMPTY';
  /**
   * Exactly one generation type must be provided.
   */
  public const ASSET_GENERATION_ERROR_GENERATION_TYPE_REQUIRED = 'GENERATION_TYPE_REQUIRED';
  /**
   * Too many keywords provided in request.
   */
  public const ASSET_GENERATION_ERROR_TOO_MANY_KEYWORDS = 'TOO_MANY_KEYWORDS';
  /**
   * A provided keyword does not have a valid length.
   */
  public const ASSET_GENERATION_ERROR_KEYWORD_INVALID_LENGTH = 'KEYWORD_INVALID_LENGTH';
  /**
   * All keywords were filtered out.
   */
  public const ASSET_GENERATION_ERROR_NO_VALID_KEYWORDS = 'NO_VALID_KEYWORDS';
  /**
   * The provided freeform prompt does not have a valid length.
   */
  public const ASSET_GENERATION_ERROR_FREEFORM_PROMPT_INVALID_LENGTH = 'FREEFORM_PROMPT_INVALID_LENGTH';
  /**
   * The provided freeform prompt references children.
   */
  public const ASSET_GENERATION_ERROR_FREEFORM_PROMPT_REFERENCES_CHILDREN = 'FREEFORM_PROMPT_REFERENCES_CHILDREN';
  /**
   * The provided freeform prompt references specific people.
   */
  public const ASSET_GENERATION_ERROR_FREEFORM_PROMPT_REFERENCES_SPECIFIC_PEOPLE = 'FREEFORM_PROMPT_REFERENCES_SPECIFIC_PEOPLE';
  /**
   * The provided freeform prompt violates Ads Policy.
   */
  public const ASSET_GENERATION_ERROR_FREEFORM_PROMPT_VIOLATES_ADS_POLICY = 'FREEFORM_PROMPT_VIOLATES_ADS_POLICY';
  /**
   * The provided freeform prompt contains brand content.
   */
  public const ASSET_GENERATION_ERROR_FREEFORM_PROMPT_BRAND_CONTENT = 'FREEFORM_PROMPT_BRAND_CONTENT';
  /**
   * The provided image depicts children.
   */
  public const ASSET_GENERATION_ERROR_INPUT_IMAGE_DEPICTS_CHILDREN = 'INPUT_IMAGE_DEPICTS_CHILDREN';
  /**
   * The provided image contains brand content.
   */
  public const ASSET_GENERATION_ERROR_INPUT_IMAGE_CONTAINS_BRAND_CONTENT = 'INPUT_IMAGE_CONTAINS_BRAND_CONTENT';
  /**
   * The provided image contains sensitive subject matter.
   */
  public const ASSET_GENERATION_ERROR_INPUT_IMAGE_SENSITIVE = 'INPUT_IMAGE_SENSITIVE';
  /**
   * The provided image may violate Google Ads policies.
   */
  public const ASSET_GENERATION_ERROR_INPUT_IMAGE_VIOLATES_POLICY = 'INPUT_IMAGE_VIOLATES_POLICY';
  /**
   * All output images were filtered out because they included depictions of
   * children.
   */
  public const ASSET_GENERATION_ERROR_ALL_OUTPUT_IMAGES_FILTERED_OUT_CHILDREN_DEPICTION = 'ALL_OUTPUT_IMAGES_FILTERED_OUT_CHILDREN_DEPICTION';
  /**
   * All output images were filtered out because they included depictions of
   * specific people.
   */
  public const ASSET_GENERATION_ERROR_ALL_OUTPUT_IMAGES_FILTERED_OUT_SPECIFIC_PEOPLE = 'ALL_OUTPUT_IMAGES_FILTERED_OUT_SPECIFIC_PEOPLE';
  /**
   * All output images were filtered out for a reason not covered by a more
   * specific error code.
   */
  public const ASSET_GENERATION_ERROR_ALL_OUTPUT_IMAGES_FILTERED_OUT = 'ALL_OUTPUT_IMAGES_FILTERED_OUT';
  /**
   * At least one input image is required for certain requests.
   */
  public const ASSET_GENERATION_ERROR_INPUT_IMAGE_REQUIRED = 'INPUT_IMAGE_REQUIRED';
  /**
   * The provided image is of an unsupported type.
   */
  public const ASSET_GENERATION_ERROR_INPUT_IMAGE_UNSUPPORTED_IMAGE_TYPE = 'INPUT_IMAGE_UNSUPPORTED_IMAGE_TYPE';
  /**
   * Asset Group could not be found with the provided ID.
   */
  public const ASSET_GENERATION_ERROR_CONTEXT_ASSET_GROUP_NOT_FOUND = 'CONTEXT_ASSET_GROUP_NOT_FOUND';
  /**
   * Ad Group Ad could not be found with the provided ID combination.
   */
  public const ASSET_GENERATION_ERROR_CONTEXT_AD_GROUP_AD_NOT_FOUND = 'CONTEXT_AD_GROUP_AD_NOT_FOUND';
  /**
   * Could not find Campaign associated with the provided generation context.
   */
  public const ASSET_GENERATION_ERROR_CONTEXT_CAMPAIGN_NOT_FOUND = 'CONTEXT_CAMPAIGN_NOT_FOUND';
  /**
   * Enum unspecified.
   */
  public const ASSET_GROUP_ASSET_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ASSET_GROUP_ASSET_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Cannot add duplicated asset group asset.
   */
  public const ASSET_GROUP_ASSET_ERROR_DUPLICATE_RESOURCE = 'DUPLICATE_RESOURCE';
  /**
   * Expandable tags are not allowed in description assets.
   */
  public const ASSET_GROUP_ASSET_ERROR_EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION = 'EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION';
  /**
   * Ad customizers are not supported in assetgroup's text assets.
   */
  public const ASSET_GROUP_ASSET_ERROR_AD_CUSTOMIZER_NOT_SUPPORTED = 'AD_CUSTOMIZER_NOT_SUPPORTED';
  /**
   * Cannot add a HotelPropertyAsset to an AssetGroup that isn't linked to the
   * parent campaign's hotel_property_asset_set field.
   */
  public const ASSET_GROUP_ASSET_ERROR_HOTEL_PROPERTY_ASSET_NOT_LINKED_TO_CAMPAIGN = 'HOTEL_PROPERTY_ASSET_NOT_LINKED_TO_CAMPAIGN';
  /**
   * Enum unspecified.
   */
  public const ASSET_GROUP_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ASSET_GROUP_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Each asset group in a single campaign must have a unique name.
   */
  public const ASSET_GROUP_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * Cannot add asset group for the campaign type.
   */
  public const ASSET_GROUP_ERROR_CANNOT_ADD_ASSET_GROUP_FOR_CAMPAIGN_TYPE = 'CANNOT_ADD_ASSET_GROUP_FOR_CAMPAIGN_TYPE';
  /**
   * Not enough headline asset for a valid asset group.
   */
  public const ASSET_GROUP_ERROR_NOT_ENOUGH_HEADLINE_ASSET = 'NOT_ENOUGH_HEADLINE_ASSET';
  /**
   * Not enough long headline asset for a valid asset group.
   */
  public const ASSET_GROUP_ERROR_NOT_ENOUGH_LONG_HEADLINE_ASSET = 'NOT_ENOUGH_LONG_HEADLINE_ASSET';
  /**
   * Not enough description headline asset for a valid asset group.
   */
  public const ASSET_GROUP_ERROR_NOT_ENOUGH_DESCRIPTION_ASSET = 'NOT_ENOUGH_DESCRIPTION_ASSET';
  /**
   * Not enough business name asset for a valid asset group.
   */
  public const ASSET_GROUP_ERROR_NOT_ENOUGH_BUSINESS_NAME_ASSET = 'NOT_ENOUGH_BUSINESS_NAME_ASSET';
  /**
   * Not enough marketing image asset for a valid asset group.
   */
  public const ASSET_GROUP_ERROR_NOT_ENOUGH_MARKETING_IMAGE_ASSET = 'NOT_ENOUGH_MARKETING_IMAGE_ASSET';
  /**
   * Not enough square marketing image asset for a valid asset group.
   */
  public const ASSET_GROUP_ERROR_NOT_ENOUGH_SQUARE_MARKETING_IMAGE_ASSET = 'NOT_ENOUGH_SQUARE_MARKETING_IMAGE_ASSET';
  /**
   * Not enough logo asset for a valid asset group.
   */
  public const ASSET_GROUP_ERROR_NOT_ENOUGH_LOGO_ASSET = 'NOT_ENOUGH_LOGO_ASSET';
  /**
   * Final url and shopping merchant url does not have the same domain.
   */
  public const ASSET_GROUP_ERROR_FINAL_URL_SHOPPING_MERCHANT_HOME_PAGE_URL_DOMAINS_DIFFER = 'FINAL_URL_SHOPPING_MERCHANT_HOME_PAGE_URL_DOMAINS_DIFFER';
  /**
   * Path1 required when path2 is set.
   */
  public const ASSET_GROUP_ERROR_PATH1_REQUIRED_WHEN_PATH2_IS_SET = 'PATH1_REQUIRED_WHEN_PATH2_IS_SET';
  /**
   * At least one short description asset is required for a valid asset group.
   */
  public const ASSET_GROUP_ERROR_SHORT_DESCRIPTION_REQUIRED = 'SHORT_DESCRIPTION_REQUIRED';
  /**
   * Final url field is required for asset group.
   */
  public const ASSET_GROUP_ERROR_FINAL_URL_REQUIRED = 'FINAL_URL_REQUIRED';
  /**
   * Final url contains invalid domain name.
   */
  public const ASSET_GROUP_ERROR_FINAL_URL_CONTAINS_INVALID_DOMAIN_NAME = 'FINAL_URL_CONTAINS_INVALID_DOMAIN_NAME';
  /**
   * Ad customizers are not supported in asset group's text field.
   */
  public const ASSET_GROUP_ERROR_AD_CUSTOMIZER_NOT_SUPPORTED = 'AD_CUSTOMIZER_NOT_SUPPORTED';
  /**
   * Cannot mutate asset group for campaign with removed status.
   */
  public const ASSET_GROUP_ERROR_CANNOT_MUTATE_ASSET_GROUP_FOR_REMOVED_CAMPAIGN = 'CANNOT_MUTATE_ASSET_GROUP_FOR_REMOVED_CAMPAIGN';
  /**
   * Enum unspecified.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Listing group tree is too deep.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_TREE_TOO_DEEP = 'TREE_TOO_DEEP';
  /**
   * Listing Group UNIT node cannot have children.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_UNIT_CANNOT_HAVE_CHILDREN = 'UNIT_CANNOT_HAVE_CHILDREN';
  /**
   * Listing Group SUBDIVISION node must have everything else child.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_SUBDIVISION_MUST_HAVE_EVERYTHING_ELSE_CHILD = 'SUBDIVISION_MUST_HAVE_EVERYTHING_ELSE_CHILD';
  /**
   * Dimension type of Listing Group must be the same as that of its siblings.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_DIFFERENT_DIMENSION_TYPE_BETWEEN_SIBLINGS = 'DIFFERENT_DIMENSION_TYPE_BETWEEN_SIBLINGS';
  /**
   * The sibling Listing Groups target exactly the same dimension value.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_SAME_DIMENSION_VALUE_BETWEEN_SIBLINGS = 'SAME_DIMENSION_VALUE_BETWEEN_SIBLINGS';
  /**
   * The dimension type is the same as one of the ancestor Listing Groups.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_SAME_DIMENSION_TYPE_BETWEEN_ANCESTORS = 'SAME_DIMENSION_TYPE_BETWEEN_ANCESTORS';
  /**
   * Each Listing Group tree must have a single root.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_MULTIPLE_ROOTS = 'MULTIPLE_ROOTS';
  /**
   * Invalid Listing Group dimension value.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_INVALID_DIMENSION_VALUE = 'INVALID_DIMENSION_VALUE';
  /**
   * Hierarchical dimension must refine a dimension of the same type.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_MUST_REFINE_HIERARCHICAL_PARENT_TYPE = 'MUST_REFINE_HIERARCHICAL_PARENT_TYPE';
  /**
   * Invalid Product Bidding Category.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_INVALID_PRODUCT_BIDDING_CATEGORY = 'INVALID_PRODUCT_BIDDING_CATEGORY';
  /**
   * Modifying case value is allowed only while updating the entire subtree at
   * the same time.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_CHANGING_CASE_VALUE_WITH_CHILDREN = 'CHANGING_CASE_VALUE_WITH_CHILDREN';
  /**
   * Subdivision node has children which must be removed first.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_SUBDIVISION_HAS_CHILDREN = 'SUBDIVISION_HAS_CHILDREN';
  /**
   * Dimension can't subdivide everything-else node in its own hierarchy.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_CANNOT_REFINE_HIERARCHICAL_EVERYTHING_ELSE = 'CANNOT_REFINE_HIERARCHICAL_EVERYTHING_ELSE';
  /**
   * This dimension type is not allowed in this context.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_DIMENSION_TYPE_NOT_ALLOWED = 'DIMENSION_TYPE_NOT_ALLOWED';
  /**
   * All the webpage filters under an AssetGroup should be distinct.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_DUPLICATE_WEBPAGE_FILTER_UNDER_ASSET_GROUP = 'DUPLICATE_WEBPAGE_FILTER_UNDER_ASSET_GROUP';
  /**
   * Filter of the listing source type is not allowed in the context.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_LISTING_SOURCE_NOT_ALLOWED = 'LISTING_SOURCE_NOT_ALLOWED';
  /**
   * Exclusion filters are not allowed in the context.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_FILTER_EXCLUSION_NOT_ALLOWED = 'FILTER_EXCLUSION_NOT_ALLOWED';
  /**
   * All the filters under an AssetGroup should have the same listing source.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_MULTIPLE_LISTING_SOURCES = 'MULTIPLE_LISTING_SOURCES';
  /**
   * All the conditions in a webpage needs to be of same type.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_MULTIPLE_WEBPAGE_CONDITION_TYPES_NOT_ALLOWED = 'MULTIPLE_WEBPAGE_CONDITION_TYPES_NOT_ALLOWED';
  /**
   * All the webpage types of the filters under an AssetGroup should be of same
   * type. Example: All the webpage types can be of type custom_label or
   * url_contains but not both.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_MULTIPLE_WEBPAGE_TYPES_PER_ASSET_GROUP = 'MULTIPLE_WEBPAGE_TYPES_PER_ASSET_GROUP';
  /**
   * All page feed filter nodes are root nodes and they can't have a parent.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_PAGE_FEED_FILTER_HAS_PARENT = 'PAGE_FEED_FILTER_HAS_PARENT';
  /**
   * There cannot be more than one mutate operation per request that targets a
   * single asset group listing group filter.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_MULTIPLE_OPERATIONS_ON_ONE_NODE = 'MULTIPLE_OPERATIONS_ON_ONE_NODE';
  /**
   * The tree is in an invalid state in the database. Any changes that don't fix
   * its issues will fail validation.
   */
  public const ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_TREE_WAS_INVALID_BEFORE_MUTATION = 'TREE_WAS_INVALID_BEFORE_MUTATION';
  /**
   * Enum unspecified.
   */
  public const ASSET_GROUP_SIGNAL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ASSET_GROUP_SIGNAL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The number of words in the Search Theme signal exceed the allowed maximum.
   * You can add up to 10 words in a keyword. See
   * https://support.google.com/google-ads/answer/7476658 for details.
   */
  public const ASSET_GROUP_SIGNAL_ERROR_TOO_MANY_WORDS = 'TOO_MANY_WORDS';
  /**
   * The search theme requested to be added violates certain policy. See
   * https://support.google.com/adspolicy/answer/6008942.
   */
  public const ASSET_GROUP_SIGNAL_ERROR_SEARCH_THEME_POLICY_VIOLATION = 'SEARCH_THEME_POLICY_VIOLATION';
  /**
   * The asset group referenced by the asset group signal does not match the
   * asset group referenced by the audience being used in the asset group
   * signal.
   */
  public const ASSET_GROUP_SIGNAL_ERROR_AUDIENCE_WITH_WRONG_ASSET_GROUP_ID = 'AUDIENCE_WITH_WRONG_ASSET_GROUP_ID';
  /**
   * Enum unspecified.
   */
  public const ASSET_LINK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ASSET_LINK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Pinning is not supported for the given asset link field.
   */
  public const ASSET_LINK_ERROR_PINNING_UNSUPPORTED = 'PINNING_UNSUPPORTED';
  /**
   * The given field type is not supported to be added directly through asset
   * links.
   */
  public const ASSET_LINK_ERROR_UNSUPPORTED_FIELD_TYPE = 'UNSUPPORTED_FIELD_TYPE';
  /**
   * The given asset's type and the specified field type are incompatible.
   */
  public const ASSET_LINK_ERROR_FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE = 'FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE';
  /**
   * The specified field type is incompatible with the given campaign type.
   */
  public const ASSET_LINK_ERROR_FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE = 'FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE';
  /**
   * The campaign advertising channel type cannot be associated with the given
   * asset due to channel-based restrictions on the asset's fields.
   */
  public const ASSET_LINK_ERROR_INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE = 'INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE';
  /**
   * The image asset provided is not within the dimension constraints specified
   * for the submitted asset field.
   */
  public const ASSET_LINK_ERROR_IMAGE_NOT_WITHIN_SPECIFIED_DIMENSION_RANGE = 'IMAGE_NOT_WITHIN_SPECIFIED_DIMENSION_RANGE';
  /**
   * The pinned field is not valid for the submitted asset field.
   */
  public const ASSET_LINK_ERROR_INVALID_PINNED_FIELD = 'INVALID_PINNED_FIELD';
  /**
   * The media bundle asset provided is too large for the submitted asset field.
   */
  public const ASSET_LINK_ERROR_MEDIA_BUNDLE_ASSET_FILE_SIZE_TOO_LARGE = 'MEDIA_BUNDLE_ASSET_FILE_SIZE_TOO_LARGE';
  /**
   * Not enough assets are available for use with other fields since other
   * assets are pinned to specific fields.
   */
  public const ASSET_LINK_ERROR_NOT_ENOUGH_AVAILABLE_ASSET_LINKS_FOR_VALID_COMBINATION = 'NOT_ENOUGH_AVAILABLE_ASSET_LINKS_FOR_VALID_COMBINATION';
  /**
   * Not enough assets with fallback are available. When validating the minimum
   * number of assets, assets without fallback (for example, assets that contain
   * location tag without default value "{LOCATION(City)}") will not be counted.
   */
  public const ASSET_LINK_ERROR_NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK = 'NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK';
  /**
   * This is a combination of the
   * NOT_ENOUGH_AVAILABLE_ASSET_LINKS_FOR_VALID_COMBINATION and
   * NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK errors. Not enough assets
   * with fallback are available since some assets are pinned.
   */
  public const ASSET_LINK_ERROR_NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK_FOR_VALID_COMBINATION = 'NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK_FOR_VALID_COMBINATION';
  /**
   * The YouTube video referenced in the provided asset has been removed.
   */
  public const ASSET_LINK_ERROR_YOUTUBE_VIDEO_REMOVED = 'YOUTUBE_VIDEO_REMOVED';
  /**
   * The YouTube video referenced in the provided asset is too long for the
   * field submitted.
   */
  public const ASSET_LINK_ERROR_YOUTUBE_VIDEO_TOO_LONG = 'YOUTUBE_VIDEO_TOO_LONG';
  /**
   * The YouTube video referenced in the provided asset is too short for the
   * field submitted.
   */
  public const ASSET_LINK_ERROR_YOUTUBE_VIDEO_TOO_SHORT = 'YOUTUBE_VIDEO_TOO_SHORT';
  /**
   * The specified field type is excluded for given campaign or ad group.
   */
  public const ASSET_LINK_ERROR_EXCLUDED_PARENT_FIELD_TYPE = 'EXCLUDED_PARENT_FIELD_TYPE';
  /**
   * The status is invalid for the operation specified.
   */
  public const ASSET_LINK_ERROR_INVALID_STATUS = 'INVALID_STATUS';
  /**
   * The YouTube video referenced in the provided asset has unknown duration.
   * This might be the case for a livestream video or a video being currently
   * uploaded to YouTube. In both cases, the video duration should eventually
   * get resolved.
   */
  public const ASSET_LINK_ERROR_YOUTUBE_VIDEO_DURATION_NOT_DEFINED = 'YOUTUBE_VIDEO_DURATION_NOT_DEFINED';
  /**
   * User cannot create automatically created links.
   */
  public const ASSET_LINK_ERROR_CANNOT_CREATE_AUTOMATICALLY_CREATED_LINKS = 'CANNOT_CREATE_AUTOMATICALLY_CREATED_LINKS';
  /**
   * Advertiser links cannot link to automatically created asset.
   */
  public const ASSET_LINK_ERROR_CANNOT_LINK_TO_AUTOMATICALLY_CREATED_ASSET = 'CANNOT_LINK_TO_AUTOMATICALLY_CREATED_ASSET';
  /**
   * Automatically created links cannot be changed into advertiser links or the
   * reverse.
   */
  public const ASSET_LINK_ERROR_CANNOT_MODIFY_ASSET_LINK_SOURCE = 'CANNOT_MODIFY_ASSET_LINK_SOURCE';
  /**
   * Lead Form asset with Location answer type can't be linked to the
   * Customer/Campaign because there are no Location assets.
   */
  public const ASSET_LINK_ERROR_CANNOT_LINK_LOCATION_LEAD_FORM_WITHOUT_LOCATION_ASSET = 'CANNOT_LINK_LOCATION_LEAD_FORM_WITHOUT_LOCATION_ASSET';
  /**
   * Customer is not verified.
   */
  public const ASSET_LINK_ERROR_CUSTOMER_NOT_VERIFIED = 'CUSTOMER_NOT_VERIFIED';
  /**
   * Call to action value is not supported.
   */
  public const ASSET_LINK_ERROR_UNSUPPORTED_CALL_TO_ACTION = 'UNSUPPORTED_CALL_TO_ACTION';
  /**
   * For Performance Max campaigns where brand_guidelines_enabled is false,
   * business name and logo assets must be linked as AssetGroupAssets.
   */
  public const ASSET_LINK_ERROR_BRAND_ASSETS_NOT_LINKED_AT_ASSET_GROUP_LEVEL = 'BRAND_ASSETS_NOT_LINKED_AT_ASSET_GROUP_LEVEL';
  /**
   * For Performance Max campaigns where brand_guidelines_enabled is true,
   * business name and logo assets must be linked as CampaignAssets.
   */
  public const ASSET_LINK_ERROR_BRAND_ASSETS_NOT_LINKED_AT_CAMPAIGN_LEVEL = 'BRAND_ASSETS_NOT_LINKED_AT_CAMPAIGN_LEVEL';
  /**
   * Enum unspecified.
   */
  public const ASSET_SET_ASSET_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ASSET_SET_ASSET_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The asset type is not eligible to be linked to the specific type of asset
   * set.
   */
  public const ASSET_SET_ASSET_ERROR_INVALID_ASSET_TYPE = 'INVALID_ASSET_TYPE';
  /**
   * The asset set type is not eligible to contain the specified type of assets.
   */
  public const ASSET_SET_ASSET_ERROR_INVALID_ASSET_SET_TYPE = 'INVALID_ASSET_SET_TYPE';
  /**
   * The asset contains duplicate external key with another asset in the asset
   * set.
   */
  public const ASSET_SET_ASSET_ERROR_DUPLICATE_EXTERNAL_KEY = 'DUPLICATE_EXTERNAL_KEY';
  /**
   * When attaching a Location typed Asset to a LocationGroup typed AssetSet,
   * the AssetSetAsset linkage between the parent LocationSync AssetSet and the
   * Asset doesn't exist.
   */
  public const ASSET_SET_ASSET_ERROR_PARENT_LINKAGE_DOES_NOT_EXIST = 'PARENT_LINKAGE_DOES_NOT_EXIST';
  /**
   * Enum unspecified.
   */
  public const ASSET_SET_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ASSET_SET_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The asset set name matches that of another enabled asset set.
   */
  public const ASSET_SET_ERROR_DUPLICATE_ASSET_SET_NAME = 'DUPLICATE_ASSET_SET_NAME';
  /**
   * The type of AssetSet.asset_set_source does not match the type of
   * AssetSet.location_set.source in its parent AssetSet.
   */
  public const ASSET_SET_ERROR_INVALID_PARENT_ASSET_SET_TYPE = 'INVALID_PARENT_ASSET_SET_TYPE';
  /**
   * The asset set source doesn't match its parent AssetSet's data.
   */
  public const ASSET_SET_ERROR_ASSET_SET_SOURCE_INCOMPATIBLE_WITH_PARENT_ASSET_SET = 'ASSET_SET_SOURCE_INCOMPATIBLE_WITH_PARENT_ASSET_SET';
  /**
   * This AssetSet type cannot be linked to CustomerAssetSet.
   */
  public const ASSET_SET_ERROR_ASSET_SET_TYPE_CANNOT_BE_LINKED_TO_CUSTOMER = 'ASSET_SET_TYPE_CANNOT_BE_LINKED_TO_CUSTOMER';
  /**
   * The chain id(s) in ChainSet of a LOCATION_SYNC typed AssetSet is invalid.
   */
  public const ASSET_SET_ERROR_INVALID_CHAIN_IDS = 'INVALID_CHAIN_IDS';
  /**
   * The relationship type in ChainSet of a LOCATION_SYNC typed AssetSet is not
   * supported.
   */
  public const ASSET_SET_ERROR_LOCATION_SYNC_ASSET_SET_DOES_NOT_SUPPORT_RELATIONSHIP_TYPE = 'LOCATION_SYNC_ASSET_SET_DOES_NOT_SUPPORT_RELATIONSHIP_TYPE';
  /**
   * There is more than one enabled LocationSync typed AssetSet under one
   * customer.
   */
  public const ASSET_SET_ERROR_NOT_UNIQUE_ENABLED_LOCATION_SYNC_TYPED_ASSET_SET = 'NOT_UNIQUE_ENABLED_LOCATION_SYNC_TYPED_ASSET_SET';
  /**
   * The place id(s) in a LocationSync typed AssetSet is invalid and can't be
   * decoded.
   */
  public const ASSET_SET_ERROR_INVALID_PLACE_IDS = 'INVALID_PLACE_IDS';
  /**
   * The Google Business Profile OAuth info is invalid.
   */
  public const ASSET_SET_ERROR_OAUTH_INFO_INVALID = 'OAUTH_INFO_INVALID';
  /**
   * The Google Business Profile OAuth info is missing.
   */
  public const ASSET_SET_ERROR_OAUTH_INFO_MISSING = 'OAUTH_INFO_MISSING';
  /**
   * Can't delete an AssetSet if it has any enabled linkages (e.g.
   * CustomerAssetSet), or AssetSet is a parent AssetSet and has enabled child
   * AssetSet associated.
   */
  public const ASSET_SET_ERROR_CANNOT_DELETE_AS_ENABLED_LINKAGES_EXIST = 'CANNOT_DELETE_AS_ENABLED_LINKAGES_EXIST';
  /**
   * Enum unspecified.
   */
  public const ASSET_SET_LINK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ASSET_SET_LINK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Advertising channel type cannot be attached to the asset set due to
   * channel-based restrictions.
   */
  public const ASSET_SET_LINK_ERROR_INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE = 'INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE';
  /**
   * For this asset set type, only one campaign to feed linkage is allowed.
   */
  public const ASSET_SET_LINK_ERROR_DUPLICATE_FEED_LINK = 'DUPLICATE_FEED_LINK';
  /**
   * The asset set type and campaign type are incompatible.
   */
  public const ASSET_SET_LINK_ERROR_INCOMPATIBLE_ASSET_SET_TYPE_WITH_CAMPAIGN_TYPE = 'INCOMPATIBLE_ASSET_SET_TYPE_WITH_CAMPAIGN_TYPE';
  /**
   * Cannot link duplicate asset sets to the same campaign.
   */
  public const ASSET_SET_LINK_ERROR_DUPLICATE_ASSET_SET_LINK = 'DUPLICATE_ASSET_SET_LINK';
  /**
   * Cannot remove the asset set link. If a campaign is linked with only one
   * asset set and you attempt to unlink them, this error will be triggered.
   */
  public const ASSET_SET_LINK_ERROR_ASSET_SET_LINK_CANNOT_BE_REMOVED = 'ASSET_SET_LINK_CANNOT_BE_REMOVED';
  /**
   * Enum unspecified.
   */
  public const AUDIENCE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AUDIENCE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * An audience with this name already exists.
   */
  public const AUDIENCE_ERROR_NAME_ALREADY_IN_USE = 'NAME_ALREADY_IN_USE';
  /**
   * A dimension within the audience definition is not valid.
   */
  public const AUDIENCE_ERROR_DIMENSION_INVALID = 'DIMENSION_INVALID';
  /**
   * One of the audience segment added is not found.
   */
  public const AUDIENCE_ERROR_AUDIENCE_SEGMENT_NOT_FOUND = 'AUDIENCE_SEGMENT_NOT_FOUND';
  /**
   * One of the audience segment type is not supported.
   */
  public const AUDIENCE_ERROR_AUDIENCE_SEGMENT_TYPE_NOT_SUPPORTED = 'AUDIENCE_SEGMENT_TYPE_NOT_SUPPORTED';
  /**
   * The same segment already exists in this audience.
   */
  public const AUDIENCE_ERROR_DUPLICATE_AUDIENCE_SEGMENT = 'DUPLICATE_AUDIENCE_SEGMENT';
  /**
   * Audience can't have more than allowed number segments.
   */
  public const AUDIENCE_ERROR_TOO_MANY_SEGMENTS = 'TOO_MANY_SEGMENTS';
  /**
   * Audience can't have multiple dimensions of same type.
   */
  public const AUDIENCE_ERROR_TOO_MANY_DIMENSIONS_OF_SAME_TYPE = 'TOO_MANY_DIMENSIONS_OF_SAME_TYPE';
  /**
   * The audience cannot be removed, because it is currently used in an ad group
   * criterion or asset group signal in an (enabled or paused) ad group or
   * campaign.
   */
  public const AUDIENCE_ERROR_IN_USE = 'IN_USE';
  /**
   * Asset Group scoped audience requires an asset group ID.
   */
  public const AUDIENCE_ERROR_MISSING_ASSET_GROUP_ID = 'MISSING_ASSET_GROUP_ID';
  /**
   * Audience scope may not be changed from Customer to AssetGroup.
   */
  public const AUDIENCE_ERROR_CANNOT_CHANGE_FROM_CUSTOMER_TO_ASSET_GROUP_SCOPE = 'CANNOT_CHANGE_FROM_CUSTOMER_TO_ASSET_GROUP_SCOPE';
  /**
   * Enum unspecified.
   */
  public const AUDIENCE_INSIGHTS_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AUDIENCE_INSIGHTS_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The dimensions cannot be used with topic audience combinations.
   */
  public const AUDIENCE_INSIGHTS_ERROR_DIMENSION_INCOMPATIBLE_WITH_TOPIC_AUDIENCE_COMBINATIONS = 'DIMENSION_INCOMPATIBLE_WITH_TOPIC_AUDIENCE_COMBINATIONS';
  /**
   * Enum unspecified.
   */
  public const AUTHENTICATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AUTHENTICATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Authentication of the request failed.
   */
  public const AUTHENTICATION_ERROR_AUTHENTICATION_ERROR = 'AUTHENTICATION_ERROR';
  /**
   * Client customer ID is not a number.
   */
  public const AUTHENTICATION_ERROR_CLIENT_CUSTOMER_ID_INVALID = 'CLIENT_CUSTOMER_ID_INVALID';
  /**
   * No customer found for the provided customer ID.
   */
  public const AUTHENTICATION_ERROR_CUSTOMER_NOT_FOUND = 'CUSTOMER_NOT_FOUND';
  /**
   * Client's Google account is deleted.
   */
  public const AUTHENTICATION_ERROR_GOOGLE_ACCOUNT_DELETED = 'GOOGLE_ACCOUNT_DELETED';
  /**
   * Account login token in the cookie is invalid.
   */
  public const AUTHENTICATION_ERROR_GOOGLE_ACCOUNT_COOKIE_INVALID = 'GOOGLE_ACCOUNT_COOKIE_INVALID';
  /**
   * A problem occurred during Google account authentication.
   */
  public const AUTHENTICATION_ERROR_GOOGLE_ACCOUNT_AUTHENTICATION_FAILED = 'GOOGLE_ACCOUNT_AUTHENTICATION_FAILED';
  /**
   * The user in the Google account login token does not match the user ID in
   * the cookie.
   */
  public const AUTHENTICATION_ERROR_GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH = 'GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH';
  /**
   * Login cookie is required for authentication.
   */
  public const AUTHENTICATION_ERROR_LOGIN_COOKIE_REQUIRED = 'LOGIN_COOKIE_REQUIRED';
  /**
   * The Google account that generated the OAuth access token is not associated
   * with a Search Ads 360 account. Create a new account, or add the Google
   * account to an existing Search Ads 360 account.
   */
  public const AUTHENTICATION_ERROR_NOT_ADS_USER = 'NOT_ADS_USER';
  /**
   * OAuth token in the header is not valid.
   */
  public const AUTHENTICATION_ERROR_OAUTH_TOKEN_INVALID = 'OAUTH_TOKEN_INVALID';
  /**
   * OAuth token in the header has expired.
   */
  public const AUTHENTICATION_ERROR_OAUTH_TOKEN_EXPIRED = 'OAUTH_TOKEN_EXPIRED';
  /**
   * OAuth token in the header has been disabled.
   */
  public const AUTHENTICATION_ERROR_OAUTH_TOKEN_DISABLED = 'OAUTH_TOKEN_DISABLED';
  /**
   * OAuth token in the header has been revoked.
   */
  public const AUTHENTICATION_ERROR_OAUTH_TOKEN_REVOKED = 'OAUTH_TOKEN_REVOKED';
  /**
   * OAuth token HTTP header is malformed.
   */
  public const AUTHENTICATION_ERROR_OAUTH_TOKEN_HEADER_INVALID = 'OAUTH_TOKEN_HEADER_INVALID';
  /**
   * Login cookie is not valid.
   */
  public const AUTHENTICATION_ERROR_LOGIN_COOKIE_INVALID = 'LOGIN_COOKIE_INVALID';
  /**
   * The email address provided is invalid or does not exist.
   */
  public const AUTHENTICATION_ERROR_INVALID_EMAIL_ADDRESS = 'INVALID_EMAIL_ADDRESS';
  /**
   * User ID in the header is not a valid ID.
   */
  public const AUTHENTICATION_ERROR_USER_ID_INVALID = 'USER_ID_INVALID';
  /**
   * An account administrator changed this account's authentication settings. To
   * access this account, enable 2-Step Verification in your Google account at
   * https://www.google.com/landing/2step.
   */
  public const AUTHENTICATION_ERROR_TWO_STEP_VERIFICATION_NOT_ENROLLED = 'TWO_STEP_VERIFICATION_NOT_ENROLLED';
  /**
   * An account administrator changed this account's authentication settings. To
   * access this account, enable Advanced Protection in your Google account at
   * https://landing.google.com/advancedprotection.
   */
  public const AUTHENTICATION_ERROR_ADVANCED_PROTECTION_NOT_ENROLLED = 'ADVANCED_PROTECTION_NOT_ENROLLED';
  /**
   * The Cloud organization associated with the project is not recognized.
   */
  public const AUTHENTICATION_ERROR_ORGANIZATION_NOT_RECOGNIZED = 'ORGANIZATION_NOT_RECOGNIZED';
  /**
   * The Cloud organization associated with the project is not approved for prod
   * access.
   */
  public const AUTHENTICATION_ERROR_ORGANIZATION_NOT_APPROVED = 'ORGANIZATION_NOT_APPROVED';
  /**
   * The Cloud organization associated with the project is not associated with
   * the developer token.
   */
  public const AUTHENTICATION_ERROR_ORGANIZATION_NOT_ASSOCIATED_WITH_DEVELOPER_TOKEN = 'ORGANIZATION_NOT_ASSOCIATED_WITH_DEVELOPER_TOKEN';
  /**
   * The developer token is not valid.
   */
  public const AUTHENTICATION_ERROR_DEVELOPER_TOKEN_INVALID = 'DEVELOPER_TOKEN_INVALID';
  /**
   * Enum unspecified.
   */
  public const AUTHORIZATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AUTHORIZATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * User doesn't have permission to access customer. Note: If you're accessing
   * a client customer, the manager's customer ID must be set in the `login-
   * customer-id` header. Learn more at https://developers.google.com/search-
   * ads/reporting/concepts/call-structure#login_customer_id_header
   */
  public const AUTHORIZATION_ERROR_USER_PERMISSION_DENIED = 'USER_PERMISSION_DENIED';
  /**
   * The developer token is not on the allow-list.
   */
  public const AUTHORIZATION_ERROR_DEVELOPER_TOKEN_NOT_ON_ALLOWLIST = 'DEVELOPER_TOKEN_NOT_ON_ALLOWLIST';
  /**
   * The developer token is not allowed with the project sent in the request.
   */
  public const AUTHORIZATION_ERROR_DEVELOPER_TOKEN_PROHIBITED = 'DEVELOPER_TOKEN_PROHIBITED';
  /**
   * The Google Cloud project sent in the request does not have permission to
   * access the api.
   */
  public const AUTHORIZATION_ERROR_PROJECT_DISABLED = 'PROJECT_DISABLED';
  /**
   * Authorization of the client failed.
   */
  public const AUTHORIZATION_ERROR_AUTHORIZATION_ERROR = 'AUTHORIZATION_ERROR';
  /**
   * The user does not have permission to perform this action (for example, ADD,
   * UPDATE, REMOVE) on the resource or call a method.
   */
  public const AUTHORIZATION_ERROR_ACTION_NOT_PERMITTED = 'ACTION_NOT_PERMITTED';
  /**
   * Signup not complete.
   */
  public const AUTHORIZATION_ERROR_INCOMPLETE_SIGNUP = 'INCOMPLETE_SIGNUP';
  /**
   * The customer account can't be accessed because it is not yet enabled or has
   * been deactivated.
   */
  public const AUTHORIZATION_ERROR_CUSTOMER_NOT_ENABLED = 'CUSTOMER_NOT_ENABLED';
  /**
   * The developer must sign the terms of service. They can be found here:
   * https://developers.google.com/terms
   */
  public const AUTHORIZATION_ERROR_MISSING_TOS = 'MISSING_TOS';
  /**
   * The developer token is only approved for use with test accounts. To access
   * non-test accounts, apply for Basic or Standard access.
   */
  public const AUTHORIZATION_ERROR_DEVELOPER_TOKEN_NOT_APPROVED = 'DEVELOPER_TOKEN_NOT_APPROVED';
  /**
   * The login customer specified does not have access to the account specified,
   * so the request is invalid.
   */
  public const AUTHORIZATION_ERROR_INVALID_LOGIN_CUSTOMER_ID_SERVING_CUSTOMER_ID_COMBINATION = 'INVALID_LOGIN_CUSTOMER_ID_SERVING_CUSTOMER_ID_COMBINATION';
  /**
   * The developer specified does not have access to the service.
   */
  public const AUTHORIZATION_ERROR_SERVICE_ACCESS_DENIED = 'SERVICE_ACCESS_DENIED';
  /**
   * The customer (or login customer) isn't allowed in Search Ads 360 API. It
   * belongs to another ads system.
   */
  public const AUTHORIZATION_ERROR_ACCESS_DENIED_FOR_ACCOUNT_TYPE = 'ACCESS_DENIED_FOR_ACCOUNT_TYPE';
  /**
   * The developer does not have access to the metrics queried.
   */
  public const AUTHORIZATION_ERROR_METRIC_ACCESS_DENIED = 'METRIC_ACCESS_DENIED';
  /**
   * The Google Cloud project is not under the required organization.
   */
  public const AUTHORIZATION_ERROR_CLOUD_PROJECT_NOT_UNDER_ORGANIZATION = 'CLOUD_PROJECT_NOT_UNDER_ORGANIZATION';
  /**
   * The user does not have permission to perform this action on the resource or
   * method because the Google Ads account is suspended.
   */
  public const AUTHORIZATION_ERROR_ACTION_NOT_PERMITTED_FOR_SUSPENDED_ACCOUNT = 'ACTION_NOT_PERMITTED_FOR_SUSPENDED_ACCOUNT';
  /**
   * Enum unspecified.
   */
  public const AUTOMATICALLY_CREATED_ASSET_REMOVAL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const AUTOMATICALLY_CREATED_ASSET_REMOVAL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The ad does not exist.
   */
  public const AUTOMATICALLY_CREATED_ASSET_REMOVAL_ERROR_AD_DOES_NOT_EXIST = 'AD_DOES_NOT_EXIST';
  /**
   * Ad type is not supported. Only Responsive Search Ad type is supported.
   */
  public const AUTOMATICALLY_CREATED_ASSET_REMOVAL_ERROR_INVALID_AD_TYPE = 'INVALID_AD_TYPE';
  /**
   * The asset does not exist.
   */
  public const AUTOMATICALLY_CREATED_ASSET_REMOVAL_ERROR_ASSET_DOES_NOT_EXIST = 'ASSET_DOES_NOT_EXIST';
  /**
   * The asset field type does not match.
   */
  public const AUTOMATICALLY_CREATED_ASSET_REMOVAL_ERROR_ASSET_FIELD_TYPE_DOES_NOT_MATCH = 'ASSET_FIELD_TYPE_DOES_NOT_MATCH';
  /**
   * Not an automatically created asset.
   */
  public const AUTOMATICALLY_CREATED_ASSET_REMOVAL_ERROR_NOT_AN_AUTOMATICALLY_CREATED_ASSET = 'NOT_AN_AUTOMATICALLY_CREATED_ASSET';
  /**
   * Enum unspecified.
   */
  public const BATCH_JOB_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const BATCH_JOB_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The batch job cannot add more operations or run after it has started
   * running.
   */
  public const BATCH_JOB_ERROR_CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING = 'CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING';
  /**
   * The operations for an AddBatchJobOperations request were empty.
   */
  public const BATCH_JOB_ERROR_EMPTY_OPERATIONS = 'EMPTY_OPERATIONS';
  /**
   * The sequence token for an AddBatchJobOperations request was invalid.
   */
  public const BATCH_JOB_ERROR_INVALID_SEQUENCE_TOKEN = 'INVALID_SEQUENCE_TOKEN';
  /**
   * Batch job results can only be retrieved once the job is finished.
   */
  public const BATCH_JOB_ERROR_RESULTS_NOT_READY = 'RESULTS_NOT_READY';
  /**
   * The page size for ListBatchJobResults was invalid.
   */
  public const BATCH_JOB_ERROR_INVALID_PAGE_SIZE = 'INVALID_PAGE_SIZE';
  /**
   * The batch job cannot be removed because it has started running.
   */
  public const BATCH_JOB_ERROR_CAN_ONLY_REMOVE_PENDING_JOB = 'CAN_ONLY_REMOVE_PENDING_JOB';
  /**
   * The batch job cannot be listed due to unexpected errors such as duplicate
   * checkpoints.
   */
  public const BATCH_JOB_ERROR_CANNOT_LIST_RESULTS = 'CANNOT_LIST_RESULTS';
  /**
   * The request contains interdependent AssetGroup and AssetGroupAsset
   * operations that are treated atomically as a single transaction, and one or
   * more of the operations in that transaction failed, which caused the entire
   * transaction, and therefore this mutate operation, to fail. The operations
   * that caused the transaction to fail can be found in the consecutive
   * AssetGroup or AssetGroupAsset results with the same asset group id. The
   * mutate operation will be successful once the remaining errors in the
   * transaction are fixed.
   */
  public const BATCH_JOB_ERROR_ASSET_GROUP_AND_ASSET_GROUP_ASSET_TRANSACTION_FAILURE = 'ASSET_GROUP_AND_ASSET_GROUP_ASSET_TRANSACTION_FAILURE';
  /**
   * The request contains interdependent AssetGroupListingGroupFilter operations
   * that are treated atomically as a single transaction, and one or more of the
   * operations in that transaction failed, which caused the entire transaction,
   * and therefore this mutate operation, to fail. The operations that caused
   * the transaction to fail can be found in the consecutive
   * AssetGroupListingGroupFilter results with the same asset group id. The
   * mutate operation will be successful once the remaining errors in the
   * transaction are fixed.
   */
  public const BATCH_JOB_ERROR_ASSET_GROUP_LISTING_GROUP_FILTER_TRANSACTION_FAILURE = 'ASSET_GROUP_LISTING_GROUP_FILTER_TRANSACTION_FAILURE';
  /**
   * The AddBatchJobOperationsRequest is too large. Split the request into
   * smaller requests. The maximum allowed request size is 10484504 bytes.
   */
  public const BATCH_JOB_ERROR_REQUEST_TOO_LARGE = 'REQUEST_TOO_LARGE';
  /**
   * This error indicates a failed transaction involving interdependent Campaign
   * and CampaignAsset operations that are treated atomically as a single
   * transaction. Because some operations within the transaction failed, the
   * entire set of changes was rejected. Related error details are found in the
   * results for the Campaign and CampaignAssets sharing the same Campaign ID.
   * The transaction will succeed after all associated errors are resolved.
   */
  public const BATCH_JOB_ERROR_CAMPAIGN_AND_CAMPAIGN_ASSET_TRANSACTION_FAILURE = 'CAMPAIGN_AND_CAMPAIGN_ASSET_TRANSACTION_FAILURE';
  /**
   * Enum unspecified.
   */
  public const BENCHMARKS_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const BENCHMARKS_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The combination of inputs to generate benchmarks is too complex. To reduce
   * complexity, try selecting a more granular benchmarks source, a smaller date
   * range, or a smaller set of products.
   */
  public const BENCHMARKS_ERROR_MAX_QUERY_COMPLEXITY_EXCEEDED = 'MAX_QUERY_COMPLEXITY_EXCEEDED';
  /**
   * Enum unspecified.
   */
  public const BIDDING_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const BIDDING_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Cannot transition to new bidding strategy.
   */
  public const BIDDING_ERROR_BIDDING_STRATEGY_TRANSITION_NOT_ALLOWED = 'BIDDING_STRATEGY_TRANSITION_NOT_ALLOWED';
  /**
   * Cannot attach bidding strategy to campaign.
   */
  public const BIDDING_ERROR_CANNOT_ATTACH_BIDDING_STRATEGY_TO_CAMPAIGN = 'CANNOT_ATTACH_BIDDING_STRATEGY_TO_CAMPAIGN';
  /**
   * Bidding strategy is not supported or cannot be used as anonymous.
   */
  public const BIDDING_ERROR_INVALID_ANONYMOUS_BIDDING_STRATEGY_TYPE = 'INVALID_ANONYMOUS_BIDDING_STRATEGY_TYPE';
  /**
   * The type does not match the named strategy's type.
   */
  public const BIDDING_ERROR_INVALID_BIDDING_STRATEGY_TYPE = 'INVALID_BIDDING_STRATEGY_TYPE';
  /**
   * The bid is invalid.
   */
  public const BIDDING_ERROR_INVALID_BID = 'INVALID_BID';
  /**
   * Bidding strategy is not available for the account type.
   */
  public const BIDDING_ERROR_BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 'BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE';
  /**
   * Campaign can not be created with given bidding strategy. It can be
   * transitioned to the strategy, once eligible.
   */
  public const BIDDING_ERROR_CANNOT_CREATE_CAMPAIGN_WITH_BIDDING_STRATEGY = 'CANNOT_CREATE_CAMPAIGN_WITH_BIDDING_STRATEGY';
  /**
   * Cannot target content network only as campaign uses Page One Promoted
   * bidding strategy.
   */
  public const BIDDING_ERROR_CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CAMPAIGN_LEVEL_POP_BIDDING_STRATEGY = 'CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CAMPAIGN_LEVEL_POP_BIDDING_STRATEGY';
  /**
   * Budget Optimizer and Target Spend bidding strategies are not supported for
   * campaigns with AdSchedule targeting.
   */
  public const BIDDING_ERROR_BIDDING_STRATEGY_NOT_SUPPORTED_WITH_AD_SCHEDULE = 'BIDDING_STRATEGY_NOT_SUPPORTED_WITH_AD_SCHEDULE';
  /**
   * Pay per conversion is not available to all the customer, only few customers
   * on the allow-list can use this.
   */
  public const BIDDING_ERROR_PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER = 'PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER';
  /**
   * Pay per conversion is not allowed with Target CPA.
   */
  public const BIDDING_ERROR_PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA = 'PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA';
  /**
   * Cannot set bidding strategy to Manual CPM for search network only
   * campaigns.
   */
  public const BIDDING_ERROR_BIDDING_STRATEGY_NOT_ALLOWED_FOR_SEARCH_ONLY_CAMPAIGNS = 'BIDDING_STRATEGY_NOT_ALLOWED_FOR_SEARCH_ONLY_CAMPAIGNS';
  /**
   * The bidding strategy is not supported for use in drafts or experiments.
   */
  public const BIDDING_ERROR_BIDDING_STRATEGY_NOT_SUPPORTED_IN_DRAFTS_OR_EXPERIMENTS = 'BIDDING_STRATEGY_NOT_SUPPORTED_IN_DRAFTS_OR_EXPERIMENTS';
  /**
   * Bidding strategy type does not support product type ad group criterion.
   */
  public const BIDDING_ERROR_BIDDING_STRATEGY_TYPE_DOES_NOT_SUPPORT_PRODUCT_TYPE_ADGROUP_CRITERION = 'BIDDING_STRATEGY_TYPE_DOES_NOT_SUPPORT_PRODUCT_TYPE_ADGROUP_CRITERION';
  /**
   * Bid amount is too small.
   */
  public const BIDDING_ERROR_BID_TOO_SMALL = 'BID_TOO_SMALL';
  /**
   * Bid amount is too big.
   */
  public const BIDDING_ERROR_BID_TOO_BIG = 'BID_TOO_BIG';
  /**
   * Bid has too many fractional digit precision.
   */
  public const BIDDING_ERROR_BID_TOO_MANY_FRACTIONAL_DIGITS = 'BID_TOO_MANY_FRACTIONAL_DIGITS';
  /**
   * Invalid domain name specified.
   */
  public const BIDDING_ERROR_INVALID_DOMAIN_NAME = 'INVALID_DOMAIN_NAME';
  /**
   * The field is not compatible with the payment mode.
   */
  public const BIDDING_ERROR_NOT_COMPATIBLE_WITH_PAYMENT_MODE = 'NOT_COMPATIBLE_WITH_PAYMENT_MODE';
  /**
   * Bidding strategy type is incompatible with shared budget.
   */
  public const BIDDING_ERROR_BIDDING_STRATEGY_TYPE_INCOMPATIBLE_WITH_SHARED_BUDGET = 'BIDDING_STRATEGY_TYPE_INCOMPATIBLE_WITH_SHARED_BUDGET';
  /**
   * The attached bidding strategy and budget must be aligned with each other if
   * alignment is specified on either entity.
   */
  public const BIDDING_ERROR_BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ALIGNED = 'BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ALIGNED';
  /**
   * The attached bidding strategy and budget must be attached to the same
   * campaigns to become aligned.
   */
  public const BIDDING_ERROR_BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ATTACHED_TO_THE_SAME_CAMPAIGNS_TO_ALIGN = 'BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ATTACHED_TO_THE_SAME_CAMPAIGNS_TO_ALIGN';
  /**
   * The aligned bidding strategy and budget must be removed at the same time.
   */
  public const BIDDING_ERROR_BIDDING_STRATEGY_AND_BUDGET_MUST_BE_REMOVED_TOGETHER = 'BIDDING_STRATEGY_AND_BUDGET_MUST_BE_REMOVED_TOGETHER';
  /**
   * cpc_bid_floor_micros is greater than cpc_bid_ceiling_micros.
   */
  public const BIDDING_ERROR_CPC_BID_FLOOR_MICROS_GREATER_THAN_CPC_BID_CEILING_MICROS = 'CPC_BID_FLOOR_MICROS_GREATER_THAN_CPC_BID_CEILING_MICROS';
  /**
   * target_roas_tolerance_percent_millis must be integer.
   */
  public const BIDDING_ERROR_TARGET_ROAS_TOLERANCE_PERCENT_MILLIS_MUST_BE_INTEGER = 'TARGET_ROAS_TOLERANCE_PERCENT_MILLIS_MUST_BE_INTEGER';
  /**
   * Enum unspecified.
   */
  public const BIDDING_STRATEGY_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const BIDDING_STRATEGY_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Each bidding strategy must have a unique name.
   */
  public const BIDDING_STRATEGY_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * Bidding strategy type is immutable.
   */
  public const BIDDING_STRATEGY_ERROR_CANNOT_CHANGE_BIDDING_STRATEGY_TYPE = 'CANNOT_CHANGE_BIDDING_STRATEGY_TYPE';
  /**
   * Only bidding strategies not linked to campaigns, adgroups or adgroup
   * criteria can be removed.
   */
  public const BIDDING_STRATEGY_ERROR_CANNOT_REMOVE_ASSOCIATED_STRATEGY = 'CANNOT_REMOVE_ASSOCIATED_STRATEGY';
  /**
   * The specified bidding strategy is not supported.
   */
  public const BIDDING_STRATEGY_ERROR_BIDDING_STRATEGY_NOT_SUPPORTED = 'BIDDING_STRATEGY_NOT_SUPPORTED';
  /**
   * The bidding strategy is incompatible with the campaign's bidding strategy
   * goal type.
   */
  public const BIDDING_STRATEGY_ERROR_INCOMPATIBLE_BIDDING_STRATEGY_AND_BIDDING_STRATEGY_GOAL_TYPE = 'INCOMPATIBLE_BIDDING_STRATEGY_AND_BIDDING_STRATEGY_GOAL_TYPE';
  /**
   * Enum unspecified.
   */
  public const BILLING_SETUP_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const BILLING_SETUP_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Cannot specify both an existing payments account and a new payments account
   * when setting up billing.
   */
  public const BILLING_SETUP_ERROR_CANNOT_USE_EXISTING_AND_NEW_ACCOUNT = 'CANNOT_USE_EXISTING_AND_NEW_ACCOUNT';
  /**
   * Cannot cancel an approved billing setup whose start time has passed.
   */
  public const BILLING_SETUP_ERROR_CANNOT_REMOVE_STARTED_BILLING_SETUP = 'CANNOT_REMOVE_STARTED_BILLING_SETUP';
  /**
   * Cannot perform a Change of Bill-To (CBT) to the same payments account.
   */
  public const BILLING_SETUP_ERROR_CANNOT_CHANGE_BILLING_TO_SAME_PAYMENTS_ACCOUNT = 'CANNOT_CHANGE_BILLING_TO_SAME_PAYMENTS_ACCOUNT';
  /**
   * Billing setups can only be used by customers with ENABLED or DRAFT status.
   */
  public const BILLING_SETUP_ERROR_BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_STATUS = 'BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_STATUS';
  /**
   * Billing setups must either include a correctly formatted existing payments
   * account id, or a non-empty new payments account name.
   */
  public const BILLING_SETUP_ERROR_INVALID_PAYMENTS_ACCOUNT = 'INVALID_PAYMENTS_ACCOUNT';
  /**
   * Only billable and third-party customers can create billing setups.
   */
  public const BILLING_SETUP_ERROR_BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_CATEGORY = 'BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_CATEGORY';
  /**
   * Billing setup creations can only use NOW for start time type.
   */
  public const BILLING_SETUP_ERROR_INVALID_START_TIME_TYPE = 'INVALID_START_TIME_TYPE';
  /**
   * Billing setups can only be created for a third-party customer if they do
   * not already have a setup.
   */
  public const BILLING_SETUP_ERROR_THIRD_PARTY_ALREADY_HAS_BILLING = 'THIRD_PARTY_ALREADY_HAS_BILLING';
  /**
   * Billing setups cannot be created if there is already a pending billing in
   * progress.
   */
  public const BILLING_SETUP_ERROR_BILLING_SETUP_IN_PROGRESS = 'BILLING_SETUP_IN_PROGRESS';
  /**
   * Billing setups can only be created by customers who have permission to
   * setup billings. Users can contact a representative for help setting up
   * permissions.
   */
  public const BILLING_SETUP_ERROR_NO_SIGNUP_PERMISSION = 'NO_SIGNUP_PERMISSION';
  /**
   * Billing setups cannot be created if there is already a future-approved
   * billing.
   */
  public const BILLING_SETUP_ERROR_CHANGE_OF_BILL_TO_IN_PROGRESS = 'CHANGE_OF_BILL_TO_IN_PROGRESS';
  /**
   * Requested payments profile not found.
   */
  public const BILLING_SETUP_ERROR_PAYMENTS_PROFILE_NOT_FOUND = 'PAYMENTS_PROFILE_NOT_FOUND';
  /**
   * Requested payments account not found.
   */
  public const BILLING_SETUP_ERROR_PAYMENTS_ACCOUNT_NOT_FOUND = 'PAYMENTS_ACCOUNT_NOT_FOUND';
  /**
   * Billing setup creation failed because the payments profile is ineligible.
   */
  public const BILLING_SETUP_ERROR_PAYMENTS_PROFILE_INELIGIBLE = 'PAYMENTS_PROFILE_INELIGIBLE';
  /**
   * Billing setup creation failed because the payments account is ineligible.
   */
  public const BILLING_SETUP_ERROR_PAYMENTS_ACCOUNT_INELIGIBLE = 'PAYMENTS_ACCOUNT_INELIGIBLE';
  /**
   * Billing setup creation failed because the payments profile needs internal
   * approval.
   */
  public const BILLING_SETUP_ERROR_CUSTOMER_NEEDS_INTERNAL_APPROVAL = 'CUSTOMER_NEEDS_INTERNAL_APPROVAL';
  /**
   * Billing setup creation failed because the user needs to accept master
   * service agreement on the payments profile.
   */
  public const BILLING_SETUP_ERROR_PAYMENTS_PROFILE_NEEDS_SERVICE_AGREEMENT_ACCEPTANCE = 'PAYMENTS_PROFILE_NEEDS_SERVICE_AGREEMENT_ACCEPTANCE';
  /**
   * Payments account has different currency code than the current customer and
   * hence cannot be used to setup billing.
   */
  public const BILLING_SETUP_ERROR_PAYMENTS_ACCOUNT_INELIGIBLE_CURRENCY_CODE_MISMATCH = 'PAYMENTS_ACCOUNT_INELIGIBLE_CURRENCY_CODE_MISMATCH';
  /**
   * A start time in the future cannot be used because there is currently no
   * active billing setup for this customer.
   */
  public const BILLING_SETUP_ERROR_FUTURE_START_TIME_PROHIBITED = 'FUTURE_START_TIME_PROHIBITED';
  /**
   * The payments account has maximum number of billing setups.
   */
  public const BILLING_SETUP_ERROR_TOO_MANY_BILLING_SETUPS_FOR_PAYMENTS_ACCOUNT = 'TOO_MANY_BILLING_SETUPS_FOR_PAYMENTS_ACCOUNT';
  /**
   * Enum unspecified.
   */
  public const BRAND_GUIDELINES_MIGRATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const BRAND_GUIDELINES_MIGRATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * This campaign is already enabled for Brand Guidelines.
   */
  public const BRAND_GUIDELINES_MIGRATION_ERROR_BRAND_GUIDELINES_ALREADY_ENABLED = 'BRAND_GUIDELINES_ALREADY_ENABLED';
  /**
   * Brand Guidelines can only be enabled for active or suspended campaigns.
   */
  public const BRAND_GUIDELINES_MIGRATION_ERROR_CANNOT_ENABLE_BRAND_GUIDELINES_FOR_REMOVED_CAMPAIGN = 'CANNOT_ENABLE_BRAND_GUIDELINES_FOR_REMOVED_CAMPAIGN';
  /**
   * Maximum of 5 square and landscape logos can be specified for Brand
   * Guidelines.
   */
  public const BRAND_GUIDELINES_MIGRATION_ERROR_BRAND_GUIDELINES_LOGO_LIMIT_EXCEEDED = 'BRAND_GUIDELINES_LOGO_LIMIT_EXCEEDED';
  /**
   * Either auto_populate_brand_assets must be true or brand_assets must be
   * provided, but not both.
   */
  public const BRAND_GUIDELINES_MIGRATION_ERROR_CANNOT_AUTO_POPULATE_BRAND_ASSETS_WHEN_BRAND_ASSETS_PROVIDED = 'CANNOT_AUTO_POPULATE_BRAND_ASSETS_WHEN_BRAND_ASSETS_PROVIDED';
  /**
   * Either auto_populate_brand_assets can be false or brand_assets can be
   * omitted, but not both.
   */
  public const BRAND_GUIDELINES_MIGRATION_ERROR_AUTO_POPULATE_BRAND_ASSETS_REQUIRED_WHEN_BRAND_ASSETS_OMITTED = 'AUTO_POPULATE_BRAND_ASSETS_REQUIRED_WHEN_BRAND_ASSETS_OMITTED';
  /**
   * A maximum of 10 enable operations can be executed in a request.
   */
  public const BRAND_GUIDELINES_MIGRATION_ERROR_TOO_MANY_ENABLE_OPERATIONS = 'TOO_MANY_ENABLE_OPERATIONS';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_BUDGET_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_BUDGET_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The campaign budget cannot be shared.
   */
  public const CAMPAIGN_BUDGET_ERROR_CAMPAIGN_BUDGET_CANNOT_BE_SHARED = 'CAMPAIGN_BUDGET_CANNOT_BE_SHARED';
  /**
   * The requested campaign budget no longer exists.
   */
  public const CAMPAIGN_BUDGET_ERROR_CAMPAIGN_BUDGET_REMOVED = 'CAMPAIGN_BUDGET_REMOVED';
  /**
   * The campaign budget is associated with at least one campaign, and so the
   * campaign budget cannot be removed.
   */
  public const CAMPAIGN_BUDGET_ERROR_CAMPAIGN_BUDGET_IN_USE = 'CAMPAIGN_BUDGET_IN_USE';
  /**
   * Customer is not on the allow-list for this campaign budget period.
   */
  public const CAMPAIGN_BUDGET_ERROR_CAMPAIGN_BUDGET_PERIOD_NOT_AVAILABLE = 'CAMPAIGN_BUDGET_PERIOD_NOT_AVAILABLE';
  /**
   * This field is not mutable on implicitly shared campaign budgets
   */
  public const CAMPAIGN_BUDGET_ERROR_CANNOT_MODIFY_FIELD_OF_IMPLICITLY_SHARED_CAMPAIGN_BUDGET = 'CANNOT_MODIFY_FIELD_OF_IMPLICITLY_SHARED_CAMPAIGN_BUDGET';
  /**
   * Cannot change explicitly shared campaign budgets back to implicitly shared
   * ones.
   */
  public const CAMPAIGN_BUDGET_ERROR_CANNOT_UPDATE_CAMPAIGN_BUDGET_TO_IMPLICITLY_SHARED = 'CANNOT_UPDATE_CAMPAIGN_BUDGET_TO_IMPLICITLY_SHARED';
  /**
   * An implicit campaign budget without a name cannot be changed to explicitly
   * shared campaign budget.
   */
  public const CAMPAIGN_BUDGET_ERROR_CANNOT_UPDATE_CAMPAIGN_BUDGET_TO_EXPLICITLY_SHARED_WITHOUT_NAME = 'CANNOT_UPDATE_CAMPAIGN_BUDGET_TO_EXPLICITLY_SHARED_WITHOUT_NAME';
  /**
   * Cannot change an implicitly shared campaign budget to an explicitly shared
   * one.
   */
  public const CAMPAIGN_BUDGET_ERROR_CANNOT_UPDATE_CAMPAIGN_BUDGET_TO_EXPLICITLY_SHARED = 'CANNOT_UPDATE_CAMPAIGN_BUDGET_TO_EXPLICITLY_SHARED';
  /**
   * Only explicitly shared campaign budgets can be used with multiple
   * campaigns.
   */
  public const CAMPAIGN_BUDGET_ERROR_CANNOT_USE_IMPLICITLY_SHARED_CAMPAIGN_BUDGET_WITH_MULTIPLE_CAMPAIGNS = 'CANNOT_USE_IMPLICITLY_SHARED_CAMPAIGN_BUDGET_WITH_MULTIPLE_CAMPAIGNS';
  /**
   * A campaign budget with this name already exists.
   */
  public const CAMPAIGN_BUDGET_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * A money amount was not in the expected currency.
   */
  public const CAMPAIGN_BUDGET_ERROR_MONEY_AMOUNT_IN_WRONG_CURRENCY = 'MONEY_AMOUNT_IN_WRONG_CURRENCY';
  /**
   * A money amount was less than the minimum CPC for currency.
   */
  public const CAMPAIGN_BUDGET_ERROR_MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC = 'MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC';
  /**
   * A money amount was greater than the maximum allowed.
   */
  public const CAMPAIGN_BUDGET_ERROR_MONEY_AMOUNT_TOO_LARGE = 'MONEY_AMOUNT_TOO_LARGE';
  /**
   * A money amount was negative.
   */
  public const CAMPAIGN_BUDGET_ERROR_NEGATIVE_MONEY_AMOUNT = 'NEGATIVE_MONEY_AMOUNT';
  /**
   * A money amount was not a multiple of a minimum unit.
   */
  public const CAMPAIGN_BUDGET_ERROR_NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT = 'NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT';
  /**
   * Total budget amount must be unset when BudgetPeriod is DAILY.
   */
  public const CAMPAIGN_BUDGET_ERROR_TOTAL_BUDGET_AMOUNT_MUST_BE_UNSET_FOR_BUDGET_PERIOD_DAILY = 'TOTAL_BUDGET_AMOUNT_MUST_BE_UNSET_FOR_BUDGET_PERIOD_DAILY';
  /**
   * The period of the budget is not allowed.
   */
  public const CAMPAIGN_BUDGET_ERROR_INVALID_PERIOD = 'INVALID_PERIOD';
  /**
   * Cannot use accelerated delivery method on this budget.
   */
  public const CAMPAIGN_BUDGET_ERROR_CANNOT_USE_ACCELERATED_DELIVERY_MODE = 'CANNOT_USE_ACCELERATED_DELIVERY_MODE';
  /**
   * Budget amount must be unset when BudgetPeriod is CUSTOM.
   */
  public const CAMPAIGN_BUDGET_ERROR_BUDGET_AMOUNT_MUST_BE_UNSET_FOR_CUSTOM_BUDGET_PERIOD = 'BUDGET_AMOUNT_MUST_BE_UNSET_FOR_CUSTOM_BUDGET_PERIOD';
  /**
   * Budget amount or total amount must be above this campaign's per-day
   * minimum. See the error's details.budget_per_day_minimum_error_details field
   * for more information.
   */
  public const CAMPAIGN_BUDGET_ERROR_BUDGET_BELOW_PER_DAY_MINIMUM = 'BUDGET_BELOW_PER_DAY_MINIMUM';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_CONVERSION_GOAL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_CONVERSION_GOAL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Campaign is managed by Search Ads 360 but uses Unified Goal.
   */
  public const CAMPAIGN_CONVERSION_GOAL_ERROR_CANNOT_USE_CAMPAIGN_GOAL_FOR_SEARCH_ADS_360_MANAGED_CAMPAIGN = 'CANNOT_USE_CAMPAIGN_GOAL_FOR_SEARCH_ADS_360_MANAGED_CAMPAIGN';
  /**
   * Performance Max campaign cannot use an included store sale campaign goal.
   */
  public const CAMPAIGN_CONVERSION_GOAL_ERROR_CANNOT_USE_STORE_SALE_GOAL_FOR_PERFORMANCE_MAX_CAMPAIGN = 'CANNOT_USE_STORE_SALE_GOAL_FOR_PERFORMANCE_MAX_CAMPAIGN';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_CRITERION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_CRITERION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Concrete type of criterion (keyword v.s. placement) is required for CREATE
   * and UPDATE operations.
   */
  public const CAMPAIGN_CRITERION_ERROR_CONCRETE_TYPE_REQUIRED = 'CONCRETE_TYPE_REQUIRED';
  /**
   * Invalid placement URL.
   */
  public const CAMPAIGN_CRITERION_ERROR_INVALID_PLACEMENT_URL = 'INVALID_PLACEMENT_URL';
  /**
   * Criteria type can not be excluded for the campaign by the customer. like
   * AOL account type cannot target site type criteria
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_EXCLUDE_CRITERIA_TYPE = 'CANNOT_EXCLUDE_CRITERIA_TYPE';
  /**
   * Cannot set the campaign criterion status for this criteria type.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_SET_STATUS_FOR_CRITERIA_TYPE = 'CANNOT_SET_STATUS_FOR_CRITERIA_TYPE';
  /**
   * Cannot set the campaign criterion status for an excluded criteria.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA = 'CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA';
  /**
   * Cannot target and exclude the same criterion.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_TARGET_AND_EXCLUDE = 'CANNOT_TARGET_AND_EXCLUDE';
  /**
   * The mutate contained too many operations.
   */
  public const CAMPAIGN_CRITERION_ERROR_TOO_MANY_OPERATIONS = 'TOO_MANY_OPERATIONS';
  /**
   * This operator cannot be applied to a criterion of this type.
   */
  public const CAMPAIGN_CRITERION_ERROR_OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE = 'OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE';
  /**
   * The Shopping campaign sales country is not supported for
   * ProductSalesChannel targeting.
   */
  public const CAMPAIGN_CRITERION_ERROR_SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL = 'SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL';
  /**
   * The existing field can't be updated with CREATE operation. It can be
   * updated with UPDATE operation only.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_ADD_EXISTING_FIELD = 'CANNOT_ADD_EXISTING_FIELD';
  /**
   * Negative criteria are immutable, so updates are not allowed.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_UPDATE_NEGATIVE_CRITERION = 'CANNOT_UPDATE_NEGATIVE_CRITERION';
  /**
   * Only free form names are allowed for negative Smart campaign keyword theme.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_SET_NEGATIVE_KEYWORD_THEME_CONSTANT_CRITERION = 'CANNOT_SET_NEGATIVE_KEYWORD_THEME_CONSTANT_CRITERION';
  /**
   * Invalid Smart campaign keyword theme constant criterion.
   */
  public const CAMPAIGN_CRITERION_ERROR_INVALID_KEYWORD_THEME_CONSTANT = 'INVALID_KEYWORD_THEME_CONSTANT';
  /**
   * A Smart campaign keyword theme constant or free-form Smart campaign keyword
   * theme is required.
   */
  public const CAMPAIGN_CRITERION_ERROR_MISSING_KEYWORD_THEME_CONSTANT_OR_FREE_FORM_KEYWORD_THEME = 'MISSING_KEYWORD_THEME_CONSTANT_OR_FREE_FORM_KEYWORD_THEME';
  /**
   * A Smart campaign may not target proximity and location criteria
   * simultaneously.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_TARGET_BOTH_PROXIMITY_AND_LOCATION_CRITERIA_FOR_SMART_CAMPAIGN = 'CANNOT_TARGET_BOTH_PROXIMITY_AND_LOCATION_CRITERIA_FOR_SMART_CAMPAIGN';
  /**
   * A Smart campaign may not target multiple proximity criteria.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_TARGET_MULTIPLE_PROXIMITY_CRITERIA_FOR_SMART_CAMPAIGN = 'CANNOT_TARGET_MULTIPLE_PROXIMITY_CRITERIA_FOR_SMART_CAMPAIGN';
  /**
   * Location is not launched for Local Services Campaigns.
   */
  public const CAMPAIGN_CRITERION_ERROR_LOCATION_NOT_LAUNCHED_FOR_LOCAL_SERVICES_CAMPAIGN = 'LOCATION_NOT_LAUNCHED_FOR_LOCAL_SERVICES_CAMPAIGN';
  /**
   * A Local Services campaign may not target certain criteria types.
   */
  public const CAMPAIGN_CRITERION_ERROR_LOCATION_INVALID_FOR_LOCAL_SERVICES_CAMPAIGN = 'LOCATION_INVALID_FOR_LOCAL_SERVICES_CAMPAIGN';
  /**
   * Country locations are not supported for Local Services campaign.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_TARGET_COUNTRY_FOR_LOCAL_SERVICES_CAMPAIGN = 'CANNOT_TARGET_COUNTRY_FOR_LOCAL_SERVICES_CAMPAIGN';
  /**
   * Location is not within the home country of Local Services campaign.
   */
  public const CAMPAIGN_CRITERION_ERROR_LOCATION_NOT_IN_HOME_COUNTRY_FOR_LOCAL_SERVICES_CAMPAIGN = 'LOCATION_NOT_IN_HOME_COUNTRY_FOR_LOCAL_SERVICES_CAMPAIGN';
  /**
   * Local Services profile does not exist for a particular Local Services
   * campaign.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_ADD_OR_REMOVE_LOCATION_FOR_LOCAL_SERVICES_CAMPAIGN = 'CANNOT_ADD_OR_REMOVE_LOCATION_FOR_LOCAL_SERVICES_CAMPAIGN';
  /**
   * Local Services campaign must have at least one target location.
   */
  public const CAMPAIGN_CRITERION_ERROR_AT_LEAST_ONE_POSITIVE_LOCATION_REQUIRED_FOR_LOCAL_SERVICES_CAMPAIGN = 'AT_LEAST_ONE_POSITIVE_LOCATION_REQUIRED_FOR_LOCAL_SERVICES_CAMPAIGN';
  /**
   * At least one positive local service ID criterion is required for a Local
   * Services campaign.
   */
  public const CAMPAIGN_CRITERION_ERROR_AT_LEAST_ONE_LOCAL_SERVICE_ID_CRITERION_REQUIRED_FOR_LOCAL_SERVICES_CAMPAIGN = 'AT_LEAST_ONE_LOCAL_SERVICE_ID_CRITERION_REQUIRED_FOR_LOCAL_SERVICES_CAMPAIGN';
  /**
   * Local service ID is not found under selected categories in local services
   * campaign setting.
   */
  public const CAMPAIGN_CRITERION_ERROR_LOCAL_SERVICE_ID_NOT_FOUND_FOR_CATEGORY = 'LOCAL_SERVICE_ID_NOT_FOUND_FOR_CATEGORY';
  /**
   * For search advertising channel, brand lists can only be applied to
   * exclusive targeting, broad match campaigns for inclusive targeting or PMax
   * generated campaigns.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_ATTACH_BRAND_LIST_TO_NON_QUALIFIED_SEARCH_CAMPAIGN = 'CANNOT_ATTACH_BRAND_LIST_TO_NON_QUALIFIED_SEARCH_CAMPAIGN';
  /**
   * Campaigns that target all countries and territories are limited to a
   * certain number of top-level location exclusions. If removing a criterion
   * causes the campaign to target all countries and territories and the
   * campaign has more top-level location exclusions than the limit allows, then
   * this error is returned.
   */
  public const CAMPAIGN_CRITERION_ERROR_CANNOT_REMOVE_ALL_LOCATIONS_DUE_TO_TOO_MANY_COUNTRY_EXCLUSIONS = 'CANNOT_REMOVE_ALL_LOCATIONS_DUE_TO_TOO_MANY_COUNTRY_EXCLUSIONS';
  /**
   * Video lineup ID does not exist.
   */
  public const CAMPAIGN_CRITERION_ERROR_INVALID_VIDEO_LINEUP_ID = 'INVALID_VIDEO_LINEUP_ID';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_CUSTOMIZER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_CUSTOMIZER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_DRAFT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_DRAFT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * A draft with this name already exists for this campaign.
   */
  public const CAMPAIGN_DRAFT_ERROR_DUPLICATE_DRAFT_NAME = 'DUPLICATE_DRAFT_NAME';
  /**
   * The draft is removed and cannot be transitioned to another status.
   */
  public const CAMPAIGN_DRAFT_ERROR_INVALID_STATUS_TRANSITION_FROM_REMOVED = 'INVALID_STATUS_TRANSITION_FROM_REMOVED';
  /**
   * The draft has been promoted and cannot be transitioned to the specified
   * status.
   */
  public const CAMPAIGN_DRAFT_ERROR_INVALID_STATUS_TRANSITION_FROM_PROMOTED = 'INVALID_STATUS_TRANSITION_FROM_PROMOTED';
  /**
   * The draft has failed to be promoted and cannot be transitioned to the
   * specified status.
   */
  public const CAMPAIGN_DRAFT_ERROR_INVALID_STATUS_TRANSITION_FROM_PROMOTE_FAILED = 'INVALID_STATUS_TRANSITION_FROM_PROMOTE_FAILED';
  /**
   * This customer is not allowed to create drafts.
   */
  public const CAMPAIGN_DRAFT_ERROR_CUSTOMER_CANNOT_CREATE_DRAFT = 'CUSTOMER_CANNOT_CREATE_DRAFT';
  /**
   * This campaign is not allowed to create drafts.
   */
  public const CAMPAIGN_DRAFT_ERROR_CAMPAIGN_CANNOT_CREATE_DRAFT = 'CAMPAIGN_CANNOT_CREATE_DRAFT';
  /**
   * This modification cannot be made on a draft.
   */
  public const CAMPAIGN_DRAFT_ERROR_INVALID_DRAFT_CHANGE = 'INVALID_DRAFT_CHANGE';
  /**
   * The draft cannot be transitioned to the specified status from its current
   * status.
   */
  public const CAMPAIGN_DRAFT_ERROR_INVALID_STATUS_TRANSITION = 'INVALID_STATUS_TRANSITION';
  /**
   * The campaign has reached the maximum number of drafts that can be created
   * for a campaign throughout its lifetime. No additional drafts can be created
   * for this campaign. Removed drafts also count towards this limit.
   */
  public const CAMPAIGN_DRAFT_ERROR_MAX_NUMBER_OF_DRAFTS_PER_CAMPAIGN_REACHED = 'MAX_NUMBER_OF_DRAFTS_PER_CAMPAIGN_REACHED';
  /**
   * ListAsyncErrors was called without first promoting the draft.
   */
  public const CAMPAIGN_DRAFT_ERROR_LIST_ERRORS_FOR_PROMOTED_DRAFT_ONLY = 'LIST_ERRORS_FOR_PROMOTED_DRAFT_ONLY';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Cannot target content network.
   */
  public const CAMPAIGN_ERROR_CANNOT_TARGET_CONTENT_NETWORK = 'CANNOT_TARGET_CONTENT_NETWORK';
  /**
   * Cannot target search network.
   */
  public const CAMPAIGN_ERROR_CANNOT_TARGET_SEARCH_NETWORK = 'CANNOT_TARGET_SEARCH_NETWORK';
  /**
   * Cannot cover search network without google search network.
   */
  public const CAMPAIGN_ERROR_CANNOT_TARGET_SEARCH_NETWORK_WITHOUT_GOOGLE_SEARCH = 'CANNOT_TARGET_SEARCH_NETWORK_WITHOUT_GOOGLE_SEARCH';
  /**
   * Cannot target Google Search network for a CPM campaign.
   */
  public const CAMPAIGN_ERROR_CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN = 'CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN';
  /**
   * Must target at least one network.
   */
  public const CAMPAIGN_ERROR_CAMPAIGN_MUST_TARGET_AT_LEAST_ONE_NETWORK = 'CAMPAIGN_MUST_TARGET_AT_LEAST_ONE_NETWORK';
  /**
   * Only some Google partners are allowed to target partner search network.
   */
  public const CAMPAIGN_ERROR_CANNOT_TARGET_PARTNER_SEARCH_NETWORK = 'CANNOT_TARGET_PARTNER_SEARCH_NETWORK';
  /**
   * Cannot target content network only as campaign has criteria-level bidding
   * strategy.
   */
  public const CAMPAIGN_ERROR_CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CRITERIA_LEVEL_BIDDING_STRATEGY = 'CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CRITERIA_LEVEL_BIDDING_STRATEGY';
  /**
   * Cannot modify the start or end date such that the campaign duration would
   * not contain the durations of all runnable trials.
   */
  public const CAMPAIGN_ERROR_CAMPAIGN_DURATION_MUST_CONTAIN_ALL_RUNNABLE_TRIALS = 'CAMPAIGN_DURATION_MUST_CONTAIN_ALL_RUNNABLE_TRIALS';
  /**
   * Cannot modify dates, budget or status of a trial campaign.
   */
  public const CAMPAIGN_ERROR_CANNOT_MODIFY_FOR_TRIAL_CAMPAIGN = 'CANNOT_MODIFY_FOR_TRIAL_CAMPAIGN';
  /**
   * Trying to modify the name of an active or paused campaign, where the name
   * is already assigned to another active or paused campaign.
   */
  public const CAMPAIGN_ERROR_DUPLICATE_CAMPAIGN_NAME = 'DUPLICATE_CAMPAIGN_NAME';
  /**
   * Two fields are in conflicting modes.
   */
  public const CAMPAIGN_ERROR_INCOMPATIBLE_CAMPAIGN_FIELD = 'INCOMPATIBLE_CAMPAIGN_FIELD';
  /**
   * Campaign name cannot be used.
   */
  public const CAMPAIGN_ERROR_INVALID_CAMPAIGN_NAME = 'INVALID_CAMPAIGN_NAME';
  /**
   * Given status is invalid.
   */
  public const CAMPAIGN_ERROR_INVALID_AD_SERVING_OPTIMIZATION_STATUS = 'INVALID_AD_SERVING_OPTIMIZATION_STATUS';
  /**
   * Error in the campaign level tracking URL.
   */
  public const CAMPAIGN_ERROR_INVALID_TRACKING_URL = 'INVALID_TRACKING_URL';
  /**
   * Cannot set both tracking URL template and tracking setting. A user has to
   * clear legacy tracking setting in order to add tracking URL template.
   */
  public const CAMPAIGN_ERROR_CANNOT_SET_BOTH_TRACKING_URL_TEMPLATE_AND_TRACKING_SETTING = 'CANNOT_SET_BOTH_TRACKING_URL_TEMPLATE_AND_TRACKING_SETTING';
  /**
   * The maximum number of impressions for Frequency Cap should be an integer
   * greater than 0.
   */
  public const CAMPAIGN_ERROR_MAX_IMPRESSIONS_NOT_IN_RANGE = 'MAX_IMPRESSIONS_NOT_IN_RANGE';
  /**
   * Only the Day, Week and Month time units are supported.
   */
  public const CAMPAIGN_ERROR_TIME_UNIT_NOT_SUPPORTED = 'TIME_UNIT_NOT_SUPPORTED';
  /**
   * Operation not allowed on a campaign whose serving status has ended
   */
  public const CAMPAIGN_ERROR_INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED = 'INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED';
  /**
   * This budget is exclusively linked to a Campaign that is using experiments
   * so it cannot be shared.
   */
  public const CAMPAIGN_ERROR_BUDGET_CANNOT_BE_SHARED = 'BUDGET_CANNOT_BE_SHARED';
  /**
   * Campaigns using experiments cannot use a shared budget.
   */
  public const CAMPAIGN_ERROR_CAMPAIGN_CANNOT_USE_SHARED_BUDGET = 'CAMPAIGN_CANNOT_USE_SHARED_BUDGET';
  /**
   * A different budget cannot be assigned to a campaign when there are running
   * or scheduled trials.
   */
  public const CAMPAIGN_ERROR_CANNOT_CHANGE_BUDGET_ON_CAMPAIGN_WITH_TRIALS = 'CANNOT_CHANGE_BUDGET_ON_CAMPAIGN_WITH_TRIALS';
  /**
   * No link found between the campaign and the label.
   */
  public const CAMPAIGN_ERROR_CAMPAIGN_LABEL_DOES_NOT_EXIST = 'CAMPAIGN_LABEL_DOES_NOT_EXIST';
  /**
   * The label has already been attached to the campaign.
   */
  public const CAMPAIGN_ERROR_CAMPAIGN_LABEL_ALREADY_EXISTS = 'CAMPAIGN_LABEL_ALREADY_EXISTS';
  /**
   * A ShoppingSetting was not found when creating a shopping campaign.
   */
  public const CAMPAIGN_ERROR_MISSING_SHOPPING_SETTING = 'MISSING_SHOPPING_SETTING';
  /**
   * The country in shopping setting is not an allowed country.
   */
  public const CAMPAIGN_ERROR_INVALID_SHOPPING_SALES_COUNTRY = 'INVALID_SHOPPING_SALES_COUNTRY';
  /**
   * The requested channel type is not available according to the customer's
   * account setting.
   */
  public const CAMPAIGN_ERROR_ADVERTISING_CHANNEL_TYPE_NOT_AVAILABLE_FOR_ACCOUNT_TYPE = 'ADVERTISING_CHANNEL_TYPE_NOT_AVAILABLE_FOR_ACCOUNT_TYPE';
  /**
   * The AdvertisingChannelSubType is not a valid subtype of the primary channel
   * type.
   */
  public const CAMPAIGN_ERROR_INVALID_ADVERTISING_CHANNEL_SUB_TYPE = 'INVALID_ADVERTISING_CHANNEL_SUB_TYPE';
  /**
   * At least one conversion must be selected.
   */
  public const CAMPAIGN_ERROR_AT_LEAST_ONE_CONVERSION_MUST_BE_SELECTED = 'AT_LEAST_ONE_CONVERSION_MUST_BE_SELECTED';
  /**
   * Setting ad rotation mode for a campaign is not allowed. Ad rotation mode at
   * campaign is deprecated.
   */
  public const CAMPAIGN_ERROR_CANNOT_SET_AD_ROTATION_MODE = 'CANNOT_SET_AD_ROTATION_MODE';
  /**
   * Trying to change start date on a campaign that has started.
   */
  public const CAMPAIGN_ERROR_CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED = 'CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED';
  /**
   * Trying to modify a date into the past.
   */
  public const CAMPAIGN_ERROR_CANNOT_SET_DATE_TO_PAST = 'CANNOT_SET_DATE_TO_PAST';
  /**
   * Hotel center id in the hotel setting does not match any customer links.
   */
  public const CAMPAIGN_ERROR_MISSING_HOTEL_CUSTOMER_LINK = 'MISSING_HOTEL_CUSTOMER_LINK';
  /**
   * Hotel center id in the hotel setting must match an active customer link.
   */
  public const CAMPAIGN_ERROR_INVALID_HOTEL_CUSTOMER_LINK = 'INVALID_HOTEL_CUSTOMER_LINK';
  /**
   * Hotel setting was not found when creating a hotel ads campaign.
   */
  public const CAMPAIGN_ERROR_MISSING_HOTEL_SETTING = 'MISSING_HOTEL_SETTING';
  /**
   * A Campaign cannot use shared campaign budgets and be part of a campaign
   * group.
   */
  public const CAMPAIGN_ERROR_CANNOT_USE_SHARED_CAMPAIGN_BUDGET_WHILE_PART_OF_CAMPAIGN_GROUP = 'CANNOT_USE_SHARED_CAMPAIGN_BUDGET_WHILE_PART_OF_CAMPAIGN_GROUP';
  /**
   * The app ID was not found.
   */
  public const CAMPAIGN_ERROR_APP_NOT_FOUND = 'APP_NOT_FOUND';
  /**
   * Campaign.shopping_setting.enable_local is not supported for the specified
   * campaign type.
   */
  public const CAMPAIGN_ERROR_SHOPPING_ENABLE_LOCAL_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE = 'SHOPPING_ENABLE_LOCAL_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE';
  /**
   * The merchant does not support the creation of campaigns for Shopping
   * Comparison Listing Ads.
   */
  public const CAMPAIGN_ERROR_MERCHANT_NOT_ALLOWED_FOR_COMPARISON_LISTING_ADS = 'MERCHANT_NOT_ALLOWED_FOR_COMPARISON_LISTING_ADS';
  /**
   * The App campaign for engagement cannot be created because there aren't
   * enough installs.
   */
  public const CAMPAIGN_ERROR_INSUFFICIENT_APP_INSTALLS_COUNT = 'INSUFFICIENT_APP_INSTALLS_COUNT';
  /**
   * The App campaign for engagement cannot be created because the app is
   * sensitive.
   */
  public const CAMPAIGN_ERROR_SENSITIVE_CATEGORY_APP = 'SENSITIVE_CATEGORY_APP';
  /**
   * Customers with Housing, Employment, or Credit ads must accept updated
   * personalized ads policy to continue creating campaigns.
   */
  public const CAMPAIGN_ERROR_HEC_AGREEMENT_REQUIRED = 'HEC_AGREEMENT_REQUIRED';
  /**
   * The field is not compatible with view through conversion optimization.
   */
  public const CAMPAIGN_ERROR_NOT_COMPATIBLE_WITH_VIEW_THROUGH_CONVERSION_OPTIMIZATION = 'NOT_COMPATIBLE_WITH_VIEW_THROUGH_CONVERSION_OPTIMIZATION';
  /**
   * The field type cannot be excluded because an active campaign-asset link of
   * this type exists.
   */
  public const CAMPAIGN_ERROR_INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE = 'INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE';
  /**
   * The app pre-registration campaign cannot be created for non-Android
   * applications.
   */
  public const CAMPAIGN_ERROR_CANNOT_CREATE_APP_PRE_REGISTRATION_FOR_NON_ANDROID_APP = 'CANNOT_CREATE_APP_PRE_REGISTRATION_FOR_NON_ANDROID_APP';
  /**
   * The campaign cannot be created since the app is not available for pre-
   * registration in any country.
   */
  public const CAMPAIGN_ERROR_APP_NOT_AVAILABLE_TO_CREATE_APP_PRE_REGISTRATION_CAMPAIGN = 'APP_NOT_AVAILABLE_TO_CREATE_APP_PRE_REGISTRATION_CAMPAIGN';
  /**
   * The type of the Budget is not compatible with this Campaign.
   */
  public const CAMPAIGN_ERROR_INCOMPATIBLE_BUDGET_TYPE = 'INCOMPATIBLE_BUDGET_TYPE';
  /**
   * Category bid list in the local services campaign setting contains multiple
   * bids for the same category ID.
   */
  public const CAMPAIGN_ERROR_LOCAL_SERVICES_DUPLICATE_CATEGORY_BID = 'LOCAL_SERVICES_DUPLICATE_CATEGORY_BID';
  /**
   * Category bid list in the local services campaign setting contains a bid for
   * an invalid category ID.
   */
  public const CAMPAIGN_ERROR_LOCAL_SERVICES_INVALID_CATEGORY_BID = 'LOCAL_SERVICES_INVALID_CATEGORY_BID';
  /**
   * Category bid list in the local services campaign setting is missing a bid
   * for a category ID that must be present.
   */
  public const CAMPAIGN_ERROR_LOCAL_SERVICES_MISSING_CATEGORY_BID = 'LOCAL_SERVICES_MISSING_CATEGORY_BID';
  /**
   * The requested change in status is not supported.
   */
  public const CAMPAIGN_ERROR_INVALID_STATUS_CHANGE = 'INVALID_STATUS_CHANGE';
  /**
   * Travel Campaign's travel_account_id does not match any customer links.
   */
  public const CAMPAIGN_ERROR_MISSING_TRAVEL_CUSTOMER_LINK = 'MISSING_TRAVEL_CUSTOMER_LINK';
  /**
   * Travel Campaign's travel_account_id matches an existing customer link but
   * the customer link is not active.
   */
  public const CAMPAIGN_ERROR_INVALID_TRAVEL_CUSTOMER_LINK = 'INVALID_TRAVEL_CUSTOMER_LINK';
  /**
   * The asset set type is invalid to be set in excluded_parent_asset_set_types
   * field.
   */
  public const CAMPAIGN_ERROR_INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE = 'INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE';
  /**
   * Campaign.hotel_property_asset_set must point to an asset set of type
   * HOTEL_PROPERTY.
   */
  public const CAMPAIGN_ERROR_ASSET_SET_NOT_A_HOTEL_PROPERTY_ASSET_SET = 'ASSET_SET_NOT_A_HOTEL_PROPERTY_ASSET_SET';
  /**
   * The hotel property asset set can only be set on Performance Max for travel
   * goals campaigns.
   */
  public const CAMPAIGN_ERROR_HOTEL_PROPERTY_ASSET_SET_ONLY_FOR_PERFORMANCE_MAX_FOR_TRAVEL_GOALS = 'HOTEL_PROPERTY_ASSET_SET_ONLY_FOR_PERFORMANCE_MAX_FOR_TRAVEL_GOALS';
  /**
   * Customer's average daily spend is too high to enable this feature.
   */
  public const CAMPAIGN_ERROR_AVERAGE_DAILY_SPEND_TOO_HIGH = 'AVERAGE_DAILY_SPEND_TOO_HIGH';
  /**
   * Cannot attach the campaign to a deleted campaign group.
   */
  public const CAMPAIGN_ERROR_CANNOT_ATTACH_TO_REMOVED_CAMPAIGN_GROUP = 'CANNOT_ATTACH_TO_REMOVED_CAMPAIGN_GROUP';
  /**
   * Cannot attach the campaign to this bidding strategy.
   */
  public const CAMPAIGN_ERROR_CANNOT_ATTACH_TO_BIDDING_STRATEGY = 'CANNOT_ATTACH_TO_BIDDING_STRATEGY';
  /**
   * A budget with a different period cannot be assigned to the campaign.
   */
  public const CAMPAIGN_ERROR_CANNOT_CHANGE_BUDGET_PERIOD = 'CANNOT_CHANGE_BUDGET_PERIOD';
  /**
   * Customer does not have enough conversions to enable this feature.
   */
  public const CAMPAIGN_ERROR_NOT_ENOUGH_CONVERSIONS = 'NOT_ENOUGH_CONVERSIONS';
  /**
   * This campaign type can only have one conversion action.
   */
  public const CAMPAIGN_ERROR_CANNOT_SET_MORE_THAN_ONE_CONVERSION_ACTION = 'CANNOT_SET_MORE_THAN_ONE_CONVERSION_ACTION';
  /**
   * The field is not compatible with the budget type.
   */
  public const CAMPAIGN_ERROR_NOT_COMPATIBLE_WITH_BUDGET_TYPE = 'NOT_COMPATIBLE_WITH_BUDGET_TYPE';
  /**
   * The feature is incompatible with ConversionActionType.UPLOAD_CLICKS.
   */
  public const CAMPAIGN_ERROR_NOT_COMPATIBLE_WITH_UPLOAD_CLICKS_CONVERSION = 'NOT_COMPATIBLE_WITH_UPLOAD_CLICKS_CONVERSION';
  /**
   * App campaign setting app ID must match selective optimization conversion
   * action app ID.
   */
  public const CAMPAIGN_ERROR_APP_ID_MUST_MATCH_CONVERSION_ACTION_APP_ID = 'APP_ID_MUST_MATCH_CONVERSION_ACTION_APP_ID';
  /**
   * Selective optimization conversion action with Download category is not
   * allowed.
   */
  public const CAMPAIGN_ERROR_CONVERSION_ACTION_WITH_DOWNLOAD_CATEGORY_NOT_ALLOWED = 'CONVERSION_ACTION_WITH_DOWNLOAD_CATEGORY_NOT_ALLOWED';
  /**
   * One software download for selective optimization conversion action is
   * required for this campaign conversion action.
   */
  public const CAMPAIGN_ERROR_CONVERSION_ACTION_WITH_DOWNLOAD_CATEGORY_REQUIRED = 'CONVERSION_ACTION_WITH_DOWNLOAD_CATEGORY_REQUIRED';
  /**
   * Conversion tracking is not enabled and is required for this feature.
   */
  public const CAMPAIGN_ERROR_CONVERSION_TRACKING_NOT_ENABLED = 'CONVERSION_TRACKING_NOT_ENABLED';
  /**
   * The field is not compatible with the bidding strategy type.
   */
  public const CAMPAIGN_ERROR_NOT_COMPATIBLE_WITH_BIDDING_STRATEGY_TYPE = 'NOT_COMPATIBLE_WITH_BIDDING_STRATEGY_TYPE';
  /**
   * Campaign is not compatible with a conversion tracker that has Google
   * attribution enabled.
   */
  public const CAMPAIGN_ERROR_NOT_COMPATIBLE_WITH_GOOGLE_ATTRIBUTION_CONVERSIONS = 'NOT_COMPATIBLE_WITH_GOOGLE_ATTRIBUTION_CONVERSIONS';
  /**
   * Customer level conversion lag is too high.
   */
  public const CAMPAIGN_ERROR_CONVERSION_LAG_TOO_HIGH = 'CONVERSION_LAG_TOO_HIGH';
  /**
   * The advertiser set as an advertising partner is not an actively linked
   * advertiser to this customer.
   */
  public const CAMPAIGN_ERROR_NOT_LINKED_ADVERTISING_PARTNER = 'NOT_LINKED_ADVERTISING_PARTNER';
  /**
   * Invalid number of advertising partner IDs.
   */
  public const CAMPAIGN_ERROR_INVALID_NUMBER_OF_ADVERTISING_PARTNER_IDS = 'INVALID_NUMBER_OF_ADVERTISING_PARTNER_IDS';
  /**
   * Cannot target the display network without also targeting YouTube.
   */
  public const CAMPAIGN_ERROR_CANNOT_TARGET_DISPLAY_NETWORK_WITHOUT_YOUTUBE = 'CANNOT_TARGET_DISPLAY_NETWORK_WITHOUT_YOUTUBE';
  /**
   * This campaign type cannot be linked to a Comparison Shopping Service
   * account.
   */
  public const CAMPAIGN_ERROR_CANNOT_LINK_TO_COMPARISON_SHOPPING_SERVICE_ACCOUNT = 'CANNOT_LINK_TO_COMPARISON_SHOPPING_SERVICE_ACCOUNT';
  /**
   * Standard Shopping campaigns that are linked to a Comparison Shopping
   * Service account cannot target this network.
   */
  public const CAMPAIGN_ERROR_CANNOT_TARGET_NETWORK_FOR_COMPARISON_SHOPPING_SERVICE_LINKED_ACCOUNTS = 'CANNOT_TARGET_NETWORK_FOR_COMPARISON_SHOPPING_SERVICE_LINKED_ACCOUNTS';
  /**
   * Text asset automation settings can not be modified when there is an active
   * Performance Max optimization automatically created assets experiment. End
   * the experiment to modify these settings.
   */
  public const CAMPAIGN_ERROR_CANNOT_MODIFY_TEXT_ASSET_AUTOMATION_WITH_ENABLED_TRIAL = 'CANNOT_MODIFY_TEXT_ASSET_AUTOMATION_WITH_ENABLED_TRIAL';
  /**
   * Dynamic text asset cannot be opted out when final URL expansion is opted
   * in.
   */
  public const CAMPAIGN_ERROR_DYNAMIC_TEXT_ASSET_CANNOT_OPT_OUT_WITH_FINAL_URL_EXPANSION_OPT_IN = 'DYNAMIC_TEXT_ASSET_CANNOT_OPT_OUT_WITH_FINAL_URL_EXPANSION_OPT_IN';
  /**
   * Can not set a campaign level match type.
   */
  public const CAMPAIGN_ERROR_CANNOT_SET_CAMPAIGN_KEYWORD_MATCH_TYPE = 'CANNOT_SET_CAMPAIGN_KEYWORD_MATCH_TYPE';
  /**
   * The campaign level keyword match type cannot be switched to non-broad when
   * keyword conversion to broad match is in process.
   */
  public const CAMPAIGN_ERROR_CANNOT_DISABLE_BROAD_MATCH_WHEN_KEYWORD_CONVERSION_IN_PROCESS = 'CANNOT_DISABLE_BROAD_MATCH_WHEN_KEYWORD_CONVERSION_IN_PROCESS';
  /**
   * The campaign level keyword match type cannot be switched to non-broad when
   * the campaign has any attached brand list or when a brand hint shared set is
   * attached to the campaign.
   */
  public const CAMPAIGN_ERROR_CANNOT_DISABLE_BROAD_MATCH_WHEN_TARGETING_BRANDS = 'CANNOT_DISABLE_BROAD_MATCH_WHEN_TARGETING_BRANDS';
  /**
   * Cannot set campaign level keyword match type to BROAD if the campaign is a
   * base campaign with an associated trial that is currently promoting.
   */
  public const CAMPAIGN_ERROR_CANNOT_ENABLE_BROAD_MATCH_FOR_BASE_CAMPAIGN_WITH_PROMOTING_TRIAL = 'CANNOT_ENABLE_BROAD_MATCH_FOR_BASE_CAMPAIGN_WITH_PROMOTING_TRIAL';
  /**
   * Cannot set campaign level keyword match type to BROAD if the campaign is a
   * trial currently promoting.
   */
  public const CAMPAIGN_ERROR_CANNOT_ENABLE_BROAD_MATCH_FOR_PROMOTING_TRIAL_CAMPAIGN = 'CANNOT_ENABLE_BROAD_MATCH_FOR_PROMOTING_TRIAL_CAMPAIGN';
  /**
   * Performance Max campaigns with Brand Guidelines enabled require at least
   * one business name to be linked as a CampaignAsset. Performance Max
   * campaigns for online sales with a product feed must meet this requirement
   * only when there are assets that are linked to the campaign's asset groups.
   */
  public const CAMPAIGN_ERROR_REQUIRED_BUSINESS_NAME_ASSET_NOT_LINKED = 'REQUIRED_BUSINESS_NAME_ASSET_NOT_LINKED';
  /**
   * Performance Max campaigns with Brand Guidelines enabled require at least
   * one square logo to be linked as a CampaignAsset. Performance Max campaigns
   * for online sales with a product feed must meet this requirement only when
   * there are assets that are linked to the campaign's asset groups.
   */
  public const CAMPAIGN_ERROR_REQUIRED_LOGO_ASSET_NOT_LINKED = 'REQUIRED_LOGO_ASSET_NOT_LINKED';
  /**
   * This campaign does not support brand targeting overrides. Brand targeting
   * overrides are only supported for Performance Max campaigns that have a
   * product feed.
   */
  public const CAMPAIGN_ERROR_BRAND_TARGETING_OVERRIDES_NOT_SUPPORTED = 'BRAND_TARGETING_OVERRIDES_NOT_SUPPORTED';
  /**
   * Brand Guideline fields can only be set for campaigns that have Brand
   * Guidelines enabled.
   */
  public const CAMPAIGN_ERROR_BRAND_GUIDELINES_NOT_ENABLED_FOR_CAMPAIGN = 'BRAND_GUIDELINES_NOT_ENABLED_FOR_CAMPAIGN';
  /**
   * When a Brand Guidelines color field is set, both main color and accent
   * color are required.
   */
  public const CAMPAIGN_ERROR_BRAND_GUIDELINES_MAIN_AND_ACCENT_COLORS_REQUIRED = 'BRAND_GUIDELINES_MAIN_AND_ACCENT_COLORS_REQUIRED';
  /**
   * Brand Guidelines colors must be hex colors matching the regular expression
   * '#[0-9a-fA-F]{6}', for example '#abc123'
   */
  public const CAMPAIGN_ERROR_BRAND_GUIDELINES_COLOR_INVALID_FORMAT = 'BRAND_GUIDELINES_COLOR_INVALID_FORMAT';
  /**
   * Brand Guidelines font family must be one of the supported Google Fonts. See
   * Campaign.brand_guidelines.predefined_font_family for the list of supported
   * fonts.
   */
  public const CAMPAIGN_ERROR_BRAND_GUIDELINES_UNSUPPORTED_FONT_FAMILY = 'BRAND_GUIDELINES_UNSUPPORTED_FONT_FAMILY';
  /**
   * Brand Guidelines cannot be set for this channel type. Brand Guidelines
   * supports Performance Max campaigns.
   */
  public const CAMPAIGN_ERROR_BRAND_GUIDELINES_UNSUPPORTED_CHANNEL = 'BRAND_GUIDELINES_UNSUPPORTED_CHANNEL';
  /**
   * Brand Guidelines cannot be enabled for Performance Max for travel goals
   * campaigns.
   */
  public const CAMPAIGN_ERROR_CANNOT_ENABLE_BRAND_GUIDELINES_FOR_TRAVEL_GOALS = 'CANNOT_ENABLE_BRAND_GUIDELINES_FOR_TRAVEL_GOALS';
  /**
   * This customer is not allowlisted for enabling Brand Guidelines.
   */
  public const CAMPAIGN_ERROR_CUSTOMER_NOT_ALLOWLISTED_FOR_BRAND_GUIDELINES = 'CUSTOMER_NOT_ALLOWLISTED_FOR_BRAND_GUIDELINES';
  /**
   * Using campaign third-party integration partners that are not set at the
   * customer level is not allowed.
   */
  public const CAMPAIGN_ERROR_THIRD_PARTY_INTEGRATION_PARTNER_NOT_ALLOWED = 'THIRD_PARTY_INTEGRATION_PARTNER_NOT_ALLOWED';
  /**
   * Campaign third-party integration partners are not allowed to share cost if
   * it is not enabled at the customer level.
   */
  public const CAMPAIGN_ERROR_THIRD_PARTY_INTEGRATION_PARTNER_SHARE_COST_NOT_ALLOWED = 'THIRD_PARTY_INTEGRATION_PARTNER_SHARE_COST_NOT_ALLOWED';
  /**
   * Each `previous_step_interaction_type` can be used at most once for the same
   * `previous_step_id`
   */
  public const CAMPAIGN_ERROR_DUPLICATE_INTERACTION_TYPE = 'DUPLICATE_INTERACTION_TYPE';
  /**
   * Previous step interaction type cannot happen for previous step AdGroup
   * type. For example, `SKIP` interaction type is not valid for non-skippable
   * formats.
   */
  public const CAMPAIGN_ERROR_INVALID_INTERACTION_TYPE = 'INVALID_INTERACTION_TYPE';
  /**
   * Campaign video ads sequence is required for `VIDEO_SEQUENCE` advertising
   * channel sub type.
   */
  public const CAMPAIGN_ERROR_VIDEO_SEQUENCE_ERROR_SEQUENCE_DEFINITION_REQUIRED = 'VIDEO_SEQUENCE_ERROR_SEQUENCE_DEFINITION_REQUIRED';
  /**
   * This feature is only available for campaigns with AI Max enabled.
   */
  public const CAMPAIGN_ERROR_AI_MAX_MUST_BE_ENABLED = 'AI_MAX_MUST_BE_ENABLED';
  /**
   * Duration too long for total budget.
   */
  public const CAMPAIGN_ERROR_DURATION_TOO_LONG_FOR_TOTAL_BUDGET = 'DURATION_TOO_LONG_FOR_TOTAL_BUDGET';
  /**
   * Campaigns with total budgets must have end date/time specified.
   */
  public const CAMPAIGN_ERROR_END_DATE_TIME_REQUIRED_FOR_TOTAL_BUDGET = 'END_DATE_TIME_REQUIRED_FOR_TOTAL_BUDGET';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * An active campaign or experiment with this name already exists.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * Experiment cannot be updated from the current state to the requested target
   * state. For example, an experiment can only graduate if its status is
   * ENABLED.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_INVALID_TRANSITION = 'INVALID_TRANSITION';
  /**
   * Cannot create an experiment from a campaign using an explicitly shared
   * budget.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_CANNOT_CREATE_EXPERIMENT_WITH_SHARED_BUDGET = 'CANNOT_CREATE_EXPERIMENT_WITH_SHARED_BUDGET';
  /**
   * Cannot create an experiment for a removed base campaign.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_CANNOT_CREATE_EXPERIMENT_FOR_REMOVED_BASE_CAMPAIGN = 'CANNOT_CREATE_EXPERIMENT_FOR_REMOVED_BASE_CAMPAIGN';
  /**
   * Cannot create an experiment from a draft, which has a status other than
   * proposed.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_CANNOT_CREATE_EXPERIMENT_FOR_NON_PROPOSED_DRAFT = 'CANNOT_CREATE_EXPERIMENT_FOR_NON_PROPOSED_DRAFT';
  /**
   * This customer is not allowed to create an experiment.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_CUSTOMER_CANNOT_CREATE_EXPERIMENT = 'CUSTOMER_CANNOT_CREATE_EXPERIMENT';
  /**
   * This campaign is not allowed to create an experiment.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_CAMPAIGN_CANNOT_CREATE_EXPERIMENT = 'CAMPAIGN_CANNOT_CREATE_EXPERIMENT';
  /**
   * Trying to set an experiment duration which overlaps with another
   * experiment.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_EXPERIMENT_DURATIONS_MUST_NOT_OVERLAP = 'EXPERIMENT_DURATIONS_MUST_NOT_OVERLAP';
  /**
   * All non-removed experiments must start and end within their campaign's
   * duration.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_EXPERIMENT_DURATION_MUST_BE_WITHIN_CAMPAIGN_DURATION = 'EXPERIMENT_DURATION_MUST_BE_WITHIN_CAMPAIGN_DURATION';
  /**
   * The experiment cannot be modified because its status is in a terminal
   * state, such as REMOVED.
   */
  public const CAMPAIGN_EXPERIMENT_ERROR_CANNOT_MUTATE_EXPERIMENT_DUE_TO_STATUS = 'CANNOT_MUTATE_EXPERIMENT_DUE_TO_STATUS';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_FEED_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_FEED_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * An active feed already exists for this campaign and placeholder type.
   */
  public const CAMPAIGN_FEED_ERROR_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 'FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE';
  /**
   * The specified feed is removed.
   */
  public const CAMPAIGN_FEED_ERROR_CANNOT_CREATE_FOR_REMOVED_FEED = 'CANNOT_CREATE_FOR_REMOVED_FEED';
  /**
   * The CampaignFeed already exists. UPDATE should be used to modify the
   * existing CampaignFeed.
   */
  public const CAMPAIGN_FEED_ERROR_CANNOT_CREATE_ALREADY_EXISTING_CAMPAIGN_FEED = 'CANNOT_CREATE_ALREADY_EXISTING_CAMPAIGN_FEED';
  /**
   * Cannot update removed campaign feed.
   */
  public const CAMPAIGN_FEED_ERROR_CANNOT_MODIFY_REMOVED_CAMPAIGN_FEED = 'CANNOT_MODIFY_REMOVED_CAMPAIGN_FEED';
  /**
   * Invalid placeholder type.
   */
  public const CAMPAIGN_FEED_ERROR_INVALID_PLACEHOLDER_TYPE = 'INVALID_PLACEHOLDER_TYPE';
  /**
   * Feed mapping for this placeholder type does not exist.
   */
  public const CAMPAIGN_FEED_ERROR_MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE = 'MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE';
  /**
   * Location CampaignFeeds cannot be created unless there is a location
   * CustomerFeed for the specified feed.
   */
  public const CAMPAIGN_FEED_ERROR_NO_EXISTING_LOCATION_CUSTOMER_FEED = 'NO_EXISTING_LOCATION_CUSTOMER_FEED';
  /**
   * Feed is read only.
   */
  public const CAMPAIGN_FEED_ERROR_LEGACY_FEED_TYPE_READ_ONLY = 'LEGACY_FEED_TYPE_READ_ONLY';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_GOAL_CONFIG_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_GOAL_CONFIG_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Goal is either removed or does not exist for this account.
   */
  public const CAMPAIGN_GOAL_CONFIG_ERROR_GOAL_NOT_FOUND = 'GOAL_NOT_FOUND';
  /**
   * Campaign is either removed or does not exist.
   */
  public const CAMPAIGN_GOAL_CONFIG_ERROR_CAMPAIGN_NOT_FOUND = 'CAMPAIGN_NOT_FOUND';
  /**
   * If high lifetime value is present then value should be present.
   */
  public const CAMPAIGN_GOAL_CONFIG_ERROR_HIGH_LIFETIME_VALUE_PRESENT_BUT_VALUE_ABSENT = 'HIGH_LIFETIME_VALUE_PRESENT_BUT_VALUE_ABSENT';
  /**
   * High lifetime value should be greater than value.
   */
  public const CAMPAIGN_GOAL_CONFIG_ERROR_HIGH_LIFETIME_VALUE_LESS_THAN_OR_EQUAL_TO_VALUE = 'HIGH_LIFETIME_VALUE_LESS_THAN_OR_EQUAL_TO_VALUE';
  /**
   * When using customer lifecycle optimization goal, campaign type should be
   * supported.
   */
  public const CAMPAIGN_GOAL_CONFIG_ERROR_CUSTOMER_LIFECYCLE_OPTIMIZATION_CAMPAIGN_TYPE_NOT_SUPPORTED = 'CUSTOMER_LIFECYCLE_OPTIMIZATION_CAMPAIGN_TYPE_NOT_SUPPORTED';
  /**
   * Customer must be allowlisted to use retention only goal.
   */
  public const CAMPAIGN_GOAL_CONFIG_ERROR_CUSTOMER_NOT_ALLOWLISTED_FOR_RETENTION_ONLY = 'CUSTOMER_NOT_ALLOWLISTED_FOR_RETENTION_ONLY';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Campaign is not specified.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_CAMPAIGN_MISSING = 'CAMPAIGN_MISSING';
  /**
   * Cannot find the specified campaign.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_INVALID_CAMPAIGN = 'INVALID_CAMPAIGN';
  /**
   * Optimization mode is unspecified or invalid.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_INVALID_OPTIMIZATION_MODE = 'CUSTOMER_ACQUISITION_INVALID_OPTIMIZATION_MODE';
  /**
   * The configured lifecycle goal setting is not compatible with the bidding
   * strategy the campaign is using. Specifically, BID_HIGHER_FOR_NEW_CUSTOMER
   * requires conversion-value based bidding strategy type such as
   * MAXIMIZE_CONVERSION_VALUE.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_INCOMPATIBLE_BIDDING_STRATEGY = 'INCOMPATIBLE_BIDDING_STRATEGY';
  /**
   * Lifecycle goals require the campaign to optimize towards purchase
   * conversion goal.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_MISSING_PURCHASE_GOAL = 'MISSING_PURCHASE_GOAL';
  /**
   * CampaignLifecycleGoal.customer_acquisition_goal_settings.value_settings.hig
   * h_lifetime_value is invalid or not allowed, such as when the specified
   * value is smaller than 0.01, when the optimization mode is not
   * BID_HIGHER_FOR_NEW_CUSTOMER, or when CampaignLifecycleGoal.customer_acquisi
   * tion_goal_settings.value_settings.high_lifetime_value is specified smaller
   * than/without CampaignLifecycleGoal.customer_acquisition_goal_settings.value
   * _settings.value.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_INVALID_HIGH_LIFETIME_VALUE = 'CUSTOMER_ACQUISITION_INVALID_HIGH_LIFETIME_VALUE';
  /**
   * Customer acquisition goal is not supported on this campaign type.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_UNSUPPORTED_CAMPAIGN_TYPE = 'CUSTOMER_ACQUISITION_UNSUPPORTED_CAMPAIGN_TYPE';
  /**
   * CampaignLifecycleGoal.customer_acquisition_goal_settings.value_settings.val
   * ue is invalid or not allowed, such as when the specified value is smaller
   * than 0.01, or when the optimization mode is not
   * BID_HIGHER_FOR_NEW_CUSTOMER.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_INVALID_VALUE = 'CUSTOMER_ACQUISITION_INVALID_VALUE';
  /**
   * To use BID_HIGHER_FOR_NEW_CUSTOMER mode, either CampaignLifecycleGoal.custo
   * mer_acquisition_goal_settings.value_settings.value or
   * CustomerLifecycleGoal.customer_acquisition_goal_value_settings.value must
   * have been specified. If a manager account is managing your account's
   * conversion tracking, then only the CustomerLifecycleGoal of that manager
   * account is used.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_VALUE_MISSING = 'CUSTOMER_ACQUISITION_VALUE_MISSING';
  /**
   * In order for a campaign to adopt the customer acquisition goal, CustomerLif
   * ecycleGoal.lifecycle_goal_customer_definition_settings.existing_user_lists
   * must include active and accessible userlist with more than 1000 members in
   * the Search/Youtube network. If a manager account is managing your account's
   * conversion tracking, then only the CustomerLifecycleGoal of that manager
   * account is used. Also make sure that the manager account shares audience
   * segments with sub-accounts with continuous audience sharing.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_MISSING_EXISTING_CUSTOMER_DEFINITION = 'CUSTOMER_ACQUISITION_MISSING_EXISTING_CUSTOMER_DEFINITION';
  /**
   * In order for a campaign to adopt the customer acquisition goal with high
   * lifetime value optimization, CustomerLifecycleGoal.lifecycle_goal_customer_
   * definition_settings.high_lifetime_value_user_lists must include active and
   * accessible userlist with more than 1000 members in the Search/Youtube
   * network. If a manager account is managing your account's conversion
   * tracking, then only the CustomerLifecycleGoal of that manager account is
   * used. Also make sure that the manager account shares audience segments with
   * sub-accounts using continuous audience sharing.
   */
  public const CAMPAIGN_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_MISSING_HIGH_VALUE_CUSTOMER_DEFINITION = 'CUSTOMER_ACQUISITION_MISSING_HIGH_VALUE_CUSTOMER_DEFINITION';
  /**
   * Enum unspecified.
   */
  public const CAMPAIGN_SHARED_SET_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CAMPAIGN_SHARED_SET_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The shared set belongs to another customer and permission isn't granted.
   */
  public const CAMPAIGN_SHARED_SET_ERROR_SHARED_SET_ACCESS_DENIED = 'SHARED_SET_ACCESS_DENIED';
  /**
   * Enum unspecified.
   */
  public const CHANGE_EVENT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CHANGE_EVENT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The requested start date is too old. It cannot be older than 30 days.
   */
  public const CHANGE_EVENT_ERROR_START_DATE_TOO_OLD = 'START_DATE_TOO_OLD';
  /**
   * The change_event search request must specify a finite range filter on
   * change_date_time.
   */
  public const CHANGE_EVENT_ERROR_CHANGE_DATE_RANGE_INFINITE = 'CHANGE_DATE_RANGE_INFINITE';
  /**
   * The change event search request has specified invalid date time filters
   * that can never logically produce any valid results (for example, start time
   * after end time).
   */
  public const CHANGE_EVENT_ERROR_CHANGE_DATE_RANGE_NEGATIVE = 'CHANGE_DATE_RANGE_NEGATIVE';
  /**
   * The change_event search request must specify a LIMIT.
   */
  public const CHANGE_EVENT_ERROR_LIMIT_NOT_SPECIFIED = 'LIMIT_NOT_SPECIFIED';
  /**
   * The LIMIT specified by change_event request should be less than or equal to
   * 10K.
   */
  public const CHANGE_EVENT_ERROR_INVALID_LIMIT_CLAUSE = 'INVALID_LIMIT_CLAUSE';
  /**
   * Enum unspecified.
   */
  public const CHANGE_STATUS_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CHANGE_STATUS_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The requested start date is too old.
   */
  public const CHANGE_STATUS_ERROR_START_DATE_TOO_OLD = 'START_DATE_TOO_OLD';
  /**
   * The change_status search request must specify a finite range filter on
   * last_change_date_time.
   */
  public const CHANGE_STATUS_ERROR_CHANGE_DATE_RANGE_INFINITE = 'CHANGE_DATE_RANGE_INFINITE';
  /**
   * The change status search request has specified invalid date time filters
   * that can never logically produce any valid results (for example, start time
   * after end time).
   */
  public const CHANGE_STATUS_ERROR_CHANGE_DATE_RANGE_NEGATIVE = 'CHANGE_DATE_RANGE_NEGATIVE';
  /**
   * The change_status search request must specify a LIMIT.
   */
  public const CHANGE_STATUS_ERROR_LIMIT_NOT_SPECIFIED = 'LIMIT_NOT_SPECIFIED';
  /**
   * The LIMIT specified by change_status request should be less than or equal
   * to 10K.
   */
  public const CHANGE_STATUS_ERROR_INVALID_LIMIT_CLAUSE = 'INVALID_LIMIT_CLAUSE';
  /**
   * Enum unspecified.
   */
  public const CLICK_VIEW_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CLICK_VIEW_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Missing filter on a single day.
   */
  public const CLICK_VIEW_ERROR_EXPECTED_FILTER_ON_A_SINGLE_DAY = 'EXPECTED_FILTER_ON_A_SINGLE_DAY';
  /**
   * The requested date is too old.
   */
  public const CLICK_VIEW_ERROR_DATE_TOO_OLD = 'DATE_TOO_OLD';
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
   * Enum unspecified.
   */
  public const CONTEXT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CONTEXT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The operation is not allowed for the given context.
   */
  public const CONTEXT_ERROR_OPERATION_NOT_PERMITTED_FOR_CONTEXT = 'OPERATION_NOT_PERMITTED_FOR_CONTEXT';
  /**
   * The operation is not allowed for removed resources.
   */
  public const CONTEXT_ERROR_OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE = 'OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE';
  /**
   * Enum unspecified.
   */
  public const CONVERSION_ACTION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CONVERSION_ACTION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The specified conversion action name already exists.
   */
  public const CONVERSION_ACTION_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * Another conversion action with the specified app id already exists.
   */
  public const CONVERSION_ACTION_ERROR_DUPLICATE_APP_ID = 'DUPLICATE_APP_ID';
  /**
   * Android first open action conflicts with Google play codeless download
   * action tracking the same app.
   */
  public const CONVERSION_ACTION_ERROR_TWO_CONVERSION_ACTIONS_BIDDING_ON_SAME_APP_DOWNLOAD = 'TWO_CONVERSION_ACTIONS_BIDDING_ON_SAME_APP_DOWNLOAD';
  /**
   * Android first open action conflicts with Google play codeless download
   * action tracking the same app.
   */
  public const CONVERSION_ACTION_ERROR_BIDDING_ON_SAME_APP_DOWNLOAD_AS_GLOBAL_ACTION = 'BIDDING_ON_SAME_APP_DOWNLOAD_AS_GLOBAL_ACTION';
  /**
   * The attribution model cannot be set to DATA_DRIVEN because a data-driven
   * model has never been generated.
   */
  public const CONVERSION_ACTION_ERROR_DATA_DRIVEN_MODEL_WAS_NEVER_GENERATED = 'DATA_DRIVEN_MODEL_WAS_NEVER_GENERATED';
  /**
   * The attribution model cannot be set to DATA_DRIVEN because the data-driven
   * model is expired.
   */
  public const CONVERSION_ACTION_ERROR_DATA_DRIVEN_MODEL_EXPIRED = 'DATA_DRIVEN_MODEL_EXPIRED';
  /**
   * The attribution model cannot be set to DATA_DRIVEN because the data-driven
   * model is stale.
   */
  public const CONVERSION_ACTION_ERROR_DATA_DRIVEN_MODEL_STALE = 'DATA_DRIVEN_MODEL_STALE';
  /**
   * The attribution model cannot be set to DATA_DRIVEN because the data-driven
   * model is unavailable or the conversion action was newly added.
   */
  public const CONVERSION_ACTION_ERROR_DATA_DRIVEN_MODEL_UNKNOWN = 'DATA_DRIVEN_MODEL_UNKNOWN';
  /**
   * Creation of this conversion action type isn't supported by Google Ads API.
   */
  public const CONVERSION_ACTION_ERROR_CREATION_NOT_SUPPORTED = 'CREATION_NOT_SUPPORTED';
  /**
   * Update of this conversion action isn't supported by Google Ads API.
   */
  public const CONVERSION_ACTION_ERROR_UPDATE_NOT_SUPPORTED = 'UPDATE_NOT_SUPPORTED';
  /**
   * Rule-based attribution models are deprecated and not allowed to be set by
   * conversion action.
   */
  public const CONVERSION_ACTION_ERROR_CANNOT_SET_RULE_BASED_ATTRIBUTION_MODELS = 'CANNOT_SET_RULE_BASED_ATTRIBUTION_MODELS';
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
  public const CONVERSION_CUSTOM_VARIABLE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CONVERSION_CUSTOM_VARIABLE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * A conversion custom variable with the specified name already exists.
   */
  public const CONVERSION_CUSTOM_VARIABLE_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * A conversion custom variable with the specified tag already exists.
   */
  public const CONVERSION_CUSTOM_VARIABLE_ERROR_DUPLICATE_TAG = 'DUPLICATE_TAG';
  /**
   * A conversion custom variable with the specified tag is reserved for other
   * uses.
   */
  public const CONVERSION_CUSTOM_VARIABLE_ERROR_RESERVED_TAG = 'RESERVED_TAG';
  /**
   * Enum unspecified.
   */
  public const CONVERSION_GOAL_CAMPAIGN_CONFIG_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CONVERSION_GOAL_CAMPAIGN_CONFIG_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Campaign is managed by Search Ads 360 but uses Unified Goal.
   */
  public const CONVERSION_GOAL_CAMPAIGN_CONFIG_ERROR_CANNOT_USE_CAMPAIGN_GOAL_FOR_SEARCH_ADS_360_MANAGED_CAMPAIGN = 'CANNOT_USE_CAMPAIGN_GOAL_FOR_SEARCH_ADS_360_MANAGED_CAMPAIGN';
  /**
   * The campaign is using a custom goal that does not belong to its Google Ads
   * conversion customer (conversion tracking customer).
   */
  public const CONVERSION_GOAL_CAMPAIGN_CONFIG_ERROR_CUSTOM_GOAL_DOES_NOT_BELONG_TO_GOOGLE_ADS_CONVERSION_CUSTOMER = 'CUSTOM_GOAL_DOES_NOT_BELONG_TO_GOOGLE_ADS_CONVERSION_CUSTOMER';
  /**
   * The campaign is not allowed to use unified goals.
   */
  public const CONVERSION_GOAL_CAMPAIGN_CONFIG_ERROR_CAMPAIGN_CANNOT_USE_UNIFIED_GOALS = 'CAMPAIGN_CANNOT_USE_UNIFIED_GOALS';
  /**
   * The campaign is using campaign override goals but has no goals configured.
   */
  public const CONVERSION_GOAL_CAMPAIGN_CONFIG_ERROR_EMPTY_CONVERSION_GOALS = 'EMPTY_CONVERSION_GOALS';
  /**
   * STORE_SALE and STORE_VISIT conversion types cannot be both included in
   * campaign level goal.
   */
  public const CONVERSION_GOAL_CAMPAIGN_CONFIG_ERROR_STORE_SALE_STORE_VISIT_CANNOT_BE_BOTH_INCLUDED = 'STORE_SALE_STORE_VISIT_CANNOT_BE_BOTH_INCLUDED';
  /**
   * Performance Max campaign is not allowed to use custom goal with store sales
   * conversion type.
   */
  public const CONVERSION_GOAL_CAMPAIGN_CONFIG_ERROR_PERFORMANCE_MAX_CAMPAIGN_CANNOT_USE_CUSTOM_GOAL_WITH_STORE_SALES = 'PERFORMANCE_MAX_CAMPAIGN_CANNOT_USE_CUSTOM_GOAL_WITH_STORE_SALES';
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
  public const CONVERSION_VALUE_RULE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CONVERSION_VALUE_RULE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The value rule's geo location condition contains invalid geo target
   * constant(s), for example, there's no matching geo target.
   */
  public const CONVERSION_VALUE_RULE_ERROR_INVALID_GEO_TARGET_CONSTANT = 'INVALID_GEO_TARGET_CONSTANT';
  /**
   * The value rule's geo location condition contains conflicting included and
   * excluded geo targets. Specifically, some of the excluded geo target(s) are
   * the same as or contain some of the included geo target(s). For example, the
   * geo location condition includes California but excludes U.S.
   */
  public const CONVERSION_VALUE_RULE_ERROR_CONFLICTING_INCLUDED_AND_EXCLUDED_GEO_TARGET = 'CONFLICTING_INCLUDED_AND_EXCLUDED_GEO_TARGET';
  /**
   * User specified conflicting conditions for two value rules in the same value
   * rule set.
   */
  public const CONVERSION_VALUE_RULE_ERROR_CONFLICTING_CONDITIONS = 'CONFLICTING_CONDITIONS';
  /**
   * The value rule cannot be removed because it's still included in some value
   * rule set.
   */
  public const CONVERSION_VALUE_RULE_ERROR_CANNOT_REMOVE_IF_INCLUDED_IN_VALUE_RULE_SET = 'CANNOT_REMOVE_IF_INCLUDED_IN_VALUE_RULE_SET';
  /**
   * The value rule contains a condition that's not allowed by the value rule
   * set including this value rule.
   */
  public const CONVERSION_VALUE_RULE_ERROR_CONDITION_NOT_ALLOWED = 'CONDITION_NOT_ALLOWED';
  /**
   * The value rule contains a field that should be unset.
   */
  public const CONVERSION_VALUE_RULE_ERROR_FIELD_MUST_BE_UNSET = 'FIELD_MUST_BE_UNSET';
  /**
   * Pausing the value rule requires pausing the value rule set because the
   * value rule is (one of) the last enabled in the value rule set.
   */
  public const CONVERSION_VALUE_RULE_ERROR_CANNOT_PAUSE_UNLESS_VALUE_RULE_SET_IS_PAUSED = 'CANNOT_PAUSE_UNLESS_VALUE_RULE_SET_IS_PAUSED';
  /**
   * The value rule's geo location condition contains untargetable geo target
   * constant(s).
   */
  public const CONVERSION_VALUE_RULE_ERROR_UNTARGETABLE_GEO_TARGET = 'UNTARGETABLE_GEO_TARGET';
  /**
   * The value rule's audience condition contains invalid user list(s). In
   * another word, there's no matching user list.
   */
  public const CONVERSION_VALUE_RULE_ERROR_INVALID_AUDIENCE_USER_LIST = 'INVALID_AUDIENCE_USER_LIST';
  /**
   * The value rule's audience condition contains inaccessible user list(s).
   */
  public const CONVERSION_VALUE_RULE_ERROR_INACCESSIBLE_USER_LIST = 'INACCESSIBLE_USER_LIST';
  /**
   * The value rule's audience condition contains invalid user_interest(s). This
   * might be because there is no matching user interest, or the user interest
   * is not visible.
   */
  public const CONVERSION_VALUE_RULE_ERROR_INVALID_AUDIENCE_USER_INTEREST = 'INVALID_AUDIENCE_USER_INTEREST';
  /**
   * When a value rule is created, it shouldn't have REMOVED status.
   */
  public const CONVERSION_VALUE_RULE_ERROR_CANNOT_ADD_RULE_WITH_STATUS_REMOVED = 'CANNOT_ADD_RULE_WITH_STATUS_REMOVED';
  /**
   * The value rule's itinerary condition contains invalid travel start day, it
   * contains no day of week.
   */
  public const CONVERSION_VALUE_RULE_ERROR_NO_DAY_OF_WEEK_SELECTED = 'NO_DAY_OF_WEEK_SELECTED';
  /**
   * Enum unspecified.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Two value rules in this value rule set contain conflicting conditions.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_CONFLICTING_VALUE_RULE_CONDITIONS = 'CONFLICTING_VALUE_RULE_CONDITIONS';
  /**
   * This value rule set includes a value rule that cannot be found, has been
   * permanently removed or belongs to a different customer.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_INVALID_VALUE_RULE = 'INVALID_VALUE_RULE';
  /**
   * An error that's thrown when a mutate operation is trying to replace/remove
   * some existing elements in the dimensions field. In other words, ADD op is
   * always fine and UPDATE op is fine if it's only appending new elements into
   * dimensions list.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_DIMENSIONS_UPDATE_ONLY_ALLOW_APPEND = 'DIMENSIONS_UPDATE_ONLY_ALLOW_APPEND';
  /**
   * An error that's thrown when a mutate is adding new value rule(s) into a
   * value rule set and the added value rule(s) include conditions that are not
   * specified in the dimensions of the value rule set.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_CONDITION_TYPE_NOT_ALLOWED = 'CONDITION_TYPE_NOT_ALLOWED';
  /**
   * The dimensions field contains duplicate elements.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_DUPLICATE_DIMENSIONS = 'DUPLICATE_DIMENSIONS';
  /**
   * This value rule set is attached to an invalid campaign id. Either a
   * campaign with this campaign id doesn't exist or it belongs to a different
   * customer.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_INVALID_CAMPAIGN_ID = 'INVALID_CAMPAIGN_ID';
  /**
   * When a mutate request tries to pause a value rule set, the enabled value
   * rules in this set must be paused in the same command, or this error will be
   * thrown.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_CANNOT_PAUSE_UNLESS_ALL_VALUE_RULES_ARE_PAUSED = 'CANNOT_PAUSE_UNLESS_ALL_VALUE_RULES_ARE_PAUSED';
  /**
   * When a mutate request tries to pause all the value rules in a value rule
   * set, the value rule set must be paused, or this error will be thrown.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_SHOULD_PAUSE_WHEN_ALL_VALUE_RULES_ARE_PAUSED = 'SHOULD_PAUSE_WHEN_ALL_VALUE_RULES_ARE_PAUSED';
  /**
   * This value rule set is attached to a campaign that does not support value
   * rules. Currently, campaign level value rule sets can only be created on
   * Search, or Display campaigns.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_VALUE_RULES_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE = 'VALUE_RULES_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE';
  /**
   * To add a value rule set that applies on Store Visits/Store Sales conversion
   * action categories, the customer must have valid Store Visits/ Store Sales
   * conversion actions.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_INELIGIBLE_CONVERSION_ACTION_CATEGORIES = 'INELIGIBLE_CONVERSION_ACTION_CATEGORIES';
  /**
   * If NO_CONDITION is used as a dimension of a value rule set, it must be the
   * only dimension.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_DIMENSION_NO_CONDITION_USED_WITH_OTHER_DIMENSIONS = 'DIMENSION_NO_CONDITION_USED_WITH_OTHER_DIMENSIONS';
  /**
   * Dimension NO_CONDITION can only be used by Store Visits/Store Sales value
   * rule set.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_DIMENSION_NO_CONDITION_NOT_ALLOWED = 'DIMENSION_NO_CONDITION_NOT_ALLOWED';
  /**
   * Value rule sets defined on the specified conversion action categories are
   * not supported. The list of conversion action categories must be an empty
   * list, only STORE_VISIT, or only STORE_SALE.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_UNSUPPORTED_CONVERSION_ACTION_CATEGORIES = 'UNSUPPORTED_CONVERSION_ACTION_CATEGORIES';
  /**
   * Dimension ITINERARY can only be used on campaigns with an advertising
   * channel type of PERFORMANCE_MAX or HOTEL.
   */
  public const CONVERSION_VALUE_RULE_SET_ERROR_DIMENSION_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE = 'DIMENSION_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE';
  /**
   * Enum unspecified.
   */
  public const COUNTRY_CODE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const COUNTRY_CODE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The country code is invalid.
   */
  public const COUNTRY_CODE_ERROR_INVALID_COUNTRY_CODE = 'INVALID_COUNTRY_CODE';
  /**
   * Enum unspecified.
   */
  public const CRITERION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CRITERION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Concrete type of criterion is required for CREATE and UPDATE operations.
   */
  public const CRITERION_ERROR_CONCRETE_TYPE_REQUIRED = 'CONCRETE_TYPE_REQUIRED';
  /**
   * The category requested for exclusion is invalid.
   */
  public const CRITERION_ERROR_INVALID_EXCLUDED_CATEGORY = 'INVALID_EXCLUDED_CATEGORY';
  /**
   * Invalid keyword criteria text.
   */
  public const CRITERION_ERROR_INVALID_KEYWORD_TEXT = 'INVALID_KEYWORD_TEXT';
  /**
   * Keyword text should be less than 80 chars.
   */
  public const CRITERION_ERROR_KEYWORD_TEXT_TOO_LONG = 'KEYWORD_TEXT_TOO_LONG';
  /**
   * Keyword text has too many words.
   */
  public const CRITERION_ERROR_KEYWORD_HAS_TOO_MANY_WORDS = 'KEYWORD_HAS_TOO_MANY_WORDS';
  /**
   * Keyword text has invalid characters or symbols.
   */
  public const CRITERION_ERROR_KEYWORD_HAS_INVALID_CHARS = 'KEYWORD_HAS_INVALID_CHARS';
  /**
   * Invalid placement URL.
   */
  public const CRITERION_ERROR_INVALID_PLACEMENT_URL = 'INVALID_PLACEMENT_URL';
  /**
   * Invalid user list criterion.
   */
  public const CRITERION_ERROR_INVALID_USER_LIST = 'INVALID_USER_LIST';
  /**
   * Invalid user interest criterion.
   */
  public const CRITERION_ERROR_INVALID_USER_INTEREST = 'INVALID_USER_INTEREST';
  /**
   * Placement URL has wrong format.
   */
  public const CRITERION_ERROR_INVALID_FORMAT_FOR_PLACEMENT_URL = 'INVALID_FORMAT_FOR_PLACEMENT_URL';
  /**
   * Placement URL is too long.
   */
  public const CRITERION_ERROR_PLACEMENT_URL_IS_TOO_LONG = 'PLACEMENT_URL_IS_TOO_LONG';
  /**
   * Indicates the URL contains an illegal character.
   */
  public const CRITERION_ERROR_PLACEMENT_URL_HAS_ILLEGAL_CHAR = 'PLACEMENT_URL_HAS_ILLEGAL_CHAR';
  /**
   * Indicates the URL contains multiple comma separated URLs.
   */
  public const CRITERION_ERROR_PLACEMENT_URL_HAS_MULTIPLE_SITES_IN_LINE = 'PLACEMENT_URL_HAS_MULTIPLE_SITES_IN_LINE';
  /**
   * Indicates the domain is blocked.
   */
  public const CRITERION_ERROR_PLACEMENT_IS_NOT_AVAILABLE_FOR_TARGETING_OR_EXCLUSION = 'PLACEMENT_IS_NOT_AVAILABLE_FOR_TARGETING_OR_EXCLUSION';
  /**
   * Invalid topic path.
   */
  public const CRITERION_ERROR_INVALID_TOPIC_PATH = 'INVALID_TOPIC_PATH';
  /**
   * The YouTube Channel Id is invalid.
   */
  public const CRITERION_ERROR_INVALID_YOUTUBE_CHANNEL_ID = 'INVALID_YOUTUBE_CHANNEL_ID';
  /**
   * The YouTube Video Id is invalid.
   */
  public const CRITERION_ERROR_INVALID_YOUTUBE_VIDEO_ID = 'INVALID_YOUTUBE_VIDEO_ID';
  /**
   * Indicates the placement is a YouTube vertical channel, which is no longer
   * supported.
   */
  public const CRITERION_ERROR_YOUTUBE_VERTICAL_CHANNEL_DEPRECATED = 'YOUTUBE_VERTICAL_CHANNEL_DEPRECATED';
  /**
   * Indicates the placement is a YouTube demographic channel, which is no
   * longer supported.
   */
  public const CRITERION_ERROR_YOUTUBE_DEMOGRAPHIC_CHANNEL_DEPRECATED = 'YOUTUBE_DEMOGRAPHIC_CHANNEL_DEPRECATED';
  /**
   * YouTube urls are not supported in Placement criterion. Use YouTubeChannel
   * and YouTubeVideo criterion instead.
   */
  public const CRITERION_ERROR_YOUTUBE_URL_UNSUPPORTED = 'YOUTUBE_URL_UNSUPPORTED';
  /**
   * Criteria type can not be excluded by the customer, like AOL account type
   * cannot target site type criteria.
   */
  public const CRITERION_ERROR_CANNOT_EXCLUDE_CRITERIA_TYPE = 'CANNOT_EXCLUDE_CRITERIA_TYPE';
  /**
   * Criteria type can not be targeted.
   */
  public const CRITERION_ERROR_CANNOT_ADD_CRITERIA_TYPE = 'CANNOT_ADD_CRITERIA_TYPE';
  /**
   * Not allowed to exclude similar user list.
   */
  public const CRITERION_ERROR_CANNOT_EXCLUDE_SIMILAR_USER_LIST = 'CANNOT_EXCLUDE_SIMILAR_USER_LIST';
  /**
   * Not allowed to target a closed user list.
   */
  public const CRITERION_ERROR_CANNOT_ADD_CLOSED_USER_LIST = 'CANNOT_ADD_CLOSED_USER_LIST';
  /**
   * Not allowed to add display only UserLists to search only campaigns.
   */
  public const CRITERION_ERROR_CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_ONLY_CAMPAIGNS = 'CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_ONLY_CAMPAIGNS';
  /**
   * Not allowed to add display only UserLists to search plus campaigns.
   */
  public const CRITERION_ERROR_CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_CAMPAIGNS = 'CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_CAMPAIGNS';
  /**
   * Not allowed to add display only UserLists to shopping campaigns.
   */
  public const CRITERION_ERROR_CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SHOPPING_CAMPAIGNS = 'CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SHOPPING_CAMPAIGNS';
  /**
   * Not allowed to add User interests to search only campaigns.
   */
  public const CRITERION_ERROR_CANNOT_ADD_USER_INTERESTS_TO_SEARCH_CAMPAIGNS = 'CANNOT_ADD_USER_INTERESTS_TO_SEARCH_CAMPAIGNS';
  /**
   * Not allowed to set bids for this criterion type in search campaigns
   */
  public const CRITERION_ERROR_CANNOT_SET_BIDS_ON_CRITERION_TYPE_IN_SEARCH_CAMPAIGNS = 'CANNOT_SET_BIDS_ON_CRITERION_TYPE_IN_SEARCH_CAMPAIGNS';
  /**
   * Final URLs, URL Templates and CustomParameters cannot be set for the
   * criterion types of Gender, AgeRange, UserList, Placement, MobileApp, and
   * MobileAppCategory in search campaigns and shopping campaigns.
   */
  public const CRITERION_ERROR_CANNOT_ADD_URLS_TO_CRITERION_TYPE_FOR_CAMPAIGN_TYPE = 'CANNOT_ADD_URLS_TO_CRITERION_TYPE_FOR_CAMPAIGN_TYPE';
  /**
   * Invalid combined audience criterion.
   */
  public const CRITERION_ERROR_INVALID_COMBINED_AUDIENCE = 'INVALID_COMBINED_AUDIENCE';
  /**
   * Invalid custom affinity criterion.
   */
  public const CRITERION_ERROR_INVALID_CUSTOM_AFFINITY = 'INVALID_CUSTOM_AFFINITY';
  /**
   * Invalid custom intent criterion.
   */
  public const CRITERION_ERROR_INVALID_CUSTOM_INTENT = 'INVALID_CUSTOM_INTENT';
  /**
   * Invalid custom audience criterion.
   */
  public const CRITERION_ERROR_INVALID_CUSTOM_AUDIENCE = 'INVALID_CUSTOM_AUDIENCE';
  /**
   * IP address is not valid.
   */
  public const CRITERION_ERROR_INVALID_IP_ADDRESS = 'INVALID_IP_ADDRESS';
  /**
   * IP format is not valid.
   */
  public const CRITERION_ERROR_INVALID_IP_FORMAT = 'INVALID_IP_FORMAT';
  /**
   * Mobile application is not valid.
   */
  public const CRITERION_ERROR_INVALID_MOBILE_APP = 'INVALID_MOBILE_APP';
  /**
   * Mobile application category is not valid.
   */
  public const CRITERION_ERROR_INVALID_MOBILE_APP_CATEGORY = 'INVALID_MOBILE_APP_CATEGORY';
  /**
   * The CriterionId does not exist or is of the incorrect type.
   */
  public const CRITERION_ERROR_INVALID_CRITERION_ID = 'INVALID_CRITERION_ID';
  /**
   * The Criterion is not allowed to be targeted.
   */
  public const CRITERION_ERROR_CANNOT_TARGET_CRITERION = 'CANNOT_TARGET_CRITERION';
  /**
   * The criterion is not allowed to be targeted as it is deprecated.
   */
  public const CRITERION_ERROR_CANNOT_TARGET_OBSOLETE_CRITERION = 'CANNOT_TARGET_OBSOLETE_CRITERION';
  /**
   * The CriterionId is not valid for the type.
   */
  public const CRITERION_ERROR_CRITERION_ID_AND_TYPE_MISMATCH = 'CRITERION_ID_AND_TYPE_MISMATCH';
  /**
   * Distance for the radius for the proximity criterion is invalid.
   */
  public const CRITERION_ERROR_INVALID_PROXIMITY_RADIUS = 'INVALID_PROXIMITY_RADIUS';
  /**
   * Units for the distance for the radius for the proximity criterion is
   * invalid.
   */
  public const CRITERION_ERROR_INVALID_PROXIMITY_RADIUS_UNITS = 'INVALID_PROXIMITY_RADIUS_UNITS';
  /**
   * Street address in the address is not valid.
   */
  public const CRITERION_ERROR_INVALID_STREETADDRESS_LENGTH = 'INVALID_STREETADDRESS_LENGTH';
  /**
   * City name in the address is not valid.
   */
  public const CRITERION_ERROR_INVALID_CITYNAME_LENGTH = 'INVALID_CITYNAME_LENGTH';
  /**
   * Region code in the address is not valid.
   */
  public const CRITERION_ERROR_INVALID_REGIONCODE_LENGTH = 'INVALID_REGIONCODE_LENGTH';
  /**
   * Region name in the address is not valid.
   */
  public const CRITERION_ERROR_INVALID_REGIONNAME_LENGTH = 'INVALID_REGIONNAME_LENGTH';
  /**
   * Postal code in the address is not valid.
   */
  public const CRITERION_ERROR_INVALID_POSTALCODE_LENGTH = 'INVALID_POSTALCODE_LENGTH';
  /**
   * Country code in the address is not valid.
   */
  public const CRITERION_ERROR_INVALID_COUNTRY_CODE = 'INVALID_COUNTRY_CODE';
  /**
   * Latitude for the GeoPoint is not valid.
   */
  public const CRITERION_ERROR_INVALID_LATITUDE = 'INVALID_LATITUDE';
  /**
   * Longitude for the GeoPoint is not valid.
   */
  public const CRITERION_ERROR_INVALID_LONGITUDE = 'INVALID_LONGITUDE';
  /**
   * The Proximity input is not valid. Both address and geoPoint cannot be null.
   */
  public const CRITERION_ERROR_PROXIMITY_GEOPOINT_AND_ADDRESS_BOTH_CANNOT_BE_NULL = 'PROXIMITY_GEOPOINT_AND_ADDRESS_BOTH_CANNOT_BE_NULL';
  /**
   * The Proximity address cannot be geocoded to a valid lat/long.
   */
  public const CRITERION_ERROR_INVALID_PROXIMITY_ADDRESS = 'INVALID_PROXIMITY_ADDRESS';
  /**
   * User domain name is not valid.
   */
  public const CRITERION_ERROR_INVALID_USER_DOMAIN_NAME = 'INVALID_USER_DOMAIN_NAME';
  /**
   * Length of serialized criterion parameter exceeded size limit.
   */
  public const CRITERION_ERROR_CRITERION_PARAMETER_TOO_LONG = 'CRITERION_PARAMETER_TOO_LONG';
  /**
   * Time interval in the AdSchedule overlaps with another AdSchedule.
   */
  public const CRITERION_ERROR_AD_SCHEDULE_TIME_INTERVALS_OVERLAP = 'AD_SCHEDULE_TIME_INTERVALS_OVERLAP';
  /**
   * AdSchedule time interval cannot span multiple days.
   */
  public const CRITERION_ERROR_AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS = 'AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS';
  /**
   * AdSchedule time interval specified is invalid, endTime cannot be earlier
   * than startTime.
   */
  public const CRITERION_ERROR_AD_SCHEDULE_INVALID_TIME_INTERVAL = 'AD_SCHEDULE_INVALID_TIME_INTERVAL';
  /**
   * The number of AdSchedule entries in a day exceeds the limit.
   */
  public const CRITERION_ERROR_AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT = 'AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT';
  /**
   * CriteriaId does not match the interval of the AdSchedule specified.
   */
  public const CRITERION_ERROR_AD_SCHEDULE_CRITERION_ID_MISMATCHING_FIELDS = 'AD_SCHEDULE_CRITERION_ID_MISMATCHING_FIELDS';
  /**
   * Cannot set bid modifier for this criterion type.
   */
  public const CRITERION_ERROR_CANNOT_BID_MODIFY_CRITERION_TYPE = 'CANNOT_BID_MODIFY_CRITERION_TYPE';
  /**
   * Cannot bid modify criterion, since it is opted out of the campaign.
   */
  public const CRITERION_ERROR_CANNOT_BID_MODIFY_CRITERION_CAMPAIGN_OPTED_OUT = 'CANNOT_BID_MODIFY_CRITERION_CAMPAIGN_OPTED_OUT';
  /**
   * Cannot set bid modifier for a negative criterion.
   */
  public const CRITERION_ERROR_CANNOT_BID_MODIFY_NEGATIVE_CRITERION = 'CANNOT_BID_MODIFY_NEGATIVE_CRITERION';
  /**
   * Bid Modifier already exists. Use SET operation to update.
   */
  public const CRITERION_ERROR_BID_MODIFIER_ALREADY_EXISTS = 'BID_MODIFIER_ALREADY_EXISTS';
  /**
   * Feed Id is not allowed in these Location Groups.
   */
  public const CRITERION_ERROR_FEED_ID_NOT_ALLOWED = 'FEED_ID_NOT_ALLOWED';
  /**
   * The account may not use the requested criteria type. For example, some
   * accounts are restricted to keywords only.
   */
  public const CRITERION_ERROR_ACCOUNT_INELIGIBLE_FOR_CRITERIA_TYPE = 'ACCOUNT_INELIGIBLE_FOR_CRITERIA_TYPE';
  /**
   * The requested criteria type cannot be used with campaign or ad group
   * bidding strategy.
   */
  public const CRITERION_ERROR_CRITERIA_TYPE_INVALID_FOR_BIDDING_STRATEGY = 'CRITERIA_TYPE_INVALID_FOR_BIDDING_STRATEGY';
  /**
   * The Criterion is not allowed to be excluded.
   */
  public const CRITERION_ERROR_CANNOT_EXCLUDE_CRITERION = 'CANNOT_EXCLUDE_CRITERION';
  /**
   * The criterion is not allowed to be removed. For example, we cannot remove
   * any of the device criterion.
   */
  public const CRITERION_ERROR_CANNOT_REMOVE_CRITERION = 'CANNOT_REMOVE_CRITERION';
  /**
   * Bidding categories do not form a valid path in the Shopping bidding
   * category taxonomy.
   */
  public const CRITERION_ERROR_INVALID_PRODUCT_BIDDING_CATEGORY = 'INVALID_PRODUCT_BIDDING_CATEGORY';
  /**
   * ShoppingSetting must be added to the campaign before ProductScope criteria
   * can be added.
   */
  public const CRITERION_ERROR_MISSING_SHOPPING_SETTING = 'MISSING_SHOPPING_SETTING';
  /**
   * Matching function is invalid.
   */
  public const CRITERION_ERROR_INVALID_MATCHING_FUNCTION = 'INVALID_MATCHING_FUNCTION';
  /**
   * Filter parameters not allowed for location groups targeting.
   */
  public const CRITERION_ERROR_LOCATION_FILTER_NOT_ALLOWED = 'LOCATION_FILTER_NOT_ALLOWED';
  /**
   * Feed not found, or the feed is not an enabled location feed.
   */
  public const CRITERION_ERROR_INVALID_FEED_FOR_LOCATION_FILTER = 'INVALID_FEED_FOR_LOCATION_FILTER';
  /**
   * Given location filter parameter is invalid for location groups targeting.
   */
  public const CRITERION_ERROR_LOCATION_FILTER_INVALID = 'LOCATION_FILTER_INVALID';
  /**
   * Cannot set geo target constants and feed item sets at the same time.
   */
  public const CRITERION_ERROR_CANNOT_SET_GEO_TARGET_CONSTANTS_WITH_FEED_ITEM_SETS = 'CANNOT_SET_GEO_TARGET_CONSTANTS_WITH_FEED_ITEM_SETS';
  /**
   * Cannot set both assetset and feed at the same time.
   */
  public const CRITERION_ERROR_CANNOT_SET_BOTH_ASSET_SET_AND_FEED = 'CANNOT_SET_BOTH_ASSET_SET_AND_FEED';
  /**
   * Cannot set feed or feed item sets for Customer.
   */
  public const CRITERION_ERROR_CANNOT_SET_FEED_OR_FEED_ITEM_SETS_FOR_CUSTOMER = 'CANNOT_SET_FEED_OR_FEED_ITEM_SETS_FOR_CUSTOMER';
  /**
   * Cannot set AssetSet criteria for customer.
   */
  public const CRITERION_ERROR_CANNOT_SET_ASSET_SET_FIELD_FOR_CUSTOMER = 'CANNOT_SET_ASSET_SET_FIELD_FOR_CUSTOMER';
  /**
   * Cannot set geo target constants and asset sets at the same time.
   */
  public const CRITERION_ERROR_CANNOT_SET_GEO_TARGET_CONSTANTS_WITH_ASSET_SETS = 'CANNOT_SET_GEO_TARGET_CONSTANTS_WITH_ASSET_SETS';
  /**
   * Cannot set asset sets and feed item sets at the same time.
   */
  public const CRITERION_ERROR_CANNOT_SET_ASSET_SETS_WITH_FEED_ITEM_SETS = 'CANNOT_SET_ASSET_SETS_WITH_FEED_ITEM_SETS';
  /**
   * The location group asset set id is invalid
   */
  public const CRITERION_ERROR_INVALID_LOCATION_GROUP_ASSET_SET = 'INVALID_LOCATION_GROUP_ASSET_SET';
  /**
   * The location group radius is in the range but not at the valid increment.
   */
  public const CRITERION_ERROR_INVALID_LOCATION_GROUP_RADIUS = 'INVALID_LOCATION_GROUP_RADIUS';
  /**
   * The location group radius unit is invalid.
   */
  public const CRITERION_ERROR_INVALID_LOCATION_GROUP_RADIUS_UNIT = 'INVALID_LOCATION_GROUP_RADIUS_UNIT';
  /**
   * Criteria type cannot be associated with a campaign and its ad group(s)
   * simultaneously.
   */
  public const CRITERION_ERROR_CANNOT_ATTACH_CRITERIA_AT_CAMPAIGN_AND_ADGROUP = 'CANNOT_ATTACH_CRITERIA_AT_CAMPAIGN_AND_ADGROUP';
  /**
   * Range represented by hotel length of stay's min nights and max nights
   * overlaps with an existing criterion.
   */
  public const CRITERION_ERROR_HOTEL_LENGTH_OF_STAY_OVERLAPS_WITH_EXISTING_CRITERION = 'HOTEL_LENGTH_OF_STAY_OVERLAPS_WITH_EXISTING_CRITERION';
  /**
   * Range represented by hotel advance booking window's min days and max days
   * overlaps with an existing criterion.
   */
  public const CRITERION_ERROR_HOTEL_ADVANCE_BOOKING_WINDOW_OVERLAPS_WITH_EXISTING_CRITERION = 'HOTEL_ADVANCE_BOOKING_WINDOW_OVERLAPS_WITH_EXISTING_CRITERION';
  /**
   * The field is not allowed to be set when the negative field is set to true,
   * for example, we don't allow bids in negative ad group or campaign criteria.
   */
  public const CRITERION_ERROR_FIELD_INCOMPATIBLE_WITH_NEGATIVE_TARGETING = 'FIELD_INCOMPATIBLE_WITH_NEGATIVE_TARGETING';
  /**
   * The combination of operand and operator in webpage condition is invalid.
   */
  public const CRITERION_ERROR_INVALID_WEBPAGE_CONDITION = 'INVALID_WEBPAGE_CONDITION';
  /**
   * The URL of webpage condition is invalid.
   */
  public const CRITERION_ERROR_INVALID_WEBPAGE_CONDITION_URL = 'INVALID_WEBPAGE_CONDITION_URL';
  /**
   * The URL of webpage condition cannot be empty or contain white space.
   */
  public const CRITERION_ERROR_WEBPAGE_CONDITION_URL_CANNOT_BE_EMPTY = 'WEBPAGE_CONDITION_URL_CANNOT_BE_EMPTY';
  /**
   * The URL of webpage condition contains an unsupported protocol.
   */
  public const CRITERION_ERROR_WEBPAGE_CONDITION_URL_UNSUPPORTED_PROTOCOL = 'WEBPAGE_CONDITION_URL_UNSUPPORTED_PROTOCOL';
  /**
   * The URL of webpage condition cannot be an IP address.
   */
  public const CRITERION_ERROR_WEBPAGE_CONDITION_URL_CANNOT_BE_IP_ADDRESS = 'WEBPAGE_CONDITION_URL_CANNOT_BE_IP_ADDRESS';
  /**
   * The domain of the URL is not consistent with the domain in campaign
   * setting.
   */
  public const CRITERION_ERROR_WEBPAGE_CONDITION_URL_DOMAIN_NOT_CONSISTENT_WITH_CAMPAIGN_SETTING = 'WEBPAGE_CONDITION_URL_DOMAIN_NOT_CONSISTENT_WITH_CAMPAIGN_SETTING';
  /**
   * The URL of webpage condition cannot be a public suffix itself.
   */
  public const CRITERION_ERROR_WEBPAGE_CONDITION_URL_CANNOT_BE_PUBLIC_SUFFIX = 'WEBPAGE_CONDITION_URL_CANNOT_BE_PUBLIC_SUFFIX';
  /**
   * The URL of webpage condition has an invalid public suffix.
   */
  public const CRITERION_ERROR_WEBPAGE_CONDITION_URL_INVALID_PUBLIC_SUFFIX = 'WEBPAGE_CONDITION_URL_INVALID_PUBLIC_SUFFIX';
  /**
   * Value track parameter is not supported in webpage condition URL.
   */
  public const CRITERION_ERROR_WEBPAGE_CONDITION_URL_VALUE_TRACK_VALUE_NOT_SUPPORTED = 'WEBPAGE_CONDITION_URL_VALUE_TRACK_VALUE_NOT_SUPPORTED';
  /**
   * Only one URL-EQUALS webpage condition is allowed in a webpage criterion and
   * it cannot be combined with other conditions.
   */
  public const CRITERION_ERROR_WEBPAGE_CRITERION_URL_EQUALS_CAN_HAVE_ONLY_ONE_CONDITION = 'WEBPAGE_CRITERION_URL_EQUALS_CAN_HAVE_ONLY_ONE_CONDITION';
  /**
   * A webpage criterion cannot be added to a non-DSA ad group.
   */
  public const CRITERION_ERROR_WEBPAGE_CRITERION_NOT_SUPPORTED_ON_NON_DSA_AD_GROUP = 'WEBPAGE_CRITERION_NOT_SUPPORTED_ON_NON_DSA_AD_GROUP';
  /**
   * Cannot add positive user list criteria in Smart Display campaigns.
   */
  public const CRITERION_ERROR_CANNOT_TARGET_USER_LIST_FOR_SMART_DISPLAY_CAMPAIGNS = 'CANNOT_TARGET_USER_LIST_FOR_SMART_DISPLAY_CAMPAIGNS';
  /**
   * Cannot add positive placement criterion types in search campaigns.
   */
  public const CRITERION_ERROR_CANNOT_TARGET_PLACEMENTS_FOR_SEARCH_CAMPAIGNS = 'CANNOT_TARGET_PLACEMENTS_FOR_SEARCH_CAMPAIGNS';
  /**
   * Listing scope contains too many dimension types.
   */
  public const CRITERION_ERROR_LISTING_SCOPE_TOO_MANY_DIMENSION_TYPES = 'LISTING_SCOPE_TOO_MANY_DIMENSION_TYPES';
  /**
   * Listing scope has too many IN operators.
   */
  public const CRITERION_ERROR_LISTING_SCOPE_TOO_MANY_IN_OPERATORS = 'LISTING_SCOPE_TOO_MANY_IN_OPERATORS';
  /**
   * Listing scope contains IN operator on an unsupported dimension type.
   */
  public const CRITERION_ERROR_LISTING_SCOPE_IN_OPERATOR_NOT_SUPPORTED = 'LISTING_SCOPE_IN_OPERATOR_NOT_SUPPORTED';
  /**
   * There are dimensions with duplicate dimension type.
   */
  public const CRITERION_ERROR_DUPLICATE_LISTING_DIMENSION_TYPE = 'DUPLICATE_LISTING_DIMENSION_TYPE';
  /**
   * There are dimensions with duplicate dimension value.
   */
  public const CRITERION_ERROR_DUPLICATE_LISTING_DIMENSION_VALUE = 'DUPLICATE_LISTING_DIMENSION_VALUE';
  /**
   * Listing group SUBDIVISION nodes cannot have bids.
   */
  public const CRITERION_ERROR_CANNOT_SET_BIDS_ON_LISTING_GROUP_SUBDIVISION = 'CANNOT_SET_BIDS_ON_LISTING_GROUP_SUBDIVISION';
  /**
   * Product group operation is invalid because another operation targeting the
   * same AdGroupId is failing.
   */
  public const CRITERION_ERROR_LISTING_GROUP_ERROR_IN_ANOTHER_OPERATION = 'LISTING_GROUP_ERROR_IN_ANOTHER_OPERATION';
  /**
   * Ad group is invalid due to the listing groups it contains.
   */
  public const CRITERION_ERROR_INVALID_LISTING_GROUP_HIERARCHY = 'INVALID_LISTING_GROUP_HIERARCHY';
  /**
   * Tree was invalid before the mutation.
   */
  public const CRITERION_ERROR_LISTING_GROUP_TREE_WAS_INVALID_BEFORE_MUTATION = 'LISTING_GROUP_TREE_WAS_INVALID_BEFORE_MUTATION';
  /**
   * Listing group unit cannot have children.
   */
  public const CRITERION_ERROR_LISTING_GROUP_UNIT_CANNOT_HAVE_CHILDREN = 'LISTING_GROUP_UNIT_CANNOT_HAVE_CHILDREN';
  /**
   * Subdivided listing groups must have an "others" case.
   */
  public const CRITERION_ERROR_LISTING_GROUP_SUBDIVISION_REQUIRES_OTHERS_CASE = 'LISTING_GROUP_SUBDIVISION_REQUIRES_OTHERS_CASE';
  /**
   * Dimension type of listing group must be the same as that of its siblings.
   */
  public const CRITERION_ERROR_LISTING_GROUP_REQUIRES_SAME_DIMENSION_TYPE_AS_SIBLINGS = 'LISTING_GROUP_REQUIRES_SAME_DIMENSION_TYPE_AS_SIBLINGS';
  /**
   * Listing group cannot be added to the ad group because it already exists.
   */
  public const CRITERION_ERROR_LISTING_GROUP_ALREADY_EXISTS = 'LISTING_GROUP_ALREADY_EXISTS';
  /**
   * Listing group referenced in the operation was not found in the ad group.
   */
  public const CRITERION_ERROR_LISTING_GROUP_DOES_NOT_EXIST = 'LISTING_GROUP_DOES_NOT_EXIST';
  /**
   * Recursive removal failed because listing group subdivision is being created
   * or modified in this request.
   */
  public const CRITERION_ERROR_LISTING_GROUP_CANNOT_BE_REMOVED = 'LISTING_GROUP_CANNOT_BE_REMOVED';
  /**
   * Listing group type is not allowed for specified ad group criterion type.
   */
  public const CRITERION_ERROR_INVALID_LISTING_GROUP_TYPE = 'INVALID_LISTING_GROUP_TYPE';
  /**
   * Listing group in an ADD operation specifies a non temporary criterion id.
   */
  public const CRITERION_ERROR_LISTING_GROUP_ADD_MAY_ONLY_USE_TEMP_ID = 'LISTING_GROUP_ADD_MAY_ONLY_USE_TEMP_ID';
  /**
   * The combined length of dimension values of the Listing scope criterion is
   * too long.
   */
  public const CRITERION_ERROR_LISTING_SCOPE_TOO_LONG = 'LISTING_SCOPE_TOO_LONG';
  /**
   * Listing scope contains too many dimensions.
   */
  public const CRITERION_ERROR_LISTING_SCOPE_TOO_MANY_DIMENSIONS = 'LISTING_SCOPE_TOO_MANY_DIMENSIONS';
  /**
   * The combined length of dimension values of the Listing group criterion is
   * too long.
   */
  public const CRITERION_ERROR_LISTING_GROUP_TOO_LONG = 'LISTING_GROUP_TOO_LONG';
  /**
   * Listing group tree is too deep.
   */
  public const CRITERION_ERROR_LISTING_GROUP_TREE_TOO_DEEP = 'LISTING_GROUP_TREE_TOO_DEEP';
  public const CRITERION_ERROR_INVALID_LISTING_DIMENSION = 'INVALID_LISTING_DIMENSION';
  /**
   * Listing dimension type is either invalid for campaigns of this type or
   * cannot be used in the current context. BIDDING_CATEGORY_Lx and
   * PRODUCT_TYPE_Lx dimensions must be used in ascending order of their levels:
   * L1, L2, L3, L4, L5... The levels must be specified sequentially and start
   * from L1. Furthermore, an "others" Listing group cannot be subdivided with a
   * dimension of the same type but of a higher level ("others"
   * BIDDING_CATEGORY_L3 can be subdivided with BRAND but not with
   * BIDDING_CATEGORY_L4).
   */
  public const CRITERION_ERROR_INVALID_LISTING_DIMENSION_TYPE = 'INVALID_LISTING_DIMENSION_TYPE';
  /**
   * Customer is not on allowlist for composite audience in display campaigns.
   */
  public const CRITERION_ERROR_ADVERTISER_NOT_ON_ALLOWLIST_FOR_COMBINED_AUDIENCE_ON_DISPLAY = 'ADVERTISER_NOT_ON_ALLOWLIST_FOR_COMBINED_AUDIENCE_ON_DISPLAY';
  /**
   * Cannot target on a removed combined audience.
   */
  public const CRITERION_ERROR_CANNOT_TARGET_REMOVED_COMBINED_AUDIENCE = 'CANNOT_TARGET_REMOVED_COMBINED_AUDIENCE';
  /**
   * Combined audience ID is invalid.
   */
  public const CRITERION_ERROR_INVALID_COMBINED_AUDIENCE_ID = 'INVALID_COMBINED_AUDIENCE_ID';
  /**
   * Can not target removed combined audience.
   */
  public const CRITERION_ERROR_CANNOT_TARGET_REMOVED_CUSTOM_AUDIENCE = 'CANNOT_TARGET_REMOVED_CUSTOM_AUDIENCE';
  /**
   * Range represented by hotel check-in date's start date and end date overlaps
   * with an existing criterion.
   */
  public const CRITERION_ERROR_HOTEL_CHECK_IN_DATE_RANGE_OVERLAPS_WITH_EXISTING_CRITERION = 'HOTEL_CHECK_IN_DATE_RANGE_OVERLAPS_WITH_EXISTING_CRITERION';
  /**
   * Start date is earlier than earliest allowed value of yesterday UTC.
   */
  public const CRITERION_ERROR_HOTEL_CHECK_IN_DATE_RANGE_START_DATE_TOO_EARLY = 'HOTEL_CHECK_IN_DATE_RANGE_START_DATE_TOO_EARLY';
  /**
   * End date later is than latest allowed day of 330 days in the future UTC.
   */
  public const CRITERION_ERROR_HOTEL_CHECK_IN_DATE_RANGE_END_DATE_TOO_LATE = 'HOTEL_CHECK_IN_DATE_RANGE_END_DATE_TOO_LATE';
  /**
   * Start date is after end date.
   */
  public const CRITERION_ERROR_HOTEL_CHECK_IN_DATE_RANGE_REVERSED = 'HOTEL_CHECK_IN_DATE_RANGE_REVERSED';
  /**
   * Broad match modifier (BMM) keywords can no longer be created. See
   * https://ads-developers.googleblog.com/2021/06/broad-match-modifier-
   * upcoming-changes.html.
   */
  public const CRITERION_ERROR_BROAD_MATCH_MODIFIER_KEYWORD_NOT_ALLOWED = 'BROAD_MATCH_MODIFIER_KEYWORD_NOT_ALLOWED';
  /**
   * Only one audience is allowed in an asset group.
   */
  public const CRITERION_ERROR_ONE_AUDIENCE_ALLOWED_PER_ASSET_GROUP = 'ONE_AUDIENCE_ALLOWED_PER_ASSET_GROUP';
  /**
   * Audience is not supported for the specified campaign type.
   */
  public const CRITERION_ERROR_AUDIENCE_NOT_ELIGIBLE_FOR_CAMPAIGN_TYPE = 'AUDIENCE_NOT_ELIGIBLE_FOR_CAMPAIGN_TYPE';
  /**
   * Audience is not allowed to attach when use_audience_grouped bit is set to
   * false.
   */
  public const CRITERION_ERROR_AUDIENCE_NOT_ALLOWED_TO_ATTACH_WHEN_AUDIENCE_GROUPED_SET_TO_FALSE = 'AUDIENCE_NOT_ALLOWED_TO_ATTACH_WHEN_AUDIENCE_GROUPED_SET_TO_FALSE';
  /**
   * Targeting is not allowed for Customer Match lists as per Customer Match
   * policy. See https://support.google.com/google-ads/answer/6299717.
   */
  public const CRITERION_ERROR_CANNOT_TARGET_CUSTOMER_MATCH_USER_LIST = 'CANNOT_TARGET_CUSTOMER_MATCH_USER_LIST';
  /**
   * Cannot create a negative keyword list criterion with a shared set that does
   * not exist.
   */
  public const CRITERION_ERROR_NEGATIVE_KEYWORD_SHARED_SET_DOES_NOT_EXIST = 'NEGATIVE_KEYWORD_SHARED_SET_DOES_NOT_EXIST';
  /**
   * Cannot create a negative keyword list with deleted shared set.
   */
  public const CRITERION_ERROR_CANNOT_ADD_REMOVED_NEGATIVE_KEYWORD_SHARED_SET = 'CANNOT_ADD_REMOVED_NEGATIVE_KEYWORD_SHARED_SET';
  /**
   * Can only have one Negative Keyword List per account.
   */
  public const CRITERION_ERROR_CANNOT_HAVE_MULTIPLE_NEGATIVE_KEYWORD_LIST_PER_ACCOUNT = 'CANNOT_HAVE_MULTIPLE_NEGATIVE_KEYWORD_LIST_PER_ACCOUNT';
  /**
   * Only allowlisted customers can add criteria of this type.
   */
  public const CRITERION_ERROR_CUSTOMER_CANNOT_ADD_CRITERION_OF_THIS_TYPE = 'CUSTOMER_CANNOT_ADD_CRITERION_OF_THIS_TYPE';
  /**
   * Targeting for Similar audiences is not supported, since this feature has
   * been deprecated. See https://support.google.com/google-ads/answer/12463119
   * to learn more.
   */
  public const CRITERION_ERROR_CANNOT_TARGET_SIMILAR_USER_LIST = 'CANNOT_TARGET_SIMILAR_USER_LIST';
  /**
   * Audience segment criteria cannot be added when use_audience_grouped bit is
   * set.
   */
  public const CRITERION_ERROR_CANNOT_ADD_AUDIENCE_SEGMENT_CRITERION_WHEN_AUDIENCE_GROUPED_IS_SET = 'CANNOT_ADD_AUDIENCE_SEGMENT_CRITERION_WHEN_AUDIENCE_GROUPED_IS_SET';
  /**
   * Only one audience is allowed in an ad group.
   */
  public const CRITERION_ERROR_ONE_AUDIENCE_ALLOWED_PER_AD_GROUP = 'ONE_AUDIENCE_ALLOWED_PER_AD_GROUP';
  /**
   * Invalid detailed demographics criterion.
   */
  public const CRITERION_ERROR_INVALID_DETAILED_DEMOGRAPHIC = 'INVALID_DETAILED_DEMOGRAPHIC';
  /**
   * The brand criteria has a brand input that is not recognized as a valid
   * brand.
   */
  public const CRITERION_ERROR_CANNOT_RECOGNIZE_BRAND = 'CANNOT_RECOGNIZE_BRAND';
  /**
   * The brand_list.shared_set_id references a shared set that does not exist.
   */
  public const CRITERION_ERROR_BRAND_SHARED_SET_DOES_NOT_EXIST = 'BRAND_SHARED_SET_DOES_NOT_EXIST';
  /**
   * Cannot create a brand list with deleted shared set.
   */
  public const CRITERION_ERROR_CANNOT_ADD_REMOVED_BRAND_SHARED_SET = 'CANNOT_ADD_REMOVED_BRAND_SHARED_SET';
  /**
   * Brand list can only be negatively targeted for the campaign type.
   */
  public const CRITERION_ERROR_ONLY_EXCLUSION_BRAND_LIST_ALLOWED_FOR_CAMPAIGN_TYPE = 'ONLY_EXCLUSION_BRAND_LIST_ALLOWED_FOR_CAMPAIGN_TYPE';
  /**
   * Cannot positively target locations outside of restricted area for campaign.
   */
  public const CRITERION_ERROR_LOCATION_TARGETING_NOT_ELIGIBLE_FOR_RESTRICTED_CAMPAIGN = 'LOCATION_TARGETING_NOT_ELIGIBLE_FOR_RESTRICTED_CAMPAIGN';
  /**
   * Ad group level brand list criteria only support inclusionary targeting.
   * Negative targeting at this level is not supported.
   */
  public const CRITERION_ERROR_ONLY_INCLUSION_BRAND_LIST_ALLOWED_FOR_AD_GROUPS = 'ONLY_INCLUSION_BRAND_LIST_ALLOWED_FOR_AD_GROUPS';
  /**
   * Cannot create a placement list with deleted shared set.
   */
  public const CRITERION_ERROR_CANNOT_ADD_REMOVED_PLACEMENT_LIST_SHARED_SET = 'CANNOT_ADD_REMOVED_PLACEMENT_LIST_SHARED_SET';
  /**
   * The placement_list.shared_set_id references a shared set that does not
   * exist.
   */
  public const CRITERION_ERROR_PLACEMENT_LIST_SHARED_SET_DOES_NOT_EXIST = 'PLACEMENT_LIST_SHARED_SET_DOES_NOT_EXIST';
  /**
   * This feature is only available for AI Max campaigns.
   */
  public const CRITERION_ERROR_AI_MAX_MUST_BE_ENABLED = 'AI_MAX_MUST_BE_ENABLED';
  /**
   * This feature is not available for AI Max campaigns.
   */
  public const CRITERION_ERROR_NOT_AVAILABLE_FOR_AI_MAX_CAMPAIGNS = 'NOT_AVAILABLE_FOR_AI_MAX_CAMPAIGNS';
  /**
   * The operation failed because the campaign is missing the self-declaration
   * on political advertising status in the EU.
   */
  public const CRITERION_ERROR_MISSING_EU_POLITICAL_ADVERTISING_SELF_DECLARATION = 'MISSING_EU_POLITICAL_ADVERTISING_SELF_DECLARATION';
  /**
   * Targeting this UserList is not allowed for this campaign type.
   */
  public const CRITERION_ERROR_INVALID_CAMPAIGN_TYPE_FOR_THIRD_PARTY_PARTNER_DATA_LIST = 'INVALID_CAMPAIGN_TYPE_FOR_THIRD_PARTY_PARTNER_DATA_LIST';
  /**
   * The user list cannot be used while it is pending privacy review.
   */
  public const CRITERION_ERROR_CANNOT_ADD_USER_LIST_PENDING_PRIVACY_REVIEW = 'CANNOT_ADD_USER_LIST_PENDING_PRIVACY_REVIEW';
  /**
   * The referenced Vertical Ads item group rule list shared set does not exist.
   */
  public const CRITERION_ERROR_VERTICAL_ADS_ITEM_GROUP_RULE_LIST_DOES_NOT_EXIST = 'VERTICAL_ADS_ITEM_GROUP_RULE_LIST_DOES_NOT_EXIST';
  /**
   * Cannot add Vertical Ads Item Group Rule List with deleted shared set.
   */
  public const CRITERION_ERROR_CANNOT_ADD_REMOVED_VERTICAL_ADS_ITEM_GROUP_RULE_LIST_SHARED_SET = 'CANNOT_ADD_REMOVED_VERTICAL_ADS_ITEM_GROUP_RULE_LIST_SHARED_SET';
  /**
   * Vertical Ads Item Group Rule List is not supported for campaigns that do
   * not have an active travel feed.
   */
  public const CRITERION_ERROR_VERTICAL_ADS_ITEM_GROUP_RULE_LIST_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_ENABLED_TRAVEL_FEED = 'VERTICAL_ADS_ITEM_GROUP_RULE_LIST_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_ENABLED_TRAVEL_FEED';
  /**
   * Vertical Ads Item Group Rule List is not supported for campaigns that do
   * not have AI max enabled.
   */
  public const CRITERION_ERROR_VERTICAL_ADS_ITEM_GROUP_RULE_LIST_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_AI_MAX = 'VERTICAL_ADS_ITEM_GROUP_RULE_LIST_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_AI_MAX';
  /**
   * The dimension of the Vertical Ads Item Group Rule criterion is not
   * supported for the shared set vertical type.
   */
  public const CRITERION_ERROR_VERTICAL_ADS_ITEM_GROUP_RULE_NOT_SUPPORTED_FOR_THE_VERTICAL_TYPE = 'VERTICAL_ADS_ITEM_GROUP_RULE_NOT_SUPPORTED_FOR_THE_VERTICAL_TYPE';
  /**
   * Enum unspecified.
   */
  public const CURRENCY_CODE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CURRENCY_CODE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The currency code is not supported.
   */
  public const CURRENCY_CODE_ERROR_UNSUPPORTED = 'UNSUPPORTED';
  /**
   * Enum unspecified.
   */
  public const CURRENCY_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CURRENCY_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Bid must be a multiple of billable unit.
   */
  public const CURRENCY_ERROR_VALUE_NOT_MULTIPLE_OF_BILLABLE_UNIT = 'VALUE_NOT_MULTIPLE_OF_BILLABLE_UNIT';
  /**
   * Enum unspecified.
   */
  public const CUSTOM_AUDIENCE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOM_AUDIENCE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * New name in the custom audience is duplicated ignoring cases.
   */
  public const CUSTOM_AUDIENCE_ERROR_NAME_ALREADY_USED = 'NAME_ALREADY_USED';
  /**
   * Cannot remove a custom audience while it's still being used as targeting.
   */
  public const CUSTOM_AUDIENCE_ERROR_CANNOT_REMOVE_WHILE_IN_USE = 'CANNOT_REMOVE_WHILE_IN_USE';
  /**
   * Cannot update or remove a custom audience that is already removed.
   */
  public const CUSTOM_AUDIENCE_ERROR_RESOURCE_ALREADY_REMOVED = 'RESOURCE_ALREADY_REMOVED';
  /**
   * The pair of [type, value] already exists in members.
   */
  public const CUSTOM_AUDIENCE_ERROR_MEMBER_TYPE_AND_PARAMETER_ALREADY_EXISTED = 'MEMBER_TYPE_AND_PARAMETER_ALREADY_EXISTED';
  /**
   * Member type is invalid.
   */
  public const CUSTOM_AUDIENCE_ERROR_INVALID_MEMBER_TYPE = 'INVALID_MEMBER_TYPE';
  /**
   * Member type does not have associated value.
   */
  public const CUSTOM_AUDIENCE_ERROR_MEMBER_TYPE_AND_VALUE_DOES_NOT_MATCH = 'MEMBER_TYPE_AND_VALUE_DOES_NOT_MATCH';
  /**
   * Custom audience contains a member that violates policy.
   */
  public const CUSTOM_AUDIENCE_ERROR_POLICY_VIOLATION = 'POLICY_VIOLATION';
  /**
   * Change in custom audience type is not allowed.
   */
  public const CUSTOM_AUDIENCE_ERROR_INVALID_TYPE_CHANGE = 'INVALID_TYPE_CHANGE';
  /**
   * Enum unspecified.
   */
  public const CUSTOM_COLUMN_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOM_COLUMN_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The custom column has not been found.
   */
  public const CUSTOM_COLUMN_ERROR_CUSTOM_COLUMN_NOT_FOUND = 'CUSTOM_COLUMN_NOT_FOUND';
  /**
   * The custom column is not available.
   */
  public const CUSTOM_COLUMN_ERROR_CUSTOM_COLUMN_NOT_AVAILABLE = 'CUSTOM_COLUMN_NOT_AVAILABLE';
  /**
   * Enum unspecified.
   */
  public const CUSTOM_CONVERSION_GOAL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOM_CONVERSION_GOAL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Cannot find a conversion action with the specified id.
   */
  public const CUSTOM_CONVERSION_GOAL_ERROR_INVALID_CONVERSION_ACTION = 'INVALID_CONVERSION_ACTION';
  /**
   * The conversion action is not enabled so it cannot be included in a custom
   * conversion goal.
   */
  public const CUSTOM_CONVERSION_GOAL_ERROR_CONVERSION_ACTION_NOT_ENABLED = 'CONVERSION_ACTION_NOT_ENABLED';
  /**
   * The custom conversion goal cannot be removed because it's linked to a
   * campaign.
   */
  public const CUSTOM_CONVERSION_GOAL_ERROR_CANNOT_REMOVE_LINKED_CUSTOM_CONVERSION_GOAL = 'CANNOT_REMOVE_LINKED_CUSTOM_CONVERSION_GOAL';
  /**
   * Custom goal with the same name already exists.
   */
  public const CUSTOM_CONVERSION_GOAL_ERROR_CUSTOM_GOAL_DUPLICATE_NAME = 'CUSTOM_GOAL_DUPLICATE_NAME';
  /**
   * Custom goal with the same conversion action list already exists.
   */
  public const CUSTOM_CONVERSION_GOAL_ERROR_DUPLICATE_CONVERSION_ACTION_LIST = 'DUPLICATE_CONVERSION_ACTION_LIST';
  /**
   * Conversion types that cannot be biddable should not be included in custom
   * goal.
   */
  public const CUSTOM_CONVERSION_GOAL_ERROR_NON_BIDDABLE_CONVERSION_ACTION_NOT_ELIGIBLE_FOR_CUSTOM_GOAL = 'NON_BIDDABLE_CONVERSION_ACTION_NOT_ELIGIBLE_FOR_CUSTOM_GOAL';
  /**
   * Enum unspecified.
   */
  public const CUSTOM_INTEREST_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOM_INTEREST_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Duplicate custom interest name ignoring case.
   */
  public const CUSTOM_INTEREST_ERROR_NAME_ALREADY_USED = 'NAME_ALREADY_USED';
  /**
   * In the remove custom interest member operation, both member ID and pair
   * [type, parameter] are not present.
   */
  public const CUSTOM_INTEREST_ERROR_CUSTOM_INTEREST_MEMBER_ID_AND_TYPE_PARAMETER_NOT_PRESENT_IN_REMOVE = 'CUSTOM_INTEREST_MEMBER_ID_AND_TYPE_PARAMETER_NOT_PRESENT_IN_REMOVE';
  /**
   * The pair of [type, parameter] does not exist.
   */
  public const CUSTOM_INTEREST_ERROR_TYPE_AND_PARAMETER_NOT_FOUND = 'TYPE_AND_PARAMETER_NOT_FOUND';
  /**
   * The pair of [type, parameter] already exists.
   */
  public const CUSTOM_INTEREST_ERROR_TYPE_AND_PARAMETER_ALREADY_EXISTED = 'TYPE_AND_PARAMETER_ALREADY_EXISTED';
  /**
   * Unsupported custom interest member type.
   */
  public const CUSTOM_INTEREST_ERROR_INVALID_CUSTOM_INTEREST_MEMBER_TYPE = 'INVALID_CUSTOM_INTEREST_MEMBER_TYPE';
  /**
   * Cannot remove a custom interest while it's still being targeted.
   */
  public const CUSTOM_INTEREST_ERROR_CANNOT_REMOVE_WHILE_IN_USE = 'CANNOT_REMOVE_WHILE_IN_USE';
  /**
   * Cannot mutate custom interest type.
   */
  public const CUSTOM_INTEREST_ERROR_CANNOT_CHANGE_TYPE = 'CANNOT_CHANGE_TYPE';
  /**
   * Enum unspecified.
   */
  public const CUSTOMER_CLIENT_LINK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOMER_CLIENT_LINK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Trying to manage a client that already in being managed by customer.
   */
  public const CUSTOMER_CLIENT_LINK_ERROR_CLIENT_ALREADY_INVITED_BY_THIS_MANAGER = 'CLIENT_ALREADY_INVITED_BY_THIS_MANAGER';
  /**
   * Already managed by some other manager in the hierarchy.
   */
  public const CUSTOMER_CLIENT_LINK_ERROR_CLIENT_ALREADY_MANAGED_IN_HIERARCHY = 'CLIENT_ALREADY_MANAGED_IN_HIERARCHY';
  /**
   * Attempt to create a cycle in the hierarchy.
   */
  public const CUSTOMER_CLIENT_LINK_ERROR_CYCLIC_LINK_NOT_ALLOWED = 'CYCLIC_LINK_NOT_ALLOWED';
  /**
   * Managed accounts has the maximum number of linked accounts.
   */
  public const CUSTOMER_CLIENT_LINK_ERROR_CUSTOMER_HAS_TOO_MANY_ACCOUNTS = 'CUSTOMER_HAS_TOO_MANY_ACCOUNTS';
  /**
   * Invitor has the maximum pending invitations.
   */
  public const CUSTOMER_CLIENT_LINK_ERROR_CLIENT_HAS_TOO_MANY_INVITATIONS = 'CLIENT_HAS_TOO_MANY_INVITATIONS';
  /**
   * Attempt to change hidden status of a link that is not active.
   */
  public const CUSTOMER_CLIENT_LINK_ERROR_CANNOT_HIDE_OR_UNHIDE_MANAGER_ACCOUNTS = 'CANNOT_HIDE_OR_UNHIDE_MANAGER_ACCOUNTS';
  /**
   * Parent manager account has the maximum number of linked accounts.
   */
  public const CUSTOMER_CLIENT_LINK_ERROR_CUSTOMER_HAS_TOO_MANY_ACCOUNTS_AT_MANAGER = 'CUSTOMER_HAS_TOO_MANY_ACCOUNTS_AT_MANAGER';
  /**
   * Client has too many managers.
   */
  public const CUSTOMER_CLIENT_LINK_ERROR_CLIENT_HAS_TOO_MANY_MANAGERS = 'CLIENT_HAS_TOO_MANY_MANAGERS';
  /**
   * Enum unspecified.
   */
  public const CUSTOMER_CUSTOMIZER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOMER_CUSTOMIZER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Enum unspecified.
   */
  public const CUSTOMER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOMER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Customer status is not allowed to be changed from DRAFT and CLOSED.
   * Currency code and at least one of country code and time zone needs to be
   * set when status is changed to ENABLED.
   */
  public const CUSTOMER_ERROR_STATUS_CHANGE_DISALLOWED = 'STATUS_CHANGE_DISALLOWED';
  /**
   * CustomerService cannot get a customer that has not been fully set up.
   */
  public const CUSTOMER_ERROR_ACCOUNT_NOT_SET_UP = 'ACCOUNT_NOT_SET_UP';
  /**
   * Customer creation is denied for policy violation.
   */
  public const CUSTOMER_ERROR_CREATION_DENIED_FOR_POLICY_VIOLATION = 'CREATION_DENIED_FOR_POLICY_VIOLATION';
  /**
   * Manager account is ineligible to create new accounts.
   */
  public const CUSTOMER_ERROR_CREATION_DENIED_INELIGIBLE_MCC = 'CREATION_DENIED_INELIGIBLE_MCC';
  /**
   * Enum unspecified.
   */
  public const CUSTOMER_FEED_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOMER_FEED_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * An active feed already exists for this customer and place holder type.
   */
  public const CUSTOMER_FEED_ERROR_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 'FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE';
  /**
   * The specified feed is removed.
   */
  public const CUSTOMER_FEED_ERROR_CANNOT_CREATE_FOR_REMOVED_FEED = 'CANNOT_CREATE_FOR_REMOVED_FEED';
  /**
   * The CustomerFeed already exists. Update should be used to modify the
   * existing CustomerFeed.
   */
  public const CUSTOMER_FEED_ERROR_CANNOT_CREATE_ALREADY_EXISTING_CUSTOMER_FEED = 'CANNOT_CREATE_ALREADY_EXISTING_CUSTOMER_FEED';
  /**
   * Cannot update removed customer feed.
   */
  public const CUSTOMER_FEED_ERROR_CANNOT_MODIFY_REMOVED_CUSTOMER_FEED = 'CANNOT_MODIFY_REMOVED_CUSTOMER_FEED';
  /**
   * Invalid placeholder type.
   */
  public const CUSTOMER_FEED_ERROR_INVALID_PLACEHOLDER_TYPE = 'INVALID_PLACEHOLDER_TYPE';
  /**
   * Feed mapping for this placeholder type does not exist.
   */
  public const CUSTOMER_FEED_ERROR_MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE = 'MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE';
  /**
   * Placeholder not allowed at the account level.
   */
  public const CUSTOMER_FEED_ERROR_PLACEHOLDER_TYPE_NOT_ALLOWED_ON_CUSTOMER_FEED = 'PLACEHOLDER_TYPE_NOT_ALLOWED_ON_CUSTOMER_FEED';
  /**
   * Enum unspecified.
   */
  public const CUSTOMER_LIFECYCLE_GOAL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOMER_LIFECYCLE_GOAL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * CustomerLifecycleGoal.customer_acquisition_goal_value_settings.value must
   * be set.
   */
  public const CUSTOMER_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_VALUE_MISSING = 'CUSTOMER_ACQUISITION_VALUE_MISSING';
  /**
   * CustomerLifecycleGoal.customer_acquisition_goal_value_settings.value must
   * be no less than 0.01.
   */
  public const CUSTOMER_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_INVALID_VALUE = 'CUSTOMER_ACQUISITION_INVALID_VALUE';
  /**
   * CustomerLifecycleGoal.customer_acquisition_goal_value_settings.high_lifetim
   * e_value must be no less than 0.01. Also, to set this field,
   * CustomerLifecycleGoal.customer_acquisition_goal_value_settings.value must
   * also be present, and high_lifetime_value must be greater than value.
   */
  public const CUSTOMER_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_INVALID_HIGH_LIFETIME_VALUE = 'CUSTOMER_ACQUISITION_INVALID_HIGH_LIFETIME_VALUE';
  /**
   * CustomerLifecycleGoal.customer_acquisition_goal_value_settings.value cannot
   * be cleared. This value would have no effect as long as none of your
   * campaigns adopt the customer acquisitiong goal.
   */
  public const CUSTOMER_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_VALUE_CANNOT_BE_CLEARED = 'CUSTOMER_ACQUISITION_VALUE_CANNOT_BE_CLEARED';
  /**
   * CustomerLifecycleGoal.customer_acquisition_goal_value_settings.high_lifetim
   * e_value cannot be cleared. This value would have no effect as long as none
   * of your campaigns adopt the high value optimization of customer
   * acquisitiong goal.
   */
  public const CUSTOMER_LIFECYCLE_GOAL_ERROR_CUSTOMER_ACQUISITION_HIGH_LIFETIME_VALUE_CANNOT_BE_CLEARED = 'CUSTOMER_ACQUISITION_HIGH_LIFETIME_VALUE_CANNOT_BE_CLEARED';
  /**
   * Found invalid value in CustomerLifecycleGoal.lifecycle_goal_customer_defini
   * tion_settings.existing_user_lists. The userlist must be accessible, active
   * and belong to one of the following types: CRM_BASED, RULE_BASED,
   * REMARKETING.
   */
  public const CUSTOMER_LIFECYCLE_GOAL_ERROR_INVALID_EXISTING_USER_LIST = 'INVALID_EXISTING_USER_LIST';
  /**
   * Found invalid value in CustomerLifecycleGoal.lifecycle_goal_customer_defini
   * tion_settings.high_lifetime_value_user_lists. The userlist must be
   * accessible, active and belong to one of the following types: CRM_BASED,
   * RULE_BASED, REMARKETING.
   */
  public const CUSTOMER_LIFECYCLE_GOAL_ERROR_INVALID_HIGH_LIFETIME_VALUE_USER_LIST = 'INVALID_HIGH_LIFETIME_VALUE_USER_LIST';
  /**
   * Enum unspecified.
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * No pending invitation.
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_NO_PENDING_INVITE = 'NO_PENDING_INVITE';
  /**
   * Attempt to operate on the same client more than once in the same call.
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_SAME_CLIENT_MORE_THAN_ONCE_PER_CALL = 'SAME_CLIENT_MORE_THAN_ONCE_PER_CALL';
  /**
   * Manager account has the maximum number of linked accounts.
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_MANAGER_HAS_MAX_NUMBER_OF_LINKED_ACCOUNTS = 'MANAGER_HAS_MAX_NUMBER_OF_LINKED_ACCOUNTS';
  /**
   * If no active user on account it cannot be unlinked from its manager.
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_CANNOT_UNLINK_ACCOUNT_WITHOUT_ACTIVE_USER = 'CANNOT_UNLINK_ACCOUNT_WITHOUT_ACTIVE_USER';
  /**
   * Account should have at least one active owner on it before being unlinked.
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_CANNOT_REMOVE_LAST_CLIENT_ACCOUNT_OWNER = 'CANNOT_REMOVE_LAST_CLIENT_ACCOUNT_OWNER';
  /**
   * Only account owners may change their permission role.
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_CANNOT_CHANGE_ROLE_BY_NON_ACCOUNT_OWNER = 'CANNOT_CHANGE_ROLE_BY_NON_ACCOUNT_OWNER';
  /**
   * When a client's link to its manager is not active, the link role cannot be
   * changed.
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_CANNOT_CHANGE_ROLE_FOR_NON_ACTIVE_LINK_ACCOUNT = 'CANNOT_CHANGE_ROLE_FOR_NON_ACTIVE_LINK_ACCOUNT';
  /**
   * Attempt to link a child to a parent that contains or will contain duplicate
   * children.
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_DUPLICATE_CHILD_FOUND = 'DUPLICATE_CHILD_FOUND';
  /**
   * The authorized customer is a test account. It can add no more than the
   * allowed number of accounts
   */
  public const CUSTOMER_MANAGER_LINK_ERROR_TEST_ACCOUNT_LINKS_TOO_MANY_CHILD_ACCOUNTS = 'TEST_ACCOUNT_LINKS_TOO_MANY_CHILD_ACCOUNTS';
  /**
   * Enum unspecified.
   */
  public const CUSTOMER_SK_AD_NETWORK_CONVERSION_VALUE_SCHEMA_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOMER_SK_AD_NETWORK_CONVERSION_VALUE_SCHEMA_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The customer link ID provided is invalid.
   */
  public const CUSTOMER_SK_AD_NETWORK_CONVERSION_VALUE_SCHEMA_ERROR_INVALID_LINK_ID = 'INVALID_LINK_ID';
  /**
   * The app ID provided is invalid.
   */
  public const CUSTOMER_SK_AD_NETWORK_CONVERSION_VALUE_SCHEMA_ERROR_INVALID_APP_ID = 'INVALID_APP_ID';
  /**
   * The conversion value schema provided is invalid.
   */
  public const CUSTOMER_SK_AD_NETWORK_CONVERSION_VALUE_SCHEMA_ERROR_INVALID_SCHEMA = 'INVALID_SCHEMA';
  /**
   * The customer link id provided could not be found.
   */
  public const CUSTOMER_SK_AD_NETWORK_CONVERSION_VALUE_SCHEMA_ERROR_LINK_CODE_NOT_FOUND = 'LINK_CODE_NOT_FOUND';
  /**
   * The SkAdNetwork event counter provided is invalid.
   */
  public const CUSTOMER_SK_AD_NETWORK_CONVERSION_VALUE_SCHEMA_ERROR_INVALID_EVENT_COUNTER = 'INVALID_EVENT_COUNTER';
  /**
   * The SkAdNetwork event name provided is invalid.
   */
  public const CUSTOMER_SK_AD_NETWORK_CONVERSION_VALUE_SCHEMA_ERROR_INVALID_EVENT_NAME = 'INVALID_EVENT_NAME';
  /**
   * Enum unspecified.
   */
  public const CUSTOMER_USER_ACCESS_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOMER_USER_ACCESS_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * There is no user associated with the user id specified.
   */
  public const CUSTOMER_USER_ACCESS_ERROR_INVALID_USER_ID = 'INVALID_USER_ID';
  /**
   * Unable to remove the access between the user and customer.
   */
  public const CUSTOMER_USER_ACCESS_ERROR_REMOVAL_DISALLOWED = 'REMOVAL_DISALLOWED';
  /**
   * Unable to add or update the access role as specified.
   */
  public const CUSTOMER_USER_ACCESS_ERROR_DISALLOWED_ACCESS_ROLE = 'DISALLOWED_ACCESS_ROLE';
  /**
   * The user can't remove itself from an active serving customer if it's the
   * last admin user and the customer doesn't have any owner manager
   */
  public const CUSTOMER_USER_ACCESS_ERROR_LAST_ADMIN_USER_OF_SERVING_CUSTOMER = 'LAST_ADMIN_USER_OF_SERVING_CUSTOMER';
  /**
   * Last admin user cannot be removed from a manager.
   */
  public const CUSTOMER_USER_ACCESS_ERROR_LAST_ADMIN_USER_OF_MANAGER = 'LAST_ADMIN_USER_OF_MANAGER';
  /**
   * Enum unspecified.
   */
  public const CUSTOMIZER_ATTRIBUTE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const CUSTOMIZER_ATTRIBUTE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * CustomizerAttribute name matches that of another active
   * CustomizerAttribute.
   */
  public const CUSTOMIZER_ATTRIBUTE_ERROR_DUPLICATE_CUSTOMIZER_ATTRIBUTE_NAME = 'DUPLICATE_CUSTOMIZER_ATTRIBUTE_NAME';
  /**
   * Enum unspecified.
   */
  public const DATA_LINK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const DATA_LINK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The requested YouTube Channel ID is invalid.
   */
  public const DATA_LINK_ERROR_YOUTUBE_CHANNEL_ID_INVALID = 'YOUTUBE_CHANNEL_ID_INVALID';
  /**
   * The requested YouTube Video ID is invalid.
   */
  public const DATA_LINK_ERROR_YOUTUBE_VIDEO_ID_INVALID = 'YOUTUBE_VIDEO_ID_INVALID';
  /**
   * The requested YouTube Video ID doesn't belong to the requested YouTube
   * Channel ID.
   */
  public const DATA_LINK_ERROR_YOUTUBE_VIDEO_FROM_DIFFERENT_CHANNEL = 'YOUTUBE_VIDEO_FROM_DIFFERENT_CHANNEL';
  /**
   * A link cannot be created because the customer doesn't have the permission.
   */
  public const DATA_LINK_ERROR_PERMISSION_DENIED = 'PERMISSION_DENIED';
  /**
   * A link can not be removed or updated because the status is invalid.
   */
  public const DATA_LINK_ERROR_INVALID_STATUS = 'INVALID_STATUS';
  /**
   * The input status in the update request is invalid.
   */
  public const DATA_LINK_ERROR_INVALID_UPDATE_STATUS = 'INVALID_UPDATE_STATUS';
  /**
   * The input resource name is invalid.
   */
  public const DATA_LINK_ERROR_INVALID_RESOURCE_NAME = 'INVALID_RESOURCE_NAME';
  /**
   * Enum unspecified.
   */
  public const DATABASE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const DATABASE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Multiple requests were attempting to modify the same resource at once.
   * Retry the request.
   */
  public const DATABASE_ERROR_CONCURRENT_MODIFICATION = 'CONCURRENT_MODIFICATION';
  /**
   * The request conflicted with existing data. This error will usually be
   * replaced with a more specific error if the request is retried.
   */
  public const DATABASE_ERROR_DATA_CONSTRAINT_VIOLATION = 'DATA_CONSTRAINT_VIOLATION';
  /**
   * The data written is too large. Split the request into smaller requests.
   */
  public const DATABASE_ERROR_REQUEST_TOO_LARGE = 'REQUEST_TOO_LARGE';
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
  public const DATE_RANGE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const DATE_RANGE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Invalid date.
   */
  public const DATE_RANGE_ERROR_INVALID_DATE = 'INVALID_DATE';
  /**
   * The start date was after the end date.
   */
  public const DATE_RANGE_ERROR_START_DATE_AFTER_END_DATE = 'START_DATE_AFTER_END_DATE';
  /**
   * Cannot set date to past time
   */
  public const DATE_RANGE_ERROR_CANNOT_SET_DATE_TO_PAST = 'CANNOT_SET_DATE_TO_PAST';
  /**
   * A date was used that is past the system "last" date.
   */
  public const DATE_RANGE_ERROR_AFTER_MAXIMUM_ALLOWABLE_DATE = 'AFTER_MAXIMUM_ALLOWABLE_DATE';
  /**
   * Trying to change start date on a resource that has started.
   */
  public const DATE_RANGE_ERROR_CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED = 'CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED';
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
  public const ENUM_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ENUM_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The enum value is not permitted.
   */
  public const ENUM_ERROR_ENUM_VALUE_NOT_PERMITTED = 'ENUM_VALUE_NOT_PERMITTED';
  /**
   * Enum unspecified.
   */
  public const EXPERIMENT_ARM_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const EXPERIMENT_ARM_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Number of experiment arms is above limit.
   */
  public const EXPERIMENT_ARM_ERROR_EXPERIMENT_ARM_COUNT_LIMIT_EXCEEDED = 'EXPERIMENT_ARM_COUNT_LIMIT_EXCEEDED';
  /**
   * Cannot add campaign with invalid status to the experiment arm.
   */
  public const EXPERIMENT_ARM_ERROR_INVALID_CAMPAIGN_STATUS = 'INVALID_CAMPAIGN_STATUS';
  /**
   * Cannot add duplicate experiment arm name in one experiment.
   */
  public const EXPERIMENT_ARM_ERROR_DUPLICATE_EXPERIMENT_ARM_NAME = 'DUPLICATE_EXPERIMENT_ARM_NAME';
  /**
   * Cannot set campaigns of treatment experiment arm.
   */
  public const EXPERIMENT_ARM_ERROR_CANNOT_SET_TREATMENT_ARM_CAMPAIGN = 'CANNOT_SET_TREATMENT_ARM_CAMPAIGN';
  /**
   * Cannot edit campaign ids in trial arms in non SETUP experiment.
   */
  public const EXPERIMENT_ARM_ERROR_CANNOT_MODIFY_CAMPAIGN_IDS = 'CANNOT_MODIFY_CAMPAIGN_IDS';
  /**
   * Cannot modify the campaigns in the control arm if there is not a suffix set
   * in the trial.
   */
  public const EXPERIMENT_ARM_ERROR_CANNOT_MODIFY_CAMPAIGN_WITHOUT_SUFFIX_SET = 'CANNOT_MODIFY_CAMPAIGN_WITHOUT_SUFFIX_SET';
  /**
   * Traffic split related settings (like traffic share bounds) can't be
   * modified after the trial has started.
   */
  public const EXPERIMENT_ARM_ERROR_CANNOT_MUTATE_TRAFFIC_SPLIT_AFTER_START = 'CANNOT_MUTATE_TRAFFIC_SPLIT_AFTER_START';
  /**
   * Cannot use shared budget on experiment's control campaign.
   */
  public const EXPERIMENT_ARM_ERROR_CANNOT_ADD_CAMPAIGN_WITH_SHARED_BUDGET = 'CANNOT_ADD_CAMPAIGN_WITH_SHARED_BUDGET';
  /**
   * Cannot use custom budget on experiment's control campaigns.
   */
  public const EXPERIMENT_ARM_ERROR_CANNOT_ADD_CAMPAIGN_WITH_CUSTOM_BUDGET = 'CANNOT_ADD_CAMPAIGN_WITH_CUSTOM_BUDGET';
  /**
   * Cannot have enable_dynamic_assets turned on in experiment's campaigns.
   */
  public const EXPERIMENT_ARM_ERROR_CANNOT_ADD_CAMPAIGNS_WITH_DYNAMIC_ASSETS_ENABLED = 'CANNOT_ADD_CAMPAIGNS_WITH_DYNAMIC_ASSETS_ENABLED';
  /**
   * Cannot use campaign's advertising channel sub type in experiment.
   */
  public const EXPERIMENT_ARM_ERROR_UNSUPPORTED_CAMPAIGN_ADVERTISING_CHANNEL_SUB_TYPE = 'UNSUPPORTED_CAMPAIGN_ADVERTISING_CHANNEL_SUB_TYPE';
  /**
   * Experiment date range must be within base campaign's date range.
   */
  public const EXPERIMENT_ARM_ERROR_CANNOT_ADD_BASE_CAMPAIGN_WITH_DATE_RANGE = 'CANNOT_ADD_BASE_CAMPAIGN_WITH_DATE_RANGE';
  /**
   * Bidding strategy is not supported in experiments.
   */
  public const EXPERIMENT_ARM_ERROR_BIDDING_STRATEGY_NOT_SUPPORTED_IN_EXPERIMENTS = 'BIDDING_STRATEGY_NOT_SUPPORTED_IN_EXPERIMENTS';
  /**
   * Traffic split is not supported for some channel types.
   */
  public const EXPERIMENT_ARM_ERROR_TRAFFIC_SPLIT_NOT_SUPPORTED_FOR_CHANNEL_TYPE = 'TRAFFIC_SPLIT_NOT_SUPPORTED_FOR_CHANNEL_TYPE';
  /**
   * Enum unspecified.
   */
  public const EXPERIMENT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const EXPERIMENT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The start date of an experiment cannot be set in the past. Use a start date
   * in the future.
   */
  public const EXPERIMENT_ERROR_CANNOT_SET_START_DATE_IN_PAST = 'CANNOT_SET_START_DATE_IN_PAST';
  /**
   * The end date of an experiment is before its start date. Use an end date
   * after the start date.
   */
  public const EXPERIMENT_ERROR_END_DATE_BEFORE_START_DATE = 'END_DATE_BEFORE_START_DATE';
  /**
   * The start date of an experiment is too far in the future. Use a start date
   * no more than 1 year in the future.
   */
  public const EXPERIMENT_ERROR_START_DATE_TOO_FAR_IN_FUTURE = 'START_DATE_TOO_FAR_IN_FUTURE';
  /**
   * The experiment has the same name as an existing active experiment.
   */
  public const EXPERIMENT_ERROR_DUPLICATE_EXPERIMENT_NAME = 'DUPLICATE_EXPERIMENT_NAME';
  /**
   * Experiments can only be modified when they are ENABLED.
   */
  public const EXPERIMENT_ERROR_CANNOT_MODIFY_REMOVED_EXPERIMENT = 'CANNOT_MODIFY_REMOVED_EXPERIMENT';
  /**
   * The start date of an experiment cannot be modified if the existing start
   * date has already passed.
   */
  public const EXPERIMENT_ERROR_START_DATE_ALREADY_PASSED = 'START_DATE_ALREADY_PASSED';
  /**
   * The end date of an experiment cannot be set in the past.
   */
  public const EXPERIMENT_ERROR_CANNOT_SET_END_DATE_IN_PAST = 'CANNOT_SET_END_DATE_IN_PAST';
  /**
   * The status of an experiment cannot be set to REMOVED.
   */
  public const EXPERIMENT_ERROR_CANNOT_SET_STATUS_TO_REMOVED = 'CANNOT_SET_STATUS_TO_REMOVED';
  /**
   * The end date of an expired experiment cannot be modified.
   */
  public const EXPERIMENT_ERROR_CANNOT_MODIFY_PAST_END_DATE = 'CANNOT_MODIFY_PAST_END_DATE';
  /**
   * The status is invalid.
   */
  public const EXPERIMENT_ERROR_INVALID_STATUS = 'INVALID_STATUS';
  /**
   * Experiment arm contains campaigns with invalid advertising channel type.
   */
  public const EXPERIMENT_ERROR_INVALID_CAMPAIGN_CHANNEL_TYPE = 'INVALID_CAMPAIGN_CHANNEL_TYPE';
  /**
   * A pair of trials share members and have overlapping date ranges.
   */
  public const EXPERIMENT_ERROR_OVERLAPPING_MEMBERS_AND_DATE_RANGE = 'OVERLAPPING_MEMBERS_AND_DATE_RANGE';
  /**
   * Experiment arm contains invalid traffic split.
   */
  public const EXPERIMENT_ERROR_INVALID_TRIAL_ARM_TRAFFIC_SPLIT = 'INVALID_TRIAL_ARM_TRAFFIC_SPLIT';
  /**
   * Experiment contains trial arms with overlapping traffic split.
   */
  public const EXPERIMENT_ERROR_TRAFFIC_SPLIT_OVERLAPPING = 'TRAFFIC_SPLIT_OVERLAPPING';
  /**
   * The total traffic split of trial arms is not equal to 100.
   */
  public const EXPERIMENT_ERROR_SUM_TRIAL_ARM_TRAFFIC_UNEQUALS_TO_TRIAL_TRAFFIC_SPLIT_DENOMINATOR = 'SUM_TRIAL_ARM_TRAFFIC_UNEQUALS_TO_TRIAL_TRAFFIC_SPLIT_DENOMINATOR';
  /**
   * Traffic split related settings (like traffic share bounds) can't be
   * modified after the experiment has started.
   */
  public const EXPERIMENT_ERROR_CANNOT_MODIFY_TRAFFIC_SPLIT_AFTER_START = 'CANNOT_MODIFY_TRAFFIC_SPLIT_AFTER_START';
  /**
   * The experiment could not be found.
   */
  public const EXPERIMENT_ERROR_EXPERIMENT_NOT_FOUND = 'EXPERIMENT_NOT_FOUND';
  /**
   * Experiment has not begun.
   */
  public const EXPERIMENT_ERROR_EXPERIMENT_NOT_YET_STARTED = 'EXPERIMENT_NOT_YET_STARTED';
  /**
   * The experiment cannot have more than one control arm.
   */
  public const EXPERIMENT_ERROR_CANNOT_HAVE_MULTIPLE_CONTROL_ARMS = 'CANNOT_HAVE_MULTIPLE_CONTROL_ARMS';
  /**
   * The experiment doesn't set in-design campaigns.
   */
  public const EXPERIMENT_ERROR_IN_DESIGN_CAMPAIGNS_NOT_SET = 'IN_DESIGN_CAMPAIGNS_NOT_SET';
  /**
   * Clients must use the graduate action to graduate experiments and cannot set
   * the status to GRADUATED directly.
   */
  public const EXPERIMENT_ERROR_CANNOT_SET_STATUS_TO_GRADUATED = 'CANNOT_SET_STATUS_TO_GRADUATED';
  /**
   * Cannot use shared budget on base campaign when scheduling an experiment.
   */
  public const EXPERIMENT_ERROR_CANNOT_CREATE_EXPERIMENT_CAMPAIGN_WITH_SHARED_BUDGET = 'CANNOT_CREATE_EXPERIMENT_CAMPAIGN_WITH_SHARED_BUDGET';
  /**
   * Cannot use custom budget on base campaign when scheduling an experiment.
   */
  public const EXPERIMENT_ERROR_CANNOT_CREATE_EXPERIMENT_CAMPAIGN_WITH_CUSTOM_BUDGET = 'CANNOT_CREATE_EXPERIMENT_CAMPAIGN_WITH_CUSTOM_BUDGET';
  /**
   * Invalid status transition.
   */
  public const EXPERIMENT_ERROR_STATUS_TRANSITION_INVALID = 'STATUS_TRANSITION_INVALID';
  /**
   * The experiment campaign name conflicts with a pre-existing campaign.
   */
  public const EXPERIMENT_ERROR_DUPLICATE_EXPERIMENT_CAMPAIGN_NAME = 'DUPLICATE_EXPERIMENT_CAMPAIGN_NAME';
  /**
   * Cannot remove in creation experiments.
   */
  public const EXPERIMENT_ERROR_CANNOT_REMOVE_IN_CREATION_EXPERIMENT = 'CANNOT_REMOVE_IN_CREATION_EXPERIMENT';
  /**
   * Cannot add campaign with deprecated ad types. Deprecated ad types:
   * ENHANCED_DISPLAY, GALLERY, GMAIL, KEYWORDLESS, TEXT.
   */
  public const EXPERIMENT_ERROR_CANNOT_ADD_CAMPAIGN_WITH_DEPRECATED_AD_TYPES = 'CANNOT_ADD_CAMPAIGN_WITH_DEPRECATED_AD_TYPES';
  /**
   * Sync can only be enabled for supported experiment types. Supported
   * experiment types: SEARCH_CUSTOM, DISPLAY_CUSTOM,
   * DISPLAY_AUTOMATED_BIDDING_STRATEGY, SEARCH_AUTOMATED_BIDDING_STRATEGY.
   */
  public const EXPERIMENT_ERROR_CANNOT_ENABLE_SYNC_FOR_UNSUPPORTED_EXPERIMENT_TYPE = 'CANNOT_ENABLE_SYNC_FOR_UNSUPPORTED_EXPERIMENT_TYPE';
  /**
   * Experiment length cannot be longer than max length.
   */
  public const EXPERIMENT_ERROR_INVALID_DURATION_FOR_AN_EXPERIMENT = 'INVALID_DURATION_FOR_AN_EXPERIMENT';
  /**
   * The experiment's campaigns must self-declare whether they contain political
   * advertising that targets the European Union.
   */
  public const EXPERIMENT_ERROR_MISSING_EU_POLITICAL_ADVERTISING_SELF_DECLARATION = 'MISSING_EU_POLITICAL_ADVERTISING_SELF_DECLARATION';
  /**
   * Enum unspecified.
   */
  public const EXTENSION_FEED_ITEM_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const EXTENSION_FEED_ITEM_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Value is not within the accepted range.
   */
  public const EXTENSION_FEED_ITEM_ERROR_VALUE_OUT_OF_RANGE = 'VALUE_OUT_OF_RANGE';
  /**
   * Url list is too long.
   */
  public const EXTENSION_FEED_ITEM_ERROR_URL_LIST_TOO_LONG = 'URL_LIST_TOO_LONG';
  /**
   * Cannot have a geo targeting restriction without having geo targeting.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CANNOT_HAVE_RESTRICTION_ON_EMPTY_GEO_TARGETING = 'CANNOT_HAVE_RESTRICTION_ON_EMPTY_GEO_TARGETING';
  /**
   * Cannot simultaneously set sitelink field with final urls.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CANNOT_SET_WITH_FINAL_URLS = 'CANNOT_SET_WITH_FINAL_URLS';
  /**
   * Must set field with final urls.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CANNOT_SET_WITHOUT_FINAL_URLS = 'CANNOT_SET_WITHOUT_FINAL_URLS';
  /**
   * Phone number for a call extension is invalid.
   */
  public const EXTENSION_FEED_ITEM_ERROR_INVALID_PHONE_NUMBER = 'INVALID_PHONE_NUMBER';
  /**
   * Phone number for a call extension is not supported for the given country
   * code.
   */
  public const EXTENSION_FEED_ITEM_ERROR_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 'PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY';
  /**
   * A carrier specific number in short format is not allowed for call
   * extensions.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 'CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED';
  /**
   * Premium rate numbers are not allowed for call extensions.
   */
  public const EXTENSION_FEED_ITEM_ERROR_PREMIUM_RATE_NUMBER_NOT_ALLOWED = 'PREMIUM_RATE_NUMBER_NOT_ALLOWED';
  /**
   * Phone number type for a call extension is not allowed. For example,
   * personal number is not allowed for a call extension in most regions.
   */
  public const EXTENSION_FEED_ITEM_ERROR_DISALLOWED_NUMBER_TYPE = 'DISALLOWED_NUMBER_TYPE';
  /**
   * Phone number for a call extension does not meet domestic format
   * requirements.
   */
  public const EXTENSION_FEED_ITEM_ERROR_INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 'INVALID_DOMESTIC_PHONE_NUMBER_FORMAT';
  /**
   * Vanity phone numbers (for example, those including letters) are not allowed
   * for call extensions.
   */
  public const EXTENSION_FEED_ITEM_ERROR_VANITY_PHONE_NUMBER_NOT_ALLOWED = 'VANITY_PHONE_NUMBER_NOT_ALLOWED';
  /**
   * Call conversion action provided for a call extension is invalid.
   */
  public const EXTENSION_FEED_ITEM_ERROR_INVALID_CALL_CONVERSION_ACTION = 'INVALID_CALL_CONVERSION_ACTION';
  /**
   * For a call extension, the customer is not on the allow-list for call
   * tracking.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CUSTOMER_NOT_ON_ALLOWLIST_FOR_CALLTRACKING = 'CUSTOMER_NOT_ON_ALLOWLIST_FOR_CALLTRACKING';
  /**
   * Call tracking is not supported for the given country for a call extension.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 'CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY';
  /**
   * Customer hasn't consented for call recording, which is required for
   * creating/updating call feed items. See https://support.google.com/google-
   * ads/answer/7412639.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 'CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED';
  /**
   * App id provided for an app extension is invalid.
   */
  public const EXTENSION_FEED_ITEM_ERROR_INVALID_APP_ID = 'INVALID_APP_ID';
  /**
   * Quotation marks present in the review text for a review extension.
   */
  public const EXTENSION_FEED_ITEM_ERROR_QUOTES_IN_REVIEW_EXTENSION_SNIPPET = 'QUOTES_IN_REVIEW_EXTENSION_SNIPPET';
  /**
   * Hyphen character present in the review text for a review extension.
   */
  public const EXTENSION_FEED_ITEM_ERROR_HYPHENS_IN_REVIEW_EXTENSION_SNIPPET = 'HYPHENS_IN_REVIEW_EXTENSION_SNIPPET';
  /**
   * A denylisted review source name or url was provided for a review extension.
   */
  public const EXTENSION_FEED_ITEM_ERROR_REVIEW_EXTENSION_SOURCE_INELIGIBLE = 'REVIEW_EXTENSION_SOURCE_INELIGIBLE';
  /**
   * Review source name should not be found in the review text.
   */
  public const EXTENSION_FEED_ITEM_ERROR_SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT = 'SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT';
  /**
   * Inconsistent currency codes.
   */
  public const EXTENSION_FEED_ITEM_ERROR_INCONSISTENT_CURRENCY_CODES = 'INCONSISTENT_CURRENCY_CODES';
  /**
   * Price extension cannot have duplicated headers.
   */
  public const EXTENSION_FEED_ITEM_ERROR_PRICE_EXTENSION_HAS_DUPLICATED_HEADERS = 'PRICE_EXTENSION_HAS_DUPLICATED_HEADERS';
  /**
   * Price item cannot have duplicated header and description.
   */
  public const EXTENSION_FEED_ITEM_ERROR_PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION = 'PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION';
  /**
   * Price extension has too few items.
   */
  public const EXTENSION_FEED_ITEM_ERROR_PRICE_EXTENSION_HAS_TOO_FEW_ITEMS = 'PRICE_EXTENSION_HAS_TOO_FEW_ITEMS';
  /**
   * Price extension has too many items.
   */
  public const EXTENSION_FEED_ITEM_ERROR_PRICE_EXTENSION_HAS_TOO_MANY_ITEMS = 'PRICE_EXTENSION_HAS_TOO_MANY_ITEMS';
  /**
   * The input value is not currently supported.
   */
  public const EXTENSION_FEED_ITEM_ERROR_UNSUPPORTED_VALUE = 'UNSUPPORTED_VALUE';
  /**
   * The input value is not currently supported in the selected language of an
   * extension.
   */
  public const EXTENSION_FEED_ITEM_ERROR_UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE = 'UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE';
  /**
   * Unknown or unsupported device preference.
   */
  public const EXTENSION_FEED_ITEM_ERROR_INVALID_DEVICE_PREFERENCE = 'INVALID_DEVICE_PREFERENCE';
  /**
   * Invalid feed item schedule end time (for example, endHour = 24 and
   * endMinute != 0).
   */
  public const EXTENSION_FEED_ITEM_ERROR_INVALID_SCHEDULE_END = 'INVALID_SCHEDULE_END';
  /**
   * Date time zone does not match the account's time zone.
   */
  public const EXTENSION_FEED_ITEM_ERROR_DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 'DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE';
  /**
   * Invalid structured snippet header.
   */
  public const EXTENSION_FEED_ITEM_ERROR_INVALID_SNIPPETS_HEADER = 'INVALID_SNIPPETS_HEADER';
  /**
   * Cannot operate on removed feed item.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CANNOT_OPERATE_ON_REMOVED_FEED_ITEM = 'CANNOT_OPERATE_ON_REMOVED_FEED_ITEM';
  /**
   * Phone number not supported when call tracking enabled for country.
   */
  public const EXTENSION_FEED_ITEM_ERROR_PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY = 'PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY';
  /**
   * Cannot set call_conversion_action while call_conversion_tracking_enabled is
   * set to true.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CONFLICTING_CALL_CONVERSION_SETTINGS = 'CONFLICTING_CALL_CONVERSION_SETTINGS';
  /**
   * The type of the input extension feed item doesn't match the existing
   * extension feed item.
   */
  public const EXTENSION_FEED_ITEM_ERROR_EXTENSION_TYPE_MISMATCH = 'EXTENSION_TYPE_MISMATCH';
  /**
   * The oneof field extension for example, subtype of extension feed item is
   * required.
   */
  public const EXTENSION_FEED_ITEM_ERROR_EXTENSION_SUBTYPE_REQUIRED = 'EXTENSION_SUBTYPE_REQUIRED';
  /**
   * The referenced feed item is not mapped to a supported extension type.
   */
  public const EXTENSION_FEED_ITEM_ERROR_EXTENSION_TYPE_UNSUPPORTED = 'EXTENSION_TYPE_UNSUPPORTED';
  /**
   * Cannot operate on a Feed with more than one active FeedMapping.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CANNOT_OPERATE_ON_FEED_WITH_MULTIPLE_MAPPINGS = 'CANNOT_OPERATE_ON_FEED_WITH_MULTIPLE_MAPPINGS';
  /**
   * Cannot operate on a Feed that has key attributes.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CANNOT_OPERATE_ON_FEED_WITH_KEY_ATTRIBUTES = 'CANNOT_OPERATE_ON_FEED_WITH_KEY_ATTRIBUTES';
  /**
   * Input price is not in a valid format.
   */
  public const EXTENSION_FEED_ITEM_ERROR_INVALID_PRICE_FORMAT = 'INVALID_PRICE_FORMAT';
  /**
   * The promotion time is invalid.
   */
  public const EXTENSION_FEED_ITEM_ERROR_PROMOTION_INVALID_TIME = 'PROMOTION_INVALID_TIME';
  /**
   * This field has too many decimal places specified.
   */
  public const EXTENSION_FEED_ITEM_ERROR_TOO_MANY_DECIMAL_PLACES_SPECIFIED = 'TOO_MANY_DECIMAL_PLACES_SPECIFIED';
  /**
   * Concrete sub type of ExtensionFeedItem is required for this operation.
   */
  public const EXTENSION_FEED_ITEM_ERROR_CONCRETE_EXTENSION_TYPE_REQUIRED = 'CONCRETE_EXTENSION_TYPE_REQUIRED';
  /**
   * Feed item schedule end time must be after start time.
   */
  public const EXTENSION_FEED_ITEM_ERROR_SCHEDULE_END_NOT_AFTER_START = 'SCHEDULE_END_NOT_AFTER_START';
  /**
   * Enum unspecified.
   */
  public const EXTENSION_SETTING_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const EXTENSION_SETTING_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * A platform restriction was provided without input extensions or existing
   * extensions.
   */
  public const EXTENSION_SETTING_ERROR_EXTENSIONS_REQUIRED = 'EXTENSIONS_REQUIRED';
  /**
   * The provided feed type does not correspond to the provided extensions.
   */
  public const EXTENSION_SETTING_ERROR_FEED_TYPE_EXTENSION_TYPE_MISMATCH = 'FEED_TYPE_EXTENSION_TYPE_MISMATCH';
  /**
   * The provided feed type cannot be used.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_FEED_TYPE = 'INVALID_FEED_TYPE';
  /**
   * The provided feed type cannot be used at the customer level.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_FEED_TYPE_FOR_CUSTOMER_EXTENSION_SETTING = 'INVALID_FEED_TYPE_FOR_CUSTOMER_EXTENSION_SETTING';
  /**
   * Cannot change a feed item field on a CREATE operation.
   */
  public const EXTENSION_SETTING_ERROR_CANNOT_CHANGE_FEED_ITEM_ON_CREATE = 'CANNOT_CHANGE_FEED_ITEM_ON_CREATE';
  /**
   * Cannot update an extension that is not already in this setting.
   */
  public const EXTENSION_SETTING_ERROR_CANNOT_UPDATE_NEWLY_CREATED_EXTENSION = 'CANNOT_UPDATE_NEWLY_CREATED_EXTENSION';
  /**
   * There is no existing AdGroupExtensionSetting for this type.
   */
  public const EXTENSION_SETTING_ERROR_NO_EXISTING_AD_GROUP_EXTENSION_SETTING_FOR_TYPE = 'NO_EXISTING_AD_GROUP_EXTENSION_SETTING_FOR_TYPE';
  /**
   * There is no existing CampaignExtensionSetting for this type.
   */
  public const EXTENSION_SETTING_ERROR_NO_EXISTING_CAMPAIGN_EXTENSION_SETTING_FOR_TYPE = 'NO_EXISTING_CAMPAIGN_EXTENSION_SETTING_FOR_TYPE';
  /**
   * There is no existing CustomerExtensionSetting for this type.
   */
  public const EXTENSION_SETTING_ERROR_NO_EXISTING_CUSTOMER_EXTENSION_SETTING_FOR_TYPE = 'NO_EXISTING_CUSTOMER_EXTENSION_SETTING_FOR_TYPE';
  /**
   * The AdGroupExtensionSetting already exists. UPDATE should be used to modify
   * the existing AdGroupExtensionSetting.
   */
  public const EXTENSION_SETTING_ERROR_AD_GROUP_EXTENSION_SETTING_ALREADY_EXISTS = 'AD_GROUP_EXTENSION_SETTING_ALREADY_EXISTS';
  /**
   * The CampaignExtensionSetting already exists. UPDATE should be used to
   * modify the existing CampaignExtensionSetting.
   */
  public const EXTENSION_SETTING_ERROR_CAMPAIGN_EXTENSION_SETTING_ALREADY_EXISTS = 'CAMPAIGN_EXTENSION_SETTING_ALREADY_EXISTS';
  /**
   * The CustomerExtensionSetting already exists. UPDATE should be used to
   * modify the existing CustomerExtensionSetting.
   */
  public const EXTENSION_SETTING_ERROR_CUSTOMER_EXTENSION_SETTING_ALREADY_EXISTS = 'CUSTOMER_EXTENSION_SETTING_ALREADY_EXISTS';
  /**
   * An active ad group feed already exists for this place holder type.
   */
  public const EXTENSION_SETTING_ERROR_AD_GROUP_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 'AD_GROUP_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE';
  /**
   * An active campaign feed already exists for this place holder type.
   */
  public const EXTENSION_SETTING_ERROR_CAMPAIGN_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 'CAMPAIGN_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE';
  /**
   * An active customer feed already exists for this place holder type.
   */
  public const EXTENSION_SETTING_ERROR_CUSTOMER_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 'CUSTOMER_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE';
  /**
   * Value is not within the accepted range.
   */
  public const EXTENSION_SETTING_ERROR_VALUE_OUT_OF_RANGE = 'VALUE_OUT_OF_RANGE';
  /**
   * Cannot simultaneously set specified field with final urls.
   */
  public const EXTENSION_SETTING_ERROR_CANNOT_SET_FIELD_WITH_FINAL_URLS = 'CANNOT_SET_FIELD_WITH_FINAL_URLS';
  /**
   * Must set field with final urls.
   */
  public const EXTENSION_SETTING_ERROR_FINAL_URLS_NOT_SET = 'FINAL_URLS_NOT_SET';
  /**
   * Phone number for a call extension is invalid.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_PHONE_NUMBER = 'INVALID_PHONE_NUMBER';
  /**
   * Phone number for a call extension is not supported for the given country
   * code.
   */
  public const EXTENSION_SETTING_ERROR_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 'PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY';
  /**
   * A carrier specific number in short format is not allowed for call
   * extensions.
   */
  public const EXTENSION_SETTING_ERROR_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 'CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED';
  /**
   * Premium rate numbers are not allowed for call extensions.
   */
  public const EXTENSION_SETTING_ERROR_PREMIUM_RATE_NUMBER_NOT_ALLOWED = 'PREMIUM_RATE_NUMBER_NOT_ALLOWED';
  /**
   * Phone number type for a call extension is not allowed.
   */
  public const EXTENSION_SETTING_ERROR_DISALLOWED_NUMBER_TYPE = 'DISALLOWED_NUMBER_TYPE';
  /**
   * Phone number for a call extension does not meet domestic format
   * requirements.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 'INVALID_DOMESTIC_PHONE_NUMBER_FORMAT';
  /**
   * Vanity phone numbers (for example, those including letters) are not allowed
   * for call extensions.
   */
  public const EXTENSION_SETTING_ERROR_VANITY_PHONE_NUMBER_NOT_ALLOWED = 'VANITY_PHONE_NUMBER_NOT_ALLOWED';
  /**
   * Country code provided for a call extension is invalid.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_COUNTRY_CODE = 'INVALID_COUNTRY_CODE';
  /**
   * Call conversion type id provided for a call extension is invalid.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_CALL_CONVERSION_TYPE_ID = 'INVALID_CALL_CONVERSION_TYPE_ID';
  /**
   * For a call extension, the customer is not on the allow-list for call
   * tracking.
   */
  public const EXTENSION_SETTING_ERROR_CUSTOMER_NOT_IN_ALLOWLIST_FOR_CALLTRACKING = 'CUSTOMER_NOT_IN_ALLOWLIST_FOR_CALLTRACKING';
  /**
   * Call tracking is not supported for the given country for a call extension.
   */
  public const EXTENSION_SETTING_ERROR_CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 'CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY';
  /**
   * App id provided for an app extension is invalid.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_APP_ID = 'INVALID_APP_ID';
  /**
   * Quotation marks present in the review text for a review extension.
   */
  public const EXTENSION_SETTING_ERROR_QUOTES_IN_REVIEW_EXTENSION_SNIPPET = 'QUOTES_IN_REVIEW_EXTENSION_SNIPPET';
  /**
   * Hyphen character present in the review text for a review extension.
   */
  public const EXTENSION_SETTING_ERROR_HYPHENS_IN_REVIEW_EXTENSION_SNIPPET = 'HYPHENS_IN_REVIEW_EXTENSION_SNIPPET';
  /**
   * A blocked review source name or url was provided for a review extension.
   */
  public const EXTENSION_SETTING_ERROR_REVIEW_EXTENSION_SOURCE_NOT_ELIGIBLE = 'REVIEW_EXTENSION_SOURCE_NOT_ELIGIBLE';
  /**
   * Review source name should not be found in the review text.
   */
  public const EXTENSION_SETTING_ERROR_SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT = 'SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT';
  /**
   * Field must be set.
   */
  public const EXTENSION_SETTING_ERROR_MISSING_FIELD = 'MISSING_FIELD';
  /**
   * Inconsistent currency codes.
   */
  public const EXTENSION_SETTING_ERROR_INCONSISTENT_CURRENCY_CODES = 'INCONSISTENT_CURRENCY_CODES';
  /**
   * Price extension cannot have duplicated headers.
   */
  public const EXTENSION_SETTING_ERROR_PRICE_EXTENSION_HAS_DUPLICATED_HEADERS = 'PRICE_EXTENSION_HAS_DUPLICATED_HEADERS';
  /**
   * Price item cannot have duplicated header and description.
   */
  public const EXTENSION_SETTING_ERROR_PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION = 'PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION';
  /**
   * Price extension has too few items
   */
  public const EXTENSION_SETTING_ERROR_PRICE_EXTENSION_HAS_TOO_FEW_ITEMS = 'PRICE_EXTENSION_HAS_TOO_FEW_ITEMS';
  /**
   * Price extension has too many items
   */
  public const EXTENSION_SETTING_ERROR_PRICE_EXTENSION_HAS_TOO_MANY_ITEMS = 'PRICE_EXTENSION_HAS_TOO_MANY_ITEMS';
  /**
   * The input value is not currently supported.
   */
  public const EXTENSION_SETTING_ERROR_UNSUPPORTED_VALUE = 'UNSUPPORTED_VALUE';
  /**
   * Unknown or unsupported device preference.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_DEVICE_PREFERENCE = 'INVALID_DEVICE_PREFERENCE';
  /**
   * Invalid feed item schedule end time (for example, endHour = 24 and
   * endMinute != 0).
   */
  public const EXTENSION_SETTING_ERROR_INVALID_SCHEDULE_END = 'INVALID_SCHEDULE_END';
  /**
   * Date time zone does not match the account's time zone.
   */
  public const EXTENSION_SETTING_ERROR_DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 'DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE';
  /**
   * Overlapping feed item schedule times (for example, 7-10AM and 8-11AM) are
   * not allowed.
   */
  public const EXTENSION_SETTING_ERROR_OVERLAPPING_SCHEDULES_NOT_ALLOWED = 'OVERLAPPING_SCHEDULES_NOT_ALLOWED';
  /**
   * Feed item schedule end time must be after start time.
   */
  public const EXTENSION_SETTING_ERROR_SCHEDULE_END_NOT_AFTER_START = 'SCHEDULE_END_NOT_AFTER_START';
  /**
   * There are too many feed item schedules per day.
   */
  public const EXTENSION_SETTING_ERROR_TOO_MANY_SCHEDULES_PER_DAY = 'TOO_MANY_SCHEDULES_PER_DAY';
  /**
   * Cannot edit the same extension feed item more than once in the same
   * request.
   */
  public const EXTENSION_SETTING_ERROR_DUPLICATE_EXTENSION_FEED_ITEM_EDIT = 'DUPLICATE_EXTENSION_FEED_ITEM_EDIT';
  /**
   * Invalid structured snippet header.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_SNIPPETS_HEADER = 'INVALID_SNIPPETS_HEADER';
  /**
   * Phone number with call tracking enabled is not supported for the specified
   * country.
   */
  public const EXTENSION_SETTING_ERROR_PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY = 'PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY';
  /**
   * The targeted adgroup must belong to the targeted campaign.
   */
  public const EXTENSION_SETTING_ERROR_CAMPAIGN_TARGETING_MISMATCH = 'CAMPAIGN_TARGETING_MISMATCH';
  /**
   * The feed used by the ExtensionSetting is removed and cannot be operated on.
   * Remove the ExtensionSetting to allow a new one to be created using an
   * active feed.
   */
  public const EXTENSION_SETTING_ERROR_CANNOT_OPERATE_ON_REMOVED_FEED = 'CANNOT_OPERATE_ON_REMOVED_FEED';
  /**
   * The ExtensionFeedItem type is required for this operation.
   */
  public const EXTENSION_SETTING_ERROR_EXTENSION_TYPE_REQUIRED = 'EXTENSION_TYPE_REQUIRED';
  /**
   * The matching function that links the extension feed to the customer,
   * campaign, or ad group is not compatible with the ExtensionSetting services.
   */
  public const EXTENSION_SETTING_ERROR_INCOMPATIBLE_UNDERLYING_MATCHING_FUNCTION = 'INCOMPATIBLE_UNDERLYING_MATCHING_FUNCTION';
  /**
   * Start date must be before end date.
   */
  public const EXTENSION_SETTING_ERROR_START_DATE_AFTER_END_DATE = 'START_DATE_AFTER_END_DATE';
  /**
   * Input price is not in a valid format.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_PRICE_FORMAT = 'INVALID_PRICE_FORMAT';
  /**
   * The promotion time is invalid.
   */
  public const EXTENSION_SETTING_ERROR_PROMOTION_INVALID_TIME = 'PROMOTION_INVALID_TIME';
  /**
   * Cannot set both percent discount and money discount fields.
   */
  public const EXTENSION_SETTING_ERROR_PROMOTION_CANNOT_SET_PERCENT_DISCOUNT_AND_MONEY_DISCOUNT = 'PROMOTION_CANNOT_SET_PERCENT_DISCOUNT_AND_MONEY_DISCOUNT';
  /**
   * Cannot set both promotion code and orders over amount fields.
   */
  public const EXTENSION_SETTING_ERROR_PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT = 'PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT';
  /**
   * This field has too many decimal places specified.
   */
  public const EXTENSION_SETTING_ERROR_TOO_MANY_DECIMAL_PLACES_SPECIFIED = 'TOO_MANY_DECIMAL_PLACES_SPECIFIED';
  /**
   * The language code is not valid.
   */
  public const EXTENSION_SETTING_ERROR_INVALID_LANGUAGE_CODE = 'INVALID_LANGUAGE_CODE';
  /**
   * The language is not supported.
   */
  public const EXTENSION_SETTING_ERROR_UNSUPPORTED_LANGUAGE = 'UNSUPPORTED_LANGUAGE';
  /**
   * Customer hasn't consented for call recording, which is required for
   * adding/updating call extensions. See https://support.google.com/google-
   * ads/answer/7412639.
   */
  public const EXTENSION_SETTING_ERROR_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 'CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED';
  /**
   * The UPDATE operation does not specify any fields other than the resource
   * name in the update mask.
   */
  public const EXTENSION_SETTING_ERROR_EXTENSION_SETTING_UPDATE_IS_A_NOOP = 'EXTENSION_SETTING_UPDATE_IS_A_NOOP';
  /**
   * The extension contains text which has been prohibited on policy grounds.
   */
  public const EXTENSION_SETTING_ERROR_DISALLOWED_TEXT = 'DISALLOWED_TEXT';
  /**
   * Enum unspecified.
   */
  public const FEED_ATTRIBUTE_REFERENCE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FEED_ATTRIBUTE_REFERENCE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * A feed referenced by ID has been removed.
   */
  public const FEED_ATTRIBUTE_REFERENCE_ERROR_CANNOT_REFERENCE_REMOVED_FEED = 'CANNOT_REFERENCE_REMOVED_FEED';
  /**
   * There is no enabled feed with the given name.
   */
  public const FEED_ATTRIBUTE_REFERENCE_ERROR_INVALID_FEED_NAME = 'INVALID_FEED_NAME';
  /**
   * There is no feed attribute in an enabled feed with the given name.
   */
  public const FEED_ATTRIBUTE_REFERENCE_ERROR_INVALID_FEED_ATTRIBUTE_NAME = 'INVALID_FEED_ATTRIBUTE_NAME';
  /**
   * Enum unspecified.
   */
  public const FEED_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FEED_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The names of the FeedAttributes must be unique.
   */
  public const FEED_ERROR_ATTRIBUTE_NAMES_NOT_UNIQUE = 'ATTRIBUTE_NAMES_NOT_UNIQUE';
  /**
   * The attribute list must be an exact copy of the existing list if the
   * attribute ID's are present.
   */
  public const FEED_ERROR_ATTRIBUTES_DO_NOT_MATCH_EXISTING_ATTRIBUTES = 'ATTRIBUTES_DO_NOT_MATCH_EXISTING_ATTRIBUTES';
  /**
   * Cannot specify USER origin for a system generated feed.
   */
  public const FEED_ERROR_CANNOT_SPECIFY_USER_ORIGIN_FOR_SYSTEM_FEED = 'CANNOT_SPECIFY_USER_ORIGIN_FOR_SYSTEM_FEED';
  /**
   * Cannot specify GOOGLE origin for a non-system generated feed.
   */
  public const FEED_ERROR_CANNOT_SPECIFY_GOOGLE_ORIGIN_FOR_NON_SYSTEM_FEED = 'CANNOT_SPECIFY_GOOGLE_ORIGIN_FOR_NON_SYSTEM_FEED';
  /**
   * Cannot specify feed attributes for system feed.
   */
  public const FEED_ERROR_CANNOT_SPECIFY_FEED_ATTRIBUTES_FOR_SYSTEM_FEED = 'CANNOT_SPECIFY_FEED_ATTRIBUTES_FOR_SYSTEM_FEED';
  /**
   * Cannot update FeedAttributes on feed with origin GOOGLE.
   */
  public const FEED_ERROR_CANNOT_UPDATE_FEED_ATTRIBUTES_WITH_ORIGIN_GOOGLE = 'CANNOT_UPDATE_FEED_ATTRIBUTES_WITH_ORIGIN_GOOGLE';
  /**
   * The given ID refers to a removed Feed. Removed Feeds are immutable.
   */
  public const FEED_ERROR_FEED_REMOVED = 'FEED_REMOVED';
  /**
   * The origin of the feed is not valid for the client.
   */
  public const FEED_ERROR_INVALID_ORIGIN_VALUE = 'INVALID_ORIGIN_VALUE';
  /**
   * A user can only create and modify feeds with USER origin.
   */
  public const FEED_ERROR_FEED_ORIGIN_IS_NOT_USER = 'FEED_ORIGIN_IS_NOT_USER';
  /**
   * Invalid auth token for the given email.
   */
  public const FEED_ERROR_INVALID_AUTH_TOKEN_FOR_EMAIL = 'INVALID_AUTH_TOKEN_FOR_EMAIL';
  /**
   * Invalid email specified.
   */
  public const FEED_ERROR_INVALID_EMAIL = 'INVALID_EMAIL';
  /**
   * Feed name matches that of another active Feed.
   */
  public const FEED_ERROR_DUPLICATE_FEED_NAME = 'DUPLICATE_FEED_NAME';
  /**
   * Name of feed is not allowed.
   */
  public const FEED_ERROR_INVALID_FEED_NAME = 'INVALID_FEED_NAME';
  /**
   * Missing OAuthInfo.
   */
  public const FEED_ERROR_MISSING_OAUTH_INFO = 'MISSING_OAUTH_INFO';
  /**
   * New FeedAttributes must not affect the unique key.
   */
  public const FEED_ERROR_NEW_ATTRIBUTE_CANNOT_BE_PART_OF_UNIQUE_KEY = 'NEW_ATTRIBUTE_CANNOT_BE_PART_OF_UNIQUE_KEY';
  /**
   * Too many FeedAttributes for a Feed.
   */
  public const FEED_ERROR_TOO_MANY_ATTRIBUTES = 'TOO_MANY_ATTRIBUTES';
  /**
   * The business account is not valid.
   */
  public const FEED_ERROR_INVALID_BUSINESS_ACCOUNT = 'INVALID_BUSINESS_ACCOUNT';
  /**
   * Business account cannot access Business Profile.
   */
  public const FEED_ERROR_BUSINESS_ACCOUNT_CANNOT_ACCESS_LOCATION_ACCOUNT = 'BUSINESS_ACCOUNT_CANNOT_ACCESS_LOCATION_ACCOUNT';
  /**
   * Invalid chain ID provided for affiliate location feed.
   */
  public const FEED_ERROR_INVALID_AFFILIATE_CHAIN_ID = 'INVALID_AFFILIATE_CHAIN_ID';
  /**
   * There is already a feed with the given system feed generation data.
   */
  public const FEED_ERROR_DUPLICATE_SYSTEM_FEED = 'DUPLICATE_SYSTEM_FEED';
  /**
   * An error occurred accessing Business Profile.
   */
  public const FEED_ERROR_GMB_ACCESS_ERROR = 'GMB_ACCESS_ERROR';
  /**
   * A customer cannot have both LOCATION and AFFILIATE_LOCATION feeds.
   */
  public const FEED_ERROR_CANNOT_HAVE_LOCATION_AND_AFFILIATE_LOCATION_FEEDS = 'CANNOT_HAVE_LOCATION_AND_AFFILIATE_LOCATION_FEEDS';
  /**
   * Feed-based extension is read-only for this extension type.
   */
  public const FEED_ERROR_LEGACY_EXTENSION_TYPE_READ_ONLY = 'LEGACY_EXTENSION_TYPE_READ_ONLY';
  /**
   * Enum unspecified.
   */
  public const FEED_ITEM_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FEED_ITEM_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Cannot convert the feed attribute value from string to its real type.
   */
  public const FEED_ITEM_ERROR_CANNOT_CONVERT_ATTRIBUTE_VALUE_FROM_STRING = 'CANNOT_CONVERT_ATTRIBUTE_VALUE_FROM_STRING';
  /**
   * Cannot operate on removed feed item.
   */
  public const FEED_ITEM_ERROR_CANNOT_OPERATE_ON_REMOVED_FEED_ITEM = 'CANNOT_OPERATE_ON_REMOVED_FEED_ITEM';
  /**
   * Date time zone does not match the account's time zone.
   */
  public const FEED_ITEM_ERROR_DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 'DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE';
  /**
   * Feed item with the key attributes could not be found.
   */
  public const FEED_ITEM_ERROR_KEY_ATTRIBUTES_NOT_FOUND = 'KEY_ATTRIBUTES_NOT_FOUND';
  /**
   * Url feed attribute value is not valid.
   */
  public const FEED_ITEM_ERROR_INVALID_URL = 'INVALID_URL';
  /**
   * Some key attributes are missing.
   */
  public const FEED_ITEM_ERROR_MISSING_KEY_ATTRIBUTES = 'MISSING_KEY_ATTRIBUTES';
  /**
   * Feed item has same key attributes as another feed item.
   */
  public const FEED_ITEM_ERROR_KEY_ATTRIBUTES_NOT_UNIQUE = 'KEY_ATTRIBUTES_NOT_UNIQUE';
  /**
   * Cannot modify key attributes on an existing feed item.
   */
  public const FEED_ITEM_ERROR_CANNOT_MODIFY_KEY_ATTRIBUTE_VALUE = 'CANNOT_MODIFY_KEY_ATTRIBUTE_VALUE';
  /**
   * The feed attribute value is too large.
   */
  public const FEED_ITEM_ERROR_SIZE_TOO_LARGE_FOR_MULTI_VALUE_ATTRIBUTE = 'SIZE_TOO_LARGE_FOR_MULTI_VALUE_ATTRIBUTE';
  /**
   * Feed is read only.
   */
  public const FEED_ITEM_ERROR_LEGACY_FEED_TYPE_READ_ONLY = 'LEGACY_FEED_TYPE_READ_ONLY';
  /**
   * Enum unspecified.
   */
  public const FEED_ITEM_SET_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FEED_ITEM_SET_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The given ID refers to a removed FeedItemSet.
   */
  public const FEED_ITEM_SET_ERROR_FEED_ITEM_SET_REMOVED = 'FEED_ITEM_SET_REMOVED';
  /**
   * The dynamic filter of a feed item set cannot be cleared on UPDATE if it
   * exists. A set is either static or dynamic once added, and that cannot
   * change.
   */
  public const FEED_ITEM_SET_ERROR_CANNOT_CLEAR_DYNAMIC_FILTER = 'CANNOT_CLEAR_DYNAMIC_FILTER';
  /**
   * The dynamic filter of a feed item set cannot be created on UPDATE if it
   * does not exist. A set is either static or dynamic once added, and that
   * cannot change.
   */
  public const FEED_ITEM_SET_ERROR_CANNOT_CREATE_DYNAMIC_FILTER = 'CANNOT_CREATE_DYNAMIC_FILTER';
  /**
   * FeedItemSets can only be made for location or affiliate location feeds.
   */
  public const FEED_ITEM_SET_ERROR_INVALID_FEED_TYPE = 'INVALID_FEED_TYPE';
  /**
   * FeedItemSets duplicate name. Name should be unique within an account.
   */
  public const FEED_ITEM_SET_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * The feed type of the parent Feed is not compatible with the type of dynamic
   * filter being set. For example, you can only set dynamic_location_set_filter
   * for LOCATION feed item sets.
   */
  public const FEED_ITEM_SET_ERROR_WRONG_DYNAMIC_FILTER_FOR_FEED_TYPE = 'WRONG_DYNAMIC_FILTER_FOR_FEED_TYPE';
  /**
   * Chain ID specified for AffiliateLocationFeedData is invalid.
   */
  public const FEED_ITEM_SET_ERROR_DYNAMIC_FILTER_INVALID_CHAIN_IDS = 'DYNAMIC_FILTER_INVALID_CHAIN_IDS';
  /**
   * Enum unspecified.
   */
  public const FEED_ITEM_SET_LINK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FEED_ITEM_SET_LINK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The feed IDs of the FeedItemSet and FeedItem do not match. Only FeedItems
   * in a given Feed can be linked to a FeedItemSet in that Feed.
   */
  public const FEED_ITEM_SET_LINK_ERROR_FEED_ID_MISMATCH = 'FEED_ID_MISMATCH';
  /**
   * Cannot add or remove links to a dynamic set.
   */
  public const FEED_ITEM_SET_LINK_ERROR_NO_MUTATE_ALLOWED_FOR_DYNAMIC_SET = 'NO_MUTATE_ALLOWED_FOR_DYNAMIC_SET';
  /**
   * Enum unspecified.
   */
  public const FEED_ITEM_TARGET_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FEED_ITEM_TARGET_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * On CREATE, the FeedItemTarget must have a populated field in the oneof
   * target.
   */
  public const FEED_ITEM_TARGET_ERROR_MUST_SET_TARGET_ONEOF_ON_CREATE = 'MUST_SET_TARGET_ONEOF_ON_CREATE';
  /**
   * The specified feed item target already exists, so it cannot be added.
   */
  public const FEED_ITEM_TARGET_ERROR_FEED_ITEM_TARGET_ALREADY_EXISTS = 'FEED_ITEM_TARGET_ALREADY_EXISTS';
  /**
   * The schedules for a given feed item cannot overlap.
   */
  public const FEED_ITEM_TARGET_ERROR_FEED_ITEM_SCHEDULES_CANNOT_OVERLAP = 'FEED_ITEM_SCHEDULES_CANNOT_OVERLAP';
  /**
   * Too many targets of a given type were added for a single feed item.
   */
  public const FEED_ITEM_TARGET_ERROR_TARGET_LIMIT_EXCEEDED_FOR_GIVEN_TYPE = 'TARGET_LIMIT_EXCEEDED_FOR_GIVEN_TYPE';
  /**
   * Too many AdSchedules are enabled for the feed item for the given day.
   */
  public const FEED_ITEM_TARGET_ERROR_TOO_MANY_SCHEDULES_PER_DAY = 'TOO_MANY_SCHEDULES_PER_DAY';
  /**
   * A feed item may either have an enabled campaign target or an enabled ad
   * group target.
   */
  public const FEED_ITEM_TARGET_ERROR_CANNOT_HAVE_ENABLED_CAMPAIGN_AND_ENABLED_AD_GROUP_TARGETS = 'CANNOT_HAVE_ENABLED_CAMPAIGN_AND_ENABLED_AD_GROUP_TARGETS';
  /**
   * Duplicate ad schedules aren't allowed.
   */
  public const FEED_ITEM_TARGET_ERROR_DUPLICATE_AD_SCHEDULE = 'DUPLICATE_AD_SCHEDULE';
  /**
   * Duplicate keywords aren't allowed.
   */
  public const FEED_ITEM_TARGET_ERROR_DUPLICATE_KEYWORD = 'DUPLICATE_KEYWORD';
  /**
   * No value has been specified.
   */
  public const FEED_ITEM_VALIDATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const FEED_ITEM_VALIDATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * String is too short.
   */
  public const FEED_ITEM_VALIDATION_ERROR_STRING_TOO_SHORT = 'STRING_TOO_SHORT';
  /**
   * String is too long.
   */
  public const FEED_ITEM_VALIDATION_ERROR_STRING_TOO_LONG = 'STRING_TOO_LONG';
  /**
   * Value is not provided.
   */
  public const FEED_ITEM_VALIDATION_ERROR_VALUE_NOT_SPECIFIED = 'VALUE_NOT_SPECIFIED';
  /**
   * Phone number format is invalid for region.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 'INVALID_DOMESTIC_PHONE_NUMBER_FORMAT';
  /**
   * String does not represent a phone number.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_PHONE_NUMBER = 'INVALID_PHONE_NUMBER';
  /**
   * Phone number format is not compatible with country code.
   */
  public const FEED_ITEM_VALIDATION_ERROR_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 'PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY';
  /**
   * Premium rate number is not allowed.
   */
  public const FEED_ITEM_VALIDATION_ERROR_PREMIUM_RATE_NUMBER_NOT_ALLOWED = 'PREMIUM_RATE_NUMBER_NOT_ALLOWED';
  /**
   * Phone number type is not allowed.
   */
  public const FEED_ITEM_VALIDATION_ERROR_DISALLOWED_NUMBER_TYPE = 'DISALLOWED_NUMBER_TYPE';
  /**
   * Specified value is outside of the valid range.
   */
  public const FEED_ITEM_VALIDATION_ERROR_VALUE_OUT_OF_RANGE = 'VALUE_OUT_OF_RANGE';
  /**
   * Call tracking is not supported in the selected country.
   */
  public const FEED_ITEM_VALIDATION_ERROR_CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 'CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY';
  /**
   * Customer is not on the allow-list for call tracking.
   */
  public const FEED_ITEM_VALIDATION_ERROR_CUSTOMER_NOT_IN_ALLOWLIST_FOR_CALLTRACKING = 'CUSTOMER_NOT_IN_ALLOWLIST_FOR_CALLTRACKING';
  /**
   * Country code is invalid.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_COUNTRY_CODE = 'INVALID_COUNTRY_CODE';
  /**
   * The specified mobile app id is invalid.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_APP_ID = 'INVALID_APP_ID';
  /**
   * Some required field attributes are missing.
   */
  public const FEED_ITEM_VALIDATION_ERROR_MISSING_ATTRIBUTES_FOR_FIELDS = 'MISSING_ATTRIBUTES_FOR_FIELDS';
  /**
   * Invalid email button type for email extension.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_TYPE_ID = 'INVALID_TYPE_ID';
  /**
   * Email address is invalid.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_EMAIL_ADDRESS = 'INVALID_EMAIL_ADDRESS';
  /**
   * The HTTPS URL in email extension is invalid.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_HTTPS_URL = 'INVALID_HTTPS_URL';
  /**
   * Delivery address is missing from email extension.
   */
  public const FEED_ITEM_VALIDATION_ERROR_MISSING_DELIVERY_ADDRESS = 'MISSING_DELIVERY_ADDRESS';
  /**
   * FeedItem scheduling start date comes after end date.
   */
  public const FEED_ITEM_VALIDATION_ERROR_START_DATE_AFTER_END_DATE = 'START_DATE_AFTER_END_DATE';
  /**
   * FeedItem scheduling start time is missing.
   */
  public const FEED_ITEM_VALIDATION_ERROR_MISSING_FEED_ITEM_START_TIME = 'MISSING_FEED_ITEM_START_TIME';
  /**
   * FeedItem scheduling end time is missing.
   */
  public const FEED_ITEM_VALIDATION_ERROR_MISSING_FEED_ITEM_END_TIME = 'MISSING_FEED_ITEM_END_TIME';
  /**
   * Cannot compute system attributes on a FeedItem that has no FeedItemId.
   */
  public const FEED_ITEM_VALIDATION_ERROR_MISSING_FEED_ITEM_ID = 'MISSING_FEED_ITEM_ID';
  /**
   * Call extension vanity phone numbers are not supported.
   */
  public const FEED_ITEM_VALIDATION_ERROR_VANITY_PHONE_NUMBER_NOT_ALLOWED = 'VANITY_PHONE_NUMBER_NOT_ALLOWED';
  /**
   * Invalid review text.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_REVIEW_EXTENSION_SNIPPET = 'INVALID_REVIEW_EXTENSION_SNIPPET';
  /**
   * Invalid format for numeric value in ad parameter.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_NUMBER_FORMAT = 'INVALID_NUMBER_FORMAT';
  /**
   * Invalid format for date value in ad parameter.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_DATE_FORMAT = 'INVALID_DATE_FORMAT';
  /**
   * Invalid format for price value in ad parameter.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_PRICE_FORMAT = 'INVALID_PRICE_FORMAT';
  /**
   * Unrecognized type given for value in ad parameter.
   */
  public const FEED_ITEM_VALIDATION_ERROR_UNKNOWN_PLACEHOLDER_FIELD = 'UNKNOWN_PLACEHOLDER_FIELD';
  /**
   * Enhanced sitelinks must have both description lines specified.
   */
  public const FEED_ITEM_VALIDATION_ERROR_MISSING_ENHANCED_SITELINK_DESCRIPTION_LINE = 'MISSING_ENHANCED_SITELINK_DESCRIPTION_LINE';
  /**
   * Review source is ineligible.
   */
  public const FEED_ITEM_VALIDATION_ERROR_REVIEW_EXTENSION_SOURCE_INELIGIBLE = 'REVIEW_EXTENSION_SOURCE_INELIGIBLE';
  /**
   * Review text cannot contain hyphens or dashes.
   */
  public const FEED_ITEM_VALIDATION_ERROR_HYPHENS_IN_REVIEW_EXTENSION_SNIPPET = 'HYPHENS_IN_REVIEW_EXTENSION_SNIPPET';
  /**
   * Review text cannot contain double quote characters.
   */
  public const FEED_ITEM_VALIDATION_ERROR_DOUBLE_QUOTES_IN_REVIEW_EXTENSION_SNIPPET = 'DOUBLE_QUOTES_IN_REVIEW_EXTENSION_SNIPPET';
  /**
   * Review text cannot contain quote characters.
   */
  public const FEED_ITEM_VALIDATION_ERROR_QUOTES_IN_REVIEW_EXTENSION_SNIPPET = 'QUOTES_IN_REVIEW_EXTENSION_SNIPPET';
  /**
   * Parameters are encoded in the wrong format.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_FORM_ENCODED_PARAMS = 'INVALID_FORM_ENCODED_PARAMS';
  /**
   * URL parameter name must contain only letters, numbers, underscores, and
   * dashes.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_URL_PARAMETER_NAME = 'INVALID_URL_PARAMETER_NAME';
  /**
   * Cannot find address location.
   */
  public const FEED_ITEM_VALIDATION_ERROR_NO_GEOCODING_RESULT = 'NO_GEOCODING_RESULT';
  /**
   * Review extension text has source name.
   */
  public const FEED_ITEM_VALIDATION_ERROR_SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT = 'SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT';
  /**
   * Some phone numbers can be shorter than usual. Some of these short numbers
   * are carrier-specific, and we disallow those in ad extensions because they
   * will not be available to all users.
   */
  public const FEED_ITEM_VALIDATION_ERROR_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 'CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED';
  /**
   * Triggered when a request references a placeholder field id that does not
   * exist.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_PLACEHOLDER_FIELD_ID = 'INVALID_PLACEHOLDER_FIELD_ID';
  /**
   * URL contains invalid ValueTrack tags or format.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_URL_TAG = 'INVALID_URL_TAG';
  /**
   * Provided list exceeds acceptable size.
   */
  public const FEED_ITEM_VALIDATION_ERROR_LIST_TOO_LONG = 'LIST_TOO_LONG';
  /**
   * Certain combinations of attributes aren't allowed to be specified in the
   * same feed item.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_ATTRIBUTES_COMBINATION = 'INVALID_ATTRIBUTES_COMBINATION';
  /**
   * An attribute has the same value repeatedly.
   */
  public const FEED_ITEM_VALIDATION_ERROR_DUPLICATE_VALUES = 'DUPLICATE_VALUES';
  /**
   * Advertisers can link a conversion action with a phone number to indicate
   * that sufficiently long calls forwarded to that phone number should be
   * counted as conversions of the specified type. This is an error message
   * indicating that the conversion action specified is invalid (for example,
   * the conversion action does not exist within the appropriate Google Ads
   * account, or it is a type of conversion not appropriate to phone call
   * conversions).
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_CALL_CONVERSION_ACTION_ID = 'INVALID_CALL_CONVERSION_ACTION_ID';
  /**
   * Tracking template requires final url to be set.
   */
  public const FEED_ITEM_VALIDATION_ERROR_CANNOT_SET_WITHOUT_FINAL_URLS = 'CANNOT_SET_WITHOUT_FINAL_URLS';
  /**
   * An app id was provided that doesn't exist in the given app store.
   */
  public const FEED_ITEM_VALIDATION_ERROR_APP_ID_DOESNT_EXIST_IN_APP_STORE = 'APP_ID_DOESNT_EXIST_IN_APP_STORE';
  /**
   * Invalid U2 final url.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_FINAL_URL = 'INVALID_FINAL_URL';
  /**
   * Invalid U2 tracking url.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_TRACKING_URL = 'INVALID_TRACKING_URL';
  /**
   * Final URL should start from App download URL.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL = 'INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL';
  /**
   * List provided is too short.
   */
  public const FEED_ITEM_VALIDATION_ERROR_LIST_TOO_SHORT = 'LIST_TOO_SHORT';
  /**
   * User Action field has invalid value.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_USER_ACTION = 'INVALID_USER_ACTION';
  /**
   * Type field has invalid value.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_TYPE_NAME = 'INVALID_TYPE_NAME';
  /**
   * Change status for event is invalid.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_EVENT_CHANGE_STATUS = 'INVALID_EVENT_CHANGE_STATUS';
  /**
   * The header of a structured snippets extension is not one of the valid
   * headers.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_SNIPPETS_HEADER = 'INVALID_SNIPPETS_HEADER';
  /**
   * Android app link is not formatted correctly
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_ANDROID_APP_LINK = 'INVALID_ANDROID_APP_LINK';
  /**
   * Phone number incompatible with call tracking for country.
   */
  public const FEED_ITEM_VALIDATION_ERROR_NUMBER_TYPE_WITH_CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 'NUMBER_TYPE_WITH_CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY';
  /**
   * The input is identical to a reserved keyword
   */
  public const FEED_ITEM_VALIDATION_ERROR_RESERVED_KEYWORD_OTHER = 'RESERVED_KEYWORD_OTHER';
  /**
   * Each option label in the message extension must be unique.
   */
  public const FEED_ITEM_VALIDATION_ERROR_DUPLICATE_OPTION_LABELS = 'DUPLICATE_OPTION_LABELS';
  /**
   * Each option prefill in the message extension must be unique.
   */
  public const FEED_ITEM_VALIDATION_ERROR_DUPLICATE_OPTION_PREFILLS = 'DUPLICATE_OPTION_PREFILLS';
  /**
   * In message extensions, the number of optional labels and optional prefills
   * must be the same.
   */
  public const FEED_ITEM_VALIDATION_ERROR_UNEQUAL_LIST_LENGTHS = 'UNEQUAL_LIST_LENGTHS';
  /**
   * All currency codes in an ad extension must be the same.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INCONSISTENT_CURRENCY_CODES = 'INCONSISTENT_CURRENCY_CODES';
  /**
   * Headers in price extension are not unique.
   */
  public const FEED_ITEM_VALIDATION_ERROR_PRICE_EXTENSION_HAS_DUPLICATED_HEADERS = 'PRICE_EXTENSION_HAS_DUPLICATED_HEADERS';
  /**
   * Header and description in an item are the same.
   */
  public const FEED_ITEM_VALIDATION_ERROR_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION = 'ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION';
  /**
   * Price extension has too few items.
   */
  public const FEED_ITEM_VALIDATION_ERROR_PRICE_EXTENSION_HAS_TOO_FEW_ITEMS = 'PRICE_EXTENSION_HAS_TOO_FEW_ITEMS';
  /**
   * The given value is not supported.
   */
  public const FEED_ITEM_VALIDATION_ERROR_UNSUPPORTED_VALUE = 'UNSUPPORTED_VALUE';
  /**
   * Invalid final mobile url.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_FINAL_MOBILE_URL = 'INVALID_FINAL_MOBILE_URL';
  /**
   * The given string value of Label contains invalid characters
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_KEYWORDLESS_AD_RULE_LABEL = 'INVALID_KEYWORDLESS_AD_RULE_LABEL';
  /**
   * The given URL contains value track parameters.
   */
  public const FEED_ITEM_VALIDATION_ERROR_VALUE_TRACK_PARAMETER_NOT_SUPPORTED = 'VALUE_TRACK_PARAMETER_NOT_SUPPORTED';
  /**
   * The given value is not supported in the selected language of an extension.
   */
  public const FEED_ITEM_VALIDATION_ERROR_UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE = 'UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE';
  /**
   * The iOS app link is not formatted correctly.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_IOS_APP_LINK = 'INVALID_IOS_APP_LINK';
  /**
   * iOS app link or iOS app store id is missing.
   */
  public const FEED_ITEM_VALIDATION_ERROR_MISSING_IOS_APP_LINK_OR_IOS_APP_STORE_ID = 'MISSING_IOS_APP_LINK_OR_IOS_APP_STORE_ID';
  /**
   * Promotion time is invalid.
   */
  public const FEED_ITEM_VALIDATION_ERROR_PROMOTION_INVALID_TIME = 'PROMOTION_INVALID_TIME';
  /**
   * Both the percent off and money amount off fields are set.
   */
  public const FEED_ITEM_VALIDATION_ERROR_PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF = 'PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF';
  /**
   * Both the promotion code and orders over amount fields are set.
   */
  public const FEED_ITEM_VALIDATION_ERROR_PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT = 'PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT';
  /**
   * Too many decimal places are specified.
   */
  public const FEED_ITEM_VALIDATION_ERROR_TOO_MANY_DECIMAL_PLACES_SPECIFIED = 'TOO_MANY_DECIMAL_PLACES_SPECIFIED';
  /**
   * Ad Customizers are present and not allowed.
   */
  public const FEED_ITEM_VALIDATION_ERROR_AD_CUSTOMIZERS_NOT_ALLOWED = 'AD_CUSTOMIZERS_NOT_ALLOWED';
  /**
   * Language code is not valid.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_LANGUAGE_CODE = 'INVALID_LANGUAGE_CODE';
  /**
   * Language is not supported.
   */
  public const FEED_ITEM_VALIDATION_ERROR_UNSUPPORTED_LANGUAGE = 'UNSUPPORTED_LANGUAGE';
  /**
   * IF Function is present and not allowed.
   */
  public const FEED_ITEM_VALIDATION_ERROR_IF_FUNCTION_NOT_ALLOWED = 'IF_FUNCTION_NOT_ALLOWED';
  /**
   * Final url suffix is not valid.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_FINAL_URL_SUFFIX = 'INVALID_FINAL_URL_SUFFIX';
  /**
   * Final url suffix contains an invalid tag.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_TAG_IN_FINAL_URL_SUFFIX = 'INVALID_TAG_IN_FINAL_URL_SUFFIX';
  /**
   * Final url suffix is formatted incorrectly.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_FINAL_URL_SUFFIX_FORMAT = 'INVALID_FINAL_URL_SUFFIX_FORMAT';
  /**
   * Consent for call recording, which is required for the use of call
   * extensions, was not provided by the advertiser. See
   * https://support.google.com/google-ads/answer/7412639.
   */
  public const FEED_ITEM_VALIDATION_ERROR_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 'CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED';
  /**
   * Multiple message delivery options are set.
   */
  public const FEED_ITEM_VALIDATION_ERROR_ONLY_ONE_DELIVERY_OPTION_IS_ALLOWED = 'ONLY_ONE_DELIVERY_OPTION_IS_ALLOWED';
  /**
   * No message delivery option is set.
   */
  public const FEED_ITEM_VALIDATION_ERROR_NO_DELIVERY_OPTION_IS_SET = 'NO_DELIVERY_OPTION_IS_SET';
  /**
   * String value of conversion reporting state field is not valid.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_CONVERSION_REPORTING_STATE = 'INVALID_CONVERSION_REPORTING_STATE';
  /**
   * Image size is not right.
   */
  public const FEED_ITEM_VALIDATION_ERROR_IMAGE_SIZE_WRONG = 'IMAGE_SIZE_WRONG';
  /**
   * Email delivery is not supported in the country specified in the country
   * code field.
   */
  public const FEED_ITEM_VALIDATION_ERROR_EMAIL_DELIVERY_NOT_AVAILABLE_IN_COUNTRY = 'EMAIL_DELIVERY_NOT_AVAILABLE_IN_COUNTRY';
  /**
   * Auto reply is not supported in the country specified in the country code
   * field.
   */
  public const FEED_ITEM_VALIDATION_ERROR_AUTO_REPLY_NOT_AVAILABLE_IN_COUNTRY = 'AUTO_REPLY_NOT_AVAILABLE_IN_COUNTRY';
  /**
   * Invalid value specified for latitude.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_LATITUDE_VALUE = 'INVALID_LATITUDE_VALUE';
  /**
   * Invalid value specified for longitude.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_LONGITUDE_VALUE = 'INVALID_LONGITUDE_VALUE';
  /**
   * Too many label fields provided.
   */
  public const FEED_ITEM_VALIDATION_ERROR_TOO_MANY_LABELS = 'TOO_MANY_LABELS';
  /**
   * Invalid image url.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_IMAGE_URL = 'INVALID_IMAGE_URL';
  /**
   * Latitude value is missing.
   */
  public const FEED_ITEM_VALIDATION_ERROR_MISSING_LATITUDE_VALUE = 'MISSING_LATITUDE_VALUE';
  /**
   * Longitude value is missing.
   */
  public const FEED_ITEM_VALIDATION_ERROR_MISSING_LONGITUDE_VALUE = 'MISSING_LONGITUDE_VALUE';
  /**
   * Unable to find address.
   */
  public const FEED_ITEM_VALIDATION_ERROR_ADDRESS_NOT_FOUND = 'ADDRESS_NOT_FOUND';
  /**
   * Cannot target provided address.
   */
  public const FEED_ITEM_VALIDATION_ERROR_ADDRESS_NOT_TARGETABLE = 'ADDRESS_NOT_TARGETABLE';
  /**
   * The specified asset ID does not exist.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INVALID_ASSET_ID = 'INVALID_ASSET_ID';
  /**
   * The asset type cannot be set for the field.
   */
  public const FEED_ITEM_VALIDATION_ERROR_INCOMPATIBLE_ASSET_TYPE = 'INCOMPATIBLE_ASSET_TYPE';
  /**
   * The image has unexpected size.
   */
  public const FEED_ITEM_VALIDATION_ERROR_IMAGE_ERROR_UNEXPECTED_SIZE = 'IMAGE_ERROR_UNEXPECTED_SIZE';
  /**
   * The image aspect ratio is not allowed.
   */
  public const FEED_ITEM_VALIDATION_ERROR_IMAGE_ERROR_ASPECT_RATIO_NOT_ALLOWED = 'IMAGE_ERROR_ASPECT_RATIO_NOT_ALLOWED';
  /**
   * The image file is too large.
   */
  public const FEED_ITEM_VALIDATION_ERROR_IMAGE_ERROR_FILE_TOO_LARGE = 'IMAGE_ERROR_FILE_TOO_LARGE';
  /**
   * The image format is unsupported.
   */
  public const FEED_ITEM_VALIDATION_ERROR_IMAGE_ERROR_FORMAT_NOT_ALLOWED = 'IMAGE_ERROR_FORMAT_NOT_ALLOWED';
  /**
   * Image violates constraints without more details.
   */
  public const FEED_ITEM_VALIDATION_ERROR_IMAGE_ERROR_CONSTRAINTS_VIOLATED = 'IMAGE_ERROR_CONSTRAINTS_VIOLATED';
  /**
   * An error occurred when validating image.
   */
  public const FEED_ITEM_VALIDATION_ERROR_IMAGE_ERROR_SERVER_ERROR = 'IMAGE_ERROR_SERVER_ERROR';
  /**
   * Enum unspecified.
   */
  public const FEED_MAPPING_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FEED_MAPPING_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The given placeholder field does not exist.
   */
  public const FEED_MAPPING_ERROR_INVALID_PLACEHOLDER_FIELD = 'INVALID_PLACEHOLDER_FIELD';
  /**
   * The given criterion field does not exist.
   */
  public const FEED_MAPPING_ERROR_INVALID_CRITERION_FIELD = 'INVALID_CRITERION_FIELD';
  /**
   * The given placeholder type does not exist.
   */
  public const FEED_MAPPING_ERROR_INVALID_PLACEHOLDER_TYPE = 'INVALID_PLACEHOLDER_TYPE';
  /**
   * The given criterion type does not exist.
   */
  public const FEED_MAPPING_ERROR_INVALID_CRITERION_TYPE = 'INVALID_CRITERION_TYPE';
  /**
   * A feed mapping must contain at least one attribute field mapping.
   */
  public const FEED_MAPPING_ERROR_NO_ATTRIBUTE_FIELD_MAPPINGS = 'NO_ATTRIBUTE_FIELD_MAPPINGS';
  /**
   * The type of the feed attribute referenced in the attribute field mapping
   * must match the type of the placeholder field.
   */
  public const FEED_MAPPING_ERROR_FEED_ATTRIBUTE_TYPE_MISMATCH = 'FEED_ATTRIBUTE_TYPE_MISMATCH';
  /**
   * A feed mapping for a system generated feed cannot be operated on.
   */
  public const FEED_MAPPING_ERROR_CANNOT_OPERATE_ON_MAPPINGS_FOR_SYSTEM_GENERATED_FEED = 'CANNOT_OPERATE_ON_MAPPINGS_FOR_SYSTEM_GENERATED_FEED';
  /**
   * Only one feed mapping for a placeholder type is allowed per feed or
   * customer (depending on the placeholder type).
   */
  public const FEED_MAPPING_ERROR_MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_TYPE = 'MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_TYPE';
  /**
   * Only one feed mapping for a criterion type is allowed per customer.
   */
  public const FEED_MAPPING_ERROR_MULTIPLE_MAPPINGS_FOR_CRITERION_TYPE = 'MULTIPLE_MAPPINGS_FOR_CRITERION_TYPE';
  /**
   * Only one feed attribute mapping for a placeholder field is allowed
   * (depending on the placeholder type).
   */
  public const FEED_MAPPING_ERROR_MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_FIELD = 'MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_FIELD';
  /**
   * Only one feed attribute mapping for a criterion field is allowed (depending
   * on the criterion type).
   */
  public const FEED_MAPPING_ERROR_MULTIPLE_MAPPINGS_FOR_CRITERION_FIELD = 'MULTIPLE_MAPPINGS_FOR_CRITERION_FIELD';
  /**
   * This feed mapping may not contain any explicit attribute field mappings.
   */
  public const FEED_MAPPING_ERROR_UNEXPECTED_ATTRIBUTE_FIELD_MAPPINGS = 'UNEXPECTED_ATTRIBUTE_FIELD_MAPPINGS';
  /**
   * Location placeholder feed mappings can only be created for Places feeds.
   */
  public const FEED_MAPPING_ERROR_LOCATION_PLACEHOLDER_ONLY_FOR_PLACES_FEEDS = 'LOCATION_PLACEHOLDER_ONLY_FOR_PLACES_FEEDS';
  /**
   * Mappings for typed feeds cannot be modified.
   */
  public const FEED_MAPPING_ERROR_CANNOT_MODIFY_MAPPINGS_FOR_TYPED_FEED = 'CANNOT_MODIFY_MAPPINGS_FOR_TYPED_FEED';
  /**
   * The given placeholder type can only be mapped to system generated feeds.
   */
  public const FEED_MAPPING_ERROR_INVALID_PLACEHOLDER_TYPE_FOR_NON_SYSTEM_GENERATED_FEED = 'INVALID_PLACEHOLDER_TYPE_FOR_NON_SYSTEM_GENERATED_FEED';
  /**
   * The given placeholder type cannot be mapped to a system generated feed with
   * the given type.
   */
  public const FEED_MAPPING_ERROR_INVALID_PLACEHOLDER_TYPE_FOR_SYSTEM_GENERATED_FEED_TYPE = 'INVALID_PLACEHOLDER_TYPE_FOR_SYSTEM_GENERATED_FEED_TYPE';
  /**
   * The "field" oneof was not set in an AttributeFieldMapping.
   */
  public const FEED_MAPPING_ERROR_ATTRIBUTE_FIELD_MAPPING_MISSING_FIELD = 'ATTRIBUTE_FIELD_MAPPING_MISSING_FIELD';
  /**
   * Feed is read only.
   */
  public const FEED_MAPPING_ERROR_LEGACY_FEED_TYPE_READ_ONLY = 'LEGACY_FEED_TYPE_READ_ONLY';
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
  public const FIELD_MASK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FIELD_MASK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The field mask must be provided for update operations.
   */
  public const FIELD_MASK_ERROR_FIELD_MASK_MISSING = 'FIELD_MASK_MISSING';
  /**
   * The field mask must be empty for create and remove operations.
   */
  public const FIELD_MASK_ERROR_FIELD_MASK_NOT_ALLOWED = 'FIELD_MASK_NOT_ALLOWED';
  /**
   * The field mask contained an invalid field.
   */
  public const FIELD_MASK_ERROR_FIELD_NOT_FOUND = 'FIELD_NOT_FOUND';
  /**
   * The field mask updated a field with subfields. Fields with subfields may be
   * cleared, but not updated. To fix this, the field mask should select all the
   * subfields of the invalid field.
   */
  public const FIELD_MASK_ERROR_FIELD_HAS_SUBFIELDS = 'FIELD_HAS_SUBFIELDS';
  /**
   * Name unspecified.
   */
  public const FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * At least one required filter has to be applied in the query.
   */
  public const FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_MISSING_REQUIRED_FILTER = 'MISSING_REQUIRED_FILTER';
  /**
   * Advertising channel type filter is required.
   */
  public const FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_REQUIRES_ADVERTISING_CHANNEL_TYPE_FILTER = 'REQUIRES_ADVERTISING_CHANNEL_TYPE_FILTER';
  /**
   * Advertising channel type filter has an invalid value.
   */
  public const FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_INVALID_ADVERTISING_CHANNEL_TYPE_IN_FILTER = 'INVALID_ADVERTISING_CHANNEL_TYPE_IN_FILTER';
  /**
   * Asset group cannot be selected in the query.
   */
  public const FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_CANNOT_SELECT_ASSET_GROUP = 'CANNOT_SELECT_ASSET_GROUP';
  /**
   * Ad group cannot be selected in the query.
   */
  public const FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_CANNOT_SELECT_AD_GROUP = 'CANNOT_SELECT_AD_GROUP';
  /**
   * A selected field/resource requires filtering by a single resource.
   */
  public const FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_REQUIRES_FILTER_BY_SINGLE_RESOURCE = 'REQUIRES_FILTER_BY_SINGLE_RESOURCE';
  /**
   * Both ad group and asset group cannot be selected in the query.
   */
  public const FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_CANNOT_SELECT_BOTH_AD_GROUP_AND_ASSET_GROUP = 'CANNOT_SELECT_BOTH_AD_GROUP_AND_ASSET_GROUP';
  /**
   * Both ad group and asset group cannot be filtered in the query.
   */
  public const FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_CANNOT_FILTER_BY_BOTH_AD_GROUP_AND_ASSET_GROUP = 'CANNOT_FILTER_BY_BOTH_AD_GROUP_AND_ASSET_GROUP';
  /**
   * Enum unspecified.
   */
  public const FUNCTION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FUNCTION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The format of the function is not recognized as a supported function
   * format.
   */
  public const FUNCTION_ERROR_INVALID_FUNCTION_FORMAT = 'INVALID_FUNCTION_FORMAT';
  /**
   * Operand data types do not match.
   */
  public const FUNCTION_ERROR_DATA_TYPE_MISMATCH = 'DATA_TYPE_MISMATCH';
  /**
   * The operands cannot be used together in a conjunction.
   */
  public const FUNCTION_ERROR_INVALID_CONJUNCTION_OPERANDS = 'INVALID_CONJUNCTION_OPERANDS';
  /**
   * Invalid numer of Operands.
   */
  public const FUNCTION_ERROR_INVALID_NUMBER_OF_OPERANDS = 'INVALID_NUMBER_OF_OPERANDS';
  /**
   * Operand Type not supported.
   */
  public const FUNCTION_ERROR_INVALID_OPERAND_TYPE = 'INVALID_OPERAND_TYPE';
  /**
   * Operator not supported.
   */
  public const FUNCTION_ERROR_INVALID_OPERATOR = 'INVALID_OPERATOR';
  /**
   * Request context type not supported.
   */
  public const FUNCTION_ERROR_INVALID_REQUEST_CONTEXT_TYPE = 'INVALID_REQUEST_CONTEXT_TYPE';
  /**
   * The matching function is not allowed for call placeholders
   */
  public const FUNCTION_ERROR_INVALID_FUNCTION_FOR_CALL_PLACEHOLDER = 'INVALID_FUNCTION_FOR_CALL_PLACEHOLDER';
  /**
   * The matching function is not allowed for the specified placeholder
   */
  public const FUNCTION_ERROR_INVALID_FUNCTION_FOR_PLACEHOLDER = 'INVALID_FUNCTION_FOR_PLACEHOLDER';
  /**
   * Invalid operand.
   */
  public const FUNCTION_ERROR_INVALID_OPERAND = 'INVALID_OPERAND';
  /**
   * Missing value for the constant operand.
   */
  public const FUNCTION_ERROR_MISSING_CONSTANT_OPERAND_VALUE = 'MISSING_CONSTANT_OPERAND_VALUE';
  /**
   * The value of the constant operand is invalid.
   */
  public const FUNCTION_ERROR_INVALID_CONSTANT_OPERAND_VALUE = 'INVALID_CONSTANT_OPERAND_VALUE';
  /**
   * Invalid function nesting.
   */
  public const FUNCTION_ERROR_INVALID_NESTING = 'INVALID_NESTING';
  /**
   * The Feed ID was different from another Feed ID in the same function.
   */
  public const FUNCTION_ERROR_MULTIPLE_FEED_IDS_NOT_SUPPORTED = 'MULTIPLE_FEED_IDS_NOT_SUPPORTED';
  /**
   * The matching function is invalid for use with a feed with a fixed schema.
   */
  public const FUNCTION_ERROR_INVALID_FUNCTION_FOR_FEED_WITH_FIXED_SCHEMA = 'INVALID_FUNCTION_FOR_FEED_WITH_FIXED_SCHEMA';
  /**
   * Invalid attribute name.
   */
  public const FUNCTION_ERROR_INVALID_ATTRIBUTE_NAME = 'INVALID_ATTRIBUTE_NAME';
  /**
   * Enum unspecified.
   */
  public const FUNCTION_PARSING_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const FUNCTION_PARSING_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Unexpected end of function string.
   */
  public const FUNCTION_PARSING_ERROR_NO_MORE_INPUT = 'NO_MORE_INPUT';
  /**
   * Could not find an expected character.
   */
  public const FUNCTION_PARSING_ERROR_EXPECTED_CHARACTER = 'EXPECTED_CHARACTER';
  /**
   * Unexpected separator character.
   */
  public const FUNCTION_PARSING_ERROR_UNEXPECTED_SEPARATOR = 'UNEXPECTED_SEPARATOR';
  /**
   * Unmatched left bracket or parenthesis.
   */
  public const FUNCTION_PARSING_ERROR_UNMATCHED_LEFT_BRACKET = 'UNMATCHED_LEFT_BRACKET';
  /**
   * Unmatched right bracket or parenthesis.
   */
  public const FUNCTION_PARSING_ERROR_UNMATCHED_RIGHT_BRACKET = 'UNMATCHED_RIGHT_BRACKET';
  /**
   * Functions are nested too deeply.
   */
  public const FUNCTION_PARSING_ERROR_TOO_MANY_NESTED_FUNCTIONS = 'TOO_MANY_NESTED_FUNCTIONS';
  /**
   * Missing right-hand-side operand.
   */
  public const FUNCTION_PARSING_ERROR_MISSING_RIGHT_HAND_OPERAND = 'MISSING_RIGHT_HAND_OPERAND';
  /**
   * Invalid operator/function name.
   */
  public const FUNCTION_PARSING_ERROR_INVALID_OPERATOR_NAME = 'INVALID_OPERATOR_NAME';
  /**
   * Feed attribute operand's argument is not an integer.
   */
  public const FUNCTION_PARSING_ERROR_FEED_ATTRIBUTE_OPERAND_ARGUMENT_NOT_INTEGER = 'FEED_ATTRIBUTE_OPERAND_ARGUMENT_NOT_INTEGER';
  /**
   * Missing function operands.
   */
  public const FUNCTION_PARSING_ERROR_NO_OPERANDS = 'NO_OPERANDS';
  /**
   * Function had too many operands.
   */
  public const FUNCTION_PARSING_ERROR_TOO_MANY_OPERANDS = 'TOO_MANY_OPERANDS';
  /**
   * Enum unspecified.
   */
  public const GEO_TARGET_CONSTANT_SUGGESTION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const GEO_TARGET_CONSTANT_SUGGESTION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * A location name cannot be greater than 300 characters.
   */
  public const GEO_TARGET_CONSTANT_SUGGESTION_ERROR_LOCATION_NAME_SIZE_LIMIT = 'LOCATION_NAME_SIZE_LIMIT';
  /**
   * At most 25 location names can be specified in a SuggestGeoTargetConstants
   * method.
   */
  public const GEO_TARGET_CONSTANT_SUGGESTION_ERROR_LOCATION_NAME_LIMIT = 'LOCATION_NAME_LIMIT';
  /**
   * The country code is invalid.
   */
  public const GEO_TARGET_CONSTANT_SUGGESTION_ERROR_INVALID_COUNTRY_CODE = 'INVALID_COUNTRY_CODE';
  /**
   * Geo target constant resource names or location names must be provided in
   * the request.
   */
  public const GEO_TARGET_CONSTANT_SUGGESTION_ERROR_REQUEST_PARAMETERS_UNSET = 'REQUEST_PARAMETERS_UNSET';
  /**
   * Enum unspecified.
   */
  public const GOAL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const GOAL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Retention goal already exists.
   */
  public const GOAL_ERROR_RETENTION_GOAL_ALREADY_EXISTS = 'RETENTION_GOAL_ALREADY_EXISTS';
  /**
   * When using customer lifecycle optimization goal, if high lifetime value is
   * present then value should be present.
   */
  public const GOAL_ERROR_HIGH_LIFETIME_VALUE_PRESENT_BUT_VALUE_ABSENT = 'HIGH_LIFETIME_VALUE_PRESENT_BUT_VALUE_ABSENT';
  /**
   * When using customer lifecycle optimization goal, high lifetime value should
   * be greater than value.
   */
  public const GOAL_ERROR_HIGH_LIFETIME_VALUE_LESS_THAN_OR_EQUAL_TO_VALUE = 'HIGH_LIFETIME_VALUE_LESS_THAN_OR_EQUAL_TO_VALUE';
  /**
   * Only Google Ads account can have customer lifecycle optimization goal.
   */
  public const GOAL_ERROR_CUSTOMER_LIFECYCLE_OPTIMIZATION_ACCOUNT_TYPE_NOT_ALLOWED = 'CUSTOMER_LIFECYCLE_OPTIMIZATION_ACCOUNT_TYPE_NOT_ALLOWED';
  /**
   * Enum unspecified.
   */
  public const HEADER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const HEADER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The login customer ID could not be validated.
   */
  public const HEADER_ERROR_INVALID_LOGIN_CUSTOMER_ID = 'INVALID_LOGIN_CUSTOMER_ID';
  /**
   * The linked customer ID could not be validated.
   */
  public const HEADER_ERROR_INVALID_LINKED_CUSTOMER_ID = 'INVALID_LINKED_CUSTOMER_ID';
  /**
   * Enum unspecified.
   */
  public const ID_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const ID_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * ID not found
   */
  public const ID_ERROR_NOT_FOUND = 'NOT_FOUND';
  /**
   * Enum unspecified.
   */
  public const IDENTITY_VERIFICATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const IDENTITY_VERIFICATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * No effective billing linked to this customer.
   */
  public const IDENTITY_VERIFICATION_ERROR_NO_EFFECTIVE_BILLING = 'NO_EFFECTIVE_BILLING';
  /**
   * Customer is not on monthly invoicing.
   */
  public const IDENTITY_VERIFICATION_ERROR_BILLING_NOT_ON_MONTHLY_INVOICING = 'BILLING_NOT_ON_MONTHLY_INVOICING';
  /**
   * Verification for this program type was already started.
   */
  public const IDENTITY_VERIFICATION_ERROR_VERIFICATION_ALREADY_STARTED = 'VERIFICATION_ALREADY_STARTED';
  /**
   * Enum unspecified.
   */
  public const IMAGE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const IMAGE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The image is not valid.
   */
  public const IMAGE_ERROR_INVALID_IMAGE = 'INVALID_IMAGE';
  /**
   * The image could not be stored.
   */
  public const IMAGE_ERROR_STORAGE_ERROR = 'STORAGE_ERROR';
  /**
   * There was a problem with the request.
   */
  public const IMAGE_ERROR_BAD_REQUEST = 'BAD_REQUEST';
  /**
   * The image is not of legal dimensions.
   */
  public const IMAGE_ERROR_UNEXPECTED_SIZE = 'UNEXPECTED_SIZE';
  /**
   * Animated image are not permitted.
   */
  public const IMAGE_ERROR_ANIMATED_NOT_ALLOWED = 'ANIMATED_NOT_ALLOWED';
  /**
   * Animation is too long.
   */
  public const IMAGE_ERROR_ANIMATION_TOO_LONG = 'ANIMATION_TOO_LONG';
  /**
   * There was an error on the server.
   */
  public const IMAGE_ERROR_SERVER_ERROR = 'SERVER_ERROR';
  /**
   * Image cannot be in CMYK color format.
   */
  public const IMAGE_ERROR_CMYK_JPEG_NOT_ALLOWED = 'CMYK_JPEG_NOT_ALLOWED';
  /**
   * Flash images are not permitted.
   */
  public const IMAGE_ERROR_FLASH_NOT_ALLOWED = 'FLASH_NOT_ALLOWED';
  /**
   * Flash images must support clickTag.
   */
  public const IMAGE_ERROR_FLASH_WITHOUT_CLICKTAG = 'FLASH_WITHOUT_CLICKTAG';
  /**
   * A flash error has occurred after fixing the click tag.
   */
  public const IMAGE_ERROR_FLASH_ERROR_AFTER_FIXING_CLICK_TAG = 'FLASH_ERROR_AFTER_FIXING_CLICK_TAG';
  /**
   * Unacceptable visual effects.
   */
  public const IMAGE_ERROR_ANIMATED_VISUAL_EFFECT = 'ANIMATED_VISUAL_EFFECT';
  /**
   * There was a problem with the flash image.
   */
  public const IMAGE_ERROR_FLASH_ERROR = 'FLASH_ERROR';
  /**
   * Incorrect image layout.
   */
  public const IMAGE_ERROR_LAYOUT_PROBLEM = 'LAYOUT_PROBLEM';
  /**
   * There was a problem reading the image file.
   */
  public const IMAGE_ERROR_PROBLEM_READING_IMAGE_FILE = 'PROBLEM_READING_IMAGE_FILE';
  /**
   * There was an error storing the image.
   */
  public const IMAGE_ERROR_ERROR_STORING_IMAGE = 'ERROR_STORING_IMAGE';
  /**
   * The aspect ratio of the image is not allowed.
   */
  public const IMAGE_ERROR_ASPECT_RATIO_NOT_ALLOWED = 'ASPECT_RATIO_NOT_ALLOWED';
  /**
   * Flash cannot have network objects.
   */
  public const IMAGE_ERROR_FLASH_HAS_NETWORK_OBJECTS = 'FLASH_HAS_NETWORK_OBJECTS';
  /**
   * Flash cannot have network methods.
   */
  public const IMAGE_ERROR_FLASH_HAS_NETWORK_METHODS = 'FLASH_HAS_NETWORK_METHODS';
  /**
   * Flash cannot have a Url.
   */
  public const IMAGE_ERROR_FLASH_HAS_URL = 'FLASH_HAS_URL';
  /**
   * Flash cannot use mouse tracking.
   */
  public const IMAGE_ERROR_FLASH_HAS_MOUSE_TRACKING = 'FLASH_HAS_MOUSE_TRACKING';
  /**
   * Flash cannot have a random number.
   */
  public const IMAGE_ERROR_FLASH_HAS_RANDOM_NUM = 'FLASH_HAS_RANDOM_NUM';
  /**
   * Ad click target cannot be '_self'.
   */
  public const IMAGE_ERROR_FLASH_SELF_TARGETS = 'FLASH_SELF_TARGETS';
  /**
   * GetUrl method should only use '_blank'.
   */
  public const IMAGE_ERROR_FLASH_BAD_GETURL_TARGET = 'FLASH_BAD_GETURL_TARGET';
  /**
   * Flash version is not supported.
   */
  public const IMAGE_ERROR_FLASH_VERSION_NOT_SUPPORTED = 'FLASH_VERSION_NOT_SUPPORTED';
  /**
   * Flash movies need to have hard coded click URL or clickTAG
   */
  public const IMAGE_ERROR_FLASH_WITHOUT_HARD_CODED_CLICK_URL = 'FLASH_WITHOUT_HARD_CODED_CLICK_URL';
  /**
   * Uploaded flash file is corrupted.
   */
  public const IMAGE_ERROR_INVALID_FLASH_FILE = 'INVALID_FLASH_FILE';
  /**
   * Uploaded flash file can be parsed, but the click tag can not be fixed
   * properly.
   */
  public const IMAGE_ERROR_FAILED_TO_FIX_CLICK_TAG_IN_FLASH = 'FAILED_TO_FIX_CLICK_TAG_IN_FLASH';
  /**
   * Flash movie accesses network resources
   */
  public const IMAGE_ERROR_FLASH_ACCESSES_NETWORK_RESOURCES = 'FLASH_ACCESSES_NETWORK_RESOURCES';
  /**
   * Flash movie attempts to call external javascript code
   */
  public const IMAGE_ERROR_FLASH_EXTERNAL_JS_CALL = 'FLASH_EXTERNAL_JS_CALL';
  /**
   * Flash movie attempts to call flash system commands
   */
  public const IMAGE_ERROR_FLASH_EXTERNAL_FS_CALL = 'FLASH_EXTERNAL_FS_CALL';
  /**
   * Image file is too large.
   */
  public const IMAGE_ERROR_FILE_TOO_LARGE = 'FILE_TOO_LARGE';
  /**
   * Image data is too large.
   */
  public const IMAGE_ERROR_IMAGE_DATA_TOO_LARGE = 'IMAGE_DATA_TOO_LARGE';
  /**
   * Error while processing the image.
   */
  public const IMAGE_ERROR_IMAGE_PROCESSING_ERROR = 'IMAGE_PROCESSING_ERROR';
  /**
   * Image is too small.
   */
  public const IMAGE_ERROR_IMAGE_TOO_SMALL = 'IMAGE_TOO_SMALL';
  /**
   * Input was invalid.
   */
  public const IMAGE_ERROR_INVALID_INPUT = 'INVALID_INPUT';
  /**
   * There was a problem reading the image file.
   */
  public const IMAGE_ERROR_PROBLEM_READING_FILE = 'PROBLEM_READING_FILE';
  /**
   * Image constraints are violated, but details like ASPECT_RATIO_NOT_ALLOWED
   * can't be provided. This happens when asset spec contains more than one
   * constraint and different criteria of different constraints are violated.
   */
  public const IMAGE_ERROR_IMAGE_CONSTRAINTS_VIOLATED = 'IMAGE_CONSTRAINTS_VIOLATED';
  /**
   * Image format is not allowed.
   */
  public const IMAGE_ERROR_FORMAT_NOT_ALLOWED = 'FORMAT_NOT_ALLOWED';
  /**
   * Enum unspecified.
   */
  public const INCENTIVE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const INCENTIVE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The incentive ID is either invalid or not supported for the given country.
   */
  public const INCENTIVE_ERROR_INVALID_INCENTIVE_ID = 'INVALID_INCENTIVE_ID';
  /**
   * Enum unspecified.
   */
  public const INTERNAL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const INTERNAL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * API encountered unexpected internal error.
   */
  public const INTERNAL_ERROR_INTERNAL_ERROR = 'INTERNAL_ERROR';
  /**
   * The intended error code doesn't exist in specified API version. It will be
   * released in a future API version.
   */
  public const INTERNAL_ERROR_ERROR_CODE_NOT_PUBLISHED = 'ERROR_CODE_NOT_PUBLISHED';
  /**
   * API encountered an unexpected transient error. The user should retry their
   * request in these cases.
   */
  public const INTERNAL_ERROR_TRANSIENT_ERROR = 'TRANSIENT_ERROR';
  /**
   * The request took longer than a deadline.
   */
  public const INTERNAL_ERROR_DEADLINE_EXCEEDED = 'DEADLINE_EXCEEDED';
  /**
   * Enum unspecified.
   */
  public const INVALID_PARAMETER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const INVALID_PARAMETER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The specified currency code is invalid.
   */
  public const INVALID_PARAMETER_ERROR_INVALID_CURRENCY_CODE = 'INVALID_CURRENCY_CODE';
  /**
   * Enum unspecified.
   */
  public const INVOICE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const INVOICE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Cannot request invoices issued before 2019-01-01.
   */
  public const INVOICE_ERROR_YEAR_MONTH_TOO_OLD = 'YEAR_MONTH_TOO_OLD';
  /**
   * Cannot request invoices for customer who doesn't receive invoices.
   */
  public const INVOICE_ERROR_NOT_INVOICED_CUSTOMER = 'NOT_INVOICED_CUSTOMER';
  /**
   * Cannot request invoices for a non approved billing setup.
   */
  public const INVOICE_ERROR_BILLING_SETUP_NOT_APPROVED = 'BILLING_SETUP_NOT_APPROVED';
  /**
   * Cannot request invoices for a billing setup that is not on monthly
   * invoicing.
   */
  public const INVOICE_ERROR_BILLING_SETUP_NOT_ON_MONTHLY_INVOICING = 'BILLING_SETUP_NOT_ON_MONTHLY_INVOICING';
  /**
   * Cannot request invoices for a non serving customer.
   */
  public const INVOICE_ERROR_NON_SERVING_CUSTOMER = 'NON_SERVING_CUSTOMER';
  /**
   * Enum unspecified.
   */
  public const KEYWORD_PLAN_AD_GROUP_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const KEYWORD_PLAN_AD_GROUP_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The keyword plan ad group name is missing, empty, longer than allowed limit
   * or contains invalid chars.
   */
  public const KEYWORD_PLAN_AD_GROUP_ERROR_INVALID_NAME = 'INVALID_NAME';
  /**
   * The keyword plan ad group name is duplicate to an existing keyword plan
   * AdGroup name or other keyword plan AdGroup name in the request.
   */
  public const KEYWORD_PLAN_AD_GROUP_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * Enum unspecified.
   */
  public const KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * A keyword or negative keyword has invalid match type.
   */
  public const KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_INVALID_KEYWORD_MATCH_TYPE = 'INVALID_KEYWORD_MATCH_TYPE';
  /**
   * A keyword or negative keyword with same text and match type already exists.
   */
  public const KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_DUPLICATE_KEYWORD = 'DUPLICATE_KEYWORD';
  /**
   * Keyword or negative keyword text exceeds the allowed limit.
   */
  public const KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_KEYWORD_TEXT_TOO_LONG = 'KEYWORD_TEXT_TOO_LONG';
  /**
   * Keyword or negative keyword text has invalid characters or symbols.
   */
  public const KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_KEYWORD_HAS_INVALID_CHARS = 'KEYWORD_HAS_INVALID_CHARS';
  /**
   * Keyword or negative keyword text has too many words.
   */
  public const KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_KEYWORD_HAS_TOO_MANY_WORDS = 'KEYWORD_HAS_TOO_MANY_WORDS';
  /**
   * Keyword or negative keyword has invalid text.
   */
  public const KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_INVALID_KEYWORD_TEXT = 'INVALID_KEYWORD_TEXT';
  /**
   * Cpc Bid set for negative keyword.
   */
  public const KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_NEGATIVE_KEYWORD_HAS_CPC_BID = 'NEGATIVE_KEYWORD_HAS_CPC_BID';
  /**
   * New broad match modifier (BMM) KpAdGroupKeywords are not allowed.
   */
  public const KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_NEW_BMM_KEYWORDS_NOT_ALLOWED = 'NEW_BMM_KEYWORDS_NOT_ALLOWED';
  /**
   * Enum unspecified.
   */
  public const KEYWORD_PLAN_CAMPAIGN_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const KEYWORD_PLAN_CAMPAIGN_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * A keyword plan campaign name is missing, empty, longer than allowed limit
   * or contains invalid chars.
   */
  public const KEYWORD_PLAN_CAMPAIGN_ERROR_INVALID_NAME = 'INVALID_NAME';
  /**
   * A keyword plan campaign contains one or more untargetable languages.
   */
  public const KEYWORD_PLAN_CAMPAIGN_ERROR_INVALID_LANGUAGES = 'INVALID_LANGUAGES';
  /**
   * A keyword plan campaign contains one or more invalid geo targets.
   */
  public const KEYWORD_PLAN_CAMPAIGN_ERROR_INVALID_GEOS = 'INVALID_GEOS';
  /**
   * The keyword plan campaign name is duplicate to an existing keyword plan
   * campaign name or other keyword plan campaign name in the request.
   */
  public const KEYWORD_PLAN_CAMPAIGN_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * The number of geo targets in the keyword plan campaign exceeds limits.
   */
  public const KEYWORD_PLAN_CAMPAIGN_ERROR_MAX_GEOS_EXCEEDED = 'MAX_GEOS_EXCEEDED';
  /**
   * The number of languages in the keyword plan campaign exceeds limits.
   */
  public const KEYWORD_PLAN_CAMPAIGN_ERROR_MAX_LANGUAGES_EXCEEDED = 'MAX_LANGUAGES_EXCEEDED';
  /**
   * Enum unspecified.
   */
  public const KEYWORD_PLAN_CAMPAIGN_KEYWORD_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const KEYWORD_PLAN_CAMPAIGN_KEYWORD_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Keyword plan campaign keyword is positive.
   */
  public const KEYWORD_PLAN_CAMPAIGN_KEYWORD_ERROR_CAMPAIGN_KEYWORD_IS_POSITIVE = 'CAMPAIGN_KEYWORD_IS_POSITIVE';
  /**
   * Enum unspecified.
   */
  public const KEYWORD_PLAN_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const KEYWORD_PLAN_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The plan's bid multiplier value is outside the valid range.
   */
  public const KEYWORD_PLAN_ERROR_BID_MULTIPLIER_OUT_OF_RANGE = 'BID_MULTIPLIER_OUT_OF_RANGE';
  /**
   * The plan's bid value is too high.
   */
  public const KEYWORD_PLAN_ERROR_BID_TOO_HIGH = 'BID_TOO_HIGH';
  /**
   * The plan's bid value is too low.
   */
  public const KEYWORD_PLAN_ERROR_BID_TOO_LOW = 'BID_TOO_LOW';
  /**
   * The plan's cpc bid is not a multiple of the minimum billable unit.
   */
  public const KEYWORD_PLAN_ERROR_BID_TOO_MANY_FRACTIONAL_DIGITS = 'BID_TOO_MANY_FRACTIONAL_DIGITS';
  /**
   * The plan's daily budget value is too low.
   */
  public const KEYWORD_PLAN_ERROR_DAILY_BUDGET_TOO_LOW = 'DAILY_BUDGET_TOO_LOW';
  /**
   * The plan's daily budget is not a multiple of the minimum billable unit.
   */
  public const KEYWORD_PLAN_ERROR_DAILY_BUDGET_TOO_MANY_FRACTIONAL_DIGITS = 'DAILY_BUDGET_TOO_MANY_FRACTIONAL_DIGITS';
  /**
   * The input has an invalid value.
   */
  public const KEYWORD_PLAN_ERROR_INVALID_VALUE = 'INVALID_VALUE';
  /**
   * The plan has no keyword.
   */
  public const KEYWORD_PLAN_ERROR_KEYWORD_PLAN_HAS_NO_KEYWORDS = 'KEYWORD_PLAN_HAS_NO_KEYWORDS';
  /**
   * The plan is not enabled and API cannot provide mutation, forecast or stats.
   */
  public const KEYWORD_PLAN_ERROR_KEYWORD_PLAN_NOT_ENABLED = 'KEYWORD_PLAN_NOT_ENABLED';
  /**
   * The requested plan cannot be found for providing forecast or stats.
   */
  public const KEYWORD_PLAN_ERROR_KEYWORD_PLAN_NOT_FOUND = 'KEYWORD_PLAN_NOT_FOUND';
  /**
   * The plan is missing a cpc bid.
   */
  public const KEYWORD_PLAN_ERROR_MISSING_BID = 'MISSING_BID';
  /**
   * The plan is missing required forecast_period field.
   */
  public const KEYWORD_PLAN_ERROR_MISSING_FORECAST_PERIOD = 'MISSING_FORECAST_PERIOD';
  /**
   * The plan's forecast_period has invalid forecast date range.
   */
  public const KEYWORD_PLAN_ERROR_INVALID_FORECAST_DATE_RANGE = 'INVALID_FORECAST_DATE_RANGE';
  /**
   * The plan's name is invalid.
   */
  public const KEYWORD_PLAN_ERROR_INVALID_NAME = 'INVALID_NAME';
  /**
   * Enum unspecified.
   */
  public const KEYWORD_PLAN_IDEA_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const KEYWORD_PLAN_IDEA_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Error when crawling the input URL.
   */
  public const KEYWORD_PLAN_IDEA_ERROR_URL_CRAWL_ERROR = 'URL_CRAWL_ERROR';
  /**
   * The input has an invalid value.
   */
  public const KEYWORD_PLAN_IDEA_ERROR_INVALID_VALUE = 'INVALID_VALUE';
  /**
   * Enum unspecified.
   */
  public const LABEL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const LABEL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * An inactive label cannot be applied.
   */
  public const LABEL_ERROR_CANNOT_APPLY_INACTIVE_LABEL = 'CANNOT_APPLY_INACTIVE_LABEL';
  /**
   * A label cannot be applied to a disabled ad group criterion.
   */
  public const LABEL_ERROR_CANNOT_APPLY_LABEL_TO_DISABLED_AD_GROUP_CRITERION = 'CANNOT_APPLY_LABEL_TO_DISABLED_AD_GROUP_CRITERION';
  /**
   * A label cannot be applied to a negative ad group criterion.
   */
  public const LABEL_ERROR_CANNOT_APPLY_LABEL_TO_NEGATIVE_AD_GROUP_CRITERION = 'CANNOT_APPLY_LABEL_TO_NEGATIVE_AD_GROUP_CRITERION';
  /**
   * Cannot apply more than 50 labels per resource.
   */
  public const LABEL_ERROR_EXCEEDED_LABEL_LIMIT_PER_TYPE = 'EXCEEDED_LABEL_LIMIT_PER_TYPE';
  /**
   * Labels from a manager account cannot be applied to campaign, ad group, ad
   * group ad, or ad group criterion resources.
   */
  public const LABEL_ERROR_INVALID_RESOURCE_FOR_MANAGER_LABEL = 'INVALID_RESOURCE_FOR_MANAGER_LABEL';
  /**
   * Label names must be unique.
   */
  public const LABEL_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * Label names cannot be empty.
   */
  public const LABEL_ERROR_INVALID_LABEL_NAME = 'INVALID_LABEL_NAME';
  /**
   * Labels cannot be applied to a draft.
   */
  public const LABEL_ERROR_CANNOT_ATTACH_LABEL_TO_DRAFT = 'CANNOT_ATTACH_LABEL_TO_DRAFT';
  /**
   * Labels not from a manager account cannot be applied to the customer
   * resource.
   */
  public const LABEL_ERROR_CANNOT_ATTACH_NON_MANAGER_LABEL_TO_CUSTOMER = 'CANNOT_ATTACH_NON_MANAGER_LABEL_TO_CUSTOMER';
  /**
   * Enum unspecified.
   */
  public const LANGUAGE_CODE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const LANGUAGE_CODE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The input language code is not recognized.
   */
  public const LANGUAGE_CODE_ERROR_LANGUAGE_CODE_NOT_FOUND = 'LANGUAGE_CODE_NOT_FOUND';
  /**
   * The language code is not supported.
   */
  public const LANGUAGE_CODE_ERROR_INVALID_LANGUAGE_CODE = 'INVALID_LANGUAGE_CODE';
  /**
   * Enum unspecified.
   */
  public const LIST_OPERATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const LIST_OPERATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Field required in value is missing.
   */
  public const LIST_OPERATION_ERROR_REQUIRED_FIELD_MISSING = 'REQUIRED_FIELD_MISSING';
  /**
   * Duplicate or identical value is sent in multiple list operations.
   */
  public const LIST_OPERATION_ERROR_DUPLICATE_VALUES = 'DUPLICATE_VALUES';
  /**
   * Enum unspecified.
   */
  public const MANAGER_LINK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const MANAGER_LINK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The manager and client have incompatible account types.
   */
  public const MANAGER_LINK_ERROR_ACCOUNTS_NOT_COMPATIBLE_FOR_LINKING = 'ACCOUNTS_NOT_COMPATIBLE_FOR_LINKING';
  /**
   * Client is already linked to too many managers.
   */
  public const MANAGER_LINK_ERROR_TOO_MANY_MANAGERS = 'TOO_MANY_MANAGERS';
  /**
   * Manager has too many pending invitations.
   */
  public const MANAGER_LINK_ERROR_TOO_MANY_INVITES = 'TOO_MANY_INVITES';
  /**
   * Client is already invited by this manager.
   */
  public const MANAGER_LINK_ERROR_ALREADY_INVITED_BY_THIS_MANAGER = 'ALREADY_INVITED_BY_THIS_MANAGER';
  /**
   * The client is already managed by this manager.
   */
  public const MANAGER_LINK_ERROR_ALREADY_MANAGED_BY_THIS_MANAGER = 'ALREADY_MANAGED_BY_THIS_MANAGER';
  /**
   * Client is already managed in hierarchy.
   */
  public const MANAGER_LINK_ERROR_ALREADY_MANAGED_IN_HIERARCHY = 'ALREADY_MANAGED_IN_HIERARCHY';
  /**
   * Manager and sub-manager to be linked have duplicate client.
   */
  public const MANAGER_LINK_ERROR_DUPLICATE_CHILD_FOUND = 'DUPLICATE_CHILD_FOUND';
  /**
   * Client has no active user that can access the client account.
   */
  public const MANAGER_LINK_ERROR_CLIENT_HAS_NO_ADMIN_USER = 'CLIENT_HAS_NO_ADMIN_USER';
  /**
   * Adding this link would exceed the maximum hierarchy depth.
   */
  public const MANAGER_LINK_ERROR_MAX_DEPTH_EXCEEDED = 'MAX_DEPTH_EXCEEDED';
  /**
   * Adding this link will create a cycle.
   */
  public const MANAGER_LINK_ERROR_CYCLE_NOT_ALLOWED = 'CYCLE_NOT_ALLOWED';
  /**
   * Manager account has the maximum number of linked clients.
   */
  public const MANAGER_LINK_ERROR_TOO_MANY_ACCOUNTS = 'TOO_MANY_ACCOUNTS';
  /**
   * Parent manager account has the maximum number of linked clients.
   */
  public const MANAGER_LINK_ERROR_TOO_MANY_ACCOUNTS_AT_MANAGER = 'TOO_MANY_ACCOUNTS_AT_MANAGER';
  /**
   * The account is not authorized owner.
   */
  public const MANAGER_LINK_ERROR_NON_OWNER_USER_CANNOT_MODIFY_LINK = 'NON_OWNER_USER_CANNOT_MODIFY_LINK';
  /**
   * Your manager account is suspended, and you are no longer allowed to link to
   * clients.
   */
  public const MANAGER_LINK_ERROR_SUSPENDED_ACCOUNT_CANNOT_ADD_CLIENTS = 'SUSPENDED_ACCOUNT_CANNOT_ADD_CLIENTS';
  /**
   * You are not allowed to move a client to a manager that is not under your
   * current hierarchy.
   */
  public const MANAGER_LINK_ERROR_CLIENT_OUTSIDE_TREE = 'CLIENT_OUTSIDE_TREE';
  /**
   * The changed status for mutate link is invalid.
   */
  public const MANAGER_LINK_ERROR_INVALID_STATUS_CHANGE = 'INVALID_STATUS_CHANGE';
  /**
   * The change for mutate link is invalid.
   */
  public const MANAGER_LINK_ERROR_INVALID_CHANGE = 'INVALID_CHANGE';
  /**
   * You are not allowed to link a manager account to itself.
   */
  public const MANAGER_LINK_ERROR_CUSTOMER_CANNOT_MANAGE_SELF = 'CUSTOMER_CANNOT_MANAGE_SELF';
  /**
   * The link was created with status ACTIVE and not PENDING.
   */
  public const MANAGER_LINK_ERROR_CREATING_ENABLED_LINK_NOT_ALLOWED = 'CREATING_ENABLED_LINK_NOT_ALLOWED';
  /**
   * Enum unspecified.
   */
  public const MEDIA_BUNDLE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const MEDIA_BUNDLE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * There was a problem with the request.
   */
  public const MEDIA_BUNDLE_ERROR_BAD_REQUEST = 'BAD_REQUEST';
  /**
   * HTML5 ads using DoubleClick Studio created ZIP files are not supported.
   */
  public const MEDIA_BUNDLE_ERROR_DOUBLECLICK_BUNDLE_NOT_ALLOWED = 'DOUBLECLICK_BUNDLE_NOT_ALLOWED';
  /**
   * Cannot reference URL external to the media bundle.
   */
  public const MEDIA_BUNDLE_ERROR_EXTERNAL_URL_NOT_ALLOWED = 'EXTERNAL_URL_NOT_ALLOWED';
  /**
   * Media bundle file is too large.
   */
  public const MEDIA_BUNDLE_ERROR_FILE_TOO_LARGE = 'FILE_TOO_LARGE';
  /**
   * ZIP file from Google Web Designer is not published.
   */
  public const MEDIA_BUNDLE_ERROR_GOOGLE_WEB_DESIGNER_ZIP_FILE_NOT_PUBLISHED = 'GOOGLE_WEB_DESIGNER_ZIP_FILE_NOT_PUBLISHED';
  /**
   * Input was invalid.
   */
  public const MEDIA_BUNDLE_ERROR_INVALID_INPUT = 'INVALID_INPUT';
  /**
   * There was a problem with the media bundle.
   */
  public const MEDIA_BUNDLE_ERROR_INVALID_MEDIA_BUNDLE = 'INVALID_MEDIA_BUNDLE';
  /**
   * There was a problem with one or more of the media bundle entries.
   */
  public const MEDIA_BUNDLE_ERROR_INVALID_MEDIA_BUNDLE_ENTRY = 'INVALID_MEDIA_BUNDLE_ENTRY';
  /**
   * The media bundle contains a file with an unknown mime type
   */
  public const MEDIA_BUNDLE_ERROR_INVALID_MIME_TYPE = 'INVALID_MIME_TYPE';
  /**
   * The media bundle contain an invalid asset path.
   */
  public const MEDIA_BUNDLE_ERROR_INVALID_PATH = 'INVALID_PATH';
  /**
   * HTML5 ad is trying to reference an asset not in .ZIP file
   */
  public const MEDIA_BUNDLE_ERROR_INVALID_URL_REFERENCE = 'INVALID_URL_REFERENCE';
  /**
   * Media data is too large.
   */
  public const MEDIA_BUNDLE_ERROR_MEDIA_DATA_TOO_LARGE = 'MEDIA_DATA_TOO_LARGE';
  /**
   * The media bundle contains no primary entry.
   */
  public const MEDIA_BUNDLE_ERROR_MISSING_PRIMARY_MEDIA_BUNDLE_ENTRY = 'MISSING_PRIMARY_MEDIA_BUNDLE_ENTRY';
  /**
   * There was an error on the server.
   */
  public const MEDIA_BUNDLE_ERROR_SERVER_ERROR = 'SERVER_ERROR';
  /**
   * The image could not be stored.
   */
  public const MEDIA_BUNDLE_ERROR_STORAGE_ERROR = 'STORAGE_ERROR';
  /**
   * Media bundle created with the Swiffy tool is not allowed.
   */
  public const MEDIA_BUNDLE_ERROR_SWIFFY_BUNDLE_NOT_ALLOWED = 'SWIFFY_BUNDLE_NOT_ALLOWED';
  /**
   * The media bundle contains too many files.
   */
  public const MEDIA_BUNDLE_ERROR_TOO_MANY_FILES = 'TOO_MANY_FILES';
  /**
   * The media bundle is not of legal dimensions.
   */
  public const MEDIA_BUNDLE_ERROR_UNEXPECTED_SIZE = 'UNEXPECTED_SIZE';
  /**
   * Google Web Designer not created for "Google Ads" environment.
   */
  public const MEDIA_BUNDLE_ERROR_UNSUPPORTED_GOOGLE_WEB_DESIGNER_ENVIRONMENT = 'UNSUPPORTED_GOOGLE_WEB_DESIGNER_ENVIRONMENT';
  /**
   * Unsupported HTML5 feature in HTML5 asset.
   */
  public const MEDIA_BUNDLE_ERROR_UNSUPPORTED_HTML5_FEATURE = 'UNSUPPORTED_HTML5_FEATURE';
  /**
   * URL in HTML5 entry is not ssl compliant.
   */
  public const MEDIA_BUNDLE_ERROR_URL_IN_MEDIA_BUNDLE_NOT_SSL_COMPLIANT = 'URL_IN_MEDIA_BUNDLE_NOT_SSL_COMPLIANT';
  /**
   * Custom exits not allowed in HTML5 entry.
   */
  public const MEDIA_BUNDLE_ERROR_CUSTOM_EXIT_NOT_ALLOWED = 'CUSTOM_EXIT_NOT_ALLOWED';
  /**
   * Enum unspecified.
   */
  public const MEDIA_FILE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const MEDIA_FILE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Cannot create a standard icon type.
   */
  public const MEDIA_FILE_ERROR_CANNOT_CREATE_STANDARD_ICON = 'CANNOT_CREATE_STANDARD_ICON';
  /**
   * May only select Standard Icons alone.
   */
  public const MEDIA_FILE_ERROR_CANNOT_SELECT_STANDARD_ICON_WITH_OTHER_TYPES = 'CANNOT_SELECT_STANDARD_ICON_WITH_OTHER_TYPES';
  /**
   * Image contains both a media file ID and data.
   */
  public const MEDIA_FILE_ERROR_CANNOT_SPECIFY_MEDIA_FILE_ID_AND_DATA = 'CANNOT_SPECIFY_MEDIA_FILE_ID_AND_DATA';
  /**
   * A media file with given type and reference ID already exists.
   */
  public const MEDIA_FILE_ERROR_DUPLICATE_MEDIA = 'DUPLICATE_MEDIA';
  /**
   * A required field was not specified or is an empty string.
   */
  public const MEDIA_FILE_ERROR_EMPTY_FIELD = 'EMPTY_FIELD';
  /**
   * A media file may only be modified once per call.
   */
  public const MEDIA_FILE_ERROR_RESOURCE_REFERENCED_IN_MULTIPLE_OPS = 'RESOURCE_REFERENCED_IN_MULTIPLE_OPS';
  /**
   * Field is not supported for the media sub type.
   */
  public const MEDIA_FILE_ERROR_FIELD_NOT_SUPPORTED_FOR_MEDIA_SUB_TYPE = 'FIELD_NOT_SUPPORTED_FOR_MEDIA_SUB_TYPE';
  /**
   * The media file ID is invalid.
   */
  public const MEDIA_FILE_ERROR_INVALID_MEDIA_FILE_ID = 'INVALID_MEDIA_FILE_ID';
  /**
   * The media subtype is invalid.
   */
  public const MEDIA_FILE_ERROR_INVALID_MEDIA_SUB_TYPE = 'INVALID_MEDIA_SUB_TYPE';
  /**
   * The media file type is invalid.
   */
  public const MEDIA_FILE_ERROR_INVALID_MEDIA_FILE_TYPE = 'INVALID_MEDIA_FILE_TYPE';
  /**
   * The mimetype is invalid.
   */
  public const MEDIA_FILE_ERROR_INVALID_MIME_TYPE = 'INVALID_MIME_TYPE';
  /**
   * The media reference ID is invalid.
   */
  public const MEDIA_FILE_ERROR_INVALID_REFERENCE_ID = 'INVALID_REFERENCE_ID';
  /**
   * The YouTube video ID is invalid.
   */
  public const MEDIA_FILE_ERROR_INVALID_YOU_TUBE_ID = 'INVALID_YOU_TUBE_ID';
  /**
   * Media file has failed transcoding
   */
  public const MEDIA_FILE_ERROR_MEDIA_FILE_FAILED_TRANSCODING = 'MEDIA_FILE_FAILED_TRANSCODING';
  /**
   * Media file has not been transcoded.
   */
  public const MEDIA_FILE_ERROR_MEDIA_NOT_TRANSCODED = 'MEDIA_NOT_TRANSCODED';
  /**
   * The media type does not match the actual media file's type.
   */
  public const MEDIA_FILE_ERROR_MEDIA_TYPE_DOES_NOT_MATCH_MEDIA_FILE_TYPE = 'MEDIA_TYPE_DOES_NOT_MATCH_MEDIA_FILE_TYPE';
  /**
   * None of the fields have been specified.
   */
  public const MEDIA_FILE_ERROR_NO_FIELDS_SPECIFIED = 'NO_FIELDS_SPECIFIED';
  /**
   * One of reference ID or media file ID must be specified.
   */
  public const MEDIA_FILE_ERROR_NULL_REFERENCE_ID_AND_MEDIA_ID = 'NULL_REFERENCE_ID_AND_MEDIA_ID';
  /**
   * The string has too many characters.
   */
  public const MEDIA_FILE_ERROR_TOO_LONG = 'TOO_LONG';
  /**
   * The specified type is not supported.
   */
  public const MEDIA_FILE_ERROR_UNSUPPORTED_TYPE = 'UNSUPPORTED_TYPE';
  /**
   * YouTube is unavailable for requesting video data.
   */
  public const MEDIA_FILE_ERROR_YOU_TUBE_SERVICE_UNAVAILABLE = 'YOU_TUBE_SERVICE_UNAVAILABLE';
  /**
   * The YouTube video has a non positive duration.
   */
  public const MEDIA_FILE_ERROR_YOU_TUBE_VIDEO_HAS_NON_POSITIVE_DURATION = 'YOU_TUBE_VIDEO_HAS_NON_POSITIVE_DURATION';
  /**
   * The YouTube video ID is syntactically valid but the video was not found.
   */
  public const MEDIA_FILE_ERROR_YOU_TUBE_VIDEO_NOT_FOUND = 'YOU_TUBE_VIDEO_NOT_FOUND';
  /**
   * Enum unspecified.
   */
  public const MEDIA_UPLOAD_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const MEDIA_UPLOAD_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The uploaded file is too big.
   */
  public const MEDIA_UPLOAD_ERROR_FILE_TOO_BIG = 'FILE_TOO_BIG';
  /**
   * Image data is unparseable.
   */
  public const MEDIA_UPLOAD_ERROR_UNPARSEABLE_IMAGE = 'UNPARSEABLE_IMAGE';
  /**
   * Animated images are not allowed.
   */
  public const MEDIA_UPLOAD_ERROR_ANIMATED_IMAGE_NOT_ALLOWED = 'ANIMATED_IMAGE_NOT_ALLOWED';
  /**
   * The image or media bundle format is not allowed.
   */
  public const MEDIA_UPLOAD_ERROR_FORMAT_NOT_ALLOWED = 'FORMAT_NOT_ALLOWED';
  /**
   * Cannot reference URL external to the media bundle.
   */
  public const MEDIA_UPLOAD_ERROR_EXTERNAL_URL_NOT_ALLOWED = 'EXTERNAL_URL_NOT_ALLOWED';
  /**
   * HTML5 ad is trying to reference an asset not in .ZIP file.
   */
  public const MEDIA_UPLOAD_ERROR_INVALID_URL_REFERENCE = 'INVALID_URL_REFERENCE';
  /**
   * The media bundle contains no primary entry.
   */
  public const MEDIA_UPLOAD_ERROR_MISSING_PRIMARY_MEDIA_BUNDLE_ENTRY = 'MISSING_PRIMARY_MEDIA_BUNDLE_ENTRY';
  /**
   * Animation has disallowed visual effects.
   */
  public const MEDIA_UPLOAD_ERROR_ANIMATED_VISUAL_EFFECT = 'ANIMATED_VISUAL_EFFECT';
  /**
   * Animation longer than the allowed 30 second limit.
   */
  public const MEDIA_UPLOAD_ERROR_ANIMATION_TOO_LONG = 'ANIMATION_TOO_LONG';
  /**
   * The aspect ratio of the image does not match the expected aspect ratios
   * provided in the asset spec.
   */
  public const MEDIA_UPLOAD_ERROR_ASPECT_RATIO_NOT_ALLOWED = 'ASPECT_RATIO_NOT_ALLOWED';
  /**
   * Audio files are not allowed in bundle.
   */
  public const MEDIA_UPLOAD_ERROR_AUDIO_NOT_ALLOWED_IN_MEDIA_BUNDLE = 'AUDIO_NOT_ALLOWED_IN_MEDIA_BUNDLE';
  /**
   * CMYK jpegs are not supported.
   */
  public const MEDIA_UPLOAD_ERROR_CMYK_JPEG_NOT_ALLOWED = 'CMYK_JPEG_NOT_ALLOWED';
  /**
   * Flash movies are not allowed.
   */
  public const MEDIA_UPLOAD_ERROR_FLASH_NOT_ALLOWED = 'FLASH_NOT_ALLOWED';
  /**
   * The frame rate of the video is higher than the allowed 5fps.
   */
  public const MEDIA_UPLOAD_ERROR_FRAME_RATE_TOO_HIGH = 'FRAME_RATE_TOO_HIGH';
  /**
   * ZIP file from Google Web Designer is not published.
   */
  public const MEDIA_UPLOAD_ERROR_GOOGLE_WEB_DESIGNER_ZIP_FILE_NOT_PUBLISHED = 'GOOGLE_WEB_DESIGNER_ZIP_FILE_NOT_PUBLISHED';
  /**
   * Image constraints are violated, but more details (like
   * DIMENSIONS_NOT_ALLOWED or ASPECT_RATIO_NOT_ALLOWED) can not be provided.
   * This happens when asset spec contains more than one constraint and criteria
   * of different constraints are violated.
   */
  public const MEDIA_UPLOAD_ERROR_IMAGE_CONSTRAINTS_VIOLATED = 'IMAGE_CONSTRAINTS_VIOLATED';
  /**
   * Media bundle data is unrecognizable.
   */
  public const MEDIA_UPLOAD_ERROR_INVALID_MEDIA_BUNDLE = 'INVALID_MEDIA_BUNDLE';
  /**
   * There was a problem with one or more of the media bundle entries.
   */
  public const MEDIA_UPLOAD_ERROR_INVALID_MEDIA_BUNDLE_ENTRY = 'INVALID_MEDIA_BUNDLE_ENTRY';
  /**
   * The asset has an invalid mime type.
   */
  public const MEDIA_UPLOAD_ERROR_INVALID_MIME_TYPE = 'INVALID_MIME_TYPE';
  /**
   * The media bundle contains an invalid asset path.
   */
  public const MEDIA_UPLOAD_ERROR_INVALID_PATH = 'INVALID_PATH';
  /**
   * Image has layout problem.
   */
  public const MEDIA_UPLOAD_ERROR_LAYOUT_PROBLEM = 'LAYOUT_PROBLEM';
  /**
   * An asset had a URL reference that is malformed per RFC 1738 convention.
   */
  public const MEDIA_UPLOAD_ERROR_MALFORMED_URL = 'MALFORMED_URL';
  /**
   * The uploaded media bundle format is not allowed.
   */
  public const MEDIA_UPLOAD_ERROR_MEDIA_BUNDLE_NOT_ALLOWED = 'MEDIA_BUNDLE_NOT_ALLOWED';
  /**
   * The media bundle is not compatible with the asset spec product type. (For
   * example, Gmail, dynamic remarketing, etc.)
   */
  public const MEDIA_UPLOAD_ERROR_MEDIA_BUNDLE_NOT_COMPATIBLE_TO_PRODUCT_TYPE = 'MEDIA_BUNDLE_NOT_COMPATIBLE_TO_PRODUCT_TYPE';
  /**
   * A bundle being uploaded that is incompatible with multiple assets for
   * different reasons.
   */
  public const MEDIA_UPLOAD_ERROR_MEDIA_BUNDLE_REJECTED_BY_MULTIPLE_ASSET_SPECS = 'MEDIA_BUNDLE_REJECTED_BY_MULTIPLE_ASSET_SPECS';
  /**
   * The media bundle contains too many files.
   */
  public const MEDIA_UPLOAD_ERROR_TOO_MANY_FILES_IN_MEDIA_BUNDLE = 'TOO_MANY_FILES_IN_MEDIA_BUNDLE';
  /**
   * Google Web Designer not created for "Google Ads" environment.
   */
  public const MEDIA_UPLOAD_ERROR_UNSUPPORTED_GOOGLE_WEB_DESIGNER_ENVIRONMENT = 'UNSUPPORTED_GOOGLE_WEB_DESIGNER_ENVIRONMENT';
  /**
   * Unsupported HTML5 feature in HTML5 asset.
   */
  public const MEDIA_UPLOAD_ERROR_UNSUPPORTED_HTML5_FEATURE = 'UNSUPPORTED_HTML5_FEATURE';
  /**
   * URL in HTML5 entry is not SSL compliant.
   */
  public const MEDIA_UPLOAD_ERROR_URL_IN_MEDIA_BUNDLE_NOT_SSL_COMPLIANT = 'URL_IN_MEDIA_BUNDLE_NOT_SSL_COMPLIANT';
  /**
   * Video file name is longer than the 50 allowed characters.
   */
  public const MEDIA_UPLOAD_ERROR_VIDEO_FILE_NAME_TOO_LONG = 'VIDEO_FILE_NAME_TOO_LONG';
  /**
   * Multiple videos with same name in a bundle.
   */
  public const MEDIA_UPLOAD_ERROR_VIDEO_MULTIPLE_FILES_WITH_SAME_NAME = 'VIDEO_MULTIPLE_FILES_WITH_SAME_NAME';
  /**
   * Videos are not allowed in media bundle.
   */
  public const MEDIA_UPLOAD_ERROR_VIDEO_NOT_ALLOWED_IN_MEDIA_BUNDLE = 'VIDEO_NOT_ALLOWED_IN_MEDIA_BUNDLE';
  /**
   * This type of media cannot be uploaded through the Google Ads API.
   */
  public const MEDIA_UPLOAD_ERROR_CANNOT_UPLOAD_MEDIA_TYPE_THROUGH_API = 'CANNOT_UPLOAD_MEDIA_TYPE_THROUGH_API';
  /**
   * The dimensions of the image are not allowed.
   */
  public const MEDIA_UPLOAD_ERROR_DIMENSIONS_NOT_ALLOWED = 'DIMENSIONS_NOT_ALLOWED';
  /**
   * Enum unspecified.
   */
  public const MERCHANT_CENTER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const MERCHANT_CENTER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Merchant ID is either not found or not linked to the Google Ads customer.
   */
  public const MERCHANT_CENTER_ERROR_MERCHANT_ID_CANNOT_BE_ACCESSED = 'MERCHANT_ID_CANNOT_BE_ACCESSED';
  /**
   * Customer not allowlisted for Shopping in Performance Max Campaign.
   */
  public const MERCHANT_CENTER_ERROR_CUSTOMER_NOT_ALLOWED_FOR_SHOPPING_PERFORMANCE_MAX = 'CUSTOMER_NOT_ALLOWED_FOR_SHOPPING_PERFORMANCE_MAX';
  /**
   * Enum unspecified.
   */
  public const MULTIPLIER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const MULTIPLIER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Multiplier value is too high
   */
  public const MULTIPLIER_ERROR_MULTIPLIER_TOO_HIGH = 'MULTIPLIER_TOO_HIGH';
  /**
   * Multiplier value is too low
   */
  public const MULTIPLIER_ERROR_MULTIPLIER_TOO_LOW = 'MULTIPLIER_TOO_LOW';
  /**
   * Too many fractional digits
   */
  public const MULTIPLIER_ERROR_TOO_MANY_FRACTIONAL_DIGITS = 'TOO_MANY_FRACTIONAL_DIGITS';
  /**
   * A multiplier cannot be set for this bidding strategy
   */
  public const MULTIPLIER_ERROR_MULTIPLIER_NOT_ALLOWED_FOR_BIDDING_STRATEGY = 'MULTIPLIER_NOT_ALLOWED_FOR_BIDDING_STRATEGY';
  /**
   * A multiplier cannot be set when there is no base bid (for example, content
   * max cpc)
   */
  public const MULTIPLIER_ERROR_MULTIPLIER_NOT_ALLOWED_WHEN_BASE_BID_IS_MISSING = 'MULTIPLIER_NOT_ALLOWED_WHEN_BASE_BID_IS_MISSING';
  /**
   * A bid multiplier must be specified
   */
  public const MULTIPLIER_ERROR_NO_MULTIPLIER_SPECIFIED = 'NO_MULTIPLIER_SPECIFIED';
  /**
   * Multiplier causes bid to exceed daily budget
   */
  public const MULTIPLIER_ERROR_MULTIPLIER_CAUSES_BID_TO_EXCEED_DAILY_BUDGET = 'MULTIPLIER_CAUSES_BID_TO_EXCEED_DAILY_BUDGET';
  /**
   * Multiplier causes bid to exceed monthly budget
   */
  public const MULTIPLIER_ERROR_MULTIPLIER_CAUSES_BID_TO_EXCEED_MONTHLY_BUDGET = 'MULTIPLIER_CAUSES_BID_TO_EXCEED_MONTHLY_BUDGET';
  /**
   * Multiplier causes bid to exceed custom budget
   */
  public const MULTIPLIER_ERROR_MULTIPLIER_CAUSES_BID_TO_EXCEED_CUSTOM_BUDGET = 'MULTIPLIER_CAUSES_BID_TO_EXCEED_CUSTOM_BUDGET';
  /**
   * Multiplier causes bid to exceed maximum allowed bid
   */
  public const MULTIPLIER_ERROR_MULTIPLIER_CAUSES_BID_TO_EXCEED_MAX_ALLOWED_BID = 'MULTIPLIER_CAUSES_BID_TO_EXCEED_MAX_ALLOWED_BID';
  /**
   * Multiplier causes bid to become less than the minimum bid allowed
   */
  public const MULTIPLIER_ERROR_BID_LESS_THAN_MIN_ALLOWED_BID_WITH_MULTIPLIER = 'BID_LESS_THAN_MIN_ALLOWED_BID_WITH_MULTIPLIER';
  /**
   * Multiplier type (cpc versus cpm) needs to match campaign's bidding strategy
   */
  public const MULTIPLIER_ERROR_MULTIPLIER_AND_BIDDING_STRATEGY_TYPE_MISMATCH = 'MULTIPLIER_AND_BIDDING_STRATEGY_TYPE_MISMATCH';
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
  public const NEW_RESOURCE_CREATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const NEW_RESOURCE_CREATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Do not set the id field while creating new resources.
   */
  public const NEW_RESOURCE_CREATION_ERROR_CANNOT_SET_ID_FOR_CREATE = 'CANNOT_SET_ID_FOR_CREATE';
  /**
   * Creating more than one resource with the same temp ID is not allowed.
   */
  public const NEW_RESOURCE_CREATION_ERROR_DUPLICATE_TEMP_IDS = 'DUPLICATE_TEMP_IDS';
  /**
   * Parent resource with specified temp ID failed validation, so no validation
   * will be done for this child resource.
   */
  public const NEW_RESOURCE_CREATION_ERROR_TEMP_ID_RESOURCE_HAD_ERRORS = 'TEMP_ID_RESOURCE_HAD_ERRORS';
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
  public const NOT_EMPTY_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const NOT_EMPTY_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Empty list.
   */
  public const NOT_EMPTY_ERROR_EMPTY_LIST = 'EMPTY_LIST';
  /**
   * Enum unspecified.
   */
  public const NULL_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const NULL_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Specified list/container must not contain any null elements
   */
  public const NULL_ERROR_NULL_CONTENT = 'NULL_CONTENT';
  /**
   * Enum unspecified.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The user list ID provided for the job is invalid.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_USER_LIST_ID = 'INVALID_USER_LIST_ID';
  /**
   * Type of the user list is not applicable for the job.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_USER_LIST_TYPE = 'INVALID_USER_LIST_TYPE';
  /**
   * Customer is not allowisted for using user ID in upload data.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_NOT_ON_ALLOWLIST_FOR_USER_ID = 'NOT_ON_ALLOWLIST_FOR_USER_ID';
  /**
   * Upload data is not compatible with the upload key type of the associated
   * user list.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INCOMPATIBLE_UPLOAD_KEY_TYPE = 'INCOMPATIBLE_UPLOAD_KEY_TYPE';
  /**
   * The user identifier is missing valid data.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_MISSING_USER_IDENTIFIER = 'MISSING_USER_IDENTIFIER';
  /**
   * The mobile ID is malformed.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_MOBILE_ID_FORMAT = 'INVALID_MOBILE_ID_FORMAT';
  /**
   * Maximum number of user identifiers allowed per request is 100,000 and per
   * operation is 20.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_TOO_MANY_USER_IDENTIFIERS = 'TOO_MANY_USER_IDENTIFIERS';
  /**
   * Customer is not on the allow-list for store sales direct data.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_NOT_ON_ALLOWLIST_FOR_STORE_SALES_DIRECT = 'NOT_ON_ALLOWLIST_FOR_STORE_SALES_DIRECT';
  /**
   * Customer is not on the allow-list for unified store sales data.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_NOT_ON_ALLOWLIST_FOR_UNIFIED_STORE_SALES = 'NOT_ON_ALLOWLIST_FOR_UNIFIED_STORE_SALES';
  /**
   * The partner ID in store sales direct metadata is invalid.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_PARTNER_ID = 'INVALID_PARTNER_ID';
  /**
   * The data in user identifier should not be encoded.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_ENCODING = 'INVALID_ENCODING';
  /**
   * The country code is invalid.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_COUNTRY_CODE = 'INVALID_COUNTRY_CODE';
  /**
   * Incompatible user identifier when using third_party_user_id for store sales
   * direct first party data or not using third_party_user_id for store sales
   * third party data.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INCOMPATIBLE_USER_IDENTIFIER = 'INCOMPATIBLE_USER_IDENTIFIER';
  /**
   * A transaction time in the future is not allowed.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_FUTURE_TRANSACTION_TIME = 'FUTURE_TRANSACTION_TIME';
  /**
   * The conversion_action specified in transaction_attributes is used to report
   * conversions to a conversion action configured in Google Ads. This error
   * indicates there is no such conversion action in the account.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_CONVERSION_ACTION = 'INVALID_CONVERSION_ACTION';
  /**
   * Mobile ID is not supported for store sales direct data.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_MOBILE_ID_NOT_SUPPORTED = 'MOBILE_ID_NOT_SUPPORTED';
  /**
   * When a remove-all operation is provided, it has to be the first operation
   * of the operation list.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_OPERATION_ORDER = 'INVALID_OPERATION_ORDER';
  /**
   * Mixing creation and removal of offline data in the same job is not allowed.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_CONFLICTING_OPERATION = 'CONFLICTING_OPERATION';
  /**
   * The external update ID already exists.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_EXTERNAL_UPDATE_ID_ALREADY_EXISTS = 'EXTERNAL_UPDATE_ID_ALREADY_EXISTS';
  /**
   * Once the upload job is started, new operations cannot be added.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_JOB_ALREADY_STARTED = 'JOB_ALREADY_STARTED';
  /**
   * Remove operation is not allowed for store sales direct updates.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_REMOVE_NOT_SUPPORTED = 'REMOVE_NOT_SUPPORTED';
  /**
   * Remove-all is not supported for certain offline user data job types.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_REMOVE_ALL_NOT_SUPPORTED = 'REMOVE_ALL_NOT_SUPPORTED';
  /**
   * The SHA256 encoded value is malformed.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_SHA256_FORMAT = 'INVALID_SHA256_FORMAT';
  /**
   * The custom key specified is not enabled for the unified store sales upload.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_CUSTOM_KEY_DISABLED = 'CUSTOM_KEY_DISABLED';
  /**
   * The custom key specified is not predefined through the Google Ads UI.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_CUSTOM_KEY_NOT_PREDEFINED = 'CUSTOM_KEY_NOT_PREDEFINED';
  /**
   * The custom key specified is not set in the upload.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_CUSTOM_KEY_NOT_SET = 'CUSTOM_KEY_NOT_SET';
  /**
   * The customer has not accepted the customer data terms in the conversion
   * settings page.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS = 'CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS';
  /**
   * User attributes cannot be uploaded into a user list.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_ATTRIBUTES_NOT_APPLICABLE_FOR_CUSTOMER_MATCH_USER_LIST = 'ATTRIBUTES_NOT_APPLICABLE_FOR_CUSTOMER_MATCH_USER_LIST';
  /**
   * Lifetime bucket value must be a number from 0 to 10; 0 is only accepted for
   * remove operations
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_LIFETIME_VALUE_BUCKET_NOT_IN_RANGE = 'LIFETIME_VALUE_BUCKET_NOT_IN_RANGE';
  /**
   * Identifiers not supported for Customer Match attributes. User attributes
   * can only be provided with contact info (email, phone, address) user
   * identifiers.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INCOMPATIBLE_USER_IDENTIFIER_FOR_ATTRIBUTES = 'INCOMPATIBLE_USER_IDENTIFIER_FOR_ATTRIBUTES';
  /**
   * A time in the future is not allowed.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_FUTURE_TIME_NOT_ALLOWED = 'FUTURE_TIME_NOT_ALLOWED';
  /**
   * Last purchase date time cannot be less than acquisition date time.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_LAST_PURCHASE_TIME_LESS_THAN_ACQUISITION_TIME = 'LAST_PURCHASE_TIME_LESS_THAN_ACQUISITION_TIME';
  /**
   * Only emails are accepted as user identifiers for shopping loyalty match.
   * {-- api.dev/not-precedent: The identifier is not limited to ids, but also
   * include other user info eg. phone numbers.}
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_CUSTOMER_IDENTIFIER_NOT_ALLOWED = 'CUSTOMER_IDENTIFIER_NOT_ALLOWED';
  /**
   * Provided item ID is invalid.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_ITEM_ID = 'INVALID_ITEM_ID';
  /**
   * First purchase date time cannot be greater than the last purchase date
   * time.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_FIRST_PURCHASE_TIME_GREATER_THAN_LAST_PURCHASE_TIME = 'FIRST_PURCHASE_TIME_GREATER_THAN_LAST_PURCHASE_TIME';
  /**
   * Provided lifecycle stage is invalid.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_LIFECYCLE_STAGE = 'INVALID_LIFECYCLE_STAGE';
  /**
   * The event value of the Customer Match user attribute is invalid.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_INVALID_EVENT_VALUE = 'INVALID_EVENT_VALUE';
  /**
   * All the fields are not present in the EventAttribute of the Customer Match.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_EVENT_ATTRIBUTE_ALL_FIELDS_ARE_REQUIRED = 'EVENT_ATTRIBUTE_ALL_FIELDS_ARE_REQUIRED';
  /**
   * Consent was provided at the operation level for an OfflineUserDataJobType
   * that expects it at the job level. The provided operation-level consent will
   * be ignored.
   */
  public const OFFLINE_USER_DATA_JOB_ERROR_OPERATION_LEVEL_CONSENT_PROVIDED = 'OPERATION_LEVEL_CONSENT_PROVIDED';
  /**
   * Enum unspecified.
   */
  public const OPERATION_ACCESS_DENIED_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const OPERATION_ACCESS_DENIED_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Unauthorized invocation of a service's method (get, mutate, etc.)
   */
  public const OPERATION_ACCESS_DENIED_ERROR_ACTION_NOT_PERMITTED = 'ACTION_NOT_PERMITTED';
  /**
   * Unauthorized CREATE operation in invoking a service's mutate method.
   */
  public const OPERATION_ACCESS_DENIED_ERROR_CREATE_OPERATION_NOT_PERMITTED = 'CREATE_OPERATION_NOT_PERMITTED';
  /**
   * Unauthorized REMOVE operation in invoking a service's mutate method.
   */
  public const OPERATION_ACCESS_DENIED_ERROR_REMOVE_OPERATION_NOT_PERMITTED = 'REMOVE_OPERATION_NOT_PERMITTED';
  /**
   * Unauthorized UPDATE operation in invoking a service's mutate method.
   */
  public const OPERATION_ACCESS_DENIED_ERROR_UPDATE_OPERATION_NOT_PERMITTED = 'UPDATE_OPERATION_NOT_PERMITTED';
  /**
   * A mutate action is not allowed on this resource, from this client.
   */
  public const OPERATION_ACCESS_DENIED_ERROR_MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT = 'MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT';
  /**
   * This operation is not permitted on this campaign type
   */
  public const OPERATION_ACCESS_DENIED_ERROR_OPERATION_NOT_PERMITTED_FOR_CAMPAIGN_TYPE = 'OPERATION_NOT_PERMITTED_FOR_CAMPAIGN_TYPE';
  /**
   * A CREATE operation may not set status to REMOVED.
   */
  public const OPERATION_ACCESS_DENIED_ERROR_CREATE_AS_REMOVED_NOT_PERMITTED = 'CREATE_AS_REMOVED_NOT_PERMITTED';
  /**
   * This operation is not allowed because the resource is removed.
   */
  public const OPERATION_ACCESS_DENIED_ERROR_OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE = 'OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE';
  /**
   * This operation is not permitted on this ad group type.
   */
  public const OPERATION_ACCESS_DENIED_ERROR_OPERATION_NOT_PERMITTED_FOR_AD_GROUP_TYPE = 'OPERATION_NOT_PERMITTED_FOR_AD_GROUP_TYPE';
  /**
   * The mutate is not allowed for this customer.
   */
  public const OPERATION_ACCESS_DENIED_ERROR_MUTATE_NOT_PERMITTED_FOR_CUSTOMER = 'MUTATE_NOT_PERMITTED_FOR_CUSTOMER';
  /**
   * Enum unspecified.
   */
  public const OPERATOR_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const OPERATOR_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Operator not supported.
   */
  public const OPERATOR_ERROR_OPERATOR_NOT_SUPPORTED = 'OPERATOR_NOT_SUPPORTED';
  /**
   * Enum unspecified.
   */
  public const PARTIAL_FAILURE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const PARTIAL_FAILURE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The partial failure field was false in the request. This method requires
   * this field be set to true.
   */
  public const PARTIAL_FAILURE_ERROR_PARTIAL_FAILURE_MODE_REQUIRED = 'PARTIAL_FAILURE_MODE_REQUIRED';
  /**
   * Enum unspecified.
   */
  public const PAYMENTS_ACCOUNT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const PAYMENTS_ACCOUNT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Manager customers are not supported for payments account service.
   */
  public const PAYMENTS_ACCOUNT_ERROR_NOT_SUPPORTED_FOR_MANAGER_CUSTOMER = 'NOT_SUPPORTED_FOR_MANAGER_CUSTOMER';
  /**
   * Enum unspecified.
   */
  public const POLICY_FINDING_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const POLICY_FINDING_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The resource has been disapproved since the policy summary includes policy
   * topics of type PROHIBITED.
   */
  public const POLICY_FINDING_ERROR_POLICY_FINDING = 'POLICY_FINDING';
  /**
   * The given policy topic does not exist.
   */
  public const POLICY_FINDING_ERROR_POLICY_TOPIC_NOT_FOUND = 'POLICY_TOPIC_NOT_FOUND';
  /**
   * Enum unspecified.
   */
  public const POLICY_VALIDATION_PARAMETER_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const POLICY_VALIDATION_PARAMETER_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Ignorable policy topics are not supported for the ad type.
   */
  public const POLICY_VALIDATION_PARAMETER_ERROR_UNSUPPORTED_AD_TYPE_FOR_IGNORABLE_POLICY_TOPICS = 'UNSUPPORTED_AD_TYPE_FOR_IGNORABLE_POLICY_TOPICS';
  /**
   * Exempt policy violation keys are not supported for the ad type.
   */
  public const POLICY_VALIDATION_PARAMETER_ERROR_UNSUPPORTED_AD_TYPE_FOR_EXEMPT_POLICY_VIOLATION_KEYS = 'UNSUPPORTED_AD_TYPE_FOR_EXEMPT_POLICY_VIOLATION_KEYS';
  /**
   * Cannot set ignorable policy topics and exempt policy violation keys in the
   * same policy violation parameter.
   */
  public const POLICY_VALIDATION_PARAMETER_ERROR_CANNOT_SET_BOTH_IGNORABLE_POLICY_TOPICS_AND_EXEMPT_POLICY_VIOLATION_KEYS = 'CANNOT_SET_BOTH_IGNORABLE_POLICY_TOPICS_AND_EXEMPT_POLICY_VIOLATION_KEYS';
  /**
   * Enum unspecified.
   */
  public const POLICY_VIOLATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const POLICY_VIOLATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * A policy was violated. See PolicyViolationDetails for more detail.
   */
  public const POLICY_VIOLATION_ERROR_POLICY_ERROR = 'POLICY_ERROR';
  /**
   * Enum unspecified.
   */
  public const PRODUCT_LINK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const PRODUCT_LINK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The requested operation is invalid. For example, you are not allowed to
   * remove a link from a partner account.
   */
  public const PRODUCT_LINK_ERROR_INVALID_OPERATION = 'INVALID_OPERATION';
  /**
   * The creation request is not permitted.
   */
  public const PRODUCT_LINK_ERROR_CREATION_NOT_PERMITTED = 'CREATION_NOT_PERMITTED';
  /**
   * A link cannot be created because a pending link already exists.
   */
  public const PRODUCT_LINK_ERROR_INVITATION_EXISTS = 'INVITATION_EXISTS';
  /**
   * A link cannot be created because an active link already exists.
   */
  public const PRODUCT_LINK_ERROR_LINK_EXISTS = 'LINK_EXISTS';
  /**
   * Enum unspecified.
   */
  public const PRODUCT_LINK_INVITATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in the version.
   */
  public const PRODUCT_LINK_INVITATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The invitation status is invalid.
   */
  public const PRODUCT_LINK_INVITATION_ERROR_INVALID_STATUS = 'INVALID_STATUS';
  /**
   * The customer doesn't have the permission to perform this action
   */
  public const PRODUCT_LINK_INVITATION_ERROR_PERMISSION_DENIED = 'PERMISSION_DENIED';
  /**
   * An invitation could not be created, since the user already has admin access
   * to the invited account. Use the ProductLinkService to directly create an
   * active link.
   */
  public const PRODUCT_LINK_INVITATION_ERROR_NO_INVITATION_REQUIRED = 'NO_INVITATION_REQUIRED';
  /**
   * The customer is not permitted to create the invitation.
   */
  public const PRODUCT_LINK_INVITATION_ERROR_CUSTOMER_NOT_PERMITTED_TO_CREATE_INVITATION = 'CUSTOMER_NOT_PERMITTED_TO_CREATE_INVITATION';
  /**
   * Name unspecified.
   */
  public const QUERY_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const QUERY_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Returned if all other query error reasons are not applicable.
   */
  public const QUERY_ERROR_QUERY_ERROR = 'QUERY_ERROR';
  /**
   * A condition used in the query references an invalid enum constant.
   */
  public const QUERY_ERROR_BAD_ENUM_CONSTANT = 'BAD_ENUM_CONSTANT';
  /**
   * Query contains an invalid escape sequence.
   */
  public const QUERY_ERROR_BAD_ESCAPE_SEQUENCE = 'BAD_ESCAPE_SEQUENCE';
  /**
   * Field name is invalid.
   */
  public const QUERY_ERROR_BAD_FIELD_NAME = 'BAD_FIELD_NAME';
  /**
   * Limit value is invalid (for example, not a number)
   */
  public const QUERY_ERROR_BAD_LIMIT_VALUE = 'BAD_LIMIT_VALUE';
  /**
   * Encountered number can not be parsed.
   */
  public const QUERY_ERROR_BAD_NUMBER = 'BAD_NUMBER';
  /**
   * Invalid operator encountered.
   */
  public const QUERY_ERROR_BAD_OPERATOR = 'BAD_OPERATOR';
  /**
   * Parameter unknown or not supported.
   */
  public const QUERY_ERROR_BAD_PARAMETER_NAME = 'BAD_PARAMETER_NAME';
  /**
   * Parameter have invalid value.
   */
  public const QUERY_ERROR_BAD_PARAMETER_VALUE = 'BAD_PARAMETER_VALUE';
  /**
   * Invalid resource type was specified in the FROM clause.
   */
  public const QUERY_ERROR_BAD_RESOURCE_TYPE_IN_FROM_CLAUSE = 'BAD_RESOURCE_TYPE_IN_FROM_CLAUSE';
  /**
   * Non-ASCII symbol encountered outside of strings.
   */
  public const QUERY_ERROR_BAD_SYMBOL = 'BAD_SYMBOL';
  /**
   * Value is invalid.
   */
  public const QUERY_ERROR_BAD_VALUE = 'BAD_VALUE';
  /**
   * Date filters fail to restrict date to a range smaller than 31 days.
   * Applicable if the query is segmented by date.
   */
  public const QUERY_ERROR_DATE_RANGE_TOO_WIDE = 'DATE_RANGE_TOO_WIDE';
  /**
   * Filters on date/week/month/quarter have a start date after end date.
   */
  public const QUERY_ERROR_DATE_RANGE_TOO_NARROW = 'DATE_RANGE_TOO_NARROW';
  /**
   * Expected AND between values with BETWEEN operator.
   */
  public const QUERY_ERROR_EXPECTED_AND = 'EXPECTED_AND';
  /**
   * Expecting ORDER BY to have BY.
   */
  public const QUERY_ERROR_EXPECTED_BY = 'EXPECTED_BY';
  /**
   * There was no dimension field selected.
   */
  public const QUERY_ERROR_EXPECTED_DIMENSION_FIELD_IN_SELECT_CLAUSE = 'EXPECTED_DIMENSION_FIELD_IN_SELECT_CLAUSE';
  /**
   * Missing filters on date related fields.
   */
  public const QUERY_ERROR_EXPECTED_FILTERS_ON_DATE_RANGE = 'EXPECTED_FILTERS_ON_DATE_RANGE';
  /**
   * Missing FROM clause.
   */
  public const QUERY_ERROR_EXPECTED_FROM = 'EXPECTED_FROM';
  /**
   * The operator used in the conditions requires the value to be a list.
   */
  public const QUERY_ERROR_EXPECTED_LIST = 'EXPECTED_LIST';
  /**
   * Fields used in WHERE or ORDER BY clauses are missing from the SELECT
   * clause.
   */
  public const QUERY_ERROR_EXPECTED_REFERENCED_FIELD_IN_SELECT_CLAUSE = 'EXPECTED_REFERENCED_FIELD_IN_SELECT_CLAUSE';
  /**
   * SELECT is missing at the beginning of query.
   */
  public const QUERY_ERROR_EXPECTED_SELECT = 'EXPECTED_SELECT';
  /**
   * A list was passed as a value to a condition whose operator expects a single
   * value.
   */
  public const QUERY_ERROR_EXPECTED_SINGLE_VALUE = 'EXPECTED_SINGLE_VALUE';
  /**
   * Missing one or both values with BETWEEN operator.
   */
  public const QUERY_ERROR_EXPECTED_VALUE_WITH_BETWEEN_OPERATOR = 'EXPECTED_VALUE_WITH_BETWEEN_OPERATOR';
  /**
   * Invalid date format. Expected 'YYYY-MM-DD'.
   */
  public const QUERY_ERROR_INVALID_DATE_FORMAT = 'INVALID_DATE_FORMAT';
  /**
   * Misaligned date value for the filter. The date should be the start of a
   * week/month/quarter if the filtered field is
   * segments.week/segments.month/segments.quarter.
   */
  public const QUERY_ERROR_MISALIGNED_DATE_FOR_FILTER = 'MISALIGNED_DATE_FOR_FILTER';
  /**
   * Value passed was not a string when it should have been. For example, it was
   * a number or unquoted literal.
   */
  public const QUERY_ERROR_INVALID_STRING_VALUE = 'INVALID_STRING_VALUE';
  /**
   * A String value passed to the BETWEEN operator does not parse as a date.
   */
  public const QUERY_ERROR_INVALID_VALUE_WITH_BETWEEN_OPERATOR = 'INVALID_VALUE_WITH_BETWEEN_OPERATOR';
  /**
   * The value passed to the DURING operator is not a Date range literal
   */
  public const QUERY_ERROR_INVALID_VALUE_WITH_DURING_OPERATOR = 'INVALID_VALUE_WITH_DURING_OPERATOR';
  /**
   * A value was passed to the LIKE operator.
   */
  public const QUERY_ERROR_INVALID_VALUE_WITH_LIKE_OPERATOR = 'INVALID_VALUE_WITH_LIKE_OPERATOR';
  /**
   * An operator was provided that is inapplicable to the field being filtered.
   */
  public const QUERY_ERROR_OPERATOR_FIELD_MISMATCH = 'OPERATOR_FIELD_MISMATCH';
  /**
   * A Condition was found with an empty list.
   */
  public const QUERY_ERROR_PROHIBITED_EMPTY_LIST_IN_CONDITION = 'PROHIBITED_EMPTY_LIST_IN_CONDITION';
  /**
   * A condition used in the query references an unsupported enum constant.
   */
  public const QUERY_ERROR_PROHIBITED_ENUM_CONSTANT = 'PROHIBITED_ENUM_CONSTANT';
  /**
   * Fields that are not allowed to be selected together were included in the
   * SELECT clause.
   */
  public const QUERY_ERROR_PROHIBITED_FIELD_COMBINATION_IN_SELECT_CLAUSE = 'PROHIBITED_FIELD_COMBINATION_IN_SELECT_CLAUSE';
  /**
   * A field that is not orderable was included in the ORDER BY clause.
   */
  public const QUERY_ERROR_PROHIBITED_FIELD_IN_ORDER_BY_CLAUSE = 'PROHIBITED_FIELD_IN_ORDER_BY_CLAUSE';
  /**
   * A field that is not selectable was included in the SELECT clause.
   */
  public const QUERY_ERROR_PROHIBITED_FIELD_IN_SELECT_CLAUSE = 'PROHIBITED_FIELD_IN_SELECT_CLAUSE';
  /**
   * A field that is not filterable was included in the WHERE clause.
   */
  public const QUERY_ERROR_PROHIBITED_FIELD_IN_WHERE_CLAUSE = 'PROHIBITED_FIELD_IN_WHERE_CLAUSE';
  /**
   * Resource type specified in the FROM clause is not supported by this
   * service.
   */
  public const QUERY_ERROR_PROHIBITED_RESOURCE_TYPE_IN_FROM_CLAUSE = 'PROHIBITED_RESOURCE_TYPE_IN_FROM_CLAUSE';
  /**
   * A field that comes from an incompatible resource was included in the SELECT
   * clause.
   */
  public const QUERY_ERROR_PROHIBITED_RESOURCE_TYPE_IN_SELECT_CLAUSE = 'PROHIBITED_RESOURCE_TYPE_IN_SELECT_CLAUSE';
  /**
   * A field that comes from an incompatible resource was included in the WHERE
   * clause.
   */
  public const QUERY_ERROR_PROHIBITED_RESOURCE_TYPE_IN_WHERE_CLAUSE = 'PROHIBITED_RESOURCE_TYPE_IN_WHERE_CLAUSE';
  /**
   * A metric incompatible with the main resource or other selected segmenting
   * resources was included in the SELECT or WHERE clause.
   */
  public const QUERY_ERROR_PROHIBITED_METRIC_IN_SELECT_OR_WHERE_CLAUSE = 'PROHIBITED_METRIC_IN_SELECT_OR_WHERE_CLAUSE';
  /**
   * A segment incompatible with the main resource or other selected segmenting
   * resources was included in the SELECT or WHERE clause.
   */
  public const QUERY_ERROR_PROHIBITED_SEGMENT_IN_SELECT_OR_WHERE_CLAUSE = 'PROHIBITED_SEGMENT_IN_SELECT_OR_WHERE_CLAUSE';
  /**
   * A segment in the SELECT clause is incompatible with a metric in the SELECT
   * or WHERE clause.
   */
  public const QUERY_ERROR_PROHIBITED_SEGMENT_WITH_METRIC_IN_SELECT_OR_WHERE_CLAUSE = 'PROHIBITED_SEGMENT_WITH_METRIC_IN_SELECT_OR_WHERE_CLAUSE';
  /**
   * A metric may not be selected with one of the selected resource fields, or
   * segmented by one of the selected segment fields.
   */
  public const QUERY_ERROR_PROHIBITED_FIELD_OR_SEGMENT_WITH_METRIC = 'PROHIBITED_FIELD_OR_SEGMENT_WITH_METRIC';
  /**
   * The value passed to the limit clause is too low.
   */
  public const QUERY_ERROR_LIMIT_VALUE_TOO_LOW = 'LIMIT_VALUE_TOO_LOW';
  /**
   * Query has a string containing a newline character.
   */
  public const QUERY_ERROR_PROHIBITED_NEWLINE_IN_STRING = 'PROHIBITED_NEWLINE_IN_STRING';
  /**
   * List contains values of different types.
   */
  public const QUERY_ERROR_PROHIBITED_VALUE_COMBINATION_IN_LIST = 'PROHIBITED_VALUE_COMBINATION_IN_LIST';
  /**
   * The values passed to the BETWEEN operator are not of the same type.
   */
  public const QUERY_ERROR_PROHIBITED_VALUE_COMBINATION_WITH_BETWEEN_OPERATOR = 'PROHIBITED_VALUE_COMBINATION_WITH_BETWEEN_OPERATOR';
  /**
   * Query contains unterminated string.
   */
  public const QUERY_ERROR_STRING_NOT_TERMINATED = 'STRING_NOT_TERMINATED';
  /**
   * Too many segments are specified in SELECT clause.
   */
  public const QUERY_ERROR_TOO_MANY_SEGMENTS = 'TOO_MANY_SEGMENTS';
  /**
   * Query is incomplete and cannot be parsed.
   */
  public const QUERY_ERROR_UNEXPECTED_END_OF_QUERY = 'UNEXPECTED_END_OF_QUERY';
  /**
   * FROM clause cannot be specified in this query.
   */
  public const QUERY_ERROR_UNEXPECTED_FROM_CLAUSE = 'UNEXPECTED_FROM_CLAUSE';
  /**
   * Query contains one or more unrecognized fields.
   */
  public const QUERY_ERROR_UNRECOGNIZED_FIELD = 'UNRECOGNIZED_FIELD';
  /**
   * Query has an unexpected extra part.
   */
  public const QUERY_ERROR_UNEXPECTED_INPUT = 'UNEXPECTED_INPUT';
  /**
   * Metrics cannot be requested for a manager account. To retrieve metrics,
   * issue separate requests against each client account under the manager
   * account.
   */
  public const QUERY_ERROR_REQUESTED_METRICS_FOR_MANAGER = 'REQUESTED_METRICS_FOR_MANAGER';
  /**
   * The number of values (right-hand-side operands) in a filter exceeds the
   * limit.
   */
  public const QUERY_ERROR_FILTER_HAS_TOO_MANY_VALUES = 'FILTER_HAS_TOO_MANY_VALUES';
  /**
   * Required segment field is missing.
   */
  public const QUERY_ERROR_REQUIRED_SEGMENT_FIELD_MISSING = 'REQUIRED_SEGMENT_FIELD_MISSING';
  /**
   * Enum unspecified.
   */
  public const QUOTA_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const QUOTA_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Too many requests.
   */
  public const QUOTA_ERROR_RESOURCE_EXHAUSTED = 'RESOURCE_EXHAUSTED';
  /**
   * Access is prohibited.
   */
  public const QUOTA_ERROR_ACCESS_PROHIBITED = 'ACCESS_PROHIBITED';
  /**
   * Too many requests in a short amount of time.
   */
  public const QUOTA_ERROR_RESOURCE_TEMPORARILY_EXHAUSTED = 'RESOURCE_TEMPORARILY_EXHAUSTED';
  /**
   * Too many expensive requests from query pattern over a short amount of time.
   */
  public const QUOTA_ERROR_EXCESSIVE_SHORT_TERM_QUERY_RESOURCE_CONSUMPTION = 'EXCESSIVE_SHORT_TERM_QUERY_RESOURCE_CONSUMPTION';
  /**
   * Too many expensive requests from query pattern over an extended duration of
   * time.
   */
  public const QUOTA_ERROR_EXCESSIVE_LONG_TERM_QUERY_RESOURCE_CONSUMPTION = 'EXCESSIVE_LONG_TERM_QUERY_RESOURCE_CONSUMPTION';
  /**
   * To activate ad serving in a customer account, it has to be linked with a
   * payment profile (also known as a Billing Customer Number, or BCN), which is
   * then billed for the costs incurred by that customer account. This error
   * will be thrown if too many customer accounts are activated in a short
   * period of time for the same payment profile. Once this rate limit is
   * exceeded, the customer should wait for a week before trying again, or
   * contact Google Ads customer support to reset the rate limits. See
   * https://support.google.com/google-ads/answer/6372658 to learn more about
   * this limit.
   */
  public const QUOTA_ERROR_PAYMENTS_PROFILE_ACTIVATION_RATE_LIMIT_EXCEEDED = 'PAYMENTS_PROFILE_ACTIVATION_RATE_LIMIT_EXCEEDED';
  /**
   * Enum unspecified.
   */
  public const RANGE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const RANGE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Too low.
   */
  public const RANGE_ERROR_TOO_LOW = 'TOO_LOW';
  /**
   * Too high.
   */
  public const RANGE_ERROR_TOO_HIGH = 'TOO_HIGH';
  /**
   * Enum unspecified.
   */
  public const REACH_PLAN_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const REACH_PLAN_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Not forecastable due to missing rate card data.
   */
  public const REACH_PLAN_ERROR_NOT_FORECASTABLE_MISSING_RATE = 'NOT_FORECASTABLE_MISSING_RATE';
  /**
   * Not forecastable due to not enough inventory.
   */
  public const REACH_PLAN_ERROR_NOT_FORECASTABLE_NOT_ENOUGH_INVENTORY = 'NOT_FORECASTABLE_NOT_ENOUGH_INVENTORY';
  /**
   * Not forecastable due to account not being enabled.
   */
  public const REACH_PLAN_ERROR_NOT_FORECASTABLE_ACCOUNT_NOT_ENABLED = 'NOT_FORECASTABLE_ACCOUNT_NOT_ENABLED';
  /**
   * Enum unspecified.
   */
  public const RECOMMENDATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const RECOMMENDATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The specified budget amount is too low for example, lower than minimum
   * currency unit or lower than ad group minimum cost-per-click.
   */
  public const RECOMMENDATION_ERROR_BUDGET_AMOUNT_TOO_SMALL = 'BUDGET_AMOUNT_TOO_SMALL';
  /**
   * The specified budget amount is too large.
   */
  public const RECOMMENDATION_ERROR_BUDGET_AMOUNT_TOO_LARGE = 'BUDGET_AMOUNT_TOO_LARGE';
  /**
   * The specified budget amount is not a valid amount, for example, not a
   * multiple of minimum currency unit.
   */
  public const RECOMMENDATION_ERROR_INVALID_BUDGET_AMOUNT = 'INVALID_BUDGET_AMOUNT';
  /**
   * The specified keyword or ad violates ad policy.
   */
  public const RECOMMENDATION_ERROR_POLICY_ERROR = 'POLICY_ERROR';
  /**
   * The specified bid amount is not valid, for example, too many fractional
   * digits, or negative amount.
   */
  public const RECOMMENDATION_ERROR_INVALID_BID_AMOUNT = 'INVALID_BID_AMOUNT';
  /**
   * The number of keywords in ad group have reached the maximum allowed.
   */
  public const RECOMMENDATION_ERROR_ADGROUP_KEYWORD_LIMIT = 'ADGROUP_KEYWORD_LIMIT';
  /**
   * The recommendation requested to apply has already been applied.
   */
  public const RECOMMENDATION_ERROR_RECOMMENDATION_ALREADY_APPLIED = 'RECOMMENDATION_ALREADY_APPLIED';
  /**
   * The recommendation requested to apply has been invalidated.
   */
  public const RECOMMENDATION_ERROR_RECOMMENDATION_INVALIDATED = 'RECOMMENDATION_INVALIDATED';
  /**
   * The number of operations in a single request exceeds the maximum allowed.
   */
  public const RECOMMENDATION_ERROR_TOO_MANY_OPERATIONS = 'TOO_MANY_OPERATIONS';
  /**
   * There are no operations in the request.
   */
  public const RECOMMENDATION_ERROR_NO_OPERATIONS = 'NO_OPERATIONS';
  /**
   * Operations with multiple recommendation types are not supported when
   * partial failure mode is not enabled.
   */
  public const RECOMMENDATION_ERROR_DIFFERENT_TYPES_NOT_SUPPORTED = 'DIFFERENT_TYPES_NOT_SUPPORTED';
  /**
   * Request contains multiple operations with the same resource_name.
   */
  public const RECOMMENDATION_ERROR_DUPLICATE_RESOURCE_NAME = 'DUPLICATE_RESOURCE_NAME';
  /**
   * The recommendation requested to dismiss has already been dismissed.
   */
  public const RECOMMENDATION_ERROR_RECOMMENDATION_ALREADY_DISMISSED = 'RECOMMENDATION_ALREADY_DISMISSED';
  /**
   * The recommendation apply request was malformed and invalid.
   */
  public const RECOMMENDATION_ERROR_INVALID_APPLY_REQUEST = 'INVALID_APPLY_REQUEST';
  /**
   * The type of recommendation requested to apply is not supported.
   */
  public const RECOMMENDATION_ERROR_RECOMMENDATION_TYPE_APPLY_NOT_SUPPORTED = 'RECOMMENDATION_TYPE_APPLY_NOT_SUPPORTED';
  /**
   * The target multiplier specified is invalid.
   */
  public const RECOMMENDATION_ERROR_INVALID_MULTIPLIER = 'INVALID_MULTIPLIER';
  /**
   * The passed in advertising_channel_type is not supported.
   */
  public const RECOMMENDATION_ERROR_ADVERTISING_CHANNEL_TYPE_GENERATE_NOT_SUPPORTED = 'ADVERTISING_CHANNEL_TYPE_GENERATE_NOT_SUPPORTED';
  /**
   * The passed in recommendation_type is not supported.
   */
  public const RECOMMENDATION_ERROR_RECOMMENDATION_TYPE_GENERATE_NOT_SUPPORTED = 'RECOMMENDATION_TYPE_GENERATE_NOT_SUPPORTED';
  /**
   * One or more recommendation_types need to be passed into the generate
   * recommendations request.
   */
  public const RECOMMENDATION_ERROR_RECOMMENDATION_TYPES_CANNOT_BE_EMPTY = 'RECOMMENDATION_TYPES_CANNOT_BE_EMPTY';
  /**
   * Bidding info is required for the CAMPAIGN_BUDGET recommendation type.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_BIDDING_INFO = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_BIDDING_INFO';
  /**
   * Bidding strategy type is required for the CAMPAIGN_BUDGET recommendation
   * type.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_BIDDING_STRATEGY_TYPE = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_BIDDING_STRATEGY_TYPE';
  /**
   * Asset group info is required for the campaign budget recommendation type.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_ASSET_GROUP_INFO = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_ASSET_GROUP_INFO';
  /**
   * Asset group info with final url is required for the CAMPAIGN_BUDGET
   * recommendation type.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_ASSET_GROUP_INFO_WITH_FINAL_URL = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_ASSET_GROUP_INFO_WITH_FINAL_URL';
  /**
   * Country codes are required for the CAMPAIGN_BUDGET recommendation type for
   * SEARCH channel.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_COUNTRY_CODES_FOR_SEARCH_CHANNEL = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_COUNTRY_CODES_FOR_SEARCH_CHANNEL';
  /**
   * Country code is invalid for the CAMPAIGN_BUDGET recommendation type for
   * SEARCH channel.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_INVALID_COUNTRY_CODE_FOR_SEARCH_CHANNEL = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_INVALID_COUNTRY_CODE_FOR_SEARCH_CHANNEL';
  /**
   * Language codes are required for the CAMPAIGN_BUDGET recommendation type for
   * SEARCH channel.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_LANGUAGE_CODES_FOR_SEARCH_CHANNEL = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_LANGUAGE_CODES_FOR_SEARCH_CHANNEL';
  /**
   * Either positive or negative location ids are required for the
   * CAMPAIGN_BUDGET recommendation type for SEARCH channel.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_EITHER_POSITIVE_OR_NEGATIVE_LOCATION_IDS_FOR_SEARCH_CHANNEL = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_EITHER_POSITIVE_OR_NEGATIVE_LOCATION_IDS_FOR_SEARCH_CHANNEL';
  /**
   * Ad group info is required for the CAMPAIGN_BUDGET recommendation type for
   * SEARCH channel.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_AD_GROUP_INFO_FOR_SEARCH_CHANNEL = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_AD_GROUP_INFO_FOR_SEARCH_CHANNEL';
  /**
   * Keywords are required for the CAMPAIGN_BUDGET recommendation type for
   * SEARCH channel.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_KEYWORDS_FOR_SEARCH_CHANNEL = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_KEYWORDS_FOR_SEARCH_CHANNEL';
  /**
   * Location is required for the CAMPAIGN_BUDGET recommendation type for
   * bidding strategy type TARGET_IMPRESSION_SHARE.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_WITH_CHANNEL_TYPE_SEARCH_AND_BIDDING_STRATEGY_TYPE_TARGET_IMPRESSION_SHARE_REQUIRES_LOCATION = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_WITH_CHANNEL_TYPE_SEARCH_AND_BIDDING_STRATEGY_TYPE_TARGET_IMPRESSION_SHARE_REQUIRES_LOCATION';
  /**
   * Target impression share micros are required for the CAMPAIGN_BUDGET
   * recommendation type for bidding strategy type TARGET_IMPRESSION_SHARE.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_WITH_CHANNEL_TYPE_SEARCH_AND_BIDDING_STRATEGY_TYPE_TARGET_IMPRESSION_SHARE_REQUIRES_TARGET_IMPRESSION_SHARE_MICROS = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_WITH_CHANNEL_TYPE_SEARCH_AND_BIDDING_STRATEGY_TYPE_TARGET_IMPRESSION_SHARE_REQUIRES_TARGET_IMPRESSION_SHARE_MICROS';
  /**
   * Target impression share micros are required to be between 1 and 1000000 for
   * the CAMPAIGN_BUDGET recommendation type for bidding strategy type
   * TARGET_IMPRESSION_SHARE.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_TARGET_IMPRESSION_SHARE_MICROS_BETWEEN_1_AND_1000000 = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_TARGET_IMPRESSION_SHARE_MICROS_BETWEEN_1_AND_1000000';
  /**
   * Target impression share info is required for the CAMPAIGN_BUDGET
   * recommendation type for bidding strategy type TARGET_IMPRESSION_SHARE.
   */
  public const RECOMMENDATION_ERROR_CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_WITH_CHANNEL_TYPE_SEARCH_AND_BIDDING_STRATEGY_TYPE_TARGET_IMPRESSION_SHARE_REQUIRES_TARGET_IMPRESSION_SHARE_INFO = 'CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_WITH_CHANNEL_TYPE_SEARCH_AND_BIDDING_STRATEGY_TYPE_TARGET_IMPRESSION_SHARE_REQUIRES_TARGET_IMPRESSION_SHARE_INFO';
  /**
   * Merchant Center Account ID is only supported for advertising_channel_type
   * PERFORMANCE_MAX.
   */
  public const RECOMMENDATION_ERROR_MERCHANT_CENTER_ACCOUNT_ID_NOT_SUPPORTED_ADVERTISING_CHANNEL_TYPE = 'MERCHANT_CENTER_ACCOUNT_ID_NOT_SUPPORTED_ADVERTISING_CHANNEL_TYPE';
  /**
   * Enum unspecified.
   */
  public const RECOMMENDATION_SUBSCRIPTION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const RECOMMENDATION_SUBSCRIPTION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Enum unspecified.
   */
  public const REGION_CODE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const REGION_CODE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Invalid region code.
   */
  public const REGION_CODE_ERROR_INVALID_REGION_CODE = 'INVALID_REGION_CODE';
  /**
   * Enum unspecified.
   */
  public const REQUEST_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const REQUEST_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Resource name is required for this request.
   */
  public const REQUEST_ERROR_RESOURCE_NAME_MISSING = 'RESOURCE_NAME_MISSING';
  /**
   * Resource name provided is malformed.
   */
  public const REQUEST_ERROR_RESOURCE_NAME_MALFORMED = 'RESOURCE_NAME_MALFORMED';
  /**
   * Resource name provided is malformed.
   */
  public const REQUEST_ERROR_BAD_RESOURCE_ID = 'BAD_RESOURCE_ID';
  /**
   * Customer ID is invalid.
   */
  public const REQUEST_ERROR_INVALID_CUSTOMER_ID = 'INVALID_CUSTOMER_ID';
  /**
   * Mutate operation should have either create, update, or remove specified.
   */
  public const REQUEST_ERROR_OPERATION_REQUIRED = 'OPERATION_REQUIRED';
  /**
   * Requested resource not found.
   */
  public const REQUEST_ERROR_RESOURCE_NOT_FOUND = 'RESOURCE_NOT_FOUND';
  /**
   * Next page token specified in user request is invalid.
   */
  public const REQUEST_ERROR_INVALID_PAGE_TOKEN = 'INVALID_PAGE_TOKEN';
  /**
   * Next page token specified in user request has expired.
   */
  public const REQUEST_ERROR_EXPIRED_PAGE_TOKEN = 'EXPIRED_PAGE_TOKEN';
  /**
   * Page size specified in user request is invalid.
   */
  public const REQUEST_ERROR_INVALID_PAGE_SIZE = 'INVALID_PAGE_SIZE';
  /**
   * Setting the page size is not supported, and will be unavailable in a future
   * version.
   */
  public const REQUEST_ERROR_PAGE_SIZE_NOT_SUPPORTED = 'PAGE_SIZE_NOT_SUPPORTED';
  /**
   * Required field is missing.
   */
  public const REQUEST_ERROR_REQUIRED_FIELD_MISSING = 'REQUIRED_FIELD_MISSING';
  /**
   * The field cannot be modified because it's immutable. It's also possible
   * that the field can be modified using 'create' operation but not 'update'.
   */
  public const REQUEST_ERROR_IMMUTABLE_FIELD = 'IMMUTABLE_FIELD';
  /**
   * Received too many entries in request.
   */
  public const REQUEST_ERROR_TOO_MANY_MUTATE_OPERATIONS = 'TOO_MANY_MUTATE_OPERATIONS';
  /**
   * Request cannot be executed by a manager account.
   */
  public const REQUEST_ERROR_CANNOT_BE_EXECUTED_BY_MANAGER_ACCOUNT = 'CANNOT_BE_EXECUTED_BY_MANAGER_ACCOUNT';
  /**
   * Mutate request was attempting to modify a readonly field. For instance,
   * Budget fields can be requested for Ad Group, but are read-only for
   * adGroups:mutate.
   */
  public const REQUEST_ERROR_CANNOT_MODIFY_FOREIGN_FIELD = 'CANNOT_MODIFY_FOREIGN_FIELD';
  /**
   * Enum value is not permitted.
   */
  public const REQUEST_ERROR_INVALID_ENUM_VALUE = 'INVALID_ENUM_VALUE';
  /**
   * The developer-token parameter is required for all requests.
   */
  public const REQUEST_ERROR_DEVELOPER_TOKEN_PARAMETER_MISSING = 'DEVELOPER_TOKEN_PARAMETER_MISSING';
  /**
   * The login-customer-id parameter is required for this request.
   */
  public const REQUEST_ERROR_LOGIN_CUSTOMER_ID_PARAMETER_MISSING = 'LOGIN_CUSTOMER_ID_PARAMETER_MISSING';
  /**
   * page_token is set in the validate only request
   */
  public const REQUEST_ERROR_VALIDATE_ONLY_REQUEST_HAS_PAGE_TOKEN = 'VALIDATE_ONLY_REQUEST_HAS_PAGE_TOKEN';
  /**
   * return_summary_row cannot be enabled if request did not select any metrics
   * field.
   */
  public const REQUEST_ERROR_CANNOT_RETURN_SUMMARY_ROW_FOR_REQUEST_WITHOUT_METRICS = 'CANNOT_RETURN_SUMMARY_ROW_FOR_REQUEST_WITHOUT_METRICS';
  /**
   * return_summary_row should not be enabled for validate only requests.
   */
  public const REQUEST_ERROR_CANNOT_RETURN_SUMMARY_ROW_FOR_VALIDATE_ONLY_REQUESTS = 'CANNOT_RETURN_SUMMARY_ROW_FOR_VALIDATE_ONLY_REQUESTS';
  /**
   * return_summary_row parameter value should be the same between requests with
   * page_token field set and their original request.
   */
  public const REQUEST_ERROR_INCONSISTENT_RETURN_SUMMARY_ROW_VALUE = 'INCONSISTENT_RETURN_SUMMARY_ROW_VALUE';
  /**
   * The total results count cannot be returned if it was not requested in the
   * original request.
   */
  public const REQUEST_ERROR_TOTAL_RESULTS_COUNT_NOT_ORIGINALLY_REQUESTED = 'TOTAL_RESULTS_COUNT_NOT_ORIGINALLY_REQUESTED';
  /**
   * Deadline specified by the client was too short.
   */
  public const REQUEST_ERROR_RPC_DEADLINE_TOO_SHORT = 'RPC_DEADLINE_TOO_SHORT';
  /**
   * This API version has been sunset and is no longer supported.
   */
  public const REQUEST_ERROR_UNSUPPORTED_VERSION = 'UNSUPPORTED_VERSION';
  /**
   * The Google Cloud project in the request was not found.
   */
  public const REQUEST_ERROR_CLOUD_PROJECT_NOT_FOUND = 'CLOUD_PROJECT_NOT_FOUND';
  /**
   * Enum unspecified.
   */
  public const RESOURCE_ACCESS_DENIED_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const RESOURCE_ACCESS_DENIED_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * User did not have write access.
   */
  public const RESOURCE_ACCESS_DENIED_ERROR_WRITE_ACCESS_DENIED = 'WRITE_ACCESS_DENIED';
  /**
   * Enum unspecified.
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Indicates that this request would exceed the number of allowed resources
   * for the Google Ads account. The exact resource type and limit being checked
   * can be inferred from accountLimitType.
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_ACCOUNT_LIMIT = 'ACCOUNT_LIMIT';
  /**
   * Indicates that this request would exceed the number of allowed resources in
   * a Campaign. The exact resource type and limit being checked can be inferred
   * from accountLimitType, and the numeric id of the Campaign involved is given
   * by enclosingId.
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_CAMPAIGN_LIMIT = 'CAMPAIGN_LIMIT';
  /**
   * Indicates that this request would exceed the number of allowed resources in
   * an ad group. The exact resource type and limit being checked can be
   * inferred from accountLimitType, and the numeric id of the ad group involved
   * is given by enclosingId.
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_ADGROUP_LIMIT = 'ADGROUP_LIMIT';
  /**
   * Indicates that this request would exceed the number of allowed resources in
   * an ad group ad. The exact resource type and limit being checked can be
   * inferred from accountLimitType, and the enclosingId contains the ad group
   * id followed by the ad id, separated by a single comma (,).
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_AD_GROUP_AD_LIMIT = 'AD_GROUP_AD_LIMIT';
  /**
   * Indicates that this request would exceed the number of allowed resources in
   * an ad group criterion. The exact resource type and limit being checked can
   * be inferred from accountLimitType, and the enclosingId contains the ad
   * group id followed by the criterion id, separated by a single comma (,).
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_AD_GROUP_CRITERION_LIMIT = 'AD_GROUP_CRITERION_LIMIT';
  /**
   * Indicates that this request would exceed the number of allowed resources in
   * this shared set. The exact resource type and limit being checked can be
   * inferred from accountLimitType, and the numeric id of the shared set
   * involved is given by enclosingId.
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_SHARED_SET_LIMIT = 'SHARED_SET_LIMIT';
  /**
   * Exceeds a limit related to a matching function.
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_MATCHING_FUNCTION_LIMIT = 'MATCHING_FUNCTION_LIMIT';
  /**
   * The response for this request would exceed the maximum number of rows that
   * can be returned.
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_RESPONSE_ROW_LIMIT_EXCEEDED = 'RESPONSE_ROW_LIMIT_EXCEEDED';
  /**
   * This request would exceed a limit on the number of allowed resources. The
   * details of which type of limit was exceeded will eventually be returned in
   * ErrorDetails.
   */
  public const RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_RESOURCE_LIMIT = 'RESOURCE_LIMIT';
  /**
   * Name unspecified.
   */
  public const SEARCH_TERM_INSIGHT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const SEARCH_TERM_INSIGHT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Search term insights cannot be filtered by metrics when segmenting.
   */
  public const SEARCH_TERM_INSIGHT_ERROR_FILTERING_NOT_ALLOWED_WITH_SEGMENTS = 'FILTERING_NOT_ALLOWED_WITH_SEGMENTS';
  /**
   * Search term insights cannot have a LIMIT when segmenting.
   */
  public const SEARCH_TERM_INSIGHT_ERROR_LIMIT_NOT_ALLOWED_WITH_SEGMENTS = 'LIMIT_NOT_ALLOWED_WITH_SEGMENTS';
  /**
   * A selected field requires another field to be selected with it.
   */
  public const SEARCH_TERM_INSIGHT_ERROR_MISSING_FIELD_IN_SELECT_CLAUSE = 'MISSING_FIELD_IN_SELECT_CLAUSE';
  /**
   * A selected field/resource requires filtering by a single resource.
   */
  public const SEARCH_TERM_INSIGHT_ERROR_REQUIRES_FILTER_BY_SINGLE_RESOURCE = 'REQUIRES_FILTER_BY_SINGLE_RESOURCE';
  /**
   * Search term insights cannot be sorted when segmenting.
   */
  public const SEARCH_TERM_INSIGHT_ERROR_SORTING_NOT_ALLOWED_WITH_SEGMENTS = 'SORTING_NOT_ALLOWED_WITH_SEGMENTS';
  /**
   * Search term insights cannot have a summary row when segmenting.
   */
  public const SEARCH_TERM_INSIGHT_ERROR_SUMMARY_ROW_NOT_ALLOWED_WITH_SEGMENTS = 'SUMMARY_ROW_NOT_ALLOWED_WITH_SEGMENTS';
  /**
   * Enum unspecified.
   */
  public const SETTING_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const SETTING_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The campaign setting is not available for this Google Ads account.
   */
  public const SETTING_ERROR_SETTING_TYPE_IS_NOT_AVAILABLE = 'SETTING_TYPE_IS_NOT_AVAILABLE';
  /**
   * The setting is not compatible with the campaign.
   */
  public const SETTING_ERROR_SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN = 'SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN';
  /**
   * The supplied TargetingSetting contains an invalid CriterionTypeGroup. See
   * CriterionTypeGroup documentation for CriterionTypeGroups allowed in
   * Campaign or AdGroup TargetingSettings.
   */
  public const SETTING_ERROR_TARGETING_SETTING_CONTAINS_INVALID_CRITERION_TYPE_GROUP = 'TARGETING_SETTING_CONTAINS_INVALID_CRITERION_TYPE_GROUP';
  /**
   * TargetingSetting must not explicitly set any of the Demographic
   * CriterionTypeGroups (AGE_RANGE, GENDER, PARENT, INCOME_RANGE) to false
   * (it's okay to not set them at all, in which case the system will set them
   * to true automatically).
   */
  public const SETTING_ERROR_TARGETING_SETTING_DEMOGRAPHIC_CRITERION_TYPE_GROUPS_MUST_BE_SET_TO_TARGET_ALL = 'TARGETING_SETTING_DEMOGRAPHIC_CRITERION_TYPE_GROUPS_MUST_BE_SET_TO_TARGET_ALL';
  /**
   * TargetingSetting cannot change any of the Demographic CriterionTypeGroups
   * (AGE_RANGE, GENDER, PARENT, INCOME_RANGE) from true to false.
   */
  public const SETTING_ERROR_TARGETING_SETTING_CANNOT_CHANGE_TARGET_ALL_TO_FALSE_FOR_DEMOGRAPHIC_CRITERION_TYPE_GROUP = 'TARGETING_SETTING_CANNOT_CHANGE_TARGET_ALL_TO_FALSE_FOR_DEMOGRAPHIC_CRITERION_TYPE_GROUP';
  /**
   * At least one feed id should be present.
   */
  public const SETTING_ERROR_DYNAMIC_SEARCH_ADS_SETTING_AT_LEAST_ONE_FEED_ID_MUST_BE_PRESENT = 'DYNAMIC_SEARCH_ADS_SETTING_AT_LEAST_ONE_FEED_ID_MUST_BE_PRESENT';
  /**
   * The supplied DynamicSearchAdsSetting contains an invalid domain name.
   */
  public const SETTING_ERROR_DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_INVALID_DOMAIN_NAME = 'DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_INVALID_DOMAIN_NAME';
  /**
   * The supplied DynamicSearchAdsSetting contains a subdomain name.
   */
  public const SETTING_ERROR_DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_SUBDOMAIN_NAME = 'DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_SUBDOMAIN_NAME';
  /**
   * The supplied DynamicSearchAdsSetting contains an invalid language code.
   */
  public const SETTING_ERROR_DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_INVALID_LANGUAGE_CODE = 'DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_INVALID_LANGUAGE_CODE';
  /**
   * TargetingSettings in search campaigns should not have
   * CriterionTypeGroup.PLACEMENT set to targetAll.
   */
  public const SETTING_ERROR_TARGET_ALL_IS_NOT_ALLOWED_FOR_PLACEMENT_IN_SEARCH_CAMPAIGN = 'TARGET_ALL_IS_NOT_ALLOWED_FOR_PLACEMENT_IN_SEARCH_CAMPAIGN';
  /**
   * The setting value is not compatible with the campaign type.
   */
  public const SETTING_ERROR_SETTING_VALUE_NOT_COMPATIBLE_WITH_CAMPAIGN = 'SETTING_VALUE_NOT_COMPATIBLE_WITH_CAMPAIGN';
  /**
   * Switching from observation setting to targeting setting is not allowed for
   * Customer Match lists. See https://support.google.com/google-
   * ads/answer/6299717.
   */
  public const SETTING_ERROR_BID_ONLY_IS_NOT_ALLOWED_TO_BE_MODIFIED_WITH_CUSTOMER_MATCH_TARGETING = 'BID_ONLY_IS_NOT_ALLOWED_TO_BE_MODIFIED_WITH_CUSTOMER_MATCH_TARGETING';
  /**
   * Enum unspecified.
   */
  public const SHAREABLE_PREVIEW_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const SHAREABLE_PREVIEW_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The maximum of 10 asset groups was exceeded.
   */
  public const SHAREABLE_PREVIEW_ERROR_TOO_MANY_ASSET_GROUPS_IN_REQUEST = 'TOO_MANY_ASSET_GROUPS_IN_REQUEST';
  /**
   * asset group does not exist under this customer.
   */
  public const SHAREABLE_PREVIEW_ERROR_ASSET_GROUP_DOES_NOT_EXIST_UNDER_THIS_CUSTOMER = 'ASSET_GROUP_DOES_NOT_EXIST_UNDER_THIS_CUSTOMER';
  /**
   * Enum unspecified.
   */
  public const SHARED_CRITERION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const SHARED_CRITERION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The criterion is not appropriate for the shared set type.
   */
  public const SHARED_CRITERION_ERROR_CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE = 'CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE';
  /**
   * Enum unspecified.
   */
  public const SHARED_SET_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const SHARED_SET_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The customer cannot create this type of shared set.
   */
  public const SHARED_SET_ERROR_CUSTOMER_CANNOT_CREATE_SHARED_SET_OF_THIS_TYPE = 'CUSTOMER_CANNOT_CREATE_SHARED_SET_OF_THIS_TYPE';
  /**
   * A shared set with this name already exists.
   */
  public const SHARED_SET_ERROR_DUPLICATE_NAME = 'DUPLICATE_NAME';
  /**
   * Removed shared sets cannot be mutated.
   */
  public const SHARED_SET_ERROR_SHARED_SET_REMOVED = 'SHARED_SET_REMOVED';
  /**
   * The shared set cannot be removed because it is in use.
   */
  public const SHARED_SET_ERROR_SHARED_SET_IN_USE = 'SHARED_SET_IN_USE';
  /**
   * Enum unspecified.
   */
  public const SHOPPING_PRODUCT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const SHOPPING_PRODUCT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * A filter on the `campaign` resource name is missing.
   */
  public const SHOPPING_PRODUCT_ERROR_MISSING_CAMPAIGN_FILTER = 'MISSING_CAMPAIGN_FILTER';
  /**
   * A filter on the `ad_group` resource name is missing.
   */
  public const SHOPPING_PRODUCT_ERROR_MISSING_AD_GROUP_FILTER = 'MISSING_AD_GROUP_FILTER';
  /**
   * Date segmentation is not supported.
   */
  public const SHOPPING_PRODUCT_ERROR_UNSUPPORTED_DATE_SEGMENTATION = 'UNSUPPORTED_DATE_SEGMENTATION';
  /**
   * Enum unspecified.
   */
  public const SIZE_LIMIT_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const SIZE_LIMIT_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The number of entries in the request exceeds the system limit, or the
   * contents of the operations exceed transaction limits due to their size or
   * complexity. Try reducing the number of entries per request.
   */
  public const SIZE_LIMIT_ERROR_REQUEST_SIZE_LIMIT_EXCEEDED = 'REQUEST_SIZE_LIMIT_EXCEEDED';
  /**
   * The number of entries in the response exceeds the system limit.
   */
  public const SIZE_LIMIT_ERROR_RESPONSE_SIZE_LIMIT_EXCEEDED = 'RESPONSE_SIZE_LIMIT_EXCEEDED';
  /**
   * Enum unspecified.
   */
  public const SMART_CAMPAIGN_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const SMART_CAMPAIGN_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The business location id is invalid.
   */
  public const SMART_CAMPAIGN_ERROR_INVALID_BUSINESS_LOCATION_ID = 'INVALID_BUSINESS_LOCATION_ID';
  /**
   * The SmartCampaignSetting resource is only applicable for campaigns with
   * advertising channel type SMART.
   */
  public const SMART_CAMPAIGN_ERROR_INVALID_CAMPAIGN = 'INVALID_CAMPAIGN';
  /**
   * The business name or business location id is required.
   */
  public const SMART_CAMPAIGN_ERROR_BUSINESS_NAME_OR_BUSINESS_LOCATION_ID_MISSING = 'BUSINESS_NAME_OR_BUSINESS_LOCATION_ID_MISSING';
  /**
   * A Smart campaign suggestion request field is required.
   */
  public const SMART_CAMPAIGN_ERROR_REQUIRED_SUGGESTION_FIELD_MISSING = 'REQUIRED_SUGGESTION_FIELD_MISSING';
  /**
   * A location list or proximity is required.
   */
  public const SMART_CAMPAIGN_ERROR_GEO_TARGETS_REQUIRED = 'GEO_TARGETS_REQUIRED';
  /**
   * The locale could not be determined.
   */
  public const SMART_CAMPAIGN_ERROR_CANNOT_DETERMINE_SUGGESTION_LOCALE = 'CANNOT_DETERMINE_SUGGESTION_LOCALE';
  /**
   * The final URL could not be crawled.
   */
  public const SMART_CAMPAIGN_ERROR_FINAL_URL_NOT_CRAWLABLE = 'FINAL_URL_NOT_CRAWLABLE';
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
   * Enum unspecified.
   */
  public const THIRD_PARTY_APP_ANALYTICS_LINK_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const THIRD_PARTY_APP_ANALYTICS_LINK_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The provided analytics provider ID is invalid.
   */
  public const THIRD_PARTY_APP_ANALYTICS_LINK_ERROR_INVALID_ANALYTICS_PROVIDER_ID = 'INVALID_ANALYTICS_PROVIDER_ID';
  /**
   * The provided mobile app ID is invalid.
   */
  public const THIRD_PARTY_APP_ANALYTICS_LINK_ERROR_INVALID_MOBILE_APP_ID = 'INVALID_MOBILE_APP_ID';
  /**
   * The mobile app corresponding to the provided app ID is not active/enabled.
   */
  public const THIRD_PARTY_APP_ANALYTICS_LINK_ERROR_MOBILE_APP_IS_NOT_ENABLED = 'MOBILE_APP_IS_NOT_ENABLED';
  /**
   * Regenerating shareable link ID is only allowed on active links
   */
  public const THIRD_PARTY_APP_ANALYTICS_LINK_ERROR_CANNOT_REGENERATE_SHAREABLE_LINK_ID_FOR_REMOVED_LINK = 'CANNOT_REGENERATE_SHAREABLE_LINK_ID_FOR_REMOVED_LINK';
  /**
   * Enum unspecified.
   */
  public const TIME_ZONE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const TIME_ZONE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Time zone is not valid.
   */
  public const TIME_ZONE_ERROR_INVALID_TIME_ZONE = 'INVALID_TIME_ZONE';
  /**
   * Enum unspecified.
   */
  public const URL_FIELD_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const URL_FIELD_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * The tracking url template is invalid.
   */
  public const URL_FIELD_ERROR_INVALID_TRACKING_URL_TEMPLATE = 'INVALID_TRACKING_URL_TEMPLATE';
  /**
   * The tracking url template contains invalid tag.
   */
  public const URL_FIELD_ERROR_INVALID_TAG_IN_TRACKING_URL_TEMPLATE = 'INVALID_TAG_IN_TRACKING_URL_TEMPLATE';
  /**
   * The tracking url template must contain at least one tag (for example,
   * {lpurl}), This applies only to tracking url template associated with
   * website ads or product ads.
   */
  public const URL_FIELD_ERROR_MISSING_TRACKING_URL_TEMPLATE_TAG = 'MISSING_TRACKING_URL_TEMPLATE_TAG';
  /**
   * The tracking url template must start with a valid protocol (or lpurl tag).
   */
  public const URL_FIELD_ERROR_MISSING_PROTOCOL_IN_TRACKING_URL_TEMPLATE = 'MISSING_PROTOCOL_IN_TRACKING_URL_TEMPLATE';
  /**
   * The tracking url template starts with an invalid protocol.
   */
  public const URL_FIELD_ERROR_INVALID_PROTOCOL_IN_TRACKING_URL_TEMPLATE = 'INVALID_PROTOCOL_IN_TRACKING_URL_TEMPLATE';
  /**
   * The tracking url template contains illegal characters.
   */
  public const URL_FIELD_ERROR_MALFORMED_TRACKING_URL_TEMPLATE = 'MALFORMED_TRACKING_URL_TEMPLATE';
  /**
   * The tracking url template must contain a host name (or lpurl tag).
   */
  public const URL_FIELD_ERROR_MISSING_HOST_IN_TRACKING_URL_TEMPLATE = 'MISSING_HOST_IN_TRACKING_URL_TEMPLATE';
  /**
   * The tracking url template has an invalid or missing top level domain
   * extension.
   */
  public const URL_FIELD_ERROR_INVALID_TLD_IN_TRACKING_URL_TEMPLATE = 'INVALID_TLD_IN_TRACKING_URL_TEMPLATE';
  /**
   * The tracking url template contains nested occurrences of the same
   * conditional tag (for example, {ifmobile:{ifmobile:x}}).
   */
  public const URL_FIELD_ERROR_REDUNDANT_NESTED_TRACKING_URL_TEMPLATE_TAG = 'REDUNDANT_NESTED_TRACKING_URL_TEMPLATE_TAG';
  /**
   * The final url is invalid.
   */
  public const URL_FIELD_ERROR_INVALID_FINAL_URL = 'INVALID_FINAL_URL';
  /**
   * The final url contains invalid tag.
   */
  public const URL_FIELD_ERROR_INVALID_TAG_IN_FINAL_URL = 'INVALID_TAG_IN_FINAL_URL';
  /**
   * The final url contains nested occurrences of the same conditional tag (for
   * example, {ifmobile:{ifmobile:x}}).
   */
  public const URL_FIELD_ERROR_REDUNDANT_NESTED_FINAL_URL_TAG = 'REDUNDANT_NESTED_FINAL_URL_TAG';
  /**
   * The final url must start with a valid protocol.
   */
  public const URL_FIELD_ERROR_MISSING_PROTOCOL_IN_FINAL_URL = 'MISSING_PROTOCOL_IN_FINAL_URL';
  /**
   * The final url starts with an invalid protocol.
   */
  public const URL_FIELD_ERROR_INVALID_PROTOCOL_IN_FINAL_URL = 'INVALID_PROTOCOL_IN_FINAL_URL';
  /**
   * The final url contains illegal characters.
   */
  public const URL_FIELD_ERROR_MALFORMED_FINAL_URL = 'MALFORMED_FINAL_URL';
  /**
   * The final url must contain a host name.
   */
  public const URL_FIELD_ERROR_MISSING_HOST_IN_FINAL_URL = 'MISSING_HOST_IN_FINAL_URL';
  /**
   * The tracking url template has an invalid or missing top level domain
   * extension.
   */
  public const URL_FIELD_ERROR_INVALID_TLD_IN_FINAL_URL = 'INVALID_TLD_IN_FINAL_URL';
  /**
   * The final mobile url is invalid.
   */
  public const URL_FIELD_ERROR_INVALID_FINAL_MOBILE_URL = 'INVALID_FINAL_MOBILE_URL';
  /**
   * The final mobile url contains invalid tag.
   */
  public const URL_FIELD_ERROR_INVALID_TAG_IN_FINAL_MOBILE_URL = 'INVALID_TAG_IN_FINAL_MOBILE_URL';
  /**
   * The final mobile url contains nested occurrences of the same conditional
   * tag (for example, {ifmobile:{ifmobile:x}}).
   */
  public const URL_FIELD_ERROR_REDUNDANT_NESTED_FINAL_MOBILE_URL_TAG = 'REDUNDANT_NESTED_FINAL_MOBILE_URL_TAG';
  /**
   * The final mobile url must start with a valid protocol.
   */
  public const URL_FIELD_ERROR_MISSING_PROTOCOL_IN_FINAL_MOBILE_URL = 'MISSING_PROTOCOL_IN_FINAL_MOBILE_URL';
  /**
   * The final mobile url starts with an invalid protocol.
   */
  public const URL_FIELD_ERROR_INVALID_PROTOCOL_IN_FINAL_MOBILE_URL = 'INVALID_PROTOCOL_IN_FINAL_MOBILE_URL';
  /**
   * The final mobile url contains illegal characters.
   */
  public const URL_FIELD_ERROR_MALFORMED_FINAL_MOBILE_URL = 'MALFORMED_FINAL_MOBILE_URL';
  /**
   * The final mobile url must contain a host name.
   */
  public const URL_FIELD_ERROR_MISSING_HOST_IN_FINAL_MOBILE_URL = 'MISSING_HOST_IN_FINAL_MOBILE_URL';
  /**
   * The tracking url template has an invalid or missing top level domain
   * extension.
   */
  public const URL_FIELD_ERROR_INVALID_TLD_IN_FINAL_MOBILE_URL = 'INVALID_TLD_IN_FINAL_MOBILE_URL';
  /**
   * The final app url is invalid.
   */
  public const URL_FIELD_ERROR_INVALID_FINAL_APP_URL = 'INVALID_FINAL_APP_URL';
  /**
   * The final app url contains invalid tag.
   */
  public const URL_FIELD_ERROR_INVALID_TAG_IN_FINAL_APP_URL = 'INVALID_TAG_IN_FINAL_APP_URL';
  /**
   * The final app url contains nested occurrences of the same conditional tag
   * (for example, {ifmobile:{ifmobile:x}}).
   */
  public const URL_FIELD_ERROR_REDUNDANT_NESTED_FINAL_APP_URL_TAG = 'REDUNDANT_NESTED_FINAL_APP_URL_TAG';
  /**
   * More than one app url found for the same OS type.
   */
  public const URL_FIELD_ERROR_MULTIPLE_APP_URLS_FOR_OSTYPE = 'MULTIPLE_APP_URLS_FOR_OSTYPE';
  /**
   * The OS type given for an app url is not valid.
   */
  public const URL_FIELD_ERROR_INVALID_OSTYPE = 'INVALID_OSTYPE';
  /**
   * The protocol given for an app url is not valid. (For example, "android-
   * app://")
   */
  public const URL_FIELD_ERROR_INVALID_PROTOCOL_FOR_APP_URL = 'INVALID_PROTOCOL_FOR_APP_URL';
  /**
   * The package id (app id) given for an app url is not valid.
   */
  public const URL_FIELD_ERROR_INVALID_PACKAGE_ID_FOR_APP_URL = 'INVALID_PACKAGE_ID_FOR_APP_URL';
  /**
   * The number of url custom parameters for an resource exceeds the maximum
   * limit allowed.
   */
  public const URL_FIELD_ERROR_URL_CUSTOM_PARAMETERS_COUNT_EXCEEDS_LIMIT = 'URL_CUSTOM_PARAMETERS_COUNT_EXCEEDS_LIMIT';
  /**
   * An invalid character appears in the parameter key.
   */
  public const URL_FIELD_ERROR_INVALID_CHARACTERS_IN_URL_CUSTOM_PARAMETER_KEY = 'INVALID_CHARACTERS_IN_URL_CUSTOM_PARAMETER_KEY';
  /**
   * An invalid character appears in the parameter value.
   */
  public const URL_FIELD_ERROR_INVALID_CHARACTERS_IN_URL_CUSTOM_PARAMETER_VALUE = 'INVALID_CHARACTERS_IN_URL_CUSTOM_PARAMETER_VALUE';
  /**
   * The url custom parameter value fails url tag validation.
   */
  public const URL_FIELD_ERROR_INVALID_TAG_IN_URL_CUSTOM_PARAMETER_VALUE = 'INVALID_TAG_IN_URL_CUSTOM_PARAMETER_VALUE';
  /**
   * The custom parameter contains nested occurrences of the same conditional
   * tag (for example, {ifmobile:{ifmobile:x}}).
   */
  public const URL_FIELD_ERROR_REDUNDANT_NESTED_URL_CUSTOM_PARAMETER_TAG = 'REDUNDANT_NESTED_URL_CUSTOM_PARAMETER_TAG';
  /**
   * The protocol (http:// or https://) is missing.
   */
  public const URL_FIELD_ERROR_MISSING_PROTOCOL = 'MISSING_PROTOCOL';
  /**
   * Unsupported protocol in URL. Only http and https are supported.
   */
  public const URL_FIELD_ERROR_INVALID_PROTOCOL = 'INVALID_PROTOCOL';
  /**
   * The url is invalid.
   */
  public const URL_FIELD_ERROR_INVALID_URL = 'INVALID_URL';
  /**
   * Destination Url is deprecated.
   */
  public const URL_FIELD_ERROR_DESTINATION_URL_DEPRECATED = 'DESTINATION_URL_DEPRECATED';
  /**
   * The url contains invalid tag.
   */
  public const URL_FIELD_ERROR_INVALID_TAG_IN_URL = 'INVALID_TAG_IN_URL';
  /**
   * The url must contain at least one tag (for example, {lpurl}).
   */
  public const URL_FIELD_ERROR_MISSING_URL_TAG = 'MISSING_URL_TAG';
  /**
   * Duplicate url id.
   */
  public const URL_FIELD_ERROR_DUPLICATE_URL_ID = 'DUPLICATE_URL_ID';
  /**
   * Invalid url id.
   */
  public const URL_FIELD_ERROR_INVALID_URL_ID = 'INVALID_URL_ID';
  /**
   * The final url suffix cannot begin with '?' or '&' characters and must be a
   * valid query string.
   */
  public const URL_FIELD_ERROR_FINAL_URL_SUFFIX_MALFORMED = 'FINAL_URL_SUFFIX_MALFORMED';
  /**
   * The final url suffix cannot contain {lpurl} related or {ignore} tags.
   */
  public const URL_FIELD_ERROR_INVALID_TAG_IN_FINAL_URL_SUFFIX = 'INVALID_TAG_IN_FINAL_URL_SUFFIX';
  /**
   * The top level domain is invalid, for example, not a public top level domain
   * listed in publicsuffix.org.
   */
  public const URL_FIELD_ERROR_INVALID_TOP_LEVEL_DOMAIN = 'INVALID_TOP_LEVEL_DOMAIN';
  /**
   * Malformed top level domain in URL.
   */
  public const URL_FIELD_ERROR_MALFORMED_TOP_LEVEL_DOMAIN = 'MALFORMED_TOP_LEVEL_DOMAIN';
  /**
   * Malformed URL.
   */
  public const URL_FIELD_ERROR_MALFORMED_URL = 'MALFORMED_URL';
  /**
   * No host found in URL.
   */
  public const URL_FIELD_ERROR_MISSING_HOST = 'MISSING_HOST';
  /**
   * Custom parameter value cannot be null.
   */
  public const URL_FIELD_ERROR_NULL_CUSTOM_PARAMETER_VALUE = 'NULL_CUSTOM_PARAMETER_VALUE';
  /**
   * Track parameter is not supported.
   */
  public const URL_FIELD_ERROR_VALUE_TRACK_PARAMETER_NOT_SUPPORTED = 'VALUE_TRACK_PARAMETER_NOT_SUPPORTED';
  /**
   * The app store connected to the url is not supported.
   */
  public const URL_FIELD_ERROR_UNSUPPORTED_APP_STORE = 'UNSUPPORTED_APP_STORE';
  /**
   * Enum unspecified.
   */
  public const USER_DATA_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const USER_DATA_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Customer is not allowed to perform operations related to Customer Match.
   */
  public const USER_DATA_ERROR_OPERATIONS_FOR_CUSTOMER_MATCH_NOT_ALLOWED = 'OPERATIONS_FOR_CUSTOMER_MATCH_NOT_ALLOWED';
  /**
   * Maximum number of user identifiers allowed for each request is 100 and for
   * each operation is 20.
   */
  public const USER_DATA_ERROR_TOO_MANY_USER_IDENTIFIERS = 'TOO_MANY_USER_IDENTIFIERS';
  /**
   * Current user list is not applicable for the given customer.
   */
  public const USER_DATA_ERROR_USER_LIST_NOT_APPLICABLE = 'USER_LIST_NOT_APPLICABLE';
  /**
   * Enum unspecified.
   */
  public const USER_LIST_CUSTOMER_TYPE_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const USER_LIST_CUSTOMER_TYPE_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Cannot add the conflicting customer types to the same user list.
   * Conflicting labels: 1. Purchasers - Converted Leads 2. Purchasers -
   * Qualified Leads 3. Purchasers - Cart Abandoners 4. Qualified Leads -
   * Converted Leads 5. Disengaged customers - Converted Leads 6. Disengaged
   * customers - Qualified Leads 7. Disengaged customers - Cart Abandoners 8.
   * Converted Leads - Loyalty Tier X Members (X = 1..7) 9. Qualified Leads -
   * Loyalty Tier X Members (X = 1..7) 10. Loyalty Tier X Members - Loyalty Tier
   * Y Members (X != Y)
   */
  public const USER_LIST_CUSTOMER_TYPE_ERROR_CONFLICTING_CUSTOMER_TYPES = 'CONFLICTING_CUSTOMER_TYPES';
  /**
   * The account does not have access to the user list.
   */
  public const USER_LIST_CUSTOMER_TYPE_ERROR_NO_ACCESS_TO_USER_LIST = 'NO_ACCESS_TO_USER_LIST';
  /**
   * The given user list is not eligible for applying customer types. The user
   * list must belong to one of the following types: CRM_BASED, RULE_BASED,
   * ADVERTISER_DATA_MODEL_BASED, GCN.
   */
  public const USER_LIST_CUSTOMER_TYPE_ERROR_USERLIST_NOT_ELIGIBLE = 'USERLIST_NOT_ELIGIBLE';
  /**
   * To edit the user list customer type, conversion tracking must be enabled in
   * your account. If cross-tracking is enabled, your account must be a MCC
   * manager account to modify user list customer types. More info at
   * https://support.google.com/google-ads/answer/3030657
   */
  public const USER_LIST_CUSTOMER_TYPE_ERROR_CONVERSION_TRACKING_NOT_ENABLED_OR_NOT_MCC_MANAGER_ACCOUNT = 'CONVERSION_TRACKING_NOT_ENABLED_OR_NOT_MCC_MANAGER_ACCOUNT';
  /**
   * Too many user lists for the customer type.
   */
  public const USER_LIST_CUSTOMER_TYPE_ERROR_TOO_MANY_USER_LISTS_FOR_THE_CUSTOMER_TYPE = 'TOO_MANY_USER_LISTS_FOR_THE_CUSTOMER_TYPE';
  /**
   * Enum unspecified.
   */
  public const USER_LIST_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const USER_LIST_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Creating and updating external remarketing user lists is not supported.
   */
  public const USER_LIST_ERROR_EXTERNAL_REMARKETING_USER_LIST_MUTATE_NOT_SUPPORTED = 'EXTERNAL_REMARKETING_USER_LIST_MUTATE_NOT_SUPPORTED';
  /**
   * Concrete type of user list is required.
   */
  public const USER_LIST_ERROR_CONCRETE_TYPE_REQUIRED = 'CONCRETE_TYPE_REQUIRED';
  /**
   * Creating/updating user list conversion types requires specifying the
   * conversion type Id.
   */
  public const USER_LIST_ERROR_CONVERSION_TYPE_ID_REQUIRED = 'CONVERSION_TYPE_ID_REQUIRED';
  /**
   * Remarketing user list cannot have duplicate conversion types.
   */
  public const USER_LIST_ERROR_DUPLICATE_CONVERSION_TYPES = 'DUPLICATE_CONVERSION_TYPES';
  /**
   * Conversion type is invalid/unknown.
   */
  public const USER_LIST_ERROR_INVALID_CONVERSION_TYPE = 'INVALID_CONVERSION_TYPE';
  /**
   * User list description is empty or invalid.
   */
  public const USER_LIST_ERROR_INVALID_DESCRIPTION = 'INVALID_DESCRIPTION';
  /**
   * User list name is empty or invalid.
   */
  public const USER_LIST_ERROR_INVALID_NAME = 'INVALID_NAME';
  /**
   * Type of the UserList does not match.
   */
  public const USER_LIST_ERROR_INVALID_TYPE = 'INVALID_TYPE';
  /**
   * Embedded logical user lists are not allowed.
   */
  public const USER_LIST_ERROR_CAN_NOT_ADD_LOGICAL_LIST_AS_LOGICAL_LIST_OPERAND = 'CAN_NOT_ADD_LOGICAL_LIST_AS_LOGICAL_LIST_OPERAND';
  /**
   * User list rule operand is invalid.
   */
  public const USER_LIST_ERROR_INVALID_USER_LIST_LOGICAL_RULE_OPERAND = 'INVALID_USER_LIST_LOGICAL_RULE_OPERAND';
  /**
   * Name is already being used for another user list for the account.
   */
  public const USER_LIST_ERROR_NAME_ALREADY_USED = 'NAME_ALREADY_USED';
  /**
   * Name is required when creating a new conversion type.
   */
  public const USER_LIST_ERROR_NEW_CONVERSION_TYPE_NAME_REQUIRED = 'NEW_CONVERSION_TYPE_NAME_REQUIRED';
  /**
   * The given conversion type name has been used.
   */
  public const USER_LIST_ERROR_CONVERSION_TYPE_NAME_ALREADY_USED = 'CONVERSION_TYPE_NAME_ALREADY_USED';
  /**
   * Only an owner account may edit a user list.
   */
  public const USER_LIST_ERROR_OWNERSHIP_REQUIRED_FOR_SET = 'OWNERSHIP_REQUIRED_FOR_SET';
  /**
   * Creating user list without setting type in oneof user_list field, or
   * creating/updating read-only user list types is not allowed.
   */
  public const USER_LIST_ERROR_USER_LIST_MUTATE_NOT_SUPPORTED = 'USER_LIST_MUTATE_NOT_SUPPORTED';
  /**
   * Rule is invalid.
   */
  public const USER_LIST_ERROR_INVALID_RULE = 'INVALID_RULE';
  /**
   * The specified date range is empty.
   */
  public const USER_LIST_ERROR_INVALID_DATE_RANGE = 'INVALID_DATE_RANGE';
  /**
   * A UserList which is privacy sensitive or legal rejected cannot be mutated
   * by external users.
   */
  public const USER_LIST_ERROR_CAN_NOT_MUTATE_SENSITIVE_USERLIST = 'CAN_NOT_MUTATE_SENSITIVE_USERLIST';
  /**
   * Maximum number of rulebased user lists a customer can have.
   */
  public const USER_LIST_ERROR_MAX_NUM_RULEBASED_USERLISTS = 'MAX_NUM_RULEBASED_USERLISTS';
  /**
   * BasicUserList's billable record field cannot be modified once it is set.
   */
  public const USER_LIST_ERROR_CANNOT_MODIFY_BILLABLE_RECORD_COUNT = 'CANNOT_MODIFY_BILLABLE_RECORD_COUNT';
  /**
   * crm_based_user_list.app_id field must be set when upload_key_type is
   * MOBILE_ADVERTISING_ID.
   */
  public const USER_LIST_ERROR_APP_ID_NOT_SET = 'APP_ID_NOT_SET';
  /**
   * Name of the user list is reserved for system generated lists and cannot be
   * used.
   */
  public const USER_LIST_ERROR_USERLIST_NAME_IS_RESERVED_FOR_SYSTEM_LIST = 'USERLIST_NAME_IS_RESERVED_FOR_SYSTEM_LIST';
  /**
   * Advertiser needs to be on the allow-list to use remarketing lists created
   * from advertiser uploaded data (for example, Customer Match lists).
   */
  public const USER_LIST_ERROR_ADVERTISER_NOT_ON_ALLOWLIST_FOR_USING_UPLOADED_DATA = 'ADVERTISER_NOT_ON_ALLOWLIST_FOR_USING_UPLOADED_DATA';
  /**
   * The provided rule_type is not supported for the user list.
   */
  public const USER_LIST_ERROR_RULE_TYPE_IS_NOT_SUPPORTED = 'RULE_TYPE_IS_NOT_SUPPORTED';
  /**
   * Similar user list cannot be used as a logical user list operand.
   */
  public const USER_LIST_ERROR_CAN_NOT_ADD_A_SIMILAR_USERLIST_AS_LOGICAL_LIST_OPERAND = 'CAN_NOT_ADD_A_SIMILAR_USERLIST_AS_LOGICAL_LIST_OPERAND';
  /**
   * Logical user list should not have a mix of CRM based user list and other
   * types of lists in its rules.
   */
  public const USER_LIST_ERROR_CAN_NOT_MIX_CRM_BASED_IN_LOGICAL_LIST_WITH_OTHER_LISTS = 'CAN_NOT_MIX_CRM_BASED_IN_LOGICAL_LIST_WITH_OTHER_LISTS';
  /**
   * crm_based_user_list.app_id field can only be set when upload_key_type is
   * MOBILE_ADVERTISING_ID.
   */
  public const USER_LIST_ERROR_APP_ID_NOT_ALLOWED = 'APP_ID_NOT_ALLOWED';
  /**
   * Google system generated user lists cannot be mutated.
   */
  public const USER_LIST_ERROR_CANNOT_MUTATE_SYSTEM_LIST = 'CANNOT_MUTATE_SYSTEM_LIST';
  /**
   * The mobile app associated with the remarketing list is sensitive.
   */
  public const USER_LIST_ERROR_MOBILE_APP_IS_SENSITIVE = 'MOBILE_APP_IS_SENSITIVE';
  /**
   * One or more given seed lists do not exist.
   */
  public const USER_LIST_ERROR_SEED_LIST_DOES_NOT_EXIST = 'SEED_LIST_DOES_NOT_EXIST';
  /**
   * One or more given seed lists are not accessible to the current user.
   */
  public const USER_LIST_ERROR_INVALID_SEED_LIST_ACCESS_REASON = 'INVALID_SEED_LIST_ACCESS_REASON';
  /**
   * One or more given seed lists have an unsupported type.
   */
  public const USER_LIST_ERROR_INVALID_SEED_LIST_TYPE = 'INVALID_SEED_LIST_TYPE';
  /**
   * One or more invalid country codes are added to Lookalike UserList.
   */
  public const USER_LIST_ERROR_INVALID_COUNTRY_CODES = 'INVALID_COUNTRY_CODES';
  /**
   * The partner audience source is not supported for the user list type.
   */
  public const USER_LIST_ERROR_PARTNER_AUDIENCE_SOURCE_NOT_SUPPORTED_FOR_USER_LIST_TYPE = 'PARTNER_AUDIENCE_SOURCE_NOT_SUPPORTED_FOR_USER_LIST_TYPE';
  /**
   * The commerce partner is only supported for COMMERCE_AUDIENCE.
   */
  public const USER_LIST_ERROR_COMMERCE_PARTNER_NOT_ALLOWED = 'COMMERCE_PARTNER_NOT_ALLOWED';
  /**
   * The partner audience info is not supported for the user list type.
   */
  public const USER_LIST_ERROR_PARTNER_AUDIENCE_INFO_NOT_SUPPORTED_FOR_USER_LIST_TYPE = 'PARTNER_AUDIENCE_INFO_NOT_SUPPORTED_FOR_USER_LIST_TYPE';
  /**
   * Manager account is not allowed to create this UserList.
   */
  public const USER_LIST_ERROR_PARTNER_MANAGER_ACCOUNT_DISALLOWED = 'PARTNER_MANAGER_ACCOUNT_DISALLOWED';
  /**
   * This UserList can only be created by allowlisted partners.
   */
  public const USER_LIST_ERROR_PARTNER_NOT_ALLOWLISTED_FOR_THIRD_PARTY_PARTNER_DATA = 'PARTNER_NOT_ALLOWLISTED_FOR_THIRD_PARTY_PARTNER_DATA';
  /**
   * The advertiser must accept the Terms of Service to create this UserList.
   */
  public const USER_LIST_ERROR_ADVERTISER_TOS_NOT_ACCEPTED = 'ADVERTISER_TOS_NOT_ACCEPTED';
  /**
   * The advertiser must have an active link to the partner to create this
   * UserList.
   */
  public const USER_LIST_ERROR_ADVERTISER_PARTNER_LINK_MISSING = 'ADVERTISER_PARTNER_LINK_MISSING';
  /**
   * This UserList can only be created for allowlisted advertisers.
   */
  public const USER_LIST_ERROR_ADVERTISER_NOT_ALLOWLISTED_FOR_THIRD_PARTY_PARTNER_DATA = 'ADVERTISER_NOT_ALLOWLISTED_FOR_THIRD_PARTY_PARTNER_DATA';
  /**
   * This UserList is not allowed for this account type.
   */
  public const USER_LIST_ERROR_ACCOUNT_SETTING_TYPE_NOT_ALLOWED = 'ACCOUNT_SETTING_TYPE_NOT_ALLOWED';
  /**
   * Enum unspecified.
   */
  public const VIDEO_CAMPAIGN_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const VIDEO_CAMPAIGN_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Cannot modify the video campaign without reservation. See
   * https://support.google.com/google-ads/answer/9547606.
   */
  public const VIDEO_CAMPAIGN_ERROR_MUTATE_REQUIRES_RESERVATION = 'MUTATE_REQUIRES_RESERVATION';
  /**
   * Enum unspecified.
   */
  public const YOUTUBE_VIDEO_REGISTRATION_ERROR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const YOUTUBE_VIDEO_REGISTRATION_ERROR_UNKNOWN = 'UNKNOWN';
  /**
   * Video to be registered wasn't found.
   */
  public const YOUTUBE_VIDEO_REGISTRATION_ERROR_VIDEO_NOT_FOUND = 'VIDEO_NOT_FOUND';
  /**
   * Video to be registered is not accessible (for example, private).
   */
  public const YOUTUBE_VIDEO_REGISTRATION_ERROR_VIDEO_NOT_ACCESSIBLE = 'VIDEO_NOT_ACCESSIBLE';
  /**
   * Video to be registered is not eligible (for example, mature content).
   */
  public const YOUTUBE_VIDEO_REGISTRATION_ERROR_VIDEO_NOT_ELIGIBLE = 'VIDEO_NOT_ELIGIBLE';
  /**
   * The reasons for the access invitation error
   *
   * @var string
   */
  public $accessInvitationError;
  /**
   * The reasons for account budget proposal errors.
   *
   * @var string
   */
  public $accountBudgetProposalError;
  /**
   * The reasons for the account link status change error
   *
   * @var string
   */
  public $accountLinkError;
  /**
   * The reasons for the ad customizer error
   *
   * @var string
   */
  public $adCustomizerError;
  /**
   * An error with an Ad Group Ad mutate.
   *
   * @var string
   */
  public $adError;
  /**
   * The reasons for the ad group ad error
   *
   * @var string
   */
  public $adGroupAdError;
  /**
   * The reasons for the ad group bid modifier error
   *
   * @var string
   */
  public $adGroupBidModifierError;
  /**
   * The reasons for the ad group criterion customizer error.
   *
   * @var string
   */
  public $adGroupCriterionCustomizerError;
  /**
   * Indicates failure to properly authenticate user.
   *
   * @var string
   */
  public $adGroupCriterionError;
  /**
   * The reasons for the ad group customizer error.
   *
   * @var string
   */
  public $adGroupCustomizerError;
  /**
   * An error with an Ad Group mutate.
   *
   * @var string
   */
  public $adGroupError;
  /**
   * The reasons for the ad group feed error
   *
   * @var string
   */
  public $adGroupFeedError;
  /**
   * The reasons for the ad parameter error
   *
   * @var string
   */
  public $adParameterError;
  /**
   * The reasons for the ad sharing error
   *
   * @var string
   */
  public $adSharingError;
  /**
   * The reasons for the adx error
   *
   * @var string
   */
  public $adxError;
  /**
   * The reasons for the asset error
   *
   * @var string
   */
  public $assetError;
  /**
   * The reasons for the GenAI asset generation error.
   *
   * @var string
   */
  public $assetGenerationError;
  /**
   * The reasons for the asset group asset error
   *
   * @var string
   */
  public $assetGroupAssetError;
  /**
   * The reasons for the asset group error
   *
   * @var string
   */
  public $assetGroupError;
  /**
   * The reasons for the asset group listing group filter error
   *
   * @var string
   */
  public $assetGroupListingGroupFilterError;
  /**
   * The reasons for the asset group hint error
   *
   * @var string
   */
  public $assetGroupSignalError;
  /**
   * The reasons for the asset link error
   *
   * @var string
   */
  public $assetLinkError;
  /**
   * The reasons for the asset set asset error
   *
   * @var string
   */
  public $assetSetAssetError;
  /**
   * The reasons for the asset set error
   *
   * @var string
   */
  public $assetSetError;
  /**
   * The reasons for the asset set link error
   *
   * @var string
   */
  public $assetSetLinkError;
  /**
   * The reasons for the audience error
   *
   * @var string
   */
  public $audienceError;
  /**
   * The reasons for the Audience Insights error
   *
   * @var string
   */
  public $audienceInsightsError;
  /**
   * Indicates failure to properly authenticate user.
   *
   * @var string
   */
  public $authenticationError;
  /**
   * An error encountered when trying to authorize a user.
   *
   * @var string
   */
  public $authorizationError;
  /**
   * The reasons for error in automatically created asset removal action.
   *
   * @var string
   */
  public $automaticallyCreatedAssetRemovalError;
  /**
   * The reasons for the batch job error
   *
   * @var string
   */
  public $batchJobError;
  /**
   * The reasons for the Benchmarks error.
   *
   * @var string
   */
  public $benchmarksError;
  /**
   * The reasons for the bidding errors
   *
   * @var string
   */
  public $biddingError;
  /**
   * An error with a Bidding Strategy mutate.
   *
   * @var string
   */
  public $biddingStrategyError;
  /**
   * The reasons for the billing setup error
   *
   * @var string
   */
  public $billingSetupError;
  /**
   * The reasons for the brand guidelines migration error.
   *
   * @var string
   */
  public $brandGuidelinesMigrationError;
  /**
   * An error with a Campaign Budget mutate.
   *
   * @var string
   */
  public $campaignBudgetError;
  /**
   * The reasons for the campaign conversion goal error
   *
   * @var string
   */
  public $campaignConversionGoalError;
  /**
   * The reasons for the campaign criterion error
   *
   * @var string
   */
  public $campaignCriterionError;
  /**
   * The reasons for the campaign customizer error.
   *
   * @var string
   */
  public $campaignCustomizerError;
  /**
   * The reasons for the campaign draft error
   *
   * @var string
   */
  public $campaignDraftError;
  /**
   * An error with a Campaign mutate.
   *
   * @var string
   */
  public $campaignError;
  /**
   * The reasons for the campaign experiment error
   *
   * @var string
   */
  public $campaignExperimentError;
  /**
   * The reasons for the campaign feed error
   *
   * @var string
   */
  public $campaignFeedError;
  /**
   * The reasons for the campaign goal config error.
   *
   * @var string
   */
  public $campaignGoalConfigError;
  /**
   * The reasons for the campaign lifecycle goal error
   *
   * @var string
   */
  public $campaignLifecycleGoalError;
  /**
   * The reasons for the campaign shared set error
   *
   * @var string
   */
  public $campaignSharedSetError;
  /**
   * The reasons for the change event error
   *
   * @var string
   */
  public $changeEventError;
  /**
   * The reasons for the change status error
   *
   * @var string
   */
  public $changeStatusError;
  /**
   * The reasons for the click view error
   *
   * @var string
   */
  public $clickViewError;
  /**
   * The reasons for the collection size error
   *
   * @var string
   */
  public $collectionSizeError;
  /**
   * The reasons for the context error
   *
   * @var string
   */
  public $contextError;
  /**
   * The reasons for the conversion action error
   *
   * @var string
   */
  public $conversionActionError;
  /**
   * The reasons for the conversion adjustment upload error
   *
   * @var string
   */
  public $conversionAdjustmentUploadError;
  /**
   * The reasons for the conversion custom variable error
   *
   * @var string
   */
  public $conversionCustomVariableError;
  /**
   * The reasons for the conversion goal campaign config error
   *
   * @var string
   */
  public $conversionGoalCampaignConfigError;
  /**
   * The reasons for the conversion upload error
   *
   * @var string
   */
  public $conversionUploadError;
  /**
   * The reasons for the conversion value rule error
   *
   * @var string
   */
  public $conversionValueRuleError;
  /**
   * The reasons for the conversion value rule set error
   *
   * @var string
   */
  public $conversionValueRuleSetError;
  /**
   * The reasons for the country code error
   *
   * @var string
   */
  public $countryCodeError;
  /**
   * The reasons for the criterion error
   *
   * @var string
   */
  public $criterionError;
  /**
   * The reasons for the currency code error
   *
   * @var string
   */
  public $currencyCodeError;
  /**
   * The reasons for the currency errors.
   *
   * @var string
   */
  public $currencyError;
  /**
   * The reasons for the custom audience error
   *
   * @var string
   */
  public $customAudienceError;
  /**
   * The reasons for the custom column error
   *
   * @var string
   */
  public $customColumnError;
  /**
   * The reasons for the custom conversion goal error
   *
   * @var string
   */
  public $customConversionGoalError;
  /**
   * The reasons for the custom interest error
   *
   * @var string
   */
  public $customInterestError;
  /**
   * The reasons for the customer client link error
   *
   * @var string
   */
  public $customerClientLinkError;
  /**
   * The reasons for the customer customizer error.
   *
   * @var string
   */
  public $customerCustomizerError;
  /**
   * The reasons for the customer error
   *
   * @var string
   */
  public $customerError;
  /**
   * The reasons for the customer feed error
   *
   * @var string
   */
  public $customerFeedError;
  /**
   * The reasons for the customer lifecycle goal error
   *
   * @var string
   */
  public $customerLifecycleGoalError;
  /**
   * The reasons for the customer manager link error
   *
   * @var string
   */
  public $customerManagerLinkError;
  /**
   * The reasons for the customer SK Ad network conversion value schema error
   *
   * @var string
   */
  public $customerSkAdNetworkConversionValueSchemaError;
  /**
   * The reasons for the customer user access mutate error
   *
   * @var string
   */
  public $customerUserAccessError;
  /**
   * The reasons for the customizer attribute error.
   *
   * @var string
   */
  public $customizerAttributeError;
  /**
   * The reasons for the data link error
   *
   * @var string
   */
  public $dataLinkError;
  /**
   * The reasons for the database error.
   *
   * @var string
   */
  public $databaseError;
  /**
   * The reasons for the date error
   *
   * @var string
   */
  public $dateError;
  /**
   * The reasons for the date range error
   *
   * @var string
   */
  public $dateRangeError;
  /**
   * The reasons for the distinct error
   *
   * @var string
   */
  public $distinctError;
  /**
   * The reason for enum error.
   *
   * @var string
   */
  public $enumError;
  /**
   * The reasons for the experiment arm error
   *
   * @var string
   */
  public $experimentArmError;
  /**
   * The reasons for the experiment error
   *
   * @var string
   */
  public $experimentError;
  /**
   * The reasons for the extension feed item error
   *
   * @var string
   */
  public $extensionFeedItemError;
  /**
   * The reasons for the extension setting error
   *
   * @var string
   */
  public $extensionSettingError;
  /**
   * The reasons for the feed attribute reference error
   *
   * @var string
   */
  public $feedAttributeReferenceError;
  /**
   * The reasons for the feed error
   *
   * @var string
   */
  public $feedError;
  /**
   * The reasons for the feed item error
   *
   * @var string
   */
  public $feedItemError;
  /**
   * The reasons for the feed item set error
   *
   * @var string
   */
  public $feedItemSetError;
  /**
   * The reasons for the feed item set link error
   *
   * @var string
   */
  public $feedItemSetLinkError;
  /**
   * The reasons for the feed item target error
   *
   * @var string
   */
  public $feedItemTargetError;
  /**
   * The reasons for the feed item validation error
   *
   * @var string
   */
  public $feedItemValidationError;
  /**
   * The reasons for the feed mapping error
   *
   * @var string
   */
  public $feedMappingError;
  /**
   * The reasons for the field error
   *
   * @var string
   */
  public $fieldError;
  /**
   * An error with a field mask
   *
   * @var string
   */
  public $fieldMaskError;
  /**
   * The reasons for the final url expansion asset view error
   *
   * @var string
   */
  public $finalUrlExpansionAssetViewError;
  /**
   * The reasons for the function error
   *
   * @var string
   */
  public $functionError;
  /**
   * The reasons for the function parsing error
   *
   * @var string
   */
  public $functionParsingError;
  /**
   * The reasons for the geo target constant suggestion error.
   *
   * @var string
   */
  public $geoTargetConstantSuggestionError;
  /**
   * The reasons for the goal error.
   *
   * @var string
   */
  public $goalError;
  /**
   * The reasons for the header error.
   *
   * @var string
   */
  public $headerError;
  /**
   * The reasons for the id error
   *
   * @var string
   */
  public $idError;
  /**
   * The reasons for an identity verification error.
   *
   * @var string
   */
  public $identityVerificationError;
  /**
   * The reasons for the image error
   *
   * @var string
   */
  public $imageError;
  /**
   * The reasons for the incentive error
   *
   * @var string
   */
  public $incentiveError;
  /**
   * An unexpected server-side error.
   *
   * @var string
   */
  public $internalError;
  /**
   * The reasons for invalid parameter errors.
   *
   * @var string
   */
  public $invalidParameterError;
  /**
   * The reasons for the invoice error
   *
   * @var string
   */
  public $invoiceError;
  /**
   * The reason for keyword plan ad group error.
   *
   * @var string
   */
  public $keywordPlanAdGroupError;
  /**
   * The reason for keyword plan ad group keyword error.
   *
   * @var string
   */
  public $keywordPlanAdGroupKeywordError;
  /**
   * The reason for keyword plan campaign error.
   *
   * @var string
   */
  public $keywordPlanCampaignError;
  /**
   * The reason for keyword plan campaign keyword error.
   *
   * @var string
   */
  public $keywordPlanCampaignKeywordError;
  /**
   * The reason for keyword plan error.
   *
   * @var string
   */
  public $keywordPlanError;
  /**
   * The reason for keyword idea error.
   *
   * @var string
   */
  public $keywordPlanIdeaError;
  /**
   * The reason for the label error.
   *
   * @var string
   */
  public $labelError;
  /**
   * The reasons for the language code error
   *
   * @var string
   */
  public $languageCodeError;
  /**
   * An error with a list operation.
   *
   * @var string
   */
  public $listOperationError;
  /**
   * The reasons for the manager link error
   *
   * @var string
   */
  public $managerLinkError;
  /**
   * The reasons for the media bundle error
   *
   * @var string
   */
  public $mediaBundleError;
  /**
   * The reasons for the media file error
   *
   * @var string
   */
  public $mediaFileError;
  /**
   * The reasons for media uploading errors.
   *
   * @var string
   */
  public $mediaUploadError;
  /**
   * Container for enum describing possible merchant center errors.
   *
   * @var string
   */
  public $merchantCenterError;
  /**
   * The reasons for the multiplier error
   *
   * @var string
   */
  public $multiplierError;
  /**
   * An error with a mutate
   *
   * @var string
   */
  public $mutateError;
  /**
   * The reasons for the new resource creation error
   *
   * @var string
   */
  public $newResourceCreationError;
  /**
   * The reasons for the not allowlisted error
   *
   * @var string
   */
  public $notAllowlistedError;
  /**
   * The reasons for the not empty error
   *
   * @var string
   */
  public $notEmptyError;
  /**
   * The reasons for the null error
   *
   * @var string
   */
  public $nullError;
  /**
   * The reasons for the offline user data job error.
   *
   * @var string
   */
  public $offlineUserDataJobError;
  /**
   * The reasons for the operation access denied error
   *
   * @var string
   */
  public $operationAccessDeniedError;
  /**
   * The reasons for the operator error
   *
   * @var string
   */
  public $operatorError;
  /**
   * The reasons for the mutate job error
   *
   * @var string
   */
  public $partialFailureError;
  /**
   * The reasons for errors in payments accounts service
   *
   * @var string
   */
  public $paymentsAccountError;
  /**
   * The reasons for the policy finding error.
   *
   * @var string
   */
  public $policyFindingError;
  /**
   * The reasons for the policy validation parameter error
   *
   * @var string
   */
  public $policyValidationParameterError;
  /**
   * The reasons for the policy violation error
   *
   * @var string
   */
  public $policyViolationError;
  /**
   * The reasons for the product link error
   *
   * @var string
   */
  public $productLinkError;
  /**
   * The reasons for the product link invitation error
   *
   * @var string
   */
  public $productLinkInvitationError;
  /**
   * An error with the query
   *
   * @var string
   */
  public $queryError;
  /**
   * An error with the amount of quota remaining.
   *
   * @var string
   */
  public $quotaError;
  /**
   * The reasons for the range error
   *
   * @var string
   */
  public $rangeError;
  /**
   * The reasons for the reach plan error
   *
   * @var string
   */
  public $reachPlanError;
  /**
   * The reasons for error in applying a recommendation
   *
   * @var string
   */
  public $recommendationError;
  /**
   * The reasons for the recommendation subscription error.
   *
   * @var string
   */
  public $recommendationSubscriptionError;
  /**
   * The reasons for the region code error
   *
   * @var string
   */
  public $regionCodeError;
  /**
   * An error caused by the request
   *
   * @var string
   */
  public $requestError;
  /**
   * The reasons for the resource access denied error
   *
   * @var string
   */
  public $resourceAccessDeniedError;
  /**
   * The reasons for the resource count limit exceeded error
   *
   * @var string
   */
  public $resourceCountLimitExceededError;
  /**
   * The reasons for the Search term insight error
   *
   * @var string
   */
  public $searchTermInsightError;
  /**
   * The reasons for the setting error
   *
   * @var string
   */
  public $settingError;
  /**
   * The reasons for the shareable preview error.
   *
   * @var string
   */
  public $shareablePreviewError;
  /**
   * The reasons for the shared criterion error
   *
   * @var string
   */
  public $sharedCriterionError;
  /**
   * The reasons for the shared set error
   *
   * @var string
   */
  public $sharedSetError;
  /**
   * The reasons for error in querying shopping product.
   *
   * @var string
   */
  public $shoppingProductError;
  /**
   * The reasons for the size limit error
   *
   * @var string
   */
  public $sizeLimitError;
  /**
   * The reasons for the Smart campaign error
   *
   * @var string
   */
  public $smartCampaignError;
  /**
   * The reasons for the string format error
   *
   * @var string
   */
  public $stringFormatError;
  /**
   * The reasons for the string length error
   *
   * @var string
   */
  public $stringLengthError;
  /**
   * The reasons for the third party app analytics link mutate error
   *
   * @var string
   */
  public $thirdPartyAppAnalyticsLinkError;
  /**
   * The reasons for the time zone error
   *
   * @var string
   */
  public $timeZoneError;
  /**
   * An error with a URL field mutate.
   *
   * @var string
   */
  public $urlFieldError;
  /**
   * The reasons for the user data error.
   *
   * @var string
   */
  public $userDataError;
  /**
   * The reasons for a user list customer type error.
   *
   * @var string
   */
  public $userListCustomerTypeError;
  /**
   * The reasons for the user list error
   *
   * @var string
   */
  public $userListError;
  /**
   * An error with a Video Campaign mutate.
   *
   * @var string
   */
  public $videoCampaignError;
  /**
   * The reasons for YouTube video registration errors.
   *
   * @var string
   */
  public $youtubeVideoRegistrationError;

  /**
   * The reasons for the access invitation error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_EMAIL_ADDRESS,
   * EMAIL_ADDRESS_ALREADY_HAS_ACCESS, INVALID_INVITATION_STATUS,
   * GOOGLE_CONSUMER_ACCOUNT_NOT_ALLOWED, INVALID_INVITATION_ID,
   * EMAIL_ADDRESS_ALREADY_HAS_PENDING_INVITATION,
   * PENDING_INVITATIONS_LIMIT_EXCEEDED, EMAIL_DOMAIN_POLICY_VIOLATED
   *
   * @param self::ACCESS_INVITATION_ERROR_* $accessInvitationError
   */
  public function setAccessInvitationError($accessInvitationError)
  {
    $this->accessInvitationError = $accessInvitationError;
  }
  /**
   * @return self::ACCESS_INVITATION_ERROR_*
   */
  public function getAccessInvitationError()
  {
    return $this->accessInvitationError;
  }
  /**
   * The reasons for account budget proposal errors.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FIELD_MASK_NOT_ALLOWED,
   * IMMUTABLE_FIELD, REQUIRED_FIELD_MISSING, CANNOT_CANCEL_APPROVED_PROPOSAL,
   * CANNOT_REMOVE_UNAPPROVED_BUDGET, CANNOT_REMOVE_RUNNING_BUDGET,
   * CANNOT_END_UNAPPROVED_BUDGET, CANNOT_END_INACTIVE_BUDGET,
   * BUDGET_NAME_REQUIRED, CANNOT_UPDATE_OLD_BUDGET, CANNOT_END_IN_PAST,
   * CANNOT_EXTEND_END_TIME, PURCHASE_ORDER_NUMBER_REQUIRED,
   * PENDING_UPDATE_PROPOSAL_EXISTS,
   * MULTIPLE_BUDGETS_NOT_ALLOWED_FOR_UNAPPROVED_BILLING_SETUP,
   * CANNOT_UPDATE_START_TIME_FOR_STARTED_BUDGET,
   * SPENDING_LIMIT_LOWER_THAN_ACCRUED_COST_NOT_ALLOWED, UPDATE_IS_NO_OP,
   * END_TIME_MUST_FOLLOW_START_TIME,
   * BUDGET_DATE_RANGE_INCOMPATIBLE_WITH_BILLING_SETUP, NOT_AUTHORIZED,
   * INVALID_BILLING_SETUP, OVERLAPS_EXISTING_BUDGET,
   * CANNOT_CREATE_BUDGET_THROUGH_API, INVALID_MASTER_SERVICE_AGREEMENT,
   * CANCELED_BILLING_SETUP
   *
   * @param self::ACCOUNT_BUDGET_PROPOSAL_ERROR_* $accountBudgetProposalError
   */
  public function setAccountBudgetProposalError($accountBudgetProposalError)
  {
    $this->accountBudgetProposalError = $accountBudgetProposalError;
  }
  /**
   * @return self::ACCOUNT_BUDGET_PROPOSAL_ERROR_*
   */
  public function getAccountBudgetProposalError()
  {
    return $this->accountBudgetProposalError;
  }
  /**
   * The reasons for the account link status change error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_STATUS, PERMISSION_DENIED
   *
   * @param self::ACCOUNT_LINK_ERROR_* $accountLinkError
   */
  public function setAccountLinkError($accountLinkError)
  {
    $this->accountLinkError = $accountLinkError;
  }
  /**
   * @return self::ACCOUNT_LINK_ERROR_*
   */
  public function getAccountLinkError()
  {
    return $this->accountLinkError;
  }
  /**
   * The reasons for the ad customizer error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, COUNTDOWN_INVALID_DATE_FORMAT,
   * COUNTDOWN_DATE_IN_PAST, COUNTDOWN_INVALID_LOCALE,
   * COUNTDOWN_INVALID_START_DAYS_BEFORE, UNKNOWN_USER_LIST
   *
   * @param self::AD_CUSTOMIZER_ERROR_* $adCustomizerError
   */
  public function setAdCustomizerError($adCustomizerError)
  {
    $this->adCustomizerError = $adCustomizerError;
  }
  /**
   * @return self::AD_CUSTOMIZER_ERROR_*
   */
  public function getAdCustomizerError()
  {
    return $this->adCustomizerError;
  }
  /**
   * An error with an Ad Group Ad mutate.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * AD_CUSTOMIZERS_NOT_SUPPORTED_FOR_AD_TYPE, APPROXIMATELY_TOO_LONG,
   * APPROXIMATELY_TOO_SHORT, BAD_SNIPPET, CANNOT_MODIFY_AD,
   * CANNOT_SET_BUSINESS_NAME_IF_URL_SET, CANNOT_SET_FIELD,
   * CANNOT_SET_FIELD_WITH_ORIGIN_AD_ID_SET,
   * CANNOT_SET_FIELD_WITH_AD_ID_SET_FOR_SHARING,
   * CANNOT_SET_ALLOW_FLEXIBLE_COLOR_FALSE,
   * CANNOT_SET_COLOR_CONTROL_WHEN_NATIVE_FORMAT_SETTING, CANNOT_SET_URL,
   * CANNOT_SET_WITHOUT_FINAL_URLS, CANNOT_SET_WITH_FINAL_URLS,
   * CANNOT_SET_WITH_URL_DATA, CANNOT_USE_AD_SUBCLASS_FOR_OPERATOR,
   * CUSTOMER_NOT_APPROVED_MOBILEADS, CUSTOMER_NOT_APPROVED_THIRDPARTY_ADS,
   * CUSTOMER_NOT_APPROVED_THIRDPARTY_REDIRECT_ADS, CUSTOMER_NOT_ELIGIBLE,
   * CUSTOMER_NOT_ELIGIBLE_FOR_UPDATING_BEACON_URL, DIMENSION_ALREADY_IN_UNION,
   * DIMENSION_MUST_BE_SET, DIMENSION_NOT_IN_UNION,
   * DISPLAY_URL_CANNOT_BE_SPECIFIED, DOMESTIC_PHONE_NUMBER_FORMAT,
   * EMERGENCY_PHONE_NUMBER, EMPTY_FIELD,
   * FEED_ATTRIBUTE_MUST_HAVE_MAPPING_FOR_TYPE_ID,
   * FEED_ATTRIBUTE_MAPPING_TYPE_MISMATCH, ILLEGAL_AD_CUSTOMIZER_TAG_USE,
   * ILLEGAL_TAG_USE, INCONSISTENT_DIMENSIONS,
   * INCONSISTENT_STATUS_IN_TEMPLATE_UNION, INCORRECT_LENGTH,
   * INELIGIBLE_FOR_UPGRADE, INVALID_AD_ADDRESS_CAMPAIGN_TARGET,
   * INVALID_AD_TYPE, INVALID_ATTRIBUTES_FOR_MOBILE_IMAGE,
   * INVALID_ATTRIBUTES_FOR_MOBILE_TEXT, INVALID_CALL_TO_ACTION_TEXT,
   * INVALID_CHARACTER_FOR_URL, INVALID_COUNTRY_CODE,
   * INVALID_EXPANDED_DYNAMIC_SEARCH_AD_TAG, INVALID_INPUT,
   * INVALID_MARKUP_LANGUAGE, INVALID_MOBILE_CARRIER,
   * INVALID_MOBILE_CARRIER_TARGET, INVALID_NUMBER_OF_ELEMENTS,
   * INVALID_PHONE_NUMBER_FORMAT, INVALID_RICH_MEDIA_CERTIFIED_VENDOR_FORMAT_ID,
   * INVALID_TEMPLATE_DATA, INVALID_TEMPLATE_ELEMENT_FIELD_TYPE,
   * INVALID_TEMPLATE_ID, LINE_TOO_WIDE, MISSING_AD_CUSTOMIZER_MAPPING,
   * MISSING_ADDRESS_COMPONENT, MISSING_ADVERTISEMENT_NAME,
   * MISSING_BUSINESS_NAME, MISSING_DESCRIPTION1, MISSING_DESCRIPTION2,
   * MISSING_DESTINATION_URL_TAG, MISSING_LANDING_PAGE_URL_TAG,
   * MISSING_DIMENSION, MISSING_DISPLAY_URL, MISSING_HEADLINE, MISSING_HEIGHT,
   * MISSING_IMAGE, MISSING_MARKETING_IMAGE_OR_PRODUCT_VIDEOS,
   * MISSING_MARKUP_LANGUAGES, MISSING_MOBILE_CARRIER, MISSING_PHONE,
   * MISSING_REQUIRED_TEMPLATE_FIELDS, MISSING_TEMPLATE_FIELD_VALUE,
   * MISSING_TEXT, MISSING_VISIBLE_URL, MISSING_WIDTH,
   * MULTIPLE_DISTINCT_FEEDS_UNSUPPORTED, MUST_USE_TEMP_AD_UNION_ID_ON_ADD,
   * TOO_LONG, TOO_SHORT, UNION_DIMENSIONS_CANNOT_CHANGE,
   * UNKNOWN_ADDRESS_COMPONENT, UNKNOWN_FIELD_NAME, UNKNOWN_UNIQUE_NAME,
   * UNSUPPORTED_DIMENSIONS, URL_INVALID_SCHEME, URL_INVALID_TOP_LEVEL_DOMAIN,
   * URL_MALFORMED, URL_NO_HOST, URL_NOT_EQUIVALENT, URL_HOST_NAME_TOO_LONG,
   * URL_NO_SCHEME, URL_NO_TOP_LEVEL_DOMAIN, URL_PATH_NOT_ALLOWED,
   * URL_PORT_NOT_ALLOWED, URL_QUERY_NOT_ALLOWED,
   * URL_SCHEME_BEFORE_EXPANDED_DYNAMIC_SEARCH_AD_TAG,
   * USER_DOES_NOT_HAVE_ACCESS_TO_TEMPLATE, INCONSISTENT_EXPANDABLE_SETTINGS,
   * INVALID_FORMAT, INVALID_FIELD_TEXT, ELEMENT_NOT_PRESENT, IMAGE_ERROR,
   * VALUE_NOT_IN_RANGE, FIELD_NOT_PRESENT, ADDRESS_NOT_COMPLETE,
   * ADDRESS_INVALID, VIDEO_RETRIEVAL_ERROR, AUDIO_ERROR,
   * INVALID_YOUTUBE_DISPLAY_URL, TOO_MANY_PRODUCT_IMAGES,
   * TOO_MANY_PRODUCT_VIDEOS, INCOMPATIBLE_AD_TYPE_AND_DEVICE_PREFERENCE,
   * CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY,
   * CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED, DISALLOWED_NUMBER_TYPE,
   * PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY,
   * PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY,
   * PREMIUM_RATE_NUMBER_NOT_ALLOWED, VANITY_PHONE_NUMBER_NOT_ALLOWED,
   * INVALID_CALL_CONVERSION_TYPE_ID,
   * CANNOT_DISABLE_CALL_CONVERSION_AND_SET_CONVERSION_TYPE_ID,
   * CANNOT_SET_PATH2_WITHOUT_PATH1,
   * MISSING_DYNAMIC_SEARCH_ADS_SETTING_DOMAIN_NAME,
   * INCOMPATIBLE_WITH_RESTRICTION_TYPE,
   * CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED,
   * MISSING_IMAGE_OR_MEDIA_BUNDLE, PRODUCT_TYPE_NOT_SUPPORTED_IN_THIS_CAMPAIGN,
   * PLACEHOLDER_CANNOT_HAVE_EMPTY_DEFAULT_VALUE,
   * PLACEHOLDER_COUNTDOWN_FUNCTION_CANNOT_HAVE_DEFAULT_VALUE,
   * PLACEHOLDER_DEFAULT_VALUE_MISSING, UNEXPECTED_PLACEHOLDER_DEFAULT_VALUE,
   * AD_CUSTOMIZERS_MAY_NOT_BE_ADJACENT,
   * UPDATING_AD_WITH_NO_ENABLED_ASSOCIATION,
   * CALL_AD_VERIFICATION_URL_FINAL_URL_DOES_NOT_HAVE_SAME_DOMAIN,
   * CALL_AD_FINAL_URL_AND_VERIFICATION_URL_CANNOT_BOTH_BE_EMPTY,
   * TOO_MANY_AD_CUSTOMIZERS, INVALID_AD_CUSTOMIZER_FORMAT,
   * NESTED_AD_CUSTOMIZER_SYNTAX, UNSUPPORTED_AD_CUSTOMIZER_SYNTAX,
   * UNPAIRED_BRACE_IN_AD_CUSTOMIZER_TAG,
   * MORE_THAN_ONE_COUNTDOWN_TAG_TYPE_EXISTS,
   * DATE_TIME_IN_COUNTDOWN_TAG_IS_INVALID, DATE_TIME_IN_COUNTDOWN_TAG_IS_PAST,
   * UNRECOGNIZED_AD_CUSTOMIZER_TAG_FOUND, CUSTOMIZER_TYPE_FORBIDDEN_FOR_FIELD,
   * INVALID_CUSTOMIZER_ATTRIBUTE_NAME, STORE_MISMATCH,
   * MISSING_REQUIRED_IMAGE_ASPECT_RATIO, MISMATCHED_ASPECT_RATIOS,
   * DUPLICATE_IMAGE_ACROSS_CAROUSEL_CARDS,
   * INVALID_YOUTUBE_VIDEO_ASSET_ID_FOR_VIDEO_ADS_SEQUENCING
   *
   * @param self::AD_ERROR_* $adError
   */
  public function setAdError($adError)
  {
    $this->adError = $adError;
  }
  /**
   * @return self::AD_ERROR_*
   */
  public function getAdError()
  {
    return $this->adError;
  }
  /**
   * The reasons for the ad group ad error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD_GROUP_AD_LABEL_DOES_NOT_EXIST,
   * AD_GROUP_AD_LABEL_ALREADY_EXISTS, AD_NOT_UNDER_ADGROUP,
   * CANNOT_OPERATE_ON_REMOVED_ADGROUPAD, CANNOT_CREATE_DEPRECATED_ADS,
   * CANNOT_CREATE_TEXT_ADS, EMPTY_FIELD, RESOURCE_REFERENCED_IN_MULTIPLE_OPS,
   * AD_TYPE_CANNOT_BE_PAUSED, AD_TYPE_CANNOT_BE_REMOVED,
   * CANNOT_UPDATE_DEPRECATED_ADS, AD_SHARING_NOT_ALLOWED
   *
   * @param self::AD_GROUP_AD_ERROR_* $adGroupAdError
   */
  public function setAdGroupAdError($adGroupAdError)
  {
    $this->adGroupAdError = $adGroupAdError;
  }
  /**
   * @return self::AD_GROUP_AD_ERROR_*
   */
  public function getAdGroupAdError()
  {
    return $this->adGroupAdError;
  }
  /**
   * The reasons for the ad group bid modifier error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CRITERION_ID_NOT_SUPPORTED,
   * CANNOT_OVERRIDE_OPTED_OUT_CAMPAIGN_CRITERION_BID_MODIFIER
   *
   * @param self::AD_GROUP_BID_MODIFIER_ERROR_* $adGroupBidModifierError
   */
  public function setAdGroupBidModifierError($adGroupBidModifierError)
  {
    $this->adGroupBidModifierError = $adGroupBidModifierError;
  }
  /**
   * @return self::AD_GROUP_BID_MODIFIER_ERROR_*
   */
  public function getAdGroupBidModifierError()
  {
    return $this->adGroupBidModifierError;
  }
  /**
   * The reasons for the ad group criterion customizer error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CRITERION_IS_NOT_KEYWORD
   *
   * @param self::AD_GROUP_CRITERION_CUSTOMIZER_ERROR_* $adGroupCriterionCustomizerError
   */
  public function setAdGroupCriterionCustomizerError($adGroupCriterionCustomizerError)
  {
    $this->adGroupCriterionCustomizerError = $adGroupCriterionCustomizerError;
  }
  /**
   * @return self::AD_GROUP_CRITERION_CUSTOMIZER_ERROR_*
   */
  public function getAdGroupCriterionCustomizerError()
  {
    return $this->adGroupCriterionCustomizerError;
  }
  /**
   * Indicates failure to properly authenticate user.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * AD_GROUP_CRITERION_LABEL_DOES_NOT_EXIST,
   * AD_GROUP_CRITERION_LABEL_ALREADY_EXISTS,
   * CANNOT_ADD_LABEL_TO_NEGATIVE_CRITERION, TOO_MANY_OPERATIONS,
   * CANT_UPDATE_NEGATIVE, CONCRETE_TYPE_REQUIRED,
   * BID_INCOMPATIBLE_WITH_ADGROUP, CANNOT_TARGET_AND_EXCLUDE, ILLEGAL_URL,
   * INVALID_KEYWORD_TEXT, INVALID_DESTINATION_URL, MISSING_DESTINATION_URL_TAG,
   * KEYWORD_LEVEL_BID_NOT_SUPPORTED_FOR_MANUALCPM, INVALID_USER_STATUS,
   * CANNOT_ADD_CRITERIA_TYPE, CANNOT_EXCLUDE_CRITERIA_TYPE,
   * CAMPAIGN_TYPE_NOT_COMPATIBLE_WITH_PARTIAL_FAILURE,
   * OPERATIONS_FOR_TOO_MANY_SHOPPING_ADGROUPS,
   * CANNOT_MODIFY_URL_FIELDS_WITH_DUPLICATE_ELEMENTS,
   * CANNOT_SET_WITHOUT_FINAL_URLS,
   * CANNOT_CLEAR_FINAL_URLS_IF_FINAL_MOBILE_URLS_EXIST,
   * CANNOT_CLEAR_FINAL_URLS_IF_FINAL_APP_URLS_EXIST,
   * CANNOT_CLEAR_FINAL_URLS_IF_TRACKING_URL_TEMPLATE_EXISTS,
   * CANNOT_CLEAR_FINAL_URLS_IF_URL_CUSTOM_PARAMETERS_EXIST,
   * CANNOT_SET_BOTH_DESTINATION_URL_AND_FINAL_URLS,
   * CANNOT_SET_BOTH_DESTINATION_URL_AND_TRACKING_URL_TEMPLATE,
   * FINAL_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE,
   * FINAL_MOBILE_URLS_NOT_SUPPORTED_FOR_CRITERION_TYPE
   *
   * @param self::AD_GROUP_CRITERION_ERROR_* $adGroupCriterionError
   */
  public function setAdGroupCriterionError($adGroupCriterionError)
  {
    $this->adGroupCriterionError = $adGroupCriterionError;
  }
  /**
   * @return self::AD_GROUP_CRITERION_ERROR_*
   */
  public function getAdGroupCriterionError()
  {
    return $this->adGroupCriterionError;
  }
  /**
   * The reasons for the ad group customizer error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN
   *
   * @param self::AD_GROUP_CUSTOMIZER_ERROR_* $adGroupCustomizerError
   */
  public function setAdGroupCustomizerError($adGroupCustomizerError)
  {
    $this->adGroupCustomizerError = $adGroupCustomizerError;
  }
  /**
   * @return self::AD_GROUP_CUSTOMIZER_ERROR_*
   */
  public function getAdGroupCustomizerError()
  {
    return $this->adGroupCustomizerError;
  }
  /**
   * An error with an Ad Group mutate.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_ADGROUP_NAME,
   * INVALID_ADGROUP_NAME, ADVERTISER_NOT_ON_CONTENT_NETWORK, BID_TOO_BIG,
   * BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH, MISSING_ADGROUP_NAME,
   * ADGROUP_LABEL_DOES_NOT_EXIST, ADGROUP_LABEL_ALREADY_EXISTS,
   * INVALID_CONTENT_BID_CRITERION_TYPE_GROUP,
   * AD_GROUP_TYPE_NOT_VALID_FOR_ADVERTISING_CHANNEL_TYPE,
   * ADGROUP_TYPE_NOT_SUPPORTED_FOR_CAMPAIGN_SALES_COUNTRY,
   * CANNOT_ADD_ADGROUP_OF_TYPE_DSA_TO_CAMPAIGN_WITHOUT_DSA_SETTING,
   * PROMOTED_HOTEL_AD_GROUPS_NOT_AVAILABLE_FOR_CUSTOMER,
   * INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE,
   * INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE,
   * CANNOT_ADD_AD_GROUP_FOR_CAMPAIGN_TYPE, INVALID_STATUS,
   * INVALID_STEP_ID_FOR_VIDEO_ADS_SEQUENCING,
   * INVALID_AD_GROUP_TYPE_FOR_VIDEO_ADS_SEQUENCING, DUPLICATE_STEP_ID,
   * INVALID_VERTICAL_ADS_FORMAT_SETTING,
   * VERTICAL_ADS_FORMAT_SETTING_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_AI_MAX, VER
   * TICAL_ADS_FORMAT_SETTING_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_ENABLED_TRAVEL
   * _FEED
   *
   * @param self::AD_GROUP_ERROR_* $adGroupError
   */
  public function setAdGroupError($adGroupError)
  {
    $this->adGroupError = $adGroupError;
  }
  /**
   * @return self::AD_GROUP_ERROR_*
   */
  public function getAdGroupError()
  {
    return $this->adGroupError;
  }
  /**
   * The reasons for the ad group feed error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE, CANNOT_CREATE_FOR_REMOVED_FEED,
   * ADGROUP_FEED_ALREADY_EXISTS, CANNOT_OPERATE_ON_REMOVED_ADGROUP_FEED,
   * INVALID_PLACEHOLDER_TYPE, MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE,
   * NO_EXISTING_LOCATION_CUSTOMER_FEED
   *
   * @param self::AD_GROUP_FEED_ERROR_* $adGroupFeedError
   */
  public function setAdGroupFeedError($adGroupFeedError)
  {
    $this->adGroupFeedError = $adGroupFeedError;
  }
  /**
   * @return self::AD_GROUP_FEED_ERROR_*
   */
  public function getAdGroupFeedError()
  {
    return $this->adGroupFeedError;
  }
  /**
   * The reasons for the ad parameter error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD_GROUP_CRITERION_MUST_BE_KEYWORD,
   * INVALID_INSERTION_TEXT_FORMAT
   *
   * @param self::AD_PARAMETER_ERROR_* $adParameterError
   */
  public function setAdParameterError($adParameterError)
  {
    $this->adParameterError = $adParameterError;
  }
  /**
   * @return self::AD_PARAMETER_ERROR_*
   */
  public function getAdParameterError()
  {
    return $this->adParameterError;
  }
  /**
   * The reasons for the ad sharing error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD_GROUP_ALREADY_CONTAINS_AD,
   * INCOMPATIBLE_AD_UNDER_AD_GROUP, CANNOT_SHARE_INACTIVE_AD
   *
   * @param self::AD_SHARING_ERROR_* $adSharingError
   */
  public function setAdSharingError($adSharingError)
  {
    $this->adSharingError = $adSharingError;
  }
  /**
   * @return self::AD_SHARING_ERROR_*
   */
  public function getAdSharingError()
  {
    return $this->adSharingError;
  }
  /**
   * The reasons for the adx error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, UNSUPPORTED_FEATURE
   *
   * @param self::ADX_ERROR_* $adxError
   */
  public function setAdxError($adxError)
  {
    $this->adxError = $adxError;
  }
  /**
   * @return self::ADX_ERROR_*
   */
  public function getAdxError()
  {
    return $this->adxError;
  }
  /**
   * The reasons for the asset error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * CUSTOMER_NOT_ON_ALLOWLIST_FOR_ASSET_TYPE, DUPLICATE_ASSET,
   * DUPLICATE_ASSET_NAME, ASSET_DATA_IS_MISSING, CANNOT_MODIFY_ASSET_NAME,
   * FIELD_INCOMPATIBLE_WITH_ASSET_TYPE, INVALID_CALL_TO_ACTION_TEXT,
   * LEAD_FORM_INVALID_FIELDS_COMBINATION, LEAD_FORM_MISSING_AGREEMENT,
   * INVALID_ASSET_STATUS, FIELD_CANNOT_BE_MODIFIED_FOR_ASSET_TYPE,
   * SCHEDULES_CANNOT_OVERLAP,
   * PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF,
   * PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT,
   * TOO_MANY_DECIMAL_PLACES_SPECIFIED,
   * DUPLICATE_ASSETS_WITH_DIFFERENT_FIELD_VALUE,
   * CALL_CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED,
   * CALL_CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED,
   * CALL_DISALLOWED_NUMBER_TYPE, CALL_INVALID_CONVERSION_ACTION,
   * CALL_INVALID_COUNTRY_CODE, CALL_INVALID_DOMESTIC_PHONE_NUMBER_FORMAT,
   * CALL_INVALID_PHONE_NUMBER, CALL_PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY,
   * CALL_PREMIUM_RATE_NUMBER_NOT_ALLOWED, CALL_VANITY_PHONE_NUMBER_NOT_ALLOWED,
   * PRICE_HEADER_SAME_AS_DESCRIPTION, MOBILE_APP_INVALID_APP_ID,
   * MOBILE_APP_INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL,
   * NAME_REQUIRED_FOR_ASSET_TYPE,
   * LEAD_FORM_LEGACY_QUALIFYING_QUESTIONS_DISALLOWED,
   * NAME_CONFLICT_FOR_ASSET_TYPE, CANNOT_MODIFY_ASSET_SOURCE,
   * CANNOT_MODIFY_AUTOMATICALLY_CREATED_ASSET,
   * LEAD_FORM_LOCATION_ANSWER_TYPE_DISALLOWED, PAGE_FEED_INVALID_LABEL_TEXT,
   * CUSTOMER_NOT_ON_ALLOWLIST_FOR_WHATSAPP_MESSAGE_ASSETS,
   * CUSTOMER_NOT_ON_ALLOWLIST_FOR_APP_DEEP_LINK_ASSETS,
   * PROMOTION_BARCODE_CANNOT_CONTAIN_LINKS, PROMOTION_BARCODE_INVALID_FORMAT,
   * UNSUPPORTED_BARCODE_TYPE, PROMOTION_QR_CODE_CANNOT_CONTAIN_LINKS,
   * PROMOTION_QR_CODE_INVALID_FORMAT,
   * CUSTOMER_NOT_ON_ALLOWLIST_FOR_MESSAGE_ASSETS
   *
   * @param self::ASSET_ERROR_* $assetError
   */
  public function setAssetError($assetError)
  {
    $this->assetError = $assetError;
  }
  /**
   * @return self::ASSET_ERROR_*
   */
  public function getAssetError()
  {
    return $this->assetError;
  }
  /**
   * The reasons for the GenAI asset generation error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NO_ASSETS_GENERATED,
   * FINAL_URL_REQUIRED, GENERATION_CONTEXT_MISSING_FINAL_URL,
   * FINAL_URL_SENSITIVE, FINAL_URL_UNSUPPORTED_LANGUAGE, FINAL_URL_UNAVAILABLE,
   * CAMPAIGN_TYPE_REQUIRED, UNSUPPORTED_CAMPAIGN_TYPE, UNSUPPORTED_FIELD_TYPE,
   * UNSUPPORTED_FIELD_TYPE_FOR_CAMPAIGN_TYPE,
   * FREEFORM_PROMPT_UNSUPPORTED_LANGUAGE, FREEFORM_PROMPT_SENSITIVE,
   * INPUT_IMAGE_FILE_SIZE_TOO_LARGE, INPUT_IMAGE_EMPTY,
   * GENERATION_TYPE_REQUIRED, TOO_MANY_KEYWORDS, KEYWORD_INVALID_LENGTH,
   * NO_VALID_KEYWORDS, FREEFORM_PROMPT_INVALID_LENGTH,
   * FREEFORM_PROMPT_REFERENCES_CHILDREN,
   * FREEFORM_PROMPT_REFERENCES_SPECIFIC_PEOPLE,
   * FREEFORM_PROMPT_VIOLATES_ADS_POLICY, FREEFORM_PROMPT_BRAND_CONTENT,
   * INPUT_IMAGE_DEPICTS_CHILDREN, INPUT_IMAGE_CONTAINS_BRAND_CONTENT,
   * INPUT_IMAGE_SENSITIVE, INPUT_IMAGE_VIOLATES_POLICY,
   * ALL_OUTPUT_IMAGES_FILTERED_OUT_CHILDREN_DEPICTION,
   * ALL_OUTPUT_IMAGES_FILTERED_OUT_SPECIFIC_PEOPLE,
   * ALL_OUTPUT_IMAGES_FILTERED_OUT, INPUT_IMAGE_REQUIRED,
   * INPUT_IMAGE_UNSUPPORTED_IMAGE_TYPE, CONTEXT_ASSET_GROUP_NOT_FOUND,
   * CONTEXT_AD_GROUP_AD_NOT_FOUND, CONTEXT_CAMPAIGN_NOT_FOUND
   *
   * @param self::ASSET_GENERATION_ERROR_* $assetGenerationError
   */
  public function setAssetGenerationError($assetGenerationError)
  {
    $this->assetGenerationError = $assetGenerationError;
  }
  /**
   * @return self::ASSET_GENERATION_ERROR_*
   */
  public function getAssetGenerationError()
  {
    return $this->assetGenerationError;
  }
  /**
   * The reasons for the asset group asset error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_RESOURCE,
   * EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION, AD_CUSTOMIZER_NOT_SUPPORTED,
   * HOTEL_PROPERTY_ASSET_NOT_LINKED_TO_CAMPAIGN
   *
   * @param self::ASSET_GROUP_ASSET_ERROR_* $assetGroupAssetError
   */
  public function setAssetGroupAssetError($assetGroupAssetError)
  {
    $this->assetGroupAssetError = $assetGroupAssetError;
  }
  /**
   * @return self::ASSET_GROUP_ASSET_ERROR_*
   */
  public function getAssetGroupAssetError()
  {
    return $this->assetGroupAssetError;
  }
  /**
   * The reasons for the asset group error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_NAME,
   * CANNOT_ADD_ASSET_GROUP_FOR_CAMPAIGN_TYPE, NOT_ENOUGH_HEADLINE_ASSET,
   * NOT_ENOUGH_LONG_HEADLINE_ASSET, NOT_ENOUGH_DESCRIPTION_ASSET,
   * NOT_ENOUGH_BUSINESS_NAME_ASSET, NOT_ENOUGH_MARKETING_IMAGE_ASSET,
   * NOT_ENOUGH_SQUARE_MARKETING_IMAGE_ASSET, NOT_ENOUGH_LOGO_ASSET,
   * FINAL_URL_SHOPPING_MERCHANT_HOME_PAGE_URL_DOMAINS_DIFFER,
   * PATH1_REQUIRED_WHEN_PATH2_IS_SET, SHORT_DESCRIPTION_REQUIRED,
   * FINAL_URL_REQUIRED, FINAL_URL_CONTAINS_INVALID_DOMAIN_NAME,
   * AD_CUSTOMIZER_NOT_SUPPORTED, CANNOT_MUTATE_ASSET_GROUP_FOR_REMOVED_CAMPAIGN
   *
   * @param self::ASSET_GROUP_ERROR_* $assetGroupError
   */
  public function setAssetGroupError($assetGroupError)
  {
    $this->assetGroupError = $assetGroupError;
  }
  /**
   * @return self::ASSET_GROUP_ERROR_*
   */
  public function getAssetGroupError()
  {
    return $this->assetGroupError;
  }
  /**
   * The reasons for the asset group listing group filter error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TREE_TOO_DEEP,
   * UNIT_CANNOT_HAVE_CHILDREN, SUBDIVISION_MUST_HAVE_EVERYTHING_ELSE_CHILD,
   * DIFFERENT_DIMENSION_TYPE_BETWEEN_SIBLINGS,
   * SAME_DIMENSION_VALUE_BETWEEN_SIBLINGS,
   * SAME_DIMENSION_TYPE_BETWEEN_ANCESTORS, MULTIPLE_ROOTS,
   * INVALID_DIMENSION_VALUE, MUST_REFINE_HIERARCHICAL_PARENT_TYPE,
   * INVALID_PRODUCT_BIDDING_CATEGORY, CHANGING_CASE_VALUE_WITH_CHILDREN,
   * SUBDIVISION_HAS_CHILDREN, CANNOT_REFINE_HIERARCHICAL_EVERYTHING_ELSE,
   * DIMENSION_TYPE_NOT_ALLOWED, DUPLICATE_WEBPAGE_FILTER_UNDER_ASSET_GROUP,
   * LISTING_SOURCE_NOT_ALLOWED, FILTER_EXCLUSION_NOT_ALLOWED,
   * MULTIPLE_LISTING_SOURCES, MULTIPLE_WEBPAGE_CONDITION_TYPES_NOT_ALLOWED,
   * MULTIPLE_WEBPAGE_TYPES_PER_ASSET_GROUP, PAGE_FEED_FILTER_HAS_PARENT,
   * MULTIPLE_OPERATIONS_ON_ONE_NODE, TREE_WAS_INVALID_BEFORE_MUTATION
   *
   * @param self::ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_* $assetGroupListingGroupFilterError
   */
  public function setAssetGroupListingGroupFilterError($assetGroupListingGroupFilterError)
  {
    $this->assetGroupListingGroupFilterError = $assetGroupListingGroupFilterError;
  }
  /**
   * @return self::ASSET_GROUP_LISTING_GROUP_FILTER_ERROR_*
   */
  public function getAssetGroupListingGroupFilterError()
  {
    return $this->assetGroupListingGroupFilterError;
  }
  /**
   * The reasons for the asset group hint error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TOO_MANY_WORDS,
   * SEARCH_THEME_POLICY_VIOLATION, AUDIENCE_WITH_WRONG_ASSET_GROUP_ID
   *
   * @param self::ASSET_GROUP_SIGNAL_ERROR_* $assetGroupSignalError
   */
  public function setAssetGroupSignalError($assetGroupSignalError)
  {
    $this->assetGroupSignalError = $assetGroupSignalError;
  }
  /**
   * @return self::ASSET_GROUP_SIGNAL_ERROR_*
   */
  public function getAssetGroupSignalError()
  {
    return $this->assetGroupSignalError;
  }
  /**
   * The reasons for the asset link error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PINNING_UNSUPPORTED,
   * UNSUPPORTED_FIELD_TYPE, FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE,
   * FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE,
   * INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE,
   * IMAGE_NOT_WITHIN_SPECIFIED_DIMENSION_RANGE, INVALID_PINNED_FIELD,
   * MEDIA_BUNDLE_ASSET_FILE_SIZE_TOO_LARGE,
   * NOT_ENOUGH_AVAILABLE_ASSET_LINKS_FOR_VALID_COMBINATION,
   * NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK,
   * NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK_FOR_VALID_COMBINATION,
   * YOUTUBE_VIDEO_REMOVED, YOUTUBE_VIDEO_TOO_LONG, YOUTUBE_VIDEO_TOO_SHORT,
   * EXCLUDED_PARENT_FIELD_TYPE, INVALID_STATUS,
   * YOUTUBE_VIDEO_DURATION_NOT_DEFINED,
   * CANNOT_CREATE_AUTOMATICALLY_CREATED_LINKS,
   * CANNOT_LINK_TO_AUTOMATICALLY_CREATED_ASSET,
   * CANNOT_MODIFY_ASSET_LINK_SOURCE,
   * CANNOT_LINK_LOCATION_LEAD_FORM_WITHOUT_LOCATION_ASSET,
   * CUSTOMER_NOT_VERIFIED, UNSUPPORTED_CALL_TO_ACTION,
   * BRAND_ASSETS_NOT_LINKED_AT_ASSET_GROUP_LEVEL,
   * BRAND_ASSETS_NOT_LINKED_AT_CAMPAIGN_LEVEL
   *
   * @param self::ASSET_LINK_ERROR_* $assetLinkError
   */
  public function setAssetLinkError($assetLinkError)
  {
    $this->assetLinkError = $assetLinkError;
  }
  /**
   * @return self::ASSET_LINK_ERROR_*
   */
  public function getAssetLinkError()
  {
    return $this->assetLinkError;
  }
  /**
   * The reasons for the asset set asset error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_ASSET_TYPE,
   * INVALID_ASSET_SET_TYPE, DUPLICATE_EXTERNAL_KEY,
   * PARENT_LINKAGE_DOES_NOT_EXIST
   *
   * @param self::ASSET_SET_ASSET_ERROR_* $assetSetAssetError
   */
  public function setAssetSetAssetError($assetSetAssetError)
  {
    $this->assetSetAssetError = $assetSetAssetError;
  }
  /**
   * @return self::ASSET_SET_ASSET_ERROR_*
   */
  public function getAssetSetAssetError()
  {
    return $this->assetSetAssetError;
  }
  /**
   * The reasons for the asset set error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_ASSET_SET_NAME,
   * INVALID_PARENT_ASSET_SET_TYPE,
   * ASSET_SET_SOURCE_INCOMPATIBLE_WITH_PARENT_ASSET_SET,
   * ASSET_SET_TYPE_CANNOT_BE_LINKED_TO_CUSTOMER, INVALID_CHAIN_IDS,
   * LOCATION_SYNC_ASSET_SET_DOES_NOT_SUPPORT_RELATIONSHIP_TYPE,
   * NOT_UNIQUE_ENABLED_LOCATION_SYNC_TYPED_ASSET_SET, INVALID_PLACE_IDS,
   * OAUTH_INFO_INVALID, OAUTH_INFO_MISSING,
   * CANNOT_DELETE_AS_ENABLED_LINKAGES_EXIST
   *
   * @param self::ASSET_SET_ERROR_* $assetSetError
   */
  public function setAssetSetError($assetSetError)
  {
    $this->assetSetError = $assetSetError;
  }
  /**
   * @return self::ASSET_SET_ERROR_*
   */
  public function getAssetSetError()
  {
    return $this->assetSetError;
  }
  /**
   * The reasons for the asset set link error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE, DUPLICATE_FEED_LINK,
   * INCOMPATIBLE_ASSET_SET_TYPE_WITH_CAMPAIGN_TYPE, DUPLICATE_ASSET_SET_LINK,
   * ASSET_SET_LINK_CANNOT_BE_REMOVED
   *
   * @param self::ASSET_SET_LINK_ERROR_* $assetSetLinkError
   */
  public function setAssetSetLinkError($assetSetLinkError)
  {
    $this->assetSetLinkError = $assetSetLinkError;
  }
  /**
   * @return self::ASSET_SET_LINK_ERROR_*
   */
  public function getAssetSetLinkError()
  {
    return $this->assetSetLinkError;
  }
  /**
   * The reasons for the audience error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NAME_ALREADY_IN_USE,
   * DIMENSION_INVALID, AUDIENCE_SEGMENT_NOT_FOUND,
   * AUDIENCE_SEGMENT_TYPE_NOT_SUPPORTED, DUPLICATE_AUDIENCE_SEGMENT,
   * TOO_MANY_SEGMENTS, TOO_MANY_DIMENSIONS_OF_SAME_TYPE, IN_USE,
   * MISSING_ASSET_GROUP_ID, CANNOT_CHANGE_FROM_CUSTOMER_TO_ASSET_GROUP_SCOPE
   *
   * @param self::AUDIENCE_ERROR_* $audienceError
   */
  public function setAudienceError($audienceError)
  {
    $this->audienceError = $audienceError;
  }
  /**
   * @return self::AUDIENCE_ERROR_*
   */
  public function getAudienceError()
  {
    return $this->audienceError;
  }
  /**
   * The reasons for the Audience Insights error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * DIMENSION_INCOMPATIBLE_WITH_TOPIC_AUDIENCE_COMBINATIONS
   *
   * @param self::AUDIENCE_INSIGHTS_ERROR_* $audienceInsightsError
   */
  public function setAudienceInsightsError($audienceInsightsError)
  {
    $this->audienceInsightsError = $audienceInsightsError;
  }
  /**
   * @return self::AUDIENCE_INSIGHTS_ERROR_*
   */
  public function getAudienceInsightsError()
  {
    return $this->audienceInsightsError;
  }
  /**
   * Indicates failure to properly authenticate user.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AUTHENTICATION_ERROR,
   * CLIENT_CUSTOMER_ID_INVALID, CUSTOMER_NOT_FOUND, GOOGLE_ACCOUNT_DELETED,
   * GOOGLE_ACCOUNT_COOKIE_INVALID, GOOGLE_ACCOUNT_AUTHENTICATION_FAILED,
   * GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH, LOGIN_COOKIE_REQUIRED,
   * NOT_ADS_USER, OAUTH_TOKEN_INVALID, OAUTH_TOKEN_EXPIRED,
   * OAUTH_TOKEN_DISABLED, OAUTH_TOKEN_REVOKED, OAUTH_TOKEN_HEADER_INVALID,
   * LOGIN_COOKIE_INVALID, INVALID_EMAIL_ADDRESS, USER_ID_INVALID,
   * TWO_STEP_VERIFICATION_NOT_ENROLLED, ADVANCED_PROTECTION_NOT_ENROLLED,
   * ORGANIZATION_NOT_RECOGNIZED, ORGANIZATION_NOT_APPROVED,
   * ORGANIZATION_NOT_ASSOCIATED_WITH_DEVELOPER_TOKEN, DEVELOPER_TOKEN_INVALID
   *
   * @param self::AUTHENTICATION_ERROR_* $authenticationError
   */
  public function setAuthenticationError($authenticationError)
  {
    $this->authenticationError = $authenticationError;
  }
  /**
   * @return self::AUTHENTICATION_ERROR_*
   */
  public function getAuthenticationError()
  {
    return $this->authenticationError;
  }
  /**
   * An error encountered when trying to authorize a user.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, USER_PERMISSION_DENIED,
   * DEVELOPER_TOKEN_NOT_ON_ALLOWLIST, DEVELOPER_TOKEN_PROHIBITED,
   * PROJECT_DISABLED, AUTHORIZATION_ERROR, ACTION_NOT_PERMITTED,
   * INCOMPLETE_SIGNUP, CUSTOMER_NOT_ENABLED, MISSING_TOS,
   * DEVELOPER_TOKEN_NOT_APPROVED,
   * INVALID_LOGIN_CUSTOMER_ID_SERVING_CUSTOMER_ID_COMBINATION,
   * SERVICE_ACCESS_DENIED, ACCESS_DENIED_FOR_ACCOUNT_TYPE,
   * METRIC_ACCESS_DENIED, CLOUD_PROJECT_NOT_UNDER_ORGANIZATION,
   * ACTION_NOT_PERMITTED_FOR_SUSPENDED_ACCOUNT
   *
   * @param self::AUTHORIZATION_ERROR_* $authorizationError
   */
  public function setAuthorizationError($authorizationError)
  {
    $this->authorizationError = $authorizationError;
  }
  /**
   * @return self::AUTHORIZATION_ERROR_*
   */
  public function getAuthorizationError()
  {
    return $this->authorizationError;
  }
  /**
   * The reasons for error in automatically created asset removal action.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD_DOES_NOT_EXIST, INVALID_AD_TYPE,
   * ASSET_DOES_NOT_EXIST, ASSET_FIELD_TYPE_DOES_NOT_MATCH,
   * NOT_AN_AUTOMATICALLY_CREATED_ASSET
   *
   * @param self::AUTOMATICALLY_CREATED_ASSET_REMOVAL_ERROR_* $automaticallyCreatedAssetRemovalError
   */
  public function setAutomaticallyCreatedAssetRemovalError($automaticallyCreatedAssetRemovalError)
  {
    $this->automaticallyCreatedAssetRemovalError = $automaticallyCreatedAssetRemovalError;
  }
  /**
   * @return self::AUTOMATICALLY_CREATED_ASSET_REMOVAL_ERROR_*
   */
  public function getAutomaticallyCreatedAssetRemovalError()
  {
    return $this->automaticallyCreatedAssetRemovalError;
  }
  /**
   * The reasons for the batch job error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * CANNOT_MODIFY_JOB_AFTER_JOB_STARTS_RUNNING, EMPTY_OPERATIONS,
   * INVALID_SEQUENCE_TOKEN, RESULTS_NOT_READY, INVALID_PAGE_SIZE,
   * CAN_ONLY_REMOVE_PENDING_JOB, CANNOT_LIST_RESULTS,
   * ASSET_GROUP_AND_ASSET_GROUP_ASSET_TRANSACTION_FAILURE,
   * ASSET_GROUP_LISTING_GROUP_FILTER_TRANSACTION_FAILURE, REQUEST_TOO_LARGE,
   * CAMPAIGN_AND_CAMPAIGN_ASSET_TRANSACTION_FAILURE
   *
   * @param self::BATCH_JOB_ERROR_* $batchJobError
   */
  public function setBatchJobError($batchJobError)
  {
    $this->batchJobError = $batchJobError;
  }
  /**
   * @return self::BATCH_JOB_ERROR_*
   */
  public function getBatchJobError()
  {
    return $this->batchJobError;
  }
  /**
   * The reasons for the Benchmarks error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MAX_QUERY_COMPLEXITY_EXCEEDED
   *
   * @param self::BENCHMARKS_ERROR_* $benchmarksError
   */
  public function setBenchmarksError($benchmarksError)
  {
    $this->benchmarksError = $benchmarksError;
  }
  /**
   * @return self::BENCHMARKS_ERROR_*
   */
  public function getBenchmarksError()
  {
    return $this->benchmarksError;
  }
  /**
   * The reasons for the bidding errors
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * BIDDING_STRATEGY_TRANSITION_NOT_ALLOWED,
   * CANNOT_ATTACH_BIDDING_STRATEGY_TO_CAMPAIGN,
   * INVALID_ANONYMOUS_BIDDING_STRATEGY_TYPE, INVALID_BIDDING_STRATEGY_TYPE,
   * INVALID_BID, BIDDING_STRATEGY_NOT_AVAILABLE_FOR_ACCOUNT_TYPE,
   * CANNOT_CREATE_CAMPAIGN_WITH_BIDDING_STRATEGY, CANNOT_TARGET_CONTENT_NETWORK
   * _ONLY_WITH_CAMPAIGN_LEVEL_POP_BIDDING_STRATEGY,
   * BIDDING_STRATEGY_NOT_SUPPORTED_WITH_AD_SCHEDULE,
   * PAY_PER_CONVERSION_NOT_AVAILABLE_FOR_CUSTOMER,
   * PAY_PER_CONVERSION_NOT_ALLOWED_WITH_TARGET_CPA,
   * BIDDING_STRATEGY_NOT_ALLOWED_FOR_SEARCH_ONLY_CAMPAIGNS,
   * BIDDING_STRATEGY_NOT_SUPPORTED_IN_DRAFTS_OR_EXPERIMENTS,
   * BIDDING_STRATEGY_TYPE_DOES_NOT_SUPPORT_PRODUCT_TYPE_ADGROUP_CRITERION,
   * BID_TOO_SMALL, BID_TOO_BIG, BID_TOO_MANY_FRACTIONAL_DIGITS,
   * INVALID_DOMAIN_NAME, NOT_COMPATIBLE_WITH_PAYMENT_MODE,
   * BIDDING_STRATEGY_TYPE_INCOMPATIBLE_WITH_SHARED_BUDGET,
   * BIDDING_STRATEGY_AND_BUDGET_MUST_BE_ALIGNED, BIDDING_STRATEGY_AND_BUDGET_MU
   * ST_BE_ATTACHED_TO_THE_SAME_CAMPAIGNS_TO_ALIGN,
   * BIDDING_STRATEGY_AND_BUDGET_MUST_BE_REMOVED_TOGETHER,
   * CPC_BID_FLOOR_MICROS_GREATER_THAN_CPC_BID_CEILING_MICROS,
   * TARGET_ROAS_TOLERANCE_PERCENT_MILLIS_MUST_BE_INTEGER
   *
   * @param self::BIDDING_ERROR_* $biddingError
   */
  public function setBiddingError($biddingError)
  {
    $this->biddingError = $biddingError;
  }
  /**
   * @return self::BIDDING_ERROR_*
   */
  public function getBiddingError()
  {
    return $this->biddingError;
  }
  /**
   * An error with a Bidding Strategy mutate.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_NAME,
   * CANNOT_CHANGE_BIDDING_STRATEGY_TYPE, CANNOT_REMOVE_ASSOCIATED_STRATEGY,
   * BIDDING_STRATEGY_NOT_SUPPORTED,
   * INCOMPATIBLE_BIDDING_STRATEGY_AND_BIDDING_STRATEGY_GOAL_TYPE
   *
   * @param self::BIDDING_STRATEGY_ERROR_* $biddingStrategyError
   */
  public function setBiddingStrategyError($biddingStrategyError)
  {
    $this->biddingStrategyError = $biddingStrategyError;
  }
  /**
   * @return self::BIDDING_STRATEGY_ERROR_*
   */
  public function getBiddingStrategyError()
  {
    return $this->biddingStrategyError;
  }
  /**
   * The reasons for the billing setup error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CANNOT_USE_EXISTING_AND_NEW_ACCOUNT,
   * CANNOT_REMOVE_STARTED_BILLING_SETUP,
   * CANNOT_CHANGE_BILLING_TO_SAME_PAYMENTS_ACCOUNT,
   * BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_STATUS, INVALID_PAYMENTS_ACCOUNT,
   * BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_CATEGORY, INVALID_START_TIME_TYPE,
   * THIRD_PARTY_ALREADY_HAS_BILLING, BILLING_SETUP_IN_PROGRESS,
   * NO_SIGNUP_PERMISSION, CHANGE_OF_BILL_TO_IN_PROGRESS,
   * PAYMENTS_PROFILE_NOT_FOUND, PAYMENTS_ACCOUNT_NOT_FOUND,
   * PAYMENTS_PROFILE_INELIGIBLE, PAYMENTS_ACCOUNT_INELIGIBLE,
   * CUSTOMER_NEEDS_INTERNAL_APPROVAL,
   * PAYMENTS_PROFILE_NEEDS_SERVICE_AGREEMENT_ACCEPTANCE,
   * PAYMENTS_ACCOUNT_INELIGIBLE_CURRENCY_CODE_MISMATCH,
   * FUTURE_START_TIME_PROHIBITED, TOO_MANY_BILLING_SETUPS_FOR_PAYMENTS_ACCOUNT
   *
   * @param self::BILLING_SETUP_ERROR_* $billingSetupError
   */
  public function setBillingSetupError($billingSetupError)
  {
    $this->billingSetupError = $billingSetupError;
  }
  /**
   * @return self::BILLING_SETUP_ERROR_*
   */
  public function getBillingSetupError()
  {
    return $this->billingSetupError;
  }
  /**
   * The reasons for the brand guidelines migration error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BRAND_GUIDELINES_ALREADY_ENABLED,
   * CANNOT_ENABLE_BRAND_GUIDELINES_FOR_REMOVED_CAMPAIGN,
   * BRAND_GUIDELINES_LOGO_LIMIT_EXCEEDED,
   * CANNOT_AUTO_POPULATE_BRAND_ASSETS_WHEN_BRAND_ASSETS_PROVIDED,
   * AUTO_POPULATE_BRAND_ASSETS_REQUIRED_WHEN_BRAND_ASSETS_OMITTED,
   * TOO_MANY_ENABLE_OPERATIONS
   *
   * @param self::BRAND_GUIDELINES_MIGRATION_ERROR_* $brandGuidelinesMigrationError
   */
  public function setBrandGuidelinesMigrationError($brandGuidelinesMigrationError)
  {
    $this->brandGuidelinesMigrationError = $brandGuidelinesMigrationError;
  }
  /**
   * @return self::BRAND_GUIDELINES_MIGRATION_ERROR_*
   */
  public function getBrandGuidelinesMigrationError()
  {
    return $this->brandGuidelinesMigrationError;
  }
  /**
   * An error with a Campaign Budget mutate.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_BUDGET_CANNOT_BE_SHARED,
   * CAMPAIGN_BUDGET_REMOVED, CAMPAIGN_BUDGET_IN_USE,
   * CAMPAIGN_BUDGET_PERIOD_NOT_AVAILABLE,
   * CANNOT_MODIFY_FIELD_OF_IMPLICITLY_SHARED_CAMPAIGN_BUDGET,
   * CANNOT_UPDATE_CAMPAIGN_BUDGET_TO_IMPLICITLY_SHARED,
   * CANNOT_UPDATE_CAMPAIGN_BUDGET_TO_EXPLICITLY_SHARED_WITHOUT_NAME,
   * CANNOT_UPDATE_CAMPAIGN_BUDGET_TO_EXPLICITLY_SHARED,
   * CANNOT_USE_IMPLICITLY_SHARED_CAMPAIGN_BUDGET_WITH_MULTIPLE_CAMPAIGNS,
   * DUPLICATE_NAME, MONEY_AMOUNT_IN_WRONG_CURRENCY,
   * MONEY_AMOUNT_LESS_THAN_CURRENCY_MINIMUM_CPC, MONEY_AMOUNT_TOO_LARGE,
   * NEGATIVE_MONEY_AMOUNT, NON_MULTIPLE_OF_MINIMUM_CURRENCY_UNIT,
   * TOTAL_BUDGET_AMOUNT_MUST_BE_UNSET_FOR_BUDGET_PERIOD_DAILY, INVALID_PERIOD,
   * CANNOT_USE_ACCELERATED_DELIVERY_MODE,
   * BUDGET_AMOUNT_MUST_BE_UNSET_FOR_CUSTOM_BUDGET_PERIOD,
   * BUDGET_BELOW_PER_DAY_MINIMUM
   *
   * @param self::CAMPAIGN_BUDGET_ERROR_* $campaignBudgetError
   */
  public function setCampaignBudgetError($campaignBudgetError)
  {
    $this->campaignBudgetError = $campaignBudgetError;
  }
  /**
   * @return self::CAMPAIGN_BUDGET_ERROR_*
   */
  public function getCampaignBudgetError()
  {
    return $this->campaignBudgetError;
  }
  /**
   * The reasons for the campaign conversion goal error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * CANNOT_USE_CAMPAIGN_GOAL_FOR_SEARCH_ADS_360_MANAGED_CAMPAIGN,
   * CANNOT_USE_STORE_SALE_GOAL_FOR_PERFORMANCE_MAX_CAMPAIGN
   *
   * @param self::CAMPAIGN_CONVERSION_GOAL_ERROR_* $campaignConversionGoalError
   */
  public function setCampaignConversionGoalError($campaignConversionGoalError)
  {
    $this->campaignConversionGoalError = $campaignConversionGoalError;
  }
  /**
   * @return self::CAMPAIGN_CONVERSION_GOAL_ERROR_*
   */
  public function getCampaignConversionGoalError()
  {
    return $this->campaignConversionGoalError;
  }
  /**
   * The reasons for the campaign criterion error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CONCRETE_TYPE_REQUIRED,
   * INVALID_PLACEMENT_URL, CANNOT_EXCLUDE_CRITERIA_TYPE,
   * CANNOT_SET_STATUS_FOR_CRITERIA_TYPE,
   * CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA, CANNOT_TARGET_AND_EXCLUDE,
   * TOO_MANY_OPERATIONS, OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE,
   * SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL,
   * CANNOT_ADD_EXISTING_FIELD, CANNOT_UPDATE_NEGATIVE_CRITERION,
   * CANNOT_SET_NEGATIVE_KEYWORD_THEME_CONSTANT_CRITERION,
   * INVALID_KEYWORD_THEME_CONSTANT,
   * MISSING_KEYWORD_THEME_CONSTANT_OR_FREE_FORM_KEYWORD_THEME,
   * CANNOT_TARGET_BOTH_PROXIMITY_AND_LOCATION_CRITERIA_FOR_SMART_CAMPAIGN,
   * CANNOT_TARGET_MULTIPLE_PROXIMITY_CRITERIA_FOR_SMART_CAMPAIGN,
   * LOCATION_NOT_LAUNCHED_FOR_LOCAL_SERVICES_CAMPAIGN,
   * LOCATION_INVALID_FOR_LOCAL_SERVICES_CAMPAIGN,
   * CANNOT_TARGET_COUNTRY_FOR_LOCAL_SERVICES_CAMPAIGN,
   * LOCATION_NOT_IN_HOME_COUNTRY_FOR_LOCAL_SERVICES_CAMPAIGN,
   * CANNOT_ADD_OR_REMOVE_LOCATION_FOR_LOCAL_SERVICES_CAMPAIGN,
   * AT_LEAST_ONE_POSITIVE_LOCATION_REQUIRED_FOR_LOCAL_SERVICES_CAMPAIGN, AT_LEA
   * ST_ONE_LOCAL_SERVICE_ID_CRITERION_REQUIRED_FOR_LOCAL_SERVICES_CAMPAIGN,
   * LOCAL_SERVICE_ID_NOT_FOUND_FOR_CATEGORY,
   * CANNOT_ATTACH_BRAND_LIST_TO_NON_QUALIFIED_SEARCH_CAMPAIGN,
   * CANNOT_REMOVE_ALL_LOCATIONS_DUE_TO_TOO_MANY_COUNTRY_EXCLUSIONS,
   * INVALID_VIDEO_LINEUP_ID
   *
   * @param self::CAMPAIGN_CRITERION_ERROR_* $campaignCriterionError
   */
  public function setCampaignCriterionError($campaignCriterionError)
  {
    $this->campaignCriterionError = $campaignCriterionError;
  }
  /**
   * @return self::CAMPAIGN_CRITERION_ERROR_*
   */
  public function getCampaignCriterionError()
  {
    return $this->campaignCriterionError;
  }
  /**
   * The reasons for the campaign customizer error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN
   *
   * @param self::CAMPAIGN_CUSTOMIZER_ERROR_* $campaignCustomizerError
   */
  public function setCampaignCustomizerError($campaignCustomizerError)
  {
    $this->campaignCustomizerError = $campaignCustomizerError;
  }
  /**
   * @return self::CAMPAIGN_CUSTOMIZER_ERROR_*
   */
  public function getCampaignCustomizerError()
  {
    return $this->campaignCustomizerError;
  }
  /**
   * The reasons for the campaign draft error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_DRAFT_NAME,
   * INVALID_STATUS_TRANSITION_FROM_REMOVED,
   * INVALID_STATUS_TRANSITION_FROM_PROMOTED,
   * INVALID_STATUS_TRANSITION_FROM_PROMOTE_FAILED,
   * CUSTOMER_CANNOT_CREATE_DRAFT, CAMPAIGN_CANNOT_CREATE_DRAFT,
   * INVALID_DRAFT_CHANGE, INVALID_STATUS_TRANSITION,
   * MAX_NUMBER_OF_DRAFTS_PER_CAMPAIGN_REACHED,
   * LIST_ERRORS_FOR_PROMOTED_DRAFT_ONLY
   *
   * @param self::CAMPAIGN_DRAFT_ERROR_* $campaignDraftError
   */
  public function setCampaignDraftError($campaignDraftError)
  {
    $this->campaignDraftError = $campaignDraftError;
  }
  /**
   * @return self::CAMPAIGN_DRAFT_ERROR_*
   */
  public function getCampaignDraftError()
  {
    return $this->campaignDraftError;
  }
  /**
   * An error with a Campaign mutate.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CANNOT_TARGET_CONTENT_NETWORK,
   * CANNOT_TARGET_SEARCH_NETWORK,
   * CANNOT_TARGET_SEARCH_NETWORK_WITHOUT_GOOGLE_SEARCH,
   * CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN,
   * CAMPAIGN_MUST_TARGET_AT_LEAST_ONE_NETWORK,
   * CANNOT_TARGET_PARTNER_SEARCH_NETWORK,
   * CANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CRITERIA_LEVEL_BIDDING_STRATEGY,
   * CAMPAIGN_DURATION_MUST_CONTAIN_ALL_RUNNABLE_TRIALS,
   * CANNOT_MODIFY_FOR_TRIAL_CAMPAIGN, DUPLICATE_CAMPAIGN_NAME,
   * INCOMPATIBLE_CAMPAIGN_FIELD, INVALID_CAMPAIGN_NAME,
   * INVALID_AD_SERVING_OPTIMIZATION_STATUS, INVALID_TRACKING_URL,
   * CANNOT_SET_BOTH_TRACKING_URL_TEMPLATE_AND_TRACKING_SETTING,
   * MAX_IMPRESSIONS_NOT_IN_RANGE, TIME_UNIT_NOT_SUPPORTED,
   * INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED, BUDGET_CANNOT_BE_SHARED,
   * CAMPAIGN_CANNOT_USE_SHARED_BUDGET,
   * CANNOT_CHANGE_BUDGET_ON_CAMPAIGN_WITH_TRIALS,
   * CAMPAIGN_LABEL_DOES_NOT_EXIST, CAMPAIGN_LABEL_ALREADY_EXISTS,
   * MISSING_SHOPPING_SETTING, INVALID_SHOPPING_SALES_COUNTRY,
   * ADVERTISING_CHANNEL_TYPE_NOT_AVAILABLE_FOR_ACCOUNT_TYPE,
   * INVALID_ADVERTISING_CHANNEL_SUB_TYPE,
   * AT_LEAST_ONE_CONVERSION_MUST_BE_SELECTED, CANNOT_SET_AD_ROTATION_MODE,
   * CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED, CANNOT_SET_DATE_TO_PAST,
   * MISSING_HOTEL_CUSTOMER_LINK, INVALID_HOTEL_CUSTOMER_LINK,
   * MISSING_HOTEL_SETTING,
   * CANNOT_USE_SHARED_CAMPAIGN_BUDGET_WHILE_PART_OF_CAMPAIGN_GROUP,
   * APP_NOT_FOUND, SHOPPING_ENABLE_LOCAL_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE,
   * MERCHANT_NOT_ALLOWED_FOR_COMPARISON_LISTING_ADS,
   * INSUFFICIENT_APP_INSTALLS_COUNT, SENSITIVE_CATEGORY_APP,
   * HEC_AGREEMENT_REQUIRED,
   * NOT_COMPATIBLE_WITH_VIEW_THROUGH_CONVERSION_OPTIMIZATION,
   * INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE,
   * CANNOT_CREATE_APP_PRE_REGISTRATION_FOR_NON_ANDROID_APP,
   * APP_NOT_AVAILABLE_TO_CREATE_APP_PRE_REGISTRATION_CAMPAIGN,
   * INCOMPATIBLE_BUDGET_TYPE, LOCAL_SERVICES_DUPLICATE_CATEGORY_BID,
   * LOCAL_SERVICES_INVALID_CATEGORY_BID, LOCAL_SERVICES_MISSING_CATEGORY_BID,
   * INVALID_STATUS_CHANGE, MISSING_TRAVEL_CUSTOMER_LINK,
   * INVALID_TRAVEL_CUSTOMER_LINK, INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE,
   * ASSET_SET_NOT_A_HOTEL_PROPERTY_ASSET_SET,
   * HOTEL_PROPERTY_ASSET_SET_ONLY_FOR_PERFORMANCE_MAX_FOR_TRAVEL_GOALS,
   * AVERAGE_DAILY_SPEND_TOO_HIGH, CANNOT_ATTACH_TO_REMOVED_CAMPAIGN_GROUP,
   * CANNOT_ATTACH_TO_BIDDING_STRATEGY, CANNOT_CHANGE_BUDGET_PERIOD,
   * NOT_ENOUGH_CONVERSIONS, CANNOT_SET_MORE_THAN_ONE_CONVERSION_ACTION,
   * NOT_COMPATIBLE_WITH_BUDGET_TYPE,
   * NOT_COMPATIBLE_WITH_UPLOAD_CLICKS_CONVERSION,
   * APP_ID_MUST_MATCH_CONVERSION_ACTION_APP_ID,
   * CONVERSION_ACTION_WITH_DOWNLOAD_CATEGORY_NOT_ALLOWED,
   * CONVERSION_ACTION_WITH_DOWNLOAD_CATEGORY_REQUIRED,
   * CONVERSION_TRACKING_NOT_ENABLED, NOT_COMPATIBLE_WITH_BIDDING_STRATEGY_TYPE,
   * NOT_COMPATIBLE_WITH_GOOGLE_ATTRIBUTION_CONVERSIONS,
   * CONVERSION_LAG_TOO_HIGH, NOT_LINKED_ADVERTISING_PARTNER,
   * INVALID_NUMBER_OF_ADVERTISING_PARTNER_IDS,
   * CANNOT_TARGET_DISPLAY_NETWORK_WITHOUT_YOUTUBE,
   * CANNOT_LINK_TO_COMPARISON_SHOPPING_SERVICE_ACCOUNT,
   * CANNOT_TARGET_NETWORK_FOR_COMPARISON_SHOPPING_SERVICE_LINKED_ACCOUNTS,
   * CANNOT_MODIFY_TEXT_ASSET_AUTOMATION_WITH_ENABLED_TRIAL,
   * DYNAMIC_TEXT_ASSET_CANNOT_OPT_OUT_WITH_FINAL_URL_EXPANSION_OPT_IN,
   * CANNOT_SET_CAMPAIGN_KEYWORD_MATCH_TYPE,
   * CANNOT_DISABLE_BROAD_MATCH_WHEN_KEYWORD_CONVERSION_IN_PROCESS,
   * CANNOT_DISABLE_BROAD_MATCH_WHEN_TARGETING_BRANDS,
   * CANNOT_ENABLE_BROAD_MATCH_FOR_BASE_CAMPAIGN_WITH_PROMOTING_TRIAL,
   * CANNOT_ENABLE_BROAD_MATCH_FOR_PROMOTING_TRIAL_CAMPAIGN,
   * REQUIRED_BUSINESS_NAME_ASSET_NOT_LINKED, REQUIRED_LOGO_ASSET_NOT_LINKED,
   * BRAND_TARGETING_OVERRIDES_NOT_SUPPORTED,
   * BRAND_GUIDELINES_NOT_ENABLED_FOR_CAMPAIGN,
   * BRAND_GUIDELINES_MAIN_AND_ACCENT_COLORS_REQUIRED,
   * BRAND_GUIDELINES_COLOR_INVALID_FORMAT,
   * BRAND_GUIDELINES_UNSUPPORTED_FONT_FAMILY,
   * BRAND_GUIDELINES_UNSUPPORTED_CHANNEL,
   * CANNOT_ENABLE_BRAND_GUIDELINES_FOR_TRAVEL_GOALS,
   * CUSTOMER_NOT_ALLOWLISTED_FOR_BRAND_GUIDELINES,
   * THIRD_PARTY_INTEGRATION_PARTNER_NOT_ALLOWED,
   * THIRD_PARTY_INTEGRATION_PARTNER_SHARE_COST_NOT_ALLOWED,
   * DUPLICATE_INTERACTION_TYPE, INVALID_INTERACTION_TYPE,
   * VIDEO_SEQUENCE_ERROR_SEQUENCE_DEFINITION_REQUIRED, AI_MAX_MUST_BE_ENABLED,
   * DURATION_TOO_LONG_FOR_TOTAL_BUDGET, END_DATE_TIME_REQUIRED_FOR_TOTAL_BUDGET
   *
   * @param self::CAMPAIGN_ERROR_* $campaignError
   */
  public function setCampaignError($campaignError)
  {
    $this->campaignError = $campaignError;
  }
  /**
   * @return self::CAMPAIGN_ERROR_*
   */
  public function getCampaignError()
  {
    return $this->campaignError;
  }
  /**
   * The reasons for the campaign experiment error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_NAME, INVALID_TRANSITION,
   * CANNOT_CREATE_EXPERIMENT_WITH_SHARED_BUDGET,
   * CANNOT_CREATE_EXPERIMENT_FOR_REMOVED_BASE_CAMPAIGN,
   * CANNOT_CREATE_EXPERIMENT_FOR_NON_PROPOSED_DRAFT,
   * CUSTOMER_CANNOT_CREATE_EXPERIMENT, CAMPAIGN_CANNOT_CREATE_EXPERIMENT,
   * EXPERIMENT_DURATIONS_MUST_NOT_OVERLAP,
   * EXPERIMENT_DURATION_MUST_BE_WITHIN_CAMPAIGN_DURATION,
   * CANNOT_MUTATE_EXPERIMENT_DUE_TO_STATUS
   *
   * @param self::CAMPAIGN_EXPERIMENT_ERROR_* $campaignExperimentError
   */
  public function setCampaignExperimentError($campaignExperimentError)
  {
    $this->campaignExperimentError = $campaignExperimentError;
  }
  /**
   * @return self::CAMPAIGN_EXPERIMENT_ERROR_*
   */
  public function getCampaignExperimentError()
  {
    return $this->campaignExperimentError;
  }
  /**
   * The reasons for the campaign feed error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE, CANNOT_CREATE_FOR_REMOVED_FEED,
   * CANNOT_CREATE_ALREADY_EXISTING_CAMPAIGN_FEED,
   * CANNOT_MODIFY_REMOVED_CAMPAIGN_FEED, INVALID_PLACEHOLDER_TYPE,
   * MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE,
   * NO_EXISTING_LOCATION_CUSTOMER_FEED, LEGACY_FEED_TYPE_READ_ONLY
   *
   * @param self::CAMPAIGN_FEED_ERROR_* $campaignFeedError
   */
  public function setCampaignFeedError($campaignFeedError)
  {
    $this->campaignFeedError = $campaignFeedError;
  }
  /**
   * @return self::CAMPAIGN_FEED_ERROR_*
   */
  public function getCampaignFeedError()
  {
    return $this->campaignFeedError;
  }
  /**
   * The reasons for the campaign goal config error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, GOAL_NOT_FOUND, CAMPAIGN_NOT_FOUND,
   * HIGH_LIFETIME_VALUE_PRESENT_BUT_VALUE_ABSENT,
   * HIGH_LIFETIME_VALUE_LESS_THAN_OR_EQUAL_TO_VALUE,
   * CUSTOMER_LIFECYCLE_OPTIMIZATION_CAMPAIGN_TYPE_NOT_SUPPORTED,
   * CUSTOMER_NOT_ALLOWLISTED_FOR_RETENTION_ONLY
   *
   * @param self::CAMPAIGN_GOAL_CONFIG_ERROR_* $campaignGoalConfigError
   */
  public function setCampaignGoalConfigError($campaignGoalConfigError)
  {
    $this->campaignGoalConfigError = $campaignGoalConfigError;
  }
  /**
   * @return self::CAMPAIGN_GOAL_CONFIG_ERROR_*
   */
  public function getCampaignGoalConfigError()
  {
    return $this->campaignGoalConfigError;
  }
  /**
   * The reasons for the campaign lifecycle goal error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_MISSING, INVALID_CAMPAIGN,
   * CUSTOMER_ACQUISITION_INVALID_OPTIMIZATION_MODE,
   * INCOMPATIBLE_BIDDING_STRATEGY, MISSING_PURCHASE_GOAL,
   * CUSTOMER_ACQUISITION_INVALID_HIGH_LIFETIME_VALUE,
   * CUSTOMER_ACQUISITION_UNSUPPORTED_CAMPAIGN_TYPE,
   * CUSTOMER_ACQUISITION_INVALID_VALUE, CUSTOMER_ACQUISITION_VALUE_MISSING,
   * CUSTOMER_ACQUISITION_MISSING_EXISTING_CUSTOMER_DEFINITION,
   * CUSTOMER_ACQUISITION_MISSING_HIGH_VALUE_CUSTOMER_DEFINITION
   *
   * @param self::CAMPAIGN_LIFECYCLE_GOAL_ERROR_* $campaignLifecycleGoalError
   */
  public function setCampaignLifecycleGoalError($campaignLifecycleGoalError)
  {
    $this->campaignLifecycleGoalError = $campaignLifecycleGoalError;
  }
  /**
   * @return self::CAMPAIGN_LIFECYCLE_GOAL_ERROR_*
   */
  public function getCampaignLifecycleGoalError()
  {
    return $this->campaignLifecycleGoalError;
  }
  /**
   * The reasons for the campaign shared set error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SHARED_SET_ACCESS_DENIED
   *
   * @param self::CAMPAIGN_SHARED_SET_ERROR_* $campaignSharedSetError
   */
  public function setCampaignSharedSetError($campaignSharedSetError)
  {
    $this->campaignSharedSetError = $campaignSharedSetError;
  }
  /**
   * @return self::CAMPAIGN_SHARED_SET_ERROR_*
   */
  public function getCampaignSharedSetError()
  {
    return $this->campaignSharedSetError;
  }
  /**
   * The reasons for the change event error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, START_DATE_TOO_OLD,
   * CHANGE_DATE_RANGE_INFINITE, CHANGE_DATE_RANGE_NEGATIVE,
   * LIMIT_NOT_SPECIFIED, INVALID_LIMIT_CLAUSE
   *
   * @param self::CHANGE_EVENT_ERROR_* $changeEventError
   */
  public function setChangeEventError($changeEventError)
  {
    $this->changeEventError = $changeEventError;
  }
  /**
   * @return self::CHANGE_EVENT_ERROR_*
   */
  public function getChangeEventError()
  {
    return $this->changeEventError;
  }
  /**
   * The reasons for the change status error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, START_DATE_TOO_OLD,
   * CHANGE_DATE_RANGE_INFINITE, CHANGE_DATE_RANGE_NEGATIVE,
   * LIMIT_NOT_SPECIFIED, INVALID_LIMIT_CLAUSE
   *
   * @param self::CHANGE_STATUS_ERROR_* $changeStatusError
   */
  public function setChangeStatusError($changeStatusError)
  {
    $this->changeStatusError = $changeStatusError;
  }
  /**
   * @return self::CHANGE_STATUS_ERROR_*
   */
  public function getChangeStatusError()
  {
    return $this->changeStatusError;
  }
  /**
   * The reasons for the click view error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXPECTED_FILTER_ON_A_SINGLE_DAY,
   * DATE_TOO_OLD
   *
   * @param self::CLICK_VIEW_ERROR_* $clickViewError
   */
  public function setClickViewError($clickViewError)
  {
    $this->clickViewError = $clickViewError;
  }
  /**
   * @return self::CLICK_VIEW_ERROR_*
   */
  public function getClickViewError()
  {
    return $this->clickViewError;
  }
  /**
   * The reasons for the collection size error
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
   * The reasons for the context error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, OPERATION_NOT_PERMITTED_FOR_CONTEXT,
   * OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE
   *
   * @param self::CONTEXT_ERROR_* $contextError
   */
  public function setContextError($contextError)
  {
    $this->contextError = $contextError;
  }
  /**
   * @return self::CONTEXT_ERROR_*
   */
  public function getContextError()
  {
    return $this->contextError;
  }
  /**
   * The reasons for the conversion action error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_NAME, DUPLICATE_APP_ID,
   * TWO_CONVERSION_ACTIONS_BIDDING_ON_SAME_APP_DOWNLOAD,
   * BIDDING_ON_SAME_APP_DOWNLOAD_AS_GLOBAL_ACTION,
   * DATA_DRIVEN_MODEL_WAS_NEVER_GENERATED, DATA_DRIVEN_MODEL_EXPIRED,
   * DATA_DRIVEN_MODEL_STALE, DATA_DRIVEN_MODEL_UNKNOWN, CREATION_NOT_SUPPORTED,
   * UPDATE_NOT_SUPPORTED, CANNOT_SET_RULE_BASED_ATTRIBUTION_MODELS
   *
   * @param self::CONVERSION_ACTION_ERROR_* $conversionActionError
   */
  public function setConversionActionError($conversionActionError)
  {
    $this->conversionActionError = $conversionActionError;
  }
  /**
   * @return self::CONVERSION_ACTION_ERROR_*
   */
  public function getConversionActionError()
  {
    return $this->conversionActionError;
  }
  /**
   * The reasons for the conversion adjustment upload error
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
   * The reasons for the conversion custom variable error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_NAME, DUPLICATE_TAG,
   * RESERVED_TAG
   *
   * @param self::CONVERSION_CUSTOM_VARIABLE_ERROR_* $conversionCustomVariableError
   */
  public function setConversionCustomVariableError($conversionCustomVariableError)
  {
    $this->conversionCustomVariableError = $conversionCustomVariableError;
  }
  /**
   * @return self::CONVERSION_CUSTOM_VARIABLE_ERROR_*
   */
  public function getConversionCustomVariableError()
  {
    return $this->conversionCustomVariableError;
  }
  /**
   * The reasons for the conversion goal campaign config error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * CANNOT_USE_CAMPAIGN_GOAL_FOR_SEARCH_ADS_360_MANAGED_CAMPAIGN,
   * CUSTOM_GOAL_DOES_NOT_BELONG_TO_GOOGLE_ADS_CONVERSION_CUSTOMER,
   * CAMPAIGN_CANNOT_USE_UNIFIED_GOALS, EMPTY_CONVERSION_GOALS,
   * STORE_SALE_STORE_VISIT_CANNOT_BE_BOTH_INCLUDED,
   * PERFORMANCE_MAX_CAMPAIGN_CANNOT_USE_CUSTOM_GOAL_WITH_STORE_SALES
   *
   * @param self::CONVERSION_GOAL_CAMPAIGN_CONFIG_ERROR_* $conversionGoalCampaignConfigError
   */
  public function setConversionGoalCampaignConfigError($conversionGoalCampaignConfigError)
  {
    $this->conversionGoalCampaignConfigError = $conversionGoalCampaignConfigError;
  }
  /**
   * @return self::CONVERSION_GOAL_CAMPAIGN_CONFIG_ERROR_*
   */
  public function getConversionGoalCampaignConfigError()
  {
    return $this->conversionGoalCampaignConfigError;
  }
  /**
   * The reasons for the conversion upload error
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
   * The reasons for the conversion value rule error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_GEO_TARGET_CONSTANT,
   * CONFLICTING_INCLUDED_AND_EXCLUDED_GEO_TARGET, CONFLICTING_CONDITIONS,
   * CANNOT_REMOVE_IF_INCLUDED_IN_VALUE_RULE_SET, CONDITION_NOT_ALLOWED,
   * FIELD_MUST_BE_UNSET, CANNOT_PAUSE_UNLESS_VALUE_RULE_SET_IS_PAUSED,
   * UNTARGETABLE_GEO_TARGET, INVALID_AUDIENCE_USER_LIST,
   * INACCESSIBLE_USER_LIST, INVALID_AUDIENCE_USER_INTEREST,
   * CANNOT_ADD_RULE_WITH_STATUS_REMOVED, NO_DAY_OF_WEEK_SELECTED
   *
   * @param self::CONVERSION_VALUE_RULE_ERROR_* $conversionValueRuleError
   */
  public function setConversionValueRuleError($conversionValueRuleError)
  {
    $this->conversionValueRuleError = $conversionValueRuleError;
  }
  /**
   * @return self::CONVERSION_VALUE_RULE_ERROR_*
   */
  public function getConversionValueRuleError()
  {
    return $this->conversionValueRuleError;
  }
  /**
   * The reasons for the conversion value rule set error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CONFLICTING_VALUE_RULE_CONDITIONS,
   * INVALID_VALUE_RULE, DIMENSIONS_UPDATE_ONLY_ALLOW_APPEND,
   * CONDITION_TYPE_NOT_ALLOWED, DUPLICATE_DIMENSIONS, INVALID_CAMPAIGN_ID,
   * CANNOT_PAUSE_UNLESS_ALL_VALUE_RULES_ARE_PAUSED,
   * SHOULD_PAUSE_WHEN_ALL_VALUE_RULES_ARE_PAUSED,
   * VALUE_RULES_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE,
   * INELIGIBLE_CONVERSION_ACTION_CATEGORIES,
   * DIMENSION_NO_CONDITION_USED_WITH_OTHER_DIMENSIONS,
   * DIMENSION_NO_CONDITION_NOT_ALLOWED,
   * UNSUPPORTED_CONVERSION_ACTION_CATEGORIES,
   * DIMENSION_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE
   *
   * @param self::CONVERSION_VALUE_RULE_SET_ERROR_* $conversionValueRuleSetError
   */
  public function setConversionValueRuleSetError($conversionValueRuleSetError)
  {
    $this->conversionValueRuleSetError = $conversionValueRuleSetError;
  }
  /**
   * @return self::CONVERSION_VALUE_RULE_SET_ERROR_*
   */
  public function getConversionValueRuleSetError()
  {
    return $this->conversionValueRuleSetError;
  }
  /**
   * The reasons for the country code error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_COUNTRY_CODE
   *
   * @param self::COUNTRY_CODE_ERROR_* $countryCodeError
   */
  public function setCountryCodeError($countryCodeError)
  {
    $this->countryCodeError = $countryCodeError;
  }
  /**
   * @return self::COUNTRY_CODE_ERROR_*
   */
  public function getCountryCodeError()
  {
    return $this->countryCodeError;
  }
  /**
   * The reasons for the criterion error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CONCRETE_TYPE_REQUIRED,
   * INVALID_EXCLUDED_CATEGORY, INVALID_KEYWORD_TEXT, KEYWORD_TEXT_TOO_LONG,
   * KEYWORD_HAS_TOO_MANY_WORDS, KEYWORD_HAS_INVALID_CHARS,
   * INVALID_PLACEMENT_URL, INVALID_USER_LIST, INVALID_USER_INTEREST,
   * INVALID_FORMAT_FOR_PLACEMENT_URL, PLACEMENT_URL_IS_TOO_LONG,
   * PLACEMENT_URL_HAS_ILLEGAL_CHAR, PLACEMENT_URL_HAS_MULTIPLE_SITES_IN_LINE,
   * PLACEMENT_IS_NOT_AVAILABLE_FOR_TARGETING_OR_EXCLUSION, INVALID_TOPIC_PATH,
   * INVALID_YOUTUBE_CHANNEL_ID, INVALID_YOUTUBE_VIDEO_ID,
   * YOUTUBE_VERTICAL_CHANNEL_DEPRECATED,
   * YOUTUBE_DEMOGRAPHIC_CHANNEL_DEPRECATED, YOUTUBE_URL_UNSUPPORTED,
   * CANNOT_EXCLUDE_CRITERIA_TYPE, CANNOT_ADD_CRITERIA_TYPE,
   * CANNOT_EXCLUDE_SIMILAR_USER_LIST, CANNOT_ADD_CLOSED_USER_LIST,
   * CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_ONLY_CAMPAIGNS,
   * CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SEARCH_CAMPAIGNS,
   * CANNOT_ADD_DISPLAY_ONLY_LISTS_TO_SHOPPING_CAMPAIGNS,
   * CANNOT_ADD_USER_INTERESTS_TO_SEARCH_CAMPAIGNS,
   * CANNOT_SET_BIDS_ON_CRITERION_TYPE_IN_SEARCH_CAMPAIGNS,
   * CANNOT_ADD_URLS_TO_CRITERION_TYPE_FOR_CAMPAIGN_TYPE,
   * INVALID_COMBINED_AUDIENCE, INVALID_CUSTOM_AFFINITY, INVALID_CUSTOM_INTENT,
   * INVALID_CUSTOM_AUDIENCE, INVALID_IP_ADDRESS, INVALID_IP_FORMAT,
   * INVALID_MOBILE_APP, INVALID_MOBILE_APP_CATEGORY, INVALID_CRITERION_ID,
   * CANNOT_TARGET_CRITERION, CANNOT_TARGET_OBSOLETE_CRITERION,
   * CRITERION_ID_AND_TYPE_MISMATCH, INVALID_PROXIMITY_RADIUS,
   * INVALID_PROXIMITY_RADIUS_UNITS, INVALID_STREETADDRESS_LENGTH,
   * INVALID_CITYNAME_LENGTH, INVALID_REGIONCODE_LENGTH,
   * INVALID_REGIONNAME_LENGTH, INVALID_POSTALCODE_LENGTH, INVALID_COUNTRY_CODE,
   * INVALID_LATITUDE, INVALID_LONGITUDE,
   * PROXIMITY_GEOPOINT_AND_ADDRESS_BOTH_CANNOT_BE_NULL,
   * INVALID_PROXIMITY_ADDRESS, INVALID_USER_DOMAIN_NAME,
   * CRITERION_PARAMETER_TOO_LONG, AD_SCHEDULE_TIME_INTERVALS_OVERLAP,
   * AD_SCHEDULE_INTERVAL_CANNOT_SPAN_MULTIPLE_DAYS,
   * AD_SCHEDULE_INVALID_TIME_INTERVAL,
   * AD_SCHEDULE_EXCEEDED_INTERVALS_PER_DAY_LIMIT,
   * AD_SCHEDULE_CRITERION_ID_MISMATCHING_FIELDS,
   * CANNOT_BID_MODIFY_CRITERION_TYPE,
   * CANNOT_BID_MODIFY_CRITERION_CAMPAIGN_OPTED_OUT,
   * CANNOT_BID_MODIFY_NEGATIVE_CRITERION, BID_MODIFIER_ALREADY_EXISTS,
   * FEED_ID_NOT_ALLOWED, ACCOUNT_INELIGIBLE_FOR_CRITERIA_TYPE,
   * CRITERIA_TYPE_INVALID_FOR_BIDDING_STRATEGY, CANNOT_EXCLUDE_CRITERION,
   * CANNOT_REMOVE_CRITERION, INVALID_PRODUCT_BIDDING_CATEGORY,
   * MISSING_SHOPPING_SETTING, INVALID_MATCHING_FUNCTION,
   * LOCATION_FILTER_NOT_ALLOWED, INVALID_FEED_FOR_LOCATION_FILTER,
   * LOCATION_FILTER_INVALID,
   * CANNOT_SET_GEO_TARGET_CONSTANTS_WITH_FEED_ITEM_SETS,
   * CANNOT_SET_BOTH_ASSET_SET_AND_FEED,
   * CANNOT_SET_FEED_OR_FEED_ITEM_SETS_FOR_CUSTOMER,
   * CANNOT_SET_ASSET_SET_FIELD_FOR_CUSTOMER,
   * CANNOT_SET_GEO_TARGET_CONSTANTS_WITH_ASSET_SETS,
   * CANNOT_SET_ASSET_SETS_WITH_FEED_ITEM_SETS,
   * INVALID_LOCATION_GROUP_ASSET_SET, INVALID_LOCATION_GROUP_RADIUS,
   * INVALID_LOCATION_GROUP_RADIUS_UNIT,
   * CANNOT_ATTACH_CRITERIA_AT_CAMPAIGN_AND_ADGROUP,
   * HOTEL_LENGTH_OF_STAY_OVERLAPS_WITH_EXISTING_CRITERION,
   * HOTEL_ADVANCE_BOOKING_WINDOW_OVERLAPS_WITH_EXISTING_CRITERION,
   * FIELD_INCOMPATIBLE_WITH_NEGATIVE_TARGETING, INVALID_WEBPAGE_CONDITION,
   * INVALID_WEBPAGE_CONDITION_URL, WEBPAGE_CONDITION_URL_CANNOT_BE_EMPTY,
   * WEBPAGE_CONDITION_URL_UNSUPPORTED_PROTOCOL,
   * WEBPAGE_CONDITION_URL_CANNOT_BE_IP_ADDRESS,
   * WEBPAGE_CONDITION_URL_DOMAIN_NOT_CONSISTENT_WITH_CAMPAIGN_SETTING,
   * WEBPAGE_CONDITION_URL_CANNOT_BE_PUBLIC_SUFFIX,
   * WEBPAGE_CONDITION_URL_INVALID_PUBLIC_SUFFIX,
   * WEBPAGE_CONDITION_URL_VALUE_TRACK_VALUE_NOT_SUPPORTED,
   * WEBPAGE_CRITERION_URL_EQUALS_CAN_HAVE_ONLY_ONE_CONDITION,
   * WEBPAGE_CRITERION_NOT_SUPPORTED_ON_NON_DSA_AD_GROUP,
   * CANNOT_TARGET_USER_LIST_FOR_SMART_DISPLAY_CAMPAIGNS,
   * CANNOT_TARGET_PLACEMENTS_FOR_SEARCH_CAMPAIGNS,
   * LISTING_SCOPE_TOO_MANY_DIMENSION_TYPES,
   * LISTING_SCOPE_TOO_MANY_IN_OPERATORS,
   * LISTING_SCOPE_IN_OPERATOR_NOT_SUPPORTED, DUPLICATE_LISTING_DIMENSION_TYPE,
   * DUPLICATE_LISTING_DIMENSION_VALUE,
   * CANNOT_SET_BIDS_ON_LISTING_GROUP_SUBDIVISION,
   * LISTING_GROUP_ERROR_IN_ANOTHER_OPERATION, INVALID_LISTING_GROUP_HIERARCHY,
   * LISTING_GROUP_TREE_WAS_INVALID_BEFORE_MUTATION,
   * LISTING_GROUP_UNIT_CANNOT_HAVE_CHILDREN,
   * LISTING_GROUP_SUBDIVISION_REQUIRES_OTHERS_CASE,
   * LISTING_GROUP_REQUIRES_SAME_DIMENSION_TYPE_AS_SIBLINGS,
   * LISTING_GROUP_ALREADY_EXISTS, LISTING_GROUP_DOES_NOT_EXIST,
   * LISTING_GROUP_CANNOT_BE_REMOVED, INVALID_LISTING_GROUP_TYPE,
   * LISTING_GROUP_ADD_MAY_ONLY_USE_TEMP_ID, LISTING_SCOPE_TOO_LONG,
   * LISTING_SCOPE_TOO_MANY_DIMENSIONS, LISTING_GROUP_TOO_LONG,
   * LISTING_GROUP_TREE_TOO_DEEP, INVALID_LISTING_DIMENSION,
   * INVALID_LISTING_DIMENSION_TYPE,
   * ADVERTISER_NOT_ON_ALLOWLIST_FOR_COMBINED_AUDIENCE_ON_DISPLAY,
   * CANNOT_TARGET_REMOVED_COMBINED_AUDIENCE, INVALID_COMBINED_AUDIENCE_ID,
   * CANNOT_TARGET_REMOVED_CUSTOM_AUDIENCE,
   * HOTEL_CHECK_IN_DATE_RANGE_OVERLAPS_WITH_EXISTING_CRITERION,
   * HOTEL_CHECK_IN_DATE_RANGE_START_DATE_TOO_EARLY,
   * HOTEL_CHECK_IN_DATE_RANGE_END_DATE_TOO_LATE,
   * HOTEL_CHECK_IN_DATE_RANGE_REVERSED,
   * BROAD_MATCH_MODIFIER_KEYWORD_NOT_ALLOWED,
   * ONE_AUDIENCE_ALLOWED_PER_ASSET_GROUP,
   * AUDIENCE_NOT_ELIGIBLE_FOR_CAMPAIGN_TYPE,
   * AUDIENCE_NOT_ALLOWED_TO_ATTACH_WHEN_AUDIENCE_GROUPED_SET_TO_FALSE,
   * CANNOT_TARGET_CUSTOMER_MATCH_USER_LIST,
   * NEGATIVE_KEYWORD_SHARED_SET_DOES_NOT_EXIST,
   * CANNOT_ADD_REMOVED_NEGATIVE_KEYWORD_SHARED_SET,
   * CANNOT_HAVE_MULTIPLE_NEGATIVE_KEYWORD_LIST_PER_ACCOUNT,
   * CUSTOMER_CANNOT_ADD_CRITERION_OF_THIS_TYPE,
   * CANNOT_TARGET_SIMILAR_USER_LIST,
   * CANNOT_ADD_AUDIENCE_SEGMENT_CRITERION_WHEN_AUDIENCE_GROUPED_IS_SET,
   * ONE_AUDIENCE_ALLOWED_PER_AD_GROUP, INVALID_DETAILED_DEMOGRAPHIC,
   * CANNOT_RECOGNIZE_BRAND, BRAND_SHARED_SET_DOES_NOT_EXIST,
   * CANNOT_ADD_REMOVED_BRAND_SHARED_SET,
   * ONLY_EXCLUSION_BRAND_LIST_ALLOWED_FOR_CAMPAIGN_TYPE,
   * LOCATION_TARGETING_NOT_ELIGIBLE_FOR_RESTRICTED_CAMPAIGN,
   * ONLY_INCLUSION_BRAND_LIST_ALLOWED_FOR_AD_GROUPS,
   * CANNOT_ADD_REMOVED_PLACEMENT_LIST_SHARED_SET,
   * PLACEMENT_LIST_SHARED_SET_DOES_NOT_EXIST, AI_MAX_MUST_BE_ENABLED,
   * NOT_AVAILABLE_FOR_AI_MAX_CAMPAIGNS,
   * MISSING_EU_POLITICAL_ADVERTISING_SELF_DECLARATION,
   * INVALID_CAMPAIGN_TYPE_FOR_THIRD_PARTY_PARTNER_DATA_LIST,
   * CANNOT_ADD_USER_LIST_PENDING_PRIVACY_REVIEW,
   * VERTICAL_ADS_ITEM_GROUP_RULE_LIST_DOES_NOT_EXIST,
   * CANNOT_ADD_REMOVED_VERTICAL_ADS_ITEM_GROUP_RULE_LIST_SHARED_SET, VERTICAL_A
   * DS_ITEM_GROUP_RULE_LIST_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT_ENABLED_TRAVEL_
   * FEED, VERTICAL_ADS_ITEM_GROUP_RULE_LIST_NOT_SUPPORTED_FOR_CAMPAIGNS_WITHOUT
   * _AI_MAX, VERTICAL_ADS_ITEM_GROUP_RULE_NOT_SUPPORTED_FOR_THE_VERTICAL_TYPE
   *
   * @param self::CRITERION_ERROR_* $criterionError
   */
  public function setCriterionError($criterionError)
  {
    $this->criterionError = $criterionError;
  }
  /**
   * @return self::CRITERION_ERROR_*
   */
  public function getCriterionError()
  {
    return $this->criterionError;
  }
  /**
   * The reasons for the currency code error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, UNSUPPORTED
   *
   * @param self::CURRENCY_CODE_ERROR_* $currencyCodeError
   */
  public function setCurrencyCodeError($currencyCodeError)
  {
    $this->currencyCodeError = $currencyCodeError;
  }
  /**
   * @return self::CURRENCY_CODE_ERROR_*
   */
  public function getCurrencyCodeError()
  {
    return $this->currencyCodeError;
  }
  /**
   * The reasons for the currency errors.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, VALUE_NOT_MULTIPLE_OF_BILLABLE_UNIT
   *
   * @param self::CURRENCY_ERROR_* $currencyError
   */
  public function setCurrencyError($currencyError)
  {
    $this->currencyError = $currencyError;
  }
  /**
   * @return self::CURRENCY_ERROR_*
   */
  public function getCurrencyError()
  {
    return $this->currencyError;
  }
  /**
   * The reasons for the custom audience error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NAME_ALREADY_USED,
   * CANNOT_REMOVE_WHILE_IN_USE, RESOURCE_ALREADY_REMOVED,
   * MEMBER_TYPE_AND_PARAMETER_ALREADY_EXISTED, INVALID_MEMBER_TYPE,
   * MEMBER_TYPE_AND_VALUE_DOES_NOT_MATCH, POLICY_VIOLATION, INVALID_TYPE_CHANGE
   *
   * @param self::CUSTOM_AUDIENCE_ERROR_* $customAudienceError
   */
  public function setCustomAudienceError($customAudienceError)
  {
    $this->customAudienceError = $customAudienceError;
  }
  /**
   * @return self::CUSTOM_AUDIENCE_ERROR_*
   */
  public function getCustomAudienceError()
  {
    return $this->customAudienceError;
  }
  /**
   * The reasons for the custom column error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOM_COLUMN_NOT_FOUND,
   * CUSTOM_COLUMN_NOT_AVAILABLE
   *
   * @param self::CUSTOM_COLUMN_ERROR_* $customColumnError
   */
  public function setCustomColumnError($customColumnError)
  {
    $this->customColumnError = $customColumnError;
  }
  /**
   * @return self::CUSTOM_COLUMN_ERROR_*
   */
  public function getCustomColumnError()
  {
    return $this->customColumnError;
  }
  /**
   * The reasons for the custom conversion goal error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_CONVERSION_ACTION,
   * CONVERSION_ACTION_NOT_ENABLED, CANNOT_REMOVE_LINKED_CUSTOM_CONVERSION_GOAL,
   * CUSTOM_GOAL_DUPLICATE_NAME, DUPLICATE_CONVERSION_ACTION_LIST,
   * NON_BIDDABLE_CONVERSION_ACTION_NOT_ELIGIBLE_FOR_CUSTOM_GOAL
   *
   * @param self::CUSTOM_CONVERSION_GOAL_ERROR_* $customConversionGoalError
   */
  public function setCustomConversionGoalError($customConversionGoalError)
  {
    $this->customConversionGoalError = $customConversionGoalError;
  }
  /**
   * @return self::CUSTOM_CONVERSION_GOAL_ERROR_*
   */
  public function getCustomConversionGoalError()
  {
    return $this->customConversionGoalError;
  }
  /**
   * The reasons for the custom interest error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NAME_ALREADY_USED,
   * CUSTOM_INTEREST_MEMBER_ID_AND_TYPE_PARAMETER_NOT_PRESENT_IN_REMOVE,
   * TYPE_AND_PARAMETER_NOT_FOUND, TYPE_AND_PARAMETER_ALREADY_EXISTED,
   * INVALID_CUSTOM_INTEREST_MEMBER_TYPE, CANNOT_REMOVE_WHILE_IN_USE,
   * CANNOT_CHANGE_TYPE
   *
   * @param self::CUSTOM_INTEREST_ERROR_* $customInterestError
   */
  public function setCustomInterestError($customInterestError)
  {
    $this->customInterestError = $customInterestError;
  }
  /**
   * @return self::CUSTOM_INTEREST_ERROR_*
   */
  public function getCustomInterestError()
  {
    return $this->customInterestError;
  }
  /**
   * The reasons for the customer client link error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * CLIENT_ALREADY_INVITED_BY_THIS_MANAGER,
   * CLIENT_ALREADY_MANAGED_IN_HIERARCHY, CYCLIC_LINK_NOT_ALLOWED,
   * CUSTOMER_HAS_TOO_MANY_ACCOUNTS, CLIENT_HAS_TOO_MANY_INVITATIONS,
   * CANNOT_HIDE_OR_UNHIDE_MANAGER_ACCOUNTS,
   * CUSTOMER_HAS_TOO_MANY_ACCOUNTS_AT_MANAGER, CLIENT_HAS_TOO_MANY_MANAGERS
   *
   * @param self::CUSTOMER_CLIENT_LINK_ERROR_* $customerClientLinkError
   */
  public function setCustomerClientLinkError($customerClientLinkError)
  {
    $this->customerClientLinkError = $customerClientLinkError;
  }
  /**
   * @return self::CUSTOMER_CLIENT_LINK_ERROR_*
   */
  public function getCustomerClientLinkError()
  {
    return $this->customerClientLinkError;
  }
  /**
   * The reasons for the customer customizer error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN
   *
   * @param self::CUSTOMER_CUSTOMIZER_ERROR_* $customerCustomizerError
   */
  public function setCustomerCustomizerError($customerCustomizerError)
  {
    $this->customerCustomizerError = $customerCustomizerError;
  }
  /**
   * @return self::CUSTOMER_CUSTOMIZER_ERROR_*
   */
  public function getCustomerCustomizerError()
  {
    return $this->customerCustomizerError;
  }
  /**
   * The reasons for the customer error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, STATUS_CHANGE_DISALLOWED,
   * ACCOUNT_NOT_SET_UP, CREATION_DENIED_FOR_POLICY_VIOLATION,
   * CREATION_DENIED_INELIGIBLE_MCC
   *
   * @param self::CUSTOMER_ERROR_* $customerError
   */
  public function setCustomerError($customerError)
  {
    $this->customerError = $customerError;
  }
  /**
   * @return self::CUSTOMER_ERROR_*
   */
  public function getCustomerError()
  {
    return $this->customerError;
  }
  /**
   * The reasons for the customer feed error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE, CANNOT_CREATE_FOR_REMOVED_FEED,
   * CANNOT_CREATE_ALREADY_EXISTING_CUSTOMER_FEED,
   * CANNOT_MODIFY_REMOVED_CUSTOMER_FEED, INVALID_PLACEHOLDER_TYPE,
   * MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE,
   * PLACEHOLDER_TYPE_NOT_ALLOWED_ON_CUSTOMER_FEED
   *
   * @param self::CUSTOMER_FEED_ERROR_* $customerFeedError
   */
  public function setCustomerFeedError($customerFeedError)
  {
    $this->customerFeedError = $customerFeedError;
  }
  /**
   * @return self::CUSTOMER_FEED_ERROR_*
   */
  public function getCustomerFeedError()
  {
    return $this->customerFeedError;
  }
  /**
   * The reasons for the customer lifecycle goal error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOMER_ACQUISITION_VALUE_MISSING,
   * CUSTOMER_ACQUISITION_INVALID_VALUE,
   * CUSTOMER_ACQUISITION_INVALID_HIGH_LIFETIME_VALUE,
   * CUSTOMER_ACQUISITION_VALUE_CANNOT_BE_CLEARED,
   * CUSTOMER_ACQUISITION_HIGH_LIFETIME_VALUE_CANNOT_BE_CLEARED,
   * INVALID_EXISTING_USER_LIST, INVALID_HIGH_LIFETIME_VALUE_USER_LIST
   *
   * @param self::CUSTOMER_LIFECYCLE_GOAL_ERROR_* $customerLifecycleGoalError
   */
  public function setCustomerLifecycleGoalError($customerLifecycleGoalError)
  {
    $this->customerLifecycleGoalError = $customerLifecycleGoalError;
  }
  /**
   * @return self::CUSTOMER_LIFECYCLE_GOAL_ERROR_*
   */
  public function getCustomerLifecycleGoalError()
  {
    return $this->customerLifecycleGoalError;
  }
  /**
   * The reasons for the customer manager link error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NO_PENDING_INVITE,
   * SAME_CLIENT_MORE_THAN_ONCE_PER_CALL,
   * MANAGER_HAS_MAX_NUMBER_OF_LINKED_ACCOUNTS,
   * CANNOT_UNLINK_ACCOUNT_WITHOUT_ACTIVE_USER,
   * CANNOT_REMOVE_LAST_CLIENT_ACCOUNT_OWNER,
   * CANNOT_CHANGE_ROLE_BY_NON_ACCOUNT_OWNER,
   * CANNOT_CHANGE_ROLE_FOR_NON_ACTIVE_LINK_ACCOUNT, DUPLICATE_CHILD_FOUND,
   * TEST_ACCOUNT_LINKS_TOO_MANY_CHILD_ACCOUNTS
   *
   * @param self::CUSTOMER_MANAGER_LINK_ERROR_* $customerManagerLinkError
   */
  public function setCustomerManagerLinkError($customerManagerLinkError)
  {
    $this->customerManagerLinkError = $customerManagerLinkError;
  }
  /**
   * @return self::CUSTOMER_MANAGER_LINK_ERROR_*
   */
  public function getCustomerManagerLinkError()
  {
    return $this->customerManagerLinkError;
  }
  /**
   * The reasons for the customer SK Ad network conversion value schema error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_LINK_ID, INVALID_APP_ID,
   * INVALID_SCHEMA, LINK_CODE_NOT_FOUND, INVALID_EVENT_COUNTER,
   * INVALID_EVENT_NAME
   *
   * @param self::CUSTOMER_SK_AD_NETWORK_CONVERSION_VALUE_SCHEMA_ERROR_* $customerSkAdNetworkConversionValueSchemaError
   */
  public function setCustomerSkAdNetworkConversionValueSchemaError($customerSkAdNetworkConversionValueSchemaError)
  {
    $this->customerSkAdNetworkConversionValueSchemaError = $customerSkAdNetworkConversionValueSchemaError;
  }
  /**
   * @return self::CUSTOMER_SK_AD_NETWORK_CONVERSION_VALUE_SCHEMA_ERROR_*
   */
  public function getCustomerSkAdNetworkConversionValueSchemaError()
  {
    return $this->customerSkAdNetworkConversionValueSchemaError;
  }
  /**
   * The reasons for the customer user access mutate error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_USER_ID, REMOVAL_DISALLOWED,
   * DISALLOWED_ACCESS_ROLE, LAST_ADMIN_USER_OF_SERVING_CUSTOMER,
   * LAST_ADMIN_USER_OF_MANAGER
   *
   * @param self::CUSTOMER_USER_ACCESS_ERROR_* $customerUserAccessError
   */
  public function setCustomerUserAccessError($customerUserAccessError)
  {
    $this->customerUserAccessError = $customerUserAccessError;
  }
  /**
   * @return self::CUSTOMER_USER_ACCESS_ERROR_*
   */
  public function getCustomerUserAccessError()
  {
    return $this->customerUserAccessError;
  }
  /**
   * The reasons for the customizer attribute error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DUPLICATE_CUSTOMIZER_ATTRIBUTE_NAME
   *
   * @param self::CUSTOMIZER_ATTRIBUTE_ERROR_* $customizerAttributeError
   */
  public function setCustomizerAttributeError($customizerAttributeError)
  {
    $this->customizerAttributeError = $customizerAttributeError;
  }
  /**
   * @return self::CUSTOMIZER_ATTRIBUTE_ERROR_*
   */
  public function getCustomizerAttributeError()
  {
    return $this->customizerAttributeError;
  }
  /**
   * The reasons for the data link error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, YOUTUBE_CHANNEL_ID_INVALID,
   * YOUTUBE_VIDEO_ID_INVALID, YOUTUBE_VIDEO_FROM_DIFFERENT_CHANNEL,
   * PERMISSION_DENIED, INVALID_STATUS, INVALID_UPDATE_STATUS,
   * INVALID_RESOURCE_NAME
   *
   * @param self::DATA_LINK_ERROR_* $dataLinkError
   */
  public function setDataLinkError($dataLinkError)
  {
    $this->dataLinkError = $dataLinkError;
  }
  /**
   * @return self::DATA_LINK_ERROR_*
   */
  public function getDataLinkError()
  {
    return $this->dataLinkError;
  }
  /**
   * The reasons for the database error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CONCURRENT_MODIFICATION,
   * DATA_CONSTRAINT_VIOLATION, REQUEST_TOO_LARGE
   *
   * @param self::DATABASE_ERROR_* $databaseError
   */
  public function setDatabaseError($databaseError)
  {
    $this->databaseError = $databaseError;
  }
  /**
   * @return self::DATABASE_ERROR_*
   */
  public function getDatabaseError()
  {
    return $this->databaseError;
  }
  /**
   * The reasons for the date error
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
   * The reasons for the date range error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_DATE,
   * START_DATE_AFTER_END_DATE, CANNOT_SET_DATE_TO_PAST,
   * AFTER_MAXIMUM_ALLOWABLE_DATE, CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED
   *
   * @param self::DATE_RANGE_ERROR_* $dateRangeError
   */
  public function setDateRangeError($dateRangeError)
  {
    $this->dateRangeError = $dateRangeError;
  }
  /**
   * @return self::DATE_RANGE_ERROR_*
   */
  public function getDateRangeError()
  {
    return $this->dateRangeError;
  }
  /**
   * The reasons for the distinct error
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
   * The reason for enum error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENUM_VALUE_NOT_PERMITTED
   *
   * @param self::ENUM_ERROR_* $enumError
   */
  public function setEnumError($enumError)
  {
    $this->enumError = $enumError;
  }
  /**
   * @return self::ENUM_ERROR_*
   */
  public function getEnumError()
  {
    return $this->enumError;
  }
  /**
   * The reasons for the experiment arm error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXPERIMENT_ARM_COUNT_LIMIT_EXCEEDED,
   * INVALID_CAMPAIGN_STATUS, DUPLICATE_EXPERIMENT_ARM_NAME,
   * CANNOT_SET_TREATMENT_ARM_CAMPAIGN, CANNOT_MODIFY_CAMPAIGN_IDS,
   * CANNOT_MODIFY_CAMPAIGN_WITHOUT_SUFFIX_SET,
   * CANNOT_MUTATE_TRAFFIC_SPLIT_AFTER_START,
   * CANNOT_ADD_CAMPAIGN_WITH_SHARED_BUDGET,
   * CANNOT_ADD_CAMPAIGN_WITH_CUSTOM_BUDGET,
   * CANNOT_ADD_CAMPAIGNS_WITH_DYNAMIC_ASSETS_ENABLED,
   * UNSUPPORTED_CAMPAIGN_ADVERTISING_CHANNEL_SUB_TYPE,
   * CANNOT_ADD_BASE_CAMPAIGN_WITH_DATE_RANGE,
   * BIDDING_STRATEGY_NOT_SUPPORTED_IN_EXPERIMENTS,
   * TRAFFIC_SPLIT_NOT_SUPPORTED_FOR_CHANNEL_TYPE
   *
   * @param self::EXPERIMENT_ARM_ERROR_* $experimentArmError
   */
  public function setExperimentArmError($experimentArmError)
  {
    $this->experimentArmError = $experimentArmError;
  }
  /**
   * @return self::EXPERIMENT_ARM_ERROR_*
   */
  public function getExperimentArmError()
  {
    return $this->experimentArmError;
  }
  /**
   * The reasons for the experiment error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CANNOT_SET_START_DATE_IN_PAST,
   * END_DATE_BEFORE_START_DATE, START_DATE_TOO_FAR_IN_FUTURE,
   * DUPLICATE_EXPERIMENT_NAME, CANNOT_MODIFY_REMOVED_EXPERIMENT,
   * START_DATE_ALREADY_PASSED, CANNOT_SET_END_DATE_IN_PAST,
   * CANNOT_SET_STATUS_TO_REMOVED, CANNOT_MODIFY_PAST_END_DATE, INVALID_STATUS,
   * INVALID_CAMPAIGN_CHANNEL_TYPE, OVERLAPPING_MEMBERS_AND_DATE_RANGE,
   * INVALID_TRIAL_ARM_TRAFFIC_SPLIT, TRAFFIC_SPLIT_OVERLAPPING,
   * SUM_TRIAL_ARM_TRAFFIC_UNEQUALS_TO_TRIAL_TRAFFIC_SPLIT_DENOMINATOR,
   * CANNOT_MODIFY_TRAFFIC_SPLIT_AFTER_START, EXPERIMENT_NOT_FOUND,
   * EXPERIMENT_NOT_YET_STARTED, CANNOT_HAVE_MULTIPLE_CONTROL_ARMS,
   * IN_DESIGN_CAMPAIGNS_NOT_SET, CANNOT_SET_STATUS_TO_GRADUATED,
   * CANNOT_CREATE_EXPERIMENT_CAMPAIGN_WITH_SHARED_BUDGET,
   * CANNOT_CREATE_EXPERIMENT_CAMPAIGN_WITH_CUSTOM_BUDGET,
   * STATUS_TRANSITION_INVALID, DUPLICATE_EXPERIMENT_CAMPAIGN_NAME,
   * CANNOT_REMOVE_IN_CREATION_EXPERIMENT,
   * CANNOT_ADD_CAMPAIGN_WITH_DEPRECATED_AD_TYPES,
   * CANNOT_ENABLE_SYNC_FOR_UNSUPPORTED_EXPERIMENT_TYPE,
   * INVALID_DURATION_FOR_AN_EXPERIMENT,
   * MISSING_EU_POLITICAL_ADVERTISING_SELF_DECLARATION
   *
   * @param self::EXPERIMENT_ERROR_* $experimentError
   */
  public function setExperimentError($experimentError)
  {
    $this->experimentError = $experimentError;
  }
  /**
   * @return self::EXPERIMENT_ERROR_*
   */
  public function getExperimentError()
  {
    return $this->experimentError;
  }
  /**
   * The reasons for the extension feed item error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, VALUE_OUT_OF_RANGE,
   * URL_LIST_TOO_LONG, CANNOT_HAVE_RESTRICTION_ON_EMPTY_GEO_TARGETING,
   * CANNOT_SET_WITH_FINAL_URLS, CANNOT_SET_WITHOUT_FINAL_URLS,
   * INVALID_PHONE_NUMBER, PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY,
   * CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED, PREMIUM_RATE_NUMBER_NOT_ALLOWED,
   * DISALLOWED_NUMBER_TYPE, INVALID_DOMESTIC_PHONE_NUMBER_FORMAT,
   * VANITY_PHONE_NUMBER_NOT_ALLOWED, INVALID_CALL_CONVERSION_ACTION,
   * CUSTOMER_NOT_ON_ALLOWLIST_FOR_CALLTRACKING,
   * CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY,
   * CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED, INVALID_APP_ID,
   * QUOTES_IN_REVIEW_EXTENSION_SNIPPET, HYPHENS_IN_REVIEW_EXTENSION_SNIPPET,
   * REVIEW_EXTENSION_SOURCE_INELIGIBLE, SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT,
   * INCONSISTENT_CURRENCY_CODES, PRICE_EXTENSION_HAS_DUPLICATED_HEADERS,
   * PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION,
   * PRICE_EXTENSION_HAS_TOO_FEW_ITEMS, PRICE_EXTENSION_HAS_TOO_MANY_ITEMS,
   * UNSUPPORTED_VALUE, UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE,
   * INVALID_DEVICE_PREFERENCE, INVALID_SCHEDULE_END,
   * DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE, INVALID_SNIPPETS_HEADER,
   * CANNOT_OPERATE_ON_REMOVED_FEED_ITEM,
   * PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY,
   * CONFLICTING_CALL_CONVERSION_SETTINGS, EXTENSION_TYPE_MISMATCH,
   * EXTENSION_SUBTYPE_REQUIRED, EXTENSION_TYPE_UNSUPPORTED,
   * CANNOT_OPERATE_ON_FEED_WITH_MULTIPLE_MAPPINGS,
   * CANNOT_OPERATE_ON_FEED_WITH_KEY_ATTRIBUTES, INVALID_PRICE_FORMAT,
   * PROMOTION_INVALID_TIME, TOO_MANY_DECIMAL_PLACES_SPECIFIED,
   * CONCRETE_EXTENSION_TYPE_REQUIRED, SCHEDULE_END_NOT_AFTER_START
   *
   * @param self::EXTENSION_FEED_ITEM_ERROR_* $extensionFeedItemError
   */
  public function setExtensionFeedItemError($extensionFeedItemError)
  {
    $this->extensionFeedItemError = $extensionFeedItemError;
  }
  /**
   * @return self::EXTENSION_FEED_ITEM_ERROR_*
   */
  public function getExtensionFeedItemError()
  {
    return $this->extensionFeedItemError;
  }
  /**
   * The reasons for the extension setting error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXTENSIONS_REQUIRED,
   * FEED_TYPE_EXTENSION_TYPE_MISMATCH, INVALID_FEED_TYPE,
   * INVALID_FEED_TYPE_FOR_CUSTOMER_EXTENSION_SETTING,
   * CANNOT_CHANGE_FEED_ITEM_ON_CREATE, CANNOT_UPDATE_NEWLY_CREATED_EXTENSION,
   * NO_EXISTING_AD_GROUP_EXTENSION_SETTING_FOR_TYPE,
   * NO_EXISTING_CAMPAIGN_EXTENSION_SETTING_FOR_TYPE,
   * NO_EXISTING_CUSTOMER_EXTENSION_SETTING_FOR_TYPE,
   * AD_GROUP_EXTENSION_SETTING_ALREADY_EXISTS,
   * CAMPAIGN_EXTENSION_SETTING_ALREADY_EXISTS,
   * CUSTOMER_EXTENSION_SETTING_ALREADY_EXISTS,
   * AD_GROUP_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE,
   * CAMPAIGN_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE,
   * CUSTOMER_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE, VALUE_OUT_OF_RANGE,
   * CANNOT_SET_FIELD_WITH_FINAL_URLS, FINAL_URLS_NOT_SET, INVALID_PHONE_NUMBER,
   * PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY,
   * CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED, PREMIUM_RATE_NUMBER_NOT_ALLOWED,
   * DISALLOWED_NUMBER_TYPE, INVALID_DOMESTIC_PHONE_NUMBER_FORMAT,
   * VANITY_PHONE_NUMBER_NOT_ALLOWED, INVALID_COUNTRY_CODE,
   * INVALID_CALL_CONVERSION_TYPE_ID,
   * CUSTOMER_NOT_IN_ALLOWLIST_FOR_CALLTRACKING,
   * CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY, INVALID_APP_ID,
   * QUOTES_IN_REVIEW_EXTENSION_SNIPPET, HYPHENS_IN_REVIEW_EXTENSION_SNIPPET,
   * REVIEW_EXTENSION_SOURCE_NOT_ELIGIBLE, SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT,
   * MISSING_FIELD, INCONSISTENT_CURRENCY_CODES,
   * PRICE_EXTENSION_HAS_DUPLICATED_HEADERS,
   * PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION,
   * PRICE_EXTENSION_HAS_TOO_FEW_ITEMS, PRICE_EXTENSION_HAS_TOO_MANY_ITEMS,
   * UNSUPPORTED_VALUE, INVALID_DEVICE_PREFERENCE, INVALID_SCHEDULE_END,
   * DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE, OVERLAPPING_SCHEDULES_NOT_ALLOWED,
   * SCHEDULE_END_NOT_AFTER_START, TOO_MANY_SCHEDULES_PER_DAY,
   * DUPLICATE_EXTENSION_FEED_ITEM_EDIT, INVALID_SNIPPETS_HEADER,
   * PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY,
   * CAMPAIGN_TARGETING_MISMATCH, CANNOT_OPERATE_ON_REMOVED_FEED,
   * EXTENSION_TYPE_REQUIRED, INCOMPATIBLE_UNDERLYING_MATCHING_FUNCTION,
   * START_DATE_AFTER_END_DATE, INVALID_PRICE_FORMAT, PROMOTION_INVALID_TIME,
   * PROMOTION_CANNOT_SET_PERCENT_DISCOUNT_AND_MONEY_DISCOUNT,
   * PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT,
   * TOO_MANY_DECIMAL_PLACES_SPECIFIED, INVALID_LANGUAGE_CODE,
   * UNSUPPORTED_LANGUAGE, CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED,
   * EXTENSION_SETTING_UPDATE_IS_A_NOOP, DISALLOWED_TEXT
   *
   * @param self::EXTENSION_SETTING_ERROR_* $extensionSettingError
   */
  public function setExtensionSettingError($extensionSettingError)
  {
    $this->extensionSettingError = $extensionSettingError;
  }
  /**
   * @return self::EXTENSION_SETTING_ERROR_*
   */
  public function getExtensionSettingError()
  {
    return $this->extensionSettingError;
  }
  /**
   * The reasons for the feed attribute reference error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CANNOT_REFERENCE_REMOVED_FEED,
   * INVALID_FEED_NAME, INVALID_FEED_ATTRIBUTE_NAME
   *
   * @param self::FEED_ATTRIBUTE_REFERENCE_ERROR_* $feedAttributeReferenceError
   */
  public function setFeedAttributeReferenceError($feedAttributeReferenceError)
  {
    $this->feedAttributeReferenceError = $feedAttributeReferenceError;
  }
  /**
   * @return self::FEED_ATTRIBUTE_REFERENCE_ERROR_*
   */
  public function getFeedAttributeReferenceError()
  {
    return $this->feedAttributeReferenceError;
  }
  /**
   * The reasons for the feed error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ATTRIBUTE_NAMES_NOT_UNIQUE,
   * ATTRIBUTES_DO_NOT_MATCH_EXISTING_ATTRIBUTES,
   * CANNOT_SPECIFY_USER_ORIGIN_FOR_SYSTEM_FEED,
   * CANNOT_SPECIFY_GOOGLE_ORIGIN_FOR_NON_SYSTEM_FEED,
   * CANNOT_SPECIFY_FEED_ATTRIBUTES_FOR_SYSTEM_FEED,
   * CANNOT_UPDATE_FEED_ATTRIBUTES_WITH_ORIGIN_GOOGLE, FEED_REMOVED,
   * INVALID_ORIGIN_VALUE, FEED_ORIGIN_IS_NOT_USER,
   * INVALID_AUTH_TOKEN_FOR_EMAIL, INVALID_EMAIL, DUPLICATE_FEED_NAME,
   * INVALID_FEED_NAME, MISSING_OAUTH_INFO,
   * NEW_ATTRIBUTE_CANNOT_BE_PART_OF_UNIQUE_KEY, TOO_MANY_ATTRIBUTES,
   * INVALID_BUSINESS_ACCOUNT, BUSINESS_ACCOUNT_CANNOT_ACCESS_LOCATION_ACCOUNT,
   * INVALID_AFFILIATE_CHAIN_ID, DUPLICATE_SYSTEM_FEED, GMB_ACCESS_ERROR,
   * CANNOT_HAVE_LOCATION_AND_AFFILIATE_LOCATION_FEEDS,
   * LEGACY_EXTENSION_TYPE_READ_ONLY
   *
   * @param self::FEED_ERROR_* $feedError
   */
  public function setFeedError($feedError)
  {
    $this->feedError = $feedError;
  }
  /**
   * @return self::FEED_ERROR_*
   */
  public function getFeedError()
  {
    return $this->feedError;
  }
  /**
   * The reasons for the feed item error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * CANNOT_CONVERT_ATTRIBUTE_VALUE_FROM_STRING,
   * CANNOT_OPERATE_ON_REMOVED_FEED_ITEM,
   * DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE, KEY_ATTRIBUTES_NOT_FOUND,
   * INVALID_URL, MISSING_KEY_ATTRIBUTES, KEY_ATTRIBUTES_NOT_UNIQUE,
   * CANNOT_MODIFY_KEY_ATTRIBUTE_VALUE,
   * SIZE_TOO_LARGE_FOR_MULTI_VALUE_ATTRIBUTE, LEGACY_FEED_TYPE_READ_ONLY
   *
   * @param self::FEED_ITEM_ERROR_* $feedItemError
   */
  public function setFeedItemError($feedItemError)
  {
    $this->feedItemError = $feedItemError;
  }
  /**
   * @return self::FEED_ITEM_ERROR_*
   */
  public function getFeedItemError()
  {
    return $this->feedItemError;
  }
  /**
   * The reasons for the feed item set error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FEED_ITEM_SET_REMOVED,
   * CANNOT_CLEAR_DYNAMIC_FILTER, CANNOT_CREATE_DYNAMIC_FILTER,
   * INVALID_FEED_TYPE, DUPLICATE_NAME, WRONG_DYNAMIC_FILTER_FOR_FEED_TYPE,
   * DYNAMIC_FILTER_INVALID_CHAIN_IDS
   *
   * @param self::FEED_ITEM_SET_ERROR_* $feedItemSetError
   */
  public function setFeedItemSetError($feedItemSetError)
  {
    $this->feedItemSetError = $feedItemSetError;
  }
  /**
   * @return self::FEED_ITEM_SET_ERROR_*
   */
  public function getFeedItemSetError()
  {
    return $this->feedItemSetError;
  }
  /**
   * The reasons for the feed item set link error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FEED_ID_MISMATCH,
   * NO_MUTATE_ALLOWED_FOR_DYNAMIC_SET
   *
   * @param self::FEED_ITEM_SET_LINK_ERROR_* $feedItemSetLinkError
   */
  public function setFeedItemSetLinkError($feedItemSetLinkError)
  {
    $this->feedItemSetLinkError = $feedItemSetLinkError;
  }
  /**
   * @return self::FEED_ITEM_SET_LINK_ERROR_*
   */
  public function getFeedItemSetLinkError()
  {
    return $this->feedItemSetLinkError;
  }
  /**
   * The reasons for the feed item target error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MUST_SET_TARGET_ONEOF_ON_CREATE,
   * FEED_ITEM_TARGET_ALREADY_EXISTS, FEED_ITEM_SCHEDULES_CANNOT_OVERLAP,
   * TARGET_LIMIT_EXCEEDED_FOR_GIVEN_TYPE, TOO_MANY_SCHEDULES_PER_DAY,
   * CANNOT_HAVE_ENABLED_CAMPAIGN_AND_ENABLED_AD_GROUP_TARGETS,
   * DUPLICATE_AD_SCHEDULE, DUPLICATE_KEYWORD
   *
   * @param self::FEED_ITEM_TARGET_ERROR_* $feedItemTargetError
   */
  public function setFeedItemTargetError($feedItemTargetError)
  {
    $this->feedItemTargetError = $feedItemTargetError;
  }
  /**
   * @return self::FEED_ITEM_TARGET_ERROR_*
   */
  public function getFeedItemTargetError()
  {
    return $this->feedItemTargetError;
  }
  /**
   * The reasons for the feed item validation error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, STRING_TOO_SHORT, STRING_TOO_LONG,
   * VALUE_NOT_SPECIFIED, INVALID_DOMESTIC_PHONE_NUMBER_FORMAT,
   * INVALID_PHONE_NUMBER, PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY,
   * PREMIUM_RATE_NUMBER_NOT_ALLOWED, DISALLOWED_NUMBER_TYPE,
   * VALUE_OUT_OF_RANGE, CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY,
   * CUSTOMER_NOT_IN_ALLOWLIST_FOR_CALLTRACKING, INVALID_COUNTRY_CODE,
   * INVALID_APP_ID, MISSING_ATTRIBUTES_FOR_FIELDS, INVALID_TYPE_ID,
   * INVALID_EMAIL_ADDRESS, INVALID_HTTPS_URL, MISSING_DELIVERY_ADDRESS,
   * START_DATE_AFTER_END_DATE, MISSING_FEED_ITEM_START_TIME,
   * MISSING_FEED_ITEM_END_TIME, MISSING_FEED_ITEM_ID,
   * VANITY_PHONE_NUMBER_NOT_ALLOWED, INVALID_REVIEW_EXTENSION_SNIPPET,
   * INVALID_NUMBER_FORMAT, INVALID_DATE_FORMAT, INVALID_PRICE_FORMAT,
   * UNKNOWN_PLACEHOLDER_FIELD, MISSING_ENHANCED_SITELINK_DESCRIPTION_LINE,
   * REVIEW_EXTENSION_SOURCE_INELIGIBLE, HYPHENS_IN_REVIEW_EXTENSION_SNIPPET,
   * DOUBLE_QUOTES_IN_REVIEW_EXTENSION_SNIPPET,
   * QUOTES_IN_REVIEW_EXTENSION_SNIPPET, INVALID_FORM_ENCODED_PARAMS,
   * INVALID_URL_PARAMETER_NAME, NO_GEOCODING_RESULT,
   * SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT,
   * CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED, INVALID_PLACEHOLDER_FIELD_ID,
   * INVALID_URL_TAG, LIST_TOO_LONG, INVALID_ATTRIBUTES_COMBINATION,
   * DUPLICATE_VALUES, INVALID_CALL_CONVERSION_ACTION_ID,
   * CANNOT_SET_WITHOUT_FINAL_URLS, APP_ID_DOESNT_EXIST_IN_APP_STORE,
   * INVALID_FINAL_URL, INVALID_TRACKING_URL,
   * INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL, LIST_TOO_SHORT,
   * INVALID_USER_ACTION, INVALID_TYPE_NAME, INVALID_EVENT_CHANGE_STATUS,
   * INVALID_SNIPPETS_HEADER, INVALID_ANDROID_APP_LINK,
   * NUMBER_TYPE_WITH_CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY,
   * RESERVED_KEYWORD_OTHER, DUPLICATE_OPTION_LABELS, DUPLICATE_OPTION_PREFILLS,
   * UNEQUAL_LIST_LENGTHS, INCONSISTENT_CURRENCY_CODES,
   * PRICE_EXTENSION_HAS_DUPLICATED_HEADERS,
   * ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION,
   * PRICE_EXTENSION_HAS_TOO_FEW_ITEMS, UNSUPPORTED_VALUE,
   * INVALID_FINAL_MOBILE_URL, INVALID_KEYWORDLESS_AD_RULE_LABEL,
   * VALUE_TRACK_PARAMETER_NOT_SUPPORTED,
   * UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE, INVALID_IOS_APP_LINK,
   * MISSING_IOS_APP_LINK_OR_IOS_APP_STORE_ID, PROMOTION_INVALID_TIME,
   * PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFF,
   * PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT,
   * TOO_MANY_DECIMAL_PLACES_SPECIFIED, AD_CUSTOMIZERS_NOT_ALLOWED,
   * INVALID_LANGUAGE_CODE, UNSUPPORTED_LANGUAGE, IF_FUNCTION_NOT_ALLOWED,
   * INVALID_FINAL_URL_SUFFIX, INVALID_TAG_IN_FINAL_URL_SUFFIX,
   * INVALID_FINAL_URL_SUFFIX_FORMAT,
   * CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED,
   * ONLY_ONE_DELIVERY_OPTION_IS_ALLOWED, NO_DELIVERY_OPTION_IS_SET,
   * INVALID_CONVERSION_REPORTING_STATE, IMAGE_SIZE_WRONG,
   * EMAIL_DELIVERY_NOT_AVAILABLE_IN_COUNTRY,
   * AUTO_REPLY_NOT_AVAILABLE_IN_COUNTRY, INVALID_LATITUDE_VALUE,
   * INVALID_LONGITUDE_VALUE, TOO_MANY_LABELS, INVALID_IMAGE_URL,
   * MISSING_LATITUDE_VALUE, MISSING_LONGITUDE_VALUE, ADDRESS_NOT_FOUND,
   * ADDRESS_NOT_TARGETABLE, INVALID_ASSET_ID, INCOMPATIBLE_ASSET_TYPE,
   * IMAGE_ERROR_UNEXPECTED_SIZE, IMAGE_ERROR_ASPECT_RATIO_NOT_ALLOWED,
   * IMAGE_ERROR_FILE_TOO_LARGE, IMAGE_ERROR_FORMAT_NOT_ALLOWED,
   * IMAGE_ERROR_CONSTRAINTS_VIOLATED, IMAGE_ERROR_SERVER_ERROR
   *
   * @param self::FEED_ITEM_VALIDATION_ERROR_* $feedItemValidationError
   */
  public function setFeedItemValidationError($feedItemValidationError)
  {
    $this->feedItemValidationError = $feedItemValidationError;
  }
  /**
   * @return self::FEED_ITEM_VALIDATION_ERROR_*
   */
  public function getFeedItemValidationError()
  {
    return $this->feedItemValidationError;
  }
  /**
   * The reasons for the feed mapping error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_PLACEHOLDER_FIELD,
   * INVALID_CRITERION_FIELD, INVALID_PLACEHOLDER_TYPE, INVALID_CRITERION_TYPE,
   * NO_ATTRIBUTE_FIELD_MAPPINGS, FEED_ATTRIBUTE_TYPE_MISMATCH,
   * CANNOT_OPERATE_ON_MAPPINGS_FOR_SYSTEM_GENERATED_FEED,
   * MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_TYPE,
   * MULTIPLE_MAPPINGS_FOR_CRITERION_TYPE,
   * MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_FIELD,
   * MULTIPLE_MAPPINGS_FOR_CRITERION_FIELD, UNEXPECTED_ATTRIBUTE_FIELD_MAPPINGS,
   * LOCATION_PLACEHOLDER_ONLY_FOR_PLACES_FEEDS,
   * CANNOT_MODIFY_MAPPINGS_FOR_TYPED_FEED,
   * INVALID_PLACEHOLDER_TYPE_FOR_NON_SYSTEM_GENERATED_FEED,
   * INVALID_PLACEHOLDER_TYPE_FOR_SYSTEM_GENERATED_FEED_TYPE,
   * ATTRIBUTE_FIELD_MAPPING_MISSING_FIELD, LEGACY_FEED_TYPE_READ_ONLY
   *
   * @param self::FEED_MAPPING_ERROR_* $feedMappingError
   */
  public function setFeedMappingError($feedMappingError)
  {
    $this->feedMappingError = $feedMappingError;
  }
  /**
   * @return self::FEED_MAPPING_ERROR_*
   */
  public function getFeedMappingError()
  {
    return $this->feedMappingError;
  }
  /**
   * The reasons for the field error
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
   * An error with a field mask
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FIELD_MASK_MISSING,
   * FIELD_MASK_NOT_ALLOWED, FIELD_NOT_FOUND, FIELD_HAS_SUBFIELDS
   *
   * @param self::FIELD_MASK_ERROR_* $fieldMaskError
   */
  public function setFieldMaskError($fieldMaskError)
  {
    $this->fieldMaskError = $fieldMaskError;
  }
  /**
   * @return self::FIELD_MASK_ERROR_*
   */
  public function getFieldMaskError()
  {
    return $this->fieldMaskError;
  }
  /**
   * The reasons for the final url expansion asset view error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MISSING_REQUIRED_FILTER,
   * REQUIRES_ADVERTISING_CHANNEL_TYPE_FILTER,
   * INVALID_ADVERTISING_CHANNEL_TYPE_IN_FILTER, CANNOT_SELECT_ASSET_GROUP,
   * CANNOT_SELECT_AD_GROUP, REQUIRES_FILTER_BY_SINGLE_RESOURCE,
   * CANNOT_SELECT_BOTH_AD_GROUP_AND_ASSET_GROUP,
   * CANNOT_FILTER_BY_BOTH_AD_GROUP_AND_ASSET_GROUP
   *
   * @param self::FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_* $finalUrlExpansionAssetViewError
   */
  public function setFinalUrlExpansionAssetViewError($finalUrlExpansionAssetViewError)
  {
    $this->finalUrlExpansionAssetViewError = $finalUrlExpansionAssetViewError;
  }
  /**
   * @return self::FINAL_URL_EXPANSION_ASSET_VIEW_ERROR_*
   */
  public function getFinalUrlExpansionAssetViewError()
  {
    return $this->finalUrlExpansionAssetViewError;
  }
  /**
   * The reasons for the function error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_FUNCTION_FORMAT,
   * DATA_TYPE_MISMATCH, INVALID_CONJUNCTION_OPERANDS,
   * INVALID_NUMBER_OF_OPERANDS, INVALID_OPERAND_TYPE, INVALID_OPERATOR,
   * INVALID_REQUEST_CONTEXT_TYPE, INVALID_FUNCTION_FOR_CALL_PLACEHOLDER,
   * INVALID_FUNCTION_FOR_PLACEHOLDER, INVALID_OPERAND,
   * MISSING_CONSTANT_OPERAND_VALUE, INVALID_CONSTANT_OPERAND_VALUE,
   * INVALID_NESTING, MULTIPLE_FEED_IDS_NOT_SUPPORTED,
   * INVALID_FUNCTION_FOR_FEED_WITH_FIXED_SCHEMA, INVALID_ATTRIBUTE_NAME
   *
   * @param self::FUNCTION_ERROR_* $functionError
   */
  public function setFunctionError($functionError)
  {
    $this->functionError = $functionError;
  }
  /**
   * @return self::FUNCTION_ERROR_*
   */
  public function getFunctionError()
  {
    return $this->functionError;
  }
  /**
   * The reasons for the function parsing error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NO_MORE_INPUT, EXPECTED_CHARACTER,
   * UNEXPECTED_SEPARATOR, UNMATCHED_LEFT_BRACKET, UNMATCHED_RIGHT_BRACKET,
   * TOO_MANY_NESTED_FUNCTIONS, MISSING_RIGHT_HAND_OPERAND,
   * INVALID_OPERATOR_NAME, FEED_ATTRIBUTE_OPERAND_ARGUMENT_NOT_INTEGER,
   * NO_OPERANDS, TOO_MANY_OPERANDS
   *
   * @param self::FUNCTION_PARSING_ERROR_* $functionParsingError
   */
  public function setFunctionParsingError($functionParsingError)
  {
    $this->functionParsingError = $functionParsingError;
  }
  /**
   * @return self::FUNCTION_PARSING_ERROR_*
   */
  public function getFunctionParsingError()
  {
    return $this->functionParsingError;
  }
  /**
   * The reasons for the geo target constant suggestion error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, LOCATION_NAME_SIZE_LIMIT,
   * LOCATION_NAME_LIMIT, INVALID_COUNTRY_CODE, REQUEST_PARAMETERS_UNSET
   *
   * @param self::GEO_TARGET_CONSTANT_SUGGESTION_ERROR_* $geoTargetConstantSuggestionError
   */
  public function setGeoTargetConstantSuggestionError($geoTargetConstantSuggestionError)
  {
    $this->geoTargetConstantSuggestionError = $geoTargetConstantSuggestionError;
  }
  /**
   * @return self::GEO_TARGET_CONSTANT_SUGGESTION_ERROR_*
   */
  public function getGeoTargetConstantSuggestionError()
  {
    return $this->geoTargetConstantSuggestionError;
  }
  /**
   * The reasons for the goal error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, RETENTION_GOAL_ALREADY_EXISTS,
   * HIGH_LIFETIME_VALUE_PRESENT_BUT_VALUE_ABSENT,
   * HIGH_LIFETIME_VALUE_LESS_THAN_OR_EQUAL_TO_VALUE,
   * CUSTOMER_LIFECYCLE_OPTIMIZATION_ACCOUNT_TYPE_NOT_ALLOWED
   *
   * @param self::GOAL_ERROR_* $goalError
   */
  public function setGoalError($goalError)
  {
    $this->goalError = $goalError;
  }
  /**
   * @return self::GOAL_ERROR_*
   */
  public function getGoalError()
  {
    return $this->goalError;
  }
  /**
   * The reasons for the header error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_LOGIN_CUSTOMER_ID,
   * INVALID_LINKED_CUSTOMER_ID
   *
   * @param self::HEADER_ERROR_* $headerError
   */
  public function setHeaderError($headerError)
  {
    $this->headerError = $headerError;
  }
  /**
   * @return self::HEADER_ERROR_*
   */
  public function getHeaderError()
  {
    return $this->headerError;
  }
  /**
   * The reasons for the id error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOT_FOUND
   *
   * @param self::ID_ERROR_* $idError
   */
  public function setIdError($idError)
  {
    $this->idError = $idError;
  }
  /**
   * @return self::ID_ERROR_*
   */
  public function getIdError()
  {
    return $this->idError;
  }
  /**
   * The reasons for an identity verification error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NO_EFFECTIVE_BILLING,
   * BILLING_NOT_ON_MONTHLY_INVOICING, VERIFICATION_ALREADY_STARTED
   *
   * @param self::IDENTITY_VERIFICATION_ERROR_* $identityVerificationError
   */
  public function setIdentityVerificationError($identityVerificationError)
  {
    $this->identityVerificationError = $identityVerificationError;
  }
  /**
   * @return self::IDENTITY_VERIFICATION_ERROR_*
   */
  public function getIdentityVerificationError()
  {
    return $this->identityVerificationError;
  }
  /**
   * The reasons for the image error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_IMAGE, STORAGE_ERROR,
   * BAD_REQUEST, UNEXPECTED_SIZE, ANIMATED_NOT_ALLOWED, ANIMATION_TOO_LONG,
   * SERVER_ERROR, CMYK_JPEG_NOT_ALLOWED, FLASH_NOT_ALLOWED,
   * FLASH_WITHOUT_CLICKTAG, FLASH_ERROR_AFTER_FIXING_CLICK_TAG,
   * ANIMATED_VISUAL_EFFECT, FLASH_ERROR, LAYOUT_PROBLEM,
   * PROBLEM_READING_IMAGE_FILE, ERROR_STORING_IMAGE, ASPECT_RATIO_NOT_ALLOWED,
   * FLASH_HAS_NETWORK_OBJECTS, FLASH_HAS_NETWORK_METHODS, FLASH_HAS_URL,
   * FLASH_HAS_MOUSE_TRACKING, FLASH_HAS_RANDOM_NUM, FLASH_SELF_TARGETS,
   * FLASH_BAD_GETURL_TARGET, FLASH_VERSION_NOT_SUPPORTED,
   * FLASH_WITHOUT_HARD_CODED_CLICK_URL, INVALID_FLASH_FILE,
   * FAILED_TO_FIX_CLICK_TAG_IN_FLASH, FLASH_ACCESSES_NETWORK_RESOURCES,
   * FLASH_EXTERNAL_JS_CALL, FLASH_EXTERNAL_FS_CALL, FILE_TOO_LARGE,
   * IMAGE_DATA_TOO_LARGE, IMAGE_PROCESSING_ERROR, IMAGE_TOO_SMALL,
   * INVALID_INPUT, PROBLEM_READING_FILE, IMAGE_CONSTRAINTS_VIOLATED,
   * FORMAT_NOT_ALLOWED
   *
   * @param self::IMAGE_ERROR_* $imageError
   */
  public function setImageError($imageError)
  {
    $this->imageError = $imageError;
  }
  /**
   * @return self::IMAGE_ERROR_*
   */
  public function getImageError()
  {
    return $this->imageError;
  }
  /**
   * The reasons for the incentive error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_INCENTIVE_ID
   *
   * @param self::INCENTIVE_ERROR_* $incentiveError
   */
  public function setIncentiveError($incentiveError)
  {
    $this->incentiveError = $incentiveError;
  }
  /**
   * @return self::INCENTIVE_ERROR_*
   */
  public function getIncentiveError()
  {
    return $this->incentiveError;
  }
  /**
   * An unexpected server-side error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INTERNAL_ERROR,
   * ERROR_CODE_NOT_PUBLISHED, TRANSIENT_ERROR, DEADLINE_EXCEEDED
   *
   * @param self::INTERNAL_ERROR_* $internalError
   */
  public function setInternalError($internalError)
  {
    $this->internalError = $internalError;
  }
  /**
   * @return self::INTERNAL_ERROR_*
   */
  public function getInternalError()
  {
    return $this->internalError;
  }
  /**
   * The reasons for invalid parameter errors.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_CURRENCY_CODE
   *
   * @param self::INVALID_PARAMETER_ERROR_* $invalidParameterError
   */
  public function setInvalidParameterError($invalidParameterError)
  {
    $this->invalidParameterError = $invalidParameterError;
  }
  /**
   * @return self::INVALID_PARAMETER_ERROR_*
   */
  public function getInvalidParameterError()
  {
    return $this->invalidParameterError;
  }
  /**
   * The reasons for the invoice error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, YEAR_MONTH_TOO_OLD,
   * NOT_INVOICED_CUSTOMER, BILLING_SETUP_NOT_APPROVED,
   * BILLING_SETUP_NOT_ON_MONTHLY_INVOICING, NON_SERVING_CUSTOMER
   *
   * @param self::INVOICE_ERROR_* $invoiceError
   */
  public function setInvoiceError($invoiceError)
  {
    $this->invoiceError = $invoiceError;
  }
  /**
   * @return self::INVOICE_ERROR_*
   */
  public function getInvoiceError()
  {
    return $this->invoiceError;
  }
  /**
   * The reason for keyword plan ad group error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_NAME, DUPLICATE_NAME
   *
   * @param self::KEYWORD_PLAN_AD_GROUP_ERROR_* $keywordPlanAdGroupError
   */
  public function setKeywordPlanAdGroupError($keywordPlanAdGroupError)
  {
    $this->keywordPlanAdGroupError = $keywordPlanAdGroupError;
  }
  /**
   * @return self::KEYWORD_PLAN_AD_GROUP_ERROR_*
   */
  public function getKeywordPlanAdGroupError()
  {
    return $this->keywordPlanAdGroupError;
  }
  /**
   * The reason for keyword plan ad group keyword error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_KEYWORD_MATCH_TYPE,
   * DUPLICATE_KEYWORD, KEYWORD_TEXT_TOO_LONG, KEYWORD_HAS_INVALID_CHARS,
   * KEYWORD_HAS_TOO_MANY_WORDS, INVALID_KEYWORD_TEXT,
   * NEGATIVE_KEYWORD_HAS_CPC_BID, NEW_BMM_KEYWORDS_NOT_ALLOWED
   *
   * @param self::KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_* $keywordPlanAdGroupKeywordError
   */
  public function setKeywordPlanAdGroupKeywordError($keywordPlanAdGroupKeywordError)
  {
    $this->keywordPlanAdGroupKeywordError = $keywordPlanAdGroupKeywordError;
  }
  /**
   * @return self::KEYWORD_PLAN_AD_GROUP_KEYWORD_ERROR_*
   */
  public function getKeywordPlanAdGroupKeywordError()
  {
    return $this->keywordPlanAdGroupKeywordError;
  }
  /**
   * The reason for keyword plan campaign error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_NAME, INVALID_LANGUAGES,
   * INVALID_GEOS, DUPLICATE_NAME, MAX_GEOS_EXCEEDED, MAX_LANGUAGES_EXCEEDED
   *
   * @param self::KEYWORD_PLAN_CAMPAIGN_ERROR_* $keywordPlanCampaignError
   */
  public function setKeywordPlanCampaignError($keywordPlanCampaignError)
  {
    $this->keywordPlanCampaignError = $keywordPlanCampaignError;
  }
  /**
   * @return self::KEYWORD_PLAN_CAMPAIGN_ERROR_*
   */
  public function getKeywordPlanCampaignError()
  {
    return $this->keywordPlanCampaignError;
  }
  /**
   * The reason for keyword plan campaign keyword error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_KEYWORD_IS_POSITIVE
   *
   * @param self::KEYWORD_PLAN_CAMPAIGN_KEYWORD_ERROR_* $keywordPlanCampaignKeywordError
   */
  public function setKeywordPlanCampaignKeywordError($keywordPlanCampaignKeywordError)
  {
    $this->keywordPlanCampaignKeywordError = $keywordPlanCampaignKeywordError;
  }
  /**
   * @return self::KEYWORD_PLAN_CAMPAIGN_KEYWORD_ERROR_*
   */
  public function getKeywordPlanCampaignKeywordError()
  {
    return $this->keywordPlanCampaignKeywordError;
  }
  /**
   * The reason for keyword plan error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BID_MULTIPLIER_OUT_OF_RANGE,
   * BID_TOO_HIGH, BID_TOO_LOW, BID_TOO_MANY_FRACTIONAL_DIGITS,
   * DAILY_BUDGET_TOO_LOW, DAILY_BUDGET_TOO_MANY_FRACTIONAL_DIGITS,
   * INVALID_VALUE, KEYWORD_PLAN_HAS_NO_KEYWORDS, KEYWORD_PLAN_NOT_ENABLED,
   * KEYWORD_PLAN_NOT_FOUND, MISSING_BID, MISSING_FORECAST_PERIOD,
   * INVALID_FORECAST_DATE_RANGE, INVALID_NAME
   *
   * @param self::KEYWORD_PLAN_ERROR_* $keywordPlanError
   */
  public function setKeywordPlanError($keywordPlanError)
  {
    $this->keywordPlanError = $keywordPlanError;
  }
  /**
   * @return self::KEYWORD_PLAN_ERROR_*
   */
  public function getKeywordPlanError()
  {
    return $this->keywordPlanError;
  }
  /**
   * The reason for keyword idea error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, URL_CRAWL_ERROR, INVALID_VALUE
   *
   * @param self::KEYWORD_PLAN_IDEA_ERROR_* $keywordPlanIdeaError
   */
  public function setKeywordPlanIdeaError($keywordPlanIdeaError)
  {
    $this->keywordPlanIdeaError = $keywordPlanIdeaError;
  }
  /**
   * @return self::KEYWORD_PLAN_IDEA_ERROR_*
   */
  public function getKeywordPlanIdeaError()
  {
    return $this->keywordPlanIdeaError;
  }
  /**
   * The reason for the label error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CANNOT_APPLY_INACTIVE_LABEL,
   * CANNOT_APPLY_LABEL_TO_DISABLED_AD_GROUP_CRITERION,
   * CANNOT_APPLY_LABEL_TO_NEGATIVE_AD_GROUP_CRITERION,
   * EXCEEDED_LABEL_LIMIT_PER_TYPE, INVALID_RESOURCE_FOR_MANAGER_LABEL,
   * DUPLICATE_NAME, INVALID_LABEL_NAME, CANNOT_ATTACH_LABEL_TO_DRAFT,
   * CANNOT_ATTACH_NON_MANAGER_LABEL_TO_CUSTOMER
   *
   * @param self::LABEL_ERROR_* $labelError
   */
  public function setLabelError($labelError)
  {
    $this->labelError = $labelError;
  }
  /**
   * @return self::LABEL_ERROR_*
   */
  public function getLabelError()
  {
    return $this->labelError;
  }
  /**
   * The reasons for the language code error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, LANGUAGE_CODE_NOT_FOUND,
   * INVALID_LANGUAGE_CODE
   *
   * @param self::LANGUAGE_CODE_ERROR_* $languageCodeError
   */
  public function setLanguageCodeError($languageCodeError)
  {
    $this->languageCodeError = $languageCodeError;
  }
  /**
   * @return self::LANGUAGE_CODE_ERROR_*
   */
  public function getLanguageCodeError()
  {
    return $this->languageCodeError;
  }
  /**
   * An error with a list operation.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, REQUIRED_FIELD_MISSING,
   * DUPLICATE_VALUES
   *
   * @param self::LIST_OPERATION_ERROR_* $listOperationError
   */
  public function setListOperationError($listOperationError)
  {
    $this->listOperationError = $listOperationError;
  }
  /**
   * @return self::LIST_OPERATION_ERROR_*
   */
  public function getListOperationError()
  {
    return $this->listOperationError;
  }
  /**
   * The reasons for the manager link error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ACCOUNTS_NOT_COMPATIBLE_FOR_LINKING,
   * TOO_MANY_MANAGERS, TOO_MANY_INVITES, ALREADY_INVITED_BY_THIS_MANAGER,
   * ALREADY_MANAGED_BY_THIS_MANAGER, ALREADY_MANAGED_IN_HIERARCHY,
   * DUPLICATE_CHILD_FOUND, CLIENT_HAS_NO_ADMIN_USER, MAX_DEPTH_EXCEEDED,
   * CYCLE_NOT_ALLOWED, TOO_MANY_ACCOUNTS, TOO_MANY_ACCOUNTS_AT_MANAGER,
   * NON_OWNER_USER_CANNOT_MODIFY_LINK, SUSPENDED_ACCOUNT_CANNOT_ADD_CLIENTS,
   * CLIENT_OUTSIDE_TREE, INVALID_STATUS_CHANGE, INVALID_CHANGE,
   * CUSTOMER_CANNOT_MANAGE_SELF, CREATING_ENABLED_LINK_NOT_ALLOWED
   *
   * @param self::MANAGER_LINK_ERROR_* $managerLinkError
   */
  public function setManagerLinkError($managerLinkError)
  {
    $this->managerLinkError = $managerLinkError;
  }
  /**
   * @return self::MANAGER_LINK_ERROR_*
   */
  public function getManagerLinkError()
  {
    return $this->managerLinkError;
  }
  /**
   * The reasons for the media bundle error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BAD_REQUEST,
   * DOUBLECLICK_BUNDLE_NOT_ALLOWED, EXTERNAL_URL_NOT_ALLOWED, FILE_TOO_LARGE,
   * GOOGLE_WEB_DESIGNER_ZIP_FILE_NOT_PUBLISHED, INVALID_INPUT,
   * INVALID_MEDIA_BUNDLE, INVALID_MEDIA_BUNDLE_ENTRY, INVALID_MIME_TYPE,
   * INVALID_PATH, INVALID_URL_REFERENCE, MEDIA_DATA_TOO_LARGE,
   * MISSING_PRIMARY_MEDIA_BUNDLE_ENTRY, SERVER_ERROR, STORAGE_ERROR,
   * SWIFFY_BUNDLE_NOT_ALLOWED, TOO_MANY_FILES, UNEXPECTED_SIZE,
   * UNSUPPORTED_GOOGLE_WEB_DESIGNER_ENVIRONMENT, UNSUPPORTED_HTML5_FEATURE,
   * URL_IN_MEDIA_BUNDLE_NOT_SSL_COMPLIANT, CUSTOM_EXIT_NOT_ALLOWED
   *
   * @param self::MEDIA_BUNDLE_ERROR_* $mediaBundleError
   */
  public function setMediaBundleError($mediaBundleError)
  {
    $this->mediaBundleError = $mediaBundleError;
  }
  /**
   * @return self::MEDIA_BUNDLE_ERROR_*
   */
  public function getMediaBundleError()
  {
    return $this->mediaBundleError;
  }
  /**
   * The reasons for the media file error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CANNOT_CREATE_STANDARD_ICON,
   * CANNOT_SELECT_STANDARD_ICON_WITH_OTHER_TYPES,
   * CANNOT_SPECIFY_MEDIA_FILE_ID_AND_DATA, DUPLICATE_MEDIA, EMPTY_FIELD,
   * RESOURCE_REFERENCED_IN_MULTIPLE_OPS,
   * FIELD_NOT_SUPPORTED_FOR_MEDIA_SUB_TYPE, INVALID_MEDIA_FILE_ID,
   * INVALID_MEDIA_SUB_TYPE, INVALID_MEDIA_FILE_TYPE, INVALID_MIME_TYPE,
   * INVALID_REFERENCE_ID, INVALID_YOU_TUBE_ID, MEDIA_FILE_FAILED_TRANSCODING,
   * MEDIA_NOT_TRANSCODED, MEDIA_TYPE_DOES_NOT_MATCH_MEDIA_FILE_TYPE,
   * NO_FIELDS_SPECIFIED, NULL_REFERENCE_ID_AND_MEDIA_ID, TOO_LONG,
   * UNSUPPORTED_TYPE, YOU_TUBE_SERVICE_UNAVAILABLE,
   * YOU_TUBE_VIDEO_HAS_NON_POSITIVE_DURATION, YOU_TUBE_VIDEO_NOT_FOUND
   *
   * @param self::MEDIA_FILE_ERROR_* $mediaFileError
   */
  public function setMediaFileError($mediaFileError)
  {
    $this->mediaFileError = $mediaFileError;
  }
  /**
   * @return self::MEDIA_FILE_ERROR_*
   */
  public function getMediaFileError()
  {
    return $this->mediaFileError;
  }
  /**
   * The reasons for media uploading errors.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FILE_TOO_BIG, UNPARSEABLE_IMAGE,
   * ANIMATED_IMAGE_NOT_ALLOWED, FORMAT_NOT_ALLOWED, EXTERNAL_URL_NOT_ALLOWED,
   * INVALID_URL_REFERENCE, MISSING_PRIMARY_MEDIA_BUNDLE_ENTRY,
   * ANIMATED_VISUAL_EFFECT, ANIMATION_TOO_LONG, ASPECT_RATIO_NOT_ALLOWED,
   * AUDIO_NOT_ALLOWED_IN_MEDIA_BUNDLE, CMYK_JPEG_NOT_ALLOWED,
   * FLASH_NOT_ALLOWED, FRAME_RATE_TOO_HIGH,
   * GOOGLE_WEB_DESIGNER_ZIP_FILE_NOT_PUBLISHED, IMAGE_CONSTRAINTS_VIOLATED,
   * INVALID_MEDIA_BUNDLE, INVALID_MEDIA_BUNDLE_ENTRY, INVALID_MIME_TYPE,
   * INVALID_PATH, LAYOUT_PROBLEM, MALFORMED_URL, MEDIA_BUNDLE_NOT_ALLOWED,
   * MEDIA_BUNDLE_NOT_COMPATIBLE_TO_PRODUCT_TYPE,
   * MEDIA_BUNDLE_REJECTED_BY_MULTIPLE_ASSET_SPECS,
   * TOO_MANY_FILES_IN_MEDIA_BUNDLE,
   * UNSUPPORTED_GOOGLE_WEB_DESIGNER_ENVIRONMENT, UNSUPPORTED_HTML5_FEATURE,
   * URL_IN_MEDIA_BUNDLE_NOT_SSL_COMPLIANT, VIDEO_FILE_NAME_TOO_LONG,
   * VIDEO_MULTIPLE_FILES_WITH_SAME_NAME, VIDEO_NOT_ALLOWED_IN_MEDIA_BUNDLE,
   * CANNOT_UPLOAD_MEDIA_TYPE_THROUGH_API, DIMENSIONS_NOT_ALLOWED
   *
   * @param self::MEDIA_UPLOAD_ERROR_* $mediaUploadError
   */
  public function setMediaUploadError($mediaUploadError)
  {
    $this->mediaUploadError = $mediaUploadError;
  }
  /**
   * @return self::MEDIA_UPLOAD_ERROR_*
   */
  public function getMediaUploadError()
  {
    return $this->mediaUploadError;
  }
  /**
   * Container for enum describing possible merchant center errors.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MERCHANT_ID_CANNOT_BE_ACCESSED,
   * CUSTOMER_NOT_ALLOWED_FOR_SHOPPING_PERFORMANCE_MAX
   *
   * @param self::MERCHANT_CENTER_ERROR_* $merchantCenterError
   */
  public function setMerchantCenterError($merchantCenterError)
  {
    $this->merchantCenterError = $merchantCenterError;
  }
  /**
   * @return self::MERCHANT_CENTER_ERROR_*
   */
  public function getMerchantCenterError()
  {
    return $this->merchantCenterError;
  }
  /**
   * The reasons for the multiplier error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MULTIPLIER_TOO_HIGH,
   * MULTIPLIER_TOO_LOW, TOO_MANY_FRACTIONAL_DIGITS,
   * MULTIPLIER_NOT_ALLOWED_FOR_BIDDING_STRATEGY,
   * MULTIPLIER_NOT_ALLOWED_WHEN_BASE_BID_IS_MISSING, NO_MULTIPLIER_SPECIFIED,
   * MULTIPLIER_CAUSES_BID_TO_EXCEED_DAILY_BUDGET,
   * MULTIPLIER_CAUSES_BID_TO_EXCEED_MONTHLY_BUDGET,
   * MULTIPLIER_CAUSES_BID_TO_EXCEED_CUSTOM_BUDGET,
   * MULTIPLIER_CAUSES_BID_TO_EXCEED_MAX_ALLOWED_BID,
   * BID_LESS_THAN_MIN_ALLOWED_BID_WITH_MULTIPLIER,
   * MULTIPLIER_AND_BIDDING_STRATEGY_TYPE_MISMATCH
   *
   * @param self::MULTIPLIER_ERROR_* $multiplierError
   */
  public function setMultiplierError($multiplierError)
  {
    $this->multiplierError = $multiplierError;
  }
  /**
   * @return self::MULTIPLIER_ERROR_*
   */
  public function getMultiplierError()
  {
    return $this->multiplierError;
  }
  /**
   * An error with a mutate
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
   * The reasons for the new resource creation error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CANNOT_SET_ID_FOR_CREATE,
   * DUPLICATE_TEMP_IDS, TEMP_ID_RESOURCE_HAD_ERRORS
   *
   * @param self::NEW_RESOURCE_CREATION_ERROR_* $newResourceCreationError
   */
  public function setNewResourceCreationError($newResourceCreationError)
  {
    $this->newResourceCreationError = $newResourceCreationError;
  }
  /**
   * @return self::NEW_RESOURCE_CREATION_ERROR_*
   */
  public function getNewResourceCreationError()
  {
    return $this->newResourceCreationError;
  }
  /**
   * The reasons for the not allowlisted error
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
   * The reasons for the not empty error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EMPTY_LIST
   *
   * @param self::NOT_EMPTY_ERROR_* $notEmptyError
   */
  public function setNotEmptyError($notEmptyError)
  {
    $this->notEmptyError = $notEmptyError;
  }
  /**
   * @return self::NOT_EMPTY_ERROR_*
   */
  public function getNotEmptyError()
  {
    return $this->notEmptyError;
  }
  /**
   * The reasons for the null error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NULL_CONTENT
   *
   * @param self::NULL_ERROR_* $nullError
   */
  public function setNullError($nullError)
  {
    $this->nullError = $nullError;
  }
  /**
   * @return self::NULL_ERROR_*
   */
  public function getNullError()
  {
    return $this->nullError;
  }
  /**
   * The reasons for the offline user data job error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_USER_LIST_ID,
   * INVALID_USER_LIST_TYPE, NOT_ON_ALLOWLIST_FOR_USER_ID,
   * INCOMPATIBLE_UPLOAD_KEY_TYPE, MISSING_USER_IDENTIFIER,
   * INVALID_MOBILE_ID_FORMAT, TOO_MANY_USER_IDENTIFIERS,
   * NOT_ON_ALLOWLIST_FOR_STORE_SALES_DIRECT,
   * NOT_ON_ALLOWLIST_FOR_UNIFIED_STORE_SALES, INVALID_PARTNER_ID,
   * INVALID_ENCODING, INVALID_COUNTRY_CODE, INCOMPATIBLE_USER_IDENTIFIER,
   * FUTURE_TRANSACTION_TIME, INVALID_CONVERSION_ACTION,
   * MOBILE_ID_NOT_SUPPORTED, INVALID_OPERATION_ORDER, CONFLICTING_OPERATION,
   * EXTERNAL_UPDATE_ID_ALREADY_EXISTS, JOB_ALREADY_STARTED,
   * REMOVE_NOT_SUPPORTED, REMOVE_ALL_NOT_SUPPORTED, INVALID_SHA256_FORMAT,
   * CUSTOM_KEY_DISABLED, CUSTOM_KEY_NOT_PREDEFINED, CUSTOM_KEY_NOT_SET,
   * CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS,
   * ATTRIBUTES_NOT_APPLICABLE_FOR_CUSTOMER_MATCH_USER_LIST,
   * LIFETIME_VALUE_BUCKET_NOT_IN_RANGE,
   * INCOMPATIBLE_USER_IDENTIFIER_FOR_ATTRIBUTES, FUTURE_TIME_NOT_ALLOWED,
   * LAST_PURCHASE_TIME_LESS_THAN_ACQUISITION_TIME,
   * CUSTOMER_IDENTIFIER_NOT_ALLOWED, INVALID_ITEM_ID,
   * FIRST_PURCHASE_TIME_GREATER_THAN_LAST_PURCHASE_TIME,
   * INVALID_LIFECYCLE_STAGE, INVALID_EVENT_VALUE,
   * EVENT_ATTRIBUTE_ALL_FIELDS_ARE_REQUIRED, OPERATION_LEVEL_CONSENT_PROVIDED
   *
   * @param self::OFFLINE_USER_DATA_JOB_ERROR_* $offlineUserDataJobError
   */
  public function setOfflineUserDataJobError($offlineUserDataJobError)
  {
    $this->offlineUserDataJobError = $offlineUserDataJobError;
  }
  /**
   * @return self::OFFLINE_USER_DATA_JOB_ERROR_*
   */
  public function getOfflineUserDataJobError()
  {
    return $this->offlineUserDataJobError;
  }
  /**
   * The reasons for the operation access denied error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ACTION_NOT_PERMITTED,
   * CREATE_OPERATION_NOT_PERMITTED, REMOVE_OPERATION_NOT_PERMITTED,
   * UPDATE_OPERATION_NOT_PERMITTED, MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT,
   * OPERATION_NOT_PERMITTED_FOR_CAMPAIGN_TYPE, CREATE_AS_REMOVED_NOT_PERMITTED,
   * OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE,
   * OPERATION_NOT_PERMITTED_FOR_AD_GROUP_TYPE,
   * MUTATE_NOT_PERMITTED_FOR_CUSTOMER
   *
   * @param self::OPERATION_ACCESS_DENIED_ERROR_* $operationAccessDeniedError
   */
  public function setOperationAccessDeniedError($operationAccessDeniedError)
  {
    $this->operationAccessDeniedError = $operationAccessDeniedError;
  }
  /**
   * @return self::OPERATION_ACCESS_DENIED_ERROR_*
   */
  public function getOperationAccessDeniedError()
  {
    return $this->operationAccessDeniedError;
  }
  /**
   * The reasons for the operator error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, OPERATOR_NOT_SUPPORTED
   *
   * @param self::OPERATOR_ERROR_* $operatorError
   */
  public function setOperatorError($operatorError)
  {
    $this->operatorError = $operatorError;
  }
  /**
   * @return self::OPERATOR_ERROR_*
   */
  public function getOperatorError()
  {
    return $this->operatorError;
  }
  /**
   * The reasons for the mutate job error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PARTIAL_FAILURE_MODE_REQUIRED
   *
   * @param self::PARTIAL_FAILURE_ERROR_* $partialFailureError
   */
  public function setPartialFailureError($partialFailureError)
  {
    $this->partialFailureError = $partialFailureError;
  }
  /**
   * @return self::PARTIAL_FAILURE_ERROR_*
   */
  public function getPartialFailureError()
  {
    return $this->partialFailureError;
  }
  /**
   * The reasons for errors in payments accounts service
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOT_SUPPORTED_FOR_MANAGER_CUSTOMER
   *
   * @param self::PAYMENTS_ACCOUNT_ERROR_* $paymentsAccountError
   */
  public function setPaymentsAccountError($paymentsAccountError)
  {
    $this->paymentsAccountError = $paymentsAccountError;
  }
  /**
   * @return self::PAYMENTS_ACCOUNT_ERROR_*
   */
  public function getPaymentsAccountError()
  {
    return $this->paymentsAccountError;
  }
  /**
   * The reasons for the policy finding error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, POLICY_FINDING,
   * POLICY_TOPIC_NOT_FOUND
   *
   * @param self::POLICY_FINDING_ERROR_* $policyFindingError
   */
  public function setPolicyFindingError($policyFindingError)
  {
    $this->policyFindingError = $policyFindingError;
  }
  /**
   * @return self::POLICY_FINDING_ERROR_*
   */
  public function getPolicyFindingError()
  {
    return $this->policyFindingError;
  }
  /**
   * The reasons for the policy validation parameter error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * UNSUPPORTED_AD_TYPE_FOR_IGNORABLE_POLICY_TOPICS,
   * UNSUPPORTED_AD_TYPE_FOR_EXEMPT_POLICY_VIOLATION_KEYS,
   * CANNOT_SET_BOTH_IGNORABLE_POLICY_TOPICS_AND_EXEMPT_POLICY_VIOLATION_KEYS
   *
   * @param self::POLICY_VALIDATION_PARAMETER_ERROR_* $policyValidationParameterError
   */
  public function setPolicyValidationParameterError($policyValidationParameterError)
  {
    $this->policyValidationParameterError = $policyValidationParameterError;
  }
  /**
   * @return self::POLICY_VALIDATION_PARAMETER_ERROR_*
   */
  public function getPolicyValidationParameterError()
  {
    return $this->policyValidationParameterError;
  }
  /**
   * The reasons for the policy violation error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, POLICY_ERROR
   *
   * @param self::POLICY_VIOLATION_ERROR_* $policyViolationError
   */
  public function setPolicyViolationError($policyViolationError)
  {
    $this->policyViolationError = $policyViolationError;
  }
  /**
   * @return self::POLICY_VIOLATION_ERROR_*
   */
  public function getPolicyViolationError()
  {
    return $this->policyViolationError;
  }
  /**
   * The reasons for the product link error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_OPERATION,
   * CREATION_NOT_PERMITTED, INVITATION_EXISTS, LINK_EXISTS
   *
   * @param self::PRODUCT_LINK_ERROR_* $productLinkError
   */
  public function setProductLinkError($productLinkError)
  {
    $this->productLinkError = $productLinkError;
  }
  /**
   * @return self::PRODUCT_LINK_ERROR_*
   */
  public function getProductLinkError()
  {
    return $this->productLinkError;
  }
  /**
   * The reasons for the product link invitation error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_STATUS, PERMISSION_DENIED,
   * NO_INVITATION_REQUIRED, CUSTOMER_NOT_PERMITTED_TO_CREATE_INVITATION
   *
   * @param self::PRODUCT_LINK_INVITATION_ERROR_* $productLinkInvitationError
   */
  public function setProductLinkInvitationError($productLinkInvitationError)
  {
    $this->productLinkInvitationError = $productLinkInvitationError;
  }
  /**
   * @return self::PRODUCT_LINK_INVITATION_ERROR_*
   */
  public function getProductLinkInvitationError()
  {
    return $this->productLinkInvitationError;
  }
  /**
   * An error with the query
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, QUERY_ERROR, BAD_ENUM_CONSTANT,
   * BAD_ESCAPE_SEQUENCE, BAD_FIELD_NAME, BAD_LIMIT_VALUE, BAD_NUMBER,
   * BAD_OPERATOR, BAD_PARAMETER_NAME, BAD_PARAMETER_VALUE,
   * BAD_RESOURCE_TYPE_IN_FROM_CLAUSE, BAD_SYMBOL, BAD_VALUE,
   * DATE_RANGE_TOO_WIDE, DATE_RANGE_TOO_NARROW, EXPECTED_AND, EXPECTED_BY,
   * EXPECTED_DIMENSION_FIELD_IN_SELECT_CLAUSE, EXPECTED_FILTERS_ON_DATE_RANGE,
   * EXPECTED_FROM, EXPECTED_LIST, EXPECTED_REFERENCED_FIELD_IN_SELECT_CLAUSE,
   * EXPECTED_SELECT, EXPECTED_SINGLE_VALUE,
   * EXPECTED_VALUE_WITH_BETWEEN_OPERATOR, INVALID_DATE_FORMAT,
   * MISALIGNED_DATE_FOR_FILTER, INVALID_STRING_VALUE,
   * INVALID_VALUE_WITH_BETWEEN_OPERATOR, INVALID_VALUE_WITH_DURING_OPERATOR,
   * INVALID_VALUE_WITH_LIKE_OPERATOR, OPERATOR_FIELD_MISMATCH,
   * PROHIBITED_EMPTY_LIST_IN_CONDITION, PROHIBITED_ENUM_CONSTANT,
   * PROHIBITED_FIELD_COMBINATION_IN_SELECT_CLAUSE,
   * PROHIBITED_FIELD_IN_ORDER_BY_CLAUSE, PROHIBITED_FIELD_IN_SELECT_CLAUSE,
   * PROHIBITED_FIELD_IN_WHERE_CLAUSE, PROHIBITED_RESOURCE_TYPE_IN_FROM_CLAUSE,
   * PROHIBITED_RESOURCE_TYPE_IN_SELECT_CLAUSE,
   * PROHIBITED_RESOURCE_TYPE_IN_WHERE_CLAUSE,
   * PROHIBITED_METRIC_IN_SELECT_OR_WHERE_CLAUSE,
   * PROHIBITED_SEGMENT_IN_SELECT_OR_WHERE_CLAUSE,
   * PROHIBITED_SEGMENT_WITH_METRIC_IN_SELECT_OR_WHERE_CLAUSE,
   * PROHIBITED_FIELD_OR_SEGMENT_WITH_METRIC, LIMIT_VALUE_TOO_LOW,
   * PROHIBITED_NEWLINE_IN_STRING, PROHIBITED_VALUE_COMBINATION_IN_LIST,
   * PROHIBITED_VALUE_COMBINATION_WITH_BETWEEN_OPERATOR, STRING_NOT_TERMINATED,
   * TOO_MANY_SEGMENTS, UNEXPECTED_END_OF_QUERY, UNEXPECTED_FROM_CLAUSE,
   * UNRECOGNIZED_FIELD, UNEXPECTED_INPUT, REQUESTED_METRICS_FOR_MANAGER,
   * FILTER_HAS_TOO_MANY_VALUES, REQUIRED_SEGMENT_FIELD_MISSING
   *
   * @param self::QUERY_ERROR_* $queryError
   */
  public function setQueryError($queryError)
  {
    $this->queryError = $queryError;
  }
  /**
   * @return self::QUERY_ERROR_*
   */
  public function getQueryError()
  {
    return $this->queryError;
  }
  /**
   * An error with the amount of quota remaining.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, RESOURCE_EXHAUSTED,
   * ACCESS_PROHIBITED, RESOURCE_TEMPORARILY_EXHAUSTED,
   * EXCESSIVE_SHORT_TERM_QUERY_RESOURCE_CONSUMPTION,
   * EXCESSIVE_LONG_TERM_QUERY_RESOURCE_CONSUMPTION,
   * PAYMENTS_PROFILE_ACTIVATION_RATE_LIMIT_EXCEEDED
   *
   * @param self::QUOTA_ERROR_* $quotaError
   */
  public function setQuotaError($quotaError)
  {
    $this->quotaError = $quotaError;
  }
  /**
   * @return self::QUOTA_ERROR_*
   */
  public function getQuotaError()
  {
    return $this->quotaError;
  }
  /**
   * The reasons for the range error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TOO_LOW, TOO_HIGH
   *
   * @param self::RANGE_ERROR_* $rangeError
   */
  public function setRangeError($rangeError)
  {
    $this->rangeError = $rangeError;
  }
  /**
   * @return self::RANGE_ERROR_*
   */
  public function getRangeError()
  {
    return $this->rangeError;
  }
  /**
   * The reasons for the reach plan error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOT_FORECASTABLE_MISSING_RATE,
   * NOT_FORECASTABLE_NOT_ENOUGH_INVENTORY, NOT_FORECASTABLE_ACCOUNT_NOT_ENABLED
   *
   * @param self::REACH_PLAN_ERROR_* $reachPlanError
   */
  public function setReachPlanError($reachPlanError)
  {
    $this->reachPlanError = $reachPlanError;
  }
  /**
   * @return self::REACH_PLAN_ERROR_*
   */
  public function getReachPlanError()
  {
    return $this->reachPlanError;
  }
  /**
   * The reasons for error in applying a recommendation
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BUDGET_AMOUNT_TOO_SMALL,
   * BUDGET_AMOUNT_TOO_LARGE, INVALID_BUDGET_AMOUNT, POLICY_ERROR,
   * INVALID_BID_AMOUNT, ADGROUP_KEYWORD_LIMIT, RECOMMENDATION_ALREADY_APPLIED,
   * RECOMMENDATION_INVALIDATED, TOO_MANY_OPERATIONS, NO_OPERATIONS,
   * DIFFERENT_TYPES_NOT_SUPPORTED, DUPLICATE_RESOURCE_NAME,
   * RECOMMENDATION_ALREADY_DISMISSED, INVALID_APPLY_REQUEST,
   * RECOMMENDATION_TYPE_APPLY_NOT_SUPPORTED, INVALID_MULTIPLIER,
   * ADVERTISING_CHANNEL_TYPE_GENERATE_NOT_SUPPORTED,
   * RECOMMENDATION_TYPE_GENERATE_NOT_SUPPORTED,
   * RECOMMENDATION_TYPES_CANNOT_BE_EMPTY,
   * CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_BIDDING_INFO,
   * CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_BIDDING_STRATEGY_TYPE,
   * CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_ASSET_GROUP_INFO, CAMPAIGN_BUD
   * GET_RECOMMENDATION_TYPE_REQUIRES_ASSET_GROUP_INFO_WITH_FINAL_URL, CAMPAIGN_
   * BUDGET_RECOMMENDATION_TYPE_REQUIRES_COUNTRY_CODES_FOR_SEARCH_CHANNEL, CAMPA
   * IGN_BUDGET_RECOMMENDATION_TYPE_INVALID_COUNTRY_CODE_FOR_SEARCH_CHANNEL, CAM
   * PAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_LANGUAGE_CODES_FOR_SEARCH_CHANNEL
   * , CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_EITHER_POSITIVE_OR_NEGATIVE_
   * LOCATION_IDS_FOR_SEARCH_CHANNEL, CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIR
   * ES_AD_GROUP_INFO_FOR_SEARCH_CHANNEL,
   * CAMPAIGN_BUDGET_RECOMMENDATION_TYPE_REQUIRES_KEYWORDS_FOR_SEARCH_CHANNEL, C
   * AMPAIGN_BUDGET_RECOMMENDATION_TYPE_WITH_CHANNEL_TYPE_SEARCH_AND_BIDDING_STR
   * ATEGY_TYPE_TARGET_IMPRESSION_SHARE_REQUIRES_LOCATION, CAMPAIGN_BUDGET_RECOM
   * MENDATION_TYPE_WITH_CHANNEL_TYPE_SEARCH_AND_BIDDING_STRATEGY_TYPE_TARGET_IM
   * PRESSION_SHARE_REQUIRES_TARGET_IMPRESSION_SHARE_MICROS, CAMPAIGN_BUDGET_REC
   * OMMENDATION_TYPE_TARGET_IMPRESSION_SHARE_MICROS_BETWEEN_1_AND_1000000, CAMP
   * AIGN_BUDGET_RECOMMENDATION_TYPE_WITH_CHANNEL_TYPE_SEARCH_AND_BIDDING_STRATE
   * GY_TYPE_TARGET_IMPRESSION_SHARE_REQUIRES_TARGET_IMPRESSION_SHARE_INFO,
   * MERCHANT_CENTER_ACCOUNT_ID_NOT_SUPPORTED_ADVERTISING_CHANNEL_TYPE
   *
   * @param self::RECOMMENDATION_ERROR_* $recommendationError
   */
  public function setRecommendationError($recommendationError)
  {
    $this->recommendationError = $recommendationError;
  }
  /**
   * @return self::RECOMMENDATION_ERROR_*
   */
  public function getRecommendationError()
  {
    return $this->recommendationError;
  }
  /**
   * The reasons for the recommendation subscription error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN
   *
   * @param self::RECOMMENDATION_SUBSCRIPTION_ERROR_* $recommendationSubscriptionError
   */
  public function setRecommendationSubscriptionError($recommendationSubscriptionError)
  {
    $this->recommendationSubscriptionError = $recommendationSubscriptionError;
  }
  /**
   * @return self::RECOMMENDATION_SUBSCRIPTION_ERROR_*
   */
  public function getRecommendationSubscriptionError()
  {
    return $this->recommendationSubscriptionError;
  }
  /**
   * The reasons for the region code error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_REGION_CODE
   *
   * @param self::REGION_CODE_ERROR_* $regionCodeError
   */
  public function setRegionCodeError($regionCodeError)
  {
    $this->regionCodeError = $regionCodeError;
  }
  /**
   * @return self::REGION_CODE_ERROR_*
   */
  public function getRegionCodeError()
  {
    return $this->regionCodeError;
  }
  /**
   * An error caused by the request
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, RESOURCE_NAME_MISSING,
   * RESOURCE_NAME_MALFORMED, BAD_RESOURCE_ID, INVALID_CUSTOMER_ID,
   * OPERATION_REQUIRED, RESOURCE_NOT_FOUND, INVALID_PAGE_TOKEN,
   * EXPIRED_PAGE_TOKEN, INVALID_PAGE_SIZE, PAGE_SIZE_NOT_SUPPORTED,
   * REQUIRED_FIELD_MISSING, IMMUTABLE_FIELD, TOO_MANY_MUTATE_OPERATIONS,
   * CANNOT_BE_EXECUTED_BY_MANAGER_ACCOUNT, CANNOT_MODIFY_FOREIGN_FIELD,
   * INVALID_ENUM_VALUE, DEVELOPER_TOKEN_PARAMETER_MISSING,
   * LOGIN_CUSTOMER_ID_PARAMETER_MISSING, VALIDATE_ONLY_REQUEST_HAS_PAGE_TOKEN,
   * CANNOT_RETURN_SUMMARY_ROW_FOR_REQUEST_WITHOUT_METRICS,
   * CANNOT_RETURN_SUMMARY_ROW_FOR_VALIDATE_ONLY_REQUESTS,
   * INCONSISTENT_RETURN_SUMMARY_ROW_VALUE,
   * TOTAL_RESULTS_COUNT_NOT_ORIGINALLY_REQUESTED, RPC_DEADLINE_TOO_SHORT,
   * UNSUPPORTED_VERSION, CLOUD_PROJECT_NOT_FOUND
   *
   * @param self::REQUEST_ERROR_* $requestError
   */
  public function setRequestError($requestError)
  {
    $this->requestError = $requestError;
  }
  /**
   * @return self::REQUEST_ERROR_*
   */
  public function getRequestError()
  {
    return $this->requestError;
  }
  /**
   * The reasons for the resource access denied error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, WRITE_ACCESS_DENIED
   *
   * @param self::RESOURCE_ACCESS_DENIED_ERROR_* $resourceAccessDeniedError
   */
  public function setResourceAccessDeniedError($resourceAccessDeniedError)
  {
    $this->resourceAccessDeniedError = $resourceAccessDeniedError;
  }
  /**
   * @return self::RESOURCE_ACCESS_DENIED_ERROR_*
   */
  public function getResourceAccessDeniedError()
  {
    return $this->resourceAccessDeniedError;
  }
  /**
   * The reasons for the resource count limit exceeded error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ACCOUNT_LIMIT, CAMPAIGN_LIMIT,
   * ADGROUP_LIMIT, AD_GROUP_AD_LIMIT, AD_GROUP_CRITERION_LIMIT,
   * SHARED_SET_LIMIT, MATCHING_FUNCTION_LIMIT, RESPONSE_ROW_LIMIT_EXCEEDED,
   * RESOURCE_LIMIT
   *
   * @param self::RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_* $resourceCountLimitExceededError
   */
  public function setResourceCountLimitExceededError($resourceCountLimitExceededError)
  {
    $this->resourceCountLimitExceededError = $resourceCountLimitExceededError;
  }
  /**
   * @return self::RESOURCE_COUNT_LIMIT_EXCEEDED_ERROR_*
   */
  public function getResourceCountLimitExceededError()
  {
    return $this->resourceCountLimitExceededError;
  }
  /**
   * The reasons for the Search term insight error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FILTERING_NOT_ALLOWED_WITH_SEGMENTS,
   * LIMIT_NOT_ALLOWED_WITH_SEGMENTS, MISSING_FIELD_IN_SELECT_CLAUSE,
   * REQUIRES_FILTER_BY_SINGLE_RESOURCE, SORTING_NOT_ALLOWED_WITH_SEGMENTS,
   * SUMMARY_ROW_NOT_ALLOWED_WITH_SEGMENTS
   *
   * @param self::SEARCH_TERM_INSIGHT_ERROR_* $searchTermInsightError
   */
  public function setSearchTermInsightError($searchTermInsightError)
  {
    $this->searchTermInsightError = $searchTermInsightError;
  }
  /**
   * @return self::SEARCH_TERM_INSIGHT_ERROR_*
   */
  public function getSearchTermInsightError()
  {
    return $this->searchTermInsightError;
  }
  /**
   * The reasons for the setting error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SETTING_TYPE_IS_NOT_AVAILABLE,
   * SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN,
   * TARGETING_SETTING_CONTAINS_INVALID_CRITERION_TYPE_GROUP, TARGETING_SETTING_
   * DEMOGRAPHIC_CRITERION_TYPE_GROUPS_MUST_BE_SET_TO_TARGET_ALL, TARGETING_SETT
   * ING_CANNOT_CHANGE_TARGET_ALL_TO_FALSE_FOR_DEMOGRAPHIC_CRITERION_TYPE_GROUP,
   * DYNAMIC_SEARCH_ADS_SETTING_AT_LEAST_ONE_FEED_ID_MUST_BE_PRESENT,
   * DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_INVALID_DOMAIN_NAME,
   * DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_SUBDOMAIN_NAME,
   * DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_INVALID_LANGUAGE_CODE,
   * TARGET_ALL_IS_NOT_ALLOWED_FOR_PLACEMENT_IN_SEARCH_CAMPAIGN,
   * SETTING_VALUE_NOT_COMPATIBLE_WITH_CAMPAIGN,
   * BID_ONLY_IS_NOT_ALLOWED_TO_BE_MODIFIED_WITH_CUSTOMER_MATCH_TARGETING
   *
   * @param self::SETTING_ERROR_* $settingError
   */
  public function setSettingError($settingError)
  {
    $this->settingError = $settingError;
  }
  /**
   * @return self::SETTING_ERROR_*
   */
  public function getSettingError()
  {
    return $this->settingError;
  }
  /**
   * The reasons for the shareable preview error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TOO_MANY_ASSET_GROUPS_IN_REQUEST,
   * ASSET_GROUP_DOES_NOT_EXIST_UNDER_THIS_CUSTOMER
   *
   * @param self::SHAREABLE_PREVIEW_ERROR_* $shareablePreviewError
   */
  public function setShareablePreviewError($shareablePreviewError)
  {
    $this->shareablePreviewError = $shareablePreviewError;
  }
  /**
   * @return self::SHAREABLE_PREVIEW_ERROR_*
   */
  public function getShareablePreviewError()
  {
    return $this->shareablePreviewError;
  }
  /**
   * The reasons for the shared criterion error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPE
   *
   * @param self::SHARED_CRITERION_ERROR_* $sharedCriterionError
   */
  public function setSharedCriterionError($sharedCriterionError)
  {
    $this->sharedCriterionError = $sharedCriterionError;
  }
  /**
   * @return self::SHARED_CRITERION_ERROR_*
   */
  public function getSharedCriterionError()
  {
    return $this->sharedCriterionError;
  }
  /**
   * The reasons for the shared set error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * CUSTOMER_CANNOT_CREATE_SHARED_SET_OF_THIS_TYPE, DUPLICATE_NAME,
   * SHARED_SET_REMOVED, SHARED_SET_IN_USE
   *
   * @param self::SHARED_SET_ERROR_* $sharedSetError
   */
  public function setSharedSetError($sharedSetError)
  {
    $this->sharedSetError = $sharedSetError;
  }
  /**
   * @return self::SHARED_SET_ERROR_*
   */
  public function getSharedSetError()
  {
    return $this->sharedSetError;
  }
  /**
   * The reasons for error in querying shopping product.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MISSING_CAMPAIGN_FILTER,
   * MISSING_AD_GROUP_FILTER, UNSUPPORTED_DATE_SEGMENTATION
   *
   * @param self::SHOPPING_PRODUCT_ERROR_* $shoppingProductError
   */
  public function setShoppingProductError($shoppingProductError)
  {
    $this->shoppingProductError = $shoppingProductError;
  }
  /**
   * @return self::SHOPPING_PRODUCT_ERROR_*
   */
  public function getShoppingProductError()
  {
    return $this->shoppingProductError;
  }
  /**
   * The reasons for the size limit error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, REQUEST_SIZE_LIMIT_EXCEEDED,
   * RESPONSE_SIZE_LIMIT_EXCEEDED
   *
   * @param self::SIZE_LIMIT_ERROR_* $sizeLimitError
   */
  public function setSizeLimitError($sizeLimitError)
  {
    $this->sizeLimitError = $sizeLimitError;
  }
  /**
   * @return self::SIZE_LIMIT_ERROR_*
   */
  public function getSizeLimitError()
  {
    return $this->sizeLimitError;
  }
  /**
   * The reasons for the Smart campaign error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_BUSINESS_LOCATION_ID,
   * INVALID_CAMPAIGN, BUSINESS_NAME_OR_BUSINESS_LOCATION_ID_MISSING,
   * REQUIRED_SUGGESTION_FIELD_MISSING, GEO_TARGETS_REQUIRED,
   * CANNOT_DETERMINE_SUGGESTION_LOCALE, FINAL_URL_NOT_CRAWLABLE
   *
   * @param self::SMART_CAMPAIGN_ERROR_* $smartCampaignError
   */
  public function setSmartCampaignError($smartCampaignError)
  {
    $this->smartCampaignError = $smartCampaignError;
  }
  /**
   * @return self::SMART_CAMPAIGN_ERROR_*
   */
  public function getSmartCampaignError()
  {
    return $this->smartCampaignError;
  }
  /**
   * The reasons for the string format error
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
   * The reasons for the string length error
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
  /**
   * The reasons for the third party app analytics link mutate error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_ANALYTICS_PROVIDER_ID,
   * INVALID_MOBILE_APP_ID, MOBILE_APP_IS_NOT_ENABLED,
   * CANNOT_REGENERATE_SHAREABLE_LINK_ID_FOR_REMOVED_LINK
   *
   * @param self::THIRD_PARTY_APP_ANALYTICS_LINK_ERROR_* $thirdPartyAppAnalyticsLinkError
   */
  public function setThirdPartyAppAnalyticsLinkError($thirdPartyAppAnalyticsLinkError)
  {
    $this->thirdPartyAppAnalyticsLinkError = $thirdPartyAppAnalyticsLinkError;
  }
  /**
   * @return self::THIRD_PARTY_APP_ANALYTICS_LINK_ERROR_*
   */
  public function getThirdPartyAppAnalyticsLinkError()
  {
    return $this->thirdPartyAppAnalyticsLinkError;
  }
  /**
   * The reasons for the time zone error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_TIME_ZONE
   *
   * @param self::TIME_ZONE_ERROR_* $timeZoneError
   */
  public function setTimeZoneError($timeZoneError)
  {
    $this->timeZoneError = $timeZoneError;
  }
  /**
   * @return self::TIME_ZONE_ERROR_*
   */
  public function getTimeZoneError()
  {
    return $this->timeZoneError;
  }
  /**
   * An error with a URL field mutate.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, INVALID_TRACKING_URL_TEMPLATE,
   * INVALID_TAG_IN_TRACKING_URL_TEMPLATE, MISSING_TRACKING_URL_TEMPLATE_TAG,
   * MISSING_PROTOCOL_IN_TRACKING_URL_TEMPLATE,
   * INVALID_PROTOCOL_IN_TRACKING_URL_TEMPLATE, MALFORMED_TRACKING_URL_TEMPLATE,
   * MISSING_HOST_IN_TRACKING_URL_TEMPLATE,
   * INVALID_TLD_IN_TRACKING_URL_TEMPLATE,
   * REDUNDANT_NESTED_TRACKING_URL_TEMPLATE_TAG, INVALID_FINAL_URL,
   * INVALID_TAG_IN_FINAL_URL, REDUNDANT_NESTED_FINAL_URL_TAG,
   * MISSING_PROTOCOL_IN_FINAL_URL, INVALID_PROTOCOL_IN_FINAL_URL,
   * MALFORMED_FINAL_URL, MISSING_HOST_IN_FINAL_URL, INVALID_TLD_IN_FINAL_URL,
   * INVALID_FINAL_MOBILE_URL, INVALID_TAG_IN_FINAL_MOBILE_URL,
   * REDUNDANT_NESTED_FINAL_MOBILE_URL_TAG,
   * MISSING_PROTOCOL_IN_FINAL_MOBILE_URL, INVALID_PROTOCOL_IN_FINAL_MOBILE_URL,
   * MALFORMED_FINAL_MOBILE_URL, MISSING_HOST_IN_FINAL_MOBILE_URL,
   * INVALID_TLD_IN_FINAL_MOBILE_URL, INVALID_FINAL_APP_URL,
   * INVALID_TAG_IN_FINAL_APP_URL, REDUNDANT_NESTED_FINAL_APP_URL_TAG,
   * MULTIPLE_APP_URLS_FOR_OSTYPE, INVALID_OSTYPE, INVALID_PROTOCOL_FOR_APP_URL,
   * INVALID_PACKAGE_ID_FOR_APP_URL, URL_CUSTOM_PARAMETERS_COUNT_EXCEEDS_LIMIT,
   * INVALID_CHARACTERS_IN_URL_CUSTOM_PARAMETER_KEY,
   * INVALID_CHARACTERS_IN_URL_CUSTOM_PARAMETER_VALUE,
   * INVALID_TAG_IN_URL_CUSTOM_PARAMETER_VALUE,
   * REDUNDANT_NESTED_URL_CUSTOM_PARAMETER_TAG, MISSING_PROTOCOL,
   * INVALID_PROTOCOL, INVALID_URL, DESTINATION_URL_DEPRECATED,
   * INVALID_TAG_IN_URL, MISSING_URL_TAG, DUPLICATE_URL_ID, INVALID_URL_ID,
   * FINAL_URL_SUFFIX_MALFORMED, INVALID_TAG_IN_FINAL_URL_SUFFIX,
   * INVALID_TOP_LEVEL_DOMAIN, MALFORMED_TOP_LEVEL_DOMAIN, MALFORMED_URL,
   * MISSING_HOST, NULL_CUSTOM_PARAMETER_VALUE,
   * VALUE_TRACK_PARAMETER_NOT_SUPPORTED, UNSUPPORTED_APP_STORE
   *
   * @param self::URL_FIELD_ERROR_* $urlFieldError
   */
  public function setUrlFieldError($urlFieldError)
  {
    $this->urlFieldError = $urlFieldError;
  }
  /**
   * @return self::URL_FIELD_ERROR_*
   */
  public function getUrlFieldError()
  {
    return $this->urlFieldError;
  }
  /**
   * The reasons for the user data error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * OPERATIONS_FOR_CUSTOMER_MATCH_NOT_ALLOWED, TOO_MANY_USER_IDENTIFIERS,
   * USER_LIST_NOT_APPLICABLE
   *
   * @param self::USER_DATA_ERROR_* $userDataError
   */
  public function setUserDataError($userDataError)
  {
    $this->userDataError = $userDataError;
  }
  /**
   * @return self::USER_DATA_ERROR_*
   */
  public function getUserDataError()
  {
    return $this->userDataError;
  }
  /**
   * The reasons for a user list customer type error.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CONFLICTING_CUSTOMER_TYPES,
   * NO_ACCESS_TO_USER_LIST, USERLIST_NOT_ELIGIBLE,
   * CONVERSION_TRACKING_NOT_ENABLED_OR_NOT_MCC_MANAGER_ACCOUNT,
   * TOO_MANY_USER_LISTS_FOR_THE_CUSTOMER_TYPE
   *
   * @param self::USER_LIST_CUSTOMER_TYPE_ERROR_* $userListCustomerTypeError
   */
  public function setUserListCustomerTypeError($userListCustomerTypeError)
  {
    $this->userListCustomerTypeError = $userListCustomerTypeError;
  }
  /**
   * @return self::USER_LIST_CUSTOMER_TYPE_ERROR_*
   */
  public function getUserListCustomerTypeError()
  {
    return $this->userListCustomerTypeError;
  }
  /**
   * The reasons for the user list error
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * EXTERNAL_REMARKETING_USER_LIST_MUTATE_NOT_SUPPORTED,
   * CONCRETE_TYPE_REQUIRED, CONVERSION_TYPE_ID_REQUIRED,
   * DUPLICATE_CONVERSION_TYPES, INVALID_CONVERSION_TYPE, INVALID_DESCRIPTION,
   * INVALID_NAME, INVALID_TYPE,
   * CAN_NOT_ADD_LOGICAL_LIST_AS_LOGICAL_LIST_OPERAND,
   * INVALID_USER_LIST_LOGICAL_RULE_OPERAND, NAME_ALREADY_USED,
   * NEW_CONVERSION_TYPE_NAME_REQUIRED, CONVERSION_TYPE_NAME_ALREADY_USED,
   * OWNERSHIP_REQUIRED_FOR_SET, USER_LIST_MUTATE_NOT_SUPPORTED, INVALID_RULE,
   * INVALID_DATE_RANGE, CAN_NOT_MUTATE_SENSITIVE_USERLIST,
   * MAX_NUM_RULEBASED_USERLISTS, CANNOT_MODIFY_BILLABLE_RECORD_COUNT,
   * APP_ID_NOT_SET, USERLIST_NAME_IS_RESERVED_FOR_SYSTEM_LIST,
   * ADVERTISER_NOT_ON_ALLOWLIST_FOR_USING_UPLOADED_DATA,
   * RULE_TYPE_IS_NOT_SUPPORTED,
   * CAN_NOT_ADD_A_SIMILAR_USERLIST_AS_LOGICAL_LIST_OPERAND,
   * CAN_NOT_MIX_CRM_BASED_IN_LOGICAL_LIST_WITH_OTHER_LISTS, APP_ID_NOT_ALLOWED,
   * CANNOT_MUTATE_SYSTEM_LIST, MOBILE_APP_IS_SENSITIVE,
   * SEED_LIST_DOES_NOT_EXIST, INVALID_SEED_LIST_ACCESS_REASON,
   * INVALID_SEED_LIST_TYPE, INVALID_COUNTRY_CODES,
   * PARTNER_AUDIENCE_SOURCE_NOT_SUPPORTED_FOR_USER_LIST_TYPE,
   * COMMERCE_PARTNER_NOT_ALLOWED,
   * PARTNER_AUDIENCE_INFO_NOT_SUPPORTED_FOR_USER_LIST_TYPE,
   * PARTNER_MANAGER_ACCOUNT_DISALLOWED,
   * PARTNER_NOT_ALLOWLISTED_FOR_THIRD_PARTY_PARTNER_DATA,
   * ADVERTISER_TOS_NOT_ACCEPTED, ADVERTISER_PARTNER_LINK_MISSING,
   * ADVERTISER_NOT_ALLOWLISTED_FOR_THIRD_PARTY_PARTNER_DATA,
   * ACCOUNT_SETTING_TYPE_NOT_ALLOWED
   *
   * @param self::USER_LIST_ERROR_* $userListError
   */
  public function setUserListError($userListError)
  {
    $this->userListError = $userListError;
  }
  /**
   * @return self::USER_LIST_ERROR_*
   */
  public function getUserListError()
  {
    return $this->userListError;
  }
  /**
   * An error with a Video Campaign mutate.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MUTATE_REQUIRES_RESERVATION
   *
   * @param self::VIDEO_CAMPAIGN_ERROR_* $videoCampaignError
   */
  public function setVideoCampaignError($videoCampaignError)
  {
    $this->videoCampaignError = $videoCampaignError;
  }
  /**
   * @return self::VIDEO_CAMPAIGN_ERROR_*
   */
  public function getVideoCampaignError()
  {
    return $this->videoCampaignError;
  }
  /**
   * The reasons for YouTube video registration errors.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, VIDEO_NOT_FOUND,
   * VIDEO_NOT_ACCESSIBLE, VIDEO_NOT_ELIGIBLE
   *
   * @param self::YOUTUBE_VIDEO_REGISTRATION_ERROR_* $youtubeVideoRegistrationError
   */
  public function setYoutubeVideoRegistrationError($youtubeVideoRegistrationError)
  {
    $this->youtubeVideoRegistrationError = $youtubeVideoRegistrationError;
  }
  /**
   * @return self::YOUTUBE_VIDEO_REGISTRATION_ERROR_*
   */
  public function getYoutubeVideoRegistrationError()
  {
    return $this->youtubeVideoRegistrationError;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ErrorsErrorCode::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ErrorsErrorCode');
