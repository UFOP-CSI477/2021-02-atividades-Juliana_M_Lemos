# **CSI606-2021-02 - Exame Especial - Sistema de votação nas assembléias do DECSI**

## Atualize os seus dados

- Nome: Juliana Mara Lemos
- Matrícula: 18.1.8117
- Curso: Sistemas de Informação
- Semestre/Ano correntes: 2021-02
- Link para o seu GitHub: https://github.com/julianamlemos

## 1 - Teoria

### a) Apresente os fatores que podem influenciar no desempenho de uma aplicação web, abordando questões como largura de banda, minificação, compactação dentre outros.

*minificar um arquivo é remover tudo o que não é necessário, como espaços em branco, comentários no código, reduzir nomes de variáveis e funções, etc. Isso reduz sensivelmente o tamanho do arquivo. Fica um código ilegível para um humano, mas bem legível pelo browser

### b) Descreva os componentes, bem como o processo de requisição e de resposta a uma solicitação em uma aplicação web

As aplicações Web funcionam sob a arquitetura Cliente-Servidor, onde o processamento das requisições é realizado por dois “lados” o Servidor (Server side) e Cliente (Client side). Quando o usuário (cliente), acessa à uma página específica através de um navegador, o servidor faz o processamento da requisição e envia a requisição processada para o cliente como arquivos em diferentes formatos, por exemplo, HTML ou CSS. Possuindo basicamente dois programas a serem executados:
- O código que está no servidor e responde às requisições HTTP (HyperText Transfer Protocol) - principal protocolo de comunicação na internet;
- O código (interpretado pelo navegador) que está no cliente, e responde às entradas dos usuários.

### c) Apresente os conceitos sobre CSS Flexible Box Layout e como eles auxiliam na construção de páginas responsivas

Este conceito do CSS3 tem por objetivo organizar de forma dinâmica os elementos de uma página HTML que estejam dentro de containers, permitindo que independente das suas dimenões, esses elementos sejam reorganizados de acordo com o dispositivo utilizado para sua visualização, mantendo-se sempre flexíveis.
O Flexbox possui dois conceitos principais: Eixos Flex (Flex Axis) e Linhas Flex (Flex Lines), que são os eixos responsáveis por determinar as direções dos itens contidos em um container flex.
#### Eixo principal:
Eixo da linha do Flexbox onde os itens serão alocados, definido por padrão como horizontal, mas que pode ser alterado através da propriedade flex-direction.
#### Eixo Transversal:
É perpendicular ao principal, ou seja, vai depender da direção do principal.
#### Início principal e Fim principal:
São as bases de início e fim para os itens do container.
#### Início Transversal e Início Transversal:
São o início e fim das linhas transversais adicionadas ao container.
#### Tamanho principal e tamanho transversal:
O tamanho principal é a largura do container principal, podendo ser a altura caso a direção for alterada. No tamanho transversal temos a altura do container transversal e se a direção for mudada, será a largura.
#### Flex container:
É o elemento principal, que envolve todos os itens de uma estrutura flex.
#### Flex item:
É o elemento-filho do Flex container e podemos ter quantos forem necessários.
