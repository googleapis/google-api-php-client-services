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

namespace Google\Service\DatabaseMigrationService;

class FieldViolation extends \Google\Model
{
  /**
   * A description of why the request element is bad.
   *
   * @var string
   */
  public $description;
  /**
   * A path that leads to a field in the request body. The value will be a
   * sequence of dot-separated identifiers that identify a protocol buffer
   * field. Consider the following: message CreateContactRequest { message
   * EmailAddress { enum Type { TYPE_UNSPECIFIED = 0; HOME = 1; WORK = 2; }
   * optional string email = 1; repeated EmailType type = 2; } string full_name
   * = 1; repeated EmailAddress email_addresses = 2; } In this example, in proto
   * `field` could take one of the following values: * `full_name` for a
   * violation in the `full_name` value * `email_addresses[1].email` for a
   * violation in the `email` field of the first `email_addresses` message *
   * `email_addresses[3].type[2]` for a violation in the second `type` value in
   * the third `email_addresses` message. In JSON, the same values are
   * represented as: * `fullName` for a violation in the `fullName` value *
   * `emailAddresses[1].email` for a violation in the `email` field of the first
   * `emailAddresses` message * `emailAddresses[3].type[2]` for a violation in
   * the second `type` value in the third `emailAddresses` message.
   *
   * @var string
   */
  public $field;
  protected $localizedMessageType = LocalizedMessage::class;
  protected $localizedMessageDataType = '';
  /**
   * The reason of the field-level error. This is a constant value that
   * identifies the proximate cause of the field-level error. It should uniquely
   * identify the type of the FieldViolation within the scope of the
   * google.rpc.ErrorInfo.domain. This should be at most 63 characters and match
   * a regular expression of `A-Z+[A-Z0-9]`, which represents UPPER_SNAKE_CASE.
   *
   * @var string
   */
  public $reason;

  /**
   * A description of why the request element is bad.
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
   * A path that leads to a field in the request body. The value will be a
   * sequence of dot-separated identifiers that identify a protocol buffer
   * field. Consider the following: message CreateContactRequest { message
   * EmailAddress { enum Type { TYPE_UNSPECIFIED = 0; HOME = 1; WORK = 2; }
   * optional string email = 1; repeated EmailType type = 2; } string full_name
   * = 1; repeated EmailAddress email_addresses = 2; } In this example, in proto
   * `field` could take one of the following values: * `full_name` for a
   * violation in the `full_name` value * `email_addresses[1].email` for a
   * violation in the `email` field of the first `email_addresses` message *
   * `email_addresses[3].type[2]` for a violation in the second `type` value in
   * the third `email_addresses` message. In JSON, the same values are
   * represented as: * `fullName` for a violation in the `fullName` value *
   * `emailAddresses[1].email` for a violation in the `email` field of the first
   * `emailAddresses` message * `emailAddresses[3].type[2]` for a violation in
   * the second `type` value in the third `emailAddresses` message.
   *
   * @param string $field
   */
  public function setField($field)
  {
    $this->field = $field;
  }
  /**
   * @return string
   */
  public function getField()
  {
    return $this->field;
  }
  /**
   * Provides a localized error message for field-level errors that is safe to
   * return to the API consumer.
   *
   * @param LocalizedMessage $localizedMessage
   */
  public function setLocalizedMessage(LocalizedMessage $localizedMessage)
  {
    $this->localizedMessage = $localizedMessage;
  }
  /**
   * @return LocalizedMessage
   */
  public function getLocalizedMessage()
  {
    return $this->localizedMessage;
  }
  /**
   * The reason of the field-level error. This is a constant value that
   * identifies the proximate cause of the field-level error. It should uniquely
   * identify the type of the FieldViolation within the scope of the
   * google.rpc.ErrorInfo.domain. This should be at most 63 characters and match
   * a regular expression of `A-Z+[A-Z0-9]`, which represents UPPER_SNAKE_CASE.
   *
   * @param string $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return string
   */
  public function getReason()
  {
    return $this->reason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldViolation::class, 'Google_Service_DatabaseMigrationService_FieldViolation');
