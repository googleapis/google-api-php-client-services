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

class Google_Service_YouTube_VideoSuggestions extends Google_Collection
{
  protected $collection_key = 'tagSuggestions';
  public $editorSuggestions;
  public $processingErrors;
  public $processingHints;
  public $processingWarnings;
  public $tagSuggestions;

  public function setEditorSuggestions(array $editorSuggestions)
  {
    $this->editorSuggestions = $editorSuggestions;
  }
  public function getEditorSuggestions()
  {
    return $this->editorSuggestions;
  }
  public function setProcessingErrors(array $processingErrors)
  {
    $this->processingErrors = $processingErrors;
  }
  public function getProcessingErrors()
  {
    return $this->processingErrors;
  }
  public function setProcessingHints(array $processingHints)
  {
    $this->processingHints = $processingHints;
  }
  public function getProcessingHints()
  {
    return $this->processingHints;
  }
  public function setProcessingWarnings(array $processingWarnings)
  {
    $this->processingWarnings = $processingWarnings;
  }
  public function getProcessingWarnings()
  {
    return $this->processingWarnings;
  }
  public function setTagSuggestions(array $tagSuggestions)
  {
    foreach ($tagSuggestions as $t) {
      if (!$t instanceof Google_Service_YouTube_VideoSuggestionsTagSuggestion) {
        throw new InvalidArgumentException('First argument to setTagSuggestions must be an array of Google_Service_YouTube_VideoSuggestionsTagSuggestion');
      }
    }
    $this->tagSuggestions = $tagSuggestions;
  }
  public function getTagSuggestions()
  {
    return $this->tagSuggestions;
  }
}
