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

class GenaiVertexV1CodeExecutionResultStep extends \Google\Model
{
  protected $contentType = GenaiVertexV1ContentList::class;
  protected $contentDataType = '';
  /**
   * Whether the code execution resulted in an error.
   *
   * @var bool
   */
  public $isError;
  /**
   * Required. The output of the code execution.
   *
   * @var string
   */
  public $result;

  /**
   * Multimodal output of the code execution.
   *
   * @param GenaiVertexV1ContentList $content
   */
  public function setContent(GenaiVertexV1ContentList $content)
  {
    $this->content = $content;
  }
  /**
   * @return GenaiVertexV1ContentList
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Whether the code execution resulted in an error.
   *
   * @param bool $isError
   */
  public function setIsError($isError)
  {
    $this->isError = $isError;
  }
  /**
   * @return bool
   */
  public function getIsError()
  {
    return $this->isError;
  }
  /**
   * Required. The output of the code execution.
   *
   * @param string $result
   */
  public function setResult($result)
  {
    $this->result = $result;
  }
  /**
   * @return string
   */
  public function getResult()
  {
    return $this->result;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1CodeExecutionResultStep::class, 'Google_Service_Aiplatform_GenaiVertexV1CodeExecutionResultStep');
