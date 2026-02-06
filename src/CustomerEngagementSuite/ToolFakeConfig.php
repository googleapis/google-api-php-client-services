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

class ToolFakeConfig extends \Google\Model
{
  protected $codeBlockType = CodeBlock::class;
  protected $codeBlockDataType = '';
  /**
   * Optional. Whether the tool is using fake mode.
   *
   * @var bool
   */
  public $enableFakeMode;

  /**
   * Optional. Code block which will be executed instead of a real tool call.
   *
   * @param CodeBlock $codeBlock
   */
  public function setCodeBlock(CodeBlock $codeBlock)
  {
    $this->codeBlock = $codeBlock;
  }
  /**
   * @return CodeBlock
   */
  public function getCodeBlock()
  {
    return $this->codeBlock;
  }
  /**
   * Optional. Whether the tool is using fake mode.
   *
   * @param bool $enableFakeMode
   */
  public function setEnableFakeMode($enableFakeMode)
  {
    $this->enableFakeMode = $enableFakeMode;
  }
  /**
   * @return bool
   */
  public function getEnableFakeMode()
  {
    return $this->enableFakeMode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ToolFakeConfig::class, 'Google_Service_CustomerEngagementSuite_ToolFakeConfig');
