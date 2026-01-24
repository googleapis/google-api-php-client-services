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

namespace Google\Service\ThreatIntelligenceService;

class CustomerProfileContactInfo extends \Google\Collection
{
  protected $collection_key = 'citationIds';
  /**
   * The address of the contact.
   *
   * @var string
   */
  public $address;
  /**
   * Optional. The citation ids for the contact information.
   *
   * @var string[]
   */
  public $citationIds;
  /**
   * The email address of the contact.
   *
   * @var string
   */
  public $email;
  /**
   * Optional. The name of the contact.
   *
   * @var string
   */
  public $label;
  /**
   * The other contact information.
   *
   * @var string
   */
  public $other;
  /**
   * The phone number of the contact.
   *
   * @var string
   */
  public $phone;

  /**
   * The address of the contact.
   *
   * @param string $address
   */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /**
   * @return string
   */
  public function getAddress()
  {
    return $this->address;
  }
  /**
   * Optional. The citation ids for the contact information.
   *
   * @param string[] $citationIds
   */
  public function setCitationIds($citationIds)
  {
    $this->citationIds = $citationIds;
  }
  /**
   * @return string[]
   */
  public function getCitationIds()
  {
    return $this->citationIds;
  }
  /**
   * The email address of the contact.
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
   * Optional. The name of the contact.
   *
   * @param string $label
   */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /**
   * @return string
   */
  public function getLabel()
  {
    return $this->label;
  }
  /**
   * The other contact information.
   *
   * @param string $other
   */
  public function setOther($other)
  {
    $this->other = $other;
  }
  /**
   * @return string
   */
  public function getOther()
  {
    return $this->other;
  }
  /**
   * The phone number of the contact.
   *
   * @param string $phone
   */
  public function setPhone($phone)
  {
    $this->phone = $phone;
  }
  /**
   * @return string
   */
  public function getPhone()
  {
    return $this->phone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomerProfileContactInfo::class, 'Google_Service_ThreatIntelligenceService_CustomerProfileContactInfo');
