# Guardian

As extension to the **[Oauth2 Stack](http://blog.cloudoki.com/oauth2-stack/)**, Guardian provides internal Authorisation scopes for Laravel.

This package is usable in multiple Laravel versions. Right now, however, the Guardian package is only tested in Laravel 4.2 with Eloquent.

####Dependencies
**Oauth2-Stack** - Guardian uses the **Account** and **User** models next to the **Oauth2Verifier** class.

**Except-io-nal** - The Cloudoki PHP Exception extensions are used to throw manageable errors when authorisations are not valid.

##Usage
####Oauth2 Stack
Please [dig into](http://blog.cloudoki.com/oauth2-stack/) the Oauth2 Stack documentation before implementing Guardian.

####Access Token
The **access token** is requested as `Input` parameter, in respect to the Oauth2 Stack and **MQ alignment**. In a production level API request however, the access token should ALWAYS be placed in the Authorisation header of the request.



