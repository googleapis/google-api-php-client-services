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

namespace Google\Service\DeveloperKnowledge;

class Document extends \Google\Model
{
  /**
   * The default / unset value. See each API method for its default value if
   * DocumentView is not specified.
   */
  public const VIEW_DOCUMENT_VIEW_UNSPECIFIED = 'DOCUMENT_VIEW_UNSPECIFIED';
  /**
   * Includes only the basic metadata fields: - `name` - `uri` - `data_source` -
   * `title` - `description` - `update_time` - `view` This is the default of
   * view for DeveloperKnowledge.SearchDocumentChunks.
   */
  public const VIEW_DOCUMENT_VIEW_BASIC = 'DOCUMENT_VIEW_BASIC';
  /**
   * Includes all Document fields.
   */
  public const VIEW_DOCUMENT_VIEW_FULL = 'DOCUMENT_VIEW_FULL';
  /**
   * Includes the `DOCUMENT_VIEW_BASIC` fields and the `content` field. This is
   * the default of view for DeveloperKnowledge.GetDocument and
   * DeveloperKnowledge.BatchGetDocuments.
   */
  public const VIEW_DOCUMENT_VIEW_CONTENT = 'DOCUMENT_VIEW_CONTENT';
  /**
   * Output only. Contains the full content of the document in Markdown format.
   *
   * @var string
   */
  public $content;
  /**
   * Output only. Specifies the data source of the document. Example data
   * source: `firebase.google.com`
   *
   * @var string
   */
  public $dataSource;
  /**
   * Output only. Provides a description of the document.
   *
   * @var string
   */
  public $description;
  /**
   * Identifier. Contains the resource name of the document. Format:
   * `documents/{uri_without_scheme}` Example:
   * `documents/docs.cloud.google.com/storage/docs/creating-buckets`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Provides the title of the document.
   *
   * @var string
   */
  public $title;
  /**
   * Output only. Represents the timestamp when the content or metadata of the
   * document was last updated.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. Provides the URI of the content, such as
   * `docs.cloud.google.com/storage/docs/creating-buckets`.
   *
   * @var string
   */
  public $uri;
  /**
   * Output only. Specifies the DocumentView of the document.
   *
   * @var string
   */
  public $view;

  /**
   * Output only. Contains the full content of the document in Markdown format.
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
   * Output only. Specifies the data source of the document. Example data
   * source: `firebase.google.com`
   *
   * @param string $dataSource
   */
  public function setDataSource($dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /**
   * @return string
   */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /**
   * Output only. Provides a description of the document.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Identifier. Contains the resource name of the document. Format:
   * `documents/{uri_without_scheme}` Example:
   * `documents/docs.cloud.google.com/storage/docs/creating-buckets`
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
   * Output only. Provides the title of the document.
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
   * Output only. Represents the timestamp when the content or metadata of the
   * document was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * Output only. Provides the URI of the content, such as
   * `docs.cloud.google.com/storage/docs/creating-buckets`.
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
  /**
   * Output only. Specifies the DocumentView of the document.
   *
   * Accepted values: DOCUMENT_VIEW_UNSPECIFIED, DOCUMENT_VIEW_BASIC,
   * DOCUMENT_VIEW_FULL, DOCUMENT_VIEW_CONTENT
   *
   * @param self::VIEW_* $view
   */
  public function setView($view)
  {
    $this->view = $view;
  }
  /**
   * @return self::VIEW_*
   */
  public function getView()
  {
    return $this->view;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Document::class, 'Google_Service_DeveloperKnowledge_Document');
