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

class GooglePrivacyDlpV2AdjustByImageFindings extends \Google\Collection
{
  /**
   * Default value; same as POSSIBLE.
   */
  public const MIN_LIKELIHOOD_LIKELIHOOD_UNSPECIFIED = 'LIKELIHOOD_UNSPECIFIED';
  /**
   * Highest chance of a false positive.
   */
  public const MIN_LIKELIHOOD_VERY_UNLIKELY = 'VERY_UNLIKELY';
  /**
   * High chance of a false positive.
   */
  public const MIN_LIKELIHOOD_UNLIKELY = 'UNLIKELY';
  /**
   * Some matching signals. The default value.
   */
  public const MIN_LIKELIHOOD_POSSIBLE = 'POSSIBLE';
  /**
   * Low chance of a false positive.
   */
  public const MIN_LIKELIHOOD_LIKELY = 'LIKELY';
  /**
   * Confidence level is high. Lowest chance of a false positive.
   */
  public const MIN_LIKELIHOOD_VERY_LIKELY = 'VERY_LIKELY';
  protected $collection_key = 'infoTypes';
  protected $imageContainmentTypeType = GooglePrivacyDlpV2ImageContainmentType::class;
  protected $imageContainmentTypeDataType = '';
  protected $infoTypesType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypesDataType = 'array';
  /**
   * Required. Minimum likelihood of the `adjust_by_image_findings.info_types`
   * finding. If the likelihood is lower than this value, Sensitive Data
   * Protection doesn't adjust the likelihood of the
   * `InspectionRuleSet.info_types` finding.
   *
   * @var string
   */
  public $minLikelihood;

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
   * the adjustment rule. Sensitive Data Protection adjusts the likelihood of an
   * image finding if its bounding box has the specified spatial relationship
   * (defined by `image_containment_type`) with a finding of an infoType in this
   * list. For example, you can create a rule to adjust the likelihood of a
   * `US_PASSPORT` finding if it is enclosed by a finding of
   * `OBJECT_TYPE/PERSON/PASSPORT`. To configure this, set `US_PASSPORT` in
   * `InspectionRuleSet.info_types`. Add an `adjustment_rule` with an
   * `adjust_by_image_findings.info_types` that contains
   * `OBJECT_TYPE/PERSON/PASSPORT` and `image_containment_type` set to
   * `encloses`. In this case, the likelihood of the `US_PASSPORT` finding is
   * adjusted, but the likelihood of the `OBJECT_TYPE/PERSON/PASSPORT` finding
   * is not.
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
  /**
   * Required. Minimum likelihood of the `adjust_by_image_findings.info_types`
   * finding. If the likelihood is lower than this value, Sensitive Data
   * Protection doesn't adjust the likelihood of the
   * `InspectionRuleSet.info_types` finding.
   *
   * Accepted values: LIKELIHOOD_UNSPECIFIED, VERY_UNLIKELY, UNLIKELY, POSSIBLE,
   * LIKELY, VERY_LIKELY
   *
   * @param self::MIN_LIKELIHOOD_* $minLikelihood
   */
  public function setMinLikelihood($minLikelihood)
  {
    $this->minLikelihood = $minLikelihood;
  }
  /**
   * @return self::MIN_LIKELIHOOD_*
   */
  public function getMinLikelihood()
  {
    return $this->minLikelihood;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2AdjustByImageFindings::class, 'Google_Service_DLP_GooglePrivacyDlpV2AdjustByImageFindings');
