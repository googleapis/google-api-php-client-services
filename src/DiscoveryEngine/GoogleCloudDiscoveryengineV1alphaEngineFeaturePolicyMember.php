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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicyMember extends \Google\Model
{
  /**
   * Not allowed.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * A single user.
   */
  public const TYPE_USER = 'USER';
  /**
   * A group of users.
   */
  public const TYPE_GROUP = 'GROUP';
  /**
   * Not checked.
   */
  public const VERIFICATION_VERIFICATION_UNSPECIFIED = 'VERIFICATION_UNSPECIFIED';
  /**
   * Found in the project's directory.
   */
  public const VERIFICATION_VERIFIED = 'VERIFIED';
  /**
   * Microsoft Graph has no such group. Saved anyway, because a custom
   * `google.groups` mapping can emit IDs that Graph doesn't know.
   */
  public const VERIFICATION_NOT_FOUND = 'NOT_FOUND';
  /**
   * The project has no directory to check against.
   */
  public const VERIFICATION_NOT_VERIFIABLE = 'NOT_VERIFIABLE';
  /**
   * The directory lookup failed. Saved anyway.
   */
  public const VERIFICATION_CHECK_FAILED = 'CHECK_FAILED';
  /**
   * Optional. Label shown in the console. Never used for evaluation.
   *
   * @var string
   */
  public $displayName;
  /**
   * Required. Identifier evaluated at serving time. Its format depends on the
   * project's identity provider: * Google identity (`GSUITE`): the group or
   * user email. For groups, the server resolves the email to a group ID on
   * write and returns the email on read. * Workforce Identity Federation
   * (`THIRD_PARTY`), groups: the value the provider emits in `google.groups`.
   * With SCIM this is the SCIM group ID; without SCIM and with the default
   * Microsoft Entra mapping it is the Entra group object ID. * Workforce
   * Identity Federation, users: the user's workforce identity subject.
   *
   * @var string
   */
  public $id;
  /**
   * Required. Kind of member.
   *
   * @var string
   */
  public $type;
  /**
   * Output only. Result of the server's directory check when the member was
   * saved.
   *
   * @var string
   */
  public $verification;

  /**
   * Optional. Label shown in the console. Never used for evaluation.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Required. Identifier evaluated at serving time. Its format depends on the
   * project's identity provider: * Google identity (`GSUITE`): the group or
   * user email. For groups, the server resolves the email to a group ID on
   * write and returns the email on read. * Workforce Identity Federation
   * (`THIRD_PARTY`), groups: the value the provider emits in `google.groups`.
   * With SCIM this is the SCIM group ID; without SCIM and with the default
   * Microsoft Entra mapping it is the Entra group object ID. * Workforce
   * Identity Federation, users: the user's workforce identity subject.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Required. Kind of member.
   *
   * Accepted values: TYPE_UNSPECIFIED, USER, GROUP
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Output only. Result of the server's directory check when the member was
   * saved.
   *
   * Accepted values: VERIFICATION_UNSPECIFIED, VERIFIED, NOT_FOUND,
   * NOT_VERIFIABLE, CHECK_FAILED
   *
   * @param self::VERIFICATION_* $verification
   */
  public function setVerification($verification)
  {
    $this->verification = $verification;
  }
  /**
   * @return self::VERIFICATION_*
   */
  public function getVerification()
  {
    return $this->verification;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicyMember::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaEngineFeaturePolicyMember');
