+++
title = "3. SPIN gebruiken"
description = "Hoe SPIN te gebruiken"
weight = 3
alwaysopen = false
chapter = true
+++

### Hoofdstuk 3

# SPIN gebruiken

![spinwebgui](/images/spin-gui.png?width=40pc&classes=shadow "SPIN webgui")

{{<mermaid>}}
graph TB;
    A(WebGUI) -->|websocket| B[MQTT server]
    A(WebGUI) -->|HTTP| B(Web server)
    B --> C{SPIN Agent}
    C -->|WAN| D((Internet))
    C -->|LAN| E[IoT Device]
{{< /mermaid >}}
