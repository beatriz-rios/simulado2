CREATE SCHEMA IF NOT EXISTS `animalpet`;
USE `animalpet`;
CREATE TABLE `produtpet` IF NOT EXISTS (
    `idprodutPet`,
    `nome`,
    `codigo`,
    `fabricante`,
    `preço`,
    `validade`,
    `pesoembalagem`,
    `indicacaoespecie`,
    `sabor`,
    `categoria`
);
CREATE TABLE `remedio` IF NOT EXISTS (
        `idremedio`,
        `nome`,
        `validade`,
        `pesoliquido`,
        `indicacaoterapeutica`,
        `instrucoesuso`
);
INSERT INTO `animalpet`.`remedio` (
        `idremedio`,
        `nome`,
        `validade`,
        `pesoliquido`,
        `indicacaoterapeutica`,
        `instrucoesuso`
    )
VALUES ( 
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        ''
    );
INSERT INTO produtpet(
        `idprodutPet`,
        `nome`,
        `codigo`,
        `fabricante`,
        `preço`,
        `validade`,
        `pesoembalagem`,
        `indicacaoespecie`,
        `sabor`,
        `categoria`
    )
VALUES (
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        ''
    );