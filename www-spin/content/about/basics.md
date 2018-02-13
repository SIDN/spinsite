+++
title = "1.2 Basics of SPIN"
description = "SPIN basics"
weight = 12
chapter = false
+++

#### SPIN system
To address the two threats mentioned in the [previous paragraph]({{< relref "/about/problem.md" >}}), we developed the SPIN (Security and Privacy for In-home Networks) system. 

To protect the internet from IoT-powered DDoS attacks, SPIN introduces the concept of a reverse firewall, which analyses traffic flows from IoT devices to the internet and blocks them if they exhibit suspicious, divergent behaviour. 

In addition to blocking potential DDoS traffic, the reverse firewall also protects users, for instance against IoT devices quietly sending personally identifiable information to services on the internet. The reverse firewall therefore protects both the internet and end-users against insecure IoT devices.

SPIN also visualises traffic flows so that the user can see what is happening on the network.

We released the SPIN software as open source based on [OpenWRT](https://openwrt.org/ "OpenWRT website"), so that anyone with the proper set of skills can compile and install it. We also publish our results so the community can benefit from our experiences.

#### Overview

![SPINarch](/images/SPIN_Architecture.png?width=40pc&classes=shadow "SPIN architecture")

The figure above is an overview of the architecture of a SPIN-based system, featuring two distinct component groups: lightweight SPIN agents that measure network traffic and more intelligent controllers. The separation is new and enables us to use the system for a larger set of deployment scenarios.

An agent captures traffic flows, generates flow digests, and can block traffic flows. A controller receives digests from one or more agents, analyses them, and can order the agents to block the traffic flows from certain IoT devices. For example, a controller may detect that a device is generating traffic flows that match the Mirai botnet; the controller then orders the appropriate agent to quarantine (block) the infected device. 

Controllers and agents may be hosted on the same device, but our new design also supports deployment scenarios with several agents and one or a few controllers elsewhere in the network. For example, there may be a separate Wi-Fi hotspot on each floor of a house, each with its own agent and all governed by a central controller that runs on a general-purpose, always-on device such as a network-attached storage (NAS) device.

The SPIN platform can be extended with application components that can be implemented by (commercial) organisations, the SPIN community, or by the research community.

A well-defined API provides application developers with necessary of the home network and its IoT devices so developers don’t have to deal with the particularities of low-level measurements. 