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

class GoogleAdsSearchads360V23ResourcesCustomizerAttribute extends \Google\Model
{
  /**
   * The status has not been specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The customizer attribute is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The customizer attribute is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * The status has not been specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Text customizer.
   */
  public const TYPE_TEXT = 'TEXT';
  /**
   * Number customizer.
   */
  public const TYPE_NUMBER = 'NUMBER';
  /**
   * Price customizer consisting of a number and a currency.
   */
  public const TYPE_PRICE = 'PRICE';
  /**
   * Percentage customizer consisting of a number and a '%'.
   */
  public const TYPE_PERCENT = 'PERCENT';
  /**
   * Output only. The ID of the customizer attribute.
   *
   * @var string
   */
  public $id;
  /**
   * Required. Immutable. Name of the customizer attribute. Required. It must
   * have a minimum length of 1 and maximum length of 40. Name of an enabled
   * customizer attribute must be unique (case insensitive).
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the customizer attribute. Customizer
   * Attribute resource names have the form:
   * `customers/{customer_id}/customizerAttributes/{customizer_attribute_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of the customizer attribute.
   *
   * @var string
   */
  public $status;
  /**
   * Immutable. The type of the customizer attribute.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The ID of the customizer attribute.
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
   * Required. Immutable. Name of the customizer attribute. Required. It must
   * have a minimum length of 1 and maximum length of 40. Name of an enabled
   * customizer attribute must be unique (case insensitive).
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Immutable. The resource name of the customizer attribute. Customizer
   * Attribute resource names have the form:
   * `customers/{customer_id}/customizerAttributes/{customizer_attribute_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. The status of the customizer attribute.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, REMOVED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Immutable. The type of the customizer attribute.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TEXT, NUMBER, PRICE, PERCENT
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
class_alias(GoogleAdsSearchads360V23ResourcesCustomizerAttribute::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomizerAttribute');
