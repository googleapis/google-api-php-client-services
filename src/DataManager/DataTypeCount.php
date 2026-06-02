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

namespace Google\Service\DataManager;

class DataTypeCount extends \Google\Model
{
  /**
   * The data type is unspecified.
   */
  public const TYPE_DATA_TYPE_UNSPECIFIED = 'DATA_TYPE_UNSPECIFIED';
  /**
   * The data is an email address.
   */
  public const TYPE_EMAIL = 'EMAIL';
  /**
   * The data is a phone number.
   */
  public const TYPE_PHONE_NUMBER = 'PHONE_NUMBER';
  /**
   * The data is a physical address.
   */
  public const TYPE_ADDRESS = 'ADDRESS';
  /**
   * The data is an IP address.
   */
  public const TYPE_IP_ADDRESS = 'IP_ADDRESS';
  /**
   * The count for this data type.
   *
   * @var string
   */
  public $count;
  /**
   * The type of data.
   *
   * @var string
   */
  public $type;

  /**
   * The count for this data type.
   *
   * @param string $count
   */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /**
   * @return string
   */
  public function getCount()
  {
    return $this->count;
  }
  /**
   * The type of data.
   *
   * Accepted values: DATA_TYPE_UNSPECIFIED, EMAIL, PHONE_NUMBER, ADDRESS,
   * IP_ADDRESS
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataTypeCount::class, 'Google_Service_DataManager_DataTypeCount');
