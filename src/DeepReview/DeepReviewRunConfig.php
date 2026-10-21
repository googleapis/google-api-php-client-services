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

namespace Google\Service\DeepReview;

class DeepReviewRunConfig extends \Google\Model
{
  /**
   * Default unspecified topology. The backend defaults to standard high
   * quality.
   */
  public const TOPOLOGY_TOPOLOGY_UNSPECIFIED = 'TOPOLOGY_UNSPECIFIED';
  /**
   * Extra high quality topology with exhaustive evaluation passes.
   */
  public const TOPOLOGY_EXTRA_HIGH = 'EXTRA_HIGH';
  /**
   * Standard high quality conference review topology.
   */
  public const TOPOLOGY_HIGH = 'HIGH';
  /**
   * Medium quality topology balancing review latency and depth.
   */
  public const TOPOLOGY_MID = 'MID';
  /**
   * Low latency / fast turnaround topology.
   */
  public const TOPOLOGY_LOW = 'LOW';
  /**
   * Optional. Input only. Developer Bring-Your-Own-Key Gemini API key. When
   * provided, requests are billed to the caller's Gemini API project. Input
   * only; forwarded to the asynchronous review runner in the task payload and
   * never persisted in database records or returned in review resources (see
   * companion field `gemini_api_key_set`, AIP-147).
   *
   * @var string
   */
  public $geminiApiKey;
  /**
   * Output only. Indicates whether a developer Bring-Your-Own-Key Gemini API
   * key was provided for this review run.
   *
   * @var bool
   */
  public $geminiApiKeySet;
  /**
   * Optional. The Gemini model name/version to use (e.g., "gemini-1.5-pro",
   * "gemini-2.0-flash").
   *
   * @var string
   */
  public $model;
  /**
   * Optional. Review execution topology profile to use.
   *
   * @var string
   */
  public $topology;
  /**
   * Optional. User-provided guidance, focus areas, or custom evaluation
   * instructions passed to the review agents.
   *
   * @var string
   */
  public $userPrompt;

  /**
   * Optional. Input only. Developer Bring-Your-Own-Key Gemini API key. When
   * provided, requests are billed to the caller's Gemini API project. Input
   * only; forwarded to the asynchronous review runner in the task payload and
   * never persisted in database records or returned in review resources (see
   * companion field `gemini_api_key_set`, AIP-147).
   *
   * @param string $geminiApiKey
   */
  public function setGeminiApiKey($geminiApiKey)
  {
    $this->geminiApiKey = $geminiApiKey;
  }
  /**
   * @return string
   */
  public function getGeminiApiKey()
  {
    return $this->geminiApiKey;
  }
  /**
   * Output only. Indicates whether a developer Bring-Your-Own-Key Gemini API
   * key was provided for this review run.
   *
   * @param bool $geminiApiKeySet
   */
  public function setGeminiApiKeySet($geminiApiKeySet)
  {
    $this->geminiApiKeySet = $geminiApiKeySet;
  }
  /**
   * @return bool
   */
  public function getGeminiApiKeySet()
  {
    return $this->geminiApiKeySet;
  }
  /**
   * Optional. The Gemini model name/version to use (e.g., "gemini-1.5-pro",
   * "gemini-2.0-flash").
   *
   * @param string $model
   */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /**
   * @return string
   */
  public function getModel()
  {
    return $this->model;
  }
  /**
   * Optional. Review execution topology profile to use.
   *
   * Accepted values: TOPOLOGY_UNSPECIFIED, EXTRA_HIGH, HIGH, MID, LOW
   *
   * @param self::TOPOLOGY_* $topology
   */
  public function setTopology($topology)
  {
    $this->topology = $topology;
  }
  /**
   * @return self::TOPOLOGY_*
   */
  public function getTopology()
  {
    return $this->topology;
  }
  /**
   * Optional. User-provided guidance, focus areas, or custom evaluation
   * instructions passed to the review agents.
   *
   * @param string $userPrompt
   */
  public function setUserPrompt($userPrompt)
  {
    $this->userPrompt = $userPrompt;
  }
  /**
   * @return string
   */
  public function getUserPrompt()
  {
    return $this->userPrompt;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeepReviewRunConfig::class, 'Google_Service_DeepReview_DeepReviewRunConfig');
