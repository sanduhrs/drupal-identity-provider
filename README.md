# Identity Povider

The *Identity Provider* is a Drupal based distribution that provides a basic
*OpenID Connect* and *OAuth2* provider.
As a user management platform it provides the means to centrally authenticate
your users and to distribute profile values to OpenID Connect client setups.

## Installation

You need to [install composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx),
then follow the instructions:

Create the project
```
composer create-project sanduhrs/drupal-identity-provider identity-provider
```

Install the setup
```
cd identity-provider
./vendor/bin/drush si --db-url=mysql://user:pass@localhost/identity_provider --site-name "Identity Provider"
```

Serve the setup
```
./vendor/bin/drush rs 8080
```
