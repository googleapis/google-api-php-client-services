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

namespace Google\Service\CustomerEngagementSuite;

class OmnichannelIntegrationConfigWhatsappConfig extends \Google\Model
{
  /**
   * The Meta Business Portfolio (MBP) ID.
   * https://www.facebook.com/business/help/1710077379203657
   *
   * @var string
   */
  public $metaBusinessPortfolioId;
  /**
   * The phone number used for sending/receiving messages.
   *
   * @var string
   */
  public $phoneNumber;
  /**
   * The Phone Number ID associated with the WhatsApp Business Account.
   *
   * @var string
   */
  public $phoneNumberId;
  /**
   * The verify token configured in the Meta App Dashboard for webhook
   * verification.
   *
   * @var string
   */
  public $webhookVerifyToken;
  /**
   * The customer's WhatsApp Business Account (WABA) ID.
   *
   * @var string
   */
  public $whatsappBusinessAccountId;
  /**
   * The access token for authenticating API calls to the WhatsApp Cloud API.
   * https://developers.facebook.com/docs/whatsapp/business-management-api/get-
   * started/#business-integration-system-user-access-tokens
   *
   * @var string
   */
  public $whatsappBusinessToken;

  /**
   * The Meta Business Portfolio (MBP) ID.
   * https://www.facebook.com/business/help/1710077379203657
   *
   * @param string $metaBusinessPortfolioId
   */
  public function setMetaBusinessPortfolioId($metaBusinessPortfolioId)
  {
    $this->metaBusinessPortfolioId = $metaBusinessPortfolioId;
  }
  /**
   * @return string
   */
  public function getMetaBusinessPortfolioId()
  {
    return $this->metaBusinessPortfolioId;
  }
  /**
   * The phone number used for sending/receiving messages.
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
   * The Phone Number ID associated with the WhatsApp Business Account.
   *
   * @param string $phoneNumberId
   */
  public function setPhoneNumberId($phoneNumberId)
  {
    $this->phoneNumberId = $phoneNumberId;
  }
  /**
   * @return string
   */
  public function getPhoneNumberId()
  {
    return $this->phoneNumberId;
  }
  /**
   * The verify token configured in the Meta App Dashboard for webhook
   * verification.
   *
   * @param string $webhookVerifyToken
   */
  public function setWebhookVerifyToken($webhookVerifyToken)
  {
    $this->webhookVerifyToken = $webhookVerifyToken;
  }
  /**
   * @return string
   */
  public function getWebhookVerifyToken()
  {
    return $this->webhookVerifyToken;
  }
  /**
   * The customer's WhatsApp Business Account (WABA) ID.
   *
   * @param string $whatsappBusinessAccountId
   */
  public function setWhatsappBusinessAccountId($whatsappBusinessAccountId)
  {
    $this->whatsappBusinessAccountId = $whatsappBusinessAccountId;
  }
  /**
   * @return string
   */
  public function getWhatsappBusinessAccountId()
  {
    return $this->whatsappBusinessAccountId;
  }
  /**
   * The access token for authenticating API calls to the WhatsApp Cloud API.
   * https://developers.facebook.com/docs/whatsapp/business-management-api/get-
   * started/#business-integration-system-user-access-tokens
   *
   * @param string $whatsappBusinessToken
   */
  public function setWhatsappBusinessToken($whatsappBusinessToken)
  {
    $this->whatsappBusinessToken = $whatsappBusinessToken;
  }
  /**
   * @return string
   */
  public function getWhatsappBusinessToken()
  {
    return $this->whatsappBusinessToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OmnichannelIntegrationConfigWhatsappConfig::class, 'Google_Service_CustomerEngagementSuite_OmnichannelIntegrationConfigWhatsappConfig');
