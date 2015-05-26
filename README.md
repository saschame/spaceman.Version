# Spaceman Version plugin for Craft

Liest ein Text File (`version.txt`) ein und gibt den Inhalt (`1.0`) als Cache-Buster aus:

```
# Inhalt version.txt
1.0.1

# Ausgabe
?v=1.0.1
```

`version.txt` befindet sich bei uns hier `pubilc/version.txt`

## Installation
Schiebe den Ordner `spmversion/` nach `craft/plugins/`.

Dann gehe zu `plugins` und installiere das Plugin.

## Twig
Der Aufruf in Twig sieht so aus:

```twig
{{ craft.spmversion.cacheBuster }}
```


Für ein JavaScript File:

```twig
<script src="/a/j/script.js{{ craft.spmversion.printVersion }}"></script>
```



Soll Nur die Version ausgegeben werden:

```twig
{{ craft.spmversion.printVersion }}
```


## Changelog

### 1.0

* Initial release