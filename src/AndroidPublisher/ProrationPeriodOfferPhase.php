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

namespace Google\Service\AndroidPublisher;

class ProrationPeriodOfferPhase extends \Google\Model
{
  /**
   * Unspecified original offer phase type.
   */
  public const ORIGINAL_OFFER_PHASE_TYPE_ORIGINAL_OFFER_PHASE_TYPE_UNSPECIFIED = 'ORIGINAL_OFFER_PHASE_TYPE_UNSPECIFIED';
  /**
   * The subscription is in the base pricing phase (e.g. full price).
   */
  public const ORIGINAL_OFFER_PHASE_TYPE_BASE = 'BASE';
  /**
   * The subscription is in an introductory pricing phase.
   */
  public const ORIGINAL_OFFER_PHASE_TYPE_INTRODUCTORY = 'INTRODUCTORY';
  /**
   * The subscription is in a free trial.
   */
  public const ORIGINAL_OFFER_PHASE_TYPE_FREE_TRIAL = 'FREE_TRIAL';
  /**
   * The original offer phase type before the proration period. Only set when
   * the proration period is updated from an existing offer phase.
   *
   * @var string
   */
  public $originalOfferPhaseType;

  /**
   * The original offer phase type before the proration period. Only set when
   * the proration period is updated from an existing offer phase.
   *
   * Accepted values: ORIGINAL_OFFER_PHASE_TYPE_UNSPECIFIED, BASE, INTRODUCTORY,
   * FREE_TRIAL
   *
   * @param self::ORIGINAL_OFFER_PHASE_TYPE_* $originalOfferPhaseType
   */
  public function setOriginalOfferPhaseType($originalOfferPhaseType)
  {
    $this->originalOfferPhaseType = $originalOfferPhaseType;
  }
  /**
   * @return self::ORIGINAL_OFFER_PHASE_TYPE_*
   */
  public function getOriginalOfferPhaseType()
  {
    return $this->originalOfferPhaseType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProrationPeriodOfferPhase::class, 'Google_Service_AndroidPublisher_ProrationPeriodOfferPhase');
