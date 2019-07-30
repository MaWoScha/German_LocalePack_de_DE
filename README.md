# Deutsches Sprachpaket für Magento (CE)
(Magento Community Modules - German (Germany) Language Pack)<br />
(Módulo de Comunidad Magento - Paquete de idioma alemán)

Dieses Sprachpaket wird von MaWoScha verwaltet.<br />
This language package is managed by MaWoScha.<br />
Este paquete de idioma está gestionado por MaWoScha.

## Neu!

Ab der Version 0.5.0 der Erweiterung [German_LocaleFallback](https://github.com/MaWoScha/German_LocaleFallback) können Sie kundenspezifische Sprachpakete unter der locale [de_ZZ](https://github.com/MaWoScha/German_LocalePack_de_ZZ) ablegen. Dort können Sie einzelne kundenspezifische Übersetzungen einpflegen, welche die Einträge dieses Sprachpaketes überschreiben.
Das Sprachpaket [German LocalePack de_DE_DU](https://github.com/MaWoScha/German_LocalePack_de_DE_DU) (Informelle Du-Form) funktioniert nach diesem Prinzip.

# Git-Verwaltung / Administration of Git / Gestión de Git

Dieses Git-Repository kann genutzt werden für:

* Reine Informationszwecke
* Entwicklung aktueller Versionen
* Behebung von Fehlern in bereits veröffentlichten Versionen
* Alternative Downloads (unabhängig von den offiziellen Quellen)
* Eigene Sprachversion basierend auf de_DE
* Melden von Fehlern und PullRequests
* Aktives Mitwirken am Sprachpaket

## Melden von Fehlern / Reporting bugs / Cómo informar de problemas

Wir freuen uns, wenn dieses Repository aktiv dazu genutzt, wird Fehler zu melden (Issue) und zu beheben (PullRequest im _preview_-Branch).

Oben dann einfach auf "Issues" klicken -> "New Issue", um ein Anliegen zu übermitteln. Bestehende Anliegen hingegen können auch ohne GitHub-Account eingesehen werden, inklusive deren Bearbeitungsstand.

_Beachten Sie dazu bitte:_ Wenn hier in den Versionen Veränderungen eingepflegt werden, dann entsprechen diese nicht mehr dem Stand des Sprachpakets, welches Sie über Magento Connect installieren können. Es ist leider nicht möglich dort veröffentlichte Releases nachträglich zu bearbeiten. :-)

_Hinweis:_ PullRequests sind bitte immer im Preview-Branch zu senden.

## Aktives Mitwirken am Sprachpaket / Participate actively in Language Pack / Participar activamente en el paquete de idioma

Lust am Sprachpaket mitzuwirken und einen (zumindest kostenlosen) Github- und/oder Crowdin.net-Account? Dann einfach MaWoScha kontaktieren und wir stimmen eine eventuelle Zusammenarbeit ab.

Viel Spaß mit dem deutschen Magento Sprachpaket! / Enjoy the German Language Pack! / ¡Disfrute el paquete de idioma alemán!

MaWoScha


# Hinweise / Hints / Avisos

This is a derived work of [German LocalePack de_DE](https://github.com/riconeitzel/German_LocalePack_de_DE) of [Rico Neitzel](https://github.com/riconeitzel/),<br />
refactured and internationalized by MaWoScha.

This extension is tested with Magento 1.6.2, 1.7.0, 1.8.1, 1.9.0 and 1.9.1. <br />
The language pack is suitable for Magento 1.6.x to 1.9.3.10


Dies ist eine abgeleitete Arbeit von [German LocalePack de_DE](https://github.com/riconeitzel/German_LocalePack_de_DE) von [Rico Neitzel](https://github.com/riconeitzel/),<br />
überarbeitet und internationalisiert von MaWoScha.

Diese Erweiterung ist mit Magento 1.6.2, 1.7.0, 1.8.1, 1.9.0 und 1.9.1 getestet. <br />
Das Sprachpaket ist für Magento 1.6.x bis 1.9.3.10


Se trata de una obra derivada de [German LocalePack de_DE](https://github.com/riconeitzel/German_LocalePack_de_DE) de [Rico Neitzel](https://github.com/riconeitzel/),<br />
revisado e internacionalizado de MaWoScha.

Esta extensión se prueba con Magento 1.6.2, 1.7.0, 1.8.1, 1.9.0 y 1.9.1. <br />
El paquete de idioma es adecuado para Magento 1.6.x hasta 1.9.3.10


## Installationshinweise / Installation instructions / Instrucciones de instalación

In Magento v1.9.0.x lieferte der Hersteller bereits eine Übersetzung mit. Diese Übersetzung ist jedoch vollautomatisch erstellt worden und **hat mit diesem Projekt hier nichts zu tun.** Seit Magento 1.9.1.0 ist dies nicht mehr der Fall.

Leider lässt sich dadurch unser Sprachpaket nicht ohne Weiteres installieren. Es sind daher folgende Schritte auszuführen, bevor dieses Sprachpaket per Magento Connect installiert werden kann:

- Im Magento-Hauptverzeichnis in den Ordner **/app/locale/* wechseln
- Dort den Ordner **de_DE** umbenennen in **magento_de_DE**
- Anschließend dieses Sprachpaket installieren.

Bitte auch beachten: Die Deinstallation der Herstellerübersetzung über den Magento Connect Manager funktioniert nicht, da das Magento Hauptpaket dieses Sprachpaket als Voraussetzung definiert hat. Das manuelle Löschen auf dem Server funktioniert jedoch problemlos.


In Magento v1.9.0.x the manufacturer has already supplied with a translation. This translation has, however, created fully automatically and **has nothing to do with this project.** Since Magento 1.9.1.0, this is no longer the case.

Unfortunately, it is thus not easily install our language pack. There are, therefore, perform the following steps before this language pack can be installed via Magento Connect:

- Change In Magento root folder in the folder **/app/locale/*
- There the folder **de_DE** is to be renamed into **magento_de_DE**
- Then install this language pack.

Please also note: Uninstalling the manufacturer translation via Magento Connect Manager does not work because the Magento main package has defined this language pack as a prerequisite. Manual deletion on the server works however without any problems.


En Magento v1.9.0.x el fabricante ya ha suministrado con una traducción. Esta traducción ha, sin embargo, creado de forma totalmente automática y **no tiene nada que ver con este proyecto.** Desde Magento 1.9.1.0, esto ya no es el caso.

Por desgracia, es por lo tanto no instalar fácilmente nuestro paquete de idioma. Hay, por lo tanto, realice los pasos siguientes antes de este paquete de idioma se puede instalar a través de Magento conexion:

- Cambio en la carpeta raíz de Magento en la carpeta **/app/locale/*
- Ahora la carpeta **de_DE** hay que renombrar a **magento_de_DE**
- A continuación, instale este paquete de idioma.

Tenga en cuenta también: Desinstalar la traducción fabricante a través de Magento Connect Manager no funcionará porque el paquete principal de Magento ha definido este paquete de idioma como requisito previo. La eliminación manual en el servidor funciona sin embargo, sin ningún problema.


# Siehe auch / See also / Véase también
* [German LocalePack de_AT](https://github.com/MaWoScha/German_LocalePack_de_AT)
* [German LocalePack de_CH](https://github.com/MaWoScha/German_LocalePack_de_CH)
* [German LocalePack de_DE_DU](https://github.com/MaWoScha/German_LocalePack_de_DE_DU) (Informelle Du-Form)
