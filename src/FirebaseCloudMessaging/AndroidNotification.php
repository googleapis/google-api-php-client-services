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

namespace Google\Service\FirebaseCloudMessaging;

class AndroidNotification extends \Google\Collection
{
/**
 * @var string
 */
  protected $collection_key = 'vibrateTimings';
  public string $body;
  public array $bodyLocArgs;
  public string $bodyLocKey;
  public bool $bypassProxyNotification;
  public string $channelId;
  public string $clickAction;
  public string $color;
  public bool $defaultLightSettings;
  public bool $defaultSound;
  public bool $defaultVibrateTimings;
  public string $eventTime;
  public string $icon;
  public string $image;
  protected string $lightSettingsType = LightSettings::class;
  protected string $lightSettingsDataType = '';
  public bool $localOnly;
  public int $notificationCount;
  public string $notificationPriority;
  public string $proxy;
  public string $sound;
  public bool $sticky;
  public string $tag;
  public string $ticker;
  public string $title;
  public array $titleLocArgs;
  public string $titleLocKey;
  public array $vibrateTimings;
  public string $visibility;
  protected LightSettings $lightSettings;

  public function setBody(string $body): void
  {
    $this->body = $body;
  }

  /**
   * @return string
   */
  public function getBody(): string
  {
    return $this->body;
  }

  /**
   * @param string[] $bodyLocArgs
   */
  public function setBodyLocArgs(array $bodyLocArgs): void
  {
    $this->bodyLocArgs = $bodyLocArgs;
  }

  /**
   * @return string[]
   */
  public function getBodyLocArgs(): array
  {
    return $this->bodyLocArgs;
  }

  /**
   * @param string $bodyLocKey
   */
  public function setBodyLocKey(string $bodyLocKey): void
  {
    $this->bodyLocKey = $bodyLocKey;
  }

  /**
   * @return string
   */
  public function getBodyLocKey(): string
  {
    return $this->bodyLocKey;
  }

  /**
   * @param bool $bypassProxyNotification
   */
  public function setBypassProxyNotification(bool $bypassProxyNotification): void
  {
    $this->bypassProxyNotification = $bypassProxyNotification;
  }

  /**
   * @return bool
   */
  public function getBypassProxyNotification(): bool
  {
    return $this->bypassProxyNotification;
  }

  /**
   * @param string $channelId
   */
  public function setChannelId(string $channelId): void
  {
    $this->channelId = $channelId;
  }

  /**
   * @return string
   */
  public function getChannelId(): string
  {
    return $this->channelId;
  }

  /**
   * @param string $clickAction
   */
  public function setClickAction(string $clickAction): void
  {
    $this->clickAction = $clickAction;
  }

  /**
   * @return string
   */
  public function getClickAction(): string
  {
    return $this->clickAction;
  }

  /**
   * @param string $color
   */
  public function setColor(string $color): void
  {
    $this->color = $color;
  }

  /**
   * @return string
   */
  public function getColor(): string
  {
    return $this->color;
  }

  /**
   * @param bool $defaultLightSettings
   */
  public function setDefaultLightSettings(bool $defaultLightSettings): void
  {
    $this->defaultLightSettings = $defaultLightSettings;
  }

  /**
   * @return bool
   */
  public function getDefaultLightSettings(): bool
  {
    return $this->defaultLightSettings;
  }

  /**
   * @param bool $defaultSound
   */
  public function setDefaultSound(bool $defaultSound): void
  {
    $this->defaultSound = $defaultSound;
  }

  /**
   * @return bool
   */
  public function getDefaultSound(): bool
  {
    return $this->defaultSound;
  }

  /**
   * @param bool $defaultVibrateTimings
   */
  public function setDefaultVibrateTimings(bool $defaultVibrateTimings): void
  {
    $this->defaultVibrateTimings = $defaultVibrateTimings;
  }

  /**
   * @return bool
   */
  public function getDefaultVibrateTimings(): bool
  {
    return $this->defaultVibrateTimings;
  }

  /**
   * @param string $eventTime
   */
  public function setEventTime(string $eventTime): void
  {
    $this->eventTime = $eventTime;
  }

  /**
   * @return string
   */
  public function getEventTime(): string
  {
    return $this->eventTime;
  }

