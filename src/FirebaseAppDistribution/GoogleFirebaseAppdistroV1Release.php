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

namespace Google\Service\FirebaseAppDistribution;

class GoogleFirebaseAppdistroV1Release extends \Google\Model
{
  /**
   * Default value.
   */
  public const ANDROID_PACKAGE_REGISTRATION_STATE_ANDROID_PACKAGE_REGISTRATION_STATE_UNSPECIFIED = 'ANDROID_PACKAGE_REGISTRATION_STATE_UNSPECIFIED';
  /**
   * Package is registered with the release binary's certificate fingerprint.
   */
  public const ANDROID_PACKAGE_REGISTRATION_STATE_REGISTERED = 'REGISTERED';
  /**
   * Package is not registered with any public certificate.
   */
  public const ANDROID_PACKAGE_REGISTRATION_STATE_NOT_REGISTERED = 'NOT_REGISTERED';
  /**
   * Package is registered with another public certificate fingerprint.
   */
  public const ANDROID_PACKAGE_REGISTRATION_STATE_REGISTERED_WITH_ANOTHER_CERTIFICATE_FINGERPRINT = 'REGISTERED_WITH_ANOTHER_CERTIFICATE_FINGERPRINT';
  /**
   * unspecified binary type
   */
  public const BINARY_TYPE_BINARY_TYPE_UNSPECIFIED = 'BINARY_TYPE_UNSPECIFIED';
  /**
   * iOS App Store package
   */
  public const BINARY_TYPE_IPA = 'IPA';
  /**
   * Android Application package
   */
  public const BINARY_TYPE_APK = 'APK';
  /**
   * Android App Bundle
   */
  public const BINARY_TYPE_AAB = 'AAB';
  /**
   * No test state specified
   */
  public const TEST_STATE_TEST_STATE_UNSPECIFIED = 'TEST_STATE_UNSPECIFIED';
  /**
   * No tests have been requested for this release
   */
  public const TEST_STATE_NO_TESTS_REQUESTED = 'NO_TESTS_REQUESTED';
  /**
   * One or more device executions are in progress
   */
  public const TEST_STATE_IN_PROGRESS = 'IN_PROGRESS';
  /**
   * All device executions passed during the most recent test
   */
  public const TEST_STATE_PASSED = 'PASSED';
  /**
   * Some device executions failed during the most recent test
   */
  public const TEST_STATE_FAILED = 'FAILED';
  /**
   * Some device executions were inconclusive, but none failed, during the most
   * recent test
   */
  public const TEST_STATE_INCONCLUSIVE = 'INCONCLUSIVE';
  /**
   * Output only. Number of testers with accepted invitations.
   *
   * @var int
   */
  public $acceptedInvitationCount;
  /**
   * Output only. Registration state of the Android package (BinaryType.APK).
   *
   * @var string
   */
  public $androidPackageRegistrationState;
  /**
   * Output only. A signed link (which expires in one hour) to directly download
   * the app binary (IPA/APK/AAB) file.
   *
   * @var string
   */
  public $binaryDownloadUri;
  /**
   * Output only. Type of binary.
   *
   * @var string
   */
  public $binaryType;
  /**
   * Output only. Build version of the release. For an Android release, the
   * build version is the `versionCode`. For an iOS release, the build version
   * is the `CFBundleVersion`.
   *
   * @var string
   */
  public $buildVersion;
  /**
   * Output only. The time the release was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Display version of the release. For an Android release, the
   * display version is the `versionName`. For an iOS release, the display
   * version is the `CFBundleShortVersionString`.
   *
   * @var string
   */
  public $displayVersion;
  /**
   * Output only. The time the release will expire.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Output only. Number of feedback reports left by testers.
   *
   * @var int
   */
  public $feedbackCount;
  /**
   * Output only. A link to the Firebase console displaying a single release.
   *
   * @var string
   */
  public $firebaseConsoleUri;
  /**
   * Output only. Number of testers who have downloaded this release.
   *
   * @var int
   */
  public $installationCount;
  /**
   * The name of the release resource. Format:
   * `projects/{project_number}/apps/{app}/releases/{release}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Number of testers who were invited (incl. expired
   * invitations), but did not (yet) accept the invitation.
   *
   * @var int
   */
  public $openInvitationCount;
  protected $releaseNotesType = GoogleFirebaseAppdistroV1ReleaseNotes::class;
  protected $releaseNotesDataType = '';
  /**
   * Output only. The overall state of tests run on this release
   *
   * @var string
   */
  public $testState;
  /**
   * Output only. A link to the release in the tester web clip or Android app
   * that lets testers (which were granted access to the app) view release notes
   * and install the app onto their devices.
   *
   * @var string
   */
  public $testingUri;
  /**
   * Output only. The time the release was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Number of testers with accepted invitations.
   *
   * @param int $acceptedInvitationCount
   */
  public function setAcceptedInvitationCount($acceptedInvitationCount)
  {
    $this->acceptedInvitationCount = $acceptedInvitationCount;
  }
  /**
   * @return int
   */
  public function getAcceptedInvitationCount()
  {
    return $this->acceptedInvitationCount;
  }
  /**
   * Output only. Registration state of the Android package (BinaryType.APK).
   *
   * Accepted values: ANDROID_PACKAGE_REGISTRATION_STATE_UNSPECIFIED,
   * REGISTERED, NOT_REGISTERED, REGISTERED_WITH_ANOTHER_CERTIFICATE_FINGERPRINT
   *
   * @param self::ANDROID_PACKAGE_REGISTRATION_STATE_* $androidPackageRegistrationState
   */
  public function setAndroidPackageRegistrationState($androidPackageRegistrationState)
  {
    $this->androidPackageRegistrationState = $androidPackageRegistrationState;
  }
  /**
   * @return self::ANDROID_PACKAGE_REGISTRATION_STATE_*
   */
  public function getAndroidPackageRegistrationState()
  {
    return $this->androidPackageRegistrationState;
  }
  /**
   * Output only. A signed link (which expires in one hour) to directly download
   * the app binary (IPA/APK/AAB) file.
   *
   * @param string $binaryDownloadUri
   */
  public function setBinaryDownloadUri($binaryDownloadUri)
  {
    $this->binaryDownloadUri = $binaryDownloadUri;
  }
  /**
   * @return string
   */
  public function getBinaryDownloadUri()
  {
    return $this->binaryDownloadUri;
  }
  /**
   * Output only. Type of binary.
   *
   * Accepted values: BINARY_TYPE_UNSPECIFIED, IPA, APK, AAB
   *
   * @param self::BINARY_TYPE_* $binaryType
   */
  public function setBinaryType($binaryType)
  {
    $this->binaryType = $binaryType;
  }
  /**
   * @return self::BINARY_TYPE_*
   */
  public function getBinaryType()
  {
    return $this->binaryType;
  }
  /**
   * Output only. Build version of the release. For an Android release, the
   * build version is the `versionCode`. For an iOS release, the build version
   * is the `CFBundleVersion`.
   *
   * @param string $buildVersion
   */
  public function setBuildVersion($buildVersion)
  {
    $this->buildVersion = $buildVersion;
  }
  /**
   * @return string
   */
  public function getBuildVersion()
  {
    return $this->buildVersion;
  }
  /**
   * Output only. The time the release was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. Display version of the release. For an Android release, the
   * display version is the `versionName`. For an iOS release, the display
   * version is the `CFBundleShortVersionString`.
   *
   * @param string $displayVersion
   */
  public function setDisplayVersion($displayVersion)
  {
    $this->displayVersion = $displayVersion;
  }
  /**
   * @return string
   */
  public function getDisplayVersion()
  {
    return $this->displayVersion;
  }
  /**
   * Output only. The time the release will expire.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Output only. Number of feedback reports left by testers.
   *
   * @param int $feedbackCount
   */
  public function setFeedbackCount($feedbackCount)
  {
    $this->feedbackCount = $feedbackCount;
  }
  /**
   * @return int
   */
  public function getFeedbackCount()
  {
    return $this->feedbackCount;
  }
  /**
   * Output only. A link to the Firebase console displaying a single release.
   *
   * @param string $firebaseConsoleUri
   */
  public function setFirebaseConsoleUri($firebaseConsoleUri)
  {
    $this->firebaseConsoleUri = $firebaseConsoleUri;
  }
  /**
   * @return string
   */
  public function getFirebaseConsoleUri()
  {
    return $this->firebaseConsoleUri;
  }
  /**
   * Output only. Number of testers who have downloaded this release.
   *
   * @param int $installationCount
   */
  public function setInstallationCount($installationCount)
  {
    $this->installationCount = $installationCount;
  }
  /**
   * @return int
   */
  public function getInstallationCount()
  {
    return $this->installationCount;
  }
  /**
   * The name of the release resource. Format:
   * `projects/{project_number}/apps/{app}/releases/{release}`
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
   * Output only. Number of testers who were invited (incl. expired
   * invitations), but did not (yet) accept the invitation.
   *
   * @param int $openInvitationCount
   */
  public function setOpenInvitationCount($openInvitationCount)
  {
    $this->openInvitationCount = $openInvitationCount;
  }
  /**
   * @return int
   */
  public function getOpenInvitationCount()
  {
    return $this->openInvitationCount;
  }
  /**
   * Notes about the release.
   *
   * @param GoogleFirebaseAppdistroV1ReleaseNotes $releaseNotes
   */
  public function setReleaseNotes(GoogleFirebaseAppdistroV1ReleaseNotes $releaseNotes)
  {
    $this->releaseNotes = $releaseNotes;
  }
  /**
   * @return GoogleFirebaseAppdistroV1ReleaseNotes
   */
  public function getReleaseNotes()
  {
    return $this->releaseNotes;
  }
  /**
   * Output only. The overall state of tests run on this release
   *
   * Accepted values: TEST_STATE_UNSPECIFIED, NO_TESTS_REQUESTED, IN_PROGRESS,
   * PASSED, FAILED, INCONCLUSIVE
   *
   * @param self::TEST_STATE_* $testState
   */
  public function setTestState($testState)
  {
    $this->testState = $testState;
  }
  /**
   * @return self::TEST_STATE_*
   */
  public function getTestState()
  {
    return $this->testState;
  }
  /**
   * Output only. A link to the release in the tester web clip or Android app
   * that lets testers (which were granted access to the app) view release notes
   * and install the app onto their devices.
   *
   * @param string $testingUri
   */
  public function setTestingUri($testingUri)
  {
    $this->testingUri = $testingUri;
  }
  /**
   * @return string
   */
  public function getTestingUri()
  {
    return $this->testingUri;
  }
  /**
   * Output only. The time the release was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleFirebaseAppdistroV1Release::class, 'Google_Service_FirebaseAppDistribution_GoogleFirebaseAppdistroV1Release');
