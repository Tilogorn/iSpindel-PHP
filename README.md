# iSpindel-PHP

Ein einfacher PHP-Webserver, der die Daten der iSpindel mit einem Timestamp in einer CSV-Datei speichert
Ruft man die Installation über einen Browser auf, erhält man einen einfachen Plot Zeit über °Plato.

## Beispielhafte Webserver-Installation

Beispielhafte Einrichtung unter Linux Mint mit Apache2.
Nicht für den Betrieb im Internet abgesichert, vereinfacht für den Betrieb im LAN.

### Webserver installieren

Installieren der Pakete, setzen der notwendigen Benutzerrechte für einfache Handhabung.

$ sudo apt install apache2 php libapache2-mod-php
$ sudo usermod -a -G www-data $USER
$ sudo chown -R root:www-data /var/www/html/
$ sudo chmod 775 /var/www/html/

Nach dem Hinzufügen des Users zu einer Gruppe muss sich dieser einmalig ab- und wieder anmelden.

### Repository einrichten

Es bietet sich an, für das Cloning einen passenden Zielordner-Namen zu wählen, da dieser in der hier angewendeten Methode Bestandteil der URL sein wird.

$ cd /var/www/html/
$ git clone git@github.com:Tilogorn/iSpindel-PHP.git ispindel-php

### Rechte für CSV setzen

Der Apache-User "www-data" benötigt schreibenden Zugriff auf die db.csv
$ cd ispindel-php/
$ chown $USER:www-data db.csv
$ chmod 775 db.csv

## iSpindel einrichten

Die iSpindel muss auf den eben eingerichteten Webserver und ggf. das Unterverzeichnis zeigen 
(im obigen Beispiel wurde das Repository im Apache-Unterverzeichnis "ispindel-php" installiert).

Um die iSpindel konfigurieren zu können, muss sie eingeschaltet werden. Danach muss der Reset-Knopf am Wemos 4x schnell gedrückt werden. Jetzt kann man sich mit dem WLAN "iSpindel" verbinden.

Die Unterseite "Configuration" muss (abhängig der Webserver-Konfiguration) in etwa so aussehen:

[SCREENSHOT]
