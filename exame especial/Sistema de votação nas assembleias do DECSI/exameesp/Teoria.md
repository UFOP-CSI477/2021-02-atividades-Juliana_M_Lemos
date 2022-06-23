# **CSI606-2021-02 - Exame Especial - Sistema de votação nas assembléias do DECSI**

## Atualize os seus dados

- Nome: Juliana Mara Lemos
- Matrícula: 18.1.8117
- Curso: Sistemas de Informação
- Semestre/Ano correntes: 2021-02
- Link para o seu GitHub: https://github.com/julianamlemos

## 1 - Teoria

### a) Apresente os fatores que podem influenciar no desempenho de uma aplicação web, abordando questões como largura de banda, minificação, compactação dentre outros.

O carregamento (recursos estáticos carregados no servidor para o navegador) e a renderização (tempo que o navegador gasta, após o carregamento, para compilar, interpretar e dispor os elementos de forma visualemnte inteligível para o usuário) da página são onde os principais problemas de desempenho estão concentrados. Probelmas estes que ocasionam em uma experiência ruim para quem utiliza o sistema.

- A largura de banda determina a velocidade que os dados trafegam através de uma rede específica, portanto quanto maior a largura de banda, maior quantidade de dados suportados trafegando em um mesmo canal por mais tempo. Distribuir as ações do canal de forma mais balanceada pode garantir uma melhora no desempenho, bem como reduzir a carga, verificando quais elementos podem estar causando sobrecarga em um canal específico, afim de reduzir essa carga ou aumentar a capacidade da banda.
- Sendo mais indicado para conteúdos estáticos como imagens, vídeos e arquivos JavaScript e CSS, recurso de distribuição de conteúdo na rede é uma técnica que permite que os dados de determinada aplicação web estejam replicados em diversos seridores espalhados geograficamente permitindo que quando o usuário solicitar o conteúdo da aplicação, ele tenha a resposta do servidor mais próximo, reduzindo o intervalo de tempo do acesso a um conteúdo.
- Os arquivos de imagens podem afetar diretamente o desempenho de aplicações web, pois no porcesso cliente-servidor pode gerar uma alta taxa de downloads caso as imagens não estejam otimizadas. Para otimizá-las, existem vários processos de compressão de imagens que podem ser realizados antes de que as mesmas sejam enviadas ao servidor, com auxílio de softwares de edição, alterando a resolução e até o formato dessas imagens fazendo com que seu tamanho seja reduzido sem que elas percam qualidade visual.
- O tamanho do código-fonte de uma aplicação web influencia diretamente o seu desempenho, pois quando é muito grande, pode ocasionar em uma demora no tempo de resposta. Para reduzir esse problema, pode se usar a técnica de minificação consiste em reduzir o tamanho do código-fonte, removendo do código tudo o que não é necessário para o seu funcionamento, como comentários, espaços em branco, redução de nomes de variáveis e funções entre outros.
- Habilitar compressão de arquivos no servidor faz com que todo o conteúdo da página seja comprimido antes de enviar ao cliente, chegando a cortar quase metade do tráfego.
- Utilizar caching para ganhar desempenho também melhora o tempo de entrega ao usuário. Essa técnica consiste em receber as requisições dos clientes, verificar se a informação solicitada está em cache e caso esteja, a resposta é encaminhada ao cliente; caso contrário, o serviço solicita os dados ao servidor responsável, entrega ao cliente e estes dados são armazenados em cache para futuras solicitações.


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
