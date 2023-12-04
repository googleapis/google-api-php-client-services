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

class AnnotateImageResponse extends \Google\Collection
{
  protected $collection_key = 'textAnnotations';
  /**
   * @var ImageAnnotationContext
   */
  public $context;
  protected $contextType = ImageAnnotationContext::class;
  protected $contextDataType = '';
  /**
   * @var CropHintsAnnotation
   */
  public $cropHintsAnnotation;
  protected $cropHintsAnnotationType = CropHintsAnnotation::class;
  protected $cropHintsAnnotationDataType = '';
  /**
   * @var Status
   */
  public $error;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /**
   * @var FaceAnnotation[]
   */
  public $faceAnnotations;
  protected $faceAnnotationsType = FaceAnnotation::class;
  protected $faceAnnotationsDataType = 'array';
  /**
   * @var TextAnnotation
   */
  public $fullTextAnnotation;
  protected $fullTextAnnotationType = TextAnnotation::class;
  protected $fullTextAnnotationDataType = '';
  /**
   * @var ImageProperties
   */
  public $imagePropertiesAnnotation;
  protected $imagePropertiesAnnotationType = ImageProperties::class;
  protected $imagePropertiesAnnotationDataType = '';
  /**
   * @var EntityAnnotation[]
   */
  public $labelAnnotations;
  protected $labelAnnotationsType = EntityAnnotation::class;
  protected $labelAnnotationsDataType = 'array';
  /**
   * @var EntityAnnotation[]
   */
  public $landmarkAnnotations;
  protected $landmarkAnnotationsType = EntityAnnotation::class;
  protected $landmarkAnnotationsDataType = 'array';
  /**
   * @var LocalizedObjectAnnotation[]
   */
  public $localizedObjectAnnotations;
  protected $localizedObjectAnnotationsType = LocalizedObjectAnnotation::class;
  protected $localizedObjectAnnotationsDataType = 'array';
  /**
   * @var EntityAnnotation[]
   */
  public $logoAnnotations;
  protected $logoAnnotationsType = EntityAnnotation::class;
  protected $logoAnnotationsDataType = 'array';
  /**
   * @var ProductSearchResults
   */
  public $productSearchResults;
  protected $productSearchResultsType = ProductSearchResults::class;
  protected $productSearchResultsDataType = '';
  /**
   * @var SafeSearchAnnotation
   */
  public $safeSearchAnnotation;
  protected $safeSearchAnnotationType = SafeSearchAnnotation::class;
  protected $safeSearchAnnotationDataType = '';
  /**
   * @var EntityAnnotation[]
   */
  public $textAnnotations;
  protected $textAnnotationsType = EntityAnnotation::class;
  protected $textAnnotationsDataType = 'array';
  /**
   * @var WebDetection
   */
  public $webDetection;
  protected $webDetectionType = WebDetection::class;
  protected $webDetectionDataType = '';

  /**
   * @param ImageAnnotationContext
   */
  public function setContext(ImageAnnotationContext $context)
  {
    $this->context = $context;
  }
  /**
   * @return ImageAnnotationContext
   */
  public function getContext()
  {
    return $this->context;
  }
  /**
   * @param CropHintsAnnotation
   */
  public function setCropHintsAnnotation(CropHintsAnnotation $cropHintsAnnotation)
  {
    $this->cropHintsAnnotation = $cropHintsAnnotation;
  }
  /**
   * @return CropHintsAnnotation
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
   * @param FaceAnnotation[]
   */
  public function setFaceAnnotations($faceAnnotations)
  {
    $this->faceAnnotations = $faceAnnotations;
  }
  /**
   * @return FaceAnnotation[]
   */
  public function getFaceAnnotations()
  {
    return $this->faceAnnotations;
  }
  /**
   * @param TextAnnotation
   */
  public function setFullTextAnnotation(TextAnnotation $fullTextAnnotation)
  {
    $this->fullTextAnnotation = $fullTextAnnotation;
  }
  /**
   * @return TextAnnotation
   */
  public function getFullTextAnnotation()
  {
    return $this->fullTextAnnotation;
  }
  /**
   * @param ImageProperties
   */
  public function setImagePropertiesAnnotation(ImageProperties $imagePropertiesAnnotation)
  {
    $this->imagePropertiesAnnotation = $imagePropertiesAnnotation;
  }
  /**
   * @return ImageProperties
   */
  public function getImagePropertiesAnnotation()
  {
    return $this->imagePropertiesAnnotation;
  }
  /**
   * @param EntityAnnotation[]
   */
  public function setLabelAnnotations($labelAnnotations)
  {
    $this->labelAnnotations = $labelAnnotations;
  }
  /**
   * @return EntityAnnotation[]
   */
  public function getLabelAnnotations()
  {
    return $this->labelAnnotations;
  }
  /**
   * @param EntityAnnotation[]
   */
  public function setLandmarkAnnotations($landmarkAnnotations)
  {
    $this->landmarkAnnotations = $landmarkAnnotations;
  }
  /**
   * @return EntityAnnotation[]
   */
  public function getLandmarkAnnotations()
  {
    return $this->landmarkAnnotations;
  }
  /**
   * @param LocalizedObjectAnnotation[]
   */
  public function setLocalizedObjectAnnotations($localizedObjectAnnotations)
  {
    $this->localizedObjectAnnotations = $localizedObjectAnnotations;
  }
  /**
   * @return LocalizedObjectAnnotation[]
   */
  public function getLocalizedObjectAnnotations()
  {
    return $this->localizedObjectAnnotations;
  }
  /**
   * @param EntityAnnotation[]
   */
  public function setLogoAnnotations($logoAnnotations)
  {
    $this->logoAnnotations = $logoAnnotations;
  }
  /**
   * @return EntityAnnotation[]
   */
  public function getLogoAnnotations()
  {
    return $this->logoAnnotations;
  }
  /**
   * @param ProductSearchResults
   */
  public function setProductSearchResults(ProductSearchResults $productSearchResults)
  {
    $this->productSearchResults = $productSearchResults;
  }
  /**
   * @return ProductSearchResults
   */
  public function getProductSearchResults()
  {
    return $this->productSearchResults;
  }
  /**
   * @param SafeSearchAnnotation
   */
  public function setSafeSearchAnnotation(SafeSearchAnnotation $safeSearchAnnotation)
  {
    $this->safeSearchAnnotation = $safeSearchAnnotation;
  }
  /**
   * @return SafeSearchAnnotation
   */
  public function getSafeSearchAnnotation()
  {
    return $this->safeSearchAnnotation;
  }
  /**
   * @param EntityAnnotation[]
   */
  public function setTextAnnotations($textAnnotations)
  {
    $this->textAnnotations = $textAnnotations;
  }
  /**
   * @return EntityAnnotation[]
   */
  public function getTextAnnotations()
  {
    return $this->textAnnotations;
  }
  /**
   * @param WebDetection
   */
  public function setWebDetection(WebDetection $webDetection)
  {
    $this->webDetection = $webDetection;
  }
  /**
   * @return WebDetection
   */
  public function getWebDetection()
  {
    return $this->webDetection;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AnnotateImageResponse::class, 'Google_Service_Vision_AnnotateImageResponse');
