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

class Google_Service_Supportcases_ListTopLevelCategoryInfosResponse extends Google_Collection
{
  protected $collection_key = 'categoryInfos';
  protected $categoryInfosType = 'Google_Service_Supportcases_CategoryInfo';
  protected $categoryInfosDataType = 'array';
  protected $consultCategoryInfoType = 'Google_Service_Supportcases_CategoryInfo';
  protected $consultCategoryInfoDataType = '';

  public function setCategoryInfos($categoryInfos)
  {
    $this->categoryInfos = $categoryInfos;
  }
  public function getCategoryInfos()
  {
    return $this->categoryInfos;
  }
  public function setConsultCategoryInfo(Google_Service_Supportcases_CategoryInfo $consultCategoryInfo)
  {
    $this->consultCategoryInfo = $consultCategoryInfo;
  }
  public function getConsultCategoryInfo()
  {
    return $this->consultCategoryInfo;
  }
}
