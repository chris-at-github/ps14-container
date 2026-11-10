# Ps14 Container

Container-Inhaltselemente mit zwei und drei Spalten auf Basis von
[b13/container](https://github.com/b13/container) für TYPO3 v14.

## Inhaltselemente

| CType | Spalten (colPos) | Aufteilungen |
|---|---|---|
| `ps14_container_2_column` | 4001, 4002 | 50-50, 33-66, 66-33, 25-75, 75-25 |
| `ps14_container_3_column` | 4001, 4002, 4003 | 33-33-33, 25-50-25, 50-25-25, 25-25-50 |

Die Aufteilung wird im FlexForm (`ratio`) gewählt und im Frontend als
Modifier `columns--<aufteilung>` ausgegeben.

## Installation

1. `composer require ps14/ps14_container`
2. Setup der Extension in
   `ps14_site/Configuration/TypoScript/Extensions/Ps14Container.setup.typoscript`
   einbinden:
   `@import 'EXT:ps14_container/Configuration/TypoScript/setup.typoscript'`
3. Styles für den BEM-Block `columns` im Sitepackage anlegen.

## Anpassungen

- Templates: `ContainerTwoColumn.html` bzw. `ContainerThreeColumn.html` unter
  `ps14_site/Resources/Private/Templates/Content/` überschreiben die
  Templates der Extension.
- Aufteilungen pro Projekt per Page-TSconfig anpassen (in
  `ps14_site/Configuration/page.tsconfig`). Der Schlüssel unter `pi_flexform`
  ist der CType, weil das FlexForm per `columnsOverrides` zugewiesen wird:

  ```typoscript
  TCEFORM.tt_content.pi_flexform.ps14_container_2_column.main.ratio {
    removeItems = 25-75, 75-25
    addItems.20-80 = 20 % / 80 %
    altLabels.50-50 = Gleich breit
  }
  ```

  Für neue Werte die Modifier-Klasse `columns--<wert>` im SCSS ergänzen.
