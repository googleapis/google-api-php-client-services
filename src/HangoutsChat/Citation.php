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

class Citation extends \Google\Collection
{
  protected $collection_key = 'citedSources';
  protected $citedSourcesType = CitedSource::class;
  protected $citedSourcesDataType = 'array';
  /**
   * Required. The ID of the citation. This ID is defined by the app creating
   * the citation and must match the `data-id` attribute of the `` tag in the
   * message text. Must contain only ASCII letters and numbers, and less than 63
   * characters.
   *
   * @var string
   */
  public $id;

  /**
   * Optional. A list of sources that are relevant to the citation. Sources are
   * displayed in the citation hover card.
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
  /**
   * Required. The ID of the citation. This ID is defined by the app creating
   * the citation and must match the `data-id` attribute of the `` tag in the
   * message text. Must contain only ASCII letters and numbers, and less than 63
   * characters.
   *
   * @param string $id
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Citation::class, 'Google_Service_HangoutsChat_Citation');
