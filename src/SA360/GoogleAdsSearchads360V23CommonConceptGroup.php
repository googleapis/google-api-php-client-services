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

class GoogleAdsSearchads360V23CommonConceptGroup extends \Google\Model
{
  /**
   * The concept group classification different from brand/non-brand. This is a
   * catch all bucket for all classifications that are none of the below.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The concept group classification is based on BRAND.
   */
  public const TYPE_BRAND = 'BRAND';
  /**
   * The concept group classification based on BRAND, that didn't fit well with
   * the BRAND classifications. These are generally outliers and can have very
   * few keywords in this type of classification.
   */
  public const TYPE_OTHER_BRANDS = 'OTHER_BRANDS';
  /**
   * These concept group classification is not based on BRAND. This is returned
   * for generic keywords that don't have a brand association.
   */
  public const TYPE_NON_BRAND = 'NON_BRAND';
  /**
   * The concept group name.
   *
   * @var string
   */
  public $name;
  /**
   * The concept group type.
   *
   * @var string
   */
  public $type;

  /**
   * The concept group name.
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
   * The concept group type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BRAND, OTHER_BRANDS, NON_BRAND
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
class_alias(GoogleAdsSearchads360V23CommonConceptGroup::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonConceptGroup');
