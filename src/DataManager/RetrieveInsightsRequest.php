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

namespace Google\Service\DataManager;

class RetrieveInsightsRequest extends \Google\Model
{
  protected $baselineType = Baseline::class;
  protected $baselineDataType = '';
  /**
   * Required. The user list ID for which insights are requested.
   *
   * @var string
   */
  public $userListId;

  /**
   * Required. Baseline for the insights requested.
   *
   * @param Baseline $baseline
   */
  public function setBaseline(Baseline $baseline)
  {
    $this->baseline = $baseline;
  }
  /**
   * @return Baseline
   */
  public function getBaseline()
  {
    return $this->baseline;
  }
  /**
   * Required. The user list ID for which insights are requested.
   *
   * @param string $userListId
   */
  public function setUserListId($userListId)
  {
    $this->userListId = $userListId;
  }
  /**
   * @return string
   */
  public function getUserListId()
  {
    return $this->userListId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RetrieveInsightsRequest::class, 'Google_Service_DataManager_RetrieveInsightsRequest');
