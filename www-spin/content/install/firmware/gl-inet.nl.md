+++
title = "2.1.2 ValiBox / GL-iNet apparaten"
description = "Installatiehandleiding voor GL-iNet apparaten"
weight = 212
chapter = false
slug = "glinet"
+++

#### GL-iNet fabrieks-firmware vervangen

De [genoemde]({{< relref "/install/firmware/requirements.md" >}}) apparaten worden standaard geleverd met fabriekssoftware. Via onderstaande stappen wordt deze standaard firmware overschreven met de SPIN firmware. Is de SPIN firmware eenmaal aanwezig, is deze eenvoudig via de SPIN-interface actueel te houden. Zie daarvoor het onderdeel [configuratie]({{< relref "/install/configure.md" >}}).

Er zijn twee methodes voor het overschrijven van de fabriekssoftware:

1. [Standard methode]({{< relref "#standard-methode" >}})
1. [Alternatieve methode]({{< relref "#alternatieve-methode" >}})

<i class="fa fa-flask"></i> Nadat een van deze stappen is gelukt, kan de SPIN-software worden [geconfigureerd]({{< relref "/install/configure.md" >}}).

#### Standard methode

Zorg dat er een [SPIN firmware image]({{< relref "/install/firmware/_index.md" >}}) beschikbaar is voordat u begint.

1. Verbindt een GL-inet met een computer of laptop
1. Open een browserventer en geef de URL http://192.168.8.1 op
1. Doorloop eventuele initiële stappen, zoals taalkeuze, timezone en wachtwoord
1. Kies op het menu aan de linkerzijde 'Upload Firmware'
1. Bevestig 'Upload Firmware' rechtsboven
1. Kies het SPIN firmware bestand van uw disk

{{% notice warning %}}
Belangrijk! Vink de 'keep settings' checkbox uit!
{{% /notice %}}

![SPINarch](/images/screenshot_glinet_upload_firmware.png?width=30pc&classes=shadow "GL-inet upload firmware")

Wanneer het image is geverifieerd, zal de SPIN-software worden geinstalleerd. Dit kan enkele minuten in beslag nemen.

Zie voor aanvullende, engelstalige informatie: https://gl-inet.com/docs/mini/firmware/

#### Alternatieve methode

De meeste apparaten hebben een tweede manier van updated; the 'boot override methode'. Deze is een poging waard als het apparaat neit normaal start en er geen beheer scherm voorhanden is.

Dit is de methode voor het [GL-inet AR-150](https://www.gl-inet.com/ar150/) model. Voor andere modellen kan het proces verschillen. Raadpleeg eventueel de [GL-inet documetation](http://www.gl-inet.com/docs/) site voor meer informatie.

1. Zorg dat de GL-inet uitgeschakeld is
1. Verbindt een UTP kabel vanaf de computer naar de WAN-poort van de GL-inet
1. Schakel het apparaat aan terwijl de reset-knop ingedrukt wordt gehouden. Hou de eset button 5 seconden ingedrukt.
1. Configureer de computer met het IP address 192.168.1.2
1. Open een browser and gaa naar http://192.168.1.1
1. Upload het firmware bestad om de SPIN software te installeren

![SPINarch](/images/screenshot_glinet_boot_firmware.png?width=30pc&classes=shadow "GL-inet boot override firmware")

