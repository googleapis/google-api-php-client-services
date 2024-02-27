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

namespace Google\Service\WebSecurityScanner;

class Finding extends \Google\Model
{
  /**
   * @var string
   */
  public $body;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $finalUrl;
  /**
   * @var string
   */
  public $findingType;
  protected $formType = Form::class;
  protected $formDataType = '';
  /**
   * @var string
   */
  public $frameUrl;
  /**
   * @var string
   */
  public $fuzzedUrl;
  /**
   * @var string
   */
  public $httpMethod;
  /**
   * @var string
   */
  public $name;
  protected $outdatedLibraryType = OutdatedLibrary::class;
  protected $outdatedLibraryDataType = '';
  /**
   * @var string
   */
  public $reproductionUrl;
  /**
   * @var string
   */
  public $severity;
  /**
   * @var string
   */
  public $trackingId;
  protected $violatingResourceType = ViolatingResource::class;
  protected $violatingResourceDataType = '';
  protected $vulnerableHeadersType = VulnerableHeaders::class;
  protected $vulnerableHeadersDataType = '';
  protected $vulnerableParametersType = VulnerableParameters::class;
  protected $vulnerableParametersDataType = '';
  protected $xssType = Xss::class;
  protected $xssDataType = '';
  protected $xxeType = Xxe::class;
  protected $xxeDataType = '';

  /**
   * @param string
   */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /**
   * @return string
   */
  public function getBody()
  {
    return $this->body;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string
   */
  public function setFinalUrl($finalUrl)
  {
    $this->finalUrl = $finalUrl;
  }
  /**
   * @return string
   */
  public function getFinalUrl()
  {
    return $this->finalUrl;
  }
  /**
   * @param string
   */
  public function setFindingType($findingType)
  {
    $this->findingType = $findingType;
  }
  /**
   * @return string
   */
  public function getFindingType()
  {
    return $this->findingType;
  }
  /**
   * @param Form
   */
  public function setForm(Form $form)
  {
    $this->form = $form;
  }
  /**
   * @return Form
   */
  public function getForm()
  {
    return $this->form;
  }
  /**
   * @param string
   */
  public function setFrameUrl($frameUrl)
  {
    $this->frameUrl = $frameUrl;
  }
  /**
   * @return string
   */
  public function getFrameUrl()
  {
    return $this->frameUrl;
  }
  /**
   * @param string
   */
  public function setFuzzedUrl($fuzzedUrl)
  {
    $this->fuzzedUrl = $fuzzedUrl;
  }
  /**
   * @return string
   */
  public function getFuzzedUrl()
  {
    return $this->fuzzedUrl;
  }
  /**
   * @param string
   */
  public function setHttpMethod($httpMethod)
  {
    $this->httpMethod = $httpMethod;
  }
  /**
   * @return string
   */
  public function getHttpMethod()
  {
    return $this->httpMethod;
  }
  /**
   * @param string
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
   * @param OutdatedLibrary
   */
  public function setOutdatedLibrary(OutdatedLibrary $outdatedLibrary)
  {
    $this->outdatedLibrary = $outdatedLibrary;
  }
  /**
   * @return OutdatedLibrary
   */
  public function getOutdatedLibrary()
  {
    return $this->outdatedLibrary;
  }
  /**
   * @param string
   */
  public function setReproductionUrl($reproductionUrl)
  {
    $this->reproductionUrl = $reproductionUrl;
  }
  /**
   * @return string
   */
  public function getReproductionUrl()
  {
    return $this->reproductionUrl;
  }
  /**
   * @param string
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return string
   */
  public function getSeverity()
  {
    return $this->severity;
  }
  /**
   * @param string
   */
  public function setTrackingId($trackingId)
  {
    $this->trackingId = $trackingId;
  }
  /**
   * @return string
   */
  public function getTrackingId()
  {
    return $this->trackingId;
  }
  /**
   * @param ViolatingResource
   */
  public function setViolatingResource(ViolatingResource $violatingResource)
  {
    $this->violatingResource = $violatingResource;
  }
  /**
   * @return ViolatingResource
   */
  public function getViolatingResource()
  {
    return $this->violatingResource;
  }
  /**
   * @param VulnerableHeaders
   */
  public function setVulnerableHeaders(VulnerableHeaders $vulnerableHeaders)
  {
    $this->vulnerableHeaders = $vulnerableHeaders;
  }
  /**
   * @return VulnerableHeaders
   */
  public function getVulnerableHeaders()
  {
    return $this->vulnerableHeaders;
  }
  /**
   * @param VulnerableParameters
   */
  public function setVulnerableParameters(VulnerableParameters $vulnerableParameters)
  {
    $this->vulnerableParameters = $vulnerableParameters;
  }
  /**
   * @return VulnerableParameters
   */
  public function getVulnerableParameters()
  {
    return $this->vulnerableParameters;
  }
  /**
   * @param Xss
   */
  public function setXss(Xss $xss)
  {
    $this->xss = $xss;
  }
  /**
   * @return Xss
   */
  public function getXss()
  {
    return $this->xss;
  }
  /**
   * @param Xxe
   */
  public function setXxe(Xxe $xxe)
  {
    $this->xxe = $xxe;
  }
  /**
   * @return Xxe
   */
  public function getXxe()
  {
    return $this->xxe;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Finding::class, 'Google_Service_WebSecurityScanner_Finding');
