# Starter WordPress

## Sumário

- [Instalação](#Instalação)
- [Hierarquia de pastas](#Hierarquia-de-pastas)
- [Estrutura de pastas](#Estrutura-de-pastas)

### Instalação

Antes de instalar as dependências, verifique e instale a versão do node descrita no arquivo [package.json](/package.json#L10) (recomendado usar NVM) e após isso rodar `npm install` na raíz do tema.

### Hierarquia de pastas

```
- /assets (pasta de bundles)
  - /css (css buildado por página)
  - /fonts (arquivos de fontes e ícones)
  - /img (imagens estáticas do projeto)
  - /js (js buildado por página)
- /includes
  - /api (rotas de API personalizadas)
  - /functions (funções separadas por arquivo)
  - /services (conexões php externas)
- /src (estilos e scripts)
  - /js
  - /scss
- /template-parts
  - /modules
  - /sections
  - /layouts
- .gitignore
- 404.php
- footer.php
- functions.php (chamada dos arquivos criados em /includes/functions)
- gulpfile.php
- header.php
- index.php
- package.json
- README.md
- style.css (arquivo para documentação do tema)
```

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
