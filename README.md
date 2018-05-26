🐣 REDAXO-AddOn: cke5 - CKEDITOR5 für REDAXO
================================================================================
Integriert den [CKEDITOR5](https://ckeditor.com) in REDAXO

![Screenshot](https://raw.githubusercontent.com/FriendsOfREDAXO/cke5/assets/ck5.png)


## Features
- WYSIWYG-Editor
- Profil-Konfigurator, Profile können einfach zusammengeklickt werden
- Bildupload in den Medienpool per Drag & Drop ins Textfeld
- Bildupload-Kategorie je Profil einstellbar
- Mediamanager-Type je Profil einstellbar
- Linkmap-Support
- Medienpool-Support
- MBLOCK-Support

## Codebeispiele

### Verwendung allgemein

```php 
  <textarea name="content" id="editor" class="cke5-editor" data-profile="default" data-lang="de" name="REX_INPUT_VALUE[1]">REX_VALUE[1]</textarea>
```
Über weitere Data-Attribute können die Minimal- und Maximalhöhe sowie die Sprache gesteuert werden: 

- data-max-height
- data-min-height
- data-lang

### Verwendung in mform
```php
$mform = new MForm();
$mform->addTextAreaField(1, 
        array(
        'label'=>'Text',
        'class'=>'cke5-editor', 
        'data-lang'=>'de', 
        'data-profile'=>'default')
        );
echo $mform->show();
```

### Verwendunng mit Mblock

```php
$mform = new MForm();
$mform->addFieldset('Accordion');
$mform->addTextField("$id.0.titel", array('label'=>'Titel'));
$mform->addTextAreaField("$id.0.text", 
        array(
        'label'=>'Text',
        'class'=>'cke5-editor', 
        'data-lang'=>'de', 
        'data-profile'=>'default')
        );
echo MBlock::show($id, $mform->show());
```


## Bugtracker

Du hast einen Fehler gefunden oder ein nettes Feature parat? [Lege ein Issue an](https://github.com/FriendsOfREDAXO/cke5/issues). Bevor du ein neues Issue erstellst, suche bitte ob bereits eines mit deinem Anliegen existiert und lese die [Issue Guidelines (englisch)](https://github.com/necolas/issue-guidelines) von [Nicolas Gallagher](https://github.com/necolas/).


## Changelog

siehe [CHANGELOG.md](https://github.com/FriendsOfREDAXO/cke5/blob/master/CHANGELOG.md)

## Lizenzen

AddOn:[MIT LICENSE](https://github.com/FriendsOfREDAXO/cke5/blob/master/LICENSE)
CKEDITOR [GPL LICENSE](https://github.com/ckeditor/ckeditor5/blob/master/LICENSE.md)


## Autor

**Friends Of REDAXO**

* http://www.redaxo.org
* https://github.com/FriendsOfREDAXO

**Projekt-Lead**

[Joachim Dörr](https://github.com/joachimdoerr)


