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
  `email` varchar(100) NOT NULL,
  `nome_completo` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `idade` varchar(10) NOT NULL DEFAULT '',
  `genero` varchar(10) NOT NULL DEFAULT '',
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela vidaleve.anamnese_geral: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `anamnese_geral` DISABLE KEYS */;
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

-- Copiando dados para a tabela vidaleve.consultas: ~1 rows (aproximadamente)
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela vidaleve.exames: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `exames` DISABLE KEYS */;
/*!40000 ALTER TABLE `exames` ENABLE KEYS */;

-- Copiando estrutura para tabela vidaleve.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
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
INSERT INTO `pacientes` (`id`, `nome`, `email`, `altura`, `peso`, `imc`, `idade`, `genero`, `criado_em`, `atualizado_em`) VALUES
	(1, 'Emanuel', 'emanuel@gmail.com', 0, 0, '', 18, '', '2022-10-28 19:48:20', '2022-10-28 19:48:20');
INSERT INTO `pacientes` (`id`, `nome`, `email`, `altura`, `peso`, `imc`, `idade`, `genero`, `criado_em`, `atualizado_em`) VALUES
	(2, 'Emanuel', 'emanuel@gmail.com', 0, 0, '', 18, '', '2022-10-28 19:48:20', '2022-10-28 19:48:20');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Copiando estrutura para tabela vidaleve.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `atualizado_em` datetime NOT NULL DEFAULT current_timestamp(),
  `criado_em` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela vidaleve.usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `atualizado_em`, `criado_em`) VALUES
	(1, 'Emanuel da Silva Correa', 'emanuel@gmail.com', '123', '2022-10-28 19:16:12', '2022-10-28 19:16:12');
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `atualizado_em`, `criado_em`) VALUES
	(2, 'Emanuel da Silva Correa', 'emanuel@gmail.com', '123', '2022-10-28 19:16:12', '2022-10-28 19:16:12');
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
