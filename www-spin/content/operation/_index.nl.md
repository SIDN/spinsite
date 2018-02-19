+++
title = "3. SPIN gebruiken"
description = "Hoe SPIN te gebruiken"
weight = 3
alwaysopen = false
chapter = true
+++

### Hoofdstuk 3

# SPIN gebruiken

{{<mermaid>}}
graph TB;
    A(WebGUI) -->|websocket| B[MQTT server]
    A(WebGUI) -->|HTTP| C(Web server)
    B --> D{SPIN Agent}
    C --> D{SPIN Agent}
    D -->|WAN| E((Internet))
    D -->|LAN| F[IoT apparaat]
{{< /mermaid >}}