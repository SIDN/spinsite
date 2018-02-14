+++
title = "2.1.2 GL-Inet devices"
description = "Installation guide for GL-Inet devices"
weight = 212
chapter = false
slug = "glinet"
+++

#### Replace GL-iNet factory firmware

The [aforementioned]({{< relref "/install/firmware/requirements.md" >}}) devices are shipped with standard factory firmware. With the steps below this standard firmware can be easily overwritten with SPIN firmware.
Once the SPIN firmware is present it can easily kept up to date via the SPIN interface. See the [configuration]({{< relref "/install/configure.md" >}}) section for further information about this.

There are two methods for overwriting the factory software:

1. [Standard method]({{< relref "#standard-method" >}})
1. [Alternative method]({{< relref "#alternative-method" >}})

#### Standard method

Make sure you have a [SPIN firmware image]({{< relref "/install/firmware/_index.md" >}})  available before you begin.

1. Connect a GL-inet to a computer or laptop
1. Open a browser window and enter the URL http://192.168.8.1
1. On the left-side menu, click 'Upload Firmware'
1. Then click 'Upload Firmware' in the upper right
1. Select the firmware image file from your local disk

{{% notice warning %}}
Important! Disable the 'keep settings' checkbox!
{{% /notice %}}

![SPINarch](/images/screenshot_glinet_upload_firmware.png?width=30pc&classes=shadow "GL-inet upload firmware")

When the image has been verified, the SPIN software will be installed. This can take a number of minutes.

#### Alternative method

Most devices have a second way of updating; the 'boot override method'. This is worth a shot if the device does not start normally or you cannot access the administrator panels anymore.

This is the method for the [GL-inet AR-150](https://www.gl-inet.com/ar150/) model. For other models, the process may differ. More information can be found at the [GL-inet documetation](http://www.gl-inet.com/docs/) site.

1. Make sure the GL-inet is powered off
1. Connect a UTP cable from your computer to the WAN port of the GL-inet
1. While holding the reset button, power on the device. Keep holding the reset button for 5 seconds.
1. Configure your computer to have the IP address 192.168.1.2
1. Open a browser and go to http://192.168.1.1
1. Upload the image file to install the SPIN software

![SPINarch](/images/screenshot_glinet_boot_firmware.png?width=30pc&classes=shadow "GL-inet boot override firmware")




