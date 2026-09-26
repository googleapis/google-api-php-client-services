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

class UiEvent extends \Google\Model
{
  /**
   * The JSON payload representing the A2UI surface.
   *
   * @var string
   */
  public $jsonPayload;
  /**
   * The media type (MIME type) indicating the format of the UI event payload
   * (e.g., "application/json+a2ui").
   *
   * @var string
   */
  public $mimeType;

  /**
   * The JSON payload representing the A2UI surface.
   *
   * @param string $jsonPayload
   */
  public function setJsonPayload($jsonPayload)
  {
    $this->jsonPayload = $jsonPayload;
  }
  /**
   * @return string
   */
  public function getJsonPayload()
  {
    return $this->jsonPayload;
  }
  /**
   * The media type (MIME type) indicating the format of the UI event payload
   * (e.g., "application/json+a2ui").
   *
   * @param string $mimeType
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return string
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UiEvent::class, 'Google_Service_CustomerEngagementSuite_UiEvent');
