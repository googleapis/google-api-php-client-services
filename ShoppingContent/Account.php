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

class Google_Service_ShoppingContent_Account extends Google_Collection
{
  protected $collection_key = 'users';
  public $adultContent;
  public $adwordsLinks;
  public $id;
  public $kind;
  public $name;
  public $reviewsUrl;
  public $sellerId;
  public $users;
  public $websiteUrl;

  public function setAdultContent($adultContent)
  {
    $this->adultContent = $adultContent;
  }
  public function getAdultContent()
  {
    return $this->adultContent;
  }
  public function setAdwordsLinks(array $adwordsLinks)
  {
    foreach ($adwordsLinks as $a) {
      if (!$a instanceof Google_Service_ShoppingContent_AccountAdwordsLink) {
        throw new InvalidArgumentException('First argument to setAdwordsLinks must be an array of Google_Service_ShoppingContent_AccountAdwordsLink');
      }
    }
    $this->adwordsLinks = $adwordsLinks;
  }
  public function getAdwordsLinks()
  {
    return $this->adwordsLinks;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setReviewsUrl($reviewsUrl)
  {
    $this->reviewsUrl = $reviewsUrl;
  }
  public function getReviewsUrl()
  {
    return $this->reviewsUrl;
  }
  public function setSellerId($sellerId)
  {
    $this->sellerId = $sellerId;
  }
  public function getSellerId()
  {
    return $this->sellerId;
  }
  public function setUsers(array $users)
  {
    foreach ($users as $u) {
      if (!$u instanceof Google_Service_ShoppingContent_AccountUser) {
        throw new InvalidArgumentException('First argument to setUsers must be an array of Google_Service_ShoppingContent_AccountUser');
      }
    }
    $this->users = $users;
  }
  public function getUsers()
  {
    return $this->users;
  }
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}
