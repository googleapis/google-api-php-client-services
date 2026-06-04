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

class GoogleAdsSearchads360V23CommonMediaBundleAsset extends \Google\Model
{
  /**
   * Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
   * depends on the ad field where it will be used. For more information on the
   * format, see the documentation of the ad field where you plan on using the
   * MediaBundleAsset. This field is mutate only.
   *
   * @var string
   */
  public $data;

  /**
   * Media bundle (ZIP file) asset data. The format of the uploaded ZIP file
   * depends on the ad field where it will be used. For more information on the
   * format, see the documentation of the ad field where you plan on using the
   * MediaBundleAsset. This field is mutate only.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonMediaBundleAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonMediaBundleAsset');
