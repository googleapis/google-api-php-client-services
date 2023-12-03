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

namespace Google\Service\Contentwarehouse;

class AssistantDevicesPlatformProtoSupportedDeviceOps extends \Google\Model
{
  /**
   * @var AssistantDevicesPlatformProtoCallCallCapability
   */
  public $callCall;
  protected $callCallType = AssistantDevicesPlatformProtoCallCallCapability::class;
  protected $callCallDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoClientReconnectCapability
   */
  public $clientReconnect;
  protected $clientReconnectType = AssistantDevicesPlatformProtoClientReconnectCapability::class;
  protected $clientReconnectDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoCoreDismissAssistantCapability
   */
  public $coreDismissAssistant;
  protected $coreDismissAssistantType = AssistantDevicesPlatformProtoCoreDismissAssistantCapability::class;
  protected $coreDismissAssistantDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoDeviceModifySettingCapability
   */
  public $deviceModifySetting;
  protected $deviceModifySettingType = AssistantDevicesPlatformProtoDeviceModifySettingCapability::class;
  protected $deviceModifySettingDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoDeviceTakePhotoCapability
   */
  public $deviceTakePhoto;
  protected $deviceTakePhotoType = AssistantDevicesPlatformProtoDeviceTakePhotoCapability::class;
  protected $deviceTakePhotoDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoExecutionWaitCapability
   */
  public $executionWait;
  protected $executionWaitType = AssistantDevicesPlatformProtoExecutionWaitCapability::class;
  protected $executionWaitDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoMediaNextCapability
   */
  public $mediaNext;
  protected $mediaNextType = AssistantDevicesPlatformProtoMediaNextCapability::class;
  protected $mediaNextDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoMediaPauseCapability
   */
  public $mediaPause;
  protected $mediaPauseType = AssistantDevicesPlatformProtoMediaPauseCapability::class;
  protected $mediaPauseDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoMediaPlayMediaCapability
   */
  public $mediaPlayMedia;
  protected $mediaPlayMediaType = AssistantDevicesPlatformProtoMediaPlayMediaCapability::class;
  protected $mediaPlayMediaDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoMediaPreviousCapability
   */
  public $mediaPrevious;
  protected $mediaPreviousType = AssistantDevicesPlatformProtoMediaPreviousCapability::class;
  protected $mediaPreviousDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoMediaResumeCapability
   */
  public $mediaResume;
  protected $mediaResumeType = AssistantDevicesPlatformProtoMediaResumeCapability::class;
  protected $mediaResumeDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoMediaShowControlsCapability
   */
  public $mediaShowControls;
  protected $mediaShowControlsType = AssistantDevicesPlatformProtoMediaShowControlsCapability::class;
  protected $mediaShowControlsDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoMediaStopCapability
   */
  public $mediaStop;
  protected $mediaStopType = AssistantDevicesPlatformProtoMediaStopCapability::class;
  protected $mediaStopDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoProviderFulfillCapability
   */
  public $providerFulfill;
  protected $providerFulfillType = AssistantDevicesPlatformProtoProviderFulfillCapability::class;
  protected $providerFulfillDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoProviderOpenCapability
   */
  public $providerOpen;
  protected $providerOpenType = AssistantDevicesPlatformProtoProviderOpenCapability::class;
  protected $providerOpenDataType = '';
  /**
   * @var AssistantDevicesPlatformProtoSendChatMessageCapability
   */
  public $sendChatMessage;
  protected $sendChatMessageType = AssistantDevicesPlatformProtoSendChatMessageCapability::class;
  protected $sendChatMessageDataType = '';

