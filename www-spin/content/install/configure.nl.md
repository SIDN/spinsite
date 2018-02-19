+++
title = "2.3 Configuratie"
description = "Configureren van SPIN"
weight = 23
chapter = false
slug = "config"
+++

Nadat SPIN succesvol is [geïnstalleerd]({{< relref "/install/_index.md" >}}) zijn er nog enkele stappen nodig om ermee aan de slag te kunnen gaan.


#### Eerste keer opstarten

De eerste keer dat de ValiBox wordt gestart, kan het enkele minuten duren voordat het apparaat gereed is.

1. Op een gegeven moment zou u een nieuw WiFi-netwerk moeten zien genaamd 'SIDN-Valibox-(code)'. De code moet overeenkomen met de laatste 3 letters van het MAC-adres dat op de onderkant van de ValiBox is afgedrukt. Maak verbinding met dit netwerk.
1. Open een browser en ga naar http://valibox.

Je zou de volgende pagina moeten krijgen:

![SPINarch](/images/screenshot_setpass.png?width=40pc&classes=shadow "SPIN start")

Als u een foutmelding '502 Bad Gateway' krijgt, moet u mogelijk iets langer wachten tot het apparaat klaar is met opstarten.

Op dit scherm kun je 3 dingen instellen:

1. Een nieuwe naam voor het draadloze netwerk
1. Een wachtwoord voor het draadloze netwerk
1. Een wachtwoord om de machine te beheren

Zodra dit is gebeurd, wordt de ValiBox opnieuw opgestart en bent u klaar om te beginnen! :smile:

#### Uitgbreide configuratie
Als u een speciale configuratie wilt, gaat u naar http://valibox. en klik op 'configuration'. U krijgt het OpenWRT-configuratiescherm te zien ([LuCI](https://wiki.openwrt.org/doc/techref/luci#what_is_luci)). De loginnaam daar is 'root' en het wachtwoord is het wachtwoord dat u bij het eerste gebruik hebt ingesteld.

Er is een tabblad daar met ValiBox-specifieke instellingen. Alle andere pagina's zijn er de standaard OpenWRT / LuCI-configuratiepagina's.
