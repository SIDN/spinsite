+++
title = "2.3 Configuration"
description = "Configuration of SPIN"
weight = 23
chapter = false
slug = "config"
+++

After you have successfully [installed]({{< relref "/install/_index.md" >}}) SPIN a few more steps are required to get in business.


#### Initial boot

The first time you start the Valibox, it may take a few minutes while the device is getting settled.

1. At some point you should see a new WiFi network called 'SIDN-Valibox-(code)'. The code should match the last 3 letters of the MAC address printed on the bottom of the Valibox. Connect to this network.
1. Open a browser and go to http://valibox.

You should get the following page:

![SPINarch](/images/screenshot_setpass.png?width=40pc&classes=shadow "SPIN start")

If you get an error '502 Bad Gateway' you may need to wait a little bit longer until the device has finished starting up.

On this screen you can set up 3 things:

1. A new name for the wireless network
1. A password for the wireless network
1. A password to administer the machine

Once this is done, the Valibox will reboot and you are ready to go! :smile:

#### Advanced configuration
If you want to have any special configuration, browse to http://valibox. and click 'configuration'. You will be presented with the OpenWRT configuration screen ([LuCI](https://wiki.openwrt.org/doc/techref/luci#what_is_luci)). The login name there is 'root' and the password is the password you have set on first use.

There is a tab there with ValiBox-specific settings. All other pages there are the standard OpenWRT / LuCI configuration pages.
