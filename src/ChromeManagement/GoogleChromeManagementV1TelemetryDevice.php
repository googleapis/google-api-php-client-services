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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementV1TelemetryDevice extends \Google\Collection
{
  protected $collection_key = 'thunderboltInfo';
  /**
   * @var GoogleChromeManagementV1AudioStatusReport[]
   */
  public $audioStatusReport;
  protected $audioStatusReportType = GoogleChromeManagementV1AudioStatusReport::class;
  protected $audioStatusReportDataType = 'array';
  /**
   * @var GoogleChromeManagementV1BatteryInfo[]
   */
  public $batteryInfo;
  protected $batteryInfoType = GoogleChromeManagementV1BatteryInfo::class;
  protected $batteryInfoDataType = 'array';
  /**
   * @var GoogleChromeManagementV1BatteryStatusReport[]
   */
  public $batteryStatusReport;
  protected $batteryStatusReportType = GoogleChromeManagementV1BatteryStatusReport::class;
  protected $batteryStatusReportDataType = 'array';
  /**
   * @var GoogleChromeManagementV1BootPerformanceReport[]
   */
  public $bootPerformanceReport;
  protected $bootPerformanceReportType = GoogleChromeManagementV1BootPerformanceReport::class;
  protected $bootPerformanceReportDataType = 'array';
  /**
   * @var GoogleChromeManagementV1CpuInfo[]
   */
  public $cpuInfo;
  protected $cpuInfoType = GoogleChromeManagementV1CpuInfo::class;
  protected $cpuInfoDataType = 'array';
  /**
   * @var GoogleChromeManagementV1CpuStatusReport[]
   */
  public $cpuStatusReport;
  protected $cpuStatusReportType = GoogleChromeManagementV1CpuStatusReport::class;
  protected $cpuStatusReportDataType = 'array';
  /**
   * @var string
   */
  public $customer;
  /**
   * @var string
   */
  public $deviceId;
  /**
   * @var GoogleChromeManagementV1GraphicsInfo
   */
  public $graphicsInfo;
  protected $graphicsInfoType = GoogleChromeManagementV1GraphicsInfo::class;
  protected $graphicsInfoDataType = '';
  /**
   * @var GoogleChromeManagementV1GraphicsStatusReport[]
   */
  public $graphicsStatusReport;
  protected $graphicsStatusReportType = GoogleChromeManagementV1GraphicsStatusReport::class;
  protected $graphicsStatusReportDataType = 'array';
  /**
   * @var GoogleChromeManagementV1HeartbeatStatusReport[]
   */
  public $heartbeatStatusReport;
  protected $heartbeatStatusReportType = GoogleChromeManagementV1HeartbeatStatusReport::class;
  protected $heartbeatStatusReportDataType = 'array';
  /**
   * @var GoogleChromeManagementV1KioskAppStatusReport[]
   */
  public $kioskAppStatusReport;
  protected $kioskAppStatusReportType = GoogleChromeManagementV1KioskAppStatusReport::class;
  protected $kioskAppStatusReportDataType = 'array';
  /**
   * @var GoogleChromeManagementV1MemoryInfo
   */
  public $memoryInfo;
  protected $memoryInfoType = GoogleChromeManagementV1MemoryInfo::class;
  protected $memoryInfoDataType = '';
  /**
   * @var GoogleChromeManagementV1MemoryStatusReport[]
   */
  public $memoryStatusReport;
  protected $memoryStatusReportType = GoogleChromeManagementV1MemoryStatusReport::class;
  protected $memoryStatusReportDataType = 'array';
  /**
   * @var string
   */
  public $name;
  /**
   * @var GoogleChromeManagementV1NetworkBandwidthReport[]
   */
  public $networkBandwidthReport;
  protected $networkBandwidthReportType = GoogleChromeManagementV1NetworkBandwidthReport::class;
  protected $networkBandwidthReportDataType = 'array';
  /**
   * @var GoogleChromeManagementV1NetworkDiagnosticsReport[]
   */
  public $networkDiagnosticsReport;
  protected $networkDiagnosticsReportType = GoogleChromeManagementV1NetworkDiagnosticsReport::class;
  protected $networkDiagnosticsReportDataType = 'array';
  /**
   * @var GoogleChromeManagementV1NetworkInfo
   */
  public $networkInfo;
  protected $networkInfoType = GoogleChromeManagementV1NetworkInfo::class;
  protected $networkInfoDataType = '';
  /**
   * @var GoogleChromeManagementV1NetworkStatusReport[]
   */
  public $networkStatusReport;
  protected $networkStatusReportType = GoogleChromeManagementV1NetworkStatusReport::class;
  protected $networkStatusReportDataType = 'array';
  /**
   * @var string
   */
  public $orgUnitId;
  /**
   * @var GoogleChromeManagementV1OsUpdateStatus[]
   */
  public $osUpdateStatus;
  protected $osUpdateStatusType = GoogleChromeManagementV1OsUpdateStatus::class;
  protected $osUpdateStatusDataType = 'array';
  /**
   * @var GoogleChromeManagementV1PeripheralsReport[]
   */
  public $peripheralsReport;
  protected $peripheralsReportType = GoogleChromeManagementV1PeripheralsReport::class;
  protected $peripheralsReportDataType = 'array';
  /**
   * @var string
   */
  public $serialNumber;
  /**
   * @var GoogleChromeManagementV1StorageInfo
   */
  public $storageInfo;
  protected $storageInfoType = GoogleChromeManagementV1StorageInfo::class;
  protected $storageInfoDataType = '';
  /**
   * @var GoogleChromeManagementV1StorageStatusReport[]
   */
  public $storageStatusReport;
  protected $storageStatusReportType = GoogleChromeManagementV1StorageStatusReport::class;
  protected $storageStatusReportDataType = 'array';
  /**
   * @var GoogleChromeManagementV1ThunderboltInfo[]
   */
  public $thunderboltInfo;
  protected $thunderboltInfoType = GoogleChromeManagementV1ThunderboltInfo::class;
  protected $thunderboltInfoDataType = 'array';

  /**
   * @param GoogleChromeManagementV1AudioStatusReport[]
   */
  public function setAudioStatusReport($audioStatusReport)
  {
    $this->audioStatusReport = $audioStatusReport;
  }
  /**
   * @return GoogleChromeManagementV1AudioStatusReport[]
   */
  public function getAudioStatusReport()
  {
    return $this->audioStatusReport;
  }
  /**
   * @param GoogleChromeManagementV1BatteryInfo[]
   */
  public function setBatteryInfo($batteryInfo)
  {
    $this->batteryInfo = $batteryInfo;
  }
  /**
   * @return GoogleChromeManagementV1BatteryInfo[]
   */
  public function getBatteryInfo()
  {
    return $this->batteryInfo;
  }
  /**
   * @param GoogleChromeManagementV1BatteryStatusReport[]
   */
  public function setBatteryStatusReport($batteryStatusReport)
  {
    $this->batteryStatusReport = $batteryStatusReport;
  }
  /**
   * @return GoogleChromeManagementV1BatteryStatusReport[]
   */
  public function getBatteryStatusReport()
  {
    return $this->batteryStatusReport;
  }
  /**
   * @param GoogleChromeManagementV1BootPerformanceReport[]
   */
  public function setBootPerformanceReport($bootPerformanceReport)
  {
    $this->bootPerformanceReport = $bootPerformanceReport;
  }
  /**
   * @return GoogleChromeManagementV1BootPerformanceReport[]
   */
  public function getBootPerformanceReport()
  {
    return $this->bootPerformanceReport;
  }
  /**
   * @param GoogleChromeManagementV1CpuInfo[]
   */
  public function setCpuInfo($cpuInfo)
  {
    $this->cpuInfo = $cpuInfo;
  }
  /**
   * @return GoogleChromeManagementV1CpuInfo[]
   */
  public function getCpuInfo()
  {
    return $this->cpuInfo;
  }
  /**
   * @param GoogleChromeManagementV1CpuStatusReport[]
   */
  public function setCpuStatusReport($cpuStatusReport)
  {
    $this->cpuStatusReport = $cpuStatusReport;
  }
  /**
   * @return GoogleChromeManagementV1CpuStatusReport[]
   */
  public function getCpuStatusReport()
  {
    return $this->cpuStatusReport;
  }
  /**
   * @param string
   */
  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  /**
   * @return string
   */
  public function getCustomer()
  {
    return $this->customer;
  }
  /**
   * @param string
   */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /**
   * @return string
   */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /**
   * @param GoogleChromeManagementV1GraphicsInfo
   */
  public function setGraphicsInfo(GoogleChromeManagementV1GraphicsInfo $graphicsInfo)
  {
    $this->graphicsInfo = $graphicsInfo;
  }
  /**
   * @return GoogleChromeManagementV1GraphicsInfo
   */
  public function getGraphicsInfo()
  {
    return $this->graphicsInfo;
  }
  /**
   * @param GoogleChromeManagementV1GraphicsStatusReport[]
   */
  public function setGraphicsStatusReport($graphicsStatusReport)
  {
    $this->graphicsStatusReport = $graphicsStatusReport;
  }
  /**
   * @return GoogleChromeManagementV1GraphicsStatusReport[]
   */
  public function getGraphicsStatusReport()
  {
    return $this->graphicsStatusReport;
  }
  /**
   * @param GoogleChromeManagementV1HeartbeatStatusReport[]
   */
  public function setHeartbeatStatusReport($heartbeatStatusReport)
  {
    $this->heartbeatStatusReport = $heartbeatStatusReport;
  }
  /**
   * @return GoogleChromeManagementV1HeartbeatStatusReport[]
   */
  public function getHeartbeatStatusReport()
  {
    return $this->heartbeatStatusReport;
  }
  /**
   * @param GoogleChromeManagementV1KioskAppStatusReport[]
   */
  public function setKioskAppStatusReport($kioskAppStatusReport)
  {
    $this->kioskAppStatusReport = $kioskAppStatusReport;
  }
  /**
   * @return GoogleChromeManagementV1KioskAppStatusReport[]
   */
  public function getKioskAppStatusReport()
  {
    return $this->kioskAppStatusReport;
  }
  /**
   * @param GoogleChromeManagementV1MemoryInfo
   */
  public function setMemoryInfo(GoogleChromeManagementV1MemoryInfo $memoryInfo)
  {
    $this->memoryInfo = $memoryInfo;
  }
  /**
   * @return GoogleChromeManagementV1MemoryInfo
   */
  public function getMemoryInfo()
  {
    return $this->memoryInfo;
  }
  /**
   * @param GoogleChromeManagementV1MemoryStatusReport[]
   */
  public function setMemoryStatusReport($memoryStatusReport)
  {
    $this->memoryStatusReport = $memoryStatusReport;
  }
  /**
   * @return GoogleChromeManagementV1MemoryStatusReport[]
   */
  public function getMemoryStatusReport()
  {
    return $this->memoryStatusReport;
  }
  /**
   * @param string
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
   * @param GoogleChromeManagementV1NetworkBandwidthReport[]
   */
  public function setNetworkBandwidthReport($networkBandwidthReport)
  {
    $this->networkBandwidthReport = $networkBandwidthReport;
  }
  /**
   * @return GoogleChromeManagementV1NetworkBandwidthReport[]
   */
  public function getNetworkBandwidthReport()
  {
    return $this->networkBandwidthReport;
  }
  /**
   * @param GoogleChromeManagementV1NetworkDiagnosticsReport[]
   */
  public function setNetworkDiagnosticsReport($networkDiagnosticsReport)
  {
    $this->networkDiagnosticsReport = $networkDiagnosticsReport;
  }
  /**
   * @return GoogleChromeManagementV1NetworkDiagnosticsReport[]
   */
  public function getNetworkDiagnosticsReport()
  {
    return $this->networkDiagnosticsReport;
  }
  /**
   * @param GoogleChromeManagementV1NetworkInfo
   */
  public function setNetworkInfo(GoogleChromeManagementV1NetworkInfo $networkInfo)
  {
    $this->networkInfo = $networkInfo;
  }
  /**
   * @return GoogleChromeManagementV1NetworkInfo
   */
  public function getNetworkInfo()
  {
    return $this->networkInfo;
  }
  /**
   * @param GoogleChromeManagementV1NetworkStatusReport[]
   */
  public function setNetworkStatusReport($networkStatusReport)
  {
    $this->networkStatusReport = $networkStatusReport;
  }
  /**
   * @return GoogleChromeManagementV1NetworkStatusReport[]
   */
  public function getNetworkStatusReport()
  {
    return $this->networkStatusReport;
  }
  /**
   * @param string
   */
  public function setOrgUnitId($orgUnitId)
  {
    $this->orgUnitId = $orgUnitId;
  }
  /**
   * @return string
   */
  public function getOrgUnitId()
  {
    return $this->orgUnitId;
  }
  /**
   * @param GoogleChromeManagementV1OsUpdateStatus[]
   */
  public function setOsUpdateStatus($osUpdateStatus)
  {
    $this->osUpdateStatus = $osUpdateStatus;
  }
  /**
   * @return GoogleChromeManagementV1OsUpdateStatus[]
   */
  public function getOsUpdateStatus()
  {
    return $this->osUpdateStatus;
  }
  /**
   * @param GoogleChromeManagementV1PeripheralsReport[]
   */
  public function setPeripheralsReport($peripheralsReport)
  {
    $this->peripheralsReport = $peripheralsReport;
  }
  /**
   * @return GoogleChromeManagementV1PeripheralsReport[]
   */
  public function getPeripheralsReport()
  {
    return $this->peripheralsReport;
  }
  /**
   * @param string
   */
  public function setSerialNumber($serialNumber)
  {
    $this->serialNumber = $serialNumber;
  }
  /**
   * @return string
   */
  public function getSerialNumber()
  {
    return $this->serialNumber;
  }
  /**
   * @param GoogleChromeManagementV1StorageInfo
   */
  public function setStorageInfo(GoogleChromeManagementV1StorageInfo $storageInfo)
  {
    $this->storageInfo = $storageInfo;
  }
  /**
   * @return GoogleChromeManagementV1StorageInfo
   */
  public function getStorageInfo()
  {
    return $this->storageInfo;
  }
  /**
   * @param GoogleChromeManagementV1StorageStatusReport[]
   */
  public function setStorageStatusReport($storageStatusReport)
  {
    $this->storageStatusReport = $storageStatusReport;
  }
  /**
   * @return GoogleChromeManagementV1StorageStatusReport[]
   */
  public function getStorageStatusReport()
  {
    return $this->storageStatusReport;
  }
  /**
   * @param GoogleChromeManagementV1ThunderboltInfo[]
   */
  public function setThunderboltInfo($thunderboltInfo)
  {
    $this->thunderboltInfo = $thunderboltInfo;
  }
  /**
   * @return GoogleChromeManagementV1ThunderboltInfo[]
   */
  public function getThunderboltInfo()
  {
    return $this->thunderboltInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1TelemetryDevice::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1TelemetryDevice');
