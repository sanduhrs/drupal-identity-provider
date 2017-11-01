#!/usr/bin/env bash

cd web/profiles/identity_provider/config/install/
find . -type f -name "*.yml" -print0 | xargs -0 sed -i '' -e '/uuid: /d'
find . -type f -name "*.yml" -print0 | xargs -0 sed -i '' -e '/_core:/d'
find . -type f -name "*.yml" -print0 | xargs -0 sed -i '' -e '/  default_config_hash: /d'
rm core.extension.yml
rm update.settings.yml
