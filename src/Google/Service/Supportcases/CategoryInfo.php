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

class Google_Service_Supportcases_CategoryInfo extends Google_Collection
{
  protected $collection_key = 'pathNames';
  protected $childrenType = 'Google_Service_Supportcases_CategoryInfo';
  protected $childrenDataType = 'array';
  protected $matchDetailType = 'Google_Service_Supportcases_MatchDetail';
  protected $matchDetailDataType = '';
  public $name;
  public $numChildren;
  public $pathIds;
  public $pathNames;

  public function setChildren($children)
  {
    $this->children = $children;
  }
  public function getChildren()
  {
    return $this->children;
  }
  public function setMatchDetail(Google_Service_Supportcases_MatchDetail $matchDetail)
  {
    $this->matchDetail = $matchDetail;
  }
  public function getMatchDetail()
  {
    return $this->matchDetail;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setNumChildren($numChildren)
  {
    $this->numChildren = $numChildren;
  }
  public function getNumChildren()
  {
    return $this->numChildren;
  }
  public function setPathIds($pathIds)
  {
    $this->pathIds = $pathIds;
  }
  public function getPathIds()
  {
    return $this->pathIds;
  }
  public function setPathNames($pathNames)
  {
    $this->pathNames = $pathNames;
  }
  public function getPathNames()
  {
    return $this->pathNames;
  }
}
