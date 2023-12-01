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

namespace Google\Service\Document;

class GoogleCloudDocumentaiV1beta2DocumentEntity extends \Google\Collection
{
  protected $collection_key = 'properties';
  /**
   * @var float
   */
  public $confidence;
  /**
   * @var string
   */
  public $id;
  /**
   * @var string
   */
  public $mentionId;
  /**
   * @var string
   */
  public $mentionText;
  /**
   * @var GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue
   */
  public $normalizedValue;
  protected $normalizedValueType = GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue::class;
  protected $normalizedValueDataType = '';
  /**
   * @var GoogleCloudDocumentaiV1beta2DocumentPageAnchor
   */
  public $pageAnchor;
  protected $pageAnchorType = GoogleCloudDocumentaiV1beta2DocumentPageAnchor::class;
  protected $pageAnchorDataType = '';
  /**
   * @var GoogleCloudDocumentaiV1beta2DocumentEntity[]
   */
  public $properties;
  protected $propertiesType = GoogleCloudDocumentaiV1beta2DocumentEntity::class;
  protected $propertiesDataType = 'array';
  /**
   * @var GoogleCloudDocumentaiV1beta2DocumentProvenance
   */
  public $provenance;
  protected $provenanceType = GoogleCloudDocumentaiV1beta2DocumentProvenance::class;
  protected $provenanceDataType = '';
  /**
   * @var bool
   */
  public $redacted;
  /**
   * @var GoogleCloudDocumentaiV1beta2DocumentTextAnchor
   */
  public $textAnchor;
  protected $textAnchorType = GoogleCloudDocumentaiV1beta2DocumentTextAnchor::class;
  protected $textAnchorDataType = '';
  /**
   * @var string
   */
  public $type;

  /**
   * @param float
   */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /**
   * @return float
   */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string
   */
  public function setMentionId($mentionId)
  {
    $this->mentionId = $mentionId;
  }
  /**
   * @return string
   */
  public function getMentionId()
  {
    return $this->mentionId;
  }
  /**
   * @param string
   */
  public function setMentionText($mentionText)
  {
    $this->mentionText = $mentionText;
  }
  /**
   * @return string
   */
  public function getMentionText()
  {
    return $this->mentionText;
  }
  /**
   * @param GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue
   */
  public function setNormalizedValue(GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue $normalizedValue)
  {
    $this->normalizedValue = $normalizedValue;
  }
  /**
   * @return GoogleCloudDocumentaiV1beta2DocumentEntityNormalizedValue
   */
  public function getNormalizedValue()
  {
    return $this->normalizedValue;
  }
  /**
   * @param GoogleCloudDocumentaiV1beta2DocumentPageAnchor
   */
  public function setPageAnchor(GoogleCloudDocumentaiV1beta2DocumentPageAnchor $pageAnchor)
  {
    $this->pageAnchor = $pageAnchor;
  }
  /**
   * @return GoogleCloudDocumentaiV1beta2DocumentPageAnchor
   */
  public function getPageAnchor()
  {
    return $this->pageAnchor;
  }
  /**
   * @param GoogleCloudDocumentaiV1beta2DocumentEntity[]
   */
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return GoogleCloudDocumentaiV1beta2DocumentEntity[]
   */
  public function getProperties()
  {
    return $this->properties;
  }
  /**
   * @param GoogleCloudDocumentaiV1beta2DocumentProvenance
   */
  public function setProvenance(GoogleCloudDocumentaiV1beta2DocumentProvenance $provenance)
  {
    $this->provenance = $provenance;
  }
  /**
   * @return GoogleCloudDocumentaiV1beta2DocumentProvenance
   */
  public function getProvenance()
  {
    return $this->provenance;
  }
  /**
   * @param bool
   */
  public function setRedacted($redacted)
  {
    $this->redacted = $redacted;
  }
  /**
   * @return bool
   */
  public function getRedacted()
  {
    return $this->redacted;
  }
  /**
   * @param GoogleCloudDocumentaiV1beta2DocumentTextAnchor
   */
  public function setTextAnchor(GoogleCloudDocumentaiV1beta2DocumentTextAnchor $textAnchor)
  {
    $this->textAnchor = $textAnchor;
  }
  /**
   * @return GoogleCloudDocumentaiV1beta2DocumentTextAnchor
   */
  public function getTextAnchor()
  {
    return $this->textAnchor;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDocumentaiV1beta2DocumentEntity::class, 'Google_Service_Document_GoogleCloudDocumentaiV1beta2DocumentEntity');
