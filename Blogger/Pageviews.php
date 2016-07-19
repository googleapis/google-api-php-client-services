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

class Google_Service_Blogger_Pageviews extends Google_Collection
{
  protected $collection_key = 'counts';
  public $blogId;
  public $counts;
  public $kind;

  public function setBlogId($blogId)
  {
    $this->blogId = $blogId;
  }
  public function getBlogId()
  {
    return $this->blogId;
  }
  public function setCounts(array $counts)
  {
    foreach ($counts as $c) {
      if (!$c instanceof Google_Service_Blogger_PageviewsCounts) {
        throw new InvalidArgumentException('First argument to setCounts must be an array of Google_Service_Blogger_PageviewsCounts');
      }
    }
    $this->counts = $counts;
  }
  public function getCounts()
  {
    return $this->counts;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}
