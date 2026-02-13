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

class ImportAppRequest extends \Google\Model
{
  /**
   * Raw bytes representing the compressed zip file with the app folder
   * structure.
   *
   * @var string
   */
  public $appContent;
  /**
   * Optional. The ID to use for the imported app. * If not specified, a unique
   * ID will be automatically assigned for the app. * Otherwise, the imported
   * app will use this ID as the final component of its resource name. If an app
   * with the same ID already exists at the specified location in the project,
   * the content of the existing app will be replaced.
   *
   * @var string
   */
  public $appId;
  /**
   * Optional. The display name of the app to import. * If the app is created on
   * import, and the display name is specified, the imported app will use this
   * display name. If a conflict is detected with an existing app, a timestamp
   * will be appended to the display name to make it unique. * If the app is a
   * reimport, this field should not be set. Providing a display name during
   * reimport will result in an INVALID_ARGUMENT error.
   *
   * @var string
   */
  public $displayName;
  /**
   * The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI from
   * which to import app. The format of this URI must be `gs:`.
   *
   * @var string
   */
  public $gcsUri;
  /**
   * Optional. Flag for overriding the app lock during import. If set to true,
   * the import process will ignore the app lock.
   *
   * @var bool
   */
  public $ignoreAppLock;
  protected $importOptionsType = ImportAppRequestImportOptions::class;
  protected $importOptionsDataType = '';

  /**
   * Raw bytes representing the compressed zip file with the app folder
   * structure.
   *
   * @param string $appContent
   */
  public function setAppContent($appContent)
  {
    $this->appContent = $appContent;
  }
  /**
   * @return string
   */
  public function getAppContent()
  {
    return $this->appContent;
  }
  /**
   * Optional. The ID to use for the imported app. * If not specified, a unique
   * ID will be automatically assigned for the app. * Otherwise, the imported
   * app will use this ID as the final component of its resource name. If an app
   * with the same ID already exists at the specified location in the project,
   * the content of the existing app will be replaced.
   *
   * @param string $appId
   */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /**
   * @return string
   */
  public function getAppId()
  {
    return $this->appId;
  }
  /**
   * Optional. The display name of the app to import. * If the app is created on
   * import, and the display name is specified, the imported app will use this
   * display name. If a conflict is detected with an existing app, a timestamp
   * will be appended to the display name to make it unique. * If the app is a
   * reimport, this field should not be set. Providing a display name during
   * reimport will result in an INVALID_ARGUMENT error.
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
   * The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI from
   * which to import app. The format of this URI must be `gs:`.
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
   * Optional. Flag for overriding the app lock during import. If set to true,
   * the import process will ignore the app lock.
   *
   * @param bool $ignoreAppLock
   */
  public function setIgnoreAppLock($ignoreAppLock)
  {
    $this->ignoreAppLock = $ignoreAppLock;
  }
  /**
   * @return bool
   */
  public function getIgnoreAppLock()
  {
    return $this->ignoreAppLock;
  }
  /**
   * Optional. Options governing the import process for the app.
   *
   * @param ImportAppRequestImportOptions $importOptions
   */
  public function setImportOptions(ImportAppRequestImportOptions $importOptions)
  {
    $this->importOptions = $importOptions;
  }
  /**
   * @return ImportAppRequestImportOptions
   */
  public function getImportOptions()
  {
    return $this->importOptions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImportAppRequest::class, 'Google_Service_CustomerEngagementSuite_ImportAppRequest');
