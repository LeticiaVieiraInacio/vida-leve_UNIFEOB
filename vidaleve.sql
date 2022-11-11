-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.17-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para vidaleve
CREATE DATABASE IF NOT EXISTS `vidaleve` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `vidaleve`;

-- Copiando estrutura para tabela vidaleve.anamnese_geral
CREATE TABLE IF NOT EXISTS `anamnese_geral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL DEFAULT 0,
  `estado_civil` varchar(10) NOT NULL DEFAULT '',
  `cor` varchar(10) NOT NULL DEFAULT '',
  `etnia` varchar(10) NOT NULL DEFAULT '',
  `religiao` varchar(10) NOT NULL DEFAULT '',
  `endereco` varchar(10) NOT NULL DEFAULT '',
  `bairro` varchar(10) NOT NULL DEFAULT '',
  `cidade` varchar(10) NOT NULL DEFAULT '',
  `telefone_residencial` varchar(10) NOT NULL DEFAULT '',
  `telefone_celular` varchar(10) NOT NULL DEFAULT '',
  `escolaridade` varchar(10) NOT NULL DEFAULT '',
  `trabalha_atualmente` varchar(10) NOT NULL DEFAULT '',
  `permite_ativo` varchar(10) NOT NULL DEFAULT '',
  `renda_familiar` varchar(10) NOT NULL DEFAULT '',
  `habitos` varchar(10) NOT NULL DEFAULT '',
  `criado_em` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `FK_anamnese_geral_pacientes` (`id_paciente`),
  CONSTRAINT `FK_anamnese_geral_pacientes` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela vidaleve.anamnese_geral: ~25 rows (aproximadamente)
/*!40000 ALTER TABLE `anamnese_geral` DISABLE KEYS */;
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(1, 1, 'eae', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:02:35');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(2, 1, 'eae', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:03:01');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(3, 1, 'eaea', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:04:15');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(4, 1, 'eaea', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:04:40');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(5, 1, 'eaea', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:04:41');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(6, 1, 'eaeae', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:04:44');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(7, 1, 'eaea', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:05:06');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(8, 1, 'eaea', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:05:28');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(9, 1, 'eaea', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:05:28');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(10, 1, 'eaea', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:05:37');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(11, 1, 'eaxxxxxx', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:06:45');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(12, 1, 'eae', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:07:33');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(13, 1, 'Solteiro', 'Preto', 'Indio', 'Cristão', 'Rua s', 'Bairro tal', 'Cidade tal', '1998219828', '1998219828', 'Analfabeto', 'Nao', 'Sim', '3000', 'comer', '2022-11-10 16:08:22');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(14, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:08:43');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(15, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-10 16:08:43');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(16, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-11 19:10:48');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(17, 1, 'eae', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-11 19:10:50');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(18, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-11 19:10:52');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(19, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-11 19:10:52');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(20, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-11 19:10:52');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(21, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-11 19:11:17');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(22, 1, 'eaea', 'eaeaea', 'eaea', 'eaea', 'eqaea', 'eae', 'aeea', 'eae', 'eaea', 'eae', 'eae', 'aea', 'ea', 'eaqea', '2022-11-11 19:15:24');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(23, 1, 'eaea', 'eaeaea', 'eaea', 'eaea', 'eqaea', 'eae', 'aeea', 'eae', 'eaea', 'eae', 'eae', 'aea', 'ea', 'eaqea', '2022-11-11 19:15:50');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(24, 1, 'eaea', 'eaeaea', 'eaea', 'eaea', 'eqaea', 'eae', 'aeea', 'eae', 'eaea', 'eae', 'eae', 'aea', 'ea', 'eaqea', '2022-11-11 19:16:26');
INSERT INTO `anamnese_geral` (`id`, `id_paciente`, `estado_civil`, `cor`, `etnia`, `religiao`, `endereco`, `bairro`, `cidade`, `telefone_residencial`, `telefone_celular`, `escolaridade`, `trabalha_atualmente`, `permite_ativo`, `renda_familiar`, `habitos`, `criado_em`) VALUES
	(25, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-11 19:16:47');
/*!40000 ALTER TABLE `anamnese_geral` ENABLE KEYS */;

-- Copiando estrutura para tabela vidaleve.consultas
CREATE TABLE IF NOT EXISTS `consultas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `criado_em` datetime NOT NULL DEFAULT current_timestamp(),
  `atualizado_em` datetime NOT NULL DEFAULT current_timestamp(),
  `horario` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_consultas_usuarios` (`id_usuario`),
  KEY `FK_consultas_pacientes` (`id_paciente`),
  CONSTRAINT `FK_consultas_pacientes` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_consultas_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela vidaleve.consultas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `consultas` DISABLE KEYS */;
INSERT INTO `consultas` (`id`, `id_usuario`, `id_paciente`, `criado_em`, `atualizado_em`, `horario`) VALUES
	(1, 1, 1, '2022-10-31 17:43:51', '2022-10-31 17:43:51', '2022-10-31 17:43:51');
/*!40000 ALTER TABLE `consultas` ENABLE KEYS */;

-- Copiando estrutura para procedure vidaleve.criar_consulta
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `criar_consulta`(pid_usuario INT, pid_paciente INT)
BEGIN
	INSERT INTO consultas (id_usuario, id_paciente, horario) VALUEs (pid_usuario, pid_paciente, NOW());
END//
DELIMITER ;

-- Copiando estrutura para tabela vidaleve.evolucao
CREATE TABLE IF NOT EXISTS `evolucao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `alergias` text NOT NULL,
  `historico_familiar` text NOT NULL,
  `comentario` text NOT NULL,
  `criado_em` datetime NOT NULL,
  `atualizado_em` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__pacientes` (`id_paciente`),
  CONSTRAINT `FK__pacientes` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela vidaleve.evolucao: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `evolucao` DISABLE KEYS */;
INSERT INTO `evolucao` (`id`, `id_paciente`, `alergias`, `historico_familiar`, `comentario`, `criado_em`, `atualizado_em`) VALUES
	(1, 1, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `evolucao` ENABLE KEYS */;

-- Copiando estrutura para tabela vidaleve.exames
CREATE TABLE IF NOT EXISTS `exames` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `criado_em` datetime NOT NULL DEFAULT current_timestamp(),
  `atualizado_em` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `FK_exames_usuario` (`id_usuario`),
  KEY `FK_exames_pacientes` (`id_paciente`),
  CONSTRAINT `FK_exames_pacientes` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_exames_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela vidaleve.exames: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `exames` DISABLE KEYS */;
INSERT INTO `exames` (`id`, `id_paciente`, `id_usuario`, `nome`, `criado_em`, `atualizado_em`) VALUES
	(1, 1, 1, 'Exame ', '2022-10-31 18:14:40', '2022-10-31 18:14:40');
/*!40000 ALTER TABLE `exames` ENABLE KEYS */;

-- Copiando estrutura para tabela vidaleve.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `criado_em` datetime NOT NULL,
  `atualizado_em` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela vidaleve.noticias: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`id`, `banner`, `titulo`, `descricao`, `criado_em`, `atualizado_em`) VALUES
	(1, 'https://s2.glbimg.com/GlwMCT8DwkZNMpSDNzTHih3RWO8=/e.glbimg.com/og/ed/f/original/2019/02/20/192914_web.jpg', 'O Sono', 'O sono é amplamente reconhecido como um dos processos essenciais da vida, proporcionando poderosos benefícios na saúde física, mental e até mesmo na mortalidade...', '2022-11-11 17:38:13', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;

-- Copiando estrutura para tabela vidaleve.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` text DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `altura` int(11) NOT NULL DEFAULT 0,
  `peso` int(11) NOT NULL DEFAULT 0,
  `imc` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `criado_em` datetime NOT NULL DEFAULT current_timestamp(),
  `atualizado_em` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela vidaleve.pacientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`id`, `foto`, `nome`, `cpf`, `email`, `altura`, `peso`, `imc`, `idade`, `genero`, `criado_em`, `atualizado_em`) VALUES
	(1, NULL, 'Emanuel Paciente', '', 'emanuel@gmail.com', 0, 0, '', 18, '', '2022-10-28 19:48:20', '2022-10-28 19:48:20');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Copiando estrutura para tabela vidaleve.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `foto` text NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `atualizado_em` datetime NOT NULL DEFAULT current_timestamp(),
  `criado_em` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela vidaleve.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `foto`, `email`, `senha`, `atualizado_em`, `criado_em`) VALUES
	(1, 'Emanuel Médico', '', 'emanuel@gmail.com', '123', '2022-10-28 19:16:12', '2022-10-28 19:16:12');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Copiando estrutura para trigger vidaleve.pacientes_BEFORE_INSERT
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `pacientes_BEFORE_INSERT` BEFORE INSERT ON `pacientes` FOR EACH ROW BEGIN
	UPDATE pacienets SET imc = (peso / (altura * altura));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
