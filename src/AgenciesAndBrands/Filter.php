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

namespace Google\Service\AgenciesAndBrands;

class Filter extends \Google\Model
{
  protected $andFilterType = FilterList::class;
  protected $andFilterDataType = '';
  protected $fieldFilterType = FieldFilter::class;
  protected $fieldFilterDataType = '';
  protected $notFilterType = Filter::class;
  protected $notFilterDataType = '';
  protected $orFilterType = FilterList::class;
  protected $orFilterDataType = '';

  /**
   * A list of filters whose results are AND-ed.
   *
   * @param FilterList $andFilter
   */
  public function setAndFilter(FilterList $andFilter)
  {
    $this->andFilter = $andFilter;
  }
  /**
   * @return FilterList
   */
  public function getAndFilter()
  {
    return $this->andFilter;
  }
  /**
   * A filter on a single field.
   *
   * @param FieldFilter $fieldFilter
   */
  public function setFieldFilter(FieldFilter $fieldFilter)
  {
    $this->fieldFilter = $fieldFilter;
  }
  /**
   * @return FieldFilter
   */
  public function getFieldFilter()
  {
    return $this->fieldFilter;
  }
  /**
   * A filter whose result is negated.
   *
   * @param Filter $notFilter
   */
  public function setNotFilter(Filter $notFilter)
  {
    $this->notFilter = $notFilter;
  }
  /**
   * @return Filter
   */
  public function getNotFilter()
  {
    return $this->notFilter;
  }
  /**
   * A list of filters whose results are OR-ed.
   *
   * @param FilterList $orFilter
   */
  public function setOrFilter(FilterList $orFilter)
  {
    $this->orFilter = $orFilter;
  }
  /**
   * @return FilterList
   */
  public function getOrFilter()
  {
    return $this->orFilter;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, 'Google_Service_AgenciesAndBrands_Filter');
