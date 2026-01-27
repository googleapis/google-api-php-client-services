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

namespace Google\Service\MigrationCenterAPI;

class AssetsExportJobExecutionResult extends \Google\Model
{
  protected $errorType = Status::class;
  protected $errorDataType = '';
  protected $outputFilesType = OutputFileList::class;
  protected $outputFilesDataType = '';
  protected $signedUrisType = SignedUris::class;
  protected $signedUrisDataType = '';

  /**
   * Output only. Error encountered during export.
   *
   * @param Status $error
   */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /**
   * @return Status
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * Output only. List of output files.
   *
   * @param OutputFileList $outputFiles
   */
  public function setOutputFiles(OutputFileList $outputFiles)
  {
    $this->outputFiles = $outputFiles;
  }
  /**
   * @return OutputFileList
   */
  public function getOutputFiles()
  {
    return $this->outputFiles;
  }
  /**
   * Output only. Signed URLs for downloading export artifacts.
   *
   * @param SignedUris $signedUris
   */
  public function setSignedUris(SignedUris $signedUris)
  {
    $this->signedUris = $signedUris;
  }
  /**
   * @return SignedUris
   */
  public function getSignedUris()
  {
    return $this->signedUris;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetsExportJobExecutionResult::class, 'Google_Service_MigrationCenterAPI_AssetsExportJobExecutionResult');
