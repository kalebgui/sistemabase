INSERT INTO `perfil` (`idperfil`, `descricao`) VALUES
(1, 'suporte'),
(2, 'protocolo'),
(3, 'lider comunitario');


INSERT INTO `tb_usuario` (`idusuario`, `login`, `senha`, `idperfil`) VALUES
(1, 'suporte', '202cb962ac59075b964b07152d234b70', 1),
(2, 'protocolo', '202cb962ac59075b964b07152d234b70', 2),
(3, 'lider comunitario', '202cb962ac59075b964b07152d234b70', 3);

-- BUKP 04/10/2023

INSERT INTO `conexaomais`.`tb_usuario` (`login`, `senha`, `tb_perfil_idperfil`) 
VALUES ('Suporte', '202cb962ac59075b964b07152d234b70', '1');
