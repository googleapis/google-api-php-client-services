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
"""Tests for ordered_set.py."""

from absl.testing import absltest

from googleapis.codegen.utilities import ordered_set


class OrderedSetTest(absltest.TestCase):

  def testFrozenSet(self):
    s = ordered_set.FrozenOrderedSet(range(5))
    self.assertEqual(5, len(s))
    self.assertTrue(4 in s)
    self.assertEqual([x for x in range(5)], list(s))

  def testMutableSet(self):
    s = ordered_set.MutableOrderedSet()
    for i in range(5):
      s.add(i)
    self.assertEqual(5, len(s))
    self.assertTrue(4 in s)
    self.assertEqual([x for x in range(5)], list(s))

    s.remove(3)
    self.assertEqual([0, 1, 2, 4], list(s))
    s.clear()
    self.assertEqual(0, len(s))


if __name__ == '__main__':
  absltest.main()
