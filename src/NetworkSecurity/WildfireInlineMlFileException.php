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

namespace Google\Service\NetworkSecurity;

class WildfireInlineMlFileException extends \Google\Model
{
  /**
   * Optional. Name of the file to exclude from Advanced malware sandbox inline
   * ML analysis.
   *
   * @var string
   */
  public $filename;
  /**
   * Required. Machine learning partial hash of the file to exclude from
   * Advanced malware sandbox inline ML analysis.
   *
   * @var string
   */
  public $partialHash;

  /**
   * Optional. Name of the file to exclude from Advanced malware sandbox inline
   * ML analysis.
   *
   * @param string $filename
   */
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  /**
   * @return string
   */
  public function getFilename()
  {
    return $this->filename;
  }
  /**
   * Required. Machine learning partial hash of the file to exclude from
   * Advanced malware sandbox inline ML analysis.
   *
   * @param string $partialHash
   */
  public function setPartialHash($partialHash)
  {
    $this->partialHash = $partialHash;
  }
  /**
   * @return string
   */
  public function getPartialHash()
  {
    return $this->partialHash;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WildfireInlineMlFileException::class, 'Google_Service_NetworkSecurity_WildfireInlineMlFileException');
