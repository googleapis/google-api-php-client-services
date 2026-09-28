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

namespace Google\Service\Docs;

class SuggestionResponse extends \Google\Collection
{
  protected $collection_key = 'updatedSummarySuggestionIds';
  /**
   * The IDs of suggestions which were accepted during the update.
   *
   * @var string[]
   */
  public $acceptedSuggestionIds;
  /**
   * The IDs of suggestions which were created during the update.
   *
   * @var string[]
   */
  public $createdSuggestionIds;
  /**
   * The IDs of suggestions which were deleted during the update.
   *
   * @var string[]
   */
  public $deletedSuggestionIds;
  /**
   * The IDs of suggestions which were rejected during the update.
   *
   * @var string[]
   */
  public $rejectedSuggestionIds;
  /**
   * The IDs of suggestions whose summaries were updated during the update.
   *
   * @var string[]
   */
  public $updatedSummarySuggestionIds;

  /**
   * The IDs of suggestions which were accepted during the update.
   *
   * @param string[] $acceptedSuggestionIds
   */
  public function setAcceptedSuggestionIds($acceptedSuggestionIds)
  {
    $this->acceptedSuggestionIds = $acceptedSuggestionIds;
  }
  /**
   * @return string[]
   */
  public function getAcceptedSuggestionIds()
  {
    return $this->acceptedSuggestionIds;
  }
  /**
   * The IDs of suggestions which were created during the update.
   *
   * @param string[] $createdSuggestionIds
   */
  public function setCreatedSuggestionIds($createdSuggestionIds)
  {
    $this->createdSuggestionIds = $createdSuggestionIds;
  }
  /**
   * @return string[]
   */
  public function getCreatedSuggestionIds()
  {
    return $this->createdSuggestionIds;
  }
  /**
   * The IDs of suggestions which were deleted during the update.
   *
   * @param string[] $deletedSuggestionIds
   */
  public function setDeletedSuggestionIds($deletedSuggestionIds)
  {
    $this->deletedSuggestionIds = $deletedSuggestionIds;
  }
  /**
   * @return string[]
   */
  public function getDeletedSuggestionIds()
  {
    return $this->deletedSuggestionIds;
  }
  /**
   * The IDs of suggestions which were rejected during the update.
   *
   * @param string[] $rejectedSuggestionIds
   */
  public function setRejectedSuggestionIds($rejectedSuggestionIds)
  {
    $this->rejectedSuggestionIds = $rejectedSuggestionIds;
  }
  /**
   * @return string[]
   */
  public function getRejectedSuggestionIds()
  {
    return $this->rejectedSuggestionIds;
  }
  /**
   * The IDs of suggestions whose summaries were updated during the update.
   *
   * @param string[] $updatedSummarySuggestionIds
   */
  public function setUpdatedSummarySuggestionIds($updatedSummarySuggestionIds)
  {
    $this->updatedSummarySuggestionIds = $updatedSummarySuggestionIds;
  }
  /**
   * @return string[]
   */
  public function getUpdatedSummarySuggestionIds()
  {
    return $this->updatedSummarySuggestionIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SuggestionResponse::class, 'Google_Service_Docs_SuggestionResponse');
