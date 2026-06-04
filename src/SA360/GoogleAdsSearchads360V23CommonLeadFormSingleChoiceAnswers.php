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

class GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers extends \Google\Collection
{
  protected $collection_key = 'answers';
  /**
   * List of choices for a single question field. The order of entries defines
   * UI order. Minimum of 2 answers required and maximum of 12 allowed.
   *
   * @var string[]
   */
  public $answers;

  /**
   * List of choices for a single question field. The order of entries defines
   * UI order. Minimum of 2 answers required and maximum of 12 allowed.
   *
   * @param string[] $answers
   */
  public function setAnswers($answers)
  {
    $this->answers = $answers;
  }
  /**
   * @return string[]
   */
  public function getAnswers()
  {
    return $this->answers;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLeadFormSingleChoiceAnswers');
