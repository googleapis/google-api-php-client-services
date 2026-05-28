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

namespace Google\Service\GoogleHealthAPI;

class PairedDevice extends \Google\Collection
{
  /**
   * Device type is not specified.
   */
  public const DEVICE_TYPE_DEVICE_TYPE_UNSPECIFIED = 'DEVICE_TYPE_UNSPECIFIED';
  /**
   * Device type is tracker.
   */
  public const DEVICE_TYPE_TRACKER = 'TRACKER';
  /**
   * Device type is scale.
   */
  public const DEVICE_TYPE_SCALE = 'SCALE';
  protected $collection_key = 'features';
  /**
   * Output only. The battery level of the device.
   *
   * @var int
   */
  public $batteryLevel;
  /**
   * Output only. The battery status of the device. Supported: High | Medium |
   * Low | Empty
   *
   * @var string
   */
  public $batteryStatus;
  /**
   * Output only. The device type. Supported: TRACKER | SCALE
   *
   * @var string
   */
  public $deviceType;
  /**
   * Output only. The product name of the device
   *
   * @var string
   */
  public $deviceVersion;
  /**
   * Output only. Lists of unique features supported by the device.
   * Comprehensive list of supported features: **Fitness Tracking** -
   * `ACTIVE_MINUTES`: Legacy active minutes. - `AUTOSTRIDE`: Automatic stride
   * length calculation. - `BIKE_ONBOARDING`: Cycling UI support. - `CALORIES`:
   * Daily burned calories. - `DISTANCE`: Daily distance tracking. -
   * `ELEVATION`: Floors climbed. - `INACTIVITY_ALERTS`: Reminders to move. -
   * `SEDENTARY_TIME`: Tracks inactive time. - `STEPS`: Daily steps. - `SWIM`:
   * Swim tracking (laps/strokes). - `AUTORUN`: Automatic run detection. -
   * `ACTIVE_ZONE_MINUTES`: Active Zone Minutes (AZM). **Heart Rate & Health** -
   * `HEART_RATE`: Continuous heart rate (PPG). - `BAT_SIGNAL`: High/Low Heart
   * Rate Alerts. **Advanced Sensors** - `SPO2`: Blood oxygen saturation. -
   * `NIGHTTIME_OXYGEN_SATURATION`: Sleep SpO2. - `ESTIMATED_OXYGEN_VARIATION`:
   * Estimated Oxygen Variation. - `EDA`: Electrodermal Activity (stress). -
   * `SKIN_TEMPERATURE`: Skin temperature variation. -
   * `INTERNAL_DEVICE_TEMPERATURE`: Internal device temperature. **Sleep &
   * Wellness** - `SLEEP`: Basic sleep tracking. - `SMART_SLEEP`: Advanced sleep
   * tracking (stages/score). - `BEDTIME_REMINDER`: Bedtime reminders. -
   * `SOUNDSCAPE`: Snore and noise detection. **Advanced Workouts** - `WB`:
   * Custom Workout Builder. - `AUTOCUES`: Auto Cues / Auto Lap. - `DWR_RUN`:
   * Daily Run Recommendations. - `ADVANCED_RUNNING`: Advanced Running Dynamics
   * (e.g., GCT, VO). **GPS & Location** - `GPS`: Built-in GPS. -
   * `CONNECTED_GPS`: Connected GPS (uses phone). - `LOCATION_HINT`: Location
   * helper. **Payments & NFC** - `PAYMENTS`: NFC payments (Fitbit Pay/Google
   * Wallet). - `FELICA`: FeliCa support (Japan payments/transit). **Activity
   * Detection** - `GROK`: SmartTrack automatic activity detection. -
   * `RETRO_AR`: Retroactive Activity Recognition prompts. **Smart Features &
   * UI** - `ALARMS`: Silent alarms. - `BLE_MUSIC_CONTROL`: BLE music control. -
   * `MUSIC`: Direct music storage/control. - `YOUTUBE_MUSIC_SUPPORTED`: YouTube
   * Music support. - `GALLERY`: App Gallery. - `TUTORIAL_SUPPORTED`: On-screen
   * tutorials. - `SMILEY_EMOTE`: Legacy Zip face. -
   * `MOBILE_TO_DEVICE_DEEPLINK`: Mobile to device settings deep link. -
   * `HIDE_GALLERY`: Option to hide Gallery. - `HIDE_GOAL_SELECTION`: Option to
   * hide goal selection. - `DIGITAL_WARRANTY_SUPPORTED`: Digital warranty
   * display. - `DIRECT_DEVICE_SETTINGS_SUPPORTED`: Direct device settings
   * management. **Gym HR Broadcasting** - `ASPEN_SUPPORTED`: Broadcast HR to
   * gym equipment. - `ASPEN_REMOTE_UI_SUPPORTED`: Remote UI for HR sharing.
   * **Privacy & Security** - `FINITE_IMPROBABILITY`: BLE Resolvable Private
   * Address (RPA) privacy. - `DOMAIN_KEY_SYNC`: Domain key synchronization.
   * **BLE Protocol** - `BONDING`: Secure BLE bonding. - `ADVERTISES_SERIAL`:
   * Advertises serial number. - `STATUS_CHARACTERISTIC`: BLE Status
   * Characteristic. - `TRACKER_CHANNEL_CHARACTERISTIC`: BLE Tracker Channel
   * Characteristic. - `PING_CHARACTERISTIC`: BLE Ping Characteristic.
   * **Cellular & Wi-Fi** - `MOBILE_DATA`: LTE cellular support. -
   * `SINGLE_AP_WIFI`: Single AP Wi-Fi. - `MULTI_AP_WIFI`: Multi AP Wi-Fi. -
   * `WIFI_FWUP`: Firmware updates over Wi-Fi. **Data Sync & Transfer** -
   * `APP_SYNC`: Background app sync. - `LIVE_DATA`: Real-time data streaming. -
   * `EVENT_BASED_SYNC_SUPPORTED`: Event-based sync. - `TIME_SERVICE`: Time
   * synchronization service. - `REMOTE_FILE_PROVIDER`: Remote file transfer. -
   * `DIRECT_COMMS_ALARMS`: Direct communication for alarms. -
   * `DIRECT_COMMS_EXERCISE`: Direct communication for exercise. -
   * `DIRECT_COMMS_BATTERY_ALERTS`: Direct communication for battery alerts.
   * **Google Integrations** - `PARROT_TREE_SUPPORTED`: Find My Device support.
   *
   * @var string[]
   */
  public $features;
  /**
   * Output only. The time of last sync with the Fitbit mobile application.
   *
   * @var string
   */
  public $lastSyncTime;
  /**
   * Output only. Mac ID number of the device.
   *
   * @var string
   */
  public $macAddress;
  /**
   * Identifier. The resource name of this Device resource. Format:
   * `users/{user}/pairedDevices/{paired_device}` Example:
   * `users/1234567890/pairedDevices/123` or `users/me/pairedDevices/123`
   *
   * @var string
   */
  public $name;

