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

class FieldWarning extends \Google\Model
{
  public const REASON_WARNING_REASON_UNSPECIFIED = 'WARNING_REASON_UNSPECIFIED';
  public const REASON_WARNING_REASON_CUSTOM_VARIABLE_NOT_ENABLED = 'WARNING_REASON_CUSTOM_VARIABLE_NOT_ENABLED';
  public const REASON_WARNING_REASON_CUSTOM_VARIABLE_NOT_PREDEFINED = 'WARNING_REASON_CUSTOM_VARIABLE_NOT_PREDEFINED';
  public const REASON_WARNING_REASON_CART_DATA_NOT_SUPPORTED_WITH_GBRAID_OR_WBRAID = 'WARNING_REASON_CART_DATA_NOT_SUPPORTED_WITH_GBRAID_OR_WBRAID';
  public const REASON_WARNING_REASON_CART_DATA_ITEM_MERCHANT_PRODUCT_ID_MISSING = 'WARNING_REASON_CART_DATA_ITEM_MERCHANT_PRODUCT_ID_MISSING';
  public const REASON_WARNING_REASON_CART_DATA_ITEM_UNIT_PRICE_MISSING = 'WARNING_REASON_CART_DATA_ITEM_UNIT_PRICE_MISSING';
  public const REASON_WARNING_REASON_GENERIC = 'WARNING_REASON_GENERIC';
  public const REASON_WARNING_REASON_INVALID_CLIENT_ID = 'WARNING_REASON_INVALID_CLIENT_ID';
  public const REASON_WARNING_REASON_INVALID_SUBDIVISION_CODE = 'WARNING_REASON_INVALID_SUBDIVISION_CODE';
  public const REASON_WARNING_REASON_INVALID_REGION_CODE = 'WARNING_REASON_INVALID_REGION_CODE';
  public const REASON_WARNING_REASON_INVALID_SUBCONTINENT_CODE = 'WARNING_REASON_INVALID_SUBCONTINENT_CODE';
  public const REASON_WARNING_REASON_INVALID_CONTINENT_CODE = 'WARNING_REASON_INVALID_CONTINENT_CODE';
  public const REASON_WARNING_REASON_INVALID_DEVICE_CATEGORY = 'WARNING_REASON_INVALID_DEVICE_CATEGORY';
  public const REASON_WARNING_REASON_INVALID_DEVICE_SCREEN_RESOLUTION = 'WARNING_REASON_INVALID_DEVICE_SCREEN_RESOLUTION';
  public const REASON_WARNING_REASON_INVALID_MERCHANT_ID = 'WARNING_REASON_INVALID_MERCHANT_ID';
  public const REASON_WARNING_REASON_INVALID_NUMBER_FORMAT = 'WARNING_REASON_INVALID_NUMBER_FORMAT';
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $field;
  /**
   * @var string
   */
  public $reason;

  /**
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
   * @param self::REASON_* $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return self::REASON_*
   */
  public function getReason()
  {
    return $this->reason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldWarning::class, 'Google_Service_DataManager_FieldWarning');
