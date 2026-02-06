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

namespace Google\Service\CustomerEngagementSuite;

class AmbientSoundConfig extends \Google\Model
{
  /**
   * Not specified.
   */
  public const PREBUILT_AMBIENT_NOISE_PREBUILT_AMBIENT_NOISE_UNSPECIFIED = 'PREBUILT_AMBIENT_NOISE_UNSPECIFIED';
  /**
   * Ambient noise of a retail store.
   */
  public const PREBUILT_AMBIENT_NOISE_RETAIL_STORE = 'RETAIL_STORE';
  /**
   * Ambient noise of a convention hall.
   */
  public const PREBUILT_AMBIENT_NOISE_CONVENTION_HALL = 'CONVENTION_HALL';
  /**
   * Ambient noise of a street.
   */
  public const PREBUILT_AMBIENT_NOISE_OUTDOOR = 'OUTDOOR';
  /**
   * Optional. Ambient noise as a mono-channel, 16kHz WAV file stored in [Cloud
   * Storage](https://cloud.google.com/storage). Note: Please make sure the CES
   * service agent `service-@gcp-sa-ces.iam.gserviceaccount.com` has
   * `storage.objects.get` permission to the Cloud Storage object.
   *
   * @var string
   */
  public $gcsUri;
  /**
   * Optional. Deprecated: `prebuilt_ambient_noise` is deprecated in favor of
   * `prebuilt_ambient_sound`.
   *
   * @deprecated
   * @var string
   */
  public $prebuiltAmbientNoise;
  /**
   * Optional. Name of the prebuilt ambient sound. Valid values are: -
   * "coffee_shop" - "keyboard" - "keypad" - "hum" - "office_1" - "office_2" -
   * "office_3" - "room_1" - "room_2" - "room_3" - "room_4" - "room_5" -
   * "air_conditioner"
   *
   * @var string
   */
  public $prebuiltAmbientSound;
  /**
   * Optional. Volume gain (in dB) of the normal native volume supported by
   * ambient noise, in the range [-96.0, 16.0]. If unset, or set to a value of
   * 0.0 (dB), will play at normal native signal amplitude. A value of -6.0 (dB)
   * will play at approximately half the amplitude of the normal native signal
   * amplitude. A value of +6.0 (dB) will play at approximately twice the
   * amplitude of the normal native signal amplitude. We strongly recommend not
   * to exceed +10 (dB) as there's usually no effective increase in loudness for
   * any value greater than that.
   *
   * @var 
   */
  public $volumeGainDb;

  /**
   * Optional. Ambient noise as a mono-channel, 16kHz WAV file stored in [Cloud
   * Storage](https://cloud.google.com/storage). Note: Please make sure the CES
   * service agent `service-@gcp-sa-ces.iam.gserviceaccount.com` has
   * `storage.objects.get` permission to the Cloud Storage object.
   *
   * @param string $gcsUri
   */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /**
   * @return string
   */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /**
   * Optional. Deprecated: `prebuilt_ambient_noise` is deprecated in favor of
   * `prebuilt_ambient_sound`.
   *
   * Accepted values: PREBUILT_AMBIENT_NOISE_UNSPECIFIED, RETAIL_STORE,
   * CONVENTION_HALL, OUTDOOR
   *
   * @deprecated
   * @param self::PREBUILT_AMBIENT_NOISE_* $prebuiltAmbientNoise
   */
  public function setPrebuiltAmbientNoise($prebuiltAmbientNoise)
  {
    $this->prebuiltAmbientNoise = $prebuiltAmbientNoise;
  }
  /**
   * @deprecated
   * @return self::PREBUILT_AMBIENT_NOISE_*
   */
  public function getPrebuiltAmbientNoise()
  {
    return $this->prebuiltAmbientNoise;
  }
  /**
   * Optional. Name of the prebuilt ambient sound. Valid values are: -
   * "coffee_shop" - "keyboard" - "keypad" - "hum" - "office_1" - "office_2" -
   * "office_3" - "room_1" - "room_2" - "room_3" - "room_4" - "room_5" -
   * "air_conditioner"
   *
   * @param string $prebuiltAmbientSound
   */
  public function setPrebuiltAmbientSound($prebuiltAmbientSound)
  {
    $this->prebuiltAmbientSound = $prebuiltAmbientSound;
  }
  /**
   * @return string
   */
  public function getPrebuiltAmbientSound()
  {
    return $this->prebuiltAmbientSound;
  }
  public function setVolumeGainDb($volumeGainDb)
  {
    $this->volumeGainDb = $volumeGainDb;
  }
  public function getVolumeGainDb()
  {
    return $this->volumeGainDb;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AmbientSoundConfig::class, 'Google_Service_CustomerEngagementSuite_AmbientSoundConfig');
