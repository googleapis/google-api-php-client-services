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

namespace Google\Service\FirebaseCrashlytics;

class Event extends \Google\Collection
{
  protected $collection_key = 'threads';
  /**
   * App orientation at the time of the crash (portrait or landscape).
   *
   * @var string
   */
  public $appOrientation;
  protected $blameFrameType = Frame::class;
  protected $blameFrameDataType = '';
  protected $breadcrumbsType = Breadcrumb::class;
  protected $breadcrumbsDataType = 'array';
  protected $browserType = Browser::class;
  protected $browserDataType = '';
  /**
   * Metadata provided by the app's build system, including version control
   * repository info.
   *
   * @var string
   */
  public $buildStamp;
  /**
   * The bundle name for iOS apps or the package name of Android apps. Format:
   * "com.mycompany.myapp".
   *
   * @var string
   */
  public $bundleOrPackage;
  /**
   * Crashlytics SDK version.
   *
   * @var string
   */
  public $crashlyticsSdkVersion;
  /**
   * Output only. Mobile only. Unique identifier for the Crashlytics device
   * session.
   *
   * @var string
   */
  public $crashlyticsSessionId;
  /**
   * Custom keys set by the developer during the session.
   *
   * @var string[]
   */
  public $customKeys;
  protected $deviceType = Device::class;
  protected $deviceDataType = '';
  /**
   * Device orientation at the time of the crash (portrait or landscape).
   *
   * @var string
   */
  public $deviceOrientation;
  protected $errorsType = Error::class;
  protected $errorsDataType = 'array';
  /**
   * Output only. Immutable. The unique event identifier is assigned during
   * processing.
   *
   * @var string
   */
  public $eventId;
  /**
   * Device timestamp that the event was recorded.
   *
   * @var string
   */
  public $eventTime;
  protected $exceptionsType = Exception::class;
  protected $exceptionsDataType = 'array';
  /**
   * Unique identifier for the device-app installation. This field is used to
   * compute the unique number of impacted users.
   *
   * @var string
   */
  public $installationUuid;
  protected $issueType = Issue::class;
  protected $issueDataType = '';
  /**
   * The subtitle of the issue in which the event was grouped. This is usually a
   * symbol or an exception message.
   *
   * @var string
   */
  public $issueSubtitle;
  /**
   * The title of the issue in which the event was grouped. This is usually a
   * source file or method name.
   *
   * @var string
   */
  public $issueTitle;
  protected $issueVariantType = IssueVariant::class;
  protected $issueVariantDataType = '';
  protected $logsType = Log::class;
  protected $logsDataType = 'array';
  protected $memoryType = Memory::class;
  protected $memoryDataType = '';
  /**
   * Required. Output only. Immutable. Identifier. The name of the event
   * resource. Format: "projects/{project}/apps/{app_id}/events/{event}".
   *
   * @var string
   */
  public $name;
  protected $operatingSystemType = OperatingSystem::class;
  protected $operatingSystemDataType = '';
  /**
   * ANDROID, IOS, or WEB.
   *
   * @var string
   */
  public $platform;
  /**
   * The state of the app process at the time of the event.
   *
   * @var string
   */
  public $processState;
  /**
   * Server timestamp that the event was received by Crashlytics.
   *
   * @var string
   */
  public $receivedTime;
  /**
   * Output only. Web only. The route path of the web application when the event
   * occurred, excluding query parameters and fragment.
   *
   * @var string
   */
  public $routePath;
  /**
   * Unique identifier for the Firebase session.
   *
   * @var string
   */
  public $sessionId;
  protected $storageType = Storage::class;
  protected $storageDataType = '';
  protected $threadsType = Thread::class;
  protected $threadsDataType = 'array';
  protected $userType = User::class;
  protected $userDataType = '';
  protected $versionType = Version::class;
  protected $versionDataType = '';

