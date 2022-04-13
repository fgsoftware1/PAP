-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Mar-2022 às 15:17
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `ID_Noticia` int(11) NOT NULL,
  `ID_Tipo_Noticia` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Conteudo` varchar(1000) NOT NULL,
  `Data` varchar(10) NOT NULL,
  `ID_Utilizador` int(11) NOT NULL,
  `Imagem` varchar(75) NOT NULL,
  `Ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`ID_Noticia`, `ID_Tipo_Noticia`, `Titulo`, `Conteudo`, `Data`, `ID_Utilizador`, `Imagem`, `Ativo`) VALUES
(7, 8, 'Quem somos?', 'Considerado o maior e mais conceituado restaurante restaurante em Castro Daire o Spicy foods é um dos restaurantes mais prestigiados no país nos últimos trinta anos. Ocupando um edifício do século XVIII, este restaurante emblemático possui uma das vistas mais deslumbrantes sobre o rio Paiva. A nossa especialidade é truta de escabeche confecionado com trutas do próprio rio Paiva confecionadas pelos mais conceituados cozinheiros da região.', '2022-01-08', 1, 'imagens/quem-somos.jpg', 1),
(8, 9, 'Oktoberfest', 'O Oktoberfest terá lugar no spicy foods dia 8 de outubro. Venha festejar connosco, venha provar algumas comidas alemãs como: bratwurst, pretzels macios e schnitzel além da tradicional cerveja alemã.', '2022-10-02', 1, 'imagens/bratwurst.jpg', 1),
(9, 9, 'dia do pi', '14 de março é dia de Pi porque o número começa com 3.14 ou seja 3(março) e 14(dia). Outro significado pode ser lido pie ou tarte em português, vamos ter no nosso cardápio nossas melhores tartes para celebrar este dia. Além dos incríveis preços de 3.14€ por prato e 31.40€ os menus. ', '2022-03-14', 1, 'imagens/pie.jpg', 1),
(10, 9, 'Dia das mentiras', 'Neste dia haverá uma competição de piadas. Encorajamos a trazer as suas melhores piadas. Quem ganhar a competição terá direito a um jantar grátis.', '2022-04-01', 1, 'imagens/fools.png', 1),
(11, 9, 'corrida solidaria', 'Neste dia haverá uma corrida de 5km, a entrada será de 5€. A equipa do Spicy food também estará presente. O dinheiro será distribuído pelas entidades de caridade do distrito de Viseu. Ao fim será servido o típico arroz de salpicão do Mezio no Spicy food. (será gratuito para participantes)', '2022-05-07', 1, 'imagens/corrida-solidaria.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID_Produto` int(11) NOT NULL,
  `Tipo_Produto` int(11) NOT NULL,
  `Nome_Produto` varchar(75) NOT NULL,
  `Descricao_Produto` varchar(500) NOT NULL,
  `Preco_Produto` decimal(10,0) NOT NULL,
  `Promocao` int(1) NOT NULL,
  `Desconto` int(11) DEFAULT NULL,
  `Imagem` varchar(250) NOT NULL,
  `Ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID_Produto`, `Tipo_Produto`, `Nome_Produto`, `Descricao_Produto`, `Preco_Produto`, `Promocao`, `Desconto`, `Imagem`, `Ativo`) VALUES
