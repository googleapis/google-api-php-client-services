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

class GoogleAdsSearchads360V23CommonLeadFormAsset extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const CALL_TO_ACTION_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CALL_TO_ACTION_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Learn more.
   */
  public const CALL_TO_ACTION_TYPE_LEARN_MORE = 'LEARN_MORE';
  /**
   * Get quote.
   */
  public const CALL_TO_ACTION_TYPE_GET_QUOTE = 'GET_QUOTE';
  /**
   * Apply now.
   */
  public const CALL_TO_ACTION_TYPE_APPLY_NOW = 'APPLY_NOW';
  /**
   * Sign Up.
   */
  public const CALL_TO_ACTION_TYPE_SIGN_UP = 'SIGN_UP';
  /**
   * Contact us.
   */
  public const CALL_TO_ACTION_TYPE_CONTACT_US = 'CONTACT_US';
  /**
   * Subscribe.
   */
  public const CALL_TO_ACTION_TYPE_SUBSCRIBE = 'SUBSCRIBE';
  /**
   * Download.
   */
  public const CALL_TO_ACTION_TYPE_DOWNLOAD = 'DOWNLOAD';
  /**
   * Book now.
   */
  public const CALL_TO_ACTION_TYPE_BOOK_NOW = 'BOOK_NOW';
  /**
   * Get offer.
   */
  public const CALL_TO_ACTION_TYPE_GET_OFFER = 'GET_OFFER';
  /**
   * Register.
   */
  public const CALL_TO_ACTION_TYPE_REGISTER = 'REGISTER';
  /**
   * Get info.
   */
  public const CALL_TO_ACTION_TYPE_GET_INFO = 'GET_INFO';
  /**
   * Request a demo.
   */
  public const CALL_TO_ACTION_TYPE_REQUEST_DEMO = 'REQUEST_DEMO';
  /**
   * Join now.
   */
  public const CALL_TO_ACTION_TYPE_JOIN_NOW = 'JOIN_NOW';
  /**
   * Get started.
   */
  public const CALL_TO_ACTION_TYPE_GET_STARTED = 'GET_STARTED';
  /**
   * Not specified.
   */
  public const DESIRED_INTENT_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const DESIRED_INTENT_UNKNOWN = 'UNKNOWN';
  /**
   * Deliver more leads at a potentially lower quality.
   */
  public const DESIRED_INTENT_LOW_INTENT = 'LOW_INTENT';
  /**
   * Deliver leads that are more qualified.
   */
  public const DESIRED_INTENT_HIGH_INTENT = 'HIGH_INTENT';
  /**
   * Not specified.
   */
  public const POST_SUBMIT_CALL_TO_ACTION_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const POST_SUBMIT_CALL_TO_ACTION_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Visit site.
   */
  public const POST_SUBMIT_CALL_TO_ACTION_TYPE_VISIT_SITE = 'VISIT_SITE';
  /**
   * Download.
   */
  public const POST_SUBMIT_CALL_TO_ACTION_TYPE_DOWNLOAD = 'DOWNLOAD';
  /**
   * Learn more.
   */
  public const POST_SUBMIT_CALL_TO_ACTION_TYPE_LEARN_MORE = 'LEARN_MORE';
  /**
   * Shop now.
   */
  public const POST_SUBMIT_CALL_TO_ACTION_TYPE_SHOP_NOW = 'SHOP_NOW';
  protected $collection_key = 'fields';
  /**
   * Asset resource name of the background image. The image dimensions must be
   * exactly 1200x628.
   *
   * @var string
   */
  public $backgroundImageAsset;
  /**
   * Required. The name of the business being advertised.
   *
   * @var string
   */
  public $businessName;
  /**
   * Required. Text giving a clear value proposition of what users expect once
   * they expand the form.
   *
   * @var string
   */
  public $callToActionDescription;
  /**
   * Required. Pre-defined display text that encourages user to expand the form.
   *
   * @var string
   */
  public $callToActionType;
  /**
   * Custom disclosure shown along with Google disclaimer on the lead form.
   * Accessible to allowed customers only.
   *
   * @var string
   */
  public $customDisclosure;
  protected $customQuestionFieldsType = GoogleAdsSearchads360V23CommonLeadFormCustomQuestionField::class;
  protected $customQuestionFieldsDataType = 'array';
  protected $deliveryMethodsType = GoogleAdsSearchads360V23CommonLeadFormDeliveryMethod::class;
  protected $deliveryMethodsDataType = 'array';
  /**
   * Required. Detailed description of the expanded form to describe what the
   * form is asking for or facilitating.
   *
   * @var string
   */
  public $description;
  /**
   * Chosen intent for the lead form, for example, more volume or more
   * qualified.
   *
   * @var string
   */
  public $desiredIntent;
  protected $fieldsType = GoogleAdsSearchads360V23CommonLeadFormField::class;
  protected $fieldsDataType = 'array';
  /**
   * Required. Headline of the expanded form to describe what the form is asking
   * for or facilitating.
   *
   * @var string
   */
  public $headline;
  /**
   * Pre-defined display text that encourages user action after the form is
   * submitted.
   *
   * @var string
   */
  public $postSubmitCallToActionType;
  /**
   * Detailed description shown after form submission that describes how the
   * advertiser will follow up with the user.
   *
   * @var string
   */
  public $postSubmitDescription;
  /**
   * Headline of text shown after form submission that describes how the
   * advertiser will follow up with the user.
   *
   * @var string
   */
  public $postSubmitHeadline;
  /**
   * Required. Link to a page describing the policy on how the collected data is
   * handled by the advertiser/business.
   *
   * @var string
   */
  public $privacyPolicyUrl;

  /**
   * Asset resource name of the background image. The image dimensions must be
   * exactly 1200x628.
   *
   * @param string $backgroundImageAsset
   */
  public function setBackgroundImageAsset($backgroundImageAsset)
  {
    $this->backgroundImageAsset = $backgroundImageAsset;
  }
  /**
   * @return string
   */
  public function getBackgroundImageAsset()
  {
    return $this->backgroundImageAsset;
  }
  /**
   * Required. The name of the business being advertised.
   *
   * @param string $businessName
   */
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  /**
   * @return string
   */
  public function getBusinessName()
  {
    return $this->businessName;
  }
  /**
   * Required. Text giving a clear value proposition of what users expect once
   * they expand the form.
   *
   * @param string $callToActionDescription
   */
  public function setCallToActionDescription($callToActionDescription)
  {
    $this->callToActionDescription = $callToActionDescription;
  }
  /**
   * @return string
   */
  public function getCallToActionDescription()
  {
    return $this->callToActionDescription;
  }
  /**
   * Required. Pre-defined display text that encourages user to expand the form.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, LEARN_MORE, GET_QUOTE, APPLY_NOW,
   * SIGN_UP, CONTACT_US, SUBSCRIBE, DOWNLOAD, BOOK_NOW, GET_OFFER, REGISTER,
   * GET_INFO, REQUEST_DEMO, JOIN_NOW, GET_STARTED
   *
   * @param self::CALL_TO_ACTION_TYPE_* $callToActionType
   */
  public function setCallToActionType($callToActionType)
  {
    $this->callToActionType = $callToActionType;
  }
  /**
   * @return self::CALL_TO_ACTION_TYPE_*
   */
  public function getCallToActionType()
  {
    return $this->callToActionType;
  }
  /**
   * Custom disclosure shown along with Google disclaimer on the lead form.
   * Accessible to allowed customers only.
   *
   * @param string $customDisclosure
   */
  public function setCustomDisclosure($customDisclosure)
  {
    $this->customDisclosure = $customDisclosure;
  }
  /**
   * @return string
   */
  public function getCustomDisclosure()
  {
    return $this->customDisclosure;
  }
  /**
   * Ordered list of custom question fields. This field is subject to a limit of
   * 5 qualifying questions per form.
   *
   * @param GoogleAdsSearchads360V23CommonLeadFormCustomQuestionField[] $customQuestionFields
   */
  public function setCustomQuestionFields($customQuestionFields)
  {
    $this->customQuestionFields = $customQuestionFields;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLeadFormCustomQuestionField[]
   */
  public function getCustomQuestionFields()
  {
    return $this->customQuestionFields;
  }
  /**
   * Configured methods for collected lead data to be delivered to advertiser.
   * Only one method typed as WebhookDelivery can be configured.
   *
   * @param GoogleAdsSearchads360V23CommonLeadFormDeliveryMethod[] $deliveryMethods
   */
  public function setDeliveryMethods($deliveryMethods)
  {
    $this->deliveryMethods = $deliveryMethods;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLeadFormDeliveryMethod[]
   */
  public function getDeliveryMethods()
  {
    return $this->deliveryMethods;
  }
  /**
   * Required. Detailed description of the expanded form to describe what the
   * form is asking for or facilitating.
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
   * Chosen intent for the lead form, for example, more volume or more
   * qualified.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, LOW_INTENT, HIGH_INTENT
   *
   * @param self::DESIRED_INTENT_* $desiredIntent
   */
  public function setDesiredIntent($desiredIntent)
  {
    $this->desiredIntent = $desiredIntent;
  }
  /**
   * @return self::DESIRED_INTENT_*
   */
  public function getDesiredIntent()
  {
    return $this->desiredIntent;
  }
  /**
   * Ordered list of input fields. This field can be updated by reordering
   * questions, but not by adding or removing questions.
   *
   * @param GoogleAdsSearchads360V23CommonLeadFormField[] $fields
   */
  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLeadFormField[]
   */
  public function getFields()
  {
    return $this->fields;
  }
  /**
   * Required. Headline of the expanded form to describe what the form is asking
   * for or facilitating.
   *
   * @param string $headline
   */
  public function setHeadline($headline)
  {
    $this->headline = $headline;
  }
  /**
   * @return string
   */
  public function getHeadline()
  {
    return $this->headline;
  }
  /**
   * Pre-defined display text that encourages user action after the form is
   * submitted.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, VISIT_SITE, DOWNLOAD, LEARN_MORE,
   * SHOP_NOW
   *
   * @param self::POST_SUBMIT_CALL_TO_ACTION_TYPE_* $postSubmitCallToActionType
   */
  public function setPostSubmitCallToActionType($postSubmitCallToActionType)
  {
    $this->postSubmitCallToActionType = $postSubmitCallToActionType;
  }
  /**
   * @return self::POST_SUBMIT_CALL_TO_ACTION_TYPE_*
   */
  public function getPostSubmitCallToActionType()
  {
    return $this->postSubmitCallToActionType;
  }
  /**
   * Detailed description shown after form submission that describes how the
   * advertiser will follow up with the user.
   *
   * @param string $postSubmitDescription
   */
  public function setPostSubmitDescription($postSubmitDescription)
  {
    $this->postSubmitDescription = $postSubmitDescription;
  }
  /**
   * @return string
   */
  public function getPostSubmitDescription()
  {
    return $this->postSubmitDescription;
  }
  /**
   * Headline of text shown after form submission that describes how the
   * advertiser will follow up with the user.
   *
   * @param string $postSubmitHeadline
   */
  public function setPostSubmitHeadline($postSubmitHeadline)
  {
    $this->postSubmitHeadline = $postSubmitHeadline;
  }
  /**
   * @return string
   */
  public function getPostSubmitHeadline()
  {
    return $this->postSubmitHeadline;
  }
  /**
   * Required. Link to a page describing the policy on how the collected data is
   * handled by the advertiser/business.
   *
   * @param string $privacyPolicyUrl
   */
  public function setPrivacyPolicyUrl($privacyPolicyUrl)
  {
    $this->privacyPolicyUrl = $privacyPolicyUrl;
  }
  /**
   * @return string
   */
  public function getPrivacyPolicyUrl()
  {
    return $this->privacyPolicyUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLeadFormAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLeadFormAsset');
