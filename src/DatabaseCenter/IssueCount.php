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

namespace Google\Service\DatabaseCenter;

class IssueCount extends \Google\Model
{
  /**
   * Title of a signal group corresponding to the request.
   *
   * @var string
   */
  public $displayName;
  /**
   * The count of the number of issues associated with those resources that are
   * explicitly filtered in by the filters present in the request. A signal is
   * an issue when its SignalStatus field is set to SIGNAL_STATUS_ISSUE.
   *
   * @var int
   */
  public $issueCount;

  /**
   * Title of a signal group corresponding to the request.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * The count of the number of issues associated with those resources that are
   * explicitly filtered in by the filters present in the request. A signal is
   * an issue when its SignalStatus field is set to SIGNAL_STATUS_ISSUE.
   *
   * @param int $issueCount
   */
  public function setIssueCount($issueCount)
  {
    $this->issueCount = $issueCount;
  }
  /**
   * @return int
   */
  public function getIssueCount()
  {
    return $this->issueCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IssueCount::class, 'Google_Service_DatabaseCenter_IssueCount');
