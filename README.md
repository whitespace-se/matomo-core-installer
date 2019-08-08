# Matomo Core Installer

A custom Composer plugin to install Matomo core outside of `vendor`.
This plugin is based on johnpbloch/wordpress-core-installer found at
https://github.com/johnpbloch/wordpress-core-installer


### Usage
To set up a custom Matomo core package to use this custom installer, add the following to your package's composer file:

```json
"type": "matomo-core",
"require": {
	"whitespac-ese/matomo-core-installer": "^1.0"
}
```

The default directory this installer will use is matomo in your root directory. To change this add the following to your root composer.json

```json
"extra": {
	"matomo-install-dir": "custom/path"
}
```
