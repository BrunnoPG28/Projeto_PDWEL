--rodar TODOS os comandos sql nessa ordem

--SET PASSWORD FOR root@localhost='';
--CREATE DATABASE agenda;
--use agenda;

CREATE TABLE `contatos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL DEFAULT '0',
  `descricao` varchar(100) NOT NULL DEFAULT '0',
  `telefone` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NULL,
  `endereco` varchar(50) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Índices para tabela `tbagenda`
ALTER TABLE `contatos`
  ADD KEY `Index 1` (`id`);

-- AUTO_INCREMENT de tabela `tbagenda`
ALTER TABLE `contatos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
  
--select * from contatos;