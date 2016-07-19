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

class Google_Service_CloudDebugger_StackFrame extends Google_Collection
{
  protected $collection_key = 'locals';
  public $arguments;
  public $function;
  public $locals;
  public $location;

  public function setArguments(array $arguments)
  {
    foreach ($arguments as $a) {
      if (!$a instanceof Google_Service_CloudDebugger_Variable) {
        throw new InvalidArgumentException('First argument to setArguments must be an array of Google_Service_CloudDebugger_Variable');
      }
    }
    $this->arguments = $arguments;
  }
  public function getArguments()
  {
    return $this->arguments;
  }
  public function setFunction($function)
  {
    $this->function = $function;
  }
  public function getFunction()
  {
    return $this->function;
  }
  public function setLocals(array $locals)
  {
    foreach ($locals as $l) {
      if (!$l instanceof Google_Service_CloudDebugger_Variable) {
        throw new InvalidArgumentException('First argument to setLocals must be an array of Google_Service_CloudDebugger_Variable');
      }
    }
    $this->locals = $locals;
  }
  public function getLocals()
  {
    return $this->locals;
  }
  public function setLocation(Google_Service_CloudDebugger_SourceLocation $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
}
