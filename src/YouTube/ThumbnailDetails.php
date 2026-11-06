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

class ThumbnailDetails extends \Google\Model
{
  protected $defaultType = Thumbnail::class;
  protected $defaultDataType = '';
  protected $fhdType = Thumbnail::class;
  protected $fhdDataType = '';
  protected $highType = Thumbnail::class;
  protected $highDataType = '';
  protected $maxresType = Thumbnail::class;
  protected $maxresDataType = '';
  protected $mediumType = Thumbnail::class;
  protected $mediumDataType = '';
  protected $qhdType = Thumbnail::class;
  protected $qhdDataType = '';
  protected $shortsAspectRatioType = Thumbnail::class;
  protected $shortsAspectRatioDataType = '';
  protected $standardType = Thumbnail::class;
  protected $standardDataType = '';
  protected $uhdType = Thumbnail::class;
  protected $uhdDataType = '';

  /**
   * The default image for this resource.
   *
   * @param Thumbnail $default
   */
  public function setDefault(Thumbnail $default)
  {
    $this->default = $default;
  }
  /**
   * @return Thumbnail
   */
  public function getDefault()
  {
    return $this->default;
  }
  /**
   * The full high definition (1080p) quality image for this resource.
   *
   * @param Thumbnail $fhd
   */
  public function setFhd(Thumbnail $fhd)
  {
    $this->fhd = $fhd;
  }
  /**
   * @return Thumbnail
   */
  public function getFhd()
  {
    return $this->fhd;
  }
  /**
   * The high quality image for this resource.
   *
   * @param Thumbnail $high
   */
  public function setHigh(Thumbnail $high)
  {
    $this->high = $high;
  }
  /**
   * @return Thumbnail
   */
  public function getHigh()
  {
    return $this->high;
  }
  /**
   * The maximum resolution quality image for this resource.
   *
   * @param Thumbnail $maxres
   */
  public function setMaxres(Thumbnail $maxres)
  {
    $this->maxres = $maxres;
  }
  /**
   * @return Thumbnail
   */
  public function getMaxres()
  {
    return $this->maxres;
  }
  /**
   * The medium quality image for this resource.
   *
   * @param Thumbnail $medium
   */
  public function setMedium(Thumbnail $medium)
  {
    $this->medium = $medium;
  }
  /**
   * @return Thumbnail
   */
  public function getMedium()
  {
    return $this->medium;
  }
  /**
   * The quad high definition (1440p / 2K) quality image for this resource.
   *
   * @param Thumbnail $qhd
   */
  public function setQhd(Thumbnail $qhd)
  {
    $this->qhd = $qhd;
  }
  /**
   * @return Thumbnail
   */
  public function getQhd()
  {
    return $this->qhd;
  }
  /**
   * The Shorts aspect ratio (9:16) image for this resource.
   *
   * @param Thumbnail $shortsAspectRatio
   */
  public function setShortsAspectRatio(Thumbnail $shortsAspectRatio)
  {
    $this->shortsAspectRatio = $shortsAspectRatio;
  }
  /**
   * @return Thumbnail
   */
  public function getShortsAspectRatio()
  {
    return $this->shortsAspectRatio;
  }
  /**
   * The standard quality image for this resource.
   *
   * @param Thumbnail $standard
   */
  public function setStandard(Thumbnail $standard)
  {
    $this->standard = $standard;
  }
  /**
   * @return Thumbnail
   */
  public function getStandard()
  {
    return $this->standard;
  }
  /**
   * The ultra-high resolution (4K) quality image for this resource.
   *
   * @param Thumbnail $uhd
   */
  public function setUhd(Thumbnail $uhd)
  {
    $this->uhd = $uhd;
  }
  /**
   * @return Thumbnail
   */
  public function getUhd()
  {
    return $this->uhd;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThumbnailDetails::class, 'Google_Service_YouTube_ThumbnailDetails');
