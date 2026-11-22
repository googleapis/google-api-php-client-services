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

class GenaiVertexV1GenerationConfig extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const THINKING_LEVEL_THINKING_LEVEL_UNSPECIFIED = 'THINKING_LEVEL_UNSPECIFIED';
  /**
   * Little to no thinking.
   */
  public const THINKING_LEVEL_THINKING_LEVEL_MINIMAL = 'THINKING_LEVEL_MINIMAL';
  /**
   * Low thinking level.
   */
  public const THINKING_LEVEL_THINKING_LEVEL_LOW = 'THINKING_LEVEL_LOW';
  /**
   * Medium thinking level.
   */
  public const THINKING_LEVEL_THINKING_LEVEL_MEDIUM = 'THINKING_LEVEL_MEDIUM';
  /**
   * High thinking level.
   */
  public const THINKING_LEVEL_THINKING_LEVEL_HIGH = 'THINKING_LEVEL_HIGH';
  /**
   * Extra high thinking level, above `high`.
   */
  public const THINKING_LEVEL_THINKING_LEVEL_XHIGH = 'THINKING_LEVEL_XHIGH';
  /**
   * Default value. This value is unused.
   */
  public const THINKING_SUMMARIES_THINKING_SUMMARIES_UNSPECIFIED = 'THINKING_SUMMARIES_UNSPECIFIED';
  /**
   * Auto thinking summaries.
   */
  public const THINKING_SUMMARIES_THINKING_SUMMARIES_AUTO = 'THINKING_SUMMARIES_AUTO';
  /**
   * No thinking summaries.
   */
  public const THINKING_SUMMARIES_THINKING_SUMMARIES_NONE = 'THINKING_SUMMARIES_NONE';
  /**
   * Default value. This value is unused.
   */
  public const TOOL_CHOICE_MODE_TOOL_CHOICE_TYPE_UNSPECIFIED = 'TOOL_CHOICE_TYPE_UNSPECIFIED';
  /**
   * Auto tool choice.
   */
  public const TOOL_CHOICE_MODE_AUTO = 'AUTO';
  /**
   * Any tool choice.
   */
  public const TOOL_CHOICE_MODE_ANY = 'ANY';
  /**
   * No tool choice.
   */
  public const TOOL_CHOICE_MODE_NONE = 'NONE';
  /**
   * Validated tool choice.
   */
  public const TOOL_CHOICE_MODE_VALIDATED = 'VALIDATED';
  protected $collection_key = 'stopSequences';
  /**
   * The maximum number of tokens to include in the response.
   *
   * @var int
   */
  public $maxOutputTokens;
  /**
   * Seed used in decoding for reproducibility.
   *
   * @var int
   */
  public $seed;
  /**
   * A list of character sequences that will stop output interaction.
   *
   * @var string[]
   */
  public $stopSequences;
  protected $structuredSpeechConfigType = GenaiVertexV1SpeakerConfig::class;
  protected $structuredSpeechConfigDataType = '';
  /**
   * Controls the randomness of the output.
   *
   * @deprecated
   * @var float
   */
  public $temperature;
  /**
   * The level of thought tokens that the model should generate.
   *
   * @var string
   */
  public $thinkingLevel;
  /**
   * Whether to include thought summaries in the response.
   *
   * @var string
   */
  public $thinkingSummaries;
  protected $toolChoiceConfigType = GenaiVertexV1ToolChoiceConfig::class;
  protected $toolChoiceConfigDataType = '';
  /**
   * The mode of the tool choice.
   *
   * @var string
   */
  public $toolChoiceMode;
  /**
   * The maximum cumulative probability of tokens to consider when sampling.
   *
   * @deprecated
   * @var float
   */
  public $topP;
  protected $transcriptionConfigType = GenaiVertexV1TranscriptionConfig::class;
  protected $transcriptionConfigDataType = '';
  protected $videoConfigType = GenaiVertexV1VideoConfig::class;
  protected $videoConfigDataType = '';

  /**
   * The maximum number of tokens to include in the response.
   *
   * @param int $maxOutputTokens
   */
  public function setMaxOutputTokens($maxOutputTokens)
  {
    $this->maxOutputTokens = $maxOutputTokens;
  }
  /**
   * @return int
   */
  public function getMaxOutputTokens()
  {
    return $this->maxOutputTokens;
  }
  /**
   * Seed used in decoding for reproducibility.
   *
   * @param int $seed
   */
  public function setSeed($seed)
  {
    $this->seed = $seed;
  }
  /**
   * @return int
   */
  public function getSeed()
  {
    return $this->seed;
  }
  /**
   * A list of character sequences that will stop output interaction.
   *
   * @param string[] $stopSequences
   */
  public function setStopSequences($stopSequences)
  {
    $this->stopSequences = $stopSequences;
  }
  /**
   * @return string[]
   */
  public function getStopSequences()
  {
    return $this->stopSequences;
  }
  /**
   * Speech and multi-speaker configuration.
   *
   * @param GenaiVertexV1SpeakerConfig $structuredSpeechConfig
   */
  public function setStructuredSpeechConfig(GenaiVertexV1SpeakerConfig $structuredSpeechConfig)
  {
    $this->structuredSpeechConfig = $structuredSpeechConfig;
  }
  /**
   * @return GenaiVertexV1SpeakerConfig
   */
  public function getStructuredSpeechConfig()
  {
    return $this->structuredSpeechConfig;
  }
  /**
   * Controls the randomness of the output.
   *
   * @deprecated
   * @param float $temperature
   */
  public function setTemperature($temperature)
  {
    $this->temperature = $temperature;
  }
  /**
   * @deprecated
   * @return float
   */
  public function getTemperature()
  {
    return $this->temperature;
  }
  /**
   * The level of thought tokens that the model should generate.
   *
   * Accepted values: THINKING_LEVEL_UNSPECIFIED, THINKING_LEVEL_MINIMAL,
   * THINKING_LEVEL_LOW, THINKING_LEVEL_MEDIUM, THINKING_LEVEL_HIGH,
   * THINKING_LEVEL_XHIGH
   *
   * @param self::THINKING_LEVEL_* $thinkingLevel
   */
  public function setThinkingLevel($thinkingLevel)
  {
    $this->thinkingLevel = $thinkingLevel;
  }
  /**
   * @return self::THINKING_LEVEL_*
   */
  public function getThinkingLevel()
  {
    return $this->thinkingLevel;
  }
  /**
   * Whether to include thought summaries in the response.
   *
   * Accepted values: THINKING_SUMMARIES_UNSPECIFIED, THINKING_SUMMARIES_AUTO,
   * THINKING_SUMMARIES_NONE
   *
   * @param self::THINKING_SUMMARIES_* $thinkingSummaries
   */
  public function setThinkingSummaries($thinkingSummaries)
  {
    $this->thinkingSummaries = $thinkingSummaries;
  }
  /**
   * @return self::THINKING_SUMMARIES_*
   */
  public function getThinkingSummaries()
  {
    return $this->thinkingSummaries;
  }
  /**
   * The config for the tool choice.
   *
   * @param GenaiVertexV1ToolChoiceConfig $toolChoiceConfig
   */
  public function setToolChoiceConfig(GenaiVertexV1ToolChoiceConfig $toolChoiceConfig)
  {
    $this->toolChoiceConfig = $toolChoiceConfig;
  }
  /**
   * @return GenaiVertexV1ToolChoiceConfig
   */
  public function getToolChoiceConfig()
  {
    return $this->toolChoiceConfig;
  }
  /**
   * The mode of the tool choice.
   *
   * Accepted values: TOOL_CHOICE_TYPE_UNSPECIFIED, AUTO, ANY, NONE, VALIDATED
   *
   * @param self::TOOL_CHOICE_MODE_* $toolChoiceMode
   */
  public function setToolChoiceMode($toolChoiceMode)
  {
    $this->toolChoiceMode = $toolChoiceMode;
  }
  /**
   * @return self::TOOL_CHOICE_MODE_*
   */
  public function getToolChoiceMode()
  {
    return $this->toolChoiceMode;
  }
  /**
   * The maximum cumulative probability of tokens to consider when sampling.
   *
   * @deprecated
   * @param float $topP
   */
  public function setTopP($topP)
  {
    $this->topP = $topP;
  }
  /**
   * @deprecated
   * @return float
   */
  public function getTopP()
  {
    return $this->topP;
  }
  /**
   * Optional. Configuration for speech recognition (transcription). If present,
   * ASR is enabled.
   *
   * @param GenaiVertexV1TranscriptionConfig $transcriptionConfig
   */
  public function setTranscriptionConfig(GenaiVertexV1TranscriptionConfig $transcriptionConfig)
  {
    $this->transcriptionConfig = $transcriptionConfig;
  }
  /**
   * @return GenaiVertexV1TranscriptionConfig
   */
  public function getTranscriptionConfig()
  {
    return $this->transcriptionConfig;
  }
  /**
   * Configuration for video generation.
   *
   * @param GenaiVertexV1VideoConfig $videoConfig
   */
  public function setVideoConfig(GenaiVertexV1VideoConfig $videoConfig)
  {
    $this->videoConfig = $videoConfig;
  }
  /**
   * @return GenaiVertexV1VideoConfig
   */
  public function getVideoConfig()
  {
    return $this->videoConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1GenerationConfig::class, 'Google_Service_Aiplatform_GenaiVertexV1GenerationConfig');
