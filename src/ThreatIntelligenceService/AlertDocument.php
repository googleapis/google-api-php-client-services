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

namespace Google\Service\ThreatIntelligenceService;

class AlertDocument extends \Google\Model
{
  /**
   * Output only. AI summary of the finding.
   *
   * @var string
   */
  public $aiSummary;
  /**
   * Output only. The author of the document.
   *
   * @var string
   */
  public $author;
  /**
   * Output only. Time when the origin source collected the intel.
   *
   * @var string
   */
  public $collectionTime;
  /**
   * Output only. The content of the document.
   *
   * @var string
   */
  public $content;
  /**
   * Output only. The time the document was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Time when GTI received the intel.
   *
   * @var string
   */
  public $ingestTime;
  /**
   * Output only. The language code of the document.
   *
   * @var string
   */
  public $languageCode;
  /**
   * Identifier. Server generated name for the alert document. format is
   * projects/{project}/alerts/{alert}/documents/{document}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Source of the intel item, e.g. DarkMarket.
   *
   * @var string
   */
  public $source;
  /**
   * Output only. Time when the intel was last updated by the source.
   *
   * @var string
   */
  public $sourceUpdateTime;
  /**
   * Output only. URI of the intel item from the source.
   *
   * @var string
   */
  public $sourceUri;
  /**
   * Output only. The title of the document, if available.
   *
   * @var string
   */
  public $title;
  protected $translationType = AlertDocumentTranslation::class;
  protected $translationDataType = '';

  /**
   * Output only. AI summary of the finding.
   *
   * @param string $aiSummary
   */
  public function setAiSummary($aiSummary)
  {
    $this->aiSummary = $aiSummary;
  }
  /**
   * @return string
   */
  public function getAiSummary()
  {
    return $this->aiSummary;
  }
  /**
   * Output only. The author of the document.
   *
   * @param string $author
   */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /**
   * @return string
   */
  public function getAuthor()
  {
    return $this->author;
  }
  /**
   * Output only. Time when the origin source collected the intel.
   *
   * @param string $collectionTime
   */
  public function setCollectionTime($collectionTime)
  {
    $this->collectionTime = $collectionTime;
  }
  /**
   * @return string
   */
  public function getCollectionTime()
  {
    return $this->collectionTime;
  }
  /**
   * Output only. The content of the document.
   *
   * @param string $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return string
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Output only. The time the document was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. Time when GTI received the intel.
   *
   * @param string $ingestTime
   */
  public function setIngestTime($ingestTime)
  {
    $this->ingestTime = $ingestTime;
  }
  /**
   * @return string
   */
  public function getIngestTime()
  {
    return $this->ingestTime;
  }
  /**
   * Output only. The language code of the document.
   *
   * @param string $languageCode
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * Identifier. Server generated name for the alert document. format is
   * projects/{project}/alerts/{alert}/documents/{document}
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. Source of the intel item, e.g. DarkMarket.
   *
   * @param string $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * Output only. Time when the intel was last updated by the source.
   *
   * @param string $sourceUpdateTime
   */
  public function setSourceUpdateTime($sourceUpdateTime)
  {
    $this->sourceUpdateTime = $sourceUpdateTime;
  }
  /**
   * @return string
   */
  public function getSourceUpdateTime()
  {
    return $this->sourceUpdateTime;
  }
  /**
   * Output only. URI of the intel item from the source.
   *
   * @param string $sourceUri
   */
  public function setSourceUri($sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
  /**
   * @return string
   */
  public function getSourceUri()
  {
    return $this->sourceUri;
  }
  /**
   * Output only. The title of the document, if available.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * Output only. The translation of the document, if available.
   *
   * @param AlertDocumentTranslation $translation
   */
  public function setTranslation(AlertDocumentTranslation $translation)
  {
    $this->translation = $translation;
  }
  /**
   * @return AlertDocumentTranslation
   */
  public function getTranslation()
  {
    return $this->translation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AlertDocument::class, 'Google_Service_ThreatIntelligenceService_AlertDocument');
