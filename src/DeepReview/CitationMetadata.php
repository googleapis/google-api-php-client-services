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

namespace Google\Service\DeepReview;

class CitationMetadata extends \Google\Collection
{
  protected $collection_key = 'urls';
  protected $authorsType = Author::class;
  protected $authorsDataType = 'array';
  /**
   * Output only. Digital Object Identifier (DOI).
   *
   * @var string
   */
  public $doi;
  /**
   * Output only. Journal, conference, or venue name.
   *
   * @var string
   */
  public $journal;
  /**
   * Output only. Page range or article number.
   *
   * @var string
   */
  public $pages;
  protected $publicationDateType = Date::class;
  protected $publicationDateDataType = '';
  /**
   * Output only. Source database for retrieved metadata (e.g., "openalex",
   * "crossref"). Empty on `extracted_metadata`.
   *
   * @var string
   */
  public $source;
  /**
   * Output only. Work title.
   *
   * @var string
   */
  public $title;
  /**
   * Output only. URLs associated with the reference.
   *
   * @var string[]
   */
  public $urls;
  /**
   * Output only. Volume identifier.
   *
   * @var string
   */
  public $volume;

  /**
   * Output only. Ordered list of authors.
   *
   * @param Author[] $authors
   */
  public function setAuthors($authors)
  {
    $this->authors = $authors;
  }
  /**
   * @return Author[]
   */
  public function getAuthors()
  {
    return $this->authors;
  }
  /**
   * Output only. Digital Object Identifier (DOI).
   *
   * @param string $doi
   */
  public function setDoi($doi)
  {
    $this->doi = $doi;
  }
  /**
   * @return string
   */
  public function getDoi()
  {
    return $this->doi;
  }
  /**
   * Output only. Journal, conference, or venue name.
   *
   * @param string $journal
   */
  public function setJournal($journal)
  {
    $this->journal = $journal;
  }
  /**
   * @return string
   */
  public function getJournal()
  {
    return $this->journal;
  }
  /**
   * Output only. Page range or article number.
   *
   * @param string $pages
   */
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  /**
   * @return string
   */
  public function getPages()
  {
    return $this->pages;
  }
  /**
   * Output only. Publication date (month and day left as 0 if just year).
   *
   * @param Date $publicationDate
   */
  public function setPublicationDate(Date $publicationDate)
  {
    $this->publicationDate = $publicationDate;
  }
  /**
   * @return Date
   */
  public function getPublicationDate()
  {
    return $this->publicationDate;
  }
  /**
   * Output only. Source database for retrieved metadata (e.g., "openalex",
   * "crossref"). Empty on `extracted_metadata`.
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
   * Output only. Work title.
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
   * Output only. URLs associated with the reference.
   *
   * @param string[] $urls
   */
  public function setUrls($urls)
  {
    $this->urls = $urls;
  }
  /**
   * @return string[]
   */
  public function getUrls()
  {
    return $this->urls;
  }
  /**
   * Output only. Volume identifier.
   *
   * @param string $volume
   */
  public function setVolume($volume)
  {
    $this->volume = $volume;
  }
  /**
   * @return string
   */
  public function getVolume()
  {
    return $this->volume;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CitationMetadata::class, 'Google_Service_DeepReview_CitationMetadata');
