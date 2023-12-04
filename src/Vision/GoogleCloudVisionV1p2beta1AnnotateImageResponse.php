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

namespace Google\Service\Vision;

class GoogleCloudVisionV1p2beta1AnnotateImageResponse extends \Google\Collection
{
  protected $collection_key = 'textAnnotations';
  /**
   * @var GoogleCloudVisionV1p2beta1ImageAnnotationContext
   */
  public $context;
  protected $contextType = GoogleCloudVisionV1p2beta1ImageAnnotationContext::class;
  protected $contextDataType = '';
  /**
   * @var GoogleCloudVisionV1p2beta1CropHintsAnnotation
   */
  public $cropHintsAnnotation;
  protected $cropHintsAnnotationType = GoogleCloudVisionV1p2beta1CropHintsAnnotation::class;
  protected $cropHintsAnnotationDataType = '';
  /**
   * @var Status
   */
  public $error;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /**
   * @var GoogleCloudVisionV1p2beta1FaceAnnotation[]
   */
  public $faceAnnotations;
  protected $faceAnnotationsType = GoogleCloudVisionV1p2beta1FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVisionV1p2beta1TextAnnotation
   */
  public $fullTextAnnotation;
  protected $fullTextAnnotationType = GoogleCloudVisionV1p2beta1TextAnnotation::class;
  protected $fullTextAnnotationDataType = '';
  /**
   * @var GoogleCloudVisionV1p2beta1ImageProperties
   */
  public $imagePropertiesAnnotation;
  protected $imagePropertiesAnnotationType = GoogleCloudVisionV1p2beta1ImageProperties::class;
  protected $imagePropertiesAnnotationDataType = '';
  /**
   * @var GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public $labelAnnotations;
  protected $labelAnnotationsType = GoogleCloudVisionV1p2beta1EntityAnnotation::class;
  protected $labelAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public $landmarkAnnotations;
  protected $landmarkAnnotationsType = GoogleCloudVisionV1p2beta1EntityAnnotation::class;
  protected $landmarkAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation[]
   */
  public $localizedObjectAnnotations;
  protected $localizedObjectAnnotationsType = GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation::class;
  protected $localizedObjectAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public $logoAnnotations;
  protected $logoAnnotationsType = GoogleCloudVisionV1p2beta1EntityAnnotation::class;
  protected $logoAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVisionV1p2beta1ProductSearchResults
   */
  public $productSearchResults;
  protected $productSearchResultsType = GoogleCloudVisionV1p2beta1ProductSearchResults::class;
  protected $productSearchResultsDataType = '';
  /**
   * @var GoogleCloudVisionV1p2beta1SafeSearchAnnotation
   */
  public $safeSearchAnnotation;
  protected $safeSearchAnnotationType = GoogleCloudVisionV1p2beta1SafeSearchAnnotation::class;
  protected $safeSearchAnnotationDataType = '';
  /**
   * @var GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public $textAnnotations;
  protected $textAnnotationsType = GoogleCloudVisionV1p2beta1EntityAnnotation::class;
  protected $textAnnotationsDataType = 'array';
  /**
   * @var GoogleCloudVisionV1p2beta1WebDetection
   */
  public $webDetection;
  protected $webDetectionType = GoogleCloudVisionV1p2beta1WebDetection::class;
  protected $webDetectionDataType = '';

  /**
   * @param GoogleCloudVisionV1p2beta1ImageAnnotationContext
   */
  public function setContext(GoogleCloudVisionV1p2beta1ImageAnnotationContext $context)
  {
    $this->context = $context;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1ImageAnnotationContext
   */
  public function getContext()
  {
    return $this->context;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1CropHintsAnnotation
   */
  public function setCropHintsAnnotation(GoogleCloudVisionV1p2beta1CropHintsAnnotation $cropHintsAnnotation)
  {
    $this->cropHintsAnnotation = $cropHintsAnnotation;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1CropHintsAnnotation
   */
  public function getCropHintsAnnotation()
  {
    return $this->cropHintsAnnotation;
  }
  /**
   * @param Status
   */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /**
   * @return Status
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1FaceAnnotation[]
   */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1FaceAnnotation[]
   */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1TextAnnotation
   */
  public function setFullTextAnnotation(GoogleCloudVisionV1p2beta1TextAnnotation $fullTextAnnotation)
  {
    $this->fullTextAnnotation = $fullTextAnnotation;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1TextAnnotation
   */
  public function getFullTextAnnotation()
  {
    return $this->fullTextAnnotation;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1ImageProperties
   */
  public function setImagePropertiesAnnotation(GoogleCloudVisionV1p2beta1ImageProperties $imagePropertiesAnnotation)
  {
    $this->imagePropertiesAnnotation = $imagePropertiesAnnotation;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1ImageProperties
   */
  public function getImagePropertiesAnnotation()
  {
    return $this->imagePropertiesAnnotation;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public function setLabelAnnotations($labelAnnotations)
  {
    $this->labelAnnotations = $labelAnnotations;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public function getLabelAnnotations()
  {
    return $this->labelAnnotations;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public function setLandmarkAnnotations($landmarkAnnotations)
  {
    $this->landmarkAnnotations = $landmarkAnnotations;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public function getLandmarkAnnotations()
  {
    return $this->landmarkAnnotations;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation[]
   */
  public function setLocalizedObjectAnnotations($localizedObjectAnnotations)
  {
    $this->localizedObjectAnnotations = $localizedObjectAnnotations;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1LocalizedObjectAnnotation[]
   */
  public function getLocalizedObjectAnnotations()
  {
    return $this->localizedObjectAnnotations;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public function setLogoAnnotations($logoAnnotations)
  {
    $this->logoAnnotations = $logoAnnotations;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public function getLogoAnnotations()
  {
    return $this->logoAnnotations;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1ProductSearchResults
   */
  public function setProductSearchResults(GoogleCloudVisionV1p2beta1ProductSearchResults $productSearchResults)
  {
    $this->productSearchResults = $productSearchResults;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1ProductSearchResults
   */
  public function getProductSearchResults()
  {
    return $this->productSearchResults;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1SafeSearchAnnotation
   */
  public function setSafeSearchAnnotation(GoogleCloudVisionV1p2beta1SafeSearchAnnotation $safeSearchAnnotation)
  {
    $this->safeSearchAnnotation = $safeSearchAnnotation;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1SafeSearchAnnotation
   */
  public function getSafeSearchAnnotation()
  {
    return $this->safeSearchAnnotation;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1EntityAnnotation[]
   */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
  /**
   * @param GoogleCloudVisionV1p2beta1WebDetection
   */
  public function setWebDetection(GoogleCloudVisionV1p2beta1WebDetection $webDetection)
  {
    $this->webDetection = $webDetection;
  }
  /**
   * @return GoogleCloudVisionV1p2beta1WebDetection
   */
  public function getWebDetection()
  {
    return $this->webDetection;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudVisionV1p2beta1AnnotateImageResponse::class, 'Google_Service_Vision_GoogleCloudVisionV1p2beta1AnnotateImageResponse');
