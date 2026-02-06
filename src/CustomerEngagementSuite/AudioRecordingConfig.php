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

class AudioRecordingConfig extends \Google\Model
{
  /**
   * Optional. The [Cloud Storage](https://cloud.google.com/storage) bucket to
   * store the session audio recordings. The URI must start with "gs://". Please
   * choose a bucket location that meets your data residency requirements. Note:
   * If the Cloud Storage bucket is in a different project from the app, you
   * should grant `storage.objects.create` permission to the CES service agent
   * `service-@gcp-sa-ces.iam.gserviceaccount.com`.
   *
   * @var string
   */
  public $gcsBucket;
  /**
   * Optional. The Cloud Storage path prefix for audio recordings. This prefix
   * can include the following placeholders, which will be dynamically
   * substituted at serving time: - $project: project ID - $location: app
   * location - $app: app ID - $date: session date in YYYY-MM-DD format -
   * $session: session ID If the path prefix is not specified, the default
   * prefix `$project/$location/$app/$date/$session/` will be used.
   *
   * @var string
   */
  public $gcsPathPrefix;

  /**
   * Optional. The [Cloud Storage](https://cloud.google.com/storage) bucket to
   * store the session audio recordings. The URI must start with "gs://". Please
   * choose a bucket location that meets your data residency requirements. Note:
   * If the Cloud Storage bucket is in a different project from the app, you
   * should grant `storage.objects.create` permission to the CES service agent
   * `service-@gcp-sa-ces.iam.gserviceaccount.com`.
   *
   * @param string $gcsBucket
   */
  public function setGcsBucket($gcsBucket)
  {
    $this->gcsBucket = $gcsBucket;
  }
  /**
   * @return string
   */
  public function getGcsBucket()
  {
    return $this->gcsBucket;
  }
  /**
   * Optional. The Cloud Storage path prefix for audio recordings. This prefix
   * can include the following placeholders, which will be dynamically
   * substituted at serving time: - $project: project ID - $location: app
   * location - $app: app ID - $date: session date in YYYY-MM-DD format -
   * $session: session ID If the path prefix is not specified, the default
   * prefix `$project/$location/$app/$date/$session/` will be used.
   *
   * @param string $gcsPathPrefix
   */
  public function setGcsPathPrefix($gcsPathPrefix)
  {
    $this->gcsPathPrefix = $gcsPathPrefix;
  }
  /**
   * @return string
   */
  public function getGcsPathPrefix()
  {
    return $this->gcsPathPrefix;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AudioRecordingConfig::class, 'Google_Service_CustomerEngagementSuite_AudioRecordingConfig');
