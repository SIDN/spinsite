+++
title = "3.4 Troubleshooting"
description = "Troubleshooting SPIN"
weight = 34
chapter = false
slug = "debug"
+++

### Operational problems
If something during the operation goes wrong, one of the following solutions might help.

* [Autoupgrade failed]({{< relref "#autoupgrade-to-latest-release-fails" >}})

#### Autoupgrade to latest release fails
If the automatic installation via the web gui fails, the following can be done:

`ssh 192.168.8.1 -l root` (only support for hmac-sha1 and hmac-md5)

    cd /www/autonta

    ./update_system.lua -b -k -d -i -w

(but first without -i and for example with -c. Also -h has some interesting options, like -o)

If this fails, try using a 'wget' of the correct .bin image to / tmp (matching the hardware used) and a `sysupgrade` (standard [OpenWRT-command](https://wiki.openwrt.org/doc/techref/sysupgrade)).

For example:

    sysupgrade -c ./sidn_valibox_gl-ar150_beta-2017-07-05-1537.bin

* -c means: attempt to preserve all changed files in /etc/
* -n means: complete reflash
* without options is: 'retaine some things' (TODO: which?)

##### Recovery
Finally, there is the 'recovery' option, depending on the type of device.

In het geval van de GL-iNet kun je bij het aanzetten (dus zodra hij stroom heeft) de resetknop ingedrukt houden. Nadat de rode LED 5 keer heeft geknipperd laat je reset los, en het apparaat boot in [recovery-mode](https://gl-inet.com/docs/mini/firmware/#using-the-reset-button-to-revert), met een fixed ip 192.168.1.1 op de WAN-poort. Plug daar een laptop aan met een ander IP uit 192.168.1.0/24, en je kunt via een browser een volledig nieuwe image uploaden.

In the case of a GL-iNet, you can press and hold the reset button when switching on (ie as soon as it has power). After the red LED has blinked 5 times, release the reset, and boot the device in [recovery mode] (https://gl-inet.com/docs/mini/firmware/#using-the-reset-button-to-revert), with a fixed IP address 192.168.1.1 on the WAN port. Plug in a laptop with a different IP addresss from 192.168.1.0/24, and you can upload a completely new image via a browser.