<?php
/*
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

class Google_Service_Ghire_PrincipalProto extends Google_Model
{
  protected $capTokenHolderType = 'Google_Service_Ghire_CapTokenHolderProto';
  protected $capTokenHolderDataType = '';
  protected $circleType = 'Google_Service_Ghire_CircleProto';
  protected $circleDataType = '';
  protected $contactGroupType = 'Google_Service_Ghire_ContactGroupProto';
  protected $contactGroupDataType = '';
  protected $emailOwnerType = 'Google_Service_Ghire_EmailOwnerProto';
  protected $emailOwnerDataType = '';
  protected $eventType = 'Google_Service_Ghire_EventProto';
  protected $eventDataType = '';
  protected $gaiaGroupType = 'Google_Service_Ghire_GaiaGroupProto';
  protected $gaiaGroupDataType = '';
  protected $gaiaUserType = 'Google_Service_Ghire_GaiaUserProto';
  protected $gaiaUserDataType = '';
  protected $hostType = 'Google_Service_Ghire_HostProto';
  protected $hostDataType = '';
  public $kind;
  protected $ldapGroupType = 'Google_Service_Ghire_LdapGroupProto';
  protected $ldapGroupDataType = '';
  protected $ldapUserType = 'Google_Service_Ghire_LdapUserProto';
  protected $ldapUserDataType = '';
  protected $mdbGroupType = 'Google_Service_Ghire_MdbGroupProto';
  protected $mdbGroupDataType = '';
  protected $mdbUserType = 'Google_Service_Ghire_MdbUserProto';
  protected $mdbUserDataType = '';
  protected $oauthConsumerType = 'Google_Service_Ghire_OAuthConsumerProto';
  protected $oauthConsumerDataType = '';
  protected $postiniUserType = 'Google_Service_Ghire_PostiniUserProto';
  protected $postiniUserDataType = '';
  public $scope;
  protected $signingKeyPossessorType = 'Google_Service_Ghire_SigningKeyPossessorProto';
  protected $signingKeyPossessorDataType = '';
  protected $simpleSecretHolderType = 'Google_Service_Ghire_SimpleSecretHolderProto';
  protected $simpleSecretHolderDataType = '';
  protected $socialGraphNodeType = 'Google_Service_Ghire_SocialGraphNodeProto';
  protected $socialGraphNodeDataType = '';
  protected $squareType = 'Google_Service_Ghire_SquareProto';
  protected $squareDataType = '';

  public function setCapTokenHolder(Google_Service_Ghire_CapTokenHolderProto $capTokenHolder)
  {
    $this->capTokenHolder = $capTokenHolder;
  }
  public function getCapTokenHolder()
  {
    return $this->capTokenHolder;
  }
  public function setCircle(Google_Service_Ghire_CircleProto $circle)
  {
    $this->circle = $circle;
  }
  public function getCircle()
  {
    return $this->circle;
  }
  public function setContactGroup(Google_Service_Ghire_ContactGroupProto $contactGroup)
  {
    $this->contactGroup = $contactGroup;
  }
  public function getContactGroup()
  {
    return $this->contactGroup;
  }
  public function setEmailOwner(Google_Service_Ghire_EmailOwnerProto $emailOwner)
  {
    $this->emailOwner = $emailOwner;
  }
  public function getEmailOwner()
  {
    return $this->emailOwner;
  }
  public function setEvent(Google_Service_Ghire_EventProto $event)
  {
    $this->event = $event;
  }
  public function getEvent()
  {
    return $this->event;
  }
  public function setGaiaGroup(Google_Service_Ghire_GaiaGroupProto $gaiaGroup)
  {
    $this->gaiaGroup = $gaiaGroup;
  }
  public function getGaiaGroup()
  {
    return $this->gaiaGroup;
  }
  public function setGaiaUser(Google_Service_Ghire_GaiaUserProto $gaiaUser)
  {
    $this->gaiaUser = $gaiaUser;
  }
  public function getGaiaUser()
  {
    return $this->gaiaUser;
  }
  public function setHost(Google_Service_Ghire_HostProto $host)
  {
    $this->host = $host;
  }
  public function getHost()
  {
    return $this->host;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLdapGroup(Google_Service_Ghire_LdapGroupProto $ldapGroup)
  {
    $this->ldapGroup = $ldapGroup;
  }
  public function getLdapGroup()
  {
    return $this->ldapGroup;
  }
  public function setLdapUser(Google_Service_Ghire_LdapUserProto $ldapUser)
  {
    $this->ldapUser = $ldapUser;
  }
  public function getLdapUser()
  {
    return $this->ldapUser;
  }
  public function setMdbGroup(Google_Service_Ghire_MdbGroupProto $mdbGroup)
  {
    $this->mdbGroup = $mdbGroup;
  }
  public function getMdbGroup()
  {
    return $this->mdbGroup;
  }
  public function setMdbUser(Google_Service_Ghire_MdbUserProto $mdbUser)
  {
    $this->mdbUser = $mdbUser;
  }
  public function getMdbUser()
  {
    return $this->mdbUser;
  }
  public function setOauthConsumer(Google_Service_Ghire_OAuthConsumerProto $oauthConsumer)
  {
    $this->oauthConsumer = $oauthConsumer;
  }
  public function getOauthConsumer()
  {
    return $this->oauthConsumer;
  }
  public function setPostiniUser(Google_Service_Ghire_PostiniUserProto $postiniUser)
  {
    $this->postiniUser = $postiniUser;
  }
  public function getPostiniUser()
  {
    return $this->postiniUser;
  }
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  public function getScope()
  {
    return $this->scope;
  }
  public function setSigningKeyPossessor(Google_Service_Ghire_SigningKeyPossessorProto $signingKeyPossessor)
  {
    $this->signingKeyPossessor = $signingKeyPossessor;
  }
  public function getSigningKeyPossessor()
  {
    return $this->signingKeyPossessor;
  }
  public function setSimpleSecretHolder(Google_Service_Ghire_SimpleSecretHolderProto $simpleSecretHolder)
  {
    $this->simpleSecretHolder = $simpleSecretHolder;
  }
  public function getSimpleSecretHolder()
  {
    return $this->simpleSecretHolder;
  }
  public function setSocialGraphNode(Google_Service_Ghire_SocialGraphNodeProto $socialGraphNode)
  {
    $this->socialGraphNode = $socialGraphNode;
  }
  public function getSocialGraphNode()
  {
    return $this->socialGraphNode;
  }
  public function setSquare(Google_Service_Ghire_SquareProto $square)
  {
    $this->square = $square;
  }
  public function getSquare()
  {
    return $this->square;
  }
}
