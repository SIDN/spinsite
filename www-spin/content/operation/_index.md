+++
title = "3. Operating SPIN"
description = "How to operate SPIN"
weight = 3
alwaysopen = false
chapter = true
+++

### Chapter 3

# Using SPIN

![spinwebgui](/images/spin-gui.png?width=40pc&classes=shadow "SPIN webgui")

{{<mermaid>}}
graph TB;
    A(WebGUI) -->|websocket| B[MQTT server]
    A(WebGUI) -->|HTTP| B(Web server)
    B --> C{SPIN Agent}
    C -->|WAN| D((Internet))
    C -->|LAN| E[IoT Device]
{{< /mermaid >}}

