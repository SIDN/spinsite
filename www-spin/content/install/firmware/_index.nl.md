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

####  ValiBox met SPIN
SPIN kan worden gedraaid op een eerder SIDN Labs project genaamd [ValiBox](https://valibox.sidnlabs.nl), een thuisrouter met DNSSEC validatie functionaliteit. Firmware bestanden zijn beschikbaar voor bepaalde ondersteunde [GL-iNet](https://www.gl-inet.com/) apparaten. Daarbij wordt de [ValiBox router]({{< relref "/about/faq.nl.md#hoe-verhoud-zich-spin-tot-de-valibox" >}}) uitgebreid met SPIN functionaliteit. Bij de sectie "[vereisten]({{< relref "/install/firmware/requirements.nl.md" >}})" staan aanvullende details over welke hardware wordt ondersteund.

#### Turris Omnia
SPIN kan ook worden ge&Iuml;nstalleerd op een [Turris Omnia](https://omnia.turris.cz/en/), zodat deze over SPIN functionalliteit beschikt (maar niet de ValiBox DNSSEC validerende resolver).

| <i class="fa fa-exclamation-triangle"></i> Let op: |
| :-----: |
| Turris firmware draai alleen nog in ons lab en is nog **niet** beschikbaar.

#### Raspberry Pi
SPIN kan ook worden ge&Iuml;nstalleerd op een [Raspberry Pi](https://www.raspberrypi.org/), zodat deze over SPIN functionalliteit beschikt.

Je kunt [de firmware hier downloaden](https://valibox.sidnlabs.nl/pages/download.html).

| <i class="fa fa-exclamation-triangle"></i> Let op: |
| :-----: |
| **Beta !** De Raspberry PI 3 images zijn beta-versies, die we momenteel aan het testen zijn.).

#### VirtualBox
SPIN kan ook als een VM worden ge&Iuml;nstalleerd op [VirtualBox](https://www.virtualbox.org/), waardoor je snel en gemakkelijk de werking van SPIN kunt onderzoeken.

Je kunt het VM-image [hier downloaden](https://valibox.sidnlabs.nl/pages/download.html).

| <i class="fa fa-exclamation-triangle"></i> Please note: |
| :-----: |
| **Beta !** De VirtualBox images zijn beta-versies, die we momenteel aan het testen zijn .).

#### Firmware downloads

De firmware zelf kan worden gedownload van de [beta sectie](https://valibox.sidnlabs.nl/downloads/valibox/beta/) op de [ValiBox](https://valibox.sidnlabs.nl) website. In de download-directory staan heel wat eerdere versies. Kies de meest recente versie. Als die eenmaal op het apparaat is geinstalleerd, zal hij zichzeff automatisch kunnen bijwerken via de webinterace.


{{% notice info %}}
<i class="fa fa-flask"></i> Wees gewaarschuwd dat SPIN experimentele software is. Gebruik het niet in productie.
{{% /notice %}}