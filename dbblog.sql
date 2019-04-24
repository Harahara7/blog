-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Mar-2018 às 20:15
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbblog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `id_conteudo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `conteudo` longtext CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `autor` varchar(255) NOT NULL,
  `categoria` varchar(99) NOT NULL,
  `data` varchar(255) NOT NULL,
  `imagem` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id_conteudo`, `titulo`, `conteudo`, `autor`, `categoria`, `data`, `imagem`) VALUES
(8, 'O que é Lorem Ipsum?', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', 'Yusuke', 'Teste', '22/02/2018 - 19:27.', '16578.jpg'),
(14, 'Porque nós o usamos?', 'Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor, ou palavras aleatórias que não parecem nem um pouco convincentes. Se você pretende usar uma passagem de Lorem Ipsum, precisa ter certeza de que não há algo embaraçoso escrito escondido no meio do texto. Todos os geradores de Lorem Ipsum na internet tendem a repetir pedaços predefinidos conforme necessário, fazendo deste o primeiro gerador de Lorem Ipsum autêntico da internet. Ele usa um dicionário com mais de 200 palavras em Latim combinado com um punhado de modelos de estrutura de frases para gerar um Lorem Ipsum com aparência razoável, livre de repetições, inserções de humor, palavras não características, etc.', 'Pedro', 'Teste', '01-03-2018', 'Landscape-Photography-Brisbane.jpg'),
(15, 'De onde ele vem?', 'Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do \"de Finibus Bonorum et Malorum\" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, \"Lorem Ipsum dolor sit amet...\" vem de uma linha na seção 1.10.32.\r\n\r\nO trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de \"de Finibus Bonorum et Malorum\" de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.', 'Carol', 'Teste', '01-03-2018', 'requests-alpaca_2441680k.jpg'),
(16, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet gravida dignissim. Curabitur molestie risus non dolor condimentum finibus. Nam odio mauris, vestibulum et finibus tempor, luctus nec ante. Quisque vehicula elit vel dolor dapibus pharetra. Maecenas nisl est, ullamcorper in risus eget, accumsan vestibulum mauris. Vestibulum felis dolor, malesuada vitae facilisis a, faucibus quis ante. Phasellus suscipit lectus a turpis cursus, eget ullamcorper justo aliquam. Sed molestie porta odio, at varius lorem iaculis at. Duis vitae sodales metus. Aliquam eleifend molestie varius.\r\n\r\nSed et mauris nec massa sodales venenatis at ut massa. Nunc eu facilisis felis, sed pulvinar nulla. Curabitur pulvinar nisi consequat orci rhoncus bibendum. Quisque facilisis nec quam a eleifend. Aliquam venenatis ultricies sapien, ac rhoncus lacus rutrum vel. Praesent molestie odio orci, vitae convallis diam congue at. Nam non sagittis turpis. Praesent efficitur arcu tortor, nec vestibulum purus convallis quis. Nulla elit nulla, blandit quis metus lobortis, egestas fringilla neque. Phasellus gravida nunc a blandit viverra. Mauris venenatis nibh ac sapien dictum laoreet. Ut nulla velit, pellentesque egestas auctor vel, pellentesque eu urna. Sed et orci sollicitudin, euismod nunc vitae, tempor nisl. Curabitur sagittis urna in mauris interdum blandit. Integer eu bibendum augue. Donec nec ex a libero mattis molestie.\r\n\r\nVivamus id mi nec massa maximus venenatis. Donec mollis mauris est, sed vulputate neque tincidunt sed. Nam iaculis urna nec enim vestibulum placerat. Sed ultricies facilisis arcu in tristique. Maecenas bibendum augue ut ante porttitor congue. Aenean lacus tellus, convallis non tincidunt sit amet, volutpat vel ligula. Nulla ut ante suscipit orci elementum consectetur. Fusce a sodales dolor. Integer id interdum neque. Vivamus luctus molestie orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras pharetra enim mauris, sed egestas felis finibus sit amet. Suspendisse placerat pharetra pharetra. Maecenas suscipit et dui id eleifend. Suspendisse mollis tempor ante, non vehicula leo dictum quis. Vestibulum venenatis magna sed volutpat pharetra.\r\n\r\nEtiam nec velit viverra, suscipit urna id, congue odio. Donec ut est in elit scelerisque semper. Quisque nec egestas odio, in facilisis urna. Duis dui justo, tempus eget cursus ut, placerat vel ipsum. Proin mattis non leo vel luctus. Sed ut tellus non lacus mollis maximus. Suspendisse sodales sed dolor ut aliquam. Pellentesque tristique velit vitae lacus tempor efficitur. Donec quis dolor vel nunc semper interdum. Mauris aliquam sapien et ipsum vehicula maximus. Proin bibendum lorem massa, eu ultricies eros aliquet vel.\r\n\r\nDonec varius lectus eros, in tincidunt ligula ornare ut. In elementum velit nec turpis euismod dictum. Vivamus porttitor viverra mauris, ut congue sapien commodo vitae. Nam quis placerat lacus. Vivamus pharetra, quam non blandit euismod, massa ante aliquet nisl, elementum rutrum leo diam vitae turpis. Ut ac purus porta, ornare nisl in, malesuada ante. Sed fermentum magna eget massa pharetra pulvinar. Etiam accumsan vel elit quis fringilla. Quisque turpis lorem, rutrum finibus risus at, malesuada posuere neque. Sed odio ipsum, aliquet at dui in, vestibulum tincidunt lectus. Nunc aliquet lacinia elementum. Duis sed viverra libero. ', 'João', 'Teste', '01-03-2018', '438407-635907149496560185-16x9.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'Admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`id_conteudo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `id_conteudo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
