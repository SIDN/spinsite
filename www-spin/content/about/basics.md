+++
title = "1.2 Basics of SPIN"
description = "SPIN basics"
weight = 12
chapter = false
+++

## SPIN system
To address the two threats mentioned in the [previous paragraph]({{< relref "/about/problem.md" >}}), we developed the SPIN (Security and Privacy for In-home Networks) system. 

To protect the internet from IoT-powered DDoS attacks, SPIN introduces the concept of a reverse firewall, which analyses traffic flows from IoT devices to the internet and blocks them if they exhibit suspicious, divergent behaviour. 

In addition to blocking potential DDoS traffic, the reverse firewall also protects users, for instance against IoT devices quietly sending personally identifiable information to services on the internet. The reverse firewall therefore protects both the internet and end-users against insecure IoT devices.

SPIN also visualises traffic flows so that the user can see what is happening on the network.

We released the SPIN software as open source based on [OpenWRT <i class='fa fa-link'></i>](https://openwrt.org/ "OpenWRT website"), so that anyone with the proper set of skills can compile and install it. We also publish our results so the community can benefit from our experiences.

![SPINarch](/images/SPIN_Architecture.png?width=40pc&classes=shadow "SPIN architecture")