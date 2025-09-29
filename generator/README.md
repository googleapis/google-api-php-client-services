# Google APIs PHP Client Generator

This directory is used to generate the client library service classes.

From the root of this project run:

```
python3 -m pip install -e generator/ --user --use-pep517
```

Generate the client library with the following command

```
python3 -m googleapis.codegen \
  --output_dir=src \
  --input=generator/tests/testdata/foo.v1.json
```

or using [Google APIs Explorer](https://developers.google.com/apis-explorer/) server directly:

```
python3 -m googleapis.codegen \
  --output_dir=src \
  --api_name=walletobjects \
  --api_version=v1 \
  --language=php \
  --language_variant=default
```