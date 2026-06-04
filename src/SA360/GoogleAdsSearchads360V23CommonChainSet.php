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

class GoogleAdsSearchads360V23CommonChainSet extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const RELATIONSHIP_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const RELATIONSHIP_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Auto dealer relationship.
   */
  public const RELATIONSHIP_TYPE_AUTO_DEALERS = 'AUTO_DEALERS';
  /**
   * General retailer relationship.
   */
  public const RELATIONSHIP_TYPE_GENERAL_RETAILERS = 'GENERAL_RETAILERS';
  protected $collection_key = 'chains';
  protected $chainsType = GoogleAdsSearchads360V23CommonChainFilter::class;
  protected $chainsDataType = 'array';
  /**
   * Required. Immutable. Relationship type the specified chains have with this
   * advertiser.
   *
   * @var string
   */
  public $relationshipType;

  /**
   * Required. A list of chain level filters, all filters are OR'ed together.
   *
   * @param GoogleAdsSearchads360V23CommonChainFilter[] $chains
   */
  public function setChains($chains)
  {
    $this->chains = $chains;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonChainFilter[]
   */
  public function getChains()
  {
    return $this->chains;
  }
  /**
   * Required. Immutable. Relationship type the specified chains have with this
   * advertiser.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AUTO_DEALERS, GENERAL_RETAILERS
   *
   * @param self::RELATIONSHIP_TYPE_* $relationshipType
   */
  public function setRelationshipType($relationshipType)
  {
    $this->relationshipType = $relationshipType;
  }
  /**
   * @return self::RELATIONSHIP_TYPE_*
   */
  public function getRelationshipType()
  {
    return $this->relationshipType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonChainSet::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonChainSet');
