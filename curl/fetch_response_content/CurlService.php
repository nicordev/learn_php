<?php

class CurlService
{
    public function sendRequest(string $url, $headers = [])
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true, // Mandatory to fetch the response content.
            CURLOPT_HTTPHEADER => $headers,
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

    public function makeBasicAuthorizationHeaderArray(string $email, string $password): array
    {
        $base64EncodedCredentials = $this->makeBasicAuthorizationValue($email, $password);

        return ["Authorization" => "Basic $base64EncodedCredentials"];
    }

    public function makeBasicAuthorizationHeaderString(string $email, string $password): string
    {
        $base64EncodedCredentials = $this->makeBasicAuthorizationValue($email, $password);

        return "Authorization: Basic $base64EncodedCredentials";
    }

    public function makeBasicAuthorizationValue(string $email, string $password): string
    {
        return base64_encode("${email}:${password}");
    }
}