  /**
   * @param string $icon
   */
  public function setIcon(string $icon): void
  {
    $this->icon = $icon;
  }

  /**
   * @return string
   */
  public function getIcon(): string
  {
    return $this->icon;
  }

  /**
   * @param string $image
   */
  public function setImage(string $image): void
  {
    $this->image = $image;
  }

  /**
   * @return string
   */
  public function getImage(): string
  {
    return $this->image;
  }

  /**
   * @param LightSettings $lightSettings
   */
  public function setLightSettings(LightSettings $lightSettings): void
  {
    $this->lightSettings = $lightSettings;
  }

  /**
   * @return LightSettings
   */
  public function getLightSettings(): LightSettings
  {
    return $this->lightSettings;
  }

  /**
   * @param bool $localOnly
   */
  public function setLocalOnly(bool $localOnly): void
  {
    $this->localOnly = $localOnly;
  }

  /**
   * @return bool
   */
  public function getLocalOnly(): bool
  {
    return $this->localOnly;
  }

  /**
   * @param int $notificationCount
   */
  public function setNotificationCount(int $notificationCount): void
  {
    $this->notificationCount = $notificationCount;
  }

  /**
   * @return int
   */
  public function getNotificationCount(): int
  {
    return $this->notificationCount;
  }

  /**
   * @param string $notificationPriority
   */
  public function setNotificationPriority(string $notificationPriority): void
  {
    $this->notificationPriority = $notificationPriority;
  }

  /**
   * @return string
   */
  public function getNotificationPriority(): string
  {
    return $this->notificationPriority;
  }

  /**
   * @param string $proxy
   */
  public function setProxy(string $proxy): void
  {
    $this->proxy = $proxy;
  }

  /**
   * @return string
   */
  public function getProxy(): string
  {
    return $this->proxy;
  }

  /**
   * @param string $sound
   */
  public function setSound(string $sound): void
  {
    $this->sound = $sound;
  }

  /**
   * @return string
   */
  public function getSound(): string
  {
    return $this->sound;
  }

  /**
   * @param bool $sticky
   */
  public function setSticky(bool $sticky): void
  {
    $this->sticky = $sticky;
  }

  /**
   * @return bool
   */
  public function getSticky(): bool
  {
    return $this->sticky;
  }

  /**
   * @param string $tag
   */
  public function setTag(string $tag): void
  {
    $this->tag = $tag;
  }

  /**
   * @return string
   */
  public function getTag(): string
  {
    return $this->tag;
  }

  /**
   * @param string $ticker
   */
  public function setTicker(string $ticker): void
  {
    $this->ticker = $ticker;
  }

  /**
   * @return string
   */
  public function getTicker(): string
  {
    return $this->ticker;
  }

  /**
   * @param string $title
   */
  public function setTitle(string $title): void
  {
    $this->title = $title;
  }

  /**
   * @return string
   */
  public function getTitle(): string
  {
    return $this->title;
  }

  /**
   * @param string[] $titleLocArgs
   */
  public function setTitleLocArgs(array $titleLocArgs): void
  {
    $this->titleLocArgs = $titleLocArgs;
  }

  /**
   * @return string[]
   */
  public function getTitleLocArgs(): array
  {
    return $this->titleLocArgs;
  }

  /**
   * @param string $titleLocKey
   */
  public function setTitleLocKey(string $titleLocKey): void
  {
    $this->titleLocKey = $titleLocKey;
  }

  /**
   * @return string
   */
  public function getTitleLocKey(): string
  {
    return $this->titleLocKey;
  }

  /**
   * @param string[] $vibrateTimings
   */
  public function setVibrateTimings(array $vibrateTimings): void
  {
    $this->vibrateTimings = $vibrateTimings;
  }

  /**
   * @return string[]
   */
  public function getVibrateTimings(): array
  {
    return $this->vibrateTimings;
  }

  /**
   * @param string $visibility
   */
  public function setVisibility(string $visibility): void
  {
    $this->visibility = $visibility;
  }

  /**
   * @return string
   */
  public function getVisibility(): string
  {
    return $this->visibility;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AndroidNotification::class, 'Google_Service_FirebaseCloudMessaging_AndroidNotification');
