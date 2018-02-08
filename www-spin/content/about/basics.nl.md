+++
title = "1.2 Grondbeginselen van SPIN"
description = "SPIN grondbeginselen"
weight = 12
chapter = false
+++

#### SPIN-systeem
Om de in de [vorige paragraaf]({{< relref "/about/problem.nl.md" >}}) genoemde bedreigingen aan te pakken, ontwikkelden we het SPIN (Security and Privacy for In-home Networks) systeem. 

Om het internet te beschermen tegen DDoS-aanvallen vanaf IoT-apparaten, introduceert SPIN het concept van een omgekeerde firewall, die verkeerstromen tussen IoT-apparaten en het internet analyseert en blokkeert als deze apparaten verdacht, afwijkend gedrag vertonen.

De omgekeerde firewall blokkeert niet alleen mogelijk DDoS-verkeer, maar beschermt gebruikers ook tegen bijvoorbeeld het lekken van privacygevoelige informatie door IoT-apparaten naar diensten op het internet. De omgekeerde firewall beschermt dus zowel het internet als eindgebruikers tegen onveilige IoT-apparaten.

SPIN visualiseert ook de verkeerstromen, zodat de gebruiker inzicht krijgt in wat er op het thuisnetwerk gebeurt.

De SPIN-software, die is gebaseerd op [OpenWRT <i class='fa fa-link'></i>](https://openwrt.org/ "OpenWRT website"), is open source, waardoor iedereen met voldoende kennis van zaken het kan compileren en installeren. We maken onze resultaten ook openbaar, zodat de gemeenschap van onze ervaring kan profiteren.

![SPINarch](/images/SPIN_Architecture.png "SPIN architectuur")
