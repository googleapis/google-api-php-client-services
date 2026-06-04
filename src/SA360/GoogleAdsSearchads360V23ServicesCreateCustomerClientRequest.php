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

class GoogleAdsSearchads360V23ServicesCreateCustomerClientRequest extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ACCESS_ROLE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ACCESS_ROLE_UNKNOWN = 'UNKNOWN';
  /**
   * Owns its account and can control the addition of other users.
   */
  public const ACCESS_ROLE_ADMIN = 'ADMIN';
  /**
   * Can modify , but can't affect other users.
   */
  public const ACCESS_ROLE_STANDARD = 'STANDARD';
  /**
   * Can view and account changes, but cannot make edits.
   */
  public const ACCESS_ROLE_READ_ONLY = 'READ_ONLY';
  /**
   * Role for \"email only\" access. Represents an email recipient rather than a
   * true User entity.
   */
  public const ACCESS_ROLE_EMAIL_ONLY = 'EMAIL_ONLY';
  /**
   * The proposed role of user on the created client customer. Accessible only
   * to customers on the allow-list.
   *
   * @var string
   */
  public $accessRole;
  protected $customerClientType = GoogleAdsSearchads360V23ResourcesCustomer::class;
  protected $customerClientDataType = '';
  /**
   * Email address of the user who should be invited on the created client
   * customer. Accessible only to customers on the allow-list.
   *
   * @var string
   */
  public $emailAddress;
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * The proposed role of user on the created client customer. Accessible only
   * to customers on the allow-list.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ADMIN, STANDARD, READ_ONLY,
   * EMAIL_ONLY
   *
   * @param self::ACCESS_ROLE_* $accessRole
   */
  public function setAccessRole($accessRole)
  {
    $this->accessRole = $accessRole;
  }
  /**
   * @return self::ACCESS_ROLE_*
   */
  public function getAccessRole()
  {
    return $this->accessRole;
  }
  /**
   * Required. The new client customer to create. The resource name on this
   * customer will be ignored.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomer $customerClient
   */
  public function setCustomerClient(GoogleAdsSearchads360V23ResourcesCustomer $customerClient)
  {
    $this->customerClient = $customerClient;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomer
   */
  public function getCustomerClient()
  {
    return $this->customerClient;
  }
  /**
   * Email address of the user who should be invited on the created client
   * customer. Accessible only to customers on the allow-list.
   *
   * @param string $emailAddress
   */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /**
   * @return string
   */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCreateCustomerClientRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCreateCustomerClientRequest');
