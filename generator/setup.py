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
"""Setup script for Google APIs Client Generator."""

from setuptools import find_packages  # pylint:disable=g-import-not-at-top
from setuptools import setup


setup(
    name='google-apis-client-generator',
    version='1.5.0',
    description='Google Apis Client Generator',
    long_description=open('README.md').read(),
    author='Tony Aiuto',
    author_email='aiuto@google.com',
    maintainer='Brent Shaffer',
    maintainer_email='betterbrent@google.com',
    url='https://github.com/googleapis/google-api-php-client-services/',
    packages=find_packages('src'),
    package_dir={'': 'src'},
    entry_points={
      'console_scripts': [
        ('generate_library = '
         'googleapis.codegen.script_stubs:RunGenerateLibrary'),
        ('expand_templates = '
         'googleapis.codegen.script_stubs:RunExpandTemplates')
      ]},
    include_package_data=True,
    install_requires=['django==5.2.8',
                      #'google-apputils',
                      'httplib2',
                      'absl-py',
                      'six',
                      'python-gflags',
                      'setuptools'],
    zip_safe=False)
