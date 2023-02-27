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


from absl.testing import absltest
from googleapis.codegen.utilities import convert_size


class ConvertSizeTest(absltest.TestCase):
  """Test for unit conversion."""

  def testConvertSize(self):
    self.assertEqual(None, convert_size.ConvertSize(None))
    self.assertEqual(None, convert_size.ConvertSize('4'))
    self.assertEqual(None, convert_size.ConvertSize('4C'))
    self.assertEqual(4, convert_size.ConvertSize('4B'))
    self.assertEqual(4 * 2 ** 10, convert_size.ConvertSize('4KB'))
    self.assertEqual(12 * 2 ** 20, convert_size.ConvertSize('12MB'))
    self.assertEqual(10 * 2 ** 30, convert_size.ConvertSize('10GB'))


if __name__ == '__main__':
  absltest.main()
