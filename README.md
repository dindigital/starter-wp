# Din Starter WP

Tema base para projetos WordPress feitos na Din Digital.

## Sumário

- [O que o Starter WP possui?](#o-que-o-starter-wp-possui)
- [Instalação](#instalação)
  - [Instalação em novos projetos](#instalação-em-novos-projetos)
  - [Instalação em projetos existentes](#instalação-em-projetos-existentes)

### O que o Starter WP possui?

Biblioteca | Versão | Complementares
--- | --- | ---
Node.js | 16.13.2 | 
Gulp | 4.0.2 | gulp-autoprefixer (7.0.1), gulp-babel (8.0.0-beta.2), gulp-better-rollup (4.0.1), gulp-clean-css (4.2.0), gulp-concat (2.6.1), gulp-penthouse (0.2.0), gulp-postcss (8.0.0), gulp-sass (4.0.2), gulp-sourcemaps (2.6.5), gulp-uglify (3.0.2)
Babel | 7.7.2 |
jQuery | 3.4.1 | 
Normalize | 8.0.1 |
Prettier | 2.5.1 | @prettier/plugin-php (0.18.3)
ESLint | 8.10.0 | eslint-config-airbnb-base (15.0.0), eslint-config-prettier (8.5.0), eslint-plugin-import (2.25.4), eslint-plugin-prettier (4.0.0)
StyleLint | 13.13.1 | stylelint-config-wordpress (17.0.0)
Husky | 7.0.4 | 

### Instalação

#### Instalação em novos projetos

Para projetos novos, vá até a pasta `themes` e clone o tema, renomeie a pasta do tema, exclua a pasta .git original do tema e inicie um novo git no tema

```sh
$ git clone git@github.com:dindigital/starter-wp.git
$ mv starter-wp tema-XYZ
$ cd tema-XYZ
$ rm -rf .git
$ git init
```

Atualizar versão do Node para 16.13.2, com [NVM](https://github.com/nvm-sh/nvm), e rodar `npm install` para instalar as dependências.
 
#### Instalação em projetos existentes

Para projetos já existentes, o melhor a se fazer é instalar as libs de padronização, linters e tasks do Gulp para evitar conflitos com plugins e páginas.

##### Editor Config

Crie o arquivo `.editorconfig` com o [conteúdo do arquivo](https://github.com/dindigital/starter-wp/blob/master/.editorconfig).

##### ESLint

Crie o arquivo `.eslintrc.json` com o [conteúdo do arquivo](https://github.com/dindigital/starter-wp/blob/master/.eslintrc.json).
