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

namespace Google\Service\Aiplatform;

class GenaiVertexV1DocumentDelta extends \Google\Model
{
  public const MIME_TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * PDF document format
   */
  public const MIME_TYPE_TYPE_PDF = 'TYPE_PDF';
  /**
   * CSV document format
   */
  public const MIME_TYPE_TYPE_CSV = 'TYPE_CSV';
  /**
   * PPTX presentation format
   */
  public const MIME_TYPE_TYPE_PPTX = 'TYPE_PPTX';
  /**
   * PPT presentation format
   */
  public const MIME_TYPE_TYPE_PPT = 'TYPE_PPT';
  /**
   * ODP presentation format
   */
  public const MIME_TYPE_TYPE_ODP = 'TYPE_ODP';
  /**
   * DOCX document format
   */
  public const MIME_TYPE_TYPE_DOCX = 'TYPE_DOCX';
  /**
   * DOC document format
   */
  public const MIME_TYPE_TYPE_DOC = 'TYPE_DOC';
  /**
   * DOTX document template format
   */
  public const MIME_TYPE_TYPE_DOTX = 'TYPE_DOTX';
  /**
   * ODT document format
   */
  public const MIME_TYPE_TYPE_ODT = 'TYPE_ODT';
  /**
   * XLSX spreadsheet format
   */
  public const MIME_TYPE_TYPE_XLSX = 'TYPE_XLSX';
  /**
   * XLS spreadsheet format
   */
  public const MIME_TYPE_TYPE_XLS = 'TYPE_XLS';
  /**
   * ODS spreadsheet format
   */
  public const MIME_TYPE_TYPE_ODS = 'TYPE_ODS';
  /**
   * @var string
   */
  public $data;
  /**
   * @var string
   */
  public $mimeType;
  /**
   * @var string
   */
  public $uri;

  /**
   * @param string $data
   */
  public function setData($data)
  {
    $this->data = $data;
  }
  /**
   * @return string
   */
  public function getData()
  {
    return $this->data;
  }
  /**
   * @param self::MIME_TYPE_* $mimeType
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return self::MIME_TYPE_*
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /**
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1DocumentDelta::class, 'Google_Service_Aiplatform_GenaiVertexV1DocumentDelta');
