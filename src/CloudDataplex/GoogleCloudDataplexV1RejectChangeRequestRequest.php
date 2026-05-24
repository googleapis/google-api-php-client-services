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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1RejectChangeRequestRequest extends \Google\Model
{
  /**
   * Optional. The reason for rejecting the ChangeRequest.
   *
   * @var string
   */
  public $comment;
  /**
   * Optional. The etag of the ChangeRequest.
   *
   * @var string
   */
  public $etag;

  /**
   * Optional. The reason for rejecting the ChangeRequest.
   *
   * @param string $comment
   */
  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  /**
   * @return string
   */
  public function getComment()
  {
    return $this->comment;
  }
  /**
   * Optional. The etag of the ChangeRequest.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1RejectChangeRequestRequest::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1RejectChangeRequestRequest');
