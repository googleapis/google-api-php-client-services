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

namespace Google\Service\HangoutsChat;

class Snippet extends \Google\Model
{
  protected $imagePreviewType = ElementsImage::class;
  protected $imagePreviewDataType = '';
  /**
   * Optional. A short plaintext excerpt directly from the corpus that is
   * rendered in the citation hover card or source preview. When footer sources
   * are automatically populated from inline `citations` (because
   * `Elements.cited_sources` is not set), snippets are omitted from the
   * deduplicated footer sources. Does not support markdown format, and must not
   * exceed 1,000 characters.
   *
   * @var string
   */
  public $text;

  /**
   * Optional. Image preview of the snippet provided as an input when creating
   * the citation.
   *
   * @param ElementsImage $imagePreview
   */
  public function setImagePreview(ElementsImage $imagePreview)
  {
    $this->imagePreview = $imagePreview;
  }
  /**
   * @return ElementsImage
   */
  public function getImagePreview()
  {
    return $this->imagePreview;
  }
  /**
   * Optional. A short plaintext excerpt directly from the corpus that is
   * rendered in the citation hover card or source preview. When footer sources
   * are automatically populated from inline `citations` (because
   * `Elements.cited_sources` is not set), snippets are omitted from the
   * deduplicated footer sources. Does not support markdown format, and must not
   * exceed 1,000 characters.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Snippet::class, 'Google_Service_HangoutsChat_Snippet');
