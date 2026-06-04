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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesMediaBundle extends \Google\Model
{
  /**
   * Immutable. Raw zipped data.
   *
   * @var string
   */
  public $data;
  /**
   * Output only. The url to access the uploaded zipped data. For example,
   * https://tpc.googlesyndication.com/simgad/123 This field is read-only.
   *
   * @var string
   */
  public $url;

  /**
   * Immutable. Raw zipped data.
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
   * Output only. The url to access the uploaded zipped data. For example,
   * https://tpc.googlesyndication.com/simgad/123 This field is read-only.
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesMediaBundle::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesMediaBundle');
