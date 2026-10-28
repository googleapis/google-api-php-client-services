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

class CitedSource extends \Google\Model
{
  protected $footerType = Footer::class;
  protected $footerDataType = '';
  protected $snippetType = Snippet::class;
  protected $snippetDataType = '';
  /**
   * Required. The plaintext title of the `CitedSource`. Does not support
   * markdown format.
   *
   * @var string
   */
  public $title;
  /**
   * Required. The URI pointing to the resource referenced by this
   * `CitedSource`.
   *
   * @var string
   */
  public $uri;

  /**
   * Optional. Additional information to show alongside the snippet in the form
   * of a footer.
   *
   * @param Footer $footer
   */
  public function setFooter(Footer $footer)
  {
    $this->footer = $footer;
  }
  /**
   * @return Footer
   */
  public function getFooter()
  {
    return $this->footer;
  }
  /**
   * Optional. Snippet containing information directly from the source.
   *
   * @param Snippet $snippet
   */
  public function setSnippet(Snippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /**
   * @return Snippet
   */
  public function getSnippet()
  {
    return $this->snippet;
  }
  /**
   * Required. The plaintext title of the `CitedSource`. Does not support
   * markdown format.
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
   * Required. The URI pointing to the resource referenced by this
   * `CitedSource`.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CitedSource::class, 'Google_Service_HangoutsChat_CitedSource');
