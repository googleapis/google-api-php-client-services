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

namespace Google\Service\Contentwarehouse;

class QualityOrbitOrbitImageIntent extends \Google\Collection
{
  protected $collection_key = 'missingInputs';
  /**
   * @var string
   */
  public $imageIntent;
  /**
   * @var string[]
   */
  public $missingInputs;
  /**
   * @var string
   */
  public $reach;
  /**
   * @var bool
   */
  public $remove;
  /**
   * @var float
   */
  public $score;
  /**
   * @var bool
   */
  public $trigger;

  /**
   * @param string
   */
  public function setImageIntent($imageIntent)
  {
    $this->imageIntent = $imageIntent;
  }
  /**
   * @return string
   */
  public function getImageIntent()
  {
    return $this->imageIntent;
  }
  /**
   * @param string[]
   */
  public function setMissingInputs($missingInputs)
  {
    $this->missingInputs = $missingInputs;
  }
  /**
   * @return string[]
   */
  public function getMissingInputs()
  {
    return $this->missingInputs;
  }
  /**
   * @param string
   */
  public function setReach($reach)
  {
    $this->reach = $reach;
  }
  /**
   * @return string
   */
  public function getReach()
  {
    return $this->reach;
  }
  /**
   * @param bool
   */
  public function setRemove($remove)
  {
    $this->remove = $remove;
  }
  /**
   * @return bool
   */
  public function getRemove()
  {
    return $this->remove;
  }
  /**
   * @param float
   */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /**
   * @return float
   */
  public function getScore()
  {
    return $this->score;
  }
  /**
   * @param bool
   */
  public function setTrigger($trigger)
  {
    $this->trigger = $trigger;
  }
  /**
   * @return bool
   */
  public function getTrigger()
  {
    return $this->trigger;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QualityOrbitOrbitImageIntent::class, 'Google_Service_Contentwarehouse_QualityOrbitOrbitImageIntent');
