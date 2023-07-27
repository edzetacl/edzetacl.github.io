<?php
goto LGFuR;
gE0KF:
function GetBetween($content, $start, $end)
{
    $r = explode($start, $content);
    if (isset($r[1])) {
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return "";
}
goto Sm6vV;
Sm6vV:
$ids = $_GET["\151\x64"];
goto USHRS;
LGFuR:
error_reporting(0);
goto gE0KF;
USHRS:
header(
    "\x4c\x6f\143\141\x74\151\157\x6e\x3a" .
        GetBetween(
            file_get_contents(
                "\x68\x74\x74\x70\x3a\x2f\x2f\x77\x77\x77\56\x79\157\x75\x74\165\142\x65\x2e\x63\157\155\x2f" .
                    $ids .
                    "\57\154\x69\166\145"
            ),
            "\42\54\42\150\x6c\163\115\141\x6e\x69\x66\x65\163\x74\125\162\154\42\72\42",
            "\42\x7d\x2c\x22\150\145\141\x72\164\x62\145\141\x74\x50\141\x72\x61\x6d\x73\x22\72"
        )
);
goto TsQzx;
TsQzx: ?>
