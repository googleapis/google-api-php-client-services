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

namespace Google\Service\Discovery;

class RestDescription extends \Google\Collection
{
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = [
        "versionModule" => "version_module",
  ];
  protected $authType = RestDescriptionAuth::class;
  protected $authDataType = '';
  /**
   * @var string
   */
  public $basePath;
  /**
   * @var string
   */
  public $baseUrl;
  /**
   * @var string
   */
  public $batchPath;
  /**
   * @var string
   */
  public $canonicalName;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $discoveryVersion;
  /**
   * @var string
   */
  public $documentationLink;
  /**
   * @var string
   */
  public $etag;
  /**
   * @var bool
   */
  public $exponentialBackoffDefault;
  /**
   * @var string[]
   */
  public $features;
  protected $iconsType = RestDescriptionIcons::class;
  protected $iconsDataType = '';
  /**
   * @var string
   */
  public $id;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var string[]
   */
  public $labels;
  protected $methodsType = RestMethod::class;
  protected $methodsDataType = 'map';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $ownerDomain;
  /**
   * @var string
   */
  public $ownerName;
  /**
   * @var string
   */
  public $packagePath;
  protected $parametersType = JsonSchema::class;
  protected $parametersDataType = 'map';
  /**
   * @var string
   */
  public $protocol;
  protected $resourcesType = RestResource::class;
  protected $resourcesDataType = 'map';
  /**
   * @var string
   */
  public $revision;
  /**
   * @var string
   */
  public $rootUrl;
  protected $schemasType = JsonSchema::class;
  protected $schemasDataType = 'map';
  /**
   * @var string
   */
  public $servicePath;
  /**
   * @var string
   */
  public $title;
  /**
   * @var string
   */
  public $version;
  /**
   * @var bool
   */
  public $versionModule;

  /**
   * @param RestDescriptionAuth
   */
  public function setAuth(RestDescriptionAuth $auth)
  {
    $this->auth = $auth;
  }
  /**
   * @return RestDescriptionAuth
   */
  public function getAuth()
  {
    return $this->auth;
  }
  /**
   * @param string
   */
  public function setBasePath($basePath)
  {
    $this->basePath = $basePath;
  }
  /**
   * @return string
   */
  public function getBasePath()
  {
    return $this->basePath;
  }
  /**
   * @param string
   */
  public function setBaseUrl($baseUrl)
  {
    $this->baseUrl = $baseUrl;
  }
  /**
   * @return string
   */
  public function getBaseUrl()
  {
    return $this->baseUrl;
  }
  /**
   * @param string
   */
  public function setBatchPath($batchPath)
  {
    $this->batchPath = $batchPath;
  }
  /**
   * @return string
   */
  public function getBatchPath()
  {
    return $this->batchPath;
  }
  /**
   * @param string
   */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /**
   * @return string
   */
  public function getCanonicalName()
  {
    return $this->canonicalName;
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
  public function setDiscoveryVersion($discoveryVersion)
  {
    $this->discoveryVersion = $discoveryVersion;
  }
  /**
   * @return string
   */
  public function getDiscoveryVersion()
  {
    return $this->discoveryVersion;
  }
  /**
   * @param string
   */
  public function setDocumentationLink($documentationLink)
  {
    $this->documentationLink = $documentationLink;
  }
  /**
   * @return string
   */
  public function getDocumentationLink()
  {
    return $this->documentationLink;
  }
  /**
   * @param string
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * @param bool
   */
  public function setExponentialBackoffDefault($exponentialBackoffDefault)
  {
    $this->exponentialBackoffDefault = $exponentialBackoffDefault;
  }
  /**
   * @return bool
   */
  public function getExponentialBackoffDefault()
  {
    return $this->exponentialBackoffDefault;
  }
  /**
   * @param string[]
   */
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  /**
   * @return string[]
   */
  public function getFeatures()
  {
    return $this->features;
  }
  /**
   * @param RestDescriptionIcons
   */
  public function setIcons(RestDescriptionIcons $icons)
  {
    $this->icons = $icons;
  }
  /**
   * @return RestDescriptionIcons
   */
  public function getIcons()
  {
    return $this->icons;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param RestMethod[]
   */
  public function setMethods($methods)
  {
    $this->methods = $methods;
  }
  /**
   * @return RestMethod[]
   */
  public function getMethods()
  {
    return $this->methods;
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
   * @param string
   */
  public function setOwnerDomain($ownerDomain)
  {
    $this->ownerDomain = $ownerDomain;
  }
  /**
   * @return string
   */
  public function getOwnerDomain()
  {
    return $this->ownerDomain;
  }
  /**
   * @param string
   */
  public function setOwnerName($ownerName)
  {
    $this->ownerName = $ownerName;
  }
  /**
   * @return string
   */
  public function getOwnerName()
  {
    return $this->ownerName;
  }
  /**
   * @param string
   */
  public function setPackagePath($packagePath)
  {
    $this->packagePath = $packagePath;
  }
  /**
   * @return string
   */
  public function getPackagePath()
  {
    return $this->packagePath;
  }
  /**
   * @param JsonSchema[]
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return JsonSchema[]
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  /**
   * @param string
   */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /**
   * @return string
   */
  public function getProtocol()
  {
    return $this->protocol;
  }
  /**
   * @param RestResource[]
   */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return RestResource[]
   */
  public function getResources()
  {
    return $this->resources;
  }
  /**
   * @param string
   */
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  /**
   * @return string
   */
  public function getRevision()
  {
    return $this->revision;
  }
  /**
   * @param string
   */
  public function setRootUrl($rootUrl)
  {
    $this->rootUrl = $rootUrl;
  }
  /**
   * @return string
   */
  public function getRootUrl()
  {
    return $this->rootUrl;
  }
  /**
   * @param JsonSchema[]
   */
  public function setSchemas($schemas)
  {
    $this->schemas = $schemas;
  }
  /**
   * @return JsonSchema[]
   */
  public function getSchemas()
  {
    return $this->schemas;
  }
  /**
   * @param string
   */
  public function setServicePath($servicePath)
  {
    $this->servicePath = $servicePath;
  }
  /**
   * @return string
   */
  public function getServicePath()
  {
    return $this->servicePath;
  }
  /**
   * @param string
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * @param string
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
  /**
   * @param bool
   */
  public function setVersionModule($versionModule)
  {
    $this->versionModule = $versionModule;
  }
  /**
   * @return bool
   */
  public function getVersionModule()
  {
    return $this->versionModule;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestDescription::class, 'Google_Service_Discovery_RestDescription');
