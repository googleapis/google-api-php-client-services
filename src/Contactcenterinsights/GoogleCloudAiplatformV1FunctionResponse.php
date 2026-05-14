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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudAiplatformV1FunctionResponse extends \Google\Collection
{
  /**
   * This value is unused.
   */
  public const SCHEDULING_SCHEDULING_UNSPECIFIED = 'SCHEDULING_UNSPECIFIED';
  /**
   * Only add the result to the conversation context, do not interrupt or
   * trigger generation.
   */
  public const SCHEDULING_SILENT = 'SILENT';
  /**
   * Add the result to the conversation context, and prompt to generate output
   * without interrupting ongoing generation.
   */
  public const SCHEDULING_WHEN_IDLE = 'WHEN_IDLE';
  /**
   * Add the result to the conversation context, interrupt ongoing generation
   * and prompt to generate output.
   */
  public const SCHEDULING_INTERRUPT = 'INTERRUPT';
  protected $collection_key = 'parts';
  /**
   * Required. The name of the function to call. Matches
   * FunctionDeclaration.name and FunctionCall.name.
   *
   * @var string
   */
  public $name;
  protected $partsType = GoogleCloudAiplatformV1FunctionResponsePart::class;
  protected $partsDataType = 'array';
  /**
   * Required. The function response in JSON object format. Use "output" key to
   * specify function output and "error" key to specify error details (if any).
   * If "output" and "error" keys are not specified, then whole "response" is
   * treated as function output.
   *
   * @var array[]
   */
  public $response;
  /**
   * Optional. Specifies how the response should be scheduled in the
   * conversation. Only applicable to NON_BLOCKING function calls, is ignored
   * otherwise. Defaults to WHEN_IDLE.
   *
   * @var string
   */
  public $scheduling;

  /**
   * Required. The name of the function to call. Matches
   * FunctionDeclaration.name and FunctionCall.name.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. Ordered `Parts` that constitute a function response. Parts may
   * have different IANA MIME types.
   *
   * @param GoogleCloudAiplatformV1FunctionResponsePart[] $parts
   */
  public function setParts($parts)
  {
    $this->parts = $parts;
  }
  /**
   * @return GoogleCloudAiplatformV1FunctionResponsePart[]
   */
  public function getParts()
  {
    return $this->parts;
  }
  /**
   * Required. The function response in JSON object format. Use "output" key to
   * specify function output and "error" key to specify error details (if any).
   * If "output" and "error" keys are not specified, then whole "response" is
   * treated as function output.
   *
   * @param array[] $response
   */
  public function setResponse($response)
  {
    $this->response = $response;
  }
  /**
   * @return array[]
   */
  public function getResponse()
  {
    return $this->response;
  }
  /**
   * Optional. Specifies how the response should be scheduled in the
   * conversation. Only applicable to NON_BLOCKING function calls, is ignored
   * otherwise. Defaults to WHEN_IDLE.
   *
   * Accepted values: SCHEDULING_UNSPECIFIED, SILENT, WHEN_IDLE, INTERRUPT
   *
   * @param self::SCHEDULING_* $scheduling
   */
  public function setScheduling($scheduling)
  {
    $this->scheduling = $scheduling;
  }
  /**
   * @return self::SCHEDULING_*
   */
  public function getScheduling()
  {
    return $this->scheduling;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1FunctionResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudAiplatformV1FunctionResponse');
