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

namespace Google\Service\CustomerEngagementSuite;

class OptionQuestionsChunkQuestion extends \Google\Collection
{
  protected $collection_key = 'options';
  protected $optionsType = OptionQuestionsChunkOption::class;
  protected $optionsDataType = 'array';
  /**
   * The question header text.
   *
   * @var string
   */
  public $question;

  /**
   * The selectable options, in presentation order.
   *
   * @param OptionQuestionsChunkOption[] $options
   */
  public function setOptions($options)
  {
    $this->options = $options;
  }
  /**
   * @return OptionQuestionsChunkOption[]
   */
  public function getOptions()
  {
    return $this->options;
  }
  /**
   * The question header text.
   *
   * @param string $question
   */
  public function setQuestion($question)
  {
    $this->question = $question;
  }
  /**
   * @return string
   */
  public function getQuestion()
  {
    return $this->question;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OptionQuestionsChunkQuestion::class, 'Google_Service_CustomerEngagementSuite_OptionQuestionsChunkQuestion');
