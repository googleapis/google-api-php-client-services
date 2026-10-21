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

class TextLocation extends \Google\Model
{
  /**
   * Output only. Optional 1-indexed inclusive first column offset within
   * `first_line`.
   *
   * @var int
   */
  public $firstColumn;
  /**
   * Output only. 1-indexed inclusive first line number.
   *
   * @var int
   */
  public $firstLine;
  /**
   * Output only. Optional 1-indexed inclusive last column offset within
   * `last_line`.
   *
   * @var int
   */
  public $lastColumn;
  /**
   * Output only. 1-indexed inclusive last line number.
   *
   * @var int
   */
  public $lastLine;
  /**
   * Output only. Verbatim snippet of the anchored source line(s).
   *
   * @var string
   */
  public $quotedLinePreview;

  /**
   * Output only. Optional 1-indexed inclusive first column offset within
   * `first_line`.
   *
   * @param int $firstColumn
   */
  public function setFirstColumn($firstColumn)
  {
    $this->firstColumn = $firstColumn;
  }
  /**
   * @return int
   */
  public function getFirstColumn()
  {
    return $this->firstColumn;
  }
  /**
   * Output only. 1-indexed inclusive first line number.
   *
   * @param int $firstLine
   */
  public function setFirstLine($firstLine)
  {
    $this->firstLine = $firstLine;
  }
  /**
   * @return int
   */
  public function getFirstLine()
  {
    return $this->firstLine;
  }
  /**
   * Output only. Optional 1-indexed inclusive last column offset within
   * `last_line`.
   *
   * @param int $lastColumn
   */
  public function setLastColumn($lastColumn)
  {
    $this->lastColumn = $lastColumn;
  }
  /**
   * @return int
   */
  public function getLastColumn()
  {
    return $this->lastColumn;
  }
  /**
   * Output only. 1-indexed inclusive last line number.
   *
   * @param int $lastLine
   */
  public function setLastLine($lastLine)
  {
    $this->lastLine = $lastLine;
  }
  /**
   * @return int
   */
  public function getLastLine()
  {
    return $this->lastLine;
  }
  /**
   * Output only. Verbatim snippet of the anchored source line(s).
   *
   * @param string $quotedLinePreview
   */
  public function setQuotedLinePreview($quotedLinePreview)
  {
    $this->quotedLinePreview = $quotedLinePreview;
  }
  /**
   * @return string
   */
  public function getQuotedLinePreview()
  {
    return $this->quotedLinePreview;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextLocation::class, 'Google_Service_DeepReview_TextLocation');
