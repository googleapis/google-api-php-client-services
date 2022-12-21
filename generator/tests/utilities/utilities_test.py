# -*- coding: utf-8 -*-
#
# Copyright 2010 Google Inc. All Rights Reserved.
#
#  Licensed under the Apache License, Version 2.0 (the "License");
#  you may not use this file except in compliance with the License.
#  You may obtain a copy of the License at
#
#      http://www.apache.org/licenses/LICENSE-2.0
#
#  Unless required by applicable law or agreed to in writing, software
#  distributed under the License is distributed on an "AS IS" BASIS,
#  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
#  See the License for the specific language governing permissions and
#  limitations under the License.

"""Tests for utilities.py."""

__author__ = 'aiuto@google.com (Tony Aiuto)'

from absl.testing import absltest
import googleapis.codegen.utilities as utilities


class UtilitiesTest(absltest.TestCase):

  def testCamelCase(self):
    """Basic CamelCase functionality."""
    self.assertEqual('HelloWorld', utilities.CamelCase('hello_world'))
    self.assertEqual('HelloWorld', utilities.CamelCase('hello-world'))
    self.assertEqual('HelloWorld', utilities.CamelCase('helloWorld'))
    self.assertEqual('HelloWorld', utilities.CamelCase('Hello_world'))
    self.assertEqual('HelloWorld', utilities.CamelCase('_hello_world'))
    self.assertEqual('HelloWorld', utilities.CamelCase('helloWorld'))
    self.assertEqual('HelloWorld', utilities.CamelCase('hello.world'))
    self.assertEqual('HELLOWORLD', utilities.CamelCase('HELLO_WORLD'))
    self.assertEqual('HelloWorld', utilities.CamelCase('hello/world'))
    self.assertEqual('HelloWorld', utilities.CamelCase('/hello/world/'))
    self.assertEqual('', utilities.CamelCase(''))
    self.assertEqual(' ', utilities.CamelCase(' '))
    self.assertEqual(' ', utilities.CamelCase('. '))

  def testUnCamelCase(self):
    """Basic CamelCase functionality."""
    # standard case
    self.assertEqual('hello_world', utilities.UnCamelCase('helloWorld'))
    self.assertEqual('hello_world', utilities.UnCamelCase('Hello_world'))
    self.assertEqual('hello_world', utilities.UnCamelCase('helloWorld'))
    self.assertEqual('hello_world', utilities.UnCamelCase('HELLO_WORLD'))
    self.assertEqual('hello_world', utilities.UnCamelCase('HELLOworld'))
    self.assertEqual('hello_world', utilities.UnCamelCase('helloWORLD'))
    self.assertEqual('hello2_world', utilities.UnCamelCase('Hello2World'))

    # keep existing separators
    self.assertEqual('hello_world', utilities.UnCamelCase('hello_world'))
    self.assertEqual('_hello_world', utilities.UnCamelCase('_hello_world'))
    self.assertEqual('_hello_world', utilities.UnCamelCase('_HelloWorld'))
    self.assertEqual('hello__world', utilities.UnCamelCase('Hello__World'))

    # embedded acronym
    self.assertEqual('hello_xw_orld', utilities.UnCamelCase('HelloXWorld'))

    # minimal input
    self.assertEqual('h', utilities.UnCamelCase('H'))
    self.assertEqual('', utilities.UnCamelCase(''))

    # Other cases involving expanded alphabet.
    self.assertEqual('_', utilities.UnCamelCase('_'))
    self.assertEqual('hello-world', utilities.UnCamelCase('hello-world'))
    self.assertEqual('hello.world', utilities.UnCamelCase('hello.world'))
    self.assertEqual('hello/world', utilities.UnCamelCase('hello/world'))
    self.assertEqual('hello world', utilities.UnCamelCase('Hello World'))
    self.assertEqual(' ', utilities.UnCamelCase(' '))

  def testSanitizeDomain(self):
    self.assertIsNone(utilities.SanitizeDomain(None))
    self.assertEqual('google.com', utilities.SanitizeDomain('google.com'))
    self.assertEqual('google.com', utilities.SanitizeDomain('GooglE.com'))
    self.assertEqual('google.com', utilities.SanitizeDomain('goo|gle.com'))
    self.assertEqual('google.com', utilities.SanitizeDomain('goo gle.com'))
    self.assertEqual('googl.com', utilities.SanitizeDomain('googlê.com'))
    self.assertEqual('www_test.appspot.com',
                      utilities.SanitizeDomain('www-test.appspot.com'))

  def testReversedDomainComponents(self):
    self.assertEqual([],
                      utilities.ReversedDomainComponents(''))
    self.assertEqual(['com', 'google'],
                      utilities.ReversedDomainComponents('google.com'))

  def testNoSpaces(self):
    self.assertIsNone(utilities.NoSpaces(None))
    self.assertEqual('', utilities.NoSpaces(''))
    self.assertEqual('', utilities.NoSpaces(' '))
    self.assertEqual('abc', utilities.NoSpaces('a b  c '))

if __name__ == '__main__':
  absltest.main()
