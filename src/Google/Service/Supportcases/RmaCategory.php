<?php
/*
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

class Google_Service_Supportcases_RmaCategory extends Google_Collection
{
  protected $collection_key = 'subcategories';
  public $categoryName;
  public $subcategories;

  public function setCategoryName($categoryName)
  {
    $this->categoryName = $categoryName;
  }
  public function getCategoryName()
  {
    return $this->categoryName;
  }
  public function setSubcategories($subcategories)
  {
    $this->subcategories = $subcategories;
  }
  public function getSubcategories()
  {
    return $this->subcategories;
  }
}
