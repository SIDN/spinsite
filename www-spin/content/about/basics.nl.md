+++
title = "1.2 Grondbeginselen"
description = "SPIN grondbeginselen"
weight = 12
chapter = false
slug = "basics"
+++

#### SPIN-systeem
Om de in de [vorige paragraaf]({{< relref "/about/problem.nl.md" >}}) genoemde bedreigingen aan te pakken, ontwikkelden we het SPIN (Security and Privacy for In-home Networks) systeem. 

SPIN introduceert het concept van een omgekeerde firewall, waarmee het internet kan worden beschermd tegen DDoS-aanvallen vanaf IoT-apparaten. Verdacht verkeer van IoT-apparaten die afwijkend gedrag vertonen kan worden geblokkeerd. Op dezelfde manier beschermt SPIN ook gebruikers tegen bijvoorbeeld het lekken van privacygevoelige informatie door IoT-apparaten naar diensten op het internet. 

SPIN visualiseert ook de verkeerstromen, zodat de gebruiker inzicht krijgt in wat er op het thuisnetwerk gebeurt.

De SPIN-software, die is gebaseerd op [OpenWRT](https://openwrt.org/ "OpenWRT website"), is open source, waardoor iedereen met voldoende kennis van zaken het kan compileren en installeren. We maken onze resultaten ook openbaar, zodat de gemeenschap van onze ervaring kan profiteren.

#### Overzicht en componenten

![SPINarch](/images/SPIN_Architecture.png?width=20pc&classes=border "SPIN architectuur")

Bovenstaande afbeelding (opklikken voor groot) geeft een globaal overzicht van de architectuur van een op SPIN gebaseerd systeem, met twee afzonderlijke soorten componenten: lichtgewicht ‘SPIN agents’ die netwerkverkeer meten en meer intelligente controllers. De scheiding is nieuw en maakt het systeem geschikt voor meer toepassingsscenario’s.

Een *agent* meet stromen netwerkverkeer, genereert daarvan overzichten en kan verkeersstromen blokkeren. Een *controller* ontvangt overzichten van één of meer agents, analyseert deze en kan de agents opdracht geven om de datastroom van bepaalde IoT-apparaten te blokkeren. Een controller kan bijvoorbeeld signaleren dat de verkeersstromen van een apparaat overeenkomen met het [Mirai botnet](https://en.wikipedia.org/wiki/Mirai_(malware)). De controller geeft de betreffende agent dan opdracht om het geïnfecteerde apparaat in quarantaine te zetten (te blokkeren).

Controllers en agents kunnen op hetzelfde apparaat gehost worden, maar ons nieuwe ontwerp ondersteunt ook toepassingen waarbij meerdere agents en één of meer controllers elders in het netwerk geplaatst zijn. Zo kan elke verdieping van een huis zijn eigen wifi-hotspot met een aparte agent hebben, allemaal bestuurd door een centrale controller die draait op een standaard, always-on apparaat, zoals een network-attached storage (NAS) device.

Het SPIN platform kan worden uitgebreid met applicaties die kunnen worden geïmplementeerd door (commerciële) organisaties, de SPIN-gemeenschap of door de onderzoeksgemeenschap.

Een goed gedefinieerde API voorziet applicatieontwikkelaars de nodige informatie over het thuisnetwerk met haar IoT-apparaten, zodat ontwikkelaars zich niet hoeven bezig te houden met meetgegevens op laag niveau.