(9, 26, 'bolo podre', 'bolo podre', '3', 0, NULL, 'imagens/bolo_podre.jpg', 1),
(10, 23, 'truta de escabeche', 'trutas do rio Paiva', '11', 0, NULL, 'imagens/truta_de_escabeche.jpg', 1),
(11, 22, 'leite achocolatado', 'leite achocolatado', '1', 0, NULL, 'imagens/gal13.jpg', 1),
(14, 23, 'arroz de salpicão', 'arroz de salpicão', '5', 0, NULL, 'imagens/arroz-de-salpicao.jpg', 1),
(25, 24, 'latte machiato', 'latte machiato', '2', 1, 75, 'imagens/latte_machiato.jpg', 1),
(26, 22, 'Promocao1', 'teste', '3', 1, 50, 'imagens/donuts.jpg', 1),
(27, 22, 'Promocao2', 'teste', '12', 1, 15, 'imagens/gal2.jpg', 1),
(28, 22, 'Promocao3', 'teste', '24', 1, 75, 'imagens/gal3.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `ID_Reserva` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `ID_Produto` int(11) NOT NULL,
  `Lugares` int(100) NOT NULL,
  `Data` varchar(10) NOT NULL,
  `Hora` time(5) NOT NULL,
  `Ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_noticia`
--

CREATE TABLE `tipo_noticia` (
  `ID_Tipo_Noticia` int(11) NOT NULL,
  `Tipo_Noticia` varchar(75) NOT NULL,
  `Ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_noticia`
--

INSERT INTO `tipo_noticia` (`ID_Tipo_Noticia`, `Tipo_Noticia`, `Ativo`) VALUES
(8, 'Quem Somos', 1),
(9, 'Eventos', 1),
(10, 'Pratos', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `ID_Tipo_Produto` int(11) NOT NULL,
  `Tipo_Produto` varchar(75) NOT NULL,
  `Ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`ID_Tipo_Produto`, `Tipo_Produto`, `Ativo`) VALUES
(22, 'pequeno almoço', 1),
(23, 'almoço', 1),
(24, 'bebidas', 1),
(25, 'sobremesa', 1),
(26, 'entrada', 1),
(27, 'promocao', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_utilizador`
--

CREATE TABLE `tipo_utilizador` (
  `ID_Tipo_Utilizador` int(11) NOT NULL,
  `Tipo_Utilizador` varchar(75) NOT NULL,
  `Ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_utilizador`
--

INSERT INTO `tipo_utilizador` (`ID_Tipo_Utilizador`, `Tipo_Utilizador`, `Ativo`) VALUES
(1, 'admin', 1),
(2, 'cliente', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `ID_Utilizador` int(11) NOT NULL,
  `Tipo_Utilizador` int(11) NOT NULL,
  `Nome` varchar(75) NOT NULL,
  `Data_Nasc` date NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Ativo` int(1) NOT NULL,
  `Pass` varchar(175) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`ID_Utilizador`, `Tipo_Utilizador`, `Nome`, `Data_Nasc`, `Email`, `Ativo`, `Pass`) VALUES
(1, 1, 'Gabriel Aguiar', '2002-10-13', 'fgygh5804@gmail.com', 1, '$2y$10$r43cmMsXoeXajU6aa2VqxutmbEc0p9FHMg0wTnk.E7H2kuhtg1WYS'),
(20, 2, 'test', '2022-03-28', 'fgsoftwarestudio@gmail.com', 1, '$2y$10$gPITLuD11yb41WIRnsl1iOLL15tlVdfjcIZ4lhI.B6mDA0JauJSfS');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID_Noticia`),
  ADD KEY `fk_tipo_noticia` (`ID_Tipo_Noticia`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID_Produto`),
  ADD KEY `FK_product_type` (`Tipo_Produto`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`ID_Reserva`),
  ADD KEY `FK_user` (`ID_Cliente`),
  ADD KEY `FK_product` (`ID_Produto`);

--
-- Índices para tabela `tipo_noticia`
--
ALTER TABLE `tipo_noticia`
  ADD PRIMARY KEY (`ID_Tipo_Noticia`);

--
-- Índices para tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`ID_Tipo_Produto`);

--
-- Índices para tabela `tipo_utilizador`
--
ALTER TABLE `tipo_utilizador`
  ADD PRIMARY KEY (`ID_Tipo_Utilizador`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`ID_Utilizador`),
  ADD KEY `fk_user_type` (`Tipo_Utilizador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `ID_Noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `tipo_noticia`
--
ALTER TABLE `tipo_noticia`
  MODIFY `ID_Tipo_Noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `ID_Tipo_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tipo_utilizador`
--
ALTER TABLE `tipo_utilizador`
  MODIFY `ID_Tipo_Utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `ID_Utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_tipo_noticia` FOREIGN KEY (`ID_Tipo_Noticia`) REFERENCES `tipo_noticia` (`ID_Tipo_Noticia`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `FK_product_type` FOREIGN KEY (`Tipo_Produto`) REFERENCES `tipo_produto` (`ID_Tipo_Produto`);

--
-- Limitadores para a tabela `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`ID_Produto`) REFERENCES `produtos` (`ID_Produto`),
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`ID_Cliente`) REFERENCES `utilizadores` (`ID_Utilizador`);

--
-- Limitadores para a tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD CONSTRAINT `fk_user_type` FOREIGN KEY (`Tipo_Utilizador`) REFERENCES `tipo_utilizador` (`ID_Tipo_Utilizador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;