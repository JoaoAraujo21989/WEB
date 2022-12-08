-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Out-2022 às 00:49
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_csbairro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `process_number` int(11) DEFAULT NULL,
  `niss` int(11) DEFAULT NULL,
  `phone_contact` varchar(255) DEFAULT NULL,
  `email_contact` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `parish` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `visibility` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `patient`
--

INSERT INTO `patient` (`id`, `first_name`, `last_name`, `process_number`, `niss`, `phone_contact`, `email_contact`, `district`, `municipality`, `parish`, `address`, `postal_code`, `photo`, `birth_date`, `visibility`) VALUES
(1, 'José António', 'Augusto Pereira', 120120, 333666999, '910000000', NULL, 'Braga', 'Vila Nova de Famalicão', NULL, 'Rua da estrada, Nº 112', NULL, 'p1.png', '1985-06-15', b'1'),
(4, 'Clara João', 'Azevedo Teles', 120120, 333666999, '910000000', NULL, 'Braga', 'Vila Nova de Famalicão', NULL, 'Rua da estrada, Nº 112', NULL, 'p4.png', '1970-12-15', b'1'),
(5, 'João Carlos', 'Pereira', 120120, 333666999, '910000000', NULL, 'Braga', 'Vila Nova de Famalicão', NULL, 'Rua da estrada, Nº 112', NULL, 'p5.png', '1985-06-15', b'1'),
(7, 'Diana Isabel', 'Carmo Araújo', 120120, 333666999, '910000000', NULL, 'Braga', 'Vila Nova de Famalicão', NULL, 'Rua da estrada, Nº 112', NULL, 'p7.png', '1985-06-15', b'1'),
(8, 'Joaquim Carlos', 'Taveira Cardoso', 120120, 333666999, '910000000', NULL, 'Braga', 'Vila Nova de Famalicão', NULL, 'Rua da estrada, Nº 112', NULL, 'p8.png', '1985-06-15', b'1'),
(9, 'Joaquim Pedro', 'Sampaio Araújo', 258963, 52369, '963214698', 'joaquim@mail.com', 'Braga', 'Vila Nova de Famalicão', 'Calendário', 'Rua Nuno Simões', '4760-372', NULL, '1966-05-12', b'0'),
(10, 'Clara Catarina', 'Almeida Antunes', 369852147, 852147, '916456327', 'clara@mail.com', 'Braga', 'Vila Nova de Famalicão', 'Calendário', 'Rua Paz', '4760-476', NULL, '1989-09-05', b'0'),
(11, 'Beatriz Ana', 'Lopes Silva', 6547, 2147483647, '252478654', 'beatriz@mail.com', 'Braga', 'Vila Nova de Famalicão', 'Calendário', 'Rua Maria Bertíla Garcia de Carvalho, N34, 1ºEsq', '4760-365', NULL, '1985-10-08', b'0'),
(12, 'Martim ', 'Fernandes', 26546458, 56654654, '916178524', 'martim@mail.com', 'Braga', 'Barcelos', 'Barcelos', 'Rua dos Três Amieiros', '4750-456', NULL, '1996-08-15', b'0'),
(13, 'Rodrigo ', 'Silva', 14789, 25896317, '', '', '', '', '', '', '4730-372', NULL, '1984-09-15', b'0'),
(14, 'Dinis André', 'Silva', 1596385, 1654662, '255478963', 'dinis@mail.com', 'Lisboa', 'Lisboa', 'Lisboa', 'Arco Escuro', '1100-030', NULL, '2000-08-15', b'0'),
(24, 'Joaquim Pedro', 'Carvalho', 56458618, 658168158, '', 'tiago123@mail.com', '', '', '', '', '', 'p24.png', '1965-05-05', b'1'),
(25, 'Catarina ', 'Pais ', 5, 5, '', '', 'Braga', 'Barcelos', 'Minhotães', 'Travessa da Veiga', '4775-155', 'p25.png', '1990-09-05', b'1'),
(27, 'Beatriz', 'Silva', 854848, 68546181, '256367412', 'beatrizj@mail.com', 'Porto', 'Santo Tirso', 'Areias', 'Rua 1º de Maio', '4780-007', 'p27.png', '2000-04-15', b'1'),
(43, 'Joaquim Pedro', 'Almeida Antunes', 6, 6, '', '', 'Braga', 'Vila Nova de Famalicão', 'Calendário', 'Rua Nuno Simões', '4760-372', NULL, '2000-05-05', b'0'),
(44, 'swegsg', 'dhdhr', 7, 4, '', '', 'Braga', 'Barcelos', '', 'Rua dos Três Amieiros', '4750-456', NULL, '2000-07-05', b'0'),
(45, 'efwegw', 'gdhrth', 6, 8, '9100000', 'joaquim@mail.com', 'Porto', 'Santo Tirso', '', 'Rua 1º de Maio', '4780-007', 'p45.png', '2000-07-07', b'0'),
(46, 'yjktyjkt', 'iyviyuv', 7, 7, '', '', 'Braga', 'Vila Nova de Famalicão', 'Calendário', 'Rua Nuno Simões', '4760-372', 'p46.png', '2000-05-05', b'0'),
(47, 'iuyfgi', 'yvyiuvfg', 9, 7, '', '', 'Porto', 'Santo Tirso', '', 'Rua 1º de Maio', '4780-007', 'p47.png', '2000-06-05', b'0'),
(48, 'Joaquim Pedro', 'Silva', 6446, 464, '', '', '', '', '', '', '', NULL, '2002-07-05', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `parish` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `last_login` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone_contact` varchar(255) DEFAULT NULL,
  `visibility` bit(1) DEFAULT b'1',
  `birth_date` date DEFAULT NULL,
  `usertype_id` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `district`, `municipality`, `parish`, `address`, `postal_code`, `last_login`, `photo`, `phone_contact`, `visibility`, `birth_date`, `usertype_id`) VALUES
(1, 'ana@mail.com', '25f9e794323b453885f5181f1b624d0b', 'Ana Isabel', 'Azevedo Teixeira', 'Braga', 'Vila Nova de Famalicão', 'Calendário', 'Rua Paz', '4760-476', '2022-10-02 19:20:33', 'u1.png', '911222333', b'1', NULL, 1),
(5, 'joao_p_s_araujo@hotmail.com', 'ce9dee656857c205d4f5b4c4954e820a', 'João', 'Pedro', NULL, NULL, NULL, NULL, NULL, '2022-10-02 16:27:49', NULL, NULL, b'1', NULL, 1),
(6, 'clara@mail.com', '6f5e9ca39791a9d6ae127f07cf3527ca', 'Clara', 'João', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'1', NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `visibility` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usertype`
--

INSERT INTO `usertype` (`id`, `name`, `visibility`) VALUES
(1, 'Administrador', b'1'),
(2, 'Colaborador', b'1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `usertype_id` (`usertype_id`);

--
-- Índices para tabela `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertype_id`) REFERENCES `usertype` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
