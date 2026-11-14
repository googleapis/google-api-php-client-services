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

namespace Google\Service\ManufacturerCenter;

class RelatedProduct extends \Google\Model
{
  /**
   * Required. The identifier of the related product.
   *
   * @var string
   */
  public $identifier;
  /**
   * Required. The identifier type of the related product, such as "GTIN" or
   * "ID".
   *
   * @var string
   */
  public $identifierType;
  /**
   * Required. The relationship to the related product, such as "ACCESSORY",
   * "PART_OF_SET", "REQUIRED_PART", "OFTEN_BOUGHT_WITH", "SUBSTITUTE", or
   * "DIFFERENT_BRAND".
   *
   * @var string
   */
  public $relationshipType;

  /**
   * Required. The identifier of the related product.
   *
   * @param string $identifier
   */
  public function setIdentifier($identifier)
  {
    $this->identifier = $identifier;
  }
  /**
   * @return string
   */
  public function getIdentifier()
  {
    return $this->identifier;
  }
  /**
   * Required. The identifier type of the related product, such as "GTIN" or
   * "ID".
   *
   * @param string $identifierType
   */
  public function setIdentifierType($identifierType)
  {
    $this->identifierType = $identifierType;
  }
  /**
   * @return string
   */
  public function getIdentifierType()
  {
    return $this->identifierType;
  }
  /**
   * Required. The relationship to the related product, such as "ACCESSORY",
   * "PART_OF_SET", "REQUIRED_PART", "OFTEN_BOUGHT_WITH", "SUBSTITUTE", or
   * "DIFFERENT_BRAND".
   *
   * @param string $relationshipType
   */
  public function setRelationshipType($relationshipType)
  {
    $this->relationshipType = $relationshipType;
  }
  /**
   * @return string
   */
  public function getRelationshipType()
  {
    return $this->relationshipType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RelatedProduct::class, 'Google_Service_ManufacturerCenter_RelatedProduct');
