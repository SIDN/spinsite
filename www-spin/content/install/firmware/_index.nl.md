+++
title = "2.1 Via Kant-en-klare firmware"
description = "Installatie van SPIN via firmware images"
weight = 21
chapter = false
slug = "firmwareimage"
+++

{{% notice tip %}}
Deze methode is aanbevolen voor de beginnende gebruiker.
{{% /notice %}}

####  ValiBox
SPIN kan worden gedraaid op een eerder SIDN Labs project genaamd [ValiBox](https://valibox.sidnlabs.nl), een thuisrouter met DNSSEC validatie functionaliteit. Firmware bestanden zijn beschikbaar voor bepaalde ondersteunde [GL-iNet](https://www.gl-inet.com/) apparaten. Daarbij wordt de [ValiBox router]({{< relref "/about/faq.nl.md#hoe-verhoud-zich-spin-tot-de-valibox" >}}) uitgebreid met SPIN functionaliteit. Bij de sectie "[vereisten]({{< relref "/install/firmware/requirements.md" >}})" staan aanvullende details over welke hardware wordt ondersteund.

#### Turris Omnia
SPIN kan ook worden geïnstalleerd op een [Turris Omnia](https://omnia.turris.cz/en/), zodat deze over SPIN functionalliteit beschikt.

| <i class="fa fa-exclamation-triangle"></i> Let op: |
| :-----: |
| Turris firmware is nog **niet** beschikbaar. We gaan hier binnekort mee aan de slag.

#### Raspberry Pi
SPIN kan ook worden geïnstalleerd op een [Raspberry Pi](https://www.raspberrypi.org/), zodat deze over SPIN functionalliteit beschikt.

| <i class="fa fa-exclamation-triangle"></i> Let op: |
| :-----: |
| Momenteel nog **niet** beschikbaar. Maar we verwachten op termijn SPIN 'packages' te gana maken die kunnen worden geïnstalleerd met een '[packaging tool](https://www.raspberrypi.org/documentation/linux/software/apt.md)'.

#### Firmware downloads

De firmware zelf kan worden gedownload van de [beta sectie](https://valibox.sidnlabs.nl/downloads/valibox/beta/) op de [ValiBox](https://valibox.sidnlabs.nl) website. In de download-directory staan heel wat eerdere versies. Kies de meest recente versie. Als die eenmaal op het apparaat is geinstalleerd, zal hij zichzeff automatisch kunnen bijwerken via de webinterace.


{{% notice info %}}
<i class="fa fa-flask"></i> Wees gewaarschuwd dat SPIN experimentele software is. Gebruik het niet in productie.
{{% /notice %}}