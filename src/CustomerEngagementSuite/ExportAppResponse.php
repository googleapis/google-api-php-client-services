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

class ExportAppResponse extends \Google\Model
{
  /**
   * App folder compressed as a zip file.
   *
   * @var string
   */
  public $appContent;
  /**
   * The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI to
   * which the app was exported.
   *
   * @var string
   */
  public $appUri;

  /**
   * App folder compressed as a zip file.
   *
   * @param string $appContent
   */
  public function setAppContent($appContent)
  {
    $this->appContent = $appContent;
  }
  /**
   * @return string
   */
  public function getAppContent()
  {
    return $this->appContent;
  }
  /**
   * The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI to
   * which the app was exported.
   *
   * @param string $appUri
   */
  public function setAppUri($appUri)
  {
    $this->appUri = $appUri;
  }
  /**
   * @return string
   */
  public function getAppUri()
  {
    return $this->appUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportAppResponse::class, 'Google_Service_CustomerEngagementSuite_ExportAppResponse');
