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

class ProximityFilter extends \Google\Model
{
  /**
   * @var int
   */
  public $fieldId;
  /**
   * @var string
   */
  public $radiusBucketType;
  /**
   * @var string
   */
  public $radiusUnitType;
  /**
   * @var int
   */
  public $radiusValue;

  /**
   * @param int
   */
  public function setFieldId($fieldId)
  {
    $this->fieldId = $fieldId;
  }
  /**
   * @return int
   */
  public function getFieldId()
  {
    return $this->fieldId;
  }
  /**
   * @param string
   */
  public function setRadiusBucketType($radiusBucketType)
  {
    $this->radiusBucketType = $radiusBucketType;
  }
  /**
   * @return string
   */
  public function getRadiusBucketType()
  {
    return $this->radiusBucketType;
  }
  /**
   * @param string
   */
  public function setRadiusUnitType($radiusUnitType)
  {
    $this->radiusUnitType = $radiusUnitType;
  }
  /**
   * @return string
   */
  public function getRadiusUnitType()
  {
    return $this->radiusUnitType;
  }
  /**
   * @param int
   */
  public function setRadiusValue($radiusValue)
  {
    $this->radiusValue = $radiusValue;
  }
  /**
   * @return int
   */
  public function getRadiusValue()
  {
    return $this->radiusValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProximityFilter::class, 'Google_Service_Dfareporting_ProximityFilter');
