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

class GoogleAdsSearchads360V23CommonBusinessMessageAsset extends \Google\Model
{
  /**
   * Not specified.
   */
  public const MESSAGE_PROVIDER_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const MESSAGE_PROVIDER_UNKNOWN = 'UNKNOWN';
  /**
   * WhatsApp message provider
   */
  public const MESSAGE_PROVIDER_WHATSAPP = 'WHATSAPP';
  /**
   * Facebook Messenger message provider
   */
  public const MESSAGE_PROVIDER_FACEBOOK_MESSENGER = 'FACEBOOK_MESSENGER';
  /**
   * Zalo message provider
   */
  public const MESSAGE_PROVIDER_ZALO = 'ZALO';
  protected $callToActionType = GoogleAdsSearchads360V23CommonBusinessMessageCallToActionInfo::class;
  protected $callToActionDataType = '';
  protected $facebookMessengerInfoType = GoogleAdsSearchads360V23CommonFacebookMessengerBusinessMessageInfo::class;
  protected $facebookMessengerInfoDataType = '';
  /**
   * Required. Message provider of the business message asset.
   *
   * @var string
   */
  public $messageProvider;
  /**
   * Required. A welcome message to prompt the user to initiate a conversation.
   *
   * @var string
   */
  public $starterMessage;
  protected $whatsappInfoType = GoogleAdsSearchads360V23CommonWhatsappBusinessMessageInfo::class;
  protected $whatsappInfoDataType = '';
  protected $zaloInfoType = GoogleAdsSearchads360V23CommonZaloBusinessMessageInfo::class;
  protected $zaloInfoDataType = '';

  /**
   * A call to action for the business message asset.
   *
   * @param GoogleAdsSearchads360V23CommonBusinessMessageCallToActionInfo $callToAction
   */
  public function setCallToAction(GoogleAdsSearchads360V23CommonBusinessMessageCallToActionInfo $callToAction)
  {
    $this->callToAction = $callToAction;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonBusinessMessageCallToActionInfo
   */
  public function getCallToAction()
  {
    return $this->callToAction;
  }
  /**
   * Facebook Messenger.
   *
   * @param GoogleAdsSearchads360V23CommonFacebookMessengerBusinessMessageInfo $facebookMessengerInfo
   */
  public function setFacebookMessengerInfo(GoogleAdsSearchads360V23CommonFacebookMessengerBusinessMessageInfo $facebookMessengerInfo)
  {
    $this->facebookMessengerInfo = $facebookMessengerInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonFacebookMessengerBusinessMessageInfo
   */
  public function getFacebookMessengerInfo()
  {
    return $this->facebookMessengerInfo;
  }
  /**
   * Required. Message provider of the business message asset.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, WHATSAPP, FACEBOOK_MESSENGER, ZALO
   *
   * @param self::MESSAGE_PROVIDER_* $messageProvider
   */
  public function setMessageProvider($messageProvider)
  {
    $this->messageProvider = $messageProvider;
  }
  /**
   * @return self::MESSAGE_PROVIDER_*
   */
  public function getMessageProvider()
  {
    return $this->messageProvider;
  }
  /**
   * Required. A welcome message to prompt the user to initiate a conversation.
   *
   * @param string $starterMessage
   */
  public function setStarterMessage($starterMessage)
  {
    $this->starterMessage = $starterMessage;
  }
  /**
   * @return string
   */
  public function getStarterMessage()
  {
    return $this->starterMessage;
  }
  /**
   * Whatsapp.
   *
   * @param GoogleAdsSearchads360V23CommonWhatsappBusinessMessageInfo $whatsappInfo
   */
  public function setWhatsappInfo(GoogleAdsSearchads360V23CommonWhatsappBusinessMessageInfo $whatsappInfo)
  {
    $this->whatsappInfo = $whatsappInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonWhatsappBusinessMessageInfo
   */
  public function getWhatsappInfo()
  {
    return $this->whatsappInfo;
  }
  /**
   * Zalo.
   *
   * @param GoogleAdsSearchads360V23CommonZaloBusinessMessageInfo $zaloInfo
   */
  public function setZaloInfo(GoogleAdsSearchads360V23CommonZaloBusinessMessageInfo $zaloInfo)
  {
    $this->zaloInfo = $zaloInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonZaloBusinessMessageInfo
   */
  public function getZaloInfo()
  {
    return $this->zaloInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonBusinessMessageAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonBusinessMessageAsset');
