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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1AutoLabelingRule extends \Google\Collection
{
  /**
   * Unspecified label key type.
   */
  public const LABEL_KEY_TYPE_LABEL_KEY_TYPE_UNSPECIFIED = 'LABEL_KEY_TYPE_UNSPECIFIED';
  /**
   * The label key is custom defined by the user.
   */
  public const LABEL_KEY_TYPE_LABEL_KEY_TYPE_CUSTOM = 'LABEL_KEY_TYPE_CUSTOM';
  protected $collection_key = 'conditions';
  /**
   * Whether the rule is active.
   *
   * @var bool
   */
  public $active;
  protected $conditionsType = GoogleCloudContactcenterinsightsV1AutoLabelingRuleLabelingCondition::class;
  protected $conditionsDataType = 'array';
  /**
   * Output only. The time at which this rule was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * The description of the rule.
   *
   * @var string
   */
  public $description;
  /**
   * The user-provided display name of the rule.
   *
   * @var string
   */
  public $displayName;
  /**
   * The label key. This is also the {auto_labeling_rule} in the resource name.
   * Only settable if label_key_type is LABEL_KEY_TYPE_CUSTOM.
   *
   * @var string
   */
  public $labelKey;
  /**
   * The type of the label key.
   *
   * @var string
   */
  public $labelKeyType;
  /**
   * Identifier. The resource name of the auto-labeling rule. Format: projects/{
   * project}/locations/{location}/autoLabelingRules/{auto_labeling_rule}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The most recent time at which the rule was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Whether the rule is active.
   *
   * @param bool $active
   */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /**
   * @return bool
   */
  public function getActive()
  {
    return $this->active;
  }
  /**
   * Conditions to apply for auto-labeling the label_key. Representing
   * sequential block of if .. else if .. else statements. The value of the
   * first matching condition will be used.
   *
   * @param GoogleCloudContactcenterinsightsV1AutoLabelingRuleLabelingCondition[] $conditions
   */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1AutoLabelingRuleLabelingCondition[]
   */
  public function getConditions()
  {
    return $this->conditions;
  }
  /**
   * Output only. The time at which this rule was created.
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
   * The description of the rule.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * The user-provided display name of the rule.
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
   * The label key. This is also the {auto_labeling_rule} in the resource name.
   * Only settable if label_key_type is LABEL_KEY_TYPE_CUSTOM.
   *
   * @param string $labelKey
   */
  public function setLabelKey($labelKey)
  {
    $this->labelKey = $labelKey;
  }
  /**
   * @return string
   */
  public function getLabelKey()
  {
    return $this->labelKey;
  }
  /**
   * The type of the label key.
   *
   * Accepted values: LABEL_KEY_TYPE_UNSPECIFIED, LABEL_KEY_TYPE_CUSTOM
   *
   * @param self::LABEL_KEY_TYPE_* $labelKeyType
   */
  public function setLabelKeyType($labelKeyType)
  {
    $this->labelKeyType = $labelKeyType;
  }
  /**
   * @return self::LABEL_KEY_TYPE_*
   */
  public function getLabelKeyType()
  {
    return $this->labelKeyType;
  }
  /**
   * Identifier. The resource name of the auto-labeling rule. Format: projects/{
   * project}/locations/{location}/autoLabelingRules/{auto_labeling_rule}
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
  /**
   * Output only. The most recent time at which the rule was updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1AutoLabelingRule::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1AutoLabelingRule');
