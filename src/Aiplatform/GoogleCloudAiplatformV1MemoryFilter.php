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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1MemoryFilter extends \Google\Model
{
  /**
   * Unspecified operator. Defaults to EQUAL.
   */
  public const OP_OPERATOR_UNSPECIFIED = 'OPERATOR_UNSPECIFIED';
  /**
   * Equal to.
   */
  public const OP_EQUAL = 'EQUAL';
  /**
   * Greater than.
   */
  public const OP_GREATER_THAN = 'GREATER_THAN';
  /**
   * Less than.
   */
  public const OP_LESS_THAN = 'LESS_THAN';
  /**
   * Key of the filter. For example, "author" would apply to `metadata` entries
   * with the key "author".
   *
   * @var string
   */
  public $key;
  /**
   * If true, the filter will be negated.
   *
   * @var bool
   */
  public $negate;
  /**
   * Operator to apply to the filter. If not set, then EQUAL will be used.
   *
   * @var string
   */
  public $op;
  protected $valueType = GoogleCloudAiplatformV1MemoryMetadataValue::class;
  protected $valueDataType = '';

  /**
   * Key of the filter. For example, "author" would apply to `metadata` entries
   * with the key "author".
   *
   * @param string $key
   */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /**
   * @return string
   */
  public function getKey()
  {
    return $this->key;
  }
  /**
   * If true, the filter will be negated.
   *
   * @param bool $negate
   */
  public function setNegate($negate)
  {
    $this->negate = $negate;
  }
  /**
   * @return bool
   */
  public function getNegate()
  {
    return $this->negate;
  }
  /**
   * Operator to apply to the filter. If not set, then EQUAL will be used.
   *
   * Accepted values: OPERATOR_UNSPECIFIED, EQUAL, GREATER_THAN, LESS_THAN
   *
   * @param self::OP_* $op
   */
  public function setOp($op)
  {
    $this->op = $op;
  }
  /**
   * @return self::OP_*
   */
  public function getOp()
  {
    return $this->op;
  }
  /**
   * Value to compare to.
   *
   * @param GoogleCloudAiplatformV1MemoryMetadataValue $value
   */
  public function setValue(GoogleCloudAiplatformV1MemoryMetadataValue $value)
  {
    $this->value = $value;
  }
  /**
   * @return GoogleCloudAiplatformV1MemoryMetadataValue
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1MemoryFilter::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1MemoryFilter');
