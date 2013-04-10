Shorteen
====================

Shorteen lets you shorten your URLs using wide range of shortening services - third-party and self-hosted.

## Usage

```
{exp:shorteen:process service="bitly" url="http://www.ellislab.com"}
```

## Parameters:

- **url** – URL to shorten. If omited, will shorten URL of current page.
- **service** – shortening service to use. Possible values:
  - googl – [goo.gl](http://goo.gl) (default)
  - isgd – [is.gd](http://is.gd)
  - bitly – [bit.ly](http://bitly.com) (default)
  - yourls – [YOURLS](http://yourls.org) based service (running on any domain)
  - lessn-more – [Lessn More](http://lessnmore.net/) based service (running on any domain)
  - cloud-app – [CloudApp](http://getcloudapp.com) based service (running on any domain)

The shortest form of tag would be `{exp:shorteen:process}` – shortens URL of current page using goo.gl

If service is not available or some data are missing in settings, the module will return the 'initial' long URL.

## Settings
Some shortening services are available openly for everyone, and some require providing API key and/or other data. You need to provide those in module settings.

### goo.gl
To acquire an API key, visit the [APIs Console](https://code.google.com/apis/console). In the Services pane, activate the Google URL Shortener API; if the Terms of Service appear, read and accept them.

Next, go to the [API Access](https://code.google.com/apis/console#access) pane. The API key is near the bottom of that pane, in the section titled "Simple API Access."

### bit.ly
To get started, you'll need a free bitly user account and Access token. Signup at: [http://bitly.com/a/sign_up](http://bitly.com/a/sign_up)

If you already have an account, you can find your access token at: [https://bitly.com/a/oauth_apps](https://bitly.com/a/oauth_apps)

### YOURLS
If you have YOURLS running on you own domain, you need to specify service URL (where script is installed) and secret signature token. The signature can be found on [http://yourls-address/admin/tools.php](http://yourls-address/admin/tools.php)

### Lessn More
If you have Lessn More running on you own domain, you need to specify service URL (where script is installed) and API key (displayed when you log in to Lessn More).

### CloudApp
Because CloudApp uses HTTP Digest authentication, you need to provide your CloudApp email address and password to create short URLs.