  /**
   * Output only. The battery level of the device.
   *
   * @param int $batteryLevel
   */
  public function setBatteryLevel($batteryLevel)
  {
    $this->batteryLevel = $batteryLevel;
  }
  /**
   * @return int
   */
  public function getBatteryLevel()
  {
    return $this->batteryLevel;
  }
  /**
   * Output only. The battery status of the device. Supported: High | Medium |
   * Low | Empty
   *
   * @param string $batteryStatus
   */
  public function setBatteryStatus($batteryStatus)
  {
    $this->batteryStatus = $batteryStatus;
  }
  /**
   * @return string
   */
  public function getBatteryStatus()
  {
    return $this->batteryStatus;
  }
  /**
   * Output only. The device type. Supported: TRACKER | SCALE
   *
   * Accepted values: DEVICE_TYPE_UNSPECIFIED, TRACKER, SCALE
   *
   * @param self::DEVICE_TYPE_* $deviceType
   */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /**
   * @return self::DEVICE_TYPE_*
   */
  public function getDeviceType()
  {
    return $this->deviceType;
  }
  /**
   * Output only. The product name of the device
   *
   * @param string $deviceVersion
   */
  public function setDeviceVersion($deviceVersion)
  {
    $this->deviceVersion = $deviceVersion;
  }
  /**
   * @return string
   */
  public function getDeviceVersion()
  {
    return $this->deviceVersion;
  }
  /**
   * Output only. Lists of unique features supported by the device.
   * Comprehensive list of supported features: **Fitness Tracking** -
   * `ACTIVE_MINUTES`: Legacy active minutes. - `AUTOSTRIDE`: Automatic stride
   * length calculation. - `BIKE_ONBOARDING`: Cycling UI support. - `CALORIES`:
   * Daily burned calories. - `DISTANCE`: Daily distance tracking. -
   * `ELEVATION`: Floors climbed. - `INACTIVITY_ALERTS`: Reminders to move. -
   * `SEDENTARY_TIME`: Tracks inactive time. - `STEPS`: Daily steps. - `SWIM`:
   * Swim tracking (laps/strokes). - `AUTORUN`: Automatic run detection. -
   * `ACTIVE_ZONE_MINUTES`: Active Zone Minutes (AZM). **Heart Rate & Health** -
   * `HEART_RATE`: Continuous heart rate (PPG). - `BAT_SIGNAL`: High/Low Heart
   * Rate Alerts. **Advanced Sensors** - `SPO2`: Blood oxygen saturation. -
   * `NIGHTTIME_OXYGEN_SATURATION`: Sleep SpO2. - `ESTIMATED_OXYGEN_VARIATION`:
   * Estimated Oxygen Variation. - `EDA`: Electrodermal Activity (stress). -
   * `SKIN_TEMPERATURE`: Skin temperature variation. -
   * `INTERNAL_DEVICE_TEMPERATURE`: Internal device temperature. **Sleep &
   * Wellness** - `SLEEP`: Basic sleep tracking. - `SMART_SLEEP`: Advanced sleep
   * tracking (stages/score). - `BEDTIME_REMINDER`: Bedtime reminders. -
   * `SOUNDSCAPE`: Snore and noise detection. **Advanced Workouts** - `WB`:
   * Custom Workout Builder. - `AUTOCUES`: Auto Cues / Auto Lap. - `DWR_RUN`:
   * Daily Run Recommendations. - `ADVANCED_RUNNING`: Advanced Running Dynamics
   * (e.g., GCT, VO). **GPS & Location** - `GPS`: Built-in GPS. -
   * `CONNECTED_GPS`: Connected GPS (uses phone). - `LOCATION_HINT`: Location
   * helper. **Payments & NFC** - `PAYMENTS`: NFC payments (Fitbit Pay/Google
   * Wallet). - `FELICA`: FeliCa support (Japan payments/transit). **Activity
   * Detection** - `GROK`: SmartTrack automatic activity detection. -
   * `RETRO_AR`: Retroactive Activity Recognition prompts. **Smart Features &
   * UI** - `ALARMS`: Silent alarms. - `BLE_MUSIC_CONTROL`: BLE music control. -
   * `MUSIC`: Direct music storage/control. - `YOUTUBE_MUSIC_SUPPORTED`: YouTube
   * Music support. - `GALLERY`: App Gallery. - `TUTORIAL_SUPPORTED`: On-screen
   * tutorials. - `SMILEY_EMOTE`: Legacy Zip face. -
   * `MOBILE_TO_DEVICE_DEEPLINK`: Mobile to device settings deep link. -
   * `HIDE_GALLERY`: Option to hide Gallery. - `HIDE_GOAL_SELECTION`: Option to
   * hide goal selection. - `DIGITAL_WARRANTY_SUPPORTED`: Digital warranty
   * display. - `DIRECT_DEVICE_SETTINGS_SUPPORTED`: Direct device settings
   * management. **Gym HR Broadcasting** - `ASPEN_SUPPORTED`: Broadcast HR to
   * gym equipment. - `ASPEN_REMOTE_UI_SUPPORTED`: Remote UI for HR sharing.
   * **Privacy & Security** - `FINITE_IMPROBABILITY`: BLE Resolvable Private
   * Address (RPA) privacy. - `DOMAIN_KEY_SYNC`: Domain key synchronization.
   * **BLE Protocol** - `BONDING`: Secure BLE bonding. - `ADVERTISES_SERIAL`:
   * Advertises serial number. - `STATUS_CHARACTERISTIC`: BLE Status
   * Characteristic. - `TRACKER_CHANNEL_CHARACTERISTIC`: BLE Tracker Channel
   * Characteristic. - `PING_CHARACTERISTIC`: BLE Ping Characteristic.
   * **Cellular & Wi-Fi** - `MOBILE_DATA`: LTE cellular support. -
   * `SINGLE_AP_WIFI`: Single AP Wi-Fi. - `MULTI_AP_WIFI`: Multi AP Wi-Fi. -
   * `WIFI_FWUP`: Firmware updates over Wi-Fi. **Data Sync & Transfer** -
   * `APP_SYNC`: Background app sync. - `LIVE_DATA`: Real-time data streaming. -
   * `EVENT_BASED_SYNC_SUPPORTED`: Event-based sync. - `TIME_SERVICE`: Time
   * synchronization service. - `REMOTE_FILE_PROVIDER`: Remote file transfer. -
   * `DIRECT_COMMS_ALARMS`: Direct communication for alarms. -
   * `DIRECT_COMMS_EXERCISE`: Direct communication for exercise. -
   * `DIRECT_COMMS_BATTERY_ALERTS`: Direct communication for battery alerts.
   * **Google Integrations** - `PARROT_TREE_SUPPORTED`: Find My Device support.
   *
   * @param string[] $features
   */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /**
   * @return string[]
   */
  public function getFeatures()
  {
    return $this->features;
  }
  /**
   * Output only. The time of last sync with the Fitbit mobile application.
   *
   * @param string $lastSyncTime
   */
  public function setLastSyncTime($lastSyncTime)
  {
    $this->lastSyncTime = $lastSyncTime;
  }
  /**
   * @return string
   */
  public function getLastSyncTime()
  {
    return $this->lastSyncTime;
  }
  /**
   * Output only. Mac ID number of the device.
   *
   * @param string $macAddress
   */
  public function setMacAddress($macAddress)
  {
    $this->macAddress = $macAddress;
  }
  /**
   * @return string
   */
  public function getMacAddress()
  {
    return $this->macAddress;
  }
  /**
   * Identifier. The resource name of this Device resource. Format:
   * `users/{user}/pairedDevices/{paired_device}` Example:
   * `users/1234567890/pairedDevices/123` or `users/me/pairedDevices/123`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PairedDevice::class, 'Google_Service_GoogleHealthAPI_PairedDevice');
