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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonUserListRuleItemInfo extends \Google\Model
{
  protected $dateRuleItemType = GoogleAdsSearchads360V23CommonUserListDateRuleItemInfo::class;
  protected $dateRuleItemDataType = '';
  /**
   * Rule variable name. It should match the corresponding key name fired by the
   * pixel. A name must begin with US-ascii letters or underscore or UTF8 code
   * that is greater than 127 and consist of US-ascii letters or digits or
   * underscore or UTF8 code that is greater than 127. For websites, there are
   * two built-in variable URL (name = 'url__') and referrer URL (name =
   * 'ref_url__'). This field must be populated when creating a new rule item.
   *
   * @var string
   */
  public $name;
  protected $numberRuleItemType = GoogleAdsSearchads360V23CommonUserListNumberRuleItemInfo::class;
  protected $numberRuleItemDataType = '';
  protected $stringRuleItemType = GoogleAdsSearchads360V23CommonUserListStringRuleItemInfo::class;
  protected $stringRuleItemDataType = '';

  /**
   * An atomic rule item composed of a date operation.
   *
   * @param GoogleAdsSearchads360V23CommonUserListDateRuleItemInfo $dateRuleItem
   */
  public function setDateRuleItem(GoogleAdsSearchads360V23CommonUserListDateRuleItemInfo $dateRuleItem)
  {
    $this->dateRuleItem = $dateRuleItem;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListDateRuleItemInfo
   */
  public function getDateRuleItem()
  {
    return $this->dateRuleItem;
  }
  /**
   * Rule variable name. It should match the corresponding key name fired by the
   * pixel. A name must begin with US-ascii letters or underscore or UTF8 code
   * that is greater than 127 and consist of US-ascii letters or digits or
   * underscore or UTF8 code that is greater than 127. For websites, there are
   * two built-in variable URL (name = 'url__') and referrer URL (name =
   * 'ref_url__'). This field must be populated when creating a new rule item.
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
   * An atomic rule item composed of a number operation.
   *
   * @param GoogleAdsSearchads360V23CommonUserListNumberRuleItemInfo $numberRuleItem
   */
  public function setNumberRuleItem(GoogleAdsSearchads360V23CommonUserListNumberRuleItemInfo $numberRuleItem)
  {
    $this->numberRuleItem = $numberRuleItem;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListNumberRuleItemInfo
   */
  public function getNumberRuleItem()
  {
    return $this->numberRuleItem;
  }
  /**
   * An atomic rule item composed of a string operation.
   *
   * @param GoogleAdsSearchads360V23CommonUserListStringRuleItemInfo $stringRuleItem
   */
  public function setStringRuleItem(GoogleAdsSearchads360V23CommonUserListStringRuleItemInfo $stringRuleItem)
  {
    $this->stringRuleItem = $stringRuleItem;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListStringRuleItemInfo
   */
  public function getStringRuleItem()
  {
    return $this->stringRuleItem;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonUserListRuleItemInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUserListRuleItemInfo');
