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

namespace Google\Service\SaaSServiceManagement;

class TierMapping extends \Google\Collection
{
  protected $collection_key = 'unitKinds';
  /**
   * Required. The tier.
   *
   * @var string
   */
  public $tier;
  protected $unitKindsType = TierUnitKind::class;
  protected $unitKindsDataType = 'array';

  /**
   * Required. The tier.
   *
   * @param string $tier
   */
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  /**
   * @return string
   */
  public function getTier()
  {
    return $this->tier;
  }
  /**
   * @param TierUnitKind[] $unitKinds
   */
  public function setUnitKinds($unitKinds)
  {
    $this->unitKinds = $unitKinds;
  }
  /**
   * @return TierUnitKind[]
   */
  public function getUnitKinds()
  {
    return $this->unitKinds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TierMapping::class, 'Google_Service_SaaSServiceManagement_TierMapping');
