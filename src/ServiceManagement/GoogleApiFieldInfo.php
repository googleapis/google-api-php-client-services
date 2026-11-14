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

namespace Google\Service\ServiceManagement;

class GoogleApiFieldInfo extends \Google\Collection
{
  /**
   * Default, unspecified value.
   */
  public const FORMAT_FORMAT_UNSPECIFIED = 'FORMAT_UNSPECIFIED';
  /**
   * Universally Unique Identifier, version 4, value as defined by
   * https://datatracker.ietf.org/doc/html/rfc4122. The value may be normalized
   * to entirely lowercase letters. For example, the value
   * `F47AC10B-58CC-0372-8567-0E02B2C3D479` would be normalized to
   * `f47ac10b-58cc-0372-8567-0e02b2c3d479`.
   */
  public const FORMAT_UUID4 = 'UUID4';
  /**
   * Internet Protocol v4 value as defined by [RFC
   * 791](https://datatracker.ietf.org/doc/html/rfc791). The value may be
   * condensed, with leading zeros in each octet stripped. For example,
   * `001.022.233.040` would be condensed to `1.22.233.40`.
   */
  public const FORMAT_IPV4 = 'IPV4';
  /**
   * Internet Protocol v6 value as defined by [RFC
   * 2460](https://datatracker.ietf.org/doc/html/rfc2460). The value may be
   * normalized to entirely lowercase letters with zeros compressed, following
   * [RFC 5952](https://datatracker.ietf.org/doc/html/rfc5952). For example, the
   * value `2001:0DB8:0::0` would be normalized to `2001:db8::`.
   */
  public const FORMAT_IPV6 = 'IPV6';
  /**
   * An IP address in either v4 or v6 format as described by the individual
   * values defined herein. See the comments on the IPV4 and IPV6 types for
   * allowed normalizations of each.
   */
  public const FORMAT_IPV4_OR_IPV6 = 'IPV4_OR_IPV6';
  protected $collection_key = 'referencedTypes';
  /**
   * The standard format of a field value. This does not explicitly configure
   * any API consumer, just documents the API's format for the field it is
   * applied to.
   *
   * @var string
   */
  public $format;
  protected $referencedTypesType = TypeReference::class;
  protected $referencedTypesDataType = 'array';

  /**
   * The standard format of a field value. This does not explicitly configure
   * any API consumer, just documents the API's format for the field it is
   * applied to.
   *
   * Accepted values: FORMAT_UNSPECIFIED, UUID4, IPV4, IPV6, IPV4_OR_IPV6
   *
   * @param self::FORMAT_* $format
   */
  public function setFormat($format)
  {
    $this->format = $format;
  }
  /**
   * @return self::FORMAT_*
   */
  public function getFormat()
  {
    return $this->format;
  }
  /**
   * The type(s) that the annotated, generic field may represent. Currently,
   * this must only be used on fields of type `google.protobuf.Any`. Supporting
   * other generic types may be considered in the future.
   *
   * @param TypeReference[] $referencedTypes
   */
  public function setReferencedTypes($referencedTypes)
  {
    $this->referencedTypes = $referencedTypes;
  }
  /**
   * @return TypeReference[]
   */
  public function getReferencedTypes()
  {
    return $this->referencedTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleApiFieldInfo::class, 'Google_Service_ServiceManagement_GoogleApiFieldInfo');
