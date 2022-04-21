<?php
// Syntax const v2.3.0 2021/05/15 @gigamaster XCL-PHP7
// ** XOOPS Cube Legacy - AltSys Module - Portuguese
// ** Por Mikhail Miguel <mikhail.miguel@gmail.com> - http://xoops.net.br/
// ** $Id: compilehookadmin.php 1040 2011-11-06 05:24:00Z mikhail $
// ** License http://creativecommons.org/licenses/by/2.5/br/

const _TPLSADMIN_CNF_DELETEOK = "Deseja remover?" ;
const _TPLSADMIN_CNF_ENCLOSEBYBORDEREDDIV = "Os caches dos modelos compilados serão abertos e fechados por códigos <q><code>DIV</code></q>. Confirma?" ;
const _TPLSADMIN_CNF_ENCLOSEBYCOMMENT = "Os caches dos modelos compilados serão delimitadas pelos comentários do tplsadmin. Você concorda com isso?" ;
const _TPLSADMIN_CNF_HOOKSAVEVARS = "Nas compilações dos caches dos modelos será implantada a lógica para coleta das variáveis do modelo. Você concorda com isso?" ;
const _TPLSADMIN_CNF_REMOVEHOOKS = "Você concorda com a normalização?" ;
const _TPLSADMIN_DD_ENCLOSEBYBORDEREDDIV = "Cada modelo será envolto por códigos <q><code>DIV</code></q> de bordas pretas. Um link para controle da edição do tplsadmin será inserido em cada um dos modelos. Embora isso muitas vezes cause a destruição do design, você pode editar cada modelo mais instintiva e facilmente." ;
const _TPLSADMIN_DD_ENCLOSEBYCOMMENT = "Dois comentários em HTML serão colocados nos pontos de começo e final de cada modelo. Uma vez que isso raramente quebra os design, isso é recomendado para profissionais que podem eles mesmos ler HTML" ;
const _TPLSADMIN_DD_GETTEMPLATES = "Selecione um conjunto antes de apertar cada botão." ;
const _TPLSADMIN_DD_GETTPLSVARSINFO_DW = "Primeiro , abra o Gerenciador de Extensões do Adobe DreamWeaver.<br />Extraia o arquivo descarregado.<br />Execute os arquivos com a extensão .mxi e você encontrará diálogos de instalação.<br />Os snippets para variáveis de modelo de seu site serão utilizáveis após reiniciar o Adobe DreamWeaver." ;
const _TPLSADMIN_DD_HOOKSAVEVARS = "O primeiro passo para obtenção das informações das variáveis de modelo em seu site. As informações das variáveis do modelo serão coletadas quando o lado público de seu site for exibido. Após os modelos que você deseja editar forem mostrados, obtenha as informações das variáveis do modelo através dos botões subjacentes." ;
const _TPLSADMIN_DD_PUTTEMPLATES = "Selecione um conjunto que você queira enviar ou subescrever, antes de enviar o arquivo zip ou tgz incluindo esses arquivos des modelos (.html). Você não precisa verificar a profundidade dos caminhos nos arquivos." ;
const _TPLSADMIN_DD_REMOVEHOOKS = "Isso remove comentários, códigos <q><code>DIV</code></q>, e sequências lógicas inseridas pelas operações acima em cada cache compilado do modelo." ;
const _TPLSADMIN_DT_ENCLOSEBYBORDEREDDIV = "Inserir códigos <q><code>DIV</code></q>" ;
const _TPLSADMIN_DT_ENCLOSEBYCOMMENT = "Inserir comentários" ;
const _TPLSADMIN_DT_GETTEMPLATES = "Descarregar os modelos" ;
const _TPLSADMIN_DT_GETTPLSVARSINFO_DW = "Obter informações das variáveis de modelo como extensões do Adobe Dreamweaver" ;
const _TPLSADMIN_DT_HOOKSAVEVARS = "Inserir sequências lógicas para coletar as variáveis do modelo" ;
const _TPLSADMIN_DT_PUTTEMPLATES = "Enviar os modelos" ;
const _TPLSADMIN_DT_REMOVEHOOKS = "Normalizar compilação dos caches dos modelos" ;
const _TPLSADMIN_ERR_EXTENSION = "Esta extensão não pôde ser reconhecida." ;
const _TPLSADMIN_ERR_INVALIDARCHIVE = "O arquivo não pôde ser descompactado." ;
const _TPLSADMIN_ERR_INVALIDTPLSET = "O nome escolhido para o conjunto de modelos foi considerado inválido pelo sistema." ;
const _TPLSADMIN_ERR_NOTPLSVARSINFO = "Não há arquivos com informações sobre as variáveis do modelo." ;
const _TPLSADMIN_ERR_NOTUPLOADED = "Os arquivos não foram enviados." ;
const _TPLSADMIN_FMT_MSG_ENCLOSEBYBORDEREDDIV = "%d os caches dos modelos estão sendo envoltos por códigos <q><code>DIV</code></q>" ;
const _TPLSADMIN_FMT_MSG_ENCLOSEBYCOMMENT = "%d os caches dos modelos foram delimitados pelos comentários do tplsadmin" ;
const _TPLSADMIN_FMT_MSG_HOOKSAVEVARS = "%d nos caches dos modelos estão sendo inseridas sequências lógicas para coletar as variáveis do modelo" ;
const _TPLSADMIN_FMT_MSG_PUTTEMPLATES = "%d modelos foram importados." ;
const _TPLSADMIN_FMT_MSG_REMOVEHOOKS = "%d os caches de modelo foram normalizados" ;
const _TPLSADMIN_MSG_CLEARCACHE = "Os caches dos modelos foram removidos" ;
const _TPLSADMIN_MSG_CREATECOMPILECACHEFIRST = "Ainda não foi criado qualquer cache de modelos compilados. O primeiro passo para criar os arquivos de cache é tornar o seu portal acessível ao público." ;
const _TPLSADMIN_NUMCAP_COMPILEDCACHES = "Caches de modelos compilados" ;
const _TPLSADMIN_NUMCAP_TPLSVARS = "Arquivos com informações sobre as variáveis do modelo" ;
