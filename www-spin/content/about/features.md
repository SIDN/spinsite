+++
title = "1.3 Features"
description = "Features"
weight = 13
chapter = false
slug = "features"
+++

![SPINarch](/images/SPIN_Concept.png?width=40pc&classes=border "SPIN concept")

#### Reverse firewall
To protect the internet from IoT-powered DDoS attacks, SPIN introduces the concept of a reverse firewall, which blocks outgoing connections from IoT devices to the internet if they exhibit DDoS-like behaviour. SPIN does that by measuring and analysing the headers of all traffic flows and blocking the flows that it considers undesirable or harmful. In addition to blocking potential DDoS traffic, the reverse firewall also protects users, for instance against IoT devices quietly sending personally identifiable information to services on the internet. The reverse firewall therefore protects both the internet and end-users against insecure IoT devices.

#### Visualization
SPIN also [visualises](https://youtu.be/jynMCQ1fyvM) traffic flows so that the user can see what is happening on the network.

#### Anomaly detection
Anomaly detection by SPIN will initially focus on checking traffic patterns against the behaviour that device manufacturers specify. There are standardisation efforts, such as [Manufacturer Usage Description (MUD)](https://tools.ietf.org/html/draft-ietf-opsawg-mud), that allow manufacturers to specify what a device is allowed to do. SPIN’s reverse firewall will use MUD specifications to detect devices that are not behaving according to the specifications, with a view to identifying and blocking infected devices, for example. The approach will also enable us to push the deployment of new IoT security standards, such as the MUD draft.

#### Other usages
In addition to making SPIN available as a reference platform for in-home IoT security systems, it is also used SPIN as a vehicle for security research, for instance by allowing users to make and share device profiles with the SPIN community.


