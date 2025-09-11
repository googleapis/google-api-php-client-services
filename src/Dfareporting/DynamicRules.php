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

namespace Google\Service\Dfareporting;

class DynamicRules extends \Google\Collection
{
  protected $collection_key = 'remarketingValueAttributes';
  /**
   * @var int[]
   */
  public $autoTargetedFieldIds;
  protected $customRulesType = CustomRule::class;
  protected $customRulesDataType = 'array';
  protected $customValueFieldsType = CustomValueField::class;
  protected $customValueFieldsDataType = 'array';
  protected $proximityFilterType = ProximityFilter::class;
  protected $proximityFilterDataType = '';
  protected $remarketingValueAttributesType = RemarketingValueAttribute::class;
  protected $remarketingValueAttributesDataType = 'array';
  /**
   * @var string
   */
  public $rotationType;
  /**
   * @var string
   */
  public $ruleType;
  /**
   * @var int
   */
  public $weightFieldId;

  /**
   * @param int[]
   */
  public function setAutoTargetedFieldIds($autoTargetedFieldIds)
  {
    $this->autoTargetedFieldIds = $autoTargetedFieldIds;
  }
  /**
   * @return int[]
   */
  public function getAutoTargetedFieldIds()
  {
    return $this->autoTargetedFieldIds;
  }
  /**
   * @param CustomRule[]
   */
  public function setCustomRules($customRules)
  {
    $this->customRules = $customRules;
  }
  /**
   * @return CustomRule[]
   */
  public function getCustomRules()
  {
    return $this->customRules;
  }
  /**
   * @param CustomValueField[]
   */
  public function setCustomValueFields($customValueFields)
  {
    $this->customValueFields = $customValueFields;
  }
  /**
   * @return CustomValueField[]
   */
  public function getCustomValueFields()
  {
    return $this->customValueFields;
  }
  /**
   * @param ProximityFilter
   */
  public function setProximityFilter(ProximityFilter $proximityFilter)
  {
    $this->proximityFilter = $proximityFilter;
  }
  /**
   * @return ProximityFilter
   */
  public function getProximityFilter()
  {
    return $this->proximityFilter;
  }
  /**
   * @param RemarketingValueAttribute[]
   */
  public function setRemarketingValueAttributes($remarketingValueAttributes)
  {
    $this->remarketingValueAttributes = $remarketingValueAttributes;
  }
  /**
   * @return RemarketingValueAttribute[]
   */
  public function getRemarketingValueAttributes()
  {
    return $this->remarketingValueAttributes;
  }
  /**
   * @param string
   */
  public function setRotationType($rotationType)
  {
    $this->rotationType = $rotationType;
  }
  /**
   * @return string
   */
  public function getRotationType()
  {
    return $this->rotationType;
  }
  /**
   * @param string
   */
  public function setRuleType($ruleType)
  {
    $this->ruleType = $ruleType;
  }
  /**
   * @return string
   */
  public function getRuleType()
  {
    return $this->ruleType;
  }
  /**
   * @param int
   */
  public function setWeightFieldId($weightFieldId)
  {
    $this->weightFieldId = $weightFieldId;
  }
  /**
   * @return int
   */
  public function getWeightFieldId()
  {
    return $this->weightFieldId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DynamicRules::class, 'Google_Service_Dfareporting_DynamicRules');
