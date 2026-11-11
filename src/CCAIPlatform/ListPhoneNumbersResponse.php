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

namespace Google\Service\CCAIPlatform;

class ListPhoneNumbersResponse extends \Google\Collection
{
  protected $collection_key = 'phoneNumbers';
  /**
   * Token identifying the next page of results.
   *
   * @var string
   */
  public $nextPageToken;
  protected $phoneNumbersType = PhoneNumber::class;
  protected $phoneNumbersDataType = 'array';

  /**
   * Token identifying the next page of results.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * The list of phone numbers allocated to the ContactCenter.
   *
   * @param PhoneNumber[] $phoneNumbers
   */
  public function setPhoneNumbers($phoneNumbers)
  {
    $this->phoneNumbers = $phoneNumbers;
  }
  /**
   * @return PhoneNumber[]
   */
  public function getPhoneNumbers()
  {
    return $this->phoneNumbers;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListPhoneNumbersResponse::class, 'Google_Service_CCAIPlatform_ListPhoneNumbersResponse');
