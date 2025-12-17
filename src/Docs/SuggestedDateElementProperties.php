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

class SuggestedDateElementProperties extends \Google\Model
{
  protected $dateElementPropertiesType = DateElementProperties::class;
  protected $dateElementPropertiesDataType = '';
  protected $dateElementPropertiesSuggestionStateType = DateElementPropertiesSuggestionState::class;
  protected $dateElementPropertiesSuggestionStateDataType = '';

  /**
   * DateElementProperties that only includes the changes made in this
   * suggestion. This can be used along with the
   * date_element_properties_suggestion_state to see which fields have changed
   * and their new values.
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
   * A mask that indicates which of the fields on the base DateElementProperties
   * have been changed in this suggestion.
   *
   * @param DateElementPropertiesSuggestionState $dateElementPropertiesSuggestionState
   */
  public function setDateElementPropertiesSuggestionState(DateElementPropertiesSuggestionState $dateElementPropertiesSuggestionState)
  {
    $this->dateElementPropertiesSuggestionState = $dateElementPropertiesSuggestionState;
  }
  /**
   * @return DateElementPropertiesSuggestionState
   */
  public function getDateElementPropertiesSuggestionState()
  {
    return $this->dateElementPropertiesSuggestionState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SuggestedDateElementProperties::class, 'Google_Service_Docs_SuggestedDateElementProperties');
