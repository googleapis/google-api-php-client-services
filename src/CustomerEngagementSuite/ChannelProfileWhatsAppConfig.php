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

class ChannelProfileWhatsAppConfig extends \Google\Model
{
  /**
   * Required. The Meta phone number ID.
   *
   * @var string
   */
  public $phoneNumberId;
  /**
   * Required. The WhatsApp Business Account ID.
   *
   * @var string
   */
  public $wabaId;

  /**
   * Required. The Meta phone number ID.
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
   * Required. The WhatsApp Business Account ID.
   *
   * @param string $wabaId
   */
  public function setWabaId($wabaId)
  {
    $this->wabaId = $wabaId;
  }
  /**
   * @return string
   */
  public function getWabaId()
  {
    return $this->wabaId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChannelProfileWhatsAppConfig::class, 'Google_Service_CustomerEngagementSuite_ChannelProfileWhatsAppConfig');
