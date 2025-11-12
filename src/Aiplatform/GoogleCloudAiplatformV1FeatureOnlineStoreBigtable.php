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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1FeatureOnlineStoreBigtable extends \Google\Model
{
  protected $autoScalingType = GoogleCloudAiplatformV1FeatureOnlineStoreBigtableAutoScaling::class;
  protected $autoScalingDataType = '';
  protected $bigtableMetadataType = GoogleCloudAiplatformV1FeatureOnlineStoreBigtableBigtableMetadata::class;
  protected $bigtableMetadataDataType = '';
  /**
   * @var bool
   */
  public $enableDirectBigtableAccess;

  /**
   * @param GoogleCloudAiplatformV1FeatureOnlineStoreBigtableAutoScaling
   */
  public function setAutoScaling(GoogleCloudAiplatformV1FeatureOnlineStoreBigtableAutoScaling $autoScaling)
  {
    $this->autoScaling = $autoScaling;
  }
  /**
   * @return GoogleCloudAiplatformV1FeatureOnlineStoreBigtableAutoScaling
   */
  public function getAutoScaling()
  {
    return $this->autoScaling;
  }
  /**
   * @param GoogleCloudAiplatformV1FeatureOnlineStoreBigtableBigtableMetadata
   */
  public function setBigtableMetadata(GoogleCloudAiplatformV1FeatureOnlineStoreBigtableBigtableMetadata $bigtableMetadata)
  {
    $this->bigtableMetadata = $bigtableMetadata;
  }
  /**
   * @return GoogleCloudAiplatformV1FeatureOnlineStoreBigtableBigtableMetadata
   */
  public function getBigtableMetadata()
  {
    return $this->bigtableMetadata;
  }
  /**
   * @param bool
   */
  public function setEnableDirectBigtableAccess($enableDirectBigtableAccess)
  {
    $this->enableDirectBigtableAccess = $enableDirectBigtableAccess;
  }
  /**
   * @return bool
   */
  public function getEnableDirectBigtableAccess()
  {
    return $this->enableDirectBigtableAccess;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1FeatureOnlineStoreBigtable::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1FeatureOnlineStoreBigtable');
