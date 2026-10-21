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

class AnchoredReviewComment extends \Google\Model
{
  /**
   * Default unspecified severity.
   */
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  /**
   * Critical flaw in proofs, methodology, or empirical claims.
   */
  public const SEVERITY_CRITICAL = 'CRITICAL';
  /**
   * Major issue affecting key conclusions or experimental validity.
   */
  public const SEVERITY_MAJOR = 'MAJOR';
  /**
   * Minor issue, presentation clarity, or missing detail.
   */
  public const SEVERITY_MINOR = 'MINOR';
  /**
   * Constructive suggestion or optional improvement.
   */
  public const SEVERITY_SUGGESTION = 'SUGGESTION';
  /**
   * Output only. Detailed markdown explanation of the review comment.
   *
   * @var string
   */
  public $bodyMarkdown;
  protected $citationReportType = CitationReport::class;
  protected $citationReportDataType = '';
  /**
   * Output only. Unique identifier for the comment within the review.
   *
   * @var string
   */
  public $commentId;
  protected $locationType = DocumentLocation::class;
  protected $locationDataType = '';
  /**
   * Output only. Severity classification of the comment.
   *
   * @var string
   */
  public $severity;
  /**
   * Output only. Optional suggested replacement text or edit for the anchored
   * span.
   *
   * @var string
   */
  public $suggestedEdit;
  /**
   * Output only. Short one-line summary of the review comment.
   *
   * @var string
   */
  public $summary;

  /**
   * Output only. Detailed markdown explanation of the review comment.
   *
   * @param string $bodyMarkdown
   */
  public function setBodyMarkdown($bodyMarkdown)
  {
    $this->bodyMarkdown = $bodyMarkdown;
  }
  /**
   * @return string
   */
  public function getBodyMarkdown()
  {
    return $this->bodyMarkdown;
  }
  /**
   * Output only. Optional structured citation verification report when this
   * comment corresponds to a bibliography reference.
   *
   * @param CitationReport $citationReport
   */
  public function setCitationReport(CitationReport $citationReport)
  {
    $this->citationReport = $citationReport;
  }
  /**
   * @return CitationReport
   */
  public function getCitationReport()
  {
    return $this->citationReport;
  }
  /**
   * Output only. Unique identifier for the comment within the review.
   *
   * @param string $commentId
   */
  public function setCommentId($commentId)
  {
    $this->commentId = $commentId;
  }
  /**
   * @return string
   */
  public function getCommentId()
  {
    return $this->commentId;
  }
  /**
   * Output only. Polymorphic location in the document where this comment is
   * anchored.
   *
   * @param DocumentLocation $location
   */
  public function setLocation(DocumentLocation $location)
  {
    $this->location = $location;
  }
  /**
   * @return DocumentLocation
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Output only. Severity classification of the comment.
   *
   * Accepted values: SEVERITY_UNSPECIFIED, CRITICAL, MAJOR, MINOR, SUGGESTION
   *
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
  /**
   * Output only. Optional suggested replacement text or edit for the anchored
   * span.
   *
   * @param string $suggestedEdit
   */
  public function setSuggestedEdit($suggestedEdit)
  {
    $this->suggestedEdit = $suggestedEdit;
  }
  /**
   * @return string
   */
  public function getSuggestedEdit()
  {
    return $this->suggestedEdit;
  }
  /**
   * Output only. Short one-line summary of the review comment.
   *
   * @param string $summary
   */
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  /**
   * @return string
   */
  public function getSummary()
  {
    return $this->summary;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AnchoredReviewComment::class, 'Google_Service_DeepReview_AnchoredReviewComment');
