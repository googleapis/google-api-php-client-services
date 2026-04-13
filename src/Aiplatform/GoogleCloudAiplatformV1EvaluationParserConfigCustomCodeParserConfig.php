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

class GoogleCloudAiplatformV1EvaluationParserConfigCustomCodeParserConfig extends \Google\Model
{
  /**
   * Required. Python function for parsing results. The function should be
   * defined within this string. The function takes a list of strings (LLM
   * responses) and should return either a list of dictionaries (for rubrics) or
   * a single dictionary (for a metric result). Example function signature: def
   * parse(responses: list[str]) -> list[dict[str, Any]] | dict[str, Any]: When
   * parsing rubrics, return a list of dictionaries, where each dictionary
   * represents a Rubric. Example for rubrics: [ { "content": {"property":
   * {"description": "The response is factual."}}, "type": "FACTUALITY",
   * "importance": "HIGH" }, { "content": {"property": {"description": "The
   * response is fluent."}}, "type": "FLUENCY", "importance": "MEDIUM" } ] When
   * parsing critique results, return a dictionary representing a MetricResult.
   * Example for a metric result: { "score": 0.8, "explanation": "The model
   * followed most instructions.", "rubric_verdicts": [...] } ... code for
   * result extraction and aggregation
   *
   * @var string
   */
  public $parsingFunction;

  /**
   * Required. Python function for parsing results. The function should be
   * defined within this string. The function takes a list of strings (LLM
   * responses) and should return either a list of dictionaries (for rubrics) or
   * a single dictionary (for a metric result). Example function signature: def
   * parse(responses: list[str]) -> list[dict[str, Any]] | dict[str, Any]: When
   * parsing rubrics, return a list of dictionaries, where each dictionary
   * represents a Rubric. Example for rubrics: [ { "content": {"property":
   * {"description": "The response is factual."}}, "type": "FACTUALITY",
   * "importance": "HIGH" }, { "content": {"property": {"description": "The
   * response is fluent."}}, "type": "FLUENCY", "importance": "MEDIUM" } ] When
   * parsing critique results, return a dictionary representing a MetricResult.
   * Example for a metric result: { "score": 0.8, "explanation": "The model
   * followed most instructions.", "rubric_verdicts": [...] } ... code for
   * result extraction and aggregation
   *
   * @param string $parsingFunction
   */
  public function setParsingFunction($parsingFunction)
  {
    $this->parsingFunction = $parsingFunction;
  }
  /**
   * @return string
   */
  public function getParsingFunction()
  {
    return $this->parsingFunction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationParserConfigCustomCodeParserConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationParserConfigCustomCodeParserConfig');
