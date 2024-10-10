-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Out-2024 às 11:25
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `if_escolar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id_aluno` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `data_nasc` date NOT NULL,
  `senha` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `logradouro` varchar(256) NOT NULL,
  `bairro` varchar(256) NOT NULL,
  `cidade` varchar(256) NOT NULL,
  `num_casa` varchar(100) NOT NULL,
  `uf` varchar(100) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT '0 - Em curso;\r\n1 -Evadido;\r\n2 - Desistente;\r\n3 - Concluído',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `campus`
--

DROP TABLE IF EXISTS `campus`;
CREATE TABLE IF NOT EXISTS `campus` (
  `id_campus` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `abreviacao` varchar(256) DEFAULT NULL COMMENT 'Grupo pessoas - Explicar essa coluna.',
  `status` int DEFAULT NULL COMMENT '0 - Inativo;\r\n1 - Ativo.\r\n',
  `created` datetime DEFAULT NULL,
  `mdified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_campus`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

DROP TABLE IF EXISTS `colaboradores`;
CREATE TABLE IF NOT EXISTS `colaboradores` (
  `id_colaborador` int NOT NULL AUTO_INCREMENT,
  `departamento` int DEFAULT NULL COMMENT '0 - Secretaria;\r\n1 - Tesouraria.',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_colaborador`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int NOT NULL AUTO_INCREMENT,
  `id_campus` int DEFAULT NULL COMMENT 'Todos os grupos: Conferir chave estrangeira!',
  `descricao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Exemplo: Informática',
  `status` int DEFAULT NULL COMMENT '0 - Inativo;\r\n1- Ativo.',
  `modalidade` int NOT NULL COMMENT '0 - Presencial;\r\n1 - EAD.',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

DROP TABLE IF EXISTS `disciplinas`;
CREATE TABLE IF NOT EXISTS `disciplinas` (
  `id_desciplina` int NOT NULL AUTO_INCREMENT,
  `id_mat_curricular` int DEFAULT NULL,
  `nome` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_desciplina`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `financeiro_alunos`
--

DROP TABLE IF EXISTS `financeiro_alunos`;
CREATE TABLE IF NOT EXISTS `financeiro_alunos` (
  `id_fin_alunos` int NOT NULL AUTO_INCREMENT,
  `id_matricula` int NOT NULL,
  `id_pc` int NOT NULL,
  `valor` double NOT NULL,
  `parcela` int NOT NULL,
  `data_venc` datetime NOT NULL,
  `situacao` int NOT NULL COMMENT '0 - em débito;\r\n1 - debitado',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_fin_alunos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `financeiro_escolar`
--

DROP TABLE IF EXISTS `financeiro_escolar`;
CREATE TABLE IF NOT EXISTS `financeiro_escolar` (
  `id_fin_escolar` int NOT NULL AUTO_INCREMENT,
  `id_pc` int NOT NULL,
  `valor` double NOT NULL,
  `data_venc` datetime NOT NULL,
  `situacao` int NOT NULL COMMENT '0 - em débito; \r\n1 - debitado',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_fin_escolar`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
CREATE TABLE IF NOT EXISTS `matriculas` (
  `id_matricula` int NOT NULL AUTO_INCREMENT,
  `id_aluno` int NOT NULL COMMENT 'Todos os grupos: Conferir chave estrangeira!',
  `id_turma` int NOT NULL COMMENT 'Todos os grupos: Conferir chave estrangeira!',
  `status` int DEFAULT NULL COMMENT '0 - Inativo;\r\n1 - Ativo.',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_matricula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matrizes_curriculares`
--

DROP TABLE IF EXISTS `matrizes_curriculares`;
CREATE TABLE IF NOT EXISTS `matrizes_curriculares` (
  `id_mat_curricular` int NOT NULL AUTO_INCREMENT,
  `ppc` varchar(256) NOT NULL COMMENT 'Grupo cursos: Explicar este campo.',
  `ano` date NOT NULL,
  `id_curso` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_mat_curricular`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano_contas`
--

DROP TABLE IF EXISTS `plano_contas`;
CREATE TABLE IF NOT EXISTS `plano_contas` (
  `id_pc` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(256) NOT NULL,
  `tipo_pc` int NOT NULL COMMENT '0 - crédito\r\n1- Débito',
  `status` int NOT NULL COMMENT '0 - Inativo;\r\n1 - Ativo.',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

DROP TABLE IF EXISTS `professores`;
CREATE TABLE IF NOT EXISTS `professores` (
  `id_professor` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `data_nasc` date NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `tipo_professor` int NOT NULL COMMENT '0 - efetivo;\r\n1 - Substituto;\r\n2 - Visitante.',
  `status` int DEFAULT NULL COMMENT '0 - Inativo\r\n1 - Ativo',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_professor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

DROP TABLE IF EXISTS `turmas`;
CREATE TABLE IF NOT EXISTS `turmas` (
  `id_turmas` int NOT NULL AUTO_INCREMENT,
  `id_curso` int NOT NULL COMMENT 'Todos os grupos: Conferir chave estrangeira!',
  `id_disciplina` int NOT NULL COMMENT 'Todos os grupos: Conferir chave estrangeira!',
  `id_professor` int NOT NULL COMMENT 'Professor coordenador',
  `id_mat_curricular` int NOT NULL,
  `ano` date NOT NULL,
  `valor_curso` float NOT NULL,
  `quant_max_alunos` int NOT NULL,
  `período` int DEFAULT NULL COMMENT '1 - Matutino\r\n2 - Vespertino\r\n3 - Noturno\r\n4- Integral ',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id_turmas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
