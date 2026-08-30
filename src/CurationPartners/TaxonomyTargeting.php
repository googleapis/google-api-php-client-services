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

namespace Google\Service\CurationPartners;

class TaxonomyTargeting extends \Google\Collection
{
  protected $collection_key = 'targetedTaxonomyIds';
  /**
   * Optional. The list of excluded content taxonomy IDs.
   *
   * @var string[]
   */
  public $excludedTaxonomyIds;
  /**
   * Optional. The list of targeted content taxonomy IDs.
   *
   * @var string[]
   */
  public $targetedTaxonomyIds;

  /**
   * Optional. The list of excluded content taxonomy IDs.
   *
   * @param string[] $excludedTaxonomyIds
   */
  public function setExcludedTaxonomyIds($excludedTaxonomyIds)
  {
    $this->excludedTaxonomyIds = $excludedTaxonomyIds;
  }
  /**
   * @return string[]
   */
  public function getExcludedTaxonomyIds()
  {
    return $this->excludedTaxonomyIds;
  }
  /**
   * Optional. The list of targeted content taxonomy IDs.
   *
   * @param string[] $targetedTaxonomyIds
   */
  public function setTargetedTaxonomyIds($targetedTaxonomyIds)
  {
    $this->targetedTaxonomyIds = $targetedTaxonomyIds;
  }
  /**
   * @return string[]
   */
  public function getTargetedTaxonomyIds()
  {
    return $this->targetedTaxonomyIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TaxonomyTargeting::class, 'Google_Service_CurationPartners_TaxonomyTargeting');
