# Starter WordPress

## Sumário

- [Instalação](#Instalação)
- [Hierarquia de pastas](#Hierarquia-de-pastas)
- [Estrutura de pastas](#Estrutura-de-pastas)

### Instalação

Antes de instalar as dependências, verifique e instale a versão do node descrita no arquivo [package.json](/package.json#L10) (recomendado usar NVM) e após isso rodar `npm install` na raíz do tema.

### Hierarquia de pastas

- /assets
  - /css
  - /fonts
  - /img
  - /js
- /includes
  - /api
  - /functions
  - /template-parts
    - /modules
      - /sections
    - /layouts
- /src
  - /js
    - /modules
    - /services
    - /utils
  - /scss
    - /base
      - /_animations
      - /_fonts
      - /_helpers
      - /_variables
      - /_vendor
    - /modules
    - /layout
    - /vendor
- .gitignore
- 404.php
- footer.php
- functions.php
- gulpfile.php
- header.php
- index.php
- package.json
- README.md
- style.css

### Estrutura de pastas

#### /assets

Arquivos finais e compilados.

#### /includes

Includes

##### /includes/api

Endpoints customizados

##### /includes/functions

Funções do site

##### /includes/template-parts

Partes reutilizáveis do site

###### /includes/template-parts/modules

Módulos que são usados em diferentes partes do site.

###### /includes/template-parts/layouts

Partes do site

#### /src

Arquivos fontes

##### /src/js

Scripts

##### /src/scss

Arquivos Sass
