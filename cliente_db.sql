-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 04:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE cliente_db;

USE cliente_db;

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `inativo` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf_cnpj`, `email`, `telefone`, `inativo`) VALUES
(2, 'Gustavo Ferrari', '87456544174', 'ferrarinha@gmail.com', '119521341', 1),
(6, 'Gustavo Rebecchi', '84456245', 'gustavorebecchi@gmail.com', '1194463345', 0),
(7, 'Kelvin', '1236547894', 'kelvinho@gmail.com', '11952367777', 0),
(12, 'lucas', '844533124', 'lucas@hotmail.com', '11950717700', 0),
(13, 'otavio', '2332323494', 'otavio@hotmail.com', '11054839944', 0),
(14, 'murilo sartori', '123123123124', 'muriloasrtori@gmail.com', '11956878822', 0),
(20, 'murilo sartori', '312321312', 'muriloaasartori@gmail.com', '11956878822', 0),
(35, 'Murilo Sartori', '305737813352', 'muriloasartori@gmail.com', '11950717700', 0),
(37, 'murilosarz', '12365478294', 'muriloasartorii@gmail.com', '11350717700', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `foreign_key` int(11) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `sinopse` text NOT NULL,
  `data_registro` date NOT NULL,
  `genero` varchar(20) NOT NULL,
  `publico_alvo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jogos`
--

INSERT INTO `jogos` (`id`, `foreign_key`, `titulo`, `sinopse`, `data_registro`, `genero`, `publico_alvo`) VALUES
(1, 2, 'Counter Strike', 'Jogo de tiro que só velho gosta', '2024-06-03', 'Tiro', '18+'),
(2, 2, 'Valorant', 'Jogo bom pra caramba, só gente braba joga', '2024-06-03', 'Tiro', '18+'),
(3, 6, 'New World', 'MMO- RPG ruim que promete muito e entrega pouco', '2024-06-03', 'MMO-RPG', 'gente tonta'),
(4, 2, 'League of Legends', 'Jogo de fadinha', '2024-06-04', 'fada', 'livre'),
(5, 37, 'Rain World', 'nao sei', '2024-06-04', 'desconhecido', 'pessoas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_cpf_cnpj` (`cpf_cnpj`),
  ADD UNIQUE KEY `UC_email` (`email`);

--
-- Indexes for table `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
