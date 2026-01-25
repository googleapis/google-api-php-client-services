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

class GooglePrivacyDlpV2ImageContainmentType extends \Google\Model
{
  protected $enclosesType = GooglePrivacyDlpV2Encloses::class;
  protected $enclosesDataType = '';
  protected $fullyInsideType = GooglePrivacyDlpV2FullyInside::class;
  protected $fullyInsideDataType = '';
  protected $overlapsType = GooglePrivacyDlpV2Overlap::class;
  protected $overlapsDataType = '';

  /**
   * The context finding's bounding box must fully contain the target finding's
   * bounding box.
   *
   * @param GooglePrivacyDlpV2Encloses $encloses
   */
  public function setEncloses(GooglePrivacyDlpV2Encloses $encloses)
  {
    $this->encloses = $encloses;
  }
  /**
   * @return GooglePrivacyDlpV2Encloses
   */
  public function getEncloses()
  {
    return $this->encloses;
  }
  /**
   * The context finding's bounding box must be fully inside the target
   * finding's bounding box.
   *
   * @param GooglePrivacyDlpV2FullyInside $fullyInside
   */
  public function setFullyInside(GooglePrivacyDlpV2FullyInside $fullyInside)
  {
    $this->fullyInside = $fullyInside;
  }
  /**
   * @return GooglePrivacyDlpV2FullyInside
   */
  public function getFullyInside()
  {
    return $this->fullyInside;
  }
  /**
   * The context finding's bounding box and the target finding's bounding box
   * must have a non-zero intersection.
   *
   * @param GooglePrivacyDlpV2Overlap $overlaps
   */
  public function setOverlaps(GooglePrivacyDlpV2Overlap $overlaps)
  {
    $this->overlaps = $overlaps;
  }
  /**
   * @return GooglePrivacyDlpV2Overlap
   */
  public function getOverlaps()
  {
    return $this->overlaps;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2ImageContainmentType::class, 'Google_Service_DLP_GooglePrivacyDlpV2ImageContainmentType');
