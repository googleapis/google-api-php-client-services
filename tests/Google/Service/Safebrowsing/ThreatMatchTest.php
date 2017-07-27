<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

require_once dirname(__FILE__) . '/../../../../vendor/autoload.php';
require_once dirname(__FILE__) . '/../../../TestCase.php';

class Google_Service_Safebrowsing_ThreatMatchTest extends TestCase
{
  public function testConstructor()
  {
      $tm = new Google_Service_Safebrowsing_ThreatMatch();
      $this->assertInstanceOf('Google_Service_Safebrowsing_ThreatMatch', $tm);
  }

  public function testMapTypes()
  {
    $mock = $this->getMockBuilder('Google_Service_Safebrowsing_ThreatMatch')
                 ->setMethods(['camelCase'])
                 ->getMock();

    $mock->expects($this->any())
         ->method('camelCase')
         ->will($this->returnValue(true));

        $response = array(
          'threatType' => 'SOCIAL_ENGINEERING',
          'platformType' => 'WINDOWS',
          'threat' => array(
            'url' => 'http://example.com/index.html',
          ),
          'cacheDuration' => '300s',
          'threatEntryType' => 'URL'
        );
        $mock->mapTypes($response);

        $this->assertEquals($mock->getThreat(), $response['threat']);
  }
}
