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

class Google_Service_Blogger_Post extends Google_Collection
{
  protected $collection_key = 'labels';
  public $author;
  public $blog;
  public $content;
  public $customMetaData;
  public $etag;
  public $id;
  public $images;
  public $kind;
  public $labels;
  public $location;
  public $published;
  public $readerComments;
  public $replies;
  public $selfLink;
  public $status;
  public $title;
  public $titleLink;
  public $updated;
  public $url;

  public function setAuthor(Google_Service_Blogger_PostAuthor $author)
  {
    $this->author = $author;
  }
  public function getAuthor()
  {
    return $this->author;
  }
  public function setBlog(Google_Service_Blogger_PostBlog $blog)
  {
    $this->blog = $blog;
  }
  public function getBlog()
  {
    return $this->blog;
  }
  public function setContent($content)
  {
    $this->content = $content;
  }
  public function getContent()
  {
    return $this->content;
  }
  public function setCustomMetaData($customMetaData)
  {
    $this->customMetaData = $customMetaData;
  }
  public function getCustomMetaData()
  {
    return $this->customMetaData;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImages(array $images)
  {
    foreach ($images as $i) {
      if (!$i instanceof Google_Service_Blogger_PostImages) {
        throw new InvalidArgumentException('First argument to setImages must be an array of Google_Service_Blogger_PostImages');
      }
    }
    $this->images = $images;
  }
  public function getImages()
  {
    return $this->images;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLabels(array $labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setLocation(Google_Service_Blogger_PostLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setPublished($published)
  {
    $this->published = $published;
  }
  public function getPublished()
  {
    return $this->published;
  }
  public function setReaderComments($readerComments)
  {
    $this->readerComments = $readerComments;
  }
  public function getReaderComments()
  {
    return $this->readerComments;
  }
  public function setReplies(Google_Service_Blogger_PostReplies $replies)
  {
    $this->replies = $replies;
  }
  public function getReplies()
  {
    return $this->replies;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setTitleLink($titleLink)
  {
    $this->titleLink = $titleLink;
  }
  public function getTitleLink()
  {
    return $this->titleLink;
  }
  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }
  public function getUpdated()
  {
    return $this->updated;
  }
  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
}
