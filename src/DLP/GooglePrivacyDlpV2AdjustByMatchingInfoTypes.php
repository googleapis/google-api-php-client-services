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

class GooglePrivacyDlpV2AdjustByMatchingInfoTypes extends \Google\Collection
{
  /**
   * Invalid.
   */
  public const MATCHING_TYPE_MATCHING_TYPE_UNSPECIFIED = 'MATCHING_TYPE_UNSPECIFIED';
  /**
   * Full match. - Dictionary: join of Dictionary results matched the complete
   * finding quote - Regex: all regex matches fill a finding quote from start to
   * end - Exclude infoType: completely inside affecting infoTypes findings
   */
  public const MATCHING_TYPE_MATCHING_TYPE_FULL_MATCH = 'MATCHING_TYPE_FULL_MATCH';
  /**
   * Partial match. - Dictionary: at least one of the tokens in the finding
   * matches - Regex: substring of the finding matches - Exclude infoType:
   * intersects with affecting infoTypes findings
   */
  public const MATCHING_TYPE_MATCHING_TYPE_PARTIAL_MATCH = 'MATCHING_TYPE_PARTIAL_MATCH';
  /**
   * Inverse match. - Dictionary: no tokens in the finding match the dictionary
   * - Regex: finding doesn't match the regex - Exclude infoType: no
   * intersection with affecting infoTypes findings
   */
  public const MATCHING_TYPE_MATCHING_TYPE_INVERSE_MATCH = 'MATCHING_TYPE_INVERSE_MATCH';
  /**
   * Rule-specific match. The matching logic is based on the specific rule being
   * used. This is required for rules where the matching behavior is not a
   * simple string comparison (e.g., image containment). This matching type can
   * only be used with the `ExcludeByImageFindings` rule. - Exclude by image
   * findings: The matching logic is defined within `ExcludeByImageFindings`
   * based on spatial relationships between bounding boxes.
   */
  public const MATCHING_TYPE_MATCHING_TYPE_RULE_SPECIFIC = 'MATCHING_TYPE_RULE_SPECIFIC';
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
  protected $infoTypesType = GooglePrivacyDlpV2InfoType::class;
  protected $infoTypesDataType = 'array';
  /**
   * How the adjustment rule is applied. Only MATCHING_TYPE_PARTIAL_MATCH is
   * supported: - Partial match: adjusts the findings of infoTypes specified in
   * the inspection rule when they have a nonempty intersection with a finding
   * of an infoType specified in this adjustment rule.
   *
   * @var string
   */
  public $matchingType;
  /**
   * Required. Minimum likelihood of the
   * `adjust_by_matching_info_types.info_types` finding. If the likelihood is
   * lower than this value, Sensitive Data Protection doesn't adjust the
   * likelihood of the `InspectionRuleSet.info_types` finding.
   *
   * @var string
   */
  public $minLikelihood;

  /**
   * Sensitive Data Protection adjusts the likelihood of a finding if that
   * finding also matches one of these infoTypes. For example, you can create a
   * rule to adjust the likelihood of a `PHONE_NUMBER` finding if the string is
   * found within a document that is classified as `DOCUMENT_TYPE/HR/RESUME`. To
   * configure this, set `PHONE_NUMBER` in `InspectionRuleSet.info_types`. Add
   * an `adjustment_rule` with an `adjust_by_matching_info_types.info_types`
   * that contains `DOCUMENT_TYPE/HR/RESUME`. In this case, the likelihood of
   * the `PHONE_NUMBER` finding is adjusted, but the likelihood of the
   * `DOCUMENT_TYPE/HR/RESUME` finding is not.
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
   * How the adjustment rule is applied. Only MATCHING_TYPE_PARTIAL_MATCH is
   * supported: - Partial match: adjusts the findings of infoTypes specified in
   * the inspection rule when they have a nonempty intersection with a finding
   * of an infoType specified in this adjustment rule.
   *
   * Accepted values: MATCHING_TYPE_UNSPECIFIED, MATCHING_TYPE_FULL_MATCH,
   * MATCHING_TYPE_PARTIAL_MATCH, MATCHING_TYPE_INVERSE_MATCH,
   * MATCHING_TYPE_RULE_SPECIFIC
   *
   * @param self::MATCHING_TYPE_* $matchingType
   */
  public function setMatchingType($matchingType)
  {
    $this->matchingType = $matchingType;
  }
  /**
   * @return self::MATCHING_TYPE_*
   */
  public function getMatchingType()
  {
    return $this->matchingType;
  }
  /**
   * Required. Minimum likelihood of the
   * `adjust_by_matching_info_types.info_types` finding. If the likelihood is
   * lower than this value, Sensitive Data Protection doesn't adjust the
   * likelihood of the `InspectionRuleSet.info_types` finding.
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
class_alias(GooglePrivacyDlpV2AdjustByMatchingInfoTypes::class, 'Google_Service_DLP_GooglePrivacyDlpV2AdjustByMatchingInfoTypes');
