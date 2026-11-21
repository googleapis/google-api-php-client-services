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

namespace Google\Service\FirebaseCrashlytics;

class GenerateAlertPolicyRequest extends \Google\Model
{
  /**
   * Unknown.
   */
  public const ALERT_TYPE_ALERT_TYPE_UNSPECIFIED = 'ALERT_TYPE_UNSPECIFIED';
  /**
   * Alert for newly detected issues.
   */
  public const ALERT_TYPE_ALERT_TYPE_NEW_ISSUE = 'ALERT_TYPE_NEW_ISSUE';
  /**
   * Alert for regressed (reopened) issues.
   */
  public const ALERT_TYPE_ALERT_TYPE_REGRESSED_ISSUE = 'ALERT_TYPE_REGRESSED_ISSUE';
  /**
   * Unspecified format. Defaults to EMAIL behavior.
   */
  public const CHANNEL_FORMAT_CHANNEL_FORMAT_UNSPECIFIED = 'CHANNEL_FORMAT_UNSPECIFIED';
  /**
   * Format for email notifications. Uses the requester's language preference
   * and renders a rich HTML template.
   */
  public const CHANNEL_FORMAT_EMAIL = 'EMAIL';
  /**
   * Format for external integration channels, such as Slack, Jira, and
   * PagerDuty. Always uses en-US and renders a concise Markdown template.
   */
  public const CHANNEL_FORMAT_INTEGRATION = 'INTEGRATION';
  /**
   * Use the requester's language preference, falling back to en-US if
   * unavailable or unsupported.
   */
  public const LANGUAGE_USER_PREFERENCE = 'USER_PREFERENCE';
  /**
   * Force the alert policy to be created in en-US.
   */
  public const LANGUAGE_EN_US = 'EN_US';
  /**
   * Required. The type of alert to create.
   *
   * @var string
   */
  public $alertType;
  /**
   * Optional. Channel format to generate the alert policy for, which determines
   * both the template format and language. `EMAIL` always uses the requester's
   * language preference with a rich HTML template, and `INTEGRATION` always
   * uses en-US with a concise Markdown template. Defaults to EMAIL behavior
   * when unspecified.
   *
   * @var string
   */
  public $channelFormat;
  /**
   * Optional. Deprecated: Prefer `channel_format`, which determines both the
   * template format and language (`EMAIL` always uses the requester's language
   * preference with a rich HTML template, and `INTEGRATION` always uses en-US
   * with a concise Markdown template). Optional. Language to use for the alert
   * policy. Defaults to USER_PREFERENCE.
   *
   * @deprecated
   * @var string
   */
  public $language;

  /**
   * Required. The type of alert to create.
   *
   * Accepted values: ALERT_TYPE_UNSPECIFIED, ALERT_TYPE_NEW_ISSUE,
   * ALERT_TYPE_REGRESSED_ISSUE
   *
   * @param self::ALERT_TYPE_* $alertType
   */
  public function setAlertType($alertType)
  {
    $this->alertType = $alertType;
  }
  /**
   * @return self::ALERT_TYPE_*
   */
  public function getAlertType()
  {
    return $this->alertType;
  }
  /**
   * Optional. Channel format to generate the alert policy for, which determines
   * both the template format and language. `EMAIL` always uses the requester's
   * language preference with a rich HTML template, and `INTEGRATION` always
   * uses en-US with a concise Markdown template. Defaults to EMAIL behavior
   * when unspecified.
   *
   * Accepted values: CHANNEL_FORMAT_UNSPECIFIED, EMAIL, INTEGRATION
   *
   * @param self::CHANNEL_FORMAT_* $channelFormat
   */
  public function setChannelFormat($channelFormat)
  {
    $this->channelFormat = $channelFormat;
  }
  /**
   * @return self::CHANNEL_FORMAT_*
   */
  public function getChannelFormat()
  {
    return $this->channelFormat;
  }
  /**
   * Optional. Deprecated: Prefer `channel_format`, which determines both the
   * template format and language (`EMAIL` always uses the requester's language
   * preference with a rich HTML template, and `INTEGRATION` always uses en-US
   * with a concise Markdown template). Optional. Language to use for the alert
   * policy. Defaults to USER_PREFERENCE.
   *
   * Accepted values: USER_PREFERENCE, EN_US
   *
   * @deprecated
   * @param self::LANGUAGE_* $language
   */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /**
   * @deprecated
   * @return self::LANGUAGE_*
   */
  public function getLanguage()
  {
    return $this->language;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenerateAlertPolicyRequest::class, 'Google_Service_FirebaseCrashlytics_GenerateAlertPolicyRequest');
