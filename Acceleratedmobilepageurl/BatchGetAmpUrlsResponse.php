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

class Google_Service_Acceleratedmobilepageurl_BatchGetAmpUrlsResponse extends Google_Collection
{
  protected $collection_key = 'urlErrors';
  public $ampUrls;
  public $urlErrors;

  public function setAmpUrls(array $ampUrls)
  {
    foreach ($ampUrls as $a) {
      if (!$a instanceof Google_Service_Acceleratedmobilepageurl_AmpUrl) {
        throw new InvalidArgumentException('First argument to setAmpUrls must be an array of Google_Service_Acceleratedmobilepageurl_AmpUrl');
      }
    }
    $this->ampUrls = $ampUrls;
  }
  public function getAmpUrls()
  {
    return $this->ampUrls;
  }
  public function setUrlErrors(array $urlErrors)
  {
    foreach ($urlErrors as $u) {
      if (!$u instanceof Google_Service_Acceleratedmobilepageurl_AmpUrlError) {
        throw new InvalidArgumentException('First argument to setUrlErrors must be an array of Google_Service_Acceleratedmobilepageurl_AmpUrlError');
      }
    }
    $this->urlErrors = $urlErrors;
  }
  public function getUrlErrors()
  {
    return $this->urlErrors;
  }
}
