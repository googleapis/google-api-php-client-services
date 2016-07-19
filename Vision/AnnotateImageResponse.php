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

class Google_Service_Vision_AnnotateImageResponse extends Google_Collection
{
  protected $collection_key = 'textAnnotations';
  public $error;
  public $faceAnnotations;
  public $imagePropertiesAnnotation;
  public $labelAnnotations;
  public $landmarkAnnotations;
  public $logoAnnotations;
  public $safeSearchAnnotation;
  public $textAnnotations;

  public function setError(Google_Service_Vision_Status $error)
  {
    $this->error = $error;
  }
  public function getError()
  {
    return $this->error;
  }
  public function setFaceAnnotations(array $faceAnnotations)
  {
    foreach ($faceAnnotations as $f) {
      if (!$f instanceof Google_Service_Vision_FaceAnnotation) {
        throw new InvalidArgumentException('First argument to setFaceAnnotations must be an array of Google_Service_Vision_FaceAnnotation');
      }
    }
    $this->faceAnnotations = $faceAnnotations;
  }
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  public function setImagePropertiesAnnotation(Google_Service_Vision_ImageProperties $imagePropertiesAnnotation)
  {
    $this->imagePropertiesAnnotation = $imagePropertiesAnnotation;
  }
  public function getImagePropertiesAnnotation()
  {
    return $this->imagePropertiesAnnotation;
  }
  public function setLabelAnnotations(array $labelAnnotations)
  {
    foreach ($labelAnnotations as $l) {
      if (!$l instanceof Google_Service_Vision_EntityAnnotation) {
        throw new InvalidArgumentException('First argument to setLabelAnnotations must be an array of Google_Service_Vision_EntityAnnotation');
      }
    }
    $this->labelAnnotations = $labelAnnotations;
  }
  public function getLabelAnnotations()
  {
    return $this->labelAnnotations;
  }
  public function setLandmarkAnnotations(array $landmarkAnnotations)
  {
    foreach ($landmarkAnnotations as $l) {
      if (!$l instanceof Google_Service_Vision_EntityAnnotation) {
        throw new InvalidArgumentException('First argument to setLandmarkAnnotations must be an array of Google_Service_Vision_EntityAnnotation');
      }
    }
    $this->landmarkAnnotations = $landmarkAnnotations;
  }
  public function getLandmarkAnnotations()
  {
    return $this->landmarkAnnotations;
  }
  public function setLogoAnnotations(array $logoAnnotations)
  {
    foreach ($logoAnnotations as $l) {
      if (!$l instanceof Google_Service_Vision_EntityAnnotation) {
        throw new InvalidArgumentException('First argument to setLogoAnnotations must be an array of Google_Service_Vision_EntityAnnotation');
      }
    }
    $this->logoAnnotations = $logoAnnotations;
  }
  public function getLogoAnnotations()
  {
    return $this->logoAnnotations;
  }
  public function setSafeSearchAnnotation(Google_Service_Vision_SafeSearchAnnotation $safeSearchAnnotation)
  {
    $this->safeSearchAnnotation = $safeSearchAnnotation;
  }
  public function getSafeSearchAnnotation()
  {
    return $this->safeSearchAnnotation;
  }
  public function setTextAnnotations(array $textAnnotations)
  {
    foreach ($textAnnotations as $t) {
      if (!$t instanceof Google_Service_Vision_EntityAnnotation) {
        throw new InvalidArgumentException('First argument to setTextAnnotations must be an array of Google_Service_Vision_EntityAnnotation');
      }
    }
    $this->textAnnotations = $textAnnotations;
  }
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
}
