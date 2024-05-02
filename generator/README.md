# Google APIs PHP Client Generator

This directory is used to generate the client library service classes.

From the root of this project run:

```
python3 -m pip install -e generator/ --user
```

Generate the client library with the following command

```
python3 -m googleapis.codegen \
  --output_dir=output \
  --input=generator/tests/testdata/foo.v1.json
```
