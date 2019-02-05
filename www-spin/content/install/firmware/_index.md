+++
title = "2.1 Use the pre-build firmware"
description = "Installation of SPIN via firmware images"
weight = 21
chapter = false
slug = "firmwareimage"
+++

{{% notice tip %}}
This method is the recommended one for novice users.
{{% /notice %}}

#### ValiBox with SPIN
SPIN can be run on top of an earlier SIDN Labs project called [ValiBox](https://valibox.sidnlabs.nl), a home router with DNSSEC validation functionality. Firmware images are available for certain supported [GL-iNet](https://www.gl-inet.com/) devices. They extend the [ValiBox router with SPIN functionality]({{< relref "/about/faq.md#how-does-spin-relate-to-the-valibox" >}}). In the [requirements section]({{< relref "/install/firmware/requirements.md" >}}) you can find further details about which hardware is supported.

#### Turris Omnia
SPIN can also be installed on a [Turris Omnia](https://omnia.turris.cz/en/), thus extending the Turris router with SPIN functionality (but not the ValiBox DNSSEC validating resolver).

| <i class="fa fa-exclamation-triangle"></i> Please note: |
| :-----: |
| Turris firmware images are running in our lab environment only and are **not** currently publicly available. This is work in progress.

#### Raspberry Pi
SPIN can also be installed on a [Raspberry Pi 3](https://www.raspberrypi.org/), thus extending it with SPIN functionality.

You can [download the firmware here](https://valibox.sidnlabs.nl/pages/download.html).

| <i class="fa fa-exclamation-triangle"></i> Please note: |
| :-----: |
| **Beta !** The Raspberry PI 3 images are beta-versions only, we are currently testing them.).

#### VirtualBox
SPIN can also be installed on as VM on [VirtualBox](https://www.virtualbox.org/), making it easy to quickly explore the inner workings.

You can [download them here](https://valibox.sidnlabs.nl/pages/download.html).

| <i class="fa fa-exclamation-triangle"></i> Please note: |
| :-----: |
| **Beta !** The VirtualBox images are beta-versions only, we are currently testing them.).

#### Firmware image downloads

The firmware itself can be downloaded from the [beta section](https://valibox.sidnlabs.nl/downloads/valibox/beta/) of the [ValiBox](https://valibox.sidnlabs.nl) site. There are quite some previous versions available in this download directory. Select the latest version. Once you have it installed on a device, it will automatically upgrade itself via a web interface.


{{% notice info %}}
<i class="fa fa-flask"></i> Please be advised that SPIN is experimental software. Do not use it in production.
{{% /notice %}}