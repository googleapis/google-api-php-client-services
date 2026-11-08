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

namespace Google\Service\Aiplatform;

class GenaiVertexV1InteractionStatusUpdate extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The interaction is in progress.
   */
  public const STATUS_IN_PROGRESS = 'IN_PROGRESS';
  /**
   * The interaction requires action/input from the user.
   */
  public const STATUS_REQUIRES_ACTION = 'REQUIRES_ACTION';
  /**
   * The interaction is completed.
   */
  public const STATUS_COMPLETED = 'COMPLETED';
  /**
   * The interaction failed.
   */
  public const STATUS_FAILED = 'FAILED';
  /**
   * The interaction was cancelled.
   */
  public const STATUS_CANCELLED = 'CANCELLED';
  /**
   * The interaction is completed, but contains incomplete results (e.g. hitting
   * max_tokens).
   */
  public const STATUS_INCOMPLETE = 'INCOMPLETE';
  /**
   * The interaction is queued, waiting for processing (e.g. waiting for off-
   * peak capacity).
   */
  public const STATUS_QUEUED = 'QUEUED';
  /**
   * The interaction requires at least one more request for it to be completed.
   * The next request should set the continuation_token to the one returned by
   * this request.
   */
  public const STATUS_REQUIRES_CONTINUATION = 'REQUIRES_CONTINUATION';
  /**
   * @var string
   */
  public $interactionId;
  /**
   * @var string
   */
  public $status;
  protected $usageType = GenaiVertexV1InteractionUsage::class;
  protected $usageDataType = '';

  /**
   * @param string $interactionId
   */
  public function setInteractionId($interactionId)
  {
    $this->interactionId = $interactionId;
  }
  /**
   * @return string
   */
  public function getInteractionId()
  {
    return $this->interactionId;
  }
  /**
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
   * Model usage statistics up to this checkpoint.
   *
   * @param GenaiVertexV1InteractionUsage $usage
   */
  public function setUsage(GenaiVertexV1InteractionUsage $usage)
  {
    $this->usage = $usage;
  }
  /**
   * @return GenaiVertexV1InteractionUsage
   */
  public function getUsage()
  {
    return $this->usage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1InteractionStatusUpdate::class, 'Google_Service_Aiplatform_GenaiVertexV1InteractionStatusUpdate');
