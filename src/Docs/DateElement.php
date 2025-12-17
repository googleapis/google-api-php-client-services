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

namespace Google\Service\Docs;

class DateElement extends \Google\Collection
{
  protected $collection_key = 'suggestedInsertionIds';
  protected $dateElementPropertiesType = DateElementProperties::class;
  protected $dateElementPropertiesDataType = '';
  /**
   * Output only. The unique ID of this date.
   *
   * @var string
   */
  public $dateId;
  protected $suggestedDateElementPropertiesChangesType = SuggestedDateElementProperties::class;
  protected $suggestedDateElementPropertiesChangesDataType = 'map';
  /**
   * IDs for suggestions that remove this date from the document. A DateElement
   * might have multiple deletion IDs if, for example, multiple users suggest
   * deleting it. If empty, then this date isn't suggested for deletion.
   *
   * @var string[]
   */
  public $suggestedDeletionIds;
  /**
   * IDs for suggestions that insert this date into the document. A DateElement
   * might have multiple insertion IDs if it's a nested suggested change (a
   * suggestion within a suggestion made by a different user, for example). If
   * empty, then this date isn't a suggested insertion.
   *
   * @var string[]
   */
  public $suggestedInsertionIds;
  protected $suggestedTextStyleChangesType = SuggestedTextStyle::class;
  protected $suggestedTextStyleChangesDataType = 'map';
  protected $textStyleType = TextStyle::class;
  protected $textStyleDataType = '';

  /**
   * The properties of this DateElement.
   *
   * @param DateElementProperties $dateElementProperties
   */
  public function setDateElementProperties(DateElementProperties $dateElementProperties)
  {
    $this->dateElementProperties = $dateElementProperties;
  }
  /**
   * @return DateElementProperties
   */
  public function getDateElementProperties()
  {
    return $this->dateElementProperties;
  }
  /**
   * Output only. The unique ID of this date.
   *
   * @param string $dateId
   */
  public function setDateId($dateId)
  {
    $this->dateId = $dateId;
  }
  /**
   * @return string
   */
  public function getDateId()
  {
    return $this->dateId;
  }
  /**
   * The suggested changes to the date element properties, keyed by suggestion
   * ID.
   *
   * @param SuggestedDateElementProperties[] $suggestedDateElementPropertiesChanges
   */
  public function setSuggestedDateElementPropertiesChanges($suggestedDateElementPropertiesChanges)
  {
    $this->suggestedDateElementPropertiesChanges = $suggestedDateElementPropertiesChanges;
  }
  /**
   * @return SuggestedDateElementProperties[]
   */
  public function getSuggestedDateElementPropertiesChanges()
  {
    return $this->suggestedDateElementPropertiesChanges;
  }
  /**
   * IDs for suggestions that remove this date from the document. A DateElement
   * might have multiple deletion IDs if, for example, multiple users suggest
   * deleting it. If empty, then this date isn't suggested for deletion.
   *
   * @param string[] $suggestedDeletionIds
   */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /**
   * @return string[]
   */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /**
   * IDs for suggestions that insert this date into the document. A DateElement
   * might have multiple insertion IDs if it's a nested suggested change (a
   * suggestion within a suggestion made by a different user, for example). If
   * empty, then this date isn't a suggested insertion.
   *
   * @param string[] $suggestedInsertionIds
   */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /**
   * @return string[]
   */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
  /**
   * The suggested text style changes to this DateElement, keyed by suggestion
   * ID.
   *
   * @param SuggestedTextStyle[] $suggestedTextStyleChanges
   */
  public function setSuggestedTextStyleChanges($suggestedTextStyleChanges)
  {
    $this->suggestedTextStyleChanges = $suggestedTextStyleChanges;
  }
  /**
   * @return SuggestedTextStyle[]
   */
  public function getSuggestedTextStyleChanges()
  {
    return $this->suggestedTextStyleChanges;
  }
  /**
   * The text style of this DateElement.
   *
   * @param TextStyle $textStyle
   */
  public function setTextStyle(TextStyle $textStyle)
  {
    $this->textStyle = $textStyle;
  }
  /**
   * @return TextStyle
   */
  public function getTextStyle()
  {
    return $this->textStyle;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DateElement::class, 'Google_Service_Docs_DateElement');
