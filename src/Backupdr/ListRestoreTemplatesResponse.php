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

namespace Google\Service\Backupdr;

class ListRestoreTemplatesResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  /**
   * A token which may be sent as `page_token` in a subsequent
   * `ListRestoreTemplates` call.
   *
   * @var string
   */
  public $nextPageToken;
  protected $restoreTemplatesType = RestoreTemplate::class;
  protected $restoreTemplatesDataType = 'array';
  /**
   * Locations that could not be reached.
   *
   * @var string[]
   */
  public $unreachable;

  /**
   * A token which may be sent as `page_token` in a subsequent
   * `ListRestoreTemplates` call.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * The list of RestoreTemplates.
   *
   * @param RestoreTemplate[] $restoreTemplates
   */
  public function setRestoreTemplates($restoreTemplates)
  {
    $this->restoreTemplates = $restoreTemplates;
  }
  /**
   * @return RestoreTemplate[]
   */
  public function getRestoreTemplates()
  {
    return $this->restoreTemplates;
  }
  /**
   * Locations that could not be reached.
   *
   * @param string[] $unreachable
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListRestoreTemplatesResponse::class, 'Google_Service_Backupdr_ListRestoreTemplatesResponse');
