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

class GoogleAdsSearchads360V23ResourcesContactDetails extends \Google\Model
{
  /**
   * Output only. Consumer name if consumer provided name from Message or
   * Booking form on google.com
   *
   * @var string
   */
  public $consumerName;
  /**
   * Output only. Consumer email address.
   *
   * @var string
   */
  public $email;
  /**
   * Output only. Phone number of the consumer for the lead. This can be a real
   * phone number or a tracking number. The phone number is returned in E164
   * format. See https://support.google.com/google-ads/answer/16355235?hl=en to
   * learn more. Example: +16504519489.
   *
   * @var string
   */
  public $phoneNumber;

  /**
   * Output only. Consumer name if consumer provided name from Message or
   * Booking form on google.com
   *
   * @param string $consumerName
   */
  public function setConsumerName($consumerName)
  {
    $this->consumerName = $consumerName;
  }
  /**
   * @return string
   */
  public function getConsumerName()
  {
    return $this->consumerName;
  }
  /**
   * Output only. Consumer email address.
   *
   * @param string $email
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }
  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }
  /**
   * Output only. Phone number of the consumer for the lead. This can be a real
   * phone number or a tracking number. The phone number is returned in E164
   * format. See https://support.google.com/google-ads/answer/16355235?hl=en to
   * learn more. Example: +16504519489.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesContactDetails::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesContactDetails');
