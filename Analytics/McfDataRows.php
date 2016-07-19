<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Analytics_McfDataRows extends Google_Collection
{
  protected $collection_key = 'conversionPathValue';
  public $conversionPathValue;
  public $primitiveValue;

  public function setConversionPathValue(array $conversionPathValue)
  {
    foreach ($conversionPathValue as $c) {
      if (!$c instanceof Google_Service_Analytics_McfDataRowsConversionPathValue) {
        throw new InvalidArgumentException('First argument to setConversionPathValue must be an array of Google_Service_Analytics_McfDataRowsConversionPathValue');
      }
    }
    $this->conversionPathValue = $conversionPathValue;
  }
  public function getConversionPathValue()
  {
    return $this->conversionPathValue;
  }
  public function setPrimitiveValue($primitiveValue)
  {
    $this->primitiveValue = $primitiveValue;
  }
  public function getPrimitiveValue()
  {
    return $this->primitiveValue;
  }
}
