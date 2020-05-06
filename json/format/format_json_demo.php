<?php

function formatJsonToBeHumanlyReadable(string &$jsonData, int $tabSpaceCount = 4)
{
    $depth = 0;

    for ($i = $start = 0; $i < strlen($jsonData); $i++) {
        if ($jsonData[$i] === ',') {
            $start = $i + 1;
        } elseif ($jsonData[$i] === '{' || $jsonData[$i] === '[') {
            ++$depth;
            $start = $i + 1;
        } elseif ($jsonData[$i] === '}' || $jsonData[$i] === ']') {
            --$depth;
            $start = $i;
        } else {
            continue;
        }

        $jsonData = substr_replace($jsonData, "\n" . str_repeat(' ', $tabSpaceCount * $depth), $start, 0);
        $i += $tabSpaceCount * $depth + 1;
    }
}

$jsonToFormat = '{"stoppoint":{"legacyId":"2","customer":"TUL-LAVAL","name":"stoppoint"},"route":{"legacyId":"2","customer":"TUL-LAVAL","name":"route"},"line":{"legacyId":"2","customer":"TUL-LAVAL","name":"line"},"network":{"legacyId":"2","customer":"TUL-LAVAL","name":"network"},"trip":{"legacyId":"2","customer":"TUL-LAVAL","name":"trip","startTime":"14:00","endTime":"17:00"},"passengerControl":{"customer":"TUL-LAVAL","controlDate":"2019-07-24T09:22:42.301Z","fareTicketLegacyId":222222,"rfidUuid":"22222222222222","barecodeData":"111111111111111111","controlSuccess":true,"passenger":{"firstName":"XXXXXXXXX","lastName":"XXXXXXXXX","legacyId":"34","customer":"TUL-LAVAL"}},"customer":"TUL-LAVAL","controlDate":"2019-07-24T00:00:00+02:00","controlSuccess":true,"comment":"Comment","product":"2SCHOOL"}';
formatJsonToBeHumanlyReadable($jsonToFormat);
echo "$jsonToFormat\n";


