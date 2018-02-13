+++
title = "1.4 Features"
description = "Features"
weight = 14
chapter = false
slug = "features"
+++


![SPINarch](/images/SPIN_Concept.png?width=40pc&classes=border "SPIN concept")

#### Omgekeerde firewall
Om het internet te beschermen tegen DDoS-aanvallen vanaf IoT-apparaten, introduceert SPIN het concept van een omgekeerde firewall, die uitgaande verbindingen tussen IoT-apparaten en het internet blokkeert als deze apparaten verdacht gedrag vertonen. SPIN doet dit door de headers van alle verkeersstromen te meten en analyseren en ongewenste of schadelijke stromen te blokkeren. De omgekeerde firewall blokkeert niet alleen mogelijk DDoS-verkeer, maar beschermt gebruikers ook tegen bijvoorbeeld het lekken van privacygevoelige informatie door IoT-apparaten naar diensten op het internet. De omgekeerde firewall beschermt dus zowel het internet als eindgebruikers tegen onveilige IoT-apparaten.

#### Visualisatie
SPIN [visualiseert](https://youtu.be/jynMCQ1fyvM) daarnaast het dataverkeer, zodat de gebruiker kan zien wat er op zijn netwerk gebeurt.

#### Afwijkingsdetectie
De afwijkingsdetectie van SPIN richt zich in eerste instantie op het vergelijken van verkeerspatronen van apparaten met het gedrag dat de fabrikant specificeert. Pogingen tot standaardisatie, zoals de [Manufacturer Usage Description (MUD)](https://tools.ietf.org/html/draft-ietf-opsawg-mud), stellen fabrikanten in staat om te specificeren wat een apparaat mag doen. SPIN’s omgekeerde firewall gaat MUD-specificaties gebruiken om apparaten op te sporen die zich niet volgens de specificaties gedragen, om zo bijvoorbeeld geïnfecteerde apparaten te identificeren en blokkeren. Met deze aanpak kunnen we ook de toepassing van nieuwe IoT-veiligheidsstandaarden stimuleren, zoals de ontwerpstandaard MUD.

#### Andere toepassingen
Behalve dat we SPIN beschikbaar stellen als referentieplatform voor IoT-securitysystemen thuis, gaan we het ook inzetten als instrument bij securityonderzoek. Bijvoorbeeld door gebruikers in staat te stellen apparaatprofielen te maken en te delen met de SPIN gemeenschap. 




