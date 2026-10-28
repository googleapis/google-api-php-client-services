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

class Elements extends \Google\Collection
{
  protected $collection_key = 'citedSources';
  protected $citationsType = Citation::class;
  protected $citationsDataType = 'array';
  protected $citedSourcesType = CitedSource::class;
  protected $citedSourcesDataType = 'array';

  /**
   * Optional. A list of inline citations referenced within the message text
   * (via `` tags) that render as interactive hover cards.
   *
   * @param Citation[] $citations
   */
  public function setCitations($citations)
  {
    $this->citations = $citations;
  }
  /**
   * @return Citation[]
   */
  public function getCitations()
  {
    return $this->citations;
  }
  /**
   * Optional. A list of sources to be displayed under the message as footer
   * links. These are not referenced inline. For inline references, use
   * `citations`.
   *
   * @param CitedSource[] $citedSources
   */
  public function setCitedSources($citedSources)
  {
    $this->citedSources = $citedSources;
  }
  /**
   * @return CitedSource[]
   */
  public function getCitedSources()
  {
    return $this->citedSources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Elements::class, 'Google_Service_HangoutsChat_Elements');
