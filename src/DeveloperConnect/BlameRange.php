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

namespace Google\Service\DeveloperConnect;

class BlameRange extends \Google\Model
{
  protected $commitType = SCMCommit::class;
  protected $commitDataType = '';
  /**
   * The 1-indexed starting line number of the range (inclusive).
   *
   * @var int
   */
  public $firstLine;
  /**
   * The 1-indexed ending line number of the range (inclusive).
   *
   * @var int
   */
  public $lastLine;

  /**
   * The commit metadata for this line range.
   *
   * @param SCMCommit $commit
   */
  public function setCommit(SCMCommit $commit)
  {
    $this->commit = $commit;
  }
  /**
   * @return SCMCommit
   */
  public function getCommit()
  {
    return $this->commit;
  }
  /**
   * The 1-indexed starting line number of the range (inclusive).
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
   * The 1-indexed ending line number of the range (inclusive).
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BlameRange::class, 'Google_Service_DeveloperConnect_BlameRange');
