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

namespace Google\Service\CustomerEngagementSuite;

class TurnMetadata extends \Google\Model
{
  /**
   * The payload is authoritative (computed from a complete contract document, a
   * persisted snapshot, or the pre-draft state). Clients must replace any
   * previously received progress with it.
   */
  public const CONTRACT_STREAMING_PHASE_CONTRACT_STREAMING_PHASE_UNSPECIFIED = 'CONTRACT_STREAMING_PHASE_UNSPECIFIED';
  /**
   * An initial contract draft is streaming. contract_progress is an in-flight
   * estimate: non-decreasing within one artifact fence, capped below the
   * authoritative range, with pillar_breakdowns carrying total_item_count == 0
   * to mark estimated pillar states.
   */
  public const CONTRACT_STREAMING_PHASE_DRAFTING = 'DRAFTING';
  /**
   * A revision of an existing contract is streaming (for example after an
   * annotation submission). Same estimate semantics as DRAFTING.
   */
  public const CONTRACT_STREAMING_PHASE_REVISING = 'REVISING';
  /**
   * Set on the terminal event of a contract draft whose every placeholder is
   * resolved (contract_progress is 100%), whether or not the draft was
   * published. Clients complete and dismiss the contract progress display on
   * it; publication is reported separately by contract_finalized.
   *
   * @var bool
   */
  public $contractDraftComplete;
  /**
   * Set on the final artifact event of a turn whose contract draft was
   * published (a revision was activated). Terminal for the clarification flow
   * of this draft: contract_progress is authoritative and complete.
   *
   * @var bool
   */
  public $contractFinalized;
  /**
   * Indicates whether this assistant turn was contract-related (e.g. contract
   * drafting, alignment, extraction, or revision).
   *
   * @var bool
   */
  public $contractRelated;
  /**
   * Set only on in-flight progress estimates emitted while a contract artifact
   * fence is streaming, and on the revision-turn-start event. Unset on
   * authoritative payloads.
   *
   * @var string
   */
  public $contractStreamingPhase;

  /**
   * Set on the terminal event of a contract draft whose every placeholder is
   * resolved (contract_progress is 100%), whether or not the draft was
   * published. Clients complete and dismiss the contract progress display on
   * it; publication is reported separately by contract_finalized.
   *
   * @param bool $contractDraftComplete
   */
  public function setContractDraftComplete($contractDraftComplete)
  {
    $this->contractDraftComplete = $contractDraftComplete;
  }
  /**
   * @return bool
   */
  public function getContractDraftComplete()
  {
    return $this->contractDraftComplete;
  }
  /**
   * Set on the final artifact event of a turn whose contract draft was
   * published (a revision was activated). Terminal for the clarification flow
   * of this draft: contract_progress is authoritative and complete.
   *
   * @param bool $contractFinalized
   */
  public function setContractFinalized($contractFinalized)
  {
    $this->contractFinalized = $contractFinalized;
  }
  /**
   * @return bool
   */
  public function getContractFinalized()
  {
    return $this->contractFinalized;
  }
  /**
   * Indicates whether this assistant turn was contract-related (e.g. contract
   * drafting, alignment, extraction, or revision).
   *
   * @param bool $contractRelated
   */
  public function setContractRelated($contractRelated)
  {
    $this->contractRelated = $contractRelated;
  }
  /**
   * @return bool
   */
  public function getContractRelated()
  {
    return $this->contractRelated;
  }
  /**
   * Set only on in-flight progress estimates emitted while a contract artifact
   * fence is streaming, and on the revision-turn-start event. Unset on
   * authoritative payloads.
   *
   * Accepted values: CONTRACT_STREAMING_PHASE_UNSPECIFIED, DRAFTING, REVISING
   *
   * @param self::CONTRACT_STREAMING_PHASE_* $contractStreamingPhase
   */
  public function setContractStreamingPhase($contractStreamingPhase)
  {
    $this->contractStreamingPhase = $contractStreamingPhase;
  }
  /**
   * @return self::CONTRACT_STREAMING_PHASE_*
   */
  public function getContractStreamingPhase()
  {
    return $this->contractStreamingPhase;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TurnMetadata::class, 'Google_Service_CustomerEngagementSuite_TurnMetadata');
