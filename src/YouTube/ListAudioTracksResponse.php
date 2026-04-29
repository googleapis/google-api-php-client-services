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

namespace Google\Service\YouTube;

class ListAudioTracksResponse extends \Google\Collection
{
  protected $collection_key = 'audioTracks';
  protected $audioTracksType = AudioTrack::class;
  protected $audioTracksDataType = 'array';
  /**
   * Output only. Etag of this response.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. Identifies what kind of resource this is. Value: the fixed
   * string youtube#audiotrackList.
   *
   * @var string
   */
  public $kind;

  /**
   * Output only. A list of AudioTracks that match the request criteria.
   *
   * @param AudioTrack[] $audioTracks
   */
  public function setAudioTracks($audioTracks)
  {
    $this->audioTracks = $audioTracks;
  }
  /**
   * @return AudioTrack[]
   */
  public function getAudioTracks()
  {
    return $this->audioTracks;
  }
  /**
   * Output only. Etag of this response.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Output only. Identifies what kind of resource this is. Value: the fixed
   * string youtube#audiotrackList.
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListAudioTracksResponse::class, 'Google_Service_YouTube_ListAudioTracksResponse');