  /**
   * App orientation at the time of the crash (portrait or landscape).
   *
   * @param string $appOrientation
   */
  public function setAppOrientation($appOrientation)
  {
    $this->appOrientation = $appOrientation;
  }
  /**
   * @return string
   */
  public function getAppOrientation()
  {
    return $this->appOrientation;
  }
  /**
   * The stack trace frame blamed by Crashlytics processing. May not be present
   * in future analyzer.
   *
   * @param Frame $blameFrame
   */
  public function setBlameFrame(Frame $blameFrame)
  {
    $this->blameFrame = $blameFrame;
  }
  /**
   * @return Frame
   */
  public function getBlameFrame()
  {
    return $this->blameFrame;
  }
  /**
   * Analytics events recorded by the analytics SDK during the session.
   *
   * @param Breadcrumb[] $breadcrumbs
   */
  public function setBreadcrumbs($breadcrumbs)
  {
    $this->breadcrumbs = $breadcrumbs;
  }
  /**
   * @return Breadcrumb[]
   */
  public function getBreadcrumbs()
  {
    return $this->breadcrumbs;
  }
  /**
   * Browser and version.
   *
   * @param Browser $browser
   */
  public function setBrowser(Browser $browser)
  {
    $this->browser = $browser;
  }
  /**
   * @return Browser
   */
  public function getBrowser()
  {
    return $this->browser;
  }
  /**
   * Metadata provided by the app's build system, including version control
   * repository info.
   *
   * @param string $buildStamp
   */
  public function setBuildStamp($buildStamp)
  {
    $this->buildStamp = $buildStamp;
  }
  /**
   * @return string
   */
  public function getBuildStamp()
  {
    return $this->buildStamp;
  }
  /**
   * The bundle name for iOS apps or the package name of Android apps. Format:
   * "com.mycompany.myapp".
   *
   * @param string $bundleOrPackage
   */
  public function setBundleOrPackage($bundleOrPackage)
  {
    $this->bundleOrPackage = $bundleOrPackage;
  }
  /**
   * @return string
   */
  public function getBundleOrPackage()
  {
    return $this->bundleOrPackage;
  }
  /**
   * Crashlytics SDK version.
   *
   * @param string $crashlyticsSdkVersion
   */
  public function setCrashlyticsSdkVersion($crashlyticsSdkVersion)
  {
    $this->crashlyticsSdkVersion = $crashlyticsSdkVersion;
  }
  /**
   * @return string
   */
  public function getCrashlyticsSdkVersion()
  {
    return $this->crashlyticsSdkVersion;
  }
  /**
   * Output only. Mobile only. Unique identifier for the Crashlytics device
   * session.
   *
   * @param string $crashlyticsSessionId
   */
  public function setCrashlyticsSessionId($crashlyticsSessionId)
  {
    $this->crashlyticsSessionId = $crashlyticsSessionId;
  }
  /**
   * @return string
   */
  public function getCrashlyticsSessionId()
  {
    return $this->crashlyticsSessionId;
  }
  /**
   * Custom keys set by the developer during the session.
   *
   * @param string[] $customKeys
   */
  public function setCustomKeys($customKeys)
  {
    $this->customKeys = $customKeys;
  }
  /**
   * @return string[]
   */
  public function getCustomKeys()
  {
    return $this->customKeys;
  }
  /**
   * Mobile device metadata.
   *
   * @param Device $device
   */
  public function setDevice(Device $device)
  {
    $this->device = $device;
  }
  /**
   * @return Device
   */
  public function getDevice()
  {
    return $this->device;
  }
  /**
   * Device orientation at the time of the crash (portrait or landscape).
   *
   * @param string $deviceOrientation
   */
  public function setDeviceOrientation($deviceOrientation)
  {
    $this->deviceOrientation = $deviceOrientation;
  }
  /**
   * @return string
   */
  public function getDeviceOrientation()
  {
    return $this->deviceOrientation;
  }
  /**
   * Apple only. A non-fatal error captured by the iOS SDK and its stacktrace.
   *
   * @param Error[] $errors
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Error[]
   */
  public function getErrors()
  {
    return $this->errors;
  }
  /**
   * Output only. Immutable. The unique event identifier is assigned during
   * processing.
   *
   * @param string $eventId
   */
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  /**
   * @return string
   */
  public function getEventId()
  {
    return $this->eventId;
  }
  /**
   * Device timestamp that the event was recorded.
   *
   * @param string $eventTime
   */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /**
   * @return string
   */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /**
   * Android and web only. Exceptions that occurred during this event. Nested
   * exceptions are presented in reverse chronological order, so that the last
   * record is the first exception thrown.
   *
   * @param Exception[] $exceptions
   */
  public function setExceptions($exceptions)
  {
    $this->exceptions = $exceptions;
  }
  /**
   * @return Exception[]
   */
  public function getExceptions()
  {
    return $this->exceptions;
  }
  /**
   * Unique identifier for the device-app installation. This field is used to
   * compute the unique number of impacted users.
   *
   * @param string $installationUuid
   */
  public function setInstallationUuid($installationUuid)
  {
    $this->installationUuid = $installationUuid;
  }
  /**
   * @return string
   */
  public function getInstallationUuid()
  {
    return $this->installationUuid;
  }
  /**
   * Details for the [Issue] assigned to this [Event].
   *
   * @param Issue $issue
   */
  public function setIssue(Issue $issue)
  {
    $this->issue = $issue;
  }
  /**
   * @return Issue
   */
  public function getIssue()
  {
    return $this->issue;
  }
  /**
   * The subtitle of the issue in which the event was grouped. This is usually a
   * symbol or an exception message.
   *
   * @param string $issueSubtitle
   */
  public function setIssueSubtitle($issueSubtitle)
  {
    $this->issueSubtitle = $issueSubtitle;
  }
  /**
   * @return string
   */
  public function getIssueSubtitle()
  {
    return $this->issueSubtitle;
  }
  /**
   * The title of the issue in which the event was grouped. This is usually a
   * source file or method name.
   *
   * @param string $issueTitle
   */
  public function setIssueTitle($issueTitle)
  {
    $this->issueTitle = $issueTitle;
  }
  /**
   * @return string
   */
  public function getIssueTitle()
  {
    return $this->issueTitle;
  }
  /**
   * Details for the [IssueVariant] assigned to this [Event].
   *
   * @param IssueVariant $issueVariant
   */
  public function setIssueVariant(IssueVariant $issueVariant)
  {
    $this->issueVariant = $issueVariant;
  }
  /**
   * @return IssueVariant
   */
  public function getIssueVariant()
  {
    return $this->issueVariant;
  }
  /**
   * Log messages recorded by the developer during the session.
   *
   * @param Log[] $logs
   */
  public function setLogs($logs)
  {
    $this->logs = $logs;
  }
  /**
   * @return Log[]
   */
  public function getLogs()
  {
    return $this->logs;
  }
  /**
   * Mobile device memory usage.
   *
   * @param Memory $memory
   */
  public function setMemory(Memory $memory)
  {
    $this->memory = $memory;
  }
  /**
   * @return Memory
   */
  public function getMemory()
  {
    return $this->memory;
  }
  /**
   * Required. Output only. Immutable. Identifier. The name of the event
   * resource. Format: "projects/{project}/apps/{app_id}/events/{event}".
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
   * Operating system and version.
   *
   * @param OperatingSystem $operatingSystem
   */
  public function setOperatingSystem(OperatingSystem $operatingSystem)
  {
    $this->operatingSystem = $operatingSystem;
  }
  /**
   * @return OperatingSystem
   */
  public function getOperatingSystem()
  {
    return $this->operatingSystem;
  }
  /**
   * ANDROID, IOS, or WEB.
   *
   * @param string $platform
   */
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  /**
   * @return string
   */
  public function getPlatform()
  {
    return $this->platform;
  }
  /**
   * The state of the app process at the time of the event.
   *
   * @param string $processState
   */
  public function setProcessState($processState)
  {
    $this->processState = $processState;
  }
  /**
   * @return string
   */
  public function getProcessState()
  {
    return $this->processState;
  }
  /**
   * Server timestamp that the event was received by Crashlytics.
   *
   * @param string $receivedTime
   */
  public function setReceivedTime($receivedTime)
  {
    $this->receivedTime = $receivedTime;
  }
  /**
   * @return string
   */
  public function getReceivedTime()
  {
    return $this->receivedTime;
  }
  /**
   * Output only. Web only. The route path of the web application when the event
   * occurred, excluding query parameters and fragment.
   *
   * @param string $routePath
   */
  public function setRoutePath($routePath)
  {
    $this->routePath = $routePath;
  }
  /**
   * @return string
   */
  public function getRoutePath()
  {
    return $this->routePath;
  }
  /**
   * Unique identifier for the Firebase session.
   *
   * @param string $sessionId
   */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /**
   * @return string
   */
  public function getSessionId()
  {
    return $this->sessionId;
  }
  /**
   * Mobile device disk/flash usage.
   *
   * @param Storage $storage
   */
  public function setStorage(Storage $storage)
  {
    $this->storage = $storage;
  }
  /**
   * @return Storage
   */
  public function getStorage()
  {
    return $this->storage;
  }
  /**
   * Application threads present at the time the event was recorded. Each
   * contains a stacktrace. One thread will be blamed for the error.
   *
   * @param Thread[] $threads
   */
  public function setThreads($threads)
  {
    $this->threads = $threads;
  }
  /**
   * @return Thread[]
   */
  public function getThreads()
  {
    return $this->threads;
  }
  /**
   * End user identifiers for the device owner.
   *
   * @param User $user
   */
  public function setUser(User $user)
  {
    $this->user = $user;
  }
  /**
   * @return User
   */
  public function getUser()
  {
    return $this->user;
  }
  /**
   * Mobile application version.
   *
   * @param Version $version
   */
  public function setVersion(Version $version)
  {
    $this->version = $version;
  }
  /**
   * @return Version
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Event::class, 'Google_Service_FirebaseCrashlytics_Event');
