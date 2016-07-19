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

class Google_Service_Vision_AnnotateImageRequest extends Google_Collection
{
  protected $collection_key = 'features';
  public $features;
  public $image;
  public $imageContext;

  public function setFeatures(array $features)
  {
    foreach ($features as $f) {
      if (!$f instanceof Google_Service_Vision_Feature) {
        throw new InvalidArgumentException('First argument to setFeatures must be an array of Google_Service_Vision_Feature');
      }
    }
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  public function setImage(Google_Service_Vision_Image $image)
  {
    $this->image = $image;
  }
  public function getImage()
  {
    return $this->image;
  }
  public function setImageContext(Google_Service_Vision_ImageContext $imageContext)
  {
    $this->imageContext = $imageContext;
  }
  public function getImageContext()
  {
    return $this->imageContext;
  }
}
