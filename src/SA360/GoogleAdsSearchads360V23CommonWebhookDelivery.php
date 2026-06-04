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

class GoogleAdsSearchads360V23CommonWebhookDelivery extends \Google\Model
{
  /**
   * Webhook url specified by advertiser to send the lead.
   *
   * @var string
   */
  public $advertiserWebhookUrl;
  /**
   * Anti-spoofing secret set by the advertiser as part of the webhook payload.
   *
   * @var string
   */
  public $googleSecret;
  /**
   * The schema version that this delivery instance will use.
   *
   * @var string
   */
  public $payloadSchemaVersion;

  /**
   * Webhook url specified by advertiser to send the lead.
   *
   * @param string $advertiserWebhookUrl
   */
  public function setAdvertiserWebhookUrl($advertiserWebhookUrl)
  {
    $this->advertiserWebhookUrl = $advertiserWebhookUrl;
  }
  /**
   * @return string
   */
  public function getAdvertiserWebhookUrl()
  {
    return $this->advertiserWebhookUrl;
  }
  /**
   * Anti-spoofing secret set by the advertiser as part of the webhook payload.
   *
   * @param string $googleSecret
   */
  public function setGoogleSecret($googleSecret)
  {
    $this->googleSecret = $googleSecret;
  }
  /**
   * @return string
   */
  public function getGoogleSecret()
  {
    return $this->googleSecret;
  }
  /**
   * The schema version that this delivery instance will use.
   *
   * @param string $payloadSchemaVersion
   */
  public function setPayloadSchemaVersion($payloadSchemaVersion)
  {
    $this->payloadSchemaVersion = $payloadSchemaVersion;
  }
  /**
   * @return string
   */
  public function getPayloadSchemaVersion()
  {
    return $this->payloadSchemaVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonWebhookDelivery::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonWebhookDelivery');
