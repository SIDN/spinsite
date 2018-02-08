+++
title = "blah"
description = "Dit is ons tweedeniveau testgebied"
date = "2018-01-19"
author = "Marco"
disableToc = "false"
draft = true
+++

Werk in uitvoering - kom aub later terug!

{{% button href="https://getgrav.org/" %}}Verkrijg Grav{{% /button %}}
{{% button href="https://getgrav.org/" icon="fa fa-download" %}}Verkrijg Grav met icoon{{% /button %}}
{{% button href="https://getgrav.org/" icon="fa fa-download" icon-position="right"%}}Verkrijg Grav met icoon rechts{{% /button %}}

{{% children description="true" %}}

| Option | Description |
| ------ | ----------- |
| data   | path to data files to supply the data that will be passed into templates. |
| engine | engine to be used for processing templates. Handlebars is the default. |
| ext    | extension to be used for dest files. |

{{<mermaid>}}
sequenceDiagram
    participant Alice
    participant Bob
    Alice->>John: Hello John, how are you?
    loop Healthcheck
        John->John: Fight against hypochondria
    end
    Note right of John: Rational thoughts <br/>prevail...
    John-->Alice: Great!
    John->Bob: How about you?
    Bob-->John: Jolly good!
{{< /mermaid >}}

### GANNT

{{<mermaid>}}
gantt
        dateFormat  YYYY-MM-DD
        title Adding GANTT diagram functionality to mermaid
        section A section
        Completed task            :done,    des1, 2014-01-06,2014-01-08
        Active task               :active,  des2, 2014-01-09, 3d
        Future task               :         des3, after des2, 5d
        Future task2               :         des4, after des3, 5d
        section Critical tasks
        Completed task in the critical line :crit, done, 2014-01-06,24h
        Implement parser and jison          :crit, done, after des1, 2d
        Create tests for parser             :crit, active, 3d
        Future task in critical line        :crit, 5d
        Create tests for renderer           :2d
        Add to mermaid                      :1d
{{< /mermaid >}}
