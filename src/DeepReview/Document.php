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

class Document extends \Google\Model
{
  /**
   * Output only. Timestamp when the document was initially created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. User-provided display title or filename for the document.
   *
   * @var string
   */
  public $displayName;
  protected $driveSourceType = DriveSource::class;
  protected $driveSourceDataType = '';
  protected $latestReviewSummaryType = ReviewSummary::class;
  protected $latestReviewSummaryDataType = '';
  /**
   * Identifier. Resource name in format `documents/{document}`.
   *
   * @var string
   */
  public $name;

  /**
   * Output only. Timestamp when the document was initially created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. User-provided display title or filename for the document.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. Reference to a Google Drive file to import.
   *
   * @param DriveSource $driveSource
   */
  public function setDriveSource(DriveSource $driveSource)
  {
    $this->driveSource = $driveSource;
  }
  /**
   * @return DriveSource
   */
  public function getDriveSource()
  {
    return $this->driveSource;
  }
  /**
   * Output only. Summary of the most recent review run for this document, if
   * any.
   *
   * @param ReviewSummary $latestReviewSummary
   */
  public function setLatestReviewSummary(ReviewSummary $latestReviewSummary)
  {
    $this->latestReviewSummary = $latestReviewSummary;
  }
  /**
   * @return ReviewSummary
   */
  public function getLatestReviewSummary()
  {
    return $this->latestReviewSummary;
  }
  /**
   * Identifier. Resource name in format `documents/{document}`.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Document::class, 'Google_Service_DeepReview_Document');