  /**
   * @param AssistantDevicesPlatformProtoCallCallCapability
   */
  public function setCallCall(AssistantDevicesPlatformProtoCallCallCapability $callCall)
  {
    $this->callCall = $callCall;
  }
  /**
   * @return AssistantDevicesPlatformProtoCallCallCapability
   */
  public function getCallCall()
  {
    return $this->callCall;
  }
  /**
   * @param AssistantDevicesPlatformProtoClientReconnectCapability
   */
  public function setClientReconnect(AssistantDevicesPlatformProtoClientReconnectCapability $clientReconnect)
  {
    $this->clientReconnect = $clientReconnect;
  }
  /**
   * @return AssistantDevicesPlatformProtoClientReconnectCapability
   */
  public function getClientReconnect()
  {
    return $this->clientReconnect;
  }
  /**
   * @param AssistantDevicesPlatformProtoCoreDismissAssistantCapability
   */
  public function setCoreDismissAssistant(AssistantDevicesPlatformProtoCoreDismissAssistantCapability $coreDismissAssistant)
  {
    $this->coreDismissAssistant = $coreDismissAssistant;
  }
  /**
   * @return AssistantDevicesPlatformProtoCoreDismissAssistantCapability
   */
  public function getCoreDismissAssistant()
  {
    return $this->coreDismissAssistant;
  }
  /**
   * @param AssistantDevicesPlatformProtoDeviceModifySettingCapability
   */
  public function setDeviceModifySetting(AssistantDevicesPlatformProtoDeviceModifySettingCapability $deviceModifySetting)
  {
    $this->deviceModifySetting = $deviceModifySetting;
  }
  /**
   * @return AssistantDevicesPlatformProtoDeviceModifySettingCapability
   */
  public function getDeviceModifySetting()
  {
    return $this->deviceModifySetting;
  }
  /**
   * @param AssistantDevicesPlatformProtoDeviceTakePhotoCapability
   */
  public function setDeviceTakePhoto(AssistantDevicesPlatformProtoDeviceTakePhotoCapability $deviceTakePhoto)
  {
    $this->deviceTakePhoto = $deviceTakePhoto;
  }
  /**
   * @return AssistantDevicesPlatformProtoDeviceTakePhotoCapability
   */
  public function getDeviceTakePhoto()
  {
    return $this->deviceTakePhoto;
  }
  /**
   * @param AssistantDevicesPlatformProtoExecutionWaitCapability
   */
  public function setExecutionWait(AssistantDevicesPlatformProtoExecutionWaitCapability $executionWait)
  {
    $this->executionWait = $executionWait;
  }
  /**
   * @return AssistantDevicesPlatformProtoExecutionWaitCapability
   */
  public function getExecutionWait()
  {
    return $this->executionWait;
  }
  /**
   * @param AssistantDevicesPlatformProtoMediaNextCapability
   */
  public function setMediaNext(AssistantDevicesPlatformProtoMediaNextCapability $mediaNext)
  {
    $this->mediaNext = $mediaNext;
  }
  /**
   * @return AssistantDevicesPlatformProtoMediaNextCapability
   */
  public function getMediaNext()
  {
    return $this->mediaNext;
  }
  /**
   * @param AssistantDevicesPlatformProtoMediaPauseCapability
   */
  public function setMediaPause(AssistantDevicesPlatformProtoMediaPauseCapability $mediaPause)
  {
    $this->mediaPause = $mediaPause;
  }
  /**
   * @return AssistantDevicesPlatformProtoMediaPauseCapability
   */
  public function getMediaPause()
  {
    return $this->mediaPause;
  }
  /**
   * @param AssistantDevicesPlatformProtoMediaPlayMediaCapability
   */
  public function setMediaPlayMedia(AssistantDevicesPlatformProtoMediaPlayMediaCapability $mediaPlayMedia)
  {
    $this->mediaPlayMedia = $mediaPlayMedia;
  }
  /**
   * @return AssistantDevicesPlatformProtoMediaPlayMediaCapability
   */
  public function getMediaPlayMedia()
  {
    return $this->mediaPlayMedia;
  }
  /**
   * @param AssistantDevicesPlatformProtoMediaPreviousCapability
   */
  public function setMediaPrevious(AssistantDevicesPlatformProtoMediaPreviousCapability $mediaPrevious)
  {
    $this->mediaPrevious = $mediaPrevious;
  }
  /**
   * @return AssistantDevicesPlatformProtoMediaPreviousCapability
   */
  public function getMediaPrevious()
  {
    return $this->mediaPrevious;
  }
  /**
   * @param AssistantDevicesPlatformProtoMediaResumeCapability
   */
  public function setMediaResume(AssistantDevicesPlatformProtoMediaResumeCapability $mediaResume)
  {
    $this->mediaResume = $mediaResume;
  }
  /**
   * @return AssistantDevicesPlatformProtoMediaResumeCapability
   */
  public function getMediaResume()
  {
    return $this->mediaResume;
  }
  /**
   * @param AssistantDevicesPlatformProtoMediaShowControlsCapability
   */
  public function setMediaShowControls(AssistantDevicesPlatformProtoMediaShowControlsCapability $mediaShowControls)
  {
    $this->mediaShowControls = $mediaShowControls;
  }
  /**
   * @return AssistantDevicesPlatformProtoMediaShowControlsCapability
   */
  public function getMediaShowControls()
  {
    return $this->mediaShowControls;
  }
  /**
   * @param AssistantDevicesPlatformProtoMediaStopCapability
   */
  public function setMediaStop(AssistantDevicesPlatformProtoMediaStopCapability $mediaStop)
  {
    $this->mediaStop = $mediaStop;
  }
  /**
   * @return AssistantDevicesPlatformProtoMediaStopCapability
   */
  public function getMediaStop()
  {
    return $this->mediaStop;
  }
  /**
   * @param AssistantDevicesPlatformProtoProviderFulfillCapability
   */
  public function setProviderFulfill(AssistantDevicesPlatformProtoProviderFulfillCapability $providerFulfill)
  {
    $this->providerFulfill = $providerFulfill;
  }
  /**
   * @return AssistantDevicesPlatformProtoProviderFulfillCapability
   */
  public function getProviderFulfill()
  {
    return $this->providerFulfill;
  }
  /**
   * @param AssistantDevicesPlatformProtoProviderOpenCapability
   */
  public function setProviderOpen(AssistantDevicesPlatformProtoProviderOpenCapability $providerOpen)
  {
    $this->providerOpen = $providerOpen;
  }
  /**
   * @return AssistantDevicesPlatformProtoProviderOpenCapability
   */
  public function getProviderOpen()
  {
    return $this->providerOpen;
  }
  /**
   * @param AssistantDevicesPlatformProtoSendChatMessageCapability
   */
  public function setSendChatMessage(AssistantDevicesPlatformProtoSendChatMessageCapability $sendChatMessage)
  {
    $this->sendChatMessage = $sendChatMessage;
  }
  /**
   * @return AssistantDevicesPlatformProtoSendChatMessageCapability
   */
  public function getSendChatMessage()
  {
    return $this->sendChatMessage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantDevicesPlatformProtoSupportedDeviceOps::class, 'Google_Service_Contentwarehouse_AssistantDevicesPlatformProtoSupportedDeviceOps');
