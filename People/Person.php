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

class Google_Service_People_Person extends Google_Collection
{
  protected $collection_key = 'urls';
  public $addresses;
  public $ageRange;
  public $biographies;
  public $birthdays;
  public $braggingRights;
  public $coverPhotos;
  public $emailAddresses;
  public $etag;
  public $events;
  public $genders;
  public $imClients;
  public $interests;
  public $locales;
  public $memberships;
  public $metadata;
  public $names;
  public $nicknames;
  public $occupations;
  public $organizations;
  public $phoneNumbers;
  public $photos;
  public $relations;
  public $relationshipInterests;
  public $relationshipStatuses;
  public $residences;
  public $resourceName;
  public $skills;
  public $taglines;
  public $urls;

  public function setAddresses(array $addresses)
  {
    foreach ($addresses as $a) {
      if (!$a instanceof Google_Service_People_Address) {
        throw new InvalidArgumentException('First argument to setAddresses must be an array of Google_Service_People_Address');
      }
    }
    $this->addresses = $addresses;
  }
  public function getAddresses()
  {
    return $this->addresses;
  }
  public function setAgeRange($ageRange)
  {
    $this->ageRange = $ageRange;
  }
  public function getAgeRange()
  {
    return $this->ageRange;
  }
  public function setBiographies(array $biographies)
  {
    foreach ($biographies as $b) {
      if (!$b instanceof Google_Service_People_Biography) {
        throw new InvalidArgumentException('First argument to setBiographies must be an array of Google_Service_People_Biography');
      }
    }
    $this->biographies = $biographies;
  }
  public function getBiographies()
  {
    return $this->biographies;
  }
  public function setBirthdays(array $birthdays)
  {
    foreach ($birthdays as $b) {
      if (!$b instanceof Google_Service_People_Birthday) {
        throw new InvalidArgumentException('First argument to setBirthdays must be an array of Google_Service_People_Birthday');
      }
    }
    $this->birthdays = $birthdays;
  }
  public function getBirthdays()
  {
    return $this->birthdays;
  }
  public function setBraggingRights(array $braggingRights)
  {
    foreach ($braggingRights as $b) {
      if (!$b instanceof Google_Service_People_BraggingRights) {
        throw new InvalidArgumentException('First argument to setBraggingRights must be an array of Google_Service_People_BraggingRights');
      }
    }
    $this->braggingRights = $braggingRights;
  }
  public function getBraggingRights()
  {
    return $this->braggingRights;
  }
  public function setCoverPhotos(array $coverPhotos)
  {
    foreach ($coverPhotos as $c) {
      if (!$c instanceof Google_Service_People_CoverPhoto) {
        throw new InvalidArgumentException('First argument to setCoverPhotos must be an array of Google_Service_People_CoverPhoto');
      }
    }
    $this->coverPhotos = $coverPhotos;
  }
  public function getCoverPhotos()
  {
    return $this->coverPhotos;
  }
  public function setEmailAddresses(array $emailAddresses)
  {
    foreach ($emailAddresses as $e) {
      if (!$e instanceof Google_Service_People_EmailAddress) {
        throw new InvalidArgumentException('First argument to setEmailAddresses must be an array of Google_Service_People_EmailAddress');
      }
    }
    $this->emailAddresses = $emailAddresses;
  }
  public function getEmailAddresses()
  {
    return $this->emailAddresses;
  }
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setEvents(array $events)
  {
    foreach ($events as $e) {
      if (!$e instanceof Google_Service_People_Event) {
        throw new InvalidArgumentException('First argument to setEvents must be an array of Google_Service_People_Event');
      }
    }
    $this->events = $events;
  }
  public function getEvents()
  {
    return $this->events;
  }
  public function setGenders(array $genders)
  {
    foreach ($genders as $g) {
      if (!$g instanceof Google_Service_People_Gender) {
        throw new InvalidArgumentException('First argument to setGenders must be an array of Google_Service_People_Gender');
      }
    }
    $this->genders = $genders;
  }
  public function getGenders()
  {
    return $this->genders;
  }
  public function setImClients(array $imClients)
  {
    foreach ($imClients as $i) {
      if (!$i instanceof Google_Service_People_ImClient) {
        throw new InvalidArgumentException('First argument to setImClients must be an array of Google_Service_People_ImClient');
      }
    }
    $this->imClients = $imClients;
  }
  public function getImClients()
  {
    return $this->imClients;
  }
  public function setInterests(array $interests)
  {
    foreach ($interests as $i) {
      if (!$i instanceof Google_Service_People_Interest) {
        throw new InvalidArgumentException('First argument to setInterests must be an array of Google_Service_People_Interest');
      }
    }
    $this->interests = $interests;
  }
  public function getInterests()
  {
    return $this->interests;
  }
  public function setLocales(array $locales)
  {
    foreach ($locales as $l) {
      if (!$l instanceof Google_Service_People_Locale) {
        throw new InvalidArgumentException('First argument to setLocales must be an array of Google_Service_People_Locale');
      }
    }
    $this->locales = $locales;
  }
  public function getLocales()
  {
    return $this->locales;
  }
  public function setMemberships(array $memberships)
  {
    foreach ($memberships as $m) {
      if (!$m instanceof Google_Service_People_Membership) {
        throw new InvalidArgumentException('First argument to setMemberships must be an array of Google_Service_People_Membership');
      }
    }
    $this->memberships = $memberships;
  }
  public function getMemberships()
  {
    return $this->memberships;
  }
  public function setMetadata(Google_Service_People_PersonMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setNames(array $names)
  {
    foreach ($names as $n) {
      if (!$n instanceof Google_Service_People_Name) {
        throw new InvalidArgumentException('First argument to setNames must be an array of Google_Service_People_Name');
      }
    }
    $this->names = $names;
  }
  public function getNames()
  {
    return $this->names;
  }
  public function setNicknames(array $nicknames)
  {
    foreach ($nicknames as $n) {
      if (!$n instanceof Google_Service_People_Nickname) {
        throw new InvalidArgumentException('First argument to setNicknames must be an array of Google_Service_People_Nickname');
      }
    }
    $this->nicknames = $nicknames;
  }
  public function getNicknames()
  {
    return $this->nicknames;
  }
  public function setOccupations(array $occupations)
  {
    foreach ($occupations as $o) {
      if (!$o instanceof Google_Service_People_Occupation) {
        throw new InvalidArgumentException('First argument to setOccupations must be an array of Google_Service_People_Occupation');
      }
    }
    $this->occupations = $occupations;
  }
  public function getOccupations()
  {
    return $this->occupations;
  }
  public function setOrganizations(array $organizations)
  {
    foreach ($organizations as $o) {
      if (!$o instanceof Google_Service_People_Organization) {
        throw new InvalidArgumentException('First argument to setOrganizations must be an array of Google_Service_People_Organization');
      }
    }
    $this->organizations = $organizations;
  }
  public function getOrganizations()
  {
    return $this->organizations;
  }
  public function setPhoneNumbers(array $phoneNumbers)
  {
    foreach ($phoneNumbers as $p) {
      if (!$p instanceof Google_Service_People_PhoneNumber) {
        throw new InvalidArgumentException('First argument to setPhoneNumbers must be an array of Google_Service_People_PhoneNumber');
      }
    }
    $this->phoneNumbers = $phoneNumbers;
  }
  public function getPhoneNumbers()
  {
    return $this->phoneNumbers;
  }
  public function setPhotos(array $photos)
  {
    foreach ($photos as $p) {
      if (!$p instanceof Google_Service_People_Photo) {
        throw new InvalidArgumentException('First argument to setPhotos must be an array of Google_Service_People_Photo');
      }
    }
    $this->photos = $photos;
  }
  public function getPhotos()
  {
    return $this->photos;
  }
  public function setRelations(array $relations)
  {
    foreach ($relations as $r) {
      if (!$r instanceof Google_Service_People_Relation) {
        throw new InvalidArgumentException('First argument to setRelations must be an array of Google_Service_People_Relation');
      }
    }
    $this->relations = $relations;
  }
  public function getRelations()
  {
    return $this->relations;
  }
  public function setRelationshipInterests(array $relationshipInterests)
  {
    foreach ($relationshipInterests as $r) {
      if (!$r instanceof Google_Service_People_RelationshipInterest) {
        throw new InvalidArgumentException('First argument to setRelationshipInterests must be an array of Google_Service_People_RelationshipInterest');
      }
    }
    $this->relationshipInterests = $relationshipInterests;
  }
  public function getRelationshipInterests()
  {
    return $this->relationshipInterests;
  }
  public function setRelationshipStatuses(array $relationshipStatuses)
  {
    foreach ($relationshipStatuses as $r) {
      if (!$r instanceof Google_Service_People_RelationshipStatus) {
        throw new InvalidArgumentException('First argument to setRelationshipStatuses must be an array of Google_Service_People_RelationshipStatus');
      }
    }
    $this->relationshipStatuses = $relationshipStatuses;
  }
  public function getRelationshipStatuses()
  {
    return $this->relationshipStatuses;
  }
  public function setResidences(array $residences)
  {
    foreach ($residences as $r) {
      if (!$r instanceof Google_Service_People_Residence) {
        throw new InvalidArgumentException('First argument to setResidences must be an array of Google_Service_People_Residence');
      }
    }
    $this->residences = $residences;
  }
  public function getResidences()
  {
    return $this->residences;
  }
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  public function getResourceName()
  {
    return $this->resourceName;
  }
  public function setSkills(array $skills)
  {
    foreach ($skills as $s) {
      if (!$s instanceof Google_Service_People_Skill) {
        throw new InvalidArgumentException('First argument to setSkills must be an array of Google_Service_People_Skill');
      }
    }
    $this->skills = $skills;
  }
  public function getSkills()
  {
    return $this->skills;
  }
  public function setTaglines(array $taglines)
  {
    foreach ($taglines as $t) {
      if (!$t instanceof Google_Service_People_Tagline) {
        throw new InvalidArgumentException('First argument to setTaglines must be an array of Google_Service_People_Tagline');
      }
    }
    $this->taglines = $taglines;
  }
  public function getTaglines()
  {
    return $this->taglines;
  }
  public function setUrls(array $urls)
  {
    foreach ($urls as $u) {
      if (!$u instanceof Google_Service_People_Url) {
        throw new InvalidArgumentException('First argument to setUrls must be an array of Google_Service_People_Url');
      }
    }
    $this->urls = $urls;
  }
  public function getUrls()
  {
    return $this->urls;
  }
}
