# Docker Test SAML 2.0 Identity Provider (IdP)

Docker container with a plug and play SAML 2.0 Identity Provider (IdP) for development and testing.

Built with [SimpleSAMLphp](https://simplesamlphp.org). Based on official PHP7 Apache [images](https://hub.docker.com/_/php/).

**Warning!**: Do not use this container in production! The container is not configured for security and contains static user credentials and SSL keys.

SimpleSAMLphp is logging to stdout on debug log level. Apache is logging error and access log to stdout.

The contained version of SimpleSAMLphp is 1.15.2.

## Usage

```
docker run --name=testsamlidp_idp \      
-p 8081:8080 \
-p 8444:8443 \
-d faissah/docker-test-saml-idp 
```

There are two static users configured in the IdP with the following data:

| UID | Username | Password | Email | First Name | Last Name | Group |
|---|---|---|---|---|---|---|
| 1 | user1 | password | user1@jahia.com | Richard | Brown | group1 |
| 2 | user2 | password | user2@jahia.com | Cathy | Smith | group2 |


You can access the SimpleSAMLphp web interface of the IdP under `http://localhost:8081/simplesaml`. The admin password is `secret`.


## Test the Identity Provider (IdP)

To ensure that the IdP works you can use Jahia DX with a SAML valve as test SP.

Build and deploy the  [Jahia SAML valve](https://github.com/Jahia/saml-authentication-valve) and configure it using the README.

For this test the following is assumed:

- your DX site has `digitallsso` for server name and  `digitallsso` for sitekey
- your DX is running on port `80`
- The local development URL of the IdP is `http://localhost:8081`.
- The local development URL of the SP (Jahia DX) is `http://digitallsso`.
- the SAML valve is deployed on your DX instance
- The Relying Party Identifier of the SP is `jahia.sp.id` (configured in valve).
- The Incoming Target Url is `/cms/login.SAML.incoming` (configured in valve).
- The Identity Provider Metadata file is accessible under http://localhost:8081/simplesaml/saml2/idp/metadata.php  (configured in valve).


## SAML Valve Configuration Documentation 

In order to properly configure your valve, pleaes have a look at its github README:
https://github.com/Jahia/saml-authentication-valve

## Additional  Docker Test SAML Documentation

For more documentation, please have a look at the parent github repository:
https://github.com/kristophjunge/docker-test-saml-idp

## License

This project is licensed under the MIT license by Kristoph Junge.
