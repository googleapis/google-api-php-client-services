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

namespace Google\Service\CloudNumberRegistry;

class CustomRange extends \Google\Collection
{
  protected $collection_key = 'attributes';
  protected $attributesType = Attribute::class;
  protected $attributesDataType = 'array';
  /**
   * Optional. The description of the CustomRange. Do not include sensitive
   * information, such as personally identifiable information or credentials, in
   * the `description` field.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. The IPv4 CIDR range of the CustomRange.
   *
   * @var string
   */
  public $ipv4CidrRange;
  /**
   * Optional. The IPv6 CIDR range of the CustomRange.
   *
   * @var string
   */
  public $ipv6CidrRange;
  /**
   * Optional. User-defined labels.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Required. Identifier. The resource name of the CustomRange, in the format
   * `projects/{project}/locations/{location}/customRanges/{custom_range}`.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The resource name of the parent CustomRange, in the format
   * `projects/{project}/locations/{location}/customRanges/{custom_range}`. If
   * specified, the parent CustomRange must be in the same RegistryBook. This
   * field is mutually exclusive with the `realm` field, as the Realm is
   * inherited from the parent CustomRange.
   *
   * @var string
   */
  public $parentRange;
  /**
   * Optional. The resource name of the Realm associated with the CustomRange,
   * in the format `projects/{project}/locations/{location}/realms/{realm}`. The
   * Realm must be in the same project as the CustomRange. This field must not
   * be set if the `parent_range` field is set, as the Realm will be inherited
   * from the parent CustomRange.
   *
   * @var string
   */
  public $realm;
  /**
   * Output only. The RegistryBook of the CustomRange. This field is inherited
   * from the Realm or parent CustomRange depending on which one is specified.
   *
   * @var string
   */
  public $registryBook;

  /**
   * Optional. The attributes of the CustomRange.
   *
   * @param Attribute[] $attributes
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return Attribute[]
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /**
   * Optional. The description of the CustomRange. Do not include sensitive
   * information, such as personally identifiable information or credentials, in
   * the `description` field.
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
   * Optional. The IPv4 CIDR range of the CustomRange.
   *
   * @param string $ipv4CidrRange
   */
  public function setIpv4CidrRange($ipv4CidrRange)
  {
    $this->ipv4CidrRange = $ipv4CidrRange;
  }
  /**
   * @return string
   */
  public function getIpv4CidrRange()
  {
    return $this->ipv4CidrRange;
  }
  /**
   * Optional. The IPv6 CIDR range of the CustomRange.
   *
   * @param string $ipv6CidrRange
   */
  public function setIpv6CidrRange($ipv6CidrRange)
  {
    $this->ipv6CidrRange = $ipv6CidrRange;
  }
  /**
   * @return string
   */
  public function getIpv6CidrRange()
  {
    return $this->ipv6CidrRange;
  }
  /**
   * Optional. User-defined labels.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Required. Identifier. The resource name of the CustomRange, in the format
   * `projects/{project}/locations/{location}/customRanges/{custom_range}`.
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
   * Optional. The resource name of the parent CustomRange, in the format
   * `projects/{project}/locations/{location}/customRanges/{custom_range}`. If
   * specified, the parent CustomRange must be in the same RegistryBook. This
   * field is mutually exclusive with the `realm` field, as the Realm is
   * inherited from the parent CustomRange.
   *
   * @param string $parentRange
   */
  public function setParentRange($parentRange)
  {
    $this->parentRange = $parentRange;
  }
  /**
   * @return string
   */
  public function getParentRange()
  {
    return $this->parentRange;
  }
  /**
   * Optional. The resource name of the Realm associated with the CustomRange,
   * in the format `projects/{project}/locations/{location}/realms/{realm}`. The
   * Realm must be in the same project as the CustomRange. This field must not
   * be set if the `parent_range` field is set, as the Realm will be inherited
   * from the parent CustomRange.
   *
   * @param string $realm
   */
  public function setRealm($realm)
  {
    $this->realm = $realm;
  }
  /**
   * @return string
   */
  public function getRealm()
  {
    return $this->realm;
  }
  /**
   * Output only. The RegistryBook of the CustomRange. This field is inherited
   * from the Realm or parent CustomRange depending on which one is specified.
   *
   * @param string $registryBook
   */
  public function setRegistryBook($registryBook)
  {
    $this->registryBook = $registryBook;
  }
  /**
   * @return string
   */
  public function getRegistryBook()
  {
    return $this->registryBook;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomRange::class, 'Google_Service_CloudNumberRegistry_CustomRange');
