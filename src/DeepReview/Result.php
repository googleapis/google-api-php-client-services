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

namespace Google\Service\DeepReview;

class Result extends \Google\Collection
{
  protected $collection_key = 'anchoredComments';
  protected $anchoredCommentsType = AnchoredReviewComment::class;
  protected $anchoredCommentsDataType = 'array';
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /**
   * Output only. Synthesized review report markdown.
   *
   * @var string
   */
  public $reviewMarkdown;

  /**
   * Output only. Structured review comments anchored to specific locations in
   * the document. At most 300 anchored comments are returned per review.
   *
   * @param AnchoredReviewComment[] $anchoredComments
   */
  public function setAnchoredComments($anchoredComments)
  {
    $this->anchoredComments = $anchoredComments;
  }
  /**
   * @return AnchoredReviewComment[]
   */
  public function getAnchoredComments()
  {
    return $this->anchoredComments;
  }
  /**
   * Output only. Failure status details if review execution failed.
   *
   * @param Status $error
   */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /**
   * @return Status
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * Output only. Synthesized review report markdown.
   *
   * @param string $reviewMarkdown
   */
  public function setReviewMarkdown($reviewMarkdown)
  {
    $this->reviewMarkdown = $reviewMarkdown;
  }
  /**
   * @return string
   */
  public function getReviewMarkdown()
  {
    return $this->reviewMarkdown;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, 'Google_Service_DeepReview_Result');
