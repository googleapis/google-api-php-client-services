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

class Google_Service_Discovery_RestDescription extends Google_Collection
{
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = array(
        "versionModule" => "version_module",
  );
  protected $authType = 'Google_Service_Discovery_RestDescriptionAuth';
  protected $authDataType = '';
  public $basePath;
  public $baseUrl;
  public $batchPath;
  public $canonicalName;
  public $description;
  public $discoveryVersion;
  public $documentationLink;
  public $etag;
  public $exponentialBackoffDefault;
  public $features;
  protected $iconsType = 'Google_Service_Discovery_RestDescriptionIcons';
  protected $iconsDataType = '';
  public $id;
  public $kind;
  public $labels;
  protected $methodsType = 'Google_Service_Discovery_RestMethod';
  protected $methodsDataType = 'map';
  public $name;
  public $ownerDomain;
  public $ownerName;
  public $packagePath;
  protected $parametersType = 'Google_Service_Discovery_JsonSchema';
  protected $parametersDataType = 'map';
  public $protocol;
  protected $resourcesType = 'Google_Service_Discovery_RestResource';
  protected $resourcesDataType = 'map';
  public $revision;
  public $rootUrl;
  protected $schemasType = 'Google_Service_Discovery_JsonSchema';
  protected $schemasDataType = 'map';
  public $servicePath;
  public $title;
  public $version;
  public $versionModule;

  /**
   * @param Google_Service_Discovery_RestDescriptionAuth
   */
  public function setAuth(Google_Service_Discovery_RestDescriptionAuth $auth)
  {
    $this->auth = $auth;
  }
  /**
   * @return Google_Service_Discovery_RestDescriptionAuth
   */
  public function getAuth()
  {
    return $this->auth;
  }
  public function setBasePath($basePath)
  {
    $this->basePath = $basePath;
  }
  public function getBasePath()
  {
    return $this->basePath;
  }
  public function setBaseUrl($baseUrl)
  {
    $this->baseUrl = $baseUrl;
  }
  public function getBaseUrl()
  {
    return $this->baseUrl;
  }
  public function setBatchPath($batchPath)
  {
    $this->batchPath = $batchPath;
  }
  public function getBatchPath()
  {
    return $this->batchPath;
  }
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  public function getCanonicalName()
  {
    return $this->canonicalName;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDiscoveryVersion($discoveryVersion)
  {
    $this->discoveryVersion = $discoveryVersion;
  }
  public function getDiscoveryVersion()
  {
    return $this->discoveryVersion;
  }
  public function setDocumentationLink($documentationLink)
  {
    $this->documentationLink = $documentationLink;
  }
  public function getDocumentationLink()
  {
    return $this->documentationLink;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setExponentialBackoffDefault($exponentialBackoffDefault)
  {
    $this->exponentialBackoffDefault = $exponentialBackoffDefault;
  }
  public function getExponentialBackoffDefault()
  {
    return $this->exponentialBackoffDefault;
  }
  public function setFeatures($features)
  {
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  /**
   * @param Google_Service_Discovery_RestDescriptionIcons
   */
  public function setIcons(Google_Service_Discovery_RestDescriptionIcons $icons)
  {
    $this->icons = $icons;
  }
  /**
   * @return Google_Service_Discovery_RestDescriptionIcons
   */
  public function getIcons()
  {
    return $this->icons;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param Google_Service_Discovery_RestMethod
   */
  public function setMethods($methods)
  {
    $this->methods = $methods;
  }
  /**
   * @return Google_Service_Discovery_RestMethod
   */
  public function getMethods()
  {
    return $this->methods;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOwnerDomain($ownerDomain)
  {
    $this->ownerDomain = $ownerDomain;
  }
  public function getOwnerDomain()
  {
    return $this->ownerDomain;
  }
  public function setOwnerName($ownerName)
  {
    $this->ownerName = $ownerName;
  }
  public function getOwnerName()
  {
    return $this->ownerName;
  }
  public function setPackagePath($packagePath)
  {
    $this->packagePath = $packagePath;
  }
  public function getPackagePath()
  {
    return $this->packagePath;
  }
  /**
   * @param Google_Service_Discovery_JsonSchema
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return Google_Service_Discovery_JsonSchema
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  public function getProtocol()
  {
    return $this->protocol;
  }
  /**
   * @param Google_Service_Discovery_RestResource
   */
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  /**
   * @return Google_Service_Discovery_RestResource
   */
  public function getResources()
  {
    return $this->resources;
  }
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  public function getRevision()
  {
    return $this->revision;
  }
  public function setRootUrl($rootUrl)
  {
    $this->rootUrl = $rootUrl;
  }
  public function getRootUrl()
  {
    return $this->rootUrl;
  }
  /**
   * @param Google_Service_Discovery_JsonSchema
   */
  public function setSchemas($schemas)
  {
    $this->schemas = $schemas;
  }
  /**
   * @return Google_Service_Discovery_JsonSchema
   */
  public function getSchemas()
  {
    return $this->schemas;
  }
  public function setServicePath($servicePath)
  {
    $this->servicePath = $servicePath;
  }
  public function getServicePath()
  {
    return $this->servicePath;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setVersionModule($versionModule)
  {
    $this->versionModule = $versionModule;
  }
  public function getVersionModule()
  {
    return $this->versionModule;
  }
}
