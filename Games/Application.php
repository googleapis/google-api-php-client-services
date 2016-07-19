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

class Google_Service_Games_Application extends Google_Collection
{
  protected $collection_key = 'instances';
  protected $internal_gapi_mappings = array(
        "achievementCount" => "achievement_count",
        "leaderboardCount" => "leaderboard_count",
  );
  public $achievementCount;
  public $assets;
  public $author;
  public $category;
  public $description;
  public $enabledFeatures;
  public $id;
  public $instances;
  public $kind;
  public $lastUpdatedTimestamp;
  public $leaderboardCount;
  public $name;
  public $themeColor;

  public function setAchievementCount($achievementCount)
  {
    $this->achievementCount = $achievementCount;
  }
  public function getAchievementCount()
  {
    return $this->achievementCount;
  }
  public function setAssets(array $assets)
  {
    foreach ($assets as $a) {
      if (!$a instanceof Google_Service_Games_ImageAsset) {
        throw new InvalidArgumentException('First argument to setAssets must be an array of Google_Service_Games_ImageAsset');
      }
    }
    $this->assets = $assets;
  }
  public function getAssets()
  {
    return $this->assets;
  }
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  public function getAuthor()
  {
    return $this->author;
  }
  public function setCategory(Google_Service_Games_ApplicationCategory $category)
  {
    $this->category = $category;
  }
  public function getCategory()
  {
    return $this->category;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setEnabledFeatures(array $enabledFeatures)
  {
    $this->enabledFeatures = $enabledFeatures;
  }
  public function getEnabledFeatures()
  {
    return $this->enabledFeatures;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setInstances(array $instances)
  {
    foreach ($instances as $i) {
      if (!$i instanceof Google_Service_Games_Instance) {
        throw new InvalidArgumentException('First argument to setInstances must be an array of Google_Service_Games_Instance');
      }
    }
    $this->instances = $instances;
  }
  public function getInstances()
  {
    return $this->instances;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }
  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }
  public function setLeaderboardCount($leaderboardCount)
  {
    $this->leaderboardCount = $leaderboardCount;
  }
  public function getLeaderboardCount()
  {
    return $this->leaderboardCount;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setThemeColor($themeColor)
  {
    $this->themeColor = $themeColor;
  }
  public function getThemeColor()
  {
    return $this->themeColor;
  }
}
