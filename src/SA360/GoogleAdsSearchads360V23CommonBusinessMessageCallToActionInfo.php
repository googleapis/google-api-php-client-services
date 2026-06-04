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

class GoogleAdsSearchads360V23CommonBusinessMessageCallToActionInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CALL_TO_ACTION_SELECTION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CALL_TO_ACTION_SELECTION_UNKNOWN = 'UNKNOWN';
  /**
   * Apply now.
   */
  public const CALL_TO_ACTION_SELECTION_APPLY_NOW = 'APPLY_NOW';
  /**
   * Book now.
   */
  public const CALL_TO_ACTION_SELECTION_BOOK_NOW = 'BOOK_NOW';
  /**
   * Contact us.
   */
  public const CALL_TO_ACTION_SELECTION_CONTACT_US = 'CONTACT_US';
  /**
   * Get info.
   */
  public const CALL_TO_ACTION_SELECTION_GET_INFO = 'GET_INFO';
  /**
   * Get offer.
   */
  public const CALL_TO_ACTION_SELECTION_GET_OFFER = 'GET_OFFER';
  /**
   * Get quote.
   */
  public const CALL_TO_ACTION_SELECTION_GET_QUOTE = 'GET_QUOTE';
  /**
   * Get started.
   */
  public const CALL_TO_ACTION_SELECTION_GET_STARTED = 'GET_STARTED';
  /**
   * Learn more.
   */
  public const CALL_TO_ACTION_SELECTION_LEARN_MORE = 'LEARN_MORE';
  /**
   * Required. Text providing a clear value proposition of what users expect
   * once they take the action. Examples: 'Message us for a quote', 'Ask our
   * expert team'.
   *
   * @var string
   */
  public $callToActionDescription;
  /**
   * Required. Pre-defined call to action text.
   *
   * @var string
   */
  public $callToActionSelection;

  /**
   * Required. Text providing a clear value proposition of what users expect
   * once they take the action. Examples: 'Message us for a quote', 'Ask our
   * expert team'.
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
   * Required. Pre-defined call to action text.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, APPLY_NOW, BOOK_NOW, CONTACT_US,
   * GET_INFO, GET_OFFER, GET_QUOTE, GET_STARTED, LEARN_MORE
   *
   * @param self::CALL_TO_ACTION_SELECTION_* $callToActionSelection
   */
  public function setCallToActionSelection($callToActionSelection)
  {
    $this->callToActionSelection = $callToActionSelection;
  }
  /**
   * @return self::CALL_TO_ACTION_SELECTION_*
   */
  public function getCallToActionSelection()
  {
    return $this->callToActionSelection;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonBusinessMessageCallToActionInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonBusinessMessageCallToActionInfo');
