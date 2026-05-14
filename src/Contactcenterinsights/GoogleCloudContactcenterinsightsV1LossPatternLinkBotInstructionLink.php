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

class GoogleCloudContactcenterinsightsV1LossPatternLinkBotInstructionLink extends \Google\Model
{
  /**
   * The exclusive end line number of the instructions.
   *
   * @var int
   */
  public $endLine;
  /**
   * The inclusive start line number of the instructions.
   *
   * @var int
   */
  public $startLine;
  /**
   * The name of the subagent.
   *
   * @var string
   */
  public $subagent;

  /**
   * The exclusive end line number of the instructions.
   *
   * @param int $endLine
   */
  public function setEndLine($endLine)
  {
    $this->endLine = $endLine;
  }
  /**
   * @return int
   */
  public function getEndLine()
  {
    return $this->endLine;
  }
  /**
   * The inclusive start line number of the instructions.
   *
   * @param int $startLine
   */
  public function setStartLine($startLine)
  {
    $this->startLine = $startLine;
  }
  /**
   * @return int
   */
  public function getStartLine()
  {
    return $this->startLine;
  }
  /**
   * The name of the subagent.
   *
   * @param string $subagent
   */
  public function setSubagent($subagent)
  {
    $this->subagent = $subagent;
  }
  /**
   * @return string
   */
  public function getSubagent()
  {
    return $this->subagent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1LossPatternLinkBotInstructionLink::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1LossPatternLinkBotInstructionLink');
