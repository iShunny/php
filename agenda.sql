-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 29-Out-2017 às 23:08
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `nome` varchar(40) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `senha1` varchar(15) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `pais` varchar(40) NOT NULL,
  `dia` int(2) NOT NULL,
  `mes` int(2) NOT NULL,
  `ano` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`nome`, `usuario`, `email`, `foto`, `senha1`, `cidade`, `estado`, `pais`, `dia`, `mes`, `ano`) VALUES
('Aatrox', 'Aatrox', 'Aatrox@hotmail.com', 'Aatrox', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Mizeravi', 'AcertÃ´ ', 'mizeravi@miveravis.com', 'null', '123123', 'Miveraveis', 'MizeraviLand', 'MizeraviWorld', 1, 1, 2015),
('Ahri', 'Ahri', 'Ahri@hotmail.com', 'Ahri', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Akali', 'Akali', 'Akali@hotmail.com', 'Akali', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Alistar', 'Alistar', 'Alistar@hotmail.com', 'Alistar', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Amumu', 'Amumu', 'Amumu@hotmail.com', 'Amumu', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Anivia', 'Anivia', 'Anivia@hotmail.com', 'Anivia', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Annie', 'Annie', 'Annie@hotmail.com', 'Annie', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Ashe', 'Ashe', 'Ashe@hotmail.com', 'Ashe', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Azir', 'Azir', 'Azir@hotmail.com', 'Azir', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Bardo', 'Bardo', 'Bardo@hotmail.com', 'Bardo', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Blitz', 'Blitz', 'Blitz@hotmail.com', 'Blitz', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Brand', 'Brand', 'Brand@hotmail.com', 'Brand', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Braum', 'Braum', 'Braum@hotmail.com', 'Braum', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Bruna Amaral', 'Brubs', 'brubs@hotmail.com', 'null', '123123123', 'São Vicente', 'São Paulo', 'Brasil', 3, 12, 1997),
('Caitlyn', 'Caitlyn', 'Caitlyn@hotmail.com', 'Caitlyn', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Cassiopeia', 'Cassiopeia', 'Cassiopeia@hotmail.com', 'Cassiopeia', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Corki', 'Corki', 'Corki@hotmail.com', 'Corki', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Darius', 'Darius', 'Darius@hotmail.com', 'Darius', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Diana', 'Diana', 'Diana@hotmail.com', 'Diana', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Dr. Mundo', 'Dr. Mundo', 'Mundo@hotmail.com', 'Mundo', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Draven', 'Draven', 'Draven@hotmail.com', 'Draven', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Ekko', 'Ekko', 'Ekko@hotmail.com', 'Ekko', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Elise', 'Elise', 'Elise@hotmail.com', 'Elise', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Evelynn', 'Evelynn', 'Evelynn@hotmail.com', 'Evelynn', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Ezreal', 'Ezreal', 'Ezreal@hotmail.com', 'Ezreal', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Fiddlesticks', 'Fiddlesticks', 'Fiddlesticks@hotmail.com', 'Fiddlesticks', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Fiora', 'Fiora', 'Fiora@hotmail.com', 'Fiora', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Fizz', 'Fizz', 'Fizz@hotmail.com', 'Fizz', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Galio', 'Galio', 'Galio@hotmail.com', 'Galio', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Gangplank', 'Gangplank', 'Gangplank@hotmail.com', 'Gangplank', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Garen', 'Garen', 'Garen@hotmail.com', 'Garen', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Gnar', 'Gnar', 'Gnar@hotmail.com', 'Gnar', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Gragas', 'Gragas', 'Gragas@hotmail.com', 'Gragas', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Graves', 'Graves', 'Graves@hotmail.com', 'Graves', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Hecarim', 'Hecarim', 'Hecarim@hotmail.com', 'Hecarim', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Heimerdinger', 'Heimerdinger', 'Heimerdinger@hotmail.com', 'Heimerdinger', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Irelia', 'Irelia', 'Irelia@hotmail.com', 'Irelia', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Janna', 'Janna', 'Janna@hotmail.com', 'Janna', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Jarvan', 'Jarvan', 'Jarvan@hotmail.com', 'Jarvan', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Jax', 'Jax', 'Jax@hotmail.com', 'Jax', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Jayce', 'Jayce', 'Jayce@hotmail.com', 'Jayce', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Jinx', 'Jinx', 'Jinx@hotmail.com', 'Jinx', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Kalista', 'Kalista', 'Kalista@hotmail.com', 'Kalista', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Karma', 'Karma', 'Karma@hotmail.com', 'Karma', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Karthus', 'Karthus', 'Karthus@hotmail.com', 'Karthus', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Kassadin', 'Kassadin', 'Kassadin@hotmail.com', 'Kassadin', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Katarina', 'Katarina', 'Katarina@hotmail.com', 'Katarina', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Kayle', 'Kayle', 'Kayle@hotmail.com', 'Kayle', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Kennen', 'Kennen', 'Kennen@hotmail.com', 'Kennen', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Kindred', 'Kindred', 'Kindred@hotmail.com', 'Kindred', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('LeBlanc', 'LeBlanc', 'LeBlanc@hotmail.com', 'LeBlanc', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Lee Sin', 'Lee Sin', 'Lee@hotmail.com', 'Lee', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Leona', 'Leona', 'Leona@hotmail.com', 'Leona', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Lissandra', 'Lissandra', 'Lissandra@hotmail.com', 'Lissandra', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Lucian', 'Lucian', 'Lucian@hotmail.com', 'Lucian', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Lulu', 'Lulu', 'Lulu@hotmail.com', 'Lulu', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Lux', 'Lux', 'Lux@hotmail.com', 'Lux', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Malphite', 'Malphite', 'Malphite@hotmail.com', 'Malphite', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Malzahar', 'Malzahar', 'Malzahar@hotmail.com', 'Malzahar', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Maokai', 'Maokai', 'Maokai@hotmail.com', 'Maokai', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Master Yi', 'Master Yi', 'Master@hotmail.com', 'Master', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Miss Fortune', 'Miss Fortune', 'Miss@hotmail.com', 'Miss', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Mordekaiser', 'Mordekaiser', 'Mordekaiser@hotmail.com', 'Mordekaiser', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Morgana', 'Morgana', 'Morgana@hotmail.com', 'Morgana', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Nami', 'Nami', 'Nami@hotmail.com', 'Nami', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Nasus', 'Nasus', 'Nasus@hotmail.com', 'Nasus', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Nautilus', 'Nautilus', 'Nautilus@hotmail.com', 'Nautilus', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Nidalee', 'Nidalee', 'Nidalee@hotmail.com', 'Nidalee', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Nocturne', 'Nocturne', 'Nocturne@hotmail.com', 'Nocturne', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Nunu', 'Nunu', 'Nunu@hotmail.com', 'Nunu', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Olaf', 'Olaf', 'Olaf@hotmail.com', 'Olaf', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Orianna', 'Orianna', 'Orianna@hotmail.com', 'Orianna', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Pantheon', 'Pantheon', 'Pantheon@hotmail.com', 'Pantheon', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Poppy', 'Poppy', 'Poppy@hotmail.com', 'Poppy', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Quinn', 'Quinn', 'Quinn@hotmail.com', 'Quinn', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Rammus', 'Rammus', 'Rammus@hotmail.com', 'Rammus', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Renekton', 'Renekton', 'Renekton@hotmail.com', 'Renekton', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Rengar', 'Rengar', 'Rengar@hotmail.com', 'Rengar', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Riven', 'Riven', 'Riven@hotmail.com', 'Riven', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Rumble', 'Rumble', 'Rumble@hotmail.com', 'Rumble', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Ryze', 'Ryze', 'Ryze@hotmail.com', 'Ryze', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Sejuani', 'Sejuani', 'Sejuani@hotmail.com', 'Sejuani', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Shaco', 'Shaco', 'Shaco@hotmail.com', 'Shaco', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Shen', 'Shen', 'Shen@hotmail.com', 'Shen', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Shyvana', 'Shyvana', 'Shyvana@hotmail.com', 'Shyvana', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Singed', 'Singed', 'Singed@hotmail.com', 'Singed', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Sion', 'Sion', 'Sion@hotmail.com', 'Sion', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Sivir', 'Sivir', 'Sivir@hotmail.com', 'Sivir', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Skarner', 'Skarner', 'Skarner@hotmail.com', 'Skarner', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Wilson', 'Sobrancelha', 'sobrancelha@hotmail.com', 'null', 'sobrancelha123', 'São Vicente', 'São Paulo', 'Brasil', 1, 1, 2015),
('Sona', 'Sona', 'Sona@hotmail.com', 'Sona', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Soraka', 'Soraka', 'Soraka@hotmail.com', 'Soraka', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Swain', 'Swain', 'Swain@hotmail.com', 'Swain', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Syndra', 'Syndra', 'Syndra@hotmail.com', 'Syndra', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Tahm Kench', 'Tahm Kench', 'Tahm@hotmail.com', 'Tahm', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Talon', 'Talon', 'Talon@hotmail.com', 'Talon', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Taric', 'Taric', 'Taric@hotmail.com', 'Taric', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Teemo', 'Teemo', 'Teemo@hotmail.com', 'Teemo', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Thresh', 'Thresh', 'Thresh@hotmail.com', 'Thresh', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Tristana', 'Tristana', 'Tristana@hotmail.com', 'Tristana', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Trundle', 'Trundle', 'Trundle@hotmail.com', 'Trundle', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Tryndamere', 'Tryndamere', 'Tryndamere@hotmail.com', 'Tryndamere', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Twisted Fate', 'Twisted Fate', 'Twisted@hotmail.com', 'Twisted', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Twitch', 'Twitch', 'Twitch@hotmail.com', 'Twitch', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Udyr', 'Udyr', 'Udyr@hotmail.com', 'Udyr', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Urgot', 'Urgot', 'Urgot@hotmail.com', 'Urgot', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Varus', 'Varus', 'Varus@hotmail.com', 'Varus', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Vayne', 'Vayne', 'Vayne@hotmail.com', 'Vayne', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Veigar', 'Veigar', 'Veigar@hotmail.com', 'Veigar', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Vi', 'Vi', 'Vi@hotmail.com', 'Vi', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Viktor', 'Viktor', 'Viktor@hotmail.com', 'Viktor', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Vladimir', 'Vladimir', 'Vladimir@hotmail.com', 'Vladimir', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Volibear', 'Volibear', 'Volibear@hotmail.com', 'Volibear', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Warwick', 'Warwick', 'Warwick@hotmail.com', 'Warwick', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Wukong', 'Wukong', 'Wukong@hotmail.com', 'Wukong', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Xerath', 'Xerath', 'Xerath@hotmail.com', 'Xerath', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Xin Zhao', 'Xin Zhao', 'Xin@hotmail.com', 'Xin', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Yasuo', 'Yasuo', 'Yasuo@hotmail.com', 'Yasuo', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Yorick', 'Yorick', 'Yorick@hotmail.com', 'Yorick', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Zac', 'Zac', 'Zac@hotmail.com', 'Zac', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Zed', 'Zed', 'Zed@hotmail.com', 'Zed', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Ziggs', 'Ziggs', 'Ziggs@hotmail.com', 'Ziggs', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Zilean', 'Zilean', 'Zilean@hotmail.com', 'Zilean', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015),
('Zyra', 'Zyra', 'Zyra@hotmail.com', 'Zyra', 'lol123', 'Praia Grande', 'São Paulo', 'Brasil', 5, 3, 2015);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`usuario`,`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
