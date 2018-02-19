+++
title = "3. Operating SPIN"
description = "How to operate SPIN"
weight = 3
alwaysopen = false
chapter = true
+++

### Chapter 3

# Using SPIN

{{<mermaid>}}
graph TB;
    A(WebGUI) -->|websocket| B[MQTT server]
    A(WebGUI) -->|HTTP| C(Web server)
    B --> D{SPIN Agent}
    C --> D{SPIN Agent}
    D -->|WAN| E((Internet))
    D -->|LAN| F[IoT Device]
{{< /mermaid >}}

