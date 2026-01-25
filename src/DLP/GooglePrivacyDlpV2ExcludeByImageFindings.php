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

class GooglePrivacyDlpV2ExcludeByImageFindings extends \Google\Collection
{
  protected $collection_key = 'infoTypes';
  protected $imageContainmentTypeType = GooglePrivacyDlpV2ImageContainmentType::class;
  protected $imageContainmentTypeDataType = '';
  protected $infoTypesType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypesDataType = 'array';

  /**
   * Specifies the required spatial relationship between the bounding boxes of
   * the target finding and the context infoType findings.
   *
   * @param GooglePrivacyDlpV2ImageContainmentType $imageContainmentType
   */
  public function setImageContainmentType(GooglePrivacyDlpV2ImageContainmentType $imageContainmentType)
  {
    $this->imageContainmentType = $imageContainmentType;
  }
  /**
   * @return GooglePrivacyDlpV2ImageContainmentType
   */
  public function getImageContainmentType()
  {
    return $this->imageContainmentType;
  }
  /**
   * A list of image-supported infoTypes—excluding [document
   * infoTypes](https://cloud.google.com/sensitive-data-
   * protection/docs/infotypes-reference#documents)—to be used as context for
   * the exclusion rule. A finding is excluded if its bounding box has the
   * specified spatial relationship (defined by `image_containment_type`) with a
   * finding of an infoType in this list. For example, if
   * `InspectionRuleSet.info_types` includes `OBJECT_TYPE/PERSON` and this
   * `exclusion_rule` specifies `info_types` as `OBJECT_TYPE/PERSON/PASSPORT`
   * with `image_containment_type` set to `encloses`, then `OBJECT_TYPE/PERSON`
   * findings will be excluded if they are fully contained within the bounding
   * box of an `OBJECT_TYPE/PERSON/PASSPORT` finding.
   *
   * @param GooglePrivacyDlpV2InfoType[] $infoTypes
   */
  public function setInfoTypes($infoTypes)
  {
    $this->infoTypes = $infoTypes;
  }
  /**
   * @return GooglePrivacyDlpV2InfoType[]
   */
  public function getInfoTypes()
  {
    return $this->infoTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2ExcludeByImageFindings::class, 'Google_Service_DLP_GooglePrivacyDlpV2ExcludeByImageFindings');
