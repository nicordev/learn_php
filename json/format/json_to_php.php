<?php

function formatJsonToPhpArray(string $jsonData)
{
    $phpCode = str_replace('{', '[', $jsonData);
    $phpCode = str_replace('}', ']', $phpCode);
    $phpCode = str_replace(': ', ' => ', $phpCode);
    $phpCode = str_replace(':', ' => ', $phpCode);

    return $phpCode;
}

$jsonData = '{"id":"c46f5069-57e3-4f92-ac9b-75861c853e23","clientId":"back_2cloud","rootUrl":"http:\/\/2cloud.local","adminUrl":"http:\/\/2cloud.local","surrogateAuthRequired":false,"enabled":true,"alwaysDisplayInConsole":false,"clientAuthenticatorType":"client-secret","redirectUris":["http:\/\/2cloud.local\/*"],"webOrigins":["http:\/\/2cloud.local"],"notBefore":0,"bearerOnly":false,"consentRequired":false,"standardFlowEnabled":true,"implicitFlowEnabled":false,"directAccessGrantsEnabled":true,"serviceAccountsEnabled":false,"publicClient":false,"frontchannelLogout":false,"protocol":"openid-connect","attributes":{"saml.assertion.signature":"false","saml.force.post.binding":"false","saml.multivalued.roles":"false","saml.encrypt":"false","saml.server.signature":"false","saml.server.signature.keyinfo.ext":"false","exclude.session.state.from.auth.response":"false","saml_force_name_id_format":"false","saml.client.signature":"false","tls.client.certificate.bound.access.tokens":"false","saml.authnstatement":"false","display.on.consent.screen":"false","saml.onetimeuse.condition":"false"},"authenticationFlowBindingOverrides":[],"fullScopeAllowed":false,"nodeReRegistrationTimeout":-1,"defaultClientScopes":["web-origins","role_list","roles","profile","back_2cloud_scope","email"],"optionalClientScopes":["address","phone","offline_access","microprofile-jwt"],"access":{"view":true,"configure":true,"manage":true}}';

echo formatJsonToPhpArray($jsonData) . "\n";