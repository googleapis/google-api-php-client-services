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

class GoogleAdsSearchads360V23CommonKeywordConcept extends \Google\Model
{
  protected $conceptGroupType = GoogleAdsSearchads360V23CommonConceptGroup::class;
  protected $conceptGroupDataType = '';
  /**
   * The concept name for the keyword in the concept_group.
   *
   * @var string
   */
  public $name;

  /**
   * The concept group of the concept details.
   *
   * @param GoogleAdsSearchads360V23CommonConceptGroup $conceptGroup
   */
  public function setConceptGroup(GoogleAdsSearchads360V23CommonConceptGroup $conceptGroup)
  {
    $this->conceptGroup = $conceptGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonConceptGroup
   */
  public function getConceptGroup()
  {
    return $this->conceptGroup;
  }
  /**
   * The concept name for the keyword in the concept_group.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonKeywordConcept::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonKeywordConcept');
