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

namespace Google\Service\Firestore;

class RequestOptions extends \Google\Collection
{
  protected $collection_key = 'requestTags';
  /**
   * Optional. The request tags for the request.
   *
   * @var string[]
   */
  public $requestTags;

  /**
   * Optional. The request tags for the request.
   *
   * @param string[] $requestTags
   */
  public function setRequestTags($requestTags)
  {
    $this->requestTags = $requestTags;
  }
  /**
   * @return string[]
   */
  public function getRequestTags()
  {
    return $this->requestTags;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequestOptions::class, 'Google_Service_Firestore_RequestOptions');
