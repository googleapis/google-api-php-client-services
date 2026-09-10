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

namespace Google\Service\CloudAuditManager;

class ListControlsResponse extends \Google\Collection
{
  protected $collection_key = 'controls';
  protected $controlsType = Control::class;
  protected $controlsDataType = 'array';
  /**
   * Output only. A token that you can send as the `page_token` in a subsequent
   * request to retrieve the next page of results. If this field is empty, there
   * are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * Output only. Controls for a given regulatory standard.
   *
   * @param Control[] $controls
   */
  public function setControls($controls)
  {
    $this->controls = $controls;
  }
  /**
   * @return Control[]
   */
  public function getControls()
  {
    return $this->controls;
  }
  /**
   * Output only. A token that you can send as the `page_token` in a subsequent
   * request to retrieve the next page of results. If this field is empty, there
   * are no subsequent pages.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListControlsResponse::class, 'Google_Service_CloudAuditManager_ListControlsResponse');
