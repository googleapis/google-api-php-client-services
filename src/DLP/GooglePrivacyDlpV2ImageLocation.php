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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2ImageLocation extends \Google\Collection
{
  protected $collection_key = 'boundingBoxes';
  protected $boundingBoxesType = GooglePrivacyDlpV2BoundingBox::class;
  protected $boundingBoxesDataType = 'array';
  /**
   * The 0-indexed page number or frame index for multi-page image formats.
   *
   * @var int
   */
  public $pageNumber;

  /**
   * Bounding boxes locating the pixels within the image containing the finding.
   *
   * @param GooglePrivacyDlpV2BoundingBox[] $boundingBoxes
   */
  public function setBoundingBoxes($boundingBoxes)
  {
    $this->boundingBoxes = $boundingBoxes;
  }
  /**
   * @return GooglePrivacyDlpV2BoundingBox[]
   */
  public function getBoundingBoxes()
  {
    return $this->boundingBoxes;
  }
  /**
   * The 0-indexed page number or frame index for multi-page image formats.
   *
   * @param int $pageNumber
   */
  public function setPageNumber($pageNumber)
  {
    $this->pageNumber = $pageNumber;
  }
  /**
   * @return int
   */
  public function getPageNumber()
  {
    return $this->pageNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2ImageLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2ImageLocation');
