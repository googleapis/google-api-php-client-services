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

namespace Google\Service\CustomerEngagementSuite;

class Image extends \Google\Model
{
  /**
   * Optional. The alternative text for the image.
   *
   * @var string
   */
  public $altText;
  /**
   * Required. Raw bytes of the image.
   *
   * @var string
   */
  public $data;
  /**
   * Required. The IANA standard MIME type of the source data. Supported image
   * types includes: * image/png * image/jpeg * image/webp
   *
   * @var string
   */
  public $mimeType;

  /**
   * Optional. The alternative text for the image.
   *
   * @param string $altText
   */
  public function setAltText($altText)
  {
    $this->altText = $altText;
  }
  /**
   * @return string
   */
  public function getAltText()
  {
    return $this->altText;
  }
  /**
   * Required. Raw bytes of the image.
   *
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
   * Required. The IANA standard MIME type of the source data. Supported image
   * types includes: * image/png * image/jpeg * image/webp
   *
   * @param string $mimeType
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return string
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Image::class, 'Google_Service_CustomerEngagementSuite_Image');
