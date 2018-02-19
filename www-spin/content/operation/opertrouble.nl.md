+++
title = "3.4 Troubleshooting"
description = "Troubleshooting SPIN"
weight = 34
chapter = false
slug = "debug"
+++

#### Operationele problemen
Als er tijdens het dagelijkse gebruik iets niet goed is gegaan, kan een van de onderstaande oplossingen misschien helpen.

* [Autoupgrade faalt]({{< relref "#autoupgrade-naar-meest-recente-versie" >}})

#### Autoupgrade naar meest recente versie gaat mis
Mocht de automatische installatie via de web-gui falen, dan kan het volgende worden gedaan:

`ssh 192.168.8.1 -l root` (alleen support voor hmac-sha1 en hmac-md5)

    cd /www/autonta

    ./update_system.lua -b -k -d -i -w

 (maar doe eerst zonder -i en bijvoorbeeld met -c. Ook heeft -h nog wat interessante opties, zoals -o)

Als dit faalt, probeer het dan via een 'wget' van het juiste .bin image naar /tmp (passend bij de gebruikte hardware) en een `sysupgrade` (standaard [OpenWRT-commando](https://wiki.openwrt.org/doc/techref/sysupgrade)).

Bijvoorbeeld:

    sysupgrade -c ./sidn_valibox_gl-ar150_beta-2017-07-05-1537.bin

* -c betekent: probeer alle gewijzigde bestanden in / etc / te behouden
* -n is volledige reflash
* zonder opties is: 'enigszins dingen behouden' (TODO: welke dan?)

##### Recovery
Als laatste is er nog de 'recovery'-mogelijkheid, afhankelijk van het type apparaat.

In het geval van een GL-iNet kun je bij het aanzetten (dus zodra hij stroom heeft) de resetknop ingedrukt houden. Nadat de rode LED 5 keer heeft geknipperd laat je reset los, en het apparaat boot in [recovery-mode](https://gl-inet.com/docs/mini/firmware/#using-the-reset-button-to-revert), met een fixed IP-adres 192.168.1.1 op de WAN-poort. Plug daar een laptop aan met een ander IP-adres uit 192.168.1.0/24, en je kunt via een browser een volledig nieuwe image uploaden.