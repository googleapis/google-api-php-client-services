<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Dataproc_PySparkJob extends Google_Collection
{
  protected $collection_key = 'pythonFileUris';
  public $archiveUris;
  public $args;
  public $fileUris;
  public $jarFileUris;
  public $loggingConfig;
  public $mainPythonFileUri;
  public $properties;
  public $pythonFileUris;

  public function setArchiveUris(array $archiveUris)
  {
    $this->archiveUris = $archiveUris;
  }
  public function getArchiveUris()
  {
    return $this->archiveUris;
  }
  public function setArgs(array $args)
  {
    $this->args = $args;
  }
  public function getArgs()
  {
    return $this->args;
  }
  public function setFileUris(array $fileUris)
  {
    $this->fileUris = $fileUris;
  }
  public function getFileUris()
  {
    return $this->fileUris;
  }
  public function setJarFileUris(array $jarFileUris)
  {
    $this->jarFileUris = $jarFileUris;
  }
  public function getJarFileUris()
  {
    return $this->jarFileUris;
  }
  public function setLoggingConfig(Google_Service_Dataproc_LoggingConfig $loggingConfig)
  {
    $this->loggingConfig = $loggingConfig;
  }
  public function getLoggingConfig()
  {
    return $this->loggingConfig;
  }
  public function setMainPythonFileUri($mainPythonFileUri)
  {
    $this->mainPythonFileUri = $mainPythonFileUri;
  }
  public function getMainPythonFileUri()
  {
    return $this->mainPythonFileUri;
  }
  public function setProperties(array $properties)
  {
    $this->properties = $properties;
  }
  public function getProperties()
  {
    return $this->properties;
  }
  public function setPythonFileUris(array $pythonFileUris)
  {
    $this->pythonFileUris = $pythonFileUris;
  }
  public function getPythonFileUris()
  {
    return $this->pythonFileUris;
  }
}
