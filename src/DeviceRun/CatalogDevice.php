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

namespace Google\Service\DeviceRun;

class CatalogDevice extends \Google\Collection
{
  /**
   * Form factor not specified.
   */
  public const FORM_FACTOR_FORM_FACTOR_UNSPECIFIED = 'FORM_FACTOR_UNSPECIFIED';
  /**
   * Phone.
   */
  public const FORM_FACTOR_PHONE = 'PHONE';
  /**
   * Tablet.
   */
  public const FORM_FACTOR_TABLET = 'TABLET';
  /**
   * Wearable (e.g. watch).
   */
  public const FORM_FACTOR_WEARABLE = 'WEARABLE';
  /**
   * TV.
   */
  public const FORM_FACTOR_TV = 'TV';
  /**
   * Hardware type not specified.
   */
  public const HARDWARE_TYPE_HARDWARE_TYPE_UNSPECIFIED = 'HARDWARE_TYPE_UNSPECIFIED';
  /**
   * Physical hardware device.
   */
  public const HARDWARE_TYPE_PHYSICAL = 'PHYSICAL';
  /**
   * Virtual device (emulator / simulator).
   */
  public const HARDWARE_TYPE_VIRTUAL = 'VIRTUAL';
  /**
   * Platform not specified.
   */
  public const PLATFORM_PLATFORM_UNSPECIFIED = 'PLATFORM_UNSPECIFIED';
  /**
   * Android.
   */
  public const PLATFORM_ANDROID = 'ANDROID';
  /**
   * iOS.
   */
  public const PLATFORM_IOS = 'IOS';
  protected $collection_key = 'supportedProducts';
  /**
   * Output only. Reasons for access denial. This model is accessible/usable if
   * this list is empty, otherwise the model is viewable only.
   *
   * @var string[]
   */
  public $accessDeniedReasons;
  protected $androidDetailsType = CatalogAndroidDeviceDetails::class;
  protected $androidDetailsDataType = '';
  protected $availabilityType = CatalogDeviceAvailability::class;
  protected $availabilityDataType = '';
  /**
   * Output only. Provides a human-readable display name, e.g. "Pixel 5".
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Specifies the form factor of the device.
   *
   * @var string
   */
  public $formFactor;
  /**
   * Output only. Indicates whether the device is physical or virtual.
   *
   * @var string
   */
  public $hardwareType;
  protected $iosDetailsType = CatalogIosDeviceDetails::class;
  protected $iosDetailsDataType = '';
  protected $labInfoType = CatalogLabInfo::class;
  protected $labInfoDataType = '';
  /**
   * Output only. Additional information. Informational only. May change over
   * the lifecycle of a device.
   *
   * @var string[]
   */
  public $labels;
  protected $lifecycleType = CatalogLifecycle::class;
  protected $lifecycleDataType = '';
  /**
   * Output only. Specifies the hardware manufacturer of the device.
   *
   * @var string
   */
  public $manufacturer;
  /**
   * Output only. Provides a human-readable model identifier for this device,
   * independent of OS version. May be empty. Platform-dependent: * Android
   * physical: hardware codename (android.os.Build.DEVICE), e.g. "shiba". *
   * Android virtual: AVD model identifier, e.g. "MediumPhone.arm". * iOS: model
   * identifier, e.g. "iphone14pro".
   *
   * @var string
   */
  public $modelCode;
  /**
   * Identifier. Identifies the device resource. Format:
   * `projects/{project}/locations/{location}/devices/{device}`. The {device}
   * segment is an opaque, stable string. Clients must not parse it to derive or
   * assume device-specific details.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Specifies the OS version, e.g. "30" (Android API level) or
   * "17.4" (iOS).
   *
   * @var string
   */
  public $osVersion;
  /**
   * Output only. Specifies the platform of the device.
   *
   * @var string
   */
  public $platform;
  protected $primaryScreenType = CatalogScreenMetrics::class;
  protected $primaryScreenDataType = '';
  protected $supportedProductsType = CatalogSupportedProduct::class;
  protected $supportedProductsDataType = 'array';

