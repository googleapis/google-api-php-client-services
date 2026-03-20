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

namespace Google\Service\CloudRun;

class GoogleDevtoolsCloudbuildV1BuiltImage extends \Google\Model
{
  /**
   * Default value.
   */
  public const OCI_MEDIA_TYPE_OCI_MEDIA_TYPE_UNSPECIFIED = 'OCI_MEDIA_TYPE_UNSPECIFIED';
  /**
   * The artifact is an image manifest, which represents a single image with all
   * its layers.
   */
  public const OCI_MEDIA_TYPE_IMAGE_MANIFEST = 'IMAGE_MANIFEST';
  /**
   * The artifact is an image index, which can contain a list of image
   * manifests.
   */
  public const OCI_MEDIA_TYPE_IMAGE_INDEX = 'IMAGE_INDEX';
  /**
   * Output only. Path to the artifact in Artifact Registry.
   *
   * @var string
   */
  public $artifactRegistryPackage;
  /**
   * Docker Registry 2.0 digest.
   *
   * @var string
   */
  public $digest;
  /**
   * Name used to push the container image to Google Container Registry, as
   * presented to `docker push`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The OCI media type of the artifact. Non-OCI images, such as
   * Docker images, will have an unspecified value.
   *
   * @var string
   */
  public $ociMediaType;
  protected $pushTimingType = GoogleDevtoolsCloudbuildV1TimeSpan::class;
  protected $pushTimingDataType = '';

  /**
   * Output only. Path to the artifact in Artifact Registry.
   *
   * @param string $artifactRegistryPackage
   */
  public function setArtifactRegistryPackage($artifactRegistryPackage)
  {
    $this->artifactRegistryPackage = $artifactRegistryPackage;
  }
  /**
   * @return string
   */
  public function getArtifactRegistryPackage()
  {
    return $this->artifactRegistryPackage;
  }
  /**
   * Docker Registry 2.0 digest.
   *
   * @param string $digest
   */
  public function setDigest($digest)
  {
    $this->digest = $digest;
  }
  /**
   * @return string
   */
  public function getDigest()
  {
    return $this->digest;
  }
  /**
   * Name used to push the container image to Google Container Registry, as
   * presented to `docker push`.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The OCI media type of the artifact. Non-OCI images, such as
   * Docker images, will have an unspecified value.
   *
   * Accepted values: OCI_MEDIA_TYPE_UNSPECIFIED, IMAGE_MANIFEST, IMAGE_INDEX
   *
   * @param self::OCI_MEDIA_TYPE_* $ociMediaType
   */
  public function setOciMediaType($ociMediaType)
  {
    $this->ociMediaType = $ociMediaType;
  }
  /**
   * @return self::OCI_MEDIA_TYPE_*
   */
  public function getOciMediaType()
  {
    return $this->ociMediaType;
  }
  /**
   * Output only. Stores timing information for pushing the specified image.
   *
   * @param GoogleDevtoolsCloudbuildV1TimeSpan $pushTiming
   */
  public function setPushTiming(GoogleDevtoolsCloudbuildV1TimeSpan $pushTiming)
  {
    $this->pushTiming = $pushTiming;
  }
  /**
   * @return GoogleDevtoolsCloudbuildV1TimeSpan
   */
  public function getPushTiming()
  {
    return $this->pushTiming;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleDevtoolsCloudbuildV1BuiltImage::class, 'Google_Service_CloudRun_GoogleDevtoolsCloudbuildV1BuiltImage');