  /**
   * Output only. Reasons for access denial. This model is accessible/usable if
   * this list is empty, otherwise the model is viewable only.
   *
   * @param string[] $accessDeniedReasons
   */
  public function setAccessDeniedReasons($accessDeniedReasons)
  {
    $this->accessDeniedReasons = $accessDeniedReasons;
  }
  /**
   * @return string[]
   */
  public function getAccessDeniedReasons()
  {
    return $this->accessDeniedReasons;
  }
  /**
   * Output only. Contains Android-specific attributes (set when platform ==
   * ANDROID).
   *
   * @param CatalogAndroidDeviceDetails $androidDetails
   */
  public function setAndroidDetails(CatalogAndroidDeviceDetails $androidDetails)
  {
    $this->androidDetails = $androidDetails;
  }
  /**
   * @return CatalogAndroidDeviceDetails
   */
  public function getAndroidDetails()
  {
    return $this->androidDetails;
  }
  /**
   * Output only. Reports the current fleet availability for this device
   * configuration.
   *
   * @param CatalogDeviceAvailability $availability
   */
  public function setAvailability(CatalogDeviceAvailability $availability)
  {
    $this->availability = $availability;
  }
  /**
   * @return CatalogDeviceAvailability
   */
  public function getAvailability()
  {
    return $this->availability;
  }
  /**
   * Output only. Provides a human-readable display name, e.g. "Pixel 5".
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. Specifies the form factor of the device.
   *
   * Accepted values: FORM_FACTOR_UNSPECIFIED, PHONE, TABLET, WEARABLE, TV
   *
   * @param self::FORM_FACTOR_* $formFactor
   */
  public function setFormFactor($formFactor)
  {
    $this->formFactor = $formFactor;
  }
  /**
   * @return self::FORM_FACTOR_*
   */
  public function getFormFactor()
  {
    return $this->formFactor;
  }
  /**
   * Output only. Indicates whether the device is physical or virtual.
   *
   * Accepted values: HARDWARE_TYPE_UNSPECIFIED, PHYSICAL, VIRTUAL
   *
   * @param self::HARDWARE_TYPE_* $hardwareType
   */
  public function setHardwareType($hardwareType)
  {
    $this->hardwareType = $hardwareType;
  }
  /**
   * @return self::HARDWARE_TYPE_*
   */
  public function getHardwareType()
  {
    return $this->hardwareType;
  }
  /**
   * Output only. Contains iOS-specific attributes (set when platform == IOS).
   *
   * @param CatalogIosDeviceDetails $iosDetails
   */
  public function setIosDetails(CatalogIosDeviceDetails $iosDetails)
  {
    $this->iosDetails = $iosDetails;
  }
  /**
   * @return CatalogIosDeviceDetails
   */
  public function getIosDetails()
  {
    return $this->iosDetails;
  }
  /**
   * Output only. The lab hosting this device.
   *
   * @param CatalogLabInfo $labInfo
   */
  public function setLabInfo(CatalogLabInfo $labInfo)
  {
    $this->labInfo = $labInfo;
  }
  /**
   * @return CatalogLabInfo
   */
  public function getLabInfo()
  {
    return $this->labInfo;
  }
  /**
   * Output only. Additional information. Informational only. May change over
   * the lifecycle of a device.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Output only. The device lifecycle (maturity stage and removal date).
   *
   * @param CatalogLifecycle $lifecycle
   */
  public function setLifecycle(CatalogLifecycle $lifecycle)
  {
    $this->lifecycle = $lifecycle;
  }
  /**
   * @return CatalogLifecycle
   */
  public function getLifecycle()
  {
    return $this->lifecycle;
  }
  /**
   * Output only. Specifies the hardware manufacturer of the device.
   *
   * @param string $manufacturer
   */
  public function setManufacturer($manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }
  /**
   * @return string
   */
  public function getManufacturer()
  {
    return $this->manufacturer;
  }
  /**
   * Output only. Provides a human-readable model identifier for this device,
   * independent of OS version. May be empty. Platform-dependent: * Android
   * physical: hardware codename (android.os.Build.DEVICE), e.g. "shiba". *
   * Android virtual: AVD model identifier, e.g. "MediumPhone.arm". * iOS: model
   * identifier, e.g. "iphone14pro".
   *
   * @param string $modelCode
   */
  public function setModelCode($modelCode)
  {
    $this->modelCode = $modelCode;
  }
  /**
   * @return string
   */
  public function getModelCode()
  {
    return $this->modelCode;
  }
  /**
   * Identifier. Identifies the device resource. Format:
   * `projects/{project}/locations/{location}/devices/{device}`. The {device}
   * segment is an opaque, stable string. Clients must not parse it to derive or
   * assume device-specific details.
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
   * Output only. Specifies the OS version, e.g. "30" (Android API level) or
   * "17.4" (iOS).
   *
   * @param string $osVersion
   */
  public function setOsVersion($osVersion)
  {
    $this->osVersion = $osVersion;
  }
  /**
   * @return string
   */
  public function getOsVersion()
  {
    return $this->osVersion;
  }
  /**
   * Output only. Specifies the platform of the device.
   *
   * Accepted values: PLATFORM_UNSPECIFIED, ANDROID, IOS
   *
   * @param self::PLATFORM_* $platform
   */
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  /**
   * @return self::PLATFORM_*
   */
  public function getPlatform()
  {
    return $this->platform;
  }
  /**
   * Output only. Measurements of the primary device screen. Informational only.
   * Unset for devices without a screen (e.g. some wearables).
   *
   * @param CatalogScreenMetrics $primaryScreen
   */
  public function setPrimaryScreen(CatalogScreenMetrics $primaryScreen)
  {
    $this->primaryScreen = $primaryScreen;
  }
  /**
   * @return CatalogScreenMetrics
   */
  public function getPrimaryScreen()
  {
    return $this->primaryScreen;
  }
  /**
   * Output only. Products/Services supported by this device.
   *
   * @param CatalogSupportedProduct[] $supportedProducts
   */
  public function setSupportedProducts($supportedProducts)
  {
    $this->supportedProducts = $supportedProducts;
  }
  /**
   * @return CatalogSupportedProduct[]
   */
  public function getSupportedProducts()
  {
    return $this->supportedProducts;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogDevice::class, 'Google_Service_DeviceRun_CatalogDevice');